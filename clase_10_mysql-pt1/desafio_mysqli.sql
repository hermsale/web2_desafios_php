-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema desafio_mysql
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `desafio_mysql` ;

-- -----------------------------------------------------
-- Schema desafio_mysql
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `desafio_mysql` DEFAULT CHARACTER SET utf8 ;
USE `desafio_mysql` ;

-- -----------------------------------------------------
-- Table `usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `usuario` ;

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `edad` INT NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `usuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `desafio_mysql`;
INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `edad`) VALUES (1, 'Alejandro', 'Ale@edu.bue.ar', 34);
INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `edad`) VALUES (2, 'Marcelo', 'Marce@edu.bue.ar', 57);
INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `edad`) VALUES (3, 'Agustin', 'Agus@edu.bue.ar', 33);
INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `edad`) VALUES (4, 'Luis', 'Luis@edu.bue.ar', 35);

COMMIT;

