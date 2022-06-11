<?php

// THIS IS USE EVERYTIME YOU CONNECT

$servername = "remotemysql.com"; // LOCALHOST KAY XAMPP
$username = "SFbfM40rI2"; // BY DEFAULT ITS ROOT
$password = "8YlYXrYVeW"; // BY DEFAULT ITS EMPTY
$dbname = "SFbfM40rI2"; // NAME OF YOUR DATABASE

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>