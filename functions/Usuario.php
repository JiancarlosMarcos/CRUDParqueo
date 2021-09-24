<?php

class Usuario{
    public $correo;
    public $contra;

    public function login($correo,$contra){

        session_start();

        $conexion = new Conexion;
        $con = $conexion->connect();

        $sql = "select * from usuarios where correo=? and contra=?";

        $statement = $con-> prepare($sql);
        $statement -> execute([$correo, $contra]);
        $resultado = $statement->fetch(PDO::FETCH_OBJ);

        if($resultado===FALSE){
            header('Location: ../');
        }elseif($resultado){
            $_SESSION['usuario'] = $resultado->correo;
            header('Location: ../vehiculos.php');
        }
    }
    public function logout(){
        session_start();
        session_destroy();
        header('Location: ../index.php');
    }
}

?>