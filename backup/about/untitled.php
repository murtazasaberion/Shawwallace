<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Expertise | Saberion - Web Site Design | Web Application Development | Outsourcing |  Mobile Application Development in Sri Lanka</title>
<link href="../resources/styles/styles.css" rel="stylesheet" type="text/css" />
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
<script type="text/javascript">
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17644434-2']);
  _gaq.push(['_trackPageview']);
(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>

<div id="page_wrapper">
<div id="global_header">
    	<div id="logo_region"><a href="http://www.saberion.com"><img src="/resources/images/saberion-logo.png" alt="www.saberion.com" width="223" height="48" border="0" align="middle" title="www.saberion.com" /></a></div>
        <div id="sec_navi_region">
        	<ul>
            	<li><a href="/" class="sec_navi">home</a></li>
                <li><a href="/work/" class="sec_navi">work</a></li>
                <li><a href="/expertise/" class="sec_navi_sel">expertise</a></li>                
                <li><a href="/company/" class="sec_navi">company</a></li>
                <li><a href="/news/" class="sec_navi">news</a></li>
                <li><a href="/careers/" class="sec_navi">careers</a></li>
                <li><a href="/contact/" class="sec_navi">contact</a></li>
            </ul>
        </div>
    </div>
	<div id="global_contents">
    	<div id="primery_navi_region">
    		<ul>
            	<li><img src="/resources/images/pr-navi-sep.jpg" width="1" height="52" class="primery_navi_sep" /></li>
            	<li><a href="/interactive-agency/" class="primery_navi">Interactive Agency</a></li>
                <li><img src="/resources/images/pr-navi-sep.jpg" width="1" height="52" class="primery_navi_sep" /></li>
                <li><a href="/mobile/" class="primery_navi">Mobile</a></li>
                <li><img src="/resources/images/pr-navi-sep.jpg" width="1" height="52" class="primery_navi_sep" /></li>
                <li><a href="/products/" class="primery_navi">Products</a></li>
                <li><img src="/resources/images/pr-navi-sep.jpg" width="1" height="52" class="primery_navi_sep" /></li>
            </ul>
    	</div>
        <div id="middle_contents">
        <div id="page_title_region">
          <div id="page_title_left">expertise</div>
        </div>
          <div id="links_under_title_region">
            	<ul id="link_options">
                    <li><a href="#" class="active">creatives</a><span class="sec_navi_sep"></span></li>
                    <li><a href="#">technology</a><span class="sec_navi_sep"></span></li>
                    <li><a href="#">agency collaboration</a><span class="sec_navi_sep"></span></li>
                    <li><a href="#">project management</a><span class="sec_navi_sep"></span></li>
                    <li><a href="#">app developers</a><span class="sec_navi_sep"></span></li>
                    <li><a href="#">mobile developers</a></li>
                </ul>
            </div>
                        
          <div id="bulk_contents_region">
          	
            <div id="expertise_slides" class="clearfix">
            <div class="left_arrow"><a href="#"></a></div>
<div class="slides" style="width:900px;">
                    	    <div id="slide-container">
                    	      <div class="slide slide_0">
                    	        <div style="width:355px; float:left; border-right:#999 dotted 1px; padding:0 30px 0 0;">
                    	          <div style="line-height:25px;">"We love new ideas and innovative concepts that help our clientele engage in a totally awesome way. We think different, adding new dimensions to traditional campaigns. We believe digital is the future and have handpicked some of the most talented artists, designers, CG enthusiasts and user interface specialists out there. We collaborate to tell stories people remember, with immersive digital experiences on virtually any interface including <span style="background:#0CF; padding:3px; color:#FFF;">print, web, mobile, kiosks and public display systems.</span><br /><br />
                    	            Painting on a digital canvas has created a mind boggling array of user experiences, which is why we never stifle a good idea, no matter how impossible it seems. After all who can define the boundaries on a digital canvas?"</div>
                  	          </div>
                    	        <div style="width:480px; float:left; padding:0 0 0 30px;">
                    	          <div class="medium_title">related work | <a href="/work/">more work</a></div>
                    	          <div style="width:100%; float:left; padding:5px 0 0 0;">
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=17"><img src="/work/images/cp_MIT.jpg" alt="Millennium IT" width="221" height="106" border="0" title="Millennium IT" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=17" class="link_default">Millennium IT</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/?cmd=industry&id=2" class="link_green_small">Banking and Finance</a></div>
                  	                </div>
                  	              </div>
                    	            <div id="gallery_item_sep"></div>
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=39"><img src="/work/images/cp_360 Marketing.jpg" alt="Three Sixty Marketing" width="221" height="106" border="0" title="Three Sixty Marketing" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=39" class="link_default">Three Sixty Marketing</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/?cmd=industry&amp;id=1" class="link_green_small">Art and design</a></div>
                  	                </div>
                  	              </div>
                  	            </div>
                                
                                <div style="width:100%; float:left; padding:0;">
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=15"><img src="/work/images/cp_cfashionw.jpg" alt="Colombo Fashion Week" width="221" height="106" border="0" title="Colombo Fashion Week" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=15" class="link_default">Colombo Fashion Week</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/?cmd=industry&id=1" class="link_green_small">Art and design</a></div>
                  	                </div>
                  	              </div>
                    	            <div id="gallery_item_sep"></div>
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=5"><img src="/work/images/cp_cab.jpg" alt="Colombo Art Biennale" width="221" height="106" border="0" title="Colombo Art Biennale" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=5" class="link_default">Colombo Art Biennale</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/?cmd=industry&amp;id=1" class="link_green_small">Art and design</a></div>
                  	                </div>
                  	              </div>
                  	            </div>
                                
                  	          </div>
                  	        </div>
                    	      <div class="slide slide_1">
                    	        <div style="width:355px; float:left; border-right:#999 dotted 1px; padding:0 30px 0 0;">
                    	          <div style="line-height:25px;">"The greatest thing about open source and the global push for sharing ideas, technology and expertise is seeing people help people to innovate faster and better. Our team have benefited immensely from this, building on cutting edge technology to develop a number of <span style="background:#0CF; padding:3px; color:#FFF;">online, mobile and emerging technology solutions</span>.<br /><br />Our comprehensive portfolio of custom built web applications and ready to use products is developed and supported by a strong technical backbone of project managers, architects, developers and quality assurance personnel. Our current implementations include Hotel Reservations Systems, Managed Information Systems, Health Care Solutions, Sales Force Automation, Factory Floor Solutions, E-Commerce, Content Management, Systems Integration and Mobile solutions."</div>
                  	          </div>
                    	        <div style="width:480px; float:left; padding:0 0 0 30px;">
                    	          <div class="medium_title">related work | <a href="/work/">more work</a></div>
                    	          <div style="width:100%; float:left; padding:5px 0 0 0;">
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=62"><img src="/work/images/cp_Anything.jpg" alt="Anything.lk" width="221" height="106" border="0" title="Anything.lk" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=62" class="link_default">Anything.lk</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/?cmd=industry&amp;id=6" class="link_green_small">Consumer Goods</a></div>
                  	                </div>
                  	              </div>
                    	            <div id="gallery_item_sep"></div>
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=57"><img src="/work/images/cp_SCS.jpg" alt="Suren Cooke Agencies- Management Information System" width="221" height="106" border="0" title="Suren Cooke Agencies- Management Information System" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=57" class="link_default">Suren Cooke Agencies- Management Information System</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/?cmd=industry&amp;id=6" class="link_green_small">Consumer Goods</a></div>
                  	                </div>
                  	              </div>
                  	            </div>
                                
                                <div style="width:100%; float:left; padding:0;">
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=44"><img src="/work/images/cp_CS.jpg" alt="Clinical Specialist - UK" width="221" height="106" border="0" title="Clinical Specialist - UK" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=44" class="link_default">Clinical Specialist - UK</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/?cmd=industry&amp;id=3" class="link_green_small">Global</a></div>
                  	                </div>
                  	              </div>
                    	            <div id="gallery_item_sep"></div>
                    	            
                  	            </div>
                                
                  	          </div>
                  	        </div>
                    	      <div class="slide slide_2">
                    	        <div style="width:355px; float:left; border-right:#999 dotted 1px; padding:0 30px 0 0;">
                    	          <div style="line-height:25px;">"We understand traditional but we think digital – structured to resemble a professional advertising agency, our team easily interacts and collaborates with top global and regional agencies every day. <span style="background:#0CF; padding:3px; color:#FFF;">Our attractive outsourcing rates, quality output , new technology insight and adherence to time lines make us the top choice for any agency looking for complete confidentiality and long term partnerships.</span><br /><br />In fact some of our biggest solutions have been launched via our close relationship with agencies and third party collaborators working with us to add a new dimension to campaigns. From developing major micro sites to campaign-specific viral efforts, interactive games to emerging technology, we love the challenges and opportunities of these relationships.</div>
                  	          </div>
                    	        <div style="width:480px; float:left; padding:0 0 0 30px;">
                    	          <div class="medium_title">related work | <a href="/work/">more work</a></div>
                    	          <div style="width:100%; float:left; padding:5px 0 0 0;">
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=20"><img src="/work/images/cp_RCA.jpg" alt="Reggie Candappa Foundation" width="221" height="106" border="0" title="Reggie Candappa Foundation" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=20" class="link_default">Reggie Candappa Foundation(Sri Lanka)</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/?cmd=industry&amp;id=1" class="link_green_small">Art and design</a></div>
                  	                </div>
                  	              </div>
                    	            <div id="gallery_item_sep"></div>
                                    
                                    
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=63"><img src="/work/images/CP_NBC.jpg" alt="Newbridge Capital(UK)" width="221" height="106" border="0" title="Newbridge Capital(UK)" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=63" class="link_default">Newbridge Capital(UK)</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/index.php?cmd=industry&id=2" class="link_green_small">Banking and Finance</a></div>
                  	                </div>
                  	              </div>
                                  
                                  
                                  
                                  
                  	            </div>
                                
                                <div style="width:100%; float:left; padding:0;">
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=16"><img src="/work/images/cp_barista.jpg" alt="Barista" width="221" height="106" border="0" title="Barista" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=20" class="link_default">Barista Coffee(Italy+India)</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/?cmd=industry&amp;id=3" class="link_green_small">Global</a></div>
                  	                </div>
                  	              </div>
                    	            <div id="gallery_item_sep"></div>
                    	            
                  	            </div>
                                
                  	          </div>
                  	        </div>
                    	      <div class="slide slide_3">
                    	        <div style="width:350px; float:left; border-right:#999 dotted 1px; padding:0 30px 0 0;">
                    	          <div style="line-height:25px;">"We value flexibility and client input in all aspects of the project. That’s why we prefer to be Agile. After all what point is there in implementing a great solution, when half the functionality first envisioned is never used? Agile or iterative development has helped us handover better products at faster intervals. By shortening project time frames into sprints our clientele are able to constantly review functionality, maintain relevance and adhere to accurate time frames. Through collaboration we move faster, innovate better and deliver more suitable products that users love to work with."</div>
                  	          </div>
                    	        <div style="width:480px; float:left; padding:0 0 0 30px;">
                    	          
                                  <div style="width:425px" id="__ss_3973853">
                                    <object id="__sse3973853" width="425" height="355">
                                      <param name="movie" value="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=agile-100505035501-phpapp01&stripped_title=agile-3973853" />
                                      <param name="allowFullScreen" value="true"/>
                                      <param name="allowScriptAccess" value="always"/>
                                      <embed name="__sse3973853" src="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=agile-100505035501-phpapp01&stripped_title=agile-3973853" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="355"></embed>
                                    </object>
                                  </div>
                                  
                  	          </div>
                  	        </div>
                    	      <div class="slide slide_4">
                    	        <div style="width:350px; float:left; border-right:#999 dotted 1px; padding:0 30px 0 0;">
                    	          <div style="line-height:25px;">"With 2010 widely heralded as the year of the mobile; the timing seemed perfect to launch <span style="background:#0CF; padding:3px; color:#FFF;"><a href="http://www.appwolf.com" target="_blank" class="link_default" style="font-size:14px;">Appwolf</a>, a specialist mobile app innovator for iPhone and Android</span>. Since mid 2009 our dedicated appmakers have been very busy, thinking and innovating for the fast growing global app market. With the fast adoption of the Android platform and the sales of over 57 million iPhones and iPod Touches just last year we are all very excited about the mobile future.<br /><br />
Our team focuses on <span style="background:#0CF; padding:3px; color:#FFF;">creating branded apps for campaigns, businesses and individuals</span>. A number of our products are currently marketed via both the iStore as well as the Google Apps Marketplace."</div>
                  	          </div>
                    	        <div style="width:480px; float:left; padding:0 0 0 30px;">
                    	          <div class="medium_title">related work | <a href="/work/">more work</a></div>
                    	          <div style="width:100%; float:left; padding:5px 0 0 0;">
                    	           
                                   
                                    <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="http://itunes.apple.com/gb/app/area-now-find-live-music-clubs/id407977563?mt=8" target="_blank"><img src="/work/images/cp_Lydia Baylis.jpg" alt="Area Now" width="221" height="106" border="0" title="Area Now" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="http://itunes.apple.com/gb/app/area-now-find-live-music-clubs/id407977563?mt=8" target="_blank" class="link_default">Area Now</a></div>
                    	                <div id="gallery_item_tags"></div>
                  	                </div>
                  	              </div>
                  	            </div>
                  	          </div>
                  	        </div>
                    	      <div class="slide slide_5">
                    	        <div style="width:350px; float:left; border-right:#999 dotted 1px; padding:0 30px 0 0;">
                    	          <div style="line-height:25px;">"<span style="background:#0CF; padding:3px; color:#FFF;">We believe in a future made mobile</span>. That's why our team keeps trying to think up new ideas to make your life easier through mobile and web technology.<br /><br /><span style="color:#FFF; background:#F36; padding:3px;">ORION</span> for instance is one such innovation, a platform built completely in house, allowing virtually any mobile phone to communicate directly with a web platform. The concept is certainly mind boggling, allowing us to innovate on a number of different products including sales force automation, remote monitoring, inventory control, expense claims, GPS location based service, restaurant solutions and security systems."</div>
                  	          </div>
                    	        <div style="width:480px; float:left; padding:0 0 0 30px;">
                    	          <div class="medium_title">related work | <a href="/work/">more work</a></div>
                    	          <div style="width:100%; float:left; padding:5px 0 0 0;">
                    	            <div id="gallery_item_container">
                    	              <div id="gallery_item"><a href="/work/client-info.php?id=57"><img src="/work/images/cp_SCS.jpg" alt="Suren Cooke Agencies- Management Information System" width="221" height="106" border="0" title="Suren Cooke Agencies- Management Information System" /></a></div>
                    	              <div id="gallery_item_info_region">
                    	                <div id="gallery_item_name"><a href="/work/client-info.php?id=57" class="link_default">Suren Cooke Agencies- Management Information System</a></div>
                    	                <div id="gallery_item_tags"><a href="/work/?cmd=industry&amp;id=6" class="link_green_small">Consumer Goods</a><a href="#" class="link_green_small"></a></div>
                  	                </div>
                  	              </div>
                  	            </div>
                  	          </div>
                  	        </div>
                  	      </div>
                  	    </div>
            <div class="right_arrow"><a href="#"></a></div>

</div>
          </div>
      </div>
    <div id="global_footer">
    	
    </div>
</div>
</div>
</body>
</html>
