<?php /*?><?php 
$con = mysql_connect("localhost","teareval","tea123");
if (!$con){
die('Error in connecting to the database: ' .mysql_error());
}
mysql_select_db("tereval", $con);		
?><?php */?>


<?php  
/*$con = mysql_connect("localhost","root","");
if (!$con){
die('Error in connecting to the database: ' .mysql_error());
}
mysql_select_db("shawwallace", $con);*/		
?> 

<?php 
//$con = mysql_connect("localhost","shawwallacedba","shawwallace");
$con = mysql_connect("localhost","shawwallacedba","ShaWwAlLaC3");
if (!$con){
die('Error in connecting to the database: ' .mysql_error());
}
mysql_select_db("shawwallace", $con);		
?>