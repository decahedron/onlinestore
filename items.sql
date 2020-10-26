-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2020 г., 10:50
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `title` varchar(355) NOT NULL,
  `description` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `price` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`title`, `description`, `img`, `price`, `id`) VALUES
('Wacom DTK1660K0A Cintiq 16', 'A more affordable pen Display with Wacom Pro Pen 2 technology, 8,192 pressure levels and tilt recognition; It\'s amazing precision and reduced Parallax provide the most natural drawing experience', 'https://images-na.ssl-images-amazon.com/images/I/71hS-sYZusL._AC_SL1500_.jpg', '$649.95', 1),
('Clip Studio Paint EX', 'Use an assortment of comic and manga creation tools that will help maximize your workflow and help you create comic works composed of multiple pages.', 'https://images-na.ssl-images-amazon.com/images/I/71X5liOvSkL._AC_SL1500_.jpg', '$219.00', 2),
('Huion Artist Glove for Drawing Tablet', 'Work for both hands - Huion Artist Glove with two fingers; The package includes one unit of glove which can be used on both hand, free size; 20cm in length, 8cm in width.', 'https://images-na.ssl-images-amazon.com/images/I/71Gw7rGLUPL._AC_SL1500_.jpg', '$8.99', 3),
('big floppa', 'flop fo no hoe', 'https://i.kym-cdn.com/entries/icons/facebook/000/034/421/cover1.jpg', 'bigfloppa', 4),
('le monke', 'asdasdsad', 'https://i.kym-cdn.com/photos/images/newsfeed/001/131/258/07c.jpg', '1', 5),
('Manga in Theory and Practice: The Craft of Creating Manga', 'Learn how to create manga from Hirohiko Araki—creator of Jojo’s Bizarre Adventure and a master of the medium! Hirohiko Araki is the author of one of the longest-running and most beloved manga of all time, the epic fan favorite JoJo’s Bizarre Adventure. According to him, manga is the ultimate synthesis of all forms of art, and in this book he reveals the', 'https://images-na.ssl-images-amazon.com/images/I/81+DhwtO4AL.jpg', '$14.54', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
