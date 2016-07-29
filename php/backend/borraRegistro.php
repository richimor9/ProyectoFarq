<?php 
	include_once "DBConnect.php";
 	include_once "Activos.php";

	$db = new DBConnect();
	$acts = new Activos($db);

	//$id = $_GET["id"];if(!empty($_GET["id"])) echo "id indefinido";

	if(empty($_GET["id"]))
	{
		$id=""; 

	}
	else 
	{
		$id=$_GET["id"];
	}
	//echo $id;

	if($rows = $acts->geteliminate($id))
	{

		echo "<script>
				window.location.href='../../templates/act.php'
				</script>";


	}
	else 
	{
		echo "<script>
				alert('Error al eliminar registro');
				window.location.href='../../templates/act.php'
				</script>";

	}
		


 ?>