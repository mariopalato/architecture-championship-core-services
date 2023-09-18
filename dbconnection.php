<?php
/*
	Conexión con MySQL y PHP
	@author Mario Palato
*/
$contraseña = "Hola.123";
$usuario = "root";
$nombre_base_de_datos = "pruebas";
$host = "localhost";
try{
	$base_de_datos = new PDO('mysql:host=' . $host . ';dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>