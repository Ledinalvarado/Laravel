<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 12/27/2018
 * Time: 3:19 PM
 */


class myclass {
    // constructor
    function __construct()
    {
        return(true);
    }

    // method 1
    function myfunc1()
    {
        return(true);
    }

    // method 2
    function myfunc2()
    {
        return(true);
    }
}

$class_methods = get_class_methods('myclass');
foreach ($class_methods as $method_name){
    echo "$method_name"."  ";
}

//OR

//$class_methods = get_class_methods(new myclass());
//
//foreach ($class_methods as $method_name) {
//    echo "$method_name\n";
//}