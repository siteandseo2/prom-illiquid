-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 20 2015 г., 16:10
-- Версия сервера: 5.5.43-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `prom_illiquid`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `status` varchar(10) CHARACTER SET utf8 NOT NULL,
  `link` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `link`) VALUES
(1, 'Отопление', 'enable', 'otoplenie'),
(2, 'Строительство', 'enable', 'stroitelstvo'),
(3, 'Промышленное оборудование', 'enable', 'prom_machine'),
(4, 'Оборудование для предоставления услуг', 'enable', 'service_machine'),
(5, 'Электрооборудование', 'enable', 'electromachine'),
(6, 'Инструмент', 'enable', 'tools'),
(7, 'Сельхозпродукция и техника', 'enable', 'agricultural_product'),
(8, 'Металл, пластик, резина', 'enable', 'metal_plastic_rubber'),
(9, 'Безопасность и защита', 'enable', 'security&Protection'),
(10, 'Контрольно-измерительные приборы', 'enable', 'test&Measurement'),
(11, 'Сырье и материалы', 'enable', 'raw_materials');

-- --------------------------------------------------------

--
-- Структура таблицы `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(2000) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b53b6c0ddb1ce1503d077ef850a1d965', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36', 1432127205, 'a:2:{s:9:"user_data";s:0:"";s:5:"admin";a:3:{s:4:"name";s:5:"Admin";s:5:"email";s:5:"admin";s:9:"user_type";s:5:"admin";}}');

-- --------------------------------------------------------

--
-- Структура таблицы `focus_products`
--

CREATE TABLE IF NOT EXISTS `focus_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `focus_products`
--

INSERT INTO `focus_products` (`id`, `name`, `status`) VALUES
(1, 'Промышленные товары', 'enable'),
(2, 'Потребительские товары', 'enable'),
(3, 'Услуги', 'enable'),
(5, 'Что то еще', 'enable');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `company` text NOT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2548241 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `company`, `user_type`) VALUES
(1, 'John', 'john@gmail.com', 'qwer0987', 'Siteandseo', 'user'),
(2, 'Admin', 'admin', 'prom_admin', 'Admin', 'admin'),
(2548237, 'Maks', 'mprihodko92@gmail.com', 'qwer0987', 'siteandseo', 'user'),
(2548238, 'Maks', 'm.prihodko@ukrods.com.ua', 'zazzazzaz', 'Siteandseo', 'user'),
(2548239, 'qwerty', 'qqwwqeqw@dsgsd.dfusd', '12345678fdsgys', 'dfgdfgdffdgf', 'user'),
(2548240, 'Maks', 'admin@max.com', '12345678', 'ajax', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
