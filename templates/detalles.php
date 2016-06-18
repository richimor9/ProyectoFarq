<?php include("../php/cabecerainc.php");?>
	<label for="ds">Contenido de raras</label>
	<p>Esto es raras</p>


<div class="contenedor">
<?php
	include("../php/backend/activos_act.php"); 
	$id = $_GET['id']; //captura datos
	echo $id; //imprime
	getuserbyid($id);
?>
</div>
<?php include("../php/piedepaginainc.php");?>