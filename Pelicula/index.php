<?php
    class Pelicula{
    //Atributos
        public $name;
        //$date;
        //$director
        //$price;
        //$renting = false;
        public $date_of_delivery;
        public $surcharge;
    // Constructor
        function __construct($name, $date_of_delivery, $surcharge /*$date, $directo, $price, $renting, */ ){
            $this->name = $name;
            // $this->date = $date;
            // $this->director = $director:
            // $this->price =$price;
            // $this->renting = $renting;
            $this->date_of_delivery = $date_of_delivery;
            $this->surchange = $surcharge;
        }
    //Métodos
        //Para enviar el nombre al usuario cuando lo pida.
        public function getName(){
            return $this->name;
        }
        //Para cambiar el nombre de la pelicula cuando el usuario quiera.
        public function setName($name){
            $this->name = $name;
        }
              //Hacer los demás atributos.
        public function getSurchange(){
            return $this->surchange;
        }
        public function setSurchange(){
            $this->surchange = $surcharge;
        }
        public function getDate_of_delivery(){
            return $this->date_of_delivery;
        }
        public function setDate_of_delivery(){
            $this->date_of_delivery = $date_of_delivery;
        }
        //funciones

        public function CalcSurchange(){
            $datetime1 = new DateTime();
            $datetime2 = new DateTime($this->getDate_of_delivery());
            $inteval = $datetime1->diff($datetime2);

            // Sin el format no escribe nada y por lo tanto no funciona y da error. !OJO!                           
            echo $inteval->format('%a');
           

        }


    }

    $film = new Pelicula('Lo que el viento se llevo',date("Y-m-d", strtotime("2011-12-17")), 1);
    $film->CalcSurchange();


?>