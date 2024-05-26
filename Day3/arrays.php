<?php
// Array store multiple values in a variable
$cars= array("maruti","BMW","Toyota");

/*
In PHP there are three types of arrays
1.Index arrays- arrays witha numeric index
2.Associative arrays-arrays with named keys
3.Multidimensional arrays -Arrays containing one or more arrays 

// Array items of four different data types

*/
$sunilneupane=9;
$myarray= array("sunil",78,["manilal","madan"],$sunilneupane);

// Array Functions
// 1 .count

$newarray= array("sunil","Neupane","Manilal","Madan");
echo count(($newarray));

// Access Indexed Arrays
echo $newarray[0];

$newarray[1]="Shumsher";
var_dump($newarray);


// Foreach Loop in indexed array

$otherarray=array("volvo","nayacar","nayabus");
foreach($otherarray as $y){
    echo "$y <br>";
}
// array_push() function to add a new item 

array_push($newarray,"bhagawan");
var_dump($newarray);


?>