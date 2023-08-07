<?php
session_start();

include('../back/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $user = $_POST['user_correo'];
    $password = $_POST['password'];

    $validarLogin = "SELECT * FROM usuarios WHERE (usuario = '$user' OR email ='$user')";
    $queryValidarLogin = mysqli_query($conn, $validarLogin);

    if (mysqli_num_rows($queryValidarLogin) == 1) {

        $row = mysqli_fetch_assoc($queryValidarLogin);
        $checkPassword = $row['password'];

        if (password_verify($password, $checkPassword)) {
            $_SESSION['usuario'] = $user;
            header('location: ../index_1.php');
            
            exit;
        } else {
            $error = "Nombre de usuario o Contraseña invalido";
            echo $error;
            exit;
        }
    }
}

mysqli_close($conn);

?>