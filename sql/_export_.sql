-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2015 at 07:16 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airports`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE IF NOT EXISTS `airlines` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`id`, `name`, `contact`) VALUES
(1, 'American Airlines', 'Telephone: 1-800-433-7300'),
(2, 'Delta Air Lines', 'Telephone: 1-800-874-2231'),
(3, 'ELAL', 'Telephone:1-800-223-6700'),
(4, 'Lufthansa', 'Telephone:1-800-645-3880'),
(5, 'British Airways', 'Telephone:1 (800) 247-9297'),
(6, 'Australian Airlines', 'Telephone: 1800-843-0002');

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE IF NOT EXISTS `airports` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `history` text NOT NULL,
  `parking` text NOT NULL,
  `faq` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `name`, `history`, `parking`, `faq`, `contact`) VALUES
(1, 'JFK', 'John F. Kennedy International Airport (IATA: JFK, ICAO: KJFK, FAA LID: JFK) is a major international airport located in Queens, New York City, United States, 12 miles (20 km) southeast of Lower Manhattan. It is the busiest international air passenger gateway in the United States, handling 53,254,362 passengers in 2014. Over seventy airlines operate out of the airport, with non-stop or direct flights to destinations in all six inhabited continents. The airport features six passenger terminals, four runways, and serves as a hub for American Airlines, Delta Air Lines, and is the primary operating base for JetBlue Airways.\r\n\r\nOpened as New York International Airport in 1948, it was commonly known as Idlewild Airport before being renamed in 1963 in memory of John F. Kennedy, 35th President of the United States, following his assassination.', 'JFK Airport is easily accessible by car and is located in southern Queens on the Van Wyck Expressway (I-678), which can be accessed from the Belt Parkway, the Grand Central Parkway and Queens Boulevard. A ring road connects the airport terminals to the Belt Parkway and the Van Wyck Expressway. The airport offers customers over 17,000 parking spaces, included in multi-level parking garages, surface spaces in the Central Terminal Area, a long-term parking lot and valet parking. There are also private off-site parking operators near the airport.', 'Q: How to visit New York?\r\nA: One of the best ways to see New York is by Subway (Metro) and buses. If you know what you want to see and want to fit right in like a local, then we recommend this. Even if not using the subway or surface buses, the official web site of the Metro Transportation Authority contains a wealth of information, prices, schedules, and more.\r\nVirtually every hotel in New York has either a tour desk, a concierge, or a rack with brochures on what to see.\r\nCity Sights NY is a very large and respected tour operator. One of the questions frequently asked is that the tour companies require a printed voucher. This can be difficult if you are a tourist in a hotel. City Sights NY will accept your tour confirmation number (sent in an email) and a valid ID card to prove your identity.', 'Address: Jamaica, New York, NY 11430, United States\r\nTelephone: +1 718-244-4444'),
(2, 'San Francisco International Airport', 'San Francisco held a dedicated ceremony for Mills Field Municipal Airport on May 7, 1927 [10]on 150 acres (61 ha) of cow pasture. The land was leased from Ogden L. Mills who had leased it from his grandfather Darius O. Mills. San Francisco International Airport was named Mills Field Municipal Airport until 1931, when it became San Francisco Municipal Airport. "Municipal" was replaced by "International" in 1955.\r\n\r\nUnited Airlines served SFO as well as Oakland Municipal Airport beginning in the 1930s.[11] The March 1939 Official Aviation Guide shows 18 airline departures on weekdays— seventeen United and one TWA. The aerial view c. 1940 looks west along the runway that is now 28R; the seaplane harbor at right is still recognizable north of the airport. Earlier aerial looking NW 1943 vertical aerial (enlargeable) The August 1952 chart shows runway 1L 7000 feet long, 1R 7750 feet, 28L 6500 feet and 28R 8870 feet.\r\n\r\nIn addition to United, Pacific Seaboard Air Lines was operating service between San Francisco and Los Angeles in 1933 with Bellanca CH-300 prop aircraft on a coastal routing of San Francisco - San Jose - Salinas - Monterey - Paso Robles - San Luis Obispo - Santa Maria - Santa Barbara - Los Angeles.[12] Competition with United would result in Pacific Seaboard moving all of its operations to the eastern U.S., being renamed Chicago and Southern Air Lines (C&S) and then becoming a large domestic and international air carrier. Chicago & Southern would eventually in turn be acquired by and merged into Delta Air Lines in 1953 thus providing Delta with its first international routes .[13] Delta would subsequently use this route authority inherited from C&S to fly one its first international services operated with jet aircraft from San Francisco to Montego Bay, Jamaica and Caracas, Venezuela via intermediate stops in Dallas and New Orleans in 1962.[14]\r\n\r\nIn addition to United, Pacific Seaboard Air Lines was operating service between San Francisco and Los Angeles in 1933 with Bellanca CH-300 prop aircraft on a coastal routing of San Francisco - San Jose - Salinas - Monterey - Paso Robles - San Luis Obispo - Santa Maria - Santa Barbara - Los Angeles.[12] Competition with United would result in Pacific Seaboard moving all of its operations to the eastern U.S., being renamed Chicago and Southern Air Lines (C&S) and then becoming a large domestic and international air carrier. Chicago & Southern would eventually in turn be acquired by and merged into Delta Air Lines in 1953 thus providing Delta with its first international routes .[13] Delta would subsequently use this route authority inherited from C&S to fly one its first international services operated with jet aircraft from San Francisco to Montego Bay, Jamaica and Caracas, Venezuela via intermediate stops in Dallas and New Orleans in 1962.[14]\r\n\r\n', 'Location\r\n\r\n806 South Airport Boulevard\r\nSan Francisco, CA 94128\r\n\r\nDriving directions to long-term parking:  \r\n\r\nFrom 280  |   From the North (San Francisco)  |   From the South (San Jose)\r\n\r\nExpress Entry and Exit Options\r\nGetting in and out of airport parking has never been faster. Utilize the pay-on-foot kiosks or just use your credit card to swipe in and swipe out.\r\n\r\nShuttle Service\r\n\r\nSFO''s long-term parking facility and shuttle buses operate 24 hours a day. Frequent shuttle service runs every 5 minutes to 15 minutes (depending on the time of day). Electronic displays in the garage keep you informed as to when the next bus is due. Also, SFO buses have priority loading zones at each terminal for quick passenger access.\r\n\r\nLong-term Parking Shuttle Pick-up and Drop-off Locations\r\n\r\nSFO Long-Term Parking shuttles pick up at the center island of the Departures Level roadway at Terminals 1, 3 and the International Terminal. Pick-up locations are curbside at Terminal 2. Shuttles have priority loading zones at each terminal for quick passenger access.', 'Is the flight on time?\r\n\r\nThe most up-to-date flight information can be obtained from the airline by visiting its website or calling its reservations phone number. Arrival and departure information is also available here.\r\n\r\nHow much time should I allow before my flight?\r\n\r\nSFO suggests that you check with your airline directly for its recommended arrival time. For domestic flights, most airlines suggest arriving two hours before departure. For international flights, most airlines recommend arriving three hours before departure.\r\n\r\nHow can I contact Lost and Found?\r\n\r\nIf you have lost an item on an aircraft, please contact the airline directly. For items lost at a security checkpoint, contact Covenant Security at 800.764.8050 or lostandfound@covenantsecurity.com. For items lost at all other locations, including AirTrain, contact the San Francisco Police Department Lost and Found at 650.821.7014 or sfolostandfound@flysfo.com.\r\n\r\nCan sales taxes on purchases made in the United States be refunded at SFO?\r\n\r\nNo. State sales tax is not the same as a value-added tax (VAT). The state sales tax is a small tax on purchases or services, calculated at the time of purchase, which individual states assess and which the U.S. federal government neither determines nor receives. The VAT, on the other hand, is a national tax that is included in the actual sales price rather than at the time of purchase. The United States does not have a VAT, and the federal government cannot refund state sales taxes. State taxes are generally not charged to diplomats or employees of some international organizations who have been issued a tax-exemption card. This card must be presented at the time of purchase in order for sales taxes to be waived. (Source: United States Customs and Border Protection).\r\n\r\nHow do I page someone at SFO?\r\n\r\nPaging services are available by calling 1.800.I.FLY.SFO or 650.821.8211. Select “2” for paging services.\r\n\r\n\r\n', 'Address: San Francisco, CA 94128\r\nTelephone: (650) 821-8211');

-- --------------------------------------------------------

--
-- Table structure for table `ata`
--

CREATE TABLE IF NOT EXISTS `ata` (
  `airportid` int(11) NOT NULL,
  `terminalid` int(11) NOT NULL,
  `airlineid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ata`
--

INSERT INTO `ata` (`airportid`, `terminalid`, `airlineid`) VALUES
(1, 2, 3),
(1, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `carrentalcompany`
--

CREATE TABLE IF NOT EXISTS `carrentalcompany` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrentalcompany`
--

INSERT INTO `carrentalcompany` (`ID`, `Name`) VALUES
(1, 'Hertz'),
(2, 'Avis'),
(3, 'Enterprise'),
(4, 'Budget');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
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
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_number`, `airline_name`, `destination`, `departure_time`, `arrival_time`, `status`, `origin`) VALUES
('DL 4072', 'Delta Air Lines', 'Toronto', '2015-11-25 20:29:54', '2015-11-25 22:30:14', 'en-route', 'JFK'),
('AA 104', 'American Airlines', 'Miami', '2015-11-25 21:33:37', '2015-11-25 23:54:34', 'delayed', 'JFK'),
('AA 7972', 'American Airlines', 'JFK', '2015-11-25 12:37:11', '2015-11-25 18:37:21', 'en-route', 'SanFrancisco');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `username`, `email`, `role`, `password`, `salt`) VALUES
(1, 'Bil', 'Clinton', 'bilclinton', 'bilclinton@stevens.edu', 0, '19618b795f6602900ab8b7c0eb80938f22333ded0a1d0d3f7a452863f5ced0d823127e0a51c6b141f26626721ec2cc7bc2a20b8abcff0811e6e3a4b71dd54377', '81f3d043942bb29c929a14731fe691ac244a34904a86fdeef0353d14521dc3963b41b5e4917fabd6fe7da61575b27e0e1b795290362bae80cf44671ca3398a43'),
(2, 'philip', 'barresi', 'philipbarresi', 'philip@hotmail.com', 0, 'cc70e871d2b415b9b2dc47bb9c7462f7f3581562a4d7e0b09ddac2058ea4b206a88af91d2c94dc5bc058a9eb4c0eed7edf9f0196152a5665ecc5eb548a7b40fe', 'bd992a0659db6b2a6287bcfd76e623853e046372184baa2fc3c2e9c9c0ddf95b8c9113e8089738bb443614cdd13844c84ea169e8a19b88cc85abcff6d1c9adf0'),
(3, 'Donald', 'Trump', 'democrat_clown', 'sturets@stevens.edu', 0, 'bfa73fadc542482a639be1fd89ec87a4b197d4b1d174765e46d9c1a9853b1d09bc24d69ea35270ce03018fd3c0de41a84b26a8174c29daf5cf87a6dc3e17fdb7', '4ff51e99a4f6eff1c0b01c3641641233a432e5a451b8b64a0ea9a0afa970c59a3ec0b589c82b5a931097291d0235f697b008718e74d7863c2957bd00c2fb5001');

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE IF NOT EXISTS `rentals` (
  `companyid` int(11) NOT NULL,
  `airportid` int(11) NOT NULL,
  `carbrand` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `rank` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`companyid`, `airportid`, `carbrand`, `price`, `rank`, `quantity`, `startdate`, `enddate`, `id`) VALUES
(2, 2, 'Toyota Camry', 60, 8, 3, '2015-12-08', '2015-12-16', 1),
(3, 2, 'Mercedes-Benz ', 100, 9, 2, '2015-12-15', '2015-12-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Date` date NOT NULL,
  `AirportID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `UserID`, `Title`, `Content`, `Rank`, `Date`, `AirportID`) VALUES
(2, 1, 'test', 'test', 1, '2015-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `security_type` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `terminal_id` int(11) NOT NULL,
  `airport` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id`, `name`, `security_type`, `location`, `terminal_id`, `airport`) VALUES
(1, 'McDonald''s', 'pre-check', '11# terminal 1', 1, 'JFK'),
(2, 'Burger King', 'pre-check', '13# terminal 2', 2, 'JFK'),
(3, 'King Schichuan', 'post-check', '23# terminal 1', 1, 'JFK');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE IF NOT EXISTS `terminal` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `airports_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`id`, `name`, `airports_id`) VALUES
(1, 'Terminal 1', 1),
(2, 'Terminal 2', 1),
(3, 'Terminal 3', 1),
(4, 'Terminal 4', 1),
(5, 'Terminal 5', 1),
(6, 'Terminal 7', 1),
(7, 'Terminal 8', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ata`
--
ALTER TABLE `ata`
  ADD KEY `fk_airlineid` (`airlineid`),
  ADD KEY `fk_airport_id` (`airportid`),
  ADD KEY `fk_terminalid` (`terminalid`);

--
-- Indexes for table `carrentalcompany`
--
ALTER TABLE `carrentalcompany`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_companyid` (`companyid`),
  ADD KEY `fk_airportid` (`airportid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_terminal_id` (`terminal_id`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `carrentalcompany`
--
ALTER TABLE `carrentalcompany`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ata`
--
ALTER TABLE `ata`
  ADD CONSTRAINT `fk_airlineid` FOREIGN KEY (`airlineid`) REFERENCES `airlines` (`id`),
  ADD CONSTRAINT `fk_airport_id` FOREIGN KEY (`airportid`) REFERENCES `airports` (`id`),
  ADD CONSTRAINT `fk_terminalid` FOREIGN KEY (`terminalid`) REFERENCES `terminal` (`id`);

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `fk_airportid` FOREIGN KEY (`airportid`) REFERENCES `airports` (`id`),
  ADD CONSTRAINT `fk_companyid` FOREIGN KEY (`companyid`) REFERENCES `carrentalcompany` (`ID`);

--
-- Constraints for table `shopping`
--
ALTER TABLE `shopping`
  ADD CONSTRAINT `fk_terminal_id` FOREIGN KEY (`terminal_id`) REFERENCES `terminal` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
