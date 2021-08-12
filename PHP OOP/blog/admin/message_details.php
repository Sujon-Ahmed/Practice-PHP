<?php
    $page = 'message';
    $sub_page = 'details_message';
    include 'header.php';
    $id = $_SESSION['id'];
    $message_data = $obj->get_message($id);
    if($message_data->num_rows > 0){
        $si = 1;
        while($all_message = $message_data->fetch_object()){
            $id = $all_message->messenger_id;
        }
    }
    

    if(isset($_GET['id'])){
		$message_id = $_GET['id'];
		$message = $obj->get_single_message($message_id);

		if($message->num_rows > 0){
			while($messages = $message->fetch_object()){
				$messenger_name = $messages->messenger_name;
                $messenger_email = $messages->messenger_email;
                $messenger_message = $messages->messenger_message;
				
				
			}
		}

	}else{
		header('location:view_message.php');
	}

  
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 active">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard / View Message / Details</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div><i class="fas fa-envelope-open-text me-1"></i>Details Message</div>
                        <div><a href="view_message.php?=<?php echo $id; ?>" class="btn btn-primary btn-sm"><i class="fas fa-share me-1"></i>View Message</a></div>
                    </div>

                    <div class="card shadow-sm mt-3">
                        <div class="card-header">
                            <h3><?php echo 'Name : '.$messenger_name; ?></h3>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                            <p><?php echo 'Email : '.$messenger_email; ?></p><br>
                            <footer class="blockquote-footer"><cite title="Source Title"><?php echo $messenger_message; ?></cite></footer>
                            </blockquote>
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
