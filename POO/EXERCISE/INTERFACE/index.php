<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 1/7/2019
 * Time: 5:19 PM
 */

interface Auto
{
    public function encender();
    public function apagar();
}

interface gasolina extends Auto {
    public function vaciarTanque();
    public function llenarTanque($cantidad);

}


class Deportivo implements gasolina{



//    public function ver(){
//        echo "hola";
//    }


    private $estado=false;
    private $tanque=0;

    public function estado(){
        if ($this->estado){
            print "el auto esta encendido";
        }else{
            print "el auto esta apagado";
        }
    }

    public function vaciarTanque()
    {
        // TODO: Implement vaciarTanque() method.
        $this->tanque=0;
    }

    public function llenarTanque($cantidad)
    {
        // TODO: Implement llenarTanque() method.
        $this->tanque->$cantidad;
    }



    public function encender()
    {
        // TODO: Implement encender() method.

        if ($this->estado){
            print "no puedes encender el auto 2 veces";
        }else{
            print "Auto encendido";
            $this->estado=true;
        }

    }

    public function apagar()
    {
        // TODO: Implement apagar() method.

        if ($this->estado){
            print "el auto esta apagado";
            $this->estado=false;
        }else{
            print "el auto ya esta apgado";
        }
    }
}

$objeto =new Deportivo();
$objeto->estado();

?>