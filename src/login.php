<?php
    require "header.php";
?>

<div class="container-fluid">
    <div class="website-logo">
        <a href="index.php">
            <div>
                <img src="images/logo2.png" alt="logo">
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
            <div class="form-holder login-form-mobile">   
                <div class="form-content">
                    <div class="form-items">
                        <h3>eduGO</h3>
                        <p>Learn Engineering Concepts on the GO!!</p>

                        <div class="page-links">
                            <a href="login.php" class="active">Login</a>
                            <a href="signup.php">Sign-Up</a>
                        </div>
                        
                        <div class="login-form">
                            <h4>LOGIN</h4>
                            <?php
                                if(isset($_GET['error']))
                                {
                                    if($_GET['error'] == "emptyfields")
                                    {
                                        echo '<div class="text-center alert alert-danger" role="alert">
                                                Fill out all the fields!
                                            </div>';
                                    }
                                    else if($_GET['error'] == "wrongpwd")
                                    {
                                        // $c_name = $_GET['name'];
                                        // $gst = $_GET['gst'];
                                        // $addr = $_GET['addr'];
                                        echo '<div class="text-center alert alert-danger" role="alert">
                                                Invalid Password!
                                            </div>';
                                    }
                                    else if($_GET['error'] == "nouser")
                                    {
                                        echo '<div class="text-center alert alert-danger" role="alert">
                                                User Not Found!
                                            </div>';
                                    }
                                }
                                else if(isset($_GET['pleaselogin']))
                                {
                                    echo '<div class="text-center alert alert-danger" role="alert">
                                                Please Login In to Continue!
                                            </div>';
                                }
                                else if(isset($_GET['login']) == "success")
                                {
                                    header("refresh:2; url=mycourses.php");
                                    echo '<div class="text-center alert alert-success" role="alert">
                                                Login Successful! Redirecting .... 
                                            </div>';
                                }
                            ?>
                            <form action="includes/login.inc.php" method="POST">
                                <div class="form-group">
                                    <label for="InputEmail">Email address</label>
                                    <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label for="InputPassword">Password</label>
                                    <input type="password" class="form-control" id="InputPassword" name="pwd" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary" name="login-submit">Login</button>
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