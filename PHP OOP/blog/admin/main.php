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


        // close connection
        public function __destruct()
        {
            $this->con->close();
        }


    }

?>