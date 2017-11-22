<?php  get_header(); 
global $post;
$post_id = $post->ID;
$term = get_the_terms( $post_id, 'product_family' ); 
$cat = get_term_link( $term[0] );
$subcat = get_term_link( $term[1] );
?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>


<!--=================== content area ================================== -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h3 class="clear-page-title">Product Details</h3>
    </div>
  </div>
</div>
<div class="product-details-here">
  <div class="container">
    <div class="col-xs-5 pro-de-1">
      <?php the_post_thumbnail('cat_images'); ?>
    </div>
    <div class="col-xs-5 pro-de-2">
      <h2>
        <?php the_title();?>
      </h2>
      <?php the_content();?>
      Item Code:
      <?php the_field('item_code');?>
      <br />
     <!-- <a href="#" class="gen-btn-clear">See more in product documentations</a> --></div>
       <?php if( have_rows('awards', $queried_object) ): ?>
    <div class="col-xs-2 listtype-in pro-de-3">
      <h4>Awards</h4>
      <ul>
        <?php while( have_rows('awards', $queried_object) ): the_row(); ?>
         <li><img src="<?php the_sub_field('award_image');?>" alt="" / style="max-width:100%;"> </li>
        <?php endwhile; ?>
        
      </ul>
    </div>
     <?php endif; ?>
  </div>
</div>
<!-- related videos -->
<?php if( have_rows('related_videos') ): ?>
<div class="relatedvideos">
  <div class="container">
    <div class="row">      
      <div class="col-xs-12 col-sm-12 col-md-9 ">
        <h4>Related Videos</h4>
        <div id="myCarouselV" class="carousel slide relatedvideosslide" data-ride="carousel"> 
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            
            <div class="item active ">
              <div class="row">
                <?php 
				$count = 0;
				while( have_rows('related_videos') ): the_row(); $count++?>
                <div class="col-xs-12 col-sm-4 col-md-4 videobind ">
                  <div class="imagevid"> <img src="<?php the_sub_field('video_image'); ?>" alt=""> <span> <a href="<?php the_sub_field('video_url'); ?>" class="vp-a"><img src="<?php echo get_template_directory_uri(); ?>/images/play.png" width="50" alt=""></a> </span> </div>
                  <h5><a href="<?php the_sub_field('video_url'); ?>" class="vp-a">
                    <?php the_sub_field('video_title'); ?>
                    </a></h5>
                </div>
                <?php 
				if($count % 4 == 0)
				{
					echo '</div></div><div class="item"><div class="row">';	
				}
				endwhile; ?>
              </div>
            </div>
           
          </div>
          <!-- Carousel controls --> 
          <a class="carousel-control left" href="#myCarouselV" data-slide="prev"> <img src="<?php echo get_template_directory_uri(); ?>/images/left-icon.png" alt=""> </a> <a class="carousel-control right" href="#myCarouselV" data-slide="next"> <img src="<?php echo get_template_directory_uri(); ?>/images/right-icon.png" alt=""> </a> </div>
      </div>
    </div>
  </div>   
</div>
<?php endif; ?>
<!-- benefit -->
<?php if( have_rows('features_benefits', $queried_object) ): ?>
<div class="featured-benefit">
  <div class="container">
    <h2>Features and/or Benefits</h2>

    <div class="row">
      <div class="col-xs-12 ">
         <?php while( have_rows('features_benefits', $queried_object) ): the_row(); ?>
    <div class="col-xs-12 col-sm-6 col-md-6">
	<h5> <?php the_sub_field('title'); ?></h5>
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

      <?php //the_field('features_and/or_benefits', $queried_object); ?>
    <?php endwhile; ?>

      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- technical -->

<div class="container">
  <div class="row technical">
    <div class="col-xs-12 ">
      <h2>Technical Specifications</h2>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 technical-side">
      <?php the_field('technical_specifications');?>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-8 technical-draw">
    <?php if(get_field('front_view_image')){ ?>
      <div class="technical-shadow"> <img src="<?php the_field('front_view_image');?>" alt="" style="max-width:100%"> </div>
      <?php }
	  if(get_field('back_view_image')){
	  ?>
      <div class="technical-shadow"> <img src="<?php the_field('back_view_image');?>" alt=""  style="max-width:100%"> </div>
      <?php }?>
    </div>
  </div>
</div>

<!-- product support -->
<div class="product-graypro">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>Download Center</h2>
      </div>
      <?php if( have_rows('documents') ): ?>
      <div class="col-xs-12 col-sm-6 col-md-4 Productinn">
        <h5> <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">- Documents </a> <small class="pull-right"><a href="javascript:void(0);" onclick="downloadFiles('downloadFilesForm')">Download all as zip</a></small> </h5>
        <div id="collapse-1" class="panel-collapse collapse in">
        <form name="downloadFilesForm" id="downloadFilesForm" action="" method="post">
          
          <?php while( have_rows('documents') ): the_row(); ?>
          <p>
            <label>
              <input type="checkbox" name="document[]">
              <i class="fa fa-file-o fa-2x" aria-hidden="true"></i> <a href="<?php the_sub_field('document_file'); ?>" target="_blank">
              <?php the_sub_field('document_title'); ?>
              </a> </label>
          </p>
          <?php 
		  if($files!=''){ 
			$files .= '@'.get_sub_field('document_file');
			}else{
				$files = get_sub_field('document_file');
			}
		  endwhile; ?>
          
          <input type="hidden" name="downloadFiles" id="downloadFiles" value="<?=$files?>">
            <input type="hidden" name="documents" id="documents" value="documents">
            <input type="hidden" name="filename" id="filename" value="<?php the_title();?>">       
           
            </form>
        </div>
      </div>
      <?php endif; ?>
      
      <div class="col-xs-12 col-sm-6 col-md-4 Productinn">
      <?php if( have_rows('product_images') ): ?>
        <h5><a data-toggle="collapse" data-parent="#accordion" href="#collapse-2">+Product Images</a> <small class="pull-right"><a href="javascript:void(0);">Download all as zip</a></small></h5>
        <div id="collapse-2" class="panel-collapse collapse in">          
         <form name="downloadSoftwareForm" id="downloadSoftwareForm" action="" method="post">
          <?php while( have_rows('product_images') ): the_row(); ?>
          <img src="<?php the_sub_field('image');?>" alt="" width="60"/>
          <?php 		  
		  endwhile; ?>          
        </div>
        <?php endif; ?>
        <?php if( have_rows('software_&_firmware') ): ?>
        <h5><a data-toggle="collapse" data-parent="#accordion" href="#collapse-3">+Software & Firmware</a> <small class="pull-right"><a href="javascript:void(0);">Download all as zip</a></small></h5>
        <div id="collapse-3" class="panel-collapse collapse in">
          
          <?php while( have_rows('software_&_firmware') ): the_row(); ?>
          <img src="<?php the_sub_field('files');?>" alt="" />
          <?php endwhile; ?>
          
        </div>
        <?php endif; ?>
        <?php if( get_field('market_diagram') ): ?>
        <h5><a data-toggle="collapse" data-parent="#accordion" href="#collapse-4">-Market Diagram</a> <small class="pull-right"><a href="javascript:void(0);">Download all as zip</a></small></h5>
        <div id="collapse-4" class="panel-collapse collapse in">
        
          <?php //while( have_rows('market_diagram') ): the_row(); ?>
          <a href="<?php the_field('market_diagram');?>"><img src="<?php the_field('market_diagram');?>" width="150" alt="" /></a>
          <?php //endwhile; ?>          
        
         </div>
         <?php endif; ?>         
      </div>
      <?php if( have_rows('related_news_and_stories') ): ?>
      <div class="col-xs-12 col-sm-6 col-md-4 Productinn">
        <h5><a data-toggle="collapse" data-parent="#accordion" href="#collapse-6">- Related News and Stories </a></h5>
        <div id="collapse-6" class="panel-collapse collapse in">
        <?php while( have_rows('market_diagram') ): the_row(); ?>
        	<h5><a href="<?php the_sub_field('news_link');?>"><?php the_sub_field('news_title');?></a></h5>   
          <p><?php the_sub_field('news_short_description');?></p>
         <?php endwhile; ?>            
        </div>
      </div>
       <?php endif; ?>
    </div>
  </div>
</div>

<!-- associate -->

<?php 
$posts = get_field('associate_products');
if($posts){?>
<div class="container">
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12 associate-slide">
      <h2>Associate Products</h2>
      <div id="myCarouselAC" class="carousel slide associate-slide" data-ride="carousel" data-interval="false"> 
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
          <div class="item">
            <ul class="pro-li">
              <?php 
			$count = 0;
			foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        	<?php setup_postdata($post); $count++;?>
              <li>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(120,80)); ?></a>
              <h5><a href="<?php the_permalink(); ?>"><?php //the_title();?></a></h5>
               <p><?php the_content();?></p>
              </li>
             <?php
			  if($count % 4 == 0)
				{
					echo '</ul></div><div class="item "><ul class="pro-li">';	
				}
             endforeach; ?>    
            
            
          </div>

        </div>
        <!-- Carousel controls --> 
        <a class="carousel-control left" href="##myCarouselAC" data-slide="prev"> <img src="<?php echo get_template_directory_uri(); ?>/images/left-icon.png" alt=""> </a> <a class="carousel-control right" href="##myCarouselAC" data-slide="next"> <img src="<?php echo get_template_directory_uri(); ?>/images/right-icon.png" alt=""> </a> </div>
    </div>
  </div>
</div>
<?php wp_reset_postdata();?>
		<?php }?>
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
<!--=================== footer  ================================== -->

<?php get_footer(); ?>
