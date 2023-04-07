<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Quest Audio
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

    <div id="main">
      <div id="primary" class="content-area one-column">
        <div id="content" class="site-content">
          <div class="error-404 not-found">
            <div class="wrap">
            <div class="page-content">
                <h2>404 Not Found</h2>
                <h3>Oops! That page can&rsquo;t be found.</h3>
                <p>It looks like nothing was found at this location.</p>
                <a href="<?php echo home_url(); ?>" class="button">Go to Homepage</a>
            </div><!-- .page-content -->
          </div> 
        </div><!-- .error-404 -->
        </div><!--/#content-->
      </div><!--/#primary--> 
      </div><!--/#main -->


<?php get_footer(); ?>