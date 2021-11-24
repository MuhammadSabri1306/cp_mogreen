<?php

error_reporting(E_ALL);
session_start();

$page = array(
	'login' => 'login.html',
	'home' => 'home.html'
);

$code = array('key' => 'cvmogreen18', 'hash' => password_hash('cvmogreen18', PASSWORD_DEFAULT));

if( isset($_POST['code']) ){
	if( password_verify($_POST['code'], $code['hash']) ){
		$_SESSION['login'] = true;

		if( isset($_POST['rememberMe']) ){
			setcookie('mgr_code', $code['hash'], time() + (3600 * 24));
		}
	}
}

if( isset($_COOKIE['mgr_code']) ){
	if( password_verify($code['key'], $_COOKIE['mgr_code']) ){
		$_SESSION['login'] = true;
	}
}

$login = false;
if( isset($_SESSION['login']) ){
	if($_SESSION['login']){ $login = true; }
}

if( isset($_SESSION['login']) ){ readfile($page['home']) }else{ readfile($page['home']); }