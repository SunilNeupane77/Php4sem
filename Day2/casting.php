<?php
/*
Casting in PHP is done with these statements
1.(string)-converts to datatype string
2.(int)-Converts to data type Integer
3.(float)-converts to datatype float
4.(bool)-converts to datatype boolean
5.(array)-converts to datatype array
6. (object )-convertd to datatype Object
7.(unset)-converts ti datatype NULL
*/
$manilal=78;
$saurabh=45.25;
$ramesh="Hello Sunil Neupane";
$harilal=true;
$gaurav=NULL;


$manilal=(string) $manilal;
var_dump($manilal);

$harilal=(string)$harilal;
var_dump($harilal);


$manilal= (int) $manilal;
var_dump($manilal);

$manilal=(float)$manilal;
var_dump(($manilal));

$manilal=(array)$manilal;
var_dump(($manilal));

$manilal=(object)$manilal;
var_dump(($manilal));

?>