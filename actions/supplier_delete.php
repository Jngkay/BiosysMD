<?php 
include("../database/db.php");

$sid = $_GET['sid'];

$sql = "DELETE FROM supplier WHERE SupId=$sid" ;

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/viewSupplierPage.php');
}


?>