<?php
include("./partials/header.php");
?>
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="./images/image2.png" width="100%">
                </div>
        
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span class="title">Feedback</span>
                        </div>
                        <form id="registrationform">
                            <input type="text" placeholder="username" required>
                            <input type="email" placeholder="email" required>
                            <input type="password" placeholder="password" requireds>
                            <select>
                                <option>Raiting</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <button type="submit" id="btn">Submit</button>
                        </form>
                    </div>
                </div>  
        </div>
       </div>
       <?php
include("./partials/footer.php");
?>