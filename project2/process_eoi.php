<?php
// Redirect if accessed directly
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: apply.html");
    exit();
}

// Connect to database
$host = "localhost";
$user = "root";
$pass = ""; // default for XAMPP
$dbname = "eoi_project2_3_database";                   //NOTE THIS IS FOR NEW APPLY PAGE DIRECTORY...<form method="post" action="process_eoi_project2_3.php" novalidate="novalidate">

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}



?>