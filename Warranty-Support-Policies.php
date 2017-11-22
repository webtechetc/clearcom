<?php /* Template Name: Warranty & Support Policies */ get_header(); ?>

	<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>

	
<!--=================== content area ================================== -->
 <div class="container">
  <div class="row">
   <div class="col-xs-12 col-sm-12 warranty-support">
    <h3 class="clear-page-title">Warranty & Support Policies</h3> 
     <?php if( have_rows('warranty_&_support_policies', $queried_object) ): ?>
     <?php while( have_rows('warranty_&_support_policies', $queried_object) ): the_row(); ?>
  <h4><?php the_sub_field('title');?></h4>
  <p><?php the_sub_field('description');?></p>
  <?php endwhile; ?>
  <?php endif; ?>
   </div>
  </div> 
 </div>

<?php get_footer(); ?>
