<?php

$config = array(
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'unduh_code'
);

$db = new mysqli(
	$config['host'],
	$config['username'],
	$config['password'],
	$config['database']
);

?>