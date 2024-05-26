<?php
echo "Connecting database Using PHP";

// Ways to connect MYSQL database
// 1. MYSQLi extension
// 2. PDO
/*
Connecting to the database
*/
$servername="localhost";
$username="root";
$password="";

// Create a connection 

$conn = mysqli_connect($servername,$username,$password);
 if($conn){
    die("sorry we failled to connect".mysqli_connect_error());
 }
 else{
echo "connection was successful";
 }

?>