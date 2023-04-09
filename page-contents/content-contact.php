    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Contact page Content
 *
 * @package WordPress
 * @subpackage Aabo
 * @since Aabo 1.0
 */
?>
<!-- default banner section start -->
<?php $bg_img = get_field('bg_img');?>
    <?php if (isset($bg_img) && !empty($bg_img)): ?>
    <div class="banner-section" style="background-image: url('<?php echo $bg_img; ?>');">
         <?php endif;?>
        <div class="wrap">
            <div class="banner-row">
                <?php $contact_title = get_field('contact_title');?>
    <?php if (isset($contact_title) && !empty($contact_title)): ?>
                <h1><?php echo $contact_title; ?></h1>
                 <?php endif;?>
            </div>
        </div>
    </div>
    <!-- default banner section end -->
    <!-- default company-info section start -->
    <div class="default-company-info-section news">
        <div class="wrap">
            <div class="default-company-info-row">
                <?php $info_sec = get_field('info_sec');?>
    <?php if (isset($info_sec) && !empty($info_sec)): ?>
                <p><?php echo $info_sec; ?></p>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!-- default company-info section start -->

    <div id="main">
		<div id="primary" class="content-area one-column">
			<div id="content" class="site-content">
					<div class="contact-locations">
                        <div class="cols cols2">
                            <div class="col">
                                <div class="map">
                                    <?php $iframe_map = get_field('iframe_map');?>
                                        <?php if (isset($iframe_map) && !empty($iframe_map)): ?>
                                    <iframe src="<?php echo $iframe_map; ?>" width="849" height="1062" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <?php endif;?>
                                </div>
                            </div>

                           
                            <div class="col">
                                <div class="contact-us-row">
                                     <div class="quote-form-row">
                                            <div class="quote-form-btn">
                                                <a href="#" class="poptrigger button" data-rel="popupname">Vraag offertte aan</a>
                                            </div>
                                    </div>
                                    <div class="info-form">
                                        <h5>Contact formulier</h5>
                                         <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-mode">
                        <div class="wrap">
                            <div class="contact-mode-row">
                                <div class="cols cols3">
                                    <?php $contact_content = get_field('contact_content');?>
                            <?php if (is_array($contact_content)): ?>
                                <?php foreach ($contact_content as $key => $contact_content) {?>
                                    <div class="col">
                                        <div class="contact-content">
										<?php if($contact_content['class_name'] == 'icon-location-pin'){ ?>
											<a href="" class="poptrigger" data-rel="popup-map">
											<i class="<?php echo $contact_content['class_name']; ?>"></i></a>
											<?php }
											else{ ?>
                                            <a href="<?php echo $contact_content['contcat_url']; ?>"><i class="<?php echo $contact_content['class_name']; ?>"></i></a>
											<?php }?>
                                            
                                            <p><?php echo $contact_content['contact_title']; ?></p>
											<?php if($contact_content['class_name'] == 'icon-location-pin'){ ?>
											<a href="" class="poptrigger" data-rel="popup-map">
											<?php echo $contact_content['contact_info']; ?></a>
											<?php }
											else{ ?>
                                            <a href="<?php echo $contact_content['contcat_url']; ?>"><?php echo $contact_content['contact_info']; ?></a>
											<?php }?>
                                        </div>
                                    </div>
                                    <?php }?>
                            <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div> <!--contact-mode complete-->
                    <?php $dienst_banner_img = get_field('dienst_banner_img', 'option');?>
                    <div class="home-our-expert-section contact" style="background-image: url(<?php echo $dienst_banner_img; ?>);">
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