<?php
$id=$_GET['id'];
require '../settings/connection_string.php';
$product_data_result=mysql_query("SELECT pid, product, p_des, id FROM product_tb where id=2");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHAW WALLACE | FOOD SERVICE</title>
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
  <div class="text1" id="common_box" style="height:18px;">You are in: <span class="text2">Home</span> / FOOD SERVICE</div>
  <div class="text_globle" id="common_box" style="padding:15px 0">
  <span class="headin1">FOOD SERVICE</span><?php /*?><span style="font-size:17px; color:#666">Food & Beverage. Personal Care & Household</span><?php */?><br /><br />
  Shaw Wallace Food Service Limited is the dedicated food service arm of Shaw Wallace Ceylon Limited. We provide catering solutions to be demanding needs of the all leading hotels, restaurants, airlines, ship chandlers and manufacturers with the supply of value added and innovative products and ingredients, which are manufactured locally as well as imported from Internationally reputed manufacturers. <br />
  <br />
  We are equipped with optimum  storage and inventory systems allowing us to respond to rapidly to customer demand.  </div><div class="text_globle" id="common_box">
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

</div><!--end of content -->


<div id="footer">
<?php
include('../include/footer_inner.php');
?>
</div><!--end of footer -->

</div><!--end of page_wrap -->


</body>
</html>
