<?php get_header(); ?>

<div class="infomation-mv mv">
  <div class="mv__inner">
    <picture>
      <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/blogs-mv-pc-img.jpg" media="(min-width: 768px)" />
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/blogs-mv-sp-img.jpg" alt="海底にいる黄色い魚の様子" />
    </picture>
    <div class="mv__title">
      <h2 class="mv__main-title">blog</h2>
    </div>
  </div>
</div>

<div class="breadcrumb layout-breadcrumb inner">
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
</div>

<section class="blog-detail layout-blog-detail">
  <div class="blog-detail__inner inner">
    <div class="blog-detail__contents blog-contents">
      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <div class="blog-detail__main blog-contents-main">
          <div class="blog-contents-main__meta">
            <time class="blog-contents-main__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            <h3 class="blog-contents-main__title"><?php echo wp_trim_words(get_the_title(), 14, '…'); ?></h3>
          </div>
          <div class="blog-contents-main__body">
            <div>
            <?php if (has_post_thumbnail()): ?>
            <div class="blog-detail__image">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>
            </div>
            <?php the_content(); ?>
            </p>
            <div class="blog-contents-main__wp-pagenavi wp-pagenavi wp-pagenavi--detail">
            <?php if (get_previous_post()):?>
              <?php previous_post_link('%link', '<'); ?>
            <?php endif; ?>
            <?php if (get_next_post()):?>
              <?php next_post_link('%link', '>'); ?>
            <?php endif; ?>
          </div>
          </div>
        </div>
      <?php endwhile; else: ?>
        <p>記事が見つかりませんでした</p>
      <?php endif; ?>
    <div class="blog-detail__side blog-contents-side">
        <?php get_sidebar(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
