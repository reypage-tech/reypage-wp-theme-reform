<?php /* お知らせ1件 */ get_header(); while ( have_posts() ) : the_post(); ?>
<article class="entry">
  <p class="eyebrow">お知らせ</p>
  <h1><?php the_title(); ?></h1>
  <p class="entry__meta"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'Y年n月j日' ) ); ?></time></p>
  <div class="entry__body"><?php the_content(); ?></div>
  <p class="entry__back"><a href="<?php echo esc_url( shiori_news_url() ); ?>">お知らせの一覧へ</a></p>
</article>
<?php endwhile; get_footer(); ?>
