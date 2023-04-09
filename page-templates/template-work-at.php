<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Work at Page Template
 *
 * Handles to show Work at Page Content
 * @since Aabo 1.0
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Work at Page Content template.
	get_template_part('page-contents/content', 'work-at');
endwhile; //end of while
get_footer();?>