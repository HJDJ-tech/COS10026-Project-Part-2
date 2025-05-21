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
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: manage.php");
    exit;
}
?>
<?php if (isset($_SESSION['email'])): ?>
  <p>Welcome, Manager <?= htmlspecialchars($_SESSION['email']) ?> 
<?php endif; ?>

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
  