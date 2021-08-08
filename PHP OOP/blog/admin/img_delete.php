<?php
    session_start();
    include 'main.php';
    $obj = new Main();
    include 'flash_data.php';

    if(isset($_GET['id'])){
        $img_id = $_GET['id'];
        $result = $obj->get_img_id($img_id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()) {
                unlink('uploads/gallery/'.$row->gal_image);
                $status = $obj->delete_gal_img($img_id);
                if($status == true){
                    Flash_data::success("Image Deleted SuccessFully");
                    header('location:view_image.php');
                }else{
                    Flash_data::error("Some Went Wrong.Please Try Again");
                    header('location:view_image.php');
                }
            }
        }
    }


?>