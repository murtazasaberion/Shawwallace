<?php
$id=$_GET['id'];
require '../settings/connection_string.php';

$sql_qry="SELECT pid, product, id FROM product_tb where id='1'";
$product_result=mysql_query($sql_qry) or die(mysql_error());

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHAW WALLACE | AUTOMOTIVE</title>
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
<div class="text1" id="common_box" style="height:18px;"><span class="text1" style="height:18px;">You are in: <span class="text2">Home</span> / AUTOMOTIVE</span></div>
<div class="text1" id="left_navi_box">
<div class="headin1" id="common_box" style="padding-bottom:10px;">AUTOMOTIVE</div>

</div>

<div id="common_box" style="width:780px;">
	<div id="img_box" > <img src="img/img.jpg" width="780" height="250" /></div>
    
    <div class="headin2" id="common_box" style="width:780px; padding:15px 0">AUTOMOTIVE<br /><br />
      <span class="text_globle" style="padding:15px 0">Shaw Wallace entered the automotive sector in 1927 with their appointment as the exclusive distributor of Delphi Lockheed in Sri Lanka and since then the automotive sector has grown to include a complete spectrum of automotive products.<br />
  <br />
    In August 2011, Shaw Wallace Ceylon Ltd and Mclarens Holdings Ltd created a joint venture named McShaw Automotive Ltd.<br />
<br />
The vision of the McShaw Automotive Group is &quot;<strong>To be the acknowledged market leader in the automotive sector in Sri Lanka excelling through Global partnerships, innovation and Technology while growing organically and by acquisition</strong>&quot;.<br />
  <br />
    The McShaw automotive group has the following business divisions:<br />
  <ul >
  <li>Lubricants- Brake oil, Radiator Coolant, Engine Oils</li>
  <li>Tyres, Tube and Battery</li>
  <li>Spare parts, accessories and Car Care products</li>
  <li>Auto agency and representation.</li>
  <li>Regional representation.</li>
</ul>
    The company has a team of over 50 dedicated personnel in the automotive sector covering the segments of key accounts, nominated dealers, direct dealers, franchise car dealers, service stations, fuel stations, retailers, spare part shops, IWS(Individual workshops) and franchise workshops etc. An industry with a portfolio of 4500 customers.<br />
  <br />
    Our product porfolio consists of Delphi, Cylco, Mobil, Dunlop, Grip and Pinoneer.<br />
<br />
<a href="http://www.mcshaw.lk/" target="_blank"><img src="img/mch_logo.jpg" width="93" height="72" border="0" /></a><br />
</span><span class="text1" style="padding:15px 0"><em><a href="http://www.mcshaw.lk/" class="text1">please visit website</a></em></span><br />
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
