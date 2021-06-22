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

    // $cars = array('Volvo','BMW','Toyota');
    // $arrLength = count($cars);
    // for ($i=0; $i < $arrLength ; $i++) { 
    //    echo $cars[$i];
    //    echo '<br>';
    // }

    //Associative Arrays
    //$age = array("Sujon"=>"21", "Toukir"=>"22", "Alamin"=>"23");
    //echo "Sujon is " . $age['Sujon'] . " years old.";
    
    // Loop Thorough an Associative Array
    // $age = array("Sujon"=>"21", "Toukir"=>"22", "Alamin"=>"23");
    // foreach($age as $key => $val){
    //     echo "Key=" . $key . ", Value=" . $val;
    //     echo '<br>';
    // }



    // count() function
    //echo count($array);

    // $arr = [
    // ['rahim','karim','rasel'],
    // [1,2,3,4,5,6],
    // ['volvo']
    // ];

    //$arr[];
    // echo '<pre>';
    //     print_r($arr[][][]);
    // echo '<pre>';

    // array_key() use for see all key in a array
    // array_key_first() use for see first key in a array
    // array_key_last() use for see last key in a array
    //array_key_exists('key',$array) use for search key in a array
    //key_exists() use for search key in a array

    // $array = ['red','green','blue','brown'];

    // print_r(array_keys($array));

    // array_combine() function
    // $name = ['rahim','karim'];
    // $age = [20,25];

    // $newArray = array_combine($name,$age);

    // echo '<pre>';
    // print_r($newArray);
    // echo '</pre>';

    // array_marge() function
    /* $a = ['a'=>'sujon','b'=>'riman','c'=>'toukir'];
    $b = ['d'=>'alamin','sumon'];
    // array_merge() use for add two or many array
    $newArray = array_merge($a,$b);

    echo '<pre>';
    print_r($newArray);
    echo '</pre>'; */
    

    // array_merge_recursive() function
    /* $a = ['a'=>'sujon','b'=>'ahmed','c'=>'riman'];
    $b = ['b'=> ['color'=>['red','green']],'sumon'];

    // array_merge_recursive() use for add two or many multidimensional array
    // if have any common index or key it's make multidimensional array
    $newArray = array_merge_recursive($a,$b);

    echo '<pre>';
    print_r($newArray);
    echo '</pre>'; */

    





?>