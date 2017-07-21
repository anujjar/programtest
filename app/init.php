<?php
ini_set('error_reporting', E_ALL);
ini_set("display_errors", 'on');
define("base_url","http://localhost/programtest");
define("base_path","dirname(__DIR__)");

require_once __DIR__.'/core/App.php';
require_once __DIR__.'/core/Controller.php';
require_once __DIR__.'/config/development.php';
//print_r($a);
?>