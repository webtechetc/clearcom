<?php get_header(); 
$queried_object = get_queried_object(); 
?>
<div class="banner-gen"> <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner"> </div>
<!--=================== content area ================================== -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 res-content-top">
      <h3 class="clear-page-title">
        <?=$queried_object->name?>
      </h3>
      <div class="col-xs-12 family-content">
        <p>
          <?=$queried_object->description?>
        </p>
      </div>
    </div>
    <div class="col-xs-12 cat-nav">
      <?php
		$categories = get_categories( array(
			'orderby' => 'name',
			'order'   => 'ASC'
		) ); ?>
      <ul>
        <li><a href="<?=site_url()?>/resources">All </a></li>
        <?php foreach( $categories as $category ) { ?>
			<li <?=$queried_object->name==$category->name?'class="active"':''?> ><a href="<?php echo get_term_link( $category ); ?>"><?=$category->name?></a></li>
            <?php
		}  ?>
      </ul>
    </div>
    <!--=================== content col ================================== -->
    <div class="col-xs-12 col-sm-6 col-md-8 resources-left">
      <?php
			while ( have_posts() ) : the_post();
		 ?>
      <article>
        <h4><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a></h4>
        <p>
          <?php the_date();?>
        </p>
        <div class="image-resources">
          <?php the_post_thumbnail();?>
        </div>
        <?php the_content(); ?>
        <div class="tag-article">
          <?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
        </div>
      </article>
      <?php endwhile; ?>
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
<?php get_footer(); ?>