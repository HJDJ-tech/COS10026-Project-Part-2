-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2025 at 02:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `EOInumber` int(11) NOT NULL,
  `JobReferenceNumber` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `StreetAddress` varchar(40) DEFAULT NULL,
  `SuburbTown` varchar(40) DEFAULT NULL,
  `State` varchar(3) DEFAULT NULL,
  `Postcode` varchar(4) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(12) DEFAULT NULL,
  `Availability` varchar(20) DEFAULT NULL,
  `WorkRights` varchar(30) DEFAULT NULL,
  `OtherSkills` text DEFAULT NULL,
  `Status` enum('New','Current','Final') DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eoi`
--

INSERT INTO `eoi` (`EOInumber`, `JobReferenceNumber`, `FirstName`, `LastName`, `Gender`, `DOB`, `StreetAddress`, `SuburbTown`, `State`, `Postcode`, `Email`, `PhoneNumber`, `Availability`, `WorkRights`, `OtherSkills`, `Status`) VALUES
(1, 'DA301', 'Diesel', 'Williams', 'Male', '2025-04-29', 'My street', 'My Suburb', 'VIC', '3142', 'dieselwilliams06@gmail.com', '0436483403', 'Part-time', 'Citizen', 'code. code. code.', 'New'),
(2, 'UX204', 'Misty', 'Larsen', 'Male', '2001-09-08', '1577 Miller Points Apt. 245', 'Rosebery', 'NT', '0832', 'wilcoxbrian@gmail.com', '0468462737', 'Part-time', 'Temporary Visa', 'Python programming', 'New'),
(3, 'CS507', 'Wesley', 'Taylor', 'Female', '1985-02-01', '6851 Pearson Isle', 'Bakewell', 'NT', '0832', 'bryanenglish@gmail.com', '0438737089', 'Casual', 'Temporary Visa', 'Web development', 'New'),
(4, 'CS507', 'Connie', 'Greene', 'Female', '2004-11-11', '447 Leon Port', 'Kingston', 'ACT', '7050', 'alex48@gmail.com', '0437534576', 'Part-time', 'Temporary Visa', 'Data analysis', 'New'),
(5, 'CS507', 'Natasha', 'Lopez', 'Male', '1976-04-22', '80821 Anthony Creek Suite 187', 'Rosebery', 'NT', '0832', 'paulkaiser@gmail.com', '0413067080', 'Casual', 'Citizen', 'Customer service', 'New'),
(6, 'IT102', 'Andrea', 'Durham', 'Female', '1989-11-02', '026 Clark Lock Apt. 403', 'Blackmans Bay', 'TAS', '7052', 'dominiquedavis@gmail.com', '0443756362', 'Part-time', 'Citizen', 'Project management', 'New'),
(7, 'IT102', 'Cindy', 'Johnson', 'Female', '1980-10-10', '7636 Mckenzie Ford', 'Penrith', 'NSW', '2750', 'zhernandez@gmail.com', '0460419858', 'Full-time', 'Permanent Resident', 'Graphic design', 'New'),
(8, 'DA301', 'Stacy', 'Parker', 'Male', '2000-09-01', '87263 Cameron Drive', 'Blackmans Bay', 'TAS', '7052', 'emeza@gmail.com', '0446606801', 'Casual', 'Citizen', 'Database management', 'New'),
(9, 'UX204', 'Joshua', 'Berry', 'Female', '1994-01-01', '93327 Peter Underpass', 'Rosebery', 'NT', '0832', 'austin72@gmail.com', '0426695376', 'Full-time', 'Temporary Visa', 'Technical writing', 'New'),
(10, 'IT102', 'Daniel', 'Larson', 'Female', '1982-05-30', '307 Wiggins Tunnel', 'Joondalup', 'WA', '6027', 'staceywhitehead@gmail.com', '0457609452', 'Part-time', 'Temporary Visa', 'Cybersecurity', 'New'),
(11, 'DA301', 'James', 'Estrada', 'Male', '1967-07-02', '1389 Daniel Well Apt. 370', 'New Norfolk', 'TAS', '7140', 'zprice@gmail.com', '0446896826', 'Part-time', 'Temporary Visa', 'Machine learning', 'New'),
(12, 'SE401', 'Noah', 'Rice', 'Male', '1996-07-31', '60960 Pineda Creek', 'St Kilda', 'VIC', '3182', 'stephanie65@gmail.com', '0489052211', 'Casual', 'Permanent Resident', 'Cloud computing', 'New'),
(13, 'DA301', 'Jerry', 'Sutton', 'Female', '1969-09-01', '3711 Mendoza Viaduct', 'Cannington', 'WA', '6107', 'smiller@gmail.com', '0487387414', 'Full-time', 'Permanent Resident', 'Networking', 'New'),
(14, 'IT102', 'Sheila', 'Gonzalez', 'Male', '2002-03-17', '1843 West Isle Suite 327', 'Glenelg', 'SA', '5045', 'vcombs@gmail.com', '0416042579', 'Full-time', 'Citizen', 'Mobile app development', 'New'),
(15, 'CS507', 'Megan', 'Evans', 'Other', '1988-10-20', '531 John Plain', 'Nightcliff', 'NT', '0810', 'kelly65@gmail.com', '0493211533', 'Full-time', 'Temporary Visa', 'UI/UX design', 'New'),
(16, 'IT102', 'Jeffery', 'Ramsey', 'Male', '1986-10-31', '160 Derek Lane', 'Bakewell', 'NT', '0832', 'barrettsophia@gmail.com', '0414726005', 'Part-time', 'Permanent Resident', 'Agile methodologies', 'New'),
(17, 'IT102', 'Joshua', 'Duran', 'Female', '1990-06-13', '701 Gutierrez Bypass', 'Rockingham', 'WA', '6168', 'latasha92@gmail.com', '0482653523', 'Part-time', 'Citizen', 'Social media marketing', 'New'),
(18, 'SE401', 'Chad', 'Mcgee', 'Female', '1968-06-03', '1990 Williams Green Suite 192', 'Mawson Lakes', 'SA', '5095', 'richarddean@gmail.com', '0428243205', 'Full-time', 'Permanent Resident', 'Digital illustration', 'New'),
(19, 'DA301', 'Nathaniel', 'James', 'Male', '1990-03-17', '1394 Gray Parkways', 'Prospect', 'SA', '5082', 'nicholas79@gmail.com', '0461062792', 'Casual', 'Permanent Resident', 'Business analysis', 'New'),
(20, 'CS507', 'Christy', 'Griffin', 'Male', '1972-08-28', '7463 Smith Station Apt. 377', 'Blackmans Bay', 'TAS', '7052', 'taylormary@gmail.com', '0465190181', 'Part-time', 'Temporary Visa', 'Search engine optimization', 'New'),
(21, 'DA301', 'Gina', 'Santos', 'Male', '1986-06-14', '104 Tracy Extensions', 'Lutana', 'TAS', '7009', 'ccampbell@gmail.com', '0429770723', 'Part-time', 'Temporary Visa', 'Help desk support', 'New'),
(22, 'CS507', 'Emma', 'Williams', 'Male', '1967-03-04', '22449 Michael Ranch Apt. 094', 'New Norfolk', 'TAS', '7140', 'mcleanmary@gmail.com', '0470062663', 'Part-time', 'Temporary Visa', 'Python programming', 'New'),
(23, 'SE401', 'Shawn', 'Simpson', 'Female', '1999-08-04', '3785 Chambers Land Suite 473', 'New Norfolk', 'TAS', '7140', 'jonathanstanley@gmail.com', '0471698904', 'Part-time', 'Citizen', 'Web development', 'New'),
(24, 'UX204', 'Robert', 'Lee', 'Female', '1972-12-08', '0821 Robinson Overpass Suite 822', 'Glenelg', 'SA', '5045', 'reedkara@gmail.com', '0498451126', 'Casual', 'Temporary Visa', 'Data analysis', 'New'),
(25, 'DA301', 'Sarah', 'Cortez', 'Male', '1978-12-24', '97724 Brittney Run Suite 324', 'Hornsby', 'NSW', '2077', 'dproctor@gmail.com', '0410618142', 'Full-time', 'Citizen', 'Customer service', 'New'),
(26, 'CS507', 'Heather', 'Howard', 'Male', '1990-10-03', '89846 Hunter Drives', 'Redcliffe', 'QLD', '4020', 'thomas54@gmail.com', '0446993571', 'Part-time', 'Permanent Resident', 'Project management', 'New'),
(27, 'UX204', 'James', 'Hood', 'Male', '2005-02-02', '736 Charles Square', 'Bakewell', 'NT', '0832', 'amber71@gmail.com', '0429130589', 'Part-time', 'Permanent Resident', 'Graphic design', 'New'),
(28, 'SE401', 'Samantha', 'Short', 'Female', '1975-10-25', '433 Medina Junction', 'Cannington', 'WA', '6107', 'nelsonwesley@gmail.com', '0459085868', 'Part-time', 'Citizen', 'Database management', 'New'),
(29, 'DA301', 'Elizabeth', 'Taylor', 'Female', '1968-02-19', '989 Margaret Prairie', 'Chermside', 'QLD', '4032', 'margaretjefferson@gmail.com', '0492647388', 'Full-time', 'Permanent Resident', 'Technical writing', 'New'),
(30, 'SE401', 'Lawrence', 'Mcdaniel', 'Male', '1968-10-09', '9918 Mary Stream', 'Footscray', 'VIC', '3011', 'hjohnson@gmail.com', '0451864685', 'Casual', 'Citizen', 'Cybersecurity', 'New'),
(31, 'SE401', 'Tina', 'Arnold', 'Male', '1971-01-19', '539 Perez Circles', 'Redcliffe', 'QLD', '4020', 'wesleysmith@gmail.com', '0453995763', 'Part-time', 'Temporary Visa', 'Machine learning', 'New'),
(32, 'CS507', 'Betty', 'Lynch', 'Female', '1990-02-06', '5690 Fowler Island Suite 087', 'Fortitude Valley', 'QLD', '4006', 'qolsen@gmail.com', '0438735140', 'Part-time', 'Citizen', 'Cloud computing', 'New'),
(33, 'CS507', 'Gregory', 'Chen', 'Male', '1966-12-26', '852 Jones Plains Suite 255', 'Blacktown', 'NSW', '2148', 'christopherchang@gmail.com', '0476755718', 'Full-time', 'Temporary Visa', 'Networking', 'New'),
(34, 'IT102', 'Laurie', 'Johnson', 'Female', '2001-10-21', '2508 Samantha Wells', 'Chermside', 'QLD', '4032', 'loganteresa@gmail.com', '0418011583', 'Part-time', 'Permanent Resident', 'Mobile app development', 'New'),
(35, 'IT102', 'Tom', 'Jordan', 'Male', '2007-03-03', '2650 Kathryn Extensions Suite 813', 'Blacktown', 'NSW', '2148', 'kenneth67@gmail.com', '0497109142', 'Casual', 'Permanent Resident', 'UI/UX design', 'New'),
(36, 'DA301', 'Thomas', 'Baldwin', 'Male', '1979-08-27', '013 Jones Wells Suite 258', 'Salisbury', 'SA', '5108', 'youngmartha@gmail.com', '0487774119', 'Casual', 'Temporary Visa', 'Agile methodologies', 'New'),
(37, 'IT102', 'Jeffery', 'Hale', 'Female', '1975-11-14', '9830 Morrow Ferry Apt. 756', 'Baldivis', 'WA', '6171', 'boothmelissa@gmail.com', '0412370888', 'Full-time', 'Permanent Resident', 'Social media marketing', 'New'),
(38, 'IT102', 'April', 'Harmon', 'Female', '1970-04-03', '79011 Brian Roads Suite 101', 'Watson', 'ACT', '2602', 'johnsonharold@gmail.com', '0488491626', 'Full-time', 'Permanent Resident', 'Digital illustration', 'New'),
(39, 'SE401', 'Rachel', 'Williams', 'Male', '1979-12-28', '106 Le Terrace Suite 895', 'Subiaco', 'WA', '6008', 'jimmymooney@gmail.com', '0417353794', 'Casual', 'Temporary Visa', 'Business analysis', 'New'),
(40, 'SE401', 'Eric', 'Day', 'Male', '2005-08-25', '3157 Sydney Fort Apt. 902', 'Kingston', 'TAS', '7050', 'ellisjohn@gmail.com', '0432620483', 'Part-time', 'Temporary Visa', 'Search engine optimization', 'New'),
(41, 'UX204', 'Christy', 'Miller', 'Female', '1980-05-10', '860 Todd Way Suite 103', 'Liverpool', 'NSW', '2170', 'rjones@gmail.com', '0489822232', 'Full-time', 'Citizen', 'Help desk support', 'New'),
(42, 'UX204', 'Kevin', 'Spencer', 'Female', '1997-06-23', '04852 Colleen Road', 'Bakewell', 'NT', '0832', 'zacharyjames@gmail.com', '0483223434', 'Part-time', 'Temporary Visa', 'Python programming', 'New'),
(43, 'CS507', 'Joshua', 'Liu', 'Female', '2001-09-22', '4950 Wade Isle', 'Narrabundah', 'ACT', '2604', 'anthony17@gmail.com', '0459546959', 'Part-time', 'Permanent Resident', 'Web development', 'New'),
(44, 'SE401', 'David', 'Powell', 'Male', '1976-11-30', '184 Erin Mall Apt. 275', 'Fortitude Valley', 'QLD', '4006', 'smithkelly@gmail.com', '0424435800', 'Full-time', 'Permanent Resident', 'Data analysis', 'New'),
(45, 'DA301', 'Cathy', 'Rodriguez', 'Male', '1968-10-20', '39970 Jill Dam Apt. 828', 'Penrith', 'NSW', '2750', 'connerbrandon@gmail.com', '0463429197', 'Full-time', 'Citizen', 'Customer service', 'New'),
(46, 'SE401', 'Ronald', 'Santos', 'Male', '1993-11-18', '9708 Rodriguez Land Suite 736', 'Narrabundah', 'ACT', '2604', 'angelamitchell@gmail.com', '0417097657', 'Casual', 'Citizen', 'Project management', 'New'),
(47, 'DA301', 'James', 'Fuentes', 'Female', '1999-04-09', '460 Shawn Lock', 'Bakewell', 'NT', '0832', 'patrickpruitt@gmail.com', '0451874493', 'Part-time', 'Permanent Resident', 'Graphic design', 'New'),
(48, 'DA301', 'Frank', 'Ramirez', 'Female', '1968-03-29', '864 Allison Unions Apt. 759', 'Norwood', 'SA', '5067', 'urhodes@gmail.com', '0465225756', 'Casual', 'Permanent Resident', 'Database management', 'New'),
(49, 'UX204', 'Matthew', 'Bartlett', 'Female', '2004-08-16', '47303 Hardy Motorway', 'Carlton', 'VIC', '3053', 'esantiago@gmail.com', '0460082528', 'Full-time', 'Citizen', 'Technical writing', 'New'),
(50, 'IT102', 'Melissa', 'Ramirez', 'Male', '1977-07-23', '4919 Makayla Hills', 'Narrabundah', 'ACT', '2604', 'dawn21@gmail.com', '0459263154', 'Casual', 'Temporary Visa', 'Cybersecurity', 'New'),
(51, 'IT102', 'Thomas', 'Ward', 'Male', '2006-06-23', '244 Taylor Well', 'Sunnybank', 'QLD', '4109', 'beltranchelsea@gmail.com', '0483957834', 'Full-time', 'Permanent Resident', 'Machine learning', 'New'),
(52, 'UX204', 'Michael', 'Roberts', 'Male', '1978-12-05', '4760 Allen Rue Suite 622', 'Rosebery', 'NT', '0832', 'carlosjuarez@gmail.com', '0456474739', 'Full-time', 'Permanent Resident', 'Cloud computing', 'New'),
(53, 'IT102', 'Michael', 'Scott', 'Female', '1980-06-28', '465 Heather Springs Apt. 229', 'Glenelg', 'SA', '5045', 'robertwilliams@gmail.com', '0493840662', 'Casual', 'Citizen', 'Networking', 'New'),
(54, 'CS507', 'Ronald', 'Phillips', 'Female', '1993-05-12', '917 Andrew Meadow', 'Bakewell', 'NT', '0832', 'rwalker@gmail.com', '0446576614', 'Casual', 'Temporary Visa', 'Mobile app development', 'New'),
(55, 'IT102', 'Courtney', 'Mcdowell', 'Female', '1983-10-06', '014 Smith Springs', 'Carlton', 'VIC', '3053', 'andrewjones@gmail.com', '0430585716', 'Part-time', 'Citizen', 'UI/UX design', 'New'),
(56, 'CS507', 'Emily', 'Russell', 'Other', '2001-05-31', '0297 Murphy Lodge', 'Toowong', 'QLD', '4066', 'andersoncrystal@gmail.com', '0479061807', 'Part-time', 'Temporary Visa', 'Agile methodologies', 'New'),
(57, 'SE401', 'Rodney', 'Wong', 'Male', '1966-12-05', '044 Alexander Brook', 'Rosebery', 'NT', '0832', 'matthew51@gmail.com', '0430833649', 'Full-time', 'Temporary Visa', 'Social media marketing', 'New'),
(58, 'DA301', 'David', 'Bruce', 'Male', '1967-01-24', '621 Castro Isle Apt. 307', 'Kingston', 'ACT', '7050', 'roy53@gmail.com', '0484243317', 'Full-time', 'Permanent Resident', 'Digital illustration', 'New'),
(59, 'IT102', 'Robyn', 'Henderson', 'Other', '1997-02-22', '683 Mark Cape Apt. 136', 'Hornsby', 'NSW', '2077', 'agarcia@gmail.com', '0421158449', 'Casual', 'Permanent Resident', 'Business analysis', 'New'),
(60, 'UX204', 'Tracy', 'Pittman', 'Male', '1995-06-17', '026 Alvarado Springs Suite 712', 'Chermside', 'QLD', '4032', 'joseph90@gmail.com', '0491484355', 'Full-time', 'Permanent Resident', 'Search engine optimization', 'New'),
(61, 'UX204', 'Jacqueline', 'Cook', 'Male', '1968-06-14', '10710 Collier Pass Suite 072', 'Coconut Grove', 'NT', '0810', 'emmamiller@gmail.com', '0432665211', 'Full-time', 'Permanent Resident', 'Help desk support', 'New'),
(62, 'DA301', 'David', 'Eaton', 'Male', '1994-10-31', '931 Murray Spurs', 'Dandenong', 'VIC', '3175', 'karen26@gmail.com', '0486037250', 'Full-time', 'Citizen', 'Python programming', 'New'),
(63, 'CS507', 'Louis', 'Chandler', 'Male', '1972-06-12', '6313 Vaughn Fort Suite 310', 'Liverpool', 'NSW', '2170', 'heatherdeleon@gmail.com', '0430801989', 'Full-time', 'Temporary Visa', 'Web development', 'New'),
(64, 'DA301', 'Michael', 'Roman', 'Male', '1990-02-09', '07171 Kevin Crossing', 'Joondalup', 'WA', '6027', 'kevin83@gmail.com', '0459068289', 'Casual', 'Permanent Resident', 'Data analysis', 'New'),
(65, 'CS507', 'Timothy', 'Williams', 'Female', '2003-03-20', '856 Amber Mills', 'Footscray', 'VIC', '3011', 'michaellee@gmail.com', '0458909202', 'Full-time', 'Temporary Visa', 'Customer service', 'New'),
(66, 'CS507', 'Susan', 'White', 'Male', '2003-05-04', '30101 Daniel Heights Suite 491', 'Prospect', 'SA', '5082', 'cvaldez@gmail.com', '0429825423', 'Casual', 'Temporary Visa', 'Project management', 'New'),
(67, 'UX204', 'Joshua', 'Thomas', 'Female', '1967-01-03', '499 Brown Ville Suite 062', 'Lutana', 'TAS', '7009', 'jason37@gmail.com', '0439611495', 'Casual', 'Permanent Resident', 'Graphic design', 'New'),
(68, 'SE401', 'Dustin', 'Thompson', 'Female', '1990-12-03', '70320 Santos Plains Apt. 104', 'Prospect', 'SA', '5082', 'trevinocynthia@gmail.com', '0472962969', 'Part-time', 'Temporary Visa', 'Database management', 'New'),
(69, 'UX204', 'Jason', 'Pineda', 'Male', '1996-03-31', '642 Raymond Extensions Apt. 638', 'Cannington', 'WA', '6107', 'davisjody@gmail.com', '0431627042', 'Full-time', 'Permanent Resident', 'Technical writing', 'New'),
(70, 'CS507', 'Brandon', 'Miller', 'Female', '1984-05-21', '313 Michael Lake Apt. 640', 'Moonah', 'TAS', '7009', 'ryanbishop@gmail.com', '0435605659', 'Part-time', 'Citizen', 'Cybersecurity', 'New'),
(71, 'SE401', 'Darrell', 'King', 'Male', '1987-05-03', '1561 Rush Hollow Suite 782', 'Nightcliff', 'NT', '0810', 'justinwhite@gmail.com', '0410493935', 'Casual', 'Temporary Visa', 'Machine learning', 'New'),
(72, 'IT102', 'Jennifer', 'Gay', 'Male', '1996-02-23', '8162 Harmon Road Suite 951', 'Lyneham', 'ACT', '2602', 'smiller@gmail.com', '0493746418', 'Casual', 'Citizen', 'Cloud computing', 'New'),
(73, 'SE401', 'Kenneth', 'Zuniga', 'Male', '1964-07-21', '33229 Sarah Landing', 'Hornsby', 'NSW', '2077', 'robert55@gmail.com', '0430172140', 'Full-time', 'Temporary Visa', 'Networking', 'New'),
(74, 'DA301', 'Kurt', 'Cobb', 'Male', '2005-05-21', '1190 Murphy Plains', 'Baldivis', 'WA', '6171', 'bentonshaun@gmail.com', '0443059107', 'Full-time', 'Temporary Visa', 'Mobile app development', 'New'),
(75, 'SE401', 'Caroline', 'Sanders', 'Female', '1989-05-07', '8316 Katherine Via', 'St Kilda', 'VIC', '3182', 'mitchellbrown@gmail.com', '0474826341', 'Full-time', 'Citizen', 'UI/UX design', 'New'),
(76, 'IT102', 'Nancy', 'Adams', 'Male', '1997-09-26', '27145 Jackson Run', 'Norwood', 'SA', '5067', 'michaelturner@gmail.com', '0471772544', 'Part-time', 'Citizen', 'Agile methodologies', 'New'),
(77, 'CS507', 'James', 'Rodriguez', 'Other', '1968-11-13', '4534 Angelica Views', 'Bakewell', 'NT', '0832', 'harry84@gmail.com', '0448285814', 'Casual', 'Citizen', 'Social media marketing', 'New'),
(78, 'UX204', 'Alexis', 'Silva', 'Male', '1972-01-27', '1368 Kristen Rapids', 'Norwood', 'SA', '5067', 'hjoseph@gmail.com', '0452243365', 'Part-time', 'Temporary Visa', 'Digital illustration', 'New'),
(79, 'SE401', 'Katie', 'Bates', 'Male', '1998-09-08', '797 Diana Station', 'Carlton', 'VIC', '3053', 'weaverkelly@gmail.com', '0499286688', 'Casual', 'Citizen', 'Business analysis', 'New'),
(80, 'DA301', 'Jennifer', 'Gallagher', 'Male', '1985-07-30', '689 Brad Coves', 'Moonah', 'TAS', '7009', 'cynthiapeterson@gmail.com', '0421995064', 'Full-time', 'Citizen', 'Search engine optimization', 'New'),
(81, 'DA301', 'Michelle', 'Nelson', 'Female', '1983-10-08', '9365 Ali Branch Apt. 468', 'Salisbury', 'SA', '5108', 'winterswilliam@gmail.com', '0411898397', 'Full-time', 'Citizen', 'Help desk support', 'New'),
(82, 'IT102', 'Monica', 'Maddox', 'Male', '1968-09-28', '7017 Kimberly Pine', 'St Kilda', 'VIC', '3182', 'susanmartinez@gmail.com', '0490119560', 'Full-time', 'Permanent Resident', 'Python programming', 'New'),
(83, 'DA301', 'Chelsea', 'Frank', 'Female', '1974-09-17', '8318 Odonnell Tunnel', 'Nightcliff', 'NT', '0810', 'bridgesjacqueline@gmail.com', '0421652427', 'Part-time', 'Citizen', 'Web development', 'New'),
(84, 'IT102', 'Francis', 'Taylor', 'Male', '1976-05-09', '1892 Jacqueline Neck Apt. 664', 'Mawson Lakes', 'SA', '5095', 'leah09@gmail.com', '0493492002', 'Casual', 'Temporary Visa', 'Data analysis', 'New'),
(85, 'CS507', 'Jessica', 'Johnson', 'Male', '1967-10-28', '7718 Martinez Curve Suite 517', 'Kingston', 'TAS', '7050', 'coreyfletcher@gmail.com', '0422409760', 'Part-time', 'Citizen', 'Customer service', 'New'),
(86, 'DA301', 'Gloria', 'Gonzalez', 'Female', '1998-12-25', '065 Ortiz Forest', 'Chermside', 'QLD', '4032', 'matthewirwin@gmail.com', '0470415236', 'Full-time', 'Temporary Visa', 'Project management', 'New'),
(87, 'DA301', 'Donald', 'Baker', 'Male', '1986-03-04', '5404 David Point Suite 563', 'Prospect', 'SA', '5082', 'nancyparker@gmail.com', '0443620633', 'Part-time', 'Permanent Resident', 'Graphic design', 'New'),
(88, 'IT102', 'Colin', 'Williams', 'Male', '1970-04-23', '5876 Jensen Springs Suite 609', 'Fortitude Valley', 'QLD', '4006', 'frobinson@gmail.com', '0432850914', 'Part-time', 'Temporary Visa', 'Database management', 'New'),
(89, 'DA301', 'Stephanie', 'Salazar', 'Female', '1983-03-10', '4344 Austin Springs', 'Glenelg', 'SA', '5045', 'ybryant@gmail.com', '0499068563', 'Casual', 'Citizen', 'Technical writing', 'New'),
(90, 'DA301', 'Nancy', 'Johnson', 'Male', '1973-11-10', '3965 Clark Views', 'Nightcliff', 'NT', '0810', 'griffinamanda@gmail.com', '0461734613', 'Full-time', 'Permanent Resident', 'Cybersecurity', 'New'),
(91, 'IT102', 'Donna', 'Perkins', 'Male', '1979-03-16', '39197 Wilson Forks Suite 993', 'Joondalup', 'WA', '6027', 'allisonbennett@gmail.com', '0419190445', 'Part-time', 'Citizen', 'Machine learning', 'New'),
(92, 'UX204', 'Melanie', 'Gomez', 'Female', '1983-01-22', '2973 Snow Ways Apt. 622', 'Footscray', 'VIC', '3011', 'carla80@gmail.com', '0464736457', 'Part-time', 'Citizen', 'Cloud computing', 'New'),
(93, 'IT102', 'Sandra', 'Sanchez', 'Female', '1983-01-06', '35313 Gordon Shoals Apt. 496', 'Moonah', 'TAS', '7009', 'jonesshannon@gmail.com', '0479741860', 'Casual', 'Citizen', 'Networking', 'New'),
(94, 'IT102', 'Peter', 'Thompson', 'Male', '1983-06-14', '6396 Ashley Ramp Suite 854', 'Preston', 'VIC', '3072', 'kathryn06@gmail.com', '0431020856', 'Full-time', 'Citizen', 'Mobile app development', 'New'),
(95, 'IT102', 'Tyler', 'Martin', 'Other', '1984-08-10', '217 Maynard Rest Apt. 063', 'Chatswood', 'NSW', '2067', 'mercersamantha@gmail.com', '0435571307', 'Part-time', 'Permanent Resident', 'UI/UX design', 'New'),
(96, 'SE401', 'John', 'Powers', 'Male', '1999-04-22', '79295 Christopher Meadow', 'Toowong', 'QLD', '4066', 'milesjudy@gmail.com', '0416302758', 'Part-time', 'Temporary Visa', 'Agile methodologies', 'New'),
(97, 'SE401', 'Kristin', 'Weaver', 'Female', '1995-07-09', '9670 Macdonald Spurs', 'Joondalup', 'WA', '6027', 'johnjones@gmail.com', '0451206836', 'Casual', 'Temporary Visa', 'Social media marketing', 'New'),
(98, 'CS507', 'Mark', 'Bailey', 'Male', '1970-06-03', '95813 Mann Mountains', 'Penrith', 'NSW', '2750', 'ian43@gmail.com', '0463413715', 'Part-time', 'Temporary Visa', 'Digital illustration', 'New'),
(99, 'UX204', 'David', 'Baker', 'Male', '1974-08-12', '4186 Hill Mission Apt. 805', 'Joondalup', 'WA', '6027', 'danrodriguez@gmail.com', '0420766657', 'Part-time', 'Citizen', 'Business analysis', 'New'),
(100, 'DA301', 'Ruth', 'Jackson', 'Male', '1998-05-17', '133 Boyd Isle Suite 676', 'Blacktown', 'NSW', '2148', 'michaelagaines@gmail.com', '0434906049', 'Part-time', 'Citizen', 'Search engine optimization', 'New'),
(101, 'SE401', 'Kathryn', 'Williams', 'Female', '1995-10-23', '299 Fernandez Unions', 'Carlton', 'VIC', '3053', 'anthonystevens@gmail.com', '0479825245', 'Full-time', 'Citizen', 'Help desk support', 'New'),
(102, 'IT102', 'Cuong', 'Nguyen', 'Male', '2003-01-22', 'My Street', 'Elwood', 'VIC', '3184', 'jerrynguyenau@gmail.com', '0436483403', 'Full-time', 'Temporary Visa', 'C++', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` varchar(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `reports_to` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `title`, `description`, `reports_to`) VALUES
('CS507', 'Cybersecurity Analyst\r\n', 'We are seeking a vigilant and detail-oriented Cybersecurity Analyst to join our tech company. In this role, you will monitor and protect the organisation’s digital assets, identify vulnerabilities, and respond to security incidents. The ideal candidate will have a strong technical foundation, a passion for cybersecurity, and a proactive approach to safeguarding systems and data.\r\n\r\n', 'Cybersecurity Manager'),
('DA301', 'Data Analyst', 'We are looking for a skilled Data Analyst to join our tech company. The role involves analyzing large datasets, providing insights, and supporting cross-functional teams with data-driven recommendations. The ideal candidate will have strong data analysis skills and the ability to communicate findings clearly.\r\n\r\n\r\n\r\n', 'Director of Technology'),
('IT102', 'IT Support Specialist\r\n', 'We are looking for a reliable and proactive IT Support Specialist to join our tech company. This role involves providing technical assistance, troubleshooting hardware and software issues, and supporting internal teams with IT-related needs. The ideal candidate will have strong problem-solving skills, technical knowledge, and a commitment to excellent customer service.\r\n\r\n', 'IT Operations Manager\r\n'),
('SE401', 'Software Engineer', 'We are seeking a talented and motivated Software Engineer to join our growing tech team. The ideal candidate will design, develop, and maintain high-quality software applications. You will collaborate with cross-functional teams to deliver innovative and scalable solutions. This is an excellent opportunity for someone passionate about coding and looking to make an impact in a dynamic tech environment.\r\n\r\n', 'Director of Technology\r\n'),
('UX204', 'UX Designer\r\n', 'We are seeking a creative and user-focused UX Designer to join our tech company. This role involves designing seamless user experiences, conducting user research, and collaborating with cross-functional teams to create intuitive digital interfaces. The ideal candidate will have a passion for design thinking, empathy for users, and a strong portfolio of UX design work.\r\n\r\n', 'Director of Product Design\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `preferred_skills`
--

CREATE TABLE `preferred_skills` (
  `job_id` varchar(5) NOT NULL,
  `bp1` text NOT NULL,
  `bp2` text DEFAULT NULL,
  `bp3` text DEFAULT NULL,
  `bp4` text DEFAULT NULL,
  `bp5` text DEFAULT NULL,
  `bp6` text DEFAULT NULL,
  `bp7` text DEFAULT NULL,
  `bp8` text DEFAULT NULL,
  `bp9` text DEFAULT NULL,
  `bp10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preferred_skills`
--

INSERT INTO `preferred_skills` (`job_id`, `bp1`, `bp2`, `bp3`, `bp4`, `bp5`, `bp6`, `bp7`, `bp8`, `bp9`, `bp10`) VALUES
('CS507', 'Experience with tools like Splunk, Wireshark, or Nessus.\r\n', 'Familiarity with cloud security (AWS, Azure, or Google Cloud).\r\n', 'Knowledge of scripting languages (Python, Bash, or PowerShell).\r\n', 'Understanding of data privacy regulations (e.g., GDPR, ISO 27001).\r\n', 'Cybersecurity certifications (e.g., CompTIA Security+, CEH, CISSP).\r\n', 'Interest in threat intelligence and staying current with emerging threats.\r\n', NULL, NULL, NULL, NULL),
('DA301', 'Experience with Tableau or Power BI.\r\n', 'Basic knowledge of Python or R.\r\n', 'Familiarity with cloud data tools.\r\n', 'Understanding of data privacy rules.\r\n', 'Experience working in teams.\r\n', 'Interest in learning new tools.\r\n', NULL, NULL, NULL, NULL),
('IT102', 'Experience with ticketing systems like Jira, Zendesk, or Freshservice.\r\n', 'Familiarity with Active Directory and Microsoft 365 administration.\r\n', 'Basic scripting knowledge (e.g., PowerShell, Bash).\r\n', 'Knowledge of cybersecurity best practices.\r\n', 'Experience supporting remote teams and cloud-based systems.\r\n', 'Certifications such as CompTIA A+, ITIL, or Microsoft Fundamentals.\r\n', NULL, NULL, NULL, NULL),
('SE401', 'Experience with cloud services like AWS or Google Cloud.\r\n', 'Used tools like Docker or Kubernetes before.\r\n', 'Familiar with setting up automated testing or deployment.\r\n', 'Worked in an Agile team.\r\n', 'Basic knowledge of databases (SQL or NoSQL).\r\n', NULL, NULL, NULL, NULL, NULL),
('UX204', 'Basic knowledge of HTML, CSS, and responsive design principles.\r\n', 'Experience with design systems and accessibility standards.\r\n', 'Familiarity with agile or lean UX processes.\r\n', 'Understanding of data-driven design.\r\n', 'Ability to present and explain design ideas to various stakeholders.\r\n', 'Willingness to learn and adapt to new tools and trends.\r\n', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `required_skills`
--

CREATE TABLE `required_skills` (
  `job_id` varchar(5) NOT NULL,
  `bp1` text NOT NULL,
  `bp2` text DEFAULT NULL,
  `bp3` text DEFAULT NULL,
  `bp4` text DEFAULT NULL,
  `bp5` text DEFAULT NULL,
  `bp6` text DEFAULT NULL,
  `bp7` text DEFAULT NULL,
  `bp8` text DEFAULT NULL,
  `bp9` text DEFAULT NULL,
  `bp10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `required_skills`
--

INSERT INTO `required_skills` (`job_id`, `bp1`, `bp2`, `bp3`, `bp4`, `bp5`, `bp6`, `bp7`, `bp8`, `bp9`, `bp10`) VALUES
('CS507', 'Bachelor’s degree in Cybersecurity, Information Technology, or a related field.\r\n', '2+ years of experience in a cybersecurity or related IT role.\r\n', 'Understanding of firewalls, antivirus, SIEM tools, and network security protocols.\r\n', 'Strong analytical and problem-solving skills.\r\n', 'Knowledge of cybersecurity frameworks and best practices.\r\n', 'Clear communication skills and ability to document findings.\r\n', 'Ability to work under pressure in incident response situations.\r\n', NULL, NULL, NULL),
('DA301', 'Bachelor’s degree in a related field.\r\n', '2+ years of data analysis experience.\r\n', 'Strong skills in SQL.\r\n', 'Experience with Excel and spreadsheets.\r\n', 'Good problem-solving skills.\r\n', 'Clear communication skills.\r\n', 'Ability to work with large datasets.\r\n', NULL, NULL, NULL),
('IT102', 'Diploma or Bachelor’s degree in IT, Computer Science, or a related field.\r\n', '2+ years of experience in a technical support role.\r\n', 'Strong troubleshooting skills across Windows and macOS environments.\r\n', 'Basic understanding of networking concepts and tools.\r\n', 'Clear verbal and written communication skills.\r\n', 'Excellent customer service and time management abilities.\r\n', 'Ability to work independently and prioritise tasks.\r\n', NULL, NULL, NULL),
('SE401', 'Bachelor’s degree in Computer Science, Engineering, or a related field.\r\n', '2+ years of professional software development experience.\r\n', 'Proficiency in one or more programming languages (e.g., Java, Python, C#, JavaScript).\r\n', 'Experience with version control tools, mainly Git.\r\n', 'Excellent communication skills and ability to collaborate with team members.\r\n', NULL, NULL, NULL, NULL, NULL),
('UX204', 'Bachelor’s degree in Design, HCI, or a related field.\r\n', '2+ years of experience in UX or product design.\r\n', 'Proficiency in Figma, Adobe XD, or similar tools.\r\n', 'Strong portfolio showcasing UX design projects.\r\n', 'Understanding of user research methods.\r\n', 'Excellent problem-solving and communication skills.\r\n', 'Ability to work collaboratively in a fast-paced environment.\r\n', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `responsibilities`
--

CREATE TABLE `responsibilities` (
  `job_id` varchar(5) NOT NULL,
  `bp1` text NOT NULL,
  `bp2` text DEFAULT NULL,
  `bp3` text DEFAULT NULL,
  `bp4` text DEFAULT NULL,
  `bp5` text DEFAULT NULL,
  `bp6` text DEFAULT NULL,
  `bp7` text DEFAULT NULL,
  `bp8` text DEFAULT NULL,
  `bp9` text DEFAULT NULL,
  `bp10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `responsibilities`
--

INSERT INTO `responsibilities` (`job_id`, `bp1`, `bp2`, `bp3`, `bp4`, `bp5`, `bp6`, `bp7`, `bp8`, `bp9`, `bp10`) VALUES
('', 'Manage network-related projects, including design, planning, execution, and handover to Operations.', 'Manage project timelines, identify and resolve issues while ensuring minimal impact on BAU operations.', 'Adhere to network policies, procedures, and security best practices during project deployments.', 'Collaborate with stakeholders to analyse customer needs and translate them into effective network solutions.', '', '', '', '', '', ''),
('CS507', 'Monitor networks and systems for security breaches and suspicious activity.\r\n', 'Investigate and respond to security alerts and incidents in a timely manner.\r\n', 'Conduct vulnerability assessments and risk analysis.\r\n', 'Assist with the implementation of security measures and controls.\r\n', 'Maintain and update security tools, firewalls, and intrusion detection systems.\r\n', 'Collaborate with IT and development teams to ensure secure practices.\r\n', NULL, NULL, NULL, NULL),
('IT102', 'Respond to technical support requests via email, phone, and ticketing systems.\r\n', 'Diagnose and resolve hardware, software, and network issues for staff.\r\n', 'Install, configure, and maintain desktops, laptops, printers, and other peripherals.\r\n', 'Provide onboarding IT setup and offboarding procedures for staff members.\r\n', 'Maintain inventory of IT assets and ensure regular updates of systems.\r\n', 'Escalate unresolved issues to senior IT staff or vendors when necessary.\r\n', NULL, NULL, NULL, NULL),
('SE401', 'Design, develop, and test software solutions across various platforms.\r\n', 'Collaborate with cross-functional teams to gather requirements and deliver high-quality software solutions.\r\n', 'Troubleshoot and debug software issues, providing timely fixes and enhancements.\r\n', 'Continuously improve and optimize application performance.\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
('UX204', 'Conduct user research and usability testing to inform design decisions.\r\n', 'Create wireframes, prototypes, and user flows for digital products.\r\n', 'Collaborate with developers, product managers, and stakeholders to ensure user-centred design solutions.\r\n', 'Iterate on designs based on feedback and usability insights.\r\n', 'Maintain consistency in design systems and interface elements.\r\n', 'Ensure accessibility and responsive design standards are met.\r\n', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salary_and_benefits`
--

CREATE TABLE `salary_and_benefits` (
  `job_id` varchar(5) NOT NULL,
  `bp1` text NOT NULL,
  `bp2` text DEFAULT NULL,
  `bp3` text DEFAULT NULL,
  `bp4` text DEFAULT NULL,
  `bp5` text DEFAULT NULL,
  `bp6` text DEFAULT NULL,
  `bp7` text DEFAULT NULL,
  `bp8` text DEFAULT NULL,
  `bp9` text DEFAULT NULL,
  `bp10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary_and_benefits`
--

INSERT INTO `salary_and_benefits` (`job_id`, `bp1`, `bp2`, `bp3`, `bp4`, `bp5`, `bp6`, `bp7`, `bp8`, `bp9`, `bp10`) VALUES
('CS507', 'Salary Range: $95,000 - $115,000.\r\n', '6 weeks of paid time off.\r\n', 'Super: 13.75%.\r\n', 'Flexible work arrangements.\r\n', 'Remote work options.\r\n', 'Comprehensive health cover.\r\n', 'Paid training, certifications, and upskilling opportunities.\r\n', 'Wellness and fitness programs.\r\n', 'Modern security tools and software provided.\r\n', NULL),
('DA301', 'Salary Range: $90,000 - $105,000.\r\n', '6 weeks of paid time off.\r\n', 'Super: 13.75%.\r\n', 'Flexible work arrangements.\r\n', 'Remote work options.\r\n', 'Comprehensive health cover.\r\n', 'Paid training and upskilling.\r\n', 'Wellness and fitness programs.\r\n', 'Modern tools and software.\r\n', NULL),
('IT102', 'Salary Range: $80,000 - $95,000.\r\n', '6 weeks of paid time off.\r\n', 'Super: 13.75%.\r\n', 'Flexible work arrangements.\r\n', 'Remote support options available.\r\n', 'Comprehensive health cover.\r\n', 'Paid certifications and training programs.\r\n', 'Wellness and fitness programs.\r\n', 'Modern tools and IT equipment provided.\r\n', NULL),
('SE401', 'Salary Range: $100,000 - $125,000.\r\n', '6 weeks of paid time off.\r\n', 'Super: 11.5%.\r\n', 'Flexible work hours.\r\n', 'Remote and hybrid options.\r\n', 'Paid training and courses.\r\n', 'Health and wellness programs.\r\n', 'Employee support programs.\r\n', NULL, NULL),
('UX204', 'Salary Range: $90,000 - $105,000.\r\n', '6 weeks of paid time off.\r\n', 'Super: 13.75%.\r\n', 'Flexible work arrangements.\r\n', 'Remote work options.\r\n', 'Comprehensive health cover.\r\n', 'Paid training and upskilling.\r\n', 'Wellness and fitness programs.\r\n', 'Modern tools and software.\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'manager@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`EOInumber`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `preferred_skills`
--
ALTER TABLE `preferred_skills`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `required_skills`
--
ALTER TABLE `required_skills`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `responsibilities`
--
ALTER TABLE `responsibilities`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `salary_and_benefits`
--
ALTER TABLE `salary_and_benefits`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
  MODIFY `EOInumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
