 <?php //if (is_page_template(array( 'page-templates/template-contact.php'))): ?>
 <!-- home-our-expert-section start -->
 <?php //$dienst_banner_img = get_field('dienst_banner_img', 'option');?>
    <?php //if (isset($dienst_banner_img) && !empty($dienst_banner_img)): ?>
<!--                     <div class="home-our-expert-section contact" style="background-image: url(<?php //echo $dienst_banner_img; ?>);">
                    <?php //endif;?>
                        <div class="wrap">
                            <div class="home-our-expert-row">
                                <div class="home-our-expert-info">
                                    <div class="home-our-expert-img">
                                        <figure>
                                        <?php //$expert_img = get_field('expert_img', 'option');?>
                                        <?php //if (isset($expert_img) && !empty($expert_img)): ?>
                                        <img src="<?php //echo $expert_img; ?>" alt="Man">
                                        <?php //endif;?>
                                        </figure>
                                    </div>
                                    <div class="home-our-expert-content">
                                        <?php //$expert_desc = get_field('expert_desc', 'option');?>
                                        <?php //if (isset($expert_desc) && !empty($expert_desc)): ?>
                                        <?php //echo $expert_desc; ?>
                                        <?php //endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div> -->
     <?php //endif;?>


 <?php //if (is_page_template(array('page-templates/template-work-at.php'))): ?>
 <!-- home-our-expert-section start -->
 <?php //$dienst_banner_img = get_field('dienst_banner_img', 'option');?>
    <?php //if (isset($dienst_banner_img) && !empty($dienst_banner_img)): ?>
<!--                     <div class="home-our-expert-section contact" >
                    <?php //endif;?>
                        <div class="wrap">
                            <div class="home-our-expert-row">
                                <div class="home-our-expert-info">
                                    <div class="home-our-expert-img">
                                        <figure>
                                        <?php //$expert_img = get_field('expert_img', 'option');?>
                                        <?php //if (isset($expert_img) && !empty($expert_img)): ?>
                                        <img src="<?php //echo $expert_img; ?>" alt="Man">
                                        <?php //endif;?>
                                        </figure>
                                    </div>
                                    <div class="home-our-expert-content">
                                      <h3>Enthousiast? Solliciteer direct!</h3>
                                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad </p>
                                      <a href="#" class="poptrigger button" data-rel="apply-here">Solliciteer direct!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div> -->
     <?php //endif;?>




      <?php //if (is_page_template(array('page-templates/template-sector.php'))): ?>
     <!-- service-our-expert-section start -->
<!--           <div class="home-our-expert-section service-our-expert-section">
            <div class="wrap">
                <div class="home-our-expert-row">
                    <div class="home-our-expert-info">
                        <div class="home-our-expert-img">
                            <figure>
                                <?php //$expert_img = get_field('expert_img', 'option');?>
                                <?php //if (isset($expert_img) && !empty($expert_img)): ?>
                                <img src="<?php //echo $expert_img; ?>" alt="Man">
                                <?php //endif;?>
                            </figure>
                        </div>
                        <div class="home-our-expert-content">
                            <?php //$expert_desc = get_field('expert_desc', 'option');?>
                            <?php //if (isset($expert_desc) && !empty($expert_desc)): ?>
                            <?php //echo $expert_desc; ?>
                            <?php //endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- service our expert section end -->


        </div><!--/#content-->
      </div><!--/#primary-->
      </div><!--/#main -->
           <?php //endif;?>


<!-- footer section start -->
    <footer id="footer">
        <div class="footer-top">
            <div class="wrap-small">
                <div class="footer-info">
                    <div class="cols cols4">
                        <div class="col">
                            <div class="footer-title">
                                <?php $footer_title = get_field('footer_title', 'option');?>
                            <?php if (isset($footer_title) && !empty($footer_title)): ?>
                                <h3><?php echo $footer_title; ?></h3>
                                <?php endif;?>
                            </div>

                                <?php $web_address = get_field('web_address', 'option');?>
                            <?php if (isset($web_address) && !empty($web_address)): ?>
                            <?php echo $web_address; ?>
                                <?php endif;?>
                            </ul>
                        </div>
                        <div class="col">
                            <div class="footer-title">
                                <?php $footer_title1 = get_field('footer_title1', 'option');?>
                            <?php if (isset($footer_title1) && !empty($footer_title1)): ?>
                                <h3><?php echo $footer_title1; ?></h3>
                                <?php endif;?>
                            </div>
                            <ul class="footer-timing">
                                <?php $footer_timing = get_field('footer_timing', 'option');?>
                            <?php if (isset($footer_timing) && !empty($footer_timing)): ?>
                                <li><?php echo $footer_timing; ?></li>
                                <?php endif;?>
                            </ul>
                        </div>
                        <div class="col">
                            <div class="footer-title">
                                <h3>Menu</h3>
                            </div>
                            <ul class="footer-menu">
                               <?php
if (has_nav_menu('footer-menu')): // Check Main Menu Set or Not
	wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => '', 'container_class' => '', 'items_wrap' => '%3$s'));
endif; //endif
?>
                            </ul>
                        </div>
                        <div class="col">
                            <div class="footer-title">
                                <h3>Volg ons</h3>
                            </div>
                            <ul class="footer-icon">
                                <li><a href="<?php echo get_field('instagram_url','option'); ?>" target="_blank"><i class="icon-instagram"></i></a></li>
                                <li><a href="<?php echo get_field('facebook_url','option'); ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                                <li><a href="<?php echo get_field('linkedin_url','option'); ?>" target="_blank"><i class="icon-linkdin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
        </div>
    </footer>
    <!-- footer section end -->
<!-- Quatation pop up form -->
    <div class="popouterbox apply-here-form" id="apply-here">
      <div class="popup-block">
          <div class="pop-contentbox">
              <a href="#" class="close-dialogbox"><i class="icon-close-btn"></i></a>
              <div class="apply-here-title">
                  <h4>We are hiring!<br><span>Salarisadministrateur</span></h4>
              </div>
                <?php echo do_shortcode('[contact-form-7 id="382" title="Quatation popup   -Work-at page"]'); ?>
              </div>
          </div><!--/.popup-block -->
      </div> <!--/.popouterbox -->
   <!-- Quatation pop up form -->
<!-- google map pop up form -->
    <div class="popouterbox" id="popup-map">
      <div class="popup-block">
          <div class="pop-contentbox" style="padding: 30px;">
              <a href="#" class="close-dialogbox"><i class="icon-close-btn"></i></a>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.488453484773!2d6.526370015901268!3d52.30713857977451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7f6551da8d9f5%3A0xa2e296188aa4d8cf!2sKarel%20Doormanstraat%202%2C%207461%20ER%20Rijssen%2C%20Netherlands!5e0!3m2!1sen!2sin!4v1677057310356!5m2!1sen!2sin" width="610" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div><!--/.google map -->
      </div> <!--/.google map -->
   <!-- google map pop up form -->
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
   
<?php wp_footer();?>
</body>

</html>