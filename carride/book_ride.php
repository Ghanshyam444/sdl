<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Ride</title>
</head>
<body>
    <h2>Book a Ride</h2>
    <form action="insert_ride.php" method="POST">
        <label for="car_id">Select Car:</label>
        <select id="car_id" name="car_id" required>
            <?php
            $sql = "SELECT id, make, model FROM cars WHERE status = 'available'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['make'] . " " . $row['model'] . "</option>";
                }
            }
            ?>
        </select><br><br>
        <label for="user_name">User Name:</label>
        <input type="text" id="user_name" name="user_name" required><br><br>
        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number" required><br><br>
        <label for="pickup_location">Pickup Location:</label>
        <input type="text" id="pickup_location" name="pickup_location" required><br><br>
        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" required><br><br>
        <label for="ride_date">Ride Date:</label>
        <input type="date" id="ride_date" name="ride_date" required><br><br>
        <input type="submit" value="Book Ride">
    </form>
</body>
</html>
