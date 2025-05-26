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


          <!--First section to display information about our team-->
          <section id="black_section">
            <h1 class="white_text">About Our Team</h1>
            <h2 class="white_text">HJDJ</h2>
            <ul id="about_info">
              <li class="white_text">Our Class is 2:30-4:30pm on Wednesday and our Tutor is Rahul</li>
              <li class="white_text">Member 1: Harry Lamb Student ID: 104617909</li>

              <li class="white_text">Member 2: Josh Trapman Student ID: 105919871</li>

              <li class="white_text">Member 3: Diesel Williams Student ID: 105925975</li>

              <li class="white_text">Member 4: Jerry Nguyen Student ID: 105075045</li>
            </ul>
            <br>
          </section>
          

          <!--Contribution Section-->
          <section id="grey_section">
            <!--Team photo-->
            <figure id="team_photo">
              <img id="team_image" src="images/HJDJ_team_photo.jpg" alt="Photo of HJDJ Group">
            </figure>
            <h2>Member Contribution</h2>
              <dl>
                <dt>Harry's Contribution:</dt>
                <dd>Converting pages to php, include files, and About Page</dd>
                <dt>Josh's Contribution:</dt>
                <dd>Jobs Page, Jobs Table in MySQL, and Navigation Bar</dd>
                <dt>Diesel's Contribution:</dt>
                <dd>Apply Page, EOI Table in MySQL, Process EOI in php</dd>
                <dt>Jerry's Contribution:</dt>
                <dd>Home Page, Manage Page, and Footer</dd>
              </dl>
          </section>

          <!--Table to display more information about our team-->
          <section id="white_section">
            <h2>More Information about HJDJ</h2>
            <table>
              
              <caption><strong>Members Interests</strong></caption>
            
              <thead>
                <tr>
                  
                  <th scope="col">Members</th>
                  <th scope="col">Interests</th>
                  <th scope="col">Hometown</th>
                  <th scope="col">Favourite Game</th>
                  <th scope="col">Programming Skills</th>
                  <th scope="col">Work Experience</th>
                
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Harry Lamb</th>
                  <td>Gaming and Football</td>
                  <td>I'm from Christchurch in New Zealand. It's a small city that is known for earthquakes.</td>
                  <td>Counter-Strike 2</td>
                  <td>1 Year of Unreal Engine and 6 Months of HTML/CSS</td>
                  <td>Casual Job at Okko NZ packaging camera lenses</td>
                </tr>
                <tr>
                  <th scope="row">Josh Trapman</th>
                  <td>Rock Climbing and Gaming</td>
                  <td>I'm from Rosebud on the Mornington Peninsula. It's a small suburb with a great community and amazing beaches.</td>
                  <td>Rocket League</td>
                  <td>1 Year of Python and 1 Year of Godot game engine</td>
                  <td>3 Years at KFC</td>
                </tr>
                <tr>
                  <th scope="row">Diesel Williams</th>
                  <td>Soccer and AFL</td>
                  <td>I'm from Melbourne near the CBD.</td>
                  <td>Rainbow Six Siege</td>
                  <td>1 Year of VisualBasic, 2 Months HTML/CSS</td>
                  <td>Waiter</td>
                </tr>
                <tr>
                  <th scope="row">Jerry Nguyen</th>
                  <td>Watching TV/Movies and Gaming</td>
                  <td>I'm from Vinh in Viet Nam. It's a small city with a great community and amazing beaches.</td>
                  <td>Counter-Strike 2</td>
                  <td>1 Year of C++ and 3 Months of Python</td>
                  <td>1 Month at Maccas</td>
                </tr>
              </tbody>
            </table>
            <br>
          </section>

          <section id="grey_section">
            <h2>Future Career Aspirations</h2>
            <br>
            <h3>Harry</h3>
              <p>I'm currently studying a Bachelor of Computer Science and majoring in Software Development. I'm in my first year of the 3 or 4 year course, and during my studies I hope to get an internship working at a software company. After I graduate I hope to either get a full time job working at the place I interned at, or eventually working at a big tech company. I would also enjoy working at a company who combined sport and software, as a major interest in mine is Football (Soccer).</p>
          </section> 

          <section id="white_section">
            <h3>Josh</h3>
              <p></p>
          </section>

          <section id="grey_section">
            <h3>Diesel</h3>
              <p>After I finish my studies, I want to involve myself in multiple career opportunities. One of them being Cybersecurity (which I'm majoring in) for a big company either protecting their information directly, or developing/working on the software that will protect their information. Also, I want to develop websites for smaller businesses and maintain them indefinitely.</p>
          </section>

          <section id="white_section">
            <h3>Jerry</h3>
              <p></p>
          </section>



        <!--Footer with Jira link-->
      <?php include "footer.inc";?>
    </main>
</body>

</html>