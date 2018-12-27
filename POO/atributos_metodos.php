<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/12/2018
 * Time: 8:51 PM
 */

    class Persona{
        public $nombre = array();
        public $apellido = array();

        public $cantidadNombre;

        public function guardar($nombre,$apellido){
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;
            $this->cantidadNombre=count($this->nombre);
        }

        public function mostrar(){
            if (!empty($this->cantidadNombre)) {
                for ($i=0 ; $i<$this->cantidadNombre;$i++){
                    self::formato($this->nombre[$i],$this->apellido[$i]);
                }
            }else{
                echo "esta vacia";

            }


        }

        public function formato($nombre,$apellido){
            echo "Nombre: ".$nombre." / Apellido: ".$apellido."<br>";

        }
    }


    $objPersona=new Persona();
//    $objPersona->guardar("Ledin","Alvarado");
    $objPersona->guardar("Gustavo","Barahona");
    $objPersona->mostrar();




?>