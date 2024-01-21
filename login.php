<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Decor Website</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="header">
        <a href="#"><img src="Images\RIA2.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="dining.html">Dining</a></li>
                <li><a href="kitchen.html">Kitchen</a></li>
                <li><a href="decor.html">Decor</a></li>
                <li><a href="bath.html">Bath</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.php" class="active">Login</a></li>
                <li><a href="cart.html"><i class="fal fa-shopping-bag"></i></a></li>
            </ul>
        </div>
    </section>

    <div class="form-container">

        <form action="" method="post">
            <h3>login now</h3>
            <?php
            session_start();
          
            @include 'config.php';
            //$_SESSION['error']=  '';
            //echo '<span class="error-msg">' . $_SESSION['error']. '</span>';
            //print_r ($error);
            
           
            

            // Check if the user is already logged in
            if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
            // Redirect to the home page if the user is logged in
            header("Location: http://localhost/homedecor/homedecor/decor/index.html");
            
            exit(); // Make sure to exit after the header to prevent further execution
            }

            // Check if the form is submitted
            if(isset($_POST['submit'])) {
            // Replace this with your actual authentication logic
            
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $pass = md5($_POST['password']);

            $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

            

            

        if (mysqli_num_rows($result) > 0) {
            // Set a session variable to indicate that the user is logged in
            $_SESSION['user_logged_in'] = true;

            // Redirect to the home page
            
            header("Location: http://localhost/homedecor/homedecor/decor/index.html");
            
            exit(); // Make sure to exit after the header to prevent further execution
            } else {
               // If login is unsuccessful, set an error message
               
            //$error[] = "Invalid username or password";
            $_SESSION['error']= 'Invalid username or password';
            echo '<span class="error-msg">' . $_SESSION['error']. '</span>';
           
                    }
            }
        ?>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="register_form.php">register now</a></p>
        </form>

    </div>

    <section id="newsletter" class="section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo1" src="Images/RIA2.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 564 Wellington Road, Street 32, San Francisco</p>
            <p><strong>Phone:</strong> +81 2222 365/(+91) 01 2345 7564</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="Images/pay/pay1.png" alt="">
                <img src="Images/pay/pay2.png" alt="">
            </div>
            <p>Secured Payment Gateways </p>
            <img src="Images/pay/pay4.png" alt="">
        </div>

        <div class="copyright">
            <p>Home Decor project - Using HTML, CSS</p>
        </div>
    </footer>
    <script src="script.js">
    </script>
</body>

</html>





<!--!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
<!--link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <//?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html-->