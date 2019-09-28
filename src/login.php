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

        <div class="col-lg-8 login-section"> <!-- Login Section -->
            <div class="form-holder">   
                <div class="form-content">
                    <div class="form-items">
                        <h3>eduGO</h3>
                        <p>Learn Engineering Concepts on the GO!!</p>

                        <div class="page-links">
                            <a href="login.php" class="active">Login</a>
                            <a href="signup.php">Sign-Up</a>
                        </div>
                        
                        <div class="login-form">
                            LOGIN
                            <form>
                                <div class="form-group">
                                    <label for="InputEmail">Email address</label>
                                    <input type="email" class="form-control" id="InputEmail" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label for="InputPassword">Password</label>
                                    <input type="password" class="form-control" id="InputPassword" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
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