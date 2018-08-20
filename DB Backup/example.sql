-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2016 at 10:29 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticker` varchar(255) NOT NULL,
  `buyerName` varchar(255) NOT NULL,
  `sellerName` varchar(255) NOT NULL,
  `buyerPrice` double NOT NULL,
  `sellerPrice` double NOT NULL,
  `volume` double NOT NULL,
  `bidType` varchar(255) NOT NULL,
  `isComplete` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `ticker`, `buyerName`, `sellerName`, `buyerPrice`, `sellerPrice`, `volume`, `bidType`, `isComplete`) VALUES
(6, 'axt', 'far', 'sherazi512', 260, 230, 500, 'sell', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `bidsdetails`
--

CREATE TABLE IF NOT EXISTS `bidsdetails` (
  `bidID` int(11) NOT NULL,
  `ticker` varchar(255) NOT NULL,
  `buyerName` varchar(255) NOT NULL,
  `buyerPrice` double NOT NULL,
  `volume` varchar(255) NOT NULL,
  `bidType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidsdetails`
--

INSERT INTO `bidsdetails` (`bidID`, `ticker`, `buyerName`, `buyerPrice`, `volume`, `bidType`) VALUES
(6, 'axt', 'usama', 235, '500', 'buy'),
(6, 'axt', 'farhan12', 240, '200', 'buy'),
(6, 'axt', 'far', 260, '500', 'buy');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `ticker` varchar(255) DEFAULT NULL,
  `Stock` double NOT NULL,
  `Price` double NOT NULL,
  `changedPrice` double NOT NULL,
  `percentageChange` double NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `Phone` text NOT NULL,
  `DOC` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`ID`, `Name`, `Type`, `ticker`, `Stock`, `Price`, `changedPrice`, `percentageChange`, `Email`, `Address`, `Phone`, `DOC`) VALUES
(1, 'tata motors', 'Automobiles', 'ttm', 1200, 35.4929, -0.0071, -0.02, 'tata@hotmail.com', 'Mumbai, India', '+9111111111', '1999-04-07'),
(2, 'bilasa motors', 'Automobiles', 'bsm', 1000, 37.9924003648, -0.0030396352, -0.008, 'bilasamotors@gmail.com', 'Dubai,UAE', '+123456789', '2015-12-21'),
(3, 'NetSol Technologies', 'IT', 'ntsl', 990, 43.176848252791, 0.10441801270324, 0.24242424242424, 'netsoltech@hotmail.com', 'n-a', 'n-a', '0000-00-00'),
(4, 'axact Inc.', 'IT', 'axt', 1800, 52, 0.22559709629152, 0.10222222222222, 'axct@yahoo.com', 'n-a', 'n-a', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `companytype`
--

CREATE TABLE IF NOT EXISTS `companytype` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `companytype`
--

INSERT INTO `companytype` (`ID`, `Type`) VALUES
(1, 'Real-EState'),
(2, 'Automobiles'),
(3, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `marketsummary`
--

CREATE TABLE IF NOT EXISTS `marketsummary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticker` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `prevPrice` double NOT NULL,
  `changedPrice` double NOT NULL,
  `percentageChange` double NOT NULL,
  `volume` double NOT NULL,
  `eps` double DEFAULT NULL,
  `peRatio` double DEFAULT NULL,
  `transactionTIme` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `marketsummary`
--

INSERT INTO `marketsummary` (`id`, `ticker`, `companyName`, `prevPrice`, `changedPrice`, `percentageChange`, `volume`, `eps`, `peRatio`, `transactionTIme`) VALUES
(1, 'bsm', 'bilasa motors', 300, 1.2, 0.4, 1000, 80, 0.005, '2016-02-05 20:29:13'),
(3, 'ttm', 'tata motors', 200, -0.013597733711048, -0.0067988668555241, 1412, -1.2781869688385, 0.0053191489361702, '2016-02-05 21:20:36'),
(5, 'bsm', 'bilasa motors', 75, 0.53470960859429, 0.17714285714286, 1400, 0.93117732571429, 0.19023536361023, '2016-02-06 10:31:44'),
(6, 'ttm', 'tata motors', 199.98640226629, -0.10581291125201, -0.052910052910053, 1512, -5.2902858341952, 0.010001359958295, '2016-02-06 10:33:53'),
(7, 'ttm', 'tata motors', 199.88058935504, 0.23350536139607, 0.11682242990654, 1712, 4.6840570696224, 0.02494043692682, '2016-02-06 10:40:26'),
(8, 'bsm', 'bilasa motors', 228.09, 0.96763810562749, 0.32, 1000, 31.236189437251, 0.010244527446052, '2016-02-06 10:42:36'),
(9, 'bsm', 'bilasa motors', 303.35454611422, 1.7334545492241, 0.57142857142857, 1400, 159.23324660246, 0.0035886260163694, '2016-02-06 10:50:24'),
(10, 'bsm', 'bilasa motors', 305.08800066344, 1.3559466696153, 0.44444444444444, 900, 86.627555260693, 0.0051305204574567, '2016-02-06 10:53:30'),
(11, 'bsm', 'bilasa motors', 198.01, 1.3200662346655, 0.43076923076923, 1300, 96.875336041093, 0.0044466346995329, '2016-02-06 10:57:25'),
(12, 'ttm', 'tata motors', 200.11409471644, 0.24516275003545, 0.12251148545176, 2612, 55.098718148608, 0.0022234906649068, '2016-02-07 10:50:14'),
(13, 'ttm', 'tata motors', 100.00009, 0.99433874673191, 0.49627791563275, 1612, 396.84404095956, 0.0012505615919865, '2016-02-07 10:50:58'),
(14, 'ttm', 'tata motors', 201.35359621321, -0.14382399729515, -0.071428571428571, 112, -2050.2171022844, 0.000034839515946377, '2016-02-07 10:52:34'),
(15, 'ttm', 'tata motors', 201.20977221591, 0.42924751406061, 0.21333333333333, 1500, 63.612872890909, 0.0033536189082229, '2016-02-08 19:32:43'),
(16, 'ttm', 'tata motors', 201.63901972997, 0.32262243156795, 0.16, 2000, 39.672196054006, 0.0040330512528772, '2016-02-09 06:09:38'),
(17, 'bsm', 'bilasa motors', 307.76401356773, 2.735680120602, 0.88888888888889, 1800, 376.05244142939, 0.0023637365190615, '2016-02-11 19:12:36'),
(18, 'bsm', 'bilasa motors', 310.49969368833, -0.24839975495066, -0.08, 2000, -8.8399754950664, 0.0090497988421629, '2016-02-11 19:14:29'),
(19, 'bsm', 'bilasa motors', 310.25129393338, -0.22563730467882, -0.072727272727273, 2200, -8.0182759224276, 0.0090701883336105, '2016-02-11 19:15:45'),
(20, 'bsm', 'bilasa motors', 310.0256566287, -0.32350503300386, -0.10434782608696, 2300, -0.34871849143304, 0.29923227087311, '2016-02-11 19:19:28'),
(21, 'ttm', 'tata motors', 201.96164216154, 0.2902442761603, 0.1437125748503, 1670, 15.498279322966, 0.0092728084102433, '2016-02-11 19:20:25'),
(22, 'ttm', 'tata motors', 202.2518864377, -0.028553207497087, -0.014117647058824, 1700, -2.431791337944, 0.005805451659664, '2016-02-11 19:21:38'),
(23, 'bsm', 'bilasa motors', 309.7021515957, 0.8058775986785, 0.26021052631579, 1900, 51.923848152303, 0.0050113875526432, '2016-02-11 19:27:27'),
(24, 'ttm', 'tata motors', 202.2233332302, 0.26234378364999, 0.12972972972973, 1850, 6.34227027696, 0.020454777873628, '2016-02-11 21:11:40'),
(25, 'bsm', 'bilasa motors', 310.50802919438, 0.37334024216077, 0.12023529411765, 3400, 70.761872049042, 0.0016991536633502, '2016-02-11 22:34:03'),
(26, 'ttm', 'tata motors', 202.48567701385, 0.34465647151294, 0.17021276595745, 2350, 50.64073582743, 0.0033611827153833, '2016-02-12 06:16:41'),
(27, 'ttm', 'tata motors', 202.83033348536, 0.23440125213187, 0.11556518598772, 2769, 23.868281768042, 0.0048417890785275, '2016-02-12 08:18:05'),
(28, 'bsm', 'bilasa motors', 310.88136943654, -0.014544157634458, -0.0046783625730994, 3420, -1.3608485119838, 0.0034378275993993, '2016-03-10 18:09:15'),
(29, 'bsm', 'bilasa motors', 310.86682527891, 0.56265488738264, 0.18099547511312, 4420, 124.72998637486, 0.0014510983314723, '2016-03-10 21:19:54'),
(30, 'bsm', 'bilasa motors', 311.42948016629, 5.1880894428443, 1.6658954187876, 4322, 157.60849809231, 0.010569832457967, '2016-03-10 21:20:31'),
(31, 'bsm', 'bilasa motors', 316.61756960913, 0.28705128704364, 0.090661831368994, 4412, 2.992641656424, 0.030294917259599, '2016-03-11 12:16:47'),
(32, 'bsm', 'bilasa motors', 316.90462089617, -0.0055940798039924, -0.0017652250661959, 4532, -6.5010687568474, 0.00027152844127924, '2016-03-11 12:27:46'),
(33, 'ttm', 'tata motors', 203.06473473749, -0.023050980885419, -0.01135154310039, 2819, -2.3137954556579, 0.004906027052924, '2016-03-11 12:29:23'),
(34, 'bsm', 'bilasa motors', 316.89902681637, -0.022880796160027, -0.0072202166064982, 4432, -4.9981773793569, 0.0014445699018844, '2016-03-11 12:30:13'),
(35, 'bsm', 'bilasa motors', 316.87614602021, 0.32235620144477, 0.10172939979654, 3932, 18.629079753793, 0.0054607850275495, '2016-03-12 18:11:16'),
(36, 'ttm', 'tata motors', 203.0416837566, 0.24470224014052, 0.12051822838204, 3319, 35.788890176969, 0.0033674759900657, '2016-03-12 19:48:49'),
(37, 'bsm', 'bilasa motors', 317.19850222165, 0.28628023666214, 0.090252707581227, 4432, 16.4983301244, 0.0054704146965607, '2016-03-12 19:53:01'),
(38, 'bsm', 'bilasa motors', 317.48478245831, 0.210409649641, 0.066273932253314, 5432, 19.516232333091, 0.0033958364054183, '2016-03-12 20:37:36'),
(39, 'ttm', 'tata motors', 203.28638599674, 0.16648197741763, 0.081895291020766, 3419, 3.4329011758587, 0.023856000165889, '2016-03-12 20:46:46'),
(40, 'ttm', 'tata motors', 203.45286797416, 0.36832381620124, 0.18103643358226, 4419, 144.20405196213, 0.0012554184928853, '2016-03-16 07:55:04'),
(41, 'axt', 'axact Inc.', 220, 0.050285714285714, 0.022857142857143, 14000, 51.428571428571, 0.00044444444444444, '2016-04-06 20:55:26'),
(42, 'axt', 'axact Inc.', 220.05028571429, 0.5098920451019, 0.23171614771904, 13810, 41.604080852384, 0.0055695533460094, '2016-04-06 20:57:35'),
(43, 'axt', 'axact Inc.', 220.56017775939, 0.0411438039791, 0.018654230512991, 15010, 8.278629537041, 0.0022532993449612, '2016-04-06 21:00:28'),
(44, 'axt', 'axact Inc.', 220.60132156337, -0.01137853367187, -0.0051579626047711, 15510, -3.1102855335492, 0.0016583566200384, '2016-04-08 13:28:04'),
(45, 'axt', 'axact Inc.', 220.5899430297, 0.032465274138405, 0.014717477003942, 15220, 0.90559350966555, 0.016251747441717, '2016-04-09 22:08:58'),
(46, 'ntsl', 'NetSol Technologies', 121, -0.02370612244898, -0.019591836734694, 4900, -0.16326530612245, 0.12, '2016-04-20 11:35:12'),
(47, 'axt', 'axact Inc.', 220.62240830384, 0.02661857317579, 0.012065217391304, 14720, 0.03743455696087, 0.32230159432409, '2016-04-20 11:36:15'),
(48, 'ntsl', 'NetSol Technologies', 120.97629387755, 0.055835212558869, 0.046153846153846, 3900, 21.338196127682, 0.0021629685038826, '2016-04-20 22:33:12'),
(49, 'axt', 'axact Inc.', 220.64902687702, -0.011522142395667, -0.0052219321148825, 15320, -3.7801261684706, 0.0013814174136403, '2016-04-20 22:36:47'),
(50, 'ntsl', 'NetSol Technologies', 121.03212909011, 0.035597685026503, 0.029411764705882, 3400, 0.46680834234, 0.063006082021688, '2016-05-06 07:28:48'),
(51, 'axt', 'axact Inc.', 220.63750473462, 0.028803851793031, 0.013054830287206, 15320, 1.5332895699937, 0.0085142627607254, '2016-05-06 19:17:13'),
(52, 'ntsl', 'NetSol Technologies', 121.06772677514, 0.037032481131219, 0.030588235294118, 3400, 1.0508556735129, 0.029107931816996, '2016-05-06 19:22:19'),
(53, 'axt', 'axact Inc.', 220.66630858641, 0.026503003120039, 0.01201044386423, 15320, 0.48739902943029, 0.024641911737634, '2016-05-07 00:59:04'),
(54, 'ntsl', 'NetSol Technologies', 121.10475925627, 0.28495237472064, 0.23529411764706, 3400, 206.798880175, 0.0011377920298599, '2016-05-07 11:03:40'),
(55, 'ttm', 'tata motors', 203.82119179036, 0.084867841795488, 0.041638379723919, 4419, 4.7393180737072, 0.0087857322670367, '2016-05-08 12:09:34'),
(56, 'axt', 'axact Inc.', 220.69281158953, 0.22559709629152, 0.10222222222222, 1800, 2.0682640912156, 0.049424163314727, '2016-05-10 08:45:57'),
(57, 'ttm', 'tata motors', 203.90605963216, 1.3593737308811, 0.66666666666667, 1200, 127.37503045885, 0.0052338881825196, '2016-05-10 21:45:15'),
(58, 'bsm', 'bilasa motors', 317.69519210795, 1.0166246147454, 0.32, 1000, 32.92192315682, 0.0097199667976781, '2016-05-12 09:52:33'),
(59, 'ntsl', 'NetSol Technologies', 42.989, 0.015632363636364, 0.036363636363636, 990, 1.4625454545455, 0.024863252113376, '2016-05-12 23:50:03'),
(60, 'ntsl', 'NetSol Technologies', 43.004632363636, 0.017375609035813, 0.04040404040404, 990, 1.6958466997246, 0.02382529058234, '2016-05-12 23:52:27'),
(61, 'ntsl', 'NetSol Technologies', 43.022007972672, 0.034765258967816, 0.080808080808081, 990, 13.81284655208, 0.0058502120112176, '2016-05-12 23:53:22'),
(62, 'ntsl', 'NetSol Technologies', 43.05677323164, 0.015657008447869, 0.036363636363636, 990, 0.47108527717818, 0.077191196849657, '2016-05-14 09:51:24'),
(63, 'ntsl', 'NetSol Technologies', 43.072430240088, 0.10441801270324, 0.24242424242424, 990, 103.80911909491, 0.0023352885039183, '2016-06-05 22:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `marketwatch`
--

CREATE TABLE IF NOT EXISTS `marketwatch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `indexValue` double NOT NULL,
  `volume` double NOT NULL,
  `baseIndex` double NOT NULL,
  `marketCapitalization` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `marketwatch`
--

INSERT INTO `marketwatch` (`id`, `indexValue`, `volume`, `baseIndex`, `marketCapitalization`) VALUES
(1, 1000, 4990, 216759.11, 216759.11),
(2, 1000, 4990, 216759.11, 216759.11),
(3, 1000.0713974144, 4990, 216759.11, 216774.58604),
(4, 1000.0793536422, 4990, 216774.58604, 216791.78789295),
(5, 1000.1587588105, 4990, 216791.78789295, 216826.20549932),
(6, 1000.0714878459, 4990, 216826.20549932, 216841.70593769),
(7, 999.96070866549, 4990, 216841.70593769, 216833.18593769),
(8, 999.97897000875, 4990, 216833.18593769, 216828.62593769),
(9, 999.98598139342, 4990, 216828.62593769, 216825.58630249);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticker` varchar(255) NOT NULL,
  `volume` double NOT NULL,
  `price` double DEFAULT NULL,
  `transactionType` varchar(255) DEFAULT NULL,
  `userName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `ticker`, `volume`, `price`, `transactionType`, `userName`) VALUES
(3, 'ttm', 1000, 1000, 'buy', 'sherazi512'),
(4, 'ttm', 98, 9000, 'sell', 'sherazi512'),
(5, 'bsm', 90, 500, 'buy', 'sherazi512'),
(6, 'ttm', 50, 40, 'buy', 'sherazi512'),
(7, 'bsm', 100, 40, 'sell', 'sherazi512'),
(8, 'bsm', 500, 500, 'buy', 'sherazi512'),
(9, 'bsm', 1000, 450, 'buy', 'umair123'),
(10, 'ttm', 100, 350, 'buy', 'umair123'),
(11, 'ttm', 1000, 1000, 'buy', 'sherazi512'),
(12, 'axt', 5000, 400, 'buy', 'sherazi512'),
(13, 'axt', 190, 4000, 'sell', 'sherazi512'),
(14, 'axt', 1200, 350, 'sell', 'sherazi512'),
(15, 'axt', 500, 100, 'buy', 'farhan12'),
(16, 'axt', 290, 280, 'sell', 'farhan12'),
(17, 'ntsl', 1000, 120, 'buy', 'sherazi512'),
(18, 'axt', 500, 222, 'sell', 'sherazi512'),
(19, 'ntsl', 1000, 225, 'sell', 'sherazi512'),
(20, 'axt', 600, 100, 'buy', 'najeeb'),
(21, 'ntsl', 500, 125, 'sell', 'sherazi512'),
(22, 'axt', 1000, 250, 'buy', 'sherazi512'),
(23, 'ntsl', 500, 130, 'sell', 'sherazi512'),
(24, 'axt', 1000, 230, 'buy', 'sherazi512'),
(26, 'ttm', 1000, 230, 'buy', 'sherazi512'),
(27, 'axt', 500, 230, 'sell', 'sherazi512'),
(28, 'ttm', 240, 1000, 'buy', 'sherazi512'),
(35, 'axt', 200, 240, 'buy', 'usama'),
(36, 'bsm', 500, 400, 'sell', 'sherazi512'),
(37, 'ntsl', 900, 45, 'sell', 'sherazi512'),
(38, 'ntsl', 300, 50, 'sell', 'sherazi512'),
(39, 'ntsl', 300, 100, 'sell', 'sherazi512'),
(40, 'ntsl', 300, 45, 'sell', 'sherazi512'),
(41, 'ttm', 1000, 30, 'sell', 'sherazi512'),
(42, 'bsm', 500, 15, 'sell', 'sherazi512'),
(43, 'bsm', 500, 10, 'sell', 'sherazi512'),
(44, 'axt', 500, 260, 'buy', 'far'),
(45, 'ntsl', 500, 300, 'sell', 'far'),
(46, 'ntsl', 400, 310, 'buy', 'sherazi512');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_2` (`ID`),
  UNIQUE KEY `ID_3` (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `fullName`, `userName`, `password`, `email`, `userType`) VALUES
(2, 'Waseem Sherazi', 'sherazi512', '0000', 'waseemsherazi512@gmail.com', 'broker'),
(3, 'umair', 'umair123', '1234', 'um@gmail.com', 'admin'),
(4, 'Farhan', 'farhan12', 'aaaa', 'farhan@gmail.com', 'buyer'),
(5, 'Usama Jamil', 'usama', '111', 'usama@hotmail.com', 'buyer'),
(6, 'Alia', 'ali', '111', 'ali@gmail.com', 'buyer'),
(7, 'far', 'far', '123', 'ali@gmail.com', 'buyer');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticker` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mfi` varchar(255) NOT NULL,
  `rsi` varchar(255) NOT NULL,
  `ma` varchar(255) NOT NULL,
  `william` varchar(255) NOT NULL,
  `stoch` varchar(255) NOT NULL,
  `pmo` varchar(255) NOT NULL,
  `prediction` varchar(255) NOT NULL,
  `actual` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `ticker`, `date`, `mfi`, `rsi`, `ma`, `william`, `stoch`, `pmo`, `prediction`, `actual`, `result`) VALUES
(6, 'yhoo', '2016-05-24', 'decrease', 'decrease', 'increase', 'decrease', 'increase', 'increase', 'SELL', '0.680001', '1'),
(8, 'aapl', '2016-03-28', 'decrease', 'decrease', 'increase', 'increase', 'decrease', 'decrease', 'BUY', '-0.809998', '1'),
(9, 'adbe', '2016-03-16', 'decrease', 'decrease', 'increase', 'decrease', 'increase', 'increase', 'SELL', '1.47', '1'),
(10, 'fb', '2016-05-18', 'decrease', 'increase', 'increase', 'decrease', 'increase', 'decrease', 'SELL', '0.849999', '1'),
(11, 'goog', '2016-03-14', 'decrease', 'decrease', 'increase', 'decrease', 'increase', 'increase', 'SELL', '3.67999', '1'),
(12, 'tdc', '2016-04-14', 'decrease', 'decrease', 'increase', 'decrease', 'increase', 'increase', 'SELL', '-0.079999', '0'),
(13, 'hpq', '2016-05-11', 'decrease', 'decrease', 'increase', 'decrease', 'increase', 'increase', 'SELL', '0.07', '1'),
(14, 'yhoo', '2016-05-24', 'decrease', 'decrease', 'increase', 'decrease', 'increase', 'increase', 'SELL', '0.680001', '1'),
(15, 'intc', '2016-05-27', 'decrease', 'decrease', '', 'decrease', 'decrease', 'increase', 'BUY', '-1000', '-1'),
(16, 'adbe', '2016-03-22', 'decrease', 'decrease', 'increase', 'decrease', 'increase', 'increase', 'SELL', '0.5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tradingpolicies`
--

CREATE TABLE IF NOT EXISTS `tradingpolicies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) NOT NULL,
  `companyTicker` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `shares` double NOT NULL,
  `minProfit` double NOT NULL,
  `maxloss` double NOT NULL,
  `strategy` varchar(255) NOT NULL,
  `sdate` varchar(255) NOT NULL,
  `eDate` varchar(255) NOT NULL,
  `remainingTime` varchar(255) NOT NULL,
  `profitLoss` double NOT NULL,
  `isComplete` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tradingpolicies`
--

INSERT INTO `tradingpolicies` (`id`, `userName`, `companyTicker`, `name`, `amount`, `shares`, `minProfit`, `maxloss`, `strategy`, `sdate`, `eDate`, `remainingTime`, `profitLoss`, `isComplete`) VALUES
(3, 'sherazi512', 'yhoo', 'plan1', 100000, 13000, 2.5, 4, 'mfi', '2015-12-02', '2015-12-22', '0', 95000, 1),
(4, 'sherazi512', 'aapl', 'plan2', 500000, 7500, 3.5, 2, 'ma', '2015-12-21', '2016-04-21', '0', 525000, 1),
(5, 'sherazi512', 'aapl', 'nam', 10000, 1000, 5, 5, 'all', '2016-05-20', '2016-06-19', '0', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticker` varchar(255) NOT NULL,
  `volume` double DEFAULT NULL,
  `price` double NOT NULL,
  `transactionType` varchar(255) NOT NULL,
  `transactionTime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `ticker`, `volume`, `price`, `transactionType`, `transactionTime`) VALUES
(1, 'ttm', 200, 12, 'buy', '2016-02-05 10:52:06'),
(2, 'ttm', 200, 90, 'sell', '2016-02-05 10:52:42'),
(3, 'ttm', 500, 220, 'sell', '2016-02-05 11:16:26'),
(4, 'ttm', 200, 220, 'buy', '2016-02-05 11:23:29'),
(5, 'bsm', 400, 400, 'sell', '2016-02-05 11:25:33'),
(6, 'ttm', 12, 12, 'buy', '2016-02-05 11:26:52'),
(7, 'bsm', 50, 350, 'buy', '2016-02-05 12:35:33'),
(8, 'bsm', 100, 310, 'buy', '2016-02-05 12:39:20'),
(9, 'bsm', 100, 400, 'buy', '2016-02-05 12:44:29'),
(10, 'bsm', 100, 400, 'buy', '2016-02-05 12:45:38'),
(11, 'bsm', 100, 400, 'buy', '2016-02-05 13:01:54'),
(12, 'bsm', 100, 400, 'buy', '2016-02-05 13:10:20'),
(13, 'bsm', 100, 300, 'sell', '2016-02-05 13:15:19'),
(14, 'bsm', 200, 200, 'sell', '2016-02-05 13:16:09'),
(15, 'ttm', 90, 30, 'sell', '2016-02-05 16:58:49'),
(16, 'ttm', 90, 90, 'buy', '2016-02-05 17:45:24'),
(17, 'ttm', 100, 100, 'sell', '2016-02-05 17:49:02'),
(18, 'bsm', 100, 100, 'buy', '2016-02-05 18:04:37'),
(19, 'bsm', 350, 100, 'buy', '2016-02-05 18:06:19'),
(20, 'bsm', 350, 100, 'sell', '2016-02-05 18:07:29'),
(21, 'bsm', 350, 1000, 'buy', '2016-02-05 18:08:25'),
(22, 'bsm', 100, 10, 'buy', '2016-02-05 18:08:45'),
(23, 'ttm', 10, 100, 'buy', '2016-02-05 18:11:50'),
(24, 'ttm', 10, 100, 'sell', '2016-02-05 18:12:00'),
(25, 'ttm', 200, 400, 'buy', '2016-02-05 18:13:23'),
(26, 'ttm', 400, 20, 'buy', '2016-02-05 18:19:03'),
(27, 'ttm', 400, 20, 'buy', '2016-02-05 18:24:04'),
(28, 'ttm', 812, 20, 'sell', '2016-02-05 18:25:58'),
(29, 'ttm', 400, 20, 'sell', '2016-02-05 18:26:19'),
(30, 'ttm', 800, 1200, 'sell', '2016-02-05 18:30:03'),
(31, 'ttm', 1000, 900, 'buy', '2016-02-05 20:02:29'),
(32, 'bsm', 100, 1000, 'sell', '2016-02-05 20:13:07'),
(33, 'bsm', 300, 300, 'buy', '2016-02-05 20:20:51'),
(34, 'bsm', 100, 300, 'buy', '2016-02-05 20:21:52'),
(35, 'bsm', 1000, 301, 'buy', '2016-02-05 20:22:04'),
(36, 'bsm', 2100, 301, 'sell', '2016-02-05 20:22:40'),
(37, 'bsm', 500, 500, 'buy', '2016-02-05 20:23:40'),
(38, 'bsm', 500, 500, 'sell', '2016-02-05 20:29:12'),
(39, 'bsm', 500, 500, 'buy', '2016-02-05 20:53:19'),
(40, 'ttm', 12, 12, 'buy', '2016-02-05 21:20:36'),
(41, 'bsm', 100, 100, 'buy', '2016-02-06 10:29:16'),
(42, 'bsm', 200, 310, 'sell', '2016-02-06 10:31:44'),
(43, 'ttm', 100, 100, 'buy', '2016-02-06 10:33:53'),
(44, 'ttm', 200, 250, 'buy', '2016-02-06 10:40:26'),
(45, 'bsm', 400, 400, 'sell', '2016-02-06 10:42:36'),
(46, 'bsm', 400, 1000, 'buy', '2016-02-06 10:50:24'),
(47, 'bsm', 500, 500, 'sell', '2016-02-06 10:53:30'),
(48, 'bsm', 400, 700, 'buy', '2016-02-06 10:57:24'),
(49, 'ttm', 900, 400, 'buy', '2016-02-07 10:50:14'),
(50, 'ttm', 1000, 1000, 'sell', '2016-02-07 10:50:58'),
(51, 'ttm', 1500, 10, 'sell', '2016-02-07 10:52:33'),
(52, 'ttm', 600, 400, 'buy', '2016-02-08 19:32:43'),
(53, 'ttm', 500, 400, 'buy', '2016-02-09 06:09:38'),
(54, 'bsm', 500, 2000, 'buy', '2016-02-11 19:12:36'),
(55, 'bsm', 200, 200, 'buy', '2016-02-11 19:14:28'),
(56, 'bsm', 200, 200, 'buy', '2016-02-11 19:15:45'),
(57, 'bsm', 100, 300, 'buy', '2016-02-11 19:19:28'),
(58, 'ttm', 330, 300, 'sell', '2016-02-11 19:20:25'),
(59, 'ttm', 30, 30, 'buy', '2016-02-11 19:21:38'),
(60, 'bsm', 400, 618, 'sell', '2016-02-11 19:27:26'),
(61, 'ttm', 150, 300, 'buy', '2016-02-11 21:11:40'),
(62, 'bsm', 1500, 511, 'buy', '2016-02-11 22:34:03'),
(63, 'ttm', 500, 500, 'buy', '2016-02-12 06:16:40'),
(64, 'ttm', 419, 400, 'buy', '2016-02-12 08:18:05'),
(65, 'bsm', 20, 20, 'buy', '2016-03-10 18:09:15'),
(66, 'bsm', 1000, 1000, 'buy', '2016-03-10 21:19:54'),
(67, 'bsm', 98, 9000, 'sell', '2016-03-10 21:20:31'),
(68, 'bsm', 90, 500, 'buy', '2016-03-11 12:16:47'),
(69, 'bsm', 120, 10, 'buy', '2016-03-11 12:27:46'),
(70, 'ttm', 50, 40, 'buy', '2016-03-11 12:29:23'),
(71, 'bsm', 100, 40, 'sell', '2016-03-11 12:30:13'),
(72, 'bsm', 500, 500, 'sell', '2016-03-12 18:11:16'),
(73, 'ttm', 500, 500, 'buy', '2016-03-12 19:48:49'),
(74, 'bsm', 500, 500, 'buy', '2016-03-12 19:53:01'),
(75, 'bsm', 1000, 450, 'buy', '2016-03-12 20:37:36'),
(76, 'ttm', 100, 350, 'buy', '2016-03-12 20:46:46'),
(77, 'ttm', 1000, 1000, 'buy', '2016-03-16 07:55:04'),
(78, 'axt', 5000, 400, 'buy', '2016-04-06 20:55:26'),
(79, 'axt', 190, 4000, 'sell', '2016-04-06 20:57:35'),
(80, 'axt', 1200, 350, 'buy', '2016-04-06 21:00:28'),
(81, 'axt', 500, 100, 'buy', '2016-04-08 13:28:04'),
(82, 'axt', 290, 280, 'sell', '2016-04-09 22:08:57'),
(83, 'ntsl', 1000, 120, 'buy', '2016-04-20 11:35:12'),
(84, 'axt', 500, 222, 'sell', '2016-04-20 11:36:14'),
(85, 'ntsl', 1000, 225, 'sell', '2016-04-20 22:33:12'),
(86, 'axt', 600, 100, 'buy', '2016-04-20 22:36:47'),
(87, 'ntsl', 500, 125, 'sell', '2016-05-06 07:28:48'),
(88, 'axtaaa', 1111, 111111, 'buy', '2016-05-06 14:35:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
