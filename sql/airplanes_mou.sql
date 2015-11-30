-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 11 月 25 日 23:04
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
  `contact` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `airlines`
--

INSERT INTO `airlines` (`id`, `name`, `contact`) VALUES
(1, 'American Airlines', 'Telephone: 1-800-433-7300'),
(2, 'Delta Air Lines', 'Telephone: 1-800-874-2231');

-- --------------------------------------------------------

--
-- 表的结构 `airports`
--

CREATE TABLE IF NOT EXISTS `airports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `history` text NOT NULL,
  `parking` text NOT NULL,
  `faq` text NOT NULL,
  `contact` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `airports`
--

INSERT INTO `airports` (`id`, `name`, `history`, `parking`, `faq`, `contact`) VALUES
(1, 'JFK', 'John F. Kennedy International Airport (IATA: JFK, ICAO: KJFK, FAA LID: JFK) is a major international airport located in Queens, New York City, United States, 12 miles (20 km) southeast of Lower Manhattan. It is the busiest international air passenger gateway in the United States, handling 53,254,362 passengers in 2014. Over seventy airlines operate out of the airport, with non-stop or direct flights to destinations in all six inhabited continents. The airport features six passenger terminals, four runways, and serves as a hub for American Airlines, Delta Air Lines, and is the primary operating base for JetBlue Airways.\r\n\r\nOpened as New York International Airport in 1948, it was commonly known as Idlewild Airport before being renamed in 1963 in memory of John F. Kennedy, 35th President of the United States, following his assassination.', 'JFK Airport is easily accessible by car and is located in southern Queens on the Van Wyck Expressway (I-678), which can be accessed from the Belt Parkway, the Grand Central Parkway and Queens Boulevard. A ring road connects the airport terminals to the Belt Parkway and the Van Wyck Expressway. The airport offers customers over 17,000 parking spaces, included in multi-level parking garages, surface spaces in the Central Terminal Area, a long-term parking lot and valet parking. There are also private off-site parking operators near the airport.', 'Q: How to visit New York?\r\nA: One of the best ways to see New York is by Subway (Metro) and buses. If you know what you want to see and want to fit right in like a local, then we recommend this. Even if not using the subway or surface buses, the official web site of the Metro Transportation Authority contains a wealth of information, prices, schedules, and more.\r\nVirtually every hotel in New York has either a tour desk, a concierge, or a rack with brochures on what to see.\r\nCity Sights NY is a very large and respected tour operator. One of the questions frequently asked is that the tour companies require a printed voucher. This can be difficult if you are a tourist in a hotel. City Sights NY will accept your tour confirmation number (sent in an email) and a valid ID card to prove your identity.', 'Address: Jamaica, New York, NY 11430, United States\r\nTelephone: +1 718-244-4444');

-- --------------------------------------------------------

--
-- 表的结构 `flights`
--

CREATE TABLE IF NOT EXISTS `flights` (
  `flight_number` varchar(20) NOT NULL,
  `airline_name` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `departure_time` datetime NOT NULL,
  `arrival_time` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `origin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `flights`
--

INSERT INTO `flights` (`flight_number`, `airline_name`, `destination`, `departure_time`, `arrival_time`, `status`, `origin`) VALUES
('DL 4072', 'Delta Air Lines', 'Toronto', '2015-11-25 20:29:54', '2015-11-25 22:30:14', 'en-route', 'JFK'),
('AA 104', 'American Airlines', 'Miami', '2015-11-25 21:33:37', '2015-11-25 23:54:34', 'delayed', 'JFK'),
('AA 7972', 'American Airlines', 'JFK', '2015-11-25 12:37:11', '2015-11-25 18:37:21', 'en-route', 'SanFrancisco');

-- --------------------------------------------------------

--
-- 表的结构 `rentals`
--

CREATE TABLE IF NOT EXISTS `rentals` (
  `id` int(11) NOT NULL,
  `company id` int(11) NOT NULL,
  `airport id` int(11) NOT NULL,
  `car brand` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `rentals`
--


-- --------------------------------------------------------

--
-- 表的结构 `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `security_type` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `terminal_id` int(11) NOT NULL,
  `airport` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `shopping`
--

INSERT INTO `shopping` (`id`, `name`, `security_type`, `location`, `terminal_id`, `airport`) VALUES
(1, 'McDonald''s', 'pre-check', '11# terminal 1', 1, 'JFK'),
(2, 'Burger King', 'pre-check', '13# terminal 2', 2, 'JFK'),
(3, 'King Schichuan', 'post-check', '23# terminal 1', 1, 'JFK');

-- --------------------------------------------------------

--
-- 表的结构 `terminal`
--

CREATE TABLE IF NOT EXISTS `terminal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `airports_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 导出表中的数据 `terminal`
--

INSERT INTO `terminal` (`id`, `name`, `airports_id`) VALUES
(1, 'Terminal 1', 1),
(2, 'Terminal 2', 1),
(3, 'Terminal 3', 1),
(4, 'Terminal 4', 1),
(5, 'Terminal 5', 1),
(6, 'Terminal 7', 1),
(7, 'Terminal 8', 1);
