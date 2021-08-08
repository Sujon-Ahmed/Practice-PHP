<?php
    session_start();
    include 'main.php';
    include 'flash_data.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:add_image.php');
    }
        if(!empty($_FILES['file']['name'])){
            // print_r($_FILES['file']);
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES["file"]["tmp_name"];
            $fileExt = explode(".",$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');

            if(in_array($fileActualExt,$allowed)){
                $fileError = $_FILES["file"]["error"];
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = "uploads/gallery/".$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){

                        $status = $obj->add_image($fileNewName);

                        if($status == true){
                            Flash_data::success("Image Add SuccessFully");
                            header('location:add_image.php');
                        }else{
                            Flash_data::error("Something Went Wrong!");
                            header('location:add_image.php');
                        }
                    }

                }else{
                    Flash_data::error("File Error!");
                    header('location:add_image.php');
                }
            }else{
                Flash_data::error("This Type of File Ext Not Allowed!");
                header('location:add_image.php');
            }

        }else{
            Flash_data::error("Please Select an Image!");
            header('location:add_image.php');
        }

?>