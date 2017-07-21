<?php
class App {
	private $controller="home";
	private $method="index";
	private $params=[];

	public function __construct() {
		$url=$this->parseUrl();
		if(file_exists(__DIR__.'/../controllers/'.$url[0].'.php')){
			$this->controller=$url[0];
			unset($url[0]);
		}
		require_once __DIR__.'/../controllers/'.$this->controller.'.php';
		$this->controller=new $this->controller;
		if(method_exists($this->controller, $url[1])){
			$this->method=$url[1];
			unset($url[1]);
		}
		$this->params=($url)?array_values($url):[];

		call_user_func_array([$this->controller,$this->method], $this->params);

	}


	private function parseUrl() {
		if(isset($_GET['url'])){
			$url=$_GET['url'];
			return explode('/',filter_var(rtrim($url,'/'),FILTER_SANITIZE_URL));
		}	
	}

}
?>