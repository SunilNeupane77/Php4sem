// 10. Create a function named greet() that takes a name as an argument and returns a greeting
message. Call the function with different names.
<?php
// Define the greet function
function greet($name) {
    return "Hello, $name! Welcome to PHP.";
}

// Call the function with different names
echo greet("Alice") . "<br>";
echo greet("Bob") . "<br>";
echo greet("Charlie") . "<br>";
?>
