<?php

    //array declare
    //1. $array = array();
    //2. $array = [];

    // create and call array
    //$array = array('hi','hello','hola');
    // echo "<pre>";
    // print_r($array);
    // echo "</pre>";

    // array insert
    //echo $arr[1] = 45;

    // PHP Indexed Array
    // $cars = array('Volvo','BMW','Toyota');
    // echo "I like ".$cars[0]. ' , '. $cars[1]. ' and ', $cars[2];

    $cars = array('Volvo','BMW','Toyota');
    $arrLength = count($cars);
    for ($i=0; $i < $arrLength ; $i++) { 
       echo $cars[$i];
       echo '<br>';
    }



    // count() function
    //echo count($array);




?>