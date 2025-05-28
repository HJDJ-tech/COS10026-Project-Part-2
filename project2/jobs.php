<?php
    require_once("settings.php");
   
    $sql = "SELECT * FROM jobs";
    $result_jobs = mysqli_query($conn, $sql);

    if (!$result_jobs) {
        die("Error retrieving jobs: " . mysqli_error($conn));
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HJDJ IT, IT jobs, software jobs, tech careers, job application, software engineering, developer jobs, IT careers, job openings, apply online">
        <title>HJDJ IT</title>
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="icon" type="image/png" href="images/logoweb.png">
    </head>

    <body>
    <div>
        
        <!-- Header -->
        <?php include "header.inc";?>
        <!-- Site navigation -->
        <?php include "nav.inc";?>

    </div>
        
        <main>
            <!-- Reasons to work for HJDJ -->
            <div class="jobs_page_header">
                <h1 id="jobs_page_main_heading" class="white_text">HJDJ Careers</h1>
                <img src="images/workers1.png" alt="Workers" id="workers1_img">
                <div id="aside_container">
                    <aside id="job_aside">
                        <h4 class="jobs_page_heading white_text jobs_page_heading">5 reasons why should you work with us:</h4>
                        <ol id="aside_list">
                            <li class="white_text">Flexible work environments and remote opportunities</li>
                            <li class="white_text">Comprehensive health insurance</li>
                            <li class="white_text">Paid certification and training programs</li>
                            <li class="white_text">Retirement savings plan</li>
                            <li class="white_text">Wellness initiatives and team retreats</li>
                        </ol>
                    </aside>
                </div>
            </div>

            <!-- Check that jobs table isn't empty -->
            <?php if (mysqli_num_rows($result_jobs) > 0): ?>

                <?php $index = 0; ?>
                <div id="job_list">

            <!-- Iterate through all the job entries -->
            <?php while ($row = mysqli_fetch_assoc($result_jobs)): ?>

                <!-- Alternate between a dark and light themed background -->
                <?php 
                    $index += 1;
                    if ($index % 2 == 0) {
                        $text_colour = "white_text";
                        $background_colour = "dark_gradient";
                    } else {
                        $text_colour = "";
                        $background_colour = "light_gradient grey_content_section";
                    }
                ?>

                <!-- Display the job listing -->
                <section class="job_position <?= $background_colour ?>" id="<?= $row['job_id'] ?>">
                <h2 class="job_title jobs_page_heading <?= $text_colour ?>"><?= $row['title'] ?></h2>
                    <section class="job_outline">
                        <h3 class="jobs_page_heading <?= $text_colour ?>">About the Role</h3>
                        <p class="<?= $text_colour ?>"><?= $row["description"] ?></p>
                    </section>

                <section class="job_information">
                    <section class="job_responsibilities">
                        <h3 class="jobs_page_heading center_heading <?= $text_colour ?>">Responsibilities</h3>

                        <!-- Create a new query to retrieve the responsibilities -->
                        <?php
                            $sql = sprintf("SELECT * FROM responsibilities WHERE job_id = '%s'", $row["job_id"]);
                            $result_responsibilities = mysqli_query($conn, $sql);
                            // Error handling
                            if (!$result_responsibilities) {
                                die("Error retrieving responsibilities: " . mysqli_error($conn));
                            }
                        ?>

                        <ol class="<?= $text_colour ?>">

                            <!-- Creates a list of responsibilities for the associated job id -->
                            <?php 
                                // Gets all entries from table as an array of keys and values
                                while ($item = mysqli_fetch_assoc($result_responsibilities)) {
                                    // Goes through each pair in the array, getting the key and associated value
                                    foreach ($item as $key => $value) {
                                        // Checks if the key contains the string "bp" 
                                        // at the beginning of the string and the value isn't null
                                        if (strpos($key, 'bp') === 0 && !empty($value)) {
                                            // Creates the list item
                                            echo "<li class='$text_colour'>$value</li>";
                                        }
                                    }
                                }
                            ?>

                        </ol>
                    </section>   

                    <section class="required_quals">
                        <h3 class="jobs_page_heading center_heading <?= $text_colour ?>">Qualifications and Skills</h3>
                        <h4 class="jobs_page_heading center_heading <?= $text_colour ?>">Required:</h4>

                        <?php
                            $sql = sprintf("SELECT * FROM required_skills WHERE job_id = '%s'", $row["job_id"]);
                            $result_required = mysqli_query($conn, $sql);
                            if (!$result_required) {
                                die("Error retrieving required skills: " . mysqli_error($conn));
                            }
                        ?>

                        <ul>

                            <?php 
                                while ($item = mysqli_fetch_assoc($result_required)) {
                                    foreach ($item as $key => $value) {
                                        if (strpos($key, 'bp') === 0 && !empty($value)){
                                            echo "<li class='$text_colour'>$value</li>";
                                        }
                                    }
                                }
                            ?>

                        </ul>
                    </section>

                    <section class="preferred_quals">
                        <h4 class="jobs_page_heading center_heading <?= $text_colour ?>">Preferred:</h4>
                        
                        <?php
                            $sql = sprintf("SELECT * FROM preferred_skills WHERE job_id = '%s'", $row["job_id"]);
                            $result_preferred = mysqli_query($conn, $sql);
                            if (!$result_preferred) {
                                die("Error retrieving preferred skills: " . mysqli_error($conn));
                            }
                        ?>

                        <ul>
                            
                            <?php 
                                while ($item = mysqli_fetch_assoc($result_preferred)) {
                                    foreach ($item as $key => $value) {
                                        if (strpos($key, 'bp') === 0 && !empty($value)){
                                            echo "<li class='$text_colour'>$value</li>";
                                        }
                                    }
                                }
                            ?>

                        </ul>
                    </section>

                    <section class="job_salary">
                        <h3 class="jobs_page_heading center_heading <?= $text_colour ?>">Salary and Benefits</h3>
                        
                        <?php
                            $sql = sprintf("SELECT * FROM salary_and_benefits WHERE job_id = '%s'", $row["job_id"]);
                            $result_salary = mysqli_query($conn, $sql);
                            if (!$result_salary) {
                                die("Error retrieving salary and benefits: " . mysqli_error($conn));
                            }
                        ?>

                        <ul>

                            <?php 
                                while ($item = mysqli_fetch_assoc($result_salary)) {
                                    foreach ($item as $key => $value) {
                                        if (strpos($key, 'bp') === 0 && !empty($value)){
                                            echo "<li class='$text_colour'>$value</li>";
                                        }
                                    }
                                }
                            ?>

                        </ul>
                    </section>

                    <h4 class="team_lead jobs_page_heading <?= $text_colour ?>">Reports to: <?= $row['reports_to'] ?></h4>
                </section>

                <form action="apply.php">
                    <button class="btn">Apply Now</button>
                </form>
                <p class="<?= $text_colour ?>">Ref #: <?= $row['job_id'] ?></p>
                </section>

            <?php endwhile; ?>
            
        </div>

    <?php endif; ?>

            <!-- Footer -->
            <?php include "footer.inc";?>

        </main>
    </body>
</html>
