SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `gerabayface` ;
CREATE SCHEMA IF NOT EXISTS `gerabayface` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
SHOW WARNINGS;
USE `gerabayface` ;

-- -----------------------------------------------------
-- Table `cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cliente` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` BIGINT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `endereco` VARCHAR(45) NULL,
  `fone` VARCHAR(45) NULL,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pabx_conf`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pabx_conf` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pabx_conf` (
  `idpabx_conf` BIGINT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `descricao` MEDIUMBLOB NULL,
  PRIMARY KEY (`idpabx_conf`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `placas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `placas` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `placas` (
  `idplacas` BIGINT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `descricao` MEDIUMBLOB NULL,
  `idpabx_conf` BIGINT NULL,
  PRIMARY KEY (`idplacas`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pabx_cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pabx_cliente` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pabx_cliente` (
  `idperfil_cliente` BIGINT NOT NULL,
  `idcliente` BIGINT NULL,
  `idpabx_conf` BIGINT NULL,
  PRIMARY KEY (`idperfil_cliente`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pabx_dados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pabx_dados` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pabx_dados` (
  `idpabx_dados` BIGINT NOT NULL,
  `idcliente` BIGINT NULL,
  `idpabx` BIGINT NULL,
  `idplaca` BIGINT NULL,
  PRIMARY KEY (`idpabx_dados`))
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
