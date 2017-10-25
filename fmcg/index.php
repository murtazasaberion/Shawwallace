<?php
$id=$_GET['id'];
require '../settings/connection_string.php';
$product_data_result=mysql_query("SELECT pid, product, p_des, id FROM product_tb where id=3");
$product_data_result2=mysql_query("SELECT pid, product, p_des, id FROM product_tb where id=4");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHAW WALLACE | FMCG</title>
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
<div class="text1" id="common_box" style="height:18px;">You are in: <span class="text2">Home</span> / FMCG </div>
  <div class="text_globle" id="common_box" style="padding:10px 0">
  <span class="headin1">FMCG - </span><span style="font-size:17px; color:#666">Food & Beverage, Personal Care & Household</span><br /><br />
Shaw Wallace Ceylon Ltd, with a century of experience in the distribution of FMCG products in Sri Lanka is today at the forefront as one of the largest, dynamic and technologically driven distribution firms in the country. Many of our brands are household names such as Captain, Plaza, Rainer's and Sun Gold.<br />
 We are partners of Internationally well-known agencies such as as Ajinomoto, Supermax amongst a varied porfolio of brands and agencies.  </div>
<div class="headin3" id="common_box" style="padding:0px 0 5px 0"> Food and Beverages </div>
<div class="text_globle" id="common_box">
	<?php
				  while($product_data_row=mysql_fetch_array($product_data_result)){
$pid=$product_data_row['pid'];
$product=$product_data_row['product'];
				  ?>
    <div id="product_box">
	  <table width="228" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td height="150" align="left" valign="top"><img src="../resources/product_img/<?php echo $pid;?>.jpg" width="226" height="148" border="0" /></td>
	      </tr>
	    <tr>
	      <td height="25" align="left" valign="middle"><?php echo $product;?></td>
	      </tr>
	    </table>
	</div>
    
	<?php } ?> 
    
    
    
</div>

<div class="headin3" id="common_box" style="padding:20px 0 5px 0">Personal Care & Household</div>
<div class="text_globle" id="common_box">
	<?php
				  while($product_data_row2=mysql_fetch_array($product_data_result2)){
$pid=$product_data_row2['pid'];
$product=$product_data_row2['product'];
				  ?>
   <div id="product_box">
	  <table width="228" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td height="150" align="left" valign="top"><img src="../resources/product_img/<?php echo $pid;?>.jpg" width="226" height="148" border="0" /></td>
	      </tr>
	    <tr>
	      <td height="25" align="left" valign="middle"><?php echo $product;?></td>
	      </tr>
	    </table>
	</div>
    
	<?php } ?> 
      
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
