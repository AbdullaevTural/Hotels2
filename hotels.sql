-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 04 2018 г., 21:50
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `hotels`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID_tov` int(20) NOT NULL AUTO_INCREMENT,
  `Name_tov` varchar(60) NOT NULL,
  `Page_c` varchar(225) NOT NULL,
  PRIMARY KEY (`ID_tov`),
  UNIQUE KEY `ID_tov_2` (`ID_tov`),
  UNIQUE KEY `ID_tov_3` (`ID_tov`),
  KEY `ID_tov` (`ID_tov`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`ID_tov`, `Name_tov`, `Page_c`) VALUES
(1, 'Virtual reality', '1.php'),
(2, 'Augment reality', '2.php'),
(3, 'Mixet reality', '3.php');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `parent_id` int(5) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `name`, `comment`, `date_add`) VALUES
(1, 0, 'Маша', 'Привет всем!', '2018-01-17 11:35:40'),
(2, 1, 'Саша', 'И тебе привет, Маша!', '2018-01-17 12:36:21'),
(66, 0, 'fd', 'fdfd', '2018-01-30 20:03:13'),
(67, 0, 'fdfd', 'fdfdd', '2018-01-30 20:04:28'),
(68, 0, 'turalabdullae', 'fdfddffd', '2018-01-31 02:26:08');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `ID_ord` int(11) NOT NULL AUTO_INCREMENT,
  `Name_u` varchar(255) NOT NULL,
  `Fam_u` varchar(255) NOT NULL,
  `Id_tov` int(11) NOT NULL,
  `Stoimost_ord` int(20) NOT NULL,
  `Adress` text NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID_ord`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`ID_ord`, `Name_u`, `Fam_u`, `Id_tov`, `Stoimost_ord`, `Adress`, `Date`) VALUES
(26, 'Medina', 'Kalmyk', 4, 4000, 'Bogatursky', '2017-12-10'),
(28, 'scdvb', 'dfgh', 0, 4000, 'sdfghj', '2017-12-12');

-- --------------------------------------------------------

--
-- Структура таблицы `prodact`
--

CREATE TABLE IF NOT EXISTS `prodact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `parent` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `parent` (`parent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `prodact`
--

INSERT INTO `prodact` (`id`, `title`, `content`, `image`, `price`, `page`, `parent`) VALUES
(1, 'Microsoft Hololens', 'Hololens', 'Sf.jpg', 289000, 'Microsoft.php', 2),
(2, 'Google Glass 3.0\n', 'Glass 3.0\n\n', 'Per.jpg', 112300, 'Google.php', 2),
(3, 'Epson Moverio Pro BT-2000\n', 'Pro BT-2000\n', 'si.jpg', 299990, 'epson.php', 2),
(4, 'Oculus Rift DK2', 'DK 2', 'rf.jpg', 40000, 'DK2.php', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `fam` varchar(15) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `fam`, `login`, `password`) VALUES
(1, 'Medina', 'Kalmyk', 'dnkl09@list.ru', '$1$N70.Ss4.$PPq'),
(2, 'Pety', 'Ivanov', 'petrov@list.ru', '$1$bw..IL..$s9N'),
(3, 'qwe', 'qwerty', 'dnkl00@list.ru', '$1$S90.zm0.$Oj7'),
(4, 'turalabdullae', '', 'tural.abdullaev', '$1$wX0.3i4.$xWh'),
(5, 'turalabdullae', '', 'tural.abdullaev', '$1$kk3.d0/.$TGk'),
(6, 'turalabdullae', '', 'tural.abdullaev', '$1$W0..n23.$MTR');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `prodact`
--
ALTER TABLE `prodact`
  ADD CONSTRAINT `prodact_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `category` (`ID_tov`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
