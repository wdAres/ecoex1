-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 01:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makemybrand`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `description`, `status`) VALUES
(1, 'Dynamic banner heading put by db.', 'dynamic content manage by admin stored in DB.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `logo` text NOT NULL,
  `banner` text NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `logo`, `banner`, `date`, `status`) VALUES
(4, 'Blogs 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque provident deleniti culpa nisi dolore odio eveniet ratione molestias, sint incidunt.', 'uploads/1652126918blog-detail.jpg', 'uploads/1652126918certification.png', '2022-05-10 01:38:38', 1),
(5, 'Blogs 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque provident deleniti culpa nisi dolore odio eveniet ratione molestias, sint incidunt.', 'uploads/1652127005blog-img.png', 'uploads/1652126918certification.png', '2022-05-10 01:38:38', 1),
(6, 'Blogs 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque provident deleniti culpa nisi dolore odio eveniet ratione molestias, sint incidunt.', 'uploads/1652127054dlee.png', 'uploads/1652126918certification.png', '2022-05-10 01:38:38', 1),
(7, 'Blogs 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque provident deleniti culpa nisi dolore odio eveniet ratione molestias, sint incidunt.', 'uploads/1652126918blog-detail.jpg', 'uploads/1652126918certification.png', '2022-05-10 01:38:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `title`, `type`, `name`) VALUES
(1, 'Paints & More', 'goods', 'class 2'),
(2, 'Cosmetics and Cleaning Substance', 'services', 'class 3');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `logo` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `logo`, `status`) VALUES
(3, 'fb', 'uploads/1652129845Facebook.png', 1),
(4, 'amz', 'uploads/1652129859Amazon.png', 1),
(5, 'asus', 'uploads/1652129874Asus.png', 1),
(6, 'brand', 'uploads/1652129884Google.png', 1),
(7, 'lenevo', 'uploads/1652129971xiaomi.png', 1),
(8, 'xiaomi', 'uploads/1652129986lenovo.png', 1),
(9, 'amazone', 'uploads/1652130071Amazon.png', 1),
(10, 'netflix', 'uploads/1652130377Netfliz.png', 1),
(11, 'certificate', 'uploads/1652130454certification.png', 1),
(12, 'brand', 'uploads/1652132891Asus.png', 1),
(13, 'brand alt', 'uploads/1652132934samsung.png', 1),
(14, 'samsung', 'uploads/1652130560samsung.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `active`, `date`) VALUES
(2, 'question one ?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident numquam magnam dicta illum consequatur id laudantium necessitatibus excepturi accusantium, in sit. Exercitationem repellendus deserunt nam? Et vitae ab voluptas sequi.Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident numquam magnam dicta illum consequatur id laudantium necessitatibus excepturi accusantium, in sit. Exercitationem repellendus deserunt nam? Et vitae ab voluptas sequi.', 1, '2022-05-10 00:56:03'),
(3, 'question 2 ?', 'kssndkfkklsdjfljsdlkfjasdfjasldkf', 1, '2022-05-10 01:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `description`, `date`, `status`) VALUES
(1, 'Get free search report for goods covered under class 2 for your brand name.', 'dynamic content manage by admin stored in DB.', '2022-05-09 18:06:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `dob` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `message` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `dob`, `phone`, `email`, `message`, `date`) VALUES
(3, 'abhi', '1999-03-04', '8767678776', '7678@mail.com', 'iuhkjhjkhkjh khkhkhjkhkj', '2022-05-10 04:42:05'),
(6, 'abhishek singh', '1998-03-29', '7232837223', 'abhishek@gmail.com', 'message testing', '2022-05-10 04:46:56'),
(7, 'vicky', '1999-08-20', '2392839823', 'vk83@gmail.com', 'testing message box', '2022-05-10 04:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `roadmap`
--

CREATE TABLE `roadmap` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `level_no` text NOT NULL,
  `sr_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roadmap`
--

INSERT INTO `roadmap` (`id`, `title`, `level_no`, `sr_no`) VALUES
(1, 'Brand Name Search', '1', '1'),
(2, 'Available', '2', '1'),
(4, 'Not Available', '2', '2'),
(5, 'Filling of Trademark', '3', '1'),
(6, 'Objected', '4', '1'),
(7, 'Reply Filling', '5', '1'),
(8, 'No Reply', '5', '2'),
(9, 'Hearing', '6', '1'),
(10, 'Accepted & Advertise', '7', '1'),
(11, 'Refuse', '7', '2'),
(12, 'Register', '8', '1'),
(13, 'Opposed', '8', '2'),
(14, 'Counter Statement', '9', '1'),
(15, 'No Reply', '9', '2'),
(16, 'Evidence Fillings (Rule 45,46,47)', '10', '1'),
(17, 'Abandoned', '10', '2'),
(18, 'Court Hearings', '11', '1'),
(19, 'Registered', '12', '1'),
(20, 'Refuse', '12', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `active`) VALUES
(1, 'admin', 'admin1234', 1),
(2, 'admin2', 'admin1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`id`, `title`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roadmap`
--
ALTER TABLE `roadmap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roadmap`
--
ALTER TABLE `roadmap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
