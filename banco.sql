-- MySQL Script generated by MySQL Workbench
-- Sun Jun 22 12:46:14 2025
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema spiderdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema spiderdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `spiderdb` DEFAULT CHARACTER SET utf8 ;
USE `spiderdb` ;

-- -----------------------------------------------------
-- Table `spiderdb`.`tb_aliado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spiderdb`.`tb_aliado` (
  `id_aliado` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `foto` VARCHAR(200) NOT NULL,
  `descricao` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_aliado`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `spiderdb`.`tb_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spiderdb`.`tb_usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `spiderdb`.`tb_aparicao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spiderdb`.`tb_aparicao` (
  `id_aparicao` INT(11) NOT NULL AUTO_INCREMENT,
  `foto` VARCHAR(200) NULL DEFAULT NULL,
  `local` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `id_usuario` INT(11) NOT NULL,
  PRIMARY KEY (`id_aparicao`),
  INDEX `fk_tb_aparicao_tb_usuario1_idx` (`id_usuario` ASC) VISIBLE,
  CONSTRAINT `fk_tb_aparicao_tb_usuario1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `spiderdb`.`tb_usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COMMENT = 'de';


-- -----------------------------------------------------
-- Table `spiderdb`.`tb_filme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spiderdb`.`tb_filme` (
  `id_filme` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `ano` YEAR(4) NOT NULL,
  `foto` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`id_filme`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `spiderdb`.`tb_comentario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spiderdb`.`tb_comentario` (
  `id_comentario` INT(11) NOT NULL AUTO_INCREMENT,
  `texto` VARCHAR(255) NOT NULL,
  `id_usuario` INT(11) NOT NULL,
  `id_filme` INT(11) NOT NULL,
  PRIMARY KEY (`id_comentario`),
  INDEX `fk_tb_comentario_tb_usuario_idx` (`id_usuario` ASC) VISIBLE,
  INDEX `fk_tb_comentario_tb_filme1_idx` (`id_filme` ASC) VISIBLE,
  CONSTRAINT `fk_tb_comentario_tb_filme1`
    FOREIGN KEY (`id_filme`)
    REFERENCES `spiderdb`.`tb_filme` (`id_filme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_comentario_tb_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `spiderdb`.`tb_usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `spiderdb`.`tb_inimigo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spiderdb`.`tb_inimigo` (
  `id_inimigo` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `foto` VARCHAR(200) NOT NULL,
  `descricao` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_inimigo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
