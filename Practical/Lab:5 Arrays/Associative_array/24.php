// 24. Create an associative array that stores the names and ages of 3 people. Display the age of
a specific person by accessing the key. Also Write a script that sorts the associative array
by values in ascending order using the asort() function and by keys using the ksort()
function.
<?php
// Create an associative array with names and ages
$people = [
    "Ram" => 25,
    "Sita" => 30,
    "Hari" => 22
];

// Display the age of a specific person (e.g., Ram)
echo "Age of Ram: " . $people["Ram"] . "<br><br>";

// Sort the array by values (ages) in ascending order
asort($people);

echo "Associative Array Sorted by Values (Ages) in Ascending Order:<br>";
foreach ($people as $name => $age) {
    echo "$name: $age<br>";
}

echo "<br>";

// Sort the array by keys (names) in ascending order
ksort($people);

echo "Associative Array Sorted by Keys (Names) in Ascending Order:<br>";
foreach ($people as $name => $age) {
    echo "$name: $age<br>";
}
?>
