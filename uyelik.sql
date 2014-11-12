-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Eyl 2014, 01:16:50
-- Sunucu sürümü: 5.6.20
-- PHP Sürümü: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `uyelik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE IF NOT EXISTS `uye` (
`uye_id` int(11) NOT NULL,
  `uye_onay` int(11) NOT NULL,
  `uye_kod` varchar(225) COLLATE utf8_bin NOT NULL,
  `uye_adi` varchar(225) COLLATE utf8_bin NOT NULL,
  `uye_soyadi` varchar(225) COLLATE utf8_bin NOT NULL,
  `uye_kullanici_adi` varchar(225) COLLATE utf8_bin NOT NULL,
  `uye_sifre` varchar(225) COLLATE utf8_bin NOT NULL,
  `uye_dogum_tarihi` varchar(225) COLLATE utf8_bin NOT NULL,
  `uye_email` varchar(225) COLLATE utf8_bin NOT NULL,
  `uye_aktivasyon_kodu` varchar(225) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
 ADD PRIMARY KEY (`uye_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `uye`
--
ALTER TABLE `uye`
MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
