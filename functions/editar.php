<?php
    require 'Conexion.php';
    require 'Crud.php';
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $linea = $_POST['linea'];
    $modelo = $_POST['modelo'];
    $cilindraje = $_POST['cilindraje'];
    $color = $_POST['color'];
    $motor = $_POST['motor'];

    $crud = new Crud;
    $update = $crud->editando($id,$marca,$linea,$modelo,$cilindraje,$color,$motor);
?>