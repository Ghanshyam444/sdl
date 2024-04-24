<?php
include 'db.php';

$name = $_POST['name'];
$blood_group = $_POST['blood_group'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];

$sql = "INSERT INTO donors (name, blood_group, contact_number, email) VALUES ('$name', '$blood_group', '$contact_number', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
