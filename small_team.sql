-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Фев 18 2022 г., 21:45
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `small_team`
--

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `link_facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `link_twitter` varchar(255) NOT NULL,
  `link_git` varchar(255) NOT NULL,
  `link_email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `info`, `link_facebook`, `link_twitter`, `link_git`, `link_email`, `image`) VALUES
(230, 'Jessica Alba', 'CEO', 'Lorem Ipsum is not simply is an action designer random text. It has roots in a piece.', 'https://www.facebook.com/', 'https://twitter.com/', 'https://github.com/', 'ivan-kovalev96@mail.ru', '620d2924736c0.png'),
(231, 'Al Rayhan', 'Ul Designer', 'Lorem Ipsum is not simply is an action designer random text. It has roots in a piece.', 'https://www.facebook.com/', 'https://twitter.com/', 'https://github.com/', 'ivan-kovalev96@mail.ru', '620d295374f7b.png'),
(232, 'Jamal Hammer', 'Junior', 'Lorem Ipsum is not simply is an action designer random text. It has roots in a piece.', 'https://www.facebook.com/', 'https://twitter.com/', 'https://github.com/', 'ivan-kovalev96@mail.ru', '620d29845434e.png'),
(233, 'Arnold Smith', 'Middle QA', 'Lorem Ipsum is not simply is an action designer random text. It has roots in a piece.', 'https://www.facebook.com/', 'https://twitter.com/', 'https://github.com/', 'ivan-kovalev96@mail.ru', '620d29c56d6f3.png'),
(234, 'Nina Dobrev', 'Senior QA', 'Lorem Ipsum is not simply is an action designer random text. It has roots in a piece.', 'https://www.facebook.com/', 'https://twitter.com/', 'https://github.com/', 'ivan-kovalev96@mail.ru', '620d29de47a8b.png'),
(235, 'Emma Smith', 'Team Lead', 'Lorem Ipsum is not simply is an action designer random text. It has roots in a piece.', 'https://www.facebook.com/', 'https://twitter.com/', 'https://github.com/', 'ivan-kovalev96@mail.ru', '620d29fe16d0a.png'),
(237, 'Anna', 'Senior QA', 'Lorem Ipsum is not simply is an action designer random text. It has roots in a piece.', 'https://www.facebook.com/', 'https://twitter.com/', 'https://github.com/', 'ivan-kovalev96@mail.ru', 'team_4.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
