<?php

    // speed in kmph
    $speed = 80;
    if($speed <= 0){
        echo "Your Car is Stop";
    }
    elseif($speed < 60)
    {
        echo "Safe driving speed";
    }
    elseif($speed > 60 && $speed < 100)
    {
        echo "You are burning extra fuel";
    }
    else 
    {
        // when speed is greater than 100
        echo "Its dangerous";
    }

?>