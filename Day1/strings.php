<?php
// String Manipulations in PHP
  echo "This is a String in PHP";
  $name="Sunil Neupane";
  echo "The name of a person $name"; 
// Some String Finction in PHP
 
// 1. The Php strlen() functioon returns the length of the string.
 echo strlen($name);

//2. The PHP str_word_count() function count the number of word in the string.4
echo str_word_count($name);

//3. The PHP strpos() function searches for a specific text within a string
echo strpos("Sunil Neupane",$name);

//4. The strtoupper() function returns the string in Upper Case
$manilal="Sunil Neupane";
echo strtoupper(($manilal));

//5. The strtolower() function returns the string in Lower case
$upper="yo text lai upper ma change gar";
echo strtolower(($upper));
echo str_word_count($upper);

//6.The str_replace() function replace some characters with some other characters in the string
$replace="Hello Sunil Neupane";
echo str_replace("Dolly Chai Wala","sunil Neupane",$replace);

//7.The PHP strrev() function reverse the string
 $reverse="Yeslai reverse gar";
 echo strrev($reverse);

 //8.The trim() removes any whitespace from the beginning or the end
 $trim="   yes ko space trim gar chito   ";
 echo trim($trim);

 // Converting String into Array
 // 9. The PHP explode() function splits a string into an array.
 $x="Hello Sunil Neupane";
 $y=explode("",$x);
 //Use print_r() function to display the result
 print_r($y);

 //10 To Concatenate or combine To String we can use (.){dot} Operator
 $str1="sunil";
 $str2="Neupane";
 $str3=$str1.$str2;
 echo $str3;
 // This Function concatenates two string without space between them
 // For space 
 $str3=$str1." ".$str2;

 //11. We can Return the range of character by wsing substr() function
 // We can specify the start index and the number of characters that we want to raturn

 $newvar="Hello Sunil Neupane";
 echo substr($newvar,6,5);


 
?>