<?php namespace Models;
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 1/18/2019
 * Time: 6:33 PM
 */


class Conexion{
    private $datos= array(
        "host"=>"localhost",
        "user"=>"root",
        "password"=>"K17OACX",
        "db"=>"proyecto"
    );

    private $con;

    public function __construct()
    {
        $this->con=new \mysqli($this->datos['host'],
            $this->datos['user'],$this->datos['password'],
            $this->datos['db']);
    }
}


?>