<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Service Page Template
 *
 * Handles to show Service Page Content
 * @since Aabo 1.0
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Services Page Content template.
	get_template_part('page-contents/content', 'service');
endwhile; //end of while
get_footer();?>