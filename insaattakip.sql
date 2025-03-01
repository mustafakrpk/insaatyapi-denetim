-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 May 2023, 14:31:50
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `insaattakip`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `insaatkayit`
--

CREATE TABLE `insaatkayit` (
  `id` int(11) NOT NULL,
  `adSoyad` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `insaatAdi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `mailAdres` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `malzemeler` varchar(1500) COLLATE utf8_turkish_ci NOT NULL,
  `sirketAdi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `telefonNo` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `baslangicTarih` date NOT NULL,
  `bitisTarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `insaatkayit`
--

INSERT INTO `insaatkayit` (`id`, `adSoyad`, `insaatAdi`, `mailAdres`, `malzemeler`, `sirketAdi`, `telefonNo`, `baslangicTarih`, `bitisTarih`) VALUES
(5, 'Mustafa Başdemir', 'AVM İnşaatı', 'info@basdemir.com', 'Çimento,Demir,tahta', 'Basdemir İnsaat', '123456798', '2023-05-07', '2023-05-01'),
(6, 'Ali Kaya', 'Okul Bakım Onarım', 'ali.kaya@gmail.com', 'Laminant parke, Fayans , Mermer , Boya ,Alçı', 'Kaya Yapı ', '91122544554', '2023-05-07', '2023-05-30'),
(7, 'Sıla Kırık', 'Somali Hastane İnşaatı ', 'sila@info.com', 'Tuğla, betonarme çubukları, çimento, alçı levhaları, seramik karo, cam elyafı takviyeli plastik, izolasyon köpüğü, ahşap plakaları, çelik profil, mermer plakaları, çatı kaplama malzemeleri, su yalıtım malzemeleri, elektrik tesisat malzemeleri, su tesisat malzemeleri, parke taş, fayans, granit, PVC borular, metal levhalar, duvar kağıtları', 'Çiçek İnsaat', '5052586969', '2023-05-10', '2026-05-12'),
(12, 'Muhsin Ali Cankaz', 'Üniversite İnşaatı', 'muhsinali@outlook.com', 'Çimento, Kum, Çakıl, Beton demiri, Tuğla, Blok beton, Izocam, Su yalıtımı malzemeleri, Mantolama levhaları, Pencere camları, Kapılar, Yalıtım köpüğü, Alçıpan, Duvar kağıdı, Boya, Sıva, Elektrik kabloları, Prizler ve anahtarlar, Aydınlatma armatürleri, Yangın söndürme cihazları, Güvenlik kamerası, Alarm sistemleri, Asansör, Merdiven basamakları, Mermer, Granit, Seramik, Laminat parke, PVC kaplama, Çatı izolasyon malzemeleri, Ahşap kereste, Çatı kiremitleri, Çatı sacı, Oluklu sac, Dekoratif taşlar, Prefabrik yapı elemanları, Betonarme perdeler, Çelik çatı kirişleri, Yalıtımlı camlar, Isı yalıtımı için köpük dolgu, Döşeme kaplamaları, Duvar panelleri, Dış cephe kaplama malzemeleri, Kaba sıva, İnce sıva, Sıva altı astarı, Hazır beton, Su boruları, Kanalizasyon boruları, Havalandırma kanalları.', 'Hülagü İnşaat', '1458569474', '2023-05-01', '2027-01-11');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `insaatkayit`
--
ALTER TABLE `insaatkayit`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `insaatkayit`
--
ALTER TABLE `insaatkayit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
