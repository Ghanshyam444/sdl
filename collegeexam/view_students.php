<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
</head>
<body>
    <h2>Students List</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Roll Number</th>
        </tr>
        <?php
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['roll_number'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No students available</td></tr>";
        }
        ?>
    </table>
</body>
</html>
