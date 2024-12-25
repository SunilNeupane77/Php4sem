// 45. Write a script that reads a file line by line using the fgets() function and displays each
line.
a. Q5: Create a script that reads a CSV file and displays its contents in an HTML
table. Use the fgetcsv() function to parse each line.
<?php
$filename = "my_data.csv"; 

if (file_exists($filename)) {
  $file = fopen($filename, "r"); 

  echo "<table>";
  while (($data = fgetcsv($file)) !== FALSE) {
    echo "<tr>";
    foreach ($data as $field) {
      echo "<td>" . htmlspecialchars($field) . "</td>"; 
    }
    echo "</tr>";
  }
  echo "</table>";

  fclose($file);
} else {
  echo "File not found.";
}
?>
<?php
$filename = "my_file.txt"; 

if (file_exists($filename)) {
  $file = fopen($filename, "r"); 

  while(!feof($file)) {
    $line = fgets($file); 
    echo $line . "<br>"; 
  }

  fclose($file);
} else {
  echo "File not found.";
}
?>