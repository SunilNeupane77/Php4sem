// Create a script that finds the position of the first occurrence of a substring within a string
using the strpos() function.
<?php
// Define the main string
$mainString = "Learning PHP is fun and PHP is powerful.";

// Define the substring to search for
$substring = "PHP";

// Find the position of the first occurrence of the substring
$position = strpos($mainString, $substring);

// Display the results
if ($position !== false) {
    echo "The first occurrence of '$substring' is at position: $position<br>";
} else {
    echo "The substring '$substring' was not found in the string.<br>";
}
?>
