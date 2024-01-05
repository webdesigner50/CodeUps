<?php
  /*
  Template Name: FAQ
  */
?>
<?php get_header(); ?>

<div class="faq-mv mv">
  <div class="mv__inner">
    <!-- トップ画像 -->
    <?php get_template_part('template/page-head'); ?>
  </div>
</div>

<!-- ぱんくず -->
<div class="breadcrumb layout-breadcrumb inner">
  <?php get_template_part('template/breadcrumb'); ?>
</div>

<section class="faq layout-faq">
  <div class="faq__inner inner">
    <?php $fields = CFS()->get('faq_group'); ?>
    <?php if ($fields) : ?>
        <?php foreach ((array)$fields as $field): ?>
        <details class="faq__details details js-details">
            <summary class="details__summary js-details-summary"><span class="details__btn"></span><?php echo $field['faq_q']; ?></summary>
            <div class="details__content js-details-content">
              <p>
              <?php echo $field['faq_a']; ?>
              </p>
            </div>
        </details>
        <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
