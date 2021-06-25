<?php
    require 'connection.php';

    $sql = "SELECT * FROM `simple`";

    $result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page | Simple crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center text-capitalize mb-3">simple crud <a href="index.php" class="btn btn-primary btn-sm">Insert</a></h2>
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
                    if(isset($_GET['del']) && $_GET['del'] == 'success'){
                        ?>
                            <div class="alert alert-danger" role="alert">
                                SuccessFully Data Deleted!
                            </div>
                        <?php
                    }
                
                ?>
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>District</th>
                            <th>Gender</th>
                            <th>Hobby</th>
                            <th>Message</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($result->num_rows > 0) {
                                while($row = $result->fetch_object()){
                                    ?>
                                        <tr>
                                            <td><?php echo $row->ID; ?></td>
                                            <td><?php echo $row->Name; ?></td>
                                            <td><?php echo $row->Email; ?></td>
                                            <td><?php echo $row->Phone; ?></td>
                                            <td><?php echo $row->District; ?></td>
                                            <td><?php echo $row->Gender; ?></td>
                                            <td><?php echo $row->Hobby; ?></td>
                                            <td><?php echo $row->Message; ?></td>
                                            <td><?php echo date('M-d-Y h:i A', strtotime($row->TIme_at)); ?></td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Update</a>
                                                <a onclick="javascript:return confirm('Are You Sure? Permanently Delete This Record.')" href="delete.php?ID=<?php echo $row->ID;?>" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>