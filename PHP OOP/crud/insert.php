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

            if(!empty($_FILES['file']['name'])){
                // print_r($_FILES['file]);
                $fileName = $_FILES['file']['name'];
                $fileTmp = $_FILES['file']['tmp_name'];
                $fileExt = explode('.',$fileName);
                $fileActualExt = strtolower(end($fileExt));
                $allowed = array('jpg','jpeg','png');

                if(in_array($fileActualExt,$allowed)){
                    $fileError = $_FILES['file']['error'];
                    if($fileError == 0){
                        $fileNewName = uniqid('',true).'.'.$fileActualExt;
                        $fileDestination = "uploads/".$fileNewName;
                        if(move_uploaded_file($fileTmp,$fileDestination)){

                             $status = $obj->insert($fileNewName,$name,$email,$phone,$district,$gender,$hobby,$message);
                            if($status == true){
                                Flash_data::success("Data Inserted SuccessFully");
                                header('location:index.php');
                            }else{
                                Flash_data::error("Some Went Wrong.Please Try Again");
                                header('location:index.php');
                            }
                        }
                    }else{
                        Flash_data::error("File Error!");
                        header('location:index.php');
                    }
                }else{
                    Flash_data::error("This Type of File Ext Not Allowed!");
                    header('location:index.php');
                }
            }

        }else{
            Flash_data::error("All Felid Are Required!");
            header('location:index.php');
        }
    }else{
        header('location:index.php');
    }

?>