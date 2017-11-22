<?php /* Template Name: Support */ get_header(); ?>

	<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>

	
	<!--=================== content area ================================== -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 res-content-top">
				<h3 class="clear-page-title">Support</h3>	
				
			</div>
	
		<!--=================== quick Task ================================== -->


		<section class="quicktask support-task text-center">
			
			<div class="col-xs-12 col-sm-12 col-md-1"></div>
              <?php if( have_rows('support', $queried_object) ): ?>
       		<?php while( have_rows('support', $queried_object) ): the_row(); ?>
			<div class="col-xs-12 col-sm-6 col-md-2 quicktaskin">
				<img src="<?php the_sub_field('image');?>" alt="">
				<h4><a href="<?php the_sub_field('link');?>">	<?php the_sub_field('title');?></a></h4>
			</div>
            <?php endwhile; ?>
        <?php endif; ?>
			
			<div class="col-xs-12 col-sm-12 col-md-1"></div>
				
		</section>
		
			
		</div>
	</div>

	<!--=================== solution finder  ================================== -->

	<div class="solution-finder">
		<div class="container">
			<div class="row">
            
            <?php if( have_rows('solution_finder', $queried_object) ): ?>
       		<?php while( have_rows('solution_finder', $queried_object) ): the_row(); ?>
				
				<div class="col-xs-12 col-sm-12 col-md-6 left-solution">
					<h2>Solution Finder</h2>
					<p><?php the_sub_field('content');?> <a href="">
					</a></p>
				</div>
			<?php endwhile; ?>
            <?php endif; ?>
				<div class="col-xs-12 col-sm-12 col-md-6 right-find">
					<div class="findsolution">
						<form role="search" method="get" action="<?php echo home_url(); ?>">
							<strong>Search for</strong>
                           
							<input type="text" placeholder="Type Keyword" type="search" name="s">
							<span>in</span>
							<select>
								<option>All Solutions</option>
							</select>
							<input type="submit" value="">
						</form>
					</div>
					<p><strong>Browse Solutions in</strong>  <a href="#">Clear-Com</a>  or  <a href="#">Uncategorized</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
        
			<div class="col-xs-12 col-sm-6 col-md-6 pro-support">
            <h2>Product Support</h2>
            <?php if( have_rows('product_support', $queried_object) ): ?>
       		<?php while( have_rows('product_support', $queried_object) ): the_row(); ?>
				
				<p><?php the_sub_field('description');?></p>
				<div class="search-pro-support">
					<form action="">
						<input name="" value="" placeholder="Ex. MS702, FreeSpeak II Base, or HMS-4X " type="text">
					</form>
				</div>
				<p><?php the_sub_field('read_our_policies');?></p>
         <?php endwhile; ?>
        <?php endif; ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 pro-getalerts">
            <?php if( have_rows('product_firmware_and_software', $queried_object) ): ?>
       		<?php while( have_rows('product_firmware_and_software', $queried_object) ): the_row(); ?>
			<h2><?php the_sub_field('title');?></h2>
			<img src="<?php the_sub_field('feature_image');?>" alt="">
        <?php endwhile; ?>
        <?php endif; ?>
			</div>
		</div>
	</div>

	<!--=================== solution finder  ================================== -->

	<div class="training">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Training</h2>
				</div>
				<div class="col-xs-12 training-content">
				<?php if( have_rows('training', $queried_object) ): ?>
                <?php while( have_rows('training', $queried_object) ): the_row(); ?>
			
				<img src="<?php the_sub_field('image');?>" alt="">
				<p><?php the_sub_field('text');?></p>
				<a href="#" class="gen-btn-clear">Learn More</a>
				<a href="#" class="gen-btn-clear">Request Product Training</a>
			 <?php endwhile; ?>
             <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<div id="myCarousel" class="carousel slide runixslide" data-ride="carousel">
	    			<!-- Wrapper for carousel items -->
			        <div class="carousel-inner">
			            <div class="item active ">
                        <?php if( have_rows('slider', $queried_object) ): ?>
                <?php while( have_rows('slider', $queried_object) ): the_row(); ?>
			                <article>
                
			                	<div class="runiximg">
			                		<img src="<?php the_sub_field('image');?>" alt="">
			                	</div>
			                	<h5><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></h5>
			                	<p>
			                		<?php the_sub_field('description');?>
			                	</p>
             
			                </article>
              <?php endwhile; ?>
             <?php endif; ?>
			            </div>
			            <div class="item ">
                 <?php if( have_rows('slider1', $queried_object) ): ?>
                <?php while( have_rows('slider1', $queried_object) ): the_row(); ?>
			            	<article>
			                	<div class="runiximg">
			                		<img src="<?php the_sub_field('image');?>" alt="">
			                	</div>
			                	<h5><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></h5>
			                	<p>
			                			<?php the_sub_field('description');?>
			                	
			                	</p>
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

	<div class="ReachUs">
		<div class="container">
			<div class="row">
            	<?php if( have_rows('reach_us_for_support', $queried_object) ): ?>
                <?php while( have_rows('reach_us_for_support', $queried_object) ): the_row(); ?>
				<div class="col-xs-12">
					<h2>How to Reach Us for Support</h2>
					<div class="clearfix"></div>
					<h4><a href="<?php the_sub_field('link');?>"><?php the_sub_field('email_form');?></a></h4>
				</div>
				 <?php endwhile; ?>
                 <?php endif; ?>
			</div>
			
			<div class="row">
            <?php if( have_rows('sales_&_orders_inquiries', $queried_object) ): ?>
            <?php while( have_rows('sales_&_orders_inquiries', $queried_object) ): the_row(); ?>
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<h3>Sales & Orders Inquiries</h3>	
					<p><?php the_sub_field('content');?></p>		
					<a href="#" class="gen-btn-clear">Submit a Support Request Form</a>
				</div>	
                 <?php endwhile; ?>
                 <?php endif; ?>
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<h4>The Americas</h4>
            <?php if( have_rows('_orders_inquiries_information', $queried_object) ): ?>
            <?php while( have_rows('_orders_inquiries_information', $queried_object) ): the_row(); ?>
					<p><?php the_sub_field('tel');?></p>
					<p><?php the_sub_field('hours');?></p>
					<p><?php the_sub_field('email');?></p>
                 <?php endwhile; ?>
                 <?php endif; ?>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<h4>Europe, Middle East & Africa</h4>
            <?php if( have_rows('europe,_middle_east_&_africa', $queried_object) ): ?>
            <?php while( have_rows('europe,_middle_east_&_africa', $queried_object) ): the_row(); ?>
					<p><?php the_sub_field('tel');?></p>
					<p><?php the_sub_field('hours');?></p>
					<p><?php the_sub_field('email');?></p>
                 <?php endwhile; ?>
                 <?php endif; ?>
				</div>
			</div>

			<div class="row">
            <?php if( have_rows('technical_support_requests', $queried_object) ): ?>
            <?php while( have_rows('technical_support_requests', $queried_object) ): the_row(); ?>
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<h3>Technical Support Requests</h3>	
					<p><?php the_sub_field('content');?></p>		
					<a href="#" class="gen-btn-clear">Submit a Support Request Form</a>
				</div>	
                  <?php endwhile; ?>
                 <?php endif; ?>
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<h4>The Americas</h4>
			<?php if( have_rows('the_americas', $queried_object) ): ?>
            <?php while( have_rows('the_americas', $queried_object) ): the_row(); ?>
					<p><?php the_sub_field('tel');?></p>
					<p><?php the_sub_field('hours');?></p>
					<p><?php the_sub_field('email');?></p>
                 <?php endwhile; ?>
                 <?php endif; ?>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<h4>Europe, Middle East & Africa</h4>
		    <?php if( have_rows('europe,_middle', $queried_object) ): ?>
            <?php while( have_rows('europe,_middle', $queried_object) ): the_row(); ?>
					<p><?php the_sub_field('tel');?></p>
					<p><?php the_sub_field('hours');?></p>
					<p><?php the_sub_field('email');?></p>
                 <?php endwhile; ?>
                 <?php endif; ?>
				</div>
			</div>	

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 "></div>
				<div class="col-xs-12 col-sm-12 col-md-8">
            <?php if( have_rows('support_content', $queried_object) ): ?>
            <?php while( have_rows('support_content', $queried_object) ): the_row(); ?>
					  <p><?php the_sub_field('description');?> </p>
                 <?php endwhile; ?>
                 <?php endif; ?>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<h3>Product Repair Requests</h3>
             <?php if( have_rows('product_repair_requests', $queried_object) ): ?>
            <?php while( have_rows('product_repair_requests', $queried_object) ): the_row(); ?>	
					<p><?php the_sub_field('content');?> </p>		
					<a href="#" class="gen-btn-clear">Submit a Support Request Form</a>
                 <?php endwhile; ?>
                 <?php endif; ?>
				</div>	
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<h4>The Americas</h4>
					  <?php if( have_rows('americas', $queried_object) ): ?>
            <?php while( have_rows('americas', $queried_object) ): the_row(); ?>
					<p><?php the_sub_field('tel');?></p>
					<p><?php the_sub_field('hours');?></p>
					<p><?php the_sub_field('email');?></p>
                 <?php endwhile; ?>
                 <?php endif; ?>
				</div>
			</div>	
							
		</div>
		
	</div>
	

<?php get_footer(); ?>
