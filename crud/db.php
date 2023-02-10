<?php
$servername = "db";
$username = "capp22";
$password = "Anupbasnet@007";
$dbname = "capp22";
// creating connection

$conn = new mysqli ($servername, $username, $password, $dbname);

// check the connection
if ($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}
?>