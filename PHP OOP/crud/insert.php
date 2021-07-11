<?php
    include 'main.php';
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
                header('location:index.php?insert=success');
            }else{
                echo 'something went wrong';
            }

        }else{
            header('location:index.php?valid=error');
        }
    }else{
        header('location:index.php');
    }





?>