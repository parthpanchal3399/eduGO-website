
<nav class="navigation navbar navbar-expand-lg sticky-top">
  <a class="navbar-brand" href="index.php"><img style="height: 60px; padding-bottom:10px;" src="images/logo2.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
      <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav mr-auto">
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
  </div>

   
</nav>

