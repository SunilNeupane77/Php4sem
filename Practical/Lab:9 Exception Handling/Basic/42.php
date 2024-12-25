// Write a script that throws an exception if a number is negative. Catch the exception and
display a user-friendly error message.

<?php
function checkNumber($number) {
    if ($number < 0) {
        throw new Exception("The number is negative.");
    }
    return true;
}

try {
    checkNumber(-5);
    echo "The number is positive.";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>