<?php
include 'db.php';

$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$expiry_date = $_POST['expiry_date'];

$sql = "INSERT INTO medicines (name, quantity, price, expiry_date) VALUES ('$name', $quantity, $price, '$expiry_date')";

if ($conn->query($sql) === TRUE) {
    echo "New medicine added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
