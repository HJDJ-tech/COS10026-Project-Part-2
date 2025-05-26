<?php
// Connect to database
$host = "localhost";
$user = "root";
$pass = ""; // default for XAMPP
$dbname = "project_2";                   //NOTE THIS IS FOR NEW APPLY PAGE DIRECTORY...<form method="post" action="process_eoi_project2_3.php" novalidate="novalidate">

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>