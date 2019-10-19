<?php
    require "header.php"
?>

<?php
        require "navbar.php"
?>

<?php
    require 'includes/dbh.inc.php';
    if(isset($_SESSION['userId']))
    {
        $courseId = $_GET['courseId'];
        $userId = $_SESSION['userId'];
        $result = mysqli_query($conn, "SELECT * FROM courses WHERE course_id=".$courseId);
        $check = mysqli_query($conn, "SELECT * FROM subscriptions WHERE usr_id=".$userId." AND crs_id=".$courseId);
        $countRows = mysqli_num_rows($check);
        while ($item = mysqli_fetch_array($result))
        {
            echo '
        <div class="row" id="course-heading">
            <div class="col-6">
                <div class="course-heading-content">
                    <h1>'. $item['course_name']. '</h1>
                    <p>'. $item['dsc']. '</p>';
                    
                    if($countRows == 0)
                    {
                        echo '
                        <form method="POST" action="includes/subscribe.inc.php?courseId='.$courseId.'">
                            <button type="submit" class="btn btn-primary" name="subscribe">Subscribe</button>
                        </form>
                        ';
                    }
                    else
                    {
                        echo '
                        <div style="display:flex;">';
                        
                        echo '
                        
                            <form method="POST" action="includes/unsubscribe.inc.php?courseId='.$courseId.'">
                                <button type="submit" class="btn btn-primary" name="unsubscribe">Unsubscribe</button>
                            </form>
                        
                        ';
                        echo '
                        
                            <form method="POST" action="viewcourse.php?courseId='.$courseId.'" style="padding-left:20px;">
                                <button type="submit" class="btn btn-primary" name="gotocourse">Goto Course</button>
                            </form>
                        
                        ';
                        echo '</div>'; //Row ends
                    }
                        
                    echo '
                                
                        </div>
            </div>
            <div class="col-6">
                <div class="course-learning-img">
                    <img src="images/learning.png" alt="">
                </div>
            </div>
            <hr>
        </div>
            ';
            $syllabusArr = explode (",", $item['syllabus']);
            
            echo '
            <div id="course-main-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="course-about-heading"> 
                            <h1>About the Course</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <h3 class="course-details">Syllabus</h3>
                            <ul class="list-group list-group-flush">';

                            for($i=0; $i<count($syllabusArr); $i++)
                            {
                                echo '<li class="list-group-item">'. $syllabusArr[$i]. '</li>';
                            }
                                
                        echo '
                            </ul>
                        </div>
                        <div class="col-5">
                            <h3 class="course-details" style="text-align: center;">Instructor</h3>
                            <div class="instructor">
                                <img src="images/uploads/'. $item['instructor_img']. '" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
    }
    else
    {
        header("Location: login.php?pleaselogin");
        exit();
    }
    ?>
    




    


<?php
    require "footer.php"
?>