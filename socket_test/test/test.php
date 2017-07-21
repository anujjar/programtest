<?php
ini_set('error_reporting', E_ALL);
ini_set("display_errors", 'on');
require_once dirname(__DIR__).'/../functions/config.php';
echo realpath('test.php'),"<br>";
echo dirname(__DIR__),"<br>";
echo dirname(__FILE__),"<br>";

 echo base_url();
?>