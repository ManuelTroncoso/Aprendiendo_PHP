<?php
    class Vehiculo{
        //Atributos
        public $motor = false;
        public $marca;
        public $color;

        //Metodos
        // protected function estado(){
        public function estado(){
            if($this->motor){
                echo 'El motor esta encendido <br>';
            }else{
                echo 'El motor esta apagado <br>';
            }
        }
        public function encender(){
            if($this->motor){
                echo 'El motor ya esta encendido <br>';
            }
            else{
                $this->motor = true;
                echo "el motor esta encendiendose <br>";
            }
        }
    }

    //Moto hereda de vehiculo
    class Moto extends Vehiculo{
        public function estadoMoto(){
            $this->estado();
        }
        //Un metodo protected puede ser llamado de una clase diferente con herencia 
        //pero no puede ser llamado desde fuera de esta. Sin embargo un metodo private 
        //No puede ser llamado desde ningun sitio.
    }

    //Cuatrimoto hereda de moto y hereda de vehiculo.
    class Cuatrimoto extends Moto{

    }
    $vehiculo =  new CuatriMoto();
    $vehiculo->estado();
    $vehiculo->encender();
    $vehiculo->estado();
?>