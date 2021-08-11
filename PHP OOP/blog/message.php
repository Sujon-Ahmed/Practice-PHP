<?php
    session_start();
    include 'admin/flash_data.php';
    include 'admin/main.php';
    $obj = new Main();

    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        if($name != '' && $email != '' && $msg != '') {
            $status = $obj->messenger($name,$email,$msg);

            if($status == true){
                Flash_data::success("Successful");
                header('location:contact.php');
            }
        }
    }

        

        

?>