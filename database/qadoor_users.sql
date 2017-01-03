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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '用户名字',
  `email` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '用户邮箱',
  `password` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '用户密码',
  `remember_token` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '是否记住密码',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'YuanYafei','yyf1990@foxmail.com','$2y$10$bnirwwHkfBNwbQHqsTbkROaw4OXD2Gis8Uet8QQ574fSZhsy4A77q','6tYvbbP2F9kiqaz7CAJKFg7hsjSHmIZQjmCNBlf6Fq5exx1gT9JHeK4Npy4m','2016-12-17 12:16:22','2016-12-17 12:16:27'),(2,'YuanPengfei','ypf1990@foxmail.com','$2y$10$amD0v3IempXM3rDa15alyuqtHVzFRb7qAJQz/X9etmjzjRecjExzS',NULL,'2016-12-17 12:22:39','2016-12-17 12:22:39'),(5,'YuanPengfei','345161974@qq.com','$2y$10$lNHXVxpHIjovFjm0lU6QSeOlnGm54Opkdwll8UhyD9zlvyX0azY9i','w0nFNst2xzKDmsqFBZOCpM3Srvlai2Ym9seXVWPFUdZg6rTC2PCcjTilrxPC','2016-12-17 12:25:22','2016-12-17 15:02:46'),(6,'Montana Rogahn','rachel46@example.org','$2y$10$PnrXPOoqdjTMYHqOnoh5T.V9hivDbI9EywKzhrmDDDgLNcsJEo10K','eD7RUcZU0J','2016-12-17 12:38:04','2016-12-17 12:38:04'),(7,'Mr. Roscoe Daniel V','fay.annamae@example.org','$2y$10$baMvWdsp9yBqGeMz7kJnpu7zV6eHaJermcMID7gy0VM0FpbURFqGi','eUrRC74EPO','2016-12-17 12:39:00','2016-12-17 12:39:00'),(8,'Katelynn Fadel Jr.','cedrick.hansen@example.net','$2y$10$wKqgbKrqQvFZBm0ef.Sk2OFMJVx15VjvUARXEyHrmNqIEI1ifp30i','SN745QPIwN','2016-12-17 12:39:01','2016-12-17 12:39:01'),(9,'Kole Haag','jimmie59@example.net','$2y$10$AmX5XVmBYQEr9AQlIw.sOuQEyLXhEAmrqxYtITCMMfeQ1bps3W7Jm','lENjPOe7ZK','2016-12-17 12:39:01','2016-12-17 12:39:01'),(10,'Mr. Lucious Armstrong I','hdubuque@example.com','$2y$10$YZSNeCxZbyQmhfSZhmOL2ueKzeGqH0/NuMIM8CB5LxzHIJmT0zDAm','bnSfOBS0YU','2016-12-17 12:39:01','2016-12-17 12:39:01'),(11,'Eve Powlowski','orval54@example.com','$2y$10$nkrAmcZqbOfrLoc9shieu.53pN7jdup7qEcx8IANt8FEivri7p86q','bcugSsbedZ','2016-12-17 12:39:01','2016-12-17 12:39:01'),(12,'Imani Roob','lilyan.wintheiser@example.com','$2y$10$1/O5W5b.OPl13znA/xw1r.si7n.AvygxZ05BF01vrgFDYSzhX8rc.','1u3f2xFvUO','2016-12-17 12:39:01','2016-12-17 12:39:01'),(13,'Casper Harris','hilll.alberto@example.com','$2y$10$fImysUbLf7ueGZP0cC4KauTWa8Kcg8q3JNJZb7CtvSli1tFXZot.G','NoXWxZgPoB','2016-12-17 12:39:01','2016-12-17 12:39:01'),(14,'Kaitlin Okuneva DDS','pwilliamson@example.com','$2y$10$F8TAJg4aSNV9KByUl53Mt..t0rPdUbbsdYand/eLfbzOz6ugx4/16','4p3ZMrqAvk','2016-12-17 12:39:01','2016-12-17 12:39:01'),(15,'Rickey Miller','erick.friesen@example.com','$2y$10$JgxKFzrN27ciGbY.epSOAeUSG.G9epBLwZz5tiscHAnV6MqqI/YMW','OlCeOlJya6','2016-12-17 12:39:01','2016-12-17 12:39:01'),(16,'Neha Vandervort','uullrich@example.org','$2y$10$lCiEjYi7Q7Z1MY44Mj7loOPkvysptcXuvxO5Wr3P4RdvdQ1GEF6rK','witnJahqe5','2016-12-17 12:39:01','2016-12-17 12:39:01'),(17,'huangtilong','huangtilong@qq.com','$2y$10$V6t/F6iCdPPcL94LVsGHtu67hxFtZuwtZ7rmL6rA10C7DUmMaMO.O','coG995VfzglUGZ8FwoNaYDZMwg6dCYGSS36CSiQhbxXSn8MNzu4IxxbN7blV','2016-12-17 15:01:28','2016-12-17 15:01:51');
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

-- Dump completed on 2016-12-26 23:27:33
