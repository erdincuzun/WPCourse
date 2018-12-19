-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Ara 2015, 11:00:16
-- Sunucu sürümü: 5.6.16
-- PHP Sürümü: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `telefonrehberi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolum`
--

CREATE TABLE IF NOT EXISTS `bolum` (
  `bolum_id` int(11) NOT NULL AUTO_INCREMENT,
  `bolum_adi` varchar(20) NOT NULL,
  PRIMARY KEY (`bolum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `bolum`
--

INSERT INTO `bolum` (`bolum_id`, `bolum_adi`) VALUES
(1, 'Bilgisayar'),
(2, 'Muhasebe'),
(3, 'Halkla İlişkiler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
  `kul_id` int(11) NOT NULL AUTO_INCREMENT,
  `kul_adi` varchar(20) NOT NULL,
  `sifre` varchar(20) NOT NULL,
  `rol` varchar(1) NOT NULL,
  PRIMARY KEY (`kul_id`),
  UNIQUE KEY `kul_adi_UNIQUE` (`kul_adi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kul_id`, `kul_adi`, `sifre`, `rol`) VALUES
(1, 'admin', '123', 'A'),
(2, 'user', '123', 'G'),
(3, 'demo', '123', 'D');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rehber`
--

CREATE TABLE IF NOT EXISTS `rehber` (
  `rehber_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(20) NOT NULL,
  `soyad` varchar(20) NOT NULL,
  `bolum_id` int(11) NOT NULL,
  `silindimi` tinyint(1) NOT NULL DEFAULT '0',
  `yaratma_tarihi` datetime NOT NULL,
  `degistirme_tarihi` datetime NOT NULL,
  PRIMARY KEY (`rehber_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=23 ;

--
-- Tablo döküm verisi `rehber`
--

INSERT INTO `rehber` (`rehber_id`, `ad`, `soyad`, `bolum_id`, `silindimi`, `yaratma_tarihi`, `degistirme_tarihi`) VALUES
(4, 'Test', 'Test', 1, 1, '0000-00-00 00:00:00', '2015-05-29 19:20:29'),
(5, 'demo', 'test', 2, 0, '2014-05-22 11:29:08', '2015-05-29 19:20:38'),
(7, 'Deneme', 'Deneme', 0, 0, '2014-12-12 19:03:43', '0000-00-00 00:00:00'),
(8, 'Deneme2 fdfg', 'Deneme2', 1, 1, '2014-12-12 19:06:07', '2015-05-29 19:23:47'),
(10, '767', '98798', 1, 0, '2014-12-12 19:17:22', '0000-00-00 00:00:00'),
(11, '7677676hgh', 'hjjhkjhkj', 1, 0, '2014-12-12 19:19:57', '0000-00-00 00:00:00'),
(13, '65676768', '989809', 1, 0, '2014-12-12 20:20:02', '0000-00-00 00:00:00'),
(14, '65676768', '989809', 1, 0, '2014-12-12 20:20:29', '0000-00-00 00:00:00'),
(15, 'Ali', 'Gültekin', 1, 0, '2014-12-12 20:32:11', '0000-00-00 00:00:00'),
(17, 'deneme', 'gfdhgfh', 2, 0, '2015-05-29 19:20:05', '0000-00-00 00:00:00'),
(18, 'Deneme', 'MySQLi', 1, 0, '2015-12-11 10:18:51', '0000-00-00 00:00:00'),
(19, '', '', 1, 0, '2015-12-11 10:27:08', '0000-00-00 00:00:00'),
(20, 'Form', 'POST', 1, 0, '2015-12-11 10:31:58', '0000-00-00 00:00:00'),
(21, 'BoÅ?', '', 1, 0, '2015-12-11 10:32:22', '0000-00-00 00:00:00'),
(22, 'rfgfgf', 'hghgf', 1, 0, '2015-12-11 10:41:53', '0000-00-00 00:00:00');

--
-- Tetikleyiciler `rehber`
--
DROP TRIGGER IF EXISTS `guncelleme_trigger`;
DELIMITER //
CREATE TRIGGER `guncelleme_trigger` BEFORE UPDATE ON `rehber`
 FOR EACH ROW SET New.degistirme_tarihi = NOW()
//
DELIMITER ;
DROP TRIGGER IF EXISTS `yaratma_tarihi_trigger`;
DELIMITER //
CREATE TRIGGER `yaratma_tarihi_trigger` BEFORE INSERT ON `rehber`
 FOR EACH ROW SET NEW.yaratma_tarihi = NOW()
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `telefon`
--

CREATE TABLE IF NOT EXISTS `telefon` (
  `telefon_id` int(11) NOT NULL AUTO_INCREMENT,
  `telefon` varchar(15) NOT NULL,
  `rehber_id` int(11) NOT NULL,
  PRIMARY KEY (`telefon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `telefon`
--

INSERT INTO `telefon` (`telefon_id`, `telefon`, `rehber_id`) VALUES
(1, '04535', 5),
(2, '5456', 5),
(3, '3565', 8),
(4, '34354', 8),
(5, '34243', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
