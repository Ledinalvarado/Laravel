<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 1/16/2019
 * Time: 8:11 PM
 */


require "CONTROLLERS/PersonaController.php";
include "MODELS/Persona.php" ;

use MODELS as saludoModel; //esto es un como un alias que se puede usar en ciertas situaciones.
use CONTROLLERS as saludoController;

saludoModel\Persona::saludo();
saludoController\PersonaController::saludo();
//CONTROLLERS\PersonaController::saludo();
//MODELS\Persona::saludo();


?>