<?php
session_start();

include('../back/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $user = $_POST['user_correo'];
    $password = $_POST['password'];

    $validarLogin = "SELECT * FROM personas WHERE documento = '$user'";
    $queryValidarLogin = mysqli_query($conn, $validarLogin);

    if (mysqli_num_rows($queryValidarLogin) == 1) {

        $row = mysqli_fetch_assoc($queryValidarLogin);
        $sesionUsername = $row['nombre'] .' '. $row['apellido'];
        $checkPassword = $row['pass'];

        if (password_verify($password, $checkPassword)) {
            $_SESSION['usuario'] = $sesionUsername;
            header('location: ../../index_1.php');
            exit;
        } else {
            $error = "Nombre de usuario o Contraseña invalido";
            echo $error;
            exit;
        }
    }else{
        echo $error;
        exit;
    }
}

mysqli_close($conn);
?>