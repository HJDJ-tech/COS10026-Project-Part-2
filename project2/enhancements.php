<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HJDJ IT, Enhancements, IT jobs, software jobs, tech careers, job application, software engineering, developer jobs, IT careers, job openings, apply online">
        <title>HJDJ IT Enhancements</title>
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="icon" type="image/png" href="images/logoweb.png">
    </head>
    
    <body>
    <!-- div header -->
    <?php include "header.inc";?>
      <!-- Site navigation -->
     <?php include "nav.inc";?>
    </div>
        <main>
            <section id="enhancement_section">
                <h1>Enhancements</h1>
            </section>

            <section id="grey_section">
                <h2>Options</h2>
                <br>
                <ul id="about_info">
                    <li>Provide the manager with the ability to select the field on which to sort the order in which the EOI records are displayed.</li>
                    <li>Create a manager registration page with server side validation requiring unique a username and password rule, and store this information in a table.</li>
                    <li>Control access to manage.php by checking username and password.</li>
                    <li>Have access to the web site disabled for the user for a peroid of time on, say, three or more invalid login attempts.</li>
                </ul>
            </section>

            <section id="white_section">
                <h2>Our Implemented Enhancements</h2>
                <br>
                <h3>Control access to manage.php by checking username and password.</h3>
                <br>
                <p>This enhancement was created and implemented by Jerry when creating manage.php. The code for checking email (username), and password can be found inside of manage.php</p>
            </section>



        <!--Footer with Jira link-->
      <?php include "footer.inc";?>
    </main>
</body>

</html>