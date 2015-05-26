-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 26 2015 г., 15:29
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
  `fp_id` int(11) NOT NULL,
  `image_path` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `link`, `fp_id`, `image_path`) VALUES
(1, 'Отопление', 'enable', 'otoplenie', 1, ''),
(2, 'Строительство', 'enable', 'build', 1, ''),
(3, 'Потребительские', 'enable', 'items', 2, ''),
(4, 'Услуги связи', 'enable', 'connect_service', 3, '');

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
('044ffaf9f39b33e2fb03cd496b994c21', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.65 Safari/537.36', 1432643000, 'a:3:{s:9:"user_data";s:0:"";s:5:"admin";a:3:{s:4:"name";s:5:"Admin";s:5:"email";s:5:"admin";s:9:"user_type";s:5:"admin";}s:4:"user";a:5:{s:2:"id";s:1:"1";s:4:"name";s:4:"John";s:5:"email";s:14:"john@gmail.com";s:7:"company";s:10:"Siteandseo";s:8:"password";s:4:"user";}}');

-- --------------------------------------------------------

--
-- Структура таблицы `focus_products`
--

CREATE TABLE IF NOT EXISTS `focus_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `focus_products`
--

INSERT INTO `focus_products` (`id`, `name`, `status`) VALUES
(1, 'Промышленные товары', 'enable'),
(2, 'Потребительские товары', 'enable'),
(3, 'Услуги', 'enable');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `image_path`, `link`, `price`, `subcat_id`, `status`) VALUES
(1, 'Радиатор KORADO 22VK 500х1200', 'http://i1.rozetka.ua/goods/599312/record_599312157.jpg', 'item/1', 2000, 1, 'enable'),
(2, 'Радиатор DJOUL 22 тип 500*800', 'http://i2.rozetka.ua/goods/173735/record_173735937.jpg', 'item/2', 3600, 1, 'enable'),
(3, 'труба PN 20 (водопровод)', 'http://santeh-ua.com/image/data/paika/voda.jpg', 'item/3', 30, 2, 'enable');

-- --------------------------------------------------------

--
-- Структура таблицы `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `image_path`, `link`, `status`, `cat_id`) VALUES
(1, 'Радиаторы', 'http://www.vencon.com.ua/files/products/sanicab.800x600w.jpg?d2e0310624214fb787fb45928ede7678', 'radiators', 'enable', 1),
(2, 'Трубы', 'http://rmnt.net/images/2011/09/plastikovie-trybi-485x469.jpg', 'trubi', 'enable', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2548243 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `company`, `user_type`) VALUES
(1, 'John', 'john@gmail.com', 'qwer0987', 'Siteandseo', 'user'),
(2, 'Admin', 'admin', 'prom_admin', 'Admin', 'admin'),
(2548237, 'Maks', 'mprihodko92@gmail.com', 'qwer0987', 'siteandseo', 'user'),
(2548238, 'Maks', 'm.prihodko@ukrods.com.ua', 'zazzazzaz', 'Siteandseo', 'user'),
(2548239, 'qwerty', 'qqwwqeqw@dsgsd.dfusd', '12345678fdsgys', 'dfgdfgdffdgf', 'user'),
(2548240, 'Maks', 'admin@max.com', '12345678', 'ajax', 'user'),
(2548241, 'John', 'mfdhd@fdf.sfda', 'safghjghhgxcvc', 'sdgdfhdfhdf', 'user'),
(2548242, 'John', 'admin@koksd.com', '123456778', 'Siteandseo', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
