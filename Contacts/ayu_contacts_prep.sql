-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2020 at 04:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayusuf17_prep`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayu_contacts_prep`
--

CREATE TABLE `ayu_contacts_prep` (
  `ayu_CompanyName` varchar(40) NOT NULL,
  `ayu_fname` varchar(40) NOT NULL,
  `ayu_lname` varchar(40) NOT NULL,
  `ayu_email` varchar(40) NOT NULL,
  `ayu_url` varchar(40) NOT NULL,
  `ayu_phone` bigint(40) NOT NULL,
  `ayu_address1` varchar(40) NOT NULL,
  `ayu_address2` varchar(40) NOT NULL,
  `ayu_city` varchar(40) NOT NULL,
  `ayu_province` varchar(40) NOT NULL,
  `ayu_description` varchar(40) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ayu_contacts_prep`
--

INSERT INTO `ayu_contacts_prep` (`ayu_CompanyName`, `ayu_fname`, `ayu_lname`, `ayu_email`, `ayu_url`, `ayu_phone`, `ayu_address1`, `ayu_address2`, `ayu_city`, `ayu_province`, `ayu_description`, `cid`) VALUES
('Labista', 'Alli', 'Yusuf', 'alliwayiyusuf@gmail.com ', 'https://torontocupcake.com/index.html', 8259934155, '11205 96 St', 'Kampala', 'Edmonton', 'ON ', 'Testing', 5),
('Kheeran', 'Pedro ', 'Alvaros', 'kheran678@gmail.com ', 'https://www.canadiaedmonton-companies/', 7802678933, '261  Nisku, Alta', 'Perimeer', 'Saskatoon', 'SK ', ' Provides quality control ', 14),
('canada prime Marketing', 'John ', 'Steinheisen', 'pirme789@gmail.com ', 'https://torontocupcake.com/index.html', 8259934155, '11205 96 St', 'Alberta Avenue', 'Edmonton', 'AB ', 'Offers brand management', 15),
('Ontracks Consulting', 'Lakana', 'Hamilton', 'ontractingtyu@hotmai.com ', 'https://www.healthcare.com/', 7899003211, '675 Edmonton Alt', 'edmon t Alt', 'Edmonton', 'AB ', ' Provides systems-implementation', 16),
(' DevFacto Technologies', 'Jacob', 'Malstrom', 'ohiomaio@jma.com ', 'https://www.denver.vom', 1390084689778, '657 ferrcer 767 St', 'Calman', 'calgaryM12', 'AB ', 'Provides software-consulting services', 17),
('Techni-Craft Equipment Services', 'Christian', 'Kabiaso', 'jagtywas89@yahoo.com ', 'https://www.designs.com', 65667778788, '11205 96 St', 'Ranburg', 'Edmonton', 'AB ', 'Repairs and services equipment ', 18),
(' Weiss-Johnson', 'Dundee', 'Karabo', 'mahooya9@yahoo.com ', 'https://www.designs.com', 65667778788, '577 caplano', 'Ranburg', 'Toromto', 'ON ', 'Packages and sells diverse', 19),
('Sundance Ski & Board Shop', 'Yasri', 'Ramthan', 'kirean@gmail.com ', 'https://www.capita.com', 4447892608643, '123 jasper Avenue', 'Jasper', 'Edmonton', 'NL ', 'Operates a store winter sports', 20),
(' Italian Centre Shop', 'Karijon', 'Dakum ', 'Sabastian2007@kikx.com ', 'https://www.canadiaedmonton-companies', 78675789896756, '76565 leduc County', 'Perimeter', 'Edmonton', 'AB ', ' Imports and retails European foods', 21),
(' MOST Oil', 'Bushir', 'Lengos', 'bushiyani@hot.vom ', 'https://www.oiler.jamsom.com', 5679454628, '2556 67Ave ', 'fosilm Street', 'Regina', 'SK ', ' Manufactures and exports oil ', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayu_contacts_prep`
--
ALTER TABLE `ayu_contacts_prep`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayu_contacts_prep`
--
ALTER TABLE `ayu_contacts_prep`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
