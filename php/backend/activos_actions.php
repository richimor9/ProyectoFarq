<?php

include_once "DBConnect.php";
include_once "Activos.php";
//header('Content-Type: text/html: charset=utf-8');

$db = new DBConnect();

/*$action = isset(_POST["action"]) ? $_POST["action"] : "";

switch($action) 
{
	case "new":
		$header = "Nuevo activo":
		break;
	case "edit":
		$header = "Editar activo":
		break;
	default:
		die("Page Not found");
		break;
}  */
?> 
<?php
include_once "Activos.php";
$acts = new Activos($db);

$acts ->getAll() /*or die("<h3>No hay activos en la base de datos</h3>")*/;
print_r($acts);
?>
<div class="activos">
	<select id = "id" name= "activos">
		<?php
			if($rows = $acts->getAll())
			{
				foreach($rows as $val)
				{
					echo "<option value = '" . htmlentities(mb_convert_encoding($val["id"] . "UTF-8")) . "'>" .
						htmlentities(mb_convert_encoding($val["nombre"] . "UTF-8")) . "</option>";

				}

			}
			else 
			{
				die("error");
			} 
		?>
	</select>
</div>