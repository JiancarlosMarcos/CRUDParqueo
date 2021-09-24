<?php 
require 'Conexion.php';
require 'Vehiculo.php';
require 'Automovil.php';
require 'Motocicleta.php';

$marca = $_POST['marca'];
$linea = $_POST['linea']; 
$modelo = $_POST['modelo']; 
$cilindraje = $_POST['cilindraje'];
$color = $_POST['color'];
$motor = $_POST['motor'];

$vehiculo = new Vehiculo($marca,$linea,$modelo,$cilindraje,$color,$motor);
$vehiculo->insertando();

?>