<?php
// Esta funcion recibe dos numeros y un signo y devuelve 
// un entero, sino es así da un error
function operaciones( int $n1, int $n2, string $signo):int{
    $res= 0;
    if($signo == 'Sumar'){
        $res = $n1 + $n2;
    }
    else{
        if($signo == 'Restar'){
            $res = $n1-$n2;
        }
        else{
            $res = 0; 
            echo 'Operación no disponible';
            
        }
    }
    return $res;
}
echo operaciones(6,5,54)

?>
<br>
<?php
function RecibeDatos($name, $surname, $age){
    echo 'Mi nombre es '.$name ,$surname.'y tengo '.$age; 
}
$datos = array("Dog","Cat","Horse");
list($name, $apellido, $age) = $datos;
echo $name;
?>
