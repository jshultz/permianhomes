 <?php
	if (have_posts()) {
		while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('k_main'); ?> >
					<h1 class="post-title"><?php the_title(); ?></h1>
					<span>
					  <b>
					    <?php _e('Posted on', 'utility'); ?>
					  </b><?php
					  the_date();
					  echo ' | '; _e('in','utility');
					  echo ' '; the_category(', ');
					  echo ' | '; _e('by','utility');
					  echo ' '; the_author_posts_link(); ?>
					  <?php edit_post_link( 'Edit', '| ' ); ?>
					</span>
  				<div class="description">
  					<?php the_content('', FALSE, ''); ?>
  					<?php wp_link_pages( array( 'before' => '<div class="page-link"> '.__('Pages:','utility'), 'after' => '</div>' ) ); ?>
  				</div> <?php
  				utility_display_tags(); ?>
			</div>
			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . '&larr;' . '</span> %title' ); ?></div>
				<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . '&rarr;' . '</span>' ); ?></div>
			</div> <?php
			comments_template( '', true );
		endwhile;
	}
?>