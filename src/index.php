<?php
    require "header.php"
?>
<?php
    require "navbar.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>landing page</title>
    
</head>
<body class="indbody">
    <div class="container11">
        <h1>Learn 
           <!--this span will then be called in javascript and values will be taken -->
            <span class="txt-type" data-wait="1000" data-words = '["Mechanics" , "Data Structures" , "OOPM","Python"]'></span>
            <br>the easiest way
        </h1>
        <h2>Welcome to our website</h2>    
    </div>
    <div class="hi"> 
          <button>Send Email</button>
    </div>          
        <script src="js/main.js"></script>
</body>
</html>

<?php
    require "footer.php"
?>