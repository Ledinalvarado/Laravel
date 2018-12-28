<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 27/12/2018
 * Time: 6:55 PM
 */

    class Loteria{
        //atributos
        public $numeros;
        public $intentos;
        public $resultados= false;
        public $i=0;



        //metodos


        public function __construct($numeros,$intentos)
        {
            $this->numeros=$numeros;
            $this->intentos=$intentos;

        }

        public function sortear($i){

            $minimo=$this->numeros/2;
            $maximo=$this->numeros*2;
            $this->i=$i;


            for ($i;$i<$this->intentos;$i++){
                $intento=rand($minimo,$maximo);
                self::intentos($intento);

               // $this->intentos($intento);  //esto es equivalente a self::
            }
        }
        public function intentos($intento){
            if ($intento==$this->numeros){
                echo "<b>". $intento . " = ".$this->numeros. "</b><br>";
                $this->resultados=true;
            }else{
                echo $intento." !=  ". $this->numeros."<br>";
            }
        }

        public function __destruct()
        {
            if ($this->resultados){
                echo "FELICIDADES ,GANASTE LA PRIMERA EN EL INTENTO " . $this->i ." . ";
            }else{
                echo "OH OH, PERDISTE CON ". $this->intentos." INTENTOS";
            }

            // TODO: Implement __destruct() method.
        }
    }



    $loteria = new Loteria(3,5);
    $loteria->sortear(1);

?>