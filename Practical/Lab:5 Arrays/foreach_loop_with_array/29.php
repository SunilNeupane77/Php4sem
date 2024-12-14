// Write a script that uses a foreach loop to display all the key-value pairs in an associative
array.Write a script that uses a foreach loop to display all the key-value pairs in an associative
array.
<?php
// Define an associative array
$person = [
    "Name" => "Ram",
    "Age" => 25,
    "Country" => "Nepal",
    "Occupation" => "Engineer"
];

// Use a foreach loop to display each key-value pair
echo "Key-Value Pairs in the Associative Array:<br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
?>
