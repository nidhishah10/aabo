<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Include google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- End of google fonts -->
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
<div id="wrapper">
    <div class="login-portal">
        <a href="<?php echo get_field('login_portal_url','option'); ?>" target="_blank" class="button">Inloggen Portal</a>
    </div>
    <!-- header section start -->
    <header id="header">
        <div class="header-top">
            <div class="wrap-small">
                <div class="header-top-row">
                    <ul class="header-top-info">
                        <li><a href="tel:310548538500"><i class="icon-phone"></i><?php echo get_field('header_phone', 'option'); ?></a></li>
                        <li><a href="mailto:info@aabo-rijssen.nl"><i class="icon-mail"></i><?php echo get_field('header_mail', 'option'); ?></a></li>
                        <li class="header-time"><p><i class="icon-clock"></i><?php echo get_field('header_time', 'option'); ?></p></li>
                    </ul>
                    <ul class="header-social-icon">
                        <li><a href="<?php echo get_field('facebook_url','option'); ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                        <li><a href="<?php echo get_field('instagram_url','option'); ?>" target="_blank"><i class="icon-instagram"></i></a></li>
                        <li><a href="<?php echo get_field('linkedin_url','option'); ?>" target="_blank"><i class="icon-linkdin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="wrap">
                <div class="header-row">
                    <?php $logo = get_field('logo', 'option');?>
                <?php if (isset($logo) && !empty($logo)): //to check site Logo
	?>
																	                    <a href="<?php bloginfo('url');?>" id="logo" title="Aabo">
																	                        <img src="<?php echo $logo; ?>" width="185" height="82" alt="Aabo">
																	                    </a>
																	                    <?php endif; //endif
?>
                    <nav id="mainmenu">
                        <ul>
                            <?php
if (has_nav_menu('main-menu')): // Check Main Menu Set or Not
	wp_nav_menu(array('theme_location' => 'main-menu', 'container' => '', 'container_class' => '', 'items_wrap' => '%3$s'));
endif; //endif
?>
                        </ul>
                    </nav><!--/#mainmenu-->
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->