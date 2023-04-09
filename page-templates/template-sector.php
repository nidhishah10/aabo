<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Sector Page Template
 *
 * Handles to show sector Page Content
 * @since Aabo
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Sector Page Content template.
	get_template_part('page-contents/content', 'sector');
endwhile; //end of while
get_footer();?>