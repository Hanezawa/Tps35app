<?php
session_start();

<<<<<<< HEAD
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
=======
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

>>>>>>> 4458b4c644a1989125d838ce3bd957b12192ff12
        }
    }
}

mysqli_close($conn);
<<<<<<< HEAD

=======
>>>>>>> 4458b4c644a1989125d838ce3bd957b12192ff12
?>