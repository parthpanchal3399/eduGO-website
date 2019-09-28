<?php
    if(isset($_POST['signup-submit']))
    {
        require 'dbh.inc.php';

        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $phone = $_POST['phone'];


        // Validate Stuff
        if(empty($uname) || empty($email) || empty($password) || empty($phone))
        {
            header("Location: ../signup.php?error=emptyfields&uname=".$uname."&email=".$email."&phone=".$phone);
            exit();
        }


        else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9_ -]*$/", $uname) && strlen($phone) != 10)
        {
            header("Location: ../signup.php?error=invalid-email-uname-phone");
            exit();
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9_ -]*$/", $uname))
        {
            header("Location: ../signup.php?error=invalid-email-uname&phone=".$phone);
            exit();
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($phone) != 10)
        {
            header("Location: ../signup.php?error=invalid-email-phone&uname=".$uname);
            exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9_ -]*$/", $uname) && strlen($phone) != 10)
        {
            header("Location: ../signup.php?error=invalid-name-phone&email=".$email);
            exit();
        }


        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            header("Location: ../signup.php?error=invalid-email&uid=".$uname."&phone=".$phone);
            exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9_ -]*$/", $uname))
        {
            header("Location: ../signup.php?error=invalid-uname&email=".$email."&phone=".$phone);
            exit();
        }
        else if(strlen($phone) != 10)
        {
            header("Location: ../signup.php?error=invalid-phone&uname=".$uname."&email=".$email);
            exit();
        }

        else
        {
            $sql = "SELECT email FROM users WHERE email=?";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }
            else
            { 
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0)
                {
                    header("Location: ../signup.php?error=email-taken&uname=".$uname."&phone=".$phone);
                    exit();
                }
                else
                {
                    $sql = "INSERT INTO users (uname, email, phone, pwd) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt, $sql))
                    {
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                    }
                    else
                    {
                        $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "ssss", $uname, $email, $phone, $hashedpwd);
                        mysqli_stmt_execute($stmt);

                        header("Location: ../signup.php?signup=success");
                        exit();
                    }
                }
            }
        }
    }
?>