-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 30 2022 г., 14:26
-- Версия сервера: 5.7.38
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `realdy_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authorization_info`
--

CREATE TABLE `authorization_info` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authorization_info`
--

INSERT INTO `authorization_info` (`id`, `login`, `password`) VALUES
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `realty_cat`
--

CREATE TABLE `realty_cat` (
  `id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `realty_cat`
--

INSERT INTO `realty_cat` (`id`, `category`) VALUES
(1, 'квартира'),
(2, 'гараж'),
(3, 'земельный участок'),
(4, 'здание');

-- --------------------------------------------------------

--
-- Структура таблицы `realty_info`
--

CREATE TABLE `realty_info` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` text NOT NULL,
  `relevance` varchar(30) NOT NULL DEFAULT 'актуально'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `realty_info`
--

INSERT INTO `realty_info` (`id`, `title`, `address`, `description`, `price`, `img`, `relevance`) VALUES
(1, 'Объект 1', 'ул. Мамадышская 45-78', '9-ый дом, 180 кв. метров, двухуровневая.', 7500000, 'images/1930518.jpg', 'актуально'),
(2, 'Объект 2', 'ул. Гагарина 56-56', 'ул. Азата Аббасова, д. 11, Казань', 3900000, 'images/1930134.jpg', 'актуально'),
(3, 'Объект 3', 'ул. Ленинградская 97-01', 'частный дом из сруба, 100 кв.метров', 4500000, 'images/dom-niva-178145527-2.jpg', 'актуально'),
(4, 'Объект 4', 'ул. Галимджана Баруди 59-78', 'Кирпичный дом, 80 кв. метров', 3200000, 'images/dom-gorodishce-141072644-2.jpg', 'актуально'),
(5, 'Объект 5', 'ул. 50 лет Победы 24-32', 'Панельный дом, 45 кв. метров, с двумя лоджиями', 2500000, 'images/getImage-50.jpeg', 'актуально'),
(6, 'Объект 6', 'ул. Аббасова 11-22', 'Продается 2-комн. кв., 64 м2, 9/19 этаж', 3900000, 'images/R3.jpg', 'актуально'),
(8, 'Объект 7', 'ул. Лушникова 50-7', 'Продается 2-комн. кв., 45.8 м2, 1/5 этаж', 2600000, 'images/foto_largest.jpg', 'Не актуально'),
(11, '1', '1', '1', 1, 'images/16.jpg', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authorization_info`
--
ALTER TABLE `authorization_info`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `realty_cat`
--
ALTER TABLE `realty_cat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `realty_info`
--
ALTER TABLE `realty_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authorization_info`
--
ALTER TABLE `authorization_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `realty_cat`
--
ALTER TABLE `realty_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `realty_info`
--
ALTER TABLE `realty_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
