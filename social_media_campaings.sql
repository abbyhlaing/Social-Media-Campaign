-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 11:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_media_campaings`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `email` varchar(300) NOT NULL,
  `sentdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `message`, `email`, `sentdate`) VALUES
(1, 'testing', 'susu@gmail.com', '2024-06-28 04:05:13'),
(7, 'Chat with a Counselor: Get instant, confidential support from trained counselors who understand social bullying and can offer guidance and advice.', '', '2024-07-23 17:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `howparenthelp`
--

CREATE TABLE `howparenthelp` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `howparenthelp`
--

INSERT INTO `howparenthelp` (`id`, `description`, `image1`, `image2`) VALUES
(1, ' Cyberbullying Awareness and Prevention\r\nHelp your child recognize and respond to cyberbullying. This campaign focuses on educating parents about the signs of cyberbullying and how to support their children through it. Learn about resources and tools to prevent and address online harassment, creating a safer online environment for your kids.', 'images/p12.jpg', 'images/p11.jpg'),
(2, 'Digital Footprint Management\r\nTeach your child the importance of managing their digital footprint. This campaign highlights strategies for parents to guide their children in maintaining a positive online presence. Understand the long-term implications of online activities and how to encourage responsible behavior on social media platforms.', 'images/p10.jpg', 'images/p9.jpg'),
(3, 'Safe Social Media Practices\r\nEquip your family with the knowledge of safe social media practices. This campaign provides tips and resources on privacy settings, safe sharing, and recognizing potential online threats. Empower your children to navigate social media safely and confidently with parental guidance.', 'images/p8.jpg', 'images/p7.jpg'),
(4, 'Balancing Screen Time and Offline Activities\r\nEncourage a healthy balance between screen time and offline activities for your child. This campaign offers practical advice for parents to set boundaries and promote a well-rounded lifestyle. Discover ways to foster creativity, physical activity, and real-world interactions beyond the screen.', 'images/p6.jpg', 'images/p4.jpg'),
(5, 'Promoting Positive Online Behavior\r\nFoster a culture of kindness and respect online. This campaign focuses on teaching children the importance of positive online interactions and digital etiquette. Learn how to instill values of empathy, inclusivity, and responsible communication in your child\'s social media use.', 'images/p1.jpg', 'images/p2.jpg'),
(6, 'Recognizing and Addressing Online Predators\r\nStay vigilant and protect your child from online predators. This campaign educates parents on the warning signs of predatory behavior and how to respond effectively. Gain insights into creating a secure digital environment and open communication channels with your children about their online experiences.\r\n\r\n', 'images/p5.jpg', 'images/p3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(8) NOT NULL,
  `city` varchar(200) NOT NULL,
  `subscription` int(11) NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `password`, `city`, `subscription`, `usertype`) VALUES
(1, 'susu', 'susu@gmail.com', '12345', 'Yangon', 1, 0),
(2, 'Admin', 'admin@smc.com', '12345', 'Yangon', 1, 1),
(3, 'Kyaw', 'kyaw@gmail.com', '12345', 'Yangon', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `publishdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `title`, `content`, `image`, `publishdate`) VALUES
(6, ' Phishing Scams: How to Recognize and Avoid Them', 'Phishing scams are on the rise, targeting individuals through emails, text messages, and even phone calls. These scams often appear to be from legitimate sources, such as banks or well-known companies, tricking recipients into providing personal information. To protect yourself:\r\n\r\nAlways verify the sender\'s email address.\r\nAvoid clicking on links or downloading attachments from unknown sources.\r\nUse multi-factor authentication to secure your accounts.', '1.jpg', '2024-07-22 16:53:24'),
(7, 'The Importance of Strong Passwords', 'Creating strong, unique passwords is one of the simplest yet most effective ways to secure your online accounts. Avoid using easily guessable information such as birthdays or common words. Instead:\r\n\r\nUse a mix of letters, numbers, and special characters.\r\nChange your passwords regularly.\r\nConsider using a password manager to keep track of your passwords securely.', '2.jpg', '2024-07-22 16:54:02'),
(8, 'Protecting Your Children Online', 'Children are increasingly exposed to the internet at a young age, making it crucial for parents to ensure their safety online. Here are some tips:\r\n\r\nEducate your children about the dangers of sharing personal information.\r\nUse parental controls to monitor and limit their internet usage.\r\nEncourage open communication so they feel comfortable reporting any suspicious activity or encounters.', '3.jpg', '2024-07-22 16:54:30'),
(9, ' Staying Safe on Social Media', 'Social media platforms are a popular target for cybercriminals looking to exploit personal information. To stay safe:\r\n\r\nAdjust your privacy settings to limit who can see your posts and personal information.\r\nBe cautious about accepting friend requests from people you do not know.\r\nAvoid sharing your location and other sensitive details in your posts.', '4.jpg', '2024-07-22 16:55:01'),
(10, 'Securing Your Home Network', 'With more devices connected to home networks than ever before, it\'s essential to secure your network against potential threats. Here are some steps to take:\r\n\r\nChange the default username and password of your router.\r\nUse a strong, unique password for your Wi-Fi network.\r\nEnable network encryption (WPA3 is the most secure option).\r\nRegularly update your router\'s firmware to patch any vulnerabilities.', '5.jpg', '2024-07-22 16:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `info`, `createdat`) VALUES
(3, 'Anonymous Helpline', 'Need assistance or advice? Connect with our anonymous helpline for support regarding online challenges. ', 'Helpline: 1-800-123-4567\r\n\r\nEmail: help@onlinesafety.org', '2024-06-28 03:45:41'),
(4, 'Cyber Bully Work shop', 'Join our interactive workshops to learn about online safety and responsible social media use. ', 'Date: November 15, 2024\r\n\r\nLocation: Virtual Event', '2024-06-28 03:47:19'),
(5, 'Parental Controls Guide', 'A comprehensive guide to setting up parental controls on various devices to protect your children online.', 'Download the guide from: www.onlinesafety.org/parental-controls', '2024-07-22 17:03:04'),
(6, 'Online Safety Training', 'Free online safety training sessions for parents, teachers, and children to understand the basics of internet safety.', 'Next session: August 10, 2024. Register at: www.onlinesafety.org/training', '2024-07-22 17:04:59'),
(7, 'Safe Browsing Tools', 'Access a list of recommended safe browsing tools and extensions to enhance your online security.', 'Visit: www.onlinesafety.org/tools', '2024-07-22 17:05:59'),
(8, 'Digital Footprint Awareness', 'Learn about the importance of managing your digital footprint and tips to keep your online presence secure.', 'Webinar on: September 5, 2024. Sign up at: www.onlinesafety.org/webinar', '2024-07-22 17:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `socialmediaapps`
--

CREATE TABLE `socialmediaapps` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `privacylink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `socialmediaapps`
--

INSERT INTO `socialmediaapps` (`id`, `name`, `logo`, `link`, `privacylink`) VALUES
(4, 'Facebook', 'facebook.jpg', 'https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F', 'https://www.facebook.com/help/325807937506242'),
(5, 'Youtube', 'youtube.jpg', 'https://www.youtube.com/account', 'https://support.google.com/youtube/community?hl=en&sjid=9050740295333084296-AP'),
(6, 'Tiktok', 'tiktok.jpg', 'https://www.tiktok.com/login', 'https://www.tiktok.com/safety/en/account-settings'),
(7, 'Instagram', 'instagram.jpg', 'https://www.instagram.com/accounts/login/?hl=en', 'https://help.instagram.com/131112217071354'),
(8, 'Twitter', 'twitter.jpg', 'https://twitter.com/twitt_login?lang=en', 'https://twitter.com/settings?lang=en'),
(9, 'Snapchat', 'snapchat.jpg', 'https://accounts.snapchat.com/accounts/v2/login', 'https://help.snapchat.com/hc/en-us/sections/5685896707220-Settings'),
(11, 'Telegram', 'telegram.jpg', 'https://web.telegram.org/a/', 'https://core.telegram.org/blackberry/settings');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howparenthelp`
--
ALTER TABLE `howparenthelp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `howparenthelp`
--
ALTER TABLE `howparenthelp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
