create database dbs7719535;
use dbs7719535;
drop database dbs7719535;

create table davidP(
    id_registro int(11) auto_increment NOT NULL PRIMARY KEY,
    titulo_trabajo varchar(50) NOT NULL,
    opcion_trabajo varchar(50) NOT NULL,
    autor varchar(50) NOT NULL,
    universidad varchar(50) NOT NULL,
    palabras_clave varchar(70) NOT NULL,
    curso varchar(50) NOT NULL,  
    ciudad varchar(50) NOT NULL,
    especialidad varchar(100) NOT NULL,
    resumen varchar(255) NOT NULL,
    fecha_registro datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


select * from davidP;