-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 07:35 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(30) NOT NULL,
  `m_image` varchar(100) NOT NULL,
  `m_genre` varchar(15) NOT NULL,
  `m_lang` varchar(15) NOT NULL,
  `m_des` varchar(150) NOT NULL,
  `rel_date` date NOT NULL,
  `rating` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `m_name`, `m_image`, `m_genre`, `m_lang`, `m_des`, `rel_date`, `rating`, `length`) VALUES
(1, 'Aaba eiktay na?', 'images\\aaba.jpg', 'Indian', 'Marathi', 'Awesome marathi movie by new upcoming director Mr. Aditya Jambhale. Fantastic locations captured in Goa.', '2018-10-16', 4, 60),
(2, 'Goal', 'images\\MPW-16784.jpg', 'Sci-fi', 'Konkani', 'A konkani movie by Mr. Amogh Barve and Ms. Prarthana Kaushik. The movie gives descripton about the environment and how pollution is growing rapidly.', '2018-10-01', 2, 45),
(3, 'karwaan', 'images\\Karwaan11.jpg', 'Comedy', 'Hindi', 'The film is a light weighted comedy in which Dulquer salman plays role of an guy living in Bengaluru.', '2018-04-10', 3, 35),
(4, 'The smurfs', 'images\\5176E5yGBsL.jpg', 'Indian', 'English', 'An animated movie of characters names clumsy smurf, brainy smurf, grandpa and smurfett. Their journey through the New York city and much more fun.', '2018-09-04', 5, 48),
(5, 'Banglore days', 'images\\bangalore-days-poster.jpg', 'Family', 'Malayalam', 'The story ts are divorced, is a bike mechanic who lives his life on his own terms.', '2014-05-23', 4, 80),
(6, 'Stranger Things', 'images\\DKPkvwRUQAA0ZtD.jpg', 'Horror', 'English', 'Stranger Things is a mixture of horror and sci-fi movie starring Eleven, Toothless and Alien.', '2018-09-21', 5, 70);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
