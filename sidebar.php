<?php
    $campaign = esc_url( home_url( '/campaign/' ) );
    $blog = esc_url( home_url( '/blog/' ) );
    $voice = esc_url( home_url( '/voice/' ) );
    $contact = esc_url( home_url( '/contact/' ) );
?>

<aside class="blog-contents-side layout-blog-contents-side">
    <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
        ];
        $the_view_query = new WP_Query($args);
    ?>
    <?php if ($the_view_query->have_posts()): ?>
        <div class="blog-contents-side__popular blog-cards-popular">
            <div class="blog-cards-popular__inner">
                <div class="blog__title title-whale-icon">
                    <span>人気記事</span>
                </div>
                <ul class="blog-cards-popular__items">
                        <?php while ($the_view_query->have_posts()): $the_view_query->the_post(); ?>
                            <li class="blog-cards-popular__item blog-card-popular">
                                <a href="<?php the_permalink(); ?>" class="blog-card-popular__link">
                                <div class="blog-card-popular__img-wrap">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.jpg" alt="画像なし">
                                    <?php endif; ?>
                                </div>
                                <div class="blog-card-popular__body">
                                    <div class="blog-card-popular__meta">
                                    <time class="blog-card-popular__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    </div>
                                    <h3 class="blog-card-popular__title"><?php echo wp_trim_words(get_the_title(), 14, '…'); ?></h3>
                                </div>
                                </a>
                            </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <?php
        $args = [
            'post_type' => 'voice',
            'posts_per_page' => 1,
            'order' => 'DESC'
        ];
        $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
        <div class="blog__reviews blog-reviews layout-blog-reviews">
            <div class="blog-reviews__inner">
                <div class="blog-reviews__title blog__title title-whale-icon">
                <span>口コミ</span>
                </div>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="blog-reviews__img-wrap">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.jpg" alt="画像なし">
                            <?php endif; ?>
                        </div>
                        <div class="blog-reviews__body">
                            <!-- <div class="blog-reviews__meta"> -->
                            <p class="blog-reviews__age"><?php echo get_the_date('Y.m.d'); ?></p>
                            <p class="blog-reviews__title"><?php echo wp_trim_words(get_the_title(), 22, '…'); ?></p>
                            <!-- </div> -->
                        </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <div class="blog-reviews__button">
                <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="button"><span>view&nbsp;more</span></a>
            </div>
            </div>
        </div>
    <?php else : ?>
        <p>記事が見つかりませんでした</p>
    <?php endif; ?>
    <?php
        $args = [
            'post_type' => 'campaign',
            'posts_per_page' => 2,
            'order' => 'DESC'
        ];
        $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
        <div class="blog__campaign blog-campaign layout-blog-campaign">
            <div class="blog-campaign__inner">
                <div class="blog-campaign__title blog__title title-whale-icon">
                    <span>キャンペーン</span>
                </div>
                <ul class="blog-campaign__items campaign-cards--side">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="campaign-cards__item campaign-cards__item--side campaign-card ">
                            <div class="campaign-card__img-wrap">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.jpg" alt="画像なし">
                                <?php endif; ?>
                            </div>
                            <div class="campaign-card__body campaign-card__body--sub">
                                <h3 class="campaign-card__title campaign-card__title--center"><?php echo wp_trim_words(get_the_title(), 22, '…'); ?></h3>
                                <div class="campaign-card__wrap">
                                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                                    <div class="campaign-card__price">
                                        <?php if (get_field('campaign-before')) : ?>
                                            <?php $campaign_before = floatval(str_replace(',', '', get_field('campaign-before'))); ?>
                                            <div class="campaign-card__price-before campaign-card__price-before--sub">&yen;<?php echo number_format($campaign_before); ?></div>
                                        <?php endif; ?>
                                        <?php if (get_field('campaign-after')) : ?>
                                            <?php $campaign_after = floatval(str_replace(',', '', get_field('campaign-after'))); ?>
                                            <div class="campaign-card__price-after campaign-card__price-after--sub">&yen;<?php echo number_format($campaign_after); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <div class="blog-reviews__button">
                    <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="button"><span>view&nbsp;more</span></a>
                </div>
            </div>
        </div>
    <?php else : ?>
        <p>記事が見つかりませんでした</p>
    <?php endif; ?>
    <div class="blog__archive layout-blog-archive">
        <div class="blog-archive__inner">
            <div class="blog-archive__title blog__title title-whale-icon">
                <span>アーカイブ</span>
            </div>
            <ul  class="blog-archive__lists">
                <?php
                // 現在の年を取得
                $current_year = date('Y');
                // 過去3年分のアーカイブをループで処理
                for ($year = $current_year; $year >= $current_year - 2; $year--) {
                    // この年のアーカイブページへのリンクを取得
                    $archive_link = get_year_link($year);
                    // クエリの設定
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'date_query' => array(
                        array(
                            'year' => $year,
                        ),
                        ),
                    );
                    // クエリを実行
                    $query = new WP_Query($args);
                    // 記事が存在する場合の処理
                    if ($query->have_posts()) :
                        // この年が現在の年かどうかを判定
                        $is_current_year = ($year === $current_year); ?>
                        <li class="blog-archive__list">
                            <p class="blog-archive__year js-side-archive">
                                <span></span><?php echo $year; ?>
                            </p>
                            <ul class="blog-archive__month">
                                <?php
                                    // 各月ごとにアーカイブを処理
                                    for ($month = 12; $month >= 1; $month--) {
                                        // この月のアーカイブページへのリンクを取得
                                        $archive_link = get_month_link($year, $month);
                                        // クエリの設定
                                        $args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'date_query' => array(
                                            array(
                                                'year' => $year,
                                                'month' => $month,
                                            ),
                                            ),
                                        );
                                        // クエリを実行
                                        $query = new WP_Query($args);
                                        // 記事が存在する場合の処理
                                        if ($query->have_posts()) :
                                            // 月のラベルを生成
                                            $month_label = date('n月', mktime(0, 0, 0, $month, 1, $year));// 記事数を取得
                                            $post_count = $query->found_posts; ?>
                                            <li class="blog-archive__month-text">
                                                <a href="<?php echo $archive_link; ?>">
                                                    <span><?php echo $month_label; ?></span>
                                                </a>
                                            </li>
                                        <?php endif;
                                    } 
                                ?>
                            </ul>
                        </li>
                    <?php endif;
                } ?>
            </ul>
        </div>
    </div>
</aside>