<?php
    session_start();
    include 'main.php';
    $obj = new Main();
    include 'flash_data.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->get_post_id($id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()) {
                unlink('uploads/posts/'.$row->post_thumbnail);
                $status = $obj->delete_post($id);
                if($status == true){
                    Flash_data::success("Post Deleted SuccessFully");
                    header('location:view_post.php');
                }else{
                    Flash_data::error("Some Went Wrong.Please Try Again");
                    header('location:view_post.php');
                }
            }
        }
    }


?>