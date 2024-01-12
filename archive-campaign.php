<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url(home_url('/campaign'));
$license = esc_url(home_url('/campaign_category/license/'));
$fun_diving = esc_url(home_url('/campaign_category/fun-diving/'));
$experience_diving = esc_url(home_url('/campaign_category/experience-diving/'));
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

<?php get_header(); ?>

<div class="campaign-mv mv">
  <div class="mv__inner">
    <!-- トップ画像 -->
    <?php get_template_part('template/page-head'); ?>
  </div>
</div>

<!-- ぱんくず -->
<div class="breadcrumb layout-breadcrumb inner">
  <?php get_template_part('template/breadcrumb'); ?>
</div>

<section class="campaign layout-campaign">
  <div class="campaign__inner inner">

  <!-- カテゴリーリスト -->
  <?php get_template_part('template/category_archive'); ?>

    <ul class="campaign__items campaign__items--sub campaign-cards">
    <!-- ループ -->
    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>

        <li class="campaign-cards__item campaign-card">
          <div class="campaign-card__img-wrap">
            <?php if (has_post_thumbnail()) : ?>
            <!-- アイキャッチ画像指定されている場合 -->
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.jpg;" alt="画像がありません">
          <?php endif; ?>
          </div>
          <div class="campaign-card__body">
            <div class="campaign-card__meta">
              <?php $term = get_the_terms($post->ID, 'campaign_category');
              if ($term) : ?>
                <p class="campaign-card__label">
                  <?php echo $term[0]->name; ?>
                </p>
              <?php endif; ?>
            </div>
            <h3 class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></h3>
            <div class="campaign-card__wrap">
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__price">
                  <?php $campaign1 = get_field('campaign1'); ?>
                  <?php if ($campaign1): ?>
                    <div class="campaign-card__price-before">
                      <span>¥<?php echo $campaign1['campaign-before']; ?></span>
                    </div>
                    <div class="campaign-card__price-after">
                      ¥<?php echo $campaign1['campaign-after']; ?>
                    </div>
                  <?php endif; ?>
              </div>
              <div class="campaign-card__sub-wrap">
                <p class="campaign-card__text2">

                  <?php $campaign3 = get_field('campaign3'); ?>
                  <?php if ($campaign3): ?>
                    <?php echo$campaign3['campaign-text'];?>
                  <?php endif; ?>

                </p>

                <p class="campaign-card__text3">
                  <?php $campaign2 = get_field('campaign2'); ?>
                  <?php if ($campaign2): ?>
                    <?php echo$campaign2['campaign-from-ymd'];?>-
                    <?php echo$campaign2['campaign-to-ymd'];?>
                  <?php endif; ?>
                </p>
                <p class="campaign-card__text4">ご予約・お問い合わせはコチラ</p>
                <div class="campaign-card__button">
                  <a href="<?php echo $contact; ?>" class="button"><span>contact&nbsp;us</span></a>
                </div>
              </div>
            </div>
          </div>
        </li>
      <?php endwhile; else: ?>
        <p>記事が見つかりませんでした</p>
      <?php endif; ?>
    </ul>
    <div class="campaign__wp-pagenavi">
      <?php wp_pagenavi(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
