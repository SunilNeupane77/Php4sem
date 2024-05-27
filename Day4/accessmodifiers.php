<?php
/*
There are three access modifiers 
 a.public - The property or method can be accessed from anywhere this is default
 b.protected - the property or method can be accessed within the class and class derived from that class
 c.private- The property or method can be accessed within the class
*/ 
class Fruit{
    public $name;
    public $color;
    public $weight;
    function set_name($n){
        $this->name=$n;
    }
    protected function set_color($n){
       $this->color=$n;
    }
    private function set_weight($n){
        $this->weight=$n;
    }
}
$mango->set_name("Mango");
$mango->set_color("YEllow"); // Error
$mango->set_weight("2300"); // Error

?>