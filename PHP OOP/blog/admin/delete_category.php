<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $result = $obj->get_cat($id);
        if($result->num_rows > 0){
            while($cat_row = $result->fetch_object()){
                $status = $obj->delete_category($id);

                if($status == true){
                    Flash_data::success("Category Deleted SuccessFully");
                    header('location:view_category.php');
                }else{
                    Flash_data::error("Some Went Wrong.Please Try Again");
                    header('location:view_category.php');
                }
            }
        }
    }


?>