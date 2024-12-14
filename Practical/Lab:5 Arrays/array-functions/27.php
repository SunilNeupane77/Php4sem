// Write a script that slices an array to get the first 3 elements using the array_slice()
function.
<?php
// Define an array with several elements
$fruits = ["Apple", "Banana", "Orange", "Mango", "Grapes", "Pineapple"];

// Use array_slice() to get the first 3 elements
$slicedArray = array_slice($fruits, 0, 3);

// Display the sliced array
echo "First 3 elements of the array:<br>";
foreach ($slicedArray as $fruit) {
    echo $fruit . "<br>";
}
?>
