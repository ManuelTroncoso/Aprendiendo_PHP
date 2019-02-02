<?php
//implode sirve par mostrar datos de un arrray separados por algun caracter que se le añada
$array_equipo = array('portero', 'laterales', 'centrales', 'mediocentros', 'interiores', 'delanteros');
 
$cadena_equipo = implode(";", $array_equipo);
echo "El equipo separaro por ';' es el siguiente: " .$cadena_equipo;
 
$cadena_equipo2 = implode(" ",$array_equipo);
echo "<br><br>El equipo sin parámetro string es el siguiente: " .$cadena_equipo2;
?>
<?php
//Var_dump me muestra el tipo de dato que es lo que hay dentro de un array.
$a = array(1, 2, array("a", "b", "c",5));
var_dump($a);
?>
 