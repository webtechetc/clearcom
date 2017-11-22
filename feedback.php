<?php /* Template Name: Feedback */ get_header(); ?>
	<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>
	
	<!--=================== content area ================================== -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="clear-page-title">Feed Back</h3>	
				<p>Please provide us with the following details if you would like us to contact you regarding your feedback.</p>
			</div>
			<!-- <div class="col-xs-12 col-sm-6 col-md-6 feedback-form">
			<label>First Name *</label>
				<input type="text"  class="form-control" value="">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 feedback-form">
				<textarea cols="12" rows="12" class="form-control"></textarea>
			</div> -->

			<?php echo do_shortcode( '[contact-form-7 id="465" title="Feed Back Form"]'); ?>
		</div>
	</div>

	<!--=================== footer  ================================== -->

	<?php get_footer(); ?>