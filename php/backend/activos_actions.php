<div class="activos">
<?php

//include_once "../php/backend/DBConnect.php";
//include_once "../php/backend/Activos.php";
include_once "DBConnect.php";
include_once "Activos.php";






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


//$test = $acts->create("deforme" , 13);
//echo "<h1>" . $test . "</h1>";


//$id = 1;
/*if($rows = $acts->getAll() )
{
	foreach($rows as $value) 
	{
		echo "Ok <br> <br>";
		echo "<h1>" . htmlentities(mb_convert_encoding($value['id'],"UTF-8")) . "</h1>";
		echo "<br><br>";
		echo "<label>" . htmlentities(mb_convert_encoding($value['nombre'], "UTF-8")) . "</label>";

	}

}*/
?> 
</div>