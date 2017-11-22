<?php get_header(); ?>







<div class="container">

	<div class="row">

		

	<div class="page-wrraper for-page">

		



		<div class="col-xs-12 col-sm-12 col-md-12"  id="post-<?php the_ID(); ?>" >

			

			<h3 class="clear-page-title"><?php the_title(); ?></h3>

			<!-- article -->

			<?php if (have_posts()): while (have_posts()) : the_post(); ?> 

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



					<?php the_content(); ?>



					<?php comments_template( '', true ); // Remove if you don't want comments ?>



					<br class="clear">



					<?php edit_post_link(); ?>



				</article>

				<!-- /article -->



			<?php endwhile; ?>



			<?php else: ?>



				<!-- article -->

					<article>



						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>



					</article>

				<!-- /article -->

			<?php endif; ?>

		</div>



		<!--<div class="col-xs-12 col-sm-6 col-md-4">

			<?php // get_sidebar(); ?>



		</div> -->

	</div>

		

			

	</div>

</div>



<?php get_footer(); ?>

