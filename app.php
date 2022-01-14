<?php
/**
 * 
 */
class App
{
	public $services = ['home', 'mail'];

	function run($service){
		if(!in_array($service, $this->services)){
			echo('ERROR!');
			var_dump($service);
			return false;
		}
		$this->$service();
	}

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

	function getModel($model){
		require __DIR__."/model/$model.php";
		return $data;
	}

	function getService($service, $model = array(), $priority = true){
		if(!empty($model)){
			extract($model);
		}

		if($priority){
			require "services/$service.php";
		}else{
			include "services/$service.php";
		}
	}

	function home(){
		$data = array(
			'teams' => $this->getModel('teams'),
			'social' => $this->getModel('social')
		);
		$this->getService('home', $data);
	}

	function mail(){
		$this->getService('mail');
	}
}