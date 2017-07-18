<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set("display_errors", 'on');
$base_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
$base_url .= '://'. $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
echo $base_url;
?>