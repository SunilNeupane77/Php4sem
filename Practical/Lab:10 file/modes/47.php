// 47. Write a script that attempts to open a non-existent file with the r mode and handles the
error gracefully using file_exists() or @ operator.

<?php

// Using file_exists()
$filename = "non_existent_file.txt";

if (file_exists($filename)) {
  $file = fopen($filename, "r");
  if ($file) {
    while(!feof($file)) {
      echo fgets($file) . "<br>";
    }
    fclose($file);
  } else {
    echo "Error: Could not open file.";
  }
} else {
  echo "File not found.";
}

echo "<br>";

// Using @ operator (error suppression)
$file = @fopen("non_existent_file.txt", "r");

if ($file) {
  while(!feof($file)) {
    echo fgets($file) . "<br>";
  }
  fclose($file);
} else {
  echo "Error: Could not open file.";
}

?>