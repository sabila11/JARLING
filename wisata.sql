-- MySQL dump 10.13  Distrib 8.0.32, for macos13.0 (arm64)
--
-- Host: 127.0.0.1    Database: jarling
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `kontak`
--

DROP TABLE IF EXISTS `kontak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kontak` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pesan` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kontak`
--

LOCK TABLES `kontak` WRITE;
/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;
INSERT INTO `kontak` VALUES (1,'masing kurang maksimal','agus','agus@gmail.com','v'),(3,'Tempat wisata yang ditampilkan masih kurang','toni','toni@gmail.com',NULL),(4,'Tingkatkan','dani','dani@gmail.com',NULL);
/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `populer`
--

DROP TABLE IF EXISTS `populer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `populer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar_kecil` varchar(50) NOT NULL,
  `gambar_besar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `populer`
--

LOCK TABLES `populer` WRITE;
/*!40000 ALTER TABLE `populer` DISABLE KEYS */;
INSERT INTO `populer` VALUES (2,'Taman Bunga Celosia','Beroken, Banyukuning, Bandungan, Semarang','2018-06-19','Ini merupakan tempat wisata taman bunga dimana di dalamnya terdapat berbagai jenis bunga, disana juga terdapat banyak spot foto, tapi tidak cuma itu anda juga dapat menikmati pemandangan pengunungan disekitarnya.','i2.jpg','img2.jpg'),(3,'Agrowisata Kopeng','Dusun Dukuh, Kopeng, Getasan, Semarang','2018-06-19','Tempat wisata ini baru dibuka beberapa bulan yang lalu namun sudah banyak dikunjungi oleh wisatawan mengingat lokasinya yang ada didekat tempat wisata yang sebelumnya lebih dulu dikenal yaitu Ekowisata Kopeng ataupun Kopeng','i3.jpg','img3.jpg'),(5,'Candi Gedong Songo','Desa Candi, Kecamatan Bandungan, Kabupaten Semarang','2019-05-23','Objek Wisata Candi Gedong Songo Semarang merupakan salah satu Objek Wisata di Bandungan yang berupa situs peninggalan umat Hindu yang dibangun pada pertengahan abad 9. Candi ini seperti namanya (songo yang artinya sembilan) sebetulnya terdiri dari sembila','i5.jpg','img5.jpg');
/*!40000 ALTER TABLE `populer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rencana`
--

DROP TABLE IF EXISTS `rencana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rencana` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul_perjalanan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `id_tempat_wisata` int NOT NULL,
  `catatan` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rencana`
--

LOCK TABLES `rencana` WRITE;
/*!40000 ALTER TABLE `rencana` DISABLE KEYS */;
INSERT INTO `rencana` VALUES (1,'Wisata Masalalu','2023-10-18',3,'HIKS',2),(2,'Konser JEJEPANGAN','2023-08-23',2,'WIBU GEZ',2),(3,'healing boz','2023-06-21',3,'bawa duit',3),(4,'aher healing','2023-02-09',1,'ga tau',4);
/*!40000 ALTER TABLE `rencana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ulasan`
--

DROP TABLE IF EXISTS `ulasan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ulasan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ulasan` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_wisata` int NOT NULL,
  `rating` int DEFAULT NULL,
  `nama_user` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ulasan`
--

LOCK TABLES `ulasan` WRITE;
/*!40000 ALTER TABLE `ulasan` DISABLE KEYS */;
/*!40000 ALTER TABLE `ulasan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `no_tlp` varchar(12) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `role` varchar(7) DEFAULT 'member',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin1','123','Lim','08888','2023-02-05','admin'),(2,'user','123','x','6','2023-02-05','member'),(3,'suzuki','123','suzuki semakin di depan','091238934','2006-09-12','member'),(4,'aher','123','aher',NULL,'2021-11-11','member');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wisata`
--

DROP TABLE IF EXISTS `wisata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wisata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` text NOT NULL,
  `foto_utama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wisata`
--

LOCK TABLES `wisata` WRITE;
/*!40000 ALTER TABLE `wisata` DISABLE KEYS */;
INSERT INTO `wisata` VALUES (1,'Lembah Panyaweuyan','Lembah yang indah','Ds. Tejamulya, Kec. Argapura, Kabupaten Majalengka, Jawa Barat 45462','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7796234125613!2d108.34792801431718!3d-6.9169301696199055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f3cbc28a92655%3A0x2bbc3a9a5743c1aa!2sLembah%20Panyaweuyan!5e0!3m2!1sid!2sid!4v1675534273575!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','a1.jpg'),(2,'Wisata Situ Cipanten','ax','x','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7796234125613!2d108.34792801431718!3d-6.9169301696199055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f3cbc28a92655%3A0x2bbc3a9a5743c1aa!2sLembah%20Panyaweuyan!5e0!3m2!1sid!2sid!4v1675534273575!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','a1.jpg'),(3,'Pangandaran','Pantai Pangandaran indah','Pangandaran','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7796234125613!2d108.34792801431718!3d-6.9169301696199055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f3cbc28a92655%3A0x2bbc3a9a5743c1aa!2sLembah%20Panyaweuyan!5e0!3m2!1sid!2sid!4v1675534273575!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','a3.jpeg'),(4,'Lembah Dewata','Lembah Dewata bagus','Lembah Dewata','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7796234125613!2d108.34792801431718!3d-6.9169301696199055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f3cbc28a92655%3A0x2bbc3a9a5743c1aa!2sLembah%20Panyaweuyan!5e0!3m2!1sid!2sid!4v1675534273575!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','a1.jpg');
/*!40000 ALTER TABLE `wisata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'jarling'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-06  1:35:52
