-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 03 2018 г., 20:13
-- Версия сервера: 5.6.38
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags` text NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comments_count` int(11) NOT NULL,
  `views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `tags`, `date`, `image`, `content`, `status`, `author`, `comments_count`, `views_count`) VALUES
(1, 'первый пост', 'блог машина пост', '2018-11-03', 'cat.jpg', 'Всем привет! Это мой первый пост', 0, 'Александр', 0, 0),
(2, 'второй пост', 'php, cms, ', '2018-11-03', 'lev.jpg', 'Второй мой пост', 0, 'Александр', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `root`
--

CREATE TABLE `root` (
  `idroot` int(11) NOT NULL,
  `nameroot` varchar(25) NOT NULL,
  `read` tinyint(1) NOT NULL,
  `write` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `root`
--

INSERT INTO `root` (`idroot`, `nameroot`, `read`, `write`) VALUES
(1, 'администратор', 1, 1),
(2, 'редактор', 1, 1),
(3, 'читатель', 1, 0),
(4, 'писатель', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `idroot` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`iduser`, `idroot`, `name`, `age`, `email`) VALUES
(1, 1, 'Админ', 389, '389@yandex.ru'),
(2, 2, 'юзер', 9, '9ya.ru'),
(3, 4, 'автор', 35, '35@ya.ru'),
(4, 3, '12', 12, '12'),
(5, 3, '12', 12, '12'),
(6, 3, '21', 21, '21'),
(7, 3, '1', 2, '3'),
(8, 3, '1', 2, '3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `root`
--
ALTER TABLE `root`
  ADD PRIMARY KEY (`idroot`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idroot` (`idroot`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `root`
--
ALTER TABLE `root`
  MODIFY `idroot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idroot`) REFERENCES `root` (`idroot`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
