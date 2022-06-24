<?php
// $host = "localhost";
// $user = "root";
// $password = "";
// $db = "ecoex";

$host = "119.18.54.94";
$user = "printrly_ecoex";
$password = "cv@K?h{~yKng";
$db = "printrly_ecoex";

$conn = mysqli_connect($host, $user, $password, $db);

if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
