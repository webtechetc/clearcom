<?php /* Template Name: Portal Registration */ get_header(); ?>


	
	<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>
    
    <?php echo do_shortcode( '[contact-form-7 id="672" title="Portal Registration"]' );?>
    <?php echo do_shortcode( '[contact-form-7 id="676" title="Portal Login"]' );?>
    
    


	<!--=================== footer  ================================== -->

<?php get_footer(); ?>