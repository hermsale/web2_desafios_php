<?php

class Database{
    private $servidor = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $basededatos = "desafio_mysql";
    private $conexion = "";
    // Crea la conexión a la base de datos


    // funcion para conectar a la BD
    public function connect(){
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->basededatos);
    

    if ($this->conexion->connect_error){
        die("Error al intentar conectar la BD".$this->conexion->connect_error);
    }

    echo "Conexión exitosa.";
    return $this->conexion;

    }

    public function close(){
        $this->conexion->close();
    }

}

// uso de la BD

// Esto instancia tu clase Database y establece la conexión a la base de datos. Está bien encapsular la conexión en una clase.
    $db = new Database();
    $conexion = $db->connect();

    // Ejecutas la consulta directamente con $conexion->query(). Esto está bien para consultas sencillas, pero para casos más avanzados (por ejemplo, con parámetros dinámicos), deberías considerar usar sentencias preparadas (prepare() y bind_param()).
    $consulta_sql = 'SELECT * FROM usuario'; // genero la consulta SQL a la tabla usuario
    $resultado = $conexion->query($consulta_sql); // guardo la respuesta de la consulta 

    // Verificar que hay resultados antes de recorrerlos es una buena práctica.
    if ($resultado->num_rows > 0){
        // El método fetch_assoc() devuelve cada fila como un array asociativo, lo que permite acceder a los datos fácilmente. Es el enfoque adecuado para mostrar los resultados de forma iterativa.
        while($fila = $resultado->fetch_assoc()){
            echo "<br>Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Edad: " . $fila['edad'] . "<br>";
        }
    }else{
        echo "No hay usuarios registrados";
    }


    echo "<br>";
    echo "Uso de prepare y bind_param<br>";
    // posible mejora uso de prepare y blind_param - para dar mayor seguridad y uso dinamico de filtros

    // prepare se utiliza para evitar posibles inyecciones de codigo sql malicioso 
    // 1)
    $stmt = $conexion->prepare("SELECT * FROM usuario WHERE edad >= ?");
    // prepare(): Prepara una consulta SQL con marcadores (?) en lugar de insertar valores directamente.
    // El ? es un marcador de posición que se sustituirá por un valor en el siguiente paso.
    // defino la variable que sera el parametro que sustituira el ?
    $where = 34;
    // 2)
    $stmt->bind_param("i", $where);
    // bind_param(): Vincula los valores a los marcadores de la consulta. Tienes que especificar el tipo de dato para cada marcador:
    //     's': string
    //     'i': integer
    //     'd': double (números con decimales)
    //     'b': blob (datos binarios)
    $stmt->execute();
    // execute(): Ejecuta la consulta preparada con los valores proporcionados en bind_param().
    $resultado2 = $stmt->get_result();
    // get_result(): Recupera el conjunto de resultados de la consulta, si la consulta devuelve filas (por ejemplo, con un SELECT).
    // Esto devuelve un objeto mysqli_result, que puedes recorrer como antes con un while y fetch_assoc().

    while($fila = $resultado2->fetch_assoc()){
        echo "Nombre2: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Edad: " . $fila['edad'] . "<br>";
    }

    // este metodo que se utilizo es muy util para cuando se manejan valores dinamicos

    // Esto es una buena práctica para liberar los recursos utilizados.
    $db->close();
?>