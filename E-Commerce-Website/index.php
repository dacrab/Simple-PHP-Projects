<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Products</h1>
    <div class="products">
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'><h2>" . $row["name"] . "</h2><p>" . $row["description"] . "</p><p>Price: $" . $row["price"] . "</p><a href='product.php?id=" . $row["id"] . "'>View Details</a></div>";
            }
        } else {
            echo "No products available";
        }
        ?>
    </div>
</body>
</html>
