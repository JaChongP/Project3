-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 07, 2021 at 11:35 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Greenify`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_tasks`
--

CREATE TABLE `assigned_tasks` (
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `assigned_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `assign_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assigned_tasks`
--

INSERT INTO `assigned_tasks` (`user_id`, `task_id`, `assigned_date`, `completed_date`, `completed`, `assign_id`) VALUES
(3, 2, '2021-02-06 12:40:24', '2021-02-07 16:21:34', 1, 85),
(3, 5, '2021-02-06 12:41:45', '2021-02-07 16:21:37', 1, 86),
(3, 9, '2021-02-06 12:42:06', '2021-02-06 21:42:10', 1, 87),
(3, 6, '2021-02-06 12:42:31', '2021-02-07 16:21:37', 1, 88),
(3, 5, '2021-02-06 12:42:34', '2021-02-07 16:21:37', 1, 89),
(3, 8, '2021-02-06 12:42:35', '2021-02-07 16:21:40', 1, 90),
(3, 7, '2021-02-06 12:42:40', '2021-02-07 16:21:39', 1, 91),
(3, 10, '2021-02-06 12:42:47', '2021-02-06 21:42:24', 1, 92),
(3, 6, '2021-02-06 12:44:14', '2021-02-07 16:21:37', 1, 93),
(3, 6, '2021-02-06 12:44:16', '2021-02-07 16:21:37', 1, 94),
(3, 8, '2021-02-06 12:44:17', '2021-02-07 16:21:40', 1, 95),
(3, 6, '2021-02-06 12:45:14', '2021-02-07 16:21:37', 1, 96),
(3, 7, '2021-02-06 12:45:16', '2021-02-07 16:21:39', 1, 97),
(3, 9, '2021-02-06 12:45:18', '2021-02-06 21:42:10', 1, 98),
(3, 6, '2021-02-06 12:47:04', '2021-02-07 16:21:37', 1, 99),
(3, 5, '2021-02-06 12:47:07', '2021-02-07 16:21:37', 1, 100),
(3, 4, '2021-02-06 12:52:55', '2021-02-07 16:21:36', 1, 101),
(3, 8, '2021-02-06 12:52:55', '2021-02-07 16:21:40', 1, 102),
(3, 3, '2021-02-06 12:52:56', '2021-02-07 16:21:35', 1, 103),
(3, 11, '2021-02-06 12:52:57', '2021-02-06 22:10:03', 1, 104),
(3, 13, '2021-02-06 12:52:57', '2021-02-07 22:23:59', 1, 105),
(3, 11, '2021-02-06 13:35:57', '2021-02-06 22:10:03', 1, 106),
(3, 10, '2021-02-06 13:35:58', '2021-02-06 21:42:24', 1, 107),
(3, 6, '2021-02-06 13:35:59', '2021-02-07 16:21:37', 1, 108),
(3, 2, '2021-02-06 13:43:26', '2021-02-07 16:21:34', 1, 113),
(3, 5, '2021-02-06 13:43:31', '2021-02-07 16:21:37', 1, 114),
(3, 6, '2021-02-06 13:45:21', '2021-02-07 16:21:37', 1, 115),
(3, 4, '2021-02-06 13:45:21', '2021-02-07 16:21:36', 1, 116),
(3, 4, '2021-02-06 13:45:22', '2021-02-07 16:21:36', 1, 117),
(3, 9, '2021-02-06 13:45:23', '2021-02-06 21:42:10', 1, 118),
(3, 3, '2021-02-06 13:45:24', '2021-02-07 16:21:35', 1, 119),
(3, 9, '2021-02-06 14:02:58', '2021-02-06 21:42:10', 1, 146),
(3, 12, '2021-02-06 14:02:58', '2021-02-07 22:23:25', 1, 147),
(3, 10, '2021-02-06 14:03:03', '2021-02-06 21:42:24', 1, 148),
(3, 3, '2021-02-06 14:03:04', '2021-02-07 16:21:35', 1, 149),
(3, 8, '2021-02-06 14:03:05', '2021-02-07 16:21:40', 1, 150),
(3, 9, '2021-02-06 14:05:23', '2021-02-06 21:42:10', 1, 151),
(3, 8, '2021-02-06 14:05:27', '2021-02-07 16:21:40', 1, 152),
(3, 9, '2021-02-06 15:43:26', '2021-02-06 21:42:10', 1, 158),
(3, 8, '2021-02-06 15:43:26', '2021-02-07 16:21:40', 1, 159),
(3, 7, '2021-02-06 15:43:29', '2021-02-07 16:21:39', 1, 160),
(3, 9, '2021-02-06 15:54:45', '2021-02-06 21:42:10', 1, 162),
(3, 11, '2021-02-06 15:54:46', '2021-02-06 22:10:03', 1, 163),
(3, 10, '2021-02-06 15:54:48', '2021-02-06 21:42:24', 1, 164),
(3, 3, '2021-02-06 15:54:58', '2021-02-07 16:21:35', 1, 165),
(3, 8, '2021-02-06 15:55:00', '2021-02-07 16:21:40', 1, 166),
(3, 7, '2021-02-06 15:55:02', '2021-02-07 16:21:39', 1, 167),
(3, 11, '2021-02-06 15:55:06', '2021-02-06 22:10:03', 1, 168),
(3, 7, '2021-02-06 15:55:08', '2021-02-07 16:21:39', 1, 169),
(3, 5, '2021-02-06 15:55:09', '2021-02-07 16:21:37', 1, 170),
(3, 11, '2021-02-06 15:57:48', '2021-02-06 22:10:03', 1, 171),
(3, 9, '2021-02-06 15:57:50', '2021-02-06 21:42:10', 1, 172),
(3, 2, '2021-02-06 15:57:52', '2021-02-07 16:21:34', 1, 173),
(3, 5, '2021-02-07 15:56:15', '2021-02-07 16:21:37', 1, 264),
(3, 1, '2021-02-07 16:13:54', '2021-02-07 16:21:44', 1, 265),
(3, 2, '2021-02-07 16:13:54', '2021-02-07 16:21:34', 1, 266),
(2, 4, '2021-02-07 16:18:54', '2021-02-07 16:21:36', 1, 270),
(2, 5, '2021-02-07 16:18:55', '2021-02-07 16:21:37', 1, 271),
(2, 6, '2021-02-07 16:18:56', '2021-02-07 16:21:37', 1, 272),
(2, 7, '2021-02-07 16:18:56', '2021-02-07 16:21:39', 1, 273),
(2, 8, '2021-02-07 16:18:57', '2021-02-07 16:21:40', 1, 274),
(2, 1, '2021-02-07 16:21:41', '2021-02-07 16:21:44', 1, 275),
(2, 22, '2021-02-07 16:21:41', '2021-02-07 22:52:40', 1, 276),
(2, 38, '2021-02-07 16:21:42', '2021-02-07 22:36:16', 1, 277),
(2, 39, '2021-02-07 16:21:43', '2021-02-07 22:41:22', 1, 278),
(2, 40, '2021-02-07 16:21:43', '2021-02-07 22:36:18', 1, 279),
(2, 39, '2021-02-07 16:22:13', '2021-02-07 22:41:22', 1, 280),
(2, 52, '2021-02-07 16:22:14', '2021-02-07 22:41:18', 1, 281),
(2, 43, '2021-02-07 16:22:15', '2021-02-07 16:22:23', 1, 282),
(2, 53, '2021-02-07 16:22:16', '2021-02-07 22:26:02', 1, 283),
(2, 50, '2021-02-07 16:22:16', '2021-02-07 23:00:15', 1, 284),
(2, 55, '2021-02-07 16:22:17', '2021-02-07 22:36:08', 1, 285),
(2, 54, '2021-02-07 16:22:18', '2021-02-07 23:00:12', 1, 286),
(2, 40, '2021-02-07 16:22:18', '2021-02-07 22:36:18', 1, 287),
(2, 38, '2021-02-07 16:22:19', '2021-02-07 22:36:16', 1, 288),
(2, 46, '2021-02-07 16:22:36', '2021-02-07 16:22:39', 1, 289),
(2, 39, '2021-02-07 16:22:38', '2021-02-07 22:41:22', 1, 290),
(2, 41, '2021-02-07 16:33:52', '2021-02-07 23:13:03', 1, 291),
(2, 53, '2021-02-07 16:33:53', '2021-02-07 22:26:02', 1, 292),
(2, 22, '2021-02-07 16:33:54', '2021-02-07 22:52:40', 1, 293),
(5, 12, '2021-02-07 22:23:16', '2021-02-07 22:23:25', 1, 294),
(5, 19, '2021-02-07 22:23:19', '2021-02-07 22:23:29', 1, 295),
(5, 13, '2021-02-07 22:23:20', '2021-02-07 22:23:59', 1, 296),
(5, 5, '2021-02-07 22:23:31', NULL, 0, 297),
(2, 39, '2021-02-07 22:26:06', '2021-02-07 22:41:22', 1, 298),
(2, 55, '2021-02-07 22:35:51', '2021-02-07 22:36:08', 1, 299),
(2, 52, '2021-02-07 22:35:53', '2021-02-07 22:41:18', 1, 300),
(2, 48, '2021-02-07 22:35:56', '2021-02-07 23:13:09', 1, 301),
(2, 47, '2021-02-07 22:35:57', '2021-02-07 22:39:26', 1, 302),
(2, 47, '2021-02-07 22:36:11', '2021-02-07 22:39:26', 1, 303),
(2, 40, '2021-02-07 22:36:12', '2021-02-07 22:36:18', 1, 304),
(2, 38, '2021-02-07 22:36:13', '2021-02-07 22:36:16', 1, 305),
(2, 22, '2021-02-07 22:36:14', '2021-02-07 22:52:40', 1, 306),
(2, 48, '2021-02-07 22:39:20', '2021-02-07 23:13:09', 1, 307),
(2, 47, '2021-02-07 22:39:21', '2021-02-07 22:39:26', 1, 308),
(2, 44, '2021-02-07 22:39:21', '2021-02-07 23:12:59', 1, 309),
(2, 47, '2021-02-07 22:39:26', '2021-02-07 22:39:26', 1, 310),
(2, 42, '2021-02-07 22:41:15', '2021-02-07 22:41:17', 1, 311),
(2, 52, '2021-02-07 22:41:15', '2021-02-07 22:41:18', 1, 312),
(2, 39, '2021-02-07 22:41:16', '2021-02-07 22:41:22', 1, 313),
(2, 50, '2021-02-07 22:42:31', '2021-02-07 23:00:15', 1, 314),
(2, 54, '2021-02-07 22:42:32', '2021-02-07 23:00:12', 1, 315),
(2, 22, '2021-02-07 22:42:32', '2021-02-07 22:52:40', 1, 316),
(2, 51, '2021-02-07 22:52:33', '2021-02-07 22:52:43', 1, 317),
(2, 22, '2021-02-07 22:52:35', '2021-02-07 22:52:40', 1, 318),
(2, 44, '2021-02-07 22:52:37', '2021-02-07 23:12:59', 1, 319),
(2, 54, '2021-02-07 23:00:07', '2021-02-07 23:00:12', 1, 320),
(2, 44, '2021-02-07 23:00:09', '2021-02-07 23:12:59', 1, 321),
(2, 50, '2021-02-07 23:00:14', '2021-02-07 23:00:15', 1, 322),
(2, 48, '2021-02-07 23:10:41', '2021-02-07 23:13:09', 1, 323),
(2, 41, '2021-02-07 23:10:42', '2021-02-07 23:13:03', 1, 324),
(2, 51, '2021-02-07 23:10:44', NULL, 0, 325),
(2, 54, '2021-02-07 23:13:02', NULL, 0, 326),
(2, 46, '2021-02-07 23:13:13', NULL, 0, 327);

-- --------------------------------------------------------

--
-- Table structure for table `dailytips`
--

CREATE TABLE `dailytips` (
  `tip_id` int(100) NOT NULL,
  `tip_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dailytips`
--

INSERT INTO `dailytips` (`tip_id`, `tip_name`) VALUES
(1, 'Open up your blinds and use as much natural light as possible in your home before switching on your light bulbs. You get to enjoy some sunshine and save energy!'),
(2, 'Put up a no junk mail sign on your letterbox to limit the amount of paper waste'),
(3, 'Juice the off-cuts of your vegetables and fruits, then use the leftover pulp to make delicious veggie patties or even carrot cake'),
(4, 'Save glass jars and reuse them. They make perfect containers, particularly for homemade jams and fermented foods'),
(5, 'Instead of buying books try to obtain the information online, buy e-books or borrow from your local library'),
(6, 'In winter, avoid using the heater. Wear layers of clothing to keep you warm and throw on another blanket or doona cover on the bed when you sleep'),
(7, 'Don’t wash clothes if you don’t need to. You can air-dry jeans between washes. Jeans can also be worn upwards of 10x or more without needing to be washed'),
(8, 'Don’t throw out materials and unwanted clothing. Donate it to charity, sell on eBay, have a garage sale or give to a designer that specialises in upcycling clothing.'),
(9, 'Let your hair dry naturally instead of blow drying to save energy – unless of course, your house is off-the-grid and you’re using renewable energy'),
(10, 'Don’t accept disposable cutlery such as forks, sporks and even chopsticks. Try to eat in where possible so that you are using ceramic dishes and proper utensils to avoid waste');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `level_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `lc_id` int(11) NOT NULL,
  `level_minexp` int(11) NOT NULL,
  `level_maxexp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level_id`, `level`, `lc_id`, `level_minexp`, `level_maxexp`) VALUES
(1, 1, 1, 0, 50),
(2, 2, 1, 50, 100),
(3, 3, 1, 100, 200),
(4, 4, 1, 200, 350),
(5, 5, 1, 350, 550),
(6, 6, 2, 550, 800),
(7, 7, 2, 800, 1100),
(8, 8, 2, 1100, 1450),
(9, 9, 2, 1450, 1850),
(10, 10, 2, 1850, 2300),
(11, 11, 3, 2300, 2800),
(12, 12, 3, 2800, 3350),
(13, 13, 3, 3350, 3950),
(14, 14, 3, 3950, 4600),
(15, 15, 3, 4600, 5300);

-- --------------------------------------------------------

--
-- Table structure for table `level_category`
--

CREATE TABLE `level_category` (
  `lc_id` int(11) NOT NULL,
  `level_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level_category`
--

INSERT INTO `level_category` (`lc_id`, `level_category`) VALUES
(1, 'Biginner'),
(2, 'Medium'),
(3, 'Advanced');

-- --------------------------------------------------------

--
-- Table structure for table `redeem`
--

CREATE TABLE `redeem` (
  `coupon_id` int(11) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `discount_store` varchar(100) NOT NULL,
  `discount_desc` varchar(250) NOT NULL,
  `coupon_cost` int(11) NOT NULL,
  `coupon_image` varchar(50) NOT NULL,
  `coupon_qr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `redeem`
--

INSERT INTO `redeem` (`coupon_id`, `discount`, `discount_store`, `discount_desc`, `coupon_cost`, `coupon_image`, `coupon_qr`) VALUES
(1, '2 for 1', 'Organii', '2 for 1 on luch valid between 10:00-14:00 every weekday.', 200, 'organii.jpg', 'qr.png'),
(2, '10% discount', 'Kitchen Dates', '10% discount on all food and drinks in store.', 120, 'kitchendates.jpg', 'qr.png'),
(3, '20% discount', 'Flávia Aranha', '20% on all items in store', 120, 'fláviaaranha.jpg', 'qr.png'),
(4, '2 for 1', 'Boa Safra', '2 for 1 on selected items', 200, 'boasafra.jpg', 'qr.png'),
(5, '2 for 1', 'Vegana Burgers', '2 for 1 on \"Burger of the week\"', 200, 'veganaburguers.png', 'qr.png'),
(6, '10% discount', 'Humana', '10% discount on all items in store', 120, 'humana.jpg', 'qr.png'),
(7, '20%', 'ISTO', '20% discount on all items in store', 200, 'isto.jpg', 'qr.png');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `rating_id` int(11) NOT NULL,
  `lifestyle` varchar(50) NOT NULL,
  `store_desc` varchar(250) NOT NULL,
  `store_location` varchar(200) NOT NULL,
  `store_image` varchar(50) NOT NULL,
  `store_website` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `store_name`, `category_id`, `rating_id`, `lifestyle`, `store_desc`, `store_location`, `store_image`, `store_website`) VALUES
(22, 'Couve', 4, 3, 'Vegan', 'Vegan shoe store, from boots to sneakers, also sells socks and scarves to match', 'Rua Maria 47 A', 'couve.jpg', 'https://www.instagram.com/couvelisboa/?hl=pt'),
(23, 'António', 4, 2, 'Vegan, Slow-fashion, Minimalist', 'Timeless and minimalist bags, following the concept of slow fashion', 'Calçada do Sacramento, 26', 'antónio.jpg', 'https://www.antonio-handmadestory.com/'),
(24, 'Boa Safra', 5, 3, 'Vegan, Minimalist', 'Interior Design shop with the minimalist aesthetic and lifetyle in mind', 'Lx FActory. Rua Rodrigues Faria, 103- Edifício K', 'boasafra.jpg', 'https://boasafra.pt/'),
(25, 'Balluta', 4, 3, 'Vegan', 'Located in Nude fashion store, the brand creates collections with the least environmental impact possible', 'Av. Infante Santo 60 J', 'balluta.png', 'https://balluta-shoes.com/'),
(26, 'Flávia Aranha', 2, 3, 'Vegan, Slow-fashion', 'Located in Casa Pau-Brasil, the brand dyes their clothes with flowers, teas and herbs', 'Rua da Escola Politécnica, 42', 'fláviaaranha.jpg', 'https://www.flaviaaranha.com/'),
(27, 'ISTO', 2, 3, 'Vegan, Slow-fashion, Local', 'Produced locally in one of the last textile factories in Lisbon, ISTO focuses on bringing 100% organic fashion', 'Embaixada Príncipe Real', 'isto.jpg', 'https://isto.pt/'),
(28, 'Stró', 2, 3, 'Slow-fashion', 'In the Stró store you can be sure you will fill your shopping bag with blankets, scarves, cozy slippers and berrets', 'Rua da Escola Politécnica 80A e 80B', 'stró.jpg', 'https://pt.by-stro.com/'),
(29, 'NewJester Vintage', 6, 5, 'Thrift store, Slow-fashion', 'Same owners as Ás de Espadas, this is the only thrift store in Lisbon that exclusivly sells clothes for men.', 'Calçada do Carmo, 59', 'newjester.jpg', 'https://www.instagram.com/newjestervintageforman/'),
(30, 'Flamingos Vintage Kilo', 6, 5, 'Thrift store, Slow-fashion', 'Prices range from 13€, 24€ and 39€ per kilo, depending on the piece you\'re choosing, this store only sells by the kilo', 'Rua dos Douradores, 168', 'flamingosvintagekilo.png', 'https://flamingoslisboa.com/'),
(31, 'A Outra Face da Lua', 6, 5, 'Thrift store, Slow-fashion', 'This store brought a new style to the city, and showed that on an old closet you can find pieces with a lot of style', 'Rua da Assunção, 22', 'aoutrafacedalua.jpg', 'https://aoutrafacedalua.com/'),
(32, 'Heartcore', 6, 5, 'Thrift store, Slow-fashion', 'Thrift store focused on streetwear, for more young, edgy and excentic looks', 'Rua do Loreto, 37', 'heartcore.jpg', 'https://www.instagram.com/heartcorevintageclothing/'),
(33, 'Tropical Bairro', 6, 5, 'Thrift store, Slow-fashion', 'It\'s a store not only for the vintage lovers but also those who love vynils', 'Rua de São Cristóvão 3', 'tropicalbairro.jpg', 'https://www.instagram.com/tropicalbairro/'),
(34, 'Retro City Lisboa', 6, 5, 'Thrift store, Slow-fashion', 'Affordable thrift store filled with colourful pieces for all tastes of all past decades', 'Rua Maria Andrade, 43', 'retrocity.jpg', 'https://www.instagram.com/retrocitylisboa/'),
(35, 'Pop Closet', 6, 5, 'Thrift store, Slow-fashion', 'Store divided in 2 rooms with the clothes displayed on colourful scaffoldings, filled with sporty or more glamorous pieces', 'Calçada do Sacramento 48', 'popcloset.jpg', 'https://pop-closet.com/'),
(36, 'Zip Gum Boogie', 6, 5, 'Thrift store, Slow-fashion', 'Same owners as Ás de Espadas and NewJester Vintage but this store focuses on vintage accessories and rock\'n\'roll style', 'Calçada do Carmo,26', 'zipgumboogie.jpg', 'https://www.instagram.com/zipgumboogievintage/'),
(37, 'Humana', 6, 5, 'Thrift store, Slow-fashion', 'Before it was a store it was a non profit organization in favor of protection of the environment from the reuse of textiles', 'Av. Almirante Reis 104-B', 'humana.jpg', 'https://www.humana-portugal.org/'),
(38, 'Ás de Espadas', 6, 5, 'Thrift store, Slow-fashion', 'Tiago Andrade and Bruno Lopes kickstarted their vintage store empire almost a decade ago and this store was the kickstart', 'Calçada do Carmo, 42', 'ásdeespadas.jpg', 'https://www.instagram.com/as.de.espadas/?hl=pt'),
(39, 'Du Chique à Vendre', 6, 5, 'Thrift store, Slow-fashion', 'Store focused on Classics from the big designer brands with items from Channel, Valentino, Prada, Gucci and Louis Vuitton', 'Rua Azedo Gneco 80A', 'duchiqueàvendre.jpg', 'https://www.instagram.com/duchicavendre/?hl=pt'),
(40, 'Xcloset', 6, 5, 'Thrift store, Slow-fashion', 'This thrift store behaves as the common market in the sense that rotates their collections depending on the season', 'Rua Almeida e Sousa, 51A', 'xcloset.jpg', 'https://www.instagram.com/xcloset/?hl=pt'),
(41, 'Loja Baú', 6, 5, 'Thrift store, Slow-fashion', 'This store focuses on bringing chosen brands at na affordable price, and a part of the sales goes to the \"Movimento Rotário\"', 'Rua da Infantaria, 16/ 53A', 'lojabaú.jpg', 'https://www.timeout.pt/lisboa/pt/compras/loja-bau'),
(42, 'Troca Moda', 6, 5, 'Thrift store, Slow-fashion', 'In the store Troca Moda theres models for everyone and every wallet with a few pieces from designer brands', 'Av. Luís Bívar, 5', 'trocamoda.jpg', 'https://www.trocamoda.pt/'),
(43, 'Fair Bazaar', 1, 2, 'Vegan, Cruelty Free', 'Concept store located in Principe Real that brings together fashion, beauty and home decor alternatives, to consumism', 'Praça do Príncipe Real, 26', 'fairbazaar.jpg ', 'https://thefairbazaar.com/'),
(44, 'Organii', 1, 2, 'Vegan, Organic', 'Organii dedicates to the creation of organic cosmetic profucts', 'Rua José D\'Esaguy, 8 D', 'organii.jpg', 'https://organii.com/'),
(45, 'Kitchen Dates', 3, 1, 'Vegan, Local', 'Opened in 2017, they don\'t use animal products, it\'s all local and organic, and the fresh products come from a maximum of 50 kilomters', 'R. Seminário 7A', 'kitchendates.jpg', 'https://kitchendates.pt/'),
(46, 'The Green Affair', 3, 2, 'Vegan', 'It\'s all 100% vegan, nothing from animal origin. The idea is to present smart dishes inspired in international cuisine, with a appelative plating in a sophisticated environment', 'Avenida Duque de Ávila, 32A', 'thegreenaffair.jpg', 'https://www.instagram.com/the_green_affair/'),
(47, 'Veganapati', 3, 1, 'Vegan', 'Veganapati mixes the word vegan to the god of intellect and wisdom Ganapati (also known as Ganesha). The restaurant is vegan and is inspired in Indian cuisine.', 'Rua da Prata - 242', 'veganapati.png', 'https://www.instagram.com/veganapati/'),
(48, 'Vegan Junkies', 3, 1, 'Vegan', 'This restaurant was created to show that fast-food and animal origin doesn\'t need to be used in the same phrase. There\'s choice for everyone from burgers to \"not-chicken wings\" to tacos with tortillas.', 'Rua Luciano Cordeiro, 28', 'veganjunkies.jpg', 'https://www.instagram.com/lisbonveganjunkies/'),
(49, 'Vegana Burgers', 3, 2, 'Vegan', 'The Vegana Burgers was the first fast-food restaurant in Lisbon that offered such a variety of different flavours.', 'Centro Comercial Atrium Saldanha, Praça Duque de Saldanha, 1', 'veganaburguers.png', 'https://www.instagram.com/veganaburgers/'),
(50, 'Jardim das Cerejas', 3, 1, 'Vegan Buffet', 'Everyday theres a vegan buffet at lunch (7,50€) and dinners (9,50€) in the \"Garden of cherries\" direct translation from \"Jardim das Cerejas\", that you can visit in Chiado and now also in Picoas.', 'Calçada do Sacramento, 36', 'jardimdascerejas.jpg', 'https://www.facebook.com/JardimDasCerejas/');

-- --------------------------------------------------------

--
-- Table structure for table `store_categories`
--

CREATE TABLE `store_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_categories`
--

INSERT INTO `store_categories` (`category_id`, `category_name`) VALUES
(1, 'Beauty'),
(2, 'Clothing'),
(3, 'Food'),
(4, 'Accesories'),
(5, 'Interior Design'),
(6, 'Thrift Store');

-- --------------------------------------------------------

--
-- Table structure for table `store_rating`
--

CREATE TABLE `store_rating` (
  `rating_id` int(11) NOT NULL,
  `rating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_rating`
--

INSERT INTO `store_rating` (`rating_id`, `rating`) VALUES
(1, 'Great'),
(2, 'Good'),
(3, 'Ok'),
(4, 'Bad'),
(5, 'Terrible');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_desc` varchar(200) NOT NULL,
  `lc_id` int(11) NOT NULL,
  `task_exp` int(11) NOT NULL,
  `task_coins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_desc`, `lc_id`, `task_exp`, `task_coins`) VALUES
(1, 'Use public transport', 1, 10, 5),
(2, 'Pick up trash outside', 1, 10, 5),
(3, 'Shower less than 10 minutes', 1, 10, 5),
(4, 'Recycle all waste', 1, 10, 5),
(5, 'Reduce meat eaten in your household', 1, 10, 5),
(6, 'Buy seasonal fruit and vegetables', 1, 10, 5),
(7, 'Bike to work/school', 1, 10, 5),
(8, 'Change to reusable diapers and menstrual products', 1, 10, 5),
(9, 'Optimise your food storage', 1, 10, 5),
(10, 'Use reusable bags when buying groceries', 1, 10, 5),
(11, 'Repurpose glass jar', 1, 10, 5),
(12, 'Use washable metal straws instead of disponsable plastic straws', 1, 10, 5),
(13, 'Donate your old devices to school and other intitutes', 1, 10, 5),
(14, 'Using energy-saving LED light bulbs', 1, 50, 25),
(15, 'Buying from local suppliers', 1, 50, 25),
(16, 'Voting for green political parties ', 1, 50, 25),
(17, 'Buy food huggers for fruits and vegetables for optimal storage', 1, 50, 25),
(18, 'Replace Commercial shampoo for solid shampoo', 1, 50, 25),
(19, 'Turn water off while brushing teeth ', 1, 10, 5),
(20, 'Save leftovers', 1, 10, 5),
(21, 'Wear extra layer of clothes instead of turning on heating', 1, 10, 5),
(22, 'Reduce food waste - buy only what you need and make weekly plans for cooking', 2, 20, 15),
(23, 'Open up blinds in daytime instead of turning on lights ', 1, 10, 5),
(24, 'Turn off lights when leaving a room ', 1, 10, 5),
(25, 'Put up a no junk mail sign on your letterbox to limit the amount of paper waste.', 1, 10, 5),
(26, 'Hang your wet clothes on a drying line instead of using an electric dryer', 1, 10, 5),
(27, 'Take the stairs rather than the elevator', 1, 10, 5),
(28, 'Opt to receive digital letters and notices', 1, 10, 5),
(29, 'Ask stores to email you a receipt instead of printing one out for you', 1, 10, 5),
(30, 'Use your phone, tablet or computer for note-taking', 1, 10, 5),
(31, 'Turn off your computer before leaving work', 1, 10, 5),
(32, 'Collect scrap paper in a tray to use later', 1, 10, 5),
(33, 'Use stainless steel drink bottles (or at least plastic-free)', 1, 10, 5),
(34, 'Use dishwasher instead of handwashing - to save water ', 1, 10, 5),
(35, 'Save gift bags and boxes for future use', 1, 10, 5),
(36, 'Switch to a sustainable search engine like Ecosia. They use some of their profits to plant trees, and they run on 100% renewable energy', 1, 10, 5),
(37, 'If you do need to buy new appliances, look second hand first', 1, 10, 5),
(38, 'Buying second hand item/up cycling', 2, 20, 15),
(39, 'Invest in better quality clothing that lasts longer', 2, 20, 15),
(40, 'Support fashion brands that are ethical and environmentally conscious', 2, 20, 15),
(41, 'Buy clothing made of sustainable materials ', 2, 20, 15),
(42, 'Wash your clothes less often', 2, 20, 15),
(43, 'Avoiding single-use plastic items', 2, 20, 15),
(44, 'Take the bus instead of plane when possible', 2, 20, 15),
(45, 'Composting', 2, 20, 15),
(46, 'Shower for less than 7 minutes', 2, 20, 15),
(47, 'Hand wash your clothes - especially if you only have a few things to clean', 2, 20, 15),
(48, 'If you can’t commute to work without your car, organize carpools with your co-workers', 2, 20, 15),
(49, 'Go paperless', 2, 20, 15),
(50, 'Acquire basic sewing skills to patch holes and sew buttons back on.', 2, 20, 15),
(51, 'Transform old clothes into new garments. For example, a dress you don’t wear can be turned into a top and skirt', 2, 20, 15),
(52, 'Source second-hand toys or join a toy library - if you have kids', 2, 20, 15),
(53, 'Give people experiences instead of things. (for christmas, birthdays etc)', 2, 20, 15),
(54, 'Switch to cloud computing and move away from physical hard drives and servers', 2, 20, 15),
(55, 'Get your devices repaired instead of buying new ones', 2, 20, 15),
(56, 'Becoming vegetarian ', 3, 30, 30),
(57, 'Planting trees / growing own vegetables', 3, 30, 30),
(58, 'Making own soap/cleaning products', 3, 30, 30),
(59, 'Make your own face cleanser and scrub ', 3, 30, 30),
(60, 'Shower in less than 5 minutes', 3, 30, 30),
(61, 'Become 100% plastic free', 3, 30, 30),
(62, 'Use solar energy charges for your smartphones and tablets', 3, 30, 30),
(63, 'Becoming vegan', 3, 50, 50),
(64, 'Investing in solar panels', 3, 50, 50),
(65, 'Get an electric car ', 3, 50, 50),
(66, 'Shower in less than 3 minutes', 3, 50, 50),
(67, 'Become 100% zero waste ', 3, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `level_id` int(11) NOT NULL,
  `user_experience` int(11) NOT NULL,
  `user_coins` int(11) NOT NULL,
  `lc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `level_id`, `user_experience`, `user_coins`, `lc_id`) VALUES
(2, 'Josean Chong', 'josean@email.com', '$2y$10$C3v37WFztnF9UOu8hn4A3OwaQqtjNtpwwRUziix1LwuOHEO47JP.W', 8, 1130, 75, 2),
(3, 'User Test', 'user@test.com', '$2y$10$E4YGbukGfD4YlTkmeJGuHuZShyS7pzaWx9QWVNKMwGQmGXTiNjHCO', 5, 360, 180, 1),
(4, 'Test 2', 'test@user.com', '$2y$10$nuPSDirqgdt.PzWoznS9O.CoSLaMFkXWegQJeEcPiYXantgnaawaW', 1, 0, 0, 1),
(5, 'Josean Chong', 'ja@email.com', '$2y$10$/Cl9i0Qv0Lryg/Sxu5QfROAUmIKDLxQABflcPv2UHo08LiO5BwMse', 1, 30, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_favorites`
--

CREATE TABLE `user_favorites` (
  `favotite_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_favorites`
--

INSERT INTO `user_favorites` (`favotite_id`, `user_id`, `store_id`) VALUES
(1, 2, 27),
(2, 2, 45),
(3, 3, 50),
(4, 4, 37);

-- --------------------------------------------------------

--
-- Table structure for table `user_redeem`
--

CREATE TABLE `user_redeem` (
  `redeem_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `redeem_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_redeem`
--

INSERT INTO `user_redeem` (`redeem_id`, `coupon_id`, `user_id`, `redeem_date`) VALUES
(6, 1, 2, '2021-02-07 01:17:29'),
(7, 2, 2, '2021-02-07 01:21:26'),
(8, 1, 2, '2021-02-07 01:21:59'),
(9, 1, 2, '2021-02-07 15:07:43'),
(10, 2, 2, '2021-02-07 22:35:38'),
(11, 3, 2, '2021-02-07 23:00:29'),
(12, 6, 2, '2021-02-07 23:13:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_tasks`
--
ALTER TABLE `assigned_tasks`
  ADD PRIMARY KEY (`assign_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `dailytips`
--
ALTER TABLE `dailytips`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`),
  ADD KEY `lc_id` (`lc_id`);

--
-- Indexes for table `level_category`
--
ALTER TABLE `level_category`
  ADD PRIMARY KEY (`lc_id`);

--
-- Indexes for table `redeem`
--
ALTER TABLE `redeem`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `rating_id` (`rating_id`);

--
-- Indexes for table `store_categories`
--
ALTER TABLE `store_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `store_rating`
--
ALTER TABLE `store_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `lc_id` (`lc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `lc_id` (`lc_id`);

--
-- Indexes for table `user_favorites`
--
ALTER TABLE `user_favorites`
  ADD PRIMARY KEY (`favotite_id`),
  ADD KEY `store_id` (`store_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_redeem`
--
ALTER TABLE `user_redeem`
  ADD PRIMARY KEY (`redeem_id`),
  ADD KEY `coupon_id` (`coupon_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigned_tasks`
--
ALTER TABLE `assigned_tasks`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT for table `dailytips`
--
ALTER TABLE `dailytips`
  MODIFY `tip_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `level_category`
--
ALTER TABLE `level_category`
  MODIFY `lc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `redeem`
--
ALTER TABLE `redeem`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `store_categories`
--
ALTER TABLE `store_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `store_rating`
--
ALTER TABLE `store_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_favorites`
--
ALTER TABLE `user_favorites`
  MODIFY `favotite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_redeem`
--
ALTER TABLE `user_redeem`
  MODIFY `redeem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_tasks`
--
ALTER TABLE `assigned_tasks`
  ADD CONSTRAINT `assigned_tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `assigned_tasks_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`task_id`);

--
-- Constraints for table `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `levels_ibfk_1` FOREIGN KEY (`lc_id`) REFERENCES `level_category` (`lc_id`);

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `store_categories` (`category_id`),
  ADD CONSTRAINT `stores_ibfk_2` FOREIGN KEY (`rating_id`) REFERENCES `store_rating` (`rating_id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`lc_id`) REFERENCES `level_category` (`lc_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`lc_id`) REFERENCES `level_category` (`lc_id`);

--
-- Constraints for table `user_favorites`
--
ALTER TABLE `user_favorites`
  ADD CONSTRAINT `user_favorites_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `stores` (`store_id`),
  ADD CONSTRAINT `user_favorites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_redeem`
--
ALTER TABLE `user_redeem`
  ADD CONSTRAINT `user_redeem_ibfk_1` FOREIGN KEY (`coupon_id`) REFERENCES `redeem` (`coupon_id`),
  ADD CONSTRAINT `user_redeem_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
