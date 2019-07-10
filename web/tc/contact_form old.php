<?php
// Fetching Values from URL.
$name = $_POST['name1'];
$email = $_POST['email1'];
$message = $_POST['message1'];
$contact = $_POST['contact1'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
if (!preg_match("/^[0-9]{8}$/", $contact)) {
echo "<span>* 請輸入有效聯絡電話. *</span>";
} else {
$subject = '香港專科中心有新訊息';
// To send HTML mail, the Content-type header must be set.
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From:' . $email. "\r\n"; // Sender's Email
$template = '<div style="padding:30px;"><u>' . $name . '</u>  於香港專科中心留言,<br/>'
. '<hr><br/><br/>'
. 'Name: ' . $name . '<br/>'
. 'Email: ' . $email . '<br/>'
. 'Contact No: ' . $contact . '<br/>'
. 'Message: ' . $message . '<br/><br/>'
. 'This is a Contact Confirmation mail.'
. '<br/>';
$sendmessage = "<div style=\"background-color:#ffffff; color:#000000;\">" . $template . "</div>";
// Message lines should not exceed 70 characters (PHP rule), so wrap it.
$sendmessage = wordwrap($sendmessage, 70);
// Send mail by PHP Mail Function.
mail("postmaster@surgical.hk", $subject, $sendmessage, $headers);
echo "您的訊息已寄出，我們會盡快聯絡您.";
}
} else {
echo "<span>* 您的訊息未能發出，請重新輸入 *</span>";
}
?>