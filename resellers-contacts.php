<?php /* Template Name: Resellers Contact */ get_header(); ?>
	<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>
	
	<!--=================== content area ================================== -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="clear-page-title">General Sales Contacts</h3>	
			</div>
<?php if( have_rows('resellers_contacts', $queried_object) ):   ?>
			<div class="col-xs-12 contact-sales">
					   <form action="" class="sales-form">
							<label>Select a country</label>
							<select>
                             <?php while( have_rows('resellers_contacts', $queried_object) ): the_row(); ?>
								<option><?php the_sub_field('country');?></option>
                                <?php endwhile; ?>
							</select>	
							<input type="submit" value="" />	
							<a href="/partner-contacts/" class="gen-btn-clear">Click here to search for resellers</a>
					        <a href="#" class="gen-btn-clear">Military, Aerospace & Government Sales Contacts</a>				
					   </form>
					   
				    </div>

		</div>
	</div>
   <!-- slider start -->
    <div class="sales-person-slide">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 myskyslide-no">
                 
                 <?php $count = 0; while( have_rows('resellers_contacts', $queried_object) ): the_row(); $count++;?>
                <div class="item-in">
                    <img src="<?php the_sub_field('image');?>" alt="">
                    <h4><?php the_sub_field('name');?> </h4>
                    <p><?php the_sub_field('job_title');?></p>
                    <span data-toggle="modal" data-target="#myModal<?=$count?>"><img src="<?php echo get_template_directory_uri(); ?>/images/contact-more-btn.png"></span>
                </div>
					
                <!-- Modal -->
                
                <div id="myModal<?=$count?>" class="modal fade" role="dialog">
                  <div class="modal-dialog sky-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                         
                            <div class="item-model">
                                 <img src="<?php the_sub_field('image');?>" alt="">
                                 <h4><?php the_sub_field('name');?> </h4>
                                 <p><?php the_sub_field('job_title');?> </p>
                                 <p><?php the_sub_field('tel');?></p>
                                <p><?php the_sub_field('cell');?></p>
                                <p>
                                <a href="<?php the_sub_field('link');?>" ><?php the_sub_field('email');?></a>
                                        </p>
                            </div>
                           
                          </div>
                      
                    </div>

                  </div>
                </div>
                 <?php endwhile; ?>
                <!-- Modal -->
                        
            </div>
        </div>
    </div>
    </div>
    <!-- slider start end -->

 <?php endif; ?>
   

	<!--=================== footer  ================================== -->
   
<?php get_footer(); ?>