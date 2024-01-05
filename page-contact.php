<?php get_header(); ?>

<!-- メインビュー -->
<div class="faq-mv mv">
  <div class="mv__inner">
    <?php get_template_part('template/page-head'); ?>
  </div>
</div>

<!-- ぱんくず -->
<div class="breadcrumb layout-breadcrumb inner">
  <?php get_template_part('template/breadcrumb'); ?>
</div>

<!-- お問い合わせページ -->
<section class="contact-form layout-contact-form">
  <div class="contact-form__inner inner">
    <?php echo do_shortcode('[contact-form-7 id="d29ac6f" title="お問い合わせ"]'); ?>
  </div>
</section>

<?php get_footer(); ?>