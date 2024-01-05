<?php
  /*
  Template Name: about
  */
?>

<?php get_header(); ?>
<div class="about-mv mv">
  <div class="mv__inner">
    <!-- トップ画像 -->
    <?php get_template_part('template/page-head'); ?>
  </div>
</div>

<!-- ぱんくず -->
<div class="breadcrumb layout-breadcrumb inner">
  <?php get_template_part('template/breadcrumb'); ?>
</div>

<section class="sub-about about-image layout-about">
  <div class="about-image__inner about-image__inner--about inner">
    <div class="about-image__img-wrap">
      <div class="about-image__img-small u-desktop">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-about-img1.jpg" alt="瓦屋根の上にシーサーが乗っている様子" />
      </div>
      <div class="about-image__img-big about-image__img-big--about">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-about-img2.jpg" alt="海中で黄色の魚が泳ぐ様子" />
      </div>
    </div>
    <div class="about-image__content-wrap">
      <h3 class="about-image__content-title">Dive&nbsp;into<br />the&nbsp;Ocean</h3>
      <div class="about-image__content-text-wrap">
        <p class="about-image__content-text">
        海へのダイブは、広がる海の世界への飛び込みを象徴し、深い青さと多彩な生物が魅せる海の美しさを感じ、透明な水と海底の景色を楽しむことができます。<br>深海の神秘を味わいながら、自然の美しさに触れるこの体験は、驚きと感動に満ちた特別な冒険であり、その美しい瞬間に触れることで、心に深い感動と平穏をもたらすでしょう。
        </p>
      </div>
    </div>
  </div>
</section>

<?php
//投稿のIDを取得
$fields = CFS()->get('about_group', get_the_ID());
if ($fields) : ?>
  <section class="about-gallery layout-about-gallery">
    <div class="about-gallery__inner inner">
      <div class="about-gallery__title title">
        <p class="title__sub">gallery</p>
        <h2 class="title__main">フォト</h2>
      </div>
      <div class="about-gallery__content">
        <div class="about-gallery__modal js-modal-window"></div>
          <ul class="about-gallery__image-items">
            <?php $fields = CFS()->get('about_group'); ?>
              <?php
              foreach ((array)$fields as $field): ?>

                <li class="about-gallery__image-item js-modal">
                    <?php
                    // CFSで画像URLを取得する ?>
                    <img src="<?php echo $field['about_photo']; ?>" alt="ギャラリー画像">
                    <?php
                    ?>
                </li>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
