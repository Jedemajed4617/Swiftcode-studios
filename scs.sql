-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.1.2-MariaDB-1:11.1.2+maria~ubu2204 - mariadb.org binary distribution
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for SwiftCodeStudios
CREATE DATABASE IF NOT EXISTS `SwiftCodeStudios` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `SwiftCodeStudios`;

-- Dumping structure for table SwiftCodeStudios.accounts
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `pfp` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table SwiftCodeStudios.accounts: ~13 rows (approximately)
INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `pfp`, `phone`) VALUES
	(1, 'peetje', '$2y$10$vv3XCIrO8MvID4Lb.GFJguxCKlMywkLTx7lV4fH03n.i9c0m2FJaa', 'peetje@gmail.com', 'g3kMjNYA.png', NULL),
	(2, 'peet', '$2y$10$uVt0uNnalJMlobkJwI/5puSsAfd2UQ8AbIC2y6.q151nmr0RzjBpy', 'peet@gmail.com', 'z50as1b@.png', NULL),
	(3, 'peetje', '$2y$10$xOdOEbCuml09teIgODo1f.pzkE.gUsO3GV161t5gU16P7O9gf6VQ6', 'tygoiedema@gmail.com', NULL, NULL),
	(4, 'peetje', '$2y$10$kWJNfHk12pBEWcnUlflVyeoQkCdalGdPciNok3IH4YLSapvFidBfu', 'tygoiedema@gmail.com', NULL, NULL),
	(5, 'jaap', '$2y$10$SxEi6yceBZTFgLxXdRQLoerl13LpsNTih3ezwedwnXR5GC4eXzuWG', 'jaap@gmail.com', NULL, NULL),
	(6, '1', '$2y$10$z3nsrGswMkXPh.BgIbyJJOMyqDdsYrzdXc023zyYppqENUW.x9Ml2', '1', NULL, NULL),
	(7, '2', '$2y$10$wuc3CYgvp4hRKoFPXwiYlO.RXBCEDqnBKt85AUdLblecRX9WQgVQS', '2', NULL, NULL),
	(8, '3', '$2y$10$kixhvE9e.cP/BfpBXUlmMumvQyV5/.UzG6WmN.21p7UhGc2lDZzPK', '3', NULL, NULL),
	(9, 'test', '$2y$10$QWvmbgSF1QZYUtZWEq1nNu3SiuVzyrlKqGqsK5OUSt8UPmdynhpjq', 'test', NULL, NULL),
	(10, 'test1', '$2y$10$Dr/j./kvrjQvToLegMfaM.fL6a3vhfEfaDxPJtO1yix8RCsH1A/q.', 'test1', NULL, NULL),
	(11, '4', '$2y$10$J4ujr6kYIe45e.x3ebV5TOMfwQ8zfeSqAyU0RrrnA9iWNbZC4Nrby', '4', NULL, NULL),
	(12, '5', '$2y$10$06U1nbql9W1AeSc4hRwbuet9GS17bwOmjRwh9X1gLpLtLTZblDEju', '5', NULL, NULL),
	(13, 'testaccount', '$2y$10$UrqH7DX4w1.3GvZuSWapwujsZ.Bk.8PTmcNtHvInILi3yA6y6tJ5W', 'test', '3ThEQ!l^.png', NULL);

-- Dumping structure for table SwiftCodeStudios.featured
CREATE TABLE IF NOT EXISTS `featured` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table SwiftCodeStudios.featured: ~17 rows (approximately)
INSERT INTO `featured` (`id`, `img`, `title`) VALUES
	(1, 'armoede.webp', 'Geen Armoede'),
	(2, 'honger.webp', 'Geen honger'),
	(3, 'gezondheid.webp', 'Goede gezondheid'),
	(4, 'onderwijs.webp', 'Kwaliteitsonderwijs'),
	(5, 'gender.webp', 'Gendergelijkheid'),
	(6, 'water.webp', 'Schoon water'),
	(7, 'energie.webp', 'Betaalbare energie'),
	(8, 'economie.webp', 'Economische groei'),
	(9, 'industrie.webp', 'Innovatie'),
	(10, 'ongelijkheid.webp', 'Ongelijkheid verminderen'),
	(11, 'duurzaam.webp', 'Duurzame Gemeenschappen'),
	(12, 'consumptie.webp', 'Verantwoorde consumptie'),
	(13, 'klimaat.webp', 'Klimaatactie'),
	(14, 'water.webp', 'Leven in het water'),
	(15, 'land.webp', 'Leven op het land'),
	(16, 'vrede.webp', 'Vrede'),
	(17, 'doelen.webp', 'Partnerschap voor doelen');

-- Dumping structure for table SwiftCodeStudios.sdg
CREATE TABLE IF NOT EXISTS `sdg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table SwiftCodeStudios.sdg: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
