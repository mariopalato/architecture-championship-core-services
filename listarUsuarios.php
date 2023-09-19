<?php
/*
	Listar usuarios desde la BD y mostrarlos en una tabla
	@author Mario Palato
*/
include_once "dbconnection.php";
$sentencia = $base_de_datos->query("SELECT * FROM personas;");
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Listar Usuarios</title>
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	</style>
</head>
<body>
	<table class='table'>
		<thead>
			<tr>
				<th class='table-primary'>ID</th>
				<th class='table-primary'>Nombre</th>
				<th class='table-primary'>Apellido</th>
				<th class='table-primary'>Telefono</th>
				<th class='table-primary'>Género</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($personas as $persona){ ?>
			<tr>
				<td><?php echo $persona->id ?></td>
				<td><?php echo $persona->nombre ?></td>
				<td><?php echo $persona->apellido ?></td>
				<td><?php echo $persona->telefono ?></td>
				<td><?php echo $persona->sexo ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
    <div>
        <a href="/" class="btn btn-secondary">Regresar</a>
    </div>
</body>
</html>