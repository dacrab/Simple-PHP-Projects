<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h1>" . $row["name"] . "</h1><p>" . $row["description"] . "</p><p>Price: $" . $row["price"] . "</p><a href='add_to_cart.php?id=" . $row["id"] . "'>Add to Cart</a>";
    } else {
        echo "Product not found";
    }
    ?>
</body>
</html>
