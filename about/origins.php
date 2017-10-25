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
<div class="text1" id="common_box" style="height:18px;">You are in:  <span class="text2">About Us</span> /  Origins</div>
<div class="text1" id="left_navi_box">
<div class="headin1" id="common_box" style="padding-bottom:10px;">About Us</div>
<ul>
<li><a href="index.php" class="left_links">Vision & Values</a></li>
<li><a href="origins.php" class="left_links_sel">Origins</a></li>
<li><a href="info_corporat.php" class="left_links">Corporate Information</a></li>
<li><a href="networks.php" class="left_links">Distribution Network</a></li>
<li><a href="facilities.php" class="left_links">Facilities &amp; Infrastructure</a></li>

</ul>
</div>

<div id="common_box" style="width:780px;">
	<div id="img_box" > <img src="img/c_info_img.jpg" width="780" height="250" /></div>
    <div id="links_under_title_region">
       	<table width="780" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="253" height="4" align="left" valign="middle" class="headin2"></td>
    <td width="527" rowspan="2">
    
<ul id="link_options">
                    <li><a href="#" class="active">The Begining</a><div id="common_box" style="width:2px"><img src="img/sp_line.jpg" width="2" height="35" /></div></li>
                    <li><a href="#">First 50 Years</a><div id="common_box" style="width:2px"><img src="img/sp_line.jpg" width="2" height="35" /></div></li>
                    <li><a href="#">The Next  50 Years</a><div id="common_box" style="width:2px"><img src="img/sp_line.jpg" width="2" height="35" /></div></li>
                    <li><a href="#">Since 2000</a></li>

              </ul>
                <div class="left_arrow"><a href="#"></a></div>
                <div class="right_arrow"><a href="#"></a></div>
                
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" class="headin2">&nbsp;&nbsp;Origins</td>
  </tr>
        </table>

            </div>
            
            <div id="bulk_contents_region">
          	
            <div id="expertise_slides" class="clearfix">
            
<div class="slides" style="width:780px;">
                    	    <div id="slide-container">
                    	      <div class="slide slide_0">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">The Begining</span>

<span class="text_globle">As legal entities the firms R. G. Shaw &amp; Company and Wallace &amp; Company came into existence in 1884 and 1886 respectively, in Calcutta, India. <br />
<br />
It’s Colombo Office was opened in 1909, in the name of R. G. Shaw & Company, with Rufus Wilson in charge. On 1st January 1912, it became a branch of Shaw Wallace & Company (India). The office was at No. 28, Chatham Street in the Fort.
</span>
                  	          </div>
                    	      </div>
                    	      <div class="slide slide_1">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">First 50 Years</span><span class="text_globle">
A coal depot had been rented on the harbour front and a certain amount of coal  bunkering was done. From time to time R. G. Shaw &amp; Company, London,  arranged shipments of coal from Swansea and Cardiff under charter parties. In  the Tea Industry, R. G. Shaw &amp; Company were forwarding agents for the  Eildon Hall Tea Company and agents for the Welimada Tea Company. R.G. Shaw  &amp; Company, London, continued to arrange shipments of bunker coal, and some  new contracts were developed. In the course of time, Shaw Wallace &amp; Company  became engaged in fertilizers. This was a natural diversification, as the  Ceylon Tea and Rubber companies already invested heavily in fertilizers.  Towards the end of 1916, Rufus Wilson was replaced by Godfrey Rhodes, nephew of  the senior partner of the company’s auditors, m/s. Ford Rhodes &amp; Thornton.  Godfrey Rhodes became our Accountant in Shaw Wallace &amp; Company. <br />
<br />
In 1920 Pope got to hear of a Tea property which was being offered for sale.  This was the Adams Peak Tea Estate, which was in two parts, Adams Peak and  Derryclare. A sterling company was consequently floated to acquire the  property. For the next two or three years the Colombo branch was busily engaged  on work for the Anglo-Persian Oil Company, who were anxious to have an oil depot  with storage tanks in Colombo. In spite of much opposition, the firm allotted a  site at Kolonnawa, a few miles out of Colombo; and it’s first operation was to  construct a pipeline connection with the harbour; two one-million gallon tanks  were erected, with offices and other buildings.In July 1923, Pope handed over  charge of the Colombo Branch to H. G. Stokes. Under H. G. Stokes, the years  1924 to 1930 brought great prosperity to Ceylon. Prices of tea and rubber  continued on a high level and profits were growing. The agencies for Westward  Ho Tea Company Ltd. and for Ceylon Timber and Rubber, had been sold to other  hands, and the firm only retained those of Eildon Hall Estates, Welimada Tea  Company and Adams Peak Tea Estates.<br />
<br />
In February 1930 the firm had acquired British Fertilizers Ltd.; it was after  the war that the business continued to flourish, though in 1947 the Eildon Hall  Tea &amp; Rubber Company passed was sold to Ceylon interest. The import trade  also diminished, largely through the fantastic credit terms which had to be  given in competition with other firms. But fertilizers continued to expand  together with the new sprayer business. At first, the business was to mainly  serve the tea industry in its all-out fight against blister blight; which might  well have knocked out tea in the same fashion as coffee was devastated in  Ceylon many years previously.<br />
<br />
Shaw Wallace &amp; Company was one of the first firms to have a ‘Ceylonese’  covenanted assistant, and were pioneers in Ceylonisation. The firm was among the  first to introduce a definite salary scale, and the firm’s provident  institution was at the time, a virtually unique action to help the clerical  staff.<br />
<br />
Shaw Wallace &amp; Company in India, had by now become a limited company, and  on 1st June 1949 the firm’s business in Ceylon, was incorporated as Shaw  Wallace Ceylon Ltd., with Edge as its first Chairman. On 1st January 1954, the  firm became Shaw Wallace &amp; Hedges Ltd., with the absorption of Lee Hedges  &amp; Company Ltd. In November 1954, a number of shares were placed on the  market, and the company was converted into a public (rupee) company with its  shares quoted on the Colombo Stock Exchange. The first Chairman of Shaw Wallace  &amp; Hedges Ltd. was C.F.H. Edwards, who was the senior director of Lee Hedges  &amp; Company Ltd at the time. He retired in 1956 and D. F. R. Mallows  succeeded him as Chairman. It was in that year that the two companies became  fully integrated, with Shaw Wallace &amp; Hedges moving their office from  Prince Street to Hedges Building at Colpetty, the head office and premises of  Lee Hedges &amp; Company Ltd.<br />
                   	            </span> </div>
                    	      </div>
                    	      <div class="slide slide_2">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">The Next  50 Years</span>
                    	          <p class="text_globle">In  1961, Shaw Wallace &amp; Hedges Ltd. was approached by Bois Bros. &amp; Company  Ltd., to provide them with storage accommodation for their estate teas. It was  agreed to build storage for them at the Grove Fertilizer Works. This was  completed by September 1961, and led to a stronger relationship with Bois Bros.  Consequently, this led to the suggestion of an amalgamation with Shaw Wallace  &amp; Hedges Ltd. Negotiations continued into 1962, and an agreement was  reached that as from 1st July 1962, Shaw Wallace &amp; Hedges Ltd. should take  over the whole of the capital of Bois Bros. &amp; Company Ltd.<br />
                   	              <br />
                   	              To integrate the new business, a new office building was constructed in front  of the existing premises in Colpetty. The Chairman of Bois Bros., Mr. G. Somers  Hall, retired as at 31st December 1963, and J. L. Capper, Chairman of Shaw  Wallace &amp; Hedges Ltd. succeeded him. <br />
  <br />
                   	              During 1963, the company also acquired the whole of the share capital of Ceylon  Potteries Ltd., a manufacturing unit making roofing tiles and drainpipes, and  accordingly this Company became an additional subsidiary.<br />
  <br />
                   	              In 1972 the company lost most of its plantations to the then Government policy  of nationalization and saw its business severely affected due to the Socialists  policies.</p>
                                  <p class="text_globle">In  1978 with the liberalization of the economy the company ventured into new  growth sectors such as manufacturing, travel, pharmaceuticals while  aggressively growing its Automotive and FMCG businesses.</p>
                    	        </div>
                    	      </div>
                    	      
                              <div class="slide slide_3">
                    	        <div style="width:780px; float:left; border-right:#999 dotted 1px; padding:0 0px 0 0;">
                    	          <span class="headin3">Since 2000</span>
                    	          <p class="text_globle">In  2001, Shaw Wallace &amp; Hedges Ltd transferred its Automotive and FMCG  business to Shaw Wallace Distributors Ltd. Its subsidiaries Healthcare  Products Ltd, Shaw Lanka Tours Ltd and Shaw Wallace Service Ltd were also  transferred to Shaw Wallace Distributors Ltd.</p>
                                  
                                  <p class="text_globle">In  the same year Shaw Wallace and Hedges Ltd renounced its controlling  shareholding in Shaw Wallace Distributors Ltd to its shareholders while  retaining an associate shareholding. In 2004 Shaw Wallace Distributors Ltd was  renamed as Shaw Wallace Marketing Ltd.</p>
                                  <p class="text_globle">On  16th March 2011 Renuka Holdings PLC purchased controlling interest  of Shaw Wallace Marketing Ltd and its subsidiaries and returned it to its  original name Shaw Wallace Ceylon Ltd. Simultaneously it acquired its new  corporate offices, the Shaw Wallace Building and Shaw Wallace properties Ltd.</p>
                                  <p class="text_globle">In  February 2013 Shaw Wallace acquired the Mr. Pop extruded snack brand, the second largest snack brand.</p>
								 <p class="text_globle"> In 2014 the company set up a dedicated manufacturing facility in Ekala. 2014 also was significant with CJ Patel and Company Ltd purchasing a strategic stake in the company.</p>
<p class="text_globle">In January 2015 Shaw Wallace Ceylon Ltd invested in Richlife Dairies Ltd, a group company.</p>


                                  <p class="text_globle">And the journey continues…..</p>
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
