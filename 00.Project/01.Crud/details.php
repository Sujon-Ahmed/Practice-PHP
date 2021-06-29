<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:login.php');
    }
    require 'connection.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM `simple` WHERE id = '$id'";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while ($row = $result->fetch_object()) {
                $id = $row->id;
                $name = $row->name;
                $email = $row->email;
                $phone = $row->phone;
                $district = $row->district;
                $gender = $row->gender;
                $hobby = $row->hobby;
                //$hobby = explode(',',$row->hobby);
                // print_r($hobby);
                $message = $row->message;
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
    <title>Edit page | Simple crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <!-- <h2 class="text-center text-capitalize mb-3">simple crud <a class="btn btn-primary btn-sm" href="show.php">Show</a></h2> -->
                <?php
                    if(isset($_GET['valid']) && $_GET['valid'] == 'error'){
                        ?>
                            <div class="alert alert-danger" role="alert">
                                All Field Are Required!
                            </div>
                        <?php
                    }
                
                ?>

                <?php
                    if(isset($_GET['update']) && $_GET['update'] == 'success'){
                        ?>
                            <div class="alert alert-success" role="alert">
                                SuccessFully Data Updated!
                            </div>
                        <?php
                    }
                
                ?>
                 <div class="modal-body">
                    <h3 class="text-center">Details Information <a href="show.php" class="btn btn-primary btn-sm">Show</a></h3>
                    <hr>
                    <div class="card shadow-sm m-auto" style="width: 50%;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Name : <?php echo $name; ?></strong></li>
                            <li class="list-group-item"><strong>Email : <?php echo $email; ?></strong></li>
                            <li class="list-group-item"><strong>Phone : <?php echo $phone; ?></strong></li>
                            <li class="list-group-item"><strong>District : <?php echo $district; ?></strong></li>
                            <li class="list-group-item"><strong>Gender : <?php echo $gender; ?></strong></li>
                            <li class="list-group-item"><strong>Hobby : <?php echo $hobby; ?></strong></li>
                            <li class="list-group-item"><strong>Message : </strong><i> <?php echo $message; ?></i></li>
                        </ul>
                </div>

            </div>
        </div>
    </div>
</body>
</html>