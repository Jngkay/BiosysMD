<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    $numberorder = $_POST['numorder'];
    $orderid = rand(100, 99999);
    $purchaseorderno = $_POST['purchaseorderno'];
    $suppliername = $_POST['supplierName'];
    $productorderArray = $_POST['productId'];
    $orderstatus = $_POST['orderstatus'];
    $counter = 0;
    foreach($productorderArray as $poarray){
        $productID = $_POST['productId'][$counter];
        $quantity = $_POST['qty'][$counter];
        $unitprice = $_POST['unitPrice'][$counter];

        // Add Purchase Order
        $sql = "INSERT INTO purchaseorder (PurchaseorderId, PurchaseorderNo, SupplierName, Orders, OrderQty, OrderPrice, OrderStatus) VALUES ('$orderid', '$purchaseorderno', '$suppliername', '$productID', '$quantity', '$unitprice', '$orderstatus')";
        $conn->query($sql);

         // Update Product
        $quer = "UPDATE products SET ProdQuantity = ProdQuantity + $quantity WHERE ProdId = $productID";

        $conn->query($quer);

        $counter++;
    }

    header('Location: ../php/orderPurchasePage.php');
}
?>