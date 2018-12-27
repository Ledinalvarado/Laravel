<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/12/2018
 * Time: 8:19 PM
 */

    class Persona{
        public $nombre='ledin';

        public function hablar($mensaje){
            echo $mensaje;

        }

    }
     $persona=new Persona();
     echo $persona->nombre;

     $persona->hablar("I'm Ledin");


    ?>

