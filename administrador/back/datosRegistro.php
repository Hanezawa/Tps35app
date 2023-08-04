<?php

include('./administrador/back/connection.php');

if(isset($_POST['registrarse'])){

$user = $_POST['user'];
$mail = $_POST['email'];
$pass = $_POST['pass'];
$passEncrypted = password_hash($pass,PASSWORD_DEFAULT);
$passConfirm = $_POST['passConfirm'];
    if([$pass === $passConfirm]){
        $consultRegister = "INSERT INTO usuarios (user, email, password) VALUES ('$user','$mail', '$passEncrypted')";
        $queryRegister = mysqli_query($conn, $consultRegister);

        if($queryRegister){
            $register_success = true;
            return $register_success;
        } else{
            $register_success = false;
        }
    } else{
        $register_success = false;
    }
}


mysqli_close($conn);
?>