<?php

class Vehiculo{
        
    public $marca;
    public $linea;
    public $modelo;
    public $cilindraje;
    public $color;
    public $motor;
    
    public function __construct($marca, $linea, $modelo, $cilindraje, $color, $motor){
        $this->marca = $marca;
        $this->linea = $linea;
        $this->modelo = $modelo;
        $this->cilindraje = $cilindraje;
        $this->color = $color;
        $this->motor = $motor;
    }

    public function insertando(){
        $array = [
            'marca'=>$this->marca,
            'linea'=>$this->linea,
            'modelo'=>$this->modelo,
            'cilindraje'=>$this->cilindraje,
            'color'=>$this->color,
            'motor'=>$this->motor
        ];

        $conexion = new Conexion;
        $con = $conexion->connect();

        $sql = "INSERT INTO vehiculos (id,marca,linea,modelo,cilindraje,color,num_motor)
	        values (null,:marca,:linea,:modelo,:cilindraje,:color,:motor)";

        try {
            $statement = $con-> prepare($sql);
            $statement -> execute($array);            
            header("Location: ../");
            
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
        
    }
}

?>