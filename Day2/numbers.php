<?php
// There are three main numeric type in PHP
//1. Integer
//2. float
//3. Number string 
// In additon PHP Has two more datatypes used for numbers
//4. Infinity 
//5. NaN 

$a="45";
$b=45;
var_dump($a);
var_dump($b);

/*
PHP has Following Predefined Constants for integers:
    a. PHP_INT_MAX - The largest Integer supportes
    b. PHP_INT_MIN - The Smallest Integer Supported
    c. PHP_INT_SIZE - The size of  a integer in bytes

PHP has the following function to check if the type of a variable is integer
    a.is_int()
    b.is_integer()
    c.is_long()    

*/
// Check The type of variable is integer
$sunil=89;
var_dump(is_int($sunil));

$manilal="Sunil Neupane";
var_dump(is_int($manilal));

/*
Predefined Comstant For Folats
 a.PHP_FLOAT_MAX
 B>PHP_FLOAT_MIN
 c>PHP_FLOAT_DIG - Number of decimal digits canbe rounded into a float and back without precision loss
 d.PHP_FOLAT_EPSILON - The smallest representable positive number x

 PHP has the followiing method to check the if the type of a variable is float or not
  a.is_float()
  b.is_double()
*/

// Check if the type of a variabe if float
$x=10.356;
var_dump(is_float($x));
var_dump(is_double($x));

?>