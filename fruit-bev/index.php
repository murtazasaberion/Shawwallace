<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHAW WALLACE | FRUIT BEVERAGES</title>
<link rel="stylesheet" href="../resources/styles/base_style.css" type="text/css" media="screen"/>
<link rel="shortcut icon" href="../resources/images/icon.jpg" type="image/x-icon">
<script type="text/javascript" src="../resources/scripts/image_rolover.js"> </script>
<script type="text/javascript" src="../resources/scripts/jquery-1.3.2.min.js"> </script>

</head>

<body onload="MM_preloadImages('../resources/images/saberion2.jpg')">
<div id="page_wrap">
<div id="header">
<?php
include('../include/header_inner.php');
?>

</div><!--end of header -->



<div id="content" style=" padding-top:10px;">
<div class="text1" id="common_box" style="height:18px;">You are in: <span class="text2">Home</span> / FRUIT BEVERAGES</div>
  <div class="text_globle" id="common_box" style="padding:10px 0">
  <span class="headin1">FRUIT BEVERAGES </span><br /><br />
Sun Gold brings great flavours of fruit under the Fruit beverage category in Shaw Wallace’s product portfolio</div>
  
<!--<div class="headin3" id="common_box" style="padding:0px 0 5px 0"> Food and Beverages </div>-->


<div class="tabs">
        
       <div class="tab">
           <input type="radio" id="tab-1" name="tab-group-1" checked>
           <label for="tab-1"><img src="../resources/images/sungold-dm-tab.png" width="215" height="220" alt="" /><br>
           Sun Gold Burst - Drink Mix
           </label>
           <div class="tabPatchLeft"></div>
           <div class="content tabsConts">
             <div class="contLeft">
             	<h4>Sun Gold Burst - Drink Mix Powder</h4>
                <p>Sun Gold Burst is a Flavoured Drink Mix powder which comes to the consumer with the convenience of simply adding water and drinking it. There is absolutely no need to add sugar.  Its the ideal solution to quench you & your family’s thirst in a busy lifestyle. Sun Gold Burst comes in the flavours of Orange,Mango & Mixed Fruit. <br><br>
                <strong>Pack Size : 23g, 150g, 276g</strong>
                </p>
                
                <h4>Download Recepies</h4>
                <p>
                <a href="../resources/docs/Sun-Gold-Mojito.pdf" target="_blank"  class="recipsBtns sunRespBtns">Sun Gold Mojito</a>
                <a href="../resources/docs/Mango-cubes.pdf" target="_blank"  class="recipsBtns sunRespBtns">Mango Cubes</a>
                <a href="../resources/docs/Mango-Cheese-Cake.pdf" target="_blank"  class="recipsBtns sunRespBtns">Mango Cheese Cake</a>
                <a href="../resources/docs/Green-dart.pdf" target="_blank"  class="recipsBtns sunRespBtns">Green Dart</a>
                </p>
             </div>
             
             <div class="contRight">
             	<h4>Commercials</h4><br>
               	
                	<div id="page_button2"><iframe width="420" height="255" src="//www.youtube-nocookie.com/embed/K4yN_Ea_Uqg" frameborder="0" allowfullscreen></iframe></div>
                    <div id="page_button3"><iframe width="420" height="255" src="//www.youtube-nocookie.com/embed/WuOqkWbB6o8" frameborder="0" allowfullscreen></iframe></div>
                <a href="#" id="side_button2"><img src="../resources/images/sungold-video-thumb-1.jpg" width="130" height="73" alt="" /></a>
                <a href="#" id="side_button3"><img src="../resources/images/sungold-video-thumb-2.jpg" width="130" height="73" alt="" /></a>
                               
                
             </div>
             
           </div> 
       </div>
        
       <div class="tab">
           <input type="radio" id="tab-2" name="tab-group-1">
           <label for="tab-2"><img src="../resources/images/sungold-cheers-tab.png" width="215" height="220" alt="" /><br>
           Sun Gold Cheers - Ready-to-Drink</label>
           
           <div class="content tabsConts">
               <div class="contLeft">
             	<h4>Sun Gold Cheers - Ready-to-Drink (R-T-D) in Tetra Pack </h4>
                <p>The great Fruit Flavoured drink that you always loved, Cheers, now comes as Sun Gold Cheers in 3 exciting flavours; Orange, Mango & Mixed Fruit. It comes in Tetra Pack form so that you can enjoy the real tasted of Fruit Flavoured Juices on the go. <br><br>
                <strong>Pack Size : 180ml</strong>
                </p>
                
                <!--<h4>Download Recepies</h4>
                <p>
                <a href="../resources/docs/Plaza-Meegoreng-Noodles.pdf" target="_blank" class="recipsBtns">Plaza Meegoreng Noodles</a>
                <a href="../resources/docs/Plaza-Mackerel-seenisambol.pdf" target="_blank"  class="recipsBtns">Plaza Mackerel Seenisambol</a>
                <a href="../resources/docs/Plaza-mackerel-ambulthiyal-mallum.pdf" target="_blank"  class="recipsBtns">Plaza Mackerel Ambulthiyal Mallum</a>
                <a href="../resources/docs/Plaza-Chilli-Rice.pdf" target="_blank"  class="recipsBtns">Plaza Chilli Rice</a>
                </p>-->
             </div>
             
             <div class="contRight">
             	<!--<h4>Commercials</h4>-->
               	<p>
                	<!--<iframe width="420" height="265" src="//www.youtube-nocookie.com/embed/BGGZqtiAKg4" frameborder="0" allowfullscreen></iframe>
                    
                    
                <img src="../resources/images/plaza-video-thumb-1.jpg" width="130" height="73" alt="" />-->
                </p> 
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

<script>
$(document).ready(function(){
	$('#page_button2').show();
	$('#page_button3').hide();
	$('#side_button2').click(function() {
		$('#page_button2').show();
		$('#page_button3').hide();
		return false;
	});

	$('#side_button3').click(function() {
		$('#page_button3').show();
		$('#page_button2').hide();
		return false;
	});

});
</script>

</body>
</html>
