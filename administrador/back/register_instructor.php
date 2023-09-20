<?php 
include('../back/connection.php');

if(isset($_POST['registerInstructores'])){

    $instructoresName = $_POST['instructorName'];
    $instructoresFicha = $_POST['instructorFicha'];

    try {
<<<<<<< HEAD
=======

>>>>>>> 94b3982f1a9ea396e2503b4767d75499fa6edeea
        $insertInstructores = "INSERT INTO instructor (id_persona, id_ficha) VALUES ($instructoresName, $instructoresFicha);";
        $queryIntructores = mysqli_query($conn,$insertInstructores);
        header('location: ../instructores.php');

    } catch (\Throwable $e) {
        echo $e;
    }
}


?>