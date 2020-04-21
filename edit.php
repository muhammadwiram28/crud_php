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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD PHP</title>
</head>
<body>
    <div class="container mt-3 mb-3">
        <h2>Edit Customer</h2>
        <a href="index.php" class="btn btn-light mt-3 mb-3">Back</a>
        <form action="edit_action.php" method="post"> 
            <input type="hidden" name="customers_id" value="<?php echo $customers_id; ?>">
            <div class="form-group">
                <label for="customers_name">Customers name:</label><br>
                <input type="text" class="form-control" id="customers_name" name="customers_name" value="<?php echo $customers_name; ?>">
            </div>
            <div class="form-group">
                <label for="customers_age">Customers age:</label><br>
                <input type="text" class="form-control" id="customers_age" name="customers_age" value="<?php echo $customers_age; ?>">
            </div>
            <div class="form-group">
                <label for="customers_address">Customers address:</label><br>
                <input type="text" class="form-control" id="customers_address" name="customers_address" value="<?php echo $customers_address; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php $conn->close(); ?>