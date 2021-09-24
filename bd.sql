CREATE DATABASE IF NOT EXISTS vehiculo;
USE vehiculo;

Create table vehiculos
(
    id int auto_increment Primary Key,
    marca varchar(100) not null,
    linea  varchar(100) not null,
    modelo  int,
	cilindraje varchar(100) not null,
    color  varchar(100) not null,
    num_motor  varchar(100) not null
);

insert into vehiculos values
("Null", "Chevrolet","automovil", 1990,"m21","blanco","mt302455");


CREATE TABLE IF NOT EXISTS usuarios (
  id int auto_increment Primary Key,
  correo varchar(60) NOT NULL UNIQUE,
  contra VARCHAR(60) NOT NULL 
);

insert into usuarios values
("Null","usuario@hotmail.com", "123456");

select * from vehiculos;
select * from usuarios;
