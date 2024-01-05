<?php get_header(); ?>

<!-- 利用規約 -->
<div class="faq-mv mv">
  <div class="mv__inner">
  <?php get_template_part('template/page-head'); ?>
    <div class="mv__title">
      <h2 class="mv__main-title">terms of service</h2>
    </div>
  </div>
</div>

<!-- ぱんくず -->
<div class="breadcrumb layout-breadcrumb inner">
  <?php get_template_part('template/breadcrumb'); ?>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="terms-of-service layout-terms-of-service">
    <div class="terms-of-service__inner inner">
      <p class="terms-of-service__title">
        <?php the_title(); ?>
      </p>
      <div class="terms-of-service__contents">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>