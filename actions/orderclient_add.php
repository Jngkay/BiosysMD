<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    $Clientorderno = $_POST['clientorderno'];
    $Clientname = $_POST['clientName'];
    $Itemorder= $_POST['itemorder'];
    $Qty = $_POST['qty'];
    $Unitprice = $_POST['unitprice'];
    
    $sql = "INSERT INTO `clientorder` (ClientOrderNo, ClientName, OrderItem, ItemQty, ItemPrice) 
    VALUES ('$Clientorderno', '$Clientname', '$Itemorder', '$Qty', '$Unitprice')";
    $result = mysqli_query($conn,$sql); 

    if($result){
        header('Location: ../php/orderClientPage.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
