<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="水まわりと内装のリフォームを請け負う地域の工務店（ホームページ制作の見本として作った架空の会社です）。現地調査とお見積りは無料。">
<?php /* 検索エンジンに出さない設定は、管理画面「設定 → 表示設定 → 検索エンジンでの表示」で行う（WordPress が自動で noindex を出す）。テーマには直書きしない */ ?>
<meta property="og:title" content="しおり住まい工房（サンプルサイト）">
<meta property="og:description" content="水まわりと内装のリフォーム。現地調査とお見積りは無料。">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/img/og.jpg">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"HomeAndConstructionBusiness","name":"しおり住まい工房（架空）","description":"ホームページ制作の見本として作った架空の会社","areaServed":["千草ヶ丘市","橘ヶ浜町","白梅野市"],"openingHours":"Mo-Sa 08:30-18:00"}</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 16 16%22%3E%3Crect width=%2216%22 height=%2216%22 fill=%22%2324476B%22/%3E%3C/svg%3E">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip" href="#main">本文へ移動</a>
<aside class="sample-bar" aria-label="この見本について">サンプルサイト（自主制作）：会社・人物・住所・金額は架空のものです</aside>

<header class="header">
  <div class="header__inner">
    <a class="logo" href="<?php echo esc_url( home_url( '/#top' ) ); ?>">
      <span class="logo__mark" aria-hidden="true"></span>
      <span class="logo__text"><span class="logo__main">しおり住まい工房</span><span class="logo__sub">水まわり・内装リフォーム</span></span>
    </a>
    <nav class="nav" id="nav" aria-label="メインメニュー">
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/#works' ) ); ?>">施工事例</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#cost' ) ); ?>">工事と費用の目安</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#flow' ) ); ?>">ご相談の流れ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#company' ) ); ?>">会社案内</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">よくある質問</a></li>
      </ul>
    </nav>
    <div class="header__contact">
      <p class="header__tel"><span class="header__tel-no">お見積りは無料</span><span class="header__hours">フォームは24時間受付・3営業日以内にご連絡</span></p>
      <a class="btn btn--cta" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">見積りを相談する</a>
    </div>
    <button class="menu-btn" type="button" aria-expanded="false" aria-controls="nav"><span class="menu-btn__bar" aria-hidden="true"></span><span class="menu-btn__label">メニュー</span></button>
  </div>
</header>

<main id="main">
