<?php

session_start();


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
   
    <h1>Acabas de iniciar sesión como: <?php echo $_SESSION["nombre_user"];
 ?></h1>

    <a href="Cerrar_sesion.php">Cerrar sesion</a>
   
</body>
</html>