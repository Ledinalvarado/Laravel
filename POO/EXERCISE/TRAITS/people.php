<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 1/15/2019
 * Time: 6:01 PM
 */
require 'index.php';

class One{
    use Simple;
}

$uno=new One();
echo $uno->className();


?>