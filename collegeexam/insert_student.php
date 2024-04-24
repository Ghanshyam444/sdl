<?php
include 'db.php';

$name = $_POST['name'];
$roll_number = $_POST['roll_number'];

$sql = "INSERT INTO students (name, roll_number) VALUES ('$name', '$roll_number')";

if ($conn->query($sql) === TRUE) {
    echo "New student added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
