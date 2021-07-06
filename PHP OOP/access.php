<?php
    class Fruit {
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
    $obj->set_weight = '300';





?>