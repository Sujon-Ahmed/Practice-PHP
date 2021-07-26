<?php
    include 'main.php';
    $obj = new Main();

    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $status = $obj->register($name,$email,$password);

        if($status == true){
            header("location:login.php");
        }else{
            header("location:register.php");
        }

    }else{
        header("location:register.php");
    }

?>