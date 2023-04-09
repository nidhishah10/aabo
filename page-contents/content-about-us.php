    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
    exit;
}

/**
 * The Template Used For Displaying About Us page Content
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
    <div class="default-company-info-section">
        <div class="wrap">
            <div class="default-company-info-row">
                    <?php $banner_info = get_field('banner_info');?>
    <?php if (isset($banner_info) && !empty($banner_info)): ?>
<?php echo $banner_info; ?>
                        <?php endif;?>
            </div>
        </div>
    </div>
    <!-- default company-info section start -->

    <div id="main">
            <div id="primary" class="content-area one-column">
                <div id="content" class="site-content">

                             <div class="team-section">
                              <div class="wrap"> 
                                <div class="director-section">
                                  <div class="swiper directorSwiper">
                                    <div class="swiper-wrapper">

                                      <div class="swiper-slide">
                                        <div class="director-row">
                                          <div class="cols cols2">
                                            <?php 
                                                $counter =1;
                                                $args = array('post_type' => 'directors', 'posts_per_page' => 4, 'order' => 'ASC');
                                                $the_query = new WP_Query($args);
                                                if ($the_query->have_posts()): 
                                                while ($the_query->have_posts()): $the_query->the_post();
                                                    if($counter=='5'){ break; } $counter++;
                                             ?>
                                            <div class="col">
                                              <?php
                                                $attachment_id = get_field('director_img');
                                                //$size ='over-abo';
                                                //$image = wp_get_attachment_image_src( $attachment_id, $size );
                                                //print_r($image);
                                              ?>
                                                <div class="directors-details">
                                                    <div class="director-image">
                                                    <figure>
                                                        <img src="<?php echo $attachment_id['sizes']['over-abo']; ?>" alt="director-1"  />
                                                    </figure>
                                                    </div>
                                                    <div class="director-info">
                                                    <p class="director-name"><?php the_title();?></p>
                                                     <?php  $designation = get_field('designation'); ?>
                                                    <p class="post"><?php echo $designation; ?></p>
                                                    <diV class="director-mail"><?php the_content();?></diV>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <?php endwhile; wp_reset_postdata();endif; ?>
                                          </div>
                                        </div>
                                      </div>


                                      <div class="swiper-slide">
                                        <div class="director-row">
                                          <div class="cols cols2">
                                            <?php 
                                                $counter2 =1;
                                                $args2 = array('post_type' => 'directors', 'posts_per_page' =>9, 'order' => 'ASC');
                                                $the_query2 = new WP_Query($args2);
                                                if ($the_query2->have_posts()): 
                                                while ($the_query2->have_posts()): $the_query2->the_post();
                                                    if($counter2=='10'){ break; }
                                                      if($counter2>'5'){ 
                                             ?>
                                            <div class="col">
                                              <?php
                                                $attachment_id = get_field('director_img');
                                              ?>
                                                <div class="directors-details">
                                                    <div class="director-image">
                                                    <figure>
                                                        <img src="<?php echo $attachment_id['sizes']['over-abo']; ?>" alt="director-1"  />
                                                    </figure>
                                                    </div>
                                                    <div class="director-info">
                                                    <p class="director-name"><?php the_title();?></p>
                                                    <?php  $designation = get_field('designation'); ?>
                                                    <p class="post"><?php echo $designation; ?></p>
                                                    <diV class="director-mail"><?php the_content();?></diV>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <?php } $counter2++;  endwhile; wp_reset_postdata(); endif; ?>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="swiper-slide">
                                        <div class="director-row">
                                          <div class="cols cols2">
                                            <?php 
                                                $counter3 =1;
                                                $args2 = array('post_type' => 'directors', 'posts_per_page' =>13, 'order' => 'ASC');
                                                $the_query2 = new WP_Query($args2);
                                                if ($the_query2->have_posts()): 
                                                while ($the_query2->have_posts()): $the_query2->the_post();
                                                    if($counter3=='15'){ break; }
                                                      if($counter3>'9'){ 
                                             ?>
                                            <div class="col">
                                              
                                                <div class="directors-details">
                                                    <div class="director-image">
                                                <?php
                                                 $attachment_id = get_field('director_img');
                                                ?>
                                                    <figure>
                                                        <img src="<?php echo $attachment_id['sizes']['over-abo']; ?>" alt="director-1"  />
                                                    </figure>
                                                    </div>
                                                    <div class="director-info">
                                                    <p class="director-name"><?php the_title();?></p>
                                                    <?php  $designation = get_field('designation'); ?>
                                                    <p class="post"><?php echo $designation; ?></p>
                                                    <diV class="director-mail"><?php the_content();?></diV>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <?php } $counter3++;  endwhile; wp_reset_postdata(); endif; ?>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
            <!--Team Section Complete-->

            <!--History Section starts-->

            <!--History Section Complete-->

            <!--History Section starts-->

            <div class="history-section">
              <div class="wrap">
                <div class="history-header">
                  <h2>Historie</h2>
                </div>
              </div>

              <div class="slider-section">
                <div class="timeline-slider">
                  <div class="swiper-wrapper">
                   
                    <?php $timeline_box = get_field('timeline_box');?>
                    <?php if (is_array($timeline_box)): ?>
                    <?php foreach ($timeline_box as $key => $value) {?>
                    <div class="swiper-slide">
                      <div class="swiper-slide-container">
                        <div class="timeline-year">
                          <p><?php echo $value['timeline_year']; ?></p>
                        </div>
                        <div class="timeline-circle"><span></span></div>
                        <div class="line-circle">
                            
                        </div>
                        <div class="timeline-content">
                            <?php echo $value['timeline_content']; ?>
                        </div>
                      </div>
                    </div>
                    <?php }?>
                    <?php endif;?>
                    
                  </div>

                   <div class="image-slider-wrapper">
                    <div class="swiper-container image-slider">
                      <div class="swiper-wrapper">
                        <?php $timeline_box = get_field('timeline_box');?>
                    <?php if (is_array($timeline_box)): ?>
                    <?php foreach ($timeline_box as $key => $value) {?>
                        <div class="swiper-slide">
                           <figure>
                            <img src="<?php echo $value['headquater_img1'];  ?>" alt="headquater1">
                          </figure>
                        </div>
                      <?php }?>
                    <?php endif;?>     
                       
                      </div>
                    </div>
                  </div>

                  <!-- <figure>
                    <img src="images/headquarter.jpg" alt="headquater">
                  </figure> -->
                  
                </div>

              </div>

              
            </div>
            <!--History Section Complete-->
          </div>
          <!--/#content-->
        </div>
        <!--/#primary-->
      </div>
      <!--/#main -->




