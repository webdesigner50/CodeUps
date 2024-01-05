<?php get_header(); ?>

<div class="information-mv mv">
  <div class="mv__inner">
    <!-- トップ画像 -->
    <?php get_template_part('template/page-head'); ?>
  </div>
</div>

<!-- ぱんくず -->
<div class="breadcrumb layout-breadcrumb inner">
  <?php get_template_part('template/breadcrumb'); ?>
</div>

<section class="infomation layout-infomation">
  <div class="infomation__inner inner">
    <div class="information__tab" id="info">
      <ul class="information__tab-list">
        <li id="info1" data-tab="info1" class="information__tab-menu tab-whale-icon js-information-tab is-active">
          <span>ライセンス<br class="u-mobile" />講習</span>
        </li>
        <li id="info2" data-tab="info2" class="information__tab-menu tab-whale-icon js-information-tab">
          <span>ファン<br class="u-mobile" />ダイビング</span>
        </li>
        <li id="info3" data-tab="info3" class="information__tab-menu tab-whale-icon js-information-tab">
          <span>体験<br class="u-mobile" />ダイビング</span>
        </li>
      </ul>
      <div class="information__content-group">
        <div class="information__content-box js-information-content">
          <div class="information__content-b">
            <div class="information__meta">
              <h3 class="information__title">ライセンス講習</h3>
              <p class="information__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="information__img-wrap js-colorbox colorbox">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information-img1.jpg" alt="イソギンチャクの中を黄色の魚たちが泳いでいる様子" />
            </div>
          </div>
        </div>
        <div class="information__content-box js-information-content">
          <div class="information__content-b">
            <div class="information__meta">
              <h3 class="information__title">ファンダイビング</h3>
              <p class="information__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="information__img-wrap js-colorbox colorbox">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information-img2.jpg" alt="イソギンチャクの中を黄色の魚たちが泳いでいる様子" />
            </div>
          </div>
        </div>
        <div class="information__content-box js-information-content">
          <div class="information__content-b">
            <div class="information__meta">
              <h3 class="information__title">体験ダイビング</h3>
              <p class="information__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="information__img-wrap js-colorbox colorbox">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information-img3.jpg" alt="イソギンチャクの中を黄色の魚たちが泳いでいる様子" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
