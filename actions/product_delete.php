<?php 
include("../database/db.php");

$pid = $_GET['pid'];

$sql = "DELETE FROM products WHERE ProdId=$pid";

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/viewProductPage.php');
}


?>