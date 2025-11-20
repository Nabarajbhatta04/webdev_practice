<?php
include "databaseConnection.php";
$search = "";
if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);


    $sql = "SELECT * FROM search WHERE
            meme_title LIKE '%$search%' 
            OR meme_description LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);
}
?>

< <form action="" method="GET">
    <input type="text" name="search" placeholder="Search memes..." value="<?php echo $search; ?>">

    <button type="submit">Search</button>
    </form>

    <hr>

    <?php
    if (isset($result)) {
        if (mysqli_num_rows(result: $result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<h3>" . $row['meme_title'] . "</h3>";
                echo "<p>" . $row['meme_description'] . "</p>";
                echo "<hr>";
            }
        } else {
            echo "No results found!";
        }

    }
    ?>