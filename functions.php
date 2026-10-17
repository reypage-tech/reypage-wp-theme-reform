<?php
/* しおり住まい工房（サンプル）テーマ　制作：Reypage */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( array( shiori_fonts_url(), 'editor-style.css' ) );
} );

/* 書体：お客様が書く文章（施工事例・お知らせ）の字は前もって決められないので、
   Google Fonts（OFL）の配信から必要な字だけを読み込む（静的版は使う字だけの woff2 を同梱） */
function shiori_fonts_url() {
	return 'https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@600&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap';
}
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'shiori-fonts', shiori_fonts_url(), array(), null );
	wp_enqueue_style( 'shiori', get_stylesheet_uri(), array( 'shiori-fonts' ), wp_get_theme()->get( 'Version' ) );
	wp_dequeue_style( 'global-styles' );
} );

/* 施工事例の項目（管理画面の入力欄とサイトの表示に共通） */
function shiori_works_fields() {
	return array(
		'works_tag'    => '工事の種類（例：キッチン）',
		'works_build'  => '建物',
		'works_period' => '工期',
		'works_cost'   => '費用',
		'works_area'   => '地域',
	);
}

add_action( 'init', function () {
	register_post_type( 'works', array(
		'label'         => '施工事例',
		'labels'        => array(
			'name' => '施工事例', 'singular_name' => '施工事例', 'menu_name' => '施工事例', 'add_new' => '施工事例を追加', 'add_new_item' => '施工事例を追加',
			'edit_item' => '施工事例を編集', 'new_item' => '新しい施工事例', 'view_item' => '施工事例を表示', 'view_items' => '施工事例の一覧を表示',
			'search_items' => '施工事例を検索', 'not_found' => '施工事例はまだありません', 'not_found_in_trash' => 'ゴミ箱に施工事例はありません',
			'all_items' => '施工事例の一覧', 'archives' => '施工事例の一覧', 'featured_image' => '写真（アイキャッチ画像）', 'set_featured_image' => '写真を選ぶ',
		),
		'public'        => true,
		'has_archive'   => true,
		'rewrite'       => array( 'slug' => 'works' ),
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-admin-home',
		'show_in_rest'  => true,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
	) );
	foreach ( array_keys( shiori_works_fields() ) as $k ) {
		register_post_meta( 'works', $k, array( 'type' => 'string', 'single' => true, 'show_in_rest' => true, 'sanitize_callback' => 'sanitize_text_field', 'auth_callback' => function ( $allowed, $key, $post_id ) { return current_user_can( 'edit_post', $post_id ); } ) );
	}
} );

/* 入力欄（ブロックエディタの下に「施工事例の内容」として出る） */
add_action( 'add_meta_boxes', function () {
	add_meta_box( 'shiori_works', '施工事例の内容（サイトの表に出ます）', function ( $post ) {
		wp_nonce_field( 'shiori_works', 'shiori_works_nonce' );
		echo '<table class="form-table">';
		foreach ( shiori_works_fields() as $k => $label ) {
			printf( '<tr><th><label for="%1$s">%2$s</label></th><td><input type="text" class="regular-text" id="%1$s" name="%1$s" value="%3$s"></td></tr>', esc_attr( $k ), esc_html( $label ), esc_attr( get_post_meta( $post->ID, $k, true ) ) );
		}
		echo '</table><p>写真は右側の「アイキャッチ画像」から1枚選んでください。右側の「抜粋」に書いた2〜3行が、トップと一覧の説明文になります（空なら本文の始めが出ます）。</p>';
	}, 'works', 'normal', 'high' );
} );
add_action( 'save_post_works', function ( $id ) {
	if ( ! isset( $_POST['shiori_works_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['shiori_works_nonce'] ) ), 'shiori_works' ) ) { return; }
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return; }
	if ( ! current_user_can( 'edit_post', $id ) ) { return; }
	foreach ( array_keys( shiori_works_fields() ) as $k ) {
		if ( isset( $_POST[ $k ] ) ) { update_post_meta( $id, $k, sanitize_text_field( wp_unslash( $_POST[ $k ] ) ) ); }
	}
} );

/* 「投稿」を「お知らせ」と表示（お客様が迷わないように） */
add_action( 'admin_menu', function () {
	global $menu, $submenu;
	$menu[5][0] = 'お知らせ';
	if ( isset( $submenu['edit.php'][5] ) ) { $submenu['edit.php'][5][0] = 'お知らせの一覧'; }
	if ( isset( $submenu['edit.php'][10] ) ) { $submenu['edit.php'][10][0] = 'お知らせを書く'; }
	remove_menu_page( 'edit-comments.php' );
} );
add_filter( 'excerpt_more', function () { return '…'; } );
add_filter( 'excerpt_length', function () { return 120; } );
/* 見本なのでコメントは使わない */
add_filter( 'comments_open', '__return_false' );

/* 写真のない事例：本文の最初の「カスタムHTML」ブロック（間取り図など）だけを写真の位置に出す */
function shiori_first_figure( $id ) {
	foreach ( parse_blocks( get_post_field( 'post_content', $id ) ) as $b ) {
		if ( 'core/html' === $b['blockName'] ) { return render_block( $b ); }
	}
	return '';
}

/* 一覧・編集画面の見出しも「お知らせ」に揃える */
add_filter( 'post_type_labels_post', function ( $l ) {
	$l->name = $l->menu_name = $l->all_items = 'お知らせ';
	$l->singular_name = 'お知らせ';
	$l->add_new = $l->add_new_item = 'お知らせを書く';
	$l->edit_item = 'お知らせを編集';
	$l->view_item = $l->view_items = 'お知らせを表示';
	$l->search_items = 'お知らせを検索';
	$l->not_found = 'お知らせはまだありません';
	return $l;
} );
/* お知らせ一覧で使わない列（投稿者・タグ・コメント）を隠す */
add_filter( 'manage_post_posts_columns', function ( $c ) {
	unset( $c['author'], $c['tags'], $c['comments'] );
	return $c;
} );

/* お知らせ一覧のURL（「投稿ページ」が設定されていればそのページ、なければトップ） */
function shiori_news_url() {
	$id = (int) get_option( 'page_for_posts' );
	return $id ? get_permalink( $id ) : home_url( '/' );
}

/* お客様には「編集者」のアカウントを渡す。編集者には 外観・プラグイン・設定・ユーザー がもともと出ないので、
   残る 固定ページ・ツール・コメント も隠し、左メニューを「お知らせ」「施工事例」「メディア」だけにする */
add_action( 'admin_menu', function () {
	if ( current_user_can( 'manage_options' ) ) { return; }
	remove_menu_page( 'edit.php?post_type=page' );
	remove_menu_page( 'tools.php' );
	remove_menu_page( 'edit-comments.php' );
}, 999 );

/* お客様のダッシュボード：使わない枠を外し、「よく使う操作」だけを置く */
add_action( 'wp_dashboard_setup', function () {
	if ( current_user_can( 'manage_options' ) ) { return; }
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );
	wp_add_dashboard_widget( 'shiori_howto', 'よく使う操作', function () {
		printf(
			'<p><a class="button button-primary button-hero" href="%1$s">施工事例を追加する</a></p><p><a class="button button-hero" href="%2$s">お知らせを書く</a></p><p>手順は、お渡しした「更新マニュアル」に画面写真つきで載っています。</p>',
			esc_url( admin_url( 'post-new.php?post_type=works' ) ),
			esc_url( admin_url( 'post-new.php' ) )
		);
	} );
} );
add_action( 'admin_bar_menu', function ( $bar ) {
	if ( ! current_user_can( 'manage_options' ) ) { $bar->remove_node( 'comments' ); }
}, 999 );
