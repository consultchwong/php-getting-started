<?php 
/*
*	This Class Develope by Lau Kai Tai ( kaitai730@yahoo.com.hk )
*	
*	This class implement the most use of web sites - form to mail
* 	Because of the class availability, I have been in the effective use of each of projects
*		
*	This program is scalable, please feel free to enchance, modify it

----------------------------- Sample -------------------------------------
	// the following script should be action on submited form 
	// See template on contactme.php
	
	$mail = new Mail();
	$mail->send_from = ' --- Lau Kai Tai ---';
	$mail->to = 'kaitai730@yahoo.com.hk';
	$mail->charset= 'UTF-8';
	$mail->contentTitle = 'TESTING';
	$mail->value = array('1st value','2nd value');
	$mail->field = array('1','2');
	
-------------------------- End of Sample -------------------------------
*/

class Mail{ 
	/* Email Inforamtion Setting */
	var	$send_from = "-- HK Specialists Centre  --"; /* The email sender name */
	var $to = 'postmaster@surgical.hk'; /* The email receiver */
	var $subject = '香港專科中心 HK Specialists Centre '; /* Email subject */
	var $charset = 'UTF-8'; /* Email charset, compatable with the form */
	var $headers;	/* store the header information such as MIME */
	
	/* Email Template variable */
	var $contentTitle = "Contact Me"; 
	var $field = array("E.g. [ Name : ]");	/* form fields */
	var $value = array("E.g. [ Lau Kai Tai ]"); /* form values */

	function Mail(){
	}
	
	function setHeader(){
		return  'MIME-Version: 1.0' . "\r\n" 
			. 'Content-type: text/html; charset='.$this->charset . "\r\n"
			. 'To: '. "\r\n"
			. 'From: '.$this->send_from.' <'.$this->to.'>' . "\r\n";
	}
	
	// Mail it
	function send(){
		return @mail($this->to, $this->subject, $this->setMessage(), $this->setHeader() )?1:0;
	}
	
	function setMessage(){
		ob_start();
		include 'email_template.php';
		$content=ob_get_contents();
		ob_clean();
		return $content;
	}

}

?>