<?php
$mail = $this->getLibrary('PHPMailer');

$mail->PluginDir = __DIR__.'/../libraries/';
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl'; 
$mail->Host = MAIL_HOST; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = MAIL_USER; //user email
$mail->Password = MAIL_PASS; //password email 
$mail->SetFrom(MAIL_ADDRESS, MAIL_NAME); //set email pengirim
$mail->Subject = "Testing"; //subyek email
$mail->AddAddress("cv.mogreen@gmail.com", "Mo Green");  //tujuan email
$mail->MsgHTML("Testing...");
/*if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";*/

$response = json_encode($_POST);

header('Content-Type: application/json;charset=UTF-8');
print_r($response);