<?php 
/* 
Template Name: Sales Contact 
*/ 
get_header(); 
?>
<!--=================== banner area ================================== -->
<div class="banner-gen"> <img src="<?php echo get_template_directory_uri(); ?>/images/rental-banner.jpg" alt="banner"> </div>
<!--=================== content area ================================== -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h3 class="clear-page-title">General Sales Contacts</h3>
    </div>
    <div class="col-xs-12 contact-sales">
      <form action="" class="sales-form">
        <label>Select a country</label>
        <select name="country">
        	<option value="AFG">Afghanistan</option>
            <option value="ALA">Åland Islands</option>
            <option value="ALB">Albania</option>
            <option value="DZA">Algeria</option>
            <option value="ASM">American Samoa</option>
            <option value="AND">Andorra</option>
            <option value="AGO">Angola</option>
            <option value="AIA">Anguilla</option>
            <option value="ATA">Antarctica</option>
            <option value="ATG">Antigua and Barbuda</option>
            <option value="ARG">Argentina</option>
            <option value="ARM">Armenia</option>
            <option value="ABW">Aruba</option>
            <option value="AUS">Australia</option>
            <option value="AUT">Austria</option>
            <option value="AZE">Azerbaijan</option>
            <option value="BHS">Bahamas</option>
            <option value="BHR">Bahrain</option>
            <option value="BGD">Bangladesh</option>
            <option value="BRB">Barbados</option>
            <option value="BLR">Belarus</option>
            <option value="BEL">Belgium</option>
            <option value="BLZ">Belize</option>
            <option value="BEN">Benin</option>
            <option value="BMU">Bermuda</option>
            <option value="BTN">Bhutan</option>
            <option value="BOL">Bolivia, Plurinational State of</option>
            <option value="BES">Bonaire, Sint Eustatius and Saba</option>
            <option value="BIH">Bosnia and Herzegovina</option>
            <option value="BWA">Botswana</option>
            <option value="BVT">Bouvet Island</option>
            <option value="BRA">Brazil</option>
            <option value="IOT">British Indian Ocean Territory</option>
            <option value="BRN">Brunei Darussalam</option>
            <option value="BGR">Bulgaria</option>
            <option value="BFA">Burkina Faso</option>
            <option value="BDI">Burundi</option>
            <option value="KHM">Cambodia</option>
            <option value="CMR">Cameroon</option>
            <option value="CAN">Canada</option>
            <option value="CPV">Cape Verde</option>
            <option value="CYM">Cayman Islands</option>
            <option value="CAF">Central African Republic</option>
            <option value="TCD">Chad</option>
            <option value="CHL">Chile</option>
            <option value="CHN">China</option>
            <option value="CXR">Christmas Island</option>
            <option value="CCK">Cocos (Keeling) Islands</option>
            <option value="COL">Colombia</option>
            <option value="COM">Comoros</option>
            <option value="COG">Congo</option>
            <option value="COD">Congo, the Democratic Republic of the</option>
            <option value="COK">Cook Islands</option>
            <option value="CRI">Costa Rica</option>
            <option value="CIV">Côte d'Ivoire</option>
            <option value="HRV">Croatia</option>
            <option value="CUB">Cuba</option>
            <option value="CUW">Curaçao</option>
            <option value="CYP">Cyprus</option>
            <option value="CZE">Czech Republic</option>
            <option value="DNK">Denmark</option>
            <option value="DJI">Djibouti</option>
            <option value="DMA">Dominica</option>
            <option value="DOM">Dominican Republic</option>
            <option value="ECU">Ecuador</option>
            <option value="EGY">Egypt</option>
            <option value="SLV">El Salvador</option>
            <option value="GNQ">Equatorial Guinea</option>
            <option value="ERI">Eritrea</option>
            <option value="EST">Estonia</option>
            <option value="ETH">Ethiopia</option>
            <option value="FLK">Falkland Islands (Malvinas)</option>
            <option value="FRO">Faroe Islands</option>
            <option value="FJI">Fiji</option>
            <option value="FIN">Finland</option>
            <option value="FRA">France</option>
            <option value="GUF">French Guiana</option>
            <option value="PYF">French Polynesia</option>
            <option value="ATF">French Southern Territories</option>
            <option value="GAB">Gabon</option>
            <option value="GMB">Gambia</option>
            <option value="GEO">Georgia</option>
            <option value="DEU">Germany</option>
            <option value="GHA">Ghana</option>
            <option value="GIB">Gibraltar</option>
            <option value="GRC">Greece</option>
            <option value="GRL">Greenland</option>
            <option value="GRD">Grenada</option>
            <option value="GLP">Guadeloupe</option>
            <option value="GUM">Guam</option>
            <option value="GTM">Guatemala</option>
            <option value="GGY">Guernsey</option>
            <option value="GIN">Guinea</option>
            <option value="GNB">Guinea-Bissau</option>
            <option value="GUY">Guyana</option>
            <option value="HTI">Haiti</option>
            <option value="HMD">Heard Island and McDonald Islands</option>
            <option value="VAT">Holy See (Vatican City State)</option>
            <option value="HND">Honduras</option>
            <option value="HKG">Hong Kong</option>
            <option value="HUN">Hungary</option>
            <option value="ISL">Iceland</option>
            <option value="IND">India</option>
            <option value="IDN">Indonesia</option>
            <option value="IRN">Iran, Islamic Republic of</option>
            <option value="IRQ">Iraq</option>
            <option value="IRL">Ireland</option>
            <option value="IMN">Isle of Man</option>
            <option value="ISR">Israel</option>
            <option value="ITA">Italy</option>
            <option value="JAM">Jamaica</option>
            <option value="JPN">Japan</option>
            <option value="JEY">Jersey</option>
            <option value="JOR">Jordan</option>
            <option value="KAZ">Kazakhstan</option>
            <option value="KEN">Kenya</option>
            <option value="KIR">Kiribati</option>
            <option value="PRK">Korea, Democratic People's Republic of</option>
            <option value="KOR">Korea, Republic of</option>
            <option value="KWT">Kuwait</option>
            <option value="KGZ">Kyrgyzstan</option>
            <option value="LAO">Lao People's Democratic Republic</option>
            <option value="LVA">Latvia</option>
            <option value="LBN">Lebanon</option>
            <option value="LSO">Lesotho</option>
            <option value="LBR">Liberia</option>
            <option value="LBY">Libya</option>
            <option value="LIE">Liechtenstein</option>
            <option value="LTU">Lithuania</option>
            <option value="LUX">Luxembourg</option>
            <option value="MAC">Macao</option>
            <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
            <option value="MDG">Madagascar</option>
            <option value="MWI">Malawi</option>
            <option value="MYS">Malaysia</option>
            <option value="MDV">Maldives</option>
            <option value="MLI">Mali</option>
            <option value="MLT">Malta</option>
            <option value="MHL">Marshall Islands</option>
            <option value="MTQ">Martinique</option>
            <option value="MRT">Mauritania</option>
            <option value="MUS">Mauritius</option>
            <option value="MYT">Mayotte</option>
            <option value="MEX">Mexico</option>
            <option value="FSM">Micronesia, Federated States of</option>
            <option value="MDA">Moldova, Republic of</option>
            <option value="MCO">Monaco</option>
            <option value="MNG">Mongolia</option>
            <option value="MNE">Montenegro</option>
            <option value="MSR">Montserrat</option>
            <option value="MAR">Morocco</option>
            <option value="MOZ">Mozambique</option>
            <option value="MMR">Myanmar</option>
            <option value="NAM">Namibia</option>
            <option value="NRU">Nauru</option>
            <option value="NPL">Nepal</option>
            <option value="NLD">Netherlands</option>
            <option value="NCL">New Caledonia</option>
            <option value="NZL">New Zealand</option>
            <option value="NIC">Nicaragua</option>
            <option value="NER">Niger</option>
            <option value="NGA">Nigeria</option>
            <option value="NIU">Niue</option>
            <option value="NFK">Norfolk Island</option>
            <option value="MNP">Northern Mariana Islands</option>
            <option value="NOR">Norway</option>
            <option value="OMN">Oman</option>
            <option value="PAK">Pakistan</option>
            <option value="PLW">Palau</option>
            <option value="PSE">Palestinian Territory, Occupied</option>
            <option value="PAN">Panama</option>
            <option value="PNG">Papua New Guinea</option>
            <option value="PRY">Paraguay</option>
            <option value="PER">Peru</option>
            <option value="PHL">Philippines</option>
            <option value="PCN">Pitcairn</option>
            <option value="POL">Poland</option>
            <option value="PRT">Portugal</option>
            <option value="PRI">Puerto Rico</option>
            <option value="QAT">Qatar</option>
            <option value="REU">Réunion</option>
            <option value="ROU">Romania</option>
            <option value="RUS">Russian Federation</option>
            <option value="RWA">Rwanda</option>
            <option value="BLM">Saint Barthélemy</option>
            <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
            <option value="KNA">Saint Kitts and Nevis</option>
            <option value="LCA">Saint Lucia</option>
            <option value="MAF">Saint Martin (French part)</option>
            <option value="SPM">Saint Pierre and Miquelon</option>
            <option value="VCT">Saint Vincent and the Grenadines</option>
            <option value="WSM">Samoa</option>
            <option value="SMR">San Marino</option>
            <option value="STP">Sao Tome and Principe</option>
            <option value="SAU">Saudi Arabia</option>
            <option value="SEN">Senegal</option>
            <option value="SRB">Serbia</option>
            <option value="SYC">Seychelles</option>
            <option value="SLE">Sierra Leone</option>
            <option value="SGP">Singapore</option>
            <option value="SXM">Sint Maarten (Dutch part)</option>
            <option value="SVK">Slovakia</option>
            <option value="SVN">Slovenia</option>
            <option value="SLB">Solomon Islands</option>
            <option value="SOM">Somalia</option>
            <option value="ZAF">South Africa</option>
            <option value="SGS">South Georgia and the South Sandwich Islands</option>
            <option value="SSD">South Sudan</option>
            <option value="ESP">Spain</option>
            <option value="LKA">Sri Lanka</option>
            <option value="SDN">Sudan</option>
            <option value="SUR">Suriname</option>
            <option value="SJM">Svalbard and Jan Mayen</option>
            <option value="SWZ">Swaziland</option>
            <option value="SWE">Sweden</option>
            <option value="CHE">Switzerland</option>
            <option value="SYR">Syrian Arab Republic</option>
            <option value="TWN">Taiwan, Province of China</option>
            <option value="TJK">Tajikistan</option>
            <option value="TZA">Tanzania, United Republic of</option>
            <option value="THA">Thailand</option>
            <option value="TLS">Timor-Leste</option>
            <option value="TGO">Togo</option>
            <option value="TKL">Tokelau</option>
            <option value="TON">Tonga</option>
            <option value="TTO">Trinidad and Tobago</option>
            <option value="TUN">Tunisia</option>
            <option value="TUR">Turkey</option>
            <option value="TKM">Turkmenistan</option>
            <option value="TCA">Turks and Caicos Islands</option>
            <option value="TUV">Tuvalu</option>
            <option value="UGA">Uganda</option>
            <option value="UKR">Ukraine</option>
            <option value="ARE">United Arab Emirates</option>
            <option value="GBR">United Kingdom</option>
            <option value="USA">United States</option>
            <option value="UMI">United States Minor Outlying Islands</option>
            <option value="URY">Uruguay</option>
            <option value="UZB">Uzbekistan</option>
            <option value="VUT">Vanuatu</option>
            <option value="VEN">Venezuela, Bolivarian Republic of</option>
            <option value="VNM">Viet Nam</option>
            <option value="VGB">Virgin Islands, British</option>
            <option value="VIR">Virgin Islands, U.S.</option>
            <option value="WLF">Wallis and Futuna</option>
            <option value="ESH">Western Sahara</option>
            <option value="YEM">Yemen</option>
            <option value="ZMB">Zambia</option>
            <option value="ZWE">Zimbabwe</option>

        </select>
        <input type="submit" value="" />
        <a href="/contacts/resellers-contacts/" class="gen-btn-clear">Click here to search for resellers</a> <a href="#" class="gen-btn-clear">Military, Aerospace & Government Sales Contacts</a>
      </form>
    </div>
  </div>
</div>
<!-- slider start -->
<div class="sales-person-slide skyblue">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 myskyslide-wraper">
        <div class="naq">
          <p>North, Central and South America </p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/contact-section1.png" alt=""> </div>
        <?php 
			 $args = array( 'post_type' => 'sales_contacts', 'posts_per_page' => 8, 'orderby' => 'ID', 'order' => 'ASC' );
			 $the_query = new WP_Query( $args ); 
			 ?>
        <div id="myskyslide" class="carousel slide myskyslide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active ">
              <?php if ( $the_query->have_posts() )
				 {
					 $count = 0;
				 	 while ( $the_query->have_posts() ) { 
					 $the_query->the_post(); $count++;
						 
				  ?>
                  <div class="item-in" id="contentToModel_<?=get_the_id()?>">
                    <?php the_post_thumbnail(); ?>
                    <h4>
                      <?php the_title(); ?>
                    </h4>
                    <p><?php echo substr(get_the_content(),0,300); ?></p>
                    <input type="hidden" name="region" id="region_<?=get_the_id()?>" value="<?php the_field('region');?>">
                    <input type="hidden" name="job_title" id="job_title_<?=get_the_id()?>" value="<?php the_field('job_title');?>">
                    <input type="hidden" name="phone" id="phone_<?=get_the_id()?>" value="<?php the_field('phone');?>">
                    <input type="hidden" name="email" id="email_<?=get_the_id()?>" value="<?php the_field('email');?>">
                    <input type="hidden" name="fax" id="fax_<?=get_the_id()?>" value="<?php the_field('fax');?>">
                    <input type="hidden" name="cell" id="cell_<?=get_the_id()?>" value="<?php the_field('cell');?>">
                    <input type="hidden" name="countries" id="countries_<?=get_the_id()?>" value="<?php the_field('countries');?>">
                    <span onclick="showModel(<?=get_the_id()?>)"><img src="<?php echo get_template_directory_uri(); ?>/images/contact-more-btn.png"></span> </div>
              <?php 
					if($count % 4 == 0)
					{
						echo '</div><div class="item "> ';	
					}
					
					
				}
				 ?>
              <?php
					 }
					
					echo ' <script type="text/javascript">
						if($(".item").length > 2){
						   $(".item:gt(1)").remove();
						}
						</script>';
					 wp_reset_postdata();
	//echo "</div>";
				 
			?>
            </div>
            
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog sky-dialog"> 
                
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body" id="model_content">
                    <div class="item-model"> <img src="<?php echo get_template_directory_uri(); ?>/images/1296066343Mike-Rucker.jpg" alt="First Slide">
                      <h4>Michael Rucker </h4>
                      <p>Director of Sales - North & South America </p>
                      <p>Tel:+1 (972) 393-3244</p>
                      <p>Cell: +1 (469) 644-4753?</p>
                      <p> <a href="mailto:mike.rucker@clearcom.com" >mike.rucker@clearcom.com</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal --> 
          </div>
          <!-- Carousel controls --> 
          <a class="carousel-control left" href="#myskyslide" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="carousel-control right" href="#myskyslide" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
      </div>
    </div>
  </div>
</div>
<!-- slider start end --> 

<!-- slider start 2 -->
<div class="sales-person-slide">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 myskyslide-wraper">
        <div class="naq">
          <p>Europe, Middle East, and Africa </p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/contact-section1.png" alt=""> </div>
        <?php 
		 $args1 = array( 'post_type' => 'sales_contacts', 'posts_per_page' => 8, 'orderby' => 'ID', 'order' => 'ASC' );
		 $the_query = new WP_Query( $args1 ); 
		 ?>
        <div id="myskyslide<?=$count?>" class="carousel slide myskyslide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active ">
              <?php if ( $the_query->have_posts() )
				 {
					 $count = 0;
					 while ( $the_query->have_posts() ) { 
					 $the_query->the_post(); $count++;
				  ?>
              <div class="item-in" id="contentToModel1_<?=get_the_id()?>">
                <?php the_post_thumbnail(); ?>
                <h4>
                  <?php the_title(); ?>
                </h4>
                <p><?php echo substr(get_the_content(),0,300); ?></p>
                <input type="hidden" name="region" id="region_<?=get_the_id()?>" value="<?php the_field('region');?>">
                    <input type="hidden" name="job_title" id="job_title1_<?=get_the_id()?>" value="<?php the_field('job_title');?>">
                    <input type="hidden" name="phone" id="phone1_<?=get_the_id()?>" value="<?php the_field('phone');?>">
                    <input type="hidden" name="email" id="email1_<?=get_the_id()?>" value="<?php the_field('email');?>">
                    <input type="hidden" name="fax" id="fax1_<?=get_the_id()?>" value="<?php the_field('fax');?>">
                    <input type="hidden" name="cell" id="cell1_<?=get_the_id()?>" value="<?php the_field('cell');?>">
                    <input type="hidden" name="countries" id="countries1_<?=get_the_id()?>" value="<?php the_field('countries');?>">
                    <input type="hidden" name="state" id="state1_<?=get_the_id()?>" value="<?php the_field('state');?>">
                <span onclick="showModel1(<?=get_the_id()?>)"><img src="<?php echo get_template_directory_uri(); ?>/images/contact-more-btn.png"></span> </div>
              <?php 
					if($count % 4 == 0)
					{
						echo '</div><div class="item ">';   
					}
				}
			  ?>
              <?php
			 }
			 wp_reset_postdata();
			 ?>
            </div>
            
            <!-- Modal -->
            <div id="myModal1" class="modal fade" role="dialog">
              <div class="modal-dialog sky-dialog"> 
                
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body" id="model_content1">
                    <div class="item-model"> <img src="<?php echo get_template_directory_uri(); ?>/images/1296066343Mike-Rucker.jpg" alt="First Slide">
                      <h4>Michael Rucker </h4>
                      <p>Director of Sales - North & South America </p>
                      <p>Tel:+1 (972) 393-3244</p>
                      <p>Cell: +1 (469) 644-4753?</p>
                      <p> <a href="mailto:mike.rucker@clearcom.com" >mike.rucker@clearcom.com</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal --> 
          </div>
          <!-- Carousel controls --> 
          <a class="carousel-control left" href="#myskyslide<?=$count?>" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="carousel-control right" href="#myskyslide<?=$count?>" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
      </div>
    </div>
  </div>
</div>
<!-- slider start end 2--> 
<script type="text/javascript">
function showModel(id)
{
	var html = '';
	var img = jQuery('#contentToModel_'+id).find('img').eq(0).attr('src');
	var title = jQuery('#contentToModel_'+id).find('h4').eq(0).html();
	var jobtitle = jQuery('#job_title_'+id).val();
	var phone1 = jQuery('#phone_'+id).val();
	var cell1 = jQuery('#cell_'+id).val();
	var email1 = jQuery('#email_'+id).val();
	html += '<div class="item-model">';
	html += '<img src="'+img+'" alt="First Slide"><h4>'+title+'</h4>';
	if(jobtitle)
	{
		html += '<p>'+jobtitle+'</p>';
	}
	if(phone1)
	{
		html += '<p>Tel:'+phone1+'</p>';
	}
	if(cell1)
	{
		html += '<p>Cell: +1 (469) 644-4753?</p>';
	}
	if(email1)
	{
		html += '<p><a href="mailto:'+email1+'" >'+email1+'</a> </p>';
	}
	html += '</div>';
	jQuery('#model_content1').html('');
	jQuery('#model_content1').html(html);
	jQuery('#myModal1').modal('show');	
}
function showModel1(id)
{
	var html = '';
	var img = jQuery('#contentToModel1_'+id).find('img').eq(0).attr('src');
	var title = jQuery('#contentToModel1_'+id).find('h4').eq(0).html();
	var jobtitle = jQuery('#job_title1_'+id).val();
	var phone1 = jQuery('#phone1_'+id).val();
	var cell1 = jQuery('#cell1_'+id).val();
	var email1 = jQuery('#email1_'+id).val();
	html += '<div class="item-model">';
	html += '<img src="'+img+'" alt="First Slide"><h4>'+title+'</h4>';
	if(jobtitle)
	{
		html += '<p>'+jobtitle+'</p>';
	}
	if(phone1)
	{
		html += '<p>Tel:'+phone1+'</p>';
	}
	if(cell1)
	{
		html += '<p>Cell: +1 (469) 644-4753?</p>';
	}
	if(email1)
	{
		html += '<p><a href="mailto:'+email1+'" >'+email1+'</a> </p>';
	}
	html += '</div>';
	jQuery('#model_content1').html('');
	jQuery('#model_content1').html(html);
	jQuery('#myModal1').modal('show');	
}


/*var $modal = jQuery('.modal');

// Show loader & then get content when modal is shown
$modal.on('show.bs.modal', function(e) {
  var paragraphs = jQuery(e.relatedTarget).data('paragraphs');
//alert($modal);
	console.log(e);
  jQuery(this).addClass('modal-scrollfix').find('.modal-body').find('h4').html('loading...').html('Tech').load('', function() {
      $modal
    });
});*/
</script> 
<!--=================== footer  ================================== -->

<?php get_footer(); ?>
