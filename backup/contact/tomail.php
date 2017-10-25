<?php

$name = $_POST['name'];

$address = $_POST['address'];

$state = $_POST['state'];

if ($state == "")

	  {

		$state = "Not Mentioned";

      }

	  else

	  {

		$state=$_POST['state'];

	  }

$zip = $_POST['zip'];

if ($zip == "")

	  {

		$zip = "Not Mentioned";

      }

	  else

	  {

		$zip = $_POST['zip'];

	  }

$country = $_POST['country'];

$telephone = $_POST['telephone'];

$email = $_POST['email'];

$comment = $_POST['comment'];

if ($comment==""){

$comment = "Not Mentioned";}

else{

$comment = $_POST['comment'];

}



$body = '

<table width="520" border="0" align="left" cellpadding="0" cellspacing="0" bordercolor="#AA0022">

  <tr>

    <th height="19" colspan="4" align="center" valign="middle" bordercolor="#558DD8" bgcolor="#C8111B" scope="row"><br />
<div align="left">&nbsp;<font color="#FFFFFF">Shaw Wallace Group.</font><br />
  <br />

    </div></th>

  </tr>

  <tr>

    <th width="10" height="19" bordercolor="#558DD8" bgcolor="#FCC7CA" scope="row">&nbsp;</th>

    <th width="115" bordercolor="#558DD8" bgcolor="#FCC7CA" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

  </tr>

     <tr>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA">&nbsp;</td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA"><font color="#000000" face="Courier New, Courier, monospace" size="2"><strong>Name</strong></font></td>

       <td width="8" bordercolor="#FFFFFF" bgcolor="#FFFFFF">:</td>

       <td width="379" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$name.'</font></td>

  </tr>

	  <tr>

    <th height="19" colspan="2" bordercolor="#558DD8" bgcolor="#FCC7CA" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

  </tr> 

	      <tr>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA">&nbsp;</td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA"><font color="#000000" face="Courier New, Courier, monospace" size="2"><strong><span class="text">Address</span></strong></font></td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FFFFFF">:</td>

       <td width="379" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$address.'</font></td>

  </tr>  <tr>

    <th height="19" colspan="2" bordercolor="#558DD8" bgcolor="#FCC7CA" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

  </tr>

	      <tr>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA">&nbsp;</td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA"><font color="#000000" face="Courier New, Courier, monospace" size="2"><strong>State</strong></font></td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FFFFFF">:</td>

       <td width="379" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$state.'</font></td>

  </tr>  <tr>

    <th height="19" colspan="2" bordercolor="#558DD8" bgcolor="#FCC7CA" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

  </tr>

	      <tr>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA">&nbsp;</td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA"><font color="#000000" face="Courier New, Courier, monospace" size="2"><strong>Zip/Postal </strong></font></td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FFFFFF">:</td>

       <td width="379" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$zip.'</font></td>

  </tr>  <tr>

    <th height="19" colspan="2" bordercolor="#558DD8" bgcolor="#FCC7CA" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

  </tr>

	      <tr>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA">&nbsp;</td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA"><font color="#000000" face="Courier New, Courier, monospace" size="2"><strong>Country</strong></font></td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FFFFFF">:</td>

       <td width="379" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$country.'</font></td>

  </tr>  <tr>

    <th height="19" colspan="2" bordercolor="#558DD8" bgcolor="#FCC7CA" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

  </tr>



	      <tr>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA">&nbsp;</td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA"><font color="#000000" face="Courier New, Courier, monospace" size="2"><strong>Telephone</strong></font></td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FFFFFF">:</td>

       <td width="379" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$telephone.'</font></td>

  </tr>  <tr>

    <th height="19" colspan="2" bordercolor="#558DD8" bgcolor="#FCC7CA" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

  </tr>

	      <tr>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA">&nbsp;</td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FCC7CA"><font color="#000000" face="Courier New, Courier, monospace" size="2"><strong>E-mail</strong></font></td>

       <td height="14" bordercolor="#FFFFFF" bgcolor="#FFFFFF">:</td>

       <td width="379" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$email.'</font></td>

  </tr>  <tr>

    <th height="19" colspan="2" bordercolor="#558DD8" bgcolor="#FCC7CA" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

  </tr>

	 	      <tr>

       <td height="80" bordercolor="#FFFFFF" bgcolor="#FCC7CA">&nbsp;</td>

       <td height="80" bordercolor="#FFFFFF" bgcolor="#FCC7CA"><font color="#000000" face="Courier New, Courier, monospace" size="2"><strong>Comments</strong></font></td>

       <td height="80" bordercolor="#FFFFFF" bgcolor="#FFFFFF">:</td>

       <td width="379" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><font color="#000000" face="Courier New, Courier, monospace" size="2">'.$comment.'</font></td>

  </tr>  <tr>

    <th height="19" colspan="2" bordercolor="#558DD8" bgcolor="#FCC7CA" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

    <th height="19" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row">&nbsp;</th>

  </tr>

	 	      <tr>

    <td height="19" colspan="4" bordercolor="#558DD8" bgcolor="#FFFFFF" scope="row"><div align="left"><font color="#FFFFFF" face="Courier New, Courier, monospace" size="2">&copy;<span class="text_bot"><font color="#000000"> Shaw Wallace Group. All Rights Reserved. Solution by<strong> Saberion.</strong></font></span></font></div></td>

  </tr>

</table>
';





//$to = "cader@thesandwichfactory.lk";

$to = "info@shawwallace.lk";

$subject = "Contact us";

$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= "Reply-to: $email\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: Shaw Wallace Group - Contact Us <info@shawwallace.lk>' . "\r\n";

//$headers .= 'Cc: thesandwichfactory@gmail.lk' . "\r\n";

//$headers .= 'Bcc: help@arsci.lk' . "\r\n";



	$result = @mail($to, $subject, $body, $headers);

	if($result)

	{

	header('Location: thank.php');

	}else

	{

	header('Location: failure.php');

	}

?>

