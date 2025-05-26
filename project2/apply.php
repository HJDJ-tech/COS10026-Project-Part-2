<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="keywords" content="HJDJ IT, IT jobs, software jobs, tech careers, job application, software engineering, developer jobs, IT careers, job openings, apply online">
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="A Lecturer"  />
  <title>HJDJ IT</title>
  
  <link rel="stylesheet" href="styles/styles.css">

</head>

<body>
    <!-- div header -->
    <?php include "header.inc";?>
        <!-- Site navigation -->
     <?php include "nav.inc";?>
    </div>


<main>

    <form method="post" action="process_eoi.php" novalidate>
        <!--Note we have to use a special escape character to print an apostrophe on the Web page -->
        <fieldset class="job_apply_page grey_content_section">
        <legend class="legend_2">Full Name</legend>
        <p><label for="given">Given Name</label> 
            <!--Use an HTML5 email control -->
          <input type="text" name= "given" id="given" maxlength="20" required/>
        </p>
        <p><label for="family">Family Name</label> 
            <!--Use an HTML5 email control -->
          <input type="text" name= "family" id="family" maxlength="20" required/>
        </p>
        </fieldset>
        <fieldset class="job_apply_page">
            <legend>Gender</legend>
            <p><label for="Male">Male</label> 
                <input type="radio" id="Male" name="Gender" value="Male" required/> <!--Allows only one button to be clicked-->
            </p>
            <p><label for="Female">Female</label> 
                <input type="radio" id="Female" name="Gender" value="Female" required/>
            </p>
            <p><label for="Other">Other</label> 
                <input type="radio" id="Other" name="Gender" value="Other" required/>
            </p>
        </fieldset>
        <fieldset class="job_apply_page grey_content_section">
            <legend class="legend_2">Job Listing</legend>
            <p><label for="referencenumber">Job refernce number</label> 
                <select name="referencenumber" id="referencenumber" required> <!-- Drop down selection listy-->
                    <option value="">Select an Option</option> <!--Placeholder option must be added when select list is required-->
                    <option value="DA301">DA301</option>			
                    <option value="SE401">SE401</option>
                    <option value="UX204">UX204</option>
                    <option value="IT102">IT102</option>
                    <option value="CS507">CS507</option>
                </select>
            </p>
        </fieldset>

        <fieldset class="job_apply_page">
            <legend>Availability</legend>
            <p><label for="availability">Availability</label> <!-- Drop down selection listy-->
                <select name="availability" id="availability" required>
                    <option value="">Select an Option</option>
                    <option value="Full-time">Full-time</option>			
                    <option value="Part-time">Part-time</option>
                    <option value="Casual">Casual</option>
                </select>
            </p>
        </fieldset>
        <fieldset class="job_apply_page grey_content_section">
            <legend class="legend_2">Work Rights</legend>
            <p><label for="workrights">Work Rights</label> 
                <select name="workrights" id="workrights" required> <!-- Drop down selection listy-->
                    <option value="">Select an Option</option>
                    <option value="Citizen">Citizen</option>			
                    <option value="Permanent Resident">Permanent Resident</option>
                    <option value="Temporary Visa">Temporary Visa</option>
                </select>
            </p>
        </fieldset>

        <fieldset class="job_apply_page">
        <legend>Date of Birth</legend>
        <p><label for="d">Date</label> 
            <input type="date" name= "d" id="d" required/>
        </fieldset>

        <fieldset class="job_apply_page grey_content_section">
            <legend class="legend_2">Location</legend>
            <p><label for="Address">Street Address</label> 
                <!--Use an HTML5 email control -->
              <input type="text" name= "Adress" id="Address" maxlength="40" required/>
            </p>
            <p><label for="suburb">Suburb/Town</label> 
                <!--Use an HTML5 email control -->
              <input type="text" name= "suburb" id="suburb" maxlength="40" required/>
            </p>
            </fieldset>
            <fieldset class="job_apply_page">
                <legend>State</legend>
                <p><label for="state">State</label> 
                    <select name="state" id="state" required> <!-- Drop down selection listy-->
                        <option value="">Select an Option</option>
                        <option value="VIC">VIC</option>			
                        <option value="NSW">NSW</option>
                        <option value="QLD">QLD</option>
                        <option value="SA">SA</option>
                        <option value="WA">WA</option>
                        <option value="TAS">TAS</option>
                        <option value="NT">NT</option>
                        <option value="ACT">ACT</option>
                    </select>
                </p>
            </fieldset>

            <fieldset class="job_apply_page grey_content_section">
                <legend class="legend_2">Postcode</legend>
                <p><label for="postcode">Postcode</label> 
                    <!--Use an HTML5 email control -->
                  <input type="text" name= "postcode" id="postcode" maxlength="4"  placeholder="0000-9999" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required/> <!--Allows only 4 characters to be input-->
                </p>
                </fieldset>
                <fieldset class="job_apply_page">
                    <legend>Contact Details</legend>
                    <p><label for="email">Email</label> 
                        <!--Use an HTML5 email control -->
                      <input type="email" name= "email" id="email" maxlength="40" required/>
                    </p>
                    <p><label for="phone">Phone Number</label> 
                        <!--Use an HTML5 email control -->
                      <input type="text" name= "phone" id="phone" maxlength="10" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/> <!--Allows only 10 characters to be input-->
                    </p>
                    </fieldset>
                    <fieldset class="job_apply_page grey_content_section">
                        <legend class="legend_2">Other Skills</legend>
                        <p><label for="description">List any other skills you have</label> 
                            <!--Use an HTML5 email control -->
                            <textarea name= "description" id="description" rows="4" cols="40"></textarea>
                        </p>
                    </fieldset>
      

                    <div class="buttonfix1">
                        <input type= "Submit" value="Apply" class="btn"/>
                        <input type= "Reset" value="Reset" class="btn"/>
                    </div>

</form>
</main>
         <!--This is The Footer -->
    <?php include "footer.inc";?>
        <!-- End Of Footer -->
</body>
</html>
