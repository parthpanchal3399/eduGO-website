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

        $link = substr($fullLink, strpos($fullLink, "list=") + 5);  //Get Playlist Link

        //FILE path for uploads:
        $targetInstructorImg = "../images/uploads/".basename($_FILES['instructorImg']['name']);
        $targetThumbnail = "../images/uploads/".basename($_FILES['thumbnail']['name']);
        
        //For FILES upload
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
                mysqli_query($conn, "INSERT INTO courses(course_id, course_name, dsc, syllabus, instructor, instructor_img, link, thumbnail) VALUES('', '$courseName', '$description', '$syllabus', '$instructorName', '$instructorImg', '$link', '$thumbnail')");
                if(move_uploaded_file($_FILES['instructorImg']['tmp_name'], $targetInstructorImg) && move_uploaded_file($_FILES['thumbnail']['tmp_name'], $targetThumbnail))
                {
                    header("Location: ../adminpanel.php?courseadded");
                    exit();
                }
                
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