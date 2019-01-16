<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 1/7/2019
 * Time: 6:47 PM
 */

abstract class index{
    abstract public function ingresarNombre($nombre);
    abstract public function obtenerNombre();
}

class Persona extends index{
    private $mensaje="hola ledin";
    private $nombre;
    public function mostrar(){
        print $this->mensaje;
    }

    public function ingresarNombre($nombre)
    {
        // TODO: Implement ingresarNombre() method.
        $this->nombre=$nombre;
    }

    public function obtenerNombre()
    {
        // TODO: Implement obtenerNombre() method.
        print $this->nombre;
    }
}


    $obj=new Persona();
    //$obj->mostrar();
    $obj->ingresarNombre("ledin");
    $obj->obtenerNombre();

?>