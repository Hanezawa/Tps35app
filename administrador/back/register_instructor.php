<?php 
include('../back/connection.php');

if(isset($_POST['registerInstructores'])){

    $instructoresName = empty($_POST['instructorName']);
    $instructoresFicha =empty($_POST['instructorFicha']);

    try {

        $insertInstructores="INSERT INTO instructor VALUES('',$instructoresFicha,$instructoresNAme);";
        $queryIntructores = mysqli_query($conn,$insertInstructores);
        header('location: ../instructores.php');

    } catch (\Throwable $e) {
        echo $e;
    }
}


?>