-- MySQL dump 10.11
--
-- to install this database, from a terminal, type:
-- mysql -u USERNAME -p -h SERVERNAME schema < schema.sql
--
-- Host: localhost    Database: schema
-- ------------------------------------------------------
-- Server version   5.0.45-log

--Group Members:
--Tassan Stewart 620108238
--Tonian Hyman 620108397
--Abigail Miles 620097489


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP DATABASE IF EXISTS schema;
CREATE DATABASE schema;
USE schema;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` char(35) NOT NULL default '',
  `lastname` char(35) NOT NULL default '',
  `password` char(25) NOT NULL default '',
  `email` char(70) NOT NULL default '',
  `date_joined` char(25) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;



DECLARE @password varchar(100)   -- UTF8  Encoding

SET @password1 = 'password123'
SELECT HASHBYTES('sha1', @password)

INSERT INTO Users (email, password), VALUES ('admin@bugme.com', 'password1' );



--
-- Dumping data for table `users`
--
--to markers
--password for tassanstewart17@gmail.com=password1





DROP TABLE IF EXISTS `Issues`
CREATE TABLE `Issues` (
  `id` int(11) NOT NULL auto_increment,
  `title` char(20) NOT NULL default '',
  `description` char(70) NOT NULL default '',
  `type` char(15) NOT NULL default '',
  `priority` char(6) NOT NULL default '',
  `status` char(10) NOT NULL default '',
  `assigned_to` int(11) NOT NULL default '',
  `created_by` int(11) NOT NULL default '',
  `created` char(25) timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP '',
  `updated` char(25) timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;



