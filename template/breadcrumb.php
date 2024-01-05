<div class="breadcrumbs-space <?php echo is_404() ? 'breadcrumbs-space--404' : ''; ?>">
  <div class="inner">
    <div class="breadcrumbs <?php echo is_404() ? 'breadcrumbs--404' : ''; ?>">
      <?php if (function_exists('bcn_display')) : bcn_display(); endif; ?>
    </div>
  </div>
</div>
