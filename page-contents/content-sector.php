     <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Sector page Content
 *
 * @package WordPress
 * @subpackage Aabo
 * @since Aabo 1.0
 */
?>

 <!-- default banner section start -->
    <?php $banner_img = get_field('banner_img');?>
    <?php if (isset($banner_img) && !empty($banner_img)): ?>
    <div class="banner-section" style="background-image: url('<?php echo $banner_img; ?>');">
    <?php endif;?>
        <div class="wrap">
            <div class="banner-row">
                <?php $banner_title = get_field('banner_title');?>
                <?php if (isset($banner_title) && !empty($banner_title)): ?>
                <h1><?php echo $banner_title; ?></h1>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!-- default banner section end -->
    <!-- default company-info section start -->
    <div class="default-company-info-section sector">
        <div class="wrap">
            <div class="default-company-info-row">
                <?php $company_info = get_field('company_info');?>
                <?php if (isset($company_info) && !empty($company_info)): ?>
                <?php echo $company_info; ?>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!-- default company-info section start -->

    <div id="main">
		<div id="primary" class="content-area one-column">
			<div id="content" class="site-content">
					<div class="sector-section">
                        <div class="wrap">
                            <div class="sector-row">
                                <div class="cols cols4">
                                    <?php $args = array('post_type' => 'sector', 'posts_per_page' => 8, 'order' => 'ASC');
                                        $the_query = new WP_Query($args); ?>
                                            <?php if ($the_query->have_posts()): ?>
                                                <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                                    <div class="col">
					                                   <a href="<?php echo the_permalink(); ?>">
                                                         <div class="sector-bg-info" style="background-image: url('<?php the_field('sectoren_page_box_image'); ?>');">
					                                       <div class="sector-details">
                                                                <div class="sector-heading">
					                                               <h5><?php the_title();?></h5>
                                                                </div>
					                                               <span class="button btn-outline"><?php //echo get_field('read_more_btn'); ?>Lees meer</span>

					                                       </div>
                                                        </div>
					                                   </a>
					                               </div>
						                      <?php endwhile;?>
                                            <?php endif;?>
                                        <?php wp_reset_postdata();?>
                                </div>
                            </div>
                        </div>
                    </div> <!--Sector-section complete-->

        <div class="home-our-expert-section service-our-expert-section">
            <div class="wrap">
                <div class="home-our-expert-row">
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

