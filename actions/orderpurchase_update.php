<?php include('../database/db.php');

$status = $_POST['orderstatus'];
$id = $_POST['purchaseOrderID'];

$sql = "UPDATE purchaseorder SET OrderStatus='$status' WHERE PurchaseorderNo=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../php/orderPurchasePage.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>