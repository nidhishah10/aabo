    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying News Content
 *
 * @package WordPress
 * @subpackage Aabo
 * @since Aabo 1.0
 */
?>

<!-- default banner section start -->
<?php $background_img = get_field('background_img');?>
<?php if (isset($background_img) && !empty($background_img)): ?>
    <div class="news banner-section" style="background-image: url('<?php echo $background_img ?>');">
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
    <div class="default-company-info-section">
        <div class="wrap">
            <div class="default-company-info-row">
                <?php $company_info = get_field('company_info');?>
<?php if (isset($company_info) && !empty($company_info)): ?>
                <?php echo $company_info ?>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!-- default company-info section start -->

    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="news-section">
                    <div class="wrap">
                        <div class="news-row">
                            <div class="news-pages-details">
                                  <div class="cols cols3">
                                    <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array('post_type' => 'news', 'posts_per_page' => 6, 'order' => 'ASC','paged' => $paged);
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()): ?>
<?php while ($the_query->have_posts()): $the_query->the_post();?>
			                                        <div class="col">
			                                            <div class="news-titles">
			                                                <figure>
			                                                    <a href="<?php echo the_permalink(); ?>"><img src="<?php echo get_field('news_img'); ?>" alt="news-1"></a>
			                                                </figure>
			                                                <div class="news-content">
			                                                    <h5><a href="<?php echo the_permalink(); ?>"><?php the_title();?></a></h5>
			                                                    <p><?php $content = get_the_content();
	$char_limit = 250;
	$content1 = $content;
	echo substr(strip_tags($content1), 0, $char_limit);?></p>
			                                                    <a href="<?php echo the_permalink(); ?>" class="button btn-outline"><?php echo get_field('read_more'); ?></a>
			                                                </div>
			                                            </div>
			                                        </div>

			                                         <?php endwhile;?>
                                                      </div>

<?php endif;?>
<?php wp_reset_postdata();?>
<div class="news-page">
    <ul class="page">
         <?php
         $big = 999999999;
         echo paginate_links( array(
              'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
              'format' => '?paged=%#%',
              'current' => $paged,
              'total' => $the_query->max_num_pages,
              'prev_text' => '<i class="icon-left-arrow"></i>',
              'next_text' => '<i class="icon-right-arrow"></i>'
         ) );
        ?>
   </ul>
</div>

                                    <!--Page 1 ends-->


                                  

                              </div>
                        </div> <!--News row-->
                    </div> <!--New-wrap-->
                </div> <!--News Section Complete-->
                <?php $bg_img = get_field('bg_img');?>
    <?php if (isset($bg_img) && !empty($bg_img)): ?>
                <div class="newsletter-section" style="background-image: url(<?php echo $bg_img; ?>);">
                     <?php endif;?>
                    <div class="wrap">
                        <div class="newsletter-header">
                            <?php $title = get_field('title');?>
    <?php if (isset($title) && !empty($title)): ?>
                            <h2><?php echo $title; ?></h2>
                             <?php endif;?>
                        </div>
                    <div class="newsletter-row">
                            <div class="cols cols3">


                                <div class="col">
                                    <div class="newsletter-year">
                                        <?php $newsletter_title1 = get_field('newsletter_title1');?>
    <?php if (isset($newsletter_title1) && !empty($newsletter_title1)): ?>
                                        <h5><?php echo $newsletter_title1; ?></h5>
                                         <?php endif;?>
                                        <?php $newsletter_year_box1 = get_field('newsletter_year_box1');?>
                            <?php if (is_array($newsletter_year_box1)): ?>
                                <?php foreach ($newsletter_year_box1 as $key => $newsletter_year_box1) {?>
                                        <ul class="news-2023">
                                            <li><?php echo $newsletter_year_box1['newsletter_year']; ?><a href="<?php echo $newsletter_year_box1['newsletter_url1']; ?>"  class="button" target="_blank" download><?php echo $newsletter_year_box1['newsletter_btn']; ?></a></li>
                                            <?php }?>
                            <?php endif;?>
                                        </ul>
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="newsletter-year">
                                        <?php $newsletter_title2 = get_field('newsletter_title2');?>
    <?php if (isset($newsletter_title2) && !empty($newsletter_title2)): ?>
                                        <h5><?php echo $newsletter_title2; ?></h5>
                                         <?php endif;?>
                                        <?php $newsletter_year_box2 = get_field('newsletter_year_box2');?>
                            <?php if (is_array($newsletter_year_box2)): ?>
                                <?php foreach ($newsletter_year_box2 as $key => $newsletter_year_box2) {?>
                                        <ul class="news-2023">
                                            <li><?php echo $newsletter_year_box2['newsletter_year']; ?><a href="<?php echo $newsletter_year_box2['newsletter_url2']; ?>" class="button" target="_blank" download><?php echo $newsletter_year_box2['newsletter_btn']; ?></a>
                                            </li>
                                            <?php }?>
                            <?php endif;?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="newsletter-year">
                                        <?php $newsletter_title3 = get_field('newsletter_title3');?>
                                        <?php if (isset($newsletter_title3) && !empty($newsletter_title3)): ?>
                                        <h5><?php echo $newsletter_title3; ?></h5>
                                        <?php endif;?>
                                        <?php $newsletter_year_box3 = get_field('newsletter_year_box3');?>
                                        <?php if (is_array($newsletter_year_box3)): ?>
                                        <?php foreach ($newsletter_year_box3 as $key => $newsletter_year_box3) {?>
                                        <ul class="news-2023">
                                            <li><?php echo $newsletter_year_box3['newsletter_year']; ?><a href="<?php echo $newsletter_year_box3['newsletter_url3']; ?>" class="button" target="_blank" download><?php echo $newsletter_year_box3['newsletter_btn']; ?></a>
                                            </li>
                                        <?php } ?>
                                        <?php endif;?>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div><!--/#content-->
        </div><!--/#primary-->
    </div><!--/#main -->