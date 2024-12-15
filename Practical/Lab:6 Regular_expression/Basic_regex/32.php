// Write a script that replaces all numbers in a given string with the word &quot;[number]&quot; using
the preg_replace() function.
<?php
// Function to replace all numbers in a string with "[number]"
function replaceNumbers($inputString) {
    // Regular expression to match numbers
    $pattern = '/\d+/';

    // Replacement string
    $replacement = '[number]';

    // Use preg_replace to perform the replacement
    $result = preg_replace($pattern, $replacement, $inputString);

    return $result;
}

// Example usage
$originalString = "There are 25 apples, 10 oranges, and 5 bananas.";
$modifiedString = replaceNumbers($originalString);

// Display the result
echo "Original String: $originalString\n";
echo "Modified String: $modifiedString\n";
?>
