-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 05:37 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'World News'),
(2, 'Asia News '),
(3, 'Sports'),
(5, 'Polities'),
(8, 'Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `comment_name` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_text` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `comment_name`, `comment_email`, `comment_text`, `status`) VALUES
(1, 2, 'Ajala Samuel', 'ajalaf4jesus@yahoo.com', 'This post is really good and okay for reading. ', 'approve'),
(2, 6, 'Johnson Ernest', 'johnesson@yahoo.com', 'I want to read more of this post', 'approve'),
(3, 1, 'Nelson Fames', 'fames223@yahoo.com', 'I really love this post. thanks a lot', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_date` text NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_keywords` varchar(100) NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `post_title`, `post_date`, `post_author`, `post_keywords`, `post_image`, `post_content`) VALUES
(1, 1, 'CCTV IN INSTITUTION', '06-04-18', 'Ajala Samuel', 'CCTV, world news, news', '1278844_547649898618107_1102958878_o.jpg', 'The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black and white monitors to observe the launch of V-2 rockets. The noted German engineer Walter Bruch was responsible for the technological design and installation of the system. \r\nIn the U.S. the first commercial closed-circuit television system became available in 1949, called Vericon. Very little is known about vericon except it was advertised as not requiring a government permit. \r\nIn the 1970â€™s and 1980â€™s CCTV was commonly used as an added security measure in banks. Many other retailers also began to use these CCTVâ€™s in their stores as a method to both prevent and record any possible crime. CCTV also became very useful in monitoring traffic. Britain first started using them for this purpose and thousands of cameras were placed all over the city to monitor traffic and to see if there were accidents.\r\nThe earliest systems required constant monitoring because there was no way to record and store the information. Recording systems were introduced later, when primitive reel-to reel media was used to preserve the data. These systems required magnetic tapes to be changed manually. It was a time consuming, expensive and unreliable process; the operator had to manually thread the tape from the tape reel through the recorder unto an empty take-up reel. Due to these short-comings, video surveillance was rare. Only when Video Cassette Recorder (VCR) technology became available in the 1970s, making it easier to record and erase information, now did video surveillance start to become more common. Video Cassette Recorder: VCR is an electromechanical device that records '),
(2, 5, 'Election in Nigeria', '06-04-18', 'John Ernest', 'Politics, Election, Nigeria', 'Bro. Tolu.jpg', 'The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black and white monitors to observe the launch of V-2 rockets. The noted German engineer Walter Bruch was responsible for the technological design and installation of the system. \r\nIn the U.S. the first commercial closed-circuit television system became available in 1949, called Vericon. Very little is known about vericon except it was advertised as not requiring a government permit. \r\nIn the 1970â€™s and 1980â€™s CCTV was commonly used as an added security measure in banks. Many other retailers also began to use these CCTVâ€™s in their stores as a method to both prevent and record any possible crime. CCTV also became very useful in monitoring traffic. Britain first started using them for this purpose and thousands of cameras were placed all over the city to monitor traffic and to see if there were accidents.\r\nThe earliest systems required constant monitoring because there was no way to record and store the information. Recording systems were introduced later, when primitive reel-to reel media was used to preserve the data. These systems required magnetic tapes to be changed manually. It was a time consuming, expensive and unreliable process; the operator had to manually thread the tape from the tape reel through the recorder unto an empty take-up reel. Due to these short-comings, video surveillance was rare. Only when Video Cassette Recorder (VCR) technology became available in the 1970s, making it easier to record and erase information, now did video surveillance start to become more common. Video Cassette Recorder: VCR is an electromechanical device that records '),
(3, 2, 'Minister in Christinity', '06-04-18', 'Omowunmi Mercies', 'Asia News, Minister, Christ', 'Koala.jpg', 'The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black and white monitors to observe the launch of V-2 rockets. The noted German engineer Walter Bruch was responsible for the technological design and installation of the system. \r\nIn the U.S. the first commercial closed-circuit television system became available in 1949, called Vericon. Very little is known about vericon except it was advertised as not requiring a government permit. \r\nIn the 1970â€™s and 1980â€™s CCTV was commonly used as an added security measure in banks. Many other retailers also began to use these CCTVâ€™s in their stores as a method to both prevent and record any possible crime. CCTV also became very useful in monitoring traffic. Britain first started using them for this purpose and thousands of cameras were placed all over the city to monitor traffic and to see if there were accidents.\r\nThe earliest systems required constant monitoring because there was no way to record and store the information. Recording systems were introduced later, when primitive reel-to reel media was used to preserve the data. These systems required magnetic tapes to be changed manually. It was a time consuming, expensive and unreliable process; the operator had to manually thread the tape from the tape reel through the recorder unto an empty take-up reel. Due to these short-comings, video surveillance was rare. Only when Video Cassette Recorder (VCR) technology became available in the 1970s, making it easier to record and erase information, now did video surveillance start to become more common. Video Cassette Recorder: VCR is an electromechanical device that records '),
(5, 3, 'Bacelonia vs Real Madrid', '06-04-18', 'Kola Owosho', 'Sports, news', '426117_121356161325113_737797607_n.jpg', 'The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black and white monitors to observe the launch of V-2 rockets. The noted German engineer Walter Bruch was responsible for the technological design and installation of the system. \r\nIn the U.S. the first commercial closed-circuit television system became available in 1949, called Vericon. Very little is known about vericon except it was advertised as not requiring a government permit. \r\nIn the 1970â€™s and 1980â€™s CCTV was commonly used as an added security measure in banks. Many other retailers also began to use these CCTVâ€™s in their stores as a method to both prevent and record any possible crime. CCTV also became very useful in monitoring traffic. Britain first started using them for this purpose and thousands of cameras were placed all over the city to monitor traffic and to see if there were accidents.\r\nThe earliest systems required constant monitoring because there was no way to record and store the information. Recording systems were introduced later, when primitive reel-to reel media was used to preserve the data. These systems required magnetic tapes to be changed manually. It was a time consuming, expensive and unreliable process; the operator had to manually thread the tape from the tape reel through the recorder unto an empty take-up reel. Due to these short-comings, video surveillance was rare. Only when Video Cassette Recorder (VCR) technology became available in the 1970s, making it easier to record and erase information, now did video surveillance start to become more common. Video Cassette Recorder: VCR is an electromechanical device that records '),
(6, 2, 'Election in Asia', '06-04-18', 'Prof. MMM.W Kinderful', 'Asia News, Election, Kinderful', 'Seun.jpg', 'The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black and white monitors to observe the launch of V-2 rockets. The noted German engineer Walter Bruch was responsible for the technological design and installation of the system. \r\nIn the U.S. the first commercial closed-circuit television system became available in 1949, called Vericon. Very little is known about vericon except it was advertised as not requiring a government permit. \r\nIn the 1970Ã¢â‚¬â„¢s and 1980Ã¢â‚¬â„¢s CCTV was commonly used as an added security measure in banks. Many other retailers also began to use these CCTVÃ¢â‚¬â„¢s in their stores as a method to both prevent and record any possible crime. CCTV also became very useful in monitoring traffic. Britain first started using them for this purpose and thousands of cameras were placed All over the city to monitor traffic and to see if there were accidents.\r\nThe earliest systems required constant monitoring because there was no way to record and store the information. Recording systems were introduced later, when primitive reel-to reel media was used to preserve the data.  consuming, expensive and unreliable process; the operator had to manually thread the tape from the tape reel through the recorder unto an empty take-up reel. Due to these short-comings, video surveillance was rare. Only when Video Cassette Recorder (VCR) technology became available in the 1970s, making it easier to record and erase information, now did video surveillance start to become more common. Video Cassette Recorder: VCR is an electromechanical device that records '),
(7, 5, 'President Buhari in Re-run', '06-07-18', 'Emmanuel Tunde', 'news, politics, president', 'Photo04.jpg', 'The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black and white monitors to observe the launch of V-2 rockets. The noted German engineer Walter Bruch was responsible for the technological design and installation of the system. \r\nIn the U.S. the first commercial closed-circuit television system became available in 1949, called Vericon. Very little is known about vericon except it was advertised as not requiring a government permit. \r\nIn the 1970ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s and 1980ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s CCTV was commonly used as an added security measure in banks. Many other retailers also began to use these CCTVÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s in their stores as a method to both prevent and record any possible crime. CCTV also became very useful in monitoring traffic. Britain first started using them for this purpose and thousands of cameras were placed All over the city to monitor traffic and to see if there were accidents.\r\nThe earliest systems required constant monitoring because there was no way to record and store the information. Recording systems were introduced later, when primitive reel-to reel media was used to preserve the data.  consuming, expensive and unreliable process; the operator had to manually thread the tape from the tape reel through the recorder unto an empty take-up reel. Due to these short-comings, video surveillance was rare. Only when Video Cassette Recorder (VCR) technology became available in the 1970s, making it easier to record and erase information, now did video surveillance start to become more common. Video Cassette Recorder: VCR is an electromechanical device that records '),
(8, 1, 'Anambra State University', '06-18-18', 'Oluwunmi Omolola', 'world, Africa, Nigeria', 'Koala.jpg', 'The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black. The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black and white monitors to observe the launch of V-2 rockets. The n'),
(9, 7, 'ANSU GIST', '06-18-18', 'Mr. Rancho', 'news, nigeria, gist', 'Jellyfish.jpg', 'The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black. The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black and white monitors to observe the launch of V-2 rockets. The nThe earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black. The earliest usage of Closed Circuit Television (CCTV) actually dates back to 1942 was installed by Siemens Ag at Test Stand VII in Peenemunde when it was first used by the military in Germany. The military used remote cameras with black and white monitors to observe the launch of V-2 rockets. The n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
