<?php /* 予備のひな形（ふだんは front-page / home / single / single-works / archive-works / 404 が使われる） */ get_header(); ?>
<div class="entry">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article>
    <h1><?php the_title(); ?></h1>
    <div class="entry__body"><?php is_singular() ? the_content() : the_excerpt(); ?></div>
  </article>
<?php endwhile; else : ?>
  <h1>ページが見つかりません</h1>
  <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ</a></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>
