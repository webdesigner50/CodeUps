<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4CX5QLSMZS"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-4CX5QLSMZS');
  </script>
  <?php wp_head(); ?>
</head>

<?php
  $home = esc_url( home_url( '/' ) );
  $campaign = esc_url(home_url('/campaign/'));
  // $license = esc_url(home_url('/campaign_category/license/'));
  // $experience = esc_url(home_url('/campaign_category/experience/'));
  // $diving = esc_url(home_url('/campaign_category/diving/'));
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
      <div class="header layout-header js-header">
        <div class="header__inner">
          <h1 class="header__logo">
          <a href="<?php echo $home ; ?>">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="CodeUps" />
            </a>
          </h1>
          <button class="header__hamburger hamburger js-hamburger u-mobile">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <nav class="header__pc-nav pc-nav u-desktop">
            <ul class="pc-nav__items">
              <li class="pc-nav__item">
                <a href="<?php echo $campaign; ?>">
                  <div class="pc-nav__item-wrap">
                    <p class="pc-nav__item-en">campaign</p>
                    <p class="pc-nav__item-jp">キャンペーン</p>
                  </div>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="<?php echo $about; ?>">
                  <div class="pc-nav__item-wrap">
                    <p class="pc-nav__item-en">about&nbsp;us</p>
                    <p class="pc-nav__item-jp">私たちについて</p>
                  </div>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="<?php echo $information; ?>">
                  <div class="pc-nav__item-wrap">
                    <p class="pc-nav__item-en">information</p>
                    <p class="pc-nav__item-jp">ダイビング情報</p>
                  </div>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="<?php echo $blog; ?>">
                  <div class="pc-nav__item-wrap">
                    <p class="pc-nav__item-en">blog</p>
                    <p class="pc-nav__item-jp">ブログ</p>
                  </div>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="<?php echo $voice; ?>">
                  <div class="pc-nav__item-wrap">
                    <p class="pc-nav__item-en">voice</p>
                    <p class="pc-nav__item-jp">お客様の声</p>
                  </div>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="<?php echo $price; ?>">
                  <div class="pc-nav__item-wrap">
                    <p class="pc-nav__item-en">price</p>
                    <p class="pc-nav__item-jp">料金一覧</p>
                  </div>
                </a>
              </li>
              <li class="pc-nav__item pc-nav__item--faq">
                <a href="<?php echo $faq; ?>">
                  <div class="pc-nav__item-wrap">
                    <p class="pc-nav__item-en">faq</p>
                    <p class="pc-nav__item-jp">よくある質問</p>
                  </div>
                </a>
              </li>
              <li class="pc-nav__item">
                <a href="<?php echo $contact; ?>">
                  <div class="pc-nav__item-wrap">
                    <p class="pc-nav__item-en">contact</p>
                    <p class="pc-nav__item-jp">お問合せ</p>
                  </div>
                </a>
              </li>
            </ul>
          </nav>
          <nav class="header__sp-nav sp-nav js-sp-nav">
            <div class="sp-nav__inner">
              <div class="sp-nav__left">
                <ul class="sp-nav__left-items">
                  <li class="sp-nav__left-item">
                  <a href="<?php echo $campaign; ?>">キャンペーン</a>
                  </li>
                  <li class="sp-nav__left-item">
                  <a href="<?php echo $campaign; ?>/campaign#camp1">ライセンス取得</a>
                  </li>
                  <li class="sp-nav__left-item">
                  <a href="<?php echo $campaign; ?>/campaign#camp2">ファンダイビング</a>
                  </li>
                  <li class="sp-nav__left-item">
                  <a href="<?php echo $campaign; ?>/campaign#camp3">体験ダイビング</a>
                  </li>
                </ul>
                <ul class="sp-nav__left-items">
                  <li class="sp-nav__left-item">
                  <a href="<?php echo $about; ?>">私たちについて</a>
                  </li>
                </ul>
                <ul class="sp-nav__left-items">
                  <li class="sp-nav__left-item">
                  <a href="<?php echo $information; ?>">ダイビング情報</a>
                  </li>
                  <li class="sp-nav__left-item">
                  <a href="<?php echo $information; ?>/information#info1">ライセンス講習</a>
                  </li>
                  <li class="sp-nav__left-item">
                  <a href="<?php echo $information; ?>/information#info2">ファンダイビング</a>
                  </li>
                  <li class="sp-nav__left-item">
                  <a href="<?php echo $information; ?>/information#info3">体験ダイビング</a>
                  </li>
                </ul>
                <ul class="sp-nav__left-items">
                  <li class="sp-nav__left-item">
                  <a href="<?php echo $blog; ?>">ブログ</a>
                  </li>
                </ul>
              </div>
              <div class="sp-nav__right">
                <ul class="sp-nav__right-items">
                  <li class="sp-nav__right-item">
                  <a href="<?php echo $voice; ?>">お客様の声</a>
                  </li>
                </ul>
                <ul class="sp-nav__right-items">
                  <li class="sp-nav__right-item">
                  <a href="<?php echo $price; ?>">料金一覧</a>
                  </li>
                  <li class="sp-nav__right-item">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price1">ライセンス講習</a>
                  </li>
                  <li class="sp-nav__right-item">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price2">ファンダイビング</a>
                  </li>
                  <li class="sp-nav__right-item">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price3">体験ダイビング</a>
                  </li>
                  <li class="sp-nav__right-item">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price4">スペシャルダイビング</a>
                  </li>
                </ul>
                <ul class="sp-nav__right-items">
                  <li class="sp-nav__right-item">
                  <a href="<?php echo $faq; ?>">よくある質問</a>
                  </li>
                </ul>
                <ul class="sp-nav__right-items">
                  <li class="sp-nav__right-item">
                    <a href="<?php echo $policy; ?>">プライバシー<br />ポリシー</a>
                  </li>
                </ul>
                <ul class="sp-nav__right-items">
                  <li class="sp-nav__right-item">
                  <a href="<?php echo $terms; ?>">利用規約</a>
                  </li>
                </ul>
                <ul class="sp-nav__right-items">
                  <li class="sp-nav__right-item">
                  <a href="<?php echo $contact; ?>">お問い合わせ</a>
                  </li>
                </ul>
                <ul class="sp-nav__right-items">
                  <li class="sp-nav__right-item">
                  <a href="<?php echo $sitemap; ?>">サイトマップ</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <main>
