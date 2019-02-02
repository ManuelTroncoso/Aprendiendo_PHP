<?php
function Connect_DB(){
    $con = mysqli_connect('localhost', 'root', '', 'usuarios') or die("La conexion no ha sido posible establecerla");
    //$db = mysqli_select_db($con, 'usuarios') or die("La conexion no se ha podido establecer");
    $con->query("set names utf8");
    $consulta = $con->query( "select * from Empleados;");
    $datos =$consulta->fetch_all(MYSQLI_ASSOC);
    return $datos;
}

if($_POST['ajax'] == 'yes') {
$con = mysqli_connect('localhost', 'root', '', 'usuarios') or die("La conexion no ha sido posible establecerla");
//$db = mysqli_select_db($con, 'usuarios') or die("La conexion no se ha podido establecer");
$con->query("set names utf8");
$consulta = $con->query( "select * from Empleados;");
$datos =$consulta->fetch_all(MYSQLI_ASSOC);
echo json_encode($datos);
}
?>