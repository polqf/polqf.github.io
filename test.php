<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - mail() test</title>
</head>
<body>
<?php
echo 'Sending message...';
$name = "Klifik";
$to = "pol.quintana@gmail.com";

$from = $to;
$subject = "Recordatorio cuenta Klifik";
$message = "Hola Klifero. El equipo de Klifik.";
$headers = "From:" .$from;
$mailSent = mail($to,$subject,$message,$headers);


if($mailSent) {
    echo 'Message has been sent';
} else {
    echo 'Message could not be sent.';
}

print "<pre>";
print_r($mailSent);
print "</pre>";

?>
</body>
</html>