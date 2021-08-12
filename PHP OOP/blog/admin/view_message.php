<?php
    $page = 'message';
    $sub_page = 'view_message';
    include 'header.php';
    $id = $_SESSION['id'];
    $message_data = $obj->get_message($id);

  
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 active">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard / View Message</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div><i class="fas fa-envelope me-1"></i>View_Message</div>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                               
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SI</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>  
                                <?php
                                    if($message_data->num_rows > 0){
                                        $si = 1;
                                        while($all_message = $message_data->fetch_object()){

                                            ?>
                                                <tr>
                                                    <td><?php echo $si; ?></td>
                                               
                                                    <td class="m-auto text-center"><?php echo $all_message->messenger_name; ?></td>

                                                    <td class="m-auto text-center"><?php echo $all_message->messenger_email; ?></td>

                                                    <td>
                                                        <?php
                                                            $details = $all_message->messenger_message;
                                                            if(strlen($details) > 50){
                                                                echo substr($details,0,50).'...';
                                                            }else{
                                                                echo $details;
                                                            }
														?>
                                                    </td>

                                                    <td><?php echo date('M-d-Y h:i A',strtotime($all_message->msg_created_at)); ?></td>

                                                    <td>
                                                        <a href="message_details.php?id=<?php echo $all_message->messenger_id; ?>" title="Message Details" class="btn btn-success btn-sm"><i class="fas fa-eye text-light"></i></a>

                                                        <a href="message_delete.php?id=<?php echo $all_message->messenger_id; ?>" title="Message Delete" onclick="javascript:return confirm('Delete This Message?')" class="btn btn-danger btn-sm"><i class="fas fa-trash text-light"></i></a>
                                                        
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
