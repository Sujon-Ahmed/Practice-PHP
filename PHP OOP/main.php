<?php
   /*  class Fruit {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }

        function set_color($color) {
            $this->color = $color;
        }
        function get_color() {
            return $this->color;
        }

    }
    // Create objects
    $apple = new Fruit();
    $apple->set_name('Apple');
    $apple->set_color('Red');

    echo 'Name : '. $apple->get_name();
    echo '<br>';
    echo 'Color : '. $apple->get_color();

    echo '<br>';
    
    $banana = new Fruit();
    $banana->set_name('Banana');
    $banana->set_color('Yellow');

    echo 'Name : '. $banana->get_name();
    echo '<br>';
    echo 'Color : '. $banana->get_color(); */


   /*  class Main{
        // properties
        public $name;

        function set_name($name) {
            $this->name = $name;
        } 

        function get_name($greeting) {
           echo $greeting. ' ' .$this->name;
        }  
    }
    $obj = new Main();  // create obj
   $obj->set_name('Sujon'); // call method
   $obj->get_name('Welcome ');
   echo '<br>';

   $obj = new Main();  // create obj
   $obj->set_name('Riman'); // call method
   $obj->get_name('Welcome '); */


   /* class main{
    //    properties
    public $name;

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name($greeting) {
        echo $greeting. ' '.$this->name;
    }
   }
   $obj = new Main();
   $obj->set_name('sujon');
   $obj->get_name('Welcome '); */

  /*  class Main{
       public function __construct(){
           echo 'db connected <br>';
       }
       public function insert($name,$email){
            echo $name.'<br>';
            echo $email.'<br>';
       }
       public function update(){
            echo 'update <br>';
       }
       public function delete(){
            return false;
       }
       public function __destruct(){
           echo 'db dis connected';
       }
   } */

//    $obj = new Main();
//    $obj->insert();
//    $obj->update();

    //    __construct methods
   /* class Fruit {
       public $name;
       public $color;

       public function __construct($name, $color)
       {
           $this->name = $name;
           $this->color = $color;
       }
       public function get_name()
       {
           return $this->name;
       }
       public function get_color()
       {
           return $this->color;
       }
   }
   $apple = new Fruit('Apple', 'Red');
   echo $apple->get_name();
   echo '<br>';
   echo $apple->get_color(); */

    //  __Destruct methods
    class fruit {
        public $name;
        public $color;

        public function __construct($name, $color)
        {
           $this->name = $name;
           $this->color = $color;     
        }
        public function __destruct()
        {
            echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
    }   
    $apple = new fruit('Banana', 'Yellow');




   




?>