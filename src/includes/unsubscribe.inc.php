<?php
    session_start();
    require 'dbh.inc.php';
    $courseId = $_GET['courseId'];
    $userId = $_SESSION['userId'];

    if(isset($_SESSION['userId']))
    {
        $result = mysqli_query($conn, "DELETE FROM subscriptions WHERE usr_id=".$userId." AND crs_id=".$courseId);
        if($result)
        {
            header("Location: ../coursedetails.php?courseId=".$courseId);
            exit();
        }
        
    }
    else
    {
        header("Location: ../login.php?pleaselogin");
        exit();
    }
