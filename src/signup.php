<?php
    require "header.php"
?>

<div class="container-fluid">
    <div class="website-logo">
        <a href="index.php">
            <div>
                <img height="50px" src="images/edugo_logo.svg" alt="logo">

            </div>
        </a>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/key.svg" alt="">
                </div>
            </div>
        </div>

        <div class="col-lg-8 login-section"> <!-- Signup Section -->
            <div class="form-holder">   
                <div class="form-content">
                    <div class="form-items">
                        <h3>eduGO</h3>
                        <p>Learn Engineering Concepts on the GO!!</p>

                        <div class="page-links">
                            <a href="login.php">Login</a>
                            <a href="signup.php" class="active">Sign-Up</a>
                        </div>
                        
                        <div class="login-form">
                            SIGN-UP
                            <form action="includes/signup.inc.php" method="POST">
                                <div class="form-group">
                                    <label for="InputName">Name</label>
                                    <input type="text" class="form-control" id="InputName" placeholder="Enter your Name" name="uname">
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">Email address</label>
                                    <input type="email" class="form-control" id="InputEmail" placeholder="Enter your email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="InputPhone">Phone Number</label>
                                    <input type="text" class="form-control" id="InputPhone" placeholder="Enter your Phone Number" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="InputPassword">Password</label>
                                    <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="pwd">
                                </div>
                                <button type="submit" class="btn btn-primary" name="signup-submit">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>


<?php
    require "footer.php"
?>