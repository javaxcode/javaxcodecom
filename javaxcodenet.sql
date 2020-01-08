-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2020 at 03:54 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javaxcodenet`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `status` set('0','1') NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `email`, `password`, `name`, `telp`, `alamat`, `kota`, `provinsi`, `status`, `created_at`, `updated_at`) VALUES
(9, 'masrois46@gmail.com', '$2y$10$Ll1/9C4omKbdGrL14KGuIuk73nDuFntINylOu/OFSYymBpAsI9VVO', '', '', '', '', '', '', 1578494916, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_product_jenis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_product_jenis`, `nama`, `harga`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hemat', 10900, '<ul>\r\n                                            <li>500 MB Disk Space</li>\r\n                                            <li>Unlimited Bandwidth</li>\r\n                                            <li>Unlimited Database</li>\r\n                                            <li>1 Addon Domain</li>\r\n                                            <li>Instan Backup</li>\r\n                                            <li>Unlimited SSL Gratis Selamanya</li>\r\n                                        </ul>', 1577090669, 0),
(2, 1, 'Basic', 41900, '<ul>\r\n                                            <li>Unlimited Disk Space</li>\r\n                                            <li>Unlimited Bandwidth</li>\r\n                                            <li>Unlimited POP3 Email</li>\r\n                                            <li>Unlimited Database</li>\r\n                                            <li>10 Addon Domain</li>\r\n                                            <li>Instan Backup</li>\r\n                                            <li>Domain Gratis</li>\r\n                                            <li>Unlimited SSL Gratis Selamanya</li>\r\n                                        </ul>', 1577090669, 0),
(3, 1, 'Premium', 37900, '<ul>\r\n                                            <li>Unlimited Disk Space</li>\r\n                                            <li>Unlimited Bandwidth</li>\r\n                                            <li>Unlimited POP3 Email</li>\r\n                                            <li>Unlimited Database</li>\r\n                                            <li>Unlimited Addon Domain</li>\r\n                                            <li>Instan Backup</li>\r\n                                            <li>Domain Gratis</li>\r\n                                            <li>Unlimited SSL Gratis Selamanya</li>\r\n                                            <li>SpamAsassin Mail Protection</li>\r\n                                        </ul>', 1577090669, 0),
(4, 1, 'Ultimate', 93900, '<ul>\r\n                                            <li>Unlimited Disk Space</li>\r\n                                            <li>Unlimited Bandwidth</li>\r\n                                            <li>Unlimited POP3 Email</li>\r\n                                            <li>Unlimited Database</li>\r\n                                            <li>Unlimited Addon Domain</li>\r\n                                            <li>Magic Auto Backup & Restore</li>\r\n                                            <li>Domain Gratis</li>\r\n                                            <li>Unlimited SSL Gratis Selamanya</li>\r\n                                            <li>Prioritas Layanan Support</li>\r\n                                            <li>SpamAsassin Mail Protection</li>\r\n                                        </ul>', 1577090669, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_jenis`
--

CREATE TABLE `product_jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_jenis`
--

INSERT INTO `product_jenis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Hosting', 1577090669, 0),
(2, 'Domain', 1577090669, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_image` varchar(128) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_role` int(11) NOT NULL,
  `user_active` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_image`, `user_password`, `user_role`, `user_active`, `created_at`, `updated_at`) VALUES
(2, 'Abdul Fani', 'afsablenk@gmail.com', 'default.jpg', '$2y$10$QwGns/OAE6EWs95oLr8YqeeCsL.DwTR.ci3jVAwWGLcW2T93rmr0W', 2, 1, 1575775294, 0),
(3, 'Rois', 'masrois46@gmail.com', 'default.jpg', '$2y$10$QwGns/OAE6EWs95oLr8YqeeCsL.DwTR.ci3jVAwWGLcW2T93rmr0W', 2, 1, 1575827730, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Office'),
(3, 'Accounting'),
(4, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Direktur'),
(3, 'Administrasi'),
(4, 'Kepala'),
(5, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `model_menu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `model_menu`) VALUES
(1, 1, 'Dashboard', 'admin', 'zmdi zmdi-view-dashboard', 1, 1),
(2, 2, 'Proyek', 'user', 'zmdi zmdi-invert-colors', 1, 2),
(3, 2, 'Maintenance', 'user/edit', 'zmdi zmdi-invert-colors', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_jenis`
--
ALTER TABLE `product_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_jenis`
--
ALTER TABLE `product_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
