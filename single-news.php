    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	Exit;
}

/**
 * The Template Used For Displaying News Details page Content
 *
 * @package WordPress
 * @subpackage Aabo
 * @since Aabo 1.0
 */
get_header();?>


    <!-- default banner section start -->
    <?php $background_img = get_field('background_img');?>
<?php if (isset($background_img) && !empty($background_img)): ?>
    <div class="banner-section" style="background-image: url('<?php echo $background_img ?>');">
        <?php endif;?>
        <div class="wrap">
            <div class="banner-row">

                <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>
    <!-- default banner section end -->
    <!-- default company-info section start -->
    <?php $company_info_img = get_field('company_info_img');?>
<?php if (isset($company_info_img) && !empty($company_info_img)): ?>
    <div class="default-company-info-section title-news" style="background-image: url('<?php echo $company_info_img ?>');">
        <?php endif;?>

    </div>
    <!-- default company-info section start -->

    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                    <div class="title-news-section">
                        <div class="wrap">
                            <?php the_content();?>
                        </div>
                    </div>
            </div><!--/#content-->
        </div><!--/#primary-->
    </div><!--/#main -->
    <?php get_footer();?>