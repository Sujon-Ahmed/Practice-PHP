<?php
    $page = 'post';
    $sub_page = 'add_post';
    include 'header.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 active">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard / Post / Create</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div><i class="fas fa-edit me-1"></i>Create_Post</div>
                        <div><a href="view_post.php" class="btn btn-primary btn-sm"><i class="fas fa-eye me-1"></i>View Post</a></div>
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
                    <form action="create_category.php" id="post" method="POST" enctype="multipart/form-data">                        
                            <div class="row">
                                <div class="col-md-8 m-auto">
                                    
                                    <label for="post_title" class="mt-1">Post Title</label>
                                    <input type="text" name="post_title" data-parsley-trigger="keyup" data-parsley-minlength="3" class="form-control mb-1 mt-1" placeholder="Post Title" id="post_title" required>

                                    <label for="cat_name" class="mb-1">Category Name</label>
                                    <select name="cat_name" class="form-control" required id="cat_name">
                                        <option value="">Select Category</option>
                                        <option value=""></option>
                                    </select>

                                    <label for="tag" class="mt-1">Tag</label>
                                    <input type="text" name="tag" class="form-control mb-1 mt-1" placeholder="Post Tag" id="tag" required>

                                    <label for="post_description" class="mt-1">Post Description</label>
                                    <textarea name="body" id="summernote" class="form-control " cols="10" rows="5"></textarea>
                                    
                                                                       
                                    <input type="submit" value="Submit" name="submit" class="btn btn-success btn-block w-100 mt-3 mb-5">
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
