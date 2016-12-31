<!-- Needs to be fixed. -->

<?php
  session_start();
?>
<!Doctype HTML>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>Contact</title>
     <link rel="stylesheet" type="text/css" href="style.css">
    
 </head>
 <body>
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

    <div id ="form_response">
    	<?php
         $name = $_POST['name'] ;
         $mail = $_POST['email'] ;
         echo "<p>Thanks for responding $name</p>";
         echo "<p>We will reply to $mail</p>";
         ?>

    </div>
       <footer>
        <ul class="list_1">
            <h1>Navigation<h1>
            <li><a href="index.html">Home</a></li><br/>
            <li><a href="About_Us.html">About Us</a></li><br/>
            <li><a href="Reviews.html">Reviews</a></li><br/>
            <li><a href="Gallery.html">Gallery</a></li><br/>
            <li><a href="Contact.html">Contact</a></li><br/>
            <li><a href="Store.html">Store</a></li><br/>
        </ul>
        <ul class="list_2">
            <h1>Social Media</h1>
            <li><a href="https://www.facebook.com/Gofigurecustoms">Facebook</a></li><br/>
            <li><a href="https://twitter.com/brady_hack">Twitter</a></li><br/>
            <li><a href="https://www.pinterest.com/bradyhack/gofigure/">Pinterest</a></li><br/>
        </ul>
        <ul class="list_3">
            <h1>News</h1>
            <p> Stay tuned ... </p>
        </ul>
         <ul class="list_4">
            <h1>Affiliates</h1>
            <li><a href="http://bradytechsolutions.com/">Brady Tech Solutions</a></li><br/>
            <li><a href="https://www.facebook.com/DaRaidas">Da Raida's</a></li><br/>
        </ul>
          <ul class="list_5">
            <p>Copyright Gofigure 2015</p>
          </ul>
        </footer>
    </body>

</html>



