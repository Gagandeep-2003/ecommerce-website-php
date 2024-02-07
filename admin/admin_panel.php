<?php

include_once("connection.php");
session_start(); //session is started so that we can use the variable in this page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="x-icon" href="./images/weblogo.png">
    <link rel="stylesheet" href="../css/style.css">

    <title>ittakeShopping | ONLINE SHOPPING</title>
</head>
<body>

<div id="main">
        <div id="nav">
            <div id="part1">
                 <h1><a href="#">ittakeShopping</a></h1>
            </div>
            <div id="part2">
                 <a href="../shopping webiste.php">Home</a>
                   <a href="all_products.php">Products</a>
                   <a href="../about.php">About</a>
            </div>  
                   <div id="part3">
                   
    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        echo "
        <div class='user'>
            <span class='username'>$_SESSION[username] </span><span id='seperator'>|</span>
            <a class='logout-link' href='logout.php'>LOGOUT</a>
        </div>
        ";
    }
    
    else{
        header("Location: ../account_login.php");
    }
  ?>
                  </div>
        </div>
        </div>
       

            <div class="admin-panel">
        <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        echo "<h1>WELCOME TO ittakeShopping - $_SESSION[username]</h1>";
        
        
    }
  ?>
            </div>





<div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Connect With Us</h3>
                    <p>These are our social media links</p>
                    <div class="social-logo">
                        <a href="#"><i class="fa-brands fa-github"></i></a><a href="#"><i class="fa-brands fa-linkedin"></i></a><a href="#"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                </div>
                <div class="footer-col-2">
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                    <p>Our Purpose is to Sustainabily make the Pleasure and Benefits of our Products Accesible to Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Joint Affliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a src="https://www.facebook.com/">Facebook</a></li>
                        <li><a src="https://www.instagram.com/">Instagram</a></li>
                        <li><a src="https://www.twitter.com/">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2023</p>
        </div>
    </div>
</body>
</html>