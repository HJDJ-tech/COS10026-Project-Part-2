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

// Helper function
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Validate & sanitize input
$errors = [];

$jobRef = isset($_POST['referencenumber']) ? clean_input($_POST['referencenumber']) : '';
$firstName = isset($_POST['given']) ? clean_input($_POST['given']) : '';
$lastName = isset($_POST['family']) ? clean_input($_POST['family']) : '';
$gender = isset($_POST['Gender']) ? clean_input($_POST['Gender']) : '';
$dob = isset($_POST['d']) ? clean_input($_POST['d']) : '';
$address = isset($_POST['Adress']) ? clean_input($_POST['Adress']) : '';
$suburb = isset($_POST['suburb']) ? clean_input($_POST['suburb']) : '';
$state = isset($_POST['state']) ? clean_input($_POST['state']) : '';
$postcode = isset($_POST['postcode']) ? clean_input($_POST['postcode']) : '';
$email = isset($_POST['email']) ? clean_input($_POST['email']) : '';
$phone = isset($_POST['phone']) ? clean_input($_POST['phone']) : '';
$availability = isset($_POST['availability']) ? clean_input($_POST['availability']) : '';
$workrights = isset($_POST['workrights']) ? clean_input($_POST['workrights']) : '';
$otherSkills = isset($_POST['description']) ? clean_input($_POST['description']) : '';

$validStates = [
    "VIC" => ['3', '8'],
    "NSW" => ['1', '2'],
    "QLD" => ['4', '9'],
    "NT" => ['0'],
    "WA" => ['6'],
    "SA" => ['5'],
    "TAS" => ['7'],
    "ACT" => ['0']
];

// Server-side validation
if (!preg_match("/^[A-Za-z]{1,20}$/", $firstName)) $errors[] = "First name must be max 20 letters.";
if (!preg_match("/^[A-Za-z]{1,20}$/", $lastName)) $errors[] = "Last name must be max 20 letters.";
if (!isset($validStates[$state])) $errors[] = "Invalid state.";
if (!preg_match("/^\d{4}$/", $postcode) || !in_array($postcode[0], $validStates[$state])) {
    $errors[] = "Postcode doesn't match the state.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email address.";
if (!preg_match("/^\d{8,12}$/", str_replace(' ', '', $phone))) $errors[] = "Invalid phone number.";
if (empty($availability)) $errors[] = "Availability is required.";
if (empty($workrights)) $errors[] = "Work Rights are required.";

?>