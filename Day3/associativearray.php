<?php
// Associative arrays are that use named keys that you assign to them
$cars=array("brand"=>"FOrd","model"=>"Mustang","year"=>1234);

// Accessing Associative Array
echo $car["model"];
echo $car["brand"];
echo $car["year"];

// Changing the value of associative array in PHP
$car["year"]=1345;
var_dump($car);

// Loop through an associative array
foreach($car as $x=>$y){
    echo "$x :$y<br>";

 // Other ways of creating arrays in PHP
 
 $motor=["sunil","BMW","FORD","Neupane"];

 $nayamotor=[
    "neupane",
    "manilal",
    "BMW",
    "Sunil"
 ];


}

?>