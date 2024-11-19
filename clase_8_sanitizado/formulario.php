
<?php
// se validara en tres etapas: 

// verificamos si la solicitud se realizo mediante el metodo POST
// VARIABLE SUPER GLOBAL SON ARRAYS ASOCIATIVOS $_SERVER['posicion1']['posicion2]
if($_SERVER['REQUEST_METHOD']=='POST'){
    // $_POST es un array asociativo que contiene los campos del formulario, cada "name" del formulario es un index del array asociativo
    // 1) verificar si los campos del formulario estan definidos y NO SON NULL. Comprueba si el campo "nombre" esta definido en POST. esto hace el isset
    if(isset($_POST['nombre'])&&($_POST['apellido'])&&($_POST['usuario'])&&($_POST['clave'])&&($_POST['correo'])){

        // si existen estos campos en el array, los paso a una variable local
        // aplicamos un trim al $_POST para eliminar espacios en blanco al principio y al final
        // aplicamos tambien stripslashes a los campos que pueden llegar a tener apostrofes o comillas simples
        $nombre = stripslashes(trim($_POST['nombre']));
        $apellido = stripslashes(trim($_POST['apellido']));
        $usuario = stripslashes(trim($_POST['usuario']));
        $clave = trim($_POST['clave']);
        // en el campo mail utilizamos un filtro para sanitizar correctamente
        $correo = filter_var(trim($_POST['correo']), FILTER_SANITIZE_EMAIL);

        // una vez que terminamos de aplicar todos los filtros de sanitizado, eliminacion de apostrofes, espacios, etc. Aplicamos el ultimo sanitizador, que pasa todo el codigo a 
        // se utiliza htmlspecialchars para
        // evitar que el contenido se interprete como etiquetas HTML y, en
        // su lugar, se muestre como texto seguro.
    
        // voy a aplicar un sanitizado 
        $nombreSanitizado = htmlspecialchars($nombre); 
        $apellidoSanitizado = htmlspecialchars($apellido);
        $usuarioSanitizado = htmlspecialchars($usuario);
        $correoSanitizado = htmlspecialchars($correo);


        echo "tus datos sanitizados son los siguientes ".$nombreSanitizado." ".$apellidoSanitizado." ".$usuarioSanitizado." ".$correoSanitizado;

    }

}
