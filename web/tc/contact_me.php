<?php
if($_POST)
{
	$to_email   	= "postmaster@surgical.hk"; //Recipient email, Replace with own email here
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		
		$output = json_encode(array( //create JSON data
			'type'=>'error', 
			'text' => 'Sorry Request must be Ajax POST'
		));
		die($output); //exit script outputting json data
    } 
	
	//Sanitize input data using PHP filter_var().
	$user_name		= filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
	$user_email		= filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	$phone_number	= filter_var($_POST["phone_number"], FILTER_SANITIZE_NUMBER_INT);
	$message		= filter_var($_POST["msg"], FILTER_SANITIZE_STRING);
	
	//additional php validation
	if(strlen($user_name)<1){ // If length is less than 4 it will output JSON error.
		$output = json_encode(array('type'=>'error', 'text' => '聯絡人姓名輸入不正確!'));
		die($output);
	}
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
		$output = json_encode(array('type'=>'error', 'text' => '請輸入有效電郵地址!'));
		die($output);
	}

	if(!filter_var($phone_number, FILTER_SANITIZE_NUMBER_FLOAT)){ //check for valid numbers in phone number field
		$output = json_encode(array('type'=>'error', 'text' => '請輸入有效聯絡電話!'));
		die($output);
	}

	if(strlen($message)<3){ //check emtpy message
		$output = json_encode(array('type'=>'error', 'text' => '訊息錯誤，請重新輸入！'));
		die($output);
	}
	
	//email body
	$message_body = "\r\n香港專科中心網站訊息 : 由客戶".$user_name."\r\n發出留言訊息" ;
	
	//proceed with PHP email.
	$headers = '寄件者: '.$user_name.'' . "\r\n" .
	'聯絡電郵: '.$user_email.'' . "\r\n" .
	'聯絡電話: '.$phone_number.'' . "\r\n" .
	'留言訊息: '.$message.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	$send_mail = mail($to_email, $message_body, $headers);
	
	if(!$send_mail)
	{
		//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
		$output = json_encode(array('type'=>'error', 'text' => '您的訊息未能送出！'));
		die($output);
	}else{
		$output = json_encode(array('type'=>'message', 'text' => '親愛的 '.$user_name .' 謝謝您的查詢，我們會盡快聯絡您！'));
		die($output);
	}
}
?>