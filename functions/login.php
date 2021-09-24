<?php
    require 'Usuario.php';
    require 'Conexion.php';

    $correo = $_POST['correo'];
    $contra = $_POST['contra'];

    $usuario = new Usuario;
    $usuario->login($correo,$contra);

?>