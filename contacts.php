<?php /* Template Name: Contacts */ get_header(); ?>

<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

if ($parent->have_posts()) : ?>

    
	
	<!--=================== content area ================================== -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 contact-type">
            	<?php $count = 0;while ($parent->have_posts()) : $parent->the_post(); ?>
			    <article class="col-xs-12 col-sm-12 col-md-6">
			     	<div class="contact-image">
			     		<?php the_post_thumbnail('medium'); ?>
			     	</div>
			     	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			     	<?php the_content();?>
			    </article>
                <?php 
				$count++;
				if($count % 2 == 0)
				{
					echo '</div><div class="col-xs-12 contact-type">';	
				}
				//sif($count % 2)
				 endwhile; ?>
			    
			</div>
		</div>
	</div>

	<!--=================== footer  ================================== -->
<?php unset($parent); endif; wp_reset_query(); ?>
	<?php get_footer(); ?>