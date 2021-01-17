-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 17 Oca 2021, 14:37:36
-- Sunucu sürümü: 5.7.24
-- PHP Sürümü: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pb-cv`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `about` varchar(300) NOT NULL,
  `skill` varchar(150) NOT NULL,
  `projects` text NOT NULL,
  `hobby` text NOT NULL,
  `github` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `website` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `cv`
--

INSERT INTO `cv` (`id`, `fname`, `lname`, `title`, `description`, `keywords`, `author`, `about`, `skill`, `projects`, `hobby`, `github`, `linkedin`, `email`, `phone`, `website`, `address`) VALUES
(1, 'Cevdet Tamer', 'Güven', 'Kişisel CV', 'Kişisel CV açıklama', 'php, html, css', 'cevdet tamer güven', 'hakkımda deneme yazısı', 'php', 'proje1', 'Burası hobilerim kısmıBurası hobilerim kısmıBurası hobilerim kısmıBurası hobilerim kısmıBurası hobilerim kısmıBurası hobilerim kısmıBurası hobilerim kısmıBurası hobilerim kısmı', 'cevdettamer', 'cevdettamer', 'ctamerguven@gmail.com', '12332321223', 'www.tamerguven.com', 'namık kemal mah Seyhan/ADANA');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `schoolname` varchar(100) NOT NULL,
  `edutime` varchar(50) NOT NULL,
  `edutitle` varchar(150) NOT NULL,
  `edudes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `education`
--

INSERT INTO `education` (`id`, `schoolname`, `edutime`, `edutitle`, `edudes`) VALUES
(1, 'İskenderun Teknik Üniversitesi', '2012-2017', 'Bilgisayar Mühendisliği', 'ortalama 2.72'),
(2, 'Mersin Üniversitesi', '2018-2020', 'Bilgisayar mühendisliği yüksek lisans', 'ortalama 90.63');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `experiments`
--

CREATE TABLE `experiments` (
  `id` int(11) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `expertime` varchar(100) NOT NULL,
  `expertitle` varchar(100) NOT NULL,
  `experdes` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `experiments`
--

INSERT INTO `experiments` (`id`, `companyname`, `expertime`, `expertitle`, `experdes`) VALUES
(1, 'Megateks Makine', '2017-2019', 'Web developer', 'www.megateksmakine.com sitesi yapıldı'),
(2, 'BOTAŞ Ceyhan', '2016-2017', 'Stajyer bilgisayar mühendisi', 'Bilgi işlem bürosunda bakım, onarım, yazılım destek elemanı.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `skillname` varchar(100) NOT NULL,
  `skillrate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `skill`
--

INSERT INTO `skill` (`id`, `skillname`, `skillrate`) VALUES
(1, 'PHP', '80'),
(2, 'HTML', '70'),
(3, 'Python', '50');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `experiments`
--
ALTER TABLE `experiments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `experiments`
--
ALTER TABLE `experiments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
