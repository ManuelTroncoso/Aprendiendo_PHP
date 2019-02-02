<?php
    class Loteria
    {
        //Atributos
        public $numero;
        public $intentos;
        public $resultado = false;

        //Metodos
        public function __construct($numero, $intentos)
        {
            $this->numero = $numero;
            $this->intentos = $intentos;
        }

        public function sortear()
        {
            $min = $this->numero / 2;
            $max = $this->numero * 2;

            for ($i = 0; $i < $this->intentos; $i++) {
                $int = rand($min, $max);
                self::intentos($int);
            }
        }

        public function intentos($int)
        {
            if ($int == $this->numero) {
                echo "Acierto!!<br>";
                $this->resultado = true;
            } else {
                echo "Error,  prueba otra vez <br>";
            }

        }

        public function __destruct()
        {
            if ($this->resultado) {
                echo "Has acertado en ".$this->intentos.'<br>';
            } else {
                echo "Has perdido en ".$this->intentos.'<br>';
            }
        }
    }

        $loteria = new Loteria(10,11);
$loteria->sortear();

?>

