<?php get_header(); ?>

<!-- プライバシーポリシー -->
<div class="faq-mv mv">
  <div class="mv__inner">
  <?php get_template_part('template/page-head'); ?>
  </div>
</div>

<!-- ぱんくず -->
<div class="breadcrumb layout-breadcrumb inner">
  <?php get_template_part('template/breadcrumb'); ?>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="privacypolicy layout-privacypolicy">
    <div class="privacypolicy__inner inner">
      <p class="privacypolicy__title">
        <?php the_title(); ?>
      </p>
      <div class="privacypolicy__contents">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>