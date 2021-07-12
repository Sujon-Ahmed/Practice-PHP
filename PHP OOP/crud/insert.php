<?php
    include 'main.php';
    include 'flash_data.php';
    session_start();
    $obj = new Main();
    
    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST"){
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        // $created_by = $_POST['created_by'];
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $district = $_POST['district'];
        $gender = $_POST['gender'];
        $hobby = ($_POST['hobby'])?implode(',',$_POST['hobby']):'';
        $message = test_input($_POST['message']);

        if($name != '' && $email != '' && $phone != '' && $district != '' && $gender != '' && $hobby != '' && $message != ''){
           
            $status = $obj->insert($name,$email,$phone,$district,$gender,$hobby,$message);

            if($status == true){
                Flash_data::success("Data Inserted SuccessFully");
                header('location:index.php');
            }else{
                Flash_data::error("Some Went Wrong.Please Try Again");
                header('location:index.php');
            }

        }else{
            Flash_data::error("All Felid Are Required!");
            header('location:index.php');
        }
    }else{
        header('location:index.php');
    }





?>