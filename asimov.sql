-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 20 fév. 2018 à 16:10
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `asimov`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `titre` text NOT NULL,
  `date` date NOT NULL,
  `corps` text NOT NULL,
  `img` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `date`, `corps`, `img`, `type`) VALUES
(1, 'Premier article !', '2018-02-20', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue, augue id cursus varius, nisi turpis varius enim, laoreet tempor sem eros eu dui. Nam fringilla fermentum lorem, a malesuada metus sodales nec. Curabitur ut augue quam. Nunc fringilla mi vel nulla tempor, sit amet consectetur massa porta. Aliquam nisl orci, viverra sit amet sem quis, malesuada imperdiet mauris. Vestibulum vitae metus leo. Duis maximus ut nunc et bibendum. Vivamus congue auctor lacus ac consectetur. Pellentesque ac libero luctus, auctor orci eu, volutpat odio. In lobortis tempus libero ac luctus. Suspendisse at elit et diam lobortis tristique dapibus in dui. Vestibulum laoreet aliquet risus sit amet imperdiet. Curabitur sed turpis sed justo aliquet pharetra. Ut nunc nunc, ornare eu est eu, hendrerit vestibulum nisl. Fusce semper erat enim, ut mattis metus fringilla non.\r\n\r\nNam eget turpis id libero egestas ultricies nec a elit. Quisque maximus ligula id neque dignissim, dictum porttitor neque malesuada. Integer ornare est ut mauris viverra pharetra. Donec bibendum rhoncus ultrices. Aliquam a consectetur justo. Nam sodales ante porta, tincidunt metus non, aliquet massa. Sed ac mauris eget tellus placerat pretium nec ut odio. Phasellus maximus consequat convallis. Curabitur eget urna libero. Ut nisi orci, cursus id tellus ac, varius tincidunt sem.\r\n\r\nNam in congue dolor, at vulputate turpis. Mauris vehicula auctor diam a tincidunt. In lectus lectus, rutrum ac pulvinar quis, sodales quis orci. Pellentesque facilisis efficitur neque, in suscipit velit interdum at. Phasellus egestas, felis laoreet efficitur vestibulum, sapien nulla vestibulum elit, quis interdum quam neque sit amet massa. Etiam dictum nunc quis arcu consequat, sed feugiat quam bibendum. Mauris egestas nisi nec mattis consequat. Donec dignissim scelerisque nisi sit amet porttitor. Maecenas ullamcorper molestie libero nec suscipit. Duis suscipit mauris ut varius dapibus. Sed nec sem lacus. Praesent efficitur arcu sit amet lacus finibus, sit amet blandit enim blandit.\r\n\r\nDonec posuere nulla a lorem porttitor vestibulum. Nullam posuere varius ultricies. Nunc et dignissim dui. Nullam viverra quam nec mauris feugiat, sed lacinia ante feugiat. Fusce quis urna eget libero commodo dignissim sed ac velit. Phasellus feugiat elementum nisi, eu aliquet quam iaculis sed. Praesent vitae ipsum a nisl vestibulum pellentesque sit amet ac turpis.\r\n\r\nVivamus facilisis, dolor id consectetur pretium, ex justo laoreet justo, vitae dapibus diam libero eget velit. Suspendisse efficitur ipsum in lorem rhoncus maximus. Donec magna nulla, hendrerit ac massa quis, tincidunt sagittis tortor. Duis mattis mi at mauris congue euismod. Aenean sit amet enim sit amet ex tempor ultrices et at leo. Sed quis dignissim ex, quis imperdiet arcu. Maecenas eu tortor auctor, pretium neque et, venenatis mi. Donec venenatis quam sit amet mollis venenatis. Pellentesque vitae leo at erat tempus placerat. Aliquam sapien ex, fermentum in turpis ut, blandit aliquam lacus. Nullam ac vulputate urna.', 'jimmy.png', 'journal'),
(2, 'Porsche 919 Hybrid 2017', '2018-02-20', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu arcu orci. Integer tincidunt eget eros in semper. In hac habitasse platea dictumst. Quisque sollicitudin vehicula ante auctor pellentesque. Proin rhoncus nisi congue sollicitudin vestibulum. Nulla at nunc ac sem tristique tristique sed sed magna. Quisque scelerisque eros dictum consequat ultricies. Curabitur sit amet feugiat lacus, ac scelerisque nunc. Pellentesque varius nisl sit amet magna sollicitudin venenatis. Proin cursus dolor turpis, vel mattis ante interdum eu. Vivamus aliquet augue orci, vel volutpat nibh aliquam at. Proin eu elementum urna. Sed a purus congue sem congue commodo.\r\n\r\nOrci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut et nisi eget urna sagittis interdum. Ut gravida in risus non suscipit. Quisque tincidunt dapibus elit ultricies laoreet. Donec lacinia, augue ac interdum sodales, ante arcu molestie nunc, at malesuada erat lacus nec ligula. Aenean eu nunc eu turpis laoreet mollis. Proin in vestibulum risus. Duis at pretium magna. Donec vulputate, lorem ut tincidunt dignissim, nibh nulla aliquet lectus, eget commodo nisi augue non elit. Donec hendrerit dui a diam ultrices bibendum. Aenean ornare, leo a luctus congue, velit purus fringilla tellus, eu porttitor enim eros blandit turpis. Maecenas eu ante at odio tincidunt bibendum ut eu urna. ', 'porsche_919.jpg', 'discontinu'),
(3, 'Stallman laptop', '2018-02-20', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in vulputate enim. Proin non odio eget metus ullamcorper consectetur. Integer scelerisque porttitor volutpat. Praesent maximus bibendum erat, non ornare lectus. Sed sit amet mollis lacus. Integer hendrerit molestie nulla, quis tempor est volutpat at. Quisque ultricies, odio nec auctor tempus, dui lectus congue est, quis iaculis massa orci quis nulla. Suspendisse potenti. Vestibulum hendrerit mi ante, vel viverra sem posuere sit amet. Vestibulum pellentesque quis leo in egestas. Nulla hendrerit neque a fringilla aliquet. Cras in convallis tellus. Cras tincidunt nulla nec blandit gravida. Suspendisse dictum efficitur scelerisque.\r\n\r\nNullam sagittis ultrices lorem, ut tincidunt felis pharetra ut. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent sagittis ante aliquet suscipit efficitur. Vestibulum sit amet nunc diam. Sed rutrum congue scelerisque. Cras feugiat eleifend nunc nec ultrices. Praesent nec consequat nisl, vel dictum augue. Aliquam erat volutpat. Vestibulum nec nisl et orci volutpat efficitur. Ut consequat quam tellus, vitae lobortis lorem lacinia vel. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin volutpat dolor in neque sagittis, nec hendrerit sapien semper. Fusce elementum cursus tellus, in vulputate odio consectetur ac. Aenean dui nisl, vulputate tristique dui in, imperdiet pulvinar orci. Phasellus sodales, augue et venenatis tincidunt, eros arcu feugiat purus, ut egestas magna elit quis dolor.\r\n\r\nDonec nisi ex, consectetur in nunc eget, malesuada convallis diam. Donec dictum eu ligula quis volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum blandit tincidunt lacus, porta molestie lorem bibendum vitae. Proin suscipit consequat diam. Maecenas efficitur sed lorem nec vulputate. Nunc faucibus, purus quis ultricies accumsan, dui mi auctor enim, sit amet tristique quam sapien et libero. Nullam scelerisque tincidunt maximus. Phasellus finibus velit nec sollicitudin pharetra. Cras venenatis mauris eget pretium maximus. Integer nec placerat sapien. Nam quis rhoncus ligula, eu molestie leo. Nullam nulla mauris, sodales in semper ut, interdum vitae lorem. ', 'stallman.jpg', 'journal');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
