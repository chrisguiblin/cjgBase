<?php
		//$table = $_GET["table"];

		$dbserver="localhost";
		$username="admin";
		$password="cTwhqe!1894";
		$database="gooseberry";
		$table = "running_man";
		$connection = mysql_connect("$dbserver","$username","$password")or die("could not connect to the server");
		$dbs = mysql_select_db($database, $connection);

	
	
		$str = mysql_query("SELECT * FROM $table"); //Write MySQL query to select all data from the table
		$array = mysql_fetch_row($str); //get an array of the results

		echo json_encode($array); //echo result as json
	?>