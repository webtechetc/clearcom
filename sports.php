<?php /* Template Name: Sports */ get_header(); ?>

	<div class="breadcrumbwrap">
		
		<div class="container">
			
			<ol class="breadcrumb">
				<li>
					<a href="file:///C|/Users/123/AppData/Local/Temp/fz3temp-1/index.html">Home</a>
				</li>
				<li><a href="file:///C|/Users/123/AppData/Local/Temp/fz3temp-1/markets.html">Markets</a></li>
				<li class="active">sports</li>
			</ol>
		</div>

	</div>
	
	<!--=================== Slider area ================================== -->

	<section class="slider">

		<div id="myCarousel1" class="carousel slide eventcarousel" data-ride="carousel">
	         
	        <!-- Wrapper for carousel items -->
	        <div class="carousel-inner">
	            <div class="item active">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/banner1.png" alt="First Slide">
	            </div>
	            <div class="item">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/banner1.png" alt="Second Slide">
	            </div>
	            <div class="item">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/banner1.png" alt="Third Slide">
	            </div>
	        </div>
	        <!-- Carousel controls -->
	        <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="carousel-control right" href="#myCarousel1" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	       <div class="banner-cap">
	       		<div class="container">
	       			<div class="text-banner-up">
	       				<h4>sports</h4>
	       				<p>Connecting sports teams
from virtually anywehre</p>
	       			</div>
	       		</div>
	       </div>
    	</div>

	</section>

	
	<!--=================== content area ================================== -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="clear-page-title"><?php the_title(); ?></h3>	
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-8  broadcast-content">
				<p><?php
					$page = get_page_by_title( 'sports' );
					$content = apply_filters('the_content', $page->post_content); 
					echo $content;
					?>
				</p>

				<div class="col-xs-12 addtion-links">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-1"></div>
                    <?php if( have_rows('broadcast', $queried_object) ): ?>
       				<?php while( have_rows('broadcast', $queried_object) ): the_row(); ?>
						<div class="col-xs-12 col-sm-6 col-md-2">
							<img src="<?php the_sub_field('image');?>" alt="">
							<a href=" <?php the_sub_field('url'); ?>"> <?php the_sub_field('label'); ?></a>
						</div>
                    <?php endwhile; ?>
       				<?php endif; ?>
					
						<div class="col-xs-12 col-sm-12 col-md-1"></div>
					</div>
				</div>
			</div>
             <?php if( have_rows('industry_affiliation', $queried_object) ): ?>
       		<?php while( have_rows('industry_affiliation', $queried_object) ): the_row(); ?>
			<div class="col-xs-12  col-sm-6 col-md-4  broadcast-side">
				<h2>Industry Affiliation</h2>
				<a href="#"><img src="<?php the_sub_field('industry_image');?>" alt=""></a>
				<a href="#"><img src="<?php the_sub_field('image');?>" alt=""></a>
			</div>
		<?php endwhile; ?>
        <?php endif; ?>
		</div>
	</div>

	<!-- benefit -->
	<div class="featured-benefit">
		<div class="container">
			<h2>Features and/or Benefits</h2>
			<div class="row">
             <?php if( have_rows('features_and/or_benefits', $queried_object) ): ?>
       		<?php while( have_rows('features_and/or_benefits', $queried_object) ): the_row(); ?>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h5><a href="<?php the_sub_field('link'); ?>"> <?php the_sub_field('title'); ?></a></h5>
					<p> <?php the_sub_field('content'); ?></p>
				</div>
			<?php endwhile; ?>
            <?php endif; ?>
			
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 systems-serving">
				<h2>Learn about Clear-Com systems serving this market</h2>
				<div class="row">
                 <?php if( have_rows('learn_about_clear_com', $queried_object) ): ?>
       		<?php while( have_rows('learn_about_clear_com', $queried_object) ): the_row(); ?>
					<div class="col-xs-12 col-sm-6 col-md-4 systems-serving-in">
						<img src="<?php the_sub_field('image'); ?>" alt="">
						<h5><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></h5>
						<p><?php the_sub_field('content'); ?>
						</p>
					</div>
             <?php endwhile; ?>
            <?php endif; ?>
				
				</div>
			</div>
		</div>
	</div>

	<!--  -->


	<div class="relatednews">
		<div class="container">
			<h2>Customer storeis form users like yous</h2>

			<div class="row">
				<div id="myCarousel" class="carousel slide news" data-ride="carousel">
        			<!-- Wrapper for carousel items -->
			        <div class="carousel-inner">
			            <div class="item active ">
            <?php if( have_rows('customer_storeis', $queried_object) ): ?>
       		<?php while( have_rows('customer_storeis', $queried_object) ): the_row(); ?>
			                <article>
			                	<div class="newsimg">
			                		<img src="<?php the_sub_field('image'); ?>" alt="">
			                	</div>
			                	<h5><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?>  </a></h5>
			                	<p><?php the_sub_field('content'); ?></p>
			                </article>
             <?php endwhile; ?>
            <?php endif; ?>
			            </div>
			            <div class="item ">
			 <?php if( have_rows('customer_storeis', $queried_object) ): ?>
       		<?php while( have_rows('customer_storeis', $queried_object) ): the_row(); ?>
			                <article>
			                	<div class="newsimg">
			                		<img src="<?php the_sub_field('image'); ?>" alt="">
			                	</div>
			                	<h5><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?>  </a></h5>
			                	<p><?php the_sub_field('content'); ?></p>
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
		<div class="row">
        
			<div class="col-xs-12 application-diagrams">
				<h2>Sample Market Application Diagrams</h2> 
			<?php if( have_rows('market_application_diagrams', $queried_object) ): ?>
       		<?php while( have_rows('market_application_diagrams', $queried_object) ): the_row(); ?>
				<img src="<?php the_sub_field('image'); ?>" alt="">
				<p>
					<i class="fa fa-angle-right" aria-hidden="true"></i>
					<a href="<?php the_sub_field('link'); ?>"><u><?php the_sub_field('title'); ?></u></a>
				</p>
				
            <?php endwhile; ?>
            <?php endif; ?>
				<div class="col-xs-12 ending-app">
					<a href="#" class="gen-btn-clear">Need help? Contact us today</a>
				</div>
			</div>
			
			
		</div>
	</div>
	<!--=================== solution finder  ================================== -->

	<div class="training">
		<div class="container">
			<div class="row">
				  <?php if( have_rows('get', $queried_object) ): ?>
       				<?php while( have_rows('get', $queried_object) ): the_row(); ?>
				<div class="col-xs-12 training-content">
					<img src="<?php the_sub_field('image'); ?>" alt="">
					<h5><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></h5>
					<p>
						<?php the_sub_field('content'); ?>
					</p>
					<a href="<?php the_sub_field('paper'); ?>" target="_blank" class="gen-btn-clear">Get your Free White Paper</a>
				</div>
             <?php endwhile; ?>
            <?php endif; ?>
			</div>
		</div>
	</div>

	<!--=================== your choice ================================== -->

	<section class="listtype">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
					<h4>Press Relaease</h4>
					<ul>
                    <?php if( have_rows('press_relaease', $queried_object) ): ?>
       				<?php while( have_rows('press_relaease', $queried_object) ): the_row(); ?>
				
						<li>
							<img src="<?php the_sub_field('image'); ?>" alt="">
							<h5><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></h5>
							<p><?php the_sub_field('content'); ?></p>
						</li>
                    <?php endwhile; ?>
          		    <?php endif; ?>
					
						
					</ul>
					<a href="#" class="viewmore">View More > </a>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
					<h4>New Updates</h4>
					<ul>
					<?php if( have_rows('new_updates', $queried_object) ): ?>
       				<?php while( have_rows('new_updates', $queried_object) ): the_row(); ?>
				
						<li>
							<img src="<?php the_sub_field('image'); ?>" alt="">
							<h5><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></h5>
							<p><?php the_sub_field('content'); ?></p>
						</li>
                    <?php endwhile; ?>
          		    <?php endif; ?>
						
					</ul>
					<a href="#" class="viewmore">View More > </a>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
					<h4>Events</h4>
					<ul>
						<?php if( have_rows('events', $queried_object) ): ?>
       				<?php while( have_rows('events', $queried_object) ): the_row(); ?>
				
						<li>
							<img src="<?php the_sub_field('image'); ?>" alt="">
							<h5><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></h5>
							<p><?php the_sub_field('content'); ?></p>
						</li>
                    <?php endwhile; ?>
          		    <?php endif; ?>
						
					</ul>
					<a href="#" class="viewmore">View More > </a>
				</div>
				
			</div>
		</div>
	</section>

	<div class="readylink-head">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 readylink-head-content">
					<h3>Ready to speak to someone about your project needs?</h3>
					<a href="#" class="gen-btn-clear">Locate a Reseller in your area</a>
					<a href="#" class="gen-btn-clear">Contact Clear-Com Sales</a>
				</div>
			</div>
		</div>
	</div>
	<!--=================== footer  ================================== -->
<?php get_footer(); ?>