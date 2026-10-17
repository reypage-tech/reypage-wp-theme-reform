<?php get_header(); while ( have_posts() ) : the_post(); $f = function ( $k ) { return get_post_meta( get_the_ID(), $k, true ); }; ?>
<article class="entry">
  <?php if ( $f( 'works_tag' ) ) : ?><p class="case__tag"><?php echo esc_html( $f( 'works_tag' ) ); ?></p><?php endif; ?>
  <h1><?php the_title(); ?></h1>
  <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?>
  <dl class="spec"><?php foreach ( shiori_works_fields() as $k => $label ) : if ( 'works_tag' === $k || ! $f( $k ) ) { continue; } ?><div><dt><?php echo esc_html( $label ); ?></dt><dd><?php echo esc_html( $f( $k ) ); ?></dd></div><?php endforeach; ?></dl>
  <div class="entry__body"><?php the_content(); ?></div>
  <p><a class="btn btn--cta" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">見積りを相談する</a></p>
</article>
<?php endwhile; get_footer(); ?>
