<?php 
include("../database/db.php");

$COid = $_GET['clientorderno'];

$sql = "DELETE FROM clientorder WHERE ClientOrderNo=$COid" ;

if ($conn->query($sql) === TRUE) {
  header('Location: ../php/orderClientPage.php');
}


?>