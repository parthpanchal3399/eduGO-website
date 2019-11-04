<?php
    require "header.php"
?>

<?php
        require "navbar.php"
?>


<div class="row" id="course-heading">
    <div class="col-lg-6 col-sm-12">
        <div class="course-heading-content">
            <?php
                require 'includes/dbh.inc.php';
                $courseId = $_GET['courseId'];
                $result = mysqli_query($conn, "SELECT * FROM courses WHERE course_id=".$courseId);
                while ($item = mysqli_fetch_array($result))
                {
                    echo '
                    <h1>'. $item['course_name']. '</h1>
                    <p>'. $item['dsc']. '</p>
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

                    echo '
                    <div id="course-main-section" style="padding-bottom: 50px;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="video-mobile video-container embed-responsive embed-responsive-16by9">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=' .$item['link']. '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                    ';
                }
            ?>
    




<?php
    require "footer.php"
?>

