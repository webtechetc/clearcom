<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
        <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title>
        <?php wp_title(''); ?>
        <?php if(wp_title('', false)) { echo ' : '; } ?>
        <?php bloginfo('name'); ?>
        </title>
        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">

        <!--=================== custom style css ================================== -->

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
        <?php wp_head(); ?>
        <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

        </head>
        <body <?php body_class(); ?>>

<!-- header -->

<header> 
          
          <!--=================== top area ================================== -->
          
          <section class="top-bar">
    <div class="container"> 
              <!-- logo -->
              <div class="logo"> <a href="<?php echo home_url(); ?>"> 
                <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script --> 
                <img src="<?php echo get_template_directory_uri(); ?>/images/clear-logo.png" alt="Logo" class="logo-img"> </a> </div>
              <!-- /logo -->
              
              <div class="topnavbar">
        <div class="topsearch">
          <form method="get" action="<?php echo home_url(); ?>" role="search">
            <a href="#">Find a Reseller</a> | <a href="#">Partner Login</a>
            <input type="search"  value="" class="searchinput" name="s" aria-label="Search site for:" placeholder="<?php _e( 'Search...', 'html5blank' ); ?>">
          </form>

        </div>
        
        <!-- nav -->
        
        <nav class="mynav-top">
                 
			<?php
				wp_nav_menu( array(
					'menu'   =>  'Top Menu',
					'theme_location' => 'header-menu',
					'menu_class'     => 'nav navbar-nav',
					'container'		=> 	'none'
				 ) );
			?>
	         

                  
        </nav>
        <!-- /nav --> 
        
      </div>
            </div>
    <!-- container end --> 
    
  </section>
          <!-- top section end --> 

          
        </header>

<!-- /header --> 

    <?php if ( ! is_home() ) {?>

    <?php custom_breadcrumbs(); ?>

    <?php }?>


<?php
if ( is_post_type_archive( 'tribe_events' )){?>


<section class="slider">

<div id="myCarousel1" class="carousel slide eventcarousel" data-ride="carousel">
     
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="First Slide">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="Second Slide">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="Third Slide">
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel1" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
   
</div>

</section>

<?php }?>

