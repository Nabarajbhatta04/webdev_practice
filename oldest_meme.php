<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "meme_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query for oldest post (ascending order)
$sql = "SELECT * FROM memes ORDER BY created_at ASC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $meme = $result->fetch_assoc();
    ?>

    <div>
        <h2><?php echo $meme['title']; ?></h2>
        <img src="uploads/<?php echo $meme['image']; ?>" width="300">
        <p>Posted on: <?php echo $meme['created_at']; ?></p>
    </div>

    <?php
} else {
    echo "No memes found!";
}
?>