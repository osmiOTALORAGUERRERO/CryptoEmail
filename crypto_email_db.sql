-- MySQL Script generated by MySQL Workbench
-- Thu Nov 14 10:11:10 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema crypto_email
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema crypto_email
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `crypto_email` DEFAULT CHARACTER SET utf8 ;
USE `crypto_email` ;

-- -----------------------------------------------------
-- Table `crypto_email`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `crypto_email`.`Users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crypto_email`.`Messages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `crypto_email`.`Messages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `transmitter` INT NOT NULL,
  `receiver` INT NOT NULL,
  `message` VARCHAR(250) NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crypto_email`.`SentMessages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `crypto_email`.`SentMessages` (
  `idUser` INT NOT NULL,
  `idMessage` INT NOT NULL,
  `for` INT NULL,
  PRIMARY KEY (`idUser`, `idMessage`),
  INDEX `idMessage_idx` (`idMessage` ASC) VISIBLE,
  CONSTRAINT `idUser`
    FOREIGN KEY (`idUser`)
    REFERENCES `crypto_email`.`Users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idMessage`
    FOREIGN KEY (`idMessage`)
    REFERENCES `crypto_email`.`Messages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crypto_email`.`ReceivedMessages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `crypto_email`.`ReceivedMessages` (
  `idUser` INT NOT NULL,
  `idMessage` INT NOT NULL,
  `from` INT NULL,
  PRIMARY KEY (`idUser`, `idMessage`),
  INDEX `idMessage_idx` (`idMessage` ASC) VISIBLE,
  CONSTRAINT `idUser`
    FOREIGN KEY (`idUser`)
    REFERENCES `crypto_email`.`Users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idMessage`
    FOREIGN KEY (`idMessage`)
    REFERENCES `crypto_email`.`Messages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
