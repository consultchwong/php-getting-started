<?php
$name = isset($_REQUEST["name"])?$_REQUEST["name"]:"";
$phone  = isset($_REQUEST["phone"])?$_REQUEST["phone"]:'';
$fax = isset($_REQUEST["fax"])?$_REQUEST["fax"]:"";
$mail= isset($_REQUEST["mail"])?$_REQUEST["mail"]:"";
$text  = isset($_REQUEST["text"])?$_REQUEST["text"]:"";

	if ($name=="" || $phone=="" || $mail=="" ) $msg="請輸入所有“必須填寫資料＂";
if (!$msg)
		if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $mail))
			$msg= $mail.'不是正確的電郵地址';
	if (!$msg)
		if (!is_numeric($phone)) $msg= $phone.'不是正確的電話號碼';
	if (!$msg&&$mobile)
		if (!is_numeric($mobile))
			$msg= $mobile.'不是正確的電話號碼';
	if (!$msg&&$fax)
		if (!is_numeric($fax))
		$msg= $fax.'不是正確的傳真號碼';
	if (!$msg) {
		$pfw_ip= $_SERVER['REMOTE_ADDR'];
		if ($title=='') $fn=$uname;
		else {
			if (preg_match("/[^a-zA-Z]+$/",$title)) $fn=$title.' '.$name;
			else $fn=$name.' '.$title;
	}
		$pfw_header = "From: $fn <" . $mail . ">\r\n";
		//$pfw_header .= "Reply-To: rayson@01link.net\r\n";
        //$pfw_header .= "Return-Path: rayson@01link.net\r\n";
		$pfw_header .= "MIME-Version: 1.0\r\n"; 
        $pfw_header .= "Content-type: text/html; charset=utf-8\r\n"; 
		$pfw_header .= "X-Priority: 1 (Highest)\r\n"; 
        $pfw_header .= "Importance: High\r\n"; 
    	$pfw_subject = "Message form D-motionhk.com";
	    $pfw_mail_to = "tony@01link.net"; //tony@01link.net //info@spheremedical.com.hk
		$pfw_text = "<table width='40%' border='0' cellspacing='0' cellpadding='5'>
			<tr>
			  <td colspan='2' height='20px'>text form D-motionhk.com</td>
			</tr>
			
			<tr>
			  <td width='15%'>Name</td>
			  <td width='25%'>$name</td>
			</tr>
			
			<tr>
			  <td width='15%'>Phone</td>
			  <td width='25%'>$phone</td>
			</tr>
			
			<tr>
			  <td>Fax</td>
			  <td>$fax</td>
			</tr>
			<tr>
			  <td>mail</td>
			  <td>$mail</td>
			</tr>
			<tr>
			  <td>Message</td>
			  <td>".nl2br(htmlspecialchars(stripslashes($text)))."</td>
			</tr>
		</table>";

		$sent=mail($pfw_mail_to, $pfw_subject ,$pfw_text ,$pfw_header ) ;

	}
	
	echo("
		<html>
			<script language=\"javascript\">
				 window.location.href=\"../contact.htm\"
				
			</script>
		</html> ");
	exit;

?>
