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

<div id="sub-main">
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
                         <a href="./update_form.php">
                            <h5>Register <i class="fa-solid fa-arrow-right fa-flip"></i></h5>
                             <div id="green"></div>
                        </a>
                        <a href="account_login.php" class="signup">Sign In</a>
                        <a href="cart.php"><i class="fa-solid fa-cart-shopping cart"></i></a>
                  </div>
        </div>        

        <h1 id="heading">Trendsetters' Treasure Trove</h1>
        <img src="./images/4.jpg" alt="image" id="img-1">
        <img src="./images/5.jpg" alt="image" id="img-2">
        <img src="./images/6.jpg" alt="image" id="img-3">
        <div class="custom-shape-divider-bottom-1697268036 shape-divider">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>

        </div>
        </div>
    </div>

<div id="page2">
        <p>Shop Smarter: Explore ittakeShopping for Incredible Deals!</p>
        <h1>"Discover the ultimate shopping experience at ittakeShopping – Your one-stop destination for fashion, electronics, and more. Explore, shop, and save on the latest trends today!"</h1>
        <div id="about-us">
           <a href="./about.php"> <p>About us</p></a>
            <div class="greendiv">
            <a href="./about.php"> <img src="./images/icon.png" alt="icon"></a>
        </div>
        </div>
    </div>
    

<!---featured catagories--->
<div class="catagories">
    <h2 class="title">New Arrivals</h2>
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="./images/product5.jpG">
                <h4>Shoes</h4>
                <a href="ProductDetails(shoes).php"><p id="btn">Buy</p></a>
            </div>
                 <div class="col-3">
                    <img src="./images/product2.jpG">
                    <h4>Shoes</h4>
                    <a href="ProductDetails(shoes).php"><p id="btn">Buy</p></a>
                 </div>
                 <div class="col-3">
                    <img src="./images/product4.jpG">
                    <h4>Shoes</h4>
                    <a href="ProductDetails(shoes).php"><p id="btn">Buy</p></a>
                 </div>
            </div>
    </div>
</div>
<!---featured product--->
<div class="small-container">
    <h2 class="title">Featured Product</h2>
    <div class="row">
        <div class="col-4">
            <img src="./images/tshirt1.jpg"></img>
        <h4>Loose T-Shirt</h4>
            <p>$50.00</p>
            <a href="ProductDetails.php"><p id="btn">Buy</p></a>
        </div>
        <div class="col-4">
            <img src="./images/t-shirt.jpg">
            <h4>T-Shirt</h4>
            <p>$50.00</p>
            <a href="ProductDetails.php"><p id="btn">Buy</p></a>
        </div>
        <div class="col-4">
            <img src="./images/t-shirt2.jpg">
            <h4>Sweat Shirt</h4>
            <p>$50.00</p>
            <a href="ProductDetails.php"><p id="btn">Buy</p></a>
        </div>       
    </div>
</div>
<!---offer--->
<div class="small-container">
<h2 class="title">Latest Products</h2>
<div class="row">
    <div class="col-4">
        <img src="./images/jean1.jpg">
        <h4>Jean</h4>
        <p>$50.00</p>
        <a href="ProductDetails.php"><p id="btn">Buy</p></a>
    </div>
    <div class="col-4">
        <img src="./images/jean2.jpg">
        <h4>Boot Cut Jeans</h4>
        <p>$50.00</p>
        <a href="ProductDetails.php"><p id="btn">Buy</p></a>
    </div>
    <div class="col-4">
        <img src="./images/jean3.jpg">
        <h4>Denim</h4>
        <p>$50.00</p>
        <a href="ProductDetails.php"><p id="btn">Buy</p></a>
    </div>
    <div class="col-4">
        <img src="./images/jean1.jpg">
        <h4>Boot Cut Jeans</h4>
        <p>$50.00</p>
        <a href="ProductDetails.php"><p id="btn">Buy</p></a>
    </div>
    <div class="col-4">
        <img src="./images/jean2.jpg">
        <h4>Denim</h4>
        <p>$50.00</p>
        <a href="ProductDetails.php"><p id="btn">Buy</p></a>
    </div>
    <div class="col-4">
        <img src="./images/jean3.jpg">
        <h4>Jeans</h4>
        <p>$50.00</p>
        <a href="ProductDetails.php"><p id="btn">Buy</p></a>
    </div>
    </div>
</div>
</div>

<!-- ************Special offer*************** -->
<div class="offer">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="./images/watch1.png" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclucively Available on SaleForce</p>
                <h1>Smart Band 4</h1>
                <small>The Mi Band 4 has a 0.95-inches AMOLED display. The fitness band weighs 22 grams and is lightweight. The band features a 135mAh battery which offers up to 20 days of battery life.</small>
                <br><a href="ProductDetails(watch).php" id="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>

<!--Testimonial-->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <p>I just wanted to share a quick note and let you know that you guys do a really good job. I’m glad I decided to work with you.</p>
                <img src="./images/user1.jpg">
                <h3>Jhon Parker</h3>
            </div>
            <div class="col-3">
                <p>“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change and click save.</p>
                <img src="./images/user2.jpg">
                <h3>James Ray</h3>
            </div>
            <div class="col-3">
                <p>“Wow. I just updated my site and it was SO SIMPLE. I am blown away. You guys truly kick ass. Thanks for being so awesome.</p>
                <img src="./images/user4.jpg">
                <h3>Sean Alexis</h3>
            </div>
        </div>
    </div>
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
    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/index.js"></script>
    </body>
    </html>