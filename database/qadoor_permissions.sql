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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'role-list','展示角色列表','查看列表_角色','2016-12-17 12:14:50','2016-12-17 12:14:50'),(2,'role-create','创建角色','创建新角色','2016-12-17 12:14:50','2016-12-17 12:14:50'),(3,'role-edit','编辑角色','编辑角色','2016-12-17 12:14:50','2016-12-17 12:14:50'),(4,'role-delete','删除角色','删除角色','2016-12-17 12:14:50','2016-12-17 12:14:50'),(5,'question-list','展示问题列表','查看列表_问题','2016-12-17 12:14:50','2016-12-17 12:14:50'),(6,'question-create','创建问题','创建新问题','2016-12-17 12:14:50','2016-12-17 12:14:50'),(7,'question-edit','编辑问题','编辑问题','2016-12-17 12:14:50','2016-12-17 12:14:50'),(8,'question-delete','删除问题','删除问题','2016-12-17 12:14:50','2016-12-17 12:14:50'),(9,'tag-list','展示标签列表','查看列表_标签','2016-12-17 12:14:50','2016-12-17 12:14:50'),(10,'tag-create','创建标签','创建新标签','2016-12-17 12:14:50','2016-12-17 12:14:50'),(11,'tag-edit','编辑标签','编辑标签','2016-12-17 12:14:50','2016-12-17 12:14:50'),(12,'tag-delete','删除标签','删除标签','2016-12-17 12:14:50','2016-12-17 12:14:50'),(13,'user-list','展示用户列表','查看列表_用户','2016-12-17 12:14:50','2016-12-17 12:14:50'),(14,'user-create','创建用户','创建新用户','2016-12-17 12:14:50','2016-12-17 12:14:50'),(15,'user-edit','编辑用户','编辑用户','2016-12-17 12:14:50','2016-12-17 12:14:50'),(16,'user-delete','删除用户','删除用户','2016-12-17 12:14:50','2016-12-17 12:14:50'),(17,'cat-list','展示分类列表','查看列表_分类','2016-12-17 12:14:50','2016-12-17 12:14:50'),(18,'cat-create','创建分类','创建新分类','2016-12-17 12:14:50','2016-12-17 12:14:50'),(19,'cat-edit','编辑分类','编辑分类','2016-12-17 12:14:50','2016-12-17 12:14:50'),(20,'cat-delete','删除分类','删除分类','2016-12-17 12:14:50','2016-12-17 12:14:50'),(21,'comment-list','展示评论列表','查看列表_评论','2016-12-17 12:14:50','2016-12-17 12:14:50'),(22,'comment-create','创建评论','创建新评论','2016-12-17 12:14:50','2016-12-17 12:14:50'),(23,'comment-edit','编辑评论','编辑评论','2016-12-17 12:14:50','2016-12-17 12:14:50'),(24,'comment-delete','删除评论','删除评论','2016-12-17 12:14:50','2016-12-17 12:14:50'),(25,'permission-list','展示权限列表','查看列表_权限','2016-12-17 12:14:50','2016-12-17 12:14:50'),(26,'permission-create','创建权限','创建新权限','2016-12-17 12:14:50','2016-12-17 12:14:50'),(27,'permission-edit','编辑权限','编辑权限','2016-12-17 12:14:50','2016-12-17 12:14:50'),(28,'permission-delete','删除权限','删除权限','2016-12-17 12:14:50','2016-12-17 12:14:50'),(29,'answer-list','展示回答列表','查看列表_回答','2016-12-17 12:14:50','2016-12-17 12:14:50'),(30,'answer-create','创建回答','创建新回答','2016-12-17 12:14:50','2016-12-17 12:14:50'),(31,'answer-edit','编辑回答','编辑回答','2016-12-17 12:14:50','2016-12-17 12:14:50'),(32,'answer-delete','删除回答','删除回答','2016-12-17 12:14:50','2016-12-17 12:14:50');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-26 23:29:44
