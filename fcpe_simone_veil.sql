-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 15 jan. 2021 à 16:56
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fcpe_simone_veil`
--

-- --------------------------------------------------------

--
-- Structure de la table `fcpe_articles`
--

CREATE TABLE `fcpe_articles` (
  `article_id` int(11) NOT NULL,
  `article_titre` varchar(200) NOT NULL,
  `article_desc` text NOT NULL,
  `article_img` text NOT NULL,
  `article_contenu` text NOT NULL,
  `article_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fcpe_articles`
--

INSERT INTO `fcpe_articles` (`article_id`, `article_titre`, `article_desc`, `article_img`, `article_contenu`, `article_date`) VALUES
(1, '#1 La pÃ©dagogie Montessori en maternelle : pour une pratique Ã  lâ€™Ã©cole publique? ', 'La mÃ©thode Montessori est une pÃ©dagogie Ã©ducative basÃ©e sur la libertÃ© de l\'enfant dans le choix de ses activitÃ©s, l\'apprentissage par l\'expÃ©rimentation et l\'autonomie. Par oÃ¹ commencer ? Comment s\'applique-t-elle au sein d\'une Ã©cole ? Zoom sur cette pÃ©dagogie qui \"apprend Ã  faire tout seul\".  ', '6001abc4a4ba81.51802587.jpg', '<p>D&#39;o&ugrave; vient la m&eacute;thode Maria Montessoriâ€¯?&nbsp;</p>\r\n\r\n<p>Tout commence en 1899 : les recherches deâ€¯Maria Montessori,â€¯m&eacute;decin et militante active pour la reconnaissance des droits de l&#39;enfants, se portent principalement sur lesâ€¯enfants avec une d&eacute;ficience mentale ou porteurs de troubles mentaux, qu&#39;elle rencontre dans des asiles et des cliniques psychiatriques. Pendant plusieurs ann&eacute;es, elle &eacute;tudie leurs comportements, leur sens de l&#39;observation, leurs&nbsp;atypicit&eacute;s&nbsp;et met en lumi&egrave;re plusieurs principes &eacute;ducatifs qui semblent &ecirc;tre adapt&eacute;s &agrave; ces enfants.â€¯En parall&egrave;le, elle forme plusieurs &eacute;ducateurs &agrave; ceâ€¯qui &eacute;tait appel&eacute; &agrave; l&#39;&eacute;poqueâ€¯&quot;l&#39;observation et l&#39;&eacute;ducation d&#39;enfants faibles d&#39;esprit&quot; et parvient &agrave; ce que ces enfants &quot;d&eacute;ficients&quot; apprennent &agrave; lire, &agrave; &eacute;crire, voire &agrave; passer des examens. En 1901, elle est parfaitement convaincue que ses m&eacute;thodes peuvent s&#39;appliquer &agrave; desâ€¯enfants non porteurs de troubles mentaux.â€¯Ainsi, en 1907, saâ€¯premi&egrave;re &eacute;cole ouvre ses portes &agrave; Rome.â€¯La m&eacute;thode Montessori est n&eacute;e.â€¯&nbsp;</p>\r\n\r\n<p>En quoi consiste la p&eacute;dagogie Montessoriâ€¯?&nbsp;</p>\r\n\r\n<p>Laâ€¯p&eacute;dagogie Montessoriâ€¯s&#39;appuieâ€¯sur plusieurs principes : elle distingue des p&eacute;riodes dites &quot;sensibles&quot;â€¯chez l&#39;enfant, c&#39;est-&agrave;-dire des moments pendant lesquels il sera le plus susceptible de d&eacute;velopper un type de comp&eacute;tence. On distingue ainsi diff&eacute;rentes &eacute;tapes d&#39;apprentissage chez l&#39;enfant : leâ€¯langage, la coordination des mouvements, l&#39;ordre, le raffinement des sens, le comportement social et la pr&eacute;hension des petits objets. D&#39;ailleurs, le mat&eacute;riel sensoriel destin&eacute; &agrave; l&#39;apprentissage est sp&eacute;cifique et repose surâ€¯l&#39;utilisation des cinqâ€¯sens.â€¯Il faut savoir que l&#39;enfant apprend une nouvelle &eacute;tape seulement quand la pr&eacute;c&eacute;dente est d&eacute;j&agrave; bien int&eacute;gr&eacute;e.&nbsp;</p>\r\n\r\n<p>Mais tous les enfants peuvent-ils apprendre avec la p&eacute;dagogie Montessoriâ€¯?â€¯&quot;Aucun profil sp&eacute;cifique ne pr&eacute;vaut plus qu&#39;un autre pour laâ€¯p&eacute;dagogie Montessori,â€¯affirme Emmanuelle&nbsp;Opezzo.â€¯Cette p&eacute;dagogie est universelle et intemporelleâ€¯et convient donc &agrave; chaque enfant. Son mat&eacute;riel concret et scientifique m&egrave;ne l&#39;enfant vers la pens&eacute;e abstraite et permet &agrave; chacun d&#39;&eacute;voluer au gr&eacute; de ses sensibilit&eacute;s et de ses besoins.&quot;â€¯Enfin, le bilinguisme est l&#39;une des sp&eacute;cificit&eacute;s de laâ€¯m&eacute;thode Montessoriâ€¯: l&#39;enfant a alors, d&egrave;s la maternelle, un r&eacute;f&eacute;rent francophone et un autre anglophone.â€¯</p>\r\n', '2021-01-15 14:28:12'),
(2, '#2 Le Covid-19 une pÃ©riode Ã  affronter avec un enseignement adaptÃ© ', 'En vue de la crise sanitaire inÃ©dite , lâ€™Ã©cole Ã  su  sâ€™adapter et Ã  construit un objectif Ã©ducatif prÃ©cis. A savoir , aider lâ€™enfant Ã  entrer dans la responsabilitÃ©, lui permettre une vie autonome, une expression personnelle et de dÃ©velopper son sens moral, acquÃ©rir les instruments de la connaissance et dÃ©couvrir lâ€™universâ€¦  ', '6001abe48180f9.70713486.jpg', '<p>Les enseignements de l&rsquo;&eacute;cole Primaire seront assur&eacute;s par des enseignants impliqu&eacute;s dans l&rsquo;&eacute;volution de leurs &eacute;l&egrave;ves.&nbsp;Les enfants sont amen&eacute;s &agrave; d&eacute;velopper leurâ€¯curiosit&eacute;, leurâ€¯autonomie et &agrave; participer&nbsp;activement &agrave; leurs apprentissages. Chaque enfant re&ccedil;oit des d&eacute;fis scolaires qui lui seront propos&eacute;s et apprendra &agrave; se d&eacute;passer .&nbsp;</p>\r\n\r\n<p>La collaboration, le tutorat et l&rsquo;entraideâ€¯spontan&eacute;s prennent le pas sur la comparaison et la comp&eacute;tition. Laâ€¯dynamique de groupeâ€¯est vertueuse et respectueuse des diff&eacute;rences de chacun.&nbsp;</p>\r\n', '2021-01-15 14:29:19'),
(3, '#3 Clipounets , un outil dâ€™Ã©veil au langage  ', 'DÃ¨s son entrÃ©e Ã  lâ€™Ã©cole, lâ€™enfant est exposÃ© Ã  un monde dâ€™apprentissages de concepts et de savoirs. Câ€™estâ€¯sa capacitÃ© Ã  sâ€™exprimerâ€¯et Ã  comprendre les autres qui va lui ouvrir les portes de ce nouveau monde. La maÃ®trise du langage en est la clef.', '600198ed9373a7.25592552.jpg', '<p>Les&nbsp;Clipounets&nbsp;jouent un r&ocirc;le fondamental dans l&rsquo;apprentissage du langage. Ils sont construits de mots simples qui riment sur des m&eacute;lodies faciles &agrave; chanter. C&rsquo;est par l&rsquo;imitation de ces mots et par leur r&eacute;p&eacute;tition que l&rsquo;enfant se les approprie. En regardant et en &eacute;coutant ses chansons pr&eacute;f&eacute;r&eacute;es mises en images, ilâ€¯s&rsquo;&eacute;veille en confianceâ€¯et en douceur au monde des mots, des rimes, de la po&eacute;sie&hellip; de la langue.&nbsp;La capacit&eacute; d&rsquo;attention d&rsquo;un tout-petit est limit&eacute;e : plus le programme est court, mieux il comprend et plus &ccedil;a l&rsquo;int&eacute;resse. Dans l&rsquo;&eacute;laboration d&rsquo;un&nbsp;Clipounet&nbsp;plusieurs param&egrave;tres sont pris en compte: Dur&eacute;e, rythme des images, qualit&eacute; des interpr&eacute;tations et des musiques, choix des dessins et des couleurs. L&rsquo;aspect ludique et humoristique des&nbsp;Clipounetsâ€¯stimulent son intelligenceâ€¯tout en le divertissant.&nbsp;&nbsp;</p>\r\n\r\n<p>Lus &agrave; voix haute par un grand, les textes inscrits au bas de l&rsquo;&eacute;cran au deuxi&egrave;me passage d&rsquo;un&nbsp;Clipounet&nbsp;font d&eacute;couvrir &agrave; l&rsquo;enfant que les mots de ses chansons pr&eacute;f&eacute;r&eacute;es s&rsquo;&eacute;crivent. Cette relationâ€¯sollicite son envie de lire.&nbsp;Connues du plus grand nombre, les chansons des&nbsp;Clipounets&nbsp;appartiennent &agrave; une culture commune. Le fait que des personnes de son entourage connaissent ses chansons va permettre &agrave; l&rsquo;enfant de se reconna&icirc;tre comme faisant partie de cet entourage. Partager une s&eacute;ance de&nbsp;Clipounets&nbsp;avec l&rsquo;enfant facilite son &eacute;panouissement social.&nbsp;</p>\r\n', '2021-01-15 14:30:21'),
(4, '#4 Le carnet de suivi des apprentissages', 'Un outil crÃ©ant de  lâ€™interaction entre les parents et les Ã©quipes pÃ©dagogiques.', '6001994034f480.12106276.jpg', '<p>&Agrave; l&rsquo;&eacute;cole maternelle, les &eacute;carts d&rsquo;&acirc;ge entre les enfants, donc de d&eacute;veloppement et de maturit&eacute;, ont une grande importance et influent sur le rythme des acquisitions. Les diff&eacute;rences inter-individuelles doivent &ecirc;tre prises en compte pour que chacun progresse au mieux.&nbsp;Ainsi , tout regard &eacute;valuatif doit veiller &agrave; ne pas g&eacute;n&eacute;rer de &laquo; norme pr&eacute;coce &raquo; ; ainsi il convient de s&rsquo;attacher autant aux proc&eacute;dures et processus que l&rsquo;enfant met en &oelig;uvre dans ses apprentissages qu&rsquo;&agrave; l&rsquo;appr&eacute;ciation des r&eacute;sultats de son action.&nbsp;</p>\r\n\r\n<p>Pour se faire&nbsp; ,&nbsp;l&rsquo;enseignant de la classe renseigne r&eacute;guli&egrave;rement pour chaque &eacute;l&egrave;ve un carnet de suivi des apprentissages qui permet de rendre compte de ses progr&egrave;s, selon une fr&eacute;quence adapt&eacute;e &agrave; son &acirc;ge. Ce document suit l&#39;&eacute;l&egrave;ve en cas de changement d&#39;&eacute;cole au cours de sa scolarit&eacute;.. Il est r&eacute;guli&egrave;rement communiqu&eacute; aux parents ou au responsable l&eacute;gal de l&rsquo;&eacute;l&egrave;ve. La tenue du carnet de suivi des apprentissages est obligatoire mais le format du document est laiss&eacute; &agrave; l&rsquo;appr&eacute;ciation des enseignants. Il permet de :&nbsp;&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Suivre les progr&egrave;s des &eacute;l&egrave;ves&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Durant l&rsquo;ann&eacute;e scolaire, les enseignants peuvent relever, au fil des jours, les faits notables qui surviennent pour chaque &eacute;l&egrave;ve ; une r&eacute;vision r&eacute;guli&egrave;re de ces prises de note am&egrave;ne &agrave; constater les progr&egrave;s, les stagnations, voire les r&eacute;gressions. Pour garder trace du parcours d&rsquo;apprentissage de chaque &eacute;l&egrave;ve et le valoriser aux yeux de l&rsquo;enfant et de ses parents, les enseignants collectent des productions, des t&eacute;moignages de r&eacute;ussites sous forme de photographies prises au cours d&rsquo;activit&eacute;s, de dessins, d&rsquo;&eacute;crits, d&rsquo;enregistrements, etc.&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Informer les parents ou le responsable l&eacute;gal de l&rsquo;&eacute;l&egrave;ve&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Il s&rsquo;agit ici , d&rsquo;&nbsp;expliciter la lecture pour les parents d&rsquo;&eacute;l&egrave;ves, voire les enfants eux-m&ecirc;mes. Les &eacute;quipes, famili&egrave;res de ce type d&rsquo;outils (cahiers de progr&egrave;s, cahiers de r&eacute;ussite&hellip;) veilleront &agrave; ce que ce carnet de suivi soit concis et lisible par les familles.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Le&nbsp;carnet de suivi des apprentissages est communiqu&eacute; aux parents ou au responsable l&eacute;gal de l&rsquo;&eacute;l&egrave;ve selon une fr&eacute;quence adapt&eacute;e &agrave; l&rsquo;&acirc;ge de l&rsquo;enfant et a minima 2 fois par an. Les parents le signent pour attester en avoir eu connaissance.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>En conclusion , la transmission du carnet de suivi des apprentissages est l&rsquo;occasion d&rsquo;instaurer une communication de qualit&eacute; avec les parents des &eacute;l&egrave;ves. On peut, par exemple, les recevoir dans la classe pour leur remettre ce document et &eacute;tablir un dialogue constructif en &eacute;tant attentif au fait que ce qui est dit de l&rsquo;enfant &agrave; sa famille ne le r&eacute;duise pas &agrave; sa seule adaptation scolaire. On valorisera les efforts, les essais, les r&eacute;ussites.&nbsp;</p>\r\n', '2021-01-15 14:31:44');

-- --------------------------------------------------------

--
-- Structure de la table `fcpe_contact`
--

CREATE TABLE `fcpe_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_nom` varchar(50) NOT NULL,
  `contact_prenom` varchar(50) NOT NULL,
  `contact_mail` varchar(50) NOT NULL,
  `contact_tel` int(11) NOT NULL,
  `contact_classe` varchar(50) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fcpe_contact`
--

INSERT INTO `fcpe_contact` (`contact_id`, `contact_nom`, `contact_prenom`, `contact_mail`, `contact_tel`, `contact_classe`, `contact_message`, `contact_date`) VALUES
(1, 'Mahmoudi', 'Samy', 'samy.mahmoudi@edu.devinci.fr', 641060424, 'Moyenne Section', 'Bonjour,\r\n\r\nje voulais savoir si nous pourrions accompagner nos enfants dans les classes Ã  partir de la rentrÃ©e ? ', '2021-01-15 14:56:17'),
(2, 'Doublet', 'Antonin', 'antonin@edu.devinci.fr', 158985647, 'Petite Section', 'Bonjour, savez-vous si en temps d\'hiver les enfants sortent quand mÃªme jouer dans la cour de rÃ©crÃ©ation ? Ma petite fille Lea tombe trop vite malade !', '2021-01-15 15:48:29');

-- --------------------------------------------------------

--
-- Structure de la table `fcpe_qr`
--

CREATE TABLE `fcpe_qr` (
  `qr_id` int(11) NOT NULL,
  `qr_question` text NOT NULL,
  `qr_reponse` text NOT NULL,
  `qr_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fcpe_qr`
--

INSERT INTO `fcpe_qr` (`qr_id`, `qr_question`, `qr_reponse`, `qr_date`) VALUES
(1, 'Mon enfant doit-il se rendre Ã  son Ã©cole ou Ã©tablissement scolaire alors mÃªme que jâ€™ai la possibilitÃ© de le garder en assurant les cours Ã  la maison? ', '<p>Oui, sauf motif&nbsp;d&rsquo;absence d&ucirc;ment justifi&eacute; ou dans l&rsquo;hypoth&egrave;se o&ugrave; la classe ou l&rsquo;&eacute;cole ou l&rsquo;&eacute;tablissement&nbsp;fait l&rsquo;objet d&rsquo;une mesure de fermeture port&eacute;e&nbsp;&agrave;la&nbsp;connaissance des&nbsp;familles, les&nbsp;enfants doivent se&nbsp;rendre &agrave; leur &eacute;cole&nbsp;ou&nbsp;dans leur&nbsp;&eacute;tablissement scolaire.&nbsp;</p>\r\n', '2021-01-15 14:36:38'),
(2, 'Quel est le niveau de protection des masques fournis par le ministÃ¨re de lâ€™Education nationale? ', '<p>Dans son avis du 17 septembre 2020, le Haut conseil de la sant&eacute; publique (HCSP)a&nbsp;soulign&eacute;&nbsp;que les&nbsp;masques grand public de cat&eacute;gorie 1&nbsp;r&eacute;pondant aux sp&eacute;cifications de l&rsquo;Afnor (tels que ceux&nbsp;que le&nbsp;Minist&egrave;re de l&rsquo;&eacute;ducation nationale fournit &agrave; ses agents) garantissent un niveau de filtration &eacute;lev&eacute; et&nbsp;sont suffisamment protecteurs dans le contexte scolaire. La seule circonstance qu&rsquo;un enseignant&nbsp;porterait un masque de ce type et non un masque chirurgical ne doit donc&nbsp;en aucun cas conduire &agrave;&nbsp;consid&eacute;rer que ce personnel est insuffisamment&nbsp;prot&eacute;g&eacute;, y&nbsp;compris s&rsquo;il est au contact d&rsquo;un enfant ne&nbsp;portant pas le masque.&nbsp;</p>\r\n', '2021-01-15 14:37:04'),
(3, 'Les Ã©lÃ¨ves doivent-ils porter des masques? ', '<p>Les conditions de port du masque par les &eacute;l&egrave;ves sont les&nbsp;suivantes:&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>les&nbsp;&eacute;l&egrave;ves en &eacute;cole maternelle&nbsp;ne portent pas de&nbsp;masque;&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>pour&nbsp;les &eacute;l&egrave;ves en &eacute;cole&nbsp;&eacute;l&eacute;mentaire,en&nbsp;coll&egrave;ge et en&nbsp;lyc&eacute;e,le&nbsp;port du masque&nbsp;&laquo;grand&nbsp;&nbsp;public&raquo;&nbsp;est obligatoire dans les espaces&nbsp;clos.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '2021-01-15 14:37:23'),
(4, 'Quelles sont les recommandations pour le fonctionnement des cantines? ', '<p>La cantine&nbsp;scolaire&nbsp;est&nbsp;assur&eacute;e par les collectivit&eacute;s dans le respect des dispositions r&eacute;glementaires et des mesures prescrites par le protocole sanitaire, lequel repose notamment sur le principe de limitation du brassage entre les classes, groupes de classes ou niveaux.&nbsp;</p>\r\n', '2021-01-15 14:37:46');

-- --------------------------------------------------------

--
-- Structure de la table `fcpe_users`
--

CREATE TABLE `fcpe_users` (
  `user_id` int(11) NOT NULL,
  `user_identifiant` varchar(50) NOT NULL,
  `user_password` text NOT NULL,
  `user_statut` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fcpe_users`
--

INSERT INTO `fcpe_users` (`user_id`, `user_identifiant`, `user_password`, `user_statut`) VALUES
(1, 'simone_admin', '$2y$10$IWElgh6kEqGG02MOYHhgv.tqIQicBvUHgrCuoOsmjWoXU0xgwvW4C', 'ADMIN'),
(2, 'simone_parent', '$2y$10$z13nfcFASOloCjbMUR3cBON08WCkCHhCMsxS0eyU71LkZh0qYxliu', 'MEMBRE');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fcpe_articles`
--
ALTER TABLE `fcpe_articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Index pour la table `fcpe_contact`
--
ALTER TABLE `fcpe_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `fcpe_qr`
--
ALTER TABLE `fcpe_qr`
  ADD PRIMARY KEY (`qr_id`);

--
-- Index pour la table `fcpe_users`
--
ALTER TABLE `fcpe_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fcpe_articles`
--
ALTER TABLE `fcpe_articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `fcpe_contact`
--
ALTER TABLE `fcpe_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fcpe_qr`
--
ALTER TABLE `fcpe_qr`
  MODIFY `qr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `fcpe_users`
--
ALTER TABLE `fcpe_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
