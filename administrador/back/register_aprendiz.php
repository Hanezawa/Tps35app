<?php 
include('../back/connection.php');

if(isset($_POST['registerInstructores'])){

    $aprendizName = $_POST['aprendizName'];
    $aprendizFicha = $_POST['aprendizFicha'];
    $aprendizStatus = $_POST['aprendizStatus'];

    try {
        $insertAprendiz = "INSERT INTO aprendiz (id_persona, id_ficha,estado) VALUES ($aprendizName, $aprendizFicha,$aprendizStatus);";
        $queryAprendiz = mysqli_query($conn,$insertAprendiz);
        header('location: ../aprendices.php');

    } catch (\Throwable $e) {
        echo $e;
    }
}

?>