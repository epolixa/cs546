-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 03:39 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airplanes`
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
(6, 'Australian Airlines', 'Telephone: 1800-843-0002'),
(7, 'Air Canada', 'Telephone:1 (800) 867-1297'),
(8, 'Air China', 'Telephone:1 (800) 437-9597'),
(9, 'Alitalia', 'Telephone:1 (800) 541-4327'),
(10, 'American Eagle', 'Telephone:1 (800) 936-3297'),
(11, 'Arik Air', 'Telephone:1 (800) 432-9731'),
(12, 'Azerbaijan', 'Telephone:1 (800) 947-0937');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `name`, `history`, `parking`, `faq`, `contact`) VALUES
(1, 'JFK', 'John F. Kennedy International Airport (IATA: JFK, ICAO: KJFK, FAA LID: JFK) is a major international airport located in Queens, New York City, United States, 12 miles (20 km) southeast of Lower Manhattan. It is the busiest international air passenger gateway in the United States, handling 53,254,362 passengers in 2014. Over seventy airlines operate out of the airport, with non-stop or direct flights to destinations in all six inhabited continents. The airport features six passenger terminals, four runways, and serves as a hub for American Airlines, Delta Air Lines, and is the primary operating base for JetBlue Airways.\r\n\r\nOpened as New York International Airport in 1948, it was commonly known as Idlewild Airport before being renamed in 1963 in memory of John F. Kennedy, 35th President of the United States, following his assassination.', 'JFK Airport is easily accessible by car and is located in southern Queens on the Van Wyck Expressway (I-678), which can be accessed from the Belt Parkway, the Grand Central Parkway and Queens Boulevard. A ring road connects the airport terminals to the Belt Parkway and the Van Wyck Expressway. The airport offers customers over 17,000 parking spaces, included in multi-level parking garages, surface spaces in the Central Terminal Area, a long-term parking lot and valet parking. There are also private off-site parking operators near the airport.', 'Q: How to visit New York?\r\nA: One of the best ways to see New York is by Subway (Metro) and buses. If you know what you want to see and want to fit right in like a local, then we recommend this. Even if not using the subway or surface buses, the official web site of the Metro Transportation Authority contains a wealth of information, prices, schedules, and more.\r\nVirtually every hotel in New York has either a tour desk, a concierge, or a rack with brochures on what to see.\r\nCity Sights NY is a very large and respected tour operator. One of the questions frequently asked is that the tour companies require a printed voucher. This can be difficult if you are a tourist in a hotel. City Sights NY will accept your tour confirmation number (sent in an email) and a valid ID card to prove your identity.', 'Address: Jamaica, New York, NY 11430, United States\r\nTelephone: +1 718-244-4444'),
(2, 'SanFrancisco', 'San Francisco held a dedicated ceremony for Mills Field Municipal Airport on May 7, 1927 [10]on 150 acres (61 ha) of cow pasture. The land was leased from Ogden L. Mills who had leased it from his grandfather Darius O. Mills. San Francisco International Airport was named Mills Field Municipal Airport until 1931, when it became San Francisco Municipal Airport. "Municipal" was replaced by "International" in 1955.\r\n\r\nUnited Airlines served SFO as well as Oakland Municipal Airport beginning in the 1930s.[11] The March 1939 Official Aviation Guide shows 18 airline departures on weekdays— seventeen United and one TWA. The aerial view c. 1940 looks west along the runway that is now 28R; the seaplane harbor at right is still recognizable north of the airport. Earlier aerial looking NW 1943 vertical aerial (enlargeable) The August 1952 chart shows runway 1L 7000 feet long, 1R 7750 feet, 28L 6500 feet and 28R 8870 feet.\r\n\r\nIn addition to United, Pacific Seaboard Air Lines was operating service between San Francisco and Los Angeles in 1933 with Bellanca CH-300 prop aircraft on a coastal routing of San Francisco - San Jose - Salinas - Monterey - Paso Robles - San Luis Obispo - Santa Maria - Santa Barbara - Los Angeles.[12] Competition with United would result in Pacific Seaboard moving all of its operations to the eastern U.S., being renamed Chicago and Southern Air Lines (C&S) and then becoming a large domestic and international air carrier. Chicago & Southern would eventually in turn be acquired by and merged into Delta Air Lines in 1953 thus providing Delta with its first international routes .[13] Delta would subsequently use this route authority inherited from C&S to fly one its first international services operated with jet aircraft from San Francisco to Montego Bay, Jamaica and Caracas, Venezuela via intermediate stops in Dallas and New Orleans in 1962.[14]\r\n\r\nUnited Airlines Douglas DC-6 propliners flying to and from Hawaii used the Pan American World Airways (Pan Am) terminal beginning in 1947.\r\n\r\nThe first nonstops to the U.S. east coast were flown by United with Douglas DC-7 propliners in 1954. Also in 1954 the airport''s Central Passenger Terminal opened.[15] (It was heavily rebuilt into the international terminal in 1984 and then re-rebuilt into present Terminal 2.) Domestically, the April 1957 Official Airline Guide (OAG) lists 71 scheduled weekday departures on United (plus ten flights a week to Honolulu), 22 on Western Airlines, 19 on Southwest Airways (which was subsequently renamed Pacific Air Lines), twelve on Trans World Airlines (TWA), seven on American Airlines and three on Pacific Southwest Airlines (PSA). As for international flights, Pan American had 21 departures a week, Japan Airlines (JAL) had five and Qantas also had five.\r\n\r\nThe jet age arrived at SFO in March 1959 when TWA introduced Boeing 707-131 jetliners with nonstop service to New York Idlewild Airport (which was subsequently renamed JFK Airport in 1963). United then constructed a large maintenance facility at San Francisco for its new Douglas DC-8 jets which were also flying nonstop service to New York. In July 1959 the first jetway bridge was installed at SFO, which was one of the first in the United States. The cover of the January 3, 1960 American Airlines system timetable contained this message: "NOW! 707 JET FLAGSHIP SERVICE - NONSTOP SAN FRANCISCO - NEW YORK: 2 FLIGHTS DAILY" [16] Also in 1960, Western Airlines was operating "champagne flights" with Boeing 707 jets and Lockheed L-188 Electra propjets to Los Angeles, Seattle, San Diego and Portland, OR.[17] In 1961, the airport had helicopter service operated by San Francisco and Oakland Helicopter Airlines (known as SFO Helicopter Airlines and also as SFO Helicopter) with 68 flights a day. Helicopter flights were operated from the airport to downtown heliports in San Francisco and Oakland, to a new heliport located near the Berkeley Marina and also to Oakland Airport (OAK). In its timetable, SFO Helicopter Airlines, which was based at the airport, described its rotorcraft as "modern, jet turbine powered Sikorsky S-62 ten passenger amphibious helicopters".[18][19] By 1962, Delta Air Lines was operating Convair 880 jetliners into the airport on one its first international jet services with a routing of San Francisco - Dallas Love Field - New Orleans - Montego Bay, Jamaica - Caracas, Venezuela.[14] Also in 1962, National Airlines began operating multistop transcontinental jet service with Douglas DC-8s flying a routing of San Francisco - Houston Hobby Airport - New Orleans - Miami.[20]\r\n\r\nPacific Southwest Airlines (PSA) was operating all of its SFO flights by 1962 with new Lockheed L-188 Electra propjets with nonstop service to Los Angeles (LAX) and Burbank (BUR, now Bob Hope Airport) with direct one stop flights to San Diego (SAN) via LAX or BUR.[21] PSA was operating 14 departures a day on a Monday through Thursday basis to southern California in the summer of 1962 with 21 departures on Fridays and 22 departures on Sundays. By 1965, PSA was operating new Boeing 727-100 jetliners on its intrastate routes in California which were joined in 1967 by new Boeing 727-200 and McDonnell Douglas DC-9-30 jets.[22] In 1974, PSA was operating new wide body Lockheed L-1011 TriStar jetliners on flights from SFO nonstop to Los Angeles and Sacramento with direct one stop service to San Diego and was the only intrastate air carrier in the U.S. ever to operate wide body aircraft.[22] Following the federal Airline Deregulation Act of 1978, PSA then expanded its route system outside of California. By 1967, another intrastate air carrier had joined PSA at SFO: Air California operating Lockheed L-188 Electra propjets nonstop to Orange County Airport (SNA, now John Wayne Airport). Like PSA, Air California (which would be renamed AirCal) eventually became an all-jet airline and expanded its route network outside of the state of California. Air California was subsequently acquired by and merged into American Airlines.\r\n\r\nThe first international service was jointly operated by Australian National Airways (ANA) and British Commonwealth Pacific Airlines (BCPA) with Douglas DC-4 propliners flying a routing of Sydney - Auckland - Fiji - Kanton Island - Honolulu - San Francisco - Vancouver, BC with the inaugural flight departing from Australia on September 15, 1946.[23] TWA began flying nonstop to Europe with Lockheed Constellation propliners (L-1649 models) in 1957. In 1959, Qantas had taken over the ANA/BCPA route from SFO to Sydney and was operating Boeing 707 service to Australia via intermediate stops in Honolulu and Nandi, Fiji.[24] Pan Am attempted to operate Boeing 707-320 jetliners from Tokyo nonstop to SFO in 1960-61 (the westbound nonstops had to await the longer range Boeing 707-320B due to the prevailing winds on the route). Also in 1960, British Overseas Airways Corporation (BOAC, the predecessor of British Airways) was serving the airport with Bristol Britannia turboprops which were flying a westbound routing of London - New York City - San Francisco - Honolulu - Wake Island - Tokyo - Hong Kong as part of the airline''s around the world service.[25] By the next year, BOAC had replaced the large, British-manufactured Britannia propjets with Boeing 707s now being flown on this intercontinental route which enabled the airline to eliminate the technical stop at the Wake Island Airfield.[26] Japan Airlines (JAL) was flying Douglas DC-8 jetliners by 1961 on a routing of San Francisco - Honolulu - Tokyo.[27] Also in 1961, Lufthansa had begun serving SFO with Boeing 707s operating a routing of San Francisco - Montreal Dorval Airport - Paris Orly Airport - Frankfurt three days a week.[28] Lufthansa then operated Boeing 720B jets on this same routing in 1963 and was also flying Boeing 707 service to Frankfurt via stops in Montreal and London Heathrow Airport this same year.[29] By 1965, Pan American-Grace Airways, known as Panagra, was operating Douglas DC-8 jets on an international routing of San Francisco - Los Angeles - Panama City, Panama - Lima, Peru - Santiago, Chile - Buenos Aires, Argentina.[30] The Panagra service to Latin America would eventually be taken over in the late 1960s by Braniff International which operated Douglas DC-8-62 long range jetliners into SFO following Braniff''s acquisition of Panagra.[31] By 1970, CP Air (formerly Canadian Pacific Airlines) was flying nonstop to Vancouver, BC with continuing, no change of plane Boeing 737-200 jet service to Winnipeg, Toronto, Ottawa and Montreal.[32]\r\n\r\nPacific Air Lines, the successor to Southwest Airways, was based at the airport. Southwest Airways began flying scheduled passenger operations from SFO in 1946 with war surplus C-47s, the military version of the Douglas DC-3. In the late 1950s, Southwest Airways changed its name to Pacific Air Lines.[33] In 1959, Pacific Air Lines began operating new Fairchild F-27 turboprop aircraft from SFO and by 1966 was flying new Boeing 727-100 jetliners from the airport.[34][35] Pacific used the 727 to introduce the first jet service from San Francisco to several destinations in California including Bakersfield, Eureka/Arcata, Fresno, Monterey and Santa Barbara. In 1968, Pacific merged with Bonanza Air Lines and West Coast Airlines to form Air West which also had its headquarters at SFO. West Coast Airlines had previously served SFO as well primarily with Douglas DC-9-10 jet service and Fairchild F-27 turboprop flights to destinations in Oregon and Washington state.[36] In 1970, Air West was acquired by Howard Hughes with the airline being renamed Hughes Airwest which in turn continued to be based at the airport where it also operated a hub. By the late 1970s, the airline was operating an all-jet fleet of Boeing 727-200, Douglas DC-9-10 and McDonnell Douglas DC-9-30 jetliners serving an extensive route network in the western U.S. with flights to Mexico and western Canada as well.[37] Hughes Airwest was eventually acquired by Minneapolis-based Republic Airlines (1979-1986) in 1980 and the airline''s corporate headquarters office at SFO was closed.\r\n\r\nThe airport closed following the Loma Prieta earthquake on October 17, 1989, reopening the following morning.[38] Minor damage to the runways was quickly repaired.\r\n', 'The airport is located on U.S. Route 101, 13 miles (21 km) south of downtown San Francisco. It is near the US 101 interchange with Interstate 380, a short freeway that connects US 101 with Interstate 280.\r\n\r\nThe airport provides both short-term and long-term parking facilities.\r\n\r\n\r\nSFO with US 101 in the background\r\nShort term parking is located in the central terminal area and two international terminal garages. Long term parking is located on South Airport Blvd. and San Bruno Ave. and are served by shuttle buses.[103]\r\n\r\nPassengers can also park long-term at a select number of BART stations that have parking lots, with a permit purchased online in advance.\r\n', 'Q: How to take a taxi?\r\nA: Taxis depart from designated taxi zones located at the roadway center islands, on the Arrivals/Baggage Claim Level of all terminals.[105]\r\n\r\nRide share services (or transportation network companies) such as Lyft, Uber, and Sidecar are available via their respective mobile app and can be picked up at the curbside of the each terminal''s departure level.\r\n', 'San Francisco, CA 94128\r\n(650) 821-8211'),
(3, 'HGB', 'The site for Bush Intercontinental Airport was originally purchased by a group of Houston businessmen in 1957 to preserve the site until the city of Houston could formulate a plan for a second airport, supplanting what was then known as Houston Municipal Airport (later renamed William P. Hobby Airport). The holding company for the land was named the Jet Era Ranch Corporation, but a typographical error transformed the words "Jet Era" into "Jetero" and the airport site subsequently became known as the Jetero airport site. Although the name Jetero was no longer used in official planning documents after 1961, the eastern entrance to the airport was named Jetero Boulevard. Most of Jetero Boulevard was subsequently renamed Will Clayton Parkway.[citation needed]\r\n\r\nThe City of Houston annexed the Bush Airport area in 1965. This annexation, along with the 1965 annexations of the Bayport area, the Fondren Road area, and an area west of Sharpstown, resulted in a total gain of 51,251 acres (20,741 ha) of land for the city limits.[7]\r\n\r\n\r\nThe Houston Airport System Administration Building is located on the airport grounds\r\nHouston Intercontinental Airport, which was the original name for IAH, opened in June 1969.[4] All scheduled passenger airline service formerly operated from William P. Hobby Airport moved to Intercontinental upon the airport''s completion. Hobby remained open as a general aviation airport and was once again used for scheduled passenger airline flights two years later when Southwest Airlines initiated intrastate jet service between Hobby and Dallas Love Field in 1971.[8]\r\n\r\nHouston Intercontinental had been scheduled to open in 1967, but design changes regarding the terminals created cost overruns and construction delays. The prime contractor, R.F. Ball Construction of San Antonio, sued the city of Houston for $11 million in damages, but assistant city attorney Joseph Guy Rollins, Jr. successfully defended the municipality on appeal to the Texas Supreme Court.[9]\r\n\r\nAt the time of the opening of IAH in 1969, domestic scheduled passenger airline service was being operated by American Airlines, Braniff International Airways, Continental Airlines, Delta Air Lines, Eastern Air Lines, National Airlines and Houston-based Texas International Airlines which had formerly operated as Trans-Texas Airways (TTa).[10] International service at this time was being flown by Pan American World Airways (Pan Am) with ten nonstop flights a week operated with Boeing 707 jetliners to Mexico City, KLM Royal Dutch Airlines operating Douglas DC-8 jets four days a week to Amsterdam via an intermediate stop in Montreal, Braniff International with Boeing 727 service several times a week to Panama City, Panama and Aeronaves de Mexico (now Aeromexico) flying Douglas DC-9 jets to Monterrey, Guadalajara, Puerto Vallarta, Acapulco and Mexico City several days a week.[11][12][13][14] Texas International was also operating direct, no change of plane service to Mexico at this time with Douglas DC-9 jet service to Monterrey and Convair 600 turboprop flights to Tampico and Veracruz.[15] KLM Royal Dutch introduced Boeing 747 service in 1971 and by 1974 Air France was operating four nonstop Boeing 747 flights a week to both Paris and Mexico City.[16][17] Also in 1974, Continental and National were operating McDonnell Douglas DC-10 wide body jetliners into IAH while Delta was flying Lockheed L-1011 TriStar wide body jets with both types being operated on respective domestic routes from the airport by these airlines.[18] By the late 1970s, Cayman Airways had begun nonstop service between Grand Cayman in the Caribbean and Intercontinental with stretched British Aircraft Corporation BAC One-Eleven series 500 twin jets.[19] Cayman Airways served the airport for many years, operating a variety of aircraft including Boeing 727-200, 737-200, 737-300, 737-400 and Douglas DC-8 jetliners into IAH in addition to the BAC One-Eleven.[20]\r\n\r\nBy July 1983, the number of domestic and international air carriers serving Intercontinental had grown substantially. American, Continental, Delta and Eastern had been joined by Piedmont Airlines, Southwest Airlines, Trans World Airlines (TWA), United Airlines, USAir and Western Airlines.[21] Western was operating daily McDonnell Douglas DC-10 wide body jet service nonstop to Salt Lake City at this time with this flight also offering direct one stop service to Anchorage.[22] International service was being operated by Air Canada, Aviateca, British Caledonian Airways, Continental Airlines, Eastern Air Lines, SAHSA, South African Airways, TACA (now Avianca El Salvador) and VIASA in addition to Pan Am, KLM Royal Dutch, Air France, Aeromexico and Cayman Airways.[23] Several commuter and regional airlines were also operating passenger service at this time from IAH including Emerald Air (operating as Pan Am Express), Metro Airlines, Rio Airways and Royale Airlines.[21] Metro Airlines was operating "cross-town" shuttle service with de Havilland Canada DHC-6 Twin Otter turboprops with up to seventeen round trip flights a day between IAH and the Clear Lake City STOLport located near the NASA Johnson Space Center and also up to nine round trip flights a day between the airport and Sugar Land Regional Airport as well as other flights to regional destinations in Texas and Louisiana.[21] In addition, at this same time the airport had scheduled helicopter airline service operated by Executive Helicopters with Bell 206L "Long Ranger" helicopters to four Houston-area heliports with up to 36 round trip flights a day.[21]\r\n\r\nIn the late 1980s, Houston City Council considered a plan to rename the airport after Mickey Leland—an African-American U.S. Congressman who died in an aviation accident in Ethiopia. Instead of renaming the whole airport, the city named Mickey Leland International Arrivals Building, which would later become Mickey Leland Terminal D, after the congressman. In April 1997, Houston City Council unanimously voted to rename the airport George Bush Intercontinental Airport/Houston, after George H. W. Bush, the 41st President of the United States.[4][24]\r\n\r\nOn August 28, 1990, Continental Airlines agreed to build its maintenance center at George Bush Intercontinental Airport; Continental agreed to do so because the city of Houston agreed to provide city-owned land near the airport so that Continental could build its maintenance facility there.[25]\r\n\r\nAs of 2007, Terminals A and B remain from the original design of the airport. Lewis W. Cutrer Terminal C opened in 1981, the Mickey Leland International Arrivals Building (now called Terminal D) opened in May 1990, and the new Terminal E partially opened on June 3, 2003. The rest of Terminal E opened on January 7, 2004. Terminal D is the arrival point for all international flights arriving into Houston except for United flights, which use Terminal E. Terminal D also held customs and INS until the opening of the new Federal Inspection Service (FIS) building, completed on January 25, 2005.[26]\r\n\r\nOn January 7, 2009, a Continental Airlines Boeing 737-800 departing Bush Intercontinental was the first U.S. commercial jet to fly on a mix of conventional jet fuel and biofuel.[27][28]\r\n\r\nIn December 2009 the Houston City Council approved a plan to allow Midway Cos. to develop 10 acres (4.0 ha) of land owned by Houston Airport System on the grounds of Bush Airport. Midway plans to develop a travel center for the airport''s rental car facility. The city dictated that the developer needed to place a convenience store and gas station facility, a flight information board, a fast casual restaurant, and a sit-down restaurant. Beyond the required buildings, the developer plans to add an office facility between 20,000 and 40,000 square feet (1,900 and 3,700 m2) and additional retail; the developer may add a hotel.[29]\r\n\r\nIn 2011 Continental Airlines began Boeing 777-200 service to Lagos, Nigeria; this was the airport''s first nonstop flight to the African continent although South African Airways had operated nonstop Boeing 747SP service in 1983 between IAH and Amilcar Cabral International Airport in the Cape Verde islands off the coast of Africa as a refueling stop for its flights between Houston and Johannesburg, South Africa.[30][31] Continental was also planning to commence Boeing 787 service nonstop to Auckland, New Zealand but plans for the Auckland service were cancelled as a reaction to new international flights at Hobby Airport announced by Southwest Airlines.[32] United Airlines—which acquired Continental and had fully integrated it into the United brand by early 2012—had postponed the introduction of this service owing to delays associated with the Boeing 787,[33] but still hasn''t begun the service with seven 787 Dreamliners currently in its fleet (as of November 2013). Its 787s have been put to use on other international routes, however, including Houston-London and United''s new Houston-Lagos flights. The IAH-Auckland nonstop route has since been announced by Air New Zealand using a Boeing 777-200ER.[34] In 2014, United Airlines added a second daily flight to Tokyo, new routes to Munich, Germany, Santiago, Chile and Punta Cana, Dominican Republic and restarted the Aruba route (which had been canceled in 2012).\r\n\r\nHouston became the sixth U.S. city to have Airbus A380 service when Lufthansa transitioned its Houston-Frankfurt route from a Boeing 747-400 to an A380 service on August 1, 2012.[35]\r\n\r\nOn July 11, 2013, Air China began nonstop flights from Houston to Beijing-Capital using a Boeing 777-300ER. This is the airport''s first nonstop route to mainland China.[36]\r\n\r\nHouston also gained nonstop flights to Turkey when Turkish Airlines launched nonstop service to Istanbul-Atatürk on April 1, 2013.[37]\r\n\r\nKorean Air commenced nonstop flights from Seoul-Incheon to Houston on May 2, 2014.[38] Among other continental-Asia destinations, Singapore Airlines offers nonstop Boeing 777-300 service between Houston and Moscow with continuing, no change of plane service to its hub in Singapore; Qatar Airways flies a nonstop Houston-Doha route utilizing a Boeing 777-200; and Emirates flies nonstop from Houston to Dubai with the Airbus A380.\r\n\r\nOn March 31, 2014, Scandinavian Airlines (SAS) announced that it would begin nonstop flights between Stavanger, Norway and Houston. This is the first time the airline has opened a route from one of its non-hub cities. The aircraft will be a leased Boeing 737 BBJ from PrivatAir. The aircraft will operate in SAS colors in a 44-seat all business class configuration. SAS subsequently began offering this new service but has now announced these flights will end on October 24, 2015.\r\n\r\nOn April 24, 2014, Spirit Airlines announced new services from Houston, to 6 new domestic destinations, including Atlanta, Fort Lauderdale, Kansas City, New Orleans and San Diego. In addition, Spirit added seasonal service between Houston and Minneapolis. These new flights bring their total destinations from Houston to 12 locations, which makes Spirit the second largest domestic airline by destinations at Houston''s IAH, behind United Airlines. During September 2014, Spirit sought approval from the US Department of Transportation (DoT) to launch service from Houston Intercontinental to Managua, San José, San Pedro Sula, San Salvador, Cancun, San José del Cabo and Toluca. Spirit Airlines with the addition of the above-mentioned routes has increased Houston Intercontinental Airport''s placement from the ninth largest focus city to the fifth largest focus city based upon the number of flights flown per week.[39] Spirit Airlines experienced growth of 123% in weekly flight departures at Houston Intercontinental from August 2014 to August 2015.\r\n\r\nIn 2014, Taiwan-based carrier EVA Air announced that it will launch nonstop flights from Houston to Taipei on June 19, 2015 initially with three flights a week, on the 777-300ER. The frequency will be increased to four times a week starting July 1, 2015.[40] These flights will leave Houston in the early morning, about an hour past midnight. This will mark the first time that nonstop flights will commence between Taipei and any airport in Texas. In addition, All Nippon Airways also announced new 2015 service in 2014 from Narita International Airport. Flights on the 777-300ER began on June 12, 2015, with ANA becoming the first Japanese-based carrier to operate passenger flights into IAH. On June 19, 2014, Emirates announced that it would become the second operator of the Airbus A380 at Bush, upgrading its service from Dubai to Houston from a Boeing 777 to the "Super Jumbo" A380. Service began on December 3, 2014.\r\n\r\nOn September 17, 2014, Frontier Airlines released that they would begin to base aircraft from Bush, for their new Phoenix and San Francisco services, with the possibility of more destinations from Houston to come in the future.\r\n\r\nIn January 2015, United Airlines expressed interest in opening direct flights between Houston, and Havana, Cuba, after President Barack Obama originally announced the change in U.S. policy on Cuba on Dec. 17, as part of a larger deal that secured the release of Alan Gross, an American government subcontractor who was imprisoned on the island for five years. The flights are currently pending approval from the Department of Transportation. On July 16, 2015, the new Eastern Air Lines (2015) announced that it would begin a weekly service to Havana from Houston, in cooperation with HavanaAir Charters utilizing Boeing 737-800 aircraft, beginning on August 12, 2015. The service was announced to have been delayed as of August 11, 2015, with no announcement of a new date.[41]\r\n\r\nOn April 15, 2015, Air New Zealand announced that they would begin nonstop flights from Auckland to Houston with Boeing 777-200ER aircraft beginning December 15, 2015.[42] Houston becomes the first airport in the Americas and fifth in the world to have nonstop flights to all inhabitable continent.\r\n', 'Airports hotels with parking packages have become a favorite among seasoned travelers. Often less than the cost of airport parking alone, these packages offer convenient parking and hotel accommodation options when you leave or return from the airport. If you have en early morning depature, why not book an airport hotel that offers Park, Sleep and Fly packages, staying the night before you depart, rather than leaving home in the early hours of the morning?\r\nA good night''s sleep at a hotel located close to the airport can alleviate the fear of missing your flight due to heavy traffic, bad weather or airport security measures. Again, in many cases, the cost of the Park Sleep and Fly hotel packages with free airport parking is about the same as the airport parking alone\r\n', 'Q: Are there good hotels nearby?\r\nA: Houston Airport Marriott at George Bush Intercontinental\r\nhttp://www.booking.com/hotel/us/houston-airport-at-george-bush-intercontinental-houston.en-us.html?aid=358577This hotel is located less than one mile from Houston Airport, connecting with underground access to free airport tram service. This hotel is the best choice for those passengers flying early in the morning.\r\n4-star hotel, elegant, comfortable and its location, makes this hotel the best choice for those searching an hotel close to the airport.\r\nThe hotel has outdoor swimming pool and fitness center.\r\nDowntown Houston is 30 minutes drive away.\r\nCheck details of this hotel\r\n\r\n\r\nThere are a great selection of Hotels near Houston George Bush Intercontinental Airport. See below a selection of hotels for you: \r\n', '2800 N Terminal Rd, Houston, TX 77032\r\n(281) 230-3100'),
(4, 'Miami', 'In 1945 the City of Miami established a Port Authority and raised bond revenue to purchase the airport, which had been renamed 36th Street Airport, from Pan Am. It merged with the Army airfield south of the railroad in 1949 and expanded further in 1951 when the railroad line was moved south to make room. The old terminal on 36th Street was closed in 1959 when the modern passenger terminal (since greatly expanded) opened. Air Force Reserve troop carrier and rescue squadrons also operated from the airport from 1949 through 1959, when the last unit relocated to nearby Homestead Air Force Base, now Homestead Air Reserve Base.\r\n\r\nNonstop flights to Chicago and New York/Newark started in 1946–47, but nonstops didn''t reach west beyond St. Louis and New Orleans until January 1962. Nonstop transatlantic flights began in 1970. In the late 1970s and early 1980s Air Florida had a hub at MIA, with a nonstop flight to London which it acquired from National upon the latter''s merger with Pan Am. Air Florida ceased operations in 1982 following the crash of Air Florida Flight 90.[7] British Airways flew a Concorde triweekly between Miami and London via Washington DC from 1984 to 1991.[8]\r\n\r\nAfter Frank Borman became president of Eastern in 1975 he moved Eastern''s headquarters from Rockefeller Center in New York City to Building 16 in the northeast corner of MIA which was Eastern''s maintenance base. Eastern remained one of the largest employers in the Miami metropolitan area until ongoing labor union unrest, coupled with the airline''s acquisition by union antagonist Frank Lorenzo in 1986, ultimately forced the airline into bankruptcy in 1989.[7]\r\n\r\nIn the midst of Eastern''s turmoil American Airlines CEO Bob Crandall sought a new hub in order to utilize new aircraft which AA had on order. AA studies indicated that Delta Air Lines would provide strong competition on most routes from Eastern''s hub at Atlanta, but that MIA had many key routes only served by Eastern. American announced that it would establish a base at MIA in August 1988. Lorenzo considered selling Eastern''s profitable Latin American routes to AA as part of a Chapter 11 reorganization of Eastern in early 1989, but backed out in a last-ditch effort to rebuild the MIA hub. The effort quickly proved futile, and American purchased the routes (including the route authority between Miami and London then held by Eastern sister company Continental Airlines) in a liquidation of Eastern which was completed in 1990.[7] Later in the 1990s, American transferred more employees and equipment to MIA from its failed domestic hubs at Nashville and Raleigh–Durham. Today Miami is American''s largest air freight hub and is the main connecting point in the airline''s north–south international route network.\r\n\r\nPan Am, the other key carrier at MIA, was acquired by Delta Air Lines in 1991, but filed for bankruptcy shortly thereafter. Its remaining international routes from Miami to Europe and Latin America were sold to United Airlines for $135 million as part of Pan Am''s emergency liquidation that December.[7] United maintained a Latin American hub at MIA through the 1990s but ended flights from Miami to South America, and shut down its Miami crew base, in May 2004, reallocating most Miami resources to its main hub in Chicago.[9]\r\n\r\n\r\nMIA in 1999\r\nStricter visa requirements for aliens in transit (a result, in part, of the September 11, 2001 attacks) have lessened MIA''s role as an intercontinental connecting hub, but it remains the most important hub between Europe and Latin America. In 2004 Iberia Airlines ended its hub in Miami, opting to run more direct flights from Spain to Central America.[10] Today, more European carriers serve Miami International Airport than any other airport in the United States, except New York City''s John F. Kennedy.\r\n\r\nAmerican Airlines, American Eagle, Delta Air Lines, Miami Air, Sky King Airlines, and United Airlines all operate regular flights between MIA and several airports in Cuba, one of a few airports with direct airlink between the two nations. However, these flights must be booked through agents with special authorization from the Office of Foreign Assets Control, and are only generally available to government officials, journalists, researchers, professionals attending conferences, or expatriates visiting Cuban family.\r\n', 'Valet Parking(map) Central Terminal \r\n\r\nValet offers closest parking at MIA, starting at $18 with no hidden charges or fees.\r\nIt makes sense to park at MIA!\r\n\r\nParking attendants park your cars leaving you free to depart. Just drop off your vehicle, leave your keys, get your valet parking ticket, and walk directly to the north terminal, or take the moving sidewalk to the concourses at the central and south terminals. Be ready to tell the parking attendant when you plan to return.\r\n\r\nValet parking is located at departure level at:\r\n\r\nNorth Parking Lot, Level 2, across from North Terminal D\r\nSouth Parking Lot, Level 2, across from South Terminal H\r\nReturning passengers will be provided with a telephone number that alerts valet parking attendants that your flight has arrived so that your vehicle will be ready as soon as you get there.\r\n\r\nValet Parking Rates:\r\n0 - 3 hours (first day only) \r\n$18.00\r\n3 - 24 hours\r\n$30.00\r\nEach 24 hour period or fraction thereafter\r\n$30.00\r\nVehicles parked in valet are limited to a maximum length of stay of twenty (20) days.\r\n \r\n\r\nParking Rates: Central Terminal Central Terminal Central Terminal\r\n\r\nThe Dolphin (North) Garage serves the North Terminal D and E\r\nand the Flamingo (South) Garage serves the Central Terminal F and G, and South Terminal H and J. It can be accessed on the arrivals or departure levels of the airport. The main entrance to both garages is off Central Boulevard - keep left as you approach the terminal (map)\r\n\r\n \r\n\r\nParking Rates:\r\nEach 20 minute increment or portion thereof\r\n$2.00\r\nMaximum Rate Applies after 2 hours 40 minutes\r\nMaximum Daily Rate\r\n$17.00\r\nAll vehicles parked in the garages are limited to a maximum stay of 60 days, except where posted "no overnight parking."\r\n\r\n \r\nDisabled Parking\r\n\r\n\r\nDesignated disabled permit parking and stroller permit parking is conveniently located by the moving sidewalks on the 3rd level of the North (Dolphin) and South (Flamingo) garages. Additional disabled permit parking is available for wheelchair accessible vehicles on the ground level, at the easternmost section of the North (Dolphin) garage. View the Accessible Parking Areasor MIA''s Travelers with Disabilities section.\r\n\r\n \r\n\r\nNotice to Disabled Parking Patrons\r\nEffective November 16, 2013 at 1201 A.M.:\r\n\r\nBased on Ordinance 13-104 That Amends Section 30-338.2 of the Miami–Dade County Code;\r\n\r\nPublic parking charges WILL APPLY  to vehicles  parking at MIA public parking facilities that display  a disabled parking permit or license tag, except as provided by Florida state law*.  However, a vehicle displaying a disabled parking permit or license tag will be allowed up to two (2) hours of free parking.  Any vehicle exceeding the two-hour free parking period will be charged for the entire time the vehicle uses the facility.\r\n\r\n*In accordance with Florida state law, no parking charges will be imposed on any vehicle with specialized equipment, such as ramps, lifts, foot or hand controls, for use  by a person with a disability, or any vehicle displaying the Florida Toll Exemption permit.\r\n\r\n(map) Central Terminal Central Terminal Central Terminal\r\nOver-height Vehicles(map) Central Terminal\r\nOver-height vehicles may use the "High-Vehicle" surface lot parking area located adjacent to the East side of the North Dolphin Garage.\r\n\r\n\r\nForms of payment:\r\n\r\nCash, checks (drawn on US banks), American Express Travelers Checks and credit cards (Visa, MasterCard, American Express, Discover and Diners).', 'Q: What severe accident happended in the airport before?\r\nA: On October 2, 1959, a Viscount of Cubana de Aviación was hijacked on a flight from Havana to Antonio Maceo Airport, Santiago. The aircraft landed at Miami International Airport.[49]\r\nOn February 12, 1963, Northwest Orient Airlines Flight 705 crashed into the Everglades while en route from Miami to Portland, Oregon via Chicago O''Hare, Spokane, and Seattle.\r\nOn June 23, 1969, a Dominicana Air Lines Carvair ATL. 98, a modified DC-4, en route to Santo Domingo was circling back to Miami International Airport with an engine fire when it crashed onto 36th Street. 5 dead; 7 injured.[50]\r\nOn December 29, 1972, Eastern Air Lines Flight 401, a Lockheed L-1011, crashed into the Everglades. The plane had left JFK International Airport in New York City bound for Miami. (the subject of Hollywood movie, The Ghost of Flight 401).\r\nOn January 15, 1977, Douglas DC-3 N73KW of Air Sunshine crashed shortly after take-off on a domestic scheduled passenger flight to Key West International Airport, Florida. All 33 people on board survived.[51]\r\nOn May 11, 1996, ValuJet Flight 592 crashed into the Everglades 10 minutes after taking off from MIA while en route to Hartsfield-Jackson Atlanta International Airport after a fire broke out in the cargo hold, killing 110 people.\r\nOn August 7, 1997, Fine Air 101, a Douglas DC-8 cargo plane, crashed onto NW 72nd Avenue less than a mile (1.6 km) from the airport.\r\nOn February 2, 1998, two Skyway Enterprises Shorts 330-200 aircraft (N2630A and N2629Y) were damaged beyond repair by a tornado at Miami International Airport. Both aircraft had to be written off. No one was injured.[52]\r\nOn December 22, 2001, American Airlines Flight 63, en route from Paris to Miami, was the target of "shoe bomber" Richard Reid. The plane diverted to Boston Logan Airport.\r\nOn December 7, 2005, forty-four-year-old Rigoberto Alpizar, a passenger aboard American Airlines Flight 924, claimed to have a bomb in his carry-on luggage while boarding the flight''s second leg to Orlando, Florida after arriving on a flight from Quito, Ecuador; the flight had just arrived from Medellín, Colombia. Federal air marshals reportedly shot and killed the man in the jetway of Gate D42 as he attempted to escape the plane after being confronted on board, marking the first time an air marshal has fired a weapon on or near an airplane.', '2100 NW 42nd Ave, Miami, FL 33126\r\n(305) 876-7000'),
(5, 'Honolulu', 'HNL opened in March 1927 as John Rodgers Airport, named after World War I naval officer John Rodgers.[6] It was funded by the territorial legislature and the Chamber of Commerce, and was the first full airport in Hawaii: aircraft had previously been limited to small landing strips, fields or seaplane docks. From 1939 to 1943, the adjacent Keehi Lagoon was dredged for use by seaplanes, and the dredged soil was moved to HNL to provide more space for conventional airplanes.\r\n\r\nThe U.S. military grounded all civil aircraft and took over all civil airports after the attack on Pearl Harbor, and Rodgers Field was designated Naval Air Station Honolulu. The Navy built a control tower and terminal building, and some commercial traffic was allowed during daylight hours. Rodgers Field was returned to the Territory of Hawaii in 1946. At the time, at 4,019 acres (16.26 km2), it was one of the largest airports in the United States, with four paved land runways and three seaplane runways.[6]\r\n\r\nJohn Rodgers Airport was renamed Honolulu Airport in 1947; "International" was added to the name in 1951.[6] Being near the center of the Pacific Ocean it was a stop for many transpacific flights. By 1950 it was the third-busiest airport in the United States in terms of aircraft operations, and its 13,097-foot (3,992 m) runway was the longest in the world in 1953.[6] In summer 1959 Qantas began the first jet service to Honolulu on its flights between Australia and California.[7] Aeronautical engineer and airline consultant, Frank Der Yuen, advised in the design of the original building and founded its aerospace museum.[8]\r\n\r\nThe original terminal building on the southeast side of runways 4 was replaced by the John Rodgers Terminal, which was dedicated on August 22, 1962 and opened on October 14, 1962.[6] From 1970 through 1978, the architect Vladimir Ossipoff designed a terminal modernization project that remodeled this terminal and created several additions,[9][10] which included the Diamond Head Concourse in 1970, the Ewa Concourse in 1972, and the Central Concourse in 1980.[11]\r\n\r\nPan Am used Honolulu as a transpacific hub for many years, initially as a connecting point between the West Coast and Polynesia (Fiji, New Caledonia and New Zealand) in 1946,[12] followed by service to East Asia through Midway Island and Wake Island from 1947.[13] By the mid-1970s Pan Am offered nonstop service from Honolulu to Japan, Guam, Australia, New Zealand and Fiji, as well as to cities on the West Coast.[14] Continental Airlines used Honolulu as a stopover point for charter service to Southeast Asia during the Vietnam War era, and to feed its Guam-based Air Micronesia operation.[15] American Airlines also operated flights to Australia and the South Pacific through Honolulu from 1970 to 1975.[16] Many foreign carriers used Honolulu as a transpacific stopover point, including Air New Zealand, China Airlines, Japan Airlines, Korean Air, Philippine Airlines, Qantas and Singapore Airlines.[17]\r\n\r\nModernization and history since 2006[edit]\r\nOn March 24, 2006 Hawaii Governor Linda Lingle unveiled a $2.3 billion modernization program for Hawaii airports over a 12-year period, with $1.7 billion budgeted for Honolulu International Airport.[18] The plan involves implementing short-term projects within the first five years to improve passenger service and increase security and operational efficiencies.[19]\r\n\r\nAs part of the modernization, flight display monitors throughout the airport have been upgraded, new food and beverage vendors have been added, and a new parking garage across from the International Arrivals terminal has been completed. Current projects include an international arrivals corridor with moving sidewalks built atop the breezeway leading to the Ewa Concourse. The first phase of the project was completed in October 2009, while the remainder of the two phase project was completed in 2010.[20]\r\n\r\nIn 2011, Hawaiian Airlines renovated the check-in lobby of the Interisland Terminal, replacing the traditional check-in counters with six circular check-in islands in the middle of the lobbies, which can be used for inter-island, mainland, and international flights. This renovation project was fully funded by Hawaiian Airlines and not a part of the modernization program.[21]\r\n\r\nFuture projects include construction of a Mauka Concourse branching off the Interisland Terminal, the first concourse expansion at Honolulu International Airport in 15 years. Construction of the concourse will involve replacing the existing Commuter Terminal.[22] This new concourse will be for the exclusive use of Hawaiian Airlines, and will allow it to reduce use of overseas terminal gates for international and US mainland flights. This will mean less walking for passengers who check in, clear security, and use the baggage claim at the inter-island terminal. It will also free up gates in the overseas terminal for use by other airlines. The new commuter terminal will have a dedicated parking lot and will be located east of the current Diamond Head concourse and connected to it by a 2nd floor post security walkway. Landside plans include construction of a consolidated rental car facility (CONRAC). A temporary rental car center is currently being built in the overseas parking garage so that the existing rental car facilities can be demolished to make way for the new permanent facility.\r\n\r\nBy 2012, Hawaiian Airlines was re-establishing Honolulu International Airport as a connecting hub between the United States mainland and the Asia-Pacific region.[23] That year, according to a Massachusetts Institute of Technology study, the airport had 24% fewer domestic departure flights than it did in 2007.', 'PUBLIC PARKING:\r\n\r\nAMPCO Inc.\r\n\r\n\r\nFirst 1/2 hour: $1.00 \r\nEach additional hour: $1.00 \r\nDaily (24 hrs): $13.00 \r\nMonthly: $150.00 non-prorated \r\n*If you leave your car unattended for longer than 30 days \r\nit can be towed unless you inform the parking company.\r\n\r\nPhone: (808) 861-1260', 'Q: What about Facilities and aircraft?\r\nA: The airport has four major runways, which it operates in conjunction with the adjacent Hickam Air Force Base.[25] The principal runway designated 8R/26L, also known as the Reef Runway, was the world''s first major runway constructed entirely offshore. Completed in 1977, the Reef Runway was a designated alternate landing site for the Space Shuttle.\r\n\r\nIn addition to the four paved runways, Honolulu International Airport has two designated offshore runways designated 8W/26W and 4W/22W for use by seaplanes.\r\n\r\nThe entire terminal complex features twenty-four-hour medical services, restaurants, shopping centers and a business center with conference rooms for private use. Passengers have the option of using various short-term and long-term parking structures on the grounds of Honolulu International Airport.\r\n\r\nFor the 12-month period ending January 30, 2014, the airport had 286,897 aircraft operations, an average of 786 per day. Of these movements 53% were scheduled commercial, 25% air taxi, 16% general aviation and 5% military. There are 217 aircraft based at this airport: 51% single-engine, 21% multi-engine, 15% military, 9% helicopter and 3% jet.[26]\r\n\r\nAll Nippon Airways has its Honolulu Office in Airport Building 47.[27] When Mid-Pacific Airlines was in operations, its headquarters were on the airport property.', 'Address: 300 Rodgers Blvd, Honolulu, HI 96819\r\nPhone: (808) 836-6411');

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
(4, 'Budget'),
(5, 'Alamo'),
(6, 'Dollar'),
(7, 'Thrifty'),
(8, 'National'),
(9, 'Payless'),
(10, 'Fox'),
(11, 'Ace'),
(12, 'Sixt');

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
('AA 7972', 'ELAL', 'JFK', '2015-11-25 12:37:11', '2015-11-25 18:37:21', 'en-route', 'SanFrancisco'),
('DL 1232', 'American Eagle', 'HGB', '2015-11-25 20:29:54', '2015-11-25 22:30:14', 'en-route', 'JFK'),
('QA 1114', 'American Airlines', 'Miami', '2015-11-25 21:33:37', '2015-11-25 23:54:34', 'delayed', 'JFK'),
('DA 7932', 'ELAL', 'Honolulu', '2015-11-25 12:37:11', '2015-11-25 18:37:21', 'en-route', 'SanFrancisco'),
('FR 4472', 'Delta Air Lines', 'HGB', '2015-11-26 20:29:54', '2015-11-26 22:30:14', 'en-route', 'Honolulu'),
('JK 144', 'American Eagle', 'Miami', '2015-11-26 21:33:37', '2015-11-26 23:54:34', 'delayed', 'JFK'),
('PO 122', 'American Airlines', 'Honolulu', '2015-11-27 12:37:11', '2015-11-27 18:37:21', 'en-route', 'SanFrancisco'),
('EW 432', 'American Eagle', 'Toronto', '2015-11-27 20:29:54', '2015-11-27 22:30:14', 'en-route', 'JFK'),
('JS 104', 'American Airlines', 'Miami', '2015-11-28 21:33:37', '2015-11-28 23:54:34', 'delayed', 'JFK'),
('SL 732', 'American Eagle', 'JFK', '2015-11-30 12:37:11', '2015-11-30 18:37:21', 'en-route', 'SanFrancisco'),
('EW 4822', 'Delta Air Lines', 'Boston', '2015-11-30 20:29:54', '2015-11-30 22:30:14', 'en-route', 'Honolulu'),
('SI 109', 'American Airlines', 'Miami', '2015-11-30 21:33:37', '2015-11-30 23:54:34', 'delayed', 'JFK'),
('OU 7172', 'Arik Air', 'HGB', '2015-11-30 12:37:11', '2015-11-30 18:37:21', 'en-route', 'SanFrancisco');





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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `username`, `email`, `role`, `password`, `salt`) VALUES
(1, 'Bil', 'Clinton', 'bilclinton', 'bilclinton@stevens.edu', 0, '19618b795f6602900ab8b7c0eb80938f22333ded0a1d0d3f7a452863f5ced0d823127e0a51c6b141f26626721ec2cc7bc2a20b8abcff0811e6e3a4b71dd54377', '81f3d043942bb29c929a14731fe691ac244a34904a86fdeef0353d14521dc3963b41b5e4917fabd6fe7da61575b27e0e1b795290362bae80cf44671ca3398a43'),
(2, 'Bred', 'Pitt', 'bredpitt', 'bredpitt@hotmail.com', 0, 'cc70e871d2b415b9b2dc47bb9c7462f7f3581562a4d7e0b09ddac2058ea4b206a88af91d2c94dc5bc058a9eb4c0eed7edf9f0196152a5665ecc5eb548a7b40fe', 'bd992a0659db6b2a6287bcfd76e623853e046372184baa2fc3c2e9c9c0ddf95b8c9113e8089738bb443614cdd13844c84ea169e8a19b88cc85abcff6d1c9adf0'),
(3, 'Donald', 'Trump', 'republican_ace', 'sturets@stevens.edu', 0, 'bfa73fadc542482a639be1fd89ec87a4b197d4b1d174765e46d9c1a9853b1d09bc24d69ea35270ce03018fd3c0de41a84b26a8174c29daf5cf87a6dc3e17fdb7', '4ff51e99a4f6eff1c0b01c3641641233a432e5a451b8b64a0ea9a0afa970c59a3ec0b589c82b5a931097291d0235f697b008718e74d7863c2957bd00c2fb5001'),
(4, 'Steven', 'Seagal', 'stevenseagal', 'stevenseagal@gmail.com', 1, 'ac613ba31a2a4d75bed752190c43cff070512b1e7e88cc6723b187add3c28e159a7c7bac99d0e648216fff411b9c6320f9143aa6027328620c44815301c82c11', '14fcf470225435dc10eaa7626e035aa4e6d67a51eb5ca1219c175c17f875340858ab1c7b1baedc6a39913cb60039bec54848e8cccaf6316275768e69116c54fb'),
(5, 'Hilary', 'Clinton', 'barking_democrat', 'hilaryclinton@gmail.com', 0, 'f98facfdd15cf02da5d62092ced6be8873d91a4360d22025d9b2e387c70b95bdf9cd8debbc4b6d70099ced0ff7cc6b262beec5f836ceab934f73e45d4346c7b8', 'adb1ec6093f8666976e86be0b9528a5f357e600dddb7526f93f1752957e4c0f43be36d3e261e212c8a5beee27cc896cd7a9052ca0d029f335510305fade832f5'),
(6, 'Bernie', 'Sanders', 'loserof2016', 'berniesanders@hotmail.com', 0, 'a7863e4b020002ffa75d8cb804b428462e775842ba771e3e567d7c29af779e885982b31026a792fbb03420db82b392c6ecd3b67370b7a280ee08cf5499d60cff', '7fc4a4ffa2002eed2e108f5010c872bdd2d9e34fe0ca3c7ab50225495c91042ac871910a352385d2009ce20985f1829d9bbae2800fc821c99ad8d1f3e17d3060'),
(7, 'Carly', 'Fiorina', 'carlyfiorina', 'smartrepublican@gmail.com', 0, 'b180620ebbe2991ecd8d3189162f4a4e1eefe3c8eb75cbcc100ea242d9dccabed66a3b2874527ab63fcf8e21087c0996e03bfc99f337c22c5d558f11b684b2bc', 'ab64092683d5551ecb01902f1b02970414f6b0acd987b5b0df9afa001e60756b78c8c154b5d1fba6cc8ea8734e3da2167bf61362d3e7e92d6ea27e4fbe9e553f'),
(8, 'Ben', 'Carson', 'bencarson', 'neurosurgeon@stevens.edu', 1, '87ca64574fe2ecae5306e91422f38c56ec9967a80083700e038a1d8c8a69c7014641edf4eeb46eb738f63e4cf34b7d16ed493045238b7c1b9956ed8b25de8798', '56c2591ba0e92b9d75e15571006940c7bb3c5f5fefe1fa065834101dc0e0f8a91907a753b32eb429c591b137194bb517b5ae49a10d5970081fbbeb57844f6168'),
(9, 'Condoleezza', 'Rice', 'leezzarice', 'securityadvisor@yahoo.com', 0, 'ee3197e0d5a6dc7d2916965dbac4c5ccdbcc302fe87b3aebe8d073ade2ba1aeec43a018dc8c2ff1bc1dd63dbb005508df70d402b8faf02a2a133106b8b5a0972', '7fffc12f7e5d1f36364c279002b6ea8d9bfd1993ee126a584c76ab1c00df23072382b53cb440608be7ca4abad65293ee15590781d702622b1c68899175f152c9'),
(10, 'George', 'Washington', 'firstpresident', 'firstpresident@stevens.edu', 1, '7a700a8bc97fe74071e6675c1ac2ff4271f4987f0bb1484e28ac7c83a68e333bc9e67409fc5b7ac38456396887437d77a09c03987e1c27bae35f3ca164eb3e47', '2b902eaccb11c43b88c501af22696fd2915ef94693948443a8cc963ff3ccdbf1bc9c81fc06a4af52d268fe1ae4d55a9da8bd8594029f67513313cfeceb891a97');

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
(3, 2, 'Mercedes-Benz ', 100, 9, 2, '2015-12-15', '2015-12-30', 2),
(9, 1, 'Mercedes-Benz ', 120, 9, 3, '2015-12-15', '2015-12-30', 3),
(7, 1, 'Toyota Camry', 50, 7, 3, '2015-12-08', '2015-12-16', 4),
(5, 1, 'Mercedes-Benz ', 100, 9, 2, '2015-12-15', '2015-12-30', 5),
(8, 3, 'Mercedes-Benz ', 100, 9, 2, '2015-12-15', '2015-12-30', 6),
(1, 3, 'Toyota Camry', 60, 8, 3, '2015-12-08', '2015-12-16', 7),
(1, 5, 'Mercedes-Benz ', 200, 9, 4, '2015-12-15', '2015-12-30', 8),
(4, 5, 'Mercedes-Benz ', 100, 8, 2, '2015-12-15', '2015-12-30', 9),
(6, 4, 'Toyota Camry', 70, 8, 3, '2015-12-08', '2015-12-16', 10),
(6, 4, 'Mercedes-Benz ', 130, 9, 2, '2015-12-15', '2015-12-30', 11),
(9, 1, 'Mercedes-Benz ', 150, 9, 2, '2015-12-15', '2015-12-30', 12);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `UserID`, `Title`, `Content`, `Rank`, `Date`, `AirportID`) VALUES
(2, 3, 'JFK International Airport', 'Awesome international airport, except for the challenging traffic to get there. ', 10, '2015-11-30', 1),
(3, 3, 'HGB Intercontinental Airport', 'The newer of the two airports that offer commercial flights in and out of Houston. The Bush International Airport is conveniently located on the outskirts of downtown Houston.I am disappointed with both the layout and lack of businesses within the terminal.', 7, '2015-12-01', 3),
(4, 7, 'Miami International Airport', 'The airport is clean and seems fairly new, but that is about where my praise ends. \r\nNow I can''t rant about the Delta service, the traffic, or any of the other stuff that people like to blame airports for. What I can fault them for is the fact that the airport was freezing and you had to walk seemingly forever to get anywhere.', 6, '2015-11-25', 4),
(6, 7, 'Honolulu International Airport', 'They took my banana and wouldn''t let me eat it. They just took it. Banana stealers!!! Eat all fruits BEFOREhand. Don''t count on that being your snack. The security lines went quickly but TSA was power tripping more than usual here today. \r\nThere aren''t any water bottle fill stations that I could find, maybe those will get added with all the construction that''s going on. \r\nI wasn''t impressed with the shopping.', 5, '2015-12-07', 5),
(7, 9, 'San Francisco International Airport', 'Have flown in and out of here hundreds of times, but have never noticed the aerial view. Other than than. Good spot to fly out of for over seas adventures. Still a bit chaotic, but manageable. ', 10, '2015-11-23', 2),
(8, 9, 'Honolulu International Airport', 'Honolulu Airport is your gateway, your portal to either permanently or temporarily escape, that is if you live in Hawaii.', 9, '2015-11-03', 5),
(9, 1, 'San Francisco Airport', 'I''ve landed in heaven on earth! Beautiful skies from 10,000 ft to the ground. San Francisco starts and stops at this very place SFO.  Very nice airport, not much complication. Actually pretty easy to navigate from terminals to baggage claim to taxi/shuttle service. ', 10, '2015-11-15', 2),
(10, 1, 'Miami International Airport', 'Miami airport isn''t bad. They modeled it with light colors so it''s very inviting and fitting for Miami. They have many food options and a SkyTrain (always a plus). Most gates have 1-2 Verizon power stations to recharge your phones and computers. There is wifi, but only the first 30 minutes is free.', 8, '2015-11-20', 4),
(11, 2, 'JFK International Airport', 'JFK is a very chic airport. Terminal 8 seems very modern compared to the whole La Guardia International Airport for sure, and it''s bigger and just has a better feel to it.', 9, '2015-11-18', 1),
(12, 2, 'George Bush Intercontinental Airport', 'I am disappointed with both the layout and lack of  businesses within the terminal.  For an airport that services as many flights as they do I would expect to see something simular to the Delta terminal in Detroit,  DFW, St Paul or Chicago.', 5, '2015-11-23', 3),
(14, 6, 'Honolulu International Airport', 'There are outdoor parts which get pretty humid, given the island air and the clusters of humans, and indoor areas near the gates that are air conditioned.\r\n', 6, '2015-10-22', 5),
(15, 5, 'San Francisco International Airport', 'Great airport with lots of shopping and eating places . Right now going through enhancement but clear signs to help. Since I fly in and out to Bakersfield mostly so do lot know much about other terminals but United . Hope they are also as good as United .', 10, '2015-11-01', 2),
(16, 6, 'Miami International Airport', 'The airport was clean and has lots of shops. The Starbucks was too busy to stop at of course. \r\nIt''s a little bit of trek to the car rental center but they have bouncy fast walks to get you there. So it''s a fun trek. \r\nI liked all of the art and such around the terminals.', 10, '2015-10-10', 4),
(17, 6, 'JFK International Airport', 'I had a very positive experience here! Everyone I asked a question was incredibly friendly and helpful. The security guard checking board passes in the security like was just a ray of sunshine cracking jokes with everyone and the cashier at one of the food spots went to the back to check with her team and recommend the perfect store to get some last minute souvenirs (the shop was a little hidden around the corner so I might have missed or otherwise).', 10, '2015-10-23', 1);

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
(2, 'Burger King', 'pre-check', '13# terminal 2', 14, 'HGB'),
(3, 'King Schichuan', 'post-check', '23# terminal 1', 15, 'HGB'),
(4, 'McDonald''s', 'pre-check', '11# terminal 5', 25, 'Miami'),
(5, 'Burger King', 'pre-check', '13# terminal 2', 8, 'SanFrancisco'),
(6, 'King Schichuan', 'post-check', '23# terminal 1', 8, 'SanFrancisco'),
(7, 'McDonald''s', 'pre-check', '11# terminal 1', 9, 'SanFrancisco'),
(8, 'Burger King', 'pre-check', '13# terminal 2', 9, 'SanFrancisco'),
(9, 'King Schichuan', 'post-check', '23# terminal 1', 22, 'Miami'),
(10, 'McDonald''s', 'pre-check', '11# terminal 1', 22, 'Miami'),
(11, 'Burger King', 'pre-check', '13# terminal 2', 23, 'Miami'),
(12, 'King Schichuan', 'post-check', '23# terminal 3', 24, 'Miami'),
(13, 'McDonald''s', 'pre-check', '11# terminal 1', 28, 'Honolulu'),
(14, 'Burger King', 'pre-check', '13# terminal 2', 29, 'Honolulu'),
(15, 'King Schichuan', 'post-check', '23# terminal 1', 28, 'Honolulu'),
(16, 'McDonald''s', 'pre-check', '11# terminal 3', 30, 'Honolulu'),
(17, 'Burger King', 'pre-check', '13# terminal 2', 2, 'JFK'),
(18, 'King Schichuan', 'post-check', '23# terminal 1', 3, 'JFK');

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
(7, 'Terminal 8', 1),
(8, 'Terminal A', 2),
(9, 'Terminal B', 2),
(10, 'Terminal C', 2),
(11, 'Terminal D', 2),
(12, 'Terminal E', 2),
(13, 'Terminal F', 2),
(14, 'Terminal 1', 3),
(15, 'Terminal 2', 3),
(16, 'Terminal 3', 3),
(17, 'Terminal 4', 3),
(18, 'Terminal 5', 3),
(19, 'Terminal 7', 3),
(20, 'Terminal 8', 3),
(21, 'Terminal 1', 4),
(22, 'Terminal 2', 4),
(23, 'Terminal 3', 4),
(24, 'Terminal 4', 4),
(25, 'Terminal 5', 4),
(26, 'Terminal 7', 4),
(27, 'Terminal 8', 4),
(28, 'Terminal 1', 5),
(29, 'Terminal 2', 5),
(30, 'Terminal 3', 5),
(31, 'Terminal 4', 5),
(32, 'Terminal 5', 5),
(33, 'Terminal 7', 5),
(34, 'Terminal 8', 5);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `carrentalcompany`
--
ALTER TABLE `carrentalcompany`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
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
