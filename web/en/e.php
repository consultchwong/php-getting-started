<?php

$msg_mail_sent = "Mail Sent!";
$msg_mail_not_sent = "Mail Send Failed";


$send_from = "-- Hong Kong Thyroid & Hernia Centre  --"; 


$to = 'info@painfree.hk , ytsang28@gmail.com';
$to2 = "$_POST[email]";

$subject = 'Online Enquiry';
$subject2 = 'Thanks for your enquiry';
// 
$message = "

<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>________</title>
<style type='text/css'>
<!--
body , td {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	}
.style3 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.t {font-size: 12px; font-family: Arial, Helvetica, sans-serif; color: #006984; font-weight:bold;}
a:link{
	color: #000000;
}
a:visited{
	color: #000000;
}
a:hover{
	color: #000000;
}
a:active{
	color: #000000;
}
a{
	text-decoration:none;
}
.bg{	}
-->
</style>
</head>
<body topmargin='20' bgcolor='#FFFFFF'>
<table width='550' border='0' align='center' cellpadding='5' cellspacing='0' bordercolor='#FFCC00'>
  <tbody>
    <tr>
      <td colspan='3' align='left' valign='top' class='t'>&nbsp;</td>
    </tr>
  </tbody>
</table>
<table width='550' border='0' align='center' cellpadding='5' cellspacing='0' bordercolor='#FFCC00'>
        <tbody>
          <tr>
           
            <td width='5' rowspan='9' align='right' valign='top' class='t'>&nbsp;</td>
          </tr>
          <tr>
            <td align='right' valign='top' class='t'>Name:</td>
            <td valign='top' bgcolor='#FFFFFF'><span class='style3'>$_POST[t] $_POST[name]</span></td>
          </tr>
          <tr>
            
          </tr>
          <tr>
           </tr>
          <tr>
            <td width='100' align='right' valign='top' class='t'>E-mail: </td>
            <td valign='top' bgcolor='#FFFFFF'><span class='style3'><a href='mailto:$_POST[email]'>$_POST[email]</a></span></td>
          </tr>
          <tr>
            <td width='100' align='right' valign='top' class='t'>Tel.:</td>
            <td valign='top' bgcolor='#FFFFFF'><span class='style3'>$_POST[tel]</span></td>
          </tr>
          <tr>
            <td align='right' valign='top' class='t'>Fax:</td>
            <td valign='top' bgcolor='#FFFFFF'><span class='style3'>$_POST[fax]</span></td>
          </tr>
          <tr>
            <td width='100' align='right' valign='top' class='t'>Message:</td>
            <td valign='top' bgcolor='#FFFFFF'><span class='style3'>$_POST[message]</span></td>
          </tr>
        </tbody>
</table>
</body>
</html>

";

$message2 = "
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Untitled Document</title>
<style type='text/css'>
<!--
body {
	margin-left: 0px;
	margin-top: 30px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #006984;
}

body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #ffffff;
}
-->
</style></head>

<body>
<table width='638' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td align='center'>Thank you for your enquiry , we will contact you shortly.</td>
  </tr>
</table>
</body>
</html>

";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Additional headers
$headers .= 'To: '. "\r\n";
$headers .= "From: $send_from <$to>" . "\r\n";


// To send HTML mail, the Content-type header must be set
$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Additional headers
$headers2 .= 'To: '. "\r\n";
$headers2 .= "From: $send_from <$to>" . "\r\n";

// Mail it
if( @mail($to, $subject, $message, $headers) ){
	echo "<script language='javascript'>";
	echo "alert('".$msg_mail_sent."');";
	echo "location.href='contact.php';";
	echo "</script>";	
}else{
	echo "<script language='javascript'>";
	echo "alert('".$msg_mail_not_sent."');";
	echo "location.href='contact.php';";
	echo "</script>";	
}

if( @mail($to2, $subject2, $message2, $headers2) ){
	echo "<script language='javascript'>";
	echo "alert('".$msg_mail_sent."');";
	echo "location.href='enquiry.php';";
	echo "</script>";	
}else{
	echo "<script language='javascript'>";
	echo "alert('".$msg_mail_not_sent."');";
	echo "location.href='enquiry.php';";
	echo "</script>";	
}
?>