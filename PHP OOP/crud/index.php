<?php
    session_start();
    include 'links.php';
    include 'flash_data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page | Simple crud</title>
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
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center text-capitalize mb-3">simple crud <a class="btn btn-primary btn-sm" href="show.php">Show</a></h2>
                <?php
                if(isset($_SESSION['msg']['error'])){
                    ?>
                        <script type="text/javascript">
                            toastr.error("<?php echo Flash_data::show_error();?>");
                        </script>
                    <?php 
                    }
                ?>

                <?php
                if(isset($_SESSION['msg']['success'])){
                    ?>
                        <script type="text/javascript">
                            toastr.success("<?php echo Flash_data::show_error();?>");
                        </script>
                    <?php 
                    }
                ?>
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="name">Enter Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col">
                            <label for="email">Enter Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="phone">Enter phone</label>
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter phone Number">
                        </div>
                        <div class="col">
                            <label for="district">Select District</label>
                            <select name="district" id="district" class="form-control">
                                <option value="" selected>Select One</option>

                                <option value="dhaka">Dhaka</option>

                                <option value="faridpur">Faridpur</option>

                                <option value="rajbari">Rajbari</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="">
                                <label for="" class="mt-2">Gender</label><br>

                                <input type="radio" value="male" id="male" name="gender">
                                <label for="male">Male</label>

                                <input type="radio" value="female" id="female" name="gender">
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <label for="img" class="mt-2">Photo Upload</label>
                                <input type="file" class="file-control" name="file" id="img">
                            </div>
                        </div>
                        <div class="col">
                            <label for="" class="mt-2">Hobby</label><br>

                            <input type="checkbox" value="cricket" id="cricket" name="hobby[]">
                            <label for="cricket">Cricket</label>

                            <input type="checkbox" value="football" id="football" name="hobby[]">
                            <label for="football">Football</label>

                            <input type="checkbox" value="badminton" id="badminton" name="hobby[]">
                            <label for="badminton">Badminton</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" cols="10" rows="5" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="form-row my-3 ">

                       <!--  <input type="hidden" name="created_by" value="<?php echo $_SESSION['id']; ?>"> -->

                        <input type="submit" class="btn btn-primary" name="submit" value="submit" >

                        <input type="reset" class="btn btn-danger ml-2"value="Reset" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>