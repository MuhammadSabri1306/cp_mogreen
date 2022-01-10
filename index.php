<?php
require 'app.php';

$service = 'home';
$app = new App();

$url = $app->parseUrl();
if(!empty($url)){
	if($url[0] == 'mail'){
		$service = 'mail'; 
	}
}

$app->getService($service);