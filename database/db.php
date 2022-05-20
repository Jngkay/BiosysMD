<?php

// THIS IS USE EVERYTIME YOU CONNECT

$servername = "localhost"; // LOCALHOST KAY XAMPP
$username = "root"; // BY DEFAULT ITS ROOT
$password = ""; // BY DEFAULT ITS EMPTY
$dbname = "biosysdb"; // NAME OF YOUR DATABASE

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>