<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="HJDJ IT, IT jobs, software jobs, tech careers, job application, software engineering, developer jobs, IT careers, job openings, apply online">
    <title>HJDJ IT Manager Portal</title>
    <link rel="stylesheet" href="styles/styles.css?v2">
    <link rel="icon" type="image/png" href="images/logoweb.png">
    <style>
      select[name^="status"] {
        width: 70px;
        padding: 4px;
        font-size: 12px;
      }
    </style>
  </head>
  <body>
    <?php include "header.inc";?>
      <nav>
        <ul class="menu">
            <li>Manager Site</li>
            <li><a href="index.php">Logout</a></li>
        </ul>
      </nav>
    </div>
    <div class="table-container">
      
<?php
require_once("settings.php"); //Database connection

$conn->query("UPDATE eoi SET Status = 'New' WHERE Status IS NULL OR Status = ''");

$action = $_POST['action'] ?? ($_GET['action'] ?? '');
$result = "";

if ($action == 'list_all') {
    $result = $conn->query("SELECT * FROM eoi");
} elseif ($action == 'list_by_position' && !empty($_GET['job_ref'])) {
    $job_ref = $conn->real_escape_string($_GET['job_ref']);
    $result = $conn->query("SELECT * FROM eoi WHERE JobReferenceNumber = '$job_ref'");
} elseif ($action == 'list_by_name') {
    $first = $conn->real_escape_string($_POST['first_name'] ?? '');
    $last = $conn->real_escape_string($_POST['last_name'] ?? '');
    $query = "SELECT * FROM eoi WHERE 1=1";
    if ($first !== '') $query .= " AND FirstName LIKE '%$first%'";
    if ($last !== '') $query .= " AND LastName LIKE '%$last%'";
    $result = $conn->query($query);
} elseif ($action == 'delete_by_jobref' && !empty($_POST['job_ref'])) {
    $job_ref = $conn->real_escape_string($_POST['job_ref']);
    $conn->query("DELETE FROM eoi WHERE JobReferenceNumber = '$job_ref'");
    echo "<div class='success-message'>All EOIs for job reference $job_ref have been deleted.</div>";
} elseif ($action == 'update_status' && isset($_POST['status']) && isset($_POST['eoi_number'])) {
    $eoi_number = intval($_POST['eoi_number']);
    $newStatus = $conn->real_escape_string($_POST['status']);
    $conn->query("UPDATE eoi SET Status = '$newStatus' WHERE EOInumber = $eoi_number");
    
}
if ($action == 'bulk_update_status' && isset($_POST['status'])) {
    foreach ($_POST['status'] as $eoi_number => $status_value) {
        $eoi_number = intval($eoi_number);
        $status_value = $conn->real_escape_string($status_value);
        $conn->query("UPDATE eoi SET Status = '$status_value' WHERE EOInumber = $eoi_number");
    }
   
     echo "<div class='success-message'>Status updated successfully.</div>";
}
?>
<h1>EOI Management</h1>
<form method="post">
    <button name="action" value="list_all">List All EOIs</button><br><br>
</form>
<form method="get">
    <label for="job_ref">Job Reference Filter:</label>
    <select name="job_ref" onchange="this.form.submit()">
        <option value="">--Select--</option>
        <option value="DA301">DA301</option>
        <option value="SE401">SE401</option>
        <option value="UX204">UX204</option>
        <option value="IT102">IT102</option>
        <option value="CS507">CS507</option>
    </select>
    <input type="hidden" name="action" value="list_by_position">
    <noscript><input type="submit" value="Filter"></noscript>
</form>
<br>
<p>Find Applicant</p>
<form method="post">
    First Name: <input type="text" name="first_name"> Last Name: <input type="text" name="last_name">
    <button name="action" value="list_by_name">List EOIs</button><br><br>
  <p>Delete Reference</p>
    Job Reference to Delete: <input type="text" name="job_ref">
    <button name="action" value="delete_by_jobref">Delete EOIs</button><br><br>
</form>
<?php
if ($result && $result instanceof mysqli_result) {
    echo "<form method='post'><table border='1'><tr>
        <th>EOI Number</th><th>JobRef</th><th>First</th><th>Last</th><th>Gender</th><th>DOB</th>
        <th>Street</th><th>Suburb</th><th>State</th><th>Postcode</th>
        <th>Email</th><th>Phone</th><th>Availability</th><th>WorkRights</th><th>Skills</th><th>Status</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        $currentStatus = htmlspecialchars($row['Status'] ?? 'New');
        echo "<tr>
            <td>{$row['EOInumber']}</td>
            <td>{$row['JobReferenceNumber']}</td>
            <td>{$row['FirstName']}</td>
            <td>{$row['LastName']}</td>
            <td>{$row['Gender']}</td>
            <td>{$row['DOB']}</td>
            <td>{$row['StreetAddress']}</td>
            <td>{$row['SuburbTown']}</td>
            <td>{$row['State']}</td>
            <td>{$row['Postcode']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['PhoneNumber']}</td>
            <td>{$row['Availability']}</td>
            <td>{$row['WorkRights']}</td>
            <td>{$row['OtherSkills']}</td>
            <td>
                <select name='status[{$row['EOInumber']}]'>
                    <option value='New'" . ($currentStatus == 'New' ? " selected" : "") . ">New</option>
                    <option value='Current'" . ($currentStatus == 'Current' ? " selected" : "") . ">Current</option>
                    <option value='Final'" . ($currentStatus == 'Final' ? " selected" : "") . ">Final</option>
                </select>
            </td>
        </tr>";
    }
    echo "</table><br><button name='action' value='bulk_update_status'>Update Status</button></form>";
}

$conn->close();
?>
</div>
     <?php include "footer.inc";?>
</body>
</html> 