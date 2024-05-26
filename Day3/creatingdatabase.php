<?php
echo "Connecting database Using PHP";

// Ways to connect MYSQL database
// 1. MYSQLi extension
// 2. PDO
/*
Connecting to the database
*/
$servername="127.0.0.1";
$username="root";
$password="";

// Create a connection 

$conn = mysqli_connect($servername,$username,$password);
 
$sql= "CREATE DATABASE dbsunil";
mysqli_query($conn,$sql);

 if($conn){
    die("sorry we failled to connect".mysqli_connect_error());
 }
 else{
echo "connection was successful";
 }

?>