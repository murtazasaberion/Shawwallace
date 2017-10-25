<?php
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$age = $_POST['age'];
$pos = $_POST['pos'];
$telephone_r = $_POST['telr'];
$telephone_o = $_POST['telo'];
$telephone_m = $_POST['telm'];
$comments = $_POST['comments'];
$country = $_POST['country'];
if($file == "") 
{
$file = "CV Not Attached..";
}
if($name == "") 
{
$name = "Not Mentioned";
}
if($email == "") 
{
$email = "Not Mentioned";
}
if($address == "") 
{
$address = "Not Mentioned";
}
if($age == "") 
{
$age = "Not Mentioned";
}
if($country == "") 
{
$country = "Not Mentioned";
}
if($telephone_r == "") 
{
$telephone_r = "Not Mentioned";
}
if($telephone_r == "") 
{
$telephone_r = "Not Mentioned";
}
if($telephone_o == "") 
{
$telephone_o = "Not Mentioned";
}
if($telephone_m == "") 
{
$telephone_m = "Not Mentioned";
}
if($comments == "") 
{
$comments = "Not Mentioned";
}

$target_path = "cv/";
if($_POST['upload'])
{
$dlink_name=str_replace(" ","_",$name); 
$newName = basename($_FILES['upload_file']['name']);
$ext = strrchr(basename($_FILES['upload_file']['name']), ".");
$fullName = $dlink_name.'_CV'.$ext;
	if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path.$fullName)) 
	{
$body = '
<table width="501" border="0" align="left" cellpadding="0" cellspacing="0" bordercolor="#D60000">
  <tr>
    <th height="35" colspan="3" align="left" bordercolor="#558DD8" bgcolor="#C8111B" scope="row"><font color="#FFFFFF">&nbsp;Shaw Wallace Group.</font></th>
  </tr>
  <tr>
    <th height="19" bordercolor="#558DD8" bgcolor="#F7F7F7" scope="row"><p>&nbsp;</p></th>
    <th height="19" bordercolor="#558DD8" bgcolor="#F7F7F7" scope="row">&nbsp;</th>
    <th height="19" bordercolor="#558DD8" bgcolor="#F7F7F7" scope="row">&nbsp;</th>
  </tr>
     <tr>
       <td width="164" height="14" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><blockquote>
         <p><strong><font color="#000000" face="Courier New, Courier, monospace" size="2">Name</font></strong></p>
       </blockquote></td>
       <td width="17" bordercolor="#FFFFFF" bgcolor="#F7F7F7">:</td>
       <td width="320" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$name.'</font></td>
  </tr> 
	          <tr>
       <td width="164" height="14" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><blockquote>
         <p><strong><font color="#000000" face="Courier New, Courier, monospace" size="2">Email</font></strong></p>
       </blockquote></td>
       <td width="17" bordercolor="#FFFFFF" bgcolor="#F7F7F7">:</td>
       <td width="320" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$email.'</font></td>
  </tr>  <tr>
       <td height="14" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><blockquote>
         <p><strong><font color="#000000" face="Courier New, Courier, monospace" size="2"><span class="text">Address</span></font></strong></p>
       </blockquote></td>
       <td height="14" bordercolor="#FFFFFF" bgcolor="#F7F7F7">:</td>
       <td width="320" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$address.'</font></td>
     </tr>  <tr>
	      <tr>
       <td width="164" height="14" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><blockquote>
         <p><strong><font color="#000000" size="2" face="Courier New, Courier, monospace">Country</font></strong></p>
       </blockquote></td>
       <td width="17" bordercolor="#FFFFFF" bgcolor="#F7F7F7">:</td>
       <td width="320" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$country.'</font></td>
  </tr> 
    
	      <tr>
       <td height="14" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><blockquote>
         <p><strong><font color="#000000" face="Courier New, Courier, monospace" size="2">Age</font></strong></p>
       </blockquote></td>
       <td height="14" bordercolor="#FFFFFF" bgcolor="#F7F7F7">:</td>

       <td width="320" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$age.'</font></td>
  </tr>  
     <tr>
       <td width="164" height="14" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><blockquote>
         <p><strong><font color="#000000" face="Courier New, Courier, monospace" size="2">Sex</font></strong></p>
       </blockquote></td>
       <td width="17" bordercolor="#FFFFFF" bgcolor="#F7F7F7">:</td>
       <td width="320" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$sex.'</font></td>
  </tr> <tr>
       <td height="14" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><blockquote>
         <p><strong><font color="#000000" face="Courier New, Courier, monospace" size="2">Telephone No(s) </font></strong></p>
       </blockquote></td>
       <td height="14" bordercolor="#FFFFFF" bgcolor="#F7F7F7">:</td>
       <td width="320" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><font color="#000000" face="Courier New, Courier, monospace" size="2"><strong>R:</strong> '.$telephone_r.'<br />
           <strong>O:</strong> '.$telephone_o.'<br />
    <strong>M:</strong> '.$telephone_m.'</font></td>
     </tr>  
     
	 	      <tr>
       <td height="80" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><blockquote>
         <p align="left"><strong><font color="#000000" face="Courier New, Courier, monospace" size="2">Comments</font></strong></p>
       </blockquote></td>
       <td height="80" bordercolor="#FFFFFF" bgcolor="#F7F7F7">:</td>
       <td width="320" bordercolor="#FFFFFF" bgcolor="#F7F7F7"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$comments.'</font></td>
  </tr>
	  <tr>
    <th height="19" bordercolor="#558DD8" bgcolor="#F7F7F7" scope="row"><font color="#000000" face="Courier New, Courier, monospace" size="2"><strong> <a href="http://www.hemashealthcare.com/work_with _us/cv/'.$fullName.'" target="_blank">Download CV</a></strong></font></th>
    <th height="19" bordercolor="#558DD8" bgcolor="#F7F7F7" scope="row">&nbsp;</th>
    <th height="19" bordercolor="#558DD8" bgcolor="#F7F7F7" scope="row">&nbsp;</th>
  </tr>
	   <tr>
	 
    <th height="19" bordercolor="#558DD8" bgcolor="#F7F7F7" scope="row">&nbsp;</th>
    <th height="19" bordercolor="#558DD8" bgcolor="#F7F7F7" scope="row">&nbsp;</th>
    <th height="19" bordercolor="#558DD8" bgcolor="#F7F7F7" scope="row">&nbsp;</th>
  </tr>
	 	      <tr>
    <th height="19" colspan="3" bordercolor="#558DD8" bgcolor="#C8111B" scope="row"><div align="center"><font color="#000000" face="Courier New, Courier, monospace" size="2">&copy; 2009 <a href="http://www.saberion.com" target="_blank">SABERION</a> All Rights Reserved.</font></div></th>
  </tr>
</table>
  ';
    

$to = "test@test.com";
$subject = $pos;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Reply-to: $email\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Shaw Wallace Group Carees <test@test.com>' . "\r\n";
//$headers .= 'Bcc: nilanthi.ekanayake@gmail.com' . "\r\n";

//$headers .= 'Bcc: sab<saberionlk@gmail.com>' . "\r\n";
mail($to, $subject, $body, $headers);
header ('location: thanks.php');
  
	}else
	
	{

	header('Location: failure.php');

	}
}

?>



