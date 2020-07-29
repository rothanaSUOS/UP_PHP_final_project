<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql= "SELECT * FROM food_current_day_list";
$result = $conn->query($sql);

?>