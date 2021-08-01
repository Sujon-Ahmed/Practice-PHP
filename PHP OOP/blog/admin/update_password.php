<?php
     session_start();
     include 'main.php';
     include 'flash_data.php';
     $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:change_password.php');
    }else{
        $id = $_SESSION['id'];
        $cur_pass = md5($_POST['cur_password']);
        $new_pass = md5($_POST['new_password']);   
        
        $id = $_SESSION['id'];
        $profile_data = $obj->profile_retrive($id);
        if($profile_data->num_rows > 0){
            while($row = $profile_data->fetch_object()){
                $db_pass = $row->user_password;
            }
            if($db_pass === $cur_pass){
                $status = $obj->change_pass($new_pass,$id);
                if($status == true){
                    Flash_data::success("Password Change Successfully.");
                    header('location:edit_profile.php');
                }else{
                    Flash_data::error("Some Went Wrong!");
                    header('location:change_password.php');
                }
            }else{
                Flash_data::error("Current Password Wrong!");
                header('location:change_password.php');
            }
        }
                 
    }

?>