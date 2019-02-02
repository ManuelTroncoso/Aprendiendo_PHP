<?php
    class Persona  {
        //Atributos
        public $nombre =array();
        public $apellido =array();
        //Metodos
        public function guardar($nombre, $apellido){
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;

        }
        public function mostrar() {
             for($i = 0;$i<count($this->nombre);$i++){
                //echo $this->nombre[$i]."<br>";
                // $this->formato($this->nombre[$i], $this->apellido[$i]);
                self::formato($this->nombre[$i], $this->apellido[$i]);
             }

        }
        public function formato($nombre, $apellido)
        {
            echo "Name: ".$nombre.'<br>';    
        }
    }
    $persona = new Persona();
    $persona->guardar("Carlos", "Fernandez");
    $persona-> guardar("Manuel","Troncoso"); 
    $persona->mostrar();

?>