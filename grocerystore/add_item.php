<?php
include 'db_connection.php';

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO items (name, price, quantity) VALUES ('$name', '$price', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Item added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
