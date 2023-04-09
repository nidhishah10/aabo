<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Employee Page Template
 *
 * Handles to show employee Page Content
 * @since Aabo
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Employee Page Content template.
	get_template_part('page-contents/content', 'employee');
endwhile; //end of while
get_footer();?>