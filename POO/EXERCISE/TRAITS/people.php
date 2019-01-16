<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 1/15/2019
 * Time: 6:01 PM
 */
require 'index.php';
class people {
    use Persona;
    public function asignarNombre($nombre)
    {
        // TODO: Implement asignarNombre() method.
        $this->nombre=$nombre;
    }


}

$persona=new people();
$persona->asignarNombre("ledin");
echo $persona->nombre;

?>