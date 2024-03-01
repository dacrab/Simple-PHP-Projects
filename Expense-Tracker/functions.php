<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $category = $_POST["category"];

    // Insert expense into database
    $sql = "INSERT INTO expenses (amount, category) VALUES ('$amount', '$category')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
