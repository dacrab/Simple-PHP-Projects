<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Blog System</h1>
    <a href="create_post.php">Create New Post</a>
    <div class="posts">
        <?php
        $sql = "SELECT * FROM posts";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='post'><h2>" . $row["title"] . "</h2><p>" . $row["content"] . "</p><a href='view_post.php?id=" . $row["id"] . "'>View</a></div>";
            }
        } else {
            echo "No posts available";
        }
        ?>
    </div>
</body>
</html>
