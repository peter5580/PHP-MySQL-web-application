-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: progressdb
-- ------------------------------------------------------
-- Server version	8.0.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `progressdb`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `progressdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `progressdb`;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Structural'),(2,'Builder'),(3,'E&M');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company` (
  `id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'HY Co., Ltd.'),(2,'TD Co., Ltd.'),(3,'MK Co., Ltd.'),(4,'NS Co., Ltd.'),(5,'AT Co., Ltd.'),(6,'PF Co., Ltd.'),(7,'YS Co., Ltd.'),(8,'KY Co., Ltd.'),(9,'RN Co., Ltd.');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gridX`
--

DROP TABLE IF EXISTS `gridX`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gridX` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `grid` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gridX`
--

LOCK TABLES `gridX` WRITE;
/*!40000 ALTER TABLE `gridX` DISABLE KEYS */;
INSERT INTO `gridX` VALUES (1,'A'),(2,'B'),(3,'C'),(4,'D'),(5,'E'),(6,'F'),(7,'G');
/*!40000 ALTER TABLE `gridX` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gridY`
--

DROP TABLE IF EXISTS `gridY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gridY` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `grid` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gridY`
--

LOCK TABLES `gridY` WRITE;
/*!40000 ALTER TABLE `gridY` DISABLE KEYS */;
INSERT INTO `gridY` VALUES (1,'1'),(2,'2'),(3,'3'),(4,'4'),(5,'5');
/*!40000 ALTER TABLE `gridY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storey`
--

DROP TABLE IF EXISTS `storey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `storey` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `link` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storey`
--

LOCK TABLES `storey` WRITE;
/*!40000 ALTER TABLE `storey` DISABLE KEYS */;
INSERT INTO `storey` VALUES (1,'G/F',_binary 'Drawings/ground_floor.pdf'),(2,'1/F',_binary 'Drawings/typical_floor.pdf'),(3,'2/F',_binary 'Drawings/typical_floor.pdf'),(4,'3/F',_binary 'Drawings/typical_floor.pdf'),(5,'5/F',_binary 'Drawings/typical_floor.pdf'),(6,'6/F',_binary 'Drawings/typical_floor.pdf'),(7,'7/F',_binary 'Drawings/typical_floor.pdf'),(8,'8/F',_binary 'Drawings/typical_floor.pdf'),(9,'9/F',_binary 'Drawings/typical_floor.pdf'),(10,'10/F',_binary 'Drawings/typical_floor.pdf'),(11,'11/F',_binary 'Drawings/typical_floor.pdf'),(12,'12/F',_binary 'Drawings/typical_floor.pdf'),(13,'15/F',_binary 'Drawings/typical_floor.pdf'),(14,'16/F',_binary 'Drawings/typical_floor.pdf'),(15,'17/F',_binary 'Drawings/typical_floor.pdf'),(16,'18/F',_binary 'Drawings/typical_floor.pdf'),(17,'19/F',_binary 'Drawings/typical_floor.pdf'),(18,'20/F',_binary 'Drawings/typical_floor.pdf'),(19,'21/F',_binary 'Drawings/typical_floor.pdf'),(20,'22/F',_binary 'Drawings/typical_floor.pdf'),(21,'23/F',_binary 'Drawings/typical_floor.pdf'),(22,'24/F',_binary 'Drawings/typical_floor.pdf'),(23,'25/F',_binary 'Drawings/typical_floor.pdf'),(24,'26/F',_binary 'Drawings/typical_floor.pdf'),(25,'27/F',_binary 'Drawings/typical_floor.pdf'),(26,'28/F',_binary 'Drawings/typical_floor.pdf'),(27,'29/F',_binary 'Drawings/typical_floor.pdf'),(28,'30/F',_binary 'Drawings/typical_floor.pdf'),(29,'R/F',_binary 'Drawings/roof_floor.pdf');
/*!40000 ALTER TABLE `storey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submitted_record`
--

DROP TABLE IF EXISTS `submitted_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `submitted_record` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `trade` smallint unsigned NOT NULL,
  `date` date NOT NULL,
  `storey` tinyint unsigned NOT NULL,
  `gridX1` tinyint unsigned NOT NULL,
  `gridX2` tinyint unsigned NOT NULL,
  `gridY1` tinyint unsigned NOT NULL,
  `gridY2` tinyint unsigned NOT NULL,
  `workers_qty` tinyint unsigned NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('Pending','Approved','Rejected') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trade` (`trade`),
  KEY `storey` (`storey`),
  KEY `gridX1` (`gridX1`),
  KEY `gridX2` (`gridX2`),
  KEY `gridY1` (`gridY1`),
  KEY `gridY2` (`gridY2`),
  CONSTRAINT `submitted_record_ibfk_1` FOREIGN KEY (`trade`) REFERENCES `trade` (`id`),
  CONSTRAINT `submitted_record_ibfk_2` FOREIGN KEY (`storey`) REFERENCES `storey` (`id`),
  CONSTRAINT `submitted_record_ibfk_3` FOREIGN KEY (`gridX1`) REFERENCES `gridX` (`id`),
  CONSTRAINT `submitted_record_ibfk_4` FOREIGN KEY (`gridX2`) REFERENCES `gridX` (`id`),
  CONSTRAINT `submitted_record_ibfk_5` FOREIGN KEY (`gridY1`) REFERENCES `gridY` (`id`),
  CONSTRAINT `submitted_record_ibfk_6` FOREIGN KEY (`gridY2`) REFERENCES `gridY` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submitted_record`
--

LOCK TABLES `submitted_record` WRITE;
/*!40000 ALTER TABLE `submitted_record` DISABLE KEYS */;
INSERT INTO `submitted_record` VALUES (15,1,'2021-08-08',2,1,2,1,2,3,'slab','Rejected'),(16,1,'2021-08-02',3,1,3,1,2,4,'2/F FS sprinkler tank bottom slab and side wall','Approved'),(17,1,'2021-08-05',3,5,7,1,5,11,'beam, slab and staircase','Approved'),(19,1,'2021-08-09',14,1,3,1,4,8,'column','Rejected'),(21,2,'2021-08-10',4,5,7,1,5,11,'wall column','Approved'),(22,3,'2021-08-10',8,1,3,2,4,3,'slab','Approved'),(23,2,'2021-08-11',4,1,3,1,3,7,'column','Approved'),(24,5,'2021-08-12',4,1,3,1,4,3,'pipe sleeve','Approved'),(25,5,'2021-08-11',4,5,7,1,5,3,'Air duct','Approved'),(26,7,'2021-08-10',4,1,4,1,3,3,'concealed conduit on wall','Approved'),(27,7,'2021-08-11',4,3,5,1,5,2,'concealed conduit on slab','Rejected'),(28,7,'2021-08-12',1,4,7,3,5,1,'MCB box','Approved'),(29,8,'2021-08-11',4,1,4,1,5,2,'flush water pipe','Approved'),(30,8,'2021-08-12',4,4,7,1,5,2,'rain water pipe','Approved'),(31,6,'2021-08-09',3,4,7,1,5,2,'FS pipe sleeve','Approved'),(32,6,'2021-08-10',4,1,3,1,4,1,'FS alarm','Approved'),(33,6,'2021-08-12',1,6,7,1,5,2,'sprinkler tank pipe','Rejected'),(34,2,'2021-08-09',4,1,4,1,5,9,'slab and beam','Approved'),(35,2,'2021-08-11',4,4,7,1,5,8,'slab and beam','Pending'),(36,2,'2021-08-11',1,1,4,1,5,8,'wall and column','Pending'),(37,3,'2021-08-05',3,1,4,1,5,3,'zone A slab and beam','Pending'),(38,3,'2021-08-07',3,4,7,1,5,3,'zone B slab and beam','Pending'),(39,4,'2021-08-06',4,1,7,1,5,3,'setting out for slab and beam','Pending'),(40,4,'2021-08-09',4,1,7,1,5,3,'setting out for column and wall','Pending'),(41,1,'2021-08-13',5,1,4,1,5,11,'column and wall','Pending'),(42,2,'2021-08-14',6,5,7,1,5,9,'wall and columns','Approved');
/*!40000 ALTER TABLE `submitted_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trade`
--

DROP TABLE IF EXISTS `trade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trade` (
  `id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  `category` tinyint unsigned DEFAULT NULL,
  `company` smallint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `company` (`company`),
  CONSTRAINT `trade_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`),
  CONSTRAINT `trade_ibfk_2` FOREIGN KEY (`company`) REFERENCES `company` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trade`
--

LOCK TABLES `trade` WRITE;
/*!40000 ALTER TABLE `trade` DISABLE KEYS */;
INSERT INTO `trade` VALUES (1,'Rebar fixing',1,1),(2,'Formwork Erection',1,2),(3,'Concreting',1,1),(4,'Levelling',2,3),(5,'MVAC',3,9),(6,'Fire Service',3,8),(7,'Electrical',3,5),(8,'Plumbing & Drainage',3,6);
/*!40000 ALTER TABLE `trade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `username` char(16) NOT NULL,
  `password` char(216) NOT NULL,
  `role` char(16) NOT NULL,
  `trade` smallint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trade` (`trade`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`trade`) REFERENCES `trade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin123','d29b2ea692c0b1bfd771131628cb5232c94f82f0','Administrator',NULL),(2,'rebarfixer123','0f727a10fa98df6245af63e489919186aea45786','User',1),(3,'formworker123','6b37f1c25ac009ee5bdb3868b8f6476a4c190f44','User',2),(4,'concreter123','d6dea424668f4ead28735b86eb9bca6c8a018852','User',3),(5,'leveller123','95d31432aa3af64f0204440c3d0d9fef05a58089','User',4),(6,'mvac123','7620d382e971d55c59e36f8b42ee1ca3ca833ded','User',5),(7,'fs123','7ba09a989416959696bf0e96659c479f2616f886','User',6),(8,'el123','47c027c0d0d88a28f3f536214158d45a7a61d52e','User',7),(9,'pb123','99a7ef4b31d148c29dba96fc7205590ce9652bd0','User',8);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-14 23:28:44
