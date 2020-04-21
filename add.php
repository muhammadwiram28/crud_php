<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD PHP</title>
</head>
<body>
    <h2>Add Customer</h2>
    <p><a href="index.php">Back</a></p>
    <form action="add_action.php" method="post"> 
        <label for="customers_name">Customers name:</label><br>
        <input type="text" id="customers_name" name="customers_name"><br>
        <label for="customers_age">Customers age:</label><br>
        <input type="text" id="customers_age" name="customers_age"><br>
        <label for="customers_address">Customers address:</label><br>
        <input type="text" id="customers_address" name="customers_address"><br><br>
        <input type="submit" value="Add">
    </form> 
</body>
</html>