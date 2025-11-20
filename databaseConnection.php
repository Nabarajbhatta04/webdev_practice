<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "website_meme";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("database is not connected!" . mysqli_connect_error());
}
;
?>