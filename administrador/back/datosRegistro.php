<?php

include('./connection.php');

if(isset($_POST['registrarse'])){

$user = $_POST['user'];
$mail = $_POST['email'];
$pass = $_POST['pass'];
$passConfirm = $_POST['passConfirm'];
$passEncrypted = password_hash($pass,PASSWORD_DEFAULT);
    if($pass === $passConfirm){
        $consultRegister = "INSERT INTO usuarios (usuario, email, password) VALUES ('$user','$mail', '$passEncrypted')";
        $queryRegister = mysqli_query($conn, $consultRegister);
        if($queryRegister){
            $register_success = true;
            header('location: ../../index.php');
        }else{
            $register_success = false;
        }
    } else{
        $register_success = false;
    }
}


mysqli_close($conn);
