<?php

$table = (isset($_GET["table"]) ? $_GET["table"]:null); //set to null if not defined
$id = (isset($_GET["id"]) ? $_GET["id"]:null); //set to null if not defined

spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();

$root = $_SERVER["DOCUMENT_ROOT"];
require_once("../database/database.php");

$my_database = new database(); //define database 
$my_database->connect(); //connect to database


$my_database->fetch_all($table);
/*if($id !== null)
{	
	$my_database->fetch_all($table); //fetch data from database
}
elseif($table !== null)
{	
	$my_database->fetch_all($table);
}*/
?>