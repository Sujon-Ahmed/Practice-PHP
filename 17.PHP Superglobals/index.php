<?php

    $x = 75;
    $y = 45;

    function addition(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
   addition();
   echo $z;


?>