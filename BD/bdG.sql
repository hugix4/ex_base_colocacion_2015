
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2015 at 01:17 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a6831370_h4`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdG`
--

CREATE TABLE `bdG` (
  `Cuenta` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `Nombre` tinytext COLLATE latin1_general_ci NOT NULL,
  `Paterno` tinytext COLLATE latin1_general_ci NOT NULL,
  `Materno` tinytext COLLATE latin1_general_ci NOT NULL,
  `Clave` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `Etapa` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `Bin1` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin2` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin3` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin4` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin5` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin6` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin7` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin8` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin9` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin10` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin11` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Bin12` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Rc1` text COLLATE latin1_general_ci NOT NULL,
  `Rc2` text COLLATE latin1_general_ci NOT NULL,
  `Rc3` text COLLATE latin1_general_ci NOT NULL,
  `Rc4` text COLLATE latin1_general_ci NOT NULL,
  `Rc5` text COLLATE latin1_general_ci NOT NULL,
  `Rc6` text COLLATE latin1_general_ci NOT NULL,
  `Rc7` text COLLATE latin1_general_ci NOT NULL,
  `Rc8` text COLLATE latin1_general_ci NOT NULL,
  `Rc9` text COLLATE latin1_general_ci NOT NULL,
  `Rc10` text COLLATE latin1_general_ci NOT NULL,
  `Rc11` text COLLATE latin1_general_ci NOT NULL,
  `Rc12` text COLLATE latin1_general_ci NOT NULL,
  `Calificacion` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `Resultado` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `Inicio` timestamp NULL DEFAULT NULL,
  `Salida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Termino` varchar(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `bdG`
--

INSERT INTO `bdG` VALUES('123456789', 'CGL', 'CGL', 'CGL', 'H123456789', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N');
INSERT INTO `bdG` VALUES('234567891', 'CGL', 'CGL', 'CGL', 'H234567891', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N');
INSERT INTO `bdG` VALUES('345678912', 'CGL', 'CGL', 'CGL', 'H345678912', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N');
INSERT INTO `bdG` VALUES('456789123', 'CGL', 'CGL', 'CGL', 'H456789123', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N');
INSERT INTO `bdG` VALUES('567891234', 'CGL', 'CGL', 'CGL', 'H567891234', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N');
INSERT INTO `bdG` VALUES('678912345', 'CGL', 'CGL', 'CGL', 'H678912345', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N');
INSERT INTO `bdG` VALUES('789456123', 'CGL', 'CGL', 'CGL', 'H789456123', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N');
INSERT INTO `bdG` VALUES('891234567', 'CGL', 'CGL', 'CGL', 'H891234567', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N');
