<?php
// Connect to MySQL database (replace 'username', 'password', and 'database_name' with your MySQL credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "cookie";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username from the form
    $username = $_POST['username'];
    
    // Validate username (optional)
    // Here, we're just checking if it's not empty
    if (empty($username)) {
        echo "Username cannot be empty";
    } else {
        // Escape any special characters in the username to prevent SQL injection
        $username = mysqli_real_escape_string($conn, $username);
        
        // Insert the username into the database
        $sql = "INSERT INTO users (username) VALUES ('$username')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
