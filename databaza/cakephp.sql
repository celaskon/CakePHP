-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Vygenerované:: 29.Feb, 2012 - 10:00
-- Verzia serveru: 5.5.8
-- Verzia PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáza: `cakephp`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `adresses`
--

CREATE TABLE IF NOT EXISTS `adresses` (
  `id` int(11) NOT NULL,
  `company_profile_id` int(11) NOT NULL,
  `name_id` int(11) NOT NULL,
  `adress` varchar(250) COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `adresses`
--

INSERT INTO `adresses` (`id`, `company_profile_id`, `name_id`, `adress`) VALUES
(1, 1, 17, 'Ruzova dolina 2 82105 Bratislava'),
(2, 1, 16, 'Obchodna 8 82107 Bratislava');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=9 ;

--
-- Sťahujem dáta pre tabuľku `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `name_id`) VALUES
(4, NULL, 9),
(5, 4, 10),
(6, 4, 11),
(7, NULL, 12),
(8, 7, 13);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `company_categories`
--

CREATE TABLE IF NOT EXISTS `company_categories` (
  `category_id` int(11) NOT NULL,
  `company_profile_id` int(11) NOT NULL,
  KEY `company_profile_id` (`company_profile_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `company_categories`
--

INSERT INTO `company_categories` (`category_id`, `company_profile_id`) VALUES
(5, 1),
(5, 4),
(6, 2),
(6, 3),
(8, 5),
(8, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `company_profiles`
--

CREATE TABLE IF NOT EXISTS `company_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `info_id` int(11) NOT NULL,
  `ico` int(11) NOT NULL,
  `web_link` varchar(250) COLLATE utf8_slovak_ci NOT NULL,
  `public` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=6 ;

--
-- Sťahujem dáta pre tabuľku `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `user_id`, `name`, `info_id`, `ico`, `web_link`, `public`) VALUES
(1, 1, 'pizza s.r.o', 1, 2147483647, 'pizza.sk', 0),
(2, 3, 'gyros a.s', 5, 4657981, 'www.gyros.sk', 1),
(3, 4, 'bageta a.s', 6, 8984501, 'www.bagetka.sk', 1),
(4, 5, 'najpizza', 7, 4561328, 'www.najpizza.sk', 1),
(5, 6, 'Tesco', 8, 2147483647, 'www.tesco.sk', 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_profile_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `info_id` int(11) NOT NULL,
  `phone` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=3 ;

--
-- Sťahujem dáta pre tabuľku `contacts`
--

INSERT INTO `contacts` (`id`, `company_profile_id`, `name`, `info_id`, `phone`, `email`) VALUES
(1, 1, 'pan Jozef', 14, '0904567862', 'ferko@ferko.sk'),
(2, 1, 'Ujo Vlado', 15, '0946546231', 'vlado@vlado.sk');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazov` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=3 ;

--
-- Sťahujem dáta pre tabuľku `groups`
--

INSERT INTO `groups` (`id`, `nazov`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `short_form` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `language` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=3 ;

--
-- Sťahujem dáta pre tabuľku `languages`
--

INSERT INTO `languages` (`id`, `short_form`, `language`) VALUES
(1, 'SK', 'Slovensky'),
(2, 'EN', 'Anglicky');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `language_texts`
--

CREATE TABLE IF NOT EXISTS `language_texts` (
  `language_id` int(11) NOT NULL,
  `text_id` int(11) NOT NULL,
  `content` text COLLATE utf8_slovak_ci NOT NULL,
  KEY `language_id` (`language_id`),
  KEY `text_id` (`text_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `language_texts`
--

INSERT INTO `language_texts` (`language_id`, `text_id`, `content`) VALUES
(1, 1, 'slovensky pokec firmy'),
(2, 2, 'english company profile'),
(1, 3, 'slovensky nazov'),
(2, 4, 'english name'),
(1, 5, 'gyros- najlepsie gyrosy v meste'),
(2, 5, 'Gyros - the best Gyroses in the city\r\n'),
(1, 6, 'bagetka - najlepsie bagety v meste'),
(2, 6, 'Bagetka - the best Baguettes in the city'),
(1, 7, 'NajPizza - pizzeria vyhladavana pre nase speciality'),
(2, 7, 'NajPizza - the best meal in the city'),
(2, 8, 'Tesco - your favourite shopping place'),
(1, 8, 'Tesco - Vas oblubeny supermarket'),
(1, 9, 'Restauracie'),
(2, 9, 'Restaurants'),
(1, 10, 'Pizzerie'),
(2, 10, 'Pizzeries'),
(1, 11, 'bufety'),
(2, 11, 'Buffets'),
(1, 12, 'Obchody'),
(2, 12, 'Shops'),
(1, 13, 'Supermarkety'),
(2, 13, 'Supermarkets'),
(1, 14, 'Casnik'),
(1, 15, 'Vratnik'),
(1, 16, 'restauracia'),
(1, 17, 'centrala');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `texts`
--

CREATE TABLE IF NOT EXISTS `texts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=18 ;

--
-- Sťahujem dáta pre tabuľku `texts`
--

INSERT INTO `texts` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=7 ;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `group_id`, `login`, `password`) VALUES
(1, 2, 'marek', 'marek'),
(2, 1, 'ferko', 'ferko'),
(3, 2, 'stevko', 'stevko'),
(4, 2, 'kubko', 'kubko'),
(5, 2, 'marta', 'marta'),
(6, 2, 'janko', 'janko');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `web_link` varchar(250) COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=2 ;

--
-- Sťahujem dáta pre tabuľku `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `first_name`, `last_name`, `email`, `web_link`) VALUES
(1, 2, 'ferko', 'mrkvicka', 'ferko@ferko.sk', 'www.ferko.sk');
