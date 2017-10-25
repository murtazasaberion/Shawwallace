<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHAW WALLACE | ABOUT</title>
<link rel="stylesheet" href="../resources/styles/base_style.css" type="text/css" media="screen"/>
<link rel="shortcut icon" href="../resources/images/icon.jpg" type="image/x-icon">
<script type="text/javascript" src="../resources/scripts/image_rolover.js"> </script>


<link href="../resources/styles/slider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../resources/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../resources/js/jquery.pngFix.js"></script>
<script type="text/javascript" src="../resources/js/content_slider.js"></script>

<script type="text/javascript">
$(document).ready(function(){ 
        $(document).pngFix(); 
    });

    //<![CDATA[ 
 
//setup scrolling
$(function() {
	
	//add listeners
	$('.left_arrow a').click(scroll);
	$('.right_arrow a').click(scroll);

	$('#link_options a').click(scroll);
	
	//set default height
	var h = calcHeight(0);
	$(".slides").css('height', h);
});

//called on scroll click
function scroll(e) {
	
	//vars
	var w = 900;
	var pages = $('#link_options li').length;
	if (!(scroll.pos >= 0)) scroll.pos = 0;
	var prev_pos = scroll.pos;
	
	//stop click
	e.preventDefault();

	//pick direction
	var dir = 0;
	if ($(e.target).parent().hasClass('right_arrow'))  {
		scroll.pos++;
		if (scroll.pos > pages - 1) scroll.pos = 0;
		dir = 1;
	} else if ($(e.target).parent().hasClass('left_arrow'))  {
		scroll.pos--;
		if (scroll.pos < 0) scroll.pos = pages-1;
		dir = -1;
	} else if ($(e.target).parents('#link_options').length) {
		scroll.pos = $('#link_options li').index($(e.target).parents('li').eq(0));
		if (scroll.pos == prev_pos) return;
		dir = scroll.pos > prev_pos ? 1 : -1;
	}
	
	//update the active nav
	$('#link_options li a').removeClass('active');
	$('#link_options li').eq(scroll.pos).find('a').addClass('active');
	Cufon.refresh();
		
	//reorganize slides.  if the offsets change because of moving shit around, move slides to accomodate
	var x1 = $(".slide_"+prev_pos).position().left;
	if (dir == 1) $(".slide_"+scroll.pos).insertAfter(".slide_"+prev_pos);
	else if (dir == -1) $(".slide_"+scroll.pos).insertBefore(".slide_"+prev_pos);
	var x2 = $(".slide_"+prev_pos).position().left;
	$("#slide-container").animate({'left': '+='+(x1-x2)+'px'}, 0);
	
	//scroll
	move = (dir == 1 ? '-=' : '+=')+w+'px';
	$("#slide-container").animate({'left': move}, 500);
	
	//expand
	var h = calcHeight(scroll.pos);
	$(".slides").animate({'height': h}, 500);
	
}

//calculate height
function calcHeight(slide_pos) {
	var h = $(".slide_"+slide_pos).height() + 10;
	if (h < 200) h = 200;
	return h+'px';
}
    //]]>
</script>



</head>

<body onload="MM_preloadImages('../resources/images/saberion2.jpg')">
<div id="page_wrap">
<div id="header">
<?php
include('../include/header_inner.php');
?>

</div><!--end of header -->



<div id="content" style=" padding-top:10px;">
<div class="text1" id="common_box" style="height:18px;">You are in:  <span class="text2">About Us</span> /  Facilities & Infrastructure</div>
<div class="text1" id="left_navi_box">
<div class="headin1" id="common_box" style="padding-bottom:10px;">About Us</div>
<ul>
<li class="left_links"><a href="index.php" class="left_links">Vision & Values</a></li>
<li><a href="origins.php" class="left_links">Origins</a></li>
<li><a href="info_corporat.php" class="left_links">Corporate Information</a></li>
<li><a href="networks.php" class="left_links">Distribution Network</a></li>
<li><a href="facilities.php" class="left_links_sel">Facilities &amp; Infrastructure</a></li>

</ul>
</div>

<div id="common_box" style="width:780px;">
	<div id="img_box" > <img src="img/facilities.jpg" width="780" height="250" /></div>
    
    <div id="links_under_title_region">
       	<table width="780" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="266" height="4" align="left" valign="middle" class="headin2"></td>
    <td width="480" rowspan="2">
    
<ul id="link_options">
                    <li><a href="#" class="active"> Building</a><div id="common_box" style="width:2px"><img src="img/sp_line.jpg" width="2" height="35" /></div></li>
                    <li><a href="#">Warehouse</a><div id="common_box" style="width:2px"><img src="img/sp_line.jpg" width="2" height="35" /></div></li>
                    <li><a href="#">Fleet</a><div id="common_box" style="width:2px"><img src="img/sp_line.jpg" width="2" height="35" /></div></li>
                    <li><a href="#">Manufacturing Facility</a></li>

              </ul>
                <div class="left_arrow"><a href="#"></a></div>
                <div class="right_arrow"><a href="#"></a></div>
                
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" class="headin2">&nbsp;&nbsp;Facilities &amp; Infrastructure</td>
  </tr>
        </table>
            </div>   
            
            <div id="bulk_contents_region">
          	
            <div id="expertise_slides" class="clearfix">
            
<div class="slides" style="width:780px;">
                    	    <div id="slide-container">
                    	      <div class="slide slide_0">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">Shaw Wallace Building</span>
								<span class="text_globle">Situated in the main highway connecting the North and South of Colombo the Shaw Wallace Building is a modern 8 storey corporate headquarters consisting of 70,000 sq ft.. Currently Shaw Wallace occupies part of the building while the rest is tenanted by a prestigious clientele.
</span>
                  	          </div>
                    	      </div>
                    	      <div class="slide slide_1">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">Shaw Wallace Warehouse</span>
                                  <span class="text_globle">Located on the main highway leading to the International Airport and interlinking the North Western and southern points of Colombo as well as the second largest city of Kandy, the Shaw Wallace warehouse is a 80,000 sq ft facility on a large area of land to grow and cater to the company’s needs over the years.<br /><br />

We are equipped with optimum storage and inventory systems allowing us to respond rapidly to customer demand. In order to maintain the highest standard of storage for its products, Shaw Wallace Ceylon Ltd has consistently invested in its supply chain and inventory systems.<br /><br />

Our newly instituted warehouse facility with end to end racking systems ensures capacity for better temperature controlled inventory. The multiple docking system and information system improvements also ensure faster efficient response to our customers.

                   	            </span> </div>
                    	      </div>
                    	      <div class="slide slide_2">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">Shaw Wallace Fleet</span>
                    	          <p class="text_globle">A fully fledged fleet of Lorries and prime movers cater to our delivery requirements thus ensuring that products and service continue uninterrupted. 
                    	        </div>
                    	      </div>
                    	      
                              <div class="slide slide_3">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">Manufacturing Facility </span>
                    	          <p class="text_globle">Our own facilities are situated in Ekala and Wadduwa where we manufacture using local raw material products such as Soya, Drink mixes, Snacks, Canned fish, fruit juices and a range of dairy products.</p>
                                  
                                  <span class="headin3">Quality</span>
                                <p class="text_globle">Our food manufacturing process and quality management systems are accredited for food safety by the award of ISO 22000: 2005 Food Safety Management Systems Certification.</p>
                                <p class="text_globle">Our Manufacturing environment is accredited as a safe work environment for our employees by the award of OHSAS18001: 2007 Occupational Health and Safety Assurance Systems certification.</p>
                                <p class="text_globle">Our Commitment and care for our environment is demonstrated by the award of ISO 14001: 2004 Environment Management Systems certification.</p>
                                <p class="text_globle">In addition, our fruit products have earned 'SLS' product certifications from Sri Lanka Standards Institute.</p>
                                <p class="text_globle"><img src="../resources/images/quality-logos.jpg" width="200" height="45" alt="" /></p>
                                <br>
                                <span class="headin3">Our out growers</span>
                                <p class="text_globle">We carry out dairy development and extension programmes in selected geographical locations. These development programmes include facilitating microfinance arrangements, provision of essential requirements at subsidized schemes, credit, insurance, distress grants, educational assistance, welfare programmes and provision of technical knowledge.</p>
								<p class="text_globle">Our technically qualified and experienced dairy development officers operate from these centres and we carry out Procurement activities from our chilling centres located in Galaha, Kiridiwela, Bandaragama, Horana, Dambulla, Nikawaratiya and Wadduwa.
</p>

                                  
                    	        </div>
                    	      </div>
                              
                  	      </div>
       	      </div>
            

</div>
          </div>
          
</div>



</div><!--end of content -->


<div id="footer">
<?php
include('../include/footer_inner.php');
?>
</div><!--end of footer -->

</div><!--end of page_wrap -->


</body>
</html>
