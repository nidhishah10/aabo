    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	Exit;
}

/**
 * The Template Used For Displaying Employees Details page Content
 *
 * @package WordPress
 * @subpackage Aabo
 * @since Aabo 1.0
 */
get_header();?>    <!-- default banner section start -->
<?php $banner_img = get_field('banner_img');?>
    <?php if (isset($banner_img) && !empty($banner_img)): ?>
    <div class="banner-section" style="background-image: url('<?php echo $banner_img; ?>');">
      <?php endif;?>
      <div class="wrap">
          <div class="banner-row">
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
    <div class="dienst-banner-btn">
      <?php $dienst_banner_title = get_field('dienst_banner_title');?>
    <?php if (isset($dienst_banner_title) && !empty($dienst_banner_title)): ?>
      <a href="#" class="poptrigger button" data-rel="popupname"><?php echo $dienst_banner_title; ?></a>
      <?php endif;?>
    </div>
  </div>
  <!-- default company-info section start -->
    <div id="main">
      <div id="primary" class="content-area one-column">
        <div id="content" class="site-content">
            <div class="title-news-section dienst-info-section">
              <div class="wrap">
                  <?php the_content();?>
              </div>
          </div>
   <!-- employ our expert section start -->

<?php $dienst_banner_img = get_field('dienst_banner_img', 'option');?>
    <?php if (isset($dienst_banner_img) && !empty($dienst_banner_img)): ?>
                    <div class="dienst-our-expert-section" style="background-image: url(<?php echo $dienst_banner_img; ?>);">
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
                    <!-- home our expert section end -->
            </div><!--/#content-->
        </div><!--/#primary-->
    </div><!--/#main -->
    <?php get_footer();?>
        <!-- Quatation pop up form -->
    <div class="popouterbox employ-quote" id="popupname">
        <div class="popup-block">
            <div class="pop-contentbox">
                <a href="#" class="close-dialogbox"><i class="icon-close-btn"></i></a>
                <div class="employ-quote-form-title">
                    <h2>Offerte aanvraag formulier</h2>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="373" title="Request Quote Form"]'); ?>
            </div>
        </div><!--/.popup-block -->
    </div><!--/.popouterbox -->
    <!-- Quatation pop up form -->