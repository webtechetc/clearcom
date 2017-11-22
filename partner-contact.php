<?php /* Template Name: Partner Contacts */ get_header(); ?>

	
	<!--=================== content area ================================== -->
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="clear-page-title">Find a Reseller</h3>	
				<div class="clearfix"></div>
				<p>Find a partner contact providing your desired product line in your region.</p>
			</div>


			<div class="col-xs-12 find-reseller-form market-form">
				
				<form action="">
					
					<div class="col-xs-12 col-sm-6 col-md-4 selct-box-reseller">
						<div class="row">
							<label>Select a country</label>
							<select>
								<option>United States</option>
							</select>
							<label>Select a state</label>
							<select>
								<option>United States</option>
							</select>

							<p>or</p>

							<label>Enter a US zip code</label>

							<input type="text" name="" value="">

						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 checkbox-box-reseller">
						
							<label>Select a product brand(s)</label>
							<ul>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										Concert Software
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										Eclipse Digital Matrix
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										Encore Partyline
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										FreeSpeak II
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										HelixNet Partyline
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										HME DX Series
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										ProGrid & BroaMan
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										WBS Analog Wireless
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										LQ Series
									</label>
								</li>

							</ul>
						
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 checkbox-box-reseller">
						<div class="row">
							<label>Select a market specialty(s)</label>
							<ul>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										Broadcast
									</label>
								</li>
								<li>
									<label>
										<input type="checkbox" name="" value="">
										Live Performance
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										Live Events
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										House of Worship
									</label>
								</li>
								
								<li>
									
									<label>
										<input type="checkbox" name="" value="">
										Sports Operations
									</label>
								</li>
								<li>
									<label>
										
										<input type="checkbox" name="" value="">
										Theme Parks
									</label>
								</li>
								<li>
									<label>
									
										<input type="checkbox" name="" value="">
										Marine-Offshore
									</label>
								</li>
								<li>
									<label>
									
										<input type="checkbox" name="" value="">
										Corporate AV
									</label>
								</li>
							</ul>
						</div>
					</div>

				</form>

			</div>

		</div>
	</div>
<div class="featured-partner">
		<div class="container">
			<h2>Featured Partners</h2>

			<div class="row">
				<div id="myCarousel" class="carousel slide featured-partner-slide" data-ride="carousel">
        			<!-- Wrapper for carousel items -->
			        <div class="carousel-inner">
			            <div class="item active ">
                        
                <?php
					$args = array(
					'post_type' => 'partner_contacts',
					'tax_query' => array(
					array(
					'taxonomy' => 'featured_partners',
					'field'    => 'slug',
					'terms'    => 'featured',
					),
				),
			);
					 $myposts = get_posts( $args );
                  
   					  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <article>
			                	<div class="newsimg">
			                		<?php the_post_thumbnail(); ?>
			                		<a href="<?php the_permalink();?>" class="gen-btn-clear btn-dark">Contact Partner</a>
			                	</div>
			                	<h5><a href="<?php the_permalink();?>"><?php the_title()?></a></h5>
			                	 <?php if( have_rows('partner_information', $queried_object) ): ?>
             					 <?php while( have_rows('partner_information', $queried_object) ): the_row(); ?>
			                	<p><?php the_sub_field('pat');?></p>
			                	<p>Tel: <?php the_sub_field('tel');?> </p>
			                	<p><?php the_sub_field('description');?> </p>
			                
			                	<?php endwhile; ?>
                				<?php endif; ?>
                                <?php 
                    
						if($count % 1 == 0)
						{
						echo '</ul></div><div class="item"><ul class="grg-li">';	
						}
						 endforeach;
						wp_reset_postdata();
						?>
			                </article>
                     
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
			<h2>Regional Partner</h2>
            <?php
					$args = array(
					'post_type' => 'partner_contacts',
					'tax_query' => array(
					array(
					'taxonomy' => 'featured_partners',
					'field'    => 'slug',
					'terms'    => 'regional',
					),
				),
			);
					 $myposts = get_posts( $args );
                  
   					  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

			<div class="col-xs-12 regional-content">
                <article>
					<div class="regional-img">
						<?php the_post_thumbnail(); ?>
						<a href="<?php the_permalink();?>" class="gen-btn-clear">Contact Partner</a>
                        </div>
					<h4><a href="<?php the_permalink();?>"><?php the_title()?></a></h4>
				  <?php if( have_rows('partner_information', $queried_object) ): ?>
                  <?php while( have_rows('partner_information', $queried_object) ): the_row(); ?>
                    <?php the_sub_field('description');?>
					<p>Tel:<?php the_sub_field('tel');?></p>
					<p>Fex:<?php the_sub_field('fex');?> </p>
					<p><?php the_sub_field('pat');?></p>
                 <?php endwhile; ?>
                <?php endif; ?>
				</article>
			
	
			</div>
<?php endforeach; 
    wp_reset_postdata();?>
	
		</div>	
	</div>
	
	<div class="regional-sales-manager">
		<div class="container">
			<div class="row">
				 <?php
					$args = array(
					'post_type' => 'partner_contacts',
					'tax_query' => array(
					array(
					'taxonomy' => 'featured_partners',
					'field'    => 'slug',
					'terms'    => 'sales',
					),
				),
			);
					 $myposts = get_posts( $args );
   					  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="col-xs-12 regional-sales-manager-content">
                <h2>Regional Sales Manager</h2>
               <?php if( have_rows('partner_information', $queried_object) ): ?>
              <?php while( have_rows('partner_information', $queried_object) ): the_row(); ?>
					<?php the_title()?>
                    <?php the_sub_field('description');?>
					<p>Tel:<?php the_sub_field('tel');?></p>
					<p>Fex:<?php the_sub_field('fex');?> </p>
					<p><?php the_sub_field('pat');?></p>
                <?php endwhile; ?>
                <?php endif; ?>
				</div>
		    <?php endforeach; 
            wp_reset_postdata();?>
			</div>
		</div>
	</div>
	

	<!--=================== footer  ================================== -->

	<?php get_footer(); ?>