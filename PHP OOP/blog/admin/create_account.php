<?php
    session_start();
    include 'link.php';
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
        function input_test($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $name = input_test($_POST['name']);
        $email = input_test($_POST['email']);
        $password = md5($_POST['password']);

        if($name != '' && $email != '' && $password != '') {
            $status = $obj->register($name,$email,$password);

            if($status == true){
                Flash_data::success("Data Inserted SuccessFully");
                header("location:login.php");
            }else{
                Flash_data::error("Some Went Wrong.Please Try Again");
                header("location:register.php");
            }
        }else{
            Flash_data::error("All Felid Are Required!");
            header("location:register.php");
        }   
    }else{
        header("location:register.php");
    }

        

        

?>