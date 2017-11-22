<?php /* Template Name: Home  */ get_header(); ?>
<!--=================== Slider area ================================== -->
<section class="slider">
  <div id="myCarousel1" class="carousel slide mycarousel" data-ride="carousel"> 
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
    </ol>
    
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
      <div class="item active"> <img src="<?php echo get_template_directory_uri(); ?>/images/clear-slide.png" alt="First Slide"> 
          <div class="cantext">
              <div class="container">
                <div class="cantexting">
                  <h4>Discover the possibilites of connecting  your intercom over existing IT infrastructure</h4>
                  <p>Connect and Communicate from Anywhere</p>
                  <a href="#" class="slide-down gen-btn-clear">Download Whitepaper</a> </div>
              </div>
        </div>
    </div>
      <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/clear-slide.png" alt="Second Slide">
      
       <div class="cantext">
              <div class="container">
                <div class="cantexting">
                  <h4>Quality intercom</h4>
                  <p>Talented crew. Amazing experiences</p>
                  <a href="#" class="slide-down gen-btn-clear">Download Whitepaper</a> </div>
              </div>
        </div>
      
       </div>
      <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/clear-slide.png" alt="Third Slide"> 
      
      <div class="cantext">
              <div class="container">
                <div class="cantexting">
                  <h4>Product Family </h4>
                  <p></p>
                  <a href="#" class="slide-down gen-btn-clear">Download Whitepaper</a> </div>
              </div>
        </div>
      
      
      </div>
    </div>
    <!-- Carousel controls --> 
    <a class="carousel-control left" href="#myCarousel1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="carousel-control right" href="#myCarousel1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
    
  </div>
</section>

<!--=================== quick Task ================================== -->

<section class="quicktask text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>Quick Tasks</h2>
      </div>
      <div class="col-xs-12  col-sm-12 col-md-1"></div>
      <?php if(get_field('quick_tasks')): ?>
      <?php while(has_sub_field('quick_tasks')): ?>
      <div class="col-xs-12 col-sm-6 col-md-2 quicktaskin">
        <?php $image = get_sub_field('image'); ?>
        <img width="50" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
        <h4><a href="<?php the_sub_field('link'); ?>">
          <?php the_sub_field('label'); ?>
          </a></h4>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <div class="col-xs-12  col-sm-12 col-md-1"></div>
    </div>
  </div>
</section>
<div class="seprate">
  <div class="container">
    <div class="row">
      <?php if(get_field('quick_tasks_images')): ?>
      <?php while(has_sub_field('quick_tasks_images')): ?>
      <div class="col-xs-12 col-sm-4 col-md-3 sepratein ">
        <div class="imagevid">
          <?php $image = get_sub_field('image'); ?>
          <?php $icon = get_sub_field('icon'); ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" > <span> <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" >
          <p>
            <?php the_sub_field('excerpt'); ?>
          </p>
          </span> </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--=================== quick Task ================================== -->

<div class="bar-dark">
  <?php if(get_field('quick_task_text')): ?>
      <?php while(has_sub_field('quick_task_text')): ?>
  <div class="container">
    <p><?php the_sub_field('text');?></p> 
  </div>
   <?php endwhile; ?>
      <?php endif; ?>
</div>
<!--=================== your choice ================================== -->
<section class="listtype">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
        <h4>Social Media</h4>
        <?php echo do_shortcode("[arrow_sf id='333']")?>
        <div class="col-xs-12 socialshare">
        	<a href="https://www.linkedin.com/company/clear-com" target="_blank"><i class="fa fa-linkedin-square"></i></a>
            <a href="http://www.instagram.com/clearcom" target="_blank" class="insta"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/user/ClearcomIntercom" target="_blank"><i class="fa fa-youtube-square"></i></a>
            <a href="http://demo22.baytechdata.com/tech-blog/" target="_blank"><i class="fa fa-rss-square"></i></a>
      	</div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
        <h4>News Updates</h4>
        <ul>
          <li> <img src="<?php echo get_template_directory_uri(); ?>/images/wireless.png" alt="">
            <h5><a href="#">The Wireless Frontier</a></h5>
            <p>Clear-Com Encore™ Partyline Systems offer unsurpassed 2-wire...</p>
          </li>
          <li> <img src="<?php echo get_template_directory_uri(); ?>/images/wifi.png" alt="">
            <h5><a href="#">Wi-Fi: What Does the Name</a></h5>
            <p>Clear-Com Encore™ Partyline Systems offer unsurpassed 2-wire...</p>
          </li>
          <li> <img src="<?php echo get_template_directory_uri(); ?>/images/road.png" alt="">
            <h5><a href="#">ROAD REPORT: Space</a></h5>
            <p>Clear-Com Encore™ Partyline Systems offer unsurpassed 2-wire...</p>
          </li>
        </ul>
        <a href="#" class="viewmore">View More > </a> </div>
      <div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
        <h4>Blog Post</h4>
        <ul>
          <li> <img src="<?php echo get_template_directory_uri(); ?>/images/wireless.png" alt="">
            <h5><a href="#">The Wireless Frontier</a></h5>
            <p>Clear-Com Encore™ Partyline Systems offer unsurpassed 2-wire...</p>
          </li>
          <li> <img src="<?php echo get_template_directory_uri(); ?>/images/wifi.png" alt="">
            <h5><a href="#">Wi-Fi: What Does the Name</a></h5>
            <p>Clear-Com Encore™ Partyline Systems offer unsurpassed 2-wire...</p>
          </li>
          <li> <img src="<?php echo get_template_directory_uri(); ?>/images/road.png" alt="">
            <h5><a href="#">ROAD REPORT: Space</a></h5>
            <p>Clear-Com Encore™ Partyline Systems offer unsurpassed 2-wire...</p>
          </li>
        </ul>
        <a href="#" class="viewmore">View More > </a> </div>
    </div>
  </div>
</section>

<!--=================== explore  ================================== -->

<section class="explore">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Explore Clear-Com Products</h2>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 tab-slide-mix">
					<ul class="nav nav-tabs">
                    <?php 
						$args = array(
							'orderby'           => 'id', 
							'order'             => 'ASC',
							'parent'           => 0, 
							'hide_empty'        => false,
							'fields'            => 'all', 
						); 
						$terms = get_terms("product_family", $args);
						foreach($terms as $term)
						{
							//print_r($term->name);
							if(get_field('family_association', $term) == 'Wired intercom')
							{
								$wired[] = $term->term_id;
							}elseif(get_field('family_association', $term) == 'Wireless intercom')
							{
								$wireless[] = $term->term_id;
								//print_r($wireless);
							}
							elseif(get_field('family_association', $term) == 'IP communication')
							{
								$ip[] = $term->term_id;
							}
							elseif(get_field('family_association', $term) == 'Headsets & Accessories')
							{
								$headsets[] = $term->term_id;
							}
							elseif(get_field('family_association', $term) == 'Connectivity & Interoperability')
							{
								$connectivity[] = $term->term_id;
							}
						}?>
						<?php   if($wired){ echo '<li class="active"><a data-toggle="tab" href="#wired">Wired Intercom</a></li>';}
                                if($wireless){ echo '<li><a data-toggle="tab" href="#wireless">Wireless intercom</a></li>';}
								if($ip){ echo '<li><a data-toggle="tab" href="#ip">IP Communication</a></li>';}
								if($headsets){ echo '<li><a data-toggle="tab" href="#headsets">Connectivity & Interoperability</a></li>';}
								if($connectivity){ echo '<li><a data-toggle="tab" href="#connectivity">Headsets & Accesorries</a></li>';}?>
					</ul>	
			  		<div class="tab-content">
					    <div id="wired" class="tab-pane fade in active">
					      <div id="myCarousel" class="carousel slide mycarousel" data-ride="carousel">
					        	<!-- Wrapper for carousel items -->
						        <div class="carousel-inner">
                                <div class="item active ">
						        <div class="row">
                                <?php 
									$count = 0;
									foreach($wired as $term)
									  {
										$product_term = get_term( $term, 'product_family' );
										$count++;
										?>
						            
								            <div class="col-xs-12 col-sm-6 col-md-3 data-explore">
							                	<?php $img =  get_field('product_family_image', $product_term);
												 $url = $img['url'];
												 $title = $image['title'];
												 $alt = $image['alt'];
												 $caption = $image['caption'];
												 $size = 'home_product';
												 $thumb = $img['sizes'][ $size ];
												 $width = $img['sizes'][ $size . '-width' ];
												 $height = $img['sizes'][ $size . '-height' ];
												// print_r($img);
											  ?>
											  	<div class="data-explore-img">
											  	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" style="max-width:100%; max-height:100%" />
											  	<div class="data-explore-hover">
											  		<p><?php echo substr($product_term->description,0,150); ?></p>
											  	</div>
											  </div>
                                                 <h4><a href="<?php echo get_term_link( $product_term ); ?>"><?php echo $product_term->name; ?></a></h4>
							                </div>
							                
						                
                                   <?php if($count % 4 == 0)
										{
											echo '</div></div><div class="item "><div class="row">';	
										} 
									} ?>
                                   </div>
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
                        <div id="wireless" class="tab-pane fade in">
					      <div id="myCarousel" class="carousel slide mycarousel" data-ride="carousel">
					        	<!-- Wrapper for carousel items -->
						        <div class="carousel-inner">
                                <div class="item active ">
						        <div class="row">
                                <?php 
									$count = 0;
									foreach($wireless as $term)
									  {
										$product_term = get_term( $term, 'product_family' );
										$count++;
										?>
						            
								            <div class="col-xs-12 col-sm-6 col-md-3 data-explore">
							                	<?php $img =  get_field('product_family_image', $product_term);
												 $url = $img['url'];
												 $title = $image['title'];
												 $alt = $image['alt'];
												 $caption = $image['caption'];
												 $size = 'home_product';
												 $thumb = $img['sizes'][ $size ];
												 $width = $img['sizes'][ $size . '-width' ];
												 $height = $img['sizes'][ $size . '-height' ];
												// print_r($img);
											  ?>
											  <div class="data-explore-img">
											  	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" style="max-width:100%; max-height:100%" />
											  	<div class="data-explore-hover">
											  		<p><?php echo substr($product_term->description,0,150); ?></p>
											  	</div>
											  </div>
                                                 <h4><a href="<?php echo get_term_link( $product_term ); ?>"><?php echo $product_term->name; ?></a></h4>
							                </div>
							                
						                
                                   <?php if($count % 4 == 0)
										{
											echo '</div></div><div class="item "><div class="row">';	
										} 
									} ?>
                                   </div>
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
                        <div id="ip" class="tab-pane fade in">
					      <div id="myCarousel" class="carousel slide mycarousel" data-ride="carousel">
					        	<!-- Wrapper for carousel items -->
						        <div class="carousel-inner">
                                <div class="item active ">
						        <div class="row">
                                <?php 
									$count = 0;
									foreach($ip as $term)
									  {
										$product_term = get_term( $term, 'product_family' );
										$count++;
										?>
						            
								            <div class="col-xs-12 col-sm-6 col-md-3 data-explore">
							                	<?php $img =  get_field('product_family_image', $product_term);
												 $url = $img['url'];
												 $title = $image['title'];
												 $alt = $image['alt'];
												 $caption = $image['caption'];
												 $size = 'home_product';
												 $thumb = $img['sizes'][ $size ];
												 $width = $img['sizes'][ $size . '-width' ];
												 $height = $img['sizes'][ $size . '-height' ];
												// print_r($img);
											  ?>
											<div class="data-explore-img">
											  	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" style="max-width:100%; max-height:100%" />
											  	<div class="data-explore-hover">
											  		<p><?php echo substr($product_term->description,0,150); ?></p>
											  	</div>
											</div>
											  <h4><a href="<?php echo get_term_link( $product_term ); ?>"><?php echo $product_term->name; ?></a></h4>
							                </div>
							                
						                
                                   <?php if($count % 4 == 0)
										{
											echo '</div></div><div class="item "><div class="row">';	
										} 
									} ?>
                                   </div>
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
                        <div id="headsets" class="tab-pane fade in">
					      <div id="myCarousel" class="carousel slide mycarousel" data-ride="carousel">
					        	<!-- Wrapper for carousel items -->
						        <div class="carousel-inner">
                                <div class="item active ">
						        <div class="row">
                                <?php 
									$count = 0;
									foreach($headsets as $term)
									  {
										$product_term = get_term( $term, 'product_family' );
										$count++;
										?>
						            
								            <div class="col-xs-12 col-sm-6 col-md-3 data-explore">
							                	<?php $img =  get_field('product_family_image', $product_term);
												 $url = $img['url'];
												 $title = $image['title'];
												 $alt = $image['alt'];
												 $caption = $image['caption'];
												 $size = 'home_product';
												 $thumb = $img['sizes'][ $size ];
												 $width = $img['sizes'][ $size . '-width' ];
												 $height = $img['sizes'][ $size . '-height' ];
												// print_r($img);
											  ?>
											 <div class="data-explore-img">
											  	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" style="max-width:100%; max-height:100%" />
											  	<div class="data-explore-hover">
											  		<p><?php echo substr($product_term->description,0,150); ?></p>
											  	</div>
											  </div>
                                                 <h4><a href="<?php echo get_term_link( $product_term ); ?>"><?php echo $product_term->name; ?></a></h4>
							                </div>
							                
						                
                                   <?php if($count % 4 == 0)
										{
											echo '</div></div><div class="item "><div class="row">';	
										} 
									} ?>
                                   </div>
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
                        <div id="connectivity" class="tab-pane fade in">
					      <div id="myCarousel" class="carousel slide mycarousel" data-ride="carousel">
					        	<!-- Wrapper for carousel items -->
						        <div class="carousel-inner">
                                <div class="item active ">
						        <div class="row">
                                <?php 
									$count = 0;
									foreach($connectivity as $term)
									  {
										$product_term = get_term( $term, 'product_family' );
										$count++;
										?>
						            
								            <div class="col-xs-12 col-sm-6 col-md-3 data-explore">
							                	<?php $img =  get_field('product_family_image', $product_term);
												 $url = $img['url'];
												 $title = $image['title'];
												 $alt = $image['alt'];
												 $caption = $image['caption'];
												 $size = 'home_product';
												 $thumb = $img['sizes'][ $size ];
												 $width = $img['sizes'][ $size . '-width' ];
												 $height = $img['sizes'][ $size . '-height' ];
												// print_r($img);
											  ?>
											  <div class="data-explore-img">
											  	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" style="max-width:100%; max-height:100%" />
											  	<div class="data-explore-hover">
											  		<p><?php echo substr($product_term->description,0,150); ?></p>
											  	</div>
											  </div>
                                                 <h4><a href="<?php echo get_term_link( $product_term ); ?>"><?php echo $product_term->name; ?></a></h4>
							                </div>
							                
						                
                                   <?php if($count % 4 == 0)
										{
											echo '</div></div><div class="item "><div class="row">';	
										} 
									} ?>
                                   </div>
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
			</div>
		</div>
	</section>

<!--=================== solutions  ================================== -->

<section class="solutions">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2>Find the Right Solutions for Your Market </h2>
      </div>
      <?php if(get_field('solutions_market')): ?>
      <?php while(has_sub_field('solutions_market')): ?>
      <?php $image = get_sub_field('image'); ?>
      <div class="col-xs-12 col-sm-6 col-md-3 solutions-in">
        <div class="shade-sol"> <img width="50" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" > <a href="<?php the_sub_field('link'); ?>">
          <?php the_sub_field('label'); ?>
          </a> </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<div class="bar-dark">
  <div class="container">
    <p>What are you searching for?</p>
    <div class="search-dark">
      <form action="">
        <input type="text" value="" name="s" class="darkinput">
        <input type="submit" value="search" >
      </form>
    </div>
  </div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
