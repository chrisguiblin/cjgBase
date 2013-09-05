<?php

class database
{	
	function connect()
	{		
		require_once("setup.php"); //Calls the setup file to set the custom setup parameters
		
		$this->db = new mysqli($host, $user, $password, $database); //Create new connection
		
		if($this->db->connect_errno > 0) //On error...
		{
			die('Unable to connect to database [' . $db->connect_error . ']');
		}
	}
	
	function add($table,$Name,$Type)
	{
		$str="insert into $table(Name,Type)values('$Name','$Type')";
		$sql=mysql_query($str);
		echo $str;
	}
	
	function fetchByID($table, $id)
	{
		$sql = <<<SQL
			SELECT *
			FROM `$table`
			WHERE ID = `$id`
SQL;
		
		if(!$result = $this->db->query($sql))
		{
			die('There was an error running the query [' . $db->error . ']');
		}
		while($row=$result->fetch_assoc())
		{
			foreach($row as $item)
			{
				echo json_encode($item);
			}
		}
	}	
	
	function fetch_all($table)
	{
		$sql = <<<SQL
			SELECT *
			FROM `$table`
SQL;
		
		if(!$result = $this->db->query($sql))
		{
			die('There was an error running the query [' . $this->db->error . ']');
		}
		
		$array=array();
		while($row=$result->fetch_assoc())
		{
			$thisArray = array();
			foreach($row as $item)
			{
				array_push($thisArray,$item); //push each item into the current array			
			}
			array_push($array,$thisArray);	//push every current array into the main array
		}
		
		echo json_encode($array); //echo result as json
	}
}


?>