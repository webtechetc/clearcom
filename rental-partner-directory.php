<?php /* Template Name: Rental Partner Directory */ get_header(); ?>
	<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>
	
	<!--=================== content area ================================== -->
	
	<div class="container">
		<div class="col-xs-12">
			<h3 class="clear-page-title">Rental Partner Directory</h3>	
		</div>
		
		
		<div class="row">
			<div class="col-xs-12 become-rental">
            
				<article>
			  <?php if( have_rows('partner_directory', $queried_object) ): ?>
              <?php while( have_rows('partner_directory', $queried_object) ): the_row(); ?>
					<div class="become-img">
						<img src="<?php the_sub_field('image');?>" alt="">
					</div>
					<h5><a href="#">Title<?php the_sub_field('title');?></a></h5>
                    <p>Address:<?php the_sub_field('address');?></p>
                    <p>Tel:<?php the_sub_field('tel');?></p>
                    <p>Fax:<?php the_sub_field('fax');?></p>
                    <P><a href="<?php the_sub_field('link');?>">Web:<?php the_sub_field('web');?></a></P>
                    <P><a href="<?php the_sub_field('link');?>">Contact:<?php the_sub_field('contact');?></a></P>
                    
                <?php endwhile; ?>
                <?php endif; ?>
                
               <?php if( have_rows('partner_address', $queried_object) ): ?>
              <?php while( have_rows('partner_address', $queried_object) ): the_row(); ?>
					<?php the_sub_field('about_company');?>
				<?php endwhile; ?>
                <?php endif; ?>	
				</article>
			</div>
		</div>

	</div>

	

	<!--=================== footer  ================================== -->

	<?php get_footer(); ?>