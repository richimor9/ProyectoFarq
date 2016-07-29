<?php include("../php/cabecerainc.php"); ?>

<div class="contenedor">
	<?php include("../php/backend/activos_act.php"); 
	getalluser(); ?>
	</div>
	<script type="text/javascript">
	function confirmation(id)
	{
		var txt;
		var url;
		var strid;
		var urlid;

    	var r = confirm("Seguro que quieres eliminar el registro?");

    	
    	if (r == true) 
    	{
        	txt = "Aceptar";
        	url = "../php/backend/borraRegistro.php?id=";
        	/*id = document.getElementById('id');*/
        	srtid = id;
        	urlid = url.concat(strid);

        	console.log(urlid);


        	//window.location.href='../php/backend/borraRegistro.php?id=id';
        	//window.location.href='../php/backend/borraRegistro.php';
    	}
    	else 
    	{
       		txt = "Cancelar";
    	}
		
	}	
	</script>
	

<?php include("../php/piedepaginainc.php"); ?> 