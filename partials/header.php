<?php
session_start();

// Check if a user is logged in
if (isset($_SESSION['customer'])) {
    $username = $_SESSION['customer'];
    
    // Display user greeting and logout icon
    echo "<div id='row-container'>";
    echo "<div id='user-greeting'>";
    echo "<span id='user-name'>Welcome, $username | </span>";
    echo "<a href='./admin/logout.php' id='logout-link'><i class='fas fa-sign-out-alt'></i></a>";
    echo "</div>";
    echo "</div>";
}
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
    <link rel="stylesheet" href="css/style.css">

    <title>ittakeShopping | ONLINE SHOPPING</title>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PG5PM5FN');</script>
<!-- End Google Tag Manager -->
</head>
<body>

<div id="main">
        <div id="nav">
            <div id="part1">
                 <h1><a href="#">ittakeShopping</a></h1>
            </div>
            <div id="part2">
                 <a href="shopping webiste.php">Home</a>
                   <a href="Products.php">Products</a>
                   <a href="about.php">About</a>
            </div>  
                   <div id="part3">
                         <a href="../update_form.php">
                            <h5>Register <i class="fa-solid fa-arrow-right fa-flip"></i></h5>
                             <div id="green"></div>
                        </a>
                        <a href="account_login.php" class="signup">Sign In</a>
                        <a href="cart.php"><i class="fa-solid fa-cart-shopping cart"></i></a>
                  </div>
        </div>
        </div>
        

<!-- <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a src="./shopping webiste.html"><img src="./images/ImageLogo2.png" width="130px"></a>
                        </div>   
            <nav class="underline">
               <ul>
                   <li><a href="shopping webiste.html">Home</a></li>
                   <li><a href="Products.html">Products</a></li>
                   <li><a href="about.html">About</a></li>  
                   <li><a href="account.html">Account</a></li>
               </ul>
            </nav>
        </div>
        <i class="fa-solid fa-cart-shopping cart"></i>
</div>
</div> -->