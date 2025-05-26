<?php
// Connect to database
require_once("settings.php");

// Helper function
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Validate & sanitize input
$errors = [];

$jobRef = clean_input($_POST['referencenumber'] ?? '');
$firstName = clean_input($_POST['given'] ?? '');
$lastName = clean_input($_POST['family'] ?? '');
$gender = clean_input($_POST['Gender'] ?? '');
$dob = clean_input($_POST['d'] ?? '');
$address = clean_input($_POST['Adress'] ?? '');
$suburb = clean_input($_POST['suburb'] ?? '');
$state = clean_input($_POST['state'] ?? '');
$postcode = clean_input($_POST['postcode'] ?? '');
$email = clean_input($_POST['email'] ?? '');
$phone = clean_input($_POST['phone'] ?? '');
$availability = clean_input($_POST['availability'] ?? '');
$workrights = clean_input($_POST['workrights'] ?? '');
$otherSkills = clean_input($_POST['description'] ?? '');

$validStates = [
    "VIC" => ['3', '8'],
    "NSW" => ['1', '2'],
    "QLD" => ['4', '9'],
    "NT"  => ['0'],
    "WA"  => ['6'],
    "SA"  => ['5'],
    "TAS" => ['7'],
    "ACT" => ['0']
];

// Basic validation
if (!preg_match("/^[A-Za-z]{1,20}$/", $firstName)) $errors[] = "First name must be max 20 letters.";
if (!preg_match("/^[A-Za-z]{1,20}$/", $lastName)) $errors[] = "Last name must be max 20 letters.";
if (!preg_match("/^\d{4}$/", $postcode)) {
    $errors[] = "Postcode must be a 4-digit number.";
} elseif (!isset($validStates[$state]) || !in_array($postcode[0], $validStates[$state])) {
    $errors[] = "Postcode doesn't match the selected state.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email address.";
if (!preg_match("/^\d{8,12}$/", str_replace(' ', '', $phone))) $errors[] = "Invalid phone number.";
if (empty($availability)) $errors[] = "Availability is required.";
if (empty($workrights)) $errors[] = "Work Rights are required.";

if (!empty($errors)) {
    echo "<h2>Submission Failed</h2><ul>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul><a href='apply.php'>Go back</a>";
    exit();
}

// INSERT data into the correct table: eoi_project2_3
$sql = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, Gender, DOB, StreetAddress, SuburbTown, State, Postcode, Email, PhoneNumber, Availability, WorkRights, OtherSkills)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ssssssssssssss", 
    $jobRef, $firstName, $lastName, $gender, $dob, $address, $suburb,
    $state, $postcode, $email, $phone, $availability, $workrights, $otherSkills
);

if ($stmt->execute()) {
    echo "<h2>Application Submitted Successfully</h2><a href='apply.php'>Back to Form</a>";
} else {
    echo "Database error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
