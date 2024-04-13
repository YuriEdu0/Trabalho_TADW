-- Adminer 4.8.1 MySQL 5.5.5-10.5.24-MariaDB-1:10.5.24+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `cleitonrasta`;
CREATE DATABASE `cleitonrasta` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `cleitonrasta`;

DROP TABLE IF EXISTS `tb_cadastro`;
CREATE TABLE `tb_cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `numero` varchar(12) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `datanasc` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-04-13 01:23:34
