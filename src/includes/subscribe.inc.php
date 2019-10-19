<?php
    session_start();
    require 'dbh.inc.php';
    $courseId = $_GET['courseId'];
    $userId = $_SESSION['userId'];

    if(isset($_SESSION['userId']))
    {
        $check = mysqli_query($conn, "SELECT * FROM subscriptions WHERE usr_id=".$userId." AND crs_id=".$courseId);
        {
            if(mysqli_num_rows($check) == 0)
            {
                $result = mysqli_query($conn, "INSERT INTO subscriptions(usr_id, crs_id) VALUES('$userId', '$courseId')");
                if($result)
                {
                    header("Location: ../viewcourse.php?courseId=".$courseId);
                    exit();
                }
            }
        }
        
    }
    else
    {
        header("Location: ../login.php?pleaselogin");
        exit();
    }
