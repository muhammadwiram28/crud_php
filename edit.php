<?php 
include "connection.php";

$id = $_GET['id'];

$sql = "SELECT * FROM customers WHERE customers_id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $customers_id = $row["customers_id"];
    $customers_name = $row["customers_name"];
    $customers_age = $row["customers_age"];
    $customers_address = $row["customers_address"];
} else {
    echo "0 results";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD PHP</title>
</head>
<body>
    <h2>Edit Customer</h2>
    <p><a href="index.php">Back</a></p>
    <form action="edit_action.php" method="post"> 
        <input type="hidden" name="customers_id" value="<?php echo $customers_id; ?>">
        <label for="customers_name">Customers name:</label><br>
        <input type="text" id="customers_name" name="customers_name" value="<?php echo $customers_name; ?>"><br>
        <label for="customers_age">Customers age:</label><br>
        <input type="text" id="customers_age" name="customers_age" value="<?php echo $customers_age; ?>"><br>
        <label for="customers_address">Customers address:</label><br>
        <input type="text" id="customers_address" name="customers_address" value="<?php echo $customers_address; ?>"><br><br>
        <input type="submit" value="Edit">
    </form> 
</body>
</html>
<?php $conn->close(); ?>