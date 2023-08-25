<?php 
include('../back/connection.php');

if(isset($_POST['registerInstructores'])){

    $instructoresName = $_POST['instructorName'];
    $instructoresFicha = $_POST['instructorFicha'];

    try {

        $insertInstructores = "INSERT INTO instructor (id_persona, id_ficha) VALUES ($instructoresFicha, $instructoresName);";
        $queryIntructores = mysqli_query($conn,$insertInstructores);
        header('location: ../instructores.php');

    } catch (\Throwable $e) {
        echo $e;
    }
}


?>