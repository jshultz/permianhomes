<?php
if (have_posts()) {
  while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('k_main'); ?>>
      <h1><?php the_title(); ?></h1>
      <div class="description"><?php the_content(); ?> </div>
      <div class="c_link fleft">
       <?php wp_link_pages( array( 'before' => '<div class="page-link">'. __('Pages:','utility'), 'after' => '</div>' ) ); ?>
       <?php edit_post_link( __('Edit this page','utility') ); ?>
      </div>
    </div> <?php
    comments_template( '', true );
  endwhile;
} ?>