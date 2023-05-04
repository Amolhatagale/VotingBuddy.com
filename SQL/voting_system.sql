

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `voting_system`

-- Table structure for table `admin`

CREATE TABLE `admin` (
  `FullName` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `admin`

INSERT INTO `admin` (`FullName`, `Username`, `Password`) VALUES
('Jaydip Deshmukh', 'jaydipdeshmukh22@gmail.com', 'Admin@123'),
('Sanjana', 'Sanjananarkhede40@gmail.com', 'Admin');


-- Table structure for table `nominee`

CREATE TABLE `nominee` (
  `FullName` varchar(40) NOT NULL,
  `PartyName` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `MobileNo` bigint(10) NOT NULL,
  `AadharNO` bigint(12) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Domicile` varchar(100) NOT NULL,
  `Votes` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `nominee`

INSERT INTO `nominee` (`FullName`, `PartyName`,`Email`,`DOB`,`MobileNo`,`AadharNO`, `Image`,`Domicile`, `Votes`, `Status`) VALUES
('Amol Hatagale', 'Congress', 'jaydip.png', 0, 'OFF'),
('Janhavi kale', 'Shivsena', 'janhavi.jpg', 0, 'ON'),
('Sanjana Narkhede', 'Manse', 'janhavi.jpg', 0, 'ON'),
('Suyog Pofalkar', 'BJP', 'jaydip.png', 0, 'OFF');

-- --------------------------------------------------------

-- Table structure for table `register`

CREATE TABLE `register` (
  `FullName` varchar(40) NOT NULL,
  `MobileNo` bigint(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Status` varchar(11) NOT NULL,
  `Voted` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `register`

INSERT INTO `register` (`FullName`, `MobileNo`, `Email`, `DOB`, `Password`, `Status`, `Voted`) VALUES
('Dipti kolhe',1234567890 ,	'diptikolhe34@gmail.com','2001-03-13','Dipti@123', 'ON', 'NO'),
('Pallavi Bramhane',8765432167 ,'Pallavibramhane13@gmail.com','2004-05-12 ','Pallavi@123', 'ON', 'No'),
('Piyush Narkhede',9987654329,'piyushnarkhede21@gmail.com','2007-06-19','Piyush@123', 'ON', 'No'),
('Raghav Deshmukh',9876234538,'raghavd124@gmail.com','2005-02-24','Raghav@123', 'ON', 'NO');

-- Indexes for table `admin`

ALTER TABLE `admin`
  ADD UNIQUE KEY `Username` (`Username`);

-- Indexes for table `nominee`

ALTER TABLE `nominee`
  ADD UNIQUE KEY `FullName` (`FullName`),
  ADD UNIQUE KEY `PartyName` (`PartyName`);

-- Indexes for table `register`

ALTER TABLE `register`
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `FullName` (`FullName`);
COMMIT;
