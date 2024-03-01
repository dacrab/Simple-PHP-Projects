<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM posts WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h1>" . $row["title"] . "</h1><p>" . $row["content"] . "</p>";
    } else {
        echo "Post not found";
    }
    ?>
</body>
</html>
