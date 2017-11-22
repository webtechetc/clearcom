<?php  get_header(); 
$queried_object = get_queried_object(); 
?>
	
	<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>

	
	<!--=================== content area ================================== -->
		
	<div class="container">
		<div class="row">
			<div class="col-xs-12 search-result-suuport-head">
				<h4>Rental Support Search Result</h4>
				<h2>Get Connected with a Global Rental Partner</h2>
				<div class="search-result-suuport">
					<form action="">
						<select name="" id="input"  required="required">
							<option value="">Location</option>
						</select>
						<select name="" id="input"  required="required">
							<option value="">Products</option>
						</select>
						<span>or</span>
						<input type="text" name="" value=""  placeholder="Search by Postal Code">
					</form>

				</div>
			</div>
		</div>
	</div>

	<div class="relatednews">
		<div class="container">
			<h2>GRG Premier Members</h2>

			<div class="row">
				<div id="myCarousel" class="carousel slide grgslide" data-ride="carousel">
        			<!-- Wrapper for carousel items -->
			        <div class="carousel-inner">
			            <div class="item active ">
			                <ul class="grg-li">
			                	<li><img src="<?php echo get_template_directory_uri(); ?>/images/4.png" alt=""></li>
			                	<li><img src="<?php echo get_template_directory_uri(); ?>/images/audio.png" alt=""></li>
			                	<li><img src="<?php echo get_template_directory_uri(); ?>/images/quip.png" alt=""></li>
			                	<li><img src="<?php echo get_template_directory_uri(); ?>/images/auto.png" alt=""></li>
			                </ul>
			            </div>
			            <div class="item ">
			            	<ul class="grg-li">
			                	<li><img src="<?php echo get_template_directory_uri(); ?>/images/4.png" alt=""></li>
			                	<li><img src="<?php echo get_template_directory_uri(); ?>/images/audio.png" alt=""></li>
			                	<li><img src="<?php echo get_template_directory_uri(); ?>/images/quip.png" alt=""></li>
			                	<li><img src="<?php echo get_template_directory_uri(); ?>/images/auto.png" alt=""></li>
			                </ul>
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

	<!--=================== content col ================================== -->
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9 support-left">
				
			  <?php if( have_rows('corporate_partners', $queried_object) ): ?>
              <?php while( have_rows('corporate_partners', $queried_object) ): the_row(); ?>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 leftin">
						<div class="leftin-img"><img src="<?php the_sub_field('image');?>" alt=""></div>
						<h5><a href="<?php the_sub_field('link');?>">Sound Associates (Theodore)<?php the_sub_field('title');?></a></h5>
						<p>5675 Rabbit Creek Dr. Theodore, AL 36582 <?php the_sub_field('description');?></p>
						<p>(251) 443-5001 <?php the_sub_field('tel');?></p>
						<p>www.soundassoc.com<?php the_sub_field('site_url');?></p>
						<a href="#" class="gen-btn-clear">Read More</a>
					</div>
				
					<!--<div class="col-xs-12 col-sm-6 col-md-4 leftin">
						<div class="leftin-img"><img src="<?php //echo get_template_directory_uri(); ?>/images/ver.png" alt=""></div>
						<h5><a href="#">Video Equipment Rentals / VER Rents—Glendale, CA (HQ)</a></h5>
						<p>912 Ruberta Avenue Glendale, CA 91201  </p>
						<p>(818) 956-1444 </p>
						<p>www.verrents.com</p>
						<a href="#" class="gen-btn-clear">Read More</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 leftin">
						<div class="leftin-img"><img src="<?php //echo get_template_directory_uri(); ?>/images/tala.png" alt=""></div>
						<h5><a href="#">Talamas Broadcast Equipment</a></h5>
						<p>145 California St. Newton, MA 02458  </p>
						<p>(617) 928-0788  </p>
						<p>www.talamas.com</p>
						<a href="#" class="gen-btn-clear">Read More</a>
					</div>


					<div class="col-xs-12 col-sm-6 col-md-4 leftin">
						<div class="leftin-img"><img src="<?php //echo get_template_directory_uri(); ?>/images/sai.png" alt=""></div>
						<h5><a href="#">Sound Associates (Theodore)</a></h5>
						<p>5675 Rabbit Creek Dr. Theodore, AL 36582 </p>
						<p>(251) 443-5001 </p>
						<p>www.soundassoc.com</p>
						<a href="#" class="gen-btn-clear">Read More</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 leftin">
						<div class="leftin-img"><img src="<?php //echo get_template_directory_uri(); ?>/images/ver.png" alt=""></div>
						<h5><a href="#">Video Equipment Rentals / VER Rents—Glendale, CA (HQ)</a></h5>
						<p>912 Ruberta Avenue Glendale, CA 91201  </p>
						<p>(818) 956-1444 </p>
						<p>www.verrents.com</p>
						<a href="#" class="gen-btn-clear">Read More</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 leftin">
						<div class="leftin-img"><img src="<?php //echo get_template_directory_uri(); ?>/images/tala.png" alt=""></div>
						<h5><a href="#">Talamas Broadcast Equipment</a></h5>
						<p>145 California St. Newton, MA 02458  </p>
						<p>(617) 928-0788  </p>
						<p>www.talamas.com</p>
						<a href="#" class="gen-btn-clear">Read More</a>
					</div>
-->
					
				</div>
				<?php endwhile; ?>
                <?php endif; ?>


			</div>

			<!--=================== side col ================================== -->
			
			<div class="col-xs-12 col-sm-4 col-md-3 support-side side">
				<div class="side1">
					<img src="<?php echo get_template_directory_uri(); ?>/images/grg.png" alt="">
					<p>Can’t find the right Partner?</p>
					<a href="#" class="gen-btn-clear btn-dark">Contact Us</a>
				</div>
			</div>
		</div>
	</div>

	<!--=================== footer  ================================== -->

	<?php get_footer(); ?>