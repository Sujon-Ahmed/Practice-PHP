<?php
    session_start();
    include 'links.php';
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $data = $obj->getData($id);

        if($data->num_rows>0){
            while($row = $data->fetch_object()){
                $id = $row->id;
                $photo = $row->photo;
                $name = $row->name;
                $email = $row->email;
                $phone = $row->phone;
                $district = $row->district;
                $gender = $row->gender;
                // $hobby = $row->hobby;
                $hobby = explode(',',$row->hobby);
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
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="name">Enter Name</label>
                            <input type="text" name="name" value="<?php echo $name?>" id="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col">
                            <label for="email">Enter Email</label>
                            <input type="email" id="email" value="<?php echo $email?>" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="phone">Enter phone</label>
                            <input type="number" value="<?php echo $phone?>" name="phone" id="phone" class="form-control" placeholder="Enter phone Number">
                        </div>
                        <div class="col">
                            <label for="district">Select District</label>
                            <select name="district" id="district" class="form-control">
                                <option value="" selected>Select One</option>

                                <option <?php if($district == 'dhaka'){echo 'selected';} ?> value="dhaka">Dhaka</option>

                                <option <?php if($district == 'faridpur'){echo 'selected';} ?> value="faridpur">Faridpur</option>

                                <option <?php if($district == 'rajbari'){echo 'selected';} ?> value="rajbari">Rajbari</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="">
                                <label for="" class="mt-2">Gender</label><br>

                                <input type="radio" <?php if($gender == 'male'){echo 'checked';} ?> value="male" id="male" name="gender">
                                <label for="male">Male</label>

                                <input type="radio" <?php if($gender == 'female'){echo 'checked';} ?> value="female" id="female" name="gender">
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <label for="img" class="mt-2">Photo Upload</label>
                                <input type="file" class="file-control" name="file" id="img">
                                <input type="hidden" value="<?php echo $photo;?>" class="file-control" name="oldfile" id="img">
                                
                                <img class="img-fluid img-thumbnail mt-3" width="130px" height="130px" src="<?php echo 'uploads/'.$photo; ?>" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <label for="" class="mt-2">Hobby</label><br>

                            <input type="checkbox" <?php if(in_array('cricket',$hobby)){echo 'checked';} ?> value="cricket" id="cricket" name="hobby[]">
                            <label for="cricket">Cricket</label>

                            <input type="checkbox" <?php if(in_array('football',$hobby)){echo 'checked';} ?> value="football" id="football" name="hobby[]">
                            <label for="football">Football</label>

                            <input type="checkbox" <?php if(in_array('badminton',$hobby)){echo 'checked';} ?> value="badminton" id="badminton" name="hobby[]">
                            <label for="badminton">Badminton</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" cols="10" rows="5" placeholder="Enter Message"><?php echo $message; ?></textarea>
                    </div>
                    <div class="form-row my-3 ">

                        <input type="submit" class="btn btn-primary" name="submit" value="submit" >

                        <input type="hidden" name="id" value="<?php echo $id;?>">

                        <input type="reset" class="btn btn-danger ml-2"value="Reset" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>