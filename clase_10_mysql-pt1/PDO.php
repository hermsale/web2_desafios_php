<?php
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$basededatos = "davinci";
try{
$conexion = new PDO("mysql:host=$servidor;dbname=$basededatos",
$usuario, $clave);
// Establece el modo de error PDO en excepción
$conexion->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
echo "Conexión satisfactoria.";
}
catch(PDOException $e){
echo "Error al intentar conectar la base de datos: " . $e->getMessage();
}
?>