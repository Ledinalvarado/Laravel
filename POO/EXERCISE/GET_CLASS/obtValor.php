<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 12/27/2018
 * Time: 4:35 PM
 */



abstract class obtValor  {

    public function __construct()
    {
        var_dump(get_class($this));
        var_dump(get_class());
    }
}


class foo extends obtValor{

}
new foo();

?>