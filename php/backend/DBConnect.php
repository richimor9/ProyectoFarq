<?php

class DBConnect 
{
	protected static $connection;

	public function connect()
	{
		if(!isset(self::$connection))
		{
			self::$connection = new mysqli("localhost", "root", "", "farq");

		}
		if(self::$connection == false) 
		{
			return false;
		}
		return self::$connection; //regresa esto
	}
	public function getLastId() 
	{
		return $this->connect()->insert_id;
	}

	public function query($query) 
	{
	$connection = $this->connect(); //asignando a la variable connection los valores del metodo connect
	$result = $connection->query($query);

	return $result;
	}

	public function beginTransaction($query) 
	{
		$connection = $this->connect();
		$connection->query("SET autommit-0;"); // -> : ejecuta ese metodo
		$result = $connection->query("BEGIN;");

		return $result;
	}

	public function stopTransaction($result) 
	{
		$connection = $this->connect();
		if($result == false) 
		{
			$connection->query("ROLLBACK;");
		}
		else {


			$connection->query("COMMIT;");
		}
	}

	public function select($query)
	{
		$rows = array();
		$result = $this->query($query);
		if($result == false)
		{
			return false;
		}
	
		while($row = $result->fetch_assoc())
		{
		$rows[] = $row;
		}
	return $rows;
	}

	public function insert($query)
	{
		$rows = array();
		$result = $this->query($query);
		if($result == false)
		{
			return false;
		}
		else {
			return $rows;
		}

	}



public function error()
 {
 	$connection = $this->connect();
 	return $connection->error; //es una funcion predefinida como mysqli_error();
}


}
