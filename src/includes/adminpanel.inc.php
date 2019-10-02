<?php
    if(isset($_POST['add-course']))
    {
        require 'dbh.inc.php';

        $courseName = $_POST['courseName'];
        $description = $_POST['description'];
        $syllabus = $_POST['syllabus'];
        $instructorName = $_POST['instructorName'];
        $fullLink = $_POST['link'];
        $instructorImg = mysqli_real_escape_string($conn, $_FILES['instructorImg']['name']);
        $thumbnail = mysqli_real_escape_string($conn, $_FILES['thumbnail']['name']);

        $link = substr($fullLink, strpos($fullLink, "=") + 1);  //Get Playlist Link

        //For FILES upload
        $instructorImgData = mysqli_real_escape_string($conn, file_get_contents($_FILES['instructorImg']['tmp_name']));
        $thumbnailData = mysqli_real_escape_string($conn, file_get_contents($_FILES['thumbnail']['tmp_name']));
        $instructorImgType = mysqli_real_escape_string($conn, $_FILES['instructorImg']['type']);
        $thumbnailType = mysqli_real_escape_string($conn, $_FILES['thumbnail']['type']);
        if(empty($courseName) || empty($description) || empty($syllabus) || empty($instructorName) || empty($fullLink))
        {
            header("Location: ../adminpanel.php?error=emptyfields");
            exit();
        }
        else
        {
            if(substr($instructorImgType,0,5) == 'image' && substr($thumbnailType,0,5) == 'image')
            {
                mysqli_query($conn, "INSERT INTO courses(course_id, course_name, dsc, syllabus, instructor, instructor_img, link, thumbnail) VALUES('', '$courseName', '$description', '$syllabus', '$instructorName', '$instructorImgData', '$link', '$thumbnailData')");
                header("Location: ../adminpanel.php?courseadded");
                exit();
            }
            else
            {
                header("Location: ../adminpanel.php?onlyimages");
                exit();
            }
        }
    }
    else  
    {
        header("Location: ../adminpanel.php");
        exit();
    }