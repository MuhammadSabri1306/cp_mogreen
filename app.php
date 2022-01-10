<?php
/**
 * 
 */
class App
{
	public $services = ['home', 'mail'];

	function parseUrl(){
		$url = [];
		if(isset($_GET['url'])){
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
		}
		return $url;
	}

	function getLibrary($library){
		require __DIR__."/libraries/$library.php";
		return new $library;
	}

	function getService($service, $priority = true){
		if(!in_array($service, $this->services)){
			echo('ERROR!');
			var_dump($service);
			return false;
		}

		if($priority){
			require "services/$service.php";
		}else{
			include "services/$service.php";
		}
	}

	function home(){
		$this->getService('home');
	}

	function mail(){
		$this->getService('mail');
	}
}