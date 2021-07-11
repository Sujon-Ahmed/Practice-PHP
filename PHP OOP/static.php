<?php
    
/**
     // Syntax and called static method
    class ClassName {
        public static function StaticFunction(){
            echo "Hello_World!";
        }
    }
    // called static method
    ClassName::StaticFunction(); 
*/

/**
    // same class
    class greeting {
        public static function welcome() {
            echo "HI";
        }
        public function __construct()
        {
            self::welcome();
        }
    }
    $obj = new greeting(); 
*/

/**     
    // some other classes
    class greeting {
        public static function welcome() {
            echo "Hello";
        }
    }
    class someOtherClass {
        public function message() {
            greeting::welcome();
        }
    }

    $obj = new someOtherClass();
    echo $obj->message(); 

*/

/**
   // static method with inheritance
    class xyz {
        protected static $name = "Father";
    }
    class abc extends xyz {
        public static $name = "Child";
        public function dis() {
            return self::$name;
            return parent::$name;
        }
    }

    $obj = new abc();
    echo $obj->dis();  
*/

/**
    // static properties
    class pi {
        public static $value = 3.141592;
        public function static_value(){
            return self::$value;
        }
    }
    // Get static property
    echo pi::$value;
    // $obj = new pi();
    // echo $obj->static_value();

*/

    // static properties with inheritance
    class Clan {
        public static $name = "Father";
    }
    class Family extends Clan {
        public static $name = "Child";
        public function Nation(){
            return parent::$name;
        }
    }
    $obj = new Family();
    echo $obj->Nation();




?>