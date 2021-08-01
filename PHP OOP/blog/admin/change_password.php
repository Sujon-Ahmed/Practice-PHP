<?php
    include 'header.php';
    $id = $_SESSION['id'];
    $profile_data = $obj->profile_retrive($id);
    if($profile_data->num_rows>0){
        while($row = $profile_data->fetch_object()){
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
                    <li class="breadcrumb-item active">Dashboard / Edit Profile / Change Password</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div><i class="fas fa-user-lock me-1"></i>Change password</div>
                        <div><a href="edit_profile.php" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i>Edit Profile</a></div>
                    </div>
                    <div class="card-body">
                         <!-- toastr error message -->
                         <?php
                            if(isset($_SESSION['msg']['error'])){
                                ?>
                                    <script>
                                        toastr.error("<?php echo Flash_data::show_error(); ?>");
                                    </script>
                                <?php
                            }
                        ?>

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
                       
                        <form action="update_password.php" id="change_password" method="POST">                        
                            <div class="row">
                                <div class="col-md-8 m-auto">
                                    <label for="cur_password">Current Password</label>
                                    <input type="password" name="cur_password" required class="form-control mb-3 mt-1" placeholder="Current password">

                                    <label for="new_password">New Password</label>
                                    <input name="new_password" class="form-control mb-3 mt-1" id="inputPassword" required data-parsley-trigger="keyup" data-parsley-minlength="6" type="password" placeholder="New password" />

                                    <label for="con_password">Confirm Password</label>
                                    <input name="con_password" class="form-control" data-parsley-trigger="keyup" id="inputPasswordConfirm" type="password" required data-parsley-minlength="6" data-parsley-equalto="#inputPassword"placeholder="Confirm password" />

                                   
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
