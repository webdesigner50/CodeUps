<?php
  /*
  Template Name: price
  */
?>

<?php get_header(); ?>

<div class="price-mv mv">
  <div class="mv__inner">
    <!-- トップ画像 -->
    <?php get_template_part('template/page-head'); ?>
  </div>
</div>

<!-- ぱんくず -->
<div class="breadcrumb layout-breadcrumb inner">
  <?php get_template_part('template/breadcrumb'); ?>
</div>

<section class="price layout-price">
  <div class="price__inner inner">
    <ul class="price__list">
      <?php $fields = CFS()->get('price_license'); ?>
      <?php if ($fields) ://test_loop が存在するとき ?>
        <li class="price__menu" id="price1">
          <div class="price__title is-active tab-whale-icon tab-whale-icon--price">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information-whale-img1.png" alt="タイトル画像" />
            <p>ライセンス講習</p>
          </div>
          <div class="price__text">
                <?php foreach ((array)$fields as $field): ?>
                  <dl class="price__dl">
                    <dt class="price__course"><?php echo $field['price_license-course']; ?></dt>
                    <dd class="price__price"> <?php echo $field['price_license-price']; ?> </dd>
                  </dl>
                <?php endforeach; ?>
            </div>
        </li>
      <?php endif; ?>
      <?php $fields = CFS()->get('price_experience'); ?>
      <?php if ($fields) ://test_loop が存在するとき ?>
        <li class="price__menu" id="price2">
          <div class="price__title is-active tab-whale-icon tab-whale-icon--price">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information-whale-img1.png" alt="タイトル画像" />
            <p>体験ダイビング</p>
          </div>
            <div class="price__text">
                <?php foreach ((array)$fields as $field): ?>
                  <dl class="price__dl">
                    <dt class="price__course"><?php echo $field['price_experience-course']; ?></dt>
                    <dd class="price__price"> <?php echo $field['price_experience-price']; ?> </dd>
                  </dl>
                <?php endforeach; ?>
            </div>
        </li>
      <?php endif; ?>
      <?php $fields = CFS()->get('price_fundiving'); ?>
        <?php if ($fields) ://test_loop が存在するとき ?>
          <li class="price__menu" id="price3">
            <div class="price__title is-active tab-whale-icon tab-whale-icon--price">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information-whale-img1.png" alt="タイトル画像" />
              <p>ファンダイビング</p>
            </div>
            <div class="price__text">
                  <?php foreach ((array)$fields as $field): ?>
                    <dl class="price__dl">
                      <dt class="price__course"><?php echo $field['price_fundiving-course']; ?></dt>
                      <dd class="price__price"> <?php echo $field['price_fundiving-price']; ?> </dd>
                    </dl>
                  <?php endforeach; ?>
              </div>
          </li>
      <?php endif; ?>
      <?php $fields = CFS()->get('price_special'); ?>
      <?php if ($fields) ://test_loop が存在するとき ?>
        <li class="price__menu" id="price4">
          <div class="price__title is-active tab-whale-icon tab-whale-icon--price">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information-whale-img1.png" alt="タイトル画像" />
            <p>スペシャルダイビング</p>
          </div>
          <div class="price__text">
                <?php foreach ((array)$fields as $field): ?>
                  <dl class="price__dl">
                    <dt class="price__course"><?php echo $field['price_special-course']; ?></dt>
                    <dd class="price__price"> <?php echo $field['price_special-price']; ?> </dd>
                  </dl>
                <?php endforeach; ?>
            </div>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</section>

<?php get_footer(); ?>