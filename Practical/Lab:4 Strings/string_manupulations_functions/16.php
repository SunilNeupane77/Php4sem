// Create a script that takes a full name as input (e.g., &quot;John Doe&quot;) and returns the first name
and last name separately using the explode() function.
<?php
// Define a full name
$fullName = "John Doe";

// Split the full name into first name and last name
$nameParts = explode(" ", $fullName);

// Assign the first name and last name
$firstName = $nameParts[0];
$lastName = $nameParts[1];

// Display the results
echo "Full Name: $fullName<br>";
echo "First Name: $firstName<br>";
echo "Last Name: $lastName<br>";
?>
