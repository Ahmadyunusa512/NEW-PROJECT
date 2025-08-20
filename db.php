<?php
$host = "localhost";
$user = "root"; // change if needed
$pass = ""; // change if needed
$dbname = "vetra_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
