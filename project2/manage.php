
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
require_once("settings.php");

$error = "";
$inputError = "";
$remaining = 0;
$banned = false;

if (!isset($_SESSION["attempts"])) { // set attempts to 0 on first visit to manage.php
  $_SESSION["attempts"] = 0;
}
if (isset($_SESSION["banned_login"]) && time() < $_SESSION["banned_login"]) { // checks to see if the user is currently banned, and looks to see if the time is less than the banned login time w3schools.com/php/func_date_time.asp
  $remaining = $_SESSION["banned_login"] - time();
  $error = "You have been timed out for too many failed logins. You are timed out for $remaining seconds.";
  $inputError = "input-error";
  $banned = true; // sets banned to true
} 
elseif (isset($_SESSION["banned_login"]) && time() >= $_SESSION["banned_login"]) { 
  unset($_SESSION["banned_login"]); // resets the banned login and sets attempts to 0 after the ban expires
  $_SESSION["attempts"] = 0;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && !$banned) { // continues if banned is not true
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    if ($stmt) {
        $stmt->bind_param("ss", $email, $password); 
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $_SESSION['email'] = $email;
            $_SESSION["attempts"] = 0;
            header("Location: manage1.php");
            exit;
        } else {
          $_SESSION["attempts"] = ($_SESSION["attempts"] ?? 0) + 1; // checks to see if the user has had any attempts first, and if they haven't had any, assign 0 and then count 1. w3schools.com/php/php_operators.asp
          if ($_SESSION["attempts"] >= 3) { // checks to see if attempts is greater than or equal to 3
            $_SESSION["banned_login"] = time() + 120; // if it is, it bans the user for 120 seconds
            $error = "You have been timed out for too many failed logins. You are timed out for 2 minutes.";
            $banned = true;
            $remaining = 120;
          } else {
            $remaining_attempts = 3 - $_SESSION["attempts"];
            $error = "Invalid login credentials. You will be timed out for 2 minutes in $remaining_attempts attempts";
          }
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
      <input type="submit" value="Login" <?php echo $banned ? "disabled" : ""; ?>> 
    </form>
  </div>
</div>
      <!-- Footer with Jira Link -->
     <?php include "footer.inc";?>
  </body>
</html>