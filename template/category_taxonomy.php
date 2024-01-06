<?php
  $page_name = '';
  $page_category = '';

  // campaignのアーカイブページかつ campaign_category タクソノミーの場合
  if (is_post_type_archive('campaign') || is_tax('campaign_category')) :
    $page_name = 'campaign';
    $page_category = 'campaign_category';
  else :
    // その他のアーカイブページの場合
    $page_name = 'voice';
    $page_category = 'voice_category';
  endif;
?>

<?php
  $term = get_queried_object();
  $term_slug = $term->slug;
  $term_name = $term->name;
?>

<div class="category-taxnomy">
  <ul class="category-taxnomy__body category">
    <li class="category__label">
      <a href="<?php echo esc_url(home_url('/' . $page_name . '/')); ?>" class="category__label-text">ALL</a>
    </li>
    <?php
    $terms = get_terms(
    $page_category,
    array(
      //「説明」に記載されている順番にソート
      'parent' => 0,
      'orderby' => 'description'
    )
    );
    foreach ($terms as $term) : ?>
      <li class="category__label">
        <a href="<?php echo esc_url(get_term_link($term->term_id)); ?>" class="category__label-text
          <?php if ($term_slug === $term->slug) { echo 'current'; } ?>">
          <?php echo $term->name; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
