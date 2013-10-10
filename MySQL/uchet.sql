-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 09 2013 г., 21:18
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `lybrary`
--

-- --------------------------------------------------------

--
-- Структура таблицы `uchet`
--

CREATE TABLE IF NOT EXISTS `uchet` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `id_chit` smallint(6) NOT NULL,
  `id_book` smallint(6) NOT NULL,
  `date_s` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_chit` (`id_chit`),
  KEY `id_book` (`id_book`),
  KEY `id_chit_2` (`id_chit`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `uchet`
--

INSERT INTO `uchet` (`id`, `id_chit`, `id_book`, `date_s`) VALUES
(1, 3, 1, '2013-10-07'),
(2, 3, 1, '2013-10-07'),
(3, 3, 1, '2013-11-07'),
(4, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(6, 0, 0, '0000-00-00'),
(7, 0, 0, '0000-00-00'),
(8, 0, 0, '0000-00-00'),
(9, 0, 0, '0000-00-00'),
(10, 0, 0, '0000-00-00'),
(11, 0, 0, '0000-00-00'),
(12, 0, 0, '0000-00-00'),
(13, 0, 0, '0000-00-00'),
(14, 0, 0, '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
