CREATE DATABASE  IF NOT EXISTS `sapao` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sapao`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: sapao
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `colonia`
--

DROP TABLE IF EXISTS `colonia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colonia` (
  `id_colonia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_colonia` varchar(150) NOT NULL,
  PRIMARY KEY (`id_colonia`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colonia`
--

LOCK TABLES `colonia` WRITE;
/*!40000 ALTER TABLE `colonia` DISABLE KEYS */;
INSERT INTO `colonia` VALUES (1,'	CALLE LOS REYES PARTE ALTA.	'),(2,'	PANORAMICA DEL FORTIN PARTE ALTA	'),(3,'	PANORAMICA DEL FORTIN PARTE BAJA	'),(4,'	COL. SANTA MARIA PARTE BAJA.	'),(5,'	calle Juan Escutia y 16 de Septiembre Col. Sta. Ma.	'),(6,'	calle División del Norte y 21 de Marzo Col. Sta. Ma.	'),(7,'	FRACC. VILLA DEL MARQUEZ.	'),(8,'	FRACC. LOS PINOS.	'),(9,'	FRACC. MARGARITAS.	'),(10,'	FRACC. NIÑOS HEROES.	'),(11,'	Calz. Madero (Av. Tecnológico A Iglesia Exmarquesado)	'),(12,'	COL. BENITO JUAREZ.	'),(13,'	FRACC. LOMAS DE ANTEQUERA.	'),(14,'	9A CERRADA NIÑOS HEROES, EXMARQUESADO	'),(15,'	Linea nueva Niños Héroes, Exmarquesado	'),(16,'	COL. MARTIRES DE RIO BLANCO SECTOR 1	'),(17,'	COL. MARTIRES DE RIO BLANCO SECTOR 2	'),(18,'	COL. MANUEL SABINO CRESPO SECTOR 1	'),(19,'	COL. MANUEL SABINO CRESPO SECTOR 2	'),(20,'	COL. PROVIDENCIA.	'),(21,'	COL. LOMAS DE MICROONDAS.	'),(22,'	COL. MICROONDAS P/BAJA	'),(23,'	COL. MICROONDAS P/ALTA.	'),(24,'	UNIDAD DEL ISSSTE	'),(25,'	HOSPITAL DEL ISSSTE	'),(26,'	COL. LOMA LINDA PARTE BAJA.	'),(27,'	COL. LOMA LINDA PARTE ALTA.	'),(28,'	COL. LOMAS DEL CRESTON PARTE BAJA	'),(29,'	COL. LOMAS DEL CRESTON PARTE MEDIA	'),(30,'	COL. LOMAS DEL CRESTON PARTE ALTA.	'),(31,'	SECTORES 3, 4, 5 Y 6 P/ALTA EJIDO G. VICTORIA	'),(32,'	SECTOR 5 P/BAJA EJIDO G. VICTORIA	'),(33,'	SECTOR 6 P/BAJA EJIDO G. VICTORIA	'),(34,'	SECTORES 3 Y 4 P/BAJA EJIDO G. VICTORIA	'),(35,'	AGENCIA GPE. VICTORIA. SECTORES 1 Y 2	'),(36,'	COL. AURORA SECTOR 1	'),(37,'	COL. AURORA SECTOR 2	'),(38,'	COL. AURORA SECTOR 3	'),(39,'	COL. AURORA SECTOR 4	'),(40,'	calles Rio Pedregal y Rio Consulado, Col.la Cascada	'),(41,'	COL. LA CASCADA PARTE BAJA	'),(42,'	COL. LA CASCADA PARTE ALTA	'),(43,'	FRACC. LA LOMA.	'),(44,'	CIRCUITO LOMA VERDE.	'),(45,'	Priv. Río Papaloapam, Col. La Cascada.	'),(46,'	FRACC. MARTIRES DE RIO BLANCO.	'),(47,'	FRACC. POZAS ARCAS.	'),(48,'	COL. ESTRELLA PARTE BAJA.	'),(49,'	calles Rio Jordán,Rio de Janeiro, Col. la Cascada.	'),(50,'	calle Mártires de Rio Blanco, Col. Aurora	'),(51,'	COL. ESTRELLA PARTE ALTA.	'),(52,'	FRACC. LOMAS DE LA AZUCENA.	'),(53,'	DIVISION ORIENTE, EXMARQUESADO	'),(54,'	Calz. Madero (Iglesia Exmarquesado a Jardín Morelos)	'),(55,'	CALLEJON LOS REYES 	'),(56,'	CALLEJON DE LA SOLEDAD Y EL PUNTO.	'),(57,'	AGENCIA CANDIANI SUR	'),(58,'	AGENCIA CANDIANI NORTE	'),(59,'	COL. ELISEO JIMENEZ RUIZ. SUR	'),(60,'	COL. ELISEO JIMENEZ RUIZ NORTE	'),(61,'	FRACC. SAN JOSE LA NORIA SECTOR 1	'),(62,'	FRACC. SAN JOSE LA NORIA SECTOR 2	'),(63,'	FRACC. SAN JOSE LA NORIA SECTOR 3	'),(64,'	COL. REFORMA AGRARIA.	'),(65,'	COL. ALEMAN.	'),(66,'	Prol. Fiallo, prol. Melchor Ocampo, Simbolos Patrios 	'),(67,'	COL. AMPLIACION CANDIANI	'),(68,'	COL. COSIJOEZA.	'),(69,'	CENTRAL DE ABASTOS.	'),(70,'	COL. ARTICULO 123, CENTRAL.	'),(71,'	COL. ARBOLEDA	'),(72,'	COL. LIBERTAD.	'),(73,'	UNIDAD FERROCARRILERA	'),(74,'	COL. JOSE VASCONCELOS	'),(75,'	COL. FERNANDO GOMEZ SANDOVAL	'),(76,'	AGENCIA CINCO SEÑORES	'),(77,'	COL. SURCOS LARGOS	'),(78,'	FRACC. NUESTRA SEÑORA.	'),(79,'	FRACC. TRINIDAD DE LAS HUERTAS.	'),(80,'	BARRIO DE LA NORIA.	'),(81,'	BARRIO DE LA TRINIDAD.	'),(82,'	CENTRO DE LA CIUDAD.(Colón Sur - Periférico Sur)	'),(83,'	COL. POSTAL	'),(84,'	FRACC. INDEPENDENCIA	'),(85,'	CENTRO DE LA CIUDAD.(Constitución - Calz. Chap.)	'),(86,'	CENTRO DE LA CIUDAD.(Colón Norte- Abasolo)	'),(87,'	COL. MORELOS	'),(88,'	UNIDAD BENITO JUAREZ	'),(89,'	UNIDAD MODELO 1A SECCION	'),(90,'	UNIDAD MODELO 2a. SECCION	'),(91,'	COL. VICTOR BRAVO AHUJA SUR	'),(92,'	COL. VICTOR BRAVO AHUJA NORTE parte alta.	'),(93,'	COL. VICTOR BRAVO AHUJA NORTE parte baja.	'),(94,'	Calz. de la República y Prol. Hidalgo, Col. Vasconcelos	'),(95,'	COL. ARTICULO 123  ORIENTE	'),(96,'	COL. JOSE LOPEZ PORTILLO	'),(97,'	COL. FELIPE CARRILLO PUERTO	'),(98,'	COL. FIGUEROA	'),(99,'	FRACC. LA PAZ. 	'),(100,'	FRACC. VICTORIA	'),(101,'	COL. DIAZ ORDAZ	'),(102,'	COL. GUELAGUETZA, FORTIN	'),(103,'	COL. AZUCENA DEL FORTIN	'),(104,'	COL. GUELATAO	'),(105,'	COL. EL BAJIO	'),(106,'	BARRIO DE JALATLACO PARTE BAJA	'),(107,'	BARRIO DE JALATLACO PARTE MEDIA	'),(108,'	BARRIO DE JALATLACO PARTE ALTA.	'),(109,'	COL. AMERICA SUR PARTE ALTA	'),(110,'	COL. AMERICA SUR PARTE BAJA	'),(111,'	UNIDAD DEPORTIVA IXCOTEL	'),(112,'	CANTERAS DE IXCOTEL.	'),(113,'	BARRIO DE XOCHIMILCO.	'),(114,'	FRACC. RINCON DEL ACUEDUCTO.	'),(115,'	FRACC. LOMAS DE LA CASCADA.	'),(116,'	FRACC. LA CASCADA.	'),(117,'	FRACC. EL MANGAL	'),(118,'	FRACC. EL PAPAYO.	'),(119,'	FRACC. EL CHOPO.	'),(120,'	FRACC. LA RESOLANA. 	'),(121,'	FRACC. LA LUZ.	'),(122,'	PRIV. ZORRILLA	'),(123,'	CALZ.PORFIRIO DIAZ (Naranjos a Calz. H. Chap.)	'),(124,'	FRACC. EL RETIRO.	'),(125,'	FRACC. PRESA SAN FELIPE.	'),(126,'	FRACC. RESIDENCIAL SAN FELIPE	'),(127,'	COL. REFORMA PARTE ALTA (Alamos a Geranios)	'),(128,'	HOSPITAL CIVIL	'),(129,'	COL. UNION Y PROGRESO.	'),(130,'	COL. REFORMA PARTE BAJA (Esc. Naval a Calz. Chap.)	'),(131,'	COL. LAS FLORES PARTE BAJA.	'),(132,'	COL. LAS FLORES PARTE MEDIA	'),(133,'	COL. AMERICA NORTE.	'),(134,'	COL. YALALAG PARTE BAJA.	'),(135,'	COL. YALALAG PARTE ALTA.	'),(136,'	COL. SOLIDARIDAD PARTE  BAJA	'),(137,'	COL. SOLIDARIDAD PARTE  ALTA	'),(138,'	COL. 10 DE ABRIL	'),(139,'	SECTOR 1 LOMAS DE SAN JACINTO.	'),(140,'	SECTOR 2 LOMAS DE SAN JACINTO.	'),(141,'	SECTOR 3 LOMAS DE SAN JACINTO.	'),(142,'	SECTOR 4 LOMAS DE SAN JACINTO.	'),(143,'	SECTOR 5 LOMAS DE SAN JACINTO.	'),(144,'	SECTOR 6 LOMAS DE SAN JACINTO.	'),(145,'	SECTOR 7 LOMAS DE SAN JACINTO.	'),(146,'	SECTOR 8 LOMAS DE SAN JACINTO.	');
/*!40000 ALTER TABLE `colonia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suministro`
--

DROP TABLE IF EXISTS `suministro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suministro` (
  `id_colonia` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horario` varchar(50) DEFAULT NULL,
  KEY `id_colonia` (`id_colonia`),
  CONSTRAINT `suministro_ibfk_1` FOREIGN KEY (`id_colonia`) REFERENCES `colonia` (`id_colonia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suministro`
--

LOCK TABLES `suministro` WRITE;
/*!40000 ALTER TABLE `suministro` DISABLE KEYS */;
INSERT INTO `suministro` VALUES (14,'2014-04-12','Matutino'),(14,'2014-04-19','Matutino'),(14,'2014-04-12','Matutino'),(14,'2014-04-19','Matutino'),(14,'2014-04-26','Vespertino'),(14,'2014-05-03','Vespertino'),(58,'2014-04-11','Nocturno'),(58,'2014-04-18','Matutino'),(57,'2014-04-13','Matutino'),(57,'2014-04-20','Nocturno');
/*!40000 ALTER TABLE `suministro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `id_telegram` varchar(60) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '0',
  `boletines` tinyint(1) DEFAULT '0',
  `id_colonia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_telegram` (`id_telegram`),
  UNIQUE KEY `telefono_UNIQUE` (`telefono`),
  KEY `id_colonia` (`id_colonia`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_colonia`) REFERENCES `colonia` (`id_colonia`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (18,'9511775677','Joel@gmail.com','joel','mtz','#21063167',1,0,57),(19,'9514367662','ingrid@gmail.com','ingrid','coronado','#21022649',1,0,57),(20,'9512222618','joseperez@gmail.com','jose','perez','#33615138',1,0,14),(21,'9511975748','mauricio@gmail.com','mauricio ','perez','#24067579',1,0,14),(22,'9511175735','vero@gmail.com','vero ','garcia','#22051401',1,0,57),(23,'9512168603','yossi@gmail.com','yossi','labastida','#9987794',1,0,58),(24,'9512221621','kisbe@gmail.com','kisbe','caballero','#28762888',1,0,58),(28,'9515937415','armda@gmail.com','armando','peres','#24038304',1,0,14);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-06 14:45:33
