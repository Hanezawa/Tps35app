<?php

include('./connection.php');

if(isset($_POST['registrarse'])){

$user = $_POST['user'];
$mail = $_POST['email'];
$pass = $_POST['pass'];
$passConfirm = $_POST['passConfirm'];
<<<<<<< HEAD
$passEncrypted = password_hash($pass,PASSWORD_DEFAULT);
    if($pass === $passConfirm){
        $consultRegister = "INSERT INTO usuarios (usuario, email, password) VALUES ('$user','$mail', '$passEncrypted')";
=======
    if([$pass === $passConfirm]){
        $consultRegister = "INSERT INTO usuarios (user, email, password) VALUES ('$user','$mail', '$passEncrypted')";
>>>>>>> 4458b4c644a1989125d838ce3bd957b12192ff12
        $queryRegister = mysqli_query($conn, $consultRegister);

        if($queryRegister){
            $register_success = true;
<<<<<<< HEAD
            header('location: ../../index.php');
        }else{  
=======
            return $register_success;
        } else{
>>>>>>> 4458b4c644a1989125d838ce3bd957b12192ff12
            $register_success = false;
        }
    } else{
        $register_success = false;
    }
}


mysqli_close($conn);
?>