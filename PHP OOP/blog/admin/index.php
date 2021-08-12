<?php
   $page = 'dashboard';
    include 'header.php';
    $id = $_SESSION['id'];
    $get_post = $obj->total_post_data($id);
    $get_image = $obj->total_image_data($id);
    $get_message = $obj->total_message_data();
    $get_category = $obj->total_category_data();
    

?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 active">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><i class="fa fa-blog"></i> Total Post 
                                <span style="font-weight:bold; margin-left:10px;">
                                    <?php
                                        echo $get_post;
                                    ?>
                                 </span>
                           </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="view_post.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body"><i class="fa fa-images"></i> Total Images 
                            <span style="font-weight:bold; margin-left:10px;">
                                <?php
                                    echo $get_image;
                                ?>
                            </span>
                        </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="view_image.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body"><i class="fa fa-envelope"></i> Total Message 
                            <span style="font-weight:bold; margin-left:10px;">
                                <?php
                                    echo $get_message;
                                ?>
                            </span>
                        </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="view_message.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body"><i class="fa fa-columns"></i> Total Category 
                            <span style="font-weight:bold; margin-left:10px;">
                                <?php
                                    echo $get_category;
                                ?>
                            </span>
                        </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="view_category.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
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
