// 15. Create a script to find the length of a given string using the strlen() function. Also convert
the string to uppercase using the strtoupper() function, and to lowercase using the
strtolower() function and display the string.
<?php
// Define a string
$string = "Learning PHP is Fun!";

// Find the length of the string
$length = strlen($string);

// Convert the string to uppercase
$uppercase = strtoupper($string);

// Convert the string to lowercase
$lowercase = strtolower($string);

// Display the results
echo "Original String: $string<br>";
echo "Length of the String: $length<br>";
echo "String in Uppercase: $uppercase<br>";
echo "String in Lowercase: $lowercase<br>";
?>
