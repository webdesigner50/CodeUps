<?php
  /*
  Template Name: top
  */
?>

<?php get_header(); ?>
<?php
  $home = esc_url( home_url( '/' ) );
  $campaign = esc_url(home_url('/campaign'));
  $license = esc_url(home_url('/campaign_category/license/'));
  $experience = esc_url(home_url('/campaign_category/diving/'));
  $diving = esc_url(home_url('/campaign_category/fundiving/'));
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
<div class="top-mv">
  <div class="top-mv loader">
    <div class="loader__line"></div>
    <div class="loader__line"></div>
  </div>
  <div class="top-mv__title loader__text">
    <h2 class="top-mv__main-title">diving</h2>
    <p class="top-mv__sub-title">into&nbsp;the&nbsp;ocean</p>
  </div>
  <div class="top-mv__inner">
    <div class="top-mv__slider swiper js-top-mv-swiper">
      <div class="swiper-wrapper">
        <?php $fields = CFS()->get('top_group'); ?>
        <?php if ($fields) : ?>
          <?php
          //投稿のIDを取得
          $fields = CFS()->get('top_group', get_the_ID());
          foreach ((array)$fields as $field): ?>
              <div class="swiper-slide">
                <picture>
                  <?php
                  // CFSで画像URLを取得する ?>
                  <source srcset="<?php echo $field['top_photo']; ?>" media="(min-width: 768px)" />
                  <img src="<?php echo $field['top_photo']; ?>" alt="トップページのMV">
                  <?php
                  ?>
                </picture>
              </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="top-mv__title">
        <h2 class="top-mv__main-title">diving</h2>
        <p class="top-mv__sub-title">into&nbsp;the&nbsp;ocean</p>
      </div>
    </div>
  </div>
</div>
<section class="top-campaign layout-top-campaign">
  <div class="top-campaign__inner inner">
    <div class="top-campaign__title title">
      <p class="title__sub">Campaign</p>
      <h2 class="title__main">キャンペーン</h2>
    </div>
    <?php
    $args = [
      'post_type' => 'campaign',
      'posts_per_page' => 8
    ];
    $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : ?>
      <div class="top-campaign__slider campaign-cards swiper js-top-campaign-swiper">
        <ul class="campaign-cards__items swiper-wrapper">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="campaign-cards__item campaign-card swiper-slide">
            <div class="campaign-card__group">
              <div class="campaign-card__img-wrap">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="campaign-card__image">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <?php else : ?>
                  <div class="campaign-card__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/no-image.jpg"
                      alt="画像無し">
                  </div>
                <?php endif; ?>
              </div>
              <div class="campaign-card__body">
                <div class="campaign-card__meta">
                  <div class="campaign-card__meta">
                  <?php $term = get_the_terms($post->ID, 'campaign_category');
                    if ($term) : ?>
                      <p class="campaign-card__label"><?php echo $term[0]->name; ?></p>
                    <?php endif; ?>
                  </div>
                  <h3 class="campaign-card__title"><?php the_title(); ?></h3>
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
                  </div>
              </div>
            </div>
          </li>
          <?php endwhile; ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="campaign-cards__item campaign-card swiper-slide">
            <div class="campaign-card__group">
              <div class="campaign-card__img-wrap">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="campaign-card__image">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <?php else : ?>
                  <div class="campaign-card__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/no-image.jpg"
                      alt="画像無し">
                  </div>
                <?php endif; ?>
              </div>
              <div class="campaign-card__body">
                <div class="campaign-card__meta">
                  <div class="campaign-card__meta">
                  <?php $term = get_the_terms($post->ID, 'campaign_category');
                    if ($term) : ?>
                      <p class="campaign-card__label">
                        <?php echo $term[0]->name; ?>
                      </p>
                    <?php endif; ?>
                  </div>
                  <h3 class="campaign-card__title"><?php the_title(); ?></h3>
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
                  </div>
              </div>
            </div>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <?php else: ?>
        <p>記事が見つかりませんでした</p>
      <?php endif; ?>
    </div>
    <div class="swiper-button-prev top-campaign__swiper-button-prev js-top-campaign-swiper-button-prev u-desktop"></div>
    <div class="swiper-button-next top-campaign__swiper-button-next js-top-campaign-swiper-button-next u-desktop"></div>
    <div class="top-campaign__button">
      <a href="<?php echo $campaign; ?>" class="button"><span>view&nbsp;more</span></a>
    </div>
  </div>
</section>
<section class="top-about about-image layout-top-about">
  <div class="about-image__inner about-image__inner--top inner">
    <div class="about-image__title title">
      <p class="title__sub">about&nbsp;us</p>
      <h2 class="title__main">私たちについて</h2>
    </div>
    <div class="about-image__img-wrap">
      <div class="about-image__img-small">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-about-img1.jpg" alt="瓦屋根の上にシーサーが乗っている様子" />
      </div>
      <div class="about-image__img-big">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-about-img2.jpg" alt="海中で黄色の魚が泳ぐ様子" />
      </div>
    </div>
    <div class="about-image__content-wrap about-image__content-wrap--top">
      <h3 class="about-image__content-title about-image__content-title--top">Dive&nbsp;into<br />the&nbsp;Ocean</h3>
      <div class="about-image__content-text-wrap about-image__content-text-wrap--top">
        <p class="about-image__content-text">
        スキューバーダイビングは、普段は見ることのできない海の中の世界を間近で体感できるのが魅力でしょう。さまざまな種類のサンゴや魚が見られ、海の生き物の暮らしを肌で感じられます。<br />また、ウミガメと遭遇する確率も非常に高く、ウミガメと一緒に泳ぐといった神秘的な体験も期待できるでしょう。
        </p>
        <div class="about-image__button">
          <a href="<?php echo $about; ?>" class="button"><span>view&nbsp;more</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="top-information layout-top-information">
  <div class="top-information__inner inner">
    <div class="top-information__title title">
      <p class="title__sub">information</p>
      <h2 class="title__main">ダイビング情報</h2>
    </div>
    <div class="top-information__content-wrap">
      <div class="top-information__img-wrap js-colorbox colorbox">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-information-img.jpg" alt="イソギンチャクの中を黄色の魚たちが泳いでいる様子" />
      </div>
      <div class="top-information__body">
        <h3 class="top-information__title">ライセンス講習</h3>
        <p class="top-information__text">
          当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
        </p>
        <div class="top-information__button">
          <a href="<?php echo $information; ?>" class="button"><span>view&nbsp;more</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
  );
  $the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) : ?>
  <section class="top-blog layout-top-blog">
    <div class="top-blog__bg u-desktop">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-blog-bg-img.jpg" alt="水面をアップで撮った様子" />
    </div>
    <div class="top-blog__inner inner">
      <div class="top-blog__title title">
        <p class="title__sub title__sub--white">blog</p>
        <h2 class="title__main title__main--white">ブログ</h2>
      </div>
        <ul class="top-blog__cards blog-cards">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="blog-cards__item blog-card">
            <a href="<?php the_permalink(); ?>" class="blog-card__link">
              <div class="blog-card__img-wrap">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else : ?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/no-image.jpg" alt="画像無し">
                <?php endif; ?>
              </div>
              <div class="blog-card__body">
                <div class="blog-card__meta">
                  <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
                <h3 class="blog-card__title"><?php echo wp_trim_words(get_the_title(), 15, '…'); ?></h3>
                <p class="blog-card__text">
                  <?php if (get_the_excerpt()) { ?><?php echo wp_trim_words(get_the_excerpt(), 89, '...'); ?><?php } ?>
                </p>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <div class="top-blog__button">
        <a href="<?php echo $blog; ?>" class="button"><span>view&nbsp;more</span></a>
      </div>
    </div>
  </section>
<?php else: ?>
  <p>記事が見つかりませんでした</p>
<?php endif; ?>
<?php
  $args = array(
    'post_type'  => 'voice',
    'posts_per_page' => 2,
    'orderby' => 'noticed_at  DESC'
  );
  $the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()): ?>
  <section class="top-voice layout-top-voice">
    <div class="top-voice__inner inner">
      <div class="top-voice__title title">
        <p class="title__sub">voice</p>
        <h2 class="title__main">お客様の声</h2>
      </div>
        <ul class="top-voice__cards voice-cards">
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="voice-cards__item voice-card">
              <div class="voice-card__title">
                <div class="voice-card__title-wrap">
                  <div class="voice-card__meta">
                  <?php $voice_meta = get_field('voice-meta'); ?>
                  <?php if ($voice_meta): ?>
                    <p class="voice-card__age"><?php echo $voice_meta['voice-age']; ?>(<?php echo $voice_meta['voice-sex']; ?>)</p>
                  <?php endif; ?>
                  <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                    if ($taxonomy_terms && !is_wp_error($taxonomy_terms)): ?>
                      <p class="voice-card__label"><?php echo esc_html($taxonomy_terms[0]->name); ?></p>
                    <?php endif; ?>
                  </div>
                  <p class="voice-card__title"><?php echo wp_trim_words( esc_html(get_the_title()), 22, '…' ); ?></p>
                </div>
                <div class="voice-card__img-wrap js-colorbox colorbox">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/no-image.jpg" alt="画像無し">
                <?php endif; ?>
                </div>
              </div>
              <p class="voice-card__text">
                <?php $voice_text = wp_trim_words(esc_html(get_field('voice-text')), 140, '...'); ?>
                <?php if ($voice_text) { echo $voice_text; } ?>
              </p>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <div class="top-voice__button">
        <a href="<?php echo esc_url($voice); ?>" class="button"><span>view&nbsp;more</span></a>
      </div>
    </div>
  </section>
<?php else: ?>
  <p>記事が見つかりませんでした</p>
<?php endif; ?>
<section class="top-price layout-top-price">
    <div class="top-price__inner inner">
      <div class="top-price__title title">
        <p class="title__sub">price</p>
        <h2 class="title__main">料金一覧</h2>
      </div>
      <div class="top-price__content">
        <div class="top-price__img-wrap js-colorbox colorbox">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-price-pc-img.jpg" media="(min-width: 768px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-price-sp-img.jpg" alt="海の中で泳ぐウミガメを横からアップで撮った様子" />
          </picture>
        </div>
        <div class="top-price__table">
          <ul class="top-price__lists price-lists">
            <?php
            // 主クエリの作成
            $args = array(
            'post_type'  => 'page', // 投稿タイプを指定
            'meta_key'   => '_wp_page_template',
            'meta_value' => 'page-price.php',            );
            $main_query = new WP_Query($args);
              // サブクエリでCFSの条件を追加
            if ($main_query->have_posts()) :
              while ($main_query->have_posts()) { $main_query->the_post(); ?>
                  <?php $fields = CFS()->get('price_license'); ?>
                  <?php if ($fields) : ?>
                    <li class="price-lists__item price-list">
                          <h3 class="price-list__title">ライセンス講習</h3>
                          <dl class="price-list__item">
                            <?php foreach ((array)$fields as $field): ?>
                                <dt class="price__course price__course--top"><?php echo $field['price_license-course']; ?></dt>
                                <dd class="price__price price__price--top"> <?php echo $field['price_license-price']; ?> </dd>
                            <?php endforeach; ?>
                          </dl>
                    </li>
                  <?php endif; ?>
                  <?php $fields = CFS()->get('price_experience'); ?>
                  <?php if ($fields) : ?>
                    <li class="price-lists__item price-list">
                            <h3 class="price-list__title">体験ダイビング</h3>
                            <dl class="price-list__item">
                            <?php foreach ((array)$fields as $field): ?>
                                <dt class="price__course price__course--top"><?php echo $field['price_experience-course']; ?></dt>
                                <dd class="price__price price__price--top"> <?php echo $field['price_experience-price']; ?> </dd>
                            <?php endforeach; ?>
                            </dl>
                    </li>
                  <?php endif; ?>
                  <?php $fields = CFS()->get('price_fundiving'); ?>
                  <?php if ($fields) : ?>
                    <li class="price-lists__item price-list">
                            <h3 class="price-list__title">ファンダイビング</h3>
                            <dl class="price-list__item">
                            <?php foreach ((array)$fields as $field): ?>
                                <dt class="price__course price__course--top"><?php echo $field['price_fundiving-course']; ?></dt>
                                <dd class="price__price price__price--top"> <?php echo $field['price_fundiving-price']; ?> </dd>
                            <?php endforeach; ?>
                            </dl>
                    </li>
                  <?php endif; ?>
                  <?php $fields = CFS()->get('price_special'); ?>
                  <?php if ($fields) : ?>
                    <li class="price-lists__item price-list">
                            <h3 class="price-list__title">スペシャルダイビング</h3>
                            <dl class="price-list__item">
                            <?php foreach ((array)$fields as $field): ?>
                                <dt class="price__course price__course--top"><?php echo $field['price_special-course']; ?></dt>
                                <dd class="price__price price__price--top"> <?php echo $field['price_special-price']; ?> </dd>
                            <?php endforeach; ?>
                            </dl>
                    </li>
                  <?php endif; ?>
                <?php 
                }
              endif; ?>
          </ul>
          <?php
            wp_reset_postdata();  // 主クエリのリセット ?>
        </div>  
      </div>  
    </div>
    <div class="top-price__button">
      <a href="<?php echo $price; ?>" class="button"><span>view&nbsp;more</span></a>
    </div>
</section>

<?php get_footer(); ?>
