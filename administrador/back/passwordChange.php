<?php
include('connection.php');

if(isset($_POST['actualizar'])){
   $password =$_POST['password'];
   $newPassword = $_POST['nuevaPassword'];
   $verifyPassword = $_POST['verificarNuevaPassword'];
   $newPassEncrypted = password_hash($newPassword,PASSWORD_DEFAULT);
   $consultPassword = "SELECT * FROM personas";

   $queryConsultPassword= mysqli_query($conn, $consultPassword);

   if (mysqli_num_rows($queryConsultPassword) == 1) {
   $row = mysqli_fetch_assoc($queryConsultPassword);
   $pass = $row['password'];
      if(password_verify($password, $pass)){
        $updatePass = "UPDATE personas SET password= '$newPassEncrypted' where password = '$pass';" ;
        $queryUpdatePass = mysqli_query($conn, $updatePass);
        echo "Se han registrado los datos correctamente";
        header('location: ../cambiar_contraseña.php');
        exit;
      }
   }else{
   echo "hubo un error al actualizar los datos";
   }
}
?>