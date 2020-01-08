-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2020 at 10:01 AM
-- Server version: 5.7.26
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javaxcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product_jenis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `product_jenis`;
CREATE TABLE IF NOT EXISTS `product_jenis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
