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
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '回答id',
  `question_id` int(10) unsigned NOT NULL COMMENT '问题id',
  `content` text CHARACTER SET utf8 NOT NULL COMMENT '回答内容',
  `user_id` int(10) unsigned NOT NULL COMMENT '回答用户',
  `isaccept` tinyint(1) NOT NULL COMMENT '是否采纳',
  `votes` bigint(20) NOT NULL COMMENT '投票',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_question_id_foreign` (`question_id`),
  KEY `answers_user_id_foreign` (`user_id`),
  CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,93,'Ipsam velit ipsam doloribus provident. Incidunt saepe voluptas ex commodi voluptatibus. Ea rerum omnis alias delectus quaerat quasi ut.',16,1,48,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(2,81,'Nihil cum et doloremque laudantium tempore consequatur quia. Est enim iste exercitationem ipsam dolore. Accusamus ullam culpa optio.',11,1,87,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(3,28,'Molestias non eum distinctio consequatur in reiciendis omnis. Aliquam eos ut sit temporibus est aliquam est blanditiis. Blanditiis est occaecati alias nobis. Corrupti voluptas et eos.',8,0,11,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(4,7,'Ratione omnis modi labore neque. Nostrum eius aut iste vitae pariatur. Ut rem adipisci quisquam dolorum molestiae adipisci molestias. Harum dicta ratione earum aperiam minus dolor.',13,0,2,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(5,25,'Quis consequatur repudiandae in eum facere delectus. Tenetur modi et est officia. Sed quibusdam porro eos aspernatur. Aut maiores voluptas aperiam necessitatibus consectetur eum.',10,0,35,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(6,37,'Maxime nam cumque et debitis saepe ut. Assumenda velit et et sit tempore. Consequatur voluptatem molestiae sed illum esse ad itaque. Et est culpa odit corporis recusandae eligendi.',14,1,76,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(7,44,'Quia consectetur id est facere quaerat. Ut officia debitis consequatur natus id incidunt velit commodi. Qui totam rerum tempora inventore. Autem vitae omnis ipsa dolor sed cumque.',15,0,25,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(8,61,'Fugit blanditiis tempore voluptates odit voluptas possimus id. Modi quisquam et ut quibusdam ut id. Voluptatibus totam beatae libero temporibus.',9,1,58,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(9,64,'Expedita doloribus quasi repellendus nihil. Exercitationem et accusantium et voluptate. Consequuntur vel quasi fugiat autem dolorem eveniet. Ad in dignissimos quod qui. Quas excepturi nisi facilis.',12,0,26,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(10,87,'Dolores dicta voluptatibus cum nihil sit excepturi repellendus. Facilis ad est velit sit ipsa voluptatibus fuga. Sequi ea facere nobis quibusdam dolor.',17,1,90,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(11,6,'Expedita porro est eaque accusantium unde. Nihil debitis odio consequatur qui. Sint fugiat expedita sed minima officiis sunt nam.',16,1,58,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(12,16,'Culpa illo maiores aut earum tempora asperiores. Est ad sint dolor impedit sit culpa. Odit facilis non magni explicabo. Facere quasi facilis ut sint sit.',14,1,85,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(13,66,'Magnam mollitia expedita dolore ipsam vitae sint aut non. Reiciendis nam error nemo aperiam tenetur. Architecto id dignissimos velit quos molestiae voluptatem qui.',5,1,35,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(14,94,'Suscipit odio beatae odit explicabo. Voluptas quasi aspernatur quidem explicabo est.',6,1,27,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(15,78,'Debitis velit illum dolorem veritatis sunt est minus. Non error animi voluptas ipsam sed. Aut eum libero assumenda voluptatem asperiores quae.',8,0,23,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(16,25,'Consequatur minima facilis repellat consectetur aut ipsum ex rerum. Nam dignissimos et eligendi sunt ducimus modi corporis. Et cupiditate est et mollitia repellendus eaque tempora laudantium.',8,1,100,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(17,78,'Placeat eius nemo eos consequatur odit dicta. Quisquam autem atque illum dolorem accusamus. Ipsum et sit tempora repudiandae consequatur a et. Et eveniet sequi voluptatum.',13,1,98,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(18,75,'Voluptatem ullam quas animi iste. Blanditiis expedita vel sed quia.',12,0,59,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(19,51,'Odit itaque nihil doloremque enim nostrum esse. Minus nesciunt consectetur est nisi et sed sit. Voluptates dolor dolorum numquam minus laboriosam. Unde et sunt mollitia tempora repellendus odit quas. Ullam dolores ex accusamus tempore libero.',10,0,8,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(20,64,'Aperiam dolor voluptas facilis aut officiis quis nesciunt. Quas velit accusamus est quia error cupiditate. Omnis cumque omnis blanditiis numquam et. Vel et consequatur accusantium.',13,1,70,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(21,52,'Consequatur ipsa doloribus eum quibusdam. Enim dolorum asperiores itaque provident sit dolorem odit nulla. Adipisci earum odit id.',17,1,57,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(22,40,'Rerum quod est ut et. Quos rem voluptatum sequi aut consectetur cupiditate debitis vitae. Porro repellat commodi molestiae ad sed. Aliquid quae qui amet debitis qui nihil.',13,0,52,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(23,97,'Perspiciatis odio et molestiae eveniet. Velit libero tempora delectus quia delectus omnis. Quis cum consequatur quis laborum quia voluptates nam unde.',12,1,58,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(24,33,'Cumque voluptate exercitationem tempora odit quaerat consequatur. Qui mollitia ea sed vel et mollitia. Aut eum aut id autem sint assumenda sit sit. Nostrum est molestiae ut.',17,1,7,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(25,71,'Nostrum aliquam tenetur neque aut nulla. Iure et qui repellat tenetur illum alias odio. Eaque quidem perferendis minus rerum non.',1,1,57,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(26,15,'Velit praesentium facilis consequatur voluptas deserunt totam aut. Iusto asperiores inventore soluta nesciunt non.',16,1,24,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(27,11,'Architecto sint unde cumque sequi voluptas soluta. Et natus facere ducimus similique ratione qui. Temporibus temporibus minus similique nihil et. Cupiditate sed sed dolorem eveniet aut.',8,1,57,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(28,74,'Voluptatum odio voluptatem quidem sint. Eum ad est et totam. Quos aut ab commodi et quam maxime. Alias voluptatum quasi non unde.',14,1,6,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(29,31,'Nisi accusantium ad explicabo. Excepturi sed commodi ad ad consequuntur. Tempora exercitationem molestias autem.',11,0,86,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(30,66,'Maxime et perspiciatis accusantium neque. Architecto sequi sit ad. Distinctio similique aspernatur velit id accusamus accusantium quis.',8,0,42,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(31,99,'Esse temporibus sit fugit labore voluptas. Est eum et ut ex. Est ratione voluptatem facere.',10,0,56,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(32,19,'Officia necessitatibus repellat doloribus voluptas debitis consequatur facere. Ea incidunt laborum voluptate nihil. Esse et est qui architecto.',1,1,34,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(33,54,'Vitae quo autem qui qui. Placeat suscipit sint in iusto eligendi autem. Natus voluptas illo quod earum.',1,0,28,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(34,81,'Quaerat dolorem sint ex ut. Doloremque officiis assumenda quo voluptate dolorem.',6,1,66,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(35,24,'Aut molestiae cupiditate iure ratione rerum reiciendis consequatur. Vero quia excepturi commodi sed tenetur reiciendis iusto. Unde ut consequatur iusto eos.',10,1,36,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(36,44,'Debitis vitae repudiandae optio mollitia et nostrum. Nihil esse sed sed. Pariatur omnis iusto sint ad pariatur magnam sit autem.',7,0,63,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(37,80,'Dolor repellendus hic omnis deserunt voluptatem aliquam vel. Quia dolor nam libero aliquam. Aut qui doloremque est qui odit.',11,1,42,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(38,22,'Odio aut saepe sit hic eligendi doloremque at itaque. Consectetur et perspiciatis vel impedit. Dicta doloribus velit similique placeat quia repudiandae laudantium.',5,1,60,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(39,96,'Quis dolorem tenetur architecto qui quos laudantium consequatur. Sit itaque quas id non ut. Voluptatem dolor aliquid dolor pariatur a aperiam.',13,0,20,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(40,37,'Consequatur non id autem optio. Enim porro totam ex mollitia vero et omnis. Molestias perspiciatis dolor qui numquam tempore nihil blanditiis.',17,0,67,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(41,53,'Quas sit fugiat consectetur molestiae quia omnis. Enim minima rerum rerum nobis incidunt. Ex voluptatem quia ut aut sunt et blanditiis. Rerum qui qui illo ab.',9,1,50,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(42,88,'Provident eum ea magni quis et sed exercitationem. Quo consequatur voluptatem praesentium. Consequatur ut distinctio nisi enim.',17,1,78,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(43,41,'Similique aliquam recusandae qui quasi qui. Ab est possimus numquam et laborum aut. Aliquam dolorum quos eligendi ut cum omnis.',11,0,52,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(44,9,'Nam hic nam dolores quidem reiciendis sit iure omnis. Aut ex aut amet veritatis voluptate eligendi. Unde enim corporis rerum et in praesentium quasi.',15,1,85,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(45,86,'Harum dignissimos officiis esse natus cum in. Omnis cum occaecati ducimus incidunt qui id. Reprehenderit voluptatibus sunt vel excepturi cumque. Sit rerum quia voluptatum necessitatibus. Omnis maiores saepe animi voluptatibus molestiae consequatur vitae.',17,0,5,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(46,8,'Id consequatur id itaque distinctio aperiam. Quis voluptatem maiores ullam aut ut. Et animi quia molestiae quisquam placeat. Et ut labore est eos asperiores omnis dolorem.',12,1,74,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(47,28,'Repellat sunt fuga minus distinctio. Consequatur aut iusto ut rem a doloremque praesentium. Omnis eos perspiciatis corrupti occaecati.',8,0,84,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(48,53,'Corporis sunt aspernatur voluptates consequatur quas adipisci. Expedita iure ut quae laboriosam molestiae id nulla. Porro aut officia voluptatibus voluptatem. Facere quis deserunt ipsa vel et aut natus.',15,1,2,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(49,87,'Quam commodi et consequatur laborum dicta quos. Aut non quibusdam nihil inventore. Nam quo at eum earum voluptate delectus quam. Sed impedit quis ullam et ut magnam.',5,1,32,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(50,67,'Nihil accusantium quia magni temporibus. Nostrum excepturi nesciunt ut labore et sit error.',11,0,91,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(51,100,'Perferendis repellat dolores tempora ex. Voluptatem ducimus placeat iusto maiores voluptas. Consequatur velit magnam aut quasi molestiae consequatur.',14,0,71,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(52,67,'Eos consequuntur rerum minima inventore sit in. Suscipit commodi sed cumque veniam et. Ut occaecati ex consequatur sint ea totam ut ipsa. Nisi est reprehenderit sed repellendus consequatur.',14,1,89,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(53,66,'Alias nihil doloremque omnis perferendis voluptatem dolorem ex fuga. Velit totam odit dignissimos quis. Quisquam assumenda atque nobis esse minus. Et et facilis error cumque quo unde a.',15,1,43,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(54,40,'Officia veritatis ut neque blanditiis. Et quibusdam neque doloribus et. Voluptas consectetur quia pariatur consectetur temporibus autem cum ratione. Excepturi est ut et.',14,1,29,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(55,24,'Illum magnam esse nihil. Rem ducimus fugiat pariatur. Quia omnis modi a amet cumque. Eum eum similique tempore ut eveniet et.',14,0,95,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(56,10,'Blanditiis blanditiis dolorem a quas dolor veritatis corrupti. Quia perspiciatis sapiente sint sed. Omnis enim rerum occaecati labore vel suscipit.',9,0,99,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(57,31,'Quis commodi et minus neque. Libero iure aut veniam nemo nostrum itaque totam optio. Rerum in velit eligendi aut minima. Aut dicta voluptatem voluptatem cumque.',8,0,52,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(58,35,'Amet quibusdam cumque dolores omnis. Id ut minus placeat magni perspiciatis. Fuga similique accusamus et. Dolorum ut veritatis et molestiae ut et est.',8,0,52,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(59,42,'Laboriosam sed corrupti et eum ipsam culpa dicta. Eum commodi libero suscipit. Fugit aspernatur eum et quia doloremque expedita.',6,1,5,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(60,16,'Ut quasi amet eum voluptatem. Velit repellat eum autem ut architecto quo earum. Modi enim voluptas ratione et nam ut.',14,1,37,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(61,71,'Sed amet cum dolore error. Eveniet ea voluptatum expedita qui expedita repudiandae. Est maxime qui repudiandae dolore assumenda. Aut porro esse asperiores est. Dolores et minus officia in totam molestiae voluptates.',5,0,93,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(62,44,'Ex reiciendis et voluptatem voluptatem enim. Tempora nemo qui rem et vero voluptatem. Fugit iusto corrupti velit nisi sit et rem consequatur.',16,0,61,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(63,99,'Aperiam libero voluptatem facilis facilis ducimus. Et aut quibusdam vero est corporis non. Molestiae iusto aut sint ut et debitis consequuntur. Quia similique architecto voluptas.',13,1,70,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(64,19,'Quo quo omnis deserunt et enim ipsam porro et. Saepe maxime illum eius possimus aut qui rem. Neque eligendi ea qui dolores tenetur iure consequuntur. Vero recusandae perferendis officia sit. Consequatur molestiae provident illum veritatis esse possimus et.',13,0,21,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(65,44,'Sunt ea necessitatibus sunt in quasi excepturi rerum. Excepturi quos culpa tenetur quia facilis. Tenetur deserunt et tempore labore et.',1,1,26,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(66,67,'Asperiores et est sapiente velit placeat autem. Ea sequi ad occaecati modi. Sapiente sapiente quae perferendis accusantium nam ab ipsum. Sed facere soluta et sequi voluptas.',7,1,6,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(67,82,'Illum est recusandae ab non autem a ad. Eveniet sint quia aut temporibus id iusto doloribus. Sit sequi voluptas explicabo aliquam perferendis eum est. Fugiat unde autem velit et ducimus quas.',16,1,83,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(68,23,'Eaque accusantium et quaerat accusamus debitis voluptatem cumque ab. Nihil eum dolorem ipsa dolore. Et dolor et autem reprehenderit corrupti officia. Provident quibusdam omnis occaecati est in.',12,1,67,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(69,67,'Neque et inventore deleniti praesentium necessitatibus non. Omnis minus est facere vero saepe.',15,0,65,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(70,77,'Rerum consequatur illum temporibus omnis. Provident ducimus omnis sint minus fuga. Qui placeat voluptate quisquam sit repellat repudiandae. Sunt aspernatur totam praesentium eos facilis autem repellat. Est vitae quos possimus blanditiis.',14,0,3,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(71,100,'Et ut architecto enim. Et tenetur aspernatur repudiandae et vel. Quod vitae qui dolor consequuntur.',15,0,34,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(72,100,'Dolore aspernatur dolor nesciunt quod. Modi suscipit temporibus repellat officia architecto. Maiores labore rerum est excepturi sed. Earum maiores soluta optio deserunt adipisci placeat ut.',10,0,14,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(73,3,'Ullam accusamus in atque et. Autem veritatis voluptatem consequatur. Veritatis quo nihil enim voluptatem aut asperiores aliquam.',1,1,80,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(74,45,'Voluptas et deserunt incidunt officiis. Voluptatem et dolor voluptate magnam. Exercitationem voluptate voluptatibus magnam asperiores.',2,0,85,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(75,32,'Qui blanditiis qui officia a. Odit id ut beatae et repellendus qui qui. Dolore ut recusandae dolores non esse eligendi. Doloremque vero rerum nisi et.',12,0,99,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(76,85,'Ut magni inventore impedit tempora minus maiores. Qui non adipisci sit earum inventore eos. Id ea eos et vel voluptatum dolorem quisquam. Repellendus explicabo accusantium ad et nihil laboriosam.',11,0,84,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(77,3,'Rerum aut dicta aut. Ratione vel tempora enim ab. Modi natus molestiae ut delectus.',11,1,58,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(78,6,'Magni ad ut rerum porro aut ea omnis. Quibusdam assumenda molestiae modi et ea. Molestias blanditiis inventore occaecati laboriosam distinctio tempore at.',9,0,82,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(79,86,'In tempora dolorem provident quia. Velit numquam dolores neque aut maxime. Nihil architecto quisquam assumenda.',12,1,86,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(80,62,'Impedit quaerat omnis neque dolore mollitia quod. Doloribus corporis dolores perspiciatis eligendi. Voluptas et dicta vel eaque reiciendis ut necessitatibus. Magnam odio dignissimos quia unde voluptatem.',10,1,90,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(81,79,'Autem ipsam sint ad assumenda. Repellat nesciunt cupiditate et et corporis repellat consequatur. Animi eos ad eum in. Rerum quibusdam quisquam animi aspernatur.',10,0,73,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(82,41,'Repudiandae nihil doloribus eaque qui doloremque tempora. Aut sit fugit aut nihil deleniti. Ipsum veniam esse eos. Ex aut et nulla vitae.',6,1,56,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(83,21,'Fugiat eos eligendi error aliquam ut enim doloribus. Qui laudantium eveniet laborum omnis. Esse ut autem deleniti eligendi dolore et. Ratione non incidunt nam debitis laboriosam.',11,1,78,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(84,27,'Autem assumenda iure repudiandae quis dolorem aut qui aut. Vero recusandae asperiores aut ratione voluptas quos.',17,1,15,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(85,38,'Consequuntur autem voluptatem impedit omnis eaque et est quia. Earum totam repellat et sint aut et amet. Aut doloribus vel expedita quae quae.',2,1,85,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(86,71,'Ut accusamus non qui tempore. Pariatur voluptatem blanditiis est sequi repellat ut magnam. Consequuntur sit delectus est iure voluptatem aut. Error ab qui occaecati et et officia.',9,1,73,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(87,1,'Optio adipisci nam enim quisquam error aut. Deleniti quae quibusdam hic. Consectetur accusantium sunt voluptas.',13,0,13,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(88,39,'Corrupti aut hic pariatur. Molestias asperiores dolores libero nihil sit consequatur. Placeat aut similique beatae et.',10,0,36,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(89,91,'Cupiditate ullam voluptatem magni quia dolorem quis eum aut. Nihil perspiciatis eos a neque error veniam voluptates. Placeat minima reprehenderit nemo doloribus quaerat non. Mollitia rerum dolore vitae sit velit.',7,1,24,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(90,51,'Sunt earum unde sed consequatur. Officia unde at expedita doloremque nesciunt eum porro. Officia perferendis modi illum minus aut aut.',14,1,18,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(91,9,'Sequi expedita expedita aut vero. Voluptate rerum accusamus porro quod. Quod nobis fugit ducimus est molestias enim.',1,1,73,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(92,97,'Quod eum voluptatum quia animi vel. Rerum ad quia sed dolores qui non sequi officiis. Quae et ad a. Nemo temporibus quibusdam sunt natus. Quisquam nemo voluptatum magni mollitia quia voluptatem est.',6,1,17,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(93,17,'Porro velit cumque commodi vitae quae a tempora. In voluptatem recusandae repellat qui aliquam voluptas. Dolor placeat facere et qui necessitatibus molestias. Totam quibusdam cum et voluptate eos.',12,1,78,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(94,99,'Sunt voluptas quo quas quia. Sit qui fugit occaecati asperiores. Numquam quas nostrum esse perferendis blanditiis qui.',7,0,43,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(95,56,'Quia porro soluta eum iure voluptate doloremque. Incidunt mollitia similique non eligendi molestiae voluptatibus. Nisi sunt exercitationem odio id magni.',17,1,37,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(96,13,'Voluptatem at fugiat eos distinctio qui cupiditate atque. Nihil veritatis maiores hic modi. Repudiandae qui libero eos voluptatum et ad. Reprehenderit a temporibus et aut quam reprehenderit hic.',11,1,4,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(97,32,'Iure laborum pariatur est. Repudiandae aut sapiente molestiae culpa illo perspiciatis. Qui eligendi fuga qui ipsum. Libero ut nihil eveniet beatae.',14,1,48,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(98,51,'Eos modi dolorem quos eveniet quis in. Minima consequatur quia cupiditate est earum. Et voluptatem optio quia. Voluptatem in ut labore.',2,0,19,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(99,75,'Aut adipisci optio voluptatem sit. Fugiat est vero reiciendis enim et ut id reprehenderit.',17,0,71,'2016-12-18 14:03:04','2016-12-18 14:03:04'),(100,69,'Facilis voluptatem libero veritatis perspiciatis et voluptate. Explicabo dicta eligendi minima omnis. Est ipsa veniam et cumque non cumque.',10,0,13,'2016-12-18 14:03:04','2016-12-18 14:03:04');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-26 23:29:14