<?php include('../database/db.php');
    $password = $_POST["password"];
    $sql = "UPDATE users SET UserPassword='$password'";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../php/settingPage.php');
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();

    ?>