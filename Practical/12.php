// Create a function that takes an array of numbers and returns the maximum value.
<?php
// Define the function to find the maximum value in an array
function findMax($numbers) {
    return max($numbers);  // PHP's built-in max() function returns the maximum value
}

// Example array of numbers
$numbersArray = [4, 12, 7, 19, 5, 28, 2];

// Call the function and display the result
echo "The maximum value in the array is: " . findMax($numbersArray) . "<br>";
?>
