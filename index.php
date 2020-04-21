<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD PHP</title>
</head>
<body>
    <div class="container mt-3 mb-3">
        <h2>Customer List</h2>
        <a href="add.php" class="btn btn-primary mt-3 mb-3">Add Customer</a>
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Customers Name</th>
                    <th scope="col">Customers Age</th>
                    <th scope="col">Customers Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
                include "connection.php"; 
                $number = 0;
                $sql = "SELECT * FROM customers";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { $number++;
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $number; ?></th>
                    <td><?php echo $row["customers_name"]; ?></td>
                    <td><?php echo $row["customers_age"]; ?></td>
                    <td><?php echo $row["customers_address"]; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row["customers_id"]; ?>" class="btn btn-outline-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $row["customers_id"]; ?>" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
                <?php } } else { ?> 
                <tr>
                    <td colspan="5">0 results</td>
                </tr>
            </tbody>
            <?php } $conn->close(); ?>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>