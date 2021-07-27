<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $status_check = $obj->check_email($email);

        if($status_check->num_rows > 0) {
           while($row = $status_check->fetch_object()){
               $id = $row->user_id;
               $name = $row->user_name;
               $db_pass = $row->user_password;
            }
            if($password === $db_pass){
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                header("location:index.php");
            }else{
                Flash_data::error("Invalid Email or Password");
                header("location:login.php");
            }

            // if($status == true){
            //     Flash_data::success("Account Created Success! Please Login!");
            //     header("location:login.php");
            // }else{
            //     Flash_data::error("Provide a valid or unique Email");
            //     header("location:register.php");
            // }
        }else{
            Flash_data::error("Invalid Email or Password");
            header("location:login.php");
        }   
    }else{
        header("location:register.php");
    }

        

        

?>