<?php
    session_start();
    $firstNameError = "";
    $lastNameError = "";
    $emailError = "";
    $messageError = "";

    // If posting
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        ValidateForm();
    }

    // Validates post values coming in
    function ValidateForm()
    {
        $firstName = $_POST["txtFirstName"];
        $lastName = $_POST["txtLastName"];
        $email = $_POST["txtEmail"];
        $textarea = $_POST["textarea"];

        if (strlen($firstName) == 0)
            $GLOBALS['firstNameError'] = "First name must be filled out";
        else if (strlen($lastName) == 0)
            $GLOBALS['lastNameError'] = "Last name must be filled out";
        else if (strlen($email) == 0)
            $GLOBALS['emailError'] = "Email must be filled out";
        else if (strlen($textarea) == 0)
            $GLOBALS['messageError'] = "Message must be filled out";
    }

    echo '<!Doctype HTML>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Contact</title>
                <link rel="stylesheet" type="text/css" href="style.css">
                <script src="myscript.js"></script>
                <script src="http://maps.googleapis.com/maps/api/js"></script>
                <script src="maps.js"></script>
            </head>
            <body>
                <header>
                </header>
                <nav>
                    <ul>
                        <li><a href="index.html"class="button">Home</a></li>
                        <li><a href="About_Us.html"class="button">About Us</a></li>
                        <li><a href="Videos.html"class="button">Videos</a></li>
                        <li><a href="Events.html"class="button">Events</a></li>
                        <li><a href="Originals.html" class="button">Originals</a></li>
                        <li><a href="Contact.php"class="button">Contact</a></li>
                    </ul>
                </nav>
                 <div id="Nav_Bottom">
                 </div>
                <div id="Contact_content">
                    <form name="frmMain" action="Contact.php" onsubmit="return validateForm()" method="post">
                    <h1>First Name:</h1><br>
                    <div class="error">' . $firstNameError . '</div>
                    <input type="text" name="txtFirstName" size="55" id="fn"><br>
                    <h1>Last Name:</h1><br>
                    <div class="error">' . $lastNameError . '</div>
                    <input type="text" name="txtLastName" size="55" id="ln"><br>
                    <h1>Email:</h1><br>
                    <div class="error">' . $emailError . '</div>
                    <input type="text" name="txtEmail" size="55" id="em"><br>
                    <h1>Message:</h1><br>
                    <div class="error">' . $messageError . '</div>
                    <textarea name="textarea" cols"0" rows"0" id="Message"></textarea><br>
                    <input type="reset" name="Reset" value="Reset" id="reset"/>
                    <input type="submit" name="submit" value="Submit" id="submit" />
                    </form> 
                    <p class="Con_Par">We would love to hear from you ...</p> 
                </div>
                 <div id="Footer_Top">
        </div>
         <footer>
            <div id="column_1">
              <h2>Social Media</h2>
               <ul>
                   <li><a href="https://www.facebook.com/pages/Thirteen/998118843572369" class="FB">Facebook</a></li></br>
                    <li><a href="https://twitter.com/brady_hack" class="TW">Twitter</a></li></br>
                    <li><a href="https://instagram.com/brady_hack213/" class="IG">Instagram</a></li></br>
                    <li><a href="https://www.pinterest.com/bradyhack/13/" class="PT">Pinterest</a></li></br>
                    <li><a href="https://www.youtube.com/playlist?list=PLZXuKIHUE9WiYib48hagh3THP3ZWhzsay" class="YT">YouTube</a></li></br>
                </ul>
            </div>
          <div id="column_2">
                <p>Join Thirteen\'s fan club and receive a monthly Email with the latest news and insight on the bands projects, new music and shows.</br>
                We appreciate our fans, followers and anybody who enjoys acoustic and original music. Sign up<a href="#openModal"> here </a>to join our fan club.</br>Please feel free to leave a comment or suggestion in the <a href="Contact.php"> Contact </a>section of our website.</p></br></br>
                <p id="column_2_B"> " Always acoustic, we are Thirteen ! "</p>
               <div id="openModal" class="modalDialog">
                <div>
                <a href="#close" title="Close" class="close">X</a>
                <p id="FFT">Fanclub Form</p>
                <hr>
                <form id="FF">
                First Name:<br>
                <input type="text" name="firstname"  size="55" id="fn_2">
                <br><br>
                Last Name:<br>
                <input type="text" name="lastname" size="55" id="ln_2">
                <br><br>
                Email:<br>
                <input type="text" name="Email" size="55" id="em_2">
                <br><br>
                <input type="reset" value="Reset" id="reset_2">
                <input type="submit" value="Join" id="submit_2">
               </form>
               </div>
            </div>
        </div>
            <div id="column_3">
                <div id="googleMap"></div>
            </div>
        </footer>
        <div id="Footer_Bottom">
           <ul>
                <li><a href="index.html" class="button_1">Home</a></li>
                <li><a href="About_Us.html" class="button_1">About Us</a></li>
                <li><a href="Videos.html" class="button_1">Videos</a></li>
                <li><a href="Events.html" class="button_1">Events</a></li>
                <li><a href="Originals.html" class="button_1">Originals</a></li>
                <li><a href="Contact.php" class="button_1">Contact</a></li>
            </ul>
          <p>Copyright Thirteen 2015 - Website designed by <a href="http://bradytechsolutions.com/" class="BT">Bradytechsolutions.com</a></p> 
        </div>
    </body>
    </html>'
?>