<?php

class Conexion{
	public $host = "localhost";
	public $usuariobd = "root";
	public $password = "";
	public $nombrebd = "vehiculo";

	public function connect(){
		$dsn = "mysql:host=$this->host;dbname=$this->nombrebd";		
		try {
			$conexion = new PDO($dsn,$this->usuariobd,$this->password);
			return $conexion;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}
?>