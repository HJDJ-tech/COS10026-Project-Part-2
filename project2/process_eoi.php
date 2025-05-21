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

// Create table FIRST
$conn->query("
    CREATE TABLE FIRST eoi (
        EOInumber INT AUTO_INCREMENT PRIMARY KEY,
        JobReferenceNumber VARCHAR(20) NOT NULL,
        FirstName VARCHAR(20) NOT NULL,
        LastName VARCHAR(20) NOT NULL,
        Gender VARCHAR(10),
        DOB DATE,
        StreetAddress VARCHAR(40),
        SuburbTown VARCHAR(40),
        State VARCHAR(3),
        Postcode VARCHAR(4),
        Email VARCHAR(100),
        PhoneNumber VARCHAR(12),
        Availability VARCHAR(20),
        WorkRights VARCHAR(30),
        Skill1 VARCHAR(50),
        Skill2 VARCHAR(50),
        Skill3 VARCHAR(50),
        OtherSkills TEXT,
        Status ENUM('New', 'Current', 'Final') DEFAULT 'New'
    );
");

?>