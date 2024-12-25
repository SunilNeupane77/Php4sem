// 44. Write a script to create a new text file named example.txt and write the text &quot;Hello,
World!&quot; into it. Also, write a script to open and read the contents of example.txt and
display the contents on the web page.
a. Q3: Write a script to append the text &quot;This is a new line.&quot; to the existing content
in example.txt.
Reading from a File Line by Line:
<?php
$myfile = fopen("example.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>
