<?php
    /* class Fruit {
        public $name;
        protected $color;
        private $weight;

        public function set_name($name) {
            $this->name = $name;
        }
        protected function set_color($color) {
            $this->color = $color;
        }
        private function set_weight($weight) {
            $this->weight = $weight;
        }
    }
    $obj = new Fruit();
    $obj->set_name = 'Mango';
    $obj->set_color = 'yellow';
    $obj->set_weight = '300'; */

    class fruit{
        public $name;
        protected $color;
        public function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "I am {$this->name} and my color is {$this->color}<br>";
        }
    }
    $obj = new fruit('Mango','Yellow');
    $obj->intro();


    // class mango extends fruit{
    //     public function message(){
    //         echo 'Who i am? <br>';
    //     }
    // }

    // $obj = new mango('mango','yellow');
    // $obj->message();
    // $obj->intro();





?>