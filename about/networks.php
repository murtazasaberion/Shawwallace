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
<div class="text1" id="common_box" style="height:18px;">You are in:  <span class="text2">About Us</span> /  Distribution Network</div>
<div class="text1" id="left_navi_box">
<div class="headin1" id="common_box" style="padding-bottom:10px;">About Us</div>
<ul>
<li class="left_links"><a href="index.php" class="left_links">Vision & Values</a></li>
<li><a href="origins.php" class="left_links">Origins</a></li>
<li><a href="info_corporat.php" class="left_links">Corporate Information</a></li>
<li><a href="networks.php" class="left_links_sel">Distribution Network</a></li>
<li><a href="facilities.php" class="left_links">Facilities &amp; Infrastructure</a></li>

</ul>
</div>

<div id="common_box" style="width:780px;">
	<div id="img_box" > <img src="img/network.jpg" width="780" height="250" /></div>
    
    <div id="links_under_title_region">
       	<table width="780" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="266" height="4" align="left" valign="middle" class="headin2"></td>
    <td width="314" rowspan="2">
    
<ul id="link_options">
                    <li><a href="#" class="active"> General Trade </a>
                    <div id="common_box" style="width:2px"><img src="img/sp_line.jpg" width="2" height="35" /></div></li>
                    <li><a href="#"> Modern Trade  </a>
                    <div id="common_box" style="width:2px"><img src="img/sp_line.jpg" width="2" height="35" /></div></li>
                    <li><a href="#">Foodservice</a><div id="common_box" style="width:2px"><img src="img/sp_line.jpg" width="2" height="35" /></div></li>
                    <!--<li><a href="#">Industrial Solutions</a></li>-->

              </ul>
            <div class="left_arrow"><a href="#"></a></div>
                <div class="right_arrow"><a href="#"></a></div>
                
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" class="headin2">&nbsp;&nbsp;Distribution Network</td>
  </tr>
        </table>
            </div>   
            
            <div id="bulk_contents_region">
          	
            <div id="expertise_slides" class="clearfix">
            
<div class="slides" style="width:780px;">
                    	    <div id="slide-container">
                    	      <div class="slide slide_0">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">General Trade</span>

<span class="text_globle">Operates through a highly spread Nominated Distributor network across the country to over 100,000 outlets directly & indirectly across Sri Lanka assisted and monitored by over 100 company salesmen. A state-of -the-art  Sales Force Automation system ensures proactive & swift response to all types of sales related inquires and servicing requirements in order to maintain consistent accurate & rapid delivery. Our Integrated Management Information System (MIS) also ensures access to immediate and real time data enabling effective sales tracking, Online. </span>
                  	          </div>
                    	      </div>
                    	      <div class="slide slide_1">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">Modern Trade</span><span class="text_globle">Shaw Wallace Ceylon Ltd has spread its reach across all Retail Supermarket Channels in Sri Lanka with a strong presence in its availability & merchandising.  With a dedicated Modern Trade Sales & Merchandising sales team assisted by a fully fledged propaganda team, Shaw Wallace Ceylon Ltd is one of the most active and prominent partners across all retail chains in Sri Lanka providing highest quality goods to its consumers.
                   	            </span> </div>
                    	      </div>
                    	      <div class="slide slide_2">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">Foodservice</span>
                    	          <p class="text_globle">Our dedicated team of personnel in the Food Service sector service the requirements of all leading hotels. restaurants, caterers, airlines,food manufacturers, ship chandlers across the Island. We also ensure optimum storage and timely delivery and supply of all requirements.
                    	        </div>
                    	      </div>
                    	      
                              <!--<div class="slide slide_3">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">Industrial Solutions Distribution Network</span>
                    	          <p class="text_globle">Our team of personnel promoting technical sales to B2B sector assuring the right manufacturing product solutions such as additives, flavourings,emulsions, compounds coatings etc are of the highest standards and requirements by our esteemed clientele. 
                    	        </div>
                    	      </div>-->
                              
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
