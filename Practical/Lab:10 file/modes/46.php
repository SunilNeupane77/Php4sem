// 46. Experiment with different file modes (r, w, a, r+, w+, a+) and observe the behavior when
reading and writing files. Write a brief report explaining each mode.

<?php
$file = 'example.txt';

// Write mode
$handle = fopen($file, 'w');
fwrite($handle, "This is written in write mode.\n");
fclose($handle);

// Read mode
$handle = fopen($file, 'r');
echo "Read mode:\n";
echo fread($handle, filesize($file));
fclose($handle);

// Append mode
$handle = fopen($file, 'a');
fwrite($handle, "This is appended in append mode.\n");
fclose($handle);

// Read/Write mode
$handle = fopen($file, 'r+');
echo "Read/Write mode before writing:\n";
echo fread($handle, filesize($file));
fwrite($handle, "This is written in read/write mode.\n");
fclose($handle);

// Write/Read mode
$handle = fopen($file, 'w+');
fwrite($handle, "This is written in write/read mode.\n");
fseek($handle, 0);
echo "Write/Read mode:\n";
echo fread($handle, filesize($file));
fclose($handle);

// Append/Read mode
$handle = fopen($file, 'a+');
fwrite($handle, "This is appended in append/read mode.\n");
fseek($handle, 0);
echo "Append/Read mode:\n";
echo fread($handle, filesize($file));
fclose($handle);
?>
?>