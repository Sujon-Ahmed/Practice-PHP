<?php
    $page = 'gallery';
    $sub_page = 'add_image';
    include 'header.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 active">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard / Gallery / Add</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div><i class="fas fa-plus me-1"></i>Add Image</div>
                        <div><a href="view_image.php" class="btn btn-primary btn-sm"><i class="fas fa-eye me-1"></i>View Image</a></div>
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
                    <form action="create_gallery.php" id="add_image" method="POST" enctype="multipart/form-data">                        
                            <div class="row">
                                <div class="col-md-8 m-auto text-center mt-3">

                                <div class="form-row mt-3"> 
                                        <div class="form-group col-md-12">
                                            <label for="add_img"><i class="fa fa-upload fa-3x"></i></label>
                                            <input style="display: none" type="file" name="file" class="form-control mb-3 mt-1" id="add_img" required>

                                            <!-- <input type="file" name="file" id="post-file-img" class="file-control form-control"> -->
                                        </div>
                                        <div id="test_img" class="form-group col-md-6 mt-3 m-auto">
                                            
                                        </div>
                                    </div>

                                    <!-- <label for="add_img"><i class="fa fa-upload fa-3x"></i></label> -->
                                    <!-- <input style="display: none" type="file" name="add_img" class="form-control mb-3 mt-1" id="add_img" required> -->
                                                                       
                                    <input style="display: block; text-align:center" type="submit" value="Submit" name="submit" class="btn btn-success btn-sm mt-4 mb-5 m-auto">
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
