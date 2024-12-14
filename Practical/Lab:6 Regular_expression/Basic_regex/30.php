// 30. Write a script that checks if a given string contains the word &quot;PHP&quot; using the
preg_match() function.
<?php
// Define a string
$text = "Learning PHP is fun and rewarding.";

// Check if the string contains the word "PHP" using preg_match()
if (preg_match("/\bPHP\b/i", $text)) {
    echo "The string contains the word 'PHP'.";
} else {
    echo "The string does not contain the word 'PHP'.";
}
?>
