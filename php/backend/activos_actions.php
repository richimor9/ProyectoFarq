<div class="activos">
<?php

include_once "../php/backend/DBConnect.php";
include_once "../php/backend/Activos.php";



$db = new DBConnect();
$acts = new Activos($db);

$id = 1;

if($rows = $acts->getAll() )
{
	foreach($rows as $value) 
	{
		echo "Ok <br> <br>";
		echo htmlentities(mb_convert_encoding($value['id'],"UTF-8"));
		echo "<br><br>";
		echo htmlentities(mb_convert_encoding($value['nombre'], "UTF-8"));

	}

}
?> 
</div>