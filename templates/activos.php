<?php include("../php/cabecerainc.php"); ?>

<div class="contenedor">

	<form action="../php/activos/capact.php" method="post">
	<label>Numero de Serie <input name="Numserie" type="text" step="1" id="numserie" size="12" required/></label>
	<br> 
	<label>Activo <input name="Activo" type="number" step="1" id="activo" size="12" required/></label>
	<br>
	<label>Usuario <input name="Usuario" type="texto" step="1" id="texto" size="12" required/></label>
	<br>
	<label>Departamento <input name="Departamento" type="texto" step="1" id="departamento" size="12" required/></label>
	<br>
	<label>Tecnico <input name="Tecnico" type="texto" step="1" id="texnico" size="12" required/></label>
	<br>
	<label>Tipo de producto</label>
	<select name="Producto" required>
		<option disabled selected>Selecciona una opción</option>
		<option value="CPU">Computadora de escritorio</option>
		<option value="Laptop">Laptop</option>
		<option value="Impresora">Impresora</option>
		<option value="Proyector">Proyector</option>
	</select>
	<br>
	<label>Estado</label>
	<select name="Estado" required>
		<option disabled selected>Selecciona una opción</option>
		<option value="Recibida">Recibida</option>
		<option value="Analisis">Analizando</option>
		<option value="Tomando Acciones">Tomando acciones</option>
		<option value="Lista">Lista para entregar</option>
	</select>
	<br>
	<label>Descripcion / Observaciones </label>
	<br>
	<textarea name="Descripcion" placeholder="Modelo, marca, color, usuario, contraseña, hora de recibido, dia, especificaciones, comentarios, fallas, etc."></textarea>
	<br>
	<label> Max. 250 caracteres</label>
	<br>
	<input type="submit" value="Registrar">
	</form>

	<?php //include("../php/backend/activos_actions.php");?>
</div>

<?php include("../php/piedepaginainc.php"); ?> 
