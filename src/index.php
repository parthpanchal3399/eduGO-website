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
<body>
    <div class="indbody">
        <div class="container11">
            <div class="jumbotron jumbotron-fluid" style="text-align: left;">
                <div class="contrainer">
                    <h1 class="display-2">Learn 
                        <!--this span will then be called in javascript and values will be taken -->
                        <span class="txt-type" data-wait="1000" data-words = '["JavaScript" , "Data Structures" , "Java", "Python", "Computer Graphics", "DBMS"]'></span>
                        <br>
                        <script src="js/main.js"></script>
                    </h1>
                    <p class="lead">Engineering Concepts on the GO!!</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
