-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

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
-- Table structure for table `site_touristiq`
--

DROP TABLE IF EXISTS `site_touristiq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_touristiq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `id_ville` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ville` (`id_ville`),
  CONSTRAINT `fk_ville` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_touristiq`
--

LOCK TABLES `site_touristiq` WRITE;
/*!40000 ALTER TABLE `site_touristiq` DISABLE KEYS */;
INSERT INTO `site_touristiq` VALUES (1,'                            Vielle mosquee\r\n','   La mosquée, qui porte le nom du quartier Dioulasso-bâ, a été construite vers 1880 par l’iman\r\n                            Sidiki Sanou1. Samory Touré y aurait prié lors de son passage à Bobo-Dioulasso2,3 avant de\r\n                            poursuive son combat contre les colons.','mosque.jpg',1),(2,'Le Mausolée de la princesse Guimbi OUATTARA',' Née vers 1836 à Sya, de Diorie OUATTARA, roi du GUIRIKO, et de Makogo OUATTARA, la Princesse\r\n                            Guimbi OUATTARA s’est mariée pour la première fois à environ 15 ans.\r\n                            Elle ne mènera pas une véritable vie de foyer du fait de la disparition de ses différents\r\n                            époux. Elle eut à recevoir BINGER chez elle.','Tombe-de-la-Princesse-Guimbi-Ouattara1_.jpg',1),(3,'                            La Place de la Gare\r\n',' Le nom « Place de la Gare » est donné en reférence à la société des chemins de fer du\r\n                            Burkina Faso. En 1984, cette place reçoit une nouvelle dénomination, Place TIEFO AMORO en\r\n                            souvenir du Grand Guéri, Roi des Tiéfo qui combattit contre Tiéba Traoré.\r\n                            Des rites sont encore célébrés sur la tombe de Tiéfo Amoro.\r\n                 ','placetiefo.jpg',1),(4,' La cathedrale',' Elle situe entre la gare ferroviaire et le marché central de Bobo-Dioulasso.\r\n                            Elle est d’une architecture moderne. Elle a été construite en 1957 et fut dédiée à Notre\r\n                            Dame de Lourdes. Elle a été ouverte au culte en 1961.','catedrale.jpg',1),(5,'                            La guinguette\r\n',' ituée à 15 kilomètres de la ville de Bobo, la Guinguette est un site touristique\r\n                            interessant.\r\n                            Source naturelle entourée d’une végétation luxuriante, elle constitue un cadre idéal de\r\n                            détente, de pique-nique et de baignade.\r\n                            Toutefois, ce cite n’est pas accessible en saison pluvieuse (juin à octobre)\r\n             ','guighuette.jpg',1),(6,'                            Village de Koro\r\n','  Situé à une dizaine de kilomètres à l’est de la ville de Bobo-Dioulasso, il est implanté sur\r\n                            une colline rocheuse à 3 Km à droite sur l’axe Bobo – Ouagadougou.\r\n                            Le village est scindé en 2 parties : une partie paysanne et l’autre constituée de Forgerons.\r\n                            Les paysans s’occupent des cultures pendant toute la période d’hivernage et ne rejoignent le\r\n                            village qu’au terme des activités agricoles.','koto.jpg',1),(7,'Musée de la musique Georges-Ouédraogo','                            Tout est musique. Tout est gai. Situé sur l’avenue Thomas-Sankara, ce musée, créé en 1999, est situé au centre-ville, près du lycée Philippe-Zinda-Kaboré. Il est fait de bois et de briques en terre compactée et stabilisée. Ce musée aux multiples voûtes et coupoles expose des instruments de musique traditionnelle.\r\n','muse_g.jpeg',3),(8,'Cheval mandingue','Cet espace de détente ressemble un peu à ranch. Fondé en 1993, il est situé dans le village de Zongo, dans l’ancien arrondissement de Boulmiougou. Ce cadre vous offre des randonnées et promenades à cheval. C’est un endroit paisible, ombragé, idéal pour relaxer. Si vous voulez faire de l’équitation, vous êtes à la bonne adresse.\r\n','cheval_mandingue.jpg',3),(9,'   Village artisanal de Ouagadougou','                            Envie de vous offrir un beau tissu, un beau collier, un bracelet, un sac en cuir, une statuette de bronze, qu’attendez-vous ? Le village artisanal, situé à proximité du Salon international de l’artisanat de Ouagadougou, est le fruit de la coopération entre le Burkina Faso et le Grand-Duché de Luxembourg.\r\n','village_artisanal.jpg',3),(10,'                            Parc urbain Bangr-wéogo, « forêt du savoir »\r\n','\r\nAccueilTourismeParc Bangr Weogo\r\nParc Bangr Weogo\r\n\r\nLe Parc Urbain Bängr Weogo, premier cas de rétrocession entre l’État et les Collectivités locales, est le fruit d’une parfaite symbiose entre le Ministère en charge des forêts et la Commune de Ouagadougou, chargée de sa gestion.\r\nSitué au coeur de la ville de Ouagadougou, capitale du Burkina Faso, il s’étend sur une superficie de 240 ha.Espace de loisirs et de detente','parc_bangre.jpg',3),(11,'                            Musée national\r\n','                            C’est votre musée. Il met la lumière sur la richesse du patrimoine culturel burkinabè. Sa collection est riche et diversifiée. Cette collection est constituée d’objets d’origine archéologique, d’objets d’art contemporain comme des sculptures, des photographies, des objets ethnographiques tels que des instruments de musique de transport, des outils, armes et pièges, etc. \r\n','muse_national.jpg',3),(12,'Les crocodiles sacrés de Bazoulé','    A Bazoulé, à une trentaine de kilomètres de Ouagadougou, ils seraient près de 200 dans la mare, tous sacrés. La visite coûte 1 500 francs CFA et le poulet, pour attirer les crocodiles hors de l’eau, coûte 3 000 francs.\r\n                            Organisés en association, les guides, des fils du village, savent comment s’y prendre pour vous permettre de prendre de belles photos sur le dos des crocodiles, les plus gros notamment.\r\n            ','basoule.jpg',3),(18,'Pics de sindou','Les pics de Sindou ou aiguilles de Sindou sont une formation rocheuse de grès, aux parois abruptes et fortement érodées dans le Sud-Ouest du Burkina Faso. Ils culminent à 415 mètres d\'altitude, ce qui en fait le deuxième point le plus haut du Burkina Faso. ','picSIndou.jpg',2),(19,'Lac tengrela','D\'une longueur de 7 km et d\'une largeur de 1 km maximales, le lac a une superficie de 580 ha. Son émissaire rejoint la Comoé à leur confluence située à environ 3 km au sud-est. Le lac est un site de pêche traditionnel des habitants du village de Tengréla. En raison de la proximité de la ville de Banfora.','lac.jpg',2),(20,'Cascades de Banfora','Les cascades de Karfiguéla ou cascades de Banfora sont une série de chutes d\'eau le long du fleuve Comoé au sud-ouest du Burkina Faso. Situées à environ 12 km au nord-ouest de Banfora, elles tiennent leur nom de la commune de Karfiguéla. Elles constituent l\'un des sites touristiques les plus importants au Burkina Faso.','casca.jpg',2),(21,'Foret classee de Dida','La forêt classée de Dida est une zone protégée située au Burkina Faso dans la province de la Comoé. La Foret Classee de Dida a officiellement une superficie de 75 000 hectares12. Elle est située à cheval entre la commune de Mangodara et celle de Ouo, à une centaine de kilomètres à l’Est de Banfora. ','dida.jpg',2),(22,'Domes de Fabedougou','Le dôme est défini par le dictionnaire comme un sommet semi-sphérique de certains édifices, en forme de coupole\r\nIls sont situés à 15 kilomètres de Banfora dans le département de Bérégadougou. Le site est difficile d’accès. C’est un ensemble de falaises de grès. Ce relief a été taillé par la nature et sont visités toute l’année.','domes.jpg',2),(23,'Champs de cannes a sucre a Beregadougou','La region de la Comoe est reputee pour ses vastes plantations de canne a sucre.L\'irigation se pratique de maniere industrielle a l\'aide de pipelines installes dans la region tirant leurs sources des cascades de banfora.','Champ-de-canne-a-sucre-de-Beregadougou.jpg',2);
/*!40000 ALTER TABLE `site_touristiq` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-29  0:17:48
