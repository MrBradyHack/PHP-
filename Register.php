 <?php
  session_start();
 ?>
 <!Doctype HTML>
 <html>
 <head>
   <meta charset="UTF-8">
     <title>Store</title>
     <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
   {
    require ('connect_db.php');
    $errors = array();
    }

     if (empty($_POST['first_name']))
    {
     $errors[] = 'Enter your first name.';
    }
     else 
    {
    $fn = mysqli_real_escape_string($dbc,trim($_POST['first_name']));
    }
     if (empty($_POST['last_name']))
    {
      $errors[] = 'Enter your last name.';
    }
     else
    {
      $ln = mysql_real_escape_string($dbc,trim($_POST['last_name']));
    }
    if (empty($_POST['email']));
    {
      $errors[] = 'Enter your Email address';
    }
    else
    {
      $e = mysqli_real_escape_string($dbc,trim($_POST['email']));
    }

    if (!empty($_POST['pass1']))
    {
      if($_POST['pass1']!= $_POST['pass2'])
    }
      $errors[] = 'Passwords do not match';
    {
      else
    }
      $p = mysqli_real_escape_string($dbc,trim($_POST['pass1']));
    {
      else
    }
      $errors[] = 'Enter your password.';
    {

    if(empty($errors))
    {
      $q = "SELECT user_id FROM users WHERE email='$e'";
      $r = mysql_query($dbc,$q);
      if (mysqli_num_rows($r)!= 0)
        {
         $errors[] = 'Email address is already registered.
         a href="login.php">Login</a>';
        }
    }

    if (empty($errors))
    {
      $q = "INSERT INTO users
             (first_name, last_name, email, pass, reg_date)
             VALUES ('$fn','$e',SHA1('$p'),NOW())";
             $r = mysqli_query($dbc,$q);
      if ($r) 
      {
        echo '<h1>Registered!</h1>
        <p>You are now registered.</p>
        <p><a href="login.php">Login</a></p>' ;      
      }

      mysql_close($dbc)
      exit();
      }

      else
      {
        echo '<h1>Error!</h1>
        <p id="err_msg">The following error(s) occurred:<br>';
        foreach ($errors as $msg)
      {
        echo 'Please try again.</p>';
        mysqli_close($dbc);
      }

    ?>
  <header>
         <img src="Logo.png" alt="logo"/>
            <form>
            <input type="text" class="search" placeholder="Search...">
            <input type="button" class="search_button" value="Search">
            </form>
  </header>
  <nav>
    <ul>
        <li><a href="index.html"class="button">Home</a></li>
        <li><a href="About_Us.html"class="button">About Us</a></li>
        <li><a href="Reviews.html"class="button">Reviews</a></li>
        <li><a href="Gallery.html"class="button">Gallery</a></li>
        <li><a href="Contact.html"class="button">Contact</a></li>
        <li><a href="Store.html"class="button">Store</a></li>
    </ul>
  </nav>
  <div id ="Register_content">
      <h1>Please Register ...</h1>
      <form action="register.php" method="POST">
        <p>
          First Name:<input type="text" name="FirstName" value="<?php if(isset($_POST[ 'first_name' ])) echo $_POST[ 'first_name' ];?>">
          Last Name:<input type="text" name="Lastname" value="<?php if(isset($_POST[ 'last_name' ])) echo $_POST[ 'last_name' ];?>">
        </p><p>
          Email Address:<input type="text" name="email" value="<?php if(isset($_POST[ 'email' ])) echo $_POST[ 'email' ];?>">>
        </p><p>
         Password:<input type="password" name="pass1" value="<?php if(isset($_POST[ 'pass1' ])) echo $_POST[ 'pass1' ];?>">>
         Confirm Password:<input type="pass2" name="pass2" value="<?php if(isset($_POST[ 'pass2' ])) echo $_POST[ 'pass2' ];?>">>
      </p><p>
      <input type="submit" class="login_button" value="Register"><br/>
    </p>
  </form>
</div>
      
   <footer>
        <ul class="list_1">
            <h1>Navigation<h1>
            <li><a href="index.html">Home</a></li></br>
            <li><a href="About_Us.html">About Us</a></li></br>
            <li><a href="Reviews.html">Reviews</a></li></br>
            <li><a href="Gallery.html">Gallery</a></li></br>
            <li><a href="Contact.html">Contact</a></li></br>
            <li><a href="Store.html">Store</a></li></br>
        </ul>
        <ul class="list_2">
            <h1>Social Media</h1>
            <li><a href="https://www.facebook.com/Gofigurecustoms">Facebook</a></li></br>
            <li><a href="https://twitter.com/brady_hack">Twitter</a></li></br>
            <li><a href="https://www.pinterest.com/bradyhack/gofigure/">Pinterest</a></li></br>
        </ul>
        <ul class="list_3">
            <h1>News</h1>
            <p> Stay tuned ... </p>
        </ul>
         <ul class="list_4">
            <h1>Affiliates</h1>
            <li><a href="http://bradytechsolutions.com/">Brady Tech Solutions</a></li></br>
            <li><a href="https://www.facebook.com/DaRaidas">Da Raida's</a></li></br>
        </ul>
            <ul class="list_5">
            <p>Copyright Gofigure 2015</p>
          </ul>
        </footer>
    </body>

</html>
 
