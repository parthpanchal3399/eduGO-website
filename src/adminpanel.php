
<?php
    require "header.php"
?>

<?php
        require "navbar.php"
?>


<div class="container">
    <div>
        <h1>Add Course</h1>
    </div>
    <div>
        <form action="includes/adminpanel.inc.php" method="POST">
            <div class="form-group">
                <label for="InputCourseName">Course Name</label>
                <input type="text" class="form-control" id="InputCourseName" placeholder="Enter Course Name">
            </div>
            <div class="form-group">
                <label for="InputDesc">Description</label>
                <input type="text-area" class="form-control" id="InputDesc" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="InputSyllabus">Syllabus</label>
                <textarea class="form-control" id="InputSyllabus" rows="5" placeholder="Enter Syllabus separated by comma(,)"></textarea>
            </div>
            <div class="form-group">
                <label for="InputInstructorName">Instructor Name</label>
                <input type="text" class="form-control" id="InputInstructorName" placeholder="Enter Instructor Name">
            </div>
            <div class="form-group">
                <label for="InputLink">Instructor Name</label>
                <input type="text" class="form-control" id="InputLink" placeholder="Enter Course Link">
            </div>
            <div class="form-group">
                <label for="InputInstructorImg">Upload Instructor Image</label>
                <input type="file" class="form-control-file" id="InputInstructorImg">
            </div>
            <div class="form-group">
                <label for="InputThumbnail">Upload Thumbnail</label>
                <input type="file" class="form-control-file" id="InputThumbnail">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<?php
    require "footer.php"
?>
