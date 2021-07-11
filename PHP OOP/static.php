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
    // static properties
    class pi {
        public static $value = 3.141592;
        public function static_value(){
            return self::$value;
        }
    }
    // Get static property
    //echo pi::$value;
    $obj = new pi();
    echo $obj->static_value();
*/

/**
    // static properties with inheritance
    class xyz {
        public static $name = "Muhammad Lal Miah";
    }

    class abc extends xyz {
        public static $name = "Muhammad Sujon Miah";
        public function dis() {
            return self::$name;
            return parent::$name;
        }
    }

    $obj = new abc();
    echo $obj->dis(); 
*/





?>