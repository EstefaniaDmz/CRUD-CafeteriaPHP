<?php
if(!isset($_SESSION['idU'])){
    header('Location: ../index.php');
    exit;
} else
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetería</title>
    <link href="../css/bootstrap.css" rel="stylesheet"/>
    <ul class="nav justify-content-end"> 
        <li class="nav-item"><a class="nav-link" href="javascript:history.back()">Regresar</a>
        <li class="nav-item"><a class="nav-link" href='javascript:window.open("../modelo/principal.php","_self")'>Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="../index.php">Cerrar sesión</a></li> 
    </ul>
</head>
<body>
   <div class="panel">
    
