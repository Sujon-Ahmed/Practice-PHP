<?php
    $page = 'category';
    $sub_page = 'view_category';
    include 'header.php';

    $cat_data = $obj->get_cat();
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 active">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard / Category</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div><i class="fas fa-table me-1"></i>View_Category</div>
                        <div><a href="add_category.php" class="btn btn-primary btn-sm"><i class="fas fa-plus me-1"></i>Create New</a></div>
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
                                    <th>Category Icon</th>
                                    <th>Category Name</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SI</th>
                                    <th>Category Icon</th>
                                    <th>Category Name</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>  
                                <?php
                                    if($cat_data->num_rows > 0){
                                        $si = 1;
                                        while($cat = $cat_data->fetch_object()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $si; ?></td>
                                                    <td><i class="<?php echo $cat->cat_icon; ?> fa-2x "></i></td>
                                                    <td class="text-capitalize"><?php echo $cat->cat_name; ?></td>
                                                    <td><?php echo date('M-d-Y h:i A',strtotime($cat->cat_created_at)); ?></td>
                                                    <td>
                                                        <a href="edit_category.php?id=<?php echo $cat->cat_id;?>" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                                        <a href="delete_category.php?id=<?php echo $cat->cat_id;?>" class="btn btn-danger btn-sm" onclick="javascript:return confirm('Delete This Category?');" title="Delete"><i class="fa fa-trash-alt"></i></a>
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
