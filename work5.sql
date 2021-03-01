-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Mar 2021, 20:52:19
-- Sunucu sürümü: 10.4.13-MariaDB
-- PHP Sürümü: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `work5`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `content` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `content`, `description`, `categoryId`, `categoryName`) VALUES
(4, 'Fem-5', 88.48, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', 3, 'Category 3'),
(5, 'Roundfix2', 45.45, ' Ipsum is simply dummy text of the printing and typesetting indust', ' Ipsum is simply dummy text of the printing and typesetting indust', 4, 'Category 4'),
(6, 'ZAS-TEO', 565.45, 'lklk', 'a2bb00d01df38f86762d36fb5aece0b2', 0, 'Category 1'),
(12, 'Fem-Saw', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', 0, 'Category 3'),
(13, 'On Cloud Nine ', 565.45, 'Sociosqu facilisis duis ', 'Lorem Ipsum is simply dummy text of the printing and typesetting indu', 0, 'category 5'),
(16, 'ZAS-TEO', 565.45, 'Sociosqu facilisis duis aaa', 'Sociosqu facilisis duis sdser', 3, 'Category 3'),
(17, 'On Cloud Nine Pillow5', 56.45, 'Sociosqu facilisis duis ', 'Sociosqu facilisis duis sdser', 2, 'Category 2');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
