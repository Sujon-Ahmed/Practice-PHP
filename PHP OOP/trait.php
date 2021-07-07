<?php
    trait messageOne {
        public function introOne() {
            echo 'I am first Message! ';
        }
    }

    trait messageTwo {
        public function introTwo() {
            echo 'I am second Message! ';
        }
    }

    class welcome {
        use messageOne,messageTwo;
    }

    $obj = new welcome();
    $obj->introOne();
    $obj->introTwo();




?>