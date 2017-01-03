-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 192.168.10.10    Database: qadoor
-- ------------------------------------------------------
-- Server version	5.7.12-0ubuntu1.1

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

--
-- Table structure for table `tag_question`
--

DROP TABLE IF EXISTS `tag_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag_question` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(10) unsigned NOT NULL COMMENT '标签id',
  `question_id` int(10) unsigned NOT NULL COMMENT '问题id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tag_question_tag_id_index` (`tag_id`),
  KEY `tag_question_question_id_index` (`question_id`),
  CONSTRAINT `tag_question_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tag_question_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag_question`
--

LOCK TABLES `tag_question` WRITE;
/*!40000 ALTER TABLE `tag_question` DISABLE KEYS */;
INSERT INTO `tag_question` VALUES (1,12,57,NULL,NULL),(2,9,75,NULL,NULL),(3,6,98,NULL,NULL),(4,4,31,NULL,NULL),(5,11,93,NULL,NULL),(6,3,28,NULL,NULL),(7,18,1,NULL,NULL),(8,14,34,NULL,NULL),(9,17,44,NULL,NULL),(10,6,3,NULL,NULL),(11,2,41,NULL,NULL),(12,5,99,NULL,NULL),(13,17,8,NULL,NULL),(14,20,62,NULL,NULL),(15,5,15,NULL,NULL),(16,1,13,NULL,NULL),(17,20,30,NULL,NULL),(18,15,79,NULL,NULL),(19,14,67,NULL,NULL),(20,7,18,NULL,NULL),(21,16,16,NULL,NULL),(22,10,79,NULL,NULL),(23,19,76,NULL,NULL),(24,13,31,NULL,NULL),(25,18,40,NULL,NULL),(26,15,59,NULL,NULL),(27,18,70,NULL,NULL),(28,3,73,NULL,NULL),(29,2,88,NULL,NULL),(30,3,26,NULL,NULL),(31,3,90,NULL,NULL),(32,8,89,NULL,NULL),(33,11,54,NULL,NULL),(34,20,12,NULL,NULL),(35,13,27,NULL,NULL),(36,1,60,NULL,NULL),(37,18,8,NULL,NULL),(38,20,91,NULL,NULL),(39,12,98,NULL,NULL),(40,3,25,NULL,NULL),(41,19,35,NULL,NULL),(42,10,59,NULL,NULL),(43,10,63,NULL,NULL),(44,8,16,NULL,NULL),(45,19,14,NULL,NULL),(46,12,83,NULL,NULL),(47,16,11,NULL,NULL),(48,20,66,NULL,NULL),(49,1,50,NULL,NULL),(50,7,56,NULL,NULL),(51,6,56,NULL,NULL),(52,6,51,NULL,NULL),(53,2,13,NULL,NULL),(54,15,77,NULL,NULL),(55,12,101,NULL,NULL),(56,13,36,NULL,NULL),(57,12,96,NULL,NULL),(58,18,66,NULL,NULL),(59,4,75,NULL,NULL),(60,17,39,NULL,NULL),(61,19,92,NULL,NULL),(62,4,42,NULL,NULL),(63,20,67,NULL,NULL),(64,2,55,NULL,NULL),(65,15,24,NULL,NULL),(66,18,85,NULL,NULL),(67,11,64,NULL,NULL),(68,13,91,NULL,NULL),(69,1,32,NULL,NULL),(70,2,38,NULL,NULL),(71,5,94,NULL,NULL),(72,15,3,NULL,NULL),(73,9,94,NULL,NULL),(74,12,97,NULL,NULL),(75,14,56,NULL,NULL),(76,16,46,NULL,NULL),(77,20,64,NULL,NULL),(78,17,48,NULL,NULL),(79,18,98,NULL,NULL),(80,8,36,NULL,NULL),(81,18,34,NULL,NULL),(82,3,2,NULL,NULL),(83,16,42,NULL,NULL),(84,10,81,NULL,NULL),(85,15,23,NULL,NULL),(86,20,50,NULL,NULL),(87,14,22,NULL,NULL),(88,12,68,NULL,NULL),(89,20,19,NULL,NULL),(90,4,71,NULL,NULL),(91,4,61,NULL,NULL),(92,1,72,NULL,NULL),(93,19,7,NULL,NULL),(94,5,96,NULL,NULL),(95,3,53,NULL,NULL),(96,11,34,NULL,NULL),(97,6,70,NULL,NULL),(98,4,76,NULL,NULL),(99,7,51,NULL,NULL);
/*!40000 ALTER TABLE `tag_question` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-26 23:27:23