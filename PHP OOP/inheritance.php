<?php
    /* class Fruit {
        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        protected function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }
    //  strawberry is inherited from fruit
    class strawberry extends Fruit {
        public function message() {
            echo "Am I a fruit or a berry?";
        }
    }
    $strawberry = new strawberry("Strawberry", "Red");
    $strawberry->message(); 
    //$strawberry->intro();*/

    class Fruit {
        public $name;
        public $color;

        public function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }
    // inherited class
    class Strawberry extends Fruit {
        public $weight;
        public function __construct($name, $color, $weight)
        {
           $this->name = $name;
           $this->color = $color;
           $this->weight = $weight;     
        }
        public function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}, and the weight is {$this->weight} gram.";
        }
    }
    $strawberry = new Strawberry('Strawberry', 'Red', '50');
    $strawberry->intro();

?>