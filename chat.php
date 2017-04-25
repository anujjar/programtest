<?php
include './vendor/autoload.php';

use Workerman\Worker;
use PHPSocketIO\SocketIO;

$io = new SocketIO(8081);
$io->on('connection', function($socket)use($io){
	echo "hello";
  $socket->on('chat message', function($msg)use($io){
    $io->emit('chat message', $msg);
  });
});



Worker::runAll();
?>