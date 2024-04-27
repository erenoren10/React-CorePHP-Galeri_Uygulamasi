-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Nis 2024, 14:42:14
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gallery_pinhole`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aaa`
--

CREATE TABLE `aaa` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `metin` text DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adana`
--

CREATE TABLE `adana` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `metin` text DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(160) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `aciklama` varchar(255) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `url` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ID`, `baslik`, `anahtar`, `aciklama`, `telefon`, `mail`, `adres`, `fax`, `url`) VALUES
(1, 'Yönetim Paneli Uygulaması', 'yönetim paneli, admin panel, php ile yönetim paneli, react and php', 'Php ile yönetim paneli', '555-500-5050', 'test@hotmail.com', 'mahalle cadde', '5454545554548', 'http://localhost/gallery-project/reactpanel/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dogum`
--

CREATE TABLE `dogum` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `metin` text DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gaziantep`
--

CREATE TABLE `gaziantep` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `metin` text DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iskenderun`
--

CREATE TABLE `iskenderun` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `metin` text DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `tablo` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(11) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`ID`, `baslik`, `seflink`, `tablo`, `anahtar`, `description`, `durum`, `sirano`, `tarih`) VALUES
(10, 'Adana', 'adana', 'modul', NULL, NULL, 1, NULL, '2023-08-21'),
(11, 'doğum', 'dogum', 'modul', NULL, NULL, 1, NULL, '2023-08-21'),
(12, 'İskenderun', 'iskenderun', 'modul', NULL, NULL, 1, NULL, '2023-08-21'),
(13, 'Gaziantep', 'gaziantep', 'modul', NULL, NULL, 1, NULL, '2024-03-11'),
(14, 'aaa', 'aaa', 'modul', NULL, NULL, 1, NULL, '2024-03-11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `ID` int(11) NOT NULL,
  `adsoyad` varchar(120) DEFAULT NULL,
  `kullanici` varchar(100) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `mail` varchar(120) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `isim` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`ID`, `adsoyad`, `kullanici`, `sifre`, `mail`, `tarih`, `isim`) VALUES
(1, 'ileri ajans', 'admin', '24f0d2c90473b2bc949ad962e61d9bcb', 'test@hotmail.com', '2020-02-02', 'İleri AJANS');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `moduller`
--

CREATE TABLE `moduller` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `tablo` varchar(255) DEFAULT NULL,
  `durum` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `moduller`
--

INSERT INTO `moduller` (`ID`, `baslik`, `tablo`, `durum`, `tarih`) VALUES
(10, 'Adana', 'adana', 1, '2023-08-21'),
(11, 'doğum', 'dogum', 1, '2023-08-21'),
(12, 'İskenderun', 'iskenderun', 1, '2023-08-21'),
(13, 'Gaziantep', 'gaziantep', 1, '2024-03-11'),
(14, 'aaa', 'aaa', 1, '2024-03-11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ziyarettarayici`
--

CREATE TABLE `ziyarettarayici` (
  `ID` int(11) NOT NULL,
  `tarayici` varchar(50) DEFAULT NULL,
  `ziyaret` double NOT NULL,
  `hiz` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ziyarettarayici`
--

INSERT INTO `ziyarettarayici` (`ID`, `tarayici`, `ziyaret`, `hiz`) VALUES
(1, 'chrome', 1, NULL),
(2, 'explorer', 1, NULL),
(3, 'firefox', 1, NULL),
(4, 'diger', 1, NULL),
(5, 'sayfahizi', 4, '2.86');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aaa`
--
ALTER TABLE `aaa`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `adana`
--
ALTER TABLE `adana`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `dogum`
--
ALTER TABLE `dogum`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `gaziantep`
--
ALTER TABLE `gaziantep`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `iskenderun`
--
ALTER TABLE `iskenderun`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `moduller`
--
ALTER TABLE `moduller`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `ziyarettarayici`
--
ALTER TABLE `ziyarettarayici`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aaa`
--
ALTER TABLE `aaa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `adana`
--
ALTER TABLE `adana`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `dogum`
--
ALTER TABLE `dogum`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `gaziantep`
--
ALTER TABLE `gaziantep`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `iskenderun`
--
ALTER TABLE `iskenderun`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `moduller`
--
ALTER TABLE `moduller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Tablo için AUTO_INCREMENT değeri `ziyarettarayici`
--
ALTER TABLE `ziyarettarayici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
