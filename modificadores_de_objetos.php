<?php
    class Facebook{

        //Atributo 
        public $nombre;
        public $edad;
        private $pass; //Contraseña

        //Método
        public function __construct($nombre, $edad, $pass){
            $this->nombre = $nombre;
            $this ->edad = $edad;
            $this ->pass = $pass;
        }
        public function verInformacion(){
            echo "Name: ". $this->nombre.'<br>';
            echo "Age: ". $this->edad.'<br>';
            self:: changePass("4321");
            echo "Password: ". $this->pass.""; 
        }
        private function changePass($pass){
            $this->pass = $pass;
        } 
    }
    $facebook = new Facebook("Carlos", 20, "1234");
    $facebook->verInformacion();
?>