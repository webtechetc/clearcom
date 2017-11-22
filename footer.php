<!--=================== footer  ================================== -->
<footer class="clear-footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12  footer-list">
        <?php
						wp_nav_menu( array(
						'menu'   =>  'Footer Menu',
						'theme_location' => 'extra-menu',
						'container'		=> 	'none'
						) );
				?>
        
      
      </div>
      
      
	<div class="dropdown contact-drop">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton">
		   <img src="<?php echo get_template_directory_uri(); ?>/images/contact-btn.png" alt="">
		  </button>
		  <div class="dropdown-menu">
          	<a href="javascript:void(null)" id="close-contact"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
		  	<p>
		  		<a data-toggle="tab" href="#menu1">Sales & Orders Inquiries</a>
		  		<span>|</span>
		  		<a data-toggle="tab" href="#menu2">Technical Support</a>
	  		</p>
	  		<div class="tab-content">
			  	<div id="menu1" class="tab-pane fade in active">
			  		
				    <p>
				    	For pricing, availability, order status, spare parts, product issues, and shipping questions 
				    </p>
				    <p><strong>Americas and Asia-Pacific HQ</strong></p>
					<p>Tel: +1.510.337.6600 or 1.800.462.HELP (4357)Email: SalesSupportUS@clearcom.com</p>
					<p><strong>Europe, Middle East, and Africa</strong></p>
					<p>Tel: +44 1223 815000Email: SalesSupportEMEA@clearcom.com</p>
					<p><strong>Clear-Com LLC. China Representative Office</strong></p>
					<p>Sales/Marketing Tel: +86 10 59002608</p>
			  	</div>
				<div id="menu2" class="tab-pane fade">
					<p>For technical questions, product problems, application assistance, configuration help, repair pricing & status</p>
					<p><a href="#">Training Request</a></p>
					<p><a href="#">Product Repair Request</a></p>
					<p><a href="#">Technical Support Request</a></p>
				</div>
			</div>	
		  </div>
	</div>
      
      <div class="clearfix"></div>
      <div class="col-xs-12 col-sm-7 col-md-7 custom-link"> <img src="<?php echo get_template_directory_uri(); ?>/images/clear-logo.png" alt="logo">
        <ul class="fot-nav">
          <li><a href="/terms/">Terms of Use</a></li>
          <li><a href="/privacy-policy/">Privacy Policy</a></li>
          <li><a href="/company/">Company</a></li>
          <li><a href="/find-reseller/">Find a Reseller</a></li>
          <li><a href="/partner-login/">Partner Login</a></li>
          <li><a href="/sitemap/">Sitemap</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-5 custom-adress">
        <ul class="social-link">
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/tweeter.png" alt=""></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/in.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/yt.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/no.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog.png" alt=""></a></li>
        </ul>
        <p>Clear-Com, an HME Company.</p>
        <p>&copy; Copyright. Clear-Com, LLC. All right reserved</p>
      </div>
    </div>
  </div>
</footer>
<span id="top-link-block" class="hidden"> <a href="#top" class="well well-sm" id="backtotop"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;"> <img src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt=""> </a> </span> 
<!--=================== scrips  ================================== --> 

<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.backTop.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script type="text/javascript">
	jQuery('#dropdownMenuButton').on('click',function(){
		jQuery('div.contact-drop').addClass('open');
	});

	jQuery('#close-contact').on('click',function(){
		jQuery('div.contact-drop').removeClass('open');
	});


</script>

<?php wp_footer(); ?>

<!-- analytics --> 
<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<?php
if ( is_archive('events') ) {?>

<script type="text/javascript">
    $( "h3.clear-page-title" ).append( "Events" );
</script>

<?php }?>

</body></html>