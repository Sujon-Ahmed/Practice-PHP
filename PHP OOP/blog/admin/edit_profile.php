<?php
    // $page = 'category';
    // $sub_page = 'view_category';
    session_start();
    include 'header.php';
    $id = $_SESSION['id'];
    $profile_data = $obj->profile_retrive($id);
    if($profile_data->num_rows>0){
        while($row = $profile_data->fetch_object()){
            // $id = $row->user_id;
            $name = $row->user_name;
            $photo = $row->user_photo;
            $email = $row->user_email;
            $about = $row->user_about;
        }
    }
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 active">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard / Edit Profile</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div><i class="fas fa-user-edit me-1"></i>Edit Profile</div>
                        <div><a href="change_password.php" class="btn btn-primary btn-sm"><i class="fas fa-key me-1"></i>Change Password</a></div>
                    </div>
                    <div class="card-body">
                        <!-- toastr success message -->
                        <?php
                            if(isset($_SESSION['msg']['success'])){
                                ?>
                                    <script>
                                        toastr.success("<?php echo Flash_data::show_error(); ?>");
                                    </script>
                                <?php
                            }
                        ?>
                        <form action="update_profile.php" id="profile" method="POST" enctype="multipart/form-data">                        
                            <div class="row">
                                <div class="col-md-4 text-center" id="test-img">
                                    <?php
                                        if(!empty($photo)){
                                            ?>
                                            <img src="<?php echo 'uploads/'.$photo; ?>" class="img-fluid img-thumbnail" alt="Avatar">
                                            <?php
                                        }else{
                                            ?>
                                            <img src="img/profile.jpg" class="img-fluid img-thumbnail" alt="Avatar">
                                            <?php
                                        }
                                    ?>
                                    
                                </div>
                                <div class="col-md-8">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control mb-3 mt-1" data-parsley-error-message="Enter Your Valid Name"data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup" required>

                                    <label for="file">Change Photo</label>
                                    <input type="file" name="file" id="file-img" class="file-control form-control mb-3 mt-1">

                                    <input type="hidden" name="oldfile" value="<?php echo $photo; ?>">

                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control mb-3 mt-1" required data-parsley-type="email" data-parsley-trigger="keyup" required data-parsley-error-message="Enter Your Valid Email">

                                    <label for="about">About Us</label>
                                    <textarea name="about" class="form-control mb-3 mt-1" id="about" cols="10" rows="5"><?php if(!empty($about)){echo $about;} ?></textarea>
                                    <input type="submit" value="Submit" name="submit" class="btn btn-success btn-block w-100 mt-2">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<?php
    include 'footer.php';
?>
