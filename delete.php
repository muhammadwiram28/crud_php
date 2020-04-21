<?php 
include "connection.php";

$id = $_GET['id'];

$sql = "DELETE FROM customers WHERE customers_id = $id";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>