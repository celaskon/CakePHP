-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Vygenerované:: 28.Nov, 2011 - 21:48
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
-- Štruktúra tabuľky pre tabuľku `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=1 ;

--
-- Sťahujem dáta pre tabuľku `categories`
--


-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `company_profiles`
--

CREATE TABLE IF NOT EXISTS `company_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8_slovak_ci NOT NULL,
  `info_id` int(11) NOT NULL,
  `ico` int(11) NOT NULL,
  `web_link` text COLLATE utf8_slovak_ci NOT NULL,
  `public` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=1 ;

--
-- Sťahujem dáta pre tabuľku `company_profiles`
--


-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `name` text COLLATE utf8_slovak_ci NOT NULL,
  `info_id` int(11) NOT NULL,
  `phone` text COLLATE utf8_slovak_ci NOT NULL,
  `email` text COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=1 ;

--
-- Sťahujem dáta pre tabuľku `contacts`
--


-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `short_form` text COLLATE utf8_slovak_ci NOT NULL,
  `language` text COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=1 ;

--
-- Sťahujem dáta pre tabuľku `languages`
--


-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `languages_texts`
--

CREATE TABLE IF NOT EXISTS `languages_texts` (
  `language_id` int(11) NOT NULL,
  `text_id` int(11) NOT NULL,
  `content` text COLLATE utf8_slovak_ci NOT NULL,
  KEY `language_id` (`language_id`),
  KEY `text_id` (`text_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `languages_texts`
--


-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `profile_category`
--

CREATE TABLE IF NOT EXISTS `profile_category` (
  `category_id` int(11) NOT NULL,
  `company_profile_id` int(11) NOT NULL,
  KEY `company_profile_id` (`company_profile_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `profile_category`
--


-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `texts`
--

CREATE TABLE IF NOT EXISTS `texts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=1 ;

--
-- Sťahujem dáta pre tabuľku `texts`
--


-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text COLLATE utf8_slovak_ci NOT NULL,
  `password` text COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=1 ;

--
-- Sťahujem dáta pre tabuľku `users`
--


-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users_profiles`
--

CREATE TABLE IF NOT EXISTS `users_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` text COLLATE utf8_slovak_ci NOT NULL,
  `last_name` text COLLATE utf8_slovak_ci NOT NULL,
  `email` text COLLATE utf8_slovak_ci NOT NULL,
  `web_link` text COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=1 ;

--
-- Sťahujem dáta pre tabuľku `users_profiles`
--

