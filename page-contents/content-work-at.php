    <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Work at page Content
 *
 * @package WordPress
 * @subpackage Aabo
 * @since Aabo 1.0
 */
?>
<!-- default banner section start -->
<?php $banner_img = get_field('banner_img');?>
    <?php if (isset($banner_img) && !empty($banner_img)): ?>
      <div
        class="banner-section"
        style="background-image: url('<?php echo $banner_img; ?>')">
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
      <div class="default-company-info-section work-at">
        <div class="wrap">
          <div class="default-company-info-row">
            <div class="cols cols2">
              <div class="col">
                <?php $work_img = get_field('work_img');?>
                <div class="workat-image" style="background-image: url('<?php echo $work_img; ?>')">
<!--                   <figure>
                    <?php //if (isset($work_img) && !empty($work_img)): ?>
                    <img src="<?php //echo $work_img; ?>" alt="banner-2" />
                    <?php //endif;?>
                  </figure> -->
                </div>
              </div>
              <div class="col">
                <div class="work-at-banner-content">
                  <?php $title = get_field('title');?>
    <?php if (isset($title) && !empty($title)): ?>
                  <h2>
                    <?php echo $title; ?>
                  </h2>
                  <?php endif;?>
                  <?php $content_info = get_field('content_info');?>
    <?php if (isset($content_info) && !empty($content_info)): ?>
                  <p>
                    <?php echo $content_info; ?>
                  </p>
                  <?php endif;?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- default company-info section start -->

      <div id="main">
        <div id="primary" class="content-area one-column">
          <div id="content" class="site-content">
            <div class="work-place-section">
              <div class="wrap">
                <div class="workplace-row">
                  <div class="cols cols4">
                    <?php $work_place_details = get_field('work_place_details');?>
                            <?php if (is_array($work_place_details)): ?>
                                <?php foreach ($work_place_details as $key => $work_place_details) {?>
                    <div class="col">
                      <a href="#">
                        <div class="workplace-details">
                          <i class="icon-service"></i>
                          <h3><?php echo $work_place_details['title_name']; ?></h3>
                        </div>
                      </a>
                    </div>
                     <?php }?>
                            <?php endif;?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Workplace section complete-->

            <div class="vacancies-section">
              <div class="wrap">
                <div class="vacancies-row">
                  <div class="vacancies-header">
                    <?php $vacancies_title = get_field('vacancies_title');?>
    <?php if (isset($vacancies_title) && !empty($vacancies_title)): ?>
                    <h2><?php echo $vacancies_title; ?></h2>
                    <?php endif;?>
                  </div>

                  <div class="vacancies-details">
                    <div class="accordion-databox">
                      <div class="accordion-row">
        <?php $accordion_title = get_field('accordion_title');?>
    <?php if (isset($accordion_title) && !empty($accordion_title)): ?>
                        <h5 class="accordion-trigger">
                          <?php echo $accordion_title; ?>
                        </h5>
                        <?php endif;?>
                         <div class="accordion-data" style="display: none">
                          <div class="accordian-section">
                        <?php $accordion_info = get_field('accordion_info');?>
    <?php if (isset($accordion_info) && !empty($accordion_info)): ?>
                        <?php echo $accordion_info; ?>
                        <?php endif;?>
                        </div>
                        </div>
                        <!--/.accordion-data -->
                      </div>
                      <!--/.accordion-row -->
                      <div class="accordion-row">
                        <?php $accordion_title1 = get_field('accordion_title1');?>
    <?php if (isset($accordion_title1) && !empty($accordion_title1)): ?>
                        <h5 class="accordion-trigger">
                          <?php echo $accordion_title1; ?>
                        </h5>
                        <?php endif;?>
                        <div class="accordion-data" style="display: none">
                          <div class="accordian-section">
                        <?php $accordion_info1 = get_field('accordion_info1');?>
    <?php if (isset($accordion_info1) && !empty($accordion_info1)): ?>
                        <?php echo $accordion_info1; ?>
                        <?php endif;?>
                          </div>
                        </div>
                      </div>
                      <!--/.accordion-section -->
                      <!--/.accordion-row -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- vacancies section complete-->
            <?php $application_img = get_field('application_img');?>
    <?php if (isset($application_img) && !empty($application_img)): ?>
            <div
              class="application-section"
              style="
                background-image: url(<?php echo $application_img; ?>);
              "
            >
            <?php endif;?>
              <div class="wrap">
                <div class="application-header">
                  <?php $application_title = get_field('application_title');?>
    <?php if (isset($application_title) && !empty($application_title)): ?>
                  <h2><?php echo $application_title; ?></h2>
                  <?php endif;?>
                </div>

                <div class="application-process">
                  <div class="cols cols5">
                    <?php $application_proces = get_field('application_proces');?>
                            <?php if (is_array($application_proces)): ?>
                                <?php foreach ($application_proces as $key => $application_proces) {?>
                    <div class="col">
                      <div class="application-number"><h4><?php echo $application_proces['application_number']; ?></h4></div>
                      <div class="application-details">
                        <p>
                         <?php echo $application_proces['application_details']; ?>
                        </p>
                        <h6><?php echo $application_proces['application_name']; ?></h6>
                      </div>
                    </div>
                     <?php }?>
                            <?php endif;?>
                  </div>
                </div>
              </div>
            </div>
            <!--Application Section complete-->


                  <div class="home-our-expert-section contact" >
                        <div class="wrap">
                            <div class="home-our-expert-row">
                                <div class="home-our-expert-info">
                                    <?php $expert_img = get_field('expert_img');?>
                                    <?php if (isset($expert_img) && !empty($expert_img)): ?>
                                    <div class="home-our-expert-img">
                                        <figure>
                                            <img src="<?php echo $expert_img['sizes']['footer-service-section']; ?>" alt="Man">
                                        </figure>
                                    </div>
                                    <?php endif;?>
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
                                      <a href="<?php echo $btn_url; ?>" class="poptrigger button" data-rel="apply-here"><?php echo $btn_name; ?></a>
                                  <?php endif;?>

                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
