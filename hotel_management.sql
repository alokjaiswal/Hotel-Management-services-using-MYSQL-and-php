-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 03:42 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookid` int(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `bookstatus` tinyint(1) NOT NULL DEFAULT '0',
  `custid` int(10) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `roomid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookid`, `checkin`, `checkout`, `bookstatus`, `custid`, `roomtype`, `roomid`) VALUES
(3, '2018-10-03', '2018-10-04', 1, 20, 'Discounted', NULL),
(5, '2018-10-11', '2018-10-10', 0, 22, 'Discounted', NULL),
(6, '2018-10-05', '2018-10-06', 0, 23, 'Discounted', NULL),
(7, '2018-10-23', '2018-10-24', 1, 24, 'Premium', NULL),
(8, '2018-10-23', '2018-10-25', 1, 25, 'Premium', NULL),
(9, '2018-10-23', '2018-10-24', 1, 26, 'Discounted', NULL),
(10, '2018-10-25', '2018-10-27', 1, 28, 'Discounted', NULL),
(11, '2018-10-24', '2018-10-27', 1, 29, 'Premium', NULL),
(15, '2018-10-25', '2018-10-26', 0, 34, 'Discounted', NULL),
(16, '2018-10-27', '2018-10-31', 1, 34, 'Discounted', NULL),
(17, '2018-10-25', '2018-10-26', 1, 44, 'Discounted', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Custadd` varchar(50) NOT NULL,
  `custemail` varchar(30) NOT NULL,
  `cusid` int(10) NOT NULL,
  `cusname` varchar(30) NOT NULL,
  `cusmobile` int(10) NOT NULL,
  `noofguest` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Custadd`, `custemail`, `cusid`, `cusname`, `cusmobile`, `noofguest`) VALUES
('dfghjm', 'fghj@rty', 20, 'dfghjm', 4567, 1),
('dfghj', '987@df', 22, 'kjh', 4567, 1),
('lkjhc', '987@dfxd', 23, 'kjhlkjhgf', 876, 1),
('ghngfd', 'abcd@gmail.com', 24, 'Rahul', 6613212, 2),
('dasffgchv', 'pdf@gdf.com', 25, 'Penjo', 45678, 2),
('efghjkl', 'abcd@efg', 26, 'Alok', 6613212, 2),
('ponda', 'maheshchowdary.k.cse@gmail.com', 27, 'mahesh', 2147483647, 1),
('asdfgyhuio', 'rgd@gmail.com', 28, 'Rahul Desai', 1234567890, 1),
('asdfyuikol', 'arv@arv.com', 29, 'Arvind', 1234567890, 1),
('Ponda', 'raheel@gmail.com', 30, 'Raheel', 2147483647, 1),
('xcvbn', 'xcv@sdf', 32, 'c', 0, 1),
('dfgh', 'df@dfg', 33, 'xcvbnxfgh', 34567, 1),
('sd', 'a@a', 34, 'Mohit', 3242342, 1),
('GEC Campus, farmagudi', 'jaiswal37119@gmail.com', 35, 'mahesh', 2147483647, 5),
('sdfsdf', 'madhav@gmail.com', 44, 'Madhav', 234234, 2);

-- --------------------------------------------------------

--
-- Table structure for table `foodorders`
--

CREATE TABLE `foodorders` (
  `Orderid` int(10) NOT NULL,
  `Itemid` int(10) NOT NULL,
  `ordcustid` int(10) NOT NULL,
  `Orderdate` date NOT NULL,
  `amount` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodorders`
--

INSERT INTO `foodorders` (`Orderid`, `Itemid`, `ordcustid`, `Orderdate`, `amount`) VALUES
(5, 2, 20, '2018-10-21', 50),
(6, 4, 20, '2018-10-21', 100),
(7, 2, 20, '2018-10-21', 50),
(8, 1, 20, '2018-10-21', 10),
(9, 16, 24, '2018-10-22', 200),
(12, 16, 25, '2018-10-22', 200),
(13, 16, 26, '2018-10-22', 200),
(14, 6, 29, '2018-10-23', 200),
(15, 10, 34, '2018-10-24', 140),
(16, 15, 34, '2018-10-24', 150),
(17, 10, 44, '2018-10-24', 140);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int(10) NOT NULL,
  `itemname` varchar(30) NOT NULL,
  `itemprice` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `itemname`, `itemprice`) VALUES
(1, 'roti', 10),
(2, 'rice', 50),
(3, 'paneer tikka', 140),
(4, 'Malai Kofta', 100),
(5, 'Paneer Biryani', 150),
(6, 'Chicken Biryani', 200),
(7, 'Tandoori Toti', 30),
(8, 'Chicken Tikka', 210),
(9, 'Paneer Masala', 150),
(10, 'Dum Aloo', 140),
(11, 'Masala Tea', 30),
(12, 'Nescafe', 30),
(13, 'Green Tea', 30),
(14, 'Jeera Rice', 120),
(15, 'Veg Thali', 150),
(16, 'Fish Thali', 200),
(17, 'Chicken Thali', 210),
(18, 'Dum Biryani', 250),
(19, 'Rumali Roti', 30);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `Rentamt` int(10) NOT NULL,
  `payid` int(10) NOT NULL,
  `Restamt` int(10) NOT NULL,
  `paycustid` int(10) NOT NULL,
  `paystat` varchar(10) NOT NULL DEFAULT 'Not Paid',
  `Total` int(10) NOT NULL,
  `Method` varchar(15) DEFAULT NULL,
  `RecvrId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`Rentamt`, `payid`, `Restamt`, `paycustid`, `paystat`, `Total`, `Method`, `RecvrId`) VALUES
(11999, 6, 200, 25, 'Not Paid', 19358, NULL, 4),
(5000, 7, 200, 26, 'Not Paid', 4160, NULL, 6),
(11999, 8, 200, 29, 'Paid', 25338, 'Other_Ewallets', 4),
(2999, 12, 140, 44, 'Paid', 2197, 'Cash', 8);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `orderid` int(10) NOT NULL,
  `itemid` int(10) NOT NULL,
  `custid` int(10) NOT NULL,
  `price` int(4) NOT NULL DEFAULT '0',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(10) NOT NULL,
  `roomname` varchar(30) NOT NULL,
  `roomtypeid` varchar(30) NOT NULL,
  `roomrent` int(10) NOT NULL,
  `availstatus` tinyint(1) NOT NULL DEFAULT '1',
  `occcustid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `roomname`, `roomtypeid`, `roomrent`, `availstatus`, `occcustid`) VALUES
(4, 'A101', 'Premium', 11999, 0, 25),
(6, 'A102', 'Premium', 11999, 0, 29),
(7, 'A105', 'Premium', 11999, 1, NULL),
(9, 'A103', 'Premium', 11999, 1, NULL),
(10, 'A104', 'Premium', 11999, 1, NULL),
(11, 'B101', 'Business', 5999, 1, NULL),
(12, 'B102', 'Business', 5999, 1, NULL),
(13, 'B103', 'Business', 5999, 1, NULL),
(14, 'B104', 'Business', 5999, 1, NULL),
(15, 'B105', 'Business', 5999, 1, NULL),
(16, 'C101', 'Discounted', 2999, 0, 34),
(17, 'C102', 'Discounted', 2999, 1, NULL),
(18, 'C103', 'Discounted', 2999, 0, 34),
(19, 'C104', 'Discounted', 2999, 0, 44),
(20, 'C105', 'Discounted', 2999, 0, 28);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `sesid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `intime` time NOT NULL,
  `userid` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`sesid`, `username`, `intime`, `userid`, `date`) VALUES
(1, 'mtg', '00:00:12', 4, '2018-10-23'),
(2, 'mtg', '00:00:12', 4, '2018-10-23'),
(3, 'mtg', '00:00:12', 4, '2018-10-23'),
(4, 'mtg', '00:00:12', 4, '2018-10-23'),
(5, 'penjo', '00:00:12', 6, '2018-10-23'),
(6, 'mtg', '00:00:01', 4, '2018-10-23'),
(7, 'mtg', '00:00:02', 4, '2018-10-23'),
(8, 'mtg', '00:00:02', 4, '2018-10-23'),
(9, 'mtg', '00:00:02', 4, '2018-10-24'),
(10, 'penjo', '00:00:02', 6, '2018-10-24'),
(11, 'mtg', '00:00:03', 4, '2018-10-24'),
(12, 'mtg', '00:00:01', 4, '2018-10-24'),
(13, 'Alok', '00:00:01', 8, '0000-00-00'),
(14, 'Alok', '00:00:01', 8, '0000-00-00'),
(15, 'Alok', '00:00:00', 8, '2018-10-24'),
(16, 'Alok', '00:00:00', 8, '2018-10-24'),
(17, 'Alok', '00:00:00', 8, '2018-10-24'),
(18, 'Alok', '00:00:00', 8, '2018-10-24'),
(19, 'Alok', '00:00:00', 8, '2018-10-24'),
(20, 'Alok', '00:00:00', 8, '2018-10-24'),
(21, 'Alok', '00:00:00', 8, '2018-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(10) NOT NULL,
  `Role` varchar(15) NOT NULL,
  `UserAddress` varchar(50) NOT NULL,
  `UserMobile` int(10) NOT NULL,
  `UserEmail` varchar(30) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Role`, `UserAddress`, `UserMobile`, `UserEmail`, `Username`, `Password`, `status`) VALUES
(4, 'Manager', 'jkhgfds', 2147483647, 'mtg@gmail.com', 'mtg', 'mtg@123', 1),
(6, 'Admin', 'hgffxdz', 564543, 'ghf@ghf.com', 'penjo', '7890', 1),
(7, 'Chef', 'asdfghjkl', 1234567890, 'asdf@asdf', 'alok', 'alok@123', 1),
(8, 'Admin', 'GEC Campus, farmagudi', 2147483647, 'aloknitg@gmail.com', 'Alok', '1234', 1),
(9, 'Admin', 'GEC Campus, farmagudi', 1232343432, 'sakeel@gmail.com', 'sakeel', '1234', 1),
(10, 'Chef', 'GEC Campus, farmagudi', 2147483647, 'lkjaiswal841@gmail.com', 'Alok', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `custid` (`custid`),
  ADD KEY `roomid` (`roomid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cusid`),
  ADD UNIQUE KEY `custemail` (`custemail`);

--
-- Indexes for table `foodorders`
--
ALTER TABLE `foodorders`
  ADD PRIMARY KEY (`Orderid`),
  ADD KEY `Itemid` (`Itemid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payid`),
  ADD KEY `payments_ibfk_1` (`paycustid`),
  ADD KEY `RecvrId` (`RecvrId`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `custid` (`custid`),
  ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `occcustid` (`occcustid`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`sesid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `UserEmail` (`UserEmail`),
  ADD UNIQUE KEY `UserEmail_2` (`UserEmail`,`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cusid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `foodorders`
--
ALTER TABLE `foodorders`
  MODIFY `Orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `sesid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`custid`) REFERENCES `customers` (`cusid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`roomid`) REFERENCES `rooms` (`room_id`);

--
-- Constraints for table `foodorders`
--
ALTER TABLE `foodorders`
  ADD CONSTRAINT `foodorders_ibfk_1` FOREIGN KEY (`Itemid`) REFERENCES `item` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`paycustid`) REFERENCES `customers` (`cusid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`RecvrId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`custid`) REFERENCES `customers` (`cusid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `restaurant_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `item` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`occcustid`) REFERENCES `customers` (`cusid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
