<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Results</title>
</head>
<body>
    <h2>Exam Results</h2>
    <table border="1">
        <tr>
            <th>Student Name</th>
            <th>Marks Obtained</th>
        </tr>
        <?php
        $sql = "SELECT students.name AS student_name, results.marks_obtained FROM results INNER JOIN students ON results.student_id = students.id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['student_name'] . "</td>";
                echo "<td>" . $row['marks_obtained'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No exam results available</td></tr>";
        }
        ?>
    </table>
</body>
</html>
