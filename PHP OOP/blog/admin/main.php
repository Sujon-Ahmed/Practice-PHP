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
        // get category
        public function get_cats($id){
            $this->sql ="SELECT * FROM `category` WHERE cat_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // update category
        public function update_category($cat_icon,$cat_name,$cat_id ){
            $this->sql ="UPDATE `category` SET `cat_name`='$cat_name',`cat_icon`='$cat_icon' WHERE cat_id = '$cat_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }

        // delete category
        public function delete_category($id){
            $this->sql ="DELETE FROM `category` WHERE cat_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }

        // ============================ post category =====================
        public function post_create($author_id,$cat_id,$post_title,$post_body,$fileNewName){
            $this->sql ="INSERT INTO `post`(`author_id`, `category_id`, `post_title`, `post_body`, `post_thumbnail`) VALUES ('$author_id','$cat_id','$post_title','$post_body','$fileNewName')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }

       //get post
        public function get_post($id){
            $this->sql = "SELECT post.*,category.cat_name,user.user_name,user.user_photo FROM post
            JOIN category ON post.category_id = category.cat_id
            JOIN user ON post.author_id = user.user_id WHERE author_id = '$id' ORDER BY post_id DESC";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // get id
        public function get_post_id($id){
            $this->sql = "SELECT * FROM `post` WHERE post_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // related_post
        public function related($cat_id){
            $this->sql = "SELECT * FROM `post` WHERE category_id = '$cat_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // delete post 
        public function delete_post($id){
            $this->sql = "DELETE FROM `post` WHERE post_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        //get_single_post
        public function get_single_post($post_id){
        $this->sql = "SELECT post.*,category.cat_id,category.cat_name,user.user_name,user.user_photo,user.user_about FROM post JOIN category ON post.category_id = category.cat_id JOIN user ON post.author_id = user.user_id WHERE post_id = '$post_id'";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return $this->result;
        }else{
            return false;
        }
    }

        // get all post
        public function get_all_post($start_from,$num_per_page){
            $this->sql = "SELECT post.*,category.cat_name,user.user_name,user.user_photo FROM post
            JOIN category ON post.category_id = category.cat_id
            JOIN user ON post.author_id = user.user_id ORDER BY post_id DESC limit $start_from,$num_per_page";

            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // get_all_cat_wise_post($cat_id)
        public function get_all_cat_wise_post($cat_id){
            $this->sql = "SELECT post.*,category.cat_name,user.user_name,user.user_photo FROM post
            JOIN category ON post.category_id = category.cat_id
            JOIN user ON post.author_id = user.user_id WHERE category_id = '$cat_id'";

            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }



        // total_data
        public function total_data(){
            $this->sql = "SELECT * FROM post";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result->num_rows;
            }else{
                return false;
            }
        }

         //    total post count data
        public function total_post_data($id){
            $this->sql = "SELECT * FROM post WHERE author_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result->num_rows;
            }else{
                return false;
            }
        }

        
         //    total image count data
         public function total_image_data($id){
            $this->sql = "SELECT * FROM gallery WHERE auth_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result->num_rows;
            }else{
                return false;
            }
        }

        //    total message count data
        public function total_message_data(){
            $this->sql = "SELECT * FROM messages";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result->num_rows;
            }else{
                return false;
            }
        }

        //    total category count data
        public function total_category_data(){
            $this->sql = "SELECT * FROM category";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result->num_rows;
            }else{
                return false;
            }
        }

         // update with photo
         public function update_with_photo_post($author_id,$cat_id,$post_title,$post_body,$fileNewName,$post_id) {
            $this->sql = "UPDATE `post` SET `author_id`='$author_id',`category_id`='$cat_id',`post_title`='$post_title',`post_body`='$post_body',`post_thumbnail`='$fileNewName' WHERE post_id = '$post_id'";

            $this->result = $this->con->query($this->sql);
            if($this->result == true) {
                return true;
                // echo 'OK';
            }else{
                return false;
                // echo 'ERROR';
            }
        }

        // update without photo
        public function update_with_out_photo_post($author_id,$cat_id,$post_title,$post_body,$oldphoto,$post_id) {
            $this->sql = "UPDATE `post` SET `author_id`='$author_id',`category_id`='$cat_id',`post_title`='$post_title',`post_body`='$post_body',`post_thumbnail`='$oldphoto' WHERE post_id = '$post_id'";

            $this->result = $this->con->query($this->sql);
            if($this->result == true) {
                return true;
                // echo 'OK';
            }else{
                return false;
                // echo 'ERROR';
            }
        }

        // ====================== gallery section =======================

        // add gallery
        public function add_image($fileNewName,$auth_id){
            $this->sql = "INSERT INTO `gallery`(`auth_id`, `gal_image`) VALUES ('$auth_id','$fileNewName')";

            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
         //get post
         public function get_image($id){
            $this->sql = "SELECT * FROM gallery WHERE auth_id = '$id' ORDER BY img_id DESC";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        public function get_img($start_from,$num_per_page){
            $this->sql ="SELECT * FROM `gallery` ORDER BY img_id DESC limit $start_from,$num_per_page";

            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }


        // get img
        public function get_img_id($img_id){
            $this->sql = "SELECT * FROM `gallery` WHERE img_id = '$img_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // delete img

        public function delete_gal_img($img_id){
            $this->sql = "DELETE FROM `gallery` WHERE img_id = '$img_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // total image
        public function total_img(){
            $this->sql = "SELECT * FROM gallery";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result->num_rows;
            }else{
                return false;
            }
        }

        // message
        public function messenger($name,$email,$msg){
            $this->sql = "INSERT INTO `messages`(`messenger_name`, `messenger_email`, `messenger_message`) VALUES ('$name','$email','$msg')";

            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }

        }

        // get message
        public function get_message(){
            $this->sql = "SELECT * FROM messages ORDER BY messenger_id DESC";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // get single message
        public function get_single_message($message_id){
            $this->sql = "SELECT * FROM messages WHERE messenger_id = '$message_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // delete message
        public function delete_message($message_id)
        {
            $this->sql = "DELETE FROM `messages` WHERE messenger_id = '$message_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // about for user
        public function all_users(){
            $this->sql = "SELECT * FROM `user`";
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