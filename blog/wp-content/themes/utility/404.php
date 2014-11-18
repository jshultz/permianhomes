<?php
  get_header(); ?>
  <div id="twoColContainer">
    <div class="left_Main">
			<p>
			 <?php	_e('Apologies, but the page you requested could not be found. Perhaps searching will help.','utility');
				 get_search_form(); ?>
			</p>
    </div> <?php
    get_sidebar(); ?>
  </div> <?php
  get_footer();
?>