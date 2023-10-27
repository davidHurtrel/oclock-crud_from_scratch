-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 27 oct. 2023 à 09:33
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `o-clock_S06_soutien`
--

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `name`, `description`, `img`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Azul', 'Introduits par les Maures, les azulejos (carreaux de revêtement mural en faïence, originalement décorés de bleu ou polychromes) furent adoptés par les Portuguais au moment où leur roi Manuel 1er, durant une visite au palais de l\'Alhambra dans le sud de l\'Espagne, fut conquis par l’éblouissante beauté des tuiles décoratives.\r\nManuel 1er ordonna la décoration immédiate, avec des tuiles semblables, des murs de son palais. Azul vous transporte au 16e  siècle, truelle en main, à embellir les murs du Palais Royal de Evora !\r\n\r\nAzul vous invite à embellir les murs du Palais Royal de Evora en devenant artisan avec un jeu de tuiles très malin et dépaysant.', 'https://www.espritjeu.com/upload/image/azul-p-image-65690-grande.jpg', '40.50', '2023-10-27 10:09:42', NULL),
(2, 'Smallworld', 'Dans le jeu SmallWorld, les joueurs luttent pour conquérir les régions d\'un monde où il n\'y a pas de place pour tous ! En choisissant la bonne combinaison entre les 14 Peuples et les 20 Pouvoirs Spéciaux au bon moment, vous pourrez étendre votre empire, souvent aux dépens de vos voisins !\r\n\r\nIl n\'y a pas assez de place pour tous dans Small World ! Trop de Peuples vivent sur votre territoire - un territoire que vos ancêtres vous ont légué pour que vous bâtissiez un empire et dominiez le monde !\r\nChoisissez une civilisation et étendez votre empire en déplaçant les tuiles représentant votre peuple pour conquérir les régions alentour et amasser des points de victoire. Votre empire finira par atteindre les limites de sa puissance et il vous faudra l\'abandonner pour une autre civilisation. La clé de la victoire est de guetter le moment opportun pour faire décliner votre empire et en mener un autre à son apogée. Ce n\'est qu\'ainsi que vous régnerez sur le monde de Small World !\r\n\r\nGrâce à son matériel irréprochable et ses illustrations de qualité, vous plongerez dans un monde où les peuples luttent sans merci en envoyant leurs troupes à la conquête de nouvelles régions : les civilisations les plus faibles seront impitoyablement chassées de ce monde trop étroit. \r\n\r\nSmallWorld est un jeu de plateau et de conquête avec des règles simples mais une très grande profondeur stratégique.', 'https://www.espritjeu.com/upload/image/smallworld-p-image-63225-grande.jpg', '50.50', '2023-10-27 10:11:02', NULL),
(3, 'Colt Express', 'Retrouvez l\'ambiance des meilleurs films de Western lorsque les trains se faisaient attaquer. Pas de pitié, pas d\'alliance possible : entre les wagons, sur le toit, les balles fusent !\r\n\r\nDans le jeu Colt Express, les joueurs incarnent des bandits qui se lancent à l\'attaque d\'un train de voyageurs en plein Far-West.\r\n\r\nChaque joueur représente un personnage qui a sa propre personnalité mais ils ne rêve tous qu\'à réunir le plus gros magot en détroussant les passagers avant que le train n\'arrive en gare.\r\n\r\nUne partie se déroule en 5 manches. A chaque manche, vous devez programmer vos actions en utilisant les cartes : avancer, monter ou descendre, voler, tirer, donner un coup de poing, sont parmi les actions possibles. Si vous êtes blessé, des cartes Blessure viendront rejoindre votre paquet de cartes Action et vont ainsi vous handicaper.\r\n\r\nAvec son matériel de jeu en 3 dimensions, Colt Express est réellement immersif. Le plaisir est renouvelé à chaque partie et vos aventures le long de ce train du Far-West seront palpitantes et pleine de rebondissements.', 'https://www.espritjeu.com/upload/image/colt-express-p-image-67865-grande.jpg', '32.00', '2023-10-27 10:13:12', NULL),
(4, 'Catan', 'Construisez vos villes, vos routes, en profitant au mieux des ressources de cette île si accueillante tout en commerçant avec vos voisins.\r\n\r\nCatan est un jeu passionnant, véritable succès parmi les jeux de société contemporains. Sorti en 1995 sous le nom \"Les Colons de Catane\", ce jeu de société reste l\'un des plus vendus dans le monde et insufflé un véritable renouveau dans le monde des jeux de stratégie et de plateau.\r\n\r\nLes règles sont simples, les parties sont d\'une durée raisonnable et le mécanisme est très fluide alliant gestion de ressources et négociations entre joueurs.\r\n\r\nL\'objectif : vous devez être le premier à atteindre 10 points de victoire. Les points de victoire sont acquis en construisant des routes etvillages.\r\nCatan est basé sur plusieurs mécanismes simples. Le plateau représente l\'Ile de Catane et ses différents paysages vous apportant différents types de ressources. Selon la position sur le plateau de vos routes et villages,vous collecterez à chaque tour des ressources que vous gérerez afin de construire routes et villages (qui doivent toujours être reliés).\r\n\r\nVous pourrez échanger des ressources avec vos adversaires, négocier mais aussi gêner leur développement en plaçant judicieusement vos propres constructions. Plus vous vous développerez, plus vous aurez des chances de collecter des ressources supplémentaires pour construire et ainsi voler vers la victoire.\r\n\r\nCatan, malgré sa simplicité, a une dimension tactique et stratégique très sympathique.Des extensions complémentaires au jeu de base vous permettent en apportant de nouvelles possibilités de renouveler le jeu et de le rendre encore plus passionnant.', 'https://www.espritjeu.com/upload/image/catan-p-image-65490-grande.jpg', '39.90', '2023-10-27 10:13:55', NULL),
(5, 'Carcassonne', 'Carcassonne n’est pas seulement le nom d’une ville du sud de la France. Rendue célèbre par ses remparts et ses fortifications, c’est aussi un nom évocateur d’un monde moyen-âgeux fait de chevaliers et de luttes fratricides.\r\n\r\nRetrouvez l’ambiance médiévale en partant à la conquête des terres et villes du sud de la France avec le jeu Carcassonne. Arpentez chemins et champs pour asseoir votre puissance, bloquez vos adversaires et triomphez par votre stratégie sur le tableau des scores.\r\n\r\nGrâce à ses parties courtes, son mécanisme mêlant tactique et opportunisme, ce petit jeu a tout pour séduire et permettre de grands moments de jeu en famille.\r\n\r\nPrimé en Allemagne - « Spiel des Jahres 2001 » (Jeu de société de l’année) - Carcassonne est un jeu d’une très grande simplicité, accessible à tous et original.\r\n\r\nVotre but : Obtenir le plus de points lors du décompte final.\r\n\r\nA la manière des célèbres Dominos, le plateau de jeu se construit peu à peu au gré de la pose de « tuiles paysage » où l’on retrouve de morceaux de routes, champs et forteresses.\r\n\r\nEn plaçant judicieusement vos partisans sur le paysage constitué, vous pourrez acquérir des points grâce à la longueur des routes, la grandeur des villes ou des champs. Les points sont en effet décomptés dès qu’un élément (route, ville etc.) est achevé par la pose d’une tuile.\r\n\r\nLe jeu s’achève lorsque toutes les tuiles ont été posées. Le paysage est constitué et le vainqueur est le joueur le plus avancé sur le tableau des points.\r\n\r\nCarcassonne bénéficie de nombreuses extensions apportant de nouvelles règles et possibilités tactiques.', 'https://www.espritjeu.com/upload/image/carcassonne-p-image-80430-grande.jpg', '32.50', '2023-10-27 10:14:31', NULL),
(6, 'Pandemic', 'Quatre maladies mortelles menacent l’avenir de la planète ! À la tête d’une équipe d’élite, vous allez parcourir le monde pour entraver la progression de l’infection et développer les ressources nécessaires pour découvrir les remèdes.\r\n\r\nDans le jeu Pandemic, vous devrez coopérer et tirer profit de vos forces individuelles afin de détruire les maladies avant qu’elles n’affligent le monde entier. Le temps presse : épidémies et éclosions accélèrent la propagation du fléau.\r\n\r\nTout le principe du jeu est basé sur la coopération. Vous devez ensemble empêcher les éclosions de maladies et ralentir la propagation des quatre maladies mortelles avant qu\'elles ne contaminent l\'humanité.\r\n\r\nA son tour, un joueur a le droit à 4 actions comme par exemple se déplacer ou traiter une maladie sur le lieu où il se trouve. Chaque joueur choisit ses actions mais les joueurs peuvent s\'échanger des informations librement pour optimiser chaque coup.\r\n\r\nPandemic est un jeu de plateau passionnant et très immersif. Chaque joueur a un rôle avec des capacités spéciales et vous devrez au mieux ses capacités dans l\'intérêt de tous.Votre équipe fera le tour du monde pour entraver la propagation des maladies et développer les ressources nécessaires pour découvrir les remèdes. La coopération vous permettra de tirer profit de vos forces individuelles afin de contenir les maladies avant qu\'elles n\'affligent le monde entier.\r\n\r\nCette dernière édition de 2022 inclus 2 nouveaux rôles : Planificateur d\'urgence et Spécialiste en mise en quarantaine.', 'https://www.espritjeu.com/upload/image/pandemic--pandemie--p-image-66186-grande.jpg', '36.90', '2023-10-27 10:15:47', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'a@a.a', 'AAaa@@11', 'ROLE_SUPER_ADMIN', '2023-10-27 11:33:02', NULL),
(2, 'b@b.b', 'BBbb&&22', 'ROLE_ADMIN', '2023-10-27 11:33:02', NULL),
(3, 'c@c.c', 'CCccéé33', 'ROLE_USER', '2023-10-27 11:33:02', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
