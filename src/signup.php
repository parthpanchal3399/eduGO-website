<?php
    require "header.php"
?>

<div class="container-fluid">
    <div class="website-logo">
        <a href="index.php">
            <div>
                <img height="90px" src="images/logo2.png" alt="logo">
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
            <div class="form-holder login-form-mobile">   
                <div class="form-content">
                    <div class="form-items">
                        <h3>eduGO</h3>
                        <p>Learn Engineering Concepts on the GO!!</p>

                        <div class="page-links">
                            <a href="login.php">Login</a>
                            <a href="signup.php" class="active">Sign-Up</a>
                        </div>

                        
                        <div class="login-form">
                            <h4>SIGN UP</h4>
                            <?php
                                if(isset($_GET['error']))
                                {
                                    if($_GET['error'] == "emptyfields")
                                    {
                                        echo '<div class="text-center alert alert-danger" role="alert">
                                                Fill out all the fields!
                                            </div>';
                                    }
                                    else if($_GET['error'] == "invalid-email-uname")
                                    {
                                        // $c_name = $_GET['name'];
                                        // $gst = $_GET['gst'];
                                        // $addr = $_GET['addr'];
                                        echo '<div class="text-center alert alert-danger" role="alert">
                                                Invalid Name and E-mail!
                                            </div>';
                                    }
                                    else if($_GET['error'] == "invalid-email")
                                    {
                                        echo '<div class="text-center alert alert-danger" role="alert">
                                                Invalid E-mail!
                                            </div>';
                                    }
                                    else if($_GET['error'] == "invalid-uname")
                                    {
                                        echo '<div class="text-center alert alert-danger" role="alert">
                                                Invalid Name!
                                            </div>';
                                    }
                                    else if($_GET['error'] == "invalid-phone")
                                    {
                                        echo '<div class="text-center alert alert-danger" role="alert">
                                                Invalid Phone!
                                            </div>';
                                    }
                                    else if($_GET['error'] == "email-taken")
                                    {
                                        echo '<div class="text-center alert alert-danger" role="alert">
                                                User with this E-mail already exists!
                                            </div>';
                                    }
                                }
                                else if(isset($_GET['signup']) == "success")
                                {
                                    header("refresh:2; url=login.php");
                                    echo '<div class="text-center alert alert-success" role="alert">
                                                Sign Up Successful!
                                            </div>';
                                }
                            ?>
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
                                    <input type="text" class="form-control" id="InputPhone" placeholder="Enter your Phone Number (Optional)" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="InputPassword">Password</label>
                                    <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="pwd">
                                </div>
                                <button type="submit" class="btn btn-primary" name="signup-submit">Sign Up</button>
                            </form>

                            <div style="padding-top:20px;" class="page-links">
                                <a href="index.php" class="active">HOME</a>
                            </div>
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