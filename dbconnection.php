<?php
/*
	Conexión con MySQL y PHP
	@author Compucloud
*/
$contraseña = "Hola.123";
$usuario = "admin";
$nombre_base_de_datos = "pruebas";
$host = "rds-demo-ac-instance-1.ckkusvkujdiw.us-east-1.rds.amazonaws.com";
try{
	$base_de_datos = new PDO('mysql:host=' . $host . ';dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>
