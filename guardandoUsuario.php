
<?php
/*
	Guardando datos del usuario en la BD
	@author Mario Palato
*/
error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($_POST["nombre"]) || isset($_POST["apellido"]) || isset($_POST["telefono"]) || isset($_POST["sexo"])) {
    #Proceso de inserción
    include_once "dbconnection.php";
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $sexo = $_POST["sexo"];

    $sentencia = $base_de_datos->prepare("INSERT INTO personas(nombre, apellido, telefono, sexo) VALUES (?, ?, ?, ?);");
    $resultado = $sentencia->execute([$nombre, $apellidos, $telefono, $sexo]);

    #Validando la inserción en la BD
    if($resultado === TRUE) echo "Insertado correctamente";
    else echo "Algo salió mal. Por favor verifica que la tabla exista";
}else{
    exit();
}

?>