<?php include('../database/db.php');

$orderstat = $_POST['orderStatus'];
$corderno = $_POST['clientorderno'];


$sql = "UPDATE clientorder SET orderStatus='$orderstat' WHERE ClientOrderNo=$corderno";

if ($conn->query($sql) === TRUE) {
    header('Location: ../php/orderClientPage.php');
} else {
  echo "Error updating record: " . $conn->error;
}

?>