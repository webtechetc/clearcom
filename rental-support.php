<?php /* Template Name: Rental Support */ get_header(); ?>
	<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>
	
	
	<!--=================== content area ================================== -->
	
	<div class="container">
		<div class="col-xs-12">
			<h3 class="clear-page-title">Rental Support
			<a href="/rental-support/join-grg/" class="gen-btn-clear btn-dark pull-right">Become a Rental Partner—GRG Member</a>
			</h3>
			
		</div>
		
		
		<div class="row">
			<div class="col-xs-12 become-rental">
				<article>
					
            <?php if( have_rows('rental_support', $queried_object) ): ?>
       		<?php while( have_rows('rental_support', $queried_object) ): the_row(); ?>
					<div class="become-img">
						<img src="<?php the_sub_field('image');?>" alt="">
					</div>
					<h5><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></h5>
					<p><?php the_sub_field('description');?> </p>
			<?php endwhile; ?>
            <?php endif; ?>
					<a href="#" class="gen-btn-clear">Find Rental Equipment Near You</a>
					<div class="search-rental">
						<form action="">
							<input type="text" name="" value="" placeholder="Search by Postal Code">
						</form>
					</div>
				</article>
			</div>
		</div>

	</div>

	<div class="relatednews">
		<div class="container">
			<h2>GRG Related News and Press Releases</h2>

			<div class="row">
				<div id="myCarousel" class="carousel slide news" data-ride="carousel">
        			<!-- Wrapper for carousel items -->
			        <div class="carousel-inner">
			            <div class="item active ">
				<?php if( have_rows('news_and_press_releases', $queried_object) ): ?>
                <?php while( have_rows('news_and_press_releases', $queried_object) ): the_row(); ?>
			                <article>
			                	<div class="newsimg">
			                		<img src="<?php the_sub_field('image');?>" alt="">
			                	</div>
			                	<h5><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></h5>
			                	<?php the_sub_field('description');?>
			                	<p><a href="#" class="gen-btn-clear">Read Full Story</a></p>
			                </article>
				<?php endwhile; ?>
                <?php endif; ?>
			            </div>
			           <div class="item ">
			            	<?php if( have_rows('news_and_press_releases', $queried_object) ): ?>
                <?php while( have_rows('news_and_press_releases', $queried_object) ): the_row(); ?>
			                <article>
			                	<div class="newsimg">
			                		<img src="<?php the_sub_field('image');?>" alt="">
			                	</div>
			                	<h5><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></h5>
			                	<?php the_sub_field('description');?>
			                	<p><a href="http://demo22.baytechdata.com/rental-support/" class="gen-btn-clear">Read Full Story</a></p>
			                </article>
				<?php endwhile; ?>
                <?php endif; ?>
			            </div>
			        </div>
			        <!-- Carousel controls -->
			        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
			            <img src="<?php echo get_template_directory_uri(); ?>/images/left-icon.png" alt="">
			        </a>
			        <a class="carousel-control right" href="#myCarousel" data-slide="next">
			            <img src="<?php echo get_template_directory_uri(); ?>/images/right-icon.png" alt="">
			        </a>
    			</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="socialfeed">
			
			<div class="row">
				<h2>Social Feeds</h2>
				<div class="col-xs-12 col-sm-6 col-md-6 listtype-in">
						<h4>Twitter</h4>
					
                        	<?php echo do_shortcode("[arrow_sf id='534']")?>
							
						
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 listtype-in">
						<h4>Facebook</h4>
					
                            <?php echo do_shortcode("[arrow_sf id='533']")?>
						
				</div>
			</div>
		</div>

	</div>

	<!--=================== footer  ================================== -->

	<?php get_footer(); ?>