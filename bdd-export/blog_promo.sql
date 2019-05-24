-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 24 mai 2019 à 12:25
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog_promo`
--
CREATE DATABASE IF NOT EXISTS `blog_promo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog_promo`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url_img` varchar(255) DEFAULT NULL,
  `alt_img` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_articles` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `users_id`, `title`, `content`, `url_img`, `alt_img`, `created_at`, `updated_at`) VALUES
(1, 1, 'Présentation de la formation', 'La nouvelle formation de « Développeur Web » dispensée par la Corrèze Digital School, ouverte en parallèle de la section Référent(e) Digital, vise à transmettre des compétences techniques dans le domaine de la programmation (apprentissage des langages informatiques, développement front-end et back-end, etc.).\r\nInstallés dans les locaux du Pôle Bois à Tulle près de l\'immeuble consulaire du Puy Pinçon, les apprenants suivent une formation intensive de 3 mois avant de pouvoir profiter d’une immersion de 12 mois en entreprise.\r\nEn partenariat pédagogique avec Simplon.co, le centre de formation, résolument tourné vers l’insertion professionnelle, préconise :\r\n\r\nL’apprentissage par la pratique : le « learning by doing », très peu de cours magistraux,\r\nLa stimulation de l’autonomie : pour évoluer tout au long de la formation et au-delà,\r\nL’accent sur le travail de groupe : programmation en binôme, mise en commun des savoirs, etc.\r\nUn contact permanent avec l’économie réelle : projets concrets, rencontres avec des professionnels, etc.\r\n\r\n    A l’issue de la formation, les apprenants maîtrisent les points essentiels du développement web :\r\n\r\nDévelopper la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité : maquetter une application, réaliser une interface utilisateur web statique et adaptable, développer une interface utilisateur web dynamique, réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce ;\r\n\r\nDévelopper la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurité : créer une base de données, développer les composants d’accès aux données, développer la partie back-end d’une application web ou web mobile, élaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce.\r\n\r\nLa compétence professionnelle concernant l’anglais technique sera traitée dans chacun des blocs de compétence de façon transversale.\r\n\r\n    Ouverte à tous, cette formation fait des émules auprès des personnes ayant une appétence pour les domaines du numérique et de l\'informatique, un goût pour le travail en équipe, une bonne autonomie ainsi qu\'une forte motivation à s\'impliquer dans une formation. Unique dans le département, elle permet de contribuer à la dynamisation numérique amorcée ces derniers mois.\r\n', 'img/formation.png', 'logo_formation', '2019-05-23 10:50:49', NULL),
(2, 1, 'Technologies et Compétences\r\nabordées\r\nTour d’horizon du contenu de la formation\r\n', 'Dans le cadre de la préparation au titre professionnel de développeur/se Web, de multiples technologies ont été abordées. Outre l’apprentissage de langages, la formation vise à apporter des compétences globales et transversales et à les mettre en application à travers diverses activités.\r\n\r\nLes technos\r\n\r\n    Développement :\r\nHTML5\r\nCSS3 + Bootstrap 4\r\nJavaScript + jQuery\r\nPHP + Symfony 4\r\n            programmation procédurale\r\nProgrammation orientée objet\r\nMVC\r\nSQL & bases de données\r\n\r\nCMS & e-commerce :\r\n    Wordpress\r\n    PrestaShop\r\n\r\nSécurité\r\n    Connaissances des failles de sécurité\r\n    RGPD\r\n\r\nAnglais\r\n    L’anglais est à la base de la programmation. Il est prépondérant tout au long de la formation, dans tous les principaux domaines abordés.\r\n\r\nCompétences connexes\r\n\r\n    Linux\r\n    Git / Github\r\n    Gestion de projet\r\n        Méthodes Agiles - Travail d’équipe\r\n        Cahier des charges\r\n        Recettes\r\n    Maquettage\r\nVeille technologique\r\n\r\n\r\n\r\nCertification qualité web - Opquast\r\n\r\n\r\n\r\n\r\nActivités\r\n\r\nDévelopper la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité.\r\n\r\n        Développer des sites vitrine adaptatifs (responsive)\r\n        HTML - CSS (Bootstrap) - JavaScript (jQuery)\r\n\r\nDévelopper la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurité.\r\n\r\n        Développer des sites dynamiques\r\n        mySQL - PHP (symfony)\r\n\r\nCompétences\r\n\r\n    Maquetter une application : utiliser des outils de maquettage pour construire des maquettes optimisées pour les différents médias.\r\nMaquettes fonctionnelles (dans le respect du cahier des charges)\r\nMaquettes graphiques (dans le respect de la charte graphique)\r\n\r\n    Réaliser une interface utilisateur web statique et adaptable : structure et mettre en forme des pages web dans le respect des maquettes. Dans une logique de qualité, en suivant les principes de sécurité et les techniques de référencement naturel.\r\n        Développer la structure : HTML\r\nIntégrer des feuilles de styles : CSS\r\n        Utiliser un framework de type adaptatif : Bootstrap\r\n\r\n    Développer une interface utilisateur web dynamique : intégrer des scripts événementiels dans une page web et améliorer le site en utilisant des mécanismes asynchrones.\r\n        Développer avec un langage de script client : JavaScript (+ AJAX)\r\n        Utiliser un framework de script client : jQuery\r\n\r\n    Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce : installer et maintenir une solution de type CMS ou e-commerce.\r\n        Construire la structure du site\r\n        Installer, réaliser, utiliser un gabarit de mise en page :\r\nWordPress - PrestaShop\r\n\r\nCréer une base de données : organiser les données et mettre en oeuvre les instruction pour implémenter les contraintes et relations entre tables.\r\n    Créer une base de donnée : mySQL\r\n\r\nDévelopper les composants d’accès aux données : développer en langage objet les composants de persistance de l’application permettant la création, la lecture, la modification et la suppression des données du site (CRUD) et d’accès aux données, comprenant les mécanismes d\'authentification, tout en tenant compte de l’intégrité et la sécurisation de l’ensemble des données.\r\n    Développer avec un langage de requête : de type SQL\r\n\r\n    Développer la partie back-end d’une application web ou web mobile : développer en langage objet la partie dynamique de l’application avec des composants serveur en sécurisant la liaison entre le client et le serveur web :\r\n        Développer avec un langage serveur : PHP\r\n\r\n    Elaborer et mettre en oeuvre des composants dans une application de gestion de contenu ou e-commerce : développer la partie dynamique d’une application avec des composants serveurs, en langage objet en utilisant un environnement de développement intégré.\r\n        Développer la partie back-end via un CMS : WordPress\r\n        Développer la partie back-end d’une boutique en ligne : PrestaShop', 'img/technos.png', 'logos_technologies', '2019-05-24 13:36:13', NULL),
(3, 1, 'Front-end', 'Qu’est-ce que le front-end ? \r\nDans le milieu du développement web, il représente la partie visible pour l’utilisateur. Il est composé de 3 grands blocs qui sont des langages de programmation.\r\n\r\nQuels sont ces 3 langages informatiques ?\r\nTout d’abord, et ce n’est même pas un langage de programmation, le HTML.\r\nDans une page web le HTML (HyperText Markup Language), a pour but de structurer de la page avec des balises sémantiques comme des sections, des articles, des images, des listes ou beaucoup d’autre !\r\n\r\nEnsuite, nous avons le CSS (Cascading Style Sheets).\r\nLui a pour rôle de mettre en forme la structure posée par l’HTML. Et pour accomplir sa tâche, il va prendre en compte certaines cibles posées par le HTML. Ces cibles peuvent être à la fois très générale ou extrêmement précise. Par exemple, nous pouvons cibler toutes les sections, mais nous pouvons aussi cibler une seule d’entre elles si nous lui avons posé un identifiant ou une classe dans la partie HTML.\r\n    Le CSS peut aussi animer la page d’un site web, mais contrairement au troisième langage que nous allons voir celui-ci ne peut pas changer l’état actuel de la structure HTML. Si vous désirez avoir plus d’exemple concret sur les animations possible à l’aide de CSS. Je vous invite à lire cet (lien vers l’article de Jérémie) article !\r\n\r\nEt enfin le troisième langage indispensable ou presque à toute page web qui se respecte est le Javascript !\r\nLe but de Javascript et de rendre dynamique une page HTML, pour arriver à ses fins, il peut accéder au DOM (Document Object Model) que nous ne verrons pas en détails dans cet article découverte !\r\nLa différence avec son camarade CSS, c’est que grâce à son accès au DOM, Javascript peut à la fois animer le contenu d’une page, mais aussi changer le contenu d’une page quand l’utilisateur (vous) interagissez avec le site web, que ce soit avec la souris, le clavier, ou d’autres méthodes plus exotique comme votre micro ou votre webcam ! (Voici par exemple une application qui réagit à votre micro ! https://codepen.io/noda/pen/ONmGam). \r\n\r\nEst ce que c’est suffisant ? \r\nDans cette petite conclusion, demandons-nous si ces langages sont suffisants à eux même pour concevoir un site web.\r\nLa réponse et oui, mais ça dépend ! Ces trois langages peuvent répondre à tous les besoins (ou presque) du côté front-end, nous pouvons par exemple créer un site vitrine très complet et professionnelle avec eux. Mais alors où sont leurs limites ? Je vous laisse lire l’article sur le back-end (lien vers l’article back-end) qui vous expliquera la face cachée du code, les serveurs, les bases de données, tout ce qui permets de faire des applications plus complètes !', 'img/frontend.png', 'dessin_smartphone', '2019-05-24 13:36:13', NULL),
(4, 1, 'Back-end', 'Qu’est-ce que le back-end ? \r\nEn français on peut traduire ce terme par arrière plan. \r\nDans les métiers de développement web, il représente la partie invisible pour l’utilisateur. Ce qui lui est caché et qui est exécuté par le serveur. Il rend le site dynamique en chargeant du contenu à partir de bases de données.\r\nPar l’exemple on pourrait s’imaginer un magasin.\r\nOn trouve une arrière-boutique où sont stockés les articles, et un bureau qui assure le bon fonctionnement du magasin. Il s\'agit du back-end, de tout ce qui se passe en arrière-plan sans que le client ne s\'en rende compte. Dans ce même magasin, on retrouve un service à la clientèle et des étalages. Il s\'agit du front-end, de ce que le client voit.\r\n\r\nQuels sont ces langages informatiques utilisés en Back-end ?\r\nLe travail du serveur sera codé dans un langage propre à lui : le langage serveur, couplé à des bases de données.\r\nC’est avec ce langage que notre serveur pourra décider et générer des pages Web à renvoyer à chaque client.\r\nIl existe de nombreux langages serveurs : PHP (Hypertext Preprocessor), Java, Python, Ruby , NodeJs, ASP.Net etc.\r\nMais alors lequel choisir ? Quel est le meilleur langage serveur ?\r\nEn fait, tout dépend de vos connaissances en programmation. Si vous avez déjà manipulé un de ces langages, il sera alors plus rapide d’avancer avec. Si vous débutez, commencer par PHP semble une bonne option.\r\n\r\nLe langage PHP est un langage de scripts généraliste et Open Source, spécialement conçu pour le développement d\'applications web. Il peut être intégré facilement au HTML (HyperText Markup Language).\r\nCe qui distingue PHP des langages de script comme le Javascript, est que le code est exécuté sur le serveur, générant ainsi le HTML, qui sera ensuite envoyé au client. Le client ne reçoit que le résultat du script, sans aucun moyen d\'avoir accès au code qui a produit ce résultat.\r\nLe grand avantage de PHP est qu\'il est extrêmement simple pour les néophytes, mais offre des fonctionnalités avancées pour les experts.\r\n\r\nQu’en est-il des bases de données ? \r\nQuel que soit le site Web dynamique que l’on veut faire, on aura souvent besoin d’enregistrer des informations pour les réutiliser plus tard. Par exemple, on peut avoir besoin de stocker les données concernant les utilisateurs de notre site.\r\nNotre serveur devra alors utiliser une base de données. C’est un ensemble de fichiers dans lequel les données sont stockées de façon organisée.\r\nIl y a plusieurs systèmes de bases de données : MySQL, Oracle, Microsoft SQL Server…\r\n\r\nDans notre formation développeur Web, nous utilisons MySQL car c’est de loin le plus utilisé parmi ceux qui sont gratuits.\r\nPour accéder aux données, notre serveur utilisera encore un autre langage : le SQL (Search Query Language) qui fonctionne avec des requêtes.\r\n\r\n\r\nEst ce que c’est suffisant ? \r\nReprenons notre exemple de magasin.\r\nUne fois terminée la partie back-end du site nous offre un large stock d’articles, le bureau de gestion de stocks et de livraisons, mais nous n’avons ni magasin ni vitrine ! L’esthétique du site, le fait de pouvoir le consulter sur tous types d’écrans, les catalogues de produits affichés, les animations … Pour cela il nous faudra faire de la programmation front-end, du design ...\r\n(lien vers la page article front-end).\r\n', 'img/backend.jpg', 'screen_code', '2019-05-24 13:36:13', NULL),
(5, 1, 'Le Shell, du bash, la vie !', 'Le Shell est une interface système ou coque logicielle qui fournit l’interface utilisateur d’un système d’exploitation. \r\nCette dénomination est une métaphore pour désigner la couche la plus haute d’un système par opposition à la couche de bas niveau appelée noyau. Symboliquement le shell est la coquille qui enveloppe le noyau (Kernel). \r\nDéveloppé à l’origine sur les systèmes Unix (Linux et Mac essentiellement), un équivalent à été mis en place par Windows.\r\n\r\nC’est une interface qui permet donc d’interagir directement sur la machine avec des commandes en mode texte (on évite ainsi les interfaces graphiques). Son langage est pour la majeure partie des système Linux le Bash (Bourne-Again-Shell) qui peut-être utilisé de 2 façons :\r\nmode interactif : Bash attend les commandes saisies par un utilisateur puis renvoie le résultat de ces commandes et se place à nouveau en situation d\'attente.\r\nmode batch : Bash interprète un fichier texte contenant les commandes à exécuter.\r\n\r\nDans cet article je n’aborderai que le bash en mode interactif et de façon succincte quelques commandes de bases. Toutes les commandes ont un sens et sont paramétrable. \r\n\r\nPremier exemple la commande man, elle permet d’avoir accès au “manuel” d’utilisation des différentes commandes :\r\n     mohican19@NBHPCORRTECH18:~$ man ls\r\nJ\'accède ainsi à l’aide pour la commande “ls”\r\n\r\nDe base en se connectant au terminal (ctral+alt+T sous linux-debian), on se trouve dans le dossier home. Pour accéder à la racine :\r\n    mohican19@NBHPCORRTECH18:~$ cd /\r\nLa commande cd signifie Change Directory, elle nous permet donc de changer de répertoire.\r\nPour savoir où l’on est en cas de doute, j’utilise la commande “pwd” :\r\n    mohican19@NBHPCORRTECH18:~$ pwd\r\n“Print working directory” nous indique alors le répertoire dans lequel on se trouve.\r\n\r\nOn peut lister les dossiers et répertoires avec la commande ls\r\n    mohican19@NBHPCORRTECH18:~$ ls\r\nOn obtient alors une liste simple mais on peut aussi paramétrer la commande :\r\n    mohican19@NBHPCORRTECH18:~$ ls -a\r\nIci le -a nous permet d’afficher les fichiers cachés en plus de la liste de base, on peut utiliser plusieurs paramètres simultanément, si par exemple je veux obtenir plus d’information :\r\n    mohican19@NBHPCORRTECH18:~$ ls -al\r\nLà j’ai donc accès maintenant à tous les fichiers ainsi qu’aux données relatives au droits, aux propriétaires…. Pour plus d’option, utiliser la commande man c’est pratique ;)\r\n\r\nCeux sont là, quelques commandes de base pour naviguer dans le système sans interface graphique, il en existe des milliers d’autres permettant de tout faire(les interfaces sont juste des couches supplémentaires permettant de déclencher ces commandes avec une souris). Certaines sont natives, d’autres sont à installer. Elles possèdent de nombreux paramètres (-f pour forcer une action par exemple) et sont indispensables au fonctionnement d’un OS. (... à suivre)', 'img/bash.png', 'screen_bash', '2019-05-24 13:36:13', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_articles_comments_articles_id` (`articles_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `articles_id`, `author`, `content`, `created_at`) VALUES
(1, 1, 'Anonyme', 'test', '2019-05-23 13:01:21');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `url_avatar` varchar(255) DEFAULT NULL,
  `file` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `login`, `password`, `url_avatar`, `file`) VALUES
(1, 'Jarod', 'MIDY', 'jarod.midy@gmail.com', 'koinzell', 'admin', NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_users_articles` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_articles_comments_articles_id` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
