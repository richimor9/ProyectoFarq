<style >
table, th, td, { border: 1px solid black; border-collapse: collapse;}
th, td{padding:5px;}
</style>
<div class="activos">
	

	<?php

 	include_once "DBConnect.php";
 	include_once "Activos.php";
 	//se cargan asi porque este archivo se va a cargar desde otra direccion
 	function postalluser($numserie, $activo, $usuario, $departamento, $tecnico, $producto, $estado, $descripcion)
 	{
 		$db = new DBConnect();
		$acts = new Activos($db);

		if(/*strcmp($numserie, "") == 0*/$numserie != NULL)
		{
			$test = $acts->create($numserie , $activo, $usuario, $departamento, $tecnico, $producto, $estado, $descripcion, 1);
			if(strcmp($test, "ok") == 0) 
			{
				//header("Location: ../../templates/activos.php"); php
				echo "<script>";
				echo 'alert("Se ha creado la notificacion"); window.location.href="../../templates/activos.php"';
				echo "</script>";
			}
		}
		else
		{
			echo "<script>";
			echo 'alert("Numero de serie esta vacio"); window.location.href="../../templates/activos.php"';
			echo "</script>";
		} 


	}

		 	function getalluser()
		 	{
		 		$db = new DBConnect();
		 		$acts = new Activos($db);

		 		echo '<table style="width:100%">
				<tr>
					<th>id</id>
					<th>usuario</th>
					<th>numserie</th>
				</tr>';

		 		if($rows = $acts->getAll())
		 		{
		 			foreach ($rows as $val)
		 			{
		 				echo "<tr>";
		 				echo "<th><a href='detalles.php?id=".htmlentities(mb_convert_encoding($val['id'],"UTF-8"))."'>".htmlentities(mb_convert_encoding($val['id'], "UTF-8"))."</a></th>";
		 				echo "<th>".htmlentities(mb_convert_encoding($val ['usuario'],"UTF-8"))."</th>";
			 			echo "<th>".htmlentities(mb_convert_encoding($val['numserie'], "UTF-8"))."</th>";
			 			echo "<tr>";
			 		}
			 			echo "</table>";
			 		}
			 		else
			 		{
			 			die("Error");
			 		}
 		
 	}

 	function getuserbyid($id)
 	{
 		$db = new DBConnect();
		$acts = new Activos($db);
		if($rows = $acts->getByID($id))
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

 	}
 	

 	

 	?>

</div>
