<?php

if(isset($_POST['login-submit']))
{
    require 'dbh.inc.php';

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    //check if user is admin
    if($email == 'admin@edugo.com' && $password == 'admin123')
    {
        session_start();
        $_SESSION['userId'] = 1;
        $_SESSION['uname'] = 'Admin';
        $_SESSION['email'] = 'admin@edugo.com';
        header("Location: ../adminpanel.php");
        exit();
    }
    else
    {
        //user is regular user
        if(empty($email) || empty($password))
        {
            header("Location: ../login.php?error=emptyfields");
            exit();
        }
        else
        {
            $sql = "SELECT * FROM users WHERE email=?";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../login.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result))
                {
                    $pwdCheck = password_verify($password, $row['pwd']);
                    if($pwdCheck == false)
                    {
                        header("Location: ../login.php?error=wrongpwd");
                        exit();
                    }
                    else if($pwdCheck == true)
                    {
                        session_start();
                        $_SESSION['userId'] = $row['user_id'];
                        $_SESSION['uname'] = $row['uname'];
                        $_SESSION['email'] = $row['email'];
                        header("Location: ../login.php?login=success");
                        exit();
                    }
                    else
                    {
                        header("Location: ../login.php?error=wrongpwd");
                        exit();
                    }
                }
                else
                {
                    header("Location: ../login.php?error=nouser");
                    exit();
                }
            }
        }
    }
}
else
{
    header("Location: ../login.php");
    exit();
}