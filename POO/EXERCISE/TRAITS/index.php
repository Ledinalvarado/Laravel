<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 1/15/2019
 * Time: 4:42 PM
 */

    trait Persona{
    //puede contener atributo,metodos

        public $nombre;


        public function mostrarNombre(){
            echo $this->nombre;
        }

        abstract function asignarNombre($nombre);


    }




?>