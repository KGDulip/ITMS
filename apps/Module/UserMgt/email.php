<?php 
require 'class.phpmailer.php';
$gmail_mail = new PHPMailer;
 
$gmail_mail->IsSMTP();
// Send email using gmail SMTP server
$gmail_mail->Host = 'ssl://smtp.gmail.com';
// port for Send email
$gmail_mail->Port = 465;
$gmail_mail->SMTPDebug = 1;
$gmail_mail->SMTPAuth = true;
$gmail_mail->Username = 'kgdulip@gmail.com';
$gmail_mail->Password = 'Cheni@2012';
 
$gmail_mail->From = 'kgdulip@gmail.com';
$gmail_mail->FromName = 'Dulip';// frome name
$gmail_mail->AddAddress('kgdulip@gmail.com', 'To Name');  // Add a recipient  to name
$gmail_mail->AddAddress('mdtditdulip@gmail.com');  // Name is optional
 
$gmail_mail->IsHTML(true); // Set email format to HTML
 
$gmail_mail->Subject = 'Here is the subject for onlinecode';
$gmail_mail->Body    = 'Send email using gmail SMTP server <br>This is the HTML message body <strong>in bold!</strong> <a href="https://onlinecode.org/" target="_blank">onlincode.org</a>';
$gmail_mail->AltBody = 'This is the body in plain text for non-HTML mail clients at https://onlinecode.org/';
 
if(!$gmail_mail->Send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $gmail_mail->ErrorInfo;
exit;
}
else
{
echo 'Message of Send email using gmail SMTP server has been sent';
}
?>