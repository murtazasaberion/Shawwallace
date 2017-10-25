<?php
$id=$_GET['id'];
require '../settings/connection_string.php';
$product_data_result=mysql_query("SELECT pid, product, p_des, id FROM product_tb where id=5");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHAW WALLACE | MANUFACTURING</title>
<link rel="stylesheet" href="../resources/styles/base_style.css" type="text/css" media="screen"/>
<link rel="shortcut icon" href="../resources/images/icon.jpg" type="image/x-icon">
<script type="text/javascript" src="../resources/scripts/image_rolover.js"> </script>


</head>

<body onload="MM_preloadImages('../resources/images/saberion2.jpg')">
<div id="page_wrap">
<div id="header">
<?php
include('../include/header_inner.php');
?>

</div><!--end of header -->



<div id="content" style=" padding-top:10px;">
<div class="text1" id="common_box" style="height:18px;"><span class="text1" style="height:18px;">You are in: <span class="text2">Home</span> / MANUFACTURING </span></div>
<div class="text1" id="left_navi_box">
<div class="headin1" id="common_box" style="padding-bottom:10px;">MANUFACTURING</div>

</div>

<div id="common_box" style="width:780px;">
	<div id="img_box" > <img src="img/img.jpg" width="780" height="250" /></div>
    
    <div class="headin2" id="common_box" style="width:780px; padding:15px 0">MANUFACTURING <br /><br />
      <span class="text_globle" style="padding:15px 0">Renuka Products Ltd is the dedicated manufacturing facility for Shaw Wallace Ceylon and located within 20 km of Colombo.Our commitment in delivering value added, innovative products for the evolving Sri Lankan consumer is through a meticulous  process involving our Quality and Research & Development team. Further, our group's vast experience in supplying value added products to over 61 International markets which demand the best in consistent quality requirements and innovations has to enabled us to re direct this expertise to the local food industry as well. . </span><br />
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
