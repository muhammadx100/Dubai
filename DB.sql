-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dubaiwebsite
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `logindata`
--

DROP TABLE IF EXISTS `logindata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logindata` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `phoneNumber` varchar(18) DEFAULT NULL,
  `userlogin` text DEFAULT NULL,
  `userpassword` text DEFAULT NULL,
  `profileimg` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logindata`
--

LOCK TABLES `logindata` WRITE;
/*!40000 ALTER TABLE `logindata` DISABLE KEYS */;
INSERT INTO `logindata` VALUES (3,'Abdullah','2000-09-22','03129594999','abd@ghmail.com','11111',NULL),(4,'Faisal islam','2003-10-28','03336920834','faisal@gmail.com','121212',NULL),(5,'ali','2004-12-12','03129594998','ali@ghmail.com','125254',NULL),(6,'abdullah','2004-12-12','2222','AL HAZA (3).jpg','123',' uplode_img/dp_1748604326.'),(7,'abdullah','2004-12-12','2222','AL HAZA (1).jpg','2222',' uplode_img/dp_1748604416.'),(8,'abdullah','2004-12-12','2222','AL HAZA (1).jpg','2222',' uplode_img/1748604473.'),(9,'abdullah','2004-12-12','2222','AL HAZA.jpg','aaaaaaa',' uplode_img/1748604485.'),(10,'ali Khan','2020-12-12','+923113116634','ali@gmail.com','1112',' uplode_img/1748761348.'),(11,'ali Khan','2020-12-12','+923113116634','ali@gmail.com','1112',' uplode_img/1748761436.'),(12,'ali Khan','2020-12-12','+923113116634','ali@gmail.com','1112',' uplode_img/1748761584.'),(13,'ahmad','2002-12-12','121212121212','ahmad@gmail.com','12121212',' uplode_img/dp_1748837184.'),(14,'ahmad','2002-12-12','121212121212','ahmad@gmail.com','12121212','uplode_img/dp_1748837326.'),(15,'ahmad','2002-12-12','121212121212','ahmad@gmail.com','12121212','uplode_img/dp_1748837474.'),(16,'khan','1999-12-12','99992`','ali@gmail.com','12122121','uplode_img/dp_1748837509.jpg'),(17,'Muhammad Ullah','2004-02-10',' 0311-0376634','mujkl820@gmail.com','Allow@345','uplode_img/dp_1748852372.png'),(18,'Muhammad Ullah','2024-12-12','0311-0376634','muhammad@gmail.com','xvsvgucK.VbP2v9','uplode_img/dp_1749633779.jpg');
/*!40000 ALTER TABLE `logindata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propertydetail`
--

DROP TABLE IF EXISTS `propertydetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propertydetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `bedroom` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  `parking` int(11) DEFAULT NULL,
  `area` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propertydetail`
--

LOCK TABLES `propertydetail` WRITE;
/*!40000 ALTER TABLE `propertydetail` DISABLE KEYS */;
INSERT INTO `propertydetail` VALUES (1,'Luxury',15000,'Dubai Marina',2,2,1,'425','property_img/dp_1749702806.jpg'),(2,'Luxury Apartment',180000,'229 Elm Steet, unit 25, Downtown Dubai 25142',5,4,2,'1250','property_img/dp_1749703310.jpg'),(3,'Luxury Apartment',250000,'229 Elm Steet, unit 25, Downtown Dubai 25142',6,5,2,'1750','property_img/dp_1749703328.jpg'),(4,'Luxury Apartment',220000,'229 Elm Steet, unit 25, Downtown Dubai 1500',7,6,3,'2500','property_img/dp_1749703351.jpg'),(5,'Luxury Apartment',120000,'229 Elm Steet, unit 25, Downtown Dubai 1500',4,6,2,'1750','property_img/dp_1749703369.jpg');
/*!40000 ALTER TABLE `propertydetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quickcontact`
--

DROP TABLE IF EXISTS `quickcontact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quickcontact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phonenumbr` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quickcontact`
--

LOCK TABLES `quickcontact` WRITE;
/*!40000 ALTER TABLE `quickcontact` DISABLE KEYS */;
INSERT INTO `quickcontact` VALUES (1,'Muhammad Ullah','mujkl820@gmail','03110376634',''),(2,'Muhammad Ullah','mujkl820@gmail','03110376634aa,nxbM,cb,',''),(3,'Muhammad Ullah','mujkl820@gmail.com','0311-0376634','4444');
/*!40000 ALTER TABLE `quickcontact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriber` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Gmail` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriber`
--

LOCK TABLES `subscriber` WRITE;
/*!40000 ALTER TABLE `subscriber` DISABLE KEYS */;
INSERT INTO `subscriber` VALUES (1,'mujkl820@gmail.com');
/*!40000 ALTER TABLE `subscriber` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-12 11:13:39
