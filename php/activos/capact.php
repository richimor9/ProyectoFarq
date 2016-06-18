<?php 
include("../backend/activos_act.php");

$numserie = htmlspecialchars($_POST["Numserie"]);
$activo = htmlspecialchars($_POST["Activo"]);
$usuario = htmlspecialchars($_POST["Usuario"]);
$departamento = htmlspecialchars($_POST["Departamento"]);
$tecnico = htmlspecialchars($_POST["Tecnico"]);
$producto = htmlspecialchars($_POST["Producto"]);
$estado = htmlspecialchars($_POST["Estado"]);
$descripcion = htmlspecialchars($_POST["Descripcion"]);

/*echo "->" . $numserie;
echo "->" . $activo;
echo "->" . $usuario;
echo "->" . $departamento;
echo "->" . $tecnico;
echo "->" . $producto;
echo "->" . $estado;
echo "->" . $descripcion;*/
postalluser($numserie, $activo, $usuario, $departamento, $tecnico, $producto, $estado, $descripcion);

?>
