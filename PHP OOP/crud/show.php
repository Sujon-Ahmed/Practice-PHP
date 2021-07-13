<?php
    include 'links.php';
    include 'main.php';
    session_start();
    include 'flash_data.php';

    $obj = new Main();
    $result = $obj->showData();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show page | Simple crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="css/plugins.css"> -->
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12">
                <h2 class="text-center text-capitalize mb-3">simple crud <a href="index.php" class="btn btn-primary btn-sm">Insert</a></h2>

                <table id="data_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SI</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created_At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($result->num_rows > 0) {
                                while($row = $result->fetch_object()) {
                                    ?>

                                    <tr>
                                        <td><?php echo $row->id; ?></td>
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo date('M-d-Y h:i A',strtotime($row->created_at)); ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row->id;?>" class="btn btn-primary btn-sm">Update</a>
                                            <a href="details.php?id=<?php echo $row->id;?>" class="btn btn-success btn-sm">View</a>
                                            <a onclick="javascript:return confirm('Are you sure, delete this record?')" href="delete.php?id=<?php echo $row->id;?>" class="btn btn-danger btn-sm">Delete</a>
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
   <!-- script here -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script> 
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script>
        function daTaTable() {
            $('#data_table').DataTable();
        };
        daTaTable();
    </script>                        
</body>
</html>