<?php
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$basededatos = "davinci";
// Crea la conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $clave, $basededatos);
// Prueba la conexión
if($conexion->connect_error){
die("Error al intentar conectar la base de datos: " . $conexion->connect_error);
}
else{
echo "Conexión satisfactoria.";
}
?>