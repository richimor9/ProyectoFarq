<?php include("../php/cabecerainc.php");?>

	<label for="ds">Contenido de altas</label>
	<p>Esto es altas</p>
	
	<?php
	include_once "../php/backend/DBConnect.php";
	include_once "../php/backend/Activos.php";
	//include_once "DBConnect.php";
	//include_once "Activos.php";


	$db = new DBConnect();
	$acts = new Activos($db);

	if($rows = $acts->getAll() )
	{
	foreach($rows as $value) 
	{
		echo "<br> <br>";
		echo "<table>";

		echo "<tr>";
		//echo "<th>Numero de Serie</th>";
    	echo "<th>Activo</th>";
    	echo "<th>Usuario</th>";
    	echo "<th>Departamento</th>";
    	echo "<th>Tecnico</th>";
    	echo "<th>Producto</th>";
    	echo "<th>Estado</th>";
    	//echo "<th><a href='vermas.php'>Ver mas..</a></th>";
    	//echo "<th><a href=''>Actualizar</a></th>";
    	//echo "<th><a href=''>Elimininar</a></th>";
    	echo "</tr>";

    	echo "<tr>";
    	////////////////////////////////////////////////////////////////////////
		//echo "<td><label>" . htmlentities(mb_convert_encoding($value['numserie'],"UTF-8")) . "</label></td>";

		echo "<td><label>" . htmlentities(mb_convert_encoding($value['activo'], "UTF-8")) . "</label></td>";

		echo "<td><label>" . htmlentities(mb_convert_encoding($value['usuario'],"UTF-8")) . "</label></td>";

		echo "<td><label>" . htmlentities(mb_convert_encoding($value['departamento'], "UTF-8")) . "</label></td>";

		echo "<td><label>" . htmlentities(mb_convert_encoding($value['tecnico'],"UTF-8")) . "</label></td>";

		echo "<td><label>" . htmlentities(mb_convert_encoding($value['producto'], "UTF-8")) . "</label></td>";

		echo "<td><label>" . htmlentities(mb_convert_encoding($value['estado'],"UTF-8")) . "</label></td>";

		echo "</tr>";
		////////////////////////////////////////////////////////////////////////

		echo "</table>";
	

	}
	}
	?>

<?php include("../php/piedepaginainc.php"); ?>