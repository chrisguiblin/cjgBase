<?php
spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();

use system\database\database as database;

$table = $_GET["table"];
$name = $_GET["name"];
$type = $_GET["type"];

$my_database = new database(); //define database 
$my_database->connect(); //connect to database
$my_database->add($table,$name,$type); //add data to database
?>
