<?php /* Template Name: Events */ get_header(); ?>

	
<!--=================== Slider area ================================== -->

	<section class="slider">

		<div id="myCarousel1" class="carousel slide eventcarousel" data-ride="carousel">
	         
	        <!-- Wrapper for carousel items -->
	        <div class="carousel-inner">
	            <div class="item active">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="First Slide">
	            </div>
	            <div class="item">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="Second Slide">
	            </div>
	            <div class="item">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="Third Slide">
	            </div>
	        </div>
	        <!-- Carousel controls -->
	        <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="carousel-control right" href="#myCarousel1" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	       
    	</div>

	</section>

	
	<!--=================== content area ================================== -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="clear-page-title">Events</h3>	
				<h2 class="text-center datwise"> <?php //echo do_shortcode('[events_calendar long_events=0 ]');  ?> < February 2017 > </h2>
			</div>
		
	<!--=================== content col ================================== -->
	
			<div class="col-xs-12 col-sm-8 col-md-9 event-left">
			<!-- [events_list scope="future" limit=10 pagination=1] -->
					<?php //echo do_shortcode('[events_list scope="all" limit=10 pagination=1]' );  ?>
					<article>
						<div class="image-event">
							<img src="<?php echo get_template_directory_uri(); ?>/images/event.jpg">
						</div>
						<h4><a href="#">Events Title</a></h4>
						<p>Feb 28, 2017</p>
						<p>San Jose, CA</p>
						<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</strong></p>
						<a href="#" class="gen-btn-clear">Participate</a>
					</article>

					<!-- <article>
						<div class="image-event">
							<img src="<?php echo get_template_directory_uri(); ?>/images/event.jpg">
						</div>
						<h4><a href="#">Events Title</a></h4>
						<p>Feb 28, 2017</p>
						<p>San Jose, CA</p>
						<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</strong></p>
						<a href="#" class="gen-btn-clear">Participate</a>
					</article>

					<article>
						<div class="image-event">
							<img src="<?php echo get_template_directory_uri(); ?>/images/event.jpg">
						</div>
						<h4><a href="#">Events Title</a></h4>
						<p>Feb 28, 2017</p>
						<p>San Jose, CA</p>
						<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</strong></p>
						<a href="#" class="gen-btn-clear">Participate</a>
					</article>

					<article>
						<div class="image-event">
							<img src="<?php echo get_template_directory_uri(); ?>/images/event.jpg">
						</div>
						<h4><a href="#">Events Title</a></h4>
						<p>Feb 28, 2017</p>
						<p>San Jose, CA</p>
						<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</strong></p>
						<a href="#" class="gen-btn-clear">Participate</a>
					</article> -->
	
			</div>

			<!--=================== side col ================================== -->

			<div class="col-xs-12 col-sm-4 col-md-3 event-side side">
				<div class="event-filter">

					<?php dynamic_sidebar( 'widget-event' ); ?>
					<!-- <select>
						<option>Filter by Markets</option>
					</select>
					<h4>Upcoming Events</h4>
					<p><strong>Events Title</strong></p>
					<p>Mar 28, 2017</p>
					<p><strong>Events Title</strong></p>
					<p>Mar 28, 2017</p>
					<p><strong>Events Title</strong></p>
					<p>Mar 28, 2017</p>
					<p><strong>Events Title</strong></p>
					<p>Mar 28, 2017</p> -->
				</div>
			</div>

			<div class="col-xs-12 text-center">
				<!-- <ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul> -->
			</div>
		</div>
	</div>

<?php get_footer(); ?>
