<?php
    
    // ACCEDER A ARCHIVOS ESPECIFICOS DESDE LOCALHOST, TENIENDO UN INDEX.PHP EN LA CARPETA.
    // Nos posicionamos sobre localhost/nombre_carpeta/nombre_archivo.php
    // ejemplo: http://localhost/programacionWeb/clase_10_mysql-pt1/conexion_mysql.php
    
    // tenemos tres formas de trabajar con mysql en php. 
    // 1) Modo procedural. utilizando: mysqli_connect(), mysqli_query(), mysqli_fetch_assoc(), etc.

    // 2) Modo orientado a objetos. se crean instancias de la clase mysqli. se utilizan metodos como: son __construct(), query(), fetch_assoc(), etc.

    // 3) Utilizando la extensión PDO (PHP Data Objects) (esta es la mas moderna): esta opcion nos permite conectarnos a diferentes tipos de BD, sin modificar mucho el codigo. El controlador que se usa para BD MySQL es PDO_MYSQL. Algunos ejemplos de métodos utilizados con PDO son: prepare(), execute(), fetch(), etc.

    
    // El modo procedural es el enfoque mas antiguo y sencillo. Donde se utilizan funciones especificas para conectarse a la BD y realizar consultas. Es adecuado para proyectos pequeños que necesitan una solucion rapida y directa. Es dificil de mantener en proyectos grandes y complejos.

    // El modo orientado a objetos, es una forma mas moderna y estructurada de interactuar con la BD. Se utiliza clases y objetos para representar la conexion y las consultas. Esto facilita la reutilización de código, y mantiene una legibilidad y organización. Es muy escalable. 

    // La extensión PDO, permite una mayor flexibilización para conectar diferentes bases de datos, debido a que es compatible con varios sistemas de gestion de base de datos, no solo mysql. proporciona una capa de abstraccion que puede mejorar la seguridad y facilitar la migracion a otra BD. 

    // Metodos MySQLi mas utilizados.

    // • mysqli_connect(): Establece una nueva conexión con el  servidor de base de datos MySQL.
    // • mysqli_query(): Ejecuta una consulta SQL en la base de datos y devuelve un objeto mysqli_result o FALSE en caso de error.
    // • mysqli_fetch_assoc(): Obtiene la siguiente fila de un conjunto de resultados como un array asociativo.
    // • mysqli_real_escape_string(): Escapa los caracteres especiales en una cadena para su uso en una consulta SQL.
    // • mysqli_prepare(): Prepara una consulta SQL para su ejecución y devuelve un objeto mysqli_stmt o FALSE en caso de error.
    // • mysqli_stmt_bind_param(): Vincula parámetros a una sentencia preparada antes de su ejecución.
    // • mysqli_stmt_execute(): Ejecuta una sentencia preparada.
    // • mysqli_stmt_get_result(): Obtiene el resultado de una sentencia preparada como un objeto mysqli_result.
    // • mysqli_fetch_array(): Obtiene la siguiente fila de un conjunto de resultados como un array numérico, asociativo o ambos.
    // • mysqli_num_rows(): Obtiene el número de filas en un conjunto de resultados.
    // • mysqli_error(): Devuelve una descripción del último error ocurrido durante la ejecución de una consulta.
    // • mysqli_connect_errno(): Devuelve el número de error de la última llamada a mysqli_connect(), permitiendo detectar errores de conexión de forma programática. Si la conexión a la base de datos falla, el valor devuelto será un número de error distinto de cero.
    // • mysqli_connect_error(): Devuelve la descripción del error de la última llamada a mysqli_connect(), útil para mostrar       mensajes de error más informativos o registrar detalles del error.
    // • mysqli_close(): Cierra la conexión al servidor de base de datos.


?>