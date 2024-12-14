// 17. Write a script that replaces all occurrences of the word &quot;PHP&quot; in a given string with
&quot;JavaScript&quot; using the str_replace() function.
<?php
// Define the original string
$originalString = "PHP is an amazing language. PHP is widely used for web development.";

// Replace all occurrences of "PHP" with "JavaScript"
$updatedString = str_replace("PHP", "JavaScript", $originalString);

// Display the results
echo "Original String: $originalString<br>";
echo "Updated String: $updatedString<br>";
?>
