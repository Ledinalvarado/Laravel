<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 12/28/2018
 * Time: 4:56 PM
 */
include "Vehiculo.php";

class Motocicleta extends Vehiculo
{

}

$moto=new Motocicleta();
$moto->estado();
$moto->encender();