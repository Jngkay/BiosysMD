<?php
$uname = $_POST['uname']; // this comes from name input username
$pword = $_POST['pword']; // this comes from name input password

include("../database/db.php"); // INCLUDE THE DATABASE CONNECTION

$sql = "SELECT * FROM users"; // get all data from users table
$result = $conn->query($sql); // query the variable

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $unamefromdb =  $row["UserName"];
   $pwordfromdb =  $row["UserPassword"];

   if($unamefromdb == $uname){
      if($pwordfromdb == $pword){
        header('Location: ../php/dashboard.php');
      }
      else{
        header('Location: ../index.php');
      }
    }
   else{
    header('Location: ../index.php');

   }
    
  }
} else {
  echo "0 results";
}
$conn->close();

?>