<?php
    class Main{
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $db = 'blog';

        protected $con;
        protected $sql;
        protected $result;

        // create connection
        public function __construct()
        {
            $this->con = new mysqli($this->host, $this->user, $this->pass, $this->db);
            // check connection
            if($this->con->connect_error) {
                echo "Connected Error {$this->con->connect_error}";
                die();
            }
        }

        // insert data
        public function register($name,$email,$password){
            $this->sql ="INSERT INTO `user`(`user_name`, `user_email`, `user_password`) VALUES ('$name','$email','$password')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }

        // check email
        public function check_email($email){
            $this->sql ="SELECT * FROM `user` WHERE user_email = '$email'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // profile retrive
        public function profile_retrive($id){
            $this->sql ="SELECT * FROM `user` WHERE user_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

          // update profile
          public function update_profile($id,$oldphoto,$name,$email,$about) {
            $this->sql = "UPDATE `user` SET `user_name`='$name',`user_email`='$email',`user_about`='$about',`user_photo`='$oldphoto' WHERE user_id = '$id'";

            $this->result = $this->con->query($this->sql);
            if($this->result == true) {
                return true;
                // echo 'OK';
            }else{
                return false;
                // echo 'ERROR';
            }
        }

        // change_pass
        public function change_pass($pass,$id){
            $this->sql = "UPDATE `user` SET `user_password`='$pass' WHERE user_id = '$id'";

            $this->result = $this->con->query($this->sql);
            if($this->result == true) {
                return true;
                // echo 'OK';
            }else{
                return false;
                // echo 'ERROR';
            }
        }

        // =============================== category section ========================
        public function create_category($cat_icon,$cat_name){
            $this->sql ="INSERT INTO `category`(`cat_name`, `cat_icon`) VALUES ('$cat_name','$cat_icon')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }

        public function get_cat(){
            $this->sql ="SELECT * FROM `category`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }


        // close connection
        public function __destruct()
        {
            $this->con->close();
        }


    }

?>