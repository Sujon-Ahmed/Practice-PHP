<?php
    require 'connection.php';

    if(isset($_GET['ID'])) {
        $ID = $_GET['ID'];
        // echo $ID;

        $sql = "DELETE FROM `simple` WHERE ID = '$ID'";

        if($con->query($sql) == true){
            header('location:show.php?del=success');
        }
    }
?>