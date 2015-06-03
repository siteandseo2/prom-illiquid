-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 03 2015 г., 13:40
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `link`, `fp_id`, `image_path`) VALUES
(1, 'Автозапчасти', 'enable', 'autozapchasti', 2, ''),
(2, 'Строительство', 'enable', 'stroitelstvo', 1, ''),
(3, 'Аренда спецтехники', 'enable', 'arenda_techniki', 3, '');

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
('4105eb0cdabd05f3c6afed9a986b5d22', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433327892, 'a:2:{s:9:"user_data";s:0:"";s:4:"user";a:8:{s:2:"id";s:7:"2548244";s:4:"name";s:12:"Максим";s:7:"surname";s:18:"Приходько";s:10:"patronymic";s:26:"Александрович";s:5:"email";s:21:"mprihodko92@gmail.com";s:7:"usercat";s:6:"seller";s:7:"company";s:8:"Site&Seo";s:8:"password";s:4:"user";}}');

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
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_id2` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `type`, `p_id`, `p_id2`, `status`, `link`) VALUES
(1, 'МОЙ КАБИНЕТ', 'r', 0, 0, 'enable', '#'),
(2, 'Главная', 'd', 1, 0, 'enable', 'default'),
(3, 'Персональные данные', 'd', 1, 0, 'enable', '#'),
(4, 'Информация о компании', 'dd', 0, 3, 'enable', 'account'),
(5, 'Товары и услуги', 'r', 0, 0, 'enable', '#'),
(6, 'Добавить товар', 'd', 5, 0, 'enable', 'add_product'),
(7, 'info', 'dd', 0, 3, 'enable', '#');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` text,
  `s_description` text,
  `currency` varchar(5) DEFAULT NULL,
  `availability` varchar(5) DEFAULT NULL,
  `prod_code` int(15) DEFAULT NULL,
  `prod_type` varchar(50) NOT NULL,
  `prod_quantity` varchar(20) NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `image_path`, `price`, `subcat_id`, `status`, `description`, `s_description`, `currency`, `availability`, `prod_code`, `prod_type`, `prod_quantity`, `id_user`) VALUES
(1, 'Шаровая опора Ланос Сенс Нексия CTR', '../../../uploads/products/1_sharovaya-opora-lanos-lanos-v-assortimente-222-B.jpg', 195, 2, 'enable', 'Шаровые опоры рычага Lanos (Sens, Nexia) производства CTR (Корея). Опора симметрична – по стороне установки не разделяется. Central Corporation является поставщиком шаровых опор на конвейер, поэтому заказав, например, нижние опоры GM на Ланос (Сенс, Нексию) в упаковке General Motors Вы получите эту же деталь но значительно дорóже. Не стоит переплачивать за упаковку!\n', 'Марка\nDaewoo\nПроизводитель  \nCTR\nТип техники\nЛегковой автомобиль\nТип запчасти\nОригинал\nСтрана производитель\nЮжная Корея\n\n', 'uah', 'yes', 94788122, 'retail_only', 'one', 2548244),
(2, 'Стойка газовая АГАТ', '../../../uploads/products/1_4026380d65b558098b943c75118616f4.jpg', 300, 2, 'enable', 'Амортизатор 1102, 1103 Агат передний левый Спорт (стойка красная)', 'Заводской номер	А511-2905007\nПроизводитель	Агат', 'uah', 'yes', 54740, 'retail_only', 'one', 2548244),
(3, 'Кирпич Пологи М-200 250х120х65', '../../../uploads/products/1_m150.jpg', 3.85, 3, 'enable', 'Рядовой кирпич зарекомендовал себя среди широкого выбора материалов для постройки несущих и самонесущих стен и перегородок как лучший. Без так называемого "красного кирпича" практически не реально построить современный одно или многоэтажный дом. Все большую популярность рядовой кирпич приобретает при возведении внутренних перегородок и уже не возможно представить дымовую трубу из другого вида кирпича. \nКомпания "Сандрабуд" предлагает широкий выбор рядового кирпича от самых лучших кирпичных заводов Украины по самым доступным ценам.', 'Если вы хотите купить рядовой кирпич (красный  керамический)  по самым низким ценам в г. Запорожье, обращайтесь в компанию "Сандрабуд". Красный рядовой кирпич представлен на наших складах в г. Запорожье в широком ассортименте от М-100 до М-200.\n\nНаша компания осуществляет доставку кирпича по всей Запорожской области по самым демократичным ценам. Также мы предоставляем услуги выгрузки краном-манипулятором.\n\nДля кладки кирпича Вы так же можете приобрести заводской цемент от лучших производителей Украины.\n\nРядовой керамический кирпич\n\n', 'uah', 'yes', 363463, 'wholesele_only', 'one', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `image_path`, `link`, `status`, `cat_id`) VALUES
(1, 'Двигатель', '../../../uploads/subcat_image/PRJ000618_i2.jpg', 'dvs', 'enable', 1),
(2, 'Ходовая часть', '../../../uploads/subcat_image/hodovaya.jpg', 'hodovaja', 'enable', 1),
(3, 'Кирпич', '../../../uploads/subcat_image/2757_32_big.jpg', 'kirpich', 'enable', 2);

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
  `usercat` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `patronymic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2548245 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `company`, `user_type`, `usercat`, `surname`, `patronymic`) VALUES
(1, 'Admin', 'admin', 'prom_admin', 'Admin', 'admin', 'Maks', 'Prihodko', 'Alexandrovich'),
(2548244, 'Максим', 'mprihodko92@gmail.com', 'qwer0987', 'Site&Seo', 'user', 'seller', 'Приходько', 'Александрович');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
