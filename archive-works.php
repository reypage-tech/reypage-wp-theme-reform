<?php get_header(); ?>
<section class="works archive-works"><div class="wrap">
  <div class="sec-head"><p class="eyebrow">施工事例</p><h1 class="h2">施工事例の一覧</h1></div>
  <?php $i = 0; while ( have_posts() ) : the_post(); get_template_part( 'parts/case', null, array( 'rev' => ( $i++ % 2 === 1 ), 'link' => true ) ); endwhile; the_posts_pagination(); ?>
</div></section>
<?php get_footer(); ?>
