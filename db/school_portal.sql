-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 03:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `abm`
--

CREATE TABLE `abm` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bshm`
--

CREATE TABLE `bshm` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bshm`
--

INSERT INTO `bshm` (`ID`, `Campus`, `Type`, `CourseStrand`, `Yeargrade`, `FirstName`, `MiddleName`, `LastName`, `DateofBirth`, `Gender`, `Contact`, `EmailAddress`, `Address`) VALUES
(6, 'Valenzuela City Branch', 'New Student', 'Bachelor of Science in Hotel Management (BSHM)', 'Third Year', 'Eldrick James', 'Thompson', 'Antonio', '2003-05-02', 'Male', 12312312312, 'cantorclydejoric@gmail.com', 'Malinta Valenzuela City');

-- --------------------------------------------------------

--
-- Table structure for table `bsit`
--

CREATE TABLE `bsit` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bsit`
--

INSERT INTO `bsit` (`ID`, `Campus`, `Type`, `CourseStrand`, `Yeargrade`, `FirstName`, `MiddleName`, `LastName`, `DateofBirth`, `Gender`, `Contact`, `EmailAddress`, `Address`) VALUES
(4, 'Valenzuela City Branch', 'Existing Student', 'Bachelor of Science in Information Technology (BSIT)', 'Third Year', 'Gabriel', 'Santos', 'De Onon', '2003-05-02', 'Male', 9059246537, 'cantorclydejoric@gmail.com', '857 A. Decastro St. Malinta Valenzuela City'),
(5, 'Valenzuela City Branch', 'New Student', 'Bachelor of Science in Information Technology (BSIT)', 'First Year', 'John Russel', 'White', 'Vitto', '2003-05-02', 'Male', 123123123123, 'cantorclydejoric@gmail.com', 'Marulas Valenzuela City'),
(11, 'Valenzuela City Branch', 'Existing Student', 'Bachelor of Science in Information Technology (BSIT)', 'Third Year', 'John', 'Cena', 'Doe', '2024-06-28', 'Male', 9212936814, 'johncenadoe@gmail.com', 'Malinta Valenzuela City');

-- --------------------------------------------------------

--
-- Table structure for table `bsoa`
--

CREATE TABLE `bsoa` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bsoa`
--

INSERT INTO `bsoa` (`ID`, `Campus`, `Type`, `CourseStrand`, `Yeargrade`, `FirstName`, `MiddleName`, `LastName`, `DateofBirth`, `Gender`, `Contact`, `EmailAddress`, `Address`) VALUES
(8, 'Valenzuela City Branch', 'New Student', 'Bachelor of Science in Office Administration (BSOA)', 'First Year', 'Eldrick James', 'Hall', 'Antonio', '2003-05-02', 'Male', 12312312312, 'cantorclydejoric@gmail.com', '857 A. Decastro St. Malinta Valenzuela City');

-- --------------------------------------------------------

--
-- Table structure for table `bstm`
--

CREATE TABLE `bstm` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bstm`
--

INSERT INTO `bstm` (`ID`, `Campus`, `Type`, `CourseStrand`, `Yeargrade`, `FirstName`, `MiddleName`, `LastName`, `DateofBirth`, `Gender`, `Contact`, `EmailAddress`, `Address`) VALUES
(7, 'Valenzuela City Branch', 'New Student', 'Bachelor of Science in Tourism Management (BSTM)', 'First Year', 'Clyde Joric', 'Mutia', 'Cantor', '2003-02-05', 'Male', 12312313123, 'cantorclydejoric@gmail.com', 'Marulas Valenzuela City'),
(9, 'Valenzuela City Branch', 'Existing Student', 'Bachelor of Science in Tourism Management (BSTM)', 'First Year', 'John Russel', 'Hall', 'Cantor', '2003-05-02', 'Male', 12312312312, 'cantorclydejoric@gmail.com', 'Marulas Valenzuela City');

-- --------------------------------------------------------

--
-- Table structure for table `frontnews`
--

CREATE TABLE `frontnews` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `frontnews`
--

INSERT INTO `frontnews` (`ID`, `Title`, `Description`, `Img`) VALUES
(1, 'The International 2024 - Direct Invites and The Road to TI', '<p>Between a massive 7.36 update and Act II of Crownfall, there were a lot of big announcements vying for your attention last week, so we decided to give everybody a few days to process everything before we posted any more big Dota news. But now a new wee', 'Screenshot 2024-06-03 105831.png'),
(2, '12312312312', '<p>12312312312</p>', ''),
(3, 'skemberlou', '<p>asdasdasdas</p>\r\n<p>asdasdasdasd</p>', 'Screenshot 2024-06-03 105831.png');

-- --------------------------------------------------------

--
-- Table structure for table `gas`
--

CREATE TABLE `gas` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `he`
--

CREATE TABLE `he` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `humss`
--

CREATE TABLE `humss` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ict`
--

CREATE TABLE `ict` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ict`
--

INSERT INTO `ict` (`ID`, `Campus`, `Type`, `CourseStrand`, `Yeargrade`, `FirstName`, `MiddleName`, `LastName`, `DateofBirth`, `Gender`, `Contact`, `EmailAddress`, `Address`) VALUES
(10, 'Valenzuela City Branch', 'New Student', 'Information and Communication Technology (ICT)', 'Grade 11', 'Clyde Joric', 'Hall', 'Cantor', '2003-02-05', 'Male', 12312312312, 'cantorclydejoric@gmail.com', '857 A. Decastro St. Malinta Valenzuela City');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`ID`, `Name`, `Description`, `Img`) VALUES
(1, 'Gabriel Torneros', 'IT', 'sir gab.jpg'),
(2, 'Eman Gumayagay', 'IT', 'sir eman.jpg'),
(3, 'Dhanica Umlas', 'IT', 'maam dha.jpg'),
(4, 'Jay-Ar Ababao', 'PE', 'sir jay.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newenrollees`
--

CREATE TABLE `newenrollees` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newenrollees`
--

INSERT INTO `newenrollees` (`ID`, `Campus`, `Type`, `CourseStrand`, `Yeargrade`, `FirstName`, `MiddleName`, `LastName`, `DateofBirth`, `Gender`, `Contact`, `EmailAddress`, `Address`) VALUES
(13, '', '', '', '', '', '', '', '0000-00-00', '', 0, '', ''),
(14, 'Valenzuela City Branch', 'New Student', 'Bachelor of Science in Hotel Management (BSHM)', 'First Year', 'Gabriel', 'Hall', 'Cantor', '2003-05-20', 'Male', 12312312312, 'cantorclydejoric@gmail.com', '857 A. Decastro St. Malinta Valenzuela City'),
(15, '', '', '', '', '', '', '', '0000-00-00', '', 0, '', ''),
(16, '', '', '', '', '', '', '', '0000-00-00', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `newssection`
--

CREATE TABLE `newssection` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newssection`
--

INSERT INTO `newssection` (`ID`, `Title`, `Description`, `Img`) VALUES
(1, 'The International 2024 - Direct Invites and The Road to TI', '<p>Between a massive 7.36 update and Act II of Crownfall, there were a lot of big announcements vying for your attention last week, so we decided to give everybody a few days to process everything before we posted any more big Dota news. But now a new week is upon us, and we\'re happy to turn our focus from the in-game experience to pro Dota, with the the announcement of the six direct invites to this year\'s The International! <br><br>Read on for that unveiling, as well as details on the qualifying road for those still fighting to earn the last ten spots in Copenhagen.<br><br>From Dubai to Birmingham to Bucharest and beyond, the year has been packed with top-tier Dota tournaments. Befitting their dominant performances across the year so far, we\'re happy to invite the following teams directly to The International 2024:</p>\r\n<p>&nbsp;</p>', 'Screenshot 2024-06-03 105831.png'),
(2, 'Duckey predicts Falcons AP.Bren', '<h1 class=\"zox-post-title left entry-title\" style=\"text-align: center;\" itemprop=\"headline\"><span style=\"font-family: helvetica, arial, sans-serif;\">Duckey predicts Falcons AP.Bren will bounce back stronger in MSC after MPL PH defeat</span></h1>\r\n<p>Falcons AP.Bren head coach Francis &ldquo;Duckey&rdquo; Glindro is not about to press the panic button after losing to Liquid ECHO via sweep in the grand finals of the MPL Philippines Season 13 Playoffs.</p>\r\n<p>Instead, he believes the loss just showed the team what to work on as they prepare for the MLBB Mid-Season Cup in July in Riyadh, Saudi Arabia.</p>\r\n<p><em>&ldquo;Personally, I learned a lot of things in that ECHO match. Things that we can definitely integrate into our training so we can overcome some glaring weaknesses that I saw with our match versus ECHO,&rdquo;</em>&nbsp;Duckey said.</p>\r\n<p>He added that more than Liquid ECHO&rsquo;s dominant performance, it was his players&rsquo; subpar performance that surprised him the most.</p>\r\n<div>\r\n<p><em>&ldquo;Walang surprising sa kanila (TLPH players). Medyo na-surprise ako dun sa mga bata (FCAP players) kasi they weren&rsquo;t their usual selves. Medyo nakakapanibago panoorin yung ganun na game namin,&rdquo;</em> he explained.<br><br></p>\r\n<p>Duckey believes losing is always part of growth, whether in traditional sports or esports.</p>\r\n<p><em>&ldquo;Losses really play a really big factor in teams, not just in electronic sports but in traditional sports as well. This is where you actually see those glaring issues that you really need to fix, and without those losses, you wouldn&rsquo;t really see na mali na pala yung nangyayari. Kasi if you win, you think you&rsquo;re doing it right,</em>&rdquo; Duckey added further expounding on why this loss will help them become a better team come the MSC.</p>\r\n</div>', 'DUCKY.png'),
(3, 'Fire Sale (May 24, 2024)', '<p>In addition to the price cut, the incendiary grenade has gotten a bit of a makeover with a new visual treatment for its explosion and flames, and reduced spread and duration. <br><br>And in other gameplay news, Vertigo\'s A-site has gotten some significant changes--it\'s now the site featured in Wingman matches, so check it out.<br><br></p>\r\n<div class=\"blogentrypage_Body_30GVv\">Calling all Kilowatt Collection fans! Now, when you open a Kilowatt case with a key, you\'ll be given the option to rent the whole collection for a week (excluding the rare special item) instead of keeping a single item. You can play with the weapons as much as you like during that week, but they can\'t be modified by stickers or nametags.<br><br>Lots of other changes in today\'s update, including some quality of life improvements for demo playback, slightly smarter chickens, and a bit of spring cleaning--good news for fans of \'various bug fixes.\'<br><br>Jump into a match and see what\'s new!</div>', 'cs.png');

-- --------------------------------------------------------

--
-- Table structure for table `stem`
--

CREATE TABLE `stem` (
  `ID` int(11) NOT NULL,
  `Campus` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CourseStrand` varchar(255) NOT NULL,
  `Yeargrade` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `img`) VALUES
(1, 'admin123', 'admin123', 'sir gab.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abm`
--
ALTER TABLE `abm`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bshm`
--
ALTER TABLE `bshm`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bsit`
--
ALTER TABLE `bsit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bsoa`
--
ALTER TABLE `bsoa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bstm`
--
ALTER TABLE `bstm`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `frontnews`
--
ALTER TABLE `frontnews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gas`
--
ALTER TABLE `gas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `he`
--
ALTER TABLE `he`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `humss`
--
ALTER TABLE `humss`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ict`
--
ALTER TABLE `ict`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newenrollees`
--
ALTER TABLE `newenrollees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newssection`
--
ALTER TABLE `newssection`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stem`
--
ALTER TABLE `stem`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abm`
--
ALTER TABLE `abm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bshm`
--
ALTER TABLE `bshm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bsit`
--
ALTER TABLE `bsit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bsoa`
--
ALTER TABLE `bsoa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bstm`
--
ALTER TABLE `bstm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `frontnews`
--
ALTER TABLE `frontnews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gas`
--
ALTER TABLE `gas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `he`
--
ALTER TABLE `he`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `humss`
--
ALTER TABLE `humss`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ict`
--
ALTER TABLE `ict`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newenrollees`
--
ALTER TABLE `newenrollees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `newssection`
--
ALTER TABLE `newssection`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stem`
--
ALTER TABLE `stem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
