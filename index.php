<?php
// $base_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
// $base_url .= '://'. $_SERVER['HTTP_HOST'];
// $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
// echo $base_url;

include_once('server.php');

$host    = "127.0.0.1";
$port    = 3000;
$a =4554;
$b=456;

$message = "Hello Server";
echo "Message To server :".$message;
// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
// connect to server
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");  
// send string to server
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
// get server response
$result = socket_read ($socket, 1024) or die("Could not read server response\n");
echo "Reply From Server  :".$result;
// close socket
socket_close($socket);
?>
?>
