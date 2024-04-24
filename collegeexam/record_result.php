<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Result</title>
</head>
<body>
    <h2>Record Exam Result</h2>
    <form action="insert_result.php" method="POST">
        <label for="student_id">Select Student:</label>
        <select id="student_id" name="student_id" required>
            <?php
            $sql = "SELECT id, name FROM students";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                }
            }
            ?>
        </select><br><br>
        <label for="marks_obtained">Marks Obtained:</label>
        <input type="number" id="marks_obtained" name="marks_obtained" min="0" required><br><br>
        <input type="submit" value="Record Result">
    </form>
</body>
</html>
