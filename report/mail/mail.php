<?php
session_start();

require 'mail/PHPMailerAutoload.php';
 
$mail = new PHPMailer;
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'datatablesdatabase@gmail.com';               // SMTP username
$mail->Password = '';               		  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom($_POST['email'], $_POST['name']);     //Set who the message is to be sent from
$mail->addReplyTo('datatablesdatabase@gmail.com', 'Reports');  //Set an alternative reply-to address
$mail->addAddress('datatablesdatabase@gmail.com', 'Reports');  // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
 
$mail->Subject = 'test report';
$mail->Body    = sprintf(
	"<p>%s</p><p>%s</p><p>%s</p>",
	htmlspecialchars($_POST['name']),
	htmlspecialchars($_POST['email']),
	htmlspecialchars(nl2br($_POST['message']))
);
$mail->AltBody = sprintf(
	"Name: %s\r\nEmail: %s\r\nMessage: %s\r\n",
	$_POST['name'],
	$_POST['email'],
	$_POST['message']	
);
 
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
 
if (!$mail->send()) {
	echo sprintf(
		'Message could not be sent. Mailer Error: %s',
		$mail->ErrorInfo
	);
	$ok = '?sent';
} else {
	$ok = '?not-sent';
}

header("Location: ../contact.php" . $ok);
