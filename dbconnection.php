<?php
/*
	Conexión con MySQL y PHP
	@author Mario Palato
*/
$contraseña = "Hola.123";
$usuario = "admin";
$nombre_base_de_datos = "pruebas";
$host = "test-db.cpqrw8sjstzv.us-east-2.rds.amazonaws.com";
try{
	$base_de_datos = new PDO('mysql:host=' . $host . ';dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>
