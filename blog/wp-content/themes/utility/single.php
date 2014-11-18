<?php
  get_header(); ?>
  <div id="twoColContainer">
    <div class="left_Main">
      <div class="breadcrumb"><?php utility_breadcrumbs(); ?></div> <?php
      get_template_part( 'common', 'single' ); ?>
    </div> <?php
    get_sidebar(); ?>
  </div> <?php
  get_footer();
?>