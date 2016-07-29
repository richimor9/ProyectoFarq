<?php
class Activos
{
	public $conn;
	private $table_name = "activos";

	public $id;
	public $numserie;
	public $activo;
	public $usuario;
	public $departamento;
	public $tecnico;
	public $producto;
	public $estado;
	public $descripcion;


	public function __construct($db) 
	{
		$this->conn = $db;
	}
	function create($numserie, $activo, $usuario, $departamento, $tecnico, $producto, $estado, $descripcion, $id) 
	{
	$query = "INSERT INTO activos(numserie, activo, usuario, departamento, tecnico, producto, estado, descripcion, status) VALUES ('" .$numserie . "' , " . $activo . " ,  '". $usuario . "' , '". $departamento . "' , '". $tecnico . "' , '". $producto . "' , '". $estado . "' , '". $descripcion . "' , " . $id . ")";
		/*if($this->conn->insert($query)) {
			$var = "hola";
		}
		else {
			$var = false;
		}*/
		//return ($this->conn->insert($query)) ? ($this->conn->insert($query)) : false;
		return ($this->conn->insert($query)) ? "nojalo" : "ok";

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

	function geteliminate($id)
 	{
 		$db = new DBConnect();
 		$acts = new Activos($db);
 		
 		$query = "DELETE FROM " . $this->table_name . " WHERE id =" . $id;
 		return($this->conn->query($query)) ? ($this->conn->query($query)) : false; 
 			
 	

 	}


}
?>