-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 11 月 17 日 08:53
-- 服务器版本: 5.1.33
-- PHP 版本: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `airplanes`
--

-- --------------------------------------------------------

--
-- 表的结构 `airlines`
--

CREATE TABLE IF NOT EXISTS `airlines` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `airlines`
--


-- --------------------------------------------------------

--
-- 表的结构 `flights`
--

CREATE TABLE IF NOT EXISTS `flights` (
  `flight_number` int(11) NOT NULL,
  `airline_name` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `departure_time` date NOT NULL,
  `arrival_time` date NOT NULL,
  `status` int(11) NOT NULL,
  `origin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `flights`
--


-- --------------------------------------------------------

--
-- 表的结构 `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `security_type` int(11) NOT NULL,
  `location` varchar(20) NOT NULL,
  `terminal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `shopping`
--

-- --------------------------------------------------------

--
-- 表的结构 `airports`
--

CREATE TABLE IF NOT EXISTS `airports` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `history` text NOT NULL,
  `parking` text NOT NULL,
  `faq` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `airports`
--
