CREATE DATABASE  IF NOT EXISTS `start_up` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `start_up`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: start_up
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividades` (
  `id_actividades` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `pregunta1` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta2` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta3` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_actividades`),
  KEY `id_proyecto_actividades_idx` (`id_proyecto`),
  CONSTRAINT `id_proyecto_actividades` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` VALUES (1,1,'','','');
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alianzas`
--

DROP TABLE IF EXISTS `alianzas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alianzas` (
  `id_alianzas` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `pregunta1` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta2` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta3` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_alianzas`),
  KEY `id_proyecto_alianzas_idx` (`id_proyecto`),
  CONSTRAINT `id_proyecto_alianzas` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alianzas`
--

LOCK TABLES `alianzas` WRITE;
/*!40000 ALTER TABLE `alianzas` DISABLE KEYS */;
INSERT INTO `alianzas` VALUES (1,1,'','','');
/*!40000 ALTER TABLE `alianzas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `canales_dist`
--

DROP TABLE IF EXISTS `canales_dist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `canales_dist` (
  `id_canales_dist` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `pregunta1` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta2` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta3` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta4` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta5` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_canales_dist`),
  KEY `id_proyecto_canal_idx` (`id_proyecto`),
  CONSTRAINT `id_proyecto_canal_dist` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canales_dist`
--

LOCK TABLES `canales_dist` WRITE;
/*!40000 ALTER TABLE `canales_dist` DISABLE KEYS */;
INSERT INTO `canales_dist` VALUES (1,1,'TelÃ©fono, medios de comunicaciÃ³n, degustaciones y demostraciones en Ã¡reas pÃºblicas. ','Llamada telefÃ³nica ya que el perfil de nuestro cliente no utiliza redes sociales comÃºnmente.','DegustaciÃ³n, porque aparte de retroalimentarnos nos hace generar una venta, ya que prueban el producto y se lo llevan en el momento.','TelefonÃ­a y medios de promociÃ³n tradicionales porque el perfil del cliente es ver televisiÃ³n, escuchar la radio, lectura de periÃ³dico entre otras. ','PeriÃ³dicamente y vÃ­a telefÃ³nica. ');
/*!40000 ALTER TABLE `canales_dist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id_clientes` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `pregunta1` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta2` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta3` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta4` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta5` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta6` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_clientes`),
  KEY `id_proyecto_idx` (`id_proyecto`),
  CONSTRAINT `id_proyecto_cliente` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,1,'Chihuahua','Sexo indistinto','24','Lujosa','Servicio a domicilio, en supermercados y tiendas naturistas','Personas que les gusta pagar en efectivo, amas de casa, jubilados, personas con ingresos mayores a $25,000 pesos mensuales y personas con problemas digestivos.');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `costos`
--

DROP TABLE IF EXISTS `costos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `costos` (
  `id_costos` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `pregunta1` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta2` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_costos`),
  KEY `id_proyecto_costos_idx` (`id_proyecto`),
  CONSTRAINT `id_proyecto_costos` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `costos`
--

LOCK TABLES `costos` WRITE;
/*!40000 ALTER TABLE `costos` DISABLE KEYS */;
INSERT INTO `costos` VALUES (1,1,'','');
/*!40000 ALTER TABLE `costos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flujo`
--

DROP TABLE IF EXISTS `flujo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flujo` (
  `id_flujo` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `pregunta1` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_flujo`),
  KEY `id_proyecto_flujo_idx` (`id_proyecto`),
  CONSTRAINT `id_proyecto_flujo` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flujo`
--

LOCK TABLES `flujo` WRITE;
/*!40000 ALTER TABLE `flujo` DISABLE KEYS */;
INSERT INTO `flujo` VALUES (1,1,'');
/*!40000 ALTER TABLE `flujo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propuesta_valor`
--

DROP TABLE IF EXISTS `propuesta_valor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propuesta_valor` (
  `id_propuesta_valor` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `pregunta1` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta2` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta3` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta4` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta5` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_propuesta_valor`),
  KEY `id_proyecto_idx` (`id_proyecto`),
  CONSTRAINT `id_proyecto_propuesta` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propuesta_valor`
--

LOCK TABLES `propuesta_valor` WRITE;
/*!40000 ALTER TABLE `propuesta_valor` DISABLE KEYS */;
INSERT INTO `propuesta_valor` VALUES (1,1,'','','','','');
/*!40000 ALTER TABLE `propuesta_valor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proyecto` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion_proyecto` varchar(480) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_proyecto`),
  KEY `id_usuarios_idx` (`id_usuario`),
  CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
INSERT INTO `proyectos` VALUES (1,'Proyecto 1','Esto es una prueba',1);
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recursos`
--

DROP TABLE IF EXISTS `recursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recursos` (
  `id_recursos` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `pregunta1` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta2` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta3` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_recursos`),
  KEY `id_proyecto_recursos_idx` (`id_proyecto`),
  CONSTRAINT `id_proyecto_recursos` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recursos`
--

LOCK TABLES `recursos` WRITE;
/*!40000 ALTER TABLE `recursos` DISABLE KEYS */;
INSERT INTO `recursos` VALUES (1,1,'','','');
/*!40000 ALTER TABLE `recursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relacion`
--

DROP TABLE IF EXISTS `relacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relacion` (
  `id_relacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `pregunta1` text COLLATE utf8_unicode_ci NOT NULL,
  `pregunta2` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_relacion`),
  KEY `id_proyecto_relacion_idx` (`id_proyecto`),
  CONSTRAINT `id_proyecto_relacion` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacion`
--

LOCK TABLES `relacion` WRITE;
/*!40000 ALTER TABLE `relacion` DISABLE KEYS */;
INSERT INTO `relacion` VALUES (1,1,'','');
/*!40000 ALTER TABLE `relacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password_usuario` blob NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'startup',',����BP�&\\j`\0s�');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-01  1:22:11
