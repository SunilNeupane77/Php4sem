// Create a script to merge two arrays using the array_merge() function, searches for a value
in an array using the in_array() function and displays a message indicating whether the
value was found or not.
<?php
// Define two arrays
$array1 = ["Apple", "Banana", "Orange"];
$array2 = ["Mango", "Grapes", "Pineapple"];

// Merge the two arrays using array_merge()
$mergedArray = array_merge($array1, $array2);

// Display the merged array
echo "Merged Array: <br>";
foreach ($mergedArray as $fruit) {
    echo $fruit . "<br>";
}

// Search for a value in the merged array using in_array()
$searchValue = "Mango";  // Change this to test with different values

if (in_array($searchValue, $mergedArray)) {
    echo "<br>'$searchValue' was found in the array!<br>";
} else {
    echo "<br>'$searchValue' was not found in the array.<br>";
}
?>
<?php
// Define two arrays
$array1 = ["Apple", "Banana", "Orange"];
$array2 = ["Mango", "Grapes", "Pineapple"];

// Merge the two arrays using array_merge()
$mergedArray = array_merge($array1, $array2);

// Display the merged array
echo "Merged Array: <br>";
foreach ($mergedArray as $fruit) {
    echo $fruit . "<br>";
}

// Search for a value in the merged array using in_array()
$searchValue = "Mango";  // Change this to test with different values

if (in_array($searchValue, $mergedArray)) {
    echo "<br>'$searchValue' was found in the array!<br>";
} else {
    echo "<br>'$searchValue' was not found in the array.<br>";
}
?>
