<?php
include ("table.php");
$config = array(
	//База 
	'host' => 'localhost',
	'user' => 'root',
	'pass' => '',
	'db' => 'krp' );

$connect = mysqli_connect("$config[host]", "$config[user]", "$config[pass]", "$config[db]");
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}
