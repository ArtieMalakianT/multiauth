-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: multiauth
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Gisele','gisele@gmail.com','$2y$10$.kAe.r4UIb87cM6B8R6fpeLJJviwwvvDCHYKSIF65CVvjbCPlxyrK',0,NULL,NULL,'2019-07-12 15:49:17','2019-07-12 15:49:17');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `aluno_historico`
--

LOCK TABLES `aluno_historico` WRITE;
/*!40000 ALTER TABLE `aluno_historico` DISABLE KEYS */;
/*!40000 ALTER TABLE `aluno_historico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `comments_post`
--

LOCK TABLES `comments_post` WRITE;
/*!40000 ALTER TABLE `comments_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `curso_matricula`
--

LOCK TABLES `curso_matricula` WRITE;
/*!40000 ALTER TABLE `curso_matricula` DISABLE KEYS */;
/*!40000 ALTER TABLE `curso_matricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cursos_pacotes`
--

LOCK TABLES `cursos_pacotes` WRITE;
/*!40000 ALTER TABLE `cursos_pacotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos_pacotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `historicos`
--

LOCK TABLES `historicos` WRITE;
/*!40000 ALTER TABLE `historicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `historicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `imagens`
--

LOCK TABLES `imagens` WRITE;
/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_07_11_094603_create_admins_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pacotes`
--

LOCK TABLES `pacotes` WRITE;
/*!40000 ALTER TABLE `pacotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `post_imagens`
--

LOCK TABLES `post_imagens` WRITE;
/*!40000 ALTER TABLE `post_imagens` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_imagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `status_matricula`
--

LOCK TABLES `status_matricula` WRITE;
/*!40000 ALTER TABLE `status_matricula` DISABLE KEYS */;
/*!40000 ALTER TABLE `status_matricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,NULL,NULL,NULL,'$2y$10$Z9SqlMkHd1lzTejnWr0Kw.xs4SHCzvF0kQMEbAiSv5eKJs1TDEQxS',NULL,NULL,'Maicon Alex','maiconalexdesouza@gmail.com','2019-07-12 15:46:13','2019-07-12 15:46:13'),(2,NULL,NULL,NULL,NULL,'$2y$10$cVgVfdMTINjsPisZGWfqN.H8CypIE1uKTyE2Klmyhq66ZsFcWtD8C',NULL,NULL,'Gisele Grignani','gisele@mail.com','2019-07-12 15:54:56','2019-07-12 15:54:56');
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

-- Dump completed on 2019-07-12  9:57:37
