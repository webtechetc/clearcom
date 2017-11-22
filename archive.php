<?php get_header(); ?>


<div class="container">
	<div class="row">
		
	<div class="page-wrraper archive">
		<div class="col-xs-12 col-sm-6 col-md-8">
			<h3 class="clear-page-title"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
		
			
	</div>
</div>

<?php get_footer(); ?>
