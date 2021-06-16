<?php
    /*
    $txt = "Hello World!";
    $x = 4;
    $y = 5; 
    */

    // Output Variables
    $greeting = "Hi, ";
    echo $greeting." Sujon Ahmed <br>";

    $x = 10;
    $y = 20;
    $sum = $x + $y;
    echo "The Summation is : ".$sum;

    $a = 5; // global scope
    function myTest(){
        //using a inside this function will generate an error
       // echo "<p>Variable a inside function is: $a</p>";
    }
    myTest();
    echo "<p>Variable a outside function is: $a</p>";
?>