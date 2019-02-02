<?php
    class Persona{
        //Atributos 
        public $nombre = 'Pedro';
        //Métodos
        public function hablar ($mensaje) {
            echo $mensaje;

        }
    }

    $persona = new Persona();
    echo $persona -> nombre;
    $persona -> hablar('<br> Prueba de métodos')
?> 