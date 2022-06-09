<?php include('../database/db.php');

if(isset($_POST{'submit'})){
   $numorder = $_POST['numorder'];
   $orderid = rand(10, 9999);
   $clientid = $_POST['clientId'];
   $clientname = $_POST['clientName'];
   $productArray = $_POST['productId'];
   $orderstatus = $_POST['orderStatus'];
   $count = 0;
   foreach($productArray as $parray){
        $productid = $_POST['productId'][$count];
        $quantity = $_POST['qty'][$count];
        $unitprice = $_POST['unitPrice'][$count];

        $sql = "INSERT INTO clientorder (clientorderId, ClientOrderNo, ClientName, OrderItem, ItemQty, ItemPrice, orderStatus) VALUES ('$orderid', '$clientid', '$clientname', '$productid', '$quantity', '$unitprice', '$orderstatus' )";
       
        $conn->query($sql);

        $queryy = "UPDATE products SET ProdQuantity = ProdQuantity - $quantity WHERE ProdId = $productid";
        
        $conn->query($queryy);
        
        $count++;
        
   }
   header('Location: ../php/orderClientPage.php');



}
?> 
