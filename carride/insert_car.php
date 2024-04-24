<?php
include 'db.php';

$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$registration_number = $_POST['registration_number'];
$driver_name = $_POST['driver_name'];
$contact_number = $_POST['contact_number'];

$sql = "INSERT INTO cars (make, model, year, registration_number, driver_name, contact_number) VALUES ('$make', '$model', $year, '$registration_number', '$driver_name', '$contact_number')";

if ($conn->query($sql) === TRUE) {
    echo "New car added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
