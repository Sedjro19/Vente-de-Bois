-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 29 fév. 2024 à 22:59
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `VenteBois`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(100) NOT NULL,
  `prix_produit` decimal(10,2) NOT NULL,
  `description_produit` text DEFAULT NULL,
  `quantite_produit` int(11) NOT NULL,
  `pathimage_produit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom_produit`, `prix_produit`, `description_produit`, `quantite_produit`, `pathimage_produit`) VALUES
(1, 'Bois densifié – feuillus – 1/2 palette de 538 kg', 149.00, 'La demie palette de bois densifié feuillus est pratique pour les personnes n’ayant pas une grande surface de stockage ou juste pour terminer l’hiver.\r\n\r\nGrâce à sa composition de mélange de feuillus (chêne, charme, et hêtre), une bûche vous offrira une montée rapide en température et une chaleur constante.\r\n\r\nLe mélange de feuillus fait plus de braises et se consume plus lentement et peut donc s’utiliser en fin de soirée.\r\n\r\nAvec le bois densifié, vous n’aurez plus le problème du bois humide car ultra sec avec un taux d’humidité de 10% et du stockage, car une palette de 1 tonne vaut 4 stères de bois de chauffage traditionnel (gain de place).\r\n\r\nLivraison gratuite en 7 jours ouvrés', 12, '1.webp'),
(2, 'Bûches compressées 100% feuillus – palette de 1040kg\r\n', 299.00, ' Ces bûches de bois compressées sont produites uniquement à partir de sciures de bois feuillus non traitées, simplement séchées, chauffées et compactées.\r\n\r\nCela permet ainsi de gagner en compacité et de garantir un taux d’humidité idéal pour chauffer et dégager un maximum de chaleur.\r\n\r\nLa densité du produit est ainsi de plus de 1000kg par m3, soit 2,5 fois plus que du bois traditionnel. Le stockage est ainsi facilité, bien qu’il ne soit pas possible de le stocker en extérieur.\r\n\r\nLes palettes sont livrées dans le lieu de stockage grâce à nos chariots embarqués à moteur.\r\n\r\nLes bûches de bois 100% feuillus font 91mm de diamètre et +/- 280mm de longueur, ce qui en fait un produit adapté à l’ensemble des appareils de chauffage. Chaque paquet contient 5 bûches de 2kg, soit 10kg.\r\n', 10, '2.webp'),
(3, 'Bois densifié- feuillus- palette- 1 tonne', 199.00, 'Notre bois densifié est fabriqué en France.\r\n\r\n100 % naturel et 100 % feuillus.\r\n\r\nIdéal pour être utiliser dans tous les systèmes de chauffage à bois : cheminées, poêles et inserts.\r\n\r\nUne palette de bois densifié correspond à 4 stères de bois ultra sec.\r\n\r\nUn bûchette de bois densifié vaut 4 bûches de bois traditionnel en terme de combustion.\r\n\r\nUne bûche se consume en +/- 2h.\r\n\r\nVoici quelques conseils d’utilisation :\r\n\r\n1- Déposez quelques boules de papier et petit bois d’allumage dans votre chauffage,\r\n2- Démarrez le feu et attendez que la braise apparaît,\r\n3- Placez une seule bûche à la fois afin d’optimiser le rendement et d’obtenir une chaleur douce,\r\n4- Réglez l’air de votre appareil pour choisir l’intensité du feu,\r\n5- Vous pouvez mélanger sans problème des bûches de bois sèches traditionnelles à votre bois densifié,\r\n\r\nMaintenant, profitez de la chaleur qu’il vous offre.\r\n\r\nN’oubliez pas que le bois densifié déteste l’humidité, il faut prévoir un abri sec et tempéré.\r\n\r\nLe bois densifié étant propre et sans poussières, vous pouvez également lui trouver une place à côté de votre poêle.\r\n\r\nLivraison gratuite en 7 jours ouvrés.', 12, '5.webp'),
(6, 'Palette bois de chauffage- 40 cm- 3 stères', 139.00, 'Bois bûche de qualité supérieure\r\n\r\nUn bois bûche de qualité supérieure pour une utilisation immédiate dans l’appareil de chauffage, ce qui garanti le meilleur rendement de l’appareil de chauffage, sans fumées, et un encrassement minimum du conduit de cheminée.\r\n\r\nLes avantages d’un bois passé en séchoir :\r\n\r\n    écorcé partiellement par le séchage et le tamisage\r\n    sans parasites, insectes, champignons\r\n    s’allume très facilement\r\n    uniquement en quartiers\r\n    brûle sans fumées\r\n    n’encrasse pas la cheminée\r\n    pas de gaspillage de calories\r\n\r\nLe mélange est uniquement constitué de hêtre, charme, chêne, les essences les plus calorifiques pour le bois de chauffage.\r\n\r\nUn stère de bois séché artificiellement représente 1,3 stère de bois mi-sec en terme d’énergie calorifique dégagée.\r\n\r\nLe volume d’un stère de bois rangé représente en 33cm, un volume de 0,7m3. Aussi lorsque le bois est coupé en longueur de 25cm le volume d’un stère de bois est de 0,6m3 et enfin lorsqu’il est coupé en longueur de 50cm, le volume d’un stère de bois est de 0,8m3.\r\n\r\nPlus le bois de chauffage est coupé court, mieux il s’empile et il y a moins de vides entre les bûches, le volume apparent diminue mais la quantité de bois reste la même.\r\n\r\nHumidité contrôlée et garantie inférieure à 10%. (Norme NF Bois de Chauffage)\r\n\r\nLongueur : 50\r\n\r\nLivraison sur Palette, plus de renseignements dans la section livraison.\r\n\r\nLivraison gratuite en 7 jours', 11, '6.webp'),
(7, 'Palette bois de chauffage- 40 cm- 3 stères', 119.00, 'Une Palette de Bois de Chauffage = 3 Stères de Bois.\r\n\r\nBois sec depuis +24 mois et prêt à l’emploi.\r\n\r\nEssences du Bois : Le mélange est uniquement constitué de hêtre, charme, chêne, les essences les plus calorifiques pour le bois de chauffage.\r\n\r\nUn bois bûche de qualité supérieure pour une utilisation immédiate dans l’appareil de chauffage, ce qui garanti le meilleur rendement de l’appareil de chauffage, sans fumées, et un encrassement minimum du conduit de cheminée.\r\n\r\nLes avantages d’un bois passé en séchoir :\r\n\r\n– écorcé partiellement par le séchage et le tamisage\r\n– sans parasites, insectes, champignons\r\n– s’allume très facilement\r\n– uniquement en quartiers\r\n– brûle sans fumées\r\n– n’encrasse pas la cheminée\r\n– pas de gaspillage de calories\r\n\r\nUn stère de bois séché artificiellement représente 1,3 stère de bois mi-sec en terme d’énergie calorifique dégagée.\r\n\r\nLe volume d’un stère de bois rangé représente en 50cm, un volume de 0,85m3.\r\n\r\nPlus le bois de chauffage est coupé court, mieux il s’empile et il y a moins de vides entre les bûches, le volume apparent diminue mais la quantité de bois reste la même.\r\n\r\nHumidité contrôlée et garantie inférieure à 10% (Norme NF Bois de Chauffage).\r\n\r\nLongueur du Bois : 50 cm.\r\n\r\nLivraison sur Palette, plus de renseignements dans la section Livraison.\r\n\r\nLivraison gratuite en 7 jours ouvrés.', 13, '7.webp'),
(8, 'Palette bois de chauffage- 33 cm- 3 stères', 149.00, 'Une Palette de Bois de Chauffage = 3 Stères de Bois.\r\n\r\nBois sec depuis +24 mois et prêt à l’emploi.\r\n\r\nEssences du Bois : Le mélange est uniquement constitué de hêtre, charme, chêne, les essences les plus calorifiques pour le bois de chauffage.\r\n\r\nUn bois bûche de qualité supérieure pour une utilisation immédiate dans l’appareil de chauffage, ce qui garanti le meilleur rendement de l’appareil de chauffage, sans fumées, et un encrassement minimum du conduit de cheminée.\r\n\r\nLes avantages d’un bois passé en séchoir :\r\n\r\n– écorcé partiellement par le séchage et le tamisage\r\n– sans parasites, insectes, champignons\r\n– s’allume très facilement\r\n– uniquement en quartiers\r\n– brûle sans fumées\r\n– n’encrasse pas la cheminée\r\n– pas de gaspillage de calories\r\n\r\nUn stère de bois séché artificiellement représente 1,3 stère de bois mi-sec en terme d’énergie calorifique dégagée.\r\n\r\nLe volume d’un stère de bois rangé représente en 33cm, un volume de 0,7m3.\r\n\r\nPlus le bois de chauffage est coupé court, mieux il s’empile et il y a moins de vides entre les bûches, le volume apparent diminue mais la quantité de bois reste la même.\r\n\r\nHumidité contrôlée et garantie inférieure à 10% (Norme NF Bois de Chauffage).\r\n\r\nLongueur du Bois : 33 cm.\r\n\r\nLivraison sur Palette, plus de renseignements dans la section Livraison.\r\n\r\nLivraison gratuite en 7 jours ouvrés.', 11, '8.webp'),
(10, 'Granulés de bois woodstock qualité premium-palette de 78 sacs de 15 kg', 249.00, 'Ces pellets sont de fabrication française et ne comportent aucun élément ou substance chimique. Le granulé fait 20 mm de long pour 6 mm de diamètre, des mensurations plutôt correctes. En effet, un pellet mesure normalement entre 15 et 20 mm avec un diamètre maximal de 8 mm.\r\n\r\nCes granulés WOODSTOCK qualité Premium sont livrés par palette de 78 sacs. On compte 15 kg pour la masse du sac. Ce produit convient à tous les appareils de chauffage au bois destinés aux pellets (insert, poêle ou chaudière).\r\n\r\nGage de la qualité de cette gamme de granulés WOODSTOCK, la certification DIN Plus. Constitué en Allemagne, cet indicateur fait aujourd’hui partie des références européennes. La certification DIN Plus indique que la fabrication des granulés de bois a respecté les normes en vigueur sur la production de ce type de matériau.\r\n\r\nComposition 100 % bois vierge.\r\n\r\nPCI sur brut (Quantité de chaleur dégagée par kg de combustible)\r\n4,8 kWh.kg-1 ≤ PCI ≤ 5,3 kWh.kg\r\n\r\nMasse volumique apparente ≥ 650 Kg/m-3\r\n\r\nTaux de fines < 0,5 %\r\n\r\nTaux de cendres à 550°C ≤ 0,5 %\r\n\r\nHumidité ≤ 8 %\r\n\r\nDurabilité ≥ 97,5 %\r\n\r\nLongueur 3,15 mm < Longueur < 40 mm\r\n\r\nDiamètre 6 mm ±1\r\n\r\nQualité Premium\r\n\r\nApplication : Tout type d’appareil à granulés.\r\n\r\nContrôle laboratoire CERIC\r\n\r\nLivraison gratuite en 7 jours ouvrés.\r\n\r\nLivraison gratuite en 7 jours ouvrés.\r\n\r\n', 9, '10.webp'),
(11, 'Granulés de bois woodstock qualité premium-palette de 78 sacs de 15 kg', 129.00, 'Ces pellets sont de fabrication française et ne comportent aucun élément ou substance chimique. Le granulé fait 20 mm de long pour 6 mm de diamètre, des mensurations plutôt correctes. En effet, un pellet mesure normalement entre 15 et 20 mm avec un diamètre maximal de 8 mm.\r\n\r\nCes granulés WOODSTOCK qualité Premium sont livrés par palette de 78 sacs. On compte 15 kg pour la masse du sac. Ce produit convient à tous les appareils de chauffage au bois destinés aux pellets (insert, poêle ou chaudière).\r\n\r\nGage de la qualité de cette gamme de granulés WOODSTOCK, la certification DIN Plus. Constitué en Allemagne, cet indicateur fait aujourd’hui partie des références européennes. La certification DIN Plus indique que la fabrication des granulés de bois a respecté les normes en vigueur sur la production de ce type de matériau.\r\n\r\nComposition 100 % bois vierge.\r\n\r\nPCI sur brut (Quantité de chaleur dégagée par kg de combustible)\r\n4,8 kWh.kg-1 ≤ PCI ≤ 5,3 kWh.kg\r\n\r\nMasse volumique apparente ≥ 650 Kg/m-3\r\n\r\nTaux de fines < 0,5 %\r\n\r\nTaux de cendres à 550°C ≤ 0,5 %\r\n\r\nHumidité ≤ 8 %\r\n\r\nDurabilité ≥ 97,5 %\r\n\r\nLongueur 3,15 mm < Longueur < 40 mm\r\n\r\nDiamètre 6 mm ±1\r\n\r\nQualité Premium\r\n\r\nApplication : Tout type d’appareil à granulés.\r\n\r\nContrôle laboratoire CERIC\r\n\r\nLivraison gratuite en 7 jours ouvrés.\r\n\r\nLivraison gratuite en 7 jours ouvrés.\r\n\r\n', 8, '11.webp'),
(12, 'Palette de pellets mm royal ( royal pellets ) – 78 sacs plastique', 299.00, 'Des pellets certifiés: Les Royal Pellets surpassent les plus grands standards de qualité du marché. L’entière production est certifiée « EN Plus A1 » ce qui permet de garantir un pellet de haute qualité. Votre poêle peut fonctionner de manière optimale et atteindre les meilleurs températures de chauffage pour votre maison. N’utilisez plus de pellets bas de gamme qui peuvent compromettre l’efficacité de votre chaudière.\r\n\r\nDes pellets performants pour réaliser des économies: Les granulés de bois Royal Pellets ont une qualité premium une durabilité de près de 99% et un pouvoir calorifique (PCI) supérieur à la moyenne. Conséquence : vous faites des économies de chauffage en vous fournissant un combustible bois pellets pas cher, livré par palette directement à votre domicile (livraison des pellets partout en France métropolitaine).\r\n\r\nDes pellets 100% résineux: Critère de qualité essentiel pour tous les produits de notre site. Si vous êtes soucieux de maximiser le rendement de votre poêle, tout en minimisant son encrassement. Avec les Royal Pellets votre appareil de chauffage reste en bon état plus longtemps et est plus facile à entretenir.\r\n\r\nDes pellets écologiques: En optant pour les Royal Pellets, vous choisissez un fournisseur responsable vous garantissant une meilleure traçabilité. Nous livrons en circuit court des granulés de bois 100% naturels.\r\n\r\nLivraison gratuite en 7 jours\r\n', 12, '12.webp'),
(13, 'Granulés de bois woodstock qualité premium-palette de 78 sacs de 15 kg', 249.00, 'Ces pellets sont de fabrication française et ne comportent aucun élément ou substance chimique. Le granulé fait 20 mm de long pour 6 mm de diamètre, des mensurations plutôt correctes. En effet, un pellet mesure normalement entre 15 et 20 mm avec un diamètre maximal de 8 mm.\r\n\r\nCes granulés WOODSTOCK qualité Premium sont livrés par palette de 78 sacs. On compte 15 kg pour la masse du sac. Ce produit convient à tous les appareils de chauffage au bois destinés aux pellets (insert, poêle ou chaudière).\r\n\r\nGage de la qualité de cette gamme de granulés WOODSTOCK, la certification DIN Plus. Constitué en Allemagne, cet indicateur fait aujourd’hui partie des références européennes. La certification DIN Plus indique que la fabrication des granulés de bois a respecté les normes en vigueur sur la production de ce type de matériau.\r\n\r\nComposition 100 % bois vierge.\r\n\r\nPCI sur brut (Quantité de chaleur dégagée par kg de combustible)\r\n4,8 kWh.kg-1 ≤ PCI ≤ 5,3 kWh.kg\r\n\r\nMasse volumique apparente ≥ 650 Kg/m-3\r\n\r\nTaux de fines < 0,5 %\r\n\r\nTaux de cendres à 550°C ≤ 0,5 %\r\n\r\nHumidité ≤ 8 %\r\n\r\nDurabilité ≥ 97,5 %\r\n\r\nLongueur 3,15 mm < Longueur < 40 mm\r\n\r\nDiamètre 6 mm ±1\r\n\r\nQualité Premium\r\n\r\nApplication : Tout type d’appareil à granulés.\r\n\r\nContrôle laboratoire CERIC\r\n\r\nLivraison gratuite en 7 jours ouvrés.', 10, '9.webp'),
(14, 'Bois densifié – résineux – palette de 960 kgBûches compressées 100% feuillus – palette de 1040kg', 199.00, 'Le bois densifié s’utilise dans tous les types de chauffage : foyer fermé, foyer ouvert ou insert, en complément du bois traditionnel ou en remplacement.\r\n\r\nIl existe du bois densifié à base de résineux et du bois densifié à base de feuillus.\r\n\r\nLes résineux s’enflamment rapidement et font de belles flammes. Ils brûlent un peu plus vite que les feuillus.\r\n\r\nLes feuillus font un peu moins de flammes mais durent un peu plus longtemps.\r\n\r\nPour bien choisir votre bois densifié, il faut que :\r\n\r\n– Son pouvoir calorifique soit entre 4,5 kWh/kg et 5,5 kWh/kg,\r\n\r\n– Un taux d’humidité inférieur ou égal à 10 %,\r\n\r\n– Un taux de cendres en dessous de 1,5 %\r\n\r\nPour le stockage, il est impératif de les mettre à l’abri de l’humidité et pourquoi pas près de votre cheminée car sous film plastique, les bûches sont propres et sans poussières.\r\n\r\nLivraison gratuite en 7 jours.', 8, '3.webp'),
(15, 'Bûches de bois compressé – Crépito (Palette de 1 tonne) ', 259.00, 'Le chauffage au bois pratique et propre\r\n\r\nLes bûches de bois compressé Tecsabuch Crépito sont des briques de sciures compressée et séchée, afin de constituer des bûches très calorifiques, et grâce à leur conditionnement, elles prennent moins d’espace que les bûches de bois de chauffage traditionnelles. Ainsi vous économisez de l’espace et avez un stockage propre sur palette de votre chauffage pour l’hiver.\r\n\r\nLes bûches issues d’un procédé industriel, sont la garantie d’un bois sec hautes performances dans le système de chauffage.\r\n\r\nPas de nécessité de modifier l’installation de chauffage, elles s’utilisent en remplacement ou en complément des bûches traditionnelles.\r\n\r\nDe nombreux professionnels, tels boulangers, pizzerias utilisent déjà ce mode de chauffage pratique et très performant.\r\n\r\nLes bûches sont issues d’un processus industriel unique, de qualité approuvée depuis 15 ans.\r\n\r\nLivraison gratuite en 7 jours ouvrés.', 10, '4.webp');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;