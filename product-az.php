<?php  
/* Template Name: Products A-Z */
get_header(); ?>

<div class="breadcrumbwrap">
  <div class="container">
    <ol class="breadcrumb">
      <li> <a href="<?=site_url()?>">Home</a> </li>
      <li class="active">A - Z Product Index</li>
    </ol>
  </div>
</div>
<!--=================== content area ================================== -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 a-z-custom">
      <div class="az-bar col-xs-12"> <a href="#A">A</a> <a href="#B">B</a> <a href="#C">C</a> <a href="#D">D</a> <a href="#E">E</a> <a href="#F">F</a> <a href="#G">G</a> <a href="#H">H</a> <a href="#I">I</a> <a href="#J">J</a> <a href="#K">K</a> <a href="#L">L</a> <a href="#M">M</a> <a href="#N">N</a> <a href="#O">O</a> <a href="#P">P</a> <a href="#Q">Q</a> <a href="#R">R</a> <a href="#S">S</a> <a href="#T">T</a> <a href="#U">U</a> <a href="#V">V</a> <a href="#W">W</a> <a href="#X">X</a> <a href="#Y">Y</a> <a href="#Z">Z</a> </div>
     <?php 
	 global $wpdb;      
	 for ($i = 0; $i < 26; ++$i) 
	 {
		$this_letter = chr(ord('A') + $i);
		$aids = $wpdb->get_col($wpdb->prepare("SELECT ID FROM  $wpdb->posts WHERE SUBSTR($wpdb->posts.post_title,1,1) = %s AND $wpdb->posts.post_type = 'product' ORDER BY $wpdb->posts.post_title", $this_letter));
		
		 if ($aids) {
			// print_r($aids);
		 $a = new WP_Query(array('posts_per_page' => -1,'post__in' => $aids,'post_type' => 'product',	'orderby' => 'title','order' => 'ASC'));
		 

		?>
        <div class="col-xs-6 col-sm-3 col-md-3" id="<?=$this_letter?>">      
            <h2><?=$this_letter?></h2>
                <div class="az-in">
                <?php if ($a->have_posts()) {while ($a->have_posts()) { $a->the_post();	?>
                    <p><a href="<?php the_permalink();?>"><?php the_title();?></a> </p>
                <?php } }?>
                </div> 
        </div>
		<?php    
			}   
		}
      ?>      
    </div>
  </div>
</div>
<!--=================== footer  ================================== --> 
<!--=================== footer  ==============================	  
<?php get_footer(); ?>