-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 10:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niroshmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `video_title` varchar(150) NOT NULL,
  `comments_no` int(50) NOT NULL,
  `video_intro` varchar(600) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video_description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video_type` varchar(100) NOT NULL,
  `thumbnail` varchar(150) NOT NULL,
  `ytlink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `date`, `video_title`, `comments_no`, `video_intro`, `video_description`, `video_type`, `thumbnail`, `ytlink`) VALUES
(1, '18 April 2021', 'How to add follow button on facebook profile?', 2, 'Facebook ??????????? ??????????? 5000+ ???? ???? ??? ????????? Facebook profile ??? ??????? Follow button ? ????????????????? ?????? ????? ???? ?????????? ??????? ???? ???????. ???? ???????? ????????? ???????????? ???? ?????????? ?????? ?????????????', 'Facebook ??????????? ??????????? 5000+ ???? ???? ??? ????????? Facebook profile ??? ??????? Follow button ? ????????????????? ?????? ????? ???? ?????????? ??????? ???? ???????. ???? ???????? ????????? ???????????? ???? ?????????? ?????? ?????????????? ????????? ???????????.\r\n									', 'Tech_Video', 'images/resource/video-1.jpg', 'https://www.youtube.com/embed/CUl6SeDT8ho2'),
(2, '24 February 2021', 'How to delete google search history?', 6, '??????? ?????????, ???? ?????? ???? ??????? browsing ????? ?????????? history ? ??????? ?????????? ????????? ?????? ????? ???? ???????. ???? ???????? ????????? ???????????? ?????????????.?????', '??????? ?????????? ???? ?????????? ?????? ??????? ???????????????? ????????????? ??????? ?????????(????????? ???????? ?????? ??????? ?????) ??????? p?? ??????? ???????  ?????????? ?????????????? ?????? ????? ??????? ????????????.???????? ??????????? ???????? ????????????? ?????.', 'App', 'images/resource/video-3.jpg', 'https://www.youtube.com/embed/CUl6SeDT8ho2'),
(3, '06 May 2021', 'How to download Advanced Level Exam result sheet as a PDF?', 6, 'வணக்கம் நண்பர்களே, இந்த வீடியோவில் இலங்கை பரீட்சை திணைக்களத்தினால் நடாத்தப்படும் பரீட்சை முடிவுகளை(அண்மையில் நடைபெற்ற உயர்தர பரீட்சை உட்பட) எவ்வாறு pdf வடிவில் இலவசமாக தரவிறக்கம் செய்துகொள்ளவது என்பது பற்றி தெளிவாக கூறியுள்ளேன்.வீடியோவை முழுமையாகப் பார்த்து பயன்பெறுங்கள் நன்றி.', 'வணக்கம் நண்பர்களே, இந்த வீடியோவில் இலங்கை பரீட்சை திணைக்களத்தினால் நடாத்தப்படும் பரீட்சை முடிவுகளை(அண்மையில் நடைபெற்ற உயர்தர பரீட்சை உட்பட) எவ்வாறு pdf வடிவில் இலவசமாக தரவிறக்கம் செய்துகொள்ளவது என்பது பற்றி தெளிவாக கூறியுள்ளேன்.வீடியோவை முழுமையாகப் பார்த்து பயன்பெறுங்கள் நன்றி.', 'Tech_Video', 'images/resource/video-4.jpg', 'https://www.youtube.com/embed/A_BmTr9cQow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;