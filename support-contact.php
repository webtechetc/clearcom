<?php /* Template Name: Support Contact */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<!--=================== banner area ================================== -->

<div class="banner-gen"> <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner"> </div>

<!--=================== content area ================================== -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h3 class="clear-page-title"><?php the_title(); ?></h3>
      <p>Feel free to contact Clear-Com by phone or email if you require support on any of the following:</p>
    </div>
    <div class="col-xs-12 contact-support">
      <div class="row">
        <div class="col-xs-12">
          <select class="support-select">
            <option value="Sales &amp; Orders Inquiries">Support You Need</option>
            <option value="">Sales &amp; Orders Inquiries</option>
            <option value="Technical Support Requests">Technical Support Requests</option>
            <option value="Product Repair Requests">Product Repair Requests</option>
            <option value="Product Training">Product Training</option>
          </select>
          <div class="col-xs-12 contact-support-in">
            <?php if( have_rows('contact_information', $queried_object) ): ?>
            <?php while( have_rows('contact_information', $queried_object) ): the_row(); ?>
            <div class="col-xs-4">
              <h4>
                <?php the_sub_field('title');?>
              </h4>
              <p>
                <?php the_sub_field('tel');?>
              </p>
              <p>
                <?php the_sub_field('hours');?>
              </p>
              <p>
                <?php the_sub_field('email');?>
              </p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <?php if( have_rows('description', $queried_object) ): ?>
        <?php while( have_rows('description', $queried_object) ): the_row(); ?>
        <div class="col-xs-12 ">
          <p>
            <?php the_sub_field('text');?>
          </p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="col-xs-12 feedback-contact">
          <h4><strong>Corporate Contact</strong></h4>
          <?php if( have_rows('contact_feedback_form', $queried_object) ): ?>
          <?php while( have_rows('contact_feedback_form', $queried_object) ): the_row(); ?>
          <div class="feed-image"> <img src="<?php the_sub_field('image');?>" alt=""> </div>
          <p>Let us know how we are doing.
            <?php the_sub_field('description');?>
          </p>
          <p>
            <?php the_sub_field('label');?>
            <a href="<?php the_sub_field('link');?>">Feedback Form</a></p>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!--=================== footer  ================================== -->
<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>
