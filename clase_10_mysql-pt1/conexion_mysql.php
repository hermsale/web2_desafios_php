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
    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(isset($_POST['nombre'])&&isset($_POST['edad'])&&isset($_POST['correo'])){
            // no recibo mas el id, ya que es auto incremental
            // $id_usuario = $_POST['id_usuario'];
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $correo = $_POST['correo'];
            // $insert_sql = 'INSERT INTO usuario (id_usuario, nombre, email, edad) VALUES (5, "Mauro", "MauroR@edu.bue.ar", 42)';
            $insert_sql = "INSERT INTO usuario (nombre, email, edad) VALUES ('$nombre','$correo', $edad)";

            if(mysqli_query($conexion, $insert_sql)){
                echo "Datos insertados correctamente";
            }else{
                echo "Error al insertar datos";
            }

        }
    }
    echo "<br>";
    // preparo un insert de datos nuevos
    // realizo la comunicacion con la conexion y le paso la consulta, insert
    // mysqli_query($conexion, $insert_sql);
    $consulta_sql = 'SELECT * FROM usuario'; // genero la consulta SQL a la tabla usuario
    $resultado = mysqli_query($conexion, $consulta_sql); // guardo la respuesta de la consulta 
    // echo "<br> los resultados son ".$resultado;
    if ($resultado) { // verifico si la consulta fue exitosa
        // resultado puede ser un objeto la consulta fue de tipo insert, update o delete.

        // Comprobar si hay registros en la tabla. mysqli_num_rows verifica el numero de filas de la consulta. si hay 0 registros significa que la tabla no contiene nada 
        if (mysqli_num_rows($resultado) > 0) {
            // Mostrar los registros. mysql_fetch_assoc convierte la consulta en un array asociativo y lo guarda en $fila. esta dentro de un while, ya que es un array lo que se va a recorrer. se usa esto para recorrer todas las filas
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "ID ".$fila['id_usuario']." Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Edad: " . $fila['edad'] . "<br>";
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