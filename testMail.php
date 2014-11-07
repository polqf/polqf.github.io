<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - mail() test</title>
</head>
<body>
<?php
define('__SMTPuser__', 'xdh311c');
define('__SMTPpassword__', 'RsshsW4ZdM');
define('__SMTPport__', '587');
define('__SMTPauth__', '1');
define('__SMTPsecure__', 'none');
define('__SMTPhost__', 'smtp.mibox.es');
define('__SMTPaddress__', 'noreply@mibox.es');
define('__SMTPname__', 'Cuentas Mibox');


require './phpmailer/class.phpmailer.php';

$mail = new PHPMailer;

//$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = __SMTPport__;  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = __SMTPuser__;                 // SMTP username
$mail->Password = __SMTPpassword__;                           // SMTP password

$mail->From = __SMTPaddress__;
$mail->FromName = __SMTPname__;
$mail->addAddress('pmartinezga@gmail.com', 'Klifik User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$result=$mail->send();

if(!$result) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

print "<pre>";
print_r($result);
print "</pre>";

?>
</body>
</html>