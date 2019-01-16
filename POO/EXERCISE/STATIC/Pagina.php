<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 12/29/2018
 * Time: 7:44 PM
 */

class Pagina
{

    public $nombre="Ledin";//No puede ser accedido por un metodo static
    public static $url="www.ledin.com";//un atributo static puede ser accesido por un metodo NO STATIC, pero solo a traves de self::$nombreVariable


    public function bienvenido(){
       // echo "Bienvenido a ".$this->nombre."  ".self::$url;
        //o
        echo "Bienvenido a "." <b> $this->nombre </b> "."  con URL: ".Pagina::$url;
    }


    public static function bienvenida2(){
        //        echo "Bienvenidos a : ".$this->nombre;//no se puede acceder a los atributos de la clase
        echo "Bienvenido a ".self::$url;//al atributo $url podemos acceder porque es static
    }

}

$pagina=new Pagina();
$pagina->bienvenido();


//Pagina::bienvenida2();//esto generara un error porque estamos tratando de acceder a un atributo desde un metodo static ////tambien esta es una nueva manera de acceder a un metodo sin necesidad de crear una instancia de la clase



class Web extends Pagina{

}

Web::bienvenida2();
