<?php
    $page = 'category';
    $sub_page = 'add_category';
    include 'header.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 active">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard / Category / Create</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div><i class="fas fa-edit me-1"></i>Create_Category</div>
                        <div><a href="view_category.php" class="btn btn-primary btn-sm"><i class="fas fa-eye me-1"></i>View Category</a></div>
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
                    <form action="create_category.php" id="create_category" method="POST">                        
                            <div class="row">
                                <div class="col-md-8 m-auto">
                                    <label for="icon">Category Icon <small><a class="me-1 text-decoration-none" href="https://fontawesome.com/v5.15/icons?d=gallery&p=2" target="_blank" title="fontawesome.com">Visit Site</a></small></label>
                                    <input type="text" name="cat_icon" class="form-control mb-3 mt-1" placeholder="Example : fa fa-user" id="cat_icon"  required>

                                    <label for="name">Category Name</label>
                                    <input type="text" name="cat_name" data-parsley-trigger="keyup" data-parsley-minlength="3" class="form-control mb-3 mt-1" placeholder="Category Name" id="cat_name" required>
                                                                       
                                    <input type="submit" value="Submit" name="submit" class="btn btn-success btn-block w-100 mt-2 mb-5">
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
