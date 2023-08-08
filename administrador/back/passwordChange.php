<?php
include('conexion.php');

$consultaContraseña = "SELECT * FROM personas";

$queryConsultaContraseña = mysqli_query($conn, $consultaContraseña);

while ($row = mysqli_fetch_array($queryConsultaContraseña)) {
   $pass = $row['pass'];
}
 if(isset($_POST['actualizar'])){
    $password =$_POST['password'];
    $newPassword = $_POST['nuevaPassword'];
    $verifyPassword = $_POST['verificarNuevaPassword'];
    $passEncriptada = password_hash($newPassword,PASSWORD_DEFAULT);

    if($email == $correo && password_verify($password,$pass && $newPassword == $verifyPassword)){
        $actualizarContraseña = "UPDATE personas SET pass = $passEncriptada where correo = '$email'";
        $queryActualizar = mysqli_query($conn, $actualizarContraseña);
        echo "Se han registrado los datos correctamente";
    }
 }else{
    echo "hubo un error al actualizar los datos";
 }
?>