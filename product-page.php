<?php  
/* Template Name: Products  */

global $post;
$post_slug=$post->post_name;
$args = array(
	'orderby'           => 'id', 
    'order'             => 'ASC',
    'parent'           => 0, 
    'hide_empty'        => false,
    'fields'            => 'all', 
); 
$terms = get_terms("product_family", $args);
foreach($terms as $term)
{
	//print_r($term->name);
	if(get_field('family_association', $term) == 'Wired intercom')
	{
		$wired[] = $term->term_id;
	}elseif(get_field('family_association', $term) == 'Wireless intercom')
	{
		$wireless[] = $term->term_id;
		//print_r($wireless);
	}
	elseif(get_field('family_association', $term) == 'IP communication')
	{
		$ip[] = $term->term_id;
	}
	elseif(get_field('family_association', $term) == 'Headsets & Accessories')
	{
		$headsets[] = $term->term_id;
	}
	elseif(get_field('family_association', $term) == 'Connectivity & Interoperability')
	{
		$connectivity[] = $term->term_id;
	}
}
//print_r($wireless);
$cat_in = array();
if($post_slug == 'products')
{
	$cat_in = $wired;
}
if($post_slug == 'wireless-intercom')
{
	$cat_in = $wireless;
}
if($post_slug == 'ip-communication'){
	$cat_in = $ip;
}
if($post_slug == 'connectivity-interoperability'){
	$cat_in = $connectivity;
}
if($post_slug == 'headsets-accessories'){
	$cat_in = $headsets;
}


get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<!--=================== Slider area ================================== -->
<section class="slider">
  <div id="myCarousel1" class="carousel slide eventcarousel" data-ride="carousel"> 
    
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
      <div class="item active"> <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="First Slide"> </div>
      <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="Second Slide"> </div>
      <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="Third Slide"> </div>
    </div>
    <!-- Carousel controls --> 
    <a class="carousel-control left" href="#myCarousel1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="carousel-control right" href="#myCarousel1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
</section>
<!--=================== content area ================================== -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h3 class="clear-page-title">Product Landing</h3>
    </div>
  </div>
</div>
<!--=================== product  ================================== -->
<section class="product">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 tab-slide-mix">
        <ul class="nav nav-tabs">
          <li <?=$post_slug=='products'?'class="active"':''?>><a href="<?=site_url()?>/products">Wired Intercom</a></li>
          <li <?=$post_slug=='wireless-intercom'?'class="active"':''?>><a href="<?=site_url()?>/products/wireless-intercom">Wireless Intercom</a></li>
          <li <?=$post_slug=='ip-communication'?'class="active"':''?>><a href="<?=site_url()?>/products/ip-communication">IP Communication</a></li>
          <li <?=$post_slug=='connectivity-interoperability'?'class="active"':''?>><a href="<?=site_url()?>/products/connectivity-interoperability">Connectivity & Interoperability</a></li>
          <li <?=$post_slug=='headsets-accessories'?'class="active"':''?>><a href="<?=site_url()?>/products/headsets-accessories">Headsets & Accesorries</a></li>
        </ul>
        <div class="tab-content">
          <div id="home">
            <?php the_content();?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 link-tab-in">
               <?php if( have_rows('top_links') ): ?>                  
					<?php while( have_rows('top_links') ): the_row(); ?>         
                       <div class="col-xs-12 col-sm-6 col-md-3 ">
                        <h5><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></h5>
                      </div>
                    <?php endwhile; ?>
                <?php endif; ?>
             
            </div>
            <?php
			if(count($cat_in) > 0)
			{
			foreach($cat_in as $term)
			{
				$product_term = get_term( $term, 'product_family' );
				?>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 product-side-img">
                <div class="imgside-pro">
                  <?php 
				 $img =  get_field('product_family_image', $product_term);
				 $url = $img['url'];
				 $title = $image['title'];
				 $alt = $image['alt'];
				 $caption = $image['caption'];
				 $size = 'large';
				 $thumb = $img['sizes'][ $size ];
				 $width = $img['sizes'][ $size . '-width' ];
				 $height = $img['sizes'][ $size . '-height' ];
				// print_r($img);
				  ?>
                  <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" style="max-width:100%; max-height:100%" />
                  <div class="hover-pro"> <?php echo substr($product_term->description,0,250); ?> <a href="<?php echo get_term_link( $product_term ); ?>">Read More</a> </div>
                </div>
                <h4 class="text-center"><a href="<?php echo get_term_link( $product_term ); ?>">
                  <?php echo $product_term->name; ?>
                  </a></h4>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-8  product-slide">
              	<?php 
					$args = array(
						'orderby'           => 'id', 
						'order'             => 'ASC',
						'parent'           => $term, 
						'hide_empty'        => false,
						'fields'            => 'all', 
					); 
					$child_terms = get_terms("product_family", $args);
				?>
                <ul class="parts-divider-link">
                <?php foreach($child_terms as $child){?>
                  <li><a href="<?php echo get_term_link( $child ); ?>"><?=$child->name?> </a></li>
				<?php }?>
                </ul>
                <?php 
				  	$args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'orderby' => 'ID', 'order' => 'ASC','tax_query' => array(
							array(
								'taxonomy' => 'product_family',
								'field'    => 'id',
								'terms'    => $term,
							),
						), );
			   		$the_query = new WP_Query( $args ); 
					if ( $the_query->have_posts() )
			   		{?>
                <div id="myCarouselP" class="carousel slide product-slide" data-ride="carousel"> 
                  <!-- Wrapper for carousel items -->
                  <div class="carousel-inner">
                  <div class="item active ">
                      <ul class="pro-li">
                  <?php
				   		$count = 0;
						while ( $the_query->have_posts() ) { 
					   $the_query->the_post();$count++;
					
				  ?>
                    
                        <li>
                          <div class="proli-img"><?php the_post_thumbnail(array(120,80)); ?></div>
                          <h5><a href="<?php the_permalink();?>"><?php the_title()?></a></h5>
                          <p><?=wp_trim_words( get_the_content(), 8, '' );?></p>
                        </li>
                  <?php 
						if($count % 5 == 0)
						{
							echo '</ul></div><div class="item "><ul class="pro-li">';	
						}
				  	}
					 ?>      
                      </ul>
                    </div>
                  </div>
                  <!-- Carousel controls --> 
                  <a class="carousel-control left" href="#myCarouselP" data-slide="prev"> <img src="<?php echo get_template_directory_uri(); ?>/images/left-icon.png" alt=""> </a> <a class="carousel-control right" href="#myCarouselP" data-slide="next"> <img src="<?php echo get_template_directory_uri(); ?>/images/right-icon.png" alt=""> </a> </div>
                  <?php 
				  
			 wp_reset_postdata();

			 }?>
              </div>
            </div>
            <?php
			 }
			}
			?>
          </div>        
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================== product  last ================================== -->
<section class="product-last">
  <div class="container">
    <div class="row">
    <?php if( have_rows('bottom_box') ): ?>                  
		<?php while( have_rows('bottom_box') ): the_row(); ?>
          <div class="col-xs-12 col-sm-4 col-md-4 product-last-col">
        	<div>
         	 <h4><?php the_sub_field('title');?></h4>
         		 <a href="<?php the_sub_field('link');?>" class="gen-btn-clear btn-dark">Click Here</a> <img src="<?php the_sub_field('image');?>" alt=""> 
          	</div>
      	 </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <!--  <div class="col-xs-12 col-sm-4 col-md-4 product-last-col">
        <div>
          <h4>Looking for product manuals, datasheets, or software/firmware?</h4>
          <a href="#" class="gen-btn-clear btn-dark">Click Here</a> <img src="<?php echo get_template_directory_uri(); ?>/images/look.png" alt=""> </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 product-last-col">
        <div>
          <h4>Get alerts on product firmware andsoftware updates</h4>
          <a href="#" class="gen-btn-clear btn-dark">Sign Up Now</a> <img src="<?php echo get_template_directory_uri(); ?>/images/mailing.png" alt=""> </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 product-last-col">
        <div>
          <h4>Keep up with our laest company or product updates. Sign up for our mailing listing.</h4>
          <a href="#" class="gen-btn-clear btn-dark">Join Now</a> <img src="<?php echo get_template_directory_uri(); ?>/images/alerts.png" alt=""> </div>
      </div>-->
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--=================== footer  ==============================	  
  <?php get_footer(); ?>