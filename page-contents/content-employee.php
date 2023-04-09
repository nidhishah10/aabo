        <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Services Content
 *
 * @package WordPress
 * @subpackage Aabo
 * @since Aabo 1.0
 */
?>
    <!-- default banner section start -->

<?php $banner_img = get_field('banner_img');?>
<?php if (isset($banner_img) && !empty($banner_img)): ?>
    <div class="banner-section" style="background-image: url('<?php echo $banner_img ?>');">
    	<?php endif;?>
      <div class="wrap">
          <div class="banner-row">

<?php $banner_title = get_field('banner_title');?>
<?php if (isset($banner_title) && !empty($banner_title)): ?>
              <h1><?php echo $banner_title ?></h1>
               <?php endif;?>
          </div>
      </div>
  </div>
  <!-- default banner section end -->
  <!-- default company-info section start -->

<?php $dienst_banner_img = get_field('dienst_banner_img');?>
<?php if (isset($dienst_banner_img) && !empty($dienst_banner_img)): ?>
  <div class="dienst-banner-section" style="background-image: url('<?php echo $dienst_banner_img ?>');">
  	    	<?php endif;?>
    <div class="dienst-banner-btn">
    	<?php $dienst_banner_title = get_field('dienst_banner_title');?>
<?php if (isset($dienst_banner_title) && !empty($dienst_banner_title)): ?>
      <a href="#" class="button"><?php echo $dienst_banner_title ?></a>
          	<?php endif;?>
    </div>
  </div>
  <!-- default company-info section start -->
    <div id="main">
      <div id="primary" class="content-area one-column">
        <div id="content" class="site-content">
            <div class="title-news-section dienst-info-section">
              <div class="wrap">
              		<?php
$args = array('post_type' => 'employees', 'posts_per_page' => 6, 'order' => 'ASC');
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()): ?>
              <?php while ($the_query->have_posts()): $the_query->the_post();?>
									                  <div class="title-news-content">
									                      <h4><?php the_title();?></h4>
												<p><?php the_content();?></p>
									                  </div>
									                  <?php endwhile;?>
                <?php endif;?>
<?php wp_reset_postdata();?>
              </div>
          </div>
            <div class="home-our-expert-section dienst-our-expert-section" style="background-image: url('images/our-expert-bg.jpg');">
              <div class="wrap">
                  <div class="home-our-expert-row dienst-our-expert-row">
                      <div class="home-our-expert-info">
                          <div class="home-our-expert-img">
                              <figure>
                                  <img src="images/banner-man.png" alt="Man">
                              </figure>
                          </div>
                          <div class="home-our-expert-content">
                              <h3>Hulp of advies nodig? Vraag het onze experts!</h3>
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad </p>
                              <a href="#" class="button">Neem contact op</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        <!-- service our expert section end -->
        </div><!--/#content-->
      </div><!--/#primary-->
	  </div><!--/#main -->
