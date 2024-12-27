-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: nutrium
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `adminId` int(11) NOT NULL AUTO_INCREMENT,
  `adminUsername` varchar(100) NOT NULL,
  `adminPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin1','senha123'),(2,'admin2','senha456'),(3,'admin3','senha789'),(4,'admin1','senha123'),(5,'admin2','senha456'),(6,'admin3','senha789'),(7,'admin1','password123'),(8,'admin2','securePass456'),(9,'admin3','adminPass789');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointments` (
  `appointmentId` int(11) NOT NULL AUTO_INCREMENT,
  `appointmentName` varchar(255) NOT NULL,
  `appointmentPlace` varchar(255) NOT NULL,
  `appointmentTime` varchar(10) NOT NULL,
  `appointmentObs` varchar(255) NOT NULL,
  PRIMARY KEY (`appointmentId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (1,'Consulta 1','Clínica A','10:00','Paciente deve estar em jejum'),(2,'Consulta 2','Clínica B','11:00','Levar exames anteriores'),(3,'Consulta 3','Clínica C','12:00','Paciente diabético'),(4,'Consulta 1','Clínica A','10:00','Paciente deve estar em jejum'),(5,'Consulta 2','Clínica B','11:00','Levar exames anteriores'),(6,'Consulta 3','Clínica C','12:00','Paciente diabético'),(7,'Dental Checkup','Clinic A','09:00','Routine checkup'),(8,'Eye Exam','Clinic B','10:30','Bring previous records'),(9,'Annual Physical','Clinic C','14:00','Discuss health issues');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clinics`
--

DROP TABLE IF EXISTS `clinics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clinics` (
  `clinicId` int(11) NOT NULL AUTO_INCREMENT,
  `clinicName` varchar(100) NOT NULL,
  `clinicAdress` varchar(255) NOT NULL,
  `clinicPhoneNumber` varchar(20) NOT NULL,
  PRIMARY KEY (`clinicId`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinics`
--

LOCK TABLES `clinics` WRITE;
/*!40000 ALTER TABLE `clinics` DISABLE KEYS */;
INSERT INTO `clinics` VALUES (1,'troca','rua teste 3','1111111111'),(2,'Clínica B','Rua 456, Bairro Y','2345-6789'),(3,'Clínica C','Rua 789, Bairro Z','3456-7890'),(24,'TESTE 1','taltal','1234567io'),(25,'clinica 5','dfghjkl','567890'),(26,'clinica teste30','rua da clinica','0029345');
/*!40000 ALTER TABLE `clinics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dietplans`
--

DROP TABLE IF EXISTS `dietplans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dietplans` (
  `dietPlanId` int(11) NOT NULL AUTO_INCREMENT,
  `foodName` varchar(100) NOT NULL,
  `timeToEat` varchar(10) NOT NULL,
  `foodQuantity` varchar(100) NOT NULL,
  PRIMARY KEY (`dietPlanId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dietplans`
--

LOCK TABLES `dietplans` WRITE;
/*!40000 ALTER TABLE `dietplans` DISABLE KEYS */;
INSERT INTO `dietplans` VALUES (1,'Ovo cozido','08:00','2 unidades'),(2,'Maçã','10:00','1 unidade'),(3,'Frango grelhado','13:00','200g'),(4,'Ovo cozido','08:00','2 unidades'),(5,'Maçã','10:00','1 unidade'),(6,'Frango grelhado','13:00','200g'),(7,'Oatmeal','Breakfast','200g'),(8,'Chicken Salad','Lunch','300g'),(9,'Fruit Smoothie','Snack','250ml');
/*!40000 ALTER TABLE `dietplans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `clinic_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clinic_id` (`clinic_id`),
  CONSTRAINT `images_ibfk_1` FOREIGN KEY (`clinic_id`) REFERENCES `clinics` (`clinicId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'uploads/images/2024/11/96389e019f9b38a05457e8e49e1b46af672d7a7418191.jpg',NULL),(2,'uploads/images/2024/11/065b27f9ca2a614424eec0174655699a672d7b408c3fa.jpg',NULL),(3,'uploads/images/2024/11/ceb4948c06f8cbdb0f275d0b88b480eb672d7b4c8e9b7.jpg',NULL),(4,'uploads/images/2024/11/df5e341123cac63fab926f935cb8d8e8672d7b4e65d36.jpg',NULL),(5,'uploads/images/2024/11/7c68ea4df6a11ef08244fbbe333a415c672d7b558d097.jpg',NULL),(6,'uploads/images/2024/11/d5871f026a0c6c4bf7bdcba7feac9728672d7c6622b51.jpg',NULL),(7,'uploads/images/2024/11/39b0e2432c9524a2429fa5d7767dd795672d7c836ac9a.jpg',NULL);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patients` (
  `patientId` int(11) NOT NULL AUTO_INCREMENT,
  `patientCpf` varchar(15) NOT NULL,
  `patientName` varchar(100) NOT NULL,
  `patientEmail` varchar(255) NOT NULL,
  `patientCity` varchar(100) NOT NULL,
  `patientAdress` varchar(255) NOT NULL,
  `patientPayment` varchar(255) NOT NULL,
  `patientClinicRegister` varchar(255) NOT NULL,
  `patientDietRegister` varchar(255) NOT NULL,
  `patientPhoneNumber` varchar(20) NOT NULL,
  `patientWeight` decimal(6,3) NOT NULL,
  `patientHeight` decimal(3,2) NOT NULL,
  `fk_dietPlanId` int(11) NOT NULL,
  `fk_register` int(11) NOT NULL,
  PRIMARY KEY (`patientId`),
  KEY `fk_dietPlanId` (`fk_dietPlanId`),
  KEY `fk_register` (`fk_register`),
  CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`fk_dietPlanId`) REFERENCES `dietplans` (`dietPlanId`),
  CONSTRAINT `patients_ibfk_2` FOREIGN KEY (`fk_register`) REFERENCES `users` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (8,'2147483647','Jane Smith','janesmith@example.com','Townsville','456 Oak St','Cash','Clinic B','Diet Plan 2','555-5678',65.000,1.70,2,2),(10,'23456789012','Michael Brown','michaelbrown@example.com','Smalltown','101 Maple St','Credit Card','Clinic B','Diet Plan 2','555-1111',80.000,1.85,2,4),(11,'34567890123','Emily Davis','emilydavis@example.com','Bigcity','202 Oak St','Cash','Clinic C','Diet Plan 3','555-2222',55.000,1.60,3,5),(12,'45678901234','David Wilson','davidwilson@example.com','Largetown','303 Pine St','Debit Card','Clinic A','Diet Plan 1','555-3333',90.000,1.90,1,6),(16,'566768990903721','eueu','abc@gmail.com','dfghjklç','xcvbnm','debito','sein la','sei la','4567890',77.800,1.60,1,1);
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payplans`
--

DROP TABLE IF EXISTS `payplans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payplans` (
  `payPlanId` int(11) NOT NULL AUTO_INCREMENT,
  `payPlanName` varchar(100) NOT NULL,
  `payPlanDescription` varchar(255) NOT NULL,
  `payPlanPrice` decimal(6,3) NOT NULL,
  PRIMARY KEY (`payPlanId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payplans`
--

LOCK TABLES `payplans` WRITE;
/*!40000 ALTER TABLE `payplans` DISABLE KEYS */;
INSERT INTO `payplans` VALUES (1,'Basic Plan','Access to basic features',29.990),(2,'Standard Plan','Access to standard features',49.990),(3,'Premium Plan','Access to all features',79.990),(4,'Basic Plan','Access to basic features',29.990),(5,'Standard Plan','Access to standard features',49.990),(6,'Premium Plan','Access to all features',79.990),(7,'Basic Plan','Basic plan with limited features',29.990),(8,'Standard Plan','Standard plan with additional features',49.990),(9,'Premium Plan','Premium plan with all features included',99.990);
/*!40000 ALTER TABLE `payplans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,'What is the procedure for a refund?','You can request a refund within 30 days of purchase.'),(2,2,'How can I update my personal details?','You can update your details in the account settings page.'),(3,3,'Where can I find the user manual?','The user manual is available under the Help section.');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'Billing'),(2,'Account Management'),(3,'Product Information');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fk_payPlan` int(11) NOT NULL,
  `fk_appoitmentId` int(11) NOT NULL,
  `fk_clinic` int(11) NOT NULL,
  `pfp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_payPlan` (`fk_payPlan`),
  KEY `fk_appoitmentId` (`fk_appoitmentId`),
  KEY `fk_clinic` (`fk_clinic`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_payPlan`) REFERENCES `payplans` (`payPlanId`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`fk_appoitmentId`) REFERENCES `appointments` (`appointmentId`),
  CONSTRAINT `users_ibfk_3` FOREIGN KEY (`fk_clinic`) REFERENCES `clinics` (`clinicId`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'User 1','user1@example.com','password1','2147483647','Cidade X','Rua 1',1,1,1,NULL),(2,'User 2','user2@example.com','password2','2147483647','Cidade Y','Rua 2',2,2,2,NULL),(4,'User 1','user1@example.com','password1','2147483647','Cidade X','Rua 1',1,1,1,NULL),(5,'User 2','user2@example.com','password2','2147483647','Cidade Y','Rua 2',2,2,2,NULL),(6,'User 3','user3@example.com','password3','2147483647','Cidade Z','Rua 3',3,3,3,NULL),(7,'User 1','user1@example.com','password1','2147483647','Cidade X','Rua 1',1,1,1,NULL),(8,'User 2','user2@example.com','password2','2147483647','Cidade Y','Rua 2',2,2,2,NULL),(9,'User 3','user3@example.com','password3','2147483647','Cidade Z','Rua 3',3,3,3,NULL),(10,'User 1','user1@example.com','password1','12345678901','Cidade X','Rua 1',1,1,1,NULL),(11,'User 2','user2@example.com','password2','23456789012','Cidade Y','Rua 2',2,2,2,NULL),(12,'User 3','user3@example.com','password3','34567890123','Cidade Z','Rua 3',3,3,3,NULL),(13,'Fábio','fabio@gmail.com','$2y$10$yaHOokl5Pq6cezwlClh2ZuBBNYnjm4ja2D6Ra.XhX.WYfBQb62q8m','12345678919','sao jeronimo','rua dhsjjdkdjekeje',1,1,1,NULL),(17,'eri','erikae2009@gmail.com','$2y$10$PX9Px2Bi2h1SBToLkgCrRug.4eo1saALCsQe9o2BVSQObNQ.Mpt86','34567890','São Jerônimo','cvbyunimo,',1,1,1,NULL),(19,'eri','erika@gmail.com','$2y$10$EUNylqmWo0LDlAgwnwURyOFpsrzxw.V8iGh2lY1SVIWDMy0iqzVla','0000000000','butia','rua tal',1,2,2,NULL),(20,'erikinha','user3@example.com','12345678','0000000000','butia','rua tal',1,2,2,''),(21,'bel','bel@gmail.com','$2y$10$9BieO9pM/uyvwzTUovmvcukvdQESFTXHGXmx1vMLT6.maREhquYsO','0000000000','sao jeronimo','rua tal',1,2,2,'uploads/images/2024/11/51ba6f890be0e144bf404168fd16a6fa672df866a094b.jpg'),(22,'nelzi','nelzi@gmail.com','$2y$10$qGjjJM6MfQ.4uLU6sZYYtOUPNMckR5tv39doVNAGWEL7BUzI3Xh4C','34567890-','sj','lalala',1,1,1,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'nutrium'
--

--
-- Dumping routines for database 'nutrium'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-21  9:32:09
