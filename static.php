<?php
class Pagina{
    //Atributo
    public $nombre = 'Codigo facilito';
    public static $url = 'www.codigofacilito.com';

    //Métodos
    public function bienvenda()
    {
        //Con this no funcina pero sin embargo con 'self::'  o 'Pagina' funciona perfectamente
        //echo "Bienvenido a ".$this->nombre."la pagina es " .$this->url;
        echo "Bienvenido a ".$this->nombre."la pagina es " .self::$url.'<br>';
        echo "Bienvenido a ".$this->nombre."la pagina es " .Pagina::$url;
    }
    public static function bienvenda2() {
        //Con this no funciona desde los metodos estaticos
        //echo 'Bienvenidos a '.$this->url;
        echo 'Bienvenidos a '.self::$url;
        //A un atributo no estatico no se puede acceder.
    }

}


class Web extends Pagina{
        
} 
    // $pagina = new Pagina();
    // $pagina->bienvenda();
    Pagina::bienvenda2();
?>