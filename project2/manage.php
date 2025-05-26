
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="HJDJ IT, IT jobs, software jobs, tech careers, job application, software engineering, developer jobs, IT careers, job openings, apply online">
    <title>HJDJ IT</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/loginstyle.css">
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
          <li><a href="index.php">Home</a></li>
          <li><a href="jobs.php">Jobs</a></li>
          <li><a href="apply.php">Apply</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="manage.php">Manage</a></li>
        </ul>
      </nav>
    </div>

  <!-- Log in site-->
<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";
$error = "";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    if ($stmt) {
        $stmt->bind_param("ss", $email, $password); 
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $_SESSION['email'] = $email;
            header("Location: manage1.php");
            exit;
        } else {
            $error = "Invalid login credentials.";
        }
    } else {
        $error = "SQL error: " . $conn->error;
        
    }
}   
?>
<div class="login-page">
  <div class="login">
    <p>Manager Login</p>
    <form method="post" action="manage.php">
      Manager Email: <input type="text" name="email" required><br>
      Password: <input type="password" name="password" required><br>
      <input type="submit" value="Login">
    </form>
  </div>
</div>
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
  </body>
</html>