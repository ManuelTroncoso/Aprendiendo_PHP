<?php
include 'conexion_db.php';
session_start();

    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $dpto = $_POST['dpto'];
    $info = $_POST['info'];
    $con = mysqli_connect('localhost', 'root', '', 'usuarios') or die("La conexion no ha sido posible establecerla");
    $db = mysqli_select_db($con, 'usuarios') or die("La conexion no se ha podido establecer");
    $con->query("set names utf8");
    $sql = ("INSERT INTO Empleados(usuario, contraseña, departamento, datos)VALUES('$name', '$pass', '$dpto', '$info');");
    $consulta = $con->query($sql);
    echo $sql;
//     if (mysqli_query($con, $sql)) {
//         echo "New record created successfully";
//   } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($con);
//   }
//     mysqli_close($con);
// array_push($user, $name, $pass);
// $name = $_POST['texto'];
// $pass = $_POST['pass'];
// echo 'a'.$name;
// print_r( $user);
// $file = fopen("datos.txt", "w");
// fwrite($file, $user[0].[0,0]);
// fclose($file);

?>