<?php
    class Main {
        // initialize database all properties
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $db = 'doel';

        // add some properties
        protected $con;
        protected $sql;
        protected $result;

        // create connection
        public function __construct()
        {
            $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
            // check connection
            if($this->con->connect_error) {
                echo "Connected error {$this->con->connect_error}";
                die();
            }
        }

        // insert data
        public function insert($photo,$name,$email,$phone,$district,$gender,$hobby,$message) {
            $this->sql = "INSERT INTO `simple`(`photo`,`name`, `email`, `phone`, `district`, `gender`, `hobby`, `message`) VALUES ('$photo','$name','$email','$phone','$district','$gender','$hobby','$message')";

            $this->result = $this->con->query($this->sql);
            if($this->result == true) {
                return true;
                // echo 'OK';
            }else{
                return false;
                // echo 'ERROR';
            }
        }

        // show data
        public function showData() {
            $this->sql = "SELECT * FROM `simple`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true) {
                return $this->result;
            }
            else{
                return false;
            }
        }

        // close connection
        public function __destruct()
        {
            $this->con->close();
        }
    }
    // called object
    // $obj = new Main();
    // $obj->insert('john','jhon@gmail.com','01743405982','dhaka','male','cricket,football','hi i am john');



?>