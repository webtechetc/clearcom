<?php /* Template Name: Rental Support Result */ get_header(); ?>


	
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
					
					<?php
					 $args = array(
					'post_type' => 'support_partners',
					'tax_query' => array(
					array(
					'taxonomy' => 'partner_types',
					'field'    => 'slug',
					'terms'    => 'premier',
							),
						),
					);?>
                    
					<?php $myposts = get_posts( $args );$count = 0;
                    foreach ( $myposts as $post ) : setup_postdata( $post );$count++; 
                    ?>
                    <li><?php the_post_thumbnail();?></li>
                    <?php 
                    
                    if($count % 4 == 0)
                    {
                    echo '</ul></div><div class="item"><ul class="grg-li">';	
                    }
					 endforeach;
                    wp_reset_postdata();
                    ?>
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
     	
				   
				<div class="row">
                 	<?php
					$args = array(
					'post_type' => 'support_partners',
					'tax_query' => array(
					array(
					'taxonomy' => 'partner_types',
					'field'    => 'slug',
					'terms'    => 'corporate',
					),
				),
			);
					 $myposts = get_posts( $args );
                  
   					  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                   
       				 <div class="col-xs-12 col-sm-6 col-md-4 leftin">
                
						<div class="leftin-img"><?php the_post_thumbnail(); ?></div>
						<h5><a href="<?php the_permalink();?>"><?php the_title()?></a></h5>
						<p><?php echo substr(get_the_content(),0,150); ?> </p>
                        
             <?php if( have_rows('premier_partners', $queried_object) ): ?>
              <?php while( have_rows('premier_partners', $queried_object) ): the_row(); ?>
              <p><?php the_sub_field('tel');?></p>
              <P><a href="<?php the_sub_field('link');?>">Web:<?php the_sub_field('web');?></P>
               
                 <?php endwhile; ?>
                <?php endif; ?>
				<a href="<?php the_permalink();?>" class="gen-btn-clear">Read More</a>
					</div>
    <?php endforeach; 
	
    wp_reset_postdata();?>
				

				</div>
				
				<div class="row">
                 	<?php
					$args = array(
					'post_type' => 'support_partners',
					'tax_query' => array(
					array(
					'taxonomy' => 'partner_types',
					'field'    => 'slug',
					'terms'    => 'professional',
					),
				),
			);
					 $myposts = get_posts( $args );
                  
   					  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                   
       				 <div class="col-xs-12 col-sm-6 col-md-4 leftin">
                
						<div class="leftin-img"><?php the_post_thumbnail(); ?></div>
						<h5><a href="<?php the_permalink();?>"><?php the_title()?></a></h5>
						<p><?php echo substr(get_the_content(),0,150); ?> </p>
                        
             <?php if( have_rows('premier_partners', $queried_object) ): ?>
              <?php while( have_rows('premier_partners', $queried_object) ): the_row(); ?>
              <p><?php the_sub_field('tel');?></p>
              <P><a href="<?php the_sub_field('link');?>">Web:<?php the_sub_field('web');?></P>
               
                 <?php endwhile; ?>
                <?php endif; ?>
				<a href="<?php the_permalink();?>" class="gen-btn-clear">Read More</a>
					</div>
    <?php endforeach; 
	
    wp_reset_postdata();?>
				

				</div>		

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