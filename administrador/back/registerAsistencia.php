<?php
include('../back/connection.php');

if (isset($_POST['registrar_asistencia'])) {
    $instructorAsist =  $_POST['instructorAsist'];
    $aprendizAsist =  $_POST['aprendizAsist'];
    $statusAsist =  $_POST['statusAsist'];
    $dateAsist =  $_POST['dateAsist'];
    $descriptionAsist = $_POST['descriptionAsist'];
   

    $registerAsistence = "INSERT INTO asistencia VALUES ('',$instructorAsist,$aprendizAsist,$statusAsist,'$dateAsist','$descriptionAsist')";

    $queryAsistence = mysqli_query($conn, $registerAsistence);

    if (!$queryAsistence) {
        echo "No se pudo registrar los datos";
    }
    header('Location: ../asistencia.php');
}

