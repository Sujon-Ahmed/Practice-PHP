<?php
    $page = 'gallery';
    $sub_page = 'view_image';
    include 'header.php';
    $id = $_SESSION['id'];
    $gallery_data = $obj->get_image($id);

  
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 active">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard / Gallery / View</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div><i class="fas fa-eye me-1"></i>View_Image</div>
                        <div><a href="add_image.php" class="btn btn-primary btn-sm"><i class="fas fa-plus me-1"></i>Add Image</a></div>
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
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Image</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                               
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SI</th>
                                    <th>Image</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>  
                                <?php
                                    if($gallery_data->num_rows > 0){
                                        $si = 1;
                                        while($gallery_img = $gallery_data->fetch_object()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $si; ?></td>
                                               
                                                    <td class="m-auto text-center">
                                                        <a href="<?php echo 'uploads/gallery/'.$gallery_img->gal_image; ?>" target="_blank">
                                                        <img class="img-fluid" src="<?php echo 'uploads/gallery/'.$gallery_img->gal_image; ?>" width="150" height="150" alt="">
                                                        </a>
                                                    </td>
                                                    <td><?php echo date('M-d-Y h:i A',strtotime($gallery_img->img_created_at)); ?></td>
                                                    <td>
                                                        <a href="img_details.php?id=<?php echo $gallery_img->img_id; ?>" title="Image Details" class="btn btn-success btn-sm"><i class="fas fa-eye text-light"></i></a>

                                                        <a href="img_delete.php?id=<?php echo $gallery_img->img_id; ?>" title="Image Delete" onclick="javascript:return confirm('Delete This Image?')" class="btn btn-danger btn-sm"><i class="fas fa-trash text-light"></i></a>
                                                        
                                                    </td>
                                                </tr> 
                                            <?php
                                            $si++;
                                        }
                                    }
                                ?>                          
                            </tbody>
                        </table>
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
