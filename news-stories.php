<?php /* Template Name: News & Stories */ get_header(); ?>

<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 res-content-top">
				<h3 class="clear-page-title"><?php the_title(); ?></h3>	
			</div>
	<!--=================== content col ================================== -->

		<?php
		 $arg = new WP_Query( array( 'post_type' => 'newsstories', 'posts_per_page' => -1 ) ); ?>
  
  

     <div class="page-wrraper">
     	
		<div class="col-xs-12 news-stories">
				<?php while ( $arg->have_posts() ) : $arg->the_post(); ?>
				<article>
					
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p><?php the_date();?></p>
					
					<?php// the_content(); ?>
					
				</article>
				<?php endwhile;

   					wp_reset_query(); ?>

		</div>
		
	</div>

	<!--=================== side col ================================== -->

			

			
		</div>
	</div>

<?php get_footer(); ?>
