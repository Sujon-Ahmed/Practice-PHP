<?php
    // PHP Constants case-sensitive
    //define("GREETING","Welcome to this page!");
    //echo GREETING;

    // PHP Constants case-insensitive
    //define("Greeting", "Hello There!",true);
    //echo greeting;

    // PHP constants array
    //define("cars",['BMW','TOYOTA','Rose-Royal','Ferrari']);
    //echo cars[1];

    // Constants are global
    define("GREETING", "Welcome to our universe",true);
    function myFun(){
        echo GREETING;
    }
    myFun();
?>