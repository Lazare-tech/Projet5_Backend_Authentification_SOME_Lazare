-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

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
-- Table structure for table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` text NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL,
  `id_ville` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_evenement` (`id_ville`),
  CONSTRAINT `fk_evenement` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evenement`
--

LOCK TABLES `evenement` WRITE;
/*!40000 ALTER TABLE `evenement` DISABLE KEYS */;
INSERT INTO `evenement` VALUES (1,'Snc','                            La Semaine nationale de la culture (SNC) est un biennal culturel qui se tient chaque deux\r\n                            ans à Bobo-Dioulasso depuis 1990. L\'évènement a été créé en 1983.\r\n              ','snc.jpg',1),(2,'SIAO','  Le Festival panafricain du cinéma et de la télévision de Ouagadougou ou FESPACO est un\r\n                            festival.\r\n                            tous les deux ans à Ouagadougou, la capitale du Burkina Faso\r\n                ','siao.jpeg',3),(3,'FESPACO','Le Festival panafricain du cinéma et de la télévision de Ouagadougou ou FESPACO est l\'un des plus grands festivals de cinéma africains. Créé en 1969 sous le nom de « Premier festival de Cinéma Africain de Ouagadougou », il se déroule tous les deux ans à Ouagadougou, la capitale du Burkina Faso. ','fespaco.jpg',3),(4,'festival bolo\'arts',' L’association Bolo’Arts a initié le projet du festival Bolo’Arts dans le cadre de ses activités de sensibilisation et de développement socioculturel et artistique.','bolo.png',1);
/*!40000 ALTER TABLE `evenement` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-29  0:17:30
