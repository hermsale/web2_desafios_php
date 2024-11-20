<?php

// Principales diferencias y ventajas con PDO:
//     DSN (Data Source Name):
//     PDO utiliza un único string (mysql:host=...) para definir la conexión.
//     Gestión de errores:
//     Se configuran excepciones con PDO::ERRMODE_EXCEPTION para manejar errores de manera más clara.
//     Consultas preparadas:
//     Usan marcadores de posición (:nombre) que son más legibles y seguros frente a inyecciones SQL.
//     Flexibilidad:
//     PDO soporta diferentes motores de bases de datos (no solo MySQL).
class Database
{
    private $servidor = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $basededatos = "desafio_mysql";
    private $conexion;

    // Método para conectar a la base de datos usando PDO
    public function connect()
    {
        try {
            // Usamos el DSN (Data Source Name) para especificar el tipo de base de datos y los detalles de la conexión
            $dsn = "mysql:host={$this->servidor};dbname={$this->basededatos};charset=utf8";
            $this->conexion = new PDO($dsn, $this->usuario, $this->clave);
            // Configuramos PDO para que lance excepciones en caso de error
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa.<br>";
            return $this->conexion;
        } catch (PDOException $e) {
            // Capturamos cualquier error de conexión
            die("Error al intentar conectar a la base de datos: " . $e->getMessage());
        }
    }

    public function close()
    {
        $this->conexion = null; // Cerramos la conexión
    }
}

// Uso de la base de datos
$db = new Database();
$conexion = $db->connect();

// Consulta sin parámetros (básica)
$sql = "SELECT * FROM usuario"; // Consulta SQL a la tabla usuario
$resultado = $conexion->query($sql); // Ejecutamos la consulta

if ($resultado->rowCount() > 0) {
    // fetchAll devuelve todas las filas como un array asociativo
    $usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
        echo "Nombre: " . $usuario['nombre'] . " - Email: " . $usuario['email'] . " - Edad: " . $usuario['edad'] . "<br>";
    }
} else {
    echo "No hay usuarios registrados<br>";
}

// Consulta con parámetros (preparada)
$edadMinima = 34;
$stmt = $conexion->prepare("SELECT * FROM usuario WHERE edad >= :edad");
// Utilizamos `:edad` como marcador de posición para el parámetro
$stmt->bindParam(":edad", $edadMinima, PDO::PARAM_INT);
// Ejecutamos la consulta
$stmt->execute();

if ($stmt->rowCount() > 0) {
    while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Nombre2: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Edad: " . $fila['edad'] . "<br>";
    }
} else {
    echo "No hay usuarios con edad mayor o igual a $edadMinima<br>";
}

// Cerramos la conexión
$db->close();
