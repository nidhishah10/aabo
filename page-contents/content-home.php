    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Home page Content
 *
 * @package WordPress
 * @subpackage Aabo
 * @since Aabo 1.0
 */
?>
   <!-- home-banner section start -->
   <?php $banner_img = get_field('banner_img');?>
    <?php if (isset($banner_img) && !empty($banner_img)): ?>
    <div class="home-banner-section" style="background-image: url('<?php echo $banner_img; ?>');">
    <?php endif;?>
        <div class="wrap">
            <div class="home-banner-row">
                <div class="home-banner-info">
                    <div class="banner-img">
                        <div class="banner-top-image">
                            <?php $banner_top_img = get_field('banner_top_img');?>
                            <?php if (isset($banner_top_img) && !empty($banner_top_img)): ?>
                            <figure>
                                <img src="<?php echo $banner_top_img; ?>" alt="Waterdrop">
                            </figure>
                            <?php endif;?>
                        </div>
                        <div class="banner-bottom-img">
                            <?php $banner_bottom_img = get_field('banner_bottom_img');?>
                            <?php if (isset($banner_bottom_img) && !empty($banner_bottom_img)): ?>
                            <figure>
                                <img src="<?php echo $banner_bottom_img; ?>" alt="Man">
                            </figure>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="banner-content">
                    <?php $banner_title = get_field('banner_title');?>
                    <?php if (isset($banner_title) && !empty($banner_title)): ?>
                    <h1><?php echo $banner_title; ?></h1>
                    <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home banner section end -->
    <div id="main">
      <div id="primary" class="content-area one-column">
        <div id="content" class="site-content">
            <!-- home service section start -->
            <div class="home-service-section">
                <div class="wrap">
                    <div class="home-service-content">
                        <div class="section-title">
                            <?php $section_info = get_field('section_info');?>
                            <?php if (isset($section_info) && !empty($section_info)): ?>
                            <?php echo $section_info; ?>
                            <?php endif;?>
                        </div>
                        <?php
                          $select_services = get_field('select_services');
                          if( $select_services ): 
                        ?>
                        <div class="home-service-row">
                            <div class="cols cols3">
                                <?php

                                 foreach ($select_services as $value) { ?>

                                <div class="col">
                                    <a href="<?php echo $permalink = get_permalink( $value->ID ); ?>" class="home-service-info">
                                        <?php $icon = get_field('icon',$value->ID); ?>
										<?php echo $icon; ?>
                                       <!-- <img class="service-icon-img" src="<?php //echo $icon; ?>"></img>  -->

                                        <h4><?php echo get_the_title($value->ID); ?></h4>
                                      
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <!-- home service section end -->
            <!-- above aabo section start -->
            <div class="above-aabo-section">
                <div class="wrap">
                    <div class="above-aabo-row">
                        <div class="cols cols2">
                            <?php $above_aabo_img = get_field('above_aabo_img');?>
                             <?php if (isset($above_aabo_img) && !empty($above_aabo_img)): ?>
                            <div class="col" style="background-image: url('<?php echo $above_aabo_img; ?>');">
                                <?php endif;?>
                                <div class="above-aabo-info">
                                    <div class="section-title">
                                        <?php $aabo_sec_info = get_field('aabo_sec_info');?>
                                        <?php if (isset($aabo_sec_info) && !empty($aabo_sec_info)): ?>
                                            <?php echo $aabo_sec_info; ?>
                                        <?php endif;?>
                                        <a class="button btn-outline" href="<?php echo get_home_url(); ?>/overons/">Lees meer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="above-aabo-img">
                                    <figure>
                                        <a href="#">
                                            <?php $over_img = get_field('over_img');?>
                                            <?php if (isset($over_img) && !empty($over_img)): ?>
                                            <img src="<?php echo $over_img['sizes']['over-abo-home']; ?>" alt="team">
                                            <?php endif;?>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- above aabo section end -->
            <!-- aabo sector section start -->
            <div class="home-service-section aabo-sector-section">
                <div class="wrap">
                    <div class="home-service-content">
                        <div class="section-title">
                            <?php $section_info_service = get_field('section_info_service');?>
                            <?php if (isset($section_info_service) && !empty($section_info_service)): ?>
                            <?php echo $section_info_service; ?>
                            <?php endif;?>
                        </div>
                        <?php 
                           $sector_selection = get_field('sector_selection');
                           if( $sector_selection ): 
                        ?>
                        <div class="home-service-row aabo-sector-row">
                            <div class="cols cols5">
                                <?php foreach ($sector_selection as $value) {?>
                                <div class="col">
                                    <a href="<?php echo $permalink = get_permalink( $value->ID ); ?>" class="home-service-info aabo-sector-info">
                                        <!--<i class="icon-service"></i> -->
										<?php $image_icon = get_field('image-icon',$value->ID); ?>
										<?php echo $image_icon; ?>
                                        <h4><?php echo get_the_title($value->ID); ?></h4>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- aabo sector section end -->
            <!-- aabo customer section start -->
            <div class="aabo-customer-section">
                <div class="wrap">
                    <div class="aabo-customer-content">
                        <?php $customer_box = get_field('customer_box');?>
                            <?php if (is_array($customer_box)): ?>
                                <?php foreach ($customer_box as $key => $customer_box) {?>
                        <span class="aabo-title-text">
                            <span class="counter"><?php echo $customer_box['customer_title']; ?></span>
                        </span>
                        <?php }?>
                        <?php endif;?>
                    </div>
                    <div class="aabo-customer-heading">
                        <?php $customer_title = get_field('customer_title');?>
                        <?php if (isset($customer_title) && !empty($customer_title)): ?>
                        <h4><?php echo $customer_title; ?></h4>
                        <?php endif;?>
                    </div>
                    <div class="aabo-swiper-box">
                        <div class="swiper aabo-customer-slider">
                            <div class="swiper-wrapper">
                            <?php $aabo_box = get_field('aabo_box');?>
                            <?php if (is_array($aabo_box)): ?>
                            <?php foreach ($aabo_box as $key => $aabo_box) {?>
                            <div class="swiper-slide">
                                <figure>
                                    <a href="#">
                                        <img src="<?php echo $aabo_box['img']; ?>" alt="Lightberg">
                                    </a>
                                </figure>
                            </div>
                            <?php }?>
                            <?php endif;?>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <!-- aabo customer section end -->
            <!-- home news section start -->
            <?php $background_img = get_field('background_img');?>
                            <?php if (isset($background_img) && !empty($background_img)): ?>
            <div class="home-news-section" style="background-image: url('<?php echo $background_img; ?>');">
                            <?php endif;?>

                <div class="wrap">
                    <div class="home-news-title">
                        <?php $home_news_title = get_field('home_news_title');?>
                        <?php if (isset($home_news_title) && !empty($home_news_title)): ?>
                        <h2><?php echo $home_news_title; ?></h2>
                        <?php endif;?>

                    </div>
                    <?php
                        $news_post_selection = get_field('news_post_selection');
                        if( $news_post_selection ): ?>
                    ?>
                    <div class="home-news-row">
                        <div class="cols cols3">
                            <?php 
                              foreach( $news_post_selection as $value ): 
                                $permalink = get_permalink( $value->ID );
                                $title = get_the_title( $value->ID );
                                //$custom_field = get_field( 'field_name', $value->ID );
                            ?>
			                <div class="col">
                                <div class="home-news-card">
                                    <figure>
                                        <a href="<?php echo $permalink; ?>">
                                            <img src="<?php echo get_field('news_img',$value->ID); ?>" alt="news">
                                        </a>
                                    </figure>
                                    <div class="home-news-info">
                                        <h5><a href="<?php echo $permalink; ?>"><?php echo $title;?></a></h5>
                                        <p>
                                            <?php 
                                            $content = $value->post_content;
                                        	$char_limit = 200;
                                        	$content1 = $content;
                                        	echo substr(strip_tags($content1), 0, $char_limit);
                                        	?>
                                        </p>
                                        <a href="<?php echo $permalink; ?>" class="button btn-outline">Lees meer</a>
                                    </div>
                                </div>
			                 </div>
							<?php endforeach; ?>
                            <?php wp_reset_postdata();?>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <!-- home news section end -->
            <!-- home-our-expert-section start -->
            <div class="home-our-expert-section">
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
            <!-- home our expert section end -->
        </div><!--/#content-->
      </div><!--/#primary-->
      </div><!--/#main -->