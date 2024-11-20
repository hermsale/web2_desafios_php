<?php
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$basededatos = "davinci"; // aca se reemplaza por el nombre del archivo .sql
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

// orientado a objetos

// Crea la conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $clave, $basededatos);
// Prueba la conexión
if ($conexion->connect_error) {
    die("Error al intentar conectar la base de datos: " . $conexion->connect_error);
} else {
    echo "Conexión satisfactoria.";
}

// Orientado a PDO
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