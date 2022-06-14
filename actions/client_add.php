<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    $clientname = $_POST['clientname'];
    $clientaddress = $_POST['clientaddress'];
   

    $sql = "INSERT INTO `clients` (ClientName, ClientAddress) 
    VALUES ('$clientname','$clientaddress')";
    $result = mysqli_query($conn,$sql); 

    if($result){
        header('Location: ../php/viewClientPage.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
