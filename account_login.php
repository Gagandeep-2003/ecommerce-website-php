<?php
include("./partials/header.php");
?>
    <!-- account page -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="./images/image1.png" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-title">
                            <span class="title">Sign In</span>
                        </div>
                        <form id="registrationform" action="admin/login_register.php" method="post">
                            <input type="text" placeholder="username or email" id="t1" name="email_username">
                            <input type="password" placeholder="password" id="t3"  name="password">
                            <input type="submit" id="register-button" value="Log in" name="login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
include("./partials/footer.php");
?>