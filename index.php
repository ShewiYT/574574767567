<?php
session_start();
header("Content-Type:text/html;charset=UTF-8");
require_once("engine/config/database.php");
require_once("engine/classes/loader.php"); 

if($_SERVER['REQUEST_URI'] == '/'){
	$class = "index";
$url = "main";}
else 
{
	if(substr($_SERVER['REQUEST_URI'], 1) == 'profile/exit') session_destroy();
	else if(substr($_SERVER['REQUEST_URI'], 1,9) == 'dellnews/')
	{
		$id = substr($_SERVER['REQUEST_URI'], 10);
		$sql = "DELETE FROM `news` WHERE `id` = '".$id."'";
		$result = $connect->query($sql);
		$class = "admin"; $url = "main";
	}
	else { $class = substr($_SERVER['REQUEST_URI'], 1); $url = "main"; }
	
}

if(file_exists("engine/classes/".$url."/".$class.".php")) {
	include("engine/classes/".$url."/".$class.".php");
	if(class_exists($class)) {
	
		$obj = new $class;
		$obj->get_body();
	}
	else {
		exit("");
	}
}
else {
	exit("<meta http-equiv='refresh' content='0; url= /'>");
}

