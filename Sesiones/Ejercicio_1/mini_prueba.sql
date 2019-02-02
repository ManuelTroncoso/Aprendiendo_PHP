CREATE DATABASE 'user' DEFAULT CHARACTER SET utf8 ;
USE 'user';
CREATE TABLE IF NOT EXISTS `Empleados` (
  `idEmpleado` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `contraseña` VARCHAR(45) NOT NULL,
  `departamento` VARCHAR(45) NOT NULL,
  `datos` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEmpleado`))
ENGINE = InnoDB;

INSERT INTO 
 Empleados(usuario, contraseña, departamento, datos)
VALUES
 ('Paco', '4567', 'letra', 'Tiene un gato que es amarillo');