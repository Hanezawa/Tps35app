<?php

require ('constantes.php');

$db_host = host;
$db_user = usuario;
$db_password = pass;
$db_name = base_datos;

$conn = new mysqli ($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
  die("Hubo un error en la conexion: " . mysqli_connect_error());
}

?>