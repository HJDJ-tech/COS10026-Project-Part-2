<?php
    require_once("settings.php");
   
    $sql = "SELECT * FROM jobs";
    $result_jobs = mysqli_query($conn, $sql);
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
    <!-- div header -->
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

           <?php if (mysqli_num_rows($result_jobs) > 0): ?>
        <div id="job_list">
            <?php while ($row = mysqli_fetch_assoc($result_jobs)): ?>
                <section class="job_position grey_content_section" id=<?=$row['job_id']?>>
                <h2 class='job_title jobs_page_heading'><?= $row['title'] ?></h2>

                    <section class="job_outline">
                        <h3 class="jobs_page_heading">About the Role</h3>
                        <p><?= $row["description"] ?></p>
                    </section>

                <section class="job_information">
                    <section class="job_responsibilities">
                        <h3 class="jobs_page_heading center_heading">Responsibilities</h3>

                        <?php
                            $sql = sprintf("SELECT * FROM responsibilities WHERE job_id = '%s'", $row["job_id"]);
                            $result_responsibilities = mysqli_query($conn, $sql);
                        ?>

                        <ol>
                            <?php 
                                while ($item = mysqli_fetch_assoc($result_responsibilities)) {
                                    foreach ($item as $column_name => $value) {
                                        if (strpos($column_name, 'bp') === 0 && !empty($value)){
                                            echo "<li>$value</li>";
                                        }
                                    }
                                }
                            ?>
                        </ol>
                    </section>   

                    <section class="required_quals">
                        <h3 class="jobs_page_heading center_heading">Qualifications and Skills</h3>
                        <h4 class="jobs_page_heading center_heading">Required:</h4>

                        <?php
                            $sql = sprintf("SELECT * FROM required_skills WHERE job_id = '%s'", $row["job_id"]);
                            $result_required = mysqli_query($conn, $sql);
                        ?>

                        <ul>
                            <?php 
                                while ($item = mysqli_fetch_assoc($result_required)) {
                                    foreach ($item as $column_name => $value) {
                                        if (strpos($column_name, 'bp') === 0 && !empty($value)){
                                            echo "<li>$value</li>";
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </section>

                    <section class="preferred_quals">
                        <h4 class="jobs_page_heading center_heading">Preferred:</h4>
                        <?php
                            $sql = sprintf("SELECT * FROM preferred_skills WHERE job_id = '%s'", $row["job_id"]);
                            $result_preferred = mysqli_query($conn, $sql);
                        ?>
                        <ul>
                            <?php 
                                while ($item = mysqli_fetch_assoc($result_preferred)) {
                                    foreach ($item as $column_name => $value) {
                                        if (strpos($column_name, 'bp') === 0 && !empty($value)){
                                            echo "<li>$value</li>";
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </section>

                    <section class="job_salary">
                        <h3 class="jobs_page_heading center_heading">Salary and Benefits</h3>
                        <?php
                            $sql = sprintf("SELECT * FROM salary_and_benefits WHERE job_id = '%s'", $row["job_id"]);
                            $result_salary = mysqli_query($conn, $sql);
                        ?>
                        <ul>
                            <?php 
                                while ($item = mysqli_fetch_assoc($result_salary)) {
                                    foreach ($item as $column_name => $value) {
                                        if (strpos($column_name, 'bp') === 0 && !empty($value)){
                                            echo "<li>$value</li>";
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </section>

                    <h4 class="team_lead jobs_page_heading">Reports to: <?= $row['reports_to'] ?></h4>
                </section>

                <form action="apply.html">
                    <button class="btn">Apply Now</button>
                </form>
                <p>Ref #: <?= $row['job_id'] ?></p>
                </section>
            <?php endwhile; ?>
            
        </div>
    <?php endif; ?>

            <!-- This is The Footer -->
            <?php include "footer.inc";?>
            <!-- End Of Footer -->
        </main>
    </body>
</html>
