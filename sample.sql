-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 11:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `carmodels`
--

CREATE TABLE `carmodels` (
  `carmake` varchar(50) NOT NULL,
  `vehicletype` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `availability` date NOT NULL,
  `rent_km` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carmodels`
--

INSERT INTO `carmodels` (`carmake`, `vehicletype`, `year`, `availability`, `rent_km`, `category`, `image`) VALUES
('hyundai', 'xxx', 2019, '2019-10-08', '10', 'sub_suv', 'IMG_0227.jpg'),
('volvo', 'suv', 2012, '2019-10-07', '12', 'premium', 'IMG_0227.jpg'),
('xxx', 'suv', 2016, '2019-10-11', '10', 'premium', 'IMG_0227.jpg'),
('mazda', 'sedan', 2018, '2019-10-11', '15', 'premium', 'IMG_0227.jpg'),
('bmw', 'x5', 2019, '2019-10-06', '13', 'premium', 'download.jpg'),
('chavy', 'camaro', 2019, '2019-10-09', '10', 'premium', 'download.jpg'),
('xxxx', 'xxxx', 2016, '2019-10-15', '11', 'sub_suv', 'IMG_0227.jpg'),
('yyyy', 'yyy', 2015, '2019-10-03', '20', 'small', 'IMG_0227.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `license` varchar(50) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `password`, `cpassword`, `phone`, `email`, `license`, `age`) VALUES
('Gaurav', 'Modi', 'gaurav123', 'gaurav123', 2147483647, 'naik@gmail.com', '123456', 22),
('vishesh', 'naik', 'gaurav123', 'gaurav123', 2147483647, 'visheshnaik12@gmail.com', '123456', 22),
('darshan', 'modi', 'darshan123', 'darshan123', 1236547891, 'darshan@gmail.com', 'xgcdchjjdshgh2', 20),
('darshan', 'modi', 'darshan123', 'darshan123', 1236547891, 'darshan@gmail.com', 'xgcdchjjdshgh2', 20),
('darshan', 'modi', 'darshan123', 'darshan123', 1236547891, 'darshan@gmail.com', 'xgcdchjjdshgh2', 20),
('jimi', 'naik', 'jimi123', 'jimi123', 2147483647, 'jimi@gmail.com', 'idsgs123', 23),
('darsh', 'nanavati', 'darsh123', 'darsh123', 2147483647, 'darsh@gmail.com', 'khgfdwy36524', 22),
('Alessandro', 'Santos', '123456', '123456', 111111111, 'alecoelho2009@gmail.com', '12345', 18);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
