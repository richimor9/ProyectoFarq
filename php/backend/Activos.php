<?php
class Activos
{
	public $conn;
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
		$query = "SELECT * FROM " . $this->table_name . " WHERE id>0";
		//$query = "SELECT * FROM activos WHERE id > 0 ";
		return ($this->conn->select($query)) ? ($this->conn->select($query)) : false;
	}
	function getByID($id)
	{
		$query = "SELECT * FROM " . $this->table_name . " WHERE id =" . $id;
		return($this->conn->select($query)) ? ($this->conn->select($query)) : false;
 
	}


}
?>