<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 12/28/2018
 * Time: 4:38 PM
 */

class Vehiculo
{
    public $motor=false;
    public $marca;
    public $color;

    public function estado(){
        if ($this->motor){
            echo "el motor esta encendido"."<br>";
        }else{
            echo "el motor esta apagado"."<br>";
        }
    }

    public function encender(){
        if ($this->motor){
            echo "El motor ya esta encendido"."<br>";
        }else{
            echo "el motor ahora esta encendido"."<br>";
            $this->motor=true;

        }
    }

}

//    $vehiculo=new Vehiculo();
//    $vehiculo->estado();
//    $vehiculo->encender();




//class moto extends Vehiculo{
//
//}
//$motoci=new Vehiculo();
//$motoci->estado();