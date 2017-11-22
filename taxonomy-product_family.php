<?php  get_header(); 
$queried_object = get_queried_object(); 
?>

<!--=================== Slider area ================================== -->

<section class="slider">
  <div id="myCarousel1" class="carousel slide eventcarousel" data-ride="carousel"> 
    
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
      <div class="item active">
        <?php if( have_rows('product_banner_content', $queried_object) ): ?>
    <?php while( have_rows('product_banner_content', $queried_object) ): the_row(); ?>
        
        <img src="<?php the_sub_field('image'); ?>" alt="">
        
    <?php endwhile; ?>
    <?php endif; ?>
      </div> 
     <div class="item">
              <?php if( have_rows('product_banner_content', $queried_object) ): ?>
      <?php while( have_rows('product_banner_content', $queried_object) ): the_row(); ?>
          
          <img src="<?php the_sub_field('image'); ?>" alt="">
          
      <?php endwhile; ?>
      <?php endif; ?>
      </div>
    
    <!-- Carousel controls --> 
    <a class="carousel-control left" href="#myCarousel1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="carousel-control right" href="#myCarousel1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
    <div class="banner-cap">
      <div class="container">
         <?php if( have_rows('product_banner_content', $queried_object) ): ?>
    <?php while( have_rows('product_banner_content', $queried_object) ): the_row(); ?>
        <div class="text-banner-up">
          
          <?php the_sub_field('content'); ?>

        </div>
         <?php endwhile; ?>
    <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!--=================== content area ================================== -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h3 class="clear-page-title">
        <?=$queried_object->name?>
      </h3>
    </div>
    <div class="col-xs-12 family-content">
      <p>
        <?=$queried_object->description?>
      </p>
    </div>
  </div>
</div>
 <?php if( have_rows('features_and/or_benefits', $queried_object) ): ?>
<div class="featured-benefit">
  <div class="container">
    <h2>Features and/or Benefits</h2>
    <div class="row">
    <?php while( have_rows('features_and/or_benefits', $queried_object) ): the_row(); ?>
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
<?php endif; ?>
<div class="container">
  <div class="row">
    <?php if( have_rows('graph_section', $queried_object) ): ?>
    <?php while( have_rows('graph_section', $queried_object) ): the_row(); ?>
    <div class="col-xs-12 after-benefit">
      <article> 
        <!--<h5><a href="<?php the_sub_field('read_more_link'); ?>">
          <?php //the_sub_field('graph_image'); ?>
          Lorem ipsum dolor sit amet</a></h5>--> 
        <img src="<?php the_sub_field('graph_image'); ?>" alt="">
        <p>
          <?php the_sub_field('graph_description'); ?>
        </p>
        <!--<a href="<?php the_sub_field('read_more_link'); ?>" class="gen-btn-clear">See More</a>--> </article>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<?php //if(!empty($child_terms)) { ?>
<?php 
	$args = array(
		'orderby'           => 'id', 
		'order'             => 'ASC',
		'parent'           => $queried_object->term_id, 
		'hide_empty'        => false,
		'fields'            => 'all', 
	); 
	$child_terms = get_terms("product_family", $args);
?>
<div class="inthe-family">
<div class="container">
<h2>Products In Family</h2>
  <?php $count1 = 0;
			foreach($child_terms as $child){?>
  <div class="row">
    <h5 class="col-xs-12"><!--<a data-toggle="collapse" <?=$count1!=0?'aria-expanded="false"':'aria-expanded="true"'?> <?=$count1!=0?'class="collapsed"':''?> data-parent="#accordion" href="#collapse1<?=$count1?>">
      <?=$child->name?>
      <?=$count1==0?'-':'+'?>
      </a>--></h5>
    <div id="collapse1<?=$count1?>" <?=$count1!=0?'aria-expanded="false"':'aria-expanded="true"'?> class="wrapcolpas panel-collapse <?=$count1==0?'collapse in':'collapse'?>">
      <!--<div class="col-xs-4 col-sm-4 col-md-4 product-side-accord">
        <p >
          <?=$child->description?>
        </p>
      </div>-->
      <?php 
		$args1 = array( 'post_type' => 'product', 'posts_per_page' => -1, 'orderby' => 'ID', 'order' => 'ASC','tax_query' => array(
				array(
					'taxonomy' => 'product_family',
					'field'    => 'name',
					'terms'    => $queried_object->name,
				),
			), );
		$the_query = new WP_Query( $args1 ); 
		if ( $the_query->have_posts() )
		{
			
			//print_r('here');?>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-slide">
        <div id="myCarouselP2<?=$count1?>" class="carousel slide product-slide" data-ride="carousel"> 
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="item active ">
              <ul class="pro-li">
                <?php
				$count = 0;
				while ( $the_query->have_posts() ) { 
			  	 $the_query->the_post(); $count++;
					
				  ?>
                <li>
                  <div class="proli-img">
                    <?php the_post_thumbnail(array(120,80)); ?>
                  </div>
                  <h5><a href="<?php the_permalink();?>">
                    <?php the_title()?>
                    </a></h5>
                  <p>
                    <?=wp_trim_words( get_the_content(), 8, '' );?>
                  </p>
                </li>
                <?php 
					if($count % 6 == 0)
					{
						echo '</ul></div><div class="item "><ul class="pro-li">';	
					}
					
				}
				 ?>
              </ul>
            </div>
          </div>
          <!-- Carousel controls --> 
          <a class="carousel-control left" href="#myCarouselP2<?=$count1?>" data-slide="prev"> <img src="<?php echo get_template_directory_uri(); ?>/images/left-icon.png" alt=""> </a> <a class="carousel-control right" href="#myCarouselP2<?=$count1?>" data-slide="next"> <img src="<?php echo get_template_directory_uri(); ?>/images/right-icon.png" alt=""> </a> </div>
      </div>
      <?php 
				  
	 wp_reset_postdata();

	 ?>
      <?php
	 }
	 echo '</div></div>'; $count1++;
	}
	?>
    </div>
  </div>
  <?php //} ?>
  <!-- product support -->
  <?php if( have_rows('documents', $queried_object) ): $files = '';?>
  <div class="container">
    <?php if(!empty($queried_object)) { ?>
    <h2>Product Support</h2>
    <?php } ?>
    <div class="row">
      <div class="col-xs-12"> </div>
      <div class="col-xs-12 col-sm-6 col-md-4 Productinn">
        <h5><a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">- Documents </a><small class="pull-right"><a href="javascript:void(0);" onclick="downloadFiles('downloadFilesForm')">Download all as zip</a></small></h5>
        <div id="collapse-1" class="panel-collapse collapse in">
          <form name="downloadFilesForm" id="downloadFilesForm" action="" method="post">
            <?php while( have_rows('documents', $queried_object) ): the_row(); ?>
            <p>
              <label>
                <input type="checkbox" name="document[]" value="<?php the_sub_field('add_file'); ?>">
                <i class="fa fa-file-o fa-2x" aria-hidden="true"></i> <a href="<?php the_sub_field('add_file'); ?>" target="_blank">
                <?php the_sub_field('document_title'); ?>
                </a> </label>
            </p>
            <?php
		if($files!=''){ 
			$files .= '@'.get_sub_field('add_file');
		}else{
			$files = get_sub_field('add_file');
		}
		endwhile; ?>
            <input type="hidden" name="downloadFiles" id="downloadFiles" value="<?=$files?>">
            <input type="hidden" name="documents" id="documents" value="documents">
            <input type="hidden" name="filename" id="filename" value="<?=$queried_object->name?>">
          </form>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 Productinn">
        <h5><a data-toggle="collapse" data-parent="#accordion" href="#collapse-2">- Software/Firmware</a><small class="pull-right"><a href="javascript:void(0);" onclick="downloadFiles('downloadSoftwareForm')">Download all as zip</a></small></h5>
        <div id="collapse-3" class="panel-collapse collapse in">
          <form name="downloadSoftwareForm" id="downloadSoftwareForm" action="" method="post">
            <?php if( have_rows('software/firmware', $queried_object) ): ?>
            <?php while( have_rows('software/firmware', $queried_object) ): the_row(); ?>
            <p><a href="<?php the_sub_field('add_file'); ?>"><i class="fa fa-download fa-2x" aria-hidden="true"></i>
              <?php the_sub_field('title'); ?>
              </a></p>
            <?php 
		if($Software!=''){ 
			$Software .= '@'.get_sub_field('add_file');
		}else{
			$Software = get_sub_field('add_file');
		}
		endwhile; ?>
            <?php endif; ?>
            <input type="hidden" name="downloadFiles" id="downloadFiles" value="<?=$Software?>">
            <input type="hidden" name="documents" id="documents" value="software">
            <input type="hidden" name="filename" id="filename" value="<?=$queried_object->name?>">
          </form>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 Productinn">
        <h5><a data-toggle="collapse" data-parent="#accordion" href="#collapse-3">- Connectivity </a><small class="pull-right"><a href="javascript:void(0);" onclick="downloadFiles('downloadImagesForm')">Download all as zip</a></small></h5>
        <div id="collapse-3" class="panel-collapse collapse in">
          <form name="downloadImagesForm" id="downloadImagesForm" action="" method="post">
            <?php if( have_rows('connectivity' , $queried_object) ): ?>
            <?php while( have_rows('connectivity' , $queried_object) ): the_row(); ?>
            <h5><img src="<?php the_sub_field('image');?>" alt="" /><?php the_sub_field('title');?></h5>
            <?php if($img!=''){ 
			$img .= '@'.get_sub_field('image');
		}else{
			$img = get_sub_field('image');
		}?>
            <?php endwhile; ?>
            <?php endif; ?>
            <input type="hidden" name="downloadFiles" id="downloadFiles" value="<?=$img?>">
            <input type="hidden" name="documents" id="documents" value="connectivity">
            <input type="hidden" name="filename" id="filename" value="<?=$queried_object->name?>">
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if( have_rows('customer_testimonials' , $queried_object)): ?>
  <div class="seprate sep-gray">
    <div class="container">
      <?php if(!empty($queried_object)) { ?>
      <h2>Customer Testimonials</h2>
      <?php } ?>
      <div class="row">
        <?php while( have_rows('customer_testimonials' , $queried_object) ): the_row();?>
        <div class="col-xs-12 col-sm-4 col-md-3 sepratein ">
          <div class="imagevid"> <img src="<?php the_sub_field('video_image');?>" alt="" /> <span> <a href="<?php the_sub_field('video_link');?>" > </a>
            <p>
              <?php the_sub_field('content'); ?>
            </p>
            </span> </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
</div>
<!-- market -->
<?php if( have_rows('market_applications', $queried_object) ): ?>
<div class="training market-application">
  <div class="container">
    <?php if(!empty($queried_object)) { ?>
    <h2>Market Applications</h2>
    <?php } ?>
    <div class="row">
      <div class="col-xs-12"> </div>
      <div class="col-xs-12 Choose-a-market">
        <select name="market" onchange="selectMarket(this.value)">
          <?php while( have_rows('market_applications', $queried_object) ): the_row(); ?>
          <option value="<?php echo clean(get_sub_field('select_market'));?>">
          <?php the_sub_field('select_market');?>
          </option>
          <?php endwhile; ?>
        </select>
      </div>
      <?php if( have_rows('market_applications', $queried_object) ): $count=0;?>
      <?php while( have_rows('market_applications', $queried_object) ): the_row(); ?>
      <div class="col-xs-12 training-content" id="<?php echo clean(get_sub_field('select_market'));?>" <?=$count==0?'style="display:block"':'style="display:none"'?>> <img src="<?php the_sub_field('market_image');?>" alt="" />
        <h5> <a href="<?php the_sub_field('link');?>" >
          <?php the_sub_field('title');?>
          </a></h5>
        <p>
          <?php the_sub_field('market_content');?>
        </p>
      </div>
      <?php 
		  $count++;
		  endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- product use -->
<?php 
$posts = get_field('products_in_family', $queried_object);
if($posts){?>
<div class="relatednews">
  <div class="container">
    <h2>Products used with this family</h2>
    <div class="row">
      <div id="myCarousel" class="carousel slide pflide" data-ride="carousel" data-interval="false"> 
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
          <div class="item active ">
            <ul class="pf-li">
            <?php 
			$count = 0;
			foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        	<?php setup_postdata($post); $count++;?>
              <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(120,80)); ?></a></li>
             <?php
			  if($count % 6 == 0)
				{
					echo '</ul></div><div class="item "><ul class="pro-li">';	
				}
             endforeach; ?>              
          </div>
        </div>
        <!-- Carousel controls --> 
        <a class="carousel-control left" href="#myCarousel" data-slide="prev"> <img src="<?php echo get_template_directory_uri(); ?>/images/left-icon.png" alt=""> </a> <a class="carousel-control right" href="#myCarousel" data-slide="next"> <img src="<?php echo get_template_directory_uri(); ?>/images/right-icon.png" alt=""> </a> </div>
    </div>
  </div>
</div>
<?php wp_reset_postdata();?>
<?php } ?>
<!--=================== your choice ================================== -->

<section class="listtype">
  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
      <h4>Social Media</h4>
      <?php echo do_shortcode("[arrow_sf id='535']")?> <?php echo do_shortcode("[arrow_sf id='536']")?> </div>
    <?php if( have_rows('news_updates', $queried_object) ): ?>
    <div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
      <h4>News Updates</h4>
      <ul>
        <?php while( have_rows('news_updates', $queried_object) ): the_row(); ?>
        <li> <img src="<?php the_sub_field('news_image');?>" alt="" />
          <h5><a href="#">
            <?php the_sub_field('title'); ?>
            </a></h5>
          <p>
            <?php the_sub_field('intro_text'); ?>
          </p>
        </li>
        <?php endwhile; ?>
      </ul>
      <a href="#" class="viewmore">View More > </a> </div>
    <?php endif; ?>
    <?php if( have_rows('awards', $queried_object) ): ?>
    <div class="col-xs-12 col-sm-4 col-md-4 listtype-in">
      <h4>Awards</h4>
      <ul>
        <?php while( have_rows('awards', $queried_object) ): the_row(); ?>
        <li><img src="<?php the_sub_field('award_image');?>" alt="" /> </li>
        <?php endwhile; ?>
      </ul>
      <!-- <a href="#" class="viewmore">View More > </a> </div>--> 
    </div>
    <?php endif; ?>
  </div>
</section>

<div class="readylink-head">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 readylink-head-content">
					<h3>Ready to speak to someone about your project needs?</h3>
					<a href="#" class="gen-btn-clear">Locate a Reseller in your area</a>
					<a href="#" class="gen-btn-clear">Contact Clear-Com Sales</a>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">

function selectMarket(id)
{
	jQuery('.training-content').each(function() {
        jQuery(this).hide();
    });
	
	jQuery('#'+id).show();
	//alert(id);	
}
</script>
<?php get_footer(); ?>
