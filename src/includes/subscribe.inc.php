<?php
    session_start();
    require 'dbh.inc.php';
    $courseId = $_GET['courseId'];
    $userId = $_SESSION['userId'];

    if(isset($_SESSION['userId']))
    {
        $result = mysqli_query($conn, "INSERT INTO subscriptions(usr_id, crs_id) VALUES('$userId', '$courseId')");
        if($result)
        {
            header("Location: ../viewcourse.php?courseId=".$courseId);
            exit();
        }
    }
    else
    {
        header("Location: ../login.php?pleaselogin");
        exit();
    }
