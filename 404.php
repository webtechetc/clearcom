<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 in-404">
			<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>

			<h2>

				<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>

			</h2>
			<img src="/wp-content/uploads/2017/05/404-error-not-found.jpg" alt="">
		</div>
	</div>
</div>



<?php get_footer(); ?>

