<?php /* Template Name: Training*/ get_header(); ?>
	
	<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>

	
	<!--=================== content area ================================== -->
	

	<div class="training-own">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Training</h2>
				</div>
				<div class="col-xs-12 training-content">
                <?php if( have_rows('training', $queried_object) ): ?>
                <?php while( have_rows('training', $queried_object) ): the_row(); ?>
				<img src="<?php the_sub_field('image');?>" alt="">
				<p><?php the_sub_field('description');?></p>
                 <?php endwhile; ?>
                 <?php endif; ?>
                <a href="#" class="gen-btn-clear">Enroll now</a>
				</div>
			</div>
		</div>
	</div>

	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 on-site-content">
				<h2>On-Site Training</h2>
                 <?php if( have_rows('on-site_training', $queried_object) ): ?>
                <?php while( have_rows('on-site_training', $queried_object) ): the_row(); ?>
				<p><?php the_sub_field('description');?></p>
                <?php endwhile; ?>
                <?php endif; ?>
			</div>

		</div>
	</div>
	
	
	<div class="training-own">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>CTS Certification</h2>
				</div>
				<div class="col-xs-12 training-content">
                <?php if( have_rows('cts_certification', $queried_object) ): ?>
                <?php while( have_rows('cts_certification', $queried_object) ): the_row(); ?>
				<img src="<?php the_sub_field('image');?>" alt="">
				<p><?php the_sub_field('description');?></p>
			<?php endwhile; ?>
            <?php endif; ?>
				<a href="#">Current CTS courses</a>
				</div>
			</div>
		</div>
	</div>

	<!--=================== footer  ================================== -->

	<?php get_footer(); ?>