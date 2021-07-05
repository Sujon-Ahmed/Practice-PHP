<?php
    include 'main.php';

    $obj = new Main();

    
    // $name = "Sujon Ahmed";
    // $email = "sujonahmed5284@gmail.com";
    // $obj->insert($name,$email);
    $del = $obj->delete();

    if($del == false) {
        echo 'delete success <br>';
    }
    else{
        echo 'error <br>';
    }


?>