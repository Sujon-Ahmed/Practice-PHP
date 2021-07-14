<?php
    include 'main.php';
    $obj = new Main();
    include 'flash_data.php';
    session_start();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->details($id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()) {
                unlink('uploads/'.$row->photo);
                $status = $obj->delete($id);
                if($status == true){
                    Flash_data::success("Data Deleted SuccessFully");
                    header('location:show.php');
                }else{
                    Flash_data::error("Some Went Wrong.Please Try Again");
                    header('location:show.php');
                }
            }
        }
    }


?>