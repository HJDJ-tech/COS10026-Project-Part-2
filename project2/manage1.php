<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="HJDJ IT, IT jobs, software jobs, tech careers, job application, software engineering, developer jobs, IT careers, job openings, apply online">
    <title>HJDJ IT</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/png" href="images/logoweb.png">
  </head>
  <body>
    <!-- div header -->
    <div class="header">
      <div class="logo-container">
        <img src="images/image.png" alt="HJDJ Logo" />
      </div>
      <!-- Site navigation -->
      <nav>
        <ul class="menu">
            <li>MANAGER SITE</li>
          <li><a href="index.php">Logout</a></li>
        
        </ul>
      </nav>
    </div>
<?php
// manage.php - A management interface for EOIs in the 'project_2' database

$host = 'localhost';
$user = 'root';  // Change as needed
$password = ''; // Change as needed
$dbname = 'project_2';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
    echo "<p>All EOIs for job reference $job_ref have been deleted.</p>";
} elseif ($action == 'update_status' && !empty($_POST['email']) && !empty($_POST['status'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $status = $conn->real_escape_string($_POST['status']);
    $conn->query("UPDATE eoi SET Status = '$status' WHERE Email = '$email'");
    echo "<p>Status updated for $email to $status.</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage EOIs</title>
</head>
<body>
<h1>EOI Management</h1>
<p>List all recorded data</p>
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
<p>Find Applicant</P>
<form method="post">
    First Name: <input type="text" name="first_name"> Last Name: <input type="text" name="last_name">
    <button name="action" value="list_by_name">List EOIs</button><br><br>
  <p>Delete Reference</p>
    Job Reference to Delete: <input type="text" name="job_ref">
    <button name="action" value="delete_by_jobref">Delete EOIs by Job Reference</button><br><br>
   <p>Change Status</p>
   Applicant Email: <input type="text" name="email"> New Status:
    <select name="status">
        <option value="Choose Status">--Choose Status--</option>
        <option value="New">New</option>
        <option value="Current">Current</option>
        <option value="Final">Final</option>
    </select>
    <button name="action" value="update_status">Update Status</button>
</form>

<?php
if ($result && $result instanceof mysqli_result) {
    echo "<table border='1'><tr>
        <th>EOI Number</th><th>JobRef</th><th>First</th><th>Last</th><th>Gender</th><th>DOB</th>
        <th>Street</th><th>Suburb</th><th>State</th><th>Postcode</th>
        <th>Email</th><th>Phone</th><th>Availability</th><th>WorkRights</th><th>Skills</th><th>Status</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['EOInumber']}</td><td>{$row['JobReferenceNumber']}</td><td>{$row['FirstName']}</td><td>{$row['LastName']}</td>
              <td>{$row['Gender']}</td><td>{$row['DOB']}</td><td>{$row['StreetAddress']}</td>
              <td>{$row['SuburbTown']}</td><td>{$row['State']}</td><td>{$row['Postcode']}</td>
              <td>{$row['Email']}</td><td>{$row['PhoneNumber']}</td><td>{$row['Availability']}</td>
              <td>{$row['WorkRights']}</td><td>{$row['OtherSkills']}</td><td>{$row['Status']}</td></tr>";
    }
    echo "</table>";
}
$conn->close();
?>
</body>
</html>


     <div class="footer">
      <!-- Jira link-->
      <div class="logofooter">
        <img src="images/image1.jpg" alt="HJDJ Logo" />
      </div>
      <div class="objfooter">
        <h3 style="margin-bottom: 15px">Contact</h3>
        <div class="link">
          <a
            href="https://hjdj2025swin.atlassian.net/jira/software/projects/SCRUM/boards/1/backlog?atlOrigin=eyJpIjoiNTNmYmIyMzMyZDlhNGJhNzllODI0YTMyNmJkMWEzNDEiLCJwIjoiaiJ9"
          >
            Jira Project
          </a>
        </div>
        <div class="email">
          Email:
          <a href="mailto:someone@example.com">HJDJcarrier@hjdj.com.au</a>
        </div>
        <div class="megaphonetelephone">
          <a>Tel: 408-486-1405</a>
        </div>
      </div>
      <div class="objfooter">
        <h3 style="margin-bottom: 15px">Company</h3>
        <div class="link">
          <a>
            About us
          </a>
        </div>
        <div class="email">
          
          <a>Event </a>
        </div>
        <div class="megaphonetelephone">
          <a>Terms and conditions</a>
        </div>
      </div>
      <div class="objfooter">
        <h3 style="margin-bottom: 15px">Follow Us</h3>
        <div class="link">
          <a href="https://github.com/HJDJ-tech/COS10026-Project-Part-1" target="_blank">GitHub</a>
        </div>
        <div class="email">
          <a>Instagram</a>
        </div>
        <div class="megaphonetelephone">
          <a>Twitter</a>
        </div>
      </div>
    </div>
  