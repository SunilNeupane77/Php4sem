<?php

$name="Sunil Neupane"; // string datatypes
$number=34;  // integer datatype

// Float Datatype - Decimal Point numner
$float=42.2;
$income2=56.2;
echo $income2;

// Boolean Datatype -Can be either true or false datatype
  $isTrue=true;
  $isFalse=false;
  echo $isTrue;
  echo var_dump($isFalse);  // var dump function le chai variable ko datatype return garcha

 // Object Datatype in PHP
 // instances of classes
 class Car{
    public $color;
    public $model;
    public function __construct($color,$model){
         $this->color=$color;
         $this->model=$model;
        
 }
 public function message(){
    return "mys car is a ". $this->color ."and model". $this->model ."|";
 }
 }
 $mycar=new Car("red","volvo");
 var_dump($mycar);



 // Array- Used to store multiple variable in a single values
 $friends=array("larry","Hari","Mohan","Hariram");
 echo var_dump($friends); 


 // PHP NULL Value
 $x="Hello Manilal";
 $x=null;
 var_dump($x);

 // Change Data Type
 $x=5;
 var_dump($x);

 $x="Hello";
 var_dump(($x));

 // Casting Datatype in PHP

 $x=34;
 $x=(string)$x;
 var_dump($x);

// PHP supports following Datatypes
// String
// Integer
// Float(floating point numbers also called double)
// Boolean
// Array
// Object
// NULL

 ?>