<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 12/28/2018
 * Time: 1:04 PM
 */


    class Facebook{
//        atributos
    public $nombre;
    public $edad;
    private $pass;


//         metodos

    public function __construct($nombre,$edad,$pass)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->pass=$pass;

    }


    public function verInformacion(){
        echo "Nombre: ".$this->nombre."<br>";
        echo "Edad: ".$this->edad."<br>";

        //en este ciclo busco mostrar la password mas actual es decir, si no esta seteada la nueva password que muestre la antigua, en caso contrario que muestre la nueva
        if (!isset($this->pass)){
            echo "Password: ".$this->pass."<br>";

        }else{


            self::cambiarPass("123456789");
            echo "PASSWORD: ".$this->pass;

        }


    }

    private function cambiarPass($pass){
         $this->pass=$pass;

    }


}

    $facebook=new Facebook("Ledin",21,"12344654");
//    echo $facebook->pass;//en este caso no sera posible acceder a la propiedad pass, puesto que un objeto de instancia no puede acceder a una propiedad private
//    echo $facebook->nombre;//en este caso si sera posible acceder a la ropiedad nombre puesto que es public



    $facebook->verInformacion();


?>