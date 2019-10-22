
<nav class="navigation navbar navbar-expand-lg sticky-top">
  <a class="navbar-brand" href="#"><img style="height: 60px; padding-bottom:10px;" src="images/logo2.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">HOME</a>
      <a class="nav-item nav-link" href="browsecourses.php">COURSES</a>
      <a class="nav-item nav-link" href="aboutus.php">ABOUT US</a>

      <?php
        if(isset($_SESSION['userId']))
        {
          echo '<a class="nav-item nav-link" href="mycourses.php">MY COURSES</a>';
          if($_SESSION['userId'] == 1 && $_SESSION['email'] == 'admin@edugo.com')
          {
            echo '<a class="nav-item nav-link" href="adminpanel.php">ADD COURSE</a>';
          }
        }
      ?>
    </div>
  </div>

  <div class="navbar-right navbar-nav">
  <?php
    if(isset($_SESSION['userId']))
    {
      echo '
      <button type="submit" name="logout-submit" class="nav-buttons btn btn-primary"><a class="nav-item nav-link" href="includes/logout.inc.php">LOGOUT</a></button>
      ';
    }
    else
    {
      echo '
      <button type="submit" class="nav-buttons btn btn-primary"><a class="nav-item nav-link" href="login.php">LOGIN</a></button>
      <button type="submit" class="nav-buttons btn btn-primary"><a class="nav-item nav-link" href="signup.php">SIGN UP</a></button>
      ';
    }
  ?> 
  </div>  
</nav>

