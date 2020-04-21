<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD PHP</title>
</head>
<body>
    <h2>Customer List</h2>
    <p><a href="add.php">Add Customer</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Customers Name</th>
            <th>Customers Age</th>
            <th>Customers Address</th>
            <th>Action</th>
        </tr>
        <?php
            include "connection.php"; 
            $number = 0;
            $sql = "SELECT * FROM customers";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { $number++;
        ?>
        <tr>
            <td><?php echo $number; ?></td>
            <td><?php echo $row["customers_name"]; ?></td>
            <td><?php echo $row["customers_age"]; ?></td>
            <td><?php echo $row["customers_address"]; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row["customers_id"]; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row["customers_id"]; ?>">Delete</a>
            </td>
        </tr>
        <?php } } else { ?> 
        <tr>
            <td colspan="3">0 results</td>
        </tr>
        <?php } $conn->close(); ?>
    </table>
</body>
</html>