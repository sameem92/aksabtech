-- MySQL dump 10.19  Distrib 10.3.28-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: aksabtech_aksab
-- ------------------------------------------------------
-- Server version	10.3.28-MariaDB

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
-- Current Database: `aksabtech_aksab`
--


--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `username`, `password`, `image`, `created_at`, `updated_at`) VALUES (1,'admin','$2y$10$5NsYUsCPoFFgbqx2E9D2H.2ne7wdlFWoYKGQyPIDtpdjNLMIQvQ8a','9500.jpg','2019-04-07 18:32:13','2020-07-07 15:33:10'),(2,'Naderalkarwan','$2y$10$U0Cm9EYe5kLrRAYx83ikFu66I8.LSVznxJncq6r1jzefOIWH9xwpS','4921.png','2020-07-13 17:03:32','2020-07-13 17:03:32');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appliedworks`
--

DROP TABLE IF EXISTS `appliedworks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appliedworks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `shortdesc` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appliedworks`
--

LOCK TABLES `appliedworks` WRITE;
/*!40000 ALTER TABLE `appliedworks` DISABLE KEYS */;
/*!40000 ALTER TABLE `appliedworks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `shortdesc` text DEFAULT NULL,
  `blogdesc` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientscomments`
--

DROP TABLE IF EXISTS `clientscomments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientscomments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientscomments`
--

LOCK TABLES `clientscomments` WRITE;
/*!40000 ALTER TABLE `clientscomments` DISABLE KEYS */;
INSERT INTO `clientscomments` (`id`, `comment`, `name`, `image`, `created_at`) VALUES (5,'شركة تعاملها راقي وتصاميم مبتكرة و احترافية والأهم من ذلك كله السرعة وتحمل تعديلات العميل للوصول لحد رضاه','شركة مكعبات','2256.jpg','2020-08-23 16:06:46'),(6,'شغل ممتاز وتعامل راقي في وقت وجيز ,بالتوفيق والسداد','شركة وسيط المزاحمية','6393.jpeg','2020-08-23 16:07:35'),(7,'خدمة رائعة وعمل رائع وأسلوب أكثر من رائع والالتزام بالوقت وتكلفة بسيطة يعني جد أفضل شركة بتعامل معها برو تك لا تقبل بأقل مما تستحق','مركز رواند التعليمي','9922.png','2020-08-23 16:09:10'),(8,'عمل وتنفيذ وتصميم أكثر من رائع ومرونة في التعامل من قبل الفريق , شكرا لكم من القلب','مركز أوفر سيز الطبي','1259.png','2020-08-23 16:09:35'),(9,'أشكر فريقكم الرائع صراحة على عملهم الجبار في التصميم وتعاملهم الطيب مع العملاء ,وأنصح أصحاب المشاريع الصغيرة بالتعامل معكم وأتمني لكم دوام التوفيق والسداد','مؤسسة القمر','5314.jpg','2020-08-23 16:10:05'),(10,'تعامل راقي و عمل احترافي رائع ,عملت معهم لجوريلاكس وكان العمل ذو جودة عالية ,أفكر مستقبلا أن أعمل معاهم أعمال مستقبلية قادمة','شركة جوريلاكس','3734.jpg','2020-08-23 16:11:10'),(11,'حبيت أشكركم على خدمتكم الرائعة والراقية فعلا تعاملكم جميل جدا مع سرعة الاستجابة في العمل والتواصل من أعل خدمة نتمنى لكم مزيدا من التوفيق والنجاحى وأفضل المستويات','مصنع أبواب الفتح','8668.jpg','2020-08-23 16:11:32'),(12,'التقييم ممتاز و الشغل جميل والتعامل مرن و راقي , ولن يكون آخر تعامل بإذن الله شكرا لكم','مشروع بكلة','2432.png','2020-08-23 16:12:12');
/*!40000 ALTER TABLE `clientscomments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lastworks`
--

DROP TABLE IF EXISTS `lastworks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lastworks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lastworks`
--

LOCK TABLES `lastworks` WRITE;
/*!40000 ALTER TABLE `lastworks` DISABLE KEYS */;
/*!40000 ALTER TABLE `lastworks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `service`, `created_at`) VALUES (1,'اسماء الزبيدي','simm2290@icloud.com','0552902138',4,'2020-07-28 16:22:56'),(2,'محمد الخالد','mohmadalgazem@gmail.com','+966592541096',1,'2020-08-18 08:32:09'),(3,'محمد الخالد','ahmabdb1234567@gmail.com','+967 733 541 697',1,'2020-08-19 13:50:34'),(4,'محمد الخالد','ahmabdb1234567@gmail.com','+967 733 541 697',1,'2020-08-19 13:50:39'),(5,'مؤسسة القمر','protech.co.2019@gmail.com','555555',1,'2020-08-23 16:37:27'),(6,'ابو مححمممد','protech.co.2019@gmail.com','0000000',1,'2020-08-30 19:37:36'),(7,'محمد','modym8281@gmail.com','السيد',1,'2020-09-02 20:20:23'),(8,'Saud Almalki','sosh201300@hotmail.com','0509953728',4,'2021-01-10 18:12:12'),(9,'Saud Almalki','sosh201300@hotmail.com','0509953728',4,'2021-01-10 18:12:26'),(10,'Saud Almalki','sosh201300@hotmail.com','0509953728',4,'2021-01-10 18:12:41'),(11,'نننن','hhh@gmail.com','نهه',2,'2021-02-23 19:58:59'),(12,NULL,NULL,NULL,NULL,'2021-02-25 16:19:20');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ourclients`
--

DROP TABLE IF EXISTS `ourclients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ourclients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ourclients`
--

LOCK TABLES `ourclients` WRITE;
/*!40000 ALTER TABLE `ourclients` DISABLE KEYS */;
INSERT INTO `ourclients` (`id`, `image`, `created_at`) VALUES (10,'4102.png','2020-08-23 16:01:14'),(11,'450.png','2020-08-23 16:01:25'),(12,'1983.png','2020-08-23 16:01:39'),(13,'3472.png','2020-08-23 16:01:50'),(14,'4824.png','2020-08-23 16:02:01'),(15,'7527.png','2020-08-23 16:02:11'),(16,'7703.png','2020-08-23 16:02:20'),(17,'8245.png','2020-08-23 16:02:29'),(18,'3396.png','2020-08-23 16:02:40'),(19,'1144.png','2020-08-23 16:03:15'),(20,'3419.png','2020-08-23 16:03:22'),(21,'9201.png','2020-08-23 16:04:09'),(22,'1052.png','2020-08-23 16:04:23'),(23,'5234.png','2020-08-29 23:04:14');
/*!40000 ALTER TABLE `ourclients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ourtools`
--

DROP TABLE IF EXISTS `ourtools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ourtools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ourtools`
--

LOCK TABLES `ourtools` WRITE;
/*!40000 ALTER TABLE `ourtools` DISABLE KEYS */;
INSERT INTO `ourtools` (`id`, `image`, `created_at`) VALUES (1,'9148.png','2020-07-04 01:56:25'),(2,'5994.png','2020-07-04 01:56:38'),(3,'5767.png','2020-07-04 01:56:48'),(4,'1766.png','2020-07-04 01:56:57'),(5,'4095.png','2020-07-04 01:57:05'),(6,'5838.png','2020-07-04 01:57:15'),(7,'1787.png','2020-07-04 01:57:23'),(8,'7777.png','2020-07-04 01:57:31');
/*!40000 ALTER TABLE `ourtools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `bgimage` varchar(200) NOT NULL,
  `packagedesc` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `shortdesc` text DEFAULT NULL,
  `slidermockup` varchar(200) DEFAULT NULL,
  `servicetext` text DEFAULT NULL,
  `servicemockup` varchar(200) DEFAULT NULL,
  `serviceimagebg` varchar(200) DEFAULT NULL,
  `featuretext` text DEFAULT NULL,
  `features` longtext DEFAULT NULL,
  `phasetext` text DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `service`, `image`, `shortdesc`, `slidermockup`, `servicetext`, `servicemockup`, `serviceimagebg`, `featuretext`, `features`, `phasetext`, `parent`, `created_at`) VALUES (1,'برمجة التطبيقات','8837.svg','تعد تطبيقات الهواتف الذكية من أقوى الأساليب التسويقية التي تتبعها الشركات اليوم, حيث انها تصل لعملائك أينما كانوا وتمدهم بالخدمات والمعلومات والأخبار التي تريد إيصالها لهم وتجعلها في متناول أيديهم بشكل سريع وسهل, مما يزيد من فرصة الوصول إلى أكبر عدد ممكن من العملاء','5363.png','تتميز تطبيقاتنا بجودتها العالية وتصميمها الرائع ونقوم بترجمة جميع أفكارك الى تطبيق مميز حيث أن شعارنا هو الاهتمام بأدق التفاصيل','3435.png','3897.png','ماذا نقدم للعميل؟','<p>أكواد برمجية أصلية نظيفة NATIVE</p>\r\n\r\n<p>تسليم الأكواد البرمجية</p>\r\n\r\n<p>دعم فني لمدة عام</p>\r\n\r\n<p>استضافة على سيرافرات عالمية</p>\r\n\r\n<p>رفع التطبيقات على المتاجر العالمية ( أبل ستور وجوجل بلاي )</p>\r\n\r\n<p>تسويق التطبيقات ASO</p>\r\n\r\n<p>منافسة التطبيقات القوية بالسوق</p>\r\n\r\n<p>حماية حقوق العميل&nbsp;</p>\r\n\r\n<p>خصم على خدمات التسويق 25%</p>\r\n\r\n<p>هوية تجارية مجانية&nbsp;</p>','مراحل تنفيذ التطبيقات في شركتنا العزيزة',0,'2020-07-04 17:42:22'),(2,'تطوير المواقع','4426.svg','يعد الموقع الإلكترونى من العوامل الضرورية لأي شركة أو مؤسسة فهو عبارة عن مساحة إلكترونية محجوزة على شبكة الإنترنت يمكن من خلالها رفع جميع الخدمات أو المنتجات التي تقدمها لجمهورك المستهدف','164.png','يعد الموقع الإلكترونى من العوامل الهامة لأي شركة أو مؤسسة فهو عبارة عن مساحة إلكترونية محجوزة على شبكة الإنترنت يمكن من خلالها رفع جميع الخدمات أو المنتجات التي تقدمها لجمهورك المستهدف','1410.png','4737.png','ماذا نقدم للعميل؟','<p>متوفر جميع لغات البرمجة</p>\r\n\r\n<p>أكواد برمجية أصلية نظيفة</p>\r\n\r\n<p>تسليم الأكواد البرمجية</p>\r\n\r\n<p>دعم فني لمدة عام</p>\r\n\r\n<p>استضافة على سيرافرات عالمية</p>\r\n\r\n<p>اوحة تحكم قوية وشاملة&nbsp;</p>\r\n\r\n<p>منافسة المواقع القوية بالسوق</p>\r\n\r\n<p>حماية حقوق العميل&nbsp;</p>\r\n\r\n<p>خصم على خدمات التسويق 25%</p>\r\n\r\n<p>هوية تجارية مجانية&nbsp;</p>','خطواتنا في إنشاء موقع إلكتروني',0,'2020-07-04 17:46:15'),(3,'تصميم وموشن الجرافيك','5321.svg','يعتبر التصميم والموشن الجرافيكي من أقوى الأساليب في مجال الأعمال التجارية لكونها تسهم في إيصال الصورة الصحيحة لشركتك سواء في الحملات التسويقية أو على الموقع الإلكتروني وتساعد بشكل كبير في زيادة المبيعات','7673.png','يعتبر التصميم والموشن الجرافيكي من أقوى الأساليب في مجال الأعمال التجارية لكونها تسهم في إيصال الصورة الصحيحة لشركتك سواء في الحملات التسويقية أو على الموقع الإلكتروني وتساعد بشكل كبير في زيادة المبيعات','9135.png','2505.png','مميزات خدمتنا في التصميم الجرافيك','<p style=\"text-align:right\">أسعار مناسبة ومنافسة جدا</p>\r\n\r\n<p style=\"text-align:right\">تسليم الملفات مفتوحة المصدر</p>\r\n\r\n<p style=\"text-align:right\">عدم استخدام تصاميم وصور جاهزة</p>\r\n\r\n<p style=\"text-align:right\">سرعة في التسليم</p>\r\n\r\n<p style=\"text-align:right\">متابعة أحدث الألوان والستايلات الحديثة</p>\r\n\r\n<p style=\"text-align:right\">تخفيض في الأسعار عند تكرار طلب الخدمة</p>\r\n\r\n<p style=\"text-align:right\">رسم شخصيات ومشاهد بطريقة احترافية</p>\r\n\r\n<p style=\"text-align:right\">متوفر كافة لهجات التعليق الصوتي</p>\r\n\r\n<p style=\"text-align:right\">متوفر كافة أنواع الفيديوهات</p>','خدماتنا في التصميم والموشن الجرافيك',0,'2020-07-04 17:49:55'),(4,'التسويق الإلكترونى','9334.svg','يعتبر التسويق الإلكتروني من خلال الإنترنت العامل الأساسي الذي يعتمد عليه الكثيرون في قرار الشراء للمنتجات و الخدمات, حيث يتم تحويل السوق الإفتراضية إلى واقع حقيقي مادي ملموس، ويُعد هذا النوع من التسويق من الضروريات في الإستراتيجية التسويقية الحديثة','7661.png','يعتبر التسويق الإلكتروني من خلال الإنترنت العامل الأساسي الذي يعتمد عليه الكثيرون في قرار الشراء للمنتجات و الخدمات, حيث يتم تحويل السوق الإفتراضية إلى واقع حقيقي مادي ملموس، ويُعد هذا النوع من التسويق من الضروريات في الإستراتيجية التسويقية الحديثة','6219.jfif','7609.jpg','خطوات أكسب تك في تسويق مشروعك','<p>1_ فهم متطلبات العميل .&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ( 1 يوم )&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; مجانية</p>\r\n\r\n<p>2_ SWOT تحليل للسوق والمنافسين ومشروع العميل &nbsp;.&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ( 2 يوم )&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;مجانية</p>\r\n\r\n<p>3_خطة مالية وفنية تسويقية للمشروع .&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ( 4 أيام )&nbsp; &nbsp;&nbsp; المقترح&nbsp;مجاني</p>\r\n\r\n<p>الخطة تشمل غالبا النقاط التالية :</p>\r\n\r\n<p>1_ تسويق موقعك الإلكتروني&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;SEM&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;(&nbsp;خدمة السيو&nbsp; SEO&nbsp;_&nbsp; &nbsp;إعلانات جوجل أدورد&nbsp; SEA )&nbsp;&nbsp;</p>\r\n\r\n<p>2_ تسويق منصات التواصل الإجتماعي&nbsp;SMM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ( إدارة المحتوى SMM&nbsp; &nbsp;_&nbsp; &nbsp;إعلانات ممولة SMA )&nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n\r\n<p>3_ تسويق بالإيميل والواتساب</p>\r\n\r\n<p>4_ متابعة الخطة وتسليم التقرير الشهري بمقايسس معيارية .</p>','أنواع التسويق الالكتروني',0,'2020-07-04 17:54:35'),(6,'تحديد المتطلبات',NULL,'تكمن الخطوة الأولى بجمع الوظائف المتوقعة من التطبيق أن يقدمها بصورة دقيقة، وتعد المرحلة الأهم لكونها القاعدة الأساسية لكافة المراحل المقبلة!\r\nأثناء جمع المتطلبات ينبغي الابتعاد جليًا عن عملية التفكير في كيفية قيامها، إذ أن هذا الأمر يخص المرحلة التي تليها –تحليل المتطلبات– وتنقسم المتطلبات الى نوعين:\r\nمتطلبات وظيفية:\r\nيقصد بالمتطلبات الوظيفية هى المتطلبات التي يحتاجها التطبيق لكي يعمل\r\nمتطلبات غير وظيفية:\r\nوهي المتطلبات التي تساعد الانتاجية وتقوم بتبسيط عملية الاستخدام حيث ان التطبيق لا يفقد وظيفته عند الاستغناء عنها\r\nعملية جمع المتطلبات تتم عن طريق الاجتماعات المتكررة مع المستفيد (حسب حجم المشروع ) وإجراء عصف ذهني للافكار ومناقشة ملائمتها.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2020-07-04 18:47:39'),(7,'تحليل المتطلبات',NULL,'بعد الفراغ من جمع وتحديد المتطلبات فإن فريق العمل يجتمع لإجراء عصفٍ ذهني والحديث عن المشروع من ناحية ربط المتطلبات وتداخلها! حيث يوضع كل ما جمع في الخطوة السابقة في نسق واحد وفرزها إذ ما كانت تلبي احتياجات النظام أَم يوجد بعض التساؤولات غير مفهومة، بالاضافة الى ذلك يتم التأكد من عدم تضارب المتطلبات ببعضها البعض، والذي في حال حدوثه فإن الفريق يعود خطوة للوراء للتناقش مع المستفدين لضبط الموضوع وإيضاح الصورة، أهم ما تتسم به هذه الخطوة إلى أنّ فترة تنفيذ المشروع المبدئية تظهر فيها.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2020-07-04 18:48:02'),(8,'الرسم المبدئي للمشروع',NULL,'بإمكاننا القول ان كل ماسبق يندرج في نطاق التخطيط، ومن هذه المرحلة تحديدًا يبدأ التنفيذ التقني.\r\nيجمتع فريق العمل مجددًا لإجراء عصفٍ ذهني والحديث عن المشروع من ناحيةٍ تقنية هذه المرة، واختيار إطار العمل المناسب، واللغة وكذلك مقترحات الألوان والشكل العام. في ذات الخطوة يتم تحديد التقنيات البرمجية المناسبة لتنفيذ المشروع، وفي حال كان النظام متضمنًا قاعدة بيانات فإن تصميمها يكون في هذه المرحلة. كما يتم التجهيز لتقنيات الحماية الأمنية إن كان بيانات النظام ذات سرية.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2020-07-04 18:48:25'),(9,'تصميم الواجهات الرئيسية',NULL,'بعد اختيار واعتماد ألوان التطبيق يبدأ المسؤول عن التصميم في تنفيذ الواجهات على هيئة صور (يمكن برمجتها مباشرةً ) حيث تصمم كل واجهة على حده وذلك اعتمادًا على كتيب المواصفات. بطبيعة الحال فإنه لا يتم تطبيق ما تم رسمه في كتيب المواصفات بصورة حرفية، حيث يراعى عند التصميم مفهوم قابيلة الاستخدام والتي يقصد بها قابلية استخدام البرنامج بسهولة.\r\nوفي ذات الخطوة يتم بناء تخيل لتجربة المستخدم، ويتواصل المصمم مع البرمجيين لأخذ آرائهم وتعزيز التناغم في فريق العمل.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2020-07-04 18:48:48'),(10,'تحديد المتطلبات',NULL,'تكمن الخطوة الأولى بجمع الوظائف المتوقعة من الموقع أن يقدمها بصورة دقيقة، وتعد المرحلة الأهم لكونها القاعدة الأساسية لكافة المراحل المقبلة! أثناء جمع المتطلبات ينبغي الابتعاد جليًا عن عملية التفكير في كيفية قيامها، إذ أن هذا الأمر يخص المرحلة التي تليها –تحليل المتطلبات– وتنقسم المتطلبات الى نوعين: متطلبات وظيفية: يقصد بالمتطلبات الوظيفية هى المتطلبات التي يحتاجها التطبيق لكي يعمل متطلبات غير وظيفية: وهي المتطلبات التي تساعد الانتاجية وتقوم بتبسيط عملية الاستخدام حيث ان الموقع لا يفقد وظيفته عند الاستغناء عنها عملية جمع المتطلبات تتم عن طريق الاجتماعات المتكررة مع المستفيد (حسب حجم المشروع ) وإجراء عصف ذهني للافكار ومناقشة ملائمتها.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'2020-07-04 18:56:09'),(11,'تحليل المتطلبات',NULL,'بعد الفراغ من جمع وتحديد المتطلبات فإن فريق العمل يجتمع لإجراء عصفٍ ذهني والحديث عن المشروع من ناحية ربط المتطلبات وتداخلها! حيث يوضع كل ما جمع في الخطوة السابقة في نسق واحد وفرزها إذ ما كانت تلبي احتياجات النظام أَم يوجد بعض التساؤولات غير مفهومة، بالاضافة الى ذلك يتم التأكد من عدم تضارب المتطلبات ببعضها البعض، والذي في حال حدوثه فإن الفريق يعود خطوة للوراء للتناقش مع المستفدين لضبط الموضوع وإيضاح الصورة، أهم ما تتسم به هذه الخطوة إلى أنّ فترة تنفيذ المشروع المبدئية تظهر فيها.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'2020-07-04 18:56:27'),(12,'الرسم البياني للمشروع',NULL,'بإمكاننا القول ان كل ماسبق يندرج في نطاق التخطيط، ومن هذه المرحلة تحديدًا يبدأ التنفيذ التقني. يجمتع فريق العمل مجددًا لإجراء عصفٍ ذهني والحديث عن المشروع من ناحيةٍ تقنية هذه المرة، واختيار إطار العمل المناسب، واللغة وكذلك مقترحات الألوان والشكل العام. في ذات الخطوة يتم تحديد التقنيات البرمجية المناسبة لتنفيذ المشروع، وفي حال كان النظام متضمنًا قاعدة بيانات فإن تصميمها يكون في هذه المرحلة. كما يتم التجهيز لتقنيات الحماية الأمنية إن كان بيانات النظام ذات سرية.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'2020-07-04 18:57:44'),(13,'تصميم الواجهات الرئيسية',NULL,'بعد اختيار واعتماد ألوان التطبيق يبدأ المسؤول عن التصميم في تنفيذ الواجهات على هيئة صور (يمكن برمجتها مباشرةً ) حيث تصمم كل واجهة على حده وذلك اعتمادًا على كتيب المواصفات. بطبيعة الحال فإنه لا يتم موقع ما تم رسمه في كتيب المواصفات بصورة حرفية، حيث يراعى عند التصميم مفهوم قابيلة الاستخدام والتي يقصد بها قابلية استخدام البرنامج بسهولة. وفي ذات الخطوة يتم بناء تخيل لتجربة المستخدم، ويتواصل المصمم مع البرمجيين لأخذ آرائهم وتعزيز التناغم في فريق العمل.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'2020-07-04 18:57:57'),(23,'تسويق المواقع  seo',NULL,'تحسين ظهور موقع إلكتروني أو صفحة موقع إلكتروني في نتائج محركات البحث المجانية (الغير مدفوعة) مثل جوجل بحيث يظهر في النتائج الأولى، وذلك عن طريق دراسة كيفية عمل محركات البحث والعوامل المؤثرة على ترتيب نتائج محركات البحث وتحسينها وكذلك علاج بعض الأخطاء والمشاكل في المواقع، وهو أحد فروع مجال التسويق الإلكتروني.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,'2020-07-04 19:03:29'),(24,'إدارة منصات التواصل الإجتماعي',NULL,'يعد التسويق عبر منصات التواصل الاجتماعي أداة قوية للحصول على عملاء محتملين لجميع الاعمال التجارية مهما كان حجمها , فالعملاء يتفاعلون مع العلامات التجارية من خلال هذه المنصات فإذا لم تتوجه بخطابك مباشرةً الى العملاء من خلال تلك المنصات كفيسبوك, تويتر ,انستجرام ,بنترست..فقد فاتك الكثير!.\r\nالتسويق عبر منصات التواصل الاجتماعي أو SMM هو شكل من أشكال التسويق عبر الإنترنت يتضمن إنشاء ومشاركة المحتوى على شبكات منصات التواصل من أجل تحقيق أهداف التسويق والعلامة التجارية.\r\nحيث يتضمن التسويق عبر وسائل التواصل الاجتماعي أنشطة مثل نشر تحديثات نصية ,صور ومقاطع الفيديو والمحتويات الأخرى التي تحفز مشاركة الجمهور، بالإضافة إلى إعلانات المنصات المدفوعة.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,'2020-07-04 19:03:50'),(25,'الإعلانات الممولة',NULL,'هي الإعلانات التي يتم إنشاؤها في أي من مواقع التواصل الإجتماعي، والتي تهدف إلى الوصول إلى أكبر قدر ممكن الفئة المستهدفة من الجمهور، وخاصة تلك الفئة التي تهتم بالأمور التي يعلن عنها صاحب الشركة أو صاحب الحساب، ويكمن الهدف الأساسي في استخدامها هي بيع أكبر للمنتجات والسلع التي يُعلن عنها، وبالتالي الحصول على أكبر قدر من الأرباح، ويوجد العديد من أشكال الإعلانات المدفوعة، ومنها ما يجري عمله على الفيسبوك، ومنها على تويتر، ومنها على انستجرام، وكذلك كافة مواقع التواصل الاجتماعي المتوفرة على الإنترنت.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,'2020-07-04 19:04:07'),(26,'إعلانات جوجل أدورود',NULL,'إعلانات Google هو برنامج من Google للإعلان عبر الإنترنت. من خلال برنامج إعلانات Google، يمكنك إنشاء إعلانات عبر الإنترنت للوصول بدقة إلى الأشخاص عند اهتمامهم بالمنتجات والخدمات التي تقدمها.\r\nيُعد برنامج إعلانات Google منتجًا يمكنك استخدامه لترويج نشاطك التجاري، والمساعدة في بيع المنتجات أو الخدمات، وزيادة الوعي، وزيادة عدد الزيارات إلى موقعك على الويب.\r\nتتم إدارة حسابات إعلانات Google عبر الإنترنت، لذا يمكنك إنشاء حملتك الإعلانية وتغييرها في أي وقت، بما في ذلك نص إعلانك وإعداداتك وميزانيتك.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,'2020-07-04 19:04:24'),(27,'الخطط التسويقية',NULL,'نقدم لك خطة تسويقية هي عبارة عن خارطة طريق تسير عليها أي شركة من أجل تنظيم وتنفيذ ومتابعة الاستراتيجيات التسويقية المختلفة لتحقيق أهداف الشركة في فترة زمنية محددة.\r\nيمكنك اعتبار الخطة التسويقية على أنها البوصلة التي تسير بها أي شركة أو مؤسسة .',NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,'2020-08-23 15:08:21'),(28,'برمجة الوظائف للنظام',NULL,'في هذه المرحلة يتم تكويد الواجهات المصممة في المرحلة السابقة إلى واجهات نهائية تظهر في الهاتف المحمول إضافة إلى كتابة الأسطر البرمجية للوحة تحكم بيانات التطبيق في حال اقتضى التطبيق الحاجة لها. ويتم اختبار وتجربة كل خاصية من التطبيق على حده فور الانتهاء منها للتحقق من عملها.\r\nأثناء العمل كتابة الأسطر البرمجية للتطبيق قد تظهر خصائص جديدة لم يتم إدراكها إبان عملية التخطيط السابقة، غندها يتم استشارة المستفيدين ومنها يتم اضافتها الى التطبيق.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2020-08-23 17:22:48'),(29,'اختبار النظام بالكامل',NULL,'بعد انتهاء المرحلة السابقة، يتم تجميع التطبيق بصورة متكاملة في نظام كامل موحد، ومنها يتم اختبار جميع الخصائص مع بعضها البعض.\r\nعملية الاختبار الكامل هنا تختلف عن الاختبارات التي كانت تجرى أثناء مرحلة البرمجة السابقة، إذ إن الاختبارات كانت تتم على الجزء الخاص بالخادم او الجزء الخاص بالنظام، فتلك تعد اختبارات لوظائف محددة من التطبيق ولا يتعدى دورها أن تؤكد ان الوظيفة المطلوبة تعمل بشكل سليم، أما في إختبار النظام بالكامل، فالتركيز يكمن في تكامل الوظائف مع بعضها البعض.\r\nعلى جانبٍ أخر فإنه يتم هنا إختبار قابلية الإستخدام أيضًا، إذ يقدم التطبيق للمجموعة من المستخدمين ويطلب منهم استخدام التطبيق ومن ثم استبيان رأيهم عن تجربتهم لمعرفة تجربة الاستخدام ووضوحها.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2020-08-23 17:23:48'),(30,'إطلاق المشروع',NULL,'بعد الفراغ من مرحلة اختبار النظام والتأكد من عملية التطبيق؛ يتم التقدم لطلب فتح متجر إلكتروني سواءً من Google play أو App store ويرفع التطبيق على المتجر بناءً على النظام المصمم وما يتلائم معه.\r\nإلى جوار إطلاق التطبيق عبر متجر التطبيقات، فإن مرحلة الإطلاق تصحبها إعداد ووضع خطة تسويقية للنشر لضمان انتشار أفضل، وفي معظم الأحيان يتم تجهيز صفحة هبوط للتطبيق لتكون بمثابة المنصة التعريفية للتطبيق، إضافةً إلى إعداد شروط الاستخدام والخصوصية.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2020-09-02 10:11:43'),(31,'برمجة الوظائف للنظام',NULL,'في هذه المرحلة يتم تكويد الواجهات المصممة في المرحلة السابقة إلى واجهات نهائية تظهر في الهاتف المحمول إضافة إلى كتابة الأسطر البرمجية للوحة تحكم بيانات التطبيق في حال اقتضى التطبيق الحاجة لها. ويتم اختبار وتجربة كل خاصية من التطبيق على حده فور الانتهاء منها للتحقق من عملها. أثناء العمل كتابة الأسطر البرمجية للتطبيق قد تظهر خصائص جديدة لم يتم إدراكها إبان عملية التخطيط السابقة، غندها يتم استشارة المستفيدين ومنها يتم اضافتها الى التطبيق.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'2020-09-03 14:48:23'),(32,'اختبار النظام بالكامل',NULL,'بعد انتهاء المرحلة السابقة، يتم تجميع الموقع بصورة متكاملة في نظام كامل موحد، ومنها يتم اختبار جميع الخصائص مع بعضها البعض. عملية الاختبار الكامل هنا تختلف عن الاختبارات التي كانت تجرى أثناء مرحلة البرمجة السابقة، إذ إن الاختبارات كانت تتم على الجزء الخاص بالخادم او الجزء الخاص بالنظام، فتلك تعد اختبارات لوظائف محددة من التطبيق ولا يتعدى دورها أن تؤكد ان الوظيفة المطلوبة تعمل بشكل سليم، أما في إختبار النظام بالكامل، فالتركيز يكمن في تكامل الوظائف مع بعضها البعض. على جانبٍ أخر فإنه يتم هنا إختبار قابلية الإستخدام أيضًا، إذ يقدم التطبيق للمجموعة من المستخدمين ويطلب منهم استخدام الموقع ومن ثم استبيان رأيهم عن تجربتهم لمعرفة تجربة الاستخدام ووضوحها.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'2020-09-03 14:49:13'),(33,'إطلاق المشروع',NULL,'بعد الفراغ من مرحلة اختبار النظام والتأكد من عملية الموقع؛ يتم رفع الموقع على استضافة قوية وآمنة  بناءً على النظام المصمم وما يتلائم معه.ومرحلة الإطلاق تصحبها إعداد ووضع خطة تسويقية للنشر لضمان انتشار أفضل، وفي معظم الأحيان يتم تجهيز صفحة هبوط للتطبيق لتكون بمثابة المنصة التعريفية للتطبيق، إضافةً إلى إعداد شروط الاستخدام والخصوصية.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'2020-09-03 14:50:30'),(34,'الهوية البصرية أو التجارية',NULL,'تبدأ الهوية البصرية من خلال تصميم مميز وقوي لشعار الشركة ومن ثم جعل كل مايتعلق بشركتك متناسقاً مع هذا الشعار من ناحية اللون والرمزية.\r\nيمكن تطبيقها على كل شيْ يتعلق بك :الموقع الإلكتروني للشركة وحساباتها على وسائل التواصل الإجتماعي.\r\nأغلفة منتجات الشركة ومراسلاتها.\r\nمركبات الشركة كسيارة الموظفين وسيارات توزيع المنتجات.\r\nأبنية الشركة وأثاثها.\r\nزي وملابس موظفي الشركة وبطاقاتهم التعريفية.\r\nالهدايا التي يمكن توزيعها على العملاء والبائعين \r\nكل المطبوعات للشركة بما فيها ( كروت – اوراق مراسلة ورقية – دفاتر دفع وقبض – أكياس بضائع او منتجات … وغيرها الكثير )',NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,'2020-09-03 14:59:46'),(35,'تصميم المطبوعات',NULL,'بروشورات ............... فلايرات ............... بوسترات ............... لوحات ............... مجلات ............... بروفايلات ............... مطويات ............... ملصقات ............... أغلفة كتب',NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,'2020-09-03 15:04:32'),(36,'تصاميم سوشيال ميديا',NULL,'تصميم إعلانات لكافة منصات التواصل الإجتماعي  ............... هيدر لتويتر  ...............  غلاف فيسبوك  ............... غلاف لنكد إن  ...............  فلاتر  ...............  قوالب تصاميم',NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,'2020-09-03 15:09:57'),(37,'موشن الجرافيك',NULL,'رسوم توضيحيّة متحركة وشخصيات مرسومة ومعدلة باستخدام أحد البرامج؛ لتوضيح وتبسيط المعلومات، والموشن جرافيك هو طريقة للتواصل مع المشاهد عن طريق المشاهد المتتالية والرسوم التوضيحية والشخصيات الرئيسية والثانوية والأيقونات والبيئة التي يتفاعلون فيها، وهناك أيضاً الموسيقى أو التعليق الصوتي التي تساعدك بايصال الفكرة أو الرسالة للمشاهد.\r\n\r\nمتوفر كافة اللهجات التعليق الصوتي.\r\nمع رسم الشخصيات أو بدونها .',NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,'2020-09-03 15:15:03');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about` longtext DEFAULT NULL,
  `aboutlink` varchar(200) DEFAULT NULL,
  `privacy` longtext DEFAULT NULL,
  `policy` longtext DEFAULT NULL,
  `logo` varchar(200) NOT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `instagram` varchar(200) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL,
  `googleplay` varchar(200) DEFAULT NULL,
  `applestore` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `whatsapp` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `footerbgimage` varchar(200) DEFAULT NULL,
  `stuffbgimage` varchar(200) DEFAULT NULL,
  `clientscount` int(11) NOT NULL DEFAULT 0,
  `projectscount` int(11) NOT NULL DEFAULT 0,
  `experiencecount` int(11) NOT NULL DEFAULT 0,
  `employeecount` int(11) NOT NULL DEFAULT 0,
  `chooseusbgimage` varchar(200) DEFAULT NULL,
  `chooseustext` text DEFAULT NULL,
  `lastworkstext` text DEFAULT NULL,
  `ourtoolstext` text DEFAULT NULL,
  `ourclientstext` text DEFAULT NULL,
  `packagetext` longtext DEFAULT NULL,
  `servicesbgimage` varchar(200) DEFAULT NULL,
  `servicemockup` varchar(200) DEFAULT NULL,
  `servicetext` text DEFAULT NULL,
  `worktext` text DEFAULT NULL,
  `workmockup` varchar(200) DEFAULT NULL,
  `workbgimage` varchar(200) DEFAULT NULL,
  `homeslidermockup` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `about`, `aboutlink`, `privacy`, `policy`, `logo`, `facebook`, `twitter`, `instagram`, `youtube`, `googleplay`, `applestore`, `email`, `phone`, `whatsapp`, `address`, `footerbgimage`, `stuffbgimage`, `clientscount`, `projectscount`, `experiencecount`, `employeecount`, `chooseusbgimage`, `chooseustext`, `lastworkstext`, `ourtoolstext`, `ourclientstext`, `packagetext`, `servicesbgimage`, `servicemockup`, `servicetext`, `worktext`, `workmockup`, `workbgimage`, `homeslidermockup`) VALUES (1,'<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">أهلا بك</span></span></h1>\r\n\r\n<div style=\"page-break-after:always\"><span style=\"display:none\">&nbsp;</span></div>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>الرسالة</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">تقديم الخدمات التكنولوجيا والمعلوماتية بمنتهى الدقة وبجودة عالية.</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>الرؤية</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">نسعى بمجال تكنولوجيا المعلومات بأدق التفاصيل وآخر المستجدات التطور العلمي والتكنولوجي وخدماتنا الخيار المفضل للشركات وللمؤسسات العامة والخاصة وتقديم خدمات الدعم والمساندة على مدار الساعه .</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>الابتكار</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">نجتهد لتطوير مستوى أعمالنا ونحترم قدرات موظفينا الإبداعية والمميزة.</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>التفاني</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">نحن فخورون بأعمالنا وجاهدين كل الجهد لتحقيق أهدافنا المميزة.</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>التعاون</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">نعمل ونتكاتف بروح الجماعة ونتبادل الخبرات والمهارات والمعارف لنكون الأفضل.</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>المرونة</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">نتقن أعمالنا بكل حب وشغف واعتزاز وفخر وهمة عالية، &nbsp;وبكل ثقة نتخذ &nbsp;قرارات جريئة تعزز خدماتنا العامة.</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>الاحترام</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">نحن في أكسب تاجنا الاحترام من خلال التزامنا نكتسب العدل والثقة والنزاهة في جميع علاقاتنا وخدماتنا.</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>التفوق</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">نحن أكسب نتميز في إنجاز أعمالنا بوقت قصير وبافضل جودة</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">وأرقى التحديثات في عالم التقنية .</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>مميزاتنا</strong>&nbsp;</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">نهتم وجاهدين نفهم أفكار عملائنا بكل دقة عالية وتحويل الفكرة إلى تقنية بكل يسر وسهولة.</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>آمن&nbsp;</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">انت وصلت إلى وجهتك الصحيحة نحن نصمم لك&nbsp;</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">كل ماتتخيل من الافكار&nbsp;</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">فكرتك مع أكسب &nbsp;يتحقق</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">وآمن بكل خدماتها&nbsp;</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">آمن مع أكسب تك</span></span><br />\r\n&nbsp;</h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>عن أكسب تك</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">أكسب تك هي مرخصة برقم السجل (4031227816)</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">مقرنا الرئيسي مكة المكرمة&nbsp;</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">مجالنا تكنولوجيا &nbsp;المعلومات والبرمجة والتصاميم وإدارة المحتوى .</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>ماذا عن أكسب تك</strong></span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">نحن أكسب دوما نشغف بكل جديد في عالمنا وأعمالنا نعمل بجهد كبير لنصل إلى أحدث التقنيات المتطورة وأداة التسويق الإلكتروني المبتكر وفريق العمل دوما في أتم الاستعداد لخدمة عملائنا .</span></span></h1>\r\n\r\n<h1 style=\"margin-right:40px\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">اذا أردت أي خدمة فلا تتردد فى مراسلتنا نحن فخورون بخدمتكم دوما.</span></span></h1>','https://www.youtube.com/watch?v=vsbgTxENZFI','<p style=\"text-align:center\"><strong>سياسة الخصوصية</strong></p>\r\n\r\n<p><strong>سياسـة الخصوصيـة</strong><br />\r\nتدرك شركة أكسب للاتصالات وتقنية المعلومات (&quot;أكسب تك&quot;) أهمية الخصوصية وحماية البيانات الشخصية التالي فهي ملتزمة بحماية خصوصية عملاء أكسب تك أثناء التعامل وتقديم خدمة او الخدمات أو استخدام مواقعنا الإلكترونية وتصفح خدماتنا.</p>\r\n\r\n<p>ستوضح سياسة الخصوصية هذه (&quot;سياسة الخصوصية&quot;) كيف تضمن أكسب تك حماية البيانات الشخصية على مستوى متقدم (مثلا أي معلومات تتعلق بالأشخاص الطبيعيين الذين يمكن تحديد هوياتهم، بشكل مباشر أو غير مباشر، خاصة بالرجوع إلى سمة تعريف مثل الاسم أو رقم التعريف أو معلومات عن الموقع أو معرف الإنترنت، أو واحدة أو أكثر من العوامل المحددة لهذا الشخص الطبيعي؛ المشار اليها فيما بعد &nbsp;بـ &quot;البيانات الشخصية&quot;).</p>\r\n\r\n<p>وبشكل محدد، ستوضح سياسة الخصوصية هذه ما يلي:</p>\r\n\r\n<p>لماذا نقوم بجمع ومعالجة بياناتك الشخصية وكيف نستخدمها؛<br />\r\nعلى أي أساس قانوني نقوم بمعالجة بياناتك الشخصية؛<br />\r\nمن يمكنه الولوج إلى بياناتك الشخصية؛<br />\r\nأين يمكن تخزين أو نقل بياناتك الشخصية؛<br />\r\nكيف نحمي أمن بياناتك الشخصية؛<br />\r\nإلى متى نقوم بالاحتفاظ ببياناتك الشخصية؛<br />\r\nما الحق الذي يمكن أن تمارسه فيما يتعلق ببياناتك الشخصية بموجب القوانين واللوائح الحالية؛<br />\r\nكيفية الاتصال بنا.<br />\r\nتطبق سياسة الخصوصية هذه على جميع الخدمات التي تعرضها وتقدمها أكسب تك على مواقعها الإلكترونية.</p>\r\n\r\n<p>يمكن أيضا إرسال إشعارات خاصة أخرى تسلط الضوء على استخدامات معينة نرغب إجرائها على بياناتك الشخصية بالإضافة إلى إمكانية الاشتراك أو إلغاء استخدامات محددة على أساس كل حالة على حدة، بما في ذلك الخدمات الجديدة أو خدمات أخرى قد يكون لها سياسة خصوصية خاصة بها.</p>\r\n\r\n<p>يرجى الملاحظة أن في المملكة العربية السعودية يجب أن يكون عمرك 18 عاما أو أكثر للاشتراك في خدمات أكسب تك , قد يكون سن الرشد أقل من 18 عاما، وفي هذه الحالة يجب عليك بلوغ هذا السن حتى تتمكن من الاشتراك أو موافقة أحد الوالدين أو الوصي الشرعي الاستفادة من خدمات أكسب تك .</p>\r\n\r\n<p>تعريفات رئيسية لسياسة الخصوصية:</p>\r\n\r\n<p>&quot;أنا&quot;، &quot;لنا&quot;، أو &quot;نحن&quot; تشير إلى أكسب تك .<br />\r\n&quot;أنت&quot;، أو &quot;المستخدم&quot; تشير إلى الشخص (العملاء) الذي يستخدم خدمات أكسب تك .<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>لماذا نقوم بجمع ومعالجة بياناتك الشخصية؟<br />\r\nنقوم بجمع ومعالجة بياناتك الشخصية للأغراض التالية:</p>\r\n\r\n<p>لتزويدك بالخدمات التي تطلبها منا؛ للسماح لك باستخدام المدونات والاستطلاعات، بما في ذلك خدمات أكسب تك التي لا تتطلب أي شكل من أشكال التسجيل؛ وللسماح لك بالتسجيل في خدمات معينة،<br />\r\nمثل الخدمات المقدمة أو موجز المعلومات أو تحديثات الرسائل النصية القصيرة أو واتساب ، وفي هذه الحالة سوف نطلب منك بيانات شخصية مثل اسمك أو عنوان بريدك الإلكتروني أو رقم جوالك,&nbsp;<br />\r\nللسماح لك بمشاركة المعلومات؛ للسماح لك من الاستفادة بشكل تام من مميزات المشاركة التي نقدمها مثل المشاركة في مدونات والتفاعل ؛&nbsp;</p>\r\n\r\n<p>وللسماح لك بإنشاء حساب تعريفي يمكن رؤيته من قبل العامة على أكسب تك ، والذي قد يشمل &ndash; إن اخترت ذلك &ndash; على اسمك وصورتك؛ ولضم معلوماتك الشخصية التي حصلنا عليها من خلال إحدى الخدمات مع المعلومات التي جمعناها من خدمات أخرى مقدمة من أكسب تك لتسهيل مشاركة بعض الأشياء مع الأشخاص الذين تعرفهم.<br />\r\n&nbsp;</p>\r\n\r\n<p>للحفاظ على خدماتنا وتحسينها؛ لفهم كيفية استخدامك لخدمات أكسب تك وتطبيق وظائف أخرى؛ ولتطوير خدمات وعروض جديدة.<br />\r\n&nbsp;</p>\r\n\r\n<p>لمنحك خدمات خاصة باحتياجاتك واهتماماتك وأعمالك ؛ لتزويدك بمحتوى مخصص مثل التصاميم والبرمجيات و الإعلانات والخدمات ذات الصلة؛ والسماح لنا بمعرفتك بشكل أفضل لمنحك المزيد من الخدمات التي تطلبها المزيد من العروض والعروض الحصرية والمعلومات ولمنحك تجربة أفضل كمستخدم؛ وللكشف عن أشياء أكثر تعقيدا مثلا إي التسويق قد تجدها أكثر فائدة أو أي الخدمات والمعلومات أكثر ملاءمة لك، مما يمنحك تجربة أفضل وأكثر إفادة لممتلكاتنا الرقمية.<br />\r\n&nbsp;</p>\r\n\r\n<p>لتنفيذ معاملات الدفع؛ لتخزين سجل المعاملات؛ والتأكد من دفع رسوم اشتراكك في خدماتنا؛ والامتثال للالتزام القانوني أو التنظيمي بهذا الصدد.<br />\r\n&nbsp;</p>\r\n\r\n<p>للتواصل معك؛ للسماح لك بالاتصال أكسب تك ؛ والاحتفاظ بسجل محادثاتنا؛ ولمساعدتك على حل أية مسائل قد تواجهها؛ ولإرسال العروض الترويجية والتسويق المباشر لك؛ ولإخبارك عن خدماتنا مثل تزويدك بمعلومات عن برامج مقبلة أو إضافة تعديلات على ممتلكاتنا الرقمية؛ وللاتصال بك للمنافسة والمشاركة في العروض المختلفة.<br />\r\n&nbsp;</p>\r\n\r\n<p>لإنشاء وللحفاظ على بيئة موثوقة وآمنة؛ التحقيق أو كشف أو منع أو الإبلاغ عن الاحتيال أو التحريفات أو الانتهاكات أو الحوادث الأمنية أو غيرها من الأنشطة المحظورة أو غير القانونية المحتملة؛ ولحماية بائعينا وحقوقك وأمان وسلامة خدماتنا؛ ولتطبيق شروط الخدمة الخاصة بنا أو غيرها من الاتفاقيات أو السياسات؛ وللتحقق من هويتك.<br />\r\n&nbsp;</p>\r\n\r\n<p>الامتثال لأية قوانين أو أنظمة سارية؛ أو الاستجابة لطلبات قانونية للحصول على معلومات من الحكومة أو من خلال الإجراءات القانونية؛ ولتحقيق أي غرض آخر يتم الإفصاح عنه لك فيما يتعلق بخدماتنا؛ والاتصال بك لحل النزاعات وتقديم المساعدة في خدماتنا.<br />\r\n&nbsp;</p>\r\n\r\n<p>على أي أساس قانوني نقوم بمعالجة بياناتك الشخصية؟<br />\r\nبناءً على نوع البيانات التي سيتم معالجتها، سنقوم بمعالجة بياناتك الشخصية على أحد الأسس التالية:</p>\r\n\r\n<p>موافقتك المسبقة: على سبيل المثال، عندما نعرض عليك التسجيل في خدماتنا وإنشاء حساب لك، أو الاشتراك في رسائلنا الإخبارية أو رسائل البريد الإلكتروني التسويقية أو عندما نطلب منك اتباع أي إجراء ذو صلة يتيح لك إما قبول أو رفض معالجة البيانات المتوخاة بوضوح؛ في حال قبولك، يحق لك سحب موافقتك في أي وقت. ومع ذلك، وفي بعض الحالات، إن اختيارك لعدم الإفصاح عن بياناتك الشخصية أو سحب موافقتك قد يؤدي إلى الحد من إستخدامك لخدماتنا أو ميزاتنا أو عروضنا. على سبيل المثال، قد لا يكون بإمكانك الولوج إلى أجزاء معينة على مواقعنا الإلكترونية والرد على استفساراتك دون تقديم المعلومات ذات الصلة.<br />\r\n&nbsp;</p>\r\n\r\n<p>علاقة تعاقدية: في مثل هذه الحالة، إن معالجة بياناتك الشخصية ضروري بشكل عام لتنفيذ أو إنجاز العقد؛ مما يعني أنه في حال عدم رغبتك بقيامنا بمعالجة بياناتك الشخصية في هذا السياق، قد نرفض الدخول في مثل هذا العقد معك.<br />\r\n&nbsp;</p>\r\n\r\n<p>مصلحة مشروعة: بمعنى قانون حماية البيانات: على سبيل المثال عند تطبيق المراقبة أو أجهزة التعقب التي تشير إلى معالجة البيانات الشخصية للكشف عن عمليات الاحتيال والتطفل عبر الإنترنت ومنعها. مثلا عندما تقوم بالوصول إلى وزيارة مواقعنا الإلكترونية، حتى بدون إنشاء حساب، والاستفادة من الخدمات التي تقدمها أكسب تك و/أو الممتلكات الرقمية أكسب تك ، فإنك تقر بأننا قد نقوم بتنفيذ معالجة شرعية للبيانات كما هو موضح في سياسة الخصوصية هذه. إن كنت لا توافق على هذه السياسة، فقد ترغب في التوقف عن مشاهدة / استخدام مواقعنا الإلكترونية.<br />\r\n&nbsp;</p>\r\n\r\n<p>الالتزامات القانونية المطبقة على أنشطتنا.<br />\r\n&nbsp;</p>\r\n\r\n<p>من يمكنه الوصول إلى بياناتك الشخصية:<br />\r\nللأغراض الموضحة أعلاه، سنمنح إمكانية الوصول إلى بياناتك الشخصية لموظفي أكسب تك المرخصين وأعضاء أكسب تك الذين يحتاجون إلى معرفة تلك المعلومات من أجل معالجتها لمصلحتنا، والذين يخضعون لالتزامات تعاقدية سرية صارمة وقد يتم تأديبهم وحتى إنهاء تعاملنا معهم في حال أخفقوا في تنفيذ هذه الالتزامات.&nbsp;</p>\r\n\r\n<p>بالإضافة إلى ذلك، قد نحتاج إلى نقل أو السماح لطرف ثالث معتمد بالوصول إلى بياناتك الشخصية وهم:</p>\r\n\r\n<p>الموردين ومزودي الخدمات الذين نتعامل معهم لمعالجة البيانات الشخصية أو تنفيذ خدمات أكسب تك بالنيابة عنا (بناءً على تعليماتنا وتبعا لسياسة الخصوصية الخاصة بنا وغيرها من التدابير الأمنية والسرية المناسبة)؛<br />\r\n&nbsp;</p>\r\n\r\n<p>الخلفاء في ملكية الشركة او أعمالنا (أو في مناقشات جدية حول مثل هذا الاحتمال مع المالكين الجدد (المحتملين) للأعمال أو الشركة)؛ في هذا الصدد إذا تغيرت ملكية الشركة أو جميع أعمالنا أو جزء كبير منها أو تمت عملية إعادة تنظيم الشركة أو أي إجراء آخر أو تنقلات بين كيانات تابعة أكسب تك ، فإنك تقر وتقبل بأننا قد نحتاج إلى نقل بياناتك الشخصية إلى الطرف الثالث ذو الصلة (أو المستشارين) كجزء من أي عملية لغرض تحليل إي عرض بيع &nbsp;مقترح أو إعادة تنظيم للمالك الجديد. قد نحتاج أيضا إلى نقل بياناتك الشخصية إلى تلك الجهة المعاد تنظيمها أو الطرف الثالث بعد عملية البيع أو إعادة تنظيم بياناتك الشخصية لاستخدامها لنفس الأغراض الموضحة في سياسة الخصوصية هذه؛<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n\r\n<p>ممثلي وكلائنا الإعلاميين؛<br />\r\n&nbsp;</p>\r\n\r\n<p>المستشارون القانونيون والشهود والخبراء والسلطات القضائية وشبه القضائية من أجل حماية المجموعة من أي أذى لحقوقها وممتلكاتها أو سلامتها، وحماية مستخدمينا أو الجمهور وأي طرف ثالث على النحو المطلوب أو المسموح به بموجب القانون، وفرض الشروط اللازمة للخدماتنا، بما في ذلك التحقيق في الانتهاكات المحتملة؛<br />\r\n&nbsp;</p>\r\n\r\n<p>السلطات الإدارية أو القضائية من أجل تلبية متطلبات أي قانون ساري المفعول ونظام وإجراء قانوني أو طلب حكومي واجب النفاذ.<br />\r\nقد نقوم أيضا بتجميع بيانات مجهولة للعموم ولطرف ثالث وشركاء معتمدين آخرين - مثل شركات الإعلان أو المواقع المتصلة. على سبيل المثال قد نشارك المعلومات للعامة لعرض مؤشرات حول الاستخدام العام لخدماتنا.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>أين يمكن تخزين أو نقل بياناتك الشخصية؟<br />\r\nأكسب تك تابعة لمجموعة إيلاف زد للتجارة والتسويق دولية مع شركات تابعة لها وشركاء ومقاولين موجودين في العديد من الدول حول العالم.</p>\r\n\r\n<p>ولهذا السبب، قد نحتاج إلى نقل بياناتك الشخصية إلى بلدان أخرى، بما في ذلك النطاق خارج المنطقة الاقتصادية الأوروبية، وإلى بلدان قد تكون قوانين حماية البيانات فيها أقل من تلك الموجودة في بلدك. على سبيل المثال، قد نقوم بمعالجة بياناتك الشخصية على خادم يقع خارج الدولة التي تقيم فيها ولهذا الغرض قد نقوم بنقل بياناتك الشخصية إلى خارج دولة إقامتك.</p>\r\n\r\n<p>من أجل ضمان مستوى كاف وثابت من الحماية لبياناتك الشخصية، سنستمر بتنفيذ بشكل دائم الضمانات المناسبة لحماية بياناتك الشخصية.</p>\r\n\r\n<p>لمزيد من المعلومات يرجى الاتصال بنا كما هو موضح في الفقرة &quot;كيفية الاتصال بنا&quot;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>كيف نحمي أمن بياناتك الشخصية؟<br />\r\nنحن نتبع إجراءات أمنية مادية وإلكترونية وتقنية وتدابير أمنية وتنظيمية مناسبة، بما في ذلك نماذج الحكومية لحماية بياناتك الشخصية وفقا لقانون حماية البيانات من الوصول غير المصرح به إلى البيانات الشخصية أو استخدامها أو تغييرها أو الإفصاح عنها أو إتلافها.</p>\r\n\r\n<p>يرجى الملاحظة أنه لا يمكن ضمان نقل أية بيانات عبر الإنترنت أو الموقع الإلكتروني من دون أي تدخل. بالإضافة إلى ذلك، عليك أيضا اتخاذ الإجراءت المناسبة لحماية بياناتك الشخصية خاصة من خلال الحفاظ على كلمة المرور وسريتها. إن كنت تعلم أو لديك شكوك بأن بيانات اعتماد حسابك قد ضاعت أو تمت سرقتها أو اختلست أو تعرضت لأية مخاطر أخرى أو في حال وجود أي استخدام غير مصرح به فعليا لحسابك، يُرجى منك الاتصال بنا باتباع التعليمات الواردة في الفقرة &quot;كيفية الاتصال بنا&quot; أدناه.</p>\r\n\r\n<p>إن كنا نعلم أو لدينا سبب للاعتقاد أن بياناتك الشخصية قد تعرضت للاختراق، سوف نقوم فورا بإبلاغ المستخدمين المتضررين من حدوث خرق وفقا للقوانين المعمول بها.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ما هي مدةالاحتفاظ ببياناتك الشخصية؟<br />\r\nسوف نقوم بالاحتفاظ ببياناتك الشخصية طالما أن حسابك ناشط، أو طالما كان ذلك ضروريا للغرض الذي تم جمع البيانات من أجله أساسا. مدة اللإحتفاظ هذه قد تصل إلى 10 سنوات. وتستند فترات الاحتفاظ لدينا على احتياجات أنشطتنا، والمعلومات الخاصة بك التي لم يعد هناك حاجة لها يتم تحويلها لمعلومات مجهولة بشكل قاطع أو تدميرها.</p>\r\n\r\n<p>نهدف إلى الحفاظ على خدماتنا بطريقة تحمي المعلومات من التدمير العرضي أو الضار. ولهذا السبب، بعد حذف المعلومات من خدماتنا، قد لا نقوم فورا بحذف النسخ المتبقية من خوادمنا النشطة وقد لا نزيل المعلومات من أنظمة النسخ الاحتياطي الخاصة بنا.</p>\r\n\r\n<p>يجوز لنا أيضا الاحتفاظ ببياناتك الشخصية لفترات أطول إذا لزم الأمر للامتثال لالتزاماتنا القانونية أو لحماية مصالحنا المشروعة.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>كيفية الوصول إلى وتحديث وحذف بياناتك الشخصية؟<br />\r\nبموجب قانون حماية البيانات يحق لك ممارسة الحقوق التالية:</p>\r\n\r\n<p>الحق في الوصول إلى بياناتك الشخصية، وفي هذه الحالة قد نوفر لك نسخة عن هذه البيانات، إن لم يكن ذلك متاحا لك مباشرة، على سبيل المثال ضمن حسابك الشخصي؛<br />\r\n&nbsp;</p>\r\n\r\n<p>الحق في تعديل بياناتك الشخصية، إن كانت بياناتك غير دقيقة أو قديمة؛ في هذا الصدد، من المهم أن تكون البيانات الشخصية التي نحتفظ بها عنك دقيقة وحديثة. يرجى إطلاعنا في حال حدث أي تغيير على بياناتك الشخصية خلال الفترة التي نحتفظ بها بمعلوماتك؛<br />\r\n&nbsp;</p>\r\n\r\n<p>الحق في سحب الموافقة، حيث تعتمد المعالجة على موافقتك المسبقة وسحب موافقتك على جميع عمليات التسويق؛<br />\r\n&nbsp;</p>\r\n\r\n<p>الحق على الاعتراض على معالجة بياناتك الشخصية، حيث تعتمد المعالجة على مصالحنا المشروعة، بقدر ما يسمح له موقفك؛<br />\r\n&nbsp;</p>\r\n\r\n<p>الحق في مسح البيانات الشخصية الخاصة بك؛<br />\r\n&nbsp;</p>\r\n\r\n<p>الحق في تقييد معالجة البيانات الشخصية الخاصة بك؛<br />\r\n&nbsp;</p>\r\n\r\n<p>الحق في تلقي بياناتك الشخصية لإرسالها إلى طرف ثالث أو لنقل بياناتك الشخصية إلى طرف ثالث من اختيارك إن كان ذلك ممكنا تقنيا؛<br />\r\n&nbsp;</p>\r\n\r\n<p>الحق في تقديم شكوى لدى هيئة مختصة بحماية البيانات إذا اعتبرت أن معالجة بياناتك الشخصية قد انتهك قانون حماية البيانات.<br />\r\nيمكنك إرسال طلب لنا بهذا الشأن في أي وقت كما هو موضح في قسم &quot;كيفية الاتصال بنا&quot;.</p>\r\n\r\n<p>يرجى ملاحظة ما يلي:</p>\r\n\r\n<p>قد نحتاج إلى التحقق من هويتك قبل أن نتصرف بناء على طلبك؛<br />\r\n&nbsp;</p>\r\n\r\n<p>بما أن ممارسة هذه الحقوق تخضع لشروط وقيود قانونية معينة، قد نضطر إلى رفض طلبك إذا لم يتم استيفاء هذه الشروط أو في حال وجود قيود قانونية؛<br />\r\n&nbsp;</p>\r\n\r\n<p>قد نقوم برفض طلبات متكررة بدون سبب معقول، وتتطلب جهدا فنيا (على سبيل المثال تطوير نظام جديد أو تغيير أساسي للممارسات الحالية)، أو تشكيل خطر على خصوصية الآخرين.<br />\r\nعلى أية حال، سنسعى إلى التعامل بشكل فوري مع طلبك خلال شهر واحد (خاضعا لأية تمديدات نحققها قانونيا). إذا قمنا برفض طلبك، سوف نخبرك بالأسباب.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>كيف نقوم باستخدام الكوكيز (Cookies)؟<br />\r\nالكوكي هي جزء صغير من المعلومات التي يرسلها خادم الويب إلى متصفح الويب، مما يتيح للخادم جمع المعلومات من المتصفح. تسمح لك معظم المتصفحات بإيقاف تشغيل الكوكيز. إن كنت ترغب بمعرفة كيف يمكنك القيام بذلك، يرجى الاطلاع على قائمة المساعدة على المتصفح الخاص بك. ومع ذلك، إن بعض الكوكيز مهمة لنا حتى نتمكن من تزويدك بخدمات أكسب تك التي طلبتها وسوف يؤدي إيقاف الكوكيز إلى الحد من استخدامك لملكياتنا الرقمية.</p>\r\n\r\n<p>على سبيل المثال، نحن نقوم بتخزين الكوكيز والتقنيات المشابهة ونستخدمها:</p>\r\n\r\n<p>لتحسين تجربتك كمستخدم وضمان الجودة الشاملة لخدمات أكسب تك ؛<br />\r\n&nbsp;</p>\r\n\r\n<p>للتعرف عليك عند زيارتك المواقع الالكترونية الرقمية الخاصة بنا؛<br />\r\n&nbsp;</p>\r\n\r\n<p>لمتابعة ودراسة أنماط التصفح والتنقل الخاصة بك في الموقع الإلكتروني، ولإنشاء ملفك الديموغرافي وتزويدك بالخدمة الأكثر ملاءمة لذوقك (توصيات أكثر ملاءمة وعروض ذات صلة لما يحلو لك)؛<br />\r\n&nbsp;</p>\r\n\r\n<p>لتحليل عادات استهلاك المحتوى (على سبيل المثال، البرامج التي يتم مشاهدتها وقراءة المحتوى والأجهزة المستخدمة إلخ.) ولتوفير وتخصيص وقياس وتحسين إعلاناتنا وتسويقنا؛<br />\r\n&nbsp;</p>\r\n\r\n<p>لتقديم المحتوى المناسب المسموح به في كل منطقة جغرافية استنادا إلى حقوق الملكية الفكرية المرخصة لنا؛<br />\r\n&nbsp;</p>\r\n\r\n<p>لمشاركة بعض البيانات لتوفير الإعلان المخصص بك وإرسال مواد التسويق والرسائل الإخبارية.<br />\r\n&nbsp;</p>\r\n\r\n<p>كما نقوم بتبادل معلومات حول استخدامك لموقعنا مع وسائل التواصل الاجتماعية وشركائنا في الإعلانات والإحصاءات الذين قد يقومون بدمجها مع معلومات أخرى قدمتها لهم أو التي جمعوها من استخدامك لخدماتهم.</p>\r\n\r\n<p>بإستخدامك خدمات أكسب تك أنت توافق على ملفات الكوكي الخاصة بنا. لمعرفة المزيد حول كيفية استخدامنا للكوكيز، يرجى الإتصال بنا كما هو موضح في قسم &quot;كيفية الاتصال بنا&quot;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>كيف تطبق سياسة الخصوصية هذه مع معالجة بيانات من طرف ثالث؟<br />\r\nقد يتم توفير خدمات أكسب تك من خلال و/أو الاستفادة من الميزات (مثل عناصر التحكم في الصوت) التي تشغلها منصات تابعة لطرف ثالث، أو تحتوي على روابط لمواقع يشغلها طرف ثالث قد تختلف سياساته المتعلقة بمعالجة البيانات الشخصية عن تلك السياسات الخاصة بنا.</p>\r\n\r\n<p>فمثلا:</p>\r\n\r\n<p>قد تتمكن من الوصول إلى خدمات أكسب تك من خلال منصات مثل أنظمة الألعاب وأجهزة التلفزيون الذكية وأجهزة الجوال وأجهزة فك التشفير وعدد آخر من الأجهزة المتصلة بالإنترنت. بالإضافة إلى ذلك، قد تواجه تطبيقات تابعة لطرف ثالث تتفاعل مع خدمات أكسب تك . هذا الطرف الثالث لديه خصوصية وسياسات بيانات الشخصية المنفصلة والمستقلة.<br />\r\n&nbsp;</p>\r\n\r\n<p>قد تحتوي مواقعنا الرقمية على روابط لمواقع الكترونية أخرى خارجة عن سيطرتنا ولا تغطيها سياسة الخصوصية هذه. في حال قمت بالدخول إلى مواقع أخرى من خلال استخدام الروابط المتاحة، يمكن لمشغلي تلك المواقع جمع معلومات منك واستخدامها وفقا لسياسات الخصوصية الخاصة بهم، والتي قد تختلف عن تلك الخاصة بنا.<br />\r\nندعوك لمراجعة هذه السياسات والشروط إن كنت ترغب في الاستفسار عن معالجة بياناتك الشخصية من قبل طرف ثالث.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>كيفية الاتصال بنا؟<br />\r\nإن كان لديك أي استفسارات أخرى يرجى الاتصال بنا على البريد الإلكتروني التالي:</p>\r\n\r\n<p>support@aksabtech.com</p>\r\n\r\n<p>كيف يمكن تحديث سياسة الخصوصية هذه؟<br />\r\nقد نقوم بتحديث سياسة الخصوصية هذه من وقت لآخر استجابة للمتطلبات القانونية أو التنظيمية أو التشغيلية. سيتم نشر أي تغييرات في سياسة الخصوصية هذه على هذه الصفحة. عندما تكون هذه التغييرات مادية، قد نوفر لك إخطارا محددا بأية تغييرات من هذا القبيل (بما في ذلك موعد دخولها حيز التنفيذ) وفقا للقانون.</p>\r\n\r\n<p>حيثما ينطبق ذلك (على سبيل المثال، إن كانت التغييرات تتطلب معالجة بيانات جديدة تعتمد على موافقتك المسبقة) سوف نتأكد أنه قد أتيحت لك إمكانية قبول هذه التغييرات حتى تتمكن من مواصلة استخدام خدماتنا أو رفضها - في هذه الحالة يحق لك إلغاء استخدامك لخدمات أكسب تك.</p>\r\n\r\n<p>تم تحديث سياسة الخصوصية هذه في 7 سبتمبر 2020.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>أكسب تك&copy; جميع الحقوق محفوظة أكسب تك 2020</p>','<p><strong>الشروط والاحكام الخدمة</strong><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>نظرة عامة<br />\r\nبسم الله الرحمن الرحيم , الحمدلله وعلى الصلاة على نبي الله وبعد&nbsp;<br />\r\nيتم تشغيل هذا الموقع من قبل أكسب تك.</strong></p>\r\n\r\n<p><strong>في جميع أنحاء الموقع ، تشير المصطلحات &quot;نحن&quot; و &quot;نحن&quot; و &quot;خاصتنا&quot; إلى أكسب تك.</strong></p>\r\n\r\n<p><strong>أكسب تك يقدم هذا الموقع ، بما في ذلك جميع المعلومات والأدوات والخدمات المتاحة من هذا الموقع لك ، للمستخدم ، بشرط موافقتك على جميع الشروط والأحكام والسياسات والإشعارات الواردة هنا.</strong></p>\r\n\r\n<p><strong>من خلال زيارة موقعنا و / أو طلب مشروع &nbsp;منا ، فإنك تشارك في &quot;الخدمة&quot; الخاصة بنا وتوافق على الالتزام بالشروط والأحكام التالية (&quot;شروط الخدمة&quot; ، &quot;الشروط&quot;) ، بما في ذلك تلك الشروط والأحكام والسياسات الإضافية المشار إليه هنا و / أو متاح من خلال ارتباط تشعبي. تنطبق شروط الخدمة هذه على جميع مستخدمي الموقع ، بما في ذلك على سبيل المثال لا الحصر المستخدمين من المتصفحات و / أو العملاء و / أو صاحب المشروع .</strong></p>\r\n\r\n<p><strong>يرجى قراءة شروط الخدمة هذه بعناية قبل الوصول إلى موقعنا الإلكتروني أو مكاتبنا. من خلال الوصول إلى أو استخدام أي جزء من الموقع ، فإنك توافق على الالتزام بشروط الخدمة هذه. إذا كنت لا توافق على جميع شروط وأحكام هذه الاتفاقية ، فلا يجوز لك الوصول إلى موقع الويب أو استخدام أي خدمات أكسب تك. إذا كانت شروط الخدمة هذه بمثابة عرض ، فإن القبول يقتصر صراحةً على شروط الخدمة هذه.</strong></p>\r\n\r\n<p><strong>تخضع أي ميزات أو أدوات جديدة تضاف إلى الموقع الحالي لشروط الخدمة أيضًا. يمكنك مراجعة أحدث إصدار من شروط الخدمة في أي وقت على هذه الصفحة. نحتفظ بالحق في تحديث أو تغيير أو استبدال أي جزء من شروط الخدمة هذه عن طريق نشر التحديثات و / أو التغييرات على موقعنا. تقع على عاتقك مسؤولية مراجعة هذه الصفحة بشكل دوري لمعرفة التغييرات. استمرار استخدامك أو الوصول إلى موقع الويب بعد نشر أي تغييرات يشكل قبولًا لهذه التغييرات.</strong></p>\r\n\r\n<p><strong>القسم 1 - شروط الخدمات أكسب تك&nbsp;</strong></p>\r\n\r\n<p><strong>بالموافقة على شروط الخدمة هذه ، فإنك تقر بأنك تبلغ سن الرشد وسلمت لنا فكرتك و / أو أنك منحتنا موافقتك على السماح تزويد الخدمات مقدمة لك من أكسب تك.&nbsp;</strong></p>\r\n\r\n<p><strong>لا يجوز لك استخدام خدماتنا لأي غرض غير قانوني أو غير مصرح به ولا يجوز لك في استخدام الخدمة انتهاك أي قوانين المملكة العربية السعودية (بما في ذلك على سبيل المثال لا الحصر قوانين حقوق النشر وحقوق الملكية الفكرية ).</strong></p>\r\n\r\n<p><strong>يجب ألا تنقل أي فيروسات متنقلة أو فيروسات أو أي رمز ذي طبيعة مدمرة.</strong></p>\r\n\r\n<p><strong>سيؤدي خرق أو انتهاك أي من الشروط إلى الإنهاء الفوري لخدماتك &nbsp;.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 2 - الشروط العامة</strong></p>\r\n\r\n<p><strong>نحتفظ بالحق في رفض الخدمة لأي شخص لأي سبب وفي أي وقت.</strong></p>\r\n\r\n<p><strong>أنت تدرك أن المشروع و / أو الفكرة الخاص بك&nbsp;<br />\r\nتحتاج منا (دراسة لقسم المختص لا يشمل الرسوم ولا نتحمل اي مسؤلية لمعلوماتك بعد رفض الخدمة مقدمة لك &nbsp;) ، اذا كان هنا أعمال من قبل شركات لم يتم تنفيذ أعمالك بشكل المطلوب ونحن نقبل منك بشروط قد يتم نقله بدون تشفير ويتضمن (أ) عمليات نقل عبر سحاب شبكات مختلفة ؛ و (ب) التغييرات للتوافق والتكيف مع المتطلبات الفنية أو البرمجية أو المعلوماتية &nbsp;لتوصيل الشبكات أو الاستضافة. ونحن دائمًا نشفر معلومات الخاصة مثل &nbsp;بطاقة الائتمان أثناء النقل عبر الشبكات او رموز الخاصة مثل الاكواد البرمجية .</strong></p>\r\n\r\n<p><strong>أنت توافق على عدم إعادة إنتاج أو تكرار أو نسخ أو بيع أو إعادة بيع أو استغلال أي جزء من الخدمة أو استخدام الخدمة أو الوصول إلى الخدمة أو أي جهة اتصال على الموقع الإلكتروني يتم تقديم الخدمة من خلالها ، دون إذن كتابي صريح من جانبنا. .</strong></p>\r\n\r\n<p><strong>تم تضمين العناوين المستخدمة في هذه الاتفاقية للراحة فقط ولن تحد أو تؤثر على هذه الشروط.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 3 - دقة المعلومات واكتمالها وحداثتها<br />\r\nنحن لسنا مسؤولين إذا كانت المعلومات المتوفرة ناقصة او متضللة او انتهك حقوق النشر او حقوق الملكية الفكرية .<br />\r\n&nbsp;على هذا الاساس أن الموقع غير دقيقة أو كاملة أو حديثة. يتم توفير الخدمات الموجودة على هذا الموقع للحصول على معلومات عامة فقط ولا ينبغي الاعتماد عليها أو استخدامها كأساس وحيد لاتخاذ القرارات دون استشارة ممثلي خدمة عملاء المختصين أو &nbsp;مصادر المعلومات الأولية أو الأكثر دقة أو الأكثر اكتمالًا أو في الوقت المناسب. أي اعتماد على الخدمات الموجودة على هذا الموقع هو على مسؤوليتك الخاصة.<br />\r\nقد يحتوي هذا الموقع على معلومات تاريخية معينة. المعلومات التاريخية ، بالضرورة ، ليست حديثة ويتم توفيرها للرجوع إليها فقط. نحن نحتفظ بالحق في تعديل محتويات هذا الموقع في أي وقت ، لكننا لسنا ملزمين بتحديث أي معلومات على موقعنا. أنت توافق على أنه من مسؤوليتك مراقبة التغييرات على موقعنا.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 4 - تعديلات على الخدمة والأسعار<br />\r\nأسعار خدماتنا عرضة للتغيير دون إشعار.<br />\r\nنحن نحتفظ بالحق في أي وقت في تعديل أو إيقاف الخدمة (أو أي جزء أو محتوى منها) دون إشعار في أي وقت.</strong></p>\r\n\r\n<p><strong>لن نكون مسؤولين تجاهك أو تجاه أي طرف ثالث عن أي تعديل أو تغيير في البرمجة والتصاميم و الأسعار أو تعليق أو وقف للخدمة.</strong></p>\r\n\r\n<p><strong>القسم 5 - الخدمات أو الخصومات (إن وجدت)</strong></p>\r\n\r\n<p><strong>قد تتوفر بعض الخدمات حصريًا عبر الإنترنت من خلال موقع الويب. قد يكون لهذه الخدمات خصومات محدودة وتخضع للتعديلات أو الاضافات فقط وفقًا لسياسة التعديل الخاصة بنا.</strong></p>\r\n\r\n<p><strong>لقد بذلنا قصارى جهدنا لعرض ألوان وصور تصاميمنا وأعمالنا التي تظهر في الموقع بأكبر قدر ممكن من الدقة. لا يمكننا ضمان دقة عرض شاشة الكمبيوتر لأي لون.</strong></p>\r\n\r\n<p><strong>نحن نحتفظ بالحق ، ولكننا لسنا ملزمين ، بالحد من مبيعات منتجاتك أو خدماتنك لأي شخص أو منطقة أو قضائية. يجوز لنا ممارسة هذا الحق على أساس كل حالة على حدة. نحتفظ بالحق في التسويق تحديد كميات أي منتجات أو خدمات نقدمها. جميع أوصاف الخدمات أو أسعار التسويق والخدمات عرضة للتغيير في أي وقت دون إشعار ، وفقًا لتقديرنا الخاص. نحن نحتفظ بالحق في إيقاف أي خدمات أو تسويق في أي وقت. يعتبر أي عرض لأي خدمة أو تسويق &nbsp;يتم تقديمه على هذا الموقع باطلاً إذا كان محظورًا.</strong></p>\r\n\r\n<p><strong>نحن لا نضمن أن جودة أي منتجات أو خدمات أو معلومات أو مواد أخرى تم تسليمها أو الحصول عليها من قبلك ستفي بتوقعاتك ، أو أنه سيتم تصحيح أي أخطاء في الخدمة.</strong></p>\r\n\r\n<p><strong>القسم 6 - دقة العقود ومعلومات الحساب</strong></p>\r\n\r\n<p><strong>نحتفظ بالحق في رفض أي مشروع &nbsp;تقدمه إلينا. يجوز لنا ، وفقًا لتقديرنا الخاص ،<br />\r\n&nbsp;تحديد أو إلغاء العقود المبدئي لدراسة المشروع قسم التحليل الانظمة والتخطيط التصاميم واعمال وخدمات لكل شخص أو لكل شركة &nbsp;أو لكل مشروع. قد تشمل هذه القيود المشروع المقدمة من قبل أو تحته نفس حساب العميل متواجد لدينا . في حالة قيامنا بإجراء تغيير أو إلغاء مشروع ، فقد نحاول إخطارك عن طريق الاتصال بالبريد الإلكتروني و / أو رقم الجوال المقدم في وقت تقديم المشروع. نحن نحتفظ بالحق في تقييد أو حظر المشروع التي ، في حكمنا الوحيد ، يبدو أنها مقدمة من طرف آخر .</strong></p>\r\n\r\n<p><strong>أنت توافق على تقديم معلومات الحالية والكاملة والدقيقة لجميع الخدمات التي تتم في موقعنا. أنت توافق على تحديث حسابك والمعلومات الأخرى على الفور ، بما في ذلك عنوان بريدك الإلكتروني وأرقام الاتصال ، حتى نتمكن من إكمال معاملاتك والاتصال بك حسب الحاجة.</strong></p>\r\n\r\n<p><strong>لمزيد من التفاصيل ، يرجى مراجعة سياسة التعديل والتطوير الخاصة بنا.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 7 - الأدوات الاختيارية</strong></p>\r\n\r\n<p><strong>قد نوفر لك إمكانية الوصول إلى أدوات الجهات الخارجية التي لا نراقبها ولا نملك أي تحكم أو مدخلات.</strong></p>\r\n\r\n<p><strong>أنت تقر وتوافق على أننا نوفر الوصول إلى هذه الأدوات &quot;كما هي&quot; و &quot;كما هي متوفرة&quot; دون أي ضمانات أو إقرارات أو شروط من أي نوع ودون أي مصادقة. لن نتحمل أي مسؤولية من أي نوع تنشأ عن أو تتعلق باستخدامك لأدوات اختيارية تابعة لجهات خارجية.</strong></p>\r\n\r\n<p><strong>إن أي استخدام من جانبك للأدوات الاختيارية المقدمة من خلال الموقع يكون على مسؤوليتك الخاصة وتقديرك تمامًا ويجب عليك التأكد من أنك على دراية بالشروط التي يتم توفير الأدوات من خلالها والموافقة عليها من قبل موفر (موفري) الطرف الثالث ذي الصلة.</strong></p>\r\n\r\n<p><strong>قد نقدم أيضًا ، في المستقبل ، خدمات و / أو ميزات جديدة من خلال موقع الويب (بما في ذلك ، إصدار أدوات وموارد جديدة ). تخضع هذه الميزات و / أو الخدمات الجديدة أيضًا لشروط الخدمة هذه.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 8 - روابط الطرف الثالث</strong></p>\r\n\r\n<p><strong>قد تشتمل بعض المحتويات والمنتجات والخدمات المتوفرة عبر خدمتنا على مواد من أطراف ثالثة.</strong></p>\r\n\r\n<p><strong>قد توجهك روابط الجهات الخارجية الموجودة على هذا الموقع إلى مواقع ويب تابعة لجهات خارجية غير تابعة لنا. نحن لسنا مسؤولين عن فحص أو تقييم المحتوى أو الدقة ولا نضمن ولن نتحمل أي مسؤولية أو مسؤولية عن أي مواد أو مواقع خاصة بطرف ثالث ، أو عن أي مواد أو منتجات أو خدمات أخرى لأطراف ثالثة.</strong></p>\r\n\r\n<p><strong>نحن لسنا مسؤولين عن أي ضرر أو أضرار تتعلق بشراء أو استخدام السلع أو الخدمات أو الموارد أو المحتوى أو أي معاملات أخرى تتم فيما يتعلق بأي مواقع ويب تابعة لجهات خارجية. يرجى مراجعة سياسات وممارسات الطرف الثالث بعناية والتأكد من فهمك لها قبل الدخول في أي معاملة. يجب توجيه الشكاوى أو المطالبات أو المخاوف أو الأسئلة المتعلقة بمنتجات الطرف الثالث إلى الطرف الثالث.</strong></p>\r\n\r\n<p><strong>القسم 9 - تعليقات المستخدم وردود الفعل والطلبات الأخرى&nbsp;<br />\r\nإذا قمت ، بناءً على طلبنا ، بإرسال بعض عمليات الإرسال المحددة (على سبيل المثال إدخالات المسابقة) أو دون طلب منا ، فإنك ترسل أفكارًا أو اقتراحات أو مقترحات أو خططًا إبداعية أو مواد أخرى ، سواء عبر الإنترنت أو عبر البريد الإلكتروني أو البريد العادي أو غير ذلك. (إجمالاً ، &quot;التعليقات&quot;) ، فإنك توافق على أنه يجوز لنا ، في أي وقت ، دون قيود ، تعديل ونسخ ونشر وتوزيع وترجمة واستخدام أي تعليقات ترسلها إلينا بأي وسيلة أخرى. نحن ولسنا ملزمين (1) بالحفاظ على سرية أي تعليقات ؛ (2) لدفع تعويض عن أي تعليقات ؛ أو (3) للرد على أي تعليقات.</strong></p>\r\n\r\n<p><strong>يجوز لنا ، ولكننا غير ملزمين بمراقبة أو تعديل أو إزالة المحتوى الذي نحدده وفقًا لتقديرنا الخاص بأنه غير قانوني أو مسيء أو مهدد أو تشهيري أو إباحي أو فاحش أو مرفوض أو ينتهك الملكية الفكرية لأي طرف أو شروط الخدمة هذه .</strong></p>\r\n\r\n<p><strong>أنت توافق على أن تعليقاتك لن تنتهك أي حق لأي طرف ثالث ، بما في ذلك حقوق النشر أو العلامات التجارية أو الخصوصية أو الشخصية أو أي حقوق شخصية أو حقوق ملكية أخرى. أنت توافق أيضًا على أن تعليقاتك لن تحتوي على مواد تشهيرية أو غير قانونية أو مسيئة أو فاحشة ، أو تحتوي على أي فيروسات كمبيوتر أو برامج ضارة أخرى يمكن أن تؤثر بأي شكل من الأشكال على تشغيل الخدمة أو أي موقع ويب ذي صلة. لا يجوز لك استخدام عنوان بريد إلكتروني مزيف ، أو التظاهر بأنك شخص آخر غيرك ، أو تضليلنا أو تضليل الأطراف الثالثة فيما يتعلق بأصل أي تعليقات. أنت وحدك المسؤول عن أي تعليقات تدلي بها ودقتها. نحن لا نتحمل أي مسؤولية ولا نتحمل أي مسؤولية عن أي تعليقات تنشرها أنت أو أي طرف ثالث.</strong></p>\r\n\r\n<p><strong>القسم 10 - المعلومات الشخصية</strong></p>\r\n\r\n<p><strong>يخضع تقديمك للمعلومات الشخصية عبر الموقع لسياسة الخصوصية الخاصة بنا. لعرض سياسة الخصوصية الخاصة بنا.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 11 - الأخطاء وعدم الدقة والسهو</strong></p>\r\n\r\n<p><strong>من حين لآخر ، قد تكون هناك معلومات على موقعنا أو في الخدمة تحتوي على أخطاء مطبعية أو عدم دقة أو سهو قد يتعلق بأوصاف&nbsp;<br />\r\nالتصميم والبرمجة والعروض الترويجية والعروض ورسوم الخدمة وأوقات التسليم والتعديل. نحتفظ بالحق في تصحيح أي أخطاء أو عدم دقة أو سهو ، وتغيير المعلومات أو تحديثها أو إلغاء الخدمة إذا كانت أي معلومات في الخدمة أو على أي موقع ويب ذي صلة غير دقيقة في أي وقت دون إشعار مسبق (بما في ذلك بعد تقديمك لطلبك) .</strong></p>\r\n\r\n<p><strong>نحن لا نتعهد بتحديث أو تعديل أو توضيح المعلومات في الخدمة أو على أي موقع إلكتروني ذي صلة ، بما في ذلك على سبيل المثال لا الحصر ، معلومات التسعير ، باستثناء ما يقتضيه القانون. لا يوجد تحديث محدد أو تاريخ تحديث مطبق في الخدمة أو على أي موقع ويب ذي صلة ، يجب أن يؤخذ للإشارة إلى أنه تم تعديل أو تحديث جميع المعلومات الموجودة في الخدمة أو على أي موقع ويب ذي صلة.</strong></p>\r\n\r\n<p><strong>القسم 12 - الاستخدامات المحظورة</strong></p>\r\n\r\n<p><strong>بالإضافة إلى المحظورات الأخرى المنصوص عليها في شروط الخدمة ، يُحظر عليك استخدام الخدمة مقدمة لك أو محتواه:<br />\r\n&nbsp;(أ) لأي غرض غير قانوني ؛<br />\r\n(ب) حث الآخرين على أداء أو المشاركة في أي أعمال غير قانونية ؛<br />\r\n(ج) انتهاك أي لوائح أو قواعد أو قوانين أو مراسيم المملكة العربية السعودية أو دولية أو فيدرالية أو إقليمية أو خاصة بالمنطقة؛&nbsp;<br />\r\n(د) التعدي على أو انتهاك حقوق الملكية الفكرية الخاصة بنا أو حقوق الملكية الفكرية للآخرين ؛<br />\r\n(هـ) المضايقة أو الإساءة أو الإهانة أو الأذى أو التشهير أو التشهير أو الاستخفاف أو التخويف أو التمييز على أساس الجنس أو التوجه الجنسي أو الدين أو العرق أو العرق أو السن أو الأصل القومي أو الإعاقة ؛<br />\r\n(و) لتقديم معلومات خاطئة أو مضللة ؛<br />\r\n(ز) لتحميل أو نقل فيروسات أو أي نوع آخر من الشفرات الخبيثة التي سيتم استخدامها أو يمكن استخدامها بأي طريقة من شأنها التأثير على وظيفة أو تشغيل الخدمة أو أي موقع ويب ذي صلة أو مواقع ويب أخرى أو الإنترنت ؛<br />\r\n(ح) لجمع أو تتبع المعلومات الشخصية للآخرين ؛ (1) إرسال بريد عشوائي أو احتيالي أو فارم أو ذريعة أو عنكبوتي أو زحفي أو كشط ؛&nbsp;<br />\r\n(ي) لأي غرض فاحش أو غير أخلاقي ؛ أو (ك) للتدخل أو التحايل على ميزات الأمان للخدمة أو أي موقع ويب ذي صلة أو مواقع ويب أخرى أو الإنترنت. نحن نحتفظ بالحق في إنهاء استخدامك للخدمة أو أي موقع ويب ذي صلة لانتهاك أي من الاستخدامات المحظورة.</strong></p>\r\n\r\n<p><strong>القسم 13 - إخلاء المسؤولية عن الضمانات ؛ تحديد المسؤولية</strong></p>\r\n\r\n<p><strong>نحن لا نضمن أو نضمن أو نضمن أن استخدامك لخدمتنا سيكون دون انقطاع أو في الوقت المناسب أو آمنًا أو خاليًا من الأخطاء.</strong></p>\r\n\r\n<p><strong>نحن لا نضمن أن النتائج التي يمكن الحصول عليها من استخدام الخدمة ستكون دقيقة أو موثوقة.</strong></p>\r\n\r\n<p><strong>أنت توافق على أنه يجوز لنا من وقت لآخر إزالة الخدمة لفترات زمنية غير محددة أو إلغاء الخدمة في أي وقت ، دون إخطارك.</strong></p>\r\n\r\n<p><strong>أنت توافق صراحة على أن استخدامك للخدمة أو عدم قدرتك على استخدامها يكون على مسؤوليتك وحدك. الخدمة وجميع الأعمال &nbsp;والخدمات المقدمة لك من خلال الخدمة (باستثناء ما هو مذكور صراحة من قبلنا) مقدمة &quot;كما هي&quot; و &quot;كما هي متوفرة&quot; لاستخدامك ، دون أي تمثيل أو ضمانات أو شروط من أي نوع ، سواء كانت صريحة أو ضمنيًا ، بما في ذلك جميع الضمانات الضمنية أو شروط القابلية للتسويق والجودة التجارية والملاءمة لغرض معين والمتانة والملكية وعدم الانتهاك.</strong></p>\r\n\r\n<p><strong>لا يتحمل أكسب تك بأي حال من الأحوال المسؤولية عن أي إصابة أو خسارة أو مطالبة أو أي ضرر مباشر أو غير مباشر أو عرضي أو عقابي أو خاص ، أو الأضرار التبعية من أي نوع ، بما في ذلك ، على سبيل المثال لا الحصر ، الأرباح المفقودة ، أو الإيرادات المفقودة ، أو المدخرات المفقودة ، أو فقدان البيانات ، أو تكاليف التعديل والاستبدال &nbsp;، أو أي أضرار مماثلة ، سواء كانت قائمة على العقد ، أو الضرر (بما في ذلك الإهمال) ، أو المسؤولية الصارمة أو غير ذلك ، الناشئة عن استخدامك لأي خدمة أو أي أعمال تم شراؤها باستخدام الخدمة ، أو لأي مطالبة أخرى تتعلق بأي شكل من الأشكال باستخدامك للخدمة أو أي عمل ، بما في ذلك ، على سبيل المثال لا الحصر ، أي أخطاء أو سهو في أي محتوى ، أو أي خسارة أو ضرر من أي نوع يتم تكبده نتيجة لاستخدام الخدمة أو أي محتوى (أو مشروع) يتم نشره أو نقله أو إتاحته بطريقة أخرى عبر الخدمة ، حتى لو تم التنبيه بإمكانية حدوث ذلك. نظرًا لأن بعض المناطق أو محاكم القضائية لا تسمح باستثناء أو تحديد المسؤولية عن الأضرار التبعية أو العرضية ، في المملكة العربية السعودية أو محاكم القضائية ، يجب أن تكون مسؤوليتنا محدودة إلى أقصى حد يسمح به القانون.</strong></p>\r\n\r\n<p><strong>القسم 14 - التعويض</strong></p>\r\n\r\n<p><strong>أنت توافق على تعويض أكسب تك والدفاع عنها وحمايتها من أي ضرر أو ضرر من أي مطالبة أو طلب ، بما في ذلك الشركة الأم ، والشركات التابعة ، والشركات التابعة ، والشركاء ، والمسؤولون ، والمديرون ، والوكلاء ، والمقاولون ، والمرخصون ، ومقدمو الخدمات ، والمقاولون من الباطن ، والموردون ، والمتدربون ، والموظفون. أتعاب المحاماة المعقولة ، التي يدفعها أي طرف ثالث بسبب أو الناشئة عن خرقك لشروط الخدمة هذه أو المستندات التي تتضمنها بالإحالة ، أو انتهاكك لأي قانون أو حقوق طرف ثالث.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 15 - القابلية للفصل</strong></p>\r\n\r\n<p><strong>في حالة تحديد أي شرط من شروط الخدمة هذه على أنه غير قانوني أو باطل أو غير قابل للتنفيذ ، يجب أن يكون هذا الحكم قابلاً للتنفيذ إلى أقصى حد يسمح به القانون المعمول به ، ويعتبر الجزء غير القابل للتنفيذ منفصلاً عن شروط الخدمة ، لن يؤثر هذا القرار على صلاحية ونفاذ أي أحكام أخرى متبقية.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 16 - الإنهاء</strong></p>\r\n\r\n<p><strong>تظل التزامات ومسؤوليات الأطراف التي تم تكبدها قبل تاريخ الإنهاء سارية بعد إنهاء هذه الاتفاقية لجميع الأغراض.</strong></p>\r\n\r\n<p><strong>شروط الخدمة هذه سارية المفعول ما لم يتم إنهاؤها من قبلك أو من قبلنا. يمكنك إنهاء شروط الخدمة هذه في أي وقت عن طريق إخطارنا بأنك لم تعد ترغب في استخدام خدماتنا ، أو عندما تتم المشروع متفق عليه .</strong></p>\r\n\r\n<p><strong>إذا أخفقت في حكمنا الوحيد ، أو نشك في أنك فشلت ، في الامتثال لأي شرط أو شرط من شروط الخدمة هذه ، فيجوز لنا أيضًا إنهاء هذه الاتفاقية في أي وقت دون إشعار مسبق وستظل مسؤولاً عن جميع المبالغ المستحقة بما في ذلك تاريخ الإنهاء ؛ و / أو وفقًا لذلك قد يمنعك من الوصول إلى خدماتنا (أو أي جزء منها).</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 17 - اتفاق كامل</strong></p>\r\n\r\n<p><strong>لا يشكل إخفاقنا في ممارسة أو إنفاذ أي حق أو شرط من شروط الخدمة هذه تنازلاً عن هذا الحق أو الحكم.</strong></p>\r\n\r\n<p><strong>تشكل شروط الخدمة هذه وأي سياسات أو قواعد تشغيل منشورة من قبلنا على هذا الموقع أو فيما يتعلق بالخدمة الاتفاقية الكاملة والتفاهم بينك وبيننا وتحكم استخدامك للخدمة ، وتحل محل أي اتفاقيات واتصالات ومقترحات سابقة أو معاصرة سواء كانت شفهية أو كتابية ، بينك وبيننا (بما في ذلك ، على سبيل المثال لا الحصر ، أي إصدارات سابقة من شروط الخدمة).</strong></p>\r\n\r\n<p><strong>لا يجوز تفسير أي غموض في تفسير شروط الخدمة هذه على الجهة الصاغة.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 18 - القانون الحاكم</strong></p>\r\n\r\n<p><strong>تخضع شروط الخدمة وأية اتفاقيات منفصلة نقدم بموجبها الخدمات لك وتفسر وفقًا لقوانين&nbsp;<br />\r\nالمملكة العربية السعودية.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 19 - تغييرات على شروط الخدمة</strong></p>\r\n\r\n<p><strong>يمكنك مراجعة أحدث إصدار من شروط الخدمة في أي وقت في هذه الصفحة.</strong></p>\r\n\r\n<p><strong>نحن نحتفظ بالحق ، وفقًا لتقديرنا الخاص ، في تحديث أو تغيير أو استبدال أي جزء من شروط الخدمة هذه عن طريق نشر التحديثات والتغييرات على موقعنا. تقع على عاتقك مسؤولية التحقق من موقعنا بشكل دوري لمعرفة التغييرات. استمرار استخدامك أو الوصول إلى موقعنا على الويب أو الخدمة بعد نشر أي تغييرات على شروط الخدمة هذه يشكل قبولًا لهذه التغييرات.</strong></p>\r\n\r\n<p><br />\r\n<strong>القسم 20 - معلومات الاتصال</strong><br />\r\n<br />\r\nيجب إرسال الأسئلة المتعلقة بشروط الخدمة إلينا على support@aksabtech.com</p>\r\n\r\n<p style=\"text-align:center\"><strong>الشروط والأحكام</strong></p>','4921.png','www.facebook.com/Aksabtech','https://twitter.com/aksabtech','https://www.instagram.com/aksabtech','aksabtech.com',NULL,NULL,'support@aksabtech.com','0509032353','00966509032353','مكة المكرمة -  الجعرانة','9100.png','5917.png',1354,489,5,34,'7064.png','لأننا نسعى دائما للأفضل ونتقن أعمالنا بكل حب وشغف وموظفونا ذو خبرة ومهارة ودراية عالية وخدمة عملائنا تتم على مدار الساعة.','We have knowledgeable practitioners including a Certified Financial Planner, a Certified Investment Management Analyst, an attorney, and a tax practitioner.',NULL,NULL,NULL,'5508.png','6909.png','نقدم لكم خدمات تكنولوجية متكاملة باستخدام أحدث تقنيات البرمجة والتصميم لتقديم الخدمة بأفضل جودة ترضي عملائنا وتنافس المشاريع الأخرى من نفس المجال','بعض الأعمال التي قمنا بإنجازها في إكسب تجمع بين روعة التصميم\r\nوحداثة التقنية مع تحقيق رؤية عملاؤنا ورسالتهم وأهدافهم.','6629.png','2808.png','9579.png');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slider` varchar(200) NOT NULL,
  `slogan` text DEFAULT NULL,
  `shortdesc` text DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `type_id` int(11) NOT NULL DEFAULT 0,
  `suspensed` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `slider`, `slogan`, `shortdesc`, `type`, `type_id`, `suspensed`) VALUES (1,'7746.png','شركة أكسب تك لتقنية المعلومات','مع أكسب تك دائما أنت الكسبان',0,0,0),(4,'4334.jpg','تطبيقات هواتف ذكية','تطبيقات الهواتف النقالة تعد من أحدث الطرق للتواصل مع عملاءك وتوسيع نشاطك التجاري أو الخدمي',1,0,0),(5,'6552.png','برمجة التطبيقات','تطبيقات الهواتف النقالة تعد من أحدث الطرق للتواصل مع عملاءك وتوسيع نشاطك التجاري أو الخدمي',1,1,0),(6,'3479.png','تطوير المواقع','الموقع الإلكتروني هو واجهتك الإلكترونية أمام عملائك وهو أساس لا يستغنى عنه في التسويق الإلكتروني الناجح',1,2,0),(7,'6678.png','أعمالنا','أعمالنا الرائعة في شركة  اكسب تك  للتصميم والبرمجيات',2,0,0),(8,'5065.png','أعمال التسويق','تطبيقات الهواتف النقالة تعد من أحدث الطرق للتواصل مع عملاءك وتوسيع نشاطك التجاري أو الخدمي',2,4,0),(9,'5923.png','أعمال التصميم','تطبيقات الهواتف النقالة تعد من أحدث الطرق للتواصل مع عملاءك وتوسيع نشاطك التجاري أو الخدمي',2,3,0),(10,'8169.png','أعمال المواقع','تطبيقات الهواتف النقالة تعد من أحدث الطرق للتواصل مع عملاءك وتوسيع نشاطك التجاري أو الخدمي',2,2,0),(11,'989.png','أعمال التطبيقات','تطبيقات الهواتف النقالة تعد من أحدث الطرق للتواصل مع عملاءك وتوسيع نشاطك التجاري أو الخدمي',2,1,0),(12,'254.png','التصميم والموشن الجرافيكى','مع أكسب تك راح تحصل عروض وأسعار مجنونة',1,3,0),(13,'7469.jpg','التسويق الإلكترونى','التسويق الإلكتروني  هو وقود وحياة مشروعك',1,4,0),(14,'6089.jpg','تطوير مواقع الويب','موقعك الإلكتروني هو واجهتك الإلكترونية مع العملاء',1,0,0),(15,'8241.jpg','تصميم الجرافيك','يعتبر التصميم الجرافيكي من أقوى الأساليب في إيصال هدفك للعميل',1,0,0),(16,'6589.jpg','التسويـــق الإلكتروني','زيادة وعي الجمهور بخدمتك أو منتجك أفضل  طريقة لزيادة دخلك أو مبيعاتك',1,0,0);
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `works`
--

DROP TABLE IF EXISTS `works`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `shortdesc` text DEFAULT NULL,
  `worktext` text DEFAULT NULL,
  `slidermockup` varchar(200) DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `works`
--

LOCK TABLES `works` WRITE;
/*!40000 ALTER TABLE `works` DISABLE KEYS */;
INSERT INTO `works` (`id`, `name`, `shortdesc`, `worktext`, `slidermockup`, `parent`, `created_at`) VALUES (5,'التصميم','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,1,'2020-07-04 22:57:07'),(6,'برمجة المواقع','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,1,'2020-07-04 22:57:57'),(7,'التطبيقات','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,1,'2020-07-04 22:58:27'),(8,'التسويق','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,1,'2020-07-04 22:58:47'),(9,'التصميم','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,2,'2020-07-04 22:57:07'),(10,'برمجة المواقع','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,2,'2020-07-04 22:57:57'),(11,'التطبيقات','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,2,'2020-07-04 22:58:27'),(12,'التسويق','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,2,'2020-07-04 22:58:47'),(13,'التصميم','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,3,'2020-07-04 22:57:07'),(14,'برمجة المواقع','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,3,'2020-07-04 22:57:57'),(15,'التطبيقات','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,3,'2020-07-04 22:58:27'),(16,'التسويق','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,3,'2020-07-04 22:58:47'),(17,'التصميم','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,4,'2020-07-04 22:57:07'),(18,'برمجة المواقع','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,4,'2020-07-04 22:57:57'),(19,'التطبيقات','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,4,'2020-07-04 22:58:27'),(20,'التسويق','Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took',NULL,NULL,4,'2020-07-04 22:58:47'),(27,'هويات بصرية',NULL,NULL,NULL,0,'2020-09-12 09:09:26'),(28,'شعارات',NULL,NULL,NULL,0,'2020-09-12 09:09:41'),(29,'بروشورات وفلايرات ومجلات',NULL,NULL,NULL,0,'2020-09-12 09:10:01'),(30,'سوشيال ميدبا',NULL,NULL,NULL,0,'2020-09-12 09:10:13'),(31,'تطبيقات هواتف ذكية',NULL,NULL,NULL,0,'2020-09-12 09:10:31');
/*!40000 ALTER TABLE `works` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'aksabtech_aksab'
--

--
-- Dumping routines for database 'aksabtech_aksab'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-18 12:22:20
