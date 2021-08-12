<?php
    session_start();
    include 'main.php';
    $obj = new Main();
    include 'flash_data.php';

    if(isset($_GET['id'])){
        $message_id = $_GET['id'];
        $result = $obj->get_single_message($message_id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()) {
                $status = $obj->delete_message($message_id);
                if($status == true){
                    Flash_data::success("Message Deleted SuccessFully");
                    header('location:view_message.php');
                }else{
                    Flash_data::error("Some Went Wrong.Please Try Again");
                    header('location:view_message.php');
                }
            }
        }
    }


?>