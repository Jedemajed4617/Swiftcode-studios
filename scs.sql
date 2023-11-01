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

-- Dumping data for table SwiftCodeStudios.featured: ~0 rows (approximately)

-- Dumping structure for table SwiftCodeStudios.sdg
CREATE TABLE IF NOT EXISTS `sdg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `sdg` (`id`, `img`, `title`, `info`) VALUES
	(1, 'armoede.webp', 'Geen Armoede', 'Beëindig armoede overal en in al haar vormen'),
	(2, 'honger.webp', 'Geen honger', 'Beëindig honger, bereik voedselzekerheid en verbeterde voeding en promoot duurzame landbouw'),
	(3, 'gezondheid.webp', 'Goede gezondheid', 'Verzeker een goede gezondheid en promoot welzijn voor alle leeftijden'),
	(4, 'onderwijs.webp', 'Kwaliteitsonderwijs', 'Verzeker gelijke toegang tot kwaliteitsvol onderwijs en bevorder levenslang leren voor iedereen'),
	(5, 'gender.webp', 'Gendergelijkheid', 'Bereik gendergelijkheid en empowerment voor alle vrouwen en meisjes'),
	(6, 'water.webp', 'Schoon water', 'Verzeker toegang tot duurzaam beheer van water en sanitatie voor iedereen'),
	(7, 'energie.webp', 'Betaalbare energie', 'Verzeker toegang tot betaalbare, betrouwbare, duurzame en moderne energie voor iedereen'),
	(8, 'economie.webp', 'Economische groei', 'Bevorder aanhoudende, inclusieve en duurzame economische groei, volledige en productieve tewerkstelling en waardig werk voor iedereen'),
	(9, 'industrie.webp', 'Innovatie', 'Bouw veerkrachtige infrastructuur, bevorder inclusieve en duurzame industrialisering en stimuleer innovatie'),
	(10, 'ongelijkheid.webp', 'Ongelijkheid verminderen', 'Dring ongelijkheid in en tussen landen terug'),
	(11, 'duurzaam.webp', 'Duurzame Gemeenschappen', 'Maak steden en menselijke nederzettingen inclusief, veilig, veerkrachtig en duurzaam'),
	(12, 'consumptie.webp', 'Verantwoorde consumptie', 'Verzeker duurzame consumptie- en productiepatronen'),
	(13, 'klimaat.webp', 'Klimaatactie', 'Neem dringend actie om klimaatverandering en haar impact te bestrijden'),
	(14, 'water.webp', 'Leven in het water', 'Doel 14: Behoud en maak duurzaam gebruik van oceanen, zeeën en maritieme hulpbronnen'),
	(15, 'land.webp', 'Leven op het land', 'Bescherm, herstel en bevorder het duurzaam gebruik van ecosystemen op het vasteland, beheer bossen en wouden duurzaam, bestrijd woestijnvorming, stop landdegradatie en draai het terug en roep het verlies aan biodiversiteit een halt toe'),
	(16, 'vrede.webp', 'Vrede', 'Bevorder vreedzame en inclusieve samenlevingen met het oog op duurzame ontwikkeling, verzeker toegang tot justitie voor iedereen en bouw op alle niveaus doeltreffende, verantwoordelijke en toegankelijke instellingen uit'),
	(17, 'doelen.webp', 'Partnerschap voor doelen', 'Versterk de implementatiemiddelen en revitaliseer het wereldwijd partnerschap voor duurzame ontwikkeling');

-- Dumping data for table SwiftCodeStudios.sdg: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
