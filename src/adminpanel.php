
<?php
    require "header.php"
?>

<?php
        require "navbar.php"
?>

<?php
    if($_SESSION['userId'] == 1 && $_SESSION['email'] == 'admin@edugo.com') 
    {
        //if user is admin then display Admin panel
    ?>
<div class="container">
    <div>
        <?php
            if(isset($_GET['error']) == 'emptyfields')
            {
                echo '<div class="text-center alert alert-danger" role="alert">
                            Fill out all the fields!
                        </div>';
            }
            else if(isset($_GET['courseadded']))
            {
                echo '<div class="text-center alert alert-success" role="alert">
                            Course Added Successfully!
                        </div>';
            }
            else if(isset($_GET['onlyimages']))
            {
                echo '<div class="text-center alert alert-danger" role="alert">
                            Only Images Allowed!
                        </div>';
            }

        ?>
    </div>
    <div>
        <h1>Add Course</h1>
    </div>
    <div>
        <form action="includes/adminpanel.inc.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="InputCourseName">Course Name</label>
                <input type="text" class="form-control" id="InputCourseName" name="courseName" placeholder="Enter Course Name">
            </div>
            <div class="form-group">
                <label for="InputDesc">Description</label>
                <input type="text-area" class="form-control" id="InputDesc" name="description" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="InputSyllabus">Syllabus</label>
                <textarea class="form-control" id="InputSyllabus" rows="5" name="syllabus" placeholder="Enter Syllabus separated by comma(,)"></textarea>
            </div>
            <div class="form-group">
                <label for="InputInstructorName">Instructor Name</label>
                <input type="text" class="form-control" id="InputInstructorName" name="instructorName" placeholder="Enter Instructor Name">
            </div>
            <div class="form-group">
                <label for="InputLink">Course Link</label>
                <input type="text" class="form-control" id="InputLink" name="link" placeholder="Enter Course Link">
            </div>
            <div class="form-group">
                <label for="InputInstructorImg">Upload Instructor Image</label>
                <input type="file" class="form-control-file" name="instructorImg" id="InputInstructorImg">
            </div>
            <div class="form-group">
                <label for="InputThumbnail">Upload Thumbnail</label>
                <input type="file" class="form-control-file" name="thumbnail" id="InputThumbnail">
            </div>
            <button type="submit" class="btn btn-primary" name="add-course">Submit</button>
        </form>
    </div>
</div>
<?php
    } //if user is admin
    else
    {
        header("Location: login.php");
        exit();
    }
?>


<?php
    require "footer.php"
?>
