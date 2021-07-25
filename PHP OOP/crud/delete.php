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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
     <!-- toastr cdn link -->
     <link rel="stylesheet" href="css/toastr.css">
    <!-- responsive link -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- main link -->
    <link rel="stylesheet" href="css/main.css">

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/toastr.min.js"></script>
</head>
<body>
    
</body>
</html>