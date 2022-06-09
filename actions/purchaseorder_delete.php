<?php 
include("../database/db.php");

$cid = $_GET['cid'];

$sql = "DELETE FROM purchaseorder WHERE PurchaseorderNo=$cid" ;

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/orderPurchasePage.php');
}


?>