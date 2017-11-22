<?php /* Template Name: Product support */ get_header(); ?>
	<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>
	
	
	<!--=================== content area ================================== -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="clear-page-title">Product Support</h3>	
			</div>

			<div class="col-xs-12 product-model-number">
				<h2>1. Enter a product name or model number</h2>

				<div class="search-rental">
                <form role="search" method="get" action="<?php echo home_url(); ?>">
                
                <input type="text" placeholder="Ex: CS-702, Main Station or Wireless Intercom" type="search" name="s">
			
					</form>
				</div>	
				<h2>2. Choose a support category</h2>	
				<div class="row">
             
					<div class="col-xs-12 support-category">
              <?php if( have_rows('support_category', $queried_object) ): ?>
       		  <?php while( have_rows('support_category', $queried_object) ): the_row(); ?>
						<div class="col-xs-6 col-sm-3 col-md-2 ">
							<img src="<?php the_sub_field('image');?>" alt="">
							<h5><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></h5>	
						</div>
              <?php endwhile; ?>
              <?php endif; ?>
							
					</div>			
				</div>		
			</div>
			
			<div class="col-xs-12 category-support">
             <?php if( have_rows('feature_content', $queried_object) ): ?>
       		  <?php while( have_rows('feature_content', $queried_object) ): the_row(); ?>
				<article>
					
					<div class="category-img-support">
						<img src="<?php the_sub_field('image');?>" alt="">
					</div>
					<p><?php the_sub_field('content');?> </p>
					
					<!--<h4><a href="#">Need help?</a></h4>-->
					<a href="#" class="gen-btn-clear">Training Request</a>
					<a href="#" class="gen-btn-clear">Product Repair Request</a>
					<a href="#" class="gen-btn-clear">Technical Support Request</a>
					
				</article>
			<?php endwhile; ?>
            <?php endif; ?>
			</div>
			<div class="col-xs-12  release-version">
				<h5>2 matching <span>result(s):</span></h5>

				<select class="match-select">
					<option>Select a Release Version </option>
				</select>
			</div>
			<div class="col-xs-12 table-responsive category-support-table">
           
				<table class="table table-condensed">
              
				    <thead>
				      <tr>
				        <th>Title</th>
				        <th>File Version</th>
				        <th>Release Version</th>
				        <th>Size</th>
				        <th>Format</th>
				        <th><a href="#">Select All </a></th>
				      </tr>
				    </thead>
				
				   <tbody>
               <?php if( have_rows('matching_result', $queried_object) ): ?>
       		  <?php while( have_rows('matching_result', $queried_object) ): the_row(); ?>
				      <tr>
				        <td><?php the_sub_field('_title');?></td>
				        <td><?php the_sub_field('file_version');?></td>
				        <td><?php the_sub_field('release_version');?></td>
				        <td><?php the_sub_field('size');?></td>
				        <td><?php the_sub_field('format');?></td>
				        <td><input type="checkbox"><?php the_sub_field('select_all');?> </td>
				      </tr>
			    <?php endwhile; ?>
                <?php endif; ?>
				      <!-- <tr>
				        <td>FreeSpeak II Configuration Editor</td>
				        <td>D</td>
				        <td>1.65.42.0</td>
				        <td>75.5 MB</td>
				        <td>JPEG</td>
				        <td><input type="checkbox"> </td>

				      </tr>-->
				      
				    </tbody>
				</table>
               
				<div class="col-xs-12 text-right">
					<a href="#" class="gen-btn-clear">Download Selected Files</a>
				</div>
			</div>

		</div>
	</div>


	<!--=================== footer  ================================== -->

	<?php get_footer(); ?>