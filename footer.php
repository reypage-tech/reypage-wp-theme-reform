</main>

<nav class="sp-bar" aria-label="ページ内の主な移動先"><a class="sp-bar__tel" href="<?php echo esc_url( home_url( '/#cost' ) ); ?>">費用の目安<span>工事ごとの金額</span></a><a class="sp-bar__form" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">見積りを相談する</a></nav>
<footer class="footer">
  <div class="wrap">
    <p class="footer__logo">しおり住まい工房</p>
    <p class="footer__disclaimer">このサイトはサンプルサイト（自主制作）です。会社名・住所・施工事例・金額・人物は架空のもので、実在のものとは関係ありません。掲載している写真はすべて、Unsplash・Pexels の無料の素材写真を使ったイメージです（海外の住宅や道具を撮ったもので、実在の会社・施工事例とは関係ありません）。</p>
  </div>
</footer>
<script>
document.querySelector('.menu-btn').addEventListener('click',function(){var o=this.getAttribute('aria-expanded')==='true';this.setAttribute('aria-expanded',String(!o));document.body.classList.toggle('nav-open',!o);});
document.querySelectorAll('.nav a').forEach(function(a){a.addEventListener('click',function(){document.body.classList.remove('nav-open');document.querySelector('.menu-btn').setAttribute('aria-expanded','false');});});
</script>
<?php wp_footer(); ?>
</body>
</html>
