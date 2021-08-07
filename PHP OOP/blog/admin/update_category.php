<?php
     session_start();
     include 'main.php';
     include 'flash_data.php';
     $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:view_category.php');
    }else{
        $cat_id = $_POST['cat_id'];
        $cat_icon = $_POST['cat_icon'];
        $cat_name = $_POST['cat_name'];   

        if(trim($cat_icon) == '' || trim($cat_name) == ''){
            Flash_data::error("All Field Are Required");
            header('location:edit_category.php?id='.$cat_id);
        }else{
            $status = $obj->update_category($cat_icon,$cat_name,$cat_id );

            if($status == true){
                Flash_data::success("Update Category Successfully.");
                header('location:view_category.php');
            }else{
                Flash_data::error("Some Went Wrong!");
                header('location:add_category.php');
            }
        }            
    }

?>