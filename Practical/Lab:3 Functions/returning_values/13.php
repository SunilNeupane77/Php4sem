// Write a function that calculates the factorial of a given number and returns the result.
<?php
// Define the function to calculate the factorial of a number
function factorial($number) {
    // Initialize the result to 1
    $result = 1;
    
    // Multiply result by each number from 1 to the given number
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    
    // Return the calculated factorial
    return $result;
}

// Example usage
$number = 5; // You can change this to any number
echo "The factorial of $number is: " . factorial($number) . "<br>";
?>
