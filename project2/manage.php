
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="HJDJ IT, IT jobs, software jobs, tech careers, job application, software engineering, developer jobs, IT careers, job openings, apply online">
    <title>HJDJ IT</title>
    <link rel="stylesheet" href="styles/styles.css?v2">
    <link rel="icon" type="image/png" href="images/logoweb.png">
  </head>
  <body>
    <!-- div header -->
    <?php include "header.inc";?>
      <!-- Site navigation -->
     <?php include "nav.inc";?>
    </div>

  <!-- Log in site-->
<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "project_2";
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
            $inputError = "input-error";
        }
      }
    }

?>
<div class="login-page">
  <div class="login">
    <p>Manager Login</p>
    <form method="post" action="manage.php">
      Manager Email: <input type="text" name="email" required><br>
      Password: <input type="password" name="password" class="<?php echo $inputError; ?>" required><br>
      <?php if (!empty($error)) echo "<p style='color: red; text-align: center; font-size: 14px;'>$error</p>"; ?>
      <input type="submit" value="Login">
    </form>
  </div>
</div>
      <!-- Footer with Jira Link -->
     <?php include "footer.inc";?>
  </body>
</html>