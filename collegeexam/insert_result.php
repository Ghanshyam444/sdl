<?php
include 'db.php';

$student_id = $_POST['student_id'];
$marks_obtained = $_POST['marks_obtained'];

$sql = "INSERT INTO results (student_id, marks_obtained) VALUES ($student_id, $marks_obtained)";

if ($conn->query($sql) === TRUE) {
    echo "Result recorded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
