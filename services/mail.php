<?php
$mail = $this->getLibrary('PHPMailer');

$mail->PluginDir = __DIR__.'/../libraries/';
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "globalmogreen.com"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "admin@globalmogreen.com"; //user email
$mail->Password = "@Palattae13061998"; //password email 
$mail->SetFrom("admin@globalmogreen.com","Admin Web Mogreen"); //set email pengirim
$mail->Subject = "Testing"; //subyek email
$mail->AddAddress("cv.mogreen@gmail.com", "Mo Green");  //tujuan email
$mail->MsgHTML("Testing...");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";