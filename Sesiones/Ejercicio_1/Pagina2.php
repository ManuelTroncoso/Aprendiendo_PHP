<?php 
include 'conexion_db.php';
session_start();
$name = $_POST['texto'];

$pass = $_POST['pass'];

$datos = Connect_DB();

for($i = 0; $i<count($datos);$i++){
    if(array_search($name,$datos[$i])!=""){
      if(array_search($pass, $datos[$i])!= ""){
          
            header("Location:User.php");
            $_SESSION["nombre_user"] = $name;
      }
    }
    
}

echo 'Usted no tiene acceso';
echo '<a href="registro.html"> Registrate aquí</a>';
die();


// if($key != ""){
    
// }
// else 
// if($key === 0){
//     $_SESSION["nombre_user"] = $name;
//     header("Location:admin.php");
// }
// else{
//     $_SESSION["nombre_user"] = $name;
//     echo "Usted no tiene acceso";
//     die();
// }

?>