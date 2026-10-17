<?php /* お知らせの一覧（設定 → 表示設定 の「投稿ページ」に選んだ固定ページで表示） */ get_header(); ?>
<section class="news news--page" aria-labelledby="news-h">
  <div class="wrap">
    <div class="sec-head"><p class="eyebrow">お知らせ</p><h1 id="news-h" class="h2">お知らせの一覧</h1></div>
    <?php if ( have_posts() ) : ?>
      <ul class="news__list">
      <?php while ( have_posts() ) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time><span><?php the_title(); ?></span></a></li>
      <?php endwhile; ?>
      </ul>
      <?php the_posts_pagination( array( 'prev_text' => '前へ', 'next_text' => '次へ' ) ); ?>
    <?php else : ?>
      <p>お知らせはまだありません。</p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
