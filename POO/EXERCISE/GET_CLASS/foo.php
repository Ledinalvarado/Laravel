<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 12/27/2018
 * Time: 3:44 PM
 */

class foo {

    function name()
    {
        echo "  //// My name is    " , get_class($this) , "\n"."and  I'm came from inside 'name' method   ";
    }
}

// create an object
$bar = new foo();

// external call
echo "Its name is      " , get_class($bar) , "\n"."     ";

// internal call
$bar->name();

?>