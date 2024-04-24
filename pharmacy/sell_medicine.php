<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Medicine</title>
</head>
<body>
    <h2>Sell Medicine</h2>
    <form action="insert_sale.php" method="POST">
        <label for="medicine_id">Select Medicine:</label>
        <select id="medicine_id" name="medicine_id" required>
            <?php
            $sql = "SELECT id, name FROM medicines WHERE quantity > 0";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                }
            }
            ?>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br><br>
        <input type="submit" value="Sell Medicine">
    </form>
</body>
</html>
