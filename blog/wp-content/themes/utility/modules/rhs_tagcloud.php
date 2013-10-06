    <div class="prnt_cont">
      <h1><?php _e('Tag Cloud','utility');?></h1>
      <div class="subcontainer">
        <div class="tag_cloud">
          <?php wp_tag_cloud(array('separator' => '&nbsp;&nbsp;', 'unit' => 'px', 'smallest' => '11', 'largest' => 25)); ?>
        </div>
      </div>
    </div>
