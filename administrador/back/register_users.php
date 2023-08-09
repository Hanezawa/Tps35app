<?php
include('../back/connection.php');

if (isset($_POST['registrarse'])) {
    $tipoDocumento = (empty($_POST['tipo_documento'])) ? NULL : $_POST['tipo_documento'];
    $documento = (empty($_POST['documento'])) ? NULL : $_POST['documento'];
    $nombre = (empty($_POST['nombres'])) ? NULL : $_POST['nombres'];
    $apellido = (empty($_POST['apellidos'])) ? NULL : $_POST['apellidos'];
    $correo = (empty($_POST['correo'])) ? NULL : $_POST['correo'];
    $telefono = (empty($_POST['telefono'])) ? NULL : $_POST['telefono'];
    $rol = (empty($_POST['rol'])) ? NULL : $_POST['rol'];
    $userPassword = (empty($_POST['userPassword'])) ? NULL : $_POST['userPassword'];
    $userPasswordEncrypted = password_hash($userPassword, PASSWORD_DEFAULT);

    if (
        $tipoDocumento && $documento && $nombre && $apellido
        && $correo && $telefono && $rol && $userPassword
    ) {

        $ingresarDatos = "INSERT INTO personas VALUES ('',$tipoDocumento,$documento,'$nombre','$apellido','$correo',$telefono, $rol, '$userPasswordEncrypted')";

        $registrarDatos = mysqli_query($conn, $ingresarDatos);

        if (!$registrarDatos) {
            echo "No se pudo registrar los datos";
        }
        header('Location: ../administrar_usuarios.php');
    }
}
