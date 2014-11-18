<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
  get_header(); ?>
  <div id="w100 twoColContainer">
    <div class="w100 left_Main"> <?php
       if (have_posts()) {
        while (have_posts()) : the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class('w100 k_main'); ?>>
            <h1><?php the_title(); ?></h1>
            <div class="description"><?php the_content(); ?> </div>
            <div class="c_link fleft">
             <?php wp_link_pages( array( 'before' => '<div class="page-link"> '.__('Pages:','utility'), 'after' => '</div>' ) ); ?>
             <?php edit_post_link( __('Edit this page','utility') ); ?>
            </div>
          </div> <?php
          comments_template( '', true );
        endwhile;
      } ?>
    </div>
  </div> <?php
  get_footer();
?>