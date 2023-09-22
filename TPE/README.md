NOMBRES
- Lucas Gabriel Lujan
- Teran Pedro Fabian

TEMATICA
- Pagina de peliculas

DESCRIPCION
- Es una pagina en la que los usuarios pueden ver informacion acerca de las peliculas y sus directores. 

CODIGO SQL

Tabla 1{
    CREATE TABLE `pelisplus`.`peliculas` (`ID` INT NOT NULL AUTO_INCREMENT , `Nombre` VARCHAR(30) NOT NULL , `Descripcion` TEXT NOT NULL ,  `Genero` VARCHAR(20) NOT NULL , `Clasificacion_edad` INT(2) NOT NULL , `Director` INT(30) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
}
Tabla 2{
    CREATE TABLE `pelisplus`.`directores` (`ID` INT NOT NULL AUTO_INCREMENT , `Nombre` VARCHAR(20) NOT NULL , `Apellido` VARCHAR(20) NOT NULL , `Edad` INT(2) NOT NULL , `Premios` INT(3) NOT NULL , `MayorExito` INT(3) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
}
Tabla 3{
CREATE TABLE `pelisplus`.`usuarios` (`ID` INT NOT NULL AUTO_INCREMENT , `Nombre` VARCHAR(20) NOT NULL , `Clave` INT(20) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
}