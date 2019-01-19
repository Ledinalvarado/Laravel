<?php
/**
 * Created by PhpStorm.
 * User: ledin
 * Date: 1/15/2019
 * Time: 4:42 PM
 */

trait Simple
{
    public function className()
    {
        // This prints file full path and name
        echo "This file full path and file name is '" . __FILE__ . "'.\n".'<br>';

        // This prints file full path, without file name
        echo "This file full path is '" . __DIR__ . "'.\n".'<br>';

        // This prints current line number on file
        echo "This is line number " . __LINE__ . ".\n"."<br>";

        // Really simple basic test function
//        function test_function_magic_constant() {
//            echo "This is from '" . __FUNCTION__ . "' function.\n";
//        }






        return __CLASS__."<br>";

    }

}



class Two
{
    use Simple;
}


$two = new Two();
//echo $two->className();
echo $two->className()
?>