<link href="../resources/styles/base_style.css" rel="stylesheet" type="text/css" />

<div id="logo">
<div id="logo_img"><a href="../index.php"><img src="../resources/images/logo.png" width="105" height="82" /></a></div><!--end of logo_img -->
<div id="logo_text"><strong>A century of Trust</strong></div><!--end of logo_text -->
</div><!--end of logo -->

<div id="links_wrap">
<div id="top_links">
<div id="topnavi_wrap">

 					<?php					
					function top_sel_class($reference){
					$return_ = '';
						if(!empty($reference)){							
							$PAGE_URI = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);
							if(strpos($PAGE_URI,$reference)){
								$return_ = ' class="top_sel" ';	
							}
						}
						return $return_;
					}
					?>



<ul class="topnavi">
<li><a href="../index.php">Home</a></li>
<li><a href="../about/index.php" <?php echo top_sel_class('about'); ?>>About us</a></li>
<li><a href="../agencies/index.php" <?php echo top_sel_class('agencies'); ?>>Agencies</a></li>
<li><a href="../news/index.php" <?php echo top_sel_class('news'); ?>>News & Media</a></li>
<li><a href="../contact/index.php" style="border:0px;" <?php echo top_sel_class('contact'); ?>>Contact Us</a></li>
</ul>
</div><!--end of topnavi_wrap -->

<div id="broucher_wrap"><a class="broucher"> <img src="../resources/images/download-logo.jpg" width="11" height="11" /> Download Brochure</a></div><!--end of broucher_wrap -->
<div id="search_wrap">
<div id="search_bar"><input name="" type="text" class="serch_text" value=" Search..." onclick="this.value=''"/></div><!--end of search_bar -->
<div id="search_butn"><input type="button" class="search" value=""/></div><!--end of search_butn -->
</div>
</div><!--end of top_links -->

<div id="renuka_line">
Under the umbrella of <a href="http://www.renukagroup.com/" target="_blank"><img src="../resources/images/renuka-logo.jpg" width="80" height="41" /></a> &amp; <a href="http://cjp.com.fj/" target="_blank"><img src="../resources/images/cj-patel-logo.png" width="106" /></a> </div><!--end of renuka_line-->


<!--end of main_navi-->
</div><!--end of links_wrap -->

<div id="main_navi">

					<?php					
					function main_sel_class($reference){
					$return_ = '';
						if(!empty($reference)){							
							$PAGE_URI = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);
							if(strpos($PAGE_URI,$reference)){
								$return_ = ' class="main_links_sel" ';	
							}
						}
						return $return_;
					}
					?>



<div id="navi_wrap">
<ul class="main_links">
<div id="img_thmb">
<div class="btm1 main_links" ><a href="../dairy/index.php" <?php echo main_sel_class('dairy'); ?>>DAIRY</a> </div>
<div class="btm2 main_links" ><a href="../fish/index.php" <?php echo main_sel_class('fish'); ?>>FISH</a> </div>
<div class="btm3 main_links" ><a href="../fruit-bev/index.php" <?php echo main_sel_class('fruit-bev'); ?>>FRUIT BEVERAGES</a></div>
<div class="btm4 main_links" ><a href="../snacks/index.php" <?php echo main_sel_class('snacks'); ?>>SNACKS</a></div>
<div class="btm5 main_links" ><a href="../soya/index.php" <?php echo main_sel_class('soya'); ?>>SOYA</a> </div>



</div>
</ul>
</div><!--end of navi_wrap -->


<!--end of search_wrap -->
</div>