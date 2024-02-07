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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="shortcut icon" type="x-icon" href="./images/weblogo.png">
        <link rel="stylesheet" href="css/style.css">

        <title>ittakeShopping | ONLINE SHOPPING</title>
        <style>
    /* Custom CSS styles go here */
    .container {
        margin-top: 20px;
    }
    .container h2 {
        font-size: 4em;
        -webkit-text-stroke: 3px darkgrey;
        -webkit-text-fill-color: white;
        -webkit-animation: fill 1s infinite alternate;
    }

    @-webkit-keyframes fill {
        from { -webkit-text-fill-color: #00eb8f; }
        to { -webkit-text-fill-color: slategrey; }
    }

    .form-label {
        font-weight: bold;
    }

    /* Additional styling */
    .container, .mb-3 {
        margin-bottom: 20px;
    }
    .form-control {
        padding: 10px;
    }
    .btn-primary {
        background-color: #00eb8f;
        border-color: #00eb8f;
        color: white; /* Text color */
        font-weight: bold; /* Make the text bold */
    }
    .btn-primary:hover {
        background-color: #00c67d;
        border-color: #00c67d;
    }

    /* Style the "Sign Up" link */
    span {
        display: block; /* Place the "Sign Up" link on a new line */
        text-align: center;
        margin-top: 10px;
        
        font-weight: bold; /* Make the text bold */
    }

    span a {
        text-decoration: none; /* Remove the underline from the link */
        color: #00eb8f; /* Link color */
    }

    span a:hover {
        color: #00c67d; /* Link color on hover */
    }
</style>

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
                   
            </div>
    </div>

    <div class="container">
        <br><br><br><br>
    <h2 class="text-center mb-5 registration">Registration Form</h2>
    <form action="admin/login_register.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Choose a username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="4" placeholder="Enter your address"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5" name="register">Submit</button><span>already a user?<a href="./account_login.php"> Sign Up</a></span>
    </form>
</div>


<!-- ****footer**** -->

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
            <p id="copyright">Copyright <script>document.write(new Date().getFullYear())</script></p>

        </div>
    </div>
    
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../js/index.js"></script>
        </body>
        </html>
