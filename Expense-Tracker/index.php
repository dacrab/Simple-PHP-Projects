<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Expense Tracker</h1>
    <!-- Expense input form -->
    <form action="functions.php" method="post">
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" required><br><br>
        
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required><br><br>
        
        <input type="submit" value="Add Expense">
    </form>
    <!-- Display expenses -->
    <h2>Expense History</h2>
    <ul>
        <?php
        $sql = "SELECT * FROM expenses";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>{$row['amount']} - {$row['category']}</li>";
            }
        } else {
            echo "<li>No expenses found.</li>";
        }
        ?>
    </ul>
</body>
</html>
