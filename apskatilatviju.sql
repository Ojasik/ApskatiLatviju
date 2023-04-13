-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 14, 2023 at 12:57 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apskatilatviju`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktualitates`
--

CREATE TABLE `aktualitates` (
  `Aktualitates_id` int(11) NOT NULL,
  `Attels_URL` varchar(100) COLLATE utf8_latvian_ci NOT NULL,
  `Virsraksts` varchar(100) COLLATE utf8_latvian_ci NOT NULL,
  `Aktualitate` varchar(1000) COLLATE utf8_latvian_ci NOT NULL,
  `Datums` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `aktualitates`
--

INSERT INTO `aktualitates` (`Aktualitates_id`, `Attels_URL`, `Virsraksts`, `Aktualitate`, `Datums`) VALUES
(1, 'https://www.bing.com/images/blob?bcid=qD6JuPaeDHcFRA', '39 saimniecības saņem “Zaļo sertifikātu”', '30. novembrī vides kvalitātes zīmi “Zaļais sertifikāts” saņems 39 lauku tūrisma uzņēmumi. Viņus sveiks sertifikāta komisijas pārstāvji, klātesot ap 100 lauku tūrisma rudens semināra dalībniekiem viesnīcā “Zeit”, Līgatnē. “Zaļais sertifikāts” ir vides kvalitātes zīme lauku tūrisma saimniecībām, kurās ievēro zaļas saimniekošanas principus, saudzējot resursus, veidojot videi un vietējai kopienai draudzīgu, viesiem ērtu un patīkamu tūrisma piedāvājumu. \"Zaļā sertifikāta\" vērtēšana un attīstība notie', '2023-04-11'),
(2, 'https://www.bing.com/images/blob?bcid=qJGOocxdNXcFHw', 'Pielaiko lauku dzīvesveida modeli!', 'Vērojot visas sabiedrības pieaugošo interesi par dzīvi veselīgā un dabiskā vidē, ir radies jauns lauku iepazīšanas tūrisma veids, kas ļauj ikvienam pilsētniekam „pielaikot” lauku dzīves modeli, apsverot dzīvesveida maiņu, vai arī vienkārši pavadīt dažas dienas „kā lauciniekam”. Tas ir stāsts par dzīves stilu, kas maina ierastos priekšstatus par laukiem un rāda lauku vidi, kur apvienojas tradicionālās un mūsdienu vērtības.', '2023-04-10'),
(3, 'https://www.bing.com/images/blob?bcid=qNzOFrkIzHcFcQ', 'Pludmales akvaparks noslēgs sezonu!', 'Ventspils Pludmales akvaparks apmeklētājiem būs atvērts vēl līdz svētdienai, 28.augustam, kas būs akvaparka pēdējā darba diena šajā vasaras sezonā. Šī ir bijusi Pludmales akvaparka 20. sezona, un šosezon Pludmales akvaparku apmeklējuši vairāk kā 25 000 atpūtnieku. Atpūtnieku skaits ir bijis līdzīgs kā iepriekšējās sezonās. No visiem apmeklētājiem puse ir bijuši pieaugušie, bet puse jaunieši un bērni.', '2023-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `lietotaji`
--

CREATE TABLE `lietotaji` (
  `Lietotaji_id` int(11) NOT NULL,
  `Lietotajvards` varchar(100) COLLATE utf8_latvian_ci NOT NULL,
  `Epasts` varchar(100) COLLATE utf8_latvian_ci NOT NULL,
  `Parole` varchar(100) COLLATE utf8_latvian_ci DEFAULT NULL,
  `Talrunis` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `lietotaji`
--

INSERT INTO `lietotaji` (`Lietotaji_id`, `Lietotajvards`, `Epasts`, `Parole`, `Talrunis`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 23456751);

-- --------------------------------------------------------

--
-- Table structure for table `piedavajumi`
--

CREATE TABLE `piedavajumi` (
  `Piedavajums_id` int(11) NOT NULL,
  `Attels` varchar(400) COLLATE utf8_latvian_ci NOT NULL,
  `Nosaukums` varchar(100) COLLATE utf8_latvian_ci NOT NULL,
  `Cena` varchar(10) COLLATE utf8_latvian_ci NOT NULL,
  `Vieta1` varchar(50) COLLATE utf8_latvian_ci NOT NULL,
  `Vieta2` varchar(50) COLLATE utf8_latvian_ci NOT NULL,
  `Datums` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `piedavajumi`
--

INSERT INTO `piedavajumi` (`Piedavajums_id`, `Attels`, `Nosaukums`, `Cena`, `Vieta1`, `Vieta2`, `Datums`) VALUES
(1, 'https://www.bing.com/images/blob?bcid=qJGOocxdNXcFHw', 'Ventspils', '€125.00', '1. Koncertzāle LATVIJA\r\n', '2. Livonijas ordeņa pils', '2023-04-11'),
(2, 'https://www.bing.com/images/blob?bcid=qKMurkEspHcF9w', 'Rēzekne', '€150.00', '1. Sienu gleznojumi', '2. Kultūras darbinieku parks', '2023-04-15'),
(3, 'https://cdn77.orangesmile.com/common/img_cities_original/liepajas-2114-4.jpg', 'Liepāja', '€200.00', '1. Romas dārzs', '2. Pludmale', '2023-04-27'),
(4, 'https://www.bing.com/images/blob?bcid=qHh4BzmtLHcFPQ', 'Tērvete', '€175.00', '1. Tērvetes koka pils', '2. Annas Briegaderes muzejs', '2023-04-18'),
(5, 'https://www.tripsavvy.com/thmb/tuHPjqCivnl2zeiwwEdwoXWqlAA=/3865x2576/filters:fill(auto,1)/latvia--riga--cityscape-with-cathedral--castle-and-vansu-bridge-709125595-5a819bbdfa6bcc0037a9c3da.jpg', 'Rīga', '€225.00', '1. Melngalvju nams', '2. Rīgas Centrāltirgus', '2023-04-20'),
(6, 'https://www.bing.com/images/blob?bcid=qMrZ1mQTRHcF8Q', 'Kuldīga', '€130.00', '1. Ventas Rumba', '2. Kuldīgas novada muzejs', '2023-04-29'),
(8, 'https://www.bing.com/images/blob?bcid=qHDCVLkAkXcFkw', 'Jēkabpils', '€135.00', '1. Krustpils pils', '2. Jēkabpils Vēstures muzejs', '2023-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `pieteikums`
--

CREATE TABLE `pieteikums` (
  `Pieteikums_id` int(11) NOT NULL,
  `Vards` varchar(100) COLLATE utf8_latvian_ci NOT NULL,
  `Uzvards` varchar(100) COLLATE utf8_latvian_ci NOT NULL,
  `Dzim_dati` varchar(20) COLLATE utf8_latvian_ci NOT NULL,
  `Epasts` varchar(100) COLLATE utf8_latvian_ci NOT NULL,
  `Talrunis` int(15) NOT NULL,
  `Celojums` varchar(100) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `pieteikums`
--

INSERT INTO `pieteikums` (`Pieteikums_id`, `Vards`, `Uzvards`, `Dzim_dati`, `Epasts`, `Talrunis`, `Celojums`) VALUES
(15, 'Marks', 'Meškis', '02.03.2005', 'meshkis.mark@gmail.com', 20399584, 'Ventspils');

-- --------------------------------------------------------

--
-- Table structure for table `popular`
--

CREATE TABLE `popular` (
  `Popular_id` int(11) NOT NULL,
  `Attels` varchar(100) COLLATE utf8_latvian_ci NOT NULL,
  `Nosaukums` varchar(100) COLLATE utf8_latvian_ci NOT NULL,
  `Cena` varchar(10) COLLATE utf8_latvian_ci NOT NULL,
  `Vieta1` varchar(50) COLLATE utf8_latvian_ci NOT NULL,
  `Vieta2` varchar(50) COLLATE utf8_latvian_ci NOT NULL,
  `Datums` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `popular`
--

INSERT INTO `popular` (`Popular_id`, `Attels`, `Nosaukums`, `Cena`, `Vieta1`, `Vieta2`, `Datums`) VALUES
(1, 'https://www.bing.com/images/blob?bcid=qJGOocxdNXcFHw', 'Ventspils', '€125.00', '1. Koncertzāle LATVIJA', '2. Livonijas ordeņa pils', '2023-04-11'),
(2, 'https://www.bing.com/images/blob?bcid=qKMurkEspHcF9w', 'Rēzekne', '€150.00', '1. Sienu gleznojumi', '2. Kultūras darbinieku parks', '2023-04-15'),
(3, 'https://cdn77.orangesmile.com/common/img_cities_original/liepajas-2114-4.jpg', 'Liepāja', '€200.00', '1. Romas dārzs', '2. Pludmale', '2023-04-27'),
(4, 'https://www.bing.com/images/blob?bcid=qHh4BzmtLHcFPQ', 'Tērvete', '€175.00', '1. Tērvetes koka pils', '2. Annas Briegaderes muzejs', '2023-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Status_id` int(11) NOT NULL,
  `Status` varchar(30) COLLATE utf8_latvian_ci NOT NULL,
  `ID_Pieteikums` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktualitates`
--
ALTER TABLE `aktualitates`
  ADD PRIMARY KEY (`Aktualitates_id`);

--
-- Indexes for table `lietotaji`
--
ALTER TABLE `lietotaji`
  ADD PRIMARY KEY (`Lietotaji_id`);

--
-- Indexes for table `piedavajumi`
--
ALTER TABLE `piedavajumi`
  ADD PRIMARY KEY (`Piedavajums_id`);

--
-- Indexes for table `pieteikums`
--
ALTER TABLE `pieteikums`
  ADD PRIMARY KEY (`Pieteikums_id`);

--
-- Indexes for table `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`Popular_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktualitates`
--
ALTER TABLE `aktualitates`
  MODIFY `Aktualitates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lietotaji`
--
ALTER TABLE `lietotaji`
  MODIFY `Lietotaji_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `piedavajumi`
--
ALTER TABLE `piedavajumi`
  MODIFY `Piedavajums_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pieteikums`
--
ALTER TABLE `pieteikums`
  MODIFY `Pieteikums_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `popular`
--
ALTER TABLE `popular`
  MODIFY `Popular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
