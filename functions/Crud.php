<?php

    class Crud{

        public function mostrando(){
            $conexion = new Conexion;
            $con = $conexion->connect();
    
            $sql = "SELECT * FROM vehiculos";
            $statement = $con->query($sql);
            $vehiculos = $statement->fetchAll(PDO::FETCH_OBJ);
            
            return $vehiculos;
        }
        public function callForID($id){
            $conexion = new Conexion;
            $con = $conexion->connect();
            $sql = "SELECT * FROM vehiculos WHERE id=$id";
            $statement =$con->query($sql);
            $vehiculo =$statement->fetch(PDO::FETCH_OBJ);

            return $vehiculo;
        }
        public function eliminando($id){
            $conexion = new Conexion;
            $con = $conexion->connect();

            $sql = "DELETE FROM vehiculos WHERE id=$id";
            $statement = $con->prepare($sql);
            $reultado = $statement->execute([$id]);

            if($reultado===TRUE){
                header("Location: http://localhost/senati/carro");
            }

        }
        public function editando($id,$marca,$linea,$modelo,$cilindraje,$color,$motor){
            $array = [
                'id'=>$id,
                'marca'=>$marca,
                'linea'=>$linea,
                'modelo'=>$modelo,
                'cilindraje'=>$cilindraje,
                'color'=>$color,
                'motor'=>$motor
            ];

            $conexion = new Conexion;
            $con = $conexion->connect();

            $sql = "UPDATE vehiculos SET 
                        marca=:marca,
                        linea=:linea,
                        modelo=:modelo,
                        cilindraje=:cilindraje,
                        color=:color,
                        num_motor=:motor
                        WHERE id=:id
                    ";
            $statement =$con->prepare($sql);
            $reultado =$statement->execute($array);

            if($reultado===TRUE){
                header("Location: http://localhost/senati/carro");
            }
        }
    }

?>