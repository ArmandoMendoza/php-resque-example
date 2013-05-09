<?php
require 'vendor/autoload.php';

$args = array('msg'=>"Prueba desde Resque");

for ($i=0; $i < 10 ; $i++) {
	echo $i."\n";
	if ($i == 5) {
		$r = Resque::enqueue('default', 'MyJob', $args);
	}
}
?>