<?php 
include "connection.php";

$customers_id = $_POST['customers_id'];
$customers_name = $_POST['customers_name'];
$customers_age = $_POST['customers_age'];
$customers_address = $_POST['customers_address'];

$sql = "UPDATE customers SET customers_name = '$customers_name', 
                             customers_age = '$customers_age', 
                             customers_address = '$customers_address' 
                       WHERE customers_id = $customers_id";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>