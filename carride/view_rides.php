<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Rides</title>
</head>
<body>
    <h2>Booked Rides</h2>
    <table border="1">
        <tr>
        <th>Car</th>
            <th>User Name</th>
            <th>Contact Number</th>
            <th>Pickup Location</th>
            <th>Destination</th>
            <th>Ride Date</th>
        </tr>
        <?php
        $sql = "SELECT rides.*, cars.make, cars.model FROM rides INNER JOIN cars ON rides.car_id = cars.id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['make'] . " " . $row['model'] . "</td>";
                echo "<td>" . $row['user_name'] . "</td>";
                echo "<td>" . $row['contact_number'] . "</td>";
                echo "<td>" . $row['pickup_location'] . "</td>";
                echo "<td>" . $row['destination'] . "</td>";
                echo "<td>" . $row['ride_date'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No rides booked</td></tr>";
        }
        ?>
    </table>
</body>
</html>
