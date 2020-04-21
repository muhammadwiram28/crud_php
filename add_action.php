<?php 
include "connection.php";

$customers_name = $_POST['customers_name'];
$customers_age = $_POST['customers_age'];
$customers_address = $_POST['customers_address'];

$sql = "INSERT INTO customers (customers_name, customers_age, customers_address)
             VALUES ('$customers_name', '$customers_age', '$customers_address')";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>