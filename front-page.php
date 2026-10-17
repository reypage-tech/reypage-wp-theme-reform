<?php get_header(); ?>

<section class="hero" id="top">
  <figure class="hero__photo">
    <img fetchpriority="high" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/p3-1600.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/p3-800.webp 800w, <?php echo esc_url( get_template_directory_uri() ); ?>/img/p3-1600.webp 1600w" sizes="100vw" width="1600" height="1067" alt="無垢の床と白い壁に直した、大きな窓のあるリビング">
    <figcaption class="hero__cap">写真はイメージです</figcaption>
  </figure>
  <div class="hero__panel">
    <p class="hero__area">千草ヶ丘市・橘ヶ浜町・白梅野市の工務店です</p>
    <h1 class="hero__title"><span class="nw">キッチン1か所から</span><span class="nw">全面改装まで、</span><span class="nw">水まわり・内装の</span><span class="nw">リフォーム</span></h1>
    <p class="hero__lead">自社の大工と職人で施工する、地域の工務店です。現地調査から引き渡しまで、同じ担当者が窓口になります。</p>
    <ul class="hero__points">
      <li>現地調査・お見積りは無料</li>
      <li>工事後1年目に無料点検</li>
    </ul>
    <a class="btn btn--cta btn--lg" href="#contact">見積りを相談する</a>
  </div>
</section>

<section class="menu" aria-labelledby="menu-h">
  <div class="wrap">
    <h2 id="menu-h" class="h2 h2--center">よくご相談いただく工事</h2>
    <ul class="menu__list">
      <li><a href="#c-kitchen"><svg class="menu__ico menu__ico--line" aria-hidden="true" focusable="false" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 24h36"/><path d="M9 24v6a6 6 0 0 0 6 6h18a6 6 0 0 0 6-6v-6"/><path d="M28 24V12a4 4 0 0 1 8 0v2"/><path d="M24 15h8"/><path d="M14 40h20"/></svg><span class="menu__name">キッチン</span><span class="menu__desc">交換・位置の変更</span></a></li>
      <li><a href="#c-bath"><svg class="menu__ico" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M280-600q-33 0-56.5-23.5T200-680q0-33 23.5-56.5T280-760q33 0 56.5 23.5T360-680q0 33-23.5 56.5T280-600ZM200-80q-17 0-28.5-11.5T160-120q-33 0-56.5-23.5T80-200v-240h120v-30q0-38 26-64t64-26q20 0 37 8t31 22l56 62q8 8 15.5 15t16.5 13h274v-326q0-14-10-24t-24-10q-6 0-11.5 2.5T664-790l-50 50q5 17 2 33.5T604-676L494-788q14-9 30-11.5t32 3.5l50-50q16-16 36.5-25t43.5-9q48 0 81 33t33 81v326h80v240q0 33-23.5 56.5T800-120q0 17-11.5 28.5T760-80H200Zm-40-120h640v-160H160v160Zm0 0h640-640Z"/></svg><span class="menu__name">浴室・洗面</span><span class="menu__desc">ユニットバス交換</span></a></li>
      <li><a href="#c-toilet"><svg class="menu__ico menu__ico--line" aria-hidden="true" focusable="false" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 6h14v14H12z"/><path d="M8 20h30c0 7-5 12-12 12h-6c-7 0-12-5-12-12z"/><path d="M18 32l-2 10h14l-2-10"/></svg><span class="menu__name">トイレ</span><span class="menu__desc">便器・内装</span></a></li>
      <li><a href="#c-floor"><svg class="menu__ico" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M440-80q-33 0-56.5-23.5T360-160v-160H240q-33 0-56.5-23.5T160-400v-280q0-66 47-113t113-47h480v440q0 33-23.5 56.5T720-320H600v160q0 33-23.5 56.5T520-80h-80ZM240-560h480v-200h-40v160h-80v-160h-40v80h-80v-80H320q-33 0-56.5 23.5T240-680v120Zm0 160h480v-80H240v80Zm0 0v-80 80Z"/></svg><span class="menu__name">床・壁・天井</span><span class="menu__desc">張り替え・塗り壁</span></a></li>
      <li><a href="#works"><svg class="menu__ico menu__ico--line" aria-hidden="true" focusable="false" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="8" width="36" height="32"/><path d="M20 8v12"/><path d="M20 28v12" stroke-dasharray="3 3"/><path d="M6 24h10"/><path d="M30 40V30h12"/></svg><span class="menu__name">間取りの変更</span><span class="menu__desc">LDKをひと続きに</span></a></li>
      <li><a href="#c-rail"><svg class="menu__ico" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M480-720q-33 0-56.5-23.5T400-800q0-33 23.5-56.5T480-880q33 0 56.5 23.5T560-800q0 33-23.5 56.5T480-720ZM680-80v-200H480q-33 0-56.5-23.5T400-360v-240q0-33 23.5-56.5T480-680q24 0 41.5 10.5T559-636q55 66 99.5 90.5T760-520v80q-53 0-107-23t-93-55v138h120q33 0 56.5 23.5T760-300v220h-80Zm-280 0q-83 0-141.5-58.5T200-280q0-72 45.5-127T360-476v82q-35 14-57.5 44.5T280-280q0 50 35 85t85 35q39 0 69.5-22.5T514-240h82q-14 69-69 114.5T400-80Z"/></svg><span class="menu__name">手すり・段差</span><span class="menu__desc">介護保険の住宅改修</span></a></li>
    </ul>
  </div>
</section>

<?php $q = new WP_Query( array( 'post_type' => 'works', 'posts_per_page' => 2 ) ); if ( $q->have_posts() ) : ?>
<section class="works" id="works" aria-labelledby="works-h">
  <div class="wrap">
    <div class="sec-head">
      <p class="eyebrow">施工事例</p>
      <h2 id="works-h" class="h2">施工事例</h2>
    </div>
    <?php
    $i = 0;
    while ( $q->have_posts() ) : $q->the_post(); get_template_part( 'parts/case', null, array( 'rev' => ( $i++ % 2 === 1 ), 'link' => true ) ); endwhile; wp_reset_postdata();
    ?>
    <p class="works__more"><a class="btn btn--line" href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>">施工事例をすべて見る</a></p>
  </div>
</section>
<?php endif; ?>


<section class="cost" id="cost" aria-labelledby="cost-h">
  <div class="ruler" aria-hidden="true"></div>
  <div class="wrap">
    <div class="sec-head sec-head--photo">
      <div>
        <p class="eyebrow">工事と費用の目安</p>
        <h2 id="cost-h" class="h2">工事費用の目安</h2>
      </div>
      <figure class="shot"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/p6-720.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/p6-720.webp 720w, <?php echo esc_url( get_template_directory_uri() ); ?>/img/p6-1200.webp 1200w" sizes="(max-width: 767px) 92vw, 440px" width="1200" height="800" loading="lazy" alt="床材・石材・タイルなど、素材の見本が重なって置かれている"><figcaption>素材写真（イメージ）：材料の見本</figcaption></figure>
    </div>
    <div class="table-scroll" tabindex="0" role="region" aria-label="工事ごとの工期と費用の目安（横にスクロールできます）">
      <table class="ct">
        <caption class="visually-hidden">工事ごとの工期と費用の目安</caption>
        <thead><tr><th scope="col">工事</th><th scope="col">工期の目安</th><th scope="col">費用の目安（税込）</th><th scope="col">含まれるもの</th></tr></thead>
        <tbody>
          <tr id="c-toilet"><th scope="row">トイレの交換</th><td data-label="工期の目安">1日</td><td data-label="費用の目安（税込）"><b>18万〜35万円</b></td><td data-label="含まれるもの">便器・床と壁紙の張り替え・処分費</td></tr>
          <tr id="c-kitchen"><th scope="row">キッチンの交換</th><td data-label="工期の目安">3〜5日</td><td data-label="費用の目安（税込）"><b>80万〜180万円</b></td><td data-label="含まれるもの">本体・給排水と電気の工事・壁の補修</td></tr>
          <tr id="c-bath"><th scope="row">ユニットバスの交換</th><td data-label="工期の目安">4〜6日</td><td data-label="費用の目安（税込）"><b>90万〜190万円</b></td><td data-label="含まれるもの">本体・解体・給湯の接続・入口の補修</td></tr>
          <tr id="c-floor"><th scope="row">洋室6畳の床と壁紙</th><td data-label="工期の目安">2〜3日</td><td data-label="費用の目安（税込）"><b>15万〜38万円</b></td><td data-label="含まれるもの">家具の移動・下地の調整</td></tr>
          <tr id="c-rail"><th scope="row">手すりの取り付け</th><td data-label="工期の目安">半日</td><td data-label="費用の目安（税込）"><b>2万〜6万円</b></td><td data-label="含まれるもの">1か所あたり・下地の補強</td></tr>
        </tbody>
      </table>
    </div>
    <p class="note">※ 金額は製品の等級と建物の状態で変わります。正式な金額は、現地調査のあとに項目ごとの見積書でお伝えします。</p>
  </div>
</section>

<section class="promise" aria-labelledby="promise-h">
  <div class="promise__photo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/p4-1600.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/p4-800.webp 800w, <?php echo esc_url( get_template_directory_uri() ); ?>/img/p4-1600.webp 1600w" sizes="(max-width: 767px) 100vw, 50vw" width="1600" height="1600" loading="lazy" alt="大工が板にメジャーを当て、鉛筆で印をつけている手元"></div>
  <div class="promise__body">
    <p class="eyebrow eyebrow--light">私たちのやり方</p>
    <h2 id="promise-h" class="h2">自社施工について</h2>
    <ol class="promise__list">
      <li><h3>現場に入るのは自社の大工です</h3><p>下請けに丸ごと任せることはしません。電気と設備は、20年以上一緒に仕事をしている地元の業者が担当します。</p></li>
      <li><h3>見積書は項目ごとに分けます</h3><p>「工事一式」とまとめず、材料・手間・処分費を分けて書きます。比べやすく、削る相談もしやすくなります。</p></li>
      <li><h3>毎日の作業を写真で報告します</h3><p>お仕事で日中ご不在の方にも、その日の作業内容と写真をお送りします。</p></li>
    </ol>
  </div>
</section>

<section class="flow" id="flow" aria-labelledby="flow-h">
  <div class="wrap">
    <div class="sec-head sec-head--photo">
      <div>
        <p class="eyebrow">ご相談の流れ</p>
        <h2 id="flow-h" class="h2">ご相談から工事までの流れ</h2>
        <p>お問い合わせから工事の開始まで、早ければ3週間ほどです。</p>
      </div>
      <figure class="shot"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/p7-720.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/p7-720.webp 720w, <?php echo esc_url( get_template_directory_uri() ); ?>/img/p7-1200.webp 1200w" sizes="(max-width: 767px) 92vw, 440px" width="1200" height="800" loading="lazy" alt="木の板の上に置かれた、のこぎり・手袋・巻き尺・金づち"><figcaption>素材写真（イメージ）：大工道具</figcaption></figure>
    </div>
    <ol class="steps">
      <li><span class="steps__no">01</span><h3>ご相談</h3><p>フォームから。困っていることを一言いただければ十分です。</p></li>
      <li><span class="steps__no">02</span><h3>現地調査</h3><p>担当者が伺い、寸法と配管・下地の状態を確かめます。約1時間。</p></li>
      <li><span class="steps__no">03</span><h3>お見積り・ご提案</h3><p>1週間ほどで、項目ごとの見積書と図面をお持ちします。</p></li>
      <li><span class="steps__no">04</span><h3>ご契約</h3><p>内容に納得いただいてから。急かすような営業はしません。</p></li>
      <li><span class="steps__no">05</span><h3>工事</h3><p>着工前に、ご近所へのあいさつに伺います。</p></li>
      <li><span class="steps__no">06</span><h3>お引き渡し・点検</h3><p>一緒に仕上がりを確かめます。1年目に無料で点検します。</p></li>
    </ol>
  </div>
</section>

<?php $n = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'ignore_sticky_posts' => true ) ); if ( $n->have_posts() ) : /* お知らせが無いときは節ごと出さない */ ?>
<section class="news" aria-labelledby="news-h">
  <div class="wrap">
    <div class="sec-head"><p class="eyebrow">お知らせ</p><h2 id="news-h" class="h2">最近のお知らせ</h2></div>
    <ul class="news__list">
    <?php while ( $n->have_posts() ) : $n->the_post(); ?>
      <li><a href="<?php the_permalink(); ?>"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time><span><?php the_title(); ?></span></a></li>
    <?php endwhile; wp_reset_postdata(); ?>
    </ul>
    <p class="news__more"><a href="<?php echo esc_url( shiori_news_url() ); ?>">お知らせの一覧へ</a></p>
  </div>
</section>
<?php endif; ?>

<section class="slot" aria-labelledby="slot-h">
  <div class="wrap wrap--narrow">
    <div class="slot__box">
      <p class="slot__tag">差し替え枠（この見本には入っていません）</p>
      <h2 id="slot-h" class="slot__title">お客様の声</h2>
      <p>実際の案件では、ここに感想を2〜3件、お名前は頭文字だけで入れます。施工事例も同じで、見本の事例は架空です。実際の制作では、実際に施工した現場の写真に差し替えます。</p>
    </div>
  </div>
</section>

<section class="company" id="company" aria-labelledby="company-h">
  <div class="ruler" aria-hidden="true"></div>
  <div class="wrap company__grid">
    <div>
      <p class="eyebrow">会社案内</p>
      <h2 id="company-h" class="h2">会社概要</h2>
      <p>大工だった先代が始めた、従業員9名の工務店です。</p>
      <p>創業から27年、地域の家の修理と増改築を続けてきました。現場が会社から車で40分以内に収まる範囲だけでお受けしているのは、何かあったときにすぐ駆けつけられるようにするためです。</p>
      <figure class="shot shot--left"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/p8-720.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/p8-720.webp 720w, <?php echo esc_url( get_template_directory_uri() ); ?>/img/p8-1200.webp 1200w" sizes="(max-width: 767px) 92vw, 40vw" width="1200" height="800" loading="lazy" alt="窓のそばに古いコンロと作業台が並ぶ、昔ながらの台所"><figcaption>素材写真（イメージ）：古い台所</figcaption></figure>
    </div>
    <dl class="ctable">
      <div><dt>会社名</dt><dd>株式会社しおり住まい工房</dd></div>
      <div><dt>所在地</dt><dd>千草ヶ丘市 本町4丁目</dd></div>
      <div><dt>創業</dt><dd>1999年</dd></div>
      <div><dt>従業員</dt><dd>9名（うち大工5名）</dd></div>
      <div><dt>許可・資格</dt><dd>建設業許可・建築士事務所登録（見本のため番号は省略）</dd></div>
      <div><dt>営業区域</dt><dd>千草ヶ丘市・橘ヶ浜町・白梅野市</dd></div>
    </dl>
  </div>
</section>

<section class="faq" id="faq" aria-labelledby="faq-h">
  <div class="wrap wrap--narrow">
    <p class="eyebrow">よくある質問</p>
    <h2 id="faq-h" class="h2">よくある質問</h2>
    <details open><summary>見積りだけでもお願いできますか？</summary><p>はい。現地調査とお見積りは無料です。お断りいただいても費用はかかりません。</p></details>
    <details><summary>住みながら工事できますか？</summary><p>ほとんどの工事は住みながらできます。水まわりが使えない日は、事前に日数をお知らせし、必要に応じて仮設のトイレや流しを用意します。</p></details>
    <details><summary>補助金や介護保険は使えますか？</summary><p>手すりや段差の解消は、介護保険の住宅改修の対象になることがあります。申請に必要な書類の作成もお手伝いします。</p></details>
    <details><summary>営業区域の外でも頼めますか？</summary><p>申し訳ありませんが、点検やアフターの対応ができる範囲に限らせていただいています。</p></details>
  </div>
</section>

<section class="contact" id="contact" aria-labelledby="contact-h">
  <div class="wrap contact__grid">
    <div class="contact__intro">
      <h2 id="contact-h" class="h2">見積りのご相談</h2>
      <p>3営業日以内に、担当者からご連絡します。写真があれば、フォームのあとにお送りいただくとお話が早く進みます。</p>
      <p class="contact__tel">お電話でのご説明をご希望の方へ<span class="contact__tel-h">フォームの「困っていること・ご希望」に「電話希望」と、つながりやすい時間帯をお書きください。担当者からおかけします（8:30〜18:00・日曜定休）。</span></p>
      <p class="contact__note">この見本のフォームは送信されません。</p>
    </div>
    <form class="form" action="#" onsubmit="return false">
      <div class="field"><label for="f-name">お名前 <span class="req">必須</span></label><input id="f-name" name="name" type="text" autocomplete="name" required></div>
      <div class="field"><label for="f-mail">メールアドレス <span class="req">必須</span></label><input id="f-mail" name="email" type="email" autocomplete="email" required></div>
      <fieldset class="field"><legend>ご相談の内容</legend>
        <div class="chips">
          <label><input type="checkbox" name="type" value="kitchen"> キッチン</label>
          <label><input type="checkbox" name="type" value="bath"> 浴室・洗面</label>
          <label><input type="checkbox" name="type" value="toilet"> トイレ</label>
          <label><input type="checkbox" name="type" value="interior"> 床・壁</label>
          <label><input type="checkbox" name="type" value="other"> その他</label>
        </div>
      </fieldset>
      <div class="field"><label for="f-msg">困っていること・ご希望</label><textarea id="f-msg" name="message" rows="4"></textarea></div>
      <button class="btn btn--cta btn--lg" type="submit">この内容で相談する</button>
    </form>
  </div>
</section>
<?php get_footer(); ?>
