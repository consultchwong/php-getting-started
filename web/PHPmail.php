<?php
require_once "lib/PHPMailer.php";

$r = $_POST["redirect"];
$e = $_POST["Email"];
$subject = $_POST["subject"];
$submit = $_POST["Submit"];

$body_ = '<table width="100%" border="0" cellspacing="0" cellpadding="0">';

foreach ( $_POST as $n => $v ){
	if ($r != $v && $subject != $v && $v != $submit){
		$body_ .= '<tr><td>'.$n.' :</td><td>'.$v.'</td></tr>';
	}
}

$body_ .= '</table>';

$mail = new PHPMailer;

$mail->CharSet = "utf-8";
$mail->From = $e;
$mail->FromName = $e;

//$body = file_get_contents('contents.html'); 
//$body = eregi_replace("[\]",'',$body); 
$body = $body_;

$mail->AddReplyTo($e, $e);

$mail->AddAddress("postmaster@surgical.hk", "Hong Kong Specialists Centre");
//$mail->AddAddress("kwongtest@ysd.hk", "Hong Kong Specialists Centre");

$mail->Subject    = $subject; 

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test 

$mail->MsgHTML($body);

$mail->Send();

header("Location: ".$r);
?>