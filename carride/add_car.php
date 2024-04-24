<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
</head>
<body>
    <h2>Add New Car</h2>
    <form action="insert_car.php" method="POST">
        <label for="make">Make:</label>
        <input type="text" id="make" name="make" required><br><br>
        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br><br>
        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required><br><br>
        <label for="registration_number">Registration Number:</label>
        <input type="text" id="registration_number" name="registration_number" required><br><br>
        <label for="driver_name">Driver Name:</label>
        <input type="text" id="driver_name" name="driver_name" required><br><br>
        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
