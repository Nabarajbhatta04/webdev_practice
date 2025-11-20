<!DOCTYPE html>
<html>

<head>
    <title>Simple Comments</title>
    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            padding: 10px 20px;
            background: blue;
            color: white;
            border: none;
        }

        .comment {
            background: #f0f0f0;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <h2>Leave a Comment</h2>

    <!-- Comment Form -->
    <form method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <textarea name="message" placeholder="Your Comment" required></textarea>
        <button type="submit" name="submit">Send</button>
    </form>

    <?php
    // Connect to database
    $conn = new mysqli("localhost", "root", "", "website_meme");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Save comment
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (name, message) VALUES ('$name', '$message')";
        $conn->query($sql);

        echo "<p style='color:green;'>Comment added!</p>";
    }

    // Show all comments
    echo "<h2>Comments</h2>";
    $result = $conn->query("SELECT * FROM comments ORDER BY date DESC");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='comment'>";
            echo "<strong>" . htmlspecialchars($row['name']) . "</strong>";
            echo " <small>(" . $row['date'] . ")</small><br>";
            echo nl2br(htmlspecialchars($row['message']));
            echo "</div>";
        }
    } else {
        echo "<p>No comments yet.</p>";
    }

    $conn->close();
    ?>

</body>

</html>