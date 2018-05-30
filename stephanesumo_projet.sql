-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: mysql-stephanesumo.alwaysdata.net
-- Generation Time: May 30, 2018 at 07:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stephanesumo_projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `texte`, `id_utilisateur`) VALUES
(1, 'Développeur Web', 'PROFIL SOUHAITÉ\r\nExpérience\r\n3 ans\r\nCompétences\r\nConcevoir et développer les programmes et applications informatiques\r\nEtablir un cahier des charges\r\nLangage informatique HTML\r\nLangage informatique Java\r\nLangage informatique PHP\r\n', 1),
(2, 'Ingénieur Déploiement (H/F)', 'Vous :\r\n- Participez à la conception des projets de déploiement avec le client et nos propres services : tâches, dépendances, durée.\r\n', 1),
(3, 'CHEF D\'EQUIPE H/F)', '- Excellentes connaissances et tres bonne maitrise du logiciel informatique Excel\r\n- Le permis PL serait un plus\r\nVous etes une personne dynamique, polyvalent(e) et disposez d\'une premiere experience\r\ndans du management d\'equipe.', 1),
(4, 'Conducteur', 'Vous\r\ndisposez du permis VL et d\'une experience sur un similaire.Contact:0494189170toulon.001tn@randstad.fr', 1),
(5, 'Développeur JAVA (H/F)\r\n', 'Analyse et respect du cahier des charges - \r\nConception fonctionnelle et technique d\'applications - \r\nDeveloppement - \r\nRedaction de documentation - \r\nRealisation de tests d\'integration et unitaires - \r\nDeploiement des composants realisees  ', 1),
(6, 'Développeur Java (H/F)', 'Vous etes titulaire d\'un BAC+3 ou BAC+5 en Informatique (ecole d\'ingenieur ou universite), vous avez un bon niveau d\'anglais, vous souhaitez travailler et evoluer dans le domaine de l\'informatique. ', 1),
(7, 'Développeur JAVA (H/F)', 'Vous aimez le travail en equipe et vous avez le sens du service. Alors postulez a  notre offre ! Une candidature suffit si mobilite France entiere. ', 1),
(8, 'Technicien de maintenance (H/F)', ' - Realiser les activites de maintenance preventive : Realiser les operations d\'entretien preventif sur la base d\'un programme elabore par le responsable ou de sa propre initiative avec information du responsable', 1),
(9, 'Ingénieur étude et développement JAVA (H/F)', 'Dans le cadre d\'un projet majeur pour l\'un de nos clients sur le domaine BANQUE/ASSURANCE, nous recherchons en CDI des ingenieurs de developpement Java J2EE afin d\'augmenter nos equipe pour le developpement de la partie Back. ', 1),
(10, 'Ingénieur étude et développement JAVA (H/F)', 'Dans le cadre d\'un projet majeur pour l\'un de nos clients sur le domaine BANQUE/ASSURANCE, nous recherchons en CDI des ingenieurs de developpement Java J2EE afin d\'augmenter nos equipe pour le developpement de la Front-End. ', 1),
(36, 'Technicien de maintenance (H/F)', ' - Realiser les activites de maintenance curative et corrective:Intervenir a la demande de la production sur toutes les installations de l\'usine pour les remettre en marche en se referant aux documents techniques des installations', 1),
(43, 'Technicien de maintenance informatique (H/F)', 'Faire preuve de rigueur\r\nBon relationnel physique et telephonique\r\nBonne maitrise des outils informatiques (Outlook, Excel)\r\nEsprit d\'equipe\r\nExperience en gestion/coordination', 12),
(44, 'Ingénieur étude et développement JAVA (H/F)', 'De formation informatique Bac5, vous justifiez au moins d\'une premiere experience significative en developpement JAVA J2EE. Vous savez travailler en equipe projet structuree sur un au sein d\'un environnement de travail dit \'industrialise\'', 12),
(45, 'Technicien de maintenance informatique (H/F)', 'Suivre et gerer les projets que nous vous confions\r\nEtre le point de contact direct pour les donneurs d\'ordres, les clients finaux et les ressources techniques\r\nPlanifier les interventions techniques et selectionner les intervenants\r\nOptimiser les plannin', 12),
(46, 'Technicien de maintenance (H/F)', '- Remettre l\'outil de production a disposition du personnel et l\'informer sur les consignes de maintenance 1er niveau', 15),
(47, 'ADMINISTRATEUR SYSTEMES ET RESEAUX LINUX', 'Ingénieur / Electronique / Télécommunication - Ingénieur / Electronique / Télécommunication , Au coeur de la direction R&D, vous participerez activement aux developpements de nos services et de nos solutions. ', 12),
(48, 'ADMINISTRATEUR SYSTEMES ET RESEAUX LINUX H/', 'Vous intervenez sur tous les aspects de l\'infrastructure systeme et reseaux :- Administration et exploitation des systemes Open source (Debian et CentOS).', 12),
(49, 'Technicien de maintenance (H/F)', ' - Proposer les activites de maintenance ameliorative, les realiser et informer: Assurer la realisation d\'amenagements de postes de travail, d\'ameliorations de machines, d\'installations neuves simples (cablage, conception d\'automatismes simples,...).', 12),
(50, 'ADMINISTRATEUR SYSTEMES ET RESEAUX LINUX ', 'Maintenir et optimiser les infrastructures existantes, mise en oeuvre de nouvelles plateformes Linux,- Resolution des incidents sur l\'ensemble des problematiques serveurs,', 17),
(51, 'Technicien de maintenance (H/F)', ' - Renseigner, apres chaque intervention, une fiche de travail\r\n - Assurer les astreintes de week end et jours feries', 18),
(52, 'Technicien de maintenance ', 'Vous partagez les valeurs portees par LDC : Travail, Innovation, Responsabilite, Respect, Performance et Simplicite ; rejoignez-nous !\r\n Vos competences, votre mobilite et votre implication vous ouvriront des perspectives de carriere au sein du groupe LDC', 19),
(53, 'Administration système et réseaux', 'Bras droit opérationnel du responsable informatique, l’administrateur systèmes et réseaux met en place et s’assure du bon fonctionnement technique du système informatique.\r\n\r\n', 18),
(55, 'Technicien de maintenance informatique', 'Contrat à durée indéterminée \r\nContrat travail', 17);

-- --------------------------------------------------------

--
-- Table structure for table `confirmuser`
--

CREATE TABLE `confirmuser` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmuser`
--

INSERT INTO `confirmuser` (`id_utilisateur`, `pseudo`, `email`, `password`) VALUES
(1, 'admin', 'admin@ynov.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad'),
(12, 'bla', 'bla@ynov.com', '617b1f64f84be99543237a49d9a73933e36cd609'),
(13, '', '', ''),
(14, 'date', 'date@ynov.com', 'a16f14ffae037b72110d72e6f841736495dbd35d'),
(15, 'inscri', 'inscri@ynov.com', 'd35fbe53cd278ffcf1c93c4708f2c81104197d7e'),
(16, 'adrien', 'adrienpsumo@yahoo.fr', '8d71425c5f79f32efcc1ab6f9f35ff06203edba8'),
(17, 'stanley', 'stanley@ynov.com', '429eefddb372e4052b812e5afac11cd26d78e9c5'),
(18, 'dhivina', 'dhivina@ynov.com', '552e36dc2b8f0d9150fda1d8dd61ec08dc0b4fdd'),
(19, 'stephane', 'stephane@ynov.com', '57625e73fcb3cc12187895d9dc43c8a33a28a33f');

-- --------------------------------------------------------

--
-- Table structure for table `confirmuser1`
--

CREATE TABLE `confirmuser1` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmuser1`
--

INSERT INTO `confirmuser1` (`id_utilisateur`, `pseudo`, `email`, `password`) VALUES
(13, 'magic', 'magic@ynov.com', 'bcc58a23322dee1ca50bbf3ecd2cd36952c4ab60'),
(13, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `desktoppic`
--

CREATE TABLE `desktoppic` (
  `id_desktoppic` int(11) NOT NULL,
  `desktoppic` varchar(255) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desktoppic`
--

INSERT INTO `desktoppic` (`id_desktoppic`, `desktoppic`, `utilisateur_id`) VALUES
(3, 'newyork1.jpg', 12),
(4, '4.jpg', 12),
(15, 'logo.png', 12);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `img_nom` varchar(255) NOT NULL,
  `img_taille` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL,
  `img_desc` varchar(255) NOT NULL,
  `img_blob` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img_nom`, `img_taille`, `img_type`, `img_desc`, `img_blob`) VALUES
(1, '', '', '', '', 0x4172726179);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `util_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `title`, `comment`, `picture`, `util_id`) VALUES
(1, '', '', 'bg-9.jpg', 1),
(2, '', '', 'bg-27.jpg', 1),
(3, '', '', 'card-bg-3.jpg', 1),
(6, '', '', 'https://httpwg.org/asset/http.svg', 1),
(18, '', '', 'logo.png', 12),
(19, '', '', 'http://www.bordeaux.radio-campus.org/wp-content/uploads/2013/06/logo_rcb1.jpg', 12),
(20, '', '', 'blablabla', 12),
(21, '', '', 'consignes.txt', 12),
(22, '', '', 'http://www.tara.tcd.ie/themes/Mirage2/images/slider/ec-funded-research.jpg', 12),
(23, '', '', 'http://www.cdc.gov/tobacco/quit_smoking/images/quit2-cessation.jpg', 12),
(24, '', '', 'http://www.cdc.gov/tobacco/quit_smoking/images/quit2-cessation.jpg', 12),
(25, '', '', 'http://www.cdc.gov/tobacco/quit_smoking/images/quit2-cessation.jpg', 12),
(26, '', '', '4.png', 12),
(27, '', '', '', 12),
(28, '', '', '', 12),
(29, '', '', 'newyork1.jpg', 12),
(30, '', '', 'http://www.waibe.fr/sites/images/medias/images/download-waibe-images.jpg', 12),
(31, '', '', 'http://www.waibe.fr/sites/images/medias/images/download-waibe-images.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urlpic`
--

CREATE TABLE `urlpic` (
  `id_urlpic` int(11) NOT NULL,
  `urlpic` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urlpic`
--

INSERT INTO `urlpic` (`id_urlpic`, `urlpic`, `user_id`) VALUES
(1, 'http://farm4.static.flickr.com/3114/2524849923_1c191ef42e.jpg', 12),
(3, 'https://www.jumblebee.co.uk/site/wp-content/uploads/2014/06/JB-FE-Shop_10.png', 12);

-- --------------------------------------------------------

--
-- Table structure for table `utilconfirm`
--

CREATE TABLE `utilconfirm` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilconfirm`
--

INSERT INTO `utilconfirm` (`id_utilisateur`, `pseudo`, `email`, `password`) VALUES
(0, 'admin', 'admin@ynov.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `pseudo`, `email`, `password`) VALUES
(1, 'pseudo', 'pseudo@ynov.com', '02ec78c4a411d7c8f9ed4a7502dbb4a0bb5ac3b4'),
(2, 'pseudo', 'pseudo@ynov.com', '02ec78c4a411d7c8f9ed4a7502dbb4a0bb5ac3b4'),
(3, 'pseudo1', 'pseudo1@ynov.com', 'c53c584a7c58a0229df55249304b52317ea99dba'),
(4, 'pseudo1', 'pseudo1@ynov.com', 'c53c584a7c58a0229df55249304b52317ea99dba'),
(5, 'pseudo2', 'pseudo2@ynov.com', '6eedc007d9c296fe9036b72ba2d1b76a3759ad59'),
(6, 'pseudo3', 'pseudo3@ynov.com', '7e7c3bfe3de21598de7951c6724f614f5b1ed079'),
(7, 'pseudo4', 'pseudo4@ynov.com', '17e1871f83eebefcf803dc07b1aaef250dad4b7c'),
(8, 'pseudo5', 'pseudo5@ynov.com', '19bac7905e7438389d32182cece918dcb9601855'),
(9, 'pseudo6', 'pseudo6@ynov.com', '1e89fd763fc5d773eebe0d684220483adae6fe9b'),
(10, 'blabla', 'blabla@ynov.com', 'f869fa1be10d3c964b8887dd83405407810317f4'),
(11, 'user', 'user@ynov.com', '60bddb16409a2baf76936619afecf778dabe68de'),
(12, 'Newuser', 'newuser@ynov.com', '9cc0b753fd435fb66a2ca4f53d62087d6d287ac3'),
(13, 'utiliser', 'utiliser@ynov.com', '578ff86886be1aa9a63aac35235ca92116626ab5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `confirmuser`
--
ALTER TABLE `confirmuser`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Indexes for table `desktoppic`
--
ALTER TABLE `desktoppic`
  ADD PRIMARY KEY (`id_desktoppic`),
  ADD KEY `fk_utilisateur_id` (`utilisateur_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `fk_util_id` (`util_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urlpic`
--
ALTER TABLE `urlpic`
  ADD PRIMARY KEY (`id_urlpic`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `confirmuser`
--
ALTER TABLE `confirmuser`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `desktoppic`
--
ALTER TABLE `desktoppic`
  MODIFY `id_desktoppic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urlpic`
--
ALTER TABLE `urlpic`
  MODIFY `id_urlpic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_id_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `confirmuser` (`id_utilisateur`);

--
-- Constraints for table `desktoppic`
--
ALTER TABLE `desktoppic`
  ADD CONSTRAINT `fk_utilisateur_id` FOREIGN KEY (`utilisateur_id`) REFERENCES `confirmuser` (`id_utilisateur`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_util_id` FOREIGN KEY (`util_id`) REFERENCES `confirmuser` (`id_utilisateur`);

--
-- Constraints for table `urlpic`
--
ALTER TABLE `urlpic`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `confirmuser` (`id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
