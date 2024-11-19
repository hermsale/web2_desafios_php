<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "desafio_mysql"; // modificamos esta linea, y ponemos el nombre del archivo .sql que queremos acceder
// Prueba la conexión
$conexion = mysqli_connect($servidor, $usuario, $clave, $basededatos);
// Crea la conexión a la base de datos
if (!$conexion) {
    die("Error al intentar conectar la base de datos: " .
        mysqli_connect_error());
} else {
    // echo "Conexión satisfactoria.<br>";
    
    $consulta_sql = 'SELECT * FROM usuario'; // genero la consulta SQL a la tabla usuario
    $resultado = mysqli_query($conexion, $consulta_sql); // guardo la respuesta de la consulta 
    // echo "<br> los resultados son ".$resultado;
    if ($resultado) { // verifico si la consulta fue exitosa
        // resultado puede ser un objeto la consulta fue de tipo insert, update o delete.

        // Comprobar si hay registros en la tabla. mysqli_num_rows verifica el numero de filas de la consulta. si hay 0 registros significa que la tabla no contiene nada 
        if (mysqli_num_rows($resultado) > 0) {
            // Mostrar los registros. mysql_fetch_assoc convierte la consulta en un array asociativo y lo guarda en $fila. esta dentro de un while, ya que es un array lo que se va a recorrer. se usa esto para recorrer todas las filas
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Edad: " . $fila['edad'] . "<br>";
            }
        } else {
            echo "No hay usuarios registrados en la tabla.<br>";
        }
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
    }
}

// mysqli_close() debe estar al final, cuando ya no se necesite realizar más consultas a la base de datos.
mysqli_close($conexion);
?>