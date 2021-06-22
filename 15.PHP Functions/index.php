<?php

    // function writeMsg(){
    //     echo "Hello There!";
    // }
    // writeMsg(); // call the function

    //Function Arguments
    // function friendsName($firstName){
    //     echo "$firstName Ahmed <br>";
    // }
    // friendsName('Sujon');
    // friendsName('Toukir');
    // friendsName('Alamin');

    // more example
    // function familyName($fname, $year) {
    //     echo "$fname Miah. Born in $year <br>";
    //   }
      
    //   familyName("Nur","1924");
    //   familyName("Lal","1975");
    //   familyName("Sujon","2000");

    // strict requirement
    declare(strict_types=1);
    function addNumbers(int $a, int $b){
        $c = $a + $b;
        return $c;
    }
    echo addNumbers(10,10);


?>