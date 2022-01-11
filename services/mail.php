<?php

$response = ['status' => false];
if(isset($_POST['mail'])){
	
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

	$body = '<p>From <b>'.$_POST['name'].'</b>&nbsp;('.$_POST['institution'].')</p>
	<p>Email <b>'.$_POST['email'].'</b></p>
	<p>Telp <b>'.$_POST['phone'].'</b></p>
	<p>'.$_POST['messege'].'</p>';

	$mail->MsgHTML($body);
	if($mail->Send()){
		$response = ['status' => true];
	}else{
		$response = ['status' => false];
	}
}

header('Content-Type: application/json');
print_r(json_encode($response));