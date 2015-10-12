-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Sept 28, 2015 kell 07:27 PL
-- Serveri versioon: 5.6.26
-- PHP versioon: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `blog`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id`     INT(10) UNSIGNED NOT NULL,
  `title`       VARCHAR(80)      NOT NULL,
  `description` VARCHAR(120)     NOT NULL,
  `author_id`   INT(10) UNSIGNED NOT NULL,
  `date`        DATETIME         NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content`     TEXT             NOT NULL
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 3
  DEFAULT CHARSET = utf8;

--
-- Andmete tõmmistamine tabelile `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `description`, `author_id`, `date`, `content`) VALUES
  (1, 'Man must explore, and this is exploration at its greatest', 'Problems look mighty small from 150 miles up', 1,
   '2015-09-28 20:25:43', ''),
  (2, 'Shemale is good', 'And smart', 1, '2015-09-28 20:25:43', '');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` INT(10) UNSIGNED NOT NULL,
  `name`      VARCHAR(30)      NOT NULL
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 3
  DEFAULT CHARSET = utf8;

--
-- Andmete tõmmistamine tabelile `authors`
--

INSERT INTO `authors` (`author_id`, `name`) VALUES
  (1, 'Liisa Lusta');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `posts`
--
ALTER TABLE `posts`
ADD PRIMARY KEY (`post_id`);

--
-- Indeksid tabelile `authors`
--
ALTER TABLE `authors`
ADD PRIMARY KEY (`author_id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;
--
-- AUTO_INCREMENT tabelile `authors`
--
ALTER TABLE `authors`
MODIFY `author_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;
/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
