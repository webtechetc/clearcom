<?php  /* Template Name: Resources */ get_header(); ?>

<!--=================== banner area ================================== -->

	<div class="banner-gen">
		<img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner">
	</div>

	
	<!--=================== content area ================================== -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 res-content-top">
				<h3 class="clear-page-title">Resources</h3>	
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
			</div>

			
			<div class="col-xs-12 cat-nav">
				<?php
				$categories = get_categories( array(
				    'orderby' => 'name',
				    'order'   => 'ASC'
				) ); ?>
 				<ul>
 				<li class="active"><a href="#./">All </a></li>
				<?php foreach( $categories as $category ) {
				    $category_link = sprintf( 
				        '<a href="%1$s" alt="%2$s">%3$s</a>',
				        esc_url( get_category_link( $category->term_id ) ),
				        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
				        esc_html( $category->name )
				    );
				     
				    echo '<li>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li>';
				   // echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
				   // echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
				}  ?>
	
				</ul>
				
			</div>
	<!--=================== content col ================================== -->

		<?php
		global $post;
		$args = array( 'posts_per_page' => 10, 'order' => 'ASC');
		$categories = get_the_category();
		$tags = get_the_tags();
		$posts = get_posts( $args );?>

		<div class="col-xs-12 col-sm-6 col-md-8 resources-left">
				<?php
					foreach ( $posts as $post ) :
				  	setup_postdata( $post ); 
				 ?>
			  		
				<article>
					
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p><?php the_date();?></p>
					<div class="image-resources">
						<?php the_post_thumbnail();?>
					</div>
					<?php the_content(); ?>
					<div class="tag-article">
						<?php the_tags( 'Tags: ', ', ', '<br />' ); ?> 
					</div>
				</article>
				<?php endforeach; ?>

				<?php wp_reset_postdata(); ?>
				

		</div>

			<!--=================== side col ================================== -->

			<div class="col-xs-12 col-sm-6 col-md-4 resources-side side">
				<div class="sidebar-widget">

					<?php dynamic_sidebar( 'widget-area-2' ); ?>
					
				</div>
			</div>

			
		</div>
	</div>

	<!--=================== footer  ================================== -->
	<?php get_footer(); ?>