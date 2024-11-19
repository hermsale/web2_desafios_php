<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Formularios con PHP</title>
<!-- Add Bootstrap CSS -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.
min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-lg-6">
    <h1 class="text-center">Formulario de Registro</h1>
    
    <form action="formulario.php" method="POST">
            <div class="form-group mb-3">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required placeholder="Ingrese su nombre">
        </div>

        <div class="form-group mb-3">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required placeholder="Ingrese su apellido">
        </div>

        <div class="form-group mb-3">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" class="form-control" required placeholder="Ingrese su nombre de usuario">
        </div>

        <div class="form-group mb-3">
                <label for="clave">Clave:</label>
                <input type="password" name="clave" id="clave" class="form-control" required placeholder="Ingrese su clave">
        </div>

        <div class="form-group mb-3">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" class="form-control" required placeholder="Ingrese su correo electrónico">
        </div>

        <div class="text-center">
                <input type="submit" value="Registrarse" class="btn btn-primary">
        </div>
    </form>
</div>
</div>
</div>
<!-- Add Bootstrap JavaScript (optional) -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bu
ndle.min.js"></script>
</body>
</html>