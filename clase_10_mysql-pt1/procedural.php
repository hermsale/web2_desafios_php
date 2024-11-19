<?php
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$basededatos = "davinci";
// Prueba la conexión
$conexion = mysqli_connect($servidor, $usuario, $clave, $basededatos);
// Crea la conexión a la base de datos
if(!$conexion){
die("Error al intentar conectar la base de datos: " .
mysqli_connect_error());
}
else{
echo "Conexión satisfactoria.";
}
?>