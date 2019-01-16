<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 1/15/2019
 * Time: 10:40 AM
 */




    function autoload($clase){
        include "clases/".$clase.".php";



    }

    spl_autoload_register("autoload");

    Persona::mostrar("Hola Ledin");
    Auto::mostrar("Hola Ledin");
?>