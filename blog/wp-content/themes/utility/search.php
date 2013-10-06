<?php
  get_header(); ?>
  <div id="twoColContainer">
    <div class="left_Main">
      <div class="k_main">
        <div class="breadcrumb"><?php utility_breadcrumbs(); ?></div>
        <div class="description padding_zero"> <?php
          get_template_part('common', 'search'); ?>
        </div>
      </div>
    </div> <?php
    get_sidebar(); ?>
  </div> <?php
  get_footer();
?>