<?php

spl_autoload_extensions(".php"); // comma-separated list of extentions to auto load
spl_autoload_register();
		
$table = (isset($_GET["table"]) ? $_GET["table"]:null); //set to null if not defined
$id = (isset($_GET["id"]) ? $_GET["id"]:null); //set to null if not defined

if($table !== null)
{
	get_data($table,$id);
}

function get_data($table,$id)
{		
	$root = $_SERVER["DOCUMENT_ROOT"];
	

	$my_database = new database(); //define database 
	$my_database->connect(); //connect to database
	$my_database->fetch_all($table); //Fetch all from the tale
}
?>