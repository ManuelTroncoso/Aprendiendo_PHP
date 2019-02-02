<?php
session_start();
$varsesion=  $_SESSION["nombre_user"];
if($varsesion != null || $varsesion != "") {
    echo  'Tienes una sesión abierta como '.$_SESSION["nombre_user"];
    echo '<br>¿Quieres cerrar sesión? <br> <a href="Cerrar_sesion.php">Si</a>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="Pagina2.php" method="post">
    Escriba el texto <br><br>
     
    Usuario: <input type="text" name="texto" id="texto" value=""> <br>
    Contraseña: <input type="password" name="pass" id="pass">
    <br>
    <br>
    <input type="submit" value="Iniciar sesión"> <br>
    ¿No tienes cuenta aun?<a href="registro.html">Resgistrarse</a>
    </form>
</body>
</html>