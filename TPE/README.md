NOMBRES
- Lucas Gabriel Lujan
- Teran Pedro Fabian

TEMATICA
- Pagina de peliculas

DESCRIPCION
- Es una pagina de streaming para ver peliculas y permitirle a los usuarios puntuarlas

CODIGO SQL

Tabla 1{
CREATE TABLE `pelisplus`.`peliculas` (`ID` INT NOT NULL AUTO_INCREMENT , `Nombre` VARCHAR(30) NOT NULL , `Descripcion` TEXT NOT NULL , `Genero` VARCHAR(20) NOT NULL , `Clasificacion_edad` INT(2) NOT NULL , `Director` VARCHAR(30) NOT NULL , `Visitas` VARCHAR(7) NOT NULL , `Estrellas` INT(1) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
}
Tabla 2{
    CREATE TABLE `pelisplus`.`usuarios` (`ID` INT NOT NULL AUTO_INCREMENT , `Nombre` VARCHAR(20) NOT NULL , `Apellido` VARCHAR(20) NOT NULL , `Edad` INT(2) NOT NULL , `Estrellas` INT(1) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
}
