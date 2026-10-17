<?php
/* 施工事例1件。写真（アイキャッチ）があれば写真、なければ本文（間取り図など）を左に出す */
$rev  = ! empty( $args['rev'] );
$link = ! empty( $args['link'] );
$f = function ( $k ) { return get_post_meta( get_the_ID(), $k, true ); };
$fig = has_post_thumbnail() ? '' : shiori_first_figure( get_the_ID() ); /* 写真がない事例は、制作側が本文に入れた図（間取り図など）を出す */
$nomedia = ! has_post_thumbnail() && '' === trim( $fig );
?>
<article class="case<?php echo $rev ? ' case--rev' : ''; ?><?php echo $nomedia ? ' case--nomedia' : ''; ?>">
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="case__photo"><?php the_post_thumbnail( 'large', array( 'sizes' => '(max-width: 767px) 100vw, 58vw', 'loading' => false, 'decoding' => 'async' ) ); ?></div>
  <?php elseif ( ! $nomedia ) : ?>
    <div class="case__media"><?php echo $fig; // core/html ブロックの中身（unfiltered_html を持つ人だけが保存できる） ?></div>
  <?php endif; ?>
  <div class="case__body">
    <?php if ( $f( 'works_tag' ) ) : ?><p class="case__tag"><?php echo esc_html( $f( 'works_tag' ) ); ?></p><?php endif; ?>
    <h3 class="h3"><?php if ( $link ) : ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php else : the_title(); endif; ?></h3>
    <dl class="spec">
      <?php foreach ( shiori_works_fields() as $key => $label ) : if ( 'works_tag' === $key || ! $f( $key ) ) { continue; } ?>
        <div><dt><?php echo esc_html( $label ); ?></dt><dd><?php echo esc_html( $f( $key ) ); ?></dd></div>
      <?php endforeach; ?>
    </dl>
    <?php the_excerpt(); ?>
  </div>
</article>
