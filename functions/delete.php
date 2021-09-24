<?php
require 'Conexion.php';
require 'Crud.php';

$id = $_GET ['id'];
$crud = new Crud;
$delete = $crud->eliminando($id);

?>