<?php
session_start();

include('./administrador/back/connection.php');

if ($_SERVER['REQUEST METHOD'] == 'POST') {

    $user = $_POST['user_correo'];
    $password = $_POST['password'];

    $validarLogin = "SELECT * FROM usuarios WHERE email = '$email' OR user ='$user' AND password = '$password'";
    $queryValidarLogin = mysqli_query($conn, $validarLogin);

    while ($row = mysqli_fetch_array($queryValidarLogin)) {
        $checkUser = $row['user'];
        $checkEmail = $row['email'];
        $checkPassword = $row['password'];
    }
    if (mysqli_num_rows($queryValidarLogin) == 1) {
        if ($checkEmail or $checkEmail === $user) {
            if(password_verify($password,$checkPassword)){
                $_SESSION['email'] = $user;
                header('location: ./administrador/index.php');
                exit;
            }else{
                $error = "Nombre de usuario o Contraseña invalido";

                echo $error;

                header('location: index.php');
                exit;
            }

        }
    }
}

mysqli_close($conn);
?>