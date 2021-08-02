<?php
     session_start();
     include 'main.php';
     include 'flash_data.php';
     $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:add_category.php');
    }else{

        $cat_icon = $_POST['cat_icon'];
        $cat_name = $_POST['cat_name'];   

        $status = $obj->create_category($cat_icon,$cat_name);

        if($status == true){
            Flash_data::success("Create Category Successfully.");
            header('location:view_category.php');
        }else{
            Flash_data::error("Some Went Wrong!");
            header('location:add_category.php');
        }
        
                 
    }

?>