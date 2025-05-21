<?php
    require_once "settings.php";
    $db_connection = @mysqli_connect($host,$user,$pwd,$sql_db);
    if ($db_connection) {
        $query = "SELECT * FROM jobs";
        $result = mysqli_query($db_connection, $query);
        $gradient = "light_gradient";
        if ($result) {
            <div class='job_list'>;
            while ($row = mysqli_fetch_assoc($result)) {
                
                // <section class='job_position grey_content_section $gradient' id=$row['job_id']>;
                // <h2 class='job_title jobs_page_heading'>$row['title']</h2>;
                // <section class='job_outline'>;
                // <h3 class='jobs_page_heading'>About the Role</h3>;
                // <p>$row['description']</p>;
                // </section>;

                // <section class='job_information'>;
                // <section class='job_responsibilities'>;
                // <h3 class='jobs_page_heading center_heading'>Responsibilities</h3>;
                // <ol>;
                // <li>Manage network-related projects, including design, planning, execution, and handover to Operations. </li>;
                // <li>Manage project timelines, identify and resolve issues while ensuring minimal impact on BAU operations.</li>;
                // <li>Adhere to network policies, procedures, and security best practices during project deployments.</li>;
                // <li>Collaborate with stakeholders to analyse customer needs and translate them into effective network solutions.</li>;
                // </ol>;
                // </section>;

                // <section class='required_quals'>;
                // <h3 class='jobs_page_heading center_heading'>Qualifications and Skills</h3>;
                // <h4 class='jobs_page_heading center_heading'>Required</h4>;
                // <ul>;
                // <li>Bachelor’s degree in a related field.</li>;
                // <li>2+ years of data analysis experience.</li>;
                // <li>Strong skills in SQL.</li>;
                // <li>Experience with Excel and spreadsheets.</li>;
                // <li>Good problem-solving skills.</li>;
                // <li>Clear communication skills.</li>;
                // <li>Ability to work with large datasets.</li>;
                // </ul>;
                // </section>;

                // <section class='preferred_quals'>;
                // <h4 class='jobs_page_heading center_heading'>Preferred:</h4>;
                // <ul>;
                // <li>Experience with Tableau or Power BI.</li>;
                // <li>Basic knowledge of Python or R.</li>;
                // <li>Familiarity with cloud data tools.</li>;
                // <li>Understanding of data privacy rules.</li>;
                // <li>Experience working in teams.</li>;
                // <li>Interest in learning new tools.</li>;
                // </ul>;
                // </section>;
                
                // <section class='job_salary'>;
                // <h3 class='jobs_page_heading center_heading'>Salary and Benefits</h3>;
                // <ul>;
                // <li>Salary Range: $90,000 - $105,000.</li>;
                // <li>6 weeks of paid time off.</li>;
                // <li>Super: 13.75%.</li>;
                // <li>Flexible work arrangements.</li>;
                // <li>Remote work options.</li>;
                // <li>Comprehensive health cover.</li>;
                // <li>Paid training and upskilling.</li>;
                // <li>Wellness and fitness programs.</li>;
                // <li>Modern tools and software.</li>;
                // </ul>;
                // </section>;

                // <h4 class='team_lead jobs_page_heading'>Reports to: Director of Technology</h4>;
                // </section>;

                // <form action='apply.html'>;
                // <button class='btn'>Apply Now</button>;
                // </form>;
                // <p>Ref #: DA301</p>;
                // </section>;
                
            

                if ($gradient == "light_gradient") {
                    $gradient = "dark_gradient";
                }
                else {
                    $gradient = "light_gradient";
                }
            }
            </div>;
        }
        else {
            echo "<p>Could not retrieve data. Please refresh and try again</p>";
        }
        mysqli_close($db_connection);
    }
    else {
        echo "<p>Unable to connect to the database. Please check connection</p>";
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
    <!-- div header -->
    <div class="header jobs_page_nav">
        <div class="logo-container">
            <img src="images/image.png" alt="HJDJ Logo">
        </div>
        <!-- Site navigation -->
        <nav>
            <ul class="menu">
              <li><a href="index.php">Home</a></li>
          <li><a href="jobs.html">Jobs</a></li>
          <li><a href="apply.html">Apply</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="manage.php">Manage</a></li>
            </ul>
        </nav>
    </div>
        
        <main>
            <?php if ($result): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>




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

            <div id="job_list">  
                <!-- Position: Data Analyst -->
                <section class="job_position grey_content_section" id="data_analyst">
                    <!-- Job Title -->
                    <h2 class="job_title jobs_page_heading">Data Analyst</h2>
                    <!-- Used ChatGPT to generate a job description -->
                    <!-- Prompt: write a job description for a data analyst at a tech company using the following criteria: -->
                    <!-- (Following criteria is the list provided in the assessment description document) -->
                    <!-- Job Description -->
                    
                    <section class="job_outline">
                        <h3 class="jobs_page_heading">About the Role</h3>
                        <!-- Description of the role -->
                        <p>
                            We are looking for a skilled Data Analyst to join our tech company. 
                            The role involves analyzing large datasets, providing insights, and 
                            supporting cross-functional teams with data-driven recommendations. 
                            The ideal candidate will have strong data analysis skills and the 
                            ability to communicate findings clearly.
                        </p>
                    </section>

                    <section class="job_information">
                        <!-- List of responsibilities -->
                        <section class="job_responsibilities">
                            <h3 class="jobs_page_heading center_heading">Responsibilities</h3>
                            <ol>
                                <li>Manage network-related projects, including design, planning, execution, and handover to Operations. </li>
                                <li>Manage project timelines, identify and resolve issues while ensuring minimal impact on BAU operations.</li>
                                <li>Adhere to network policies, procedures, and security best practices during project deployments.</li>
                                <li>Collaborate with stakeholders to analyse customer needs and translate them into effective network solutions.</li>
                            </ol>
                        </section>

                        <!-- List of qualifications and required skills -->
                        <section class="required_quals">
                            <h3 class="jobs_page_heading center_heading">Qualifications and Skills</h3>
                            <h4 class="jobs_page_heading center_heading">Required:</h4>
                            <ul>
                                <li>Bachelor’s degree in a related field.</li>
                                <li>2+ years of data analysis experience.</li>
                                <li>Strong skills in SQL.</li>
                                <li>Experience with Excel and spreadsheets.</li>
                                <li>Good problem-solving skills.</li>
                                <li>Clear communication skills.</li>
                                <li>Ability to work with large datasets.</li>
                            </ul>
                        </section>

                        <!-- List of preferable skills -->
                        <section class="preferred_quals">
                            <h4 class="jobs_page_heading center_heading">Preferred:</h4>
                            <ul>
                                <li>Experience with Tableau or Power BI.</li>
                                <li>Basic knowledge of Python or R.</li>
                                <li>Familiarity with cloud data tools.</li>
                                <li>Understanding of data privacy rules.</li>
                                <li>Experience working in teams.</li>
                                <li>Interest in learning new tools.</li>
                            </ul>
                        </section>
                        
                        <!-- Salary and benefits in a list -->
                        <section class="job_salary">
                            <h3 class="jobs_page_heading center_heading">Salary and Benefits</h3>
                            <ul>
                                <li>Salary Range: $90,000 - $105,000.</li>
                                <li>6 weeks of paid time off.</li>
                                <li>Super: 13.75%.</li>
                                <li>Flexible work arrangements.</li>
                                <li>Remote work options.</li>
                                <li>Comprehensive health cover.</li>
                                <li>Paid training and upskilling.</li>
                                <li>Wellness and fitness programs.</li>
                                <li>Modern tools and software.</li>
                            </ul>
                        </section>

                        <h4 class="team_lead jobs_page_heading">Reports to: Director of Technology</h4>
                    </section>
                    
                    <!-- Button linked to apply.html page -->
                    <form action="apply.html">
                        <button class="btn">Apply Now</button>
                    </form>
                    <p>Ref #: DA301</p>
                </section>

                <!-- Position: Software Engineer -->
                <section class="job_position" id="software_engineer">
                    <!-- Job Title -->
                    <h2 class="job_title jobs_page_heading white_text">Software Engineer</h2>
                    <!-- Used ChatGPT to generate a job description -->
                    <!-- Prompt: write a job description for a software engineer at a tech company using the following criteria: -->
                    <!-- (Following criteria is the list provided in the assessment description document) -->
                    <!-- Job Description -->
                    
                    <section class="job_outline">
                        <h3 class="jobs_page_heading white_text">About the Role</h3>
                        <!-- Description of the role -->
                        <p class="white_text">
                            We are seeking a talented and motivated Software Engineer to join 
                            our growing tech team. The ideal candidate will design, develop, 
                            and maintain high-quality software applications. You will collaborate 
                            with cross-functional teams to deliver innovative and scalable solutions. 
                            This is an excellent opportunity for someone passionate about coding and 
                            looking to make an impact in a dynamic tech environment.
                        </p>
                    </section>

                    <section class="job_information">
                        <!-- List of responsibilities -->
                        <section class="job_responsibilities">
                            <h3 class="jobs_page_heading center_heading white_text">Responsibilities</h3>
                            <ol>
                                <li class="white_text">Design, develop, and test software solutions across various platforms.</li>
                                <li class="white_text">Collaborate with cross-functional teams to gather requirements and deliver high-quality software solutions.</li>
                                <li class="white_text">Troubleshoot and debug software issues, providing timely fixes and enhancements.</li>
                                <li class="white_text">Continuously improve and optimize application performance.</li>
                            </ol>
                        </section>

                        <!-- List of qualifications and required skills -->
                        <section class="required_quals">
                            <h3 class="jobs_page_heading center_heading white_text">Qualifications and Skills</h3>
                            <h4 class="jobs_page_heading center_heading white_text">Required:</h4>
                            <ul>
                                <li class="white_text">Bachelor’s degree in Computer Science, Engineering, or a related field.</li>
                                <li class="white_text">2+ years of professional software development experience.</li>
                                <li class="white_text">Proficiency in one or more programming languages (e.g., Java, Python, C#, JavaScript).</li>
                                <li class="white_text">Experience with version control tools, mainly Git.</li>
                                <li class="white_text">Excellent communication skills and ability to collaborate with team members.</li>
                            </ul>
                        </section>
                            
                        <!-- List of preferable skills -->
                        <section class="preferred_quals">
                            <h4 class="jobs_page_heading center_heading white_text">Preferred:</h4>
                            <ul>
                                <li class="white_text">Experience with cloud services like AWS or Google Cloud.</li>
                                <li class="white_text">Used tools like Docker or Kubernetes before.</li>
                                <li class="white_text">Familiar with setting up automated testing or deployment.</li>
                                <li class="white_text">Worked in an Agile team.</li>
                                <li class="white_text">Basic knowledge of databases (SQL or NoSQL).</li>
                            </ul>
                        </section>

                        <!-- Salary and benefits in a list -->
                        <section class="job_salary">
                            <h3 class="jobs_page_heading center_heading white_text">Salary and Benefits</h3>
                            <ul>
                                <li class="white_text">Salary Range: $100,000 - $125,000.</li>
                                <li class="white_text">6 weeks of paid time off.</li>
                                <li class="white_text">Super: 11.5%.</li>
                                <li class="white_text">Flexible work hours.</li>
                                <li class="white_text">Remote and hybrid options.</li>
                                <li class="white_text">Paid training and courses.</li>
                                <li class="white_text">Health and wellness programs.</li>
                                <li class="white_text">Employee support programs.</li>
                            </ul>
                        </section>

                        <h4 class="team_lead jobs_page_heading white_text">Reports to: Director of Technology</h4>
                    </section>

                    <!-- Button linked to apply.html page -->
                    <form action="apply.html">
                        <button class="btn">Apply Now</button>
                    </form>                    
                    <!-- Job position reference number -->
                    <p class="white_text">Ref #: SE401</p>
                </section>

                <!-- Position: UX Designer -->
                <section class="job_position grey_content_section" id="ux_designer">
                    <!-- Job Title -->
                    <h2 class="job_title jobs_page_heading">UX Designer</h2>
                    <!-- Used ChatGPT to generate a job description -->
                    <!-- Prompt: write a job description for a UX designer at a tech company using the following criteria: -->
                    <!-- (Following criteria is the list provided in the assessment description document) -->
                    <!-- Job Description -->
                    
                    <section class="job_outline">
                        <h3 class="jobs_page_heading">About the Role</h3>
                        <!-- Description of the role -->
                        <p>
                            We are seeking a creative and user-focused UX Designer to join our tech company. 
                            This role involves designing seamless user experiences, conducting user research, 
                            and collaborating with cross-functional teams to create intuitive digital interfaces. 
                            The ideal candidate will have a passion for design thinking, empathy for users, 
                            and a strong portfolio of UX design work.
                        </p>
                    </section>

                    <section class="job_information">
                        <!-- List of responsibilities -->
                        <section class="job_responsibilities">
                            <h3 class="jobs_page_heading center_heading">Responsibilities</h3>
                            <ol>
                                <li>Conduct user research and usability testing to inform design decisions.</li>
                                <li>Create wireframes, prototypes, and user flows for digital products.</li>
                                <li>Collaborate with developers, product managers, and stakeholders to ensure user-centred design solutions.</li>
                                <li>Iterate on designs based on feedback and usability insights.</li>
                                <li>Maintain consistency in design systems and interface elements.</li>
                                <li>Ensure accessibility and responsive design standards are met.</li>
                            </ol>
                        </section>

                        <!-- List of qualifications and required skills -->
                        <section class="required_quals">
                            <h3 class="jobs_page_heading center_heading">Qualifications and Skills</h3>
                            <h4 class="jobs_page_heading center_heading">Required:</h4>
                            <ul>
                                <li>Bachelor’s degree in Design, HCI, or a related field.</li>
                                <li>2+ years of experience in UX or product design.</li>
                                <li>Proficiency in Figma, Adobe XD, or similar tools.</li>
                                <li>Strong portfolio showcasing UX design projects.</li>
                                <li>Understanding of user research methods.</li>
                                <li>Excellent problem-solving and communication skills.</li>
                                <li>Ability to work collaboratively in a fast-paced environment.</li>
                            </ul>
                        </section>

                        <!-- List of preferable skills -->
                        <section class="preferred_quals">
                            <h4 class="jobs_page_heading center_heading">Preferred:</h4>
                            <ul>
                                <li>Basic knowledge of HTML, CSS, and responsive design principles.</li>
                                <li>Experience with design systems and accessibility standards.</li>
                                <li>Familiarity with agile or lean UX processes.</li>
                                <li>Understanding of data-driven design.</li>
                                <li>Ability to present and explain design ideas to various stakeholders.</li>
                                <li>Willingness to learn and adapt to new tools and trends.</li>
                            </ul>
                        </section>
                        
                        <!-- Salary and benefits in a list -->
                        <section class="job_salary">
                            <h3 class="jobs_page_heading center_heading">Salary and Benefits</h3>
                            <ul>
                                <li>Salary Range: $90,000 - $105,000.</li>
                                <li>6 weeks of paid time off.</li>
                                <li>Super: 13.75%.</li>
                                <li>Flexible work arrangements.</li>
                                <li>Remote work options.</li>
                                <li>Comprehensive health cover.</li>
                                <li>Paid training and upskilling.</li>
                                <li>Wellness and fitness programs.</li>
                                <li>Modern tools and software.</li>
                            </ul>
                        </section>

                        <h4 class="team_lead jobs_page_heading">Reports to: Director of Product Design</h4>
                    </section>
                    
                    <!-- Button linked to apply.html page -->
                    <form action="apply.html">
                        <button class="btn">Apply Now</button>
                    </form>
                    <p>Ref #: UX204</p>
                </section>

                
                <!-- Position: IT Support Specialist -->
                <section class="job_position" id="it_support">
                    <!-- Job Title -->
                    <h2 class="job_title jobs_page_heading white_text">IT Support Specialist</h2>
                    <!-- Used ChatGPT to generate a job description -->
                    <!-- Prompt: write a job description for an IT support specialist at a tech company using the following criteria: -->
                    <!-- (Following criteria is the list provided in the assessment description document) -->
                    <!-- Job Description -->
                    
                    <section class="job_outline">
                        <h3 class="jobs_page_heading white_text">About the Role</h3>
                        <!-- Description of the role -->
                        <p class="white_text">
                            We are looking for a reliable and proactive IT Support Specialist to join our tech company. 
                            This role involves providing technical assistance, troubleshooting hardware and software issues, 
                            and supporting internal teams with IT-related needs. The ideal candidate will have strong 
                            problem-solving skills, technical knowledge, and a commitment to excellent customer service.
                        </p>
                    </section>

                    <section class="job_information">
                        <!-- List of responsibilities -->
                        <section class="job_responsibilities">
                            <h3 class="jobs_page_heading center_heading white_text">Responsibilities</h3>
                            <ol>
                                <li class="white_text">Respond to technical support requests via email, phone, and ticketing systems.</li>
                                <li class="white_text">Diagnose and resolve hardware, software, and network issues for staff.</li>
                                <li class="white_text">Install, configure, and maintain desktops, laptops, printers, and other peripherals.</li>
                                <li class="white_text">Provide onboarding IT setup and offboarding procedures for staff members.</li>
                                <li class="white_text">Maintain inventory of IT assets and ensure regular updates of systems.</li>
                                <li class="white_text">Escalate unresolved issues to senior IT staff or vendors when necessary.</li>
                            </ol>
                        </section>

                        <!-- List of qualifications and required skills -->
                        <section class="required_quals">
                            <h3 class="jobs_page_heading center_heading white_text">Qualifications and Skills</h3>
                            <h4 class="jobs_page_heading center_heading white_text">Required:</h4>
                            <ul>
                                <li class="white_text">Diploma or Bachelor’s degree in IT, Computer Science, or a related field.</li>
                                <li class="white_text">2+ years of experience in a technical support role.</li>
                                <li class="white_text">Strong troubleshooting skills across Windows and macOS environments.</li>
                                <li class="white_text">Basic understanding of networking concepts and tools.</li>
                                <li class="white_text">Clear verbal and written communication skills.</li>
                                <li class="white_text">Excellent customer service and time management abilities.</li>
                                <li class="white_text">Ability to work independently and prioritise tasks.</li>
                            </ul>
                        </section>

                        <!-- List of preferable skills -->
                        <section class="preferred_quals">
                            <h4 class="jobs_page_heading center_heading white_text">Preferred:</h4>
                            <ul>
                                <li class="white_text">Experience with ticketing systems like Jira, Zendesk, or Freshservice.</li>
                                <li class="white_text">Familiarity with Active Directory and Microsoft 365 administration.</li>
                                <li class="white_text">Basic scripting knowledge (e.g., PowerShell, Bash).</li>
                                <li class="white_text">Knowledge of cybersecurity best practices.</li>
                                <li class="white_text">Experience supporting remote teams and cloud-based systems.</li>
                                <li class="white_text">Certifications such as CompTIA A+, ITIL, or Microsoft Fundamentals.</li>
                            </ul>
                        </section>
                        
                        <!-- Salary and benefits in a list -->
                        <section class="job_salary">
                            <h3 class="jobs_page_heading center_heading white_text">Salary and Benefits</h3>
                            <ul>
                                <li class="white_text">Salary Range: $80,000 - $95,000.</li>
                                <li class="white_text">6 weeks of paid time off.</li>
                                <li class="white_text">Super: 13.75%.</li>
                                <li class="white_text">Flexible work arrangements.</li>
                                <li class="white_text">Remote support options available.</li>
                                <li class="white_text">Comprehensive health cover.</li>
                                <li class="white_text">Paid certifications and training programs.</li>
                                <li class="white_text">Wellness and fitness programs.</li>
                                <li class="white_text">Modern tools and IT equipment provided.</li>
                            </ul>
                        </section>

                        <h4 class="team_lead jobs_page_heading white_text">Reports to: IT Operations Manager</h4>
                    </section>
                    
                    <!-- Button linked to apply.html page -->
                    <form action="apply.html">
                        <button class="btn">Apply Now</button>
                    </form>
                    <p class="white_text">Ref #: IT102</p>
                </section>


                <!-- Position: Cybersecurity Analyst -->
                <section class="job_position grey_content_section" id="cybersecurity_analyst">
                    <!-- Job Title -->
                    <h2 class="job_title jobs_page_heading">Cybersecurity Analyst</h2>
                    <!-- Used ChatGPT to generate a job description -->
                    <!-- Prompt: write a job description for a cybersecurity analyst at a tech company using the following criteria: -->
                    <!-- (Following criteria is the list provided in the assessment description document) -->
                    <!-- Job Description -->
                    
                    <section class="job_outline">
                        <h3 class="jobs_page_heading">About the Role</h3>
                        <!-- Description of the role -->
                        <p>
                            We are seeking a vigilant and detail-oriented Cybersecurity Analyst to join our tech company. 
                            In this role, you will monitor and protect the organisation’s digital assets, identify vulnerabilities, 
                            and respond to security incidents. The ideal candidate will have a strong technical foundation, 
                            a passion for cybersecurity, and a proactive approach to safeguarding systems and data.
                        </p>
                    </section>

                    <section class="job_information">
                        <!-- List of responsibilities -->
                        <section class="job_responsibilities">
                            <h3 class="jobs_page_heading center_heading">Responsibilities</h3>
                            <ol>
                                <li>Monitor networks and systems for security breaches and suspicious activity.</li>
                                <li>Investigate and respond to security alerts and incidents in a timely manner.</li>
                                <li>Conduct vulnerability assessments and risk analysis.</li>
                                <li>Assist with the implementation of security measures and controls.</li>
                                <li>Maintain and update security tools, firewalls, and intrusion detection systems.</li>
                                <li>Collaborate with IT and development teams to ensure secure practices.</li>
                            </ol>
                        </section>

                        <!-- List of qualifications and required skills -->
                        <section class="required_quals">
                            <h3 class="jobs_page_heading center_heading">Qualifications and Skills</h3>
                            <h4 class="jobs_page_heading center_heading">Required:</h4>
                            <ul>
                                <li>Bachelor’s degree in Cybersecurity, Information Technology, or a related field.</li>
                                <li>2+ years of experience in a cybersecurity or related IT role.</li>
                                <li>Understanding of firewalls, antivirus, SIEM tools, and network security protocols.</li>
                                <li>Strong analytical and problem-solving skills.</li>
                                <li>Knowledge of cybersecurity frameworks and best practices.</li>
                                <li>Clear communication skills and ability to document findings.</li>
                                <li>Ability to work under pressure in incident response situations.</li>
                            </ul>
                        </section>

                        <!-- List of preferable skills -->
                        <section class="preferred_quals">
                            <h4 class="jobs_page_heading center_heading">Preferred:</h4>
                            <ul>
                                <li>Experience with tools like Splunk, Wireshark, or Nessus.</li>
                                <li>Familiarity with cloud security (AWS, Azure, or Google Cloud).</li>
                                <li>Knowledge of scripting languages (Python, Bash, or PowerShell).</li>
                                <li>Understanding of data privacy regulations (e.g., GDPR, ISO 27001).</li>
                                <li>Cybersecurity certifications (e.g., CompTIA Security+, CEH, CISSP).</li>
                                <li>Interest in threat intelligence and staying current with emerging threats.</li>
                            </ul>
                        </section>
                        
                        <!-- Salary and benefits in a list -->
                        <section class="job_salary">
                            <h3 class="jobs_page_heading center_heading">Salary and Benefits</h3>
                            <ul>
                                <li>Salary Range: $95,000 - $115,000.</li>
                                <li>6 weeks of paid time off.</li>
                                <li>Super: 13.75%.</li>
                                <li>Flexible work arrangements.</li>
                                <li>Remote work options.</li>
                                <li>Comprehensive health cover.</li>
                                <li>Paid training, certifications, and upskilling opportunities.</li>
                                <li>Wellness and fitness programs.</li>
                                <li>Modern security tools and software provided.</li>
                            </ul>
                        </section>

                        <h4 class="team_lead jobs_page_heading">Reports to: Cybersecurity Manager</h4>
                    </section>
                    
                    <!-- Button linked to apply.html page -->
                    <form action="apply.html">
                        <button class="btn">Apply Now</button>
                    </form>
                    <p>Ref #: CS507</p>
                </section>

            </div>

            <!-- This is The Footer -->
            <div class="footer" id="jobs_page_footer">
                <!-- Jira link-->
                <div class="logofooter">
                    <img src="images/image1.jpg" alt="HJDJ Logo">
                </div>
          
                <div class="objfooter">
                    <h3 class="jobs_page_heading">Contact</h3>
                    <div class="link">
                        <a href="https://hjdj2025swin.atlassian.net/jira/software/projects/SCRUM/boards/1/backlog?atlOrigin=eyJpIjoiNTNmYmIyMzMyZDlhNGJhNzllODI0YTMyNmJkMWEzNDEiLCJwIjoiaiJ9">Jira Project</a>
                    </div>
                    <div class="email">
                        <p>Email:</p>
                        <a href="mailto:someone@example.com">HJDJcarrier@hjdj.com.au</a>
                    </div>
                    <div class="megaphonetelephone">
                        <p>Tel: 408-486-1405</p>
                    </div>
                </div>
                
                <div class="objfooter">
                    <h3 class="jobs_page_heading">Company</h3>
                    <div class="link">
                        <p>About us</p>
                    </div>
                    <div class="email">
                        <p>Event</p>
                    </div>
                    <div class="megaphonetelephone">
                        <p>Terms and conditions</p>
                    </div>
                </div>

                <div class="objfooter">
                    <h3 class="jobs_page_heading">Follow Us</h3>
                    <div class="link">
                        <p>Facebook</p>
                    </div>
                    <div class="email">
                        <p>Instagram</p>
                    </div>
                    <div class="megaphonetelephone">
                        <p>Twitter</p>
                    </div>
                </div>
            </div>
            <!-- End Of Footer -->
        </main>
    </body>
</html>
