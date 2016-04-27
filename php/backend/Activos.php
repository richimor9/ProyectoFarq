<?php

class Activos
{
	private $conn;
	private $table_name = "activos";

	public $id;
	public $nombre;

	public function __construct($db) 
	{
		$this->conn = $db;
	}
	function create() 
	{
	}

	function getAll()
	{
		//$query = "SELECT * FROM" . $this->table_name . " WHERE status = 1 ORDERS BY nombre";
		$query = "SELECT * FROM activos";
		return ($this->conn->select($query)) ? ($this->conn->select($query)) : false;
	}


}
?>