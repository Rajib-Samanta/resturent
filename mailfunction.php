<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugin/PHPMailer/src/Exception.php';
require 'plugin/PHPMailer/src/PHPMailer.php';
require 'plugin/PHPMailer/src/SMTP.php';

$mail= new PHPMailer(true);
$mail->isSMTP();

$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Port=587;
$mail->Username   = 'your_mail_address'; 
$mail->Password   = 'Your_app_password'; 


$mail->setFrom('your_mail_address','name');

$mail->addAddress('receiver_mail','receiver_name');

$mail->isHTML(true);
$mail->CharSet='UTF-8';


$mail->Subject='=====subject goes here=======';
$mail->Body="<h1>msg";

$mail->send();
if(!$mail->send()){
    echo $mail->ErrorInfo;
}
else{
    echo "Successfully Send the Mail.";
}
  
?>
