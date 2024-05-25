<?php
// Simple Function
function myMessage(){
    echo "First function in PHP";
}
myMessage();

// Function having arguments
function familyName($name){
    echo "$name of a person<br>";
}
familyName("manilal");
familyName(("ramesh"));
familyName("Babita");
familyName("gita");

// Function Having two arguments

function friendsName($name,$caste){
    echo "Name of friend $name and caste is $caste";

}
friendsName("Maksad","Abdul");

// Function returning values in PHP

function sum($x,$y){
    $z=$x+$y;
    return $z;
}
echo "5 + 10".sum(5,100)."<br>";

// passing argument by reference
function add_five(&$value){
    $value +=5;
}
$num=2;
add_five($num);
echo $num;



?>