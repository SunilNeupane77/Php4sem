// Create a custom exception class InvalidAgeException and throw this exception if the age
provided is less than 0 or greater than 120. Catch the exception and display an
appropriate message.
<?php

class InvalidAgeException extends Exception {}

function validateAge($age) {
  if ($age < 0 || $age > 120) {
    throw new InvalidAgeException("Invalid age. Age must be between 0 and 120.");
  }
}

try {
  $age = intval(fgets(STDIN));
  validateAge($age);
  echo "Valid age: " . $age . "\n";
} catch (InvalidAgeException $e) {
  echo "Error: " . $e->getMessage() . "\n";
}

?>