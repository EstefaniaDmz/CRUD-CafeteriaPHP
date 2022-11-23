<?php
session_unset();

session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetería</title>
    <link href="css/bootstrap.css" rel="stylesheet"/>
</head>
<body>
<img src="coffe.jpg" class="rounded float-start">


    <div class="position-absolute top-50 start-50 translate-middle">
        <h1>Iniciar sesión</h1>
        <form method="post" name="frm">
        <div class="input-group input-group-lg">
            <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            </span>
            <input type="email" class="form-control" name='correo' placeholder="correo@ejemplo.com">
        </div>
            </br>
        <div class="input-group input-group-lg">
            <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
            </span>
            <input type="password" class="form-control" name='contra' placeholder="contraseña123">
        </div> </br>
        <div class="d-grid gap-2">
            <input class="btn btn-outline-primary" href="index.php" type="submit" name="aceptar" value="Aceptar"/>
        </div>
        <input type="hidden" name="m" value="log"/>
</form>
    </div>
</body>
</html>