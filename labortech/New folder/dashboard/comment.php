<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Admin Dashboard</title>
    <link rel="stylesheet" href="css/comment.css">
</head>
<body>
    <header>
        <h1>Comment Admin Dashboard</h1>
    </header>
    <nav>
        <ul>
            <li><a href="admin_dashboard.php">Home</a></li>
            <li><a href="comments.php">Manage Comments</a></li>
            <!-- Add more navigation links here -->
        </ul>
    </nav>
    <main>
        <section>
            <h2>Welcome to the Admin Dashboard</h2>
            <!-- Content of the dashboard goes here -->
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Comment Admin Dashboard</p>
    </footer>
</body>
</html>


<?php
include ('conn.php');

// Add your comment management logic here

// Example: Fetch and display comments
$sql = "SELECT * FROM comments";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<!-- Same as the HTML example above -->
<body>
    <!-- Display comments -->
    <main>
        <section>
            <h2>Manage Comments</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Author</th>
                        <th>Content</th>
                        <th>Timestamp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['author']; ?></td>
                            <td><?= $row['content']; ?></td>
                            <td><?= $row['timestamp']; ?></td>
                            <td>
                                <a href="edit_comment.php?id=<?= $row['id']; ?>">Edit</a>
                                <a href="delete_comment.php?id=<?= $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>

