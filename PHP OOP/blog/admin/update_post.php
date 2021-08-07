<?php
    include 'main.php';
    include 'Flash_data.php';
    session_start();
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:view_post.php');
    }else{
        $post_id = $_POST['id'];
        $author_id = $_SESSION['id'];
        $post_title = $_POST['title'];
        $cat_id = $_POST['cat_id'];
        $post_body = $_POST['body'];
        $oldphoto = $_POST['oldfile'];

            if(!empty($_FILES['file']['name'])){

                // print_r($_FILES['file']);
                $fileName = $_FILES['file']['name'];
                $fileTmp = $_FILES["file"]["tmp_name"];
                $fileExt = explode(".",$fileName);
                $fileActualExt = strtolower(end($fileExt));
                $allowed = array('jpg','jpeg','png');

                if(in_array($fileActualExt,$allowed)){
                    $fileError = $_FILES["file"]["error"];
                    if($fileError == 0){
                        $fileNewName = uniqid('',true).'.'.$fileActualExt;
                        $fileDestination = "uploads/posts/".$fileNewName;
                        if(move_uploaded_file($fileTmp,$fileDestination)){
                            
                            unlink("uploads/posts/".$oldphoto);
                            $status = $obj->update_with_photo_post($author_id,$cat_id,$post_title,$post_body,$fileNewName,$post_id);

                            if($status == true){
                                Flash_data::success("Post update SuccessFully");
                                header('location:edit_post.php?id='.$post_id);
                            }else{
                                Flash_data::error("Some Went Worng.Please Try Again");
                                header('location:edit_post.php?id='.$post_id);
                            }
                        }

                    }else{
                        Flash_data::error("photo Upload Error.Please Try Again");
                        header('location:edit_post.php?id='.$post_id);
                    }
                }else{
                    Flash_data::error("Please Upload valid Photo");
                    header('location:edit_post.php?id='.$post_id);
                }

            }else{
                $status = $obj->update_with_out_photo_post($author_id,$cat_id,$post_title,$post_body,$oldphoto,$post_id) ;

                if($status == true){
                    Flash_data::success("Data update SuccessFully");
                    header('location:edit_post.php?id='.$post_id);
                }else{
                    Flash_data::error("Some Went Wrong.Please Try Again");
                    header('location:edit_post.php?id='.$post_id);
                }
            }
            
        }
?>