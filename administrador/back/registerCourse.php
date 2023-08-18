<?php 
include('../back/connection.php');

if(isset($_POST['registerCourse'])){

    $courseName = empty($_POST['courseName']) ? NULL : $_POST['courseName'];
    $courseStatus = empty($_POST['courseStatus']) ? NULL : $_POST['courseStatus'];
    
    try {

        $insertCourse ="INSERT INTO programa VALUES('','$courseName',$courseStatus);";
        $queryCourse = mysqli_query($conn,$insertCourse);
        header('location: ../courses.php');

        
    } catch (\Throwable $e) {
        echo $e;
    }
}

?>