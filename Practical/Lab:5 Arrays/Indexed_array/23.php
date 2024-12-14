// Create an array of 5 different colors and display them using a for loop.Also, Write a
script that sorts the numerically indexed array in ascending and descending order using
the sort() and rsort() functions.
<?php
// Create an array of 5 different colors
$colors = ["Red", "Blue", "Green", "Yellow", "Purple"];

// Display the colors using a for loop
echo "Original Array:<br>";
for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}

// Sort the array in ascending order
sort($colors);

// Display the array sorted in ascending order
echo "<br>Array Sorted in Ascending Order:<br>";
for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}

// Sort the array in descending order
rsort($colors);

// Display the array sorted in descending order
echo "<br>Array Sorted in Descending Order:<br>";
for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}
?>
