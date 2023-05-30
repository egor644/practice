-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2023 г., 00:08
-- Версия сервера: 10.7.5-MariaDB
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `haircut`
--

-- --------------------------------------------------------

--
-- Структура таблицы `zapis`
--

CREATE TABLE `zapis` (
  `id` int(11) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `zapis`
--

INSERT INTO `zapis` (`id`, `Lastname`, `Firstname`, `phone`, `email`, `date`, `time`) VALUES
(1, 'gdsfg', 'dfgg', 657, 'hfdg@gfdg.ru', '2023-05-18', '10:02');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `zapis`
--
ALTER TABLE `zapis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `zapis`
--
ALTER TABLE `zapis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
