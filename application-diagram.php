<?php /* Template Name: Application Diagram */ get_header(); ?>
	
	<!--=================== content area ================================== -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 res-content-top">
            <h3 class="clear-page-title">Resources</h3>	
            
    </div>
    </div>
    </div>
			<?php $pageid = get_the_ID(); 
            $content_post = get_post($pageid);
            $content = $content_post->post_content;?>
	<div class="training">
		<div class="container">
			<div class="row">
           		 <?php if ( is_page_template( 'application-diagram.php' ) ) { ?>
   					<div class="col-xs-12">
					<h2><?php the_title()?></h2>
                    
				</div>
				<div class="col-xs-12 training-content">
				<?php the_post_thumbnail('cat_images'); ?>
                <p><?= $content ?></p>
				</div>
			</div><?php 
} else {
    // about.php is not used
} ?>
				
		</div>
	</div>

	<!--=================== footer  ================================== -->

	<?php get_footer(); ?>