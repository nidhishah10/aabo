<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	Exit;
}

/**
 * The Template Used For Displaying Sector Details page Content
 *
 * @package WordPress
 * @subpackage Aabo
 * @since Aabo 1.0
 */
get_header();?>

    <!-- default banner section start -->
        <?php $banner_img = get_field('banner_img');?>
    <?php if (isset($banner_img) && !empty($banner_img)): ?>
    <div class="banner-section" style="background-image: url('<?php echo $banner_img; ?>');">
        <?php endif;?>
      <div class="wrap">
          <div class="banner-row construction-banner-row">
              <h1><?php the_title();?></h1>
          </div>
      </div>
  </div>
  <!-- default banner section end -->
  <!-- default company-info section start -->
      <?php $dienst_banner_img = get_field('dienst_banner_img');?>
    <?php if (isset($dienst_banner_img) && !empty($dienst_banner_img)): ?>
  <div class="dienst-banner-section" style="background-image: url('<?php echo $dienst_banner_img; ?>');">
    <?php endif;?>
  </div>
  <!-- default company-info section start -->
    <div id="main">
      <div id="primary" class="content-area one-column">
        <div id="content" class="site-content">
            <!-- company agreement section start -->
            <div class="company-agreement-section">
                <div class="wrap">
                    <div class="company-agreement-row">
                    <?php the_content();?>
                    </div>
                    <div class="company-agreement-btn"><a class="button btn-outline" href="<?php echo get_field('agreement_button_url'); ?>" target="_blank" download><?php echo get_field('agreement_button_title'); ?></a></div>
                </div>
            </div>
        <!-- company agreement section end -->
          <!-- construction our expert section start -->
          <?php $expert_bg_img = get_field('expert_bg_img');?>
    <?php if (isset($expert_bg_img) && !empty($expert_bg_img)): ?>
          <div class="dienst-our-expert-section" style="background-image: url('<?php echo $expert_bg_img; ?>');">
            <?php endif;?>
            <div class="wrap">
                <div class="home-our-expert-row dienst-our-expert-row">
                    <div class="home-our-expert-info">
                        <div class="home-our-expert-img">
                        <?php $expert_img = get_field('expert_img');?>
                        <?php if (isset($expert_img) && !empty($expert_img)): ?>
                            <figure>
                                <img src="<?php echo $expert_img['sizes']['footer-service-section']; ?>" alt="Man">
                            </figure>
                        <?php endif;?>
                        </div>
                        <div class="home-our-expert-content">
                            <?php $expert_title = get_field('expert_title');?>
                            <?php if (isset($expert_title) && !empty($expert_title)): ?>
                                <h3><?php echo $expert_title; ?></h3>
                            <?php endif;?>

                                <?php $expert_desc = get_field('expert_desc');?>
                            <?php if (isset($expert_desc) && !empty($expert_desc)): ?>
                                <p><?php echo $expert_desc; ?></p>
                            <?php endif;?>

                                <?php $btn_name = get_field('btn_name');?>
                                <?php $btn_url = get_field('btn_url');?>
                            <?php if (isset($btn_name) && !empty($btn_name)): ?>
                                <a href="<?php echo $btn_url; ?>" class="button"><?php echo $btn_name; ?></a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- construction our expert section end -->
        </div><!--/#content-->
      </div><!--/#primary-->
      </div><!--/#main -->
        <?php get_footer();?>