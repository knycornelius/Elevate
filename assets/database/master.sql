-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 02:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elevate`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_accessory`
--

CREATE TABLE `e_accessory` (
  `id_item` varchar(25) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `disc_sd` date NOT NULL,
  `disc_ed` date NOT NULL,
  `sc1` varchar(25) NOT NULL,
  `sc2` varchar(25) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_accessory`
--

INSERT INTO `e_accessory` (`id_item`, `item_name`, `stock`, `price`, `discount`, `disc_sd`, `disc_ed`, `sc1`, `sc2`, `image1`, `image2`, `image3`) VALUES
('AR0001', 'Ring Liberty Black Matte', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Accessory', 'Ring', 'AR0001-1-RingLibertyBlackMatte.jpg', 'AR0001-2-RingLibertyBlackMatte.jpg', 'AR0001-3-RingLibertyBlackMatte.jpg'),
('AR0002', 'Ring Desmosh Gold Matte', 99, 100000, 0, '0000-00-00', '0000-00-00', 'Accessory', 'Ring', 'AR0002-1-RingDesmoshGoldMatte.jpg', 'AR0002-2-RingDesmoshGoldMatte.jpg', 'AR0002-3-RingDesmoshGoldMatte.jpg'),
('AR0003', 'Ring Liberty Silver Matte', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Accessory', 'Ring', 'AR0003-1-RingLibertySilverMatte.jpg', 'AR0003-2-RingLibertySilverMatte.jpg', 'AR0003-3-RingLibertySilverMatte.jpg'),
('AR0004', 'Ring Liberty Gold Matte', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Accessory', 'Ring', 'AR0004-1-RingLibertyGoldMatte.jpg', 'AR0004-2-RingLibertyGoldMatte.jpg', 'AR0004-3-RingLibertyGoldMatte.jpg'),
('AR0005', 'Ring Zigger Black', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Accessory', 'Ring', 'AR0005-1-RingZiggerBlack.jpg', 'AR0005-2-RingZiggerBlack.jpg', 'AR0005-3-RingZiggerBlack.jpg'),
('AW0001', 'Sincere 4.0 Black Silver', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Accessory', 'Watch', 'AW0001-1-Sincere4.0BlackSilver.jpg', 'AW0001-2-Sincere4.0BlackSilver.jpg', 'AW0001-3-Sincere4.0BlackSilver.jpg'),
('AW0002', 'Sincere 4.0 Full Black', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Accessory', 'Watch', 'AW0002-1-Sincere4.0FullBlack.jpg', 'AW0002-2-Sincere4.0FullBlack.jpg', 'AW0002-3-Sincere4.0FullBlack.jpg'),
('AW0003', 'Vallery Watch Rose Gold', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Accessory', 'Watch', 'AW0003-1-ValleryWatchRoseGold.jpg', 'AW0003-2-ValleryWatchRoseGold.jpg', 'AW0003-3-ValleryWatchRoseGold.jpg'),
('AW0004', 'Vallery Watch Black Gold', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Accessory', 'Watch', 'AW0004-1-ValleryWatchBlackGold.jpg', 'AW0004-2-ValleryWatchBlackGold.jpg', 'AW0004-3-ValleryWatchBlackGold.jpg'),
('AW0005', 'Sincere 4.0 Black Gold', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Accessory', 'Watch', 'AW0005-1-Sincere4.0BlackGold.jpg', 'AW0005-2-Sincere4.0BlackGold.jpg', 'AW0005-3-Sincere4.0BlackGold.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `e_accessory_desc`
--

CREATE TABLE `e_accessory_desc` (
  `id_item` varchar(25) NOT NULL,
  `gen_desc` varchar(250) NOT NULL,
  `style` varchar(20) NOT NULL,
  `occasion` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `material` varchar(20) NOT NULL,
  `fit_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_accessory_desc`
--

INSERT INTO `e_accessory_desc` (`id_item`, `gen_desc`, `style`, `occasion`, `type`, `material`, `fit_type`) VALUES
('AR0001', 'Ring Liberty Black Matte', '#STYLEAR0001', 'Semi-Formal', 'Accessory', 'Titanium', ''),
('AR0002', 'Ring Desmosh Gold Matte', '#STYLEAR0002', 'Semi-Formal', 'Accessory', 'Titanium', ''),
('AR0003', 'Ring Liberty Silver Matte', '#STYLEAR0003', 'Semi-Formal', 'Accessory', 'Titanium', ''),
('AR0004', 'Ring Liberty Gold Matte', '#STYLEAR0004', 'Semi-Formal', 'Accessory', 'Titanium', ''),
('AR0005', 'Ring Zigger Black', '#STYLEAR0005', 'Semi-Formal', 'Accessory', 'Titanium', ''),
('AW0001', 'Sincere 4.0 Black Silver', '#STYLEAW0001', 'Semi-Formal', 'Accessory', 'Titanium', ''),
('AW0002', 'Sincere 4.0 Full Black', '#STYLEAW0002', 'Semi-Formal', 'Accessory', 'Titanium', ''),
('AW0003', 'Vallery Watch Rose Gold', '#STYLEAW0003', 'Semi-Formal', 'Accessory', 'Titanium', ''),
('AW0004', 'Vallery Watch Black Gold', '#STYLEAW0004', 'Semi-Formal', 'Accessory', 'Titanium', ''),
('AW0005', 'Sincere 4.0 Black Gold', '#STYLEAW0005', 'Semi-Formal', 'Accessory', 'Titanium', '');

-- --------------------------------------------------------

--
-- Table structure for table `e_footwear`
--

CREATE TABLE `e_footwear` (
  `id_item` varchar(25) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `disc_sd` date NOT NULL,
  `disc_ed` date NOT NULL,
  `sc1` varchar(25) NOT NULL,
  `sc2` varchar(25) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_footwear`
--

INSERT INTO `e_footwear` (`id_item`, `item_name`, `stock`, `price`, `discount`, `disc_sd`, `disc_ed`, `sc1`, `sc2`, `image1`, `image2`, `image3`) VALUES
('FB0001', 'Puntondas Oxblod', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Footwear', 'Boots', 'FB0001-1-PuntondasOxblod.jpg', 'FB0001-2-PuntondasOxblod.jpg', 'FB0001-3-PuntondasOxblod.jpg'),
('FB0002', 'Puntondas Dark Knight', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Footwear', 'Boots', 'FB0002-1-PuntondasDarkKnight.jpg', 'FB0002-2-PuntondasDarkKnight.jpg', 'FB0002-3-PuntondasDarkKnight.jpg'),
('FB0003', 'Artemis Moc Toe Boots', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Footwear', 'Boots', 'FB0003-1-ArtemisMocToeBoots.jpg', 'FB0003-2-ArtemisMocToeBoots.jpg', 'FB0003-3-ArtemisMocToeBoots.jpg'),
('FB0004', 'Logan Wooded Black', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Footwear', 'Boots', 'FB0004-1-LoganWoodedBlack.jpg', 'FB0004-2-LoganWoodedBlack.jpg', 'FB0004-3-LoganWoodedBlack.jpg'),
('FB0005', 'Derby Brogue Army', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Footwear', 'Boots', 'FB0005-1-DerbyBrogueArmy.jpg', 'FB0005-2-DerbyBrogueArmy.jpg', 'FB0005-3-DerbyBrogueArmy.jpg'),
('FS0001', 'Nike Zoom Pegasus Turbo Shield', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Footwear', 'Sneakers', 'FS0001-1-NikeZoomPegasusTurboShield.jpg', 'FS0001-2-NikeZoomPegasusTurboShield.jpg', 'FS0001-3-NikeZoomPegasusTurboShield.jpg'),
('FS0002', 'Nike Zoom Pegasus Turbo 2', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Footwear', 'Sneakers', 'FS0002-1-NikeZoomPegasusTurbo2.jpg', 'FS0002-2-NikeZoomPegasusTurbo2.jpg', 'FS0002-3-NikeZoomPegasusTurbo2.jpg'),
('FS0003', 'Nike Zoom Pegasus Turbo 3', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Footwear', 'Sneakers', 'FS0003-1-NikeZoomPegasusTurbo3.jpg', 'FS0003-2-NikeZoomPegasusTurbo3.jpg', 'FS0003-3-NikeZoomPegasusTurbo3.jpg'),
('FS0004', 'Nike Zoom Fly 3', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Footwear', 'Sneakers', 'FS0004-1-NikeZoomFly3.jpg', 'FS0004-2-NikeZoomFly3.jpg', 'FS0004-2-NikeZoomFly3.jpg'),
('FS0005', 'Nike Joyride Run Flyknit', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Footwear', 'Sneakers', 'FS0005-1-NikeJoyrideRunFlyknit.jpg', 'FS0005-2-NikeJoyrideRunFlyknit.jpg', 'FS0005-3-NikeJoyrideRunFlyknit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `e_footwear_desc`
--

CREATE TABLE `e_footwear_desc` (
  `id_item` varchar(25) NOT NULL,
  `gen_desc` varchar(250) NOT NULL,
  `style` varchar(20) NOT NULL,
  `occasion` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `material` varchar(20) NOT NULL,
  `fit_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_footwear_desc`
--

INSERT INTO `e_footwear_desc` (`id_item`, `gen_desc`, `style`, `occasion`, `type`, `material`, `fit_type`) VALUES
('FB0001', 'Puntondas Oxblod', '#STYLEFB0001', 'Semi-Formal', 'Footwear', 'Leather', ''),
('FB0002', 'Puntondas Dark Knight', '#STYLEFB0002', 'Semi-Formal', 'Footwear', 'Leather', ''),
('FB0003', 'Artemis Moc Toe Boots', '#STYLEFB0003', 'Semi-Formal', 'Footwear', 'Leather', ''),
('FB0004', 'Logan Wooded Black', '#STYLEFB0004', 'Semi-Formal', 'Footwear', 'Leather', ''),
('FB0005', 'Derby Brogue Army', '#STYLEFB0005', 'Semi-Formal', 'Footwear', 'Leather', ''),
('FS0001', 'Nike Zoom Pegasus Turbo Shield', '#STYLEFS0001', 'Casual', 'Footwear', 'Synthetic Leather', ''),
('FS0002', 'Nike Zoom Pegasus Turbo 2', '#STYLEFS0002', 'Casual', 'Footwear', 'Synthetic Leather', ''),
('FS0003', 'Nike Zoom Pegasus Turbo 3', '#STYLEFS0003', 'Casual', 'Footwear', 'Synthetic Leather', ''),
('FS0004', 'Nike Zoom Fly 3', '#STYLEFS0004', 'Casual', 'Footwear', 'Synthetic Leather', ''),
('FS0005', 'Nike Joyride Run Flyknit', '#STYLEFS0005', 'Casual', 'Footwear', 'Synthetic Leather', '');

-- --------------------------------------------------------

--
-- Table structure for table `e_kids`
--

CREATE TABLE `e_kids` (
  `id_item` varchar(25) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `disc_sd` date NOT NULL,
  `disc_ed` date NOT NULL,
  `sc1` varchar(25) NOT NULL,
  `sc2` varchar(25) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_kids`
--

INSERT INTO `e_kids` (`id_item`, `item_name`, `stock`, `price`, `discount`, `disc_sd`, `disc_ed`, `sc1`, `sc2`, `image1`, `image2`, `image3`) VALUES
('KB0001', 'Cotton Navy Regular Fit Track Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'KB0001-1-CottonNavyRFPants.jpg', 'KB0001-2-CottonNavyRFPants.jpg', 'KB0001-3-CottonNavyRFPants.jpg'),
('KB0002', 'Cotton Grey Regular Fit Track Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'KB0002-1-CottonGreyRFPants.jpg', 'KB0002-2-CottonGreyRFPants.jpg', 'KB0002-3-CottonGreyRFPants.jpg'),
('KB0003', 'Cotton Black Regular Fit Track Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'KB0003-1-CottonBlackRFPants.jpg', 'KB0003-2-CottonBlackRFPants.jpg', 'KB0003-3-CottonBlackRFPants.jpg'),
('KB0004', 'Cotton Navy Regular Fit Shorts', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Shorts', 'KB0004-1-CottonNavyRFPants.jpg', 'KB0004-2-CottonNavyRFPants.jpg', 'KB0004-3-CottonNavyRFPants.jpg'),
('KB0005', 'Cotton Grey Regular Fit Shorts', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Shorts', 'KB0005-1-CottonGreyRFShorts.jpg', 'KB0005-2-CottonGreyRFShorts.jpg', 'KB0005-3-CottonGreyRFShorts.jpg'),
('KB0006', 'Cotton Black Regular Fit Shorts', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Shorts', 'KB0006-1-CottonBlackRFShorts.jpg', 'KB0006-2-CottonBlackRFShorts.jpg', 'KB0006-3-CottonBlackRFShorts.jpg'),
('KT0001', 'Cotton Elastane Sky Regular Fit Tshirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Tshirt', 'KT0001-1-CottonElastaneSkyRFTshirt.jpg', 'KT0001-2-CottonElastaneSkyRFTshirt.jpg', 'KT0001-3-CottonElastaneSkyRFTshirt.jpg'),
('KT0002', 'Cotton Elastane Green Regular Fit Tshirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Tshirt', 'KT0002-1-CottonElastaneGreenRFTshirt.jpg', 'KT0002-2-CottonElastaneGreenRFTshirt.jpg', 'KT0002-3-CottonElastaneGreenRFTshirt.jpg'),
('KT0003', 'Cotton Elastane Red Regular Fit Tshirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Tshirt', 'KT0003-1-CottonElastaneRedRFTshirt.jpg', 'KT0003-2-CottonElastaneRedRFTshirt.jpg', 'KT0003-3-CottonElastaneRedRFTshirt.jpg'),
('KT0004', 'Cotton Elastane Royal Regular Fit Tshirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Tshirt', 'KT0004-1-CottonElastaneRoyalRFTshirt.jpg', 'KT0004-2-CottonElastaneRoyalRFTshirt.jpg', 'KT0004-3-CottonElastaneRoyalRFTshirt.jpg'),
('KT0005', 'Cotton Elastane Emerald Regular Fit Tshirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Tshirt', 'KT0005-1-CottonElastaneEmeraldRFTshirt.jpg', 'KT0005-2-CottonElastaneEmeraldRFTshirt.jpg', 'KT0005-3-CottonElastaneEmeraldRFTshirt.jpg'),
('KT0006', 'Cotton Navy Regular Fit Shirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Shirt', 'KT0006-1-CottonNavyRFShirt.jpg', 'KT0006-2-CottonNavyRFShirt.jpg', 'KT0006-3-CottonNavyRFShirt.jpg'),
('KT0007', 'Cotton Sky Regular Fit Shirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Shirt', 'KT0007-1-CottonSkyRFShirt.jpg', 'KT0007-2-CottonSkyRFShirt.jpg', 'KT0007-3-CottonSkyRFShirt.jpg'),
('KT0008', 'Cotton Yellow Regular Fit Shirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Shirt', 'KT0008-1-CottonYellowRFShirt.jpg', 'KT0008-2-CottonYellowRFShirt.jpg', 'KT0008-3-CottonYellowRFShirt.jpg'),
('KT0009', 'Cotton White Regular Fit Shirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Shirt', 'KT0009-1-CottonWhiteRFShirt.jpg', 'KT0009-2-CottonWhiteRFShirt.jpg', 'KT0009-3-CottonWhiteRFShirt.jpg'),
('KT0010', 'Cotton Navy Regular Fit Shirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Shirt', 'KT0010-1-CottonNavyRFShirt.jpg', 'KT0010-2-CottonNavyRFShirt.jpg', 'KT0010-3-CottonNavyRFShirt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `e_kids_desc`
--

CREATE TABLE `e_kids_desc` (
  `id_item` varchar(25) NOT NULL,
  `gen_desc` varchar(250) NOT NULL,
  `style` varchar(20) NOT NULL,
  `occasion` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `material` varchar(20) NOT NULL,
  `fit_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_kids_desc`
--

INSERT INTO `e_kids_desc` (`id_item`, `gen_desc`, `style`, `occasion`, `type`, `material`, `fit_type`) VALUES
('KB0001', 'Cotton Navy Regular Fit Track Pants', '#STYLEKB0001', 'Casual', 'Kids Bottom', 'Cotton', 'Regular Fit'),
('KB0002', 'Cotton Grey Regular Fit Track Pants', '#STYLEKB0002', 'Casual', 'Kids Bottom', 'Cotton', 'Regular Fit'),
('KB0003', 'Cotton Black Regular Fit Track Pants', '#STYLEKB0003', 'Casual', 'Kids Bottom', 'Cotton', 'Regular Fit'),
('KB0004', 'Cotton Navy Regular Fit Shorts', '#STYLEKB0004', 'Casual', 'Kids Bottom', 'Cotton', 'Regular Fit'),
('KB0005', 'Cotton Grey Regular Fit Shorts', '#STYLEKB0005', 'Casual', 'Kids Bottom', 'Cotton', 'Regular Fit'),
('KB0006', 'Cotton Black Regular Fit Shorts', '#STYLEKB0006', 'Casual', 'Kids Bottom', 'Cotton', 'Regular Fit'),
('KT0001', 'Cotton Elastane Sky Regular Fit Tshirt', '#STYLEKT0001', 'Casual', 'Kids Top', 'Cotton', 'Regular Fit'),
('KT0002', 'Cotton Elastane Green Regular Fit Tshirt', '#STYLEKT0002', 'Casual', 'Kids Top', 'Cotton', 'Regular Fit'),
('KT0003', 'Cotton Elastane Red Regular Fit Tshirt', '#STYLEKT0003', 'Casual', 'Kids Top', 'Cotton', 'Regular Fit'),
('KT0004', 'Cotton Elastane Royal Regular Fit Tshirt', '#STYLEKT0004', 'Casual', 'Kids Top', 'Cotton', 'Regular Fit'),
('KT0005', 'Cotton Elastane Emerald Regular Fit Tshirt', '#STYLEKT0005', 'Casual', 'Kids Top', 'Cotton', 'Regular Fit'),
('KT0006', 'Cotton Navy Regular Fit Shirt', '#STYLEKT0006', 'Semi-Formal', 'Kids Top', 'Cotton', 'Regular Fit'),
('KT0007', 'Cotton Sky Regular Fit Shirt', '#STYLEKT0007', 'Semi-Formal', 'Kids Top', 'Cotton', 'Regular Fit'),
('KT0008', 'Cotton Yellow Regular Fit Shirt', '#STYLEKT0008', 'Semi-Formal', 'Kids Top', 'Cotton', 'Regular Fit'),
('KT0009', 'Cotton White Regular Fit Shirt', '#STYLEKT0009', 'Semi-Formal', 'Kids Top', 'Cotton', 'Regular Fit'),
('KT0010', 'Cotton Navy Regular Fit Shirt', '#STYLEKT0010', 'Semi-Formal', 'Kids Top', 'Cotton', 'Regular Fit');

-- --------------------------------------------------------

--
-- Table structure for table `e_men`
--

CREATE TABLE `e_men` (
  `id_item` varchar(25) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `disc_sd` date NOT NULL,
  `disc_ed` date NOT NULL,
  `sc1` varchar(25) NOT NULL,
  `sc2` varchar(25) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_men`
--

INSERT INTO `e_men` (`id_item`, `item_name`, `stock`, `price`, `discount`, `disc_sd`, `disc_ed`, `sc1`, `sc2`, `image1`, `image2`, `image3`) VALUES
('MB0001', 'Cotton Linen Indigo Slim Fit Pants', 91, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'MB0001-1-CottonLinenIndigoSFPants.jpg', 'MB0001-2-CottonLinenIndigoSFPants.jpg', 'MB0001-3-CottonLinenIndigoSFPants.jpg'),
('MB0002', 'Cotton Linen Natural Slim Fit Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'MB0002-1-CottonLinenNaturalSFPants.jpg', 'MB0002-2-CottonLinenNaturalSFPants.jpg', 'MB0002-3-CottonLinenNaturalSFPants.jpg'),
('MB0003', 'Linen Natural Regular Fit Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'MB0003-1-LinenNaturalRegularRFPants.jpg', 'MB0003-2-LinenNaturalRegularRFPants.jpg', 'MB0003-3-LinenNaturalRegularRFPants.jpg'),
('MB0004', 'Cotton Linen Olive Regular Fit Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'MB0004-1-CottonLinenOliveRFPants.jpg', 'MB0004-2-CottonLinenOliveRFPants.jpg', 'MB0004-3-CottonLinenOliveRFPants.jpg'),
('MB0005', 'Cotton Lycra Blue Slim Fit Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'MB0005-1-CottonLycraBlueSFPants.jpg', 'MB0005-2-CottonLycraBlueSFPants.jpg', 'MB0005-3-CottonLycraBlueSFPants.jpg'),
('MB0006', 'Cotton Forest Regular Fit Shorts', 96, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Shorts', 'MB0006-1-CottonForestRFShorts.jpg', 'MB0006-2-CottonForestRFShorts.jpg', 'MB0006-3-CottonForestRFShorts.jpg'),
('MB0007', 'Cotton Linen Red Regular Fit Shorts', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Shorts', 'MB0007-1-CottonLinenRedRFShorts.jpg', 'MB0007-2-CottonLinenRedRFShorts.jpg', 'MB0007-3-CottonLinenRedRFShorts.jpg'),
('MB0008', 'Cotton Ochre Regular Fit Shorts', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Shorts', 'MB0008-1-CottonOchreRFShorts.jpg', 'MB0008-2-CottonOchreRFShorts.jpg', 'MB0008-3-CottonOchreRFShorts.jpg'),
('MB0009', 'Cotton Linen Natural Regular Fit Shorts', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Shorts', 'MB0009-1-CottonLinenNaturalRFShorts.jpg', 'MB0009-2-CottonLinenNaturalRFShorts.jpg', 'MB0009-3-CottonLinenNaturalRFShorts.jpg'),
('MB0010', 'Cotton Linen Green Regular Fit Shorts', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Shorts', 'MB0010-1-CottonLinenGreenRFShorts.jpg', 'MB0010-2-CottonLinenGreenRFShorts.jpg', 'MB0010-3-CottonLinenGreenRFShorts.jpg'),
('MT0001', 'Cotton Blue Regular Fit Tshirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Tshirt', 'MT0001-1-CottonBlueRFTshirt.jpg', 'MT0001-2-CottonBlueRFTshirt.jpg', 'MT0001-3-CottonBlueRFTshirt.jpg'),
('MT0002', 'Cotton Olive Regular Fit Tshirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Tshirt', 'MT0002-1-CottonOliveRFTshirt.jpg', 'MT0002-2-CottonOliveRFTshirt.jpg', 'MT0002-3-CottonOliveRFTshirt.jpg'),
('MT0003', 'Cotton Cream Regular Fit Tshirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Tshirt', 'MT0003-1-CottonCreamRFTshirt.jpg', 'MT0003-2-CottonCreamRFTshirt.jpg', 'MT0003-3-CottonCreamRFTshirt.jpg'),
('MT0004', 'Cotton Brick Regular Fit Tshirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Tshirt', 'MT0004-1-CottonBrickRFTshirt.jpg', 'MT0004-2-CottonBrickRFTshirt.jpg', 'MT0004-3-CottonBrickRFTshirt.jpg'),
('MT0005', 'Cotton Cranberry Regular Fit Tshirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Tshirt', 'MT0005-1-CottonCranberryRFTshirt.jpg', 'MT0005-2-CottonCranberryRFTshirt.jpg', 'MT0005-3-CottonCranberryRFTshirt.jpg'),
('MT0006', 'Linen Cotton Rust Regular Fit Shirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Shirt', 'MT0006-1-LinenCottonRustRFShirt.jpg', 'MT0006-2-LinenCottonRustRFShirt.jpg', 'MT0006-3-LinenCottonRustRFShirt.jpg'),
('MT0007', 'Linen Cotton Navy Regular Fit Shirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Shirt', 'MT0007-1-LinenCottonNavyRFShirt.jpg', 'MT0007-2-LinenCottonNavyRFShirt.jpg', 'MT0007-3-LinenCottonNavyRFShirt.jpg'),
('MT0008', 'Cotton Khaki Regular Fit Shirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Shirt', 'MT0008-1-CottonKhakiRFShirt.jpg', 'MT0008-2-CottonKhakiRFShirt.jpg', 'MT0008-3-CottonKhakiRFShirt.jpg'),
('MT0009', 'Cotton Red Regular Fit Shirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Shirt', 'MT0009-1-CottonRedRFShirt.jpg', 'MT0009-2-CottonRedRFShirt.jpg', 'MT0009-3-CottonRedRFShirt.jpg'),
('MT0010', 'Cotton Green Regular Fit Shirts', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Shirt', 'MT0010-1-CottonGreenRFShirt.jpg', 'MT0010-2-CottonGreenRFShirt.jpg', 'MT0010-3-CottonGreenRFShirt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `e_men_desc`
--

CREATE TABLE `e_men_desc` (
  `id_item` varchar(25) NOT NULL,
  `gen_desc` varchar(250) NOT NULL,
  `style` varchar(20) NOT NULL,
  `occasion` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `material` varchar(20) NOT NULL,
  `fit_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_men_desc`
--

INSERT INTO `e_men_desc` (`id_item`, `gen_desc`, `style`, `occasion`, `type`, `material`, `fit_type`) VALUES
('MB0001', 'Cotton Linen Indigo Slim Fit Pants', '#STYLEMB0001', 'Semi-Formal', 'Man Bottom', 'Cotton', 'Slim Fit'),
('MB0002', 'Cotton Linen Natural Slim Fit Pants', '#STYLEMB0002', 'Semi-Formal', 'Man Bottom', 'Cotton', 'Slim Fit'),
('MB0003', 'Linen Natural Regular Fit Pants', '#STYLEMB0003', 'Semi-Formal', 'Man Bottom', 'Cotton', 'Regular Fit'),
('MB0004', 'Cotton Linen Olive Regular Fit Pants', '#STYLEMB0004', 'Semi-Formal', 'Man Bottom', 'Cotton', 'Regular Fit'),
('MB0005', 'Cotton Lycra Blue Slim Fit Pants', '#STYLEMB0005', 'Semi-Formal', 'Man Bottom', 'Cotton', 'Slim Fit'),
('MB0006', 'Cotton Forest Regular Fit Shorts', '#STYLEMB0006', 'Casual', 'Man Bottom', 'Cotton', 'Regular Fit'),
('MB0007', 'Cotton Linen Red Regular Fit Shorts', '#STYLEMB0007', 'Casual', 'Man Bottom', 'Cotton', 'Regular Fit'),
('MB0008', 'Cotton Ochre Regular Fit Shorts', '#STYLEMB0008', 'Casual', 'Man Bottom', 'Cotton', 'Regular Fit'),
('MB0009', 'Cotton Linen Natural Regular Fit Shorts', '#STYLEMB0009', 'Casual', 'Man Bottom', 'Cotton', 'Regular Fit'),
('MB0010', 'Cotton Linen Green Regular Fit Shorts', '#STYLEMB0010', 'Casual', 'Man Bottom', 'Cotton', 'Regular Fit'),
('MT0001', 'Cotton Blue Regular Fit Tshirt', '#STYLEMT0001', 'Casual', 'Man Top', 'Cotton', 'Regular Fit'),
('MT0002', 'Cotton Olive Regular Fit Tshirt', '#STYLEMT0002', 'Casual', 'Man Top', 'Cotton', 'Regular Fit'),
('MT0003', 'Cotton Cream Regular Fit Tshirt', '#STYLEMT0003', 'Casual', 'Man Top', 'Cotton', 'Regular Fit'),
('MT0004', 'Cotton Brick Regular Fit Tshirt', '#STYLEMT0004', 'Casual', 'Man Top', 'Cotton', 'Regular Fit'),
('MT0005', 'Cotton Cranberry Regular Fit Tshirt', '#STYLEMT0005', 'Casual', 'Man Top', 'Cotton', 'Regular Fit'),
('MT0006', 'Linen Cotton Rust Regular Fit Shirt', '#STYLEMT0006', 'Semi-Formal', 'Man Top', 'Cotton', 'Regular Fit'),
('MT0007', 'Linen Cotton Navy Regular Fit Shirt', '#STYLEMT0007', 'Semi-Formal', 'Man Top', 'Cotton', 'Regular Fit'),
('MT0008', 'Cotton Khaki Regular Fit Shirt', '#STYLEMT0008', 'Semi-Formal', 'Man Top', 'Cotton', 'Regular Fit'),
('MT0009', 'Cotton Red Regular Fit Shirt', '#STYLEMT0009', 'Semi-Formal', 'Man Top', 'Cotton', 'Regular Fit'),
('MT0010', 'Cotton Green Regular Fit Shirts', '#STYLEMT0010', 'Semi-Formal', 'Man Top', 'Cotton', 'Regular Fit');

-- --------------------------------------------------------

--
-- Table structure for table `e_transaction`
--

CREATE TABLE `e_transaction` (
  `id_transaction` varchar(10) NOT NULL,
  `id_user` varchar(25) DEFAULT NULL,
  `transaction_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_transaction_details`
--

CREATE TABLE `e_transaction_details` (
  `id_transaction` varchar(128) NOT NULL,
  `id_item` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_women`
--

CREATE TABLE `e_women` (
  `id_item` varchar(25) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `disc_sd` date NOT NULL,
  `disc_ed` date NOT NULL,
  `sc1` varchar(25) NOT NULL,
  `sc2` varchar(25) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_women`
--

INSERT INTO `e_women` (`id_item`, `item_name`, `stock`, `price`, `discount`, `disc_sd`, `disc_ed`, `sc1`, `sc2`, `image1`, `image2`, `image3`) VALUES
('WB0001', 'Cotton Linen Maroon Red Regular Fit Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'WB0001-1-CottonLinenMaroonRFPants.jpg', 'WB0001-2-CottonLinenMaroonRFPants.jpg', 'WB0001-3-CottonLinenMaroonRFPants.jpg'),
('WB0002', 'Cotton Linen Beige Regular Fit Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'WB0002-1-CottonLinenBeigeRFPants.jpg', 'WB0002-2-CottonLinenBeigeRFPants.jpg', 'WB0002-3-CottonLinenBeigeRFPants.jpg'),
('WB0003', 'Cotton Lycra Khaki Regular Fit Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'WB0003-1-CottonLycraKhakiRFPants.jpg', 'WB0003-2-CottonLycraKhakiRFPants.jpg', 'WB0003-3-CottonLycraKhakiRFPants.jpg'),
('WB0004', 'Cotton Lycra Green Regular Fit Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'WB0004-1-CottonLycraGreenRFPants.jpg', 'WB0004-2-CottonLycraGreenRFPants.jpg', 'WB0004-3-CottonLycraGreenRFPants.jpg'),
('WB0005', 'Linen Black Regular Fit Pants', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Pants', 'WB0005-1-LinenBlackRFPants.jpg', 'WB0005-2-LinenBlackRFPants.jpg', 'WB0005-3-LinenBlackRFPants.jpg'),
('WB0006', 'Viscose Elastane Polyster Navy White Regular Fit Skirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Skirts', 'WB0006-1-ViscosePolysterNavyWhiteRFSkirts.jpg', 'WB0006-2-ViscosePolysterNavyWhiteRFSkirts.jpg', 'WB0006-3-ViscosePolysterNavyWhiteRFSkirts.jpg'),
('WB0007', 'Viscose Elastane Knit Mustard Regular Fit Skirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Skirts', 'WB0007-1-ViscoseElastaneKnitMustardRFSkirts.jpg', 'WB0007-2-ViscoseElastaneKnitMustardRFSkirts.jpg', 'WB0007-3-ViscoseElastaneKnitMustardRFSkirts.jpg'),
('WB0008', 'Elastane Black Straight Fit Skirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Skirts', 'WB0008-1-ElastaneBlackStraightSFSkirts.jpg', 'WB0008-2-ElastaneBlackStraightSFSkirts.jpg', 'WB0008-3-ElastaneBlackStraightSFSkirts.jpg'),
('WB0009', 'Viscose Elastane Wine Regular Fit Skirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Skirts', 'WB0009-1-ViscoseElastaneWineRFSkirts.jpg', 'WB0009-2-ViscoseElastaneWineRFSkirts.jpg', 'WB0009-3-ViscoseElastaneWineRFSkirts.jpg'),
('WB0010', 'Modal Black Regular Fit Skirt', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Bottom', 'Skirts', 'WB0010-1-ModalBlackRFSkirts.jpg', 'WB0010-2-ModalBlackRFSkirts.jpg', 'WB0010-3-ModalBlackRFSkirts.jpg'),
('WT0001', 'Viscose Black White Regular Fit Blouse', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Blouse', 'WT0001-1-ViscoseBlackWhiteRFBlouse.jpg', 'WT0001-2-ViscoseBlackWhiteRFBlouse.jpg', 'WT0001-3-ViscoseBlackWhiteRFBlouse.jpg'),
('WT0002', 'Viscose Grey Regular Fit Blouse', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Blouse', 'WT0002-1-ViscoseGreyRFBlouse.jpg', 'WT0002-2-ViscoseGreyRFBlouse.jpg', 'WT0002-3-ViscoseGreyRFBlouse.jpg'),
('WT0003', 'Linen Grey Regular Fit Blouse', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Blouse', 'WT0003-1-LinenGreyRFBlouse.jpg', 'WT0003-2-LinenGreyRFBlouse.jpg', 'WT0003-3-LinenGreyRFBlouse.jpg'),
('WT0004', 'Viscose Sky Regular Fit Blouse', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Blouse', 'WT0004-1-ViscoseSkyRFBlouse.jpg', 'WT0004-2-ViscoseSkyRFBlouse.jpg', 'WT0004-3-ViscoseSkyRFBlouse.jpg'),
('WT0005', 'Cotton Flax Green Regular Fit Blouse', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Blouse', 'WT0005-1-CottonFlaxGreenRFBlouse.jpg', 'WT0005-2-CottonFlaxGreenRFBlouse.jpg', 'WT0005-3-CottonFlaxGreenRFBlouse.jpg'),
('WT0006', 'Viscose Polyster Lycra Navy White Regular Fit Dress', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Dress', 'WT0006-1-ViscosePolysterNavyRFDress.jpg', 'WT0006-2-ViscosePolysterNavyRFDress.jpg', 'WT0006-3-ViscosePolysterNavyRFDress.jpg'),
('WT0007', 'Cotton Viscose Blue Regular Fit Dress', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Dress', 'WT0007-1-CottonViscoseBlueRFDress.jpg', 'WT0007-2-CottonViscoseBlueRFDress.jpg', 'WT0007-3-CottonViscoseBlueRFDress.jpg'),
('WT0008', 'Cotton Linen Gold Regular Fit Dress', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Dress', 'WT0008-1-CottonLinenGoldRFDress.jpg', 'WT0008-2-CottonLinenGoldRFDress.jpg', 'WT0008-3-CottonLinenGoldRFDress.jpg'),
('WT0009', 'Viscose Elastane Navy White Regular Fit Dress', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Dress', 'WT0009-1-ViscoseElastaneNavyRFDress.jpg', 'WT0009-2-ViscoseElastaneNavyRFDress.jpg', 'WT0009-3-ViscoseElastaneNavyRFDress.jpg'),
('WT0010', 'Viscose Black Regular Fit Dress', 100, 100000, 0, '0000-00-00', '0000-00-00', 'Top', 'Dress', 'WT0010-1-ViscoseBlackRFDress.jpg', 'WT0010-2-ViscoseBlackRFDress.jpg', 'WT0010-3-ViscoseBlackRFDress.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `e_women_desc`
--

CREATE TABLE `e_women_desc` (
  `id_item` varchar(25) NOT NULL,
  `gen_desc` varchar(250) NOT NULL,
  `style` varchar(20) NOT NULL,
  `occasion` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `material` varchar(20) NOT NULL,
  `fit_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_women_desc`
--

INSERT INTO `e_women_desc` (`id_item`, `gen_desc`, `style`, `occasion`, `type`, `material`, `fit_type`) VALUES
('WB0001', 'Cotton Linen Maroon Red Regular Fit Pants', '#STYLEWB0001', 'Semi-Formal', 'Woman Bottom', 'Cotton', 'Regular Fit'),
('WB0002', 'Cotton Linen Beige Regular Fit Pants', '#STYLEWB0002', 'Semi-Formal', 'Woman Bottom', 'Cotton', 'Regular Fit'),
('WB0003', 'Cotton Lycra Khaki Regular Fit Pants', '#STYLEWB0003', 'Semi-Formal', 'Woman Bottom', 'Cotton', 'Regular Fit'),
('WB0004', 'Cotton Lycra Green Regular Fit Pants', '#STYLEWB0004', 'Semi-Formal', 'Woman Bottom', 'Cotton', 'Regular Fit'),
('WB0005', 'Linen Black Regular Fit Pants', '#STYLEWB0005', 'Semi-Formal', 'Woman Bottom', 'Cotton', 'Regular Fit'),
('WB0006', 'Viscose Elastane Polyster Navy White Regular Fit Skirt', '#STYLEWB0006', 'Semi-Formal', 'Woman Bottom', 'Cotton', 'Regular Fit'),
('WB0007', 'Viscose Elastane Knit Mustard Regular Fit Skirt', '#STYLEWB0007', 'Semi-Formal', 'Woman Bottom', 'Cotton', 'Regular Fit'),
('WB0008', 'Elastane Black Straight Fit Skirt', '#STYLEWB0008', 'Semi-Formal', 'Woman Bottom', 'Cotton', 'Regular Fit'),
('WB0009', 'Viscose Elastane Wine Regular Fit Skirt', '#STYLEWB0009', 'Semi-Formal', 'Woman Bottom', 'Cotton', 'Regular Fit'),
('WB0010', 'Modal Black Regular Fit Skirt', '#STYLEWB0010', 'Semi-Formal', 'Woman Bottom', 'Cotton', 'Regular Fit'),
('WT0001', 'Viscose Black White Regular Fit Blouse', '#STYLEWT0001', 'Semi-Formal', 'Woman Top', 'Cotton', 'Regular Fit'),
('WT0002', 'Viscose Grey Regular Fit Blouse', '#STYLEWT0002', 'Semi-Formal', 'Woman Top', 'Cotton', 'Regular Fit'),
('WT0003', 'Linen Grey Regular Fit Blouse', '#STYLEWT0003', 'Semi-Formal', 'Woman Top', 'Cotton', 'Regular Fit'),
('WT0004', 'Viscose Sky Regular Fit Blouse', '#STYLEWT0004', 'Semi-Formal', 'Woman Top', 'Cotton', 'Regular Fit'),
('WT0005', 'Cotton Flax Green Regular Fit Blouse', '#STYLEWT0005', 'Semi-Formal', 'Woman Top', 'Cotton', 'Regular Fit'),
('WT0006', 'Viscose Polyster Lycra Navy White Regular Fit Dress', '#STYLEWT0006', 'Semi-Formal', 'Woman Top', 'Cotton', 'Regular Fit'),
('WT0007', 'Cotton Viscose Blue Regular Fit Dress', '#STYLEWT0007', 'Semi-Formal', 'Woman Top', 'Cotton', 'Regular Fit'),
('WT0008', 'Cotton Linen Gold Regular Fit Dress', '#STYLEWT0008', 'Semi-Formal', 'Woman Top', 'Cotton', 'Regular Fit'),
('WT0009', 'Viscose Elastane Navy White Regular Fit Dress', '#STYLEWT0009', 'Semi-Formal', 'Woman Top', 'Cotton', 'Regular Fit'),
('WT0010', 'Viscose Black Regular Fit Dress', '#STYLEWT0010', 'Semi-Formal', 'Woman Top', 'Cotton', 'Regular Fit');

-- --------------------------------------------------------

--
-- Table structure for table `sc_accessory`
--

CREATE TABLE `sc_accessory` (
  `sc_name` varchar(20) NOT NULL,
  `sc_name2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sc_accessory`
--

INSERT INTO `sc_accessory` (`sc_name`, `sc_name2`) VALUES
('Accessory', 'Ring'),
('Accessory', 'Watch');

-- --------------------------------------------------------

--
-- Table structure for table `sc_footwear`
--

CREATE TABLE `sc_footwear` (
  `sc_name` varchar(20) NOT NULL,
  `sc_name2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sc_footwear`
--

INSERT INTO `sc_footwear` (`sc_name`, `sc_name2`) VALUES
('Footwear', 'Boots'),
('Footwear', 'Sneakers');

-- --------------------------------------------------------

--
-- Table structure for table `sc_kids`
--

CREATE TABLE `sc_kids` (
  `sc_name` varchar(20) NOT NULL,
  `sc_name2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sc_kids`
--

INSERT INTO `sc_kids` (`sc_name`, `sc_name2`) VALUES
('Bottom', 'Pants'),
('Bottom', 'Shorts'),
('Top', 'Tshirt'),
('Top', 'Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `sc_men`
--

CREATE TABLE `sc_men` (
  `sc_name` varchar(20) NOT NULL,
  `sc_name2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sc_men`
--

INSERT INTO `sc_men` (`sc_name`, `sc_name2`) VALUES
('Bottom', 'Pants'),
('Top', 'Shirt'),
('Bottom', 'Shorts'),
('Top', 'Tshirt');

-- --------------------------------------------------------

--
-- Table structure for table `sc_women`
--

CREATE TABLE `sc_women` (
  `sc_name` varchar(20) NOT NULL,
  `sc_name2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sc_women`
--

INSERT INTO `sc_women` (`sc_name`, `sc_name2`) VALUES
('Bottom', 'Skirts'),
('Bottom', 'Pants'),
('Top', 'Blouse'),
('Top', 'Dress');

-- --------------------------------------------------------

--
-- Table structure for table `size_accessory`
--

CREATE TABLE `size_accessory` (
  `ID` varchar(10) NOT NULL,
  `Stock` int(10) NOT NULL,
  `Size` varchar(2) NOT NULL,
  `Price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size_accessory`
--

INSERT INTO `size_accessory` (`ID`, `Stock`, `Size`, `Price`) VALUES
('AR0001', 20, 'S', 120000),
('AR0001', 20, 'M', 150000),
('AR0001', 20, 'L', 180000),
('AR0001', 20, 'XL', 220000),
('AR0002', 20, 'S', 110000),
('AR0002', 20, 'M', 140000),
('AR0002', 20, 'L', 170000),
('AR0002', 20, 'XL', 200000),
('AR0003', 20, 'S', 150000),
('AR0003', 20, 'M', 180000),
('AR0003', 20, 'L', 210000),
('AR0003', 20, 'XL', 240000),
('AR0004', 20, 'S', 100000),
('AR0004', 20, 'M', 130000),
('AR0004', 20, 'L', 160000),
('AR0004', 20, 'XL', 190000),
('AR0005', 20, 'S', 90000),
('AR0005', 20, 'M', 120000),
('AR0005', 20, 'L', 150000),
('AR0005', 20, 'XL', 180000),
('AW0001', 20, 'S', 50000),
('AW0001', 20, 'M', 80000),
('AW0001', 20, 'L', 110000),
('AW0001', 20, 'XL', 140000),
('AW0002', 20, 'S', 70000),
('AW0002', 20, 'M', 100000),
('AW0002', 20, 'L', 130000),
('AW0002', 20, 'XL', 160000),
('AW0003', 20, 'S', 60000),
('AW0003', 20, 'M', 90000),
('AW0003', 20, 'L', 120000),
('AW0003', 20, 'XL', 150000),
('AW0004', 20, 'S', 80000),
('AW0004', 20, 'M', 110000),
('AW0004', 20, 'L', 140000),
('AW0004', 20, 'XL', 170000),
('AW0005', 20, 'S', 90000),
('AW0005', 20, 'M', 120000),
('AW0005', 20, 'L', 150000),
('AW0005', 20, 'XL', 180000);

-- --------------------------------------------------------

--
-- Table structure for table `size_footwear`
--

CREATE TABLE `size_footwear` (
  `ID` varchar(10) NOT NULL,
  `Stock` int(10) NOT NULL,
  `Size` varchar(2) NOT NULL,
  `Price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size_footwear`
--

INSERT INTO `size_footwear` (`ID`, `Stock`, `Size`, `Price`) VALUES
('FB0001', 20, 'S', 160000),
('FB0001', 20, 'M', 190000),
('FB0001', 20, 'L', 220000),
('FB0001', 20, 'XL', 250000),
('FB0002', 20, 'S', 120000),
('FB0002', 20, 'M', 150000),
('FB0002', 20, 'L', 180000),
('FB0002', 20, 'XL', 210000),
('FB0003', 20, 'S', 110000),
('FB0003', 20, 'M', 150000),
('FB0003', 20, 'L', 190000),
('FB0003', 20, 'XL', 230000),
('FB0004', 20, 'S', 160000),
('FB0004', 20, 'M', 200000),
('FB0004', 20, 'L', 240000),
('FB0004', 20, 'XL', 280000),
('FB0005', 20, 'S', 110000),
('FB0005', 20, 'M', 140000),
('FB0005', 20, 'L', 170000),
('FB0005', 20, 'XL', 200000),
('FS0001', 20, 'S', 120000),
('FS0001', 20, 'M', 150000),
('FS0001', 20, 'L', 180000),
('FS0001', 20, 'XL', 210000),
('FS0002', 20, 'S', 80000),
('FS0002', 20, 'M', 110000),
('FS0002', 20, 'L', 140000),
('FS0002', 20, 'XL', 170000),
('FS0003', 20, 'S', 100000),
('FS0003', 20, 'M', 120000),
('FS0003', 20, 'L', 140000),
('FS0003', 20, 'XL', 160000),
('FS0004', 20, 'S', 100000),
('FS0004', 20, 'M', 110000),
('FS0004', 20, 'L', 120000),
('FS0004', 20, 'XL', 130000),
('FS0005', 20, 'S', 70000),
('FS0005', 20, 'M', 80000),
('FS0005', 20, 'L', 90000),
('FS0005', 20, 'XL', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `size_kids`
--

CREATE TABLE `size_kids` (
  `ID` varchar(10) NOT NULL,
  `Stock` int(10) NOT NULL,
  `Size` varchar(2) NOT NULL,
  `Price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size_kids`
--

INSERT INTO `size_kids` (`ID`, `Stock`, `Size`, `Price`) VALUES
('KB0001', 20, 'S', 120000),
('KB0001', 20, 'M', 125000),
('KB0001', 20, 'L', 130000),
('KB0001', 29, 'XL', 135000),
('KB0002', 20, 'S', 155000),
('KB0002', 20, 'M', 160000),
('KB0002', 20, 'L', 165000),
('KB0002', 20, 'XL', 170000),
('KB0003', 20, 'S', 80000),
('KB0003', 20, 'M', 90000),
('KB0003', 20, 'L', 100000),
('KB0003', 20, 'XL', 125000),
('KB0004', 20, 'S', 125000),
('KB0004', 20, 'M', 150000),
('KB0004', 20, 'L', 175000),
('KB0004', 20, 'XL', 200000),
('KB0005', 20, 'S', 140000),
('KB0005', 20, 'M', 150000),
('KB0005', 20, 'L', 160000),
('KB0005', 20, 'XL', 170000),
('KB0006', 20, 'S', 120000),
('KB0006', 20, 'M', 130000),
('KB0006', 20, 'L', 150000),
('KB0006', 20, 'XL', 170000),
('KT0001', 20, 'S', 120000),
('KT0001', 20, 'M', 135000),
('KT0001', 20, 'L', 150000),
('KT0002', 20, 'XL', 165000),
('KT0002', 20, 'S', 100000),
('KT0002', 20, 'M', 130000),
('KT0002', 20, 'L', 160000),
('KT0002', 20, 'XL', 190000),
('KT0003', 20, 'S', 80000),
('KT0003', 20, 'M', 90000),
('KT0003', 20, 'L', 100000),
('KT0003', 20, 'XL', 110000),
('KT0004', 20, 'S', 110000),
('KT0004', 20, 'M', 125000),
('KT0004', 20, 'L', 150000),
('KT0004', 20, 'XL', 180000),
('KT0005', 20, 'S', 75000),
('KT0005', 20, 'M', 100000),
('KT0005', 20, 'L', 125000),
('KT0005', 20, 'XL', 150000),
('KT0006', 20, 'S', 90000),
('KT0006', 20, 'M', 110000),
('KT0006', 20, 'L', 130000),
('KT0006', 20, 'XL', 150000),
('KT0007', 20, 'S', 150000),
('KT0007', 20, 'M', 160000),
('KT0007', 20, 'L', 170000),
('KT0007', 20, 'XL', 180000),
('KT0008', 20, 'S', 85000),
('KT0008', 20, 'M', 105000),
('KT0008', 20, 'L', 125000),
('KT0008', 20, 'XL', 145000),
('KT0009', 20, 'S', 120000),
('KT0009', 20, 'M', 140000),
('KT0009', 20, 'L', 160000),
('KT0009', 20, 'XL', 180000),
('KT0010', 20, 'S', 150000),
('KT0010', 20, 'M', 170000),
('KT0010', 20, 'L', 190000),
('KT0010', 20, 'XL', 210000);

-- --------------------------------------------------------

--
-- Table structure for table `size_men`
--

CREATE TABLE `size_men` (
  `ID` varchar(10) NOT NULL,
  `Stock` int(10) NOT NULL,
  `Size` varchar(2) NOT NULL,
  `Price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size_men`
--

INSERT INTO `size_men` (`ID`, `Stock`, `Size`, `Price`) VALUES
('MB0001', 20, 'S', 200000),
('MB0001', 20, 'M', 225000),
('MB0001', 20, 'L', 250000),
('MB0001', 20, 'XL', 275000),
('MB0002', 20, 'S', 120000),
('MB0002', 20, 'M', 140000),
('MB0002', 20, 'L', 160000),
('MB0002', 20, 'XL', 180000),
('MB0003', 20, 'S', 85000),
('MB0003', 20, 'M', 105000),
('MB0003', 20, 'L', 125000),
('MB0003', 20, 'XL', 145000),
('MB0004', 20, 'S', 100000),
('MB0004', 20, 'M', 110000),
('MB0004', 20, 'L', 120000),
('MB0004', 20, 'XL', 130000),
('MB0005', 20, 'S', 80000),
('MB0005', 20, 'M', 100000),
('MB0005', 20, 'L', 120000),
('MB0005', 20, 'XL', 140000),
('MB0006', 20, 'S', 200000),
('MB0006', 20, 'M', 220000),
('MB0006', 20, 'L', 240000),
('MB0006', 20, 'XL', 260000),
('MB0007', 20, 'S', 185000),
('MB0007', 20, 'M', 205000),
('MB0007', 20, 'L', 225000),
('MB0007', 20, 'XL', 245000),
('MB0008', 20, 'S', 250000),
('MB0008', 20, 'M', 260000),
('MB0008', 20, 'L', 270000),
('MB0008', 20, 'XL', 290000),
('MB0009', 20, 'S', 180000),
('MB0009', 20, 'M', 210000),
('MB0009', 20, 'L', 240000),
('MB0009', 20, 'XL', 270000),
('MB0010', 20, 'S', 270000),
('MB0010', 20, 'M', 280000),
('MB0010', 20, 'L', 290000),
('MB0010', 20, 'XL', 300000),
('MT0001', 20, 'S', 225000),
('MT0001', 20, 'M', 250000),
('MT0001', 20, 'L', 275000),
('MT0001', 20, 'XL', 300000),
('MT0002', 20, 'S', 180000),
('MT0002', 20, 'M', 200000),
('MT0002', 20, 'L', 220000),
('MT0002', 20, 'XL', 240000),
('MT0003', 20, 'S', 190000),
('MT0003', 20, 'M', 220000),
('MT0003', 20, 'L', 250000),
('MT0003', 20, 'XL', 280000),
('MT0004', 20, 'S', 150000),
('MT0004', 20, 'M', 170000),
('MT0004', 20, 'L', 190000),
('MT0004', 20, 'XL', 210000),
('MT0005', 20, 'S', 210000),
('MT0005', 20, 'M', 240000),
('MT0005', 20, 'L', 270000),
('MT0005', 20, 'XL', 300000),
('MT0006', 20, 'S', 160000),
('MT0006', 20, 'M', 180000),
('MT0006', 20, 'L', 200000),
('MT0006', 20, 'XL', 240000),
('MT0007', 20, 'S', 180000),
('MT0007', 20, 'M', 200000),
('MT0007', 20, 'L', 220000),
('MT0007', 20, 'XL', 240000),
('MT0008', 20, 'S', 195000),
('MT0008', 20, 'M', 205000),
('MT0008', 20, 'L', 215000),
('MT0008', 20, 'XL', 225000),
('MT0009', 20, 'S', 175000),
('MT0009', 20, 'M', 195000),
('MT0009', 20, 'L', 215000),
('MT0009', 20, 'XL', 235000),
('MT0010', 20, 'S', 150000),
('MT0010', 20, 'M', 175000),
('MT0010', 20, 'L', 200000),
('MT0010', 20, 'XL', 225000);

-- --------------------------------------------------------

--
-- Table structure for table `size_women`
--

CREATE TABLE `size_women` (
  `ID` varchar(10) NOT NULL,
  `Stock` int(10) NOT NULL,
  `Size` varchar(2) NOT NULL,
  `Price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size_women`
--

INSERT INTO `size_women` (`ID`, `Stock`, `Size`, `Price`) VALUES
('WB0001', 20, 'S', 180000),
('WB0001', 20, 'M', 200000),
('WB0001', 20, 'L', 220000),
('WB0001', 20, 'XL', 240000),
('WB0002', 20, 'S', 190000),
('WB0002', 20, 'M', 200000),
('WB0002', 20, 'L', 210000),
('WB0002', 20, 'XL', 220000),
('WB0003', 20, 'S', 200000),
('WB0003', 20, 'M', 205000),
('WB0003', 20, 'L', 210000),
('WB0003', 20, 'XL', 215000),
('WB0004', 20, 'S', 150000),
('WB0004', 20, 'M', 170000),
('WB0004', 20, 'L', 190000),
('WB0004', 20, 'XL', 210000),
('WB0005', 20, 'S', 175000),
('WB0005', 20, 'M', 180000),
('WB0005', 20, 'L', 185000),
('WB0005', 20, 'XL', 190000),
('WB0006', 20, 'S', 160000),
('WB0006', 20, 'M', 175000),
('WB0006', 20, 'L', 190000),
('WB0006', 20, 'XL', 205000),
('WB0007', 20, 'S', 180000),
('WB0007', 20, 'M', 190000),
('WB0007', 20, 'L', 200000),
('WB0007', 20, 'XL', 210000),
('WB0008', 20, 'S', 200000),
('WB0008', 20, 'M', 205000),
('WB0008', 20, 'L', 210000),
('WB0008', 20, 'XL', 215000),
('WB0009', 20, 'S', 215000),
('WB0009', 20, 'M', 220000),
('WB0009', 20, 'L', 225000),
('WB0009', 20, 'XL', 230000),
('WB0010', 20, 'S', 235000),
('WB0010', 20, 'M', 235000),
('WB0010', 20, 'L', 240000),
('WB0010', 20, 'XL', 240000),
('WT0001', 20, 'S', 165000),
('WT0001', 20, 'M', 170000),
('WT0001', 20, 'L', 175000),
('WT0001', 20, 'XL', 180000),
('WT0002', 20, 'S', 245000),
('WT0002', 20, 'M', 250000),
('WT0002', 20, 'L', 255000),
('WT0002', 20, 'XL', 260000),
('WT0003', 20, 'S', 125000),
('WT0003', 20, 'M', 130000),
('WT0003', 20, 'L', 135000),
('WT0003', 20, 'XL', 150000),
('WT0004', 20, 'S', 100000),
('WT0004', 20, 'M', 115000),
('WT0004', 20, 'L', 130000),
('WT0004', 20, 'XL', 145000),
('WT0005', 20, 'S', 160000),
('WT0005', 20, 'M', 165000),
('WT0005', 20, 'L', 170000),
('WT0005', 20, 'XL', 175000),
('WT0006', 20, 'S', 250000),
('WT0006', 20, 'M', 275000),
('WT0006', 20, 'L', 300000),
('WT0006', 20, 'XL', 325000),
('WT0007', 20, 'S', 310000),
('WT0007', 20, 'M', 315000),
('WT0007', 20, 'L', 320000),
('WT0007', 20, 'XL', 350000),
('WT0008', 20, 'S', 200000),
('WT0008', 20, 'M', 225000),
('WT0008', 20, 'L', 250000),
('WT0008', 20, 'XL', 275000),
('WT0009', 20, 'S', 175000),
('WT0009', 20, 'M', 185000),
('WT0009', 20, 'L', 195000),
('WT0009', 20, 'XL', 205000),
('WT0010', 20, 'S', 110000),
('WT0010', 20, 'M', 120000),
('WT0010', 20, 'L', 135000),
('WT0010', 20, 'XL', 155000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `alamat`, `no_telp`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'fwfsdfsdf', 'sdfsdf@gmail.com', 'Scientia Garden, Jalan Scientia Square barat, Ruko Newton Barat No. 22, Summarecon Serpong, Tangerang, 15810', 'adasdasd', 'default.jpg', '$2y$10$3bb9xpCCLEgNZ7oDiWN5PuTTWnrj/tA5SlsguqjmgMi20UnFRBQ7y', 2, 1, 1574495371),
(2, 'Reptile', 'test123@gmail.com', '', '', 'default.jpg', '$2y$10$etOaHR5YZWD8KLisVl9/2eaXts3WRbi2sUdDPbYb3p8YdPrJKkeaS', 1, 1, 1574595104),
(3, 'Alvin', 'alvinjulian87@gmail.com', '', '', 'default.jpg', '$2y$10$pCCTXbn.gaDK9IBkbfl/H.v1vYyvdxKjku5gQK5CneAFgJLA/ccPG', 2, 1, 1574649597),
(4, 'yusaki', 'bot@gmail.com', '', '', 'default.jpg', '$2y$10$SZLML8dtX.xO1euR1EbhN.oTBpKbsEXUHKVs3LMuo3lRx5LGjRbwK', 2, 0, 1574703495);

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
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_accessory`
--
ALTER TABLE `e_accessory`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `e_accessory_desc`
--
ALTER TABLE `e_accessory_desc`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `e_footwear`
--
ALTER TABLE `e_footwear`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `e_footwear_desc`
--
ALTER TABLE `e_footwear_desc`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `e_kids`
--
ALTER TABLE `e_kids`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `e_kids_desc`
--
ALTER TABLE `e_kids_desc`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `e_men`
--
ALTER TABLE `e_men`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `e_men_desc`
--
ALTER TABLE `e_men_desc`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `e_transaction`
--
ALTER TABLE `e_transaction`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Indexes for table `e_transaction_details`
--
ALTER TABLE `e_transaction_details`
  ADD PRIMARY KEY (`id_transaction`,`id_item`);

--
-- Indexes for table `e_women`
--
ALTER TABLE `e_women`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `e_women_desc`
--
ALTER TABLE `e_women_desc`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
