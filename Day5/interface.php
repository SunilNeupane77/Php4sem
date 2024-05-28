<?php
interface Animal{
    public function makesound();
}

class Cat implements Animal{
    public function makesound(){
        echo "Sunil Neupane";
    }
}
$animal=new Cat();
$animal->makesound();

?>