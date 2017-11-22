<?php /* Template Name: Broadcast */ get_header(); ?>

<!--=================== Slider area ================================== -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?> 
<section class="slider">
  <div id="myCarousel1" class="carousel slide eventcarousel" data-ride="carousel"> 
    
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
      <div class="item active"> <?php the_post_thumbnail('market_banner'); ?> </div>
    </div>
    <!-- Carousel controls --> 
    <a class="carousel-control left" href="#myCarousel1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="carousel-control right" href="#myCarousel1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
    <div class="banner-cap">
      <div class="container">
        <div class="text-banner-up">
          <h4><?php the_title(); ?></h4>
          <p>Connecting production teams
            from virtually anywehre</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=================== content area ================================== -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h3 class="clear-page-title">
        <?php the_title(); ?>
      </h3>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-8  broadcast-content">      
        <?php the_content();?>      
      <?php if( have_rows('top_logos_and_links') ): ?>
      <div class="col-xs-12 addtion-links">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-1"></div>
          
          <?php while( have_rows('top_logos_and_links') ): the_row(); 
		  
		  ?>
          <div class="col-xs-12 col-sm-6 col-md-2"> <img src="<?php the_sub_field('logo');?>" alt=""> <a href=" <?php the_sub_field('url_for_logo'); ?>">
            <?php the_sub_field('logo_label'); ?>
            </a> </div>
          <?php endwhile; ?>
         
          <div class="col-xs-12 col-sm-12 col-md-1"></div>
        </div>
      </div>
       <?php endif; ?>
    </div>
    <?php if( have_rows('industry_affiliation') ): ?>
    <div class="col-xs-12  col-sm-6 col-md-4  broadcast-side">
      <h2>Industry Affiliation</h2>
    <?php while( have_rows('industry_affiliation') ): the_row(); 
		$image = get_sub_field('industry_image');

		if( !empty($image) ): 
		
			// vars
			$url = $image['url'];
			$title = $image['title'];
			$alt = $image['alt'];
			$caption = $image['caption'];
		
			// thumbnail
			$size = 'company_affiliation';
			$thumb = $image['sizes'][ $size ];
			$width = $image['sizes'][ $size . '-width' ];
			$height = $image['sizes'][ $size . '-height' ];
		endif;
	?>
    
      <a href="<?php the_sub_field('industry_link');?>"><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" /></a> <br/>
    <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</div>

<!-- benefit -->
<?php if( have_rows('our_competencies') ): ?>
<div class="featured-benefit">
  <div class="container">
    <h2>Our Competencies</h2>
    <div class="row">
      
      <?php while( have_rows('our_competencies') ): the_row(); ?>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <h5>          <?php the_sub_field('title'); ?>
          </h5>
        <?php $content_image = get_sub_field('content_or_image'); 
		if($content_image == 'Image')
		{
			?><img src="<?php the_sub_field('image'); ?>" alt="" /><?php
		}
		else
		{
		?>
		<p><?php the_sub_field('content'); ?></p>
		<?php }?>
      </div>
      <?php endwhile; ?>
      
    </div>
  </div>
</div>
<?php endif; ?>
<?php if( have_rows('learn_about_clear_com', $queried_object) ): $i = 0;?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 systems-serving">
      <h2>CLEAR COM SOLUTIONS FOR</h2>
      <div class="row">
        
        <?php 
		
		$image = '';while( have_rows('learn_about_clear_com', $queried_object) ): the_row(); 
		$image = get_sub_field('image');

		if( !empty($image) ): 
		
			// vars
			$url = $image['url'];
			$title = $image['title'];
			$alt = $image['alt'];
			$caption = $image['caption'];
		
			// thumbnail
			$size = 'cat_images';
			$thumb = $image['sizes'][ $size ];
			$width = $image['sizes'][ $size . '-width' ];
			$height = $image['sizes'][ $size . '-height' ];
		endif;
		$i++;
			
			if( $i > 3 )
			{
				break;
			}
		
		?>
        <div class="col-xs-12 col-sm-6 col-md-4 systems-serving-in"> <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          <h5><a href="<?php the_sub_field('link'); ?>">
            <?php the_sub_field('title'); ?>
            </a></h5>
          <p>
            <?php the_sub_field('content'); ?>
          </p>
        </div>
        <?php endwhile; ?>
       
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!--  -->
<?php if( have_rows('customer_storeis', $queried_object) ): ?>
<div class="relatednews">
  <div class="container">
    <h2>Customer Success Stories</h2>
    <div class="row">
      <div id="myCarousel" class="carousel slide news" data-ride="carousel"> 
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
        <?php $ss = 0; $image=''; while( have_rows('customer_storeis', $queried_object) ): the_row(); 
			$image = get_sub_field('image');

			if( !empty($image) ): 
			
				// vars
				$url = $image['url'];
				$title = $image['title'];
				$alt = $image['alt'];
				$caption = $image['caption'];
			
				// thumbnail
				$size = 'cat_images';
				$thumb = $image['sizes'][ $size ];
				$width = $image['sizes'][ $size . '-width' ];
				$height = $image['sizes'][ $size . '-height' ];
			endif;
			?>
          <div class="item <?=$ss==0?'active':''?> ">
            
            
            <article>
              <div class="newsimg"> <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" /> </div>
              <h5><a href="<?php the_sub_field('link'); ?>">
                <?php the_sub_field('title'); ?>
                </a></h5>
              <p>
                <?php the_sub_field('content'); ?>
              </p>
            </article>
            
            <?php //endif; ?>
          </div>
          <?php $ss++; endwhile; ?>
        </div>
        <!-- Carousel controls --> 
        <a class="carousel-control left" href="#myCarousel" data-slide="prev"> <img src="<?php echo get_template_directory_uri(); ?>/images/left-icon.png" alt=""> </a> <a class="carousel-control right" href="#myCarousel" data-slide="next"> <img src="<?php echo get_template_directory_uri(); ?>/images/right-icon.png" alt=""> </a> </div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php if( have_rows('market_application_diagrams', $queried_object) ): ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 application-diagrams">
      <h2>Sample Market Application Diagrams</h2>
      
      <?php $count = 0 ;
	  while( have_rows('market_application_diagrams', $queried_object) ): the_row(); 
	  $image = get_sub_field('image');

			if( !empty($image) ): 
			
				// vars
				$url = $image['url'];
				$title = $image['title'];
				$alt = $image['alt'];
				$caption = $image['caption'];
			
				// thumbnail
				$size = 'large';
				$thumb = $image['sizes'][ $size ];
				$width = $image['sizes'][ $size . '-width' ];
				$height = $image['sizes'][ $size . '-height' ];
			endif;
	  ?>
      <img class="diagrams" src="<?php echo $thumb; ?>"  id="diagram_<?=$count?>" <?=$count==0?'style="display:block"':'style="display:none"'?> alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
      <p> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="javascript:void(0)" onclick="showImage(<?=$count?>);"><u>
        <?php the_sub_field('title'); ?>
        </u></a> </p>
      <?php $count++; endwhile; ?>
      
      <div class="col-xs-12 ending-app"> <a href="#" class="gen-btn-clear">Need help? Contact us today</a> </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!--=================== solution finder  ================================== -->
<?php if( have_rows('get', $queried_object) ): ?>
<div class="training">
  <div class="container">
    <div class="row">
     
      <?php while( have_rows('get', $queried_object) ): the_row(); ?>
      <div class="col-xs-12 training-content"> <img src="<?php the_sub_field('image'); ?>" alt="">
        <h5><a href="<?php the_sub_field('link'); ?>">
          <?php the_sub_field('title'); ?>
          </a></h5>
        <p>
          <?php the_sub_field('content'); ?>
        </p>
        <a href="<?php the_sub_field('paper'); ?>" target="_blank" class="gen-btn-clear">Get your Free White Paper</a> </div>
      <?php endwhile; ?>
      
    </div>
  </div>
</div>
<?php endif; ?>
<!--=================== your choice ================================== -->

<section class="listtype">
  <div class="container">
    <div class="row">
    <?php if( have_rows('press_relaease', $queried_object) ): ?>
      <div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
        <h4>Press Relaease</h4>
        <ul>
          
          <?php while( have_rows('press_relaease', $queried_object) ): the_row(); ?>
          <li> <img src="<?php the_sub_field('image'); ?>" alt="">
            <h5><a href="<?php the_sub_field('link'); ?>">
              <?php the_sub_field('title'); ?>
              </a></h5>
            <p>
              <?php the_sub_field('content'); ?>
            </p>
          </li>
          <?php endwhile; ?>
          
        </ul>
        <a href="#" class="viewmore">View More > </a> </div>
        <?php endif; ?>
        <?php if( have_rows('new_updates', $queried_object) ): ?>
      <div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
        <h4>New Updates</h4>
        <ul>
          
          <?php while( have_rows('new_updates', $queried_object) ): the_row(); ?>
          <li> <img src="<?php the_sub_field('image'); ?>" alt="">
            <h5><a href="<?php the_sub_field('link'); ?>">
              <?php the_sub_field('title'); ?>
              </a></h5>
            <p>
              <?php the_sub_field('content'); ?>
            </p>
          </li>
          <?php endwhile; ?>
          
        </ul>
        <a href="#" class="viewmore">View More > </a> </div>
        <?php endif; ?>
        <?php if( have_rows('events', $queried_object) ): ?>
      <div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
        <h4>Events</h4>
        <ul>
          
          <?php while( have_rows('events', $queried_object) ): the_row(); ?>
          <li> <img src="<?php the_sub_field('image'); ?>" alt="">
            <h5><a href="<?php the_sub_field('link'); ?>">
              <?php the_sub_field('title'); ?>
              </a></h5>
            <p>
              <?php the_sub_field('content'); ?>
            </p>
          </li>
          <?php endwhile; ?>
          
        </ul>
        <a href="#" class="viewmore">View More > </a> </div>
        <?php endif; ?>
    </div>
  </div>
</section>
<div class="readylink-head">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 readylink-head-content">
        <h3>Ready to speak to someone about your project needs?</h3>
        <a href="#" class="gen-btn-clear">Locate a Reseller in your area</a> <a href="#" class="gen-btn-clear">Contact Clear-Com Sales</a> </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<script type="text/javascript">
function showImage(id)
{
	jQuery('.diagrams').each(function(index, element) {
        jQuery(this).hide();
    });
	jQuery('#diagram_'+id).show();
}
</script>
<!--=================== footer  ================================== -->
<?php get_footer(); ?>
