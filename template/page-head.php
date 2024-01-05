<?php

$page_title = '';
$page_img_sp = '';
$page_img_pc = '';
$alt = '';

// キャンペーン
if (is_post_type_archive('campaign') || is_tax('campaign_category')) :
  $page_title = 'campaign';
  $page_img_sp = '/assets/images/common/campaign-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/campaign-mv-pc-img.jpg';
  $alt = '熱帯魚の写真';

  //アバウト
elseif (is_page('about')) :
  $page_title = 'about us';
  $page_img_sp = '/assets/images/common/about-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/about-mv-pc-img.jpg';
  $alt = '獅子舞の写真';

  //インフォメーション
elseif (is_page('information')) :
  $page_title = 'information';
  $page_img_sp = '/assets/images/common/infomation-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/infomation-mv-pc-img.jpg';
  $alt = 'ダイバーと熱帯魚の写真';

  //ブログ
elseif (is_home() || is_single($post) || is_month()) :
  $page_title = 'blog';
  $page_img_sp = '/assets/images/common/blog-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/blog-mv-pc-img.jpg';
  $alt = '魚群';

  //ヴォイス
elseif (is_post_type_archive('voice') || is_tax('voice_category')) :
  $page_title = 'voice';
  $page_img_sp = '/assets/images/common/voice-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/voice-mv-pc-img.jpg';
  $alt = 'ダイビングスクールの様子の写真';

  //プライス
elseif (is_page('price')) :
  $page_title = 'price';
  $page_img_sp = '/assets/images/common/price-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/price-mv-pc-img.jpg';
  $alt = 'ダイビング中の写真';

  //よくある質問
elseif (is_page('faq')) :
  $page_title = 'FAQ';
  $page_img_sp = '/assets/images/common/faq-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/faq-mv-pc-img.jpg';
  $alt = '浜辺の写真';

  // お問い合わせ
elseif (is_page('contact') || is_page('thanks')) :
  $page_title = 'contact';
  $page_img_sp = '/assets/images/common/contact-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/contact-mv-pc-img.jpg';
  $alt = '波の写真';

  // サイトマップ
elseif (is_page('sitemap')) :
  $page_title = 'site MAP';
  $page_img_sp = '/assets/images/common/sitemap-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/sitemap-mv-pc-img.jpg';
  $alt = '熱帯魚';

  // プライバシー
elseif (is_page('privacypolicy')) :
  $page_title = 'Privacy Policy';
  $page_img_sp = '/assets/images/common/privacypolicy-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/privacypolicy-mv-pc-img.jpg';
  $alt = '熱帯魚';

  // 利用規約
else :
  // その他のアーカイブページの場合
  $page_title = 'Terms of Service';
  $page_img_sp = '/assets/images/common/terms-of-service-mv-sp-img.jpg';
  $page_img_pc = '/assets/images/common/terms-of-service-mv-pc-img.jpg';
  $alt = '熱帯魚';
endif;
?>

<div class="page-head mv js-mv">
  <div class="mv__inner">
    <picture class="page-head__img">
      <!-- 768px以上なら表示 -->
      <source srcset="<?php echo get_template_directory_uri(); ?><?php echo $page_img_pc; ?>" media="(min-width: 768px)">
      <!-- 768px以下なら表示 -->
      <img src="<?php echo get_template_directory_uri(); ?><?php echo $page_img_sp; ?>" alt="<?php echo $alt; ?>">
    </picture>
    <div class="mv__title">
      <h2 class="mv__main-title"><?php echo $page_title; ?></h2>
    </div>
  </div>
</div>
