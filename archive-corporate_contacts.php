<?php /* Template Name: Corporate Contacts */ get_header(); ?>
<!--=================== banner area ================================== -->

<div class="banner-gen"> <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner"> </div>

<!--=================== content area ================================== -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h3 class="clear-page-title">Corporate Contact</h3>
      <p>Thank you for your interest in Clear-Com products and services. Feel free to contact us about order placement at our corporate offices, through our regional sales team, or any of our authorized dealers or distributors nearest you.</p>
    </div>
    <div class="col-xs-12 contact-coporate">
      <div class="row">
        <?php 
		 $args = array( 'post_type' => 'corporate_contacts', 'posts_per_page' => -1, 'orderby' => 'ID', 'order' => 'ASC' );
		 $the_query = new WP_Query( $args ); 
		 ?>
        <?php
		 if ( $the_query->have_posts() )
		 {
			 while ( $the_query->have_posts() ) { 
				 $the_query->the_post();
		  ?>
        <div class="col-xs-12 col-sm-12 col-md-6">
          <article >
            <div class="corporate-image">
              <?php the_post_thumbnail('cat_images'); ?>
              <!--<a href="<?php the_permalink();?>">Find us on map</a>--> </div>
            <h4>
              <?php the_title(); ?>
            </h4>
            <?php echo substr(get_the_content(),0,300); ?> </article>
        </div>
        <?php
			 }

			 wp_reset_postdata();

		 }
		 ?>
      </div>
      <div class="col-xs-12 feedback-contact">
        <h4><strong>Corporate Contact</strong></h4>
        <div class="feed-image"> <img src="<?php echo get_template_directory_uri(); ?>/images/u6.jpg" alt=""> </div>
        <p>Let us know how we are doing.</p>
        <p>Click here for the Clear-Com <a href="#">Feedback Form</a></p>
      </div>
    </div>
  </div>
</div>
</div>

<!--=================== footer  ================================== -->

<?php get_footer(); ?>
