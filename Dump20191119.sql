-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: crypto_email
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,2,1,'Este es un mensaje de fiscal a manuela','2019-11-19 14:03:06'),(2,2,3,'Este es un email de fiscal a alberto','2019-11-19 14:03:06'),(3,1,2,'Este es un email de manuela a fiscal','2019-11-19 14:03:06'),(4,3,1,'Estes es un email de alberto a manuela','2019-11-19 14:03:06'),(5,1,3,'Este es un mensaje de manuela a alberto','2019-11-19 14:03:06'),(6,3,3,'Este mensaje es para el mismo alberto','2019-11-19 15:29:05');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `receivedmessages`
--

LOCK TABLES `receivedmessages` WRITE;
/*!40000 ALTER TABLE `receivedmessages` DISABLE KEYS */;
INSERT INTO `receivedmessages` VALUES (1,1,2),(1,4,3),(2,3,1),(3,2,2),(3,5,1),(3,6,3);
/*!40000 ALTER TABLE `receivedmessages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sentmessages`
--

LOCK TABLES `sentmessages` WRITE;
/*!40000 ALTER TABLE `sentmessages` DISABLE KEYS */;
INSERT INTO `sentmessages` VALUES (1,3,2),(1,5,3),(2,1,1),(2,2,3),(3,4,1),(3,6,3);
/*!40000 ALTER TABLE `sentmessages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Manuela García Monsalve','dyg9812@gmail.com','12345'),(2,'Andres Felipe Garcia Fiscal','agarciafisc@uniminuto.edu.co','12345'),(3,'Alberto Otalora','albertalora@gmail.com','12345');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-19 10:39:11
