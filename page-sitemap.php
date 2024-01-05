<?php get_header(); ?>

<?php
  $home = esc_url( home_url( '/' ) );
  $campaign = esc_url(home_url('/campaign'));
  $license = esc_url(home_url('/campaign_category/license/'));
  $fun_diving = esc_url(home_url('/campaign_category/fun-diving/'));
  $experience_diving = esc_url(home_url('/campaign_category/experience-diving/'));
  $campaign = esc_url( home_url( '/campaign/' ) );
  $about = esc_url( home_url( '/about/' ) );
  $information = esc_url( home_url( '/information/' ) );
  $blog = esc_url( home_url( '/blog/' ) );
  $voice = esc_url( home_url( '/voice/' ) );
  $price = esc_url( home_url( '/price/' ) );
  $faq = esc_url( home_url( '/faq/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
  $policy = esc_url( home_url( '/privacypolicy/' ) );
  $terms = esc_url( home_url( '/terms-of-service/' ) );
  $sitemap = esc_url( home_url( '/sitemap/' ) );
?>

<!-- Site MAP -->
<div class="faq-mv mv">
  <div class="mv__inner">
  <?php get_template_part('template/page-head'); ?>
  </div>
</div>

<!-- ぱんくず -->
<div class="breadcrumb layout-breadcrumb inner">
  <?php get_template_part('template/breadcrumb'); ?>
</div>

<section class="sitemap layout-sitemap">
  <div class="sitemap__inner inner">
    <div class="sitemap__footer footer footer--sitemap">
      <nav class="footer__nav footer-nav footer-nav--sitemap">
        <div class="footer-nav__left">
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $campaign; ?>">キャンペーン</a>
            </li>
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $license; ?>">ライセンス取得</a>
            </li>
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $fun_diving; ?>">ファンダイビング</a>
            </li>
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $experience_diving; ?>">体験ダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $about; ?>">私たちについて</a>
            </li>
          </ul>
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $information; ?>">ダイビング情報</a>
            </li>
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo esc_url(home_url('')); ?>/information#info1">ライセンス講習</a>
            </li>
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo esc_url(home_url('')); ?>/information#info3">体験ダイビング</a>
            </li>
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo esc_url(home_url('')); ?>/information#info2">ファンダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $blog; ?>">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="footer-nav__right">
          <ul class="footer-nav__right-items">
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $voice; ?>">お客様の声</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $price; ?>">料金一覧</a>
            </li>
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price1">ライセンス講習</a>
            </li>
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price2">体験ダイビング</a>
            </li>
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price3">ファンダイビング</a>
            </li>
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price4">スペシャルダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $policy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $terms; ?>">利用規約</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__left-item footer-nav__left-item--sitemap">
              <a href="<?php echo $contact; ?>">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</section>

<?php get_footer(); ?>