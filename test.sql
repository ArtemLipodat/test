-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2022 г., 14:01
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dom`
--

CREATE TABLE `dom` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `dom`
--

INSERT INTO `dom` (`id`, `name`, `desc`) VALUES
(1, 'Раздел 1', 'будут описание'),
(2, 'Раздел 2', 'фффффффф'),
(4, 'Раздел 3', 'ывывыв');

-- --------------------------------------------------------

--
-- Структура таблицы `dom_child`
--

CREATE TABLE `dom_child` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dom_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `dom_child`
--

INSERT INTO `dom_child` (`id`, `name`, `desc`, `dom_id`) VALUES
(5, 'Подраздел 1.1', '', 1),
(6, 'Подраздел 1.1.1', '', 5),
(7, 'Подраздел 1.1.1.1', '', 6),
(8, 'Подраздел 1.2', 'будут описание', 1),
(9, 'Подраздел 1.1.1.1.1', 'вывыфв', 7),
(10, 'Подраздел 1.1.2', '', 5),
(11, 'Подраздел 2.1', 'вывывы', 2),
(12, 'Подраздел 3.1', 'фвфф', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user_admin`
--

INSERT INTO `user_admin` (`id`, `name`, `login`, `pass`) VALUES
(1, 'Артем', 'admin', 'f3253d0a419c1fa1f990819278323fdc'),
(2, 'Артем', 'artem', 'f3253d0a419c1fa1f990819278323fdc'),
(3, 'Артем Липодат', 'Artemaaaa', 'f3253d0a419c1fa1f990819278323fdc'),
(4, 'Артем', 'qwerty', '861f194e9d6118f3d942a72be3e51749'),
(5, 'Артем', 'admin2', 'f3253d0a419c1fa1f990819278323fdc');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dom`
--
ALTER TABLE `dom`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `dom_child`
--
ALTER TABLE `dom_child`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `user_admin`
--
ALTER TABLE `user_admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dom`
--
ALTER TABLE `dom`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `dom_child`
--
ALTER TABLE `dom_child`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
