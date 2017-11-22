  <?php  get_header(); ?>
  
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
				  <h3 class="clear-page-title">Product Landing</h3>	
			  </div>			
		  </div>
	  </div>
  
	  <!--=================== product  ================================== -->
  
	  <section class="product">
		  <div class="container">
			  <div class="row">
				  
				  <div class="col-xs-12 col-sm-12 col-md-12 tab-slide-mix">
					  <ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#home">Wired Intercom</a></li>
						  <li><a data-toggle="tab" href="#menu1">Wired Intercom</a></li>
						  <li><a data-toggle="tab" href="#menu2">IP Communication</a></li>
						  <li><a data-toggle="tab" href="#menu3">Connectivity & Interoperability</a></li>
						  <li><a data-toggle="tab" href="#menu4">Headsets & Accesorries</a></li>
					  </ul>	
					  <div class="tab-content">
						  
						  <div id="home" class="tab-pane fade in active">
							<p>For decades, Clear-Com has been the leader in wired communication solutions. Clear-Com was the first to market distributed wired beltpacks to the live performance market and has since installed its full-duplex, group communication solutions to tens of thousands of facilities worldwide across multiple vertical markets. </p>
  
							  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 link-tab-in">
  
								  <div class="col-xs-12 col-sm-6 col-md-3 ">
									  <h5><a href="#">Lorem ipusm dolor sit</a></h5>
								  </div>
								  <div class="col-xs-12 col-sm-6 col-md-3 ">
									  <h5><a href="#">Lorem ipusm dolor sit</a></h5>
								  </div>
								  <div class="col-xs-12 col-sm-6 col-md-3 ">
									  <h5><a href="#">Lorem ipusm dolor sit</a></h5>
								  </div>
								  <div class="col-xs-12 col-sm-6 col-md-3 ">
									  <h5><a href="#">Lorem ipusm dolor sit</a></h5>
								  </div>
							  </div>
                               
  							<?php 
							   $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'orderby' => 'ID', 'order' => 'ASC' );
							   $the_query = new WP_Query( $args ); 
							   ?>
							   <?php
							   if ( $the_query->have_posts() )
							   {
								   while ( $the_query->have_posts() ) { 
									   $the_query->the_post();
								?>
							  <div class="row">
                              
							  
							   <div class="col-xs-12 col-sm-12 col-md-4 product-side-img">
							   <div class="imgside-pro">
                               <?php the_post_thumbnail(); ?>
								<!--<img src="<?php //echo get_template_directory_uri(); ?>/images/big-pro.png" alt="">-->
								<div class="hover-pro">
								<?php echo substr(get_the_content(),0,150); ?>
											  <a href="<?php the_permalink();?>">Read More</a>
										  </div>
										  
									  </div>
                                      <h4 class="text-center"><a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a></h4>
									  
								  </div>
                 
								  <div class="col-xs-12 col-sm-12 col-md-8  product-slide">
									  <ul class="parts-divider-link">
										  <li class="active"><a href="#">Main Station </a></li>
										  <li><a href="#"> Remote Stations </a></li>
										  <li><a href="#">Wired Beltpacks   </a></li>
										  <li><a href="#">Power Supplies</a></li>
										  <li><a href="#">Wall-mount/Speaker Stations</a></li>
										  <li><a href="#"> Quecom</a></li>
										  <li><a href="#">Accessorires</a></li>
									  </ul> 
  
									  <div id="myCarouselP" class="carousel slide product-slide" data-ride="carousel">
										  <!-- Wrapper for carousel items -->
										  <div class="carousel-inner">
											  <div class="item active ">
												  <ul class="pro-li">
													  <li>
														  <div class="proli-img"><img src="<?php echo get_template_directory_uri(); ?>/images/amp1.png" alt=""></div>
														  <h5><a href="#">CS-702</a></h5>
														  <p>2-Channel Portable Headset Main Station</p>
													  </li>
													  <li>
														  <div class="proli-img"><img src="<?php echo get_template_directory_uri(); ?>/images/amp2.png" alt=""></div>
														  <h5><a href="#">MS-702</a></h5>
														  <p>2-Channel Headset/Speaker Main Station</p>
													  </li>
													  <li>
														  <div class="proli-img"><img src="<?php echo get_template_directory_uri(); ?>/images/amp3.png" alt=""></div>
														  <h5><a href="#">MS-704</a></h5>
														  <p>4-Channel Headset/Speaker Main Station</p>
													  </li>
													  <li>
														  <div class="proli-img"><img src="<?php echo get_template_directory_uri(); ?>/images/amp4.png" alt=""></div>
														  <h5><a href="#">RCS-2700</a></h5>
														  <p>8 x 24-Channel Programmable Station-Assignment Panel</p>
													  </li>
													  <li>
														  <div class="proli-img"><img src="<?php echo get_template_directory_uri(); ?>/images/amp5.png" alt=""></div>
														  <h5><a href="#">SB-704</a></h5>
														  <p>4-Channel Switchboard Main Station</p>
													  </li>
												  </ul>
											  </div>
											  <div class="item ">
												  <ul class="pro-li">
													  <li>
														  <div class="proli-img"><img src="<?php echo get_template_directory_uri(); ?>/images/amp1.png" alt=""></div>
														  <h5><a href="#">CS-702</a></h5>
														  <p>2-Channel Portable Headset Main Station</p>
													  </li>
													  <li>
														  <div class="proli-img"><img src="<?php echo get_template_directory_uri(); ?>/images/amp2.png" alt=""></div>
														  <h5><a href="#">MS-702</a></h5>
														  <p>2-Channel Headset/Speaker Main Station</p>
													  </li>
													  <li>
														  <div class="proli-img"><img src="<?php echo get_template_directory_uri(); ?>/images/amp3.png" alt=""></div>
														  <h5><a href="#">MS-704</a></h5>
														  <p>4-Channel Headset/Speaker Main Station</p>
													  </li>
													  <li>
														  <div class="proli-img"><img src="<?php echo get_template_directory_uri(); ?>/images/amp4.png" alt=""></div>
														  <h5><a href="#">RCS-2700</a></h5>
														  <p>8 x 24-Channel Programmable Station-Assignment Panel</p>
													  </li>
													  <li>
														  <div class="proli-img"><img src="<?php echo get_template_directory_uri(); ?>/images/amp5.png" alt=""></div>
														  <h5><a href="#">SB-704</a></h5>
														  <p>4-Channel Switchboard Main Station</p>
													  </li>
												  </ul>
											  </div>
										  </div>
										  <!-- Carousel controls -->
										  <a class="carousel-control left" href="#myCarouselP" data-slide="prev">
											  <img src="<?php echo get_template_directory_uri(); ?>/images/left-icon.png" alt="">
										  </a>
										  <a class="carousel-control right" href="#myCarouselP" data-slide="next">
											  <img src="<?php echo get_template_directory_uri(); ?>/images/right-icon.png" alt="">
										  </a>
									  </div>
								  </div>
							  </div>
 					<?php
					 }
	
					 wp_reset_postdata();
	
					 }
				 	?>
                    </div>
  				
						  <div id="menu1" class="tab-pane fade">
							<h3>Menu 1</h3>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						  </div>
						  <div id="menu2" class="tab-pane fade">
							<h3>Menu 2</h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
						  </div>
						  <div id="menu3" class="tab-pane fade">
							<h3>Menu 3</h3>
							<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						  </div>
					  </div>
				  </div>
			  </div>
		  </div>
	  </section>
  
	  <!--=================== product  last ================================== -->
  
	  <section class="product-last">
		  <div class="container">
			  <div class="row">
				  <div class="col-xs-12 col-sm-4 col-md-4 product-last-col">
					  <div>
					  <h4>Looking for product manuals, datasheets, or software/firmware?</h4>
					  <a href="#" class="gen-btn-clear btn-dark">Click Here</a>
					  <img src="<?php echo get_template_directory_uri(); ?>/images/look.png" alt="">
					  </div>
					  
					  
				  </div>
  
				  <div class="col-xs-12 col-sm-4 col-md-4 product-last-col">
				  <div>
					  <h4>Get alerts on product firmware andsoftware updates</h4>
					  <a href="#" class="gen-btn-clear btn-dark">Sign Up Now</a>
					  <img src="<?php echo get_template_directory_uri(); ?>/images/mailing.png" alt="">
				  </div>
				  </div>
  
				  <div class="col-xs-12 col-sm-4 col-md-4 product-last-col">
				  <div>
					  <h4>Keep up with our laest company or product updates. Sign up for our mailing listing.</h4>
					  <a href="#" class="gen-btn-clear btn-dark">Join Now</a>
					  <img src="<?php echo get_template_directory_uri(); ?>/images/alerts.png" alt="">
				  </div>	
				  </div>
			  </div>
		  </div>
	  </section>
  
  
	  <!--=================== footer  ==============================	
  
  <?php get_footer(); ?>
