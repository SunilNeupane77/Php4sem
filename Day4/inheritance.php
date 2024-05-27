<?php 
// Extends Keyword is Used in inheritance

class Inheritance{
    public $name;
    public $color;
    public function __construct($name,$color){
          $this->name=$name;
          $this->color=$color;
    }
    protected function intro(){
        echo "{$this->name} and color{$this->color}";
    }
}

class Strawberry extends Fruit{
    public function message(){
        echo "An I fruit or what";

    }
}

$strawberry= new Strawberry("Straw","red");



?>