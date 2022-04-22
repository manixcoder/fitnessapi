-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 04:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_master`
--

CREATE TABLE `activity_master` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_master`
--

INSERT INTO `activity_master` (`id`, `heading`, `description`) VALUES
(1, 'Little or No Activity', 'Mostly sitting through the day(eg. Desk,Job,Bank Teller)'),
(2, 'Lightly Active', 'Mostly standing through the day (eg. Sales Associate,Teacher)'),
(3, 'Moderately Active', 'Mostly walking or doing physical activities through the day (eg. Tour Guide,Waiter)'),
(4, 'Very Active', 'Mostly doing heavy physical activities through the day(eg. Gym Instructor,Construction Worker)');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@yopmail.com', 'Qwert@123', '2022-04-10 14:05:18', '2022-04-10 14:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `caloriesmaster`
--

CREATE TABLE `caloriesmaster` (
  `item_id` bigint(20) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `cal_value` bigint(20) NOT NULL,
  `foodintake_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caloriesmaster`
--

INSERT INTO `caloriesmaster` (`item_id`, `item_name`, `qty`, `cal_value`, `foodintake_id`) VALUES
(1, 'Chapati', 1, 250, 1),
(2, 'Porridge oats (with water) ', 100, 300, 1),
(3, 'Bagel (Average size)', 1, 257, 1),
(4, 'Baguette', 100, 274, 1),
(5, 'Brownies', 100, 405, 1),
(6, 'Cannoli', 100, 254, 1),
(7, 'Banana Bread (1 average slice)', 1, 138, 1),
(8, 'Banana Nut Bread (1 average slice)', 1, 163, 1),
(9, 'Bun (1 average size)', 1, 316, 1),
(10, 'Caramel Cake(1 average slice)', 1, 193, 1),
(11, 'Beer Bread (1 slice)', 1, 113, 1),
(12, 'Biscuit (plain)', 1, 88, 1),
(13, 'Ciabatta (1 slice)', 1, 135, 1),
(14, 'Challah (1 average slice)', 1, 119, 1),
(15, 'Bran Muffins (average size)', 1, 270, 1),
(16, 'Black Bread (average slice)', 1, 125, 1),
(17, 'Cinnamon Bun(1 average size)', 1, 436, 1),
(18, 'Coffee Cake (1 average slice)', 1, 209, 1),
(19, 'Bread Pudding', 100, 153, 1),
(20, 'Breadsticks (1 stick)', 1, 5, 1),
(21, 'Cornbread', 100, 153, 1),
(22, 'Breadsticks (1 stick)', 1, 5, 1),
(23, 'Brioche ', 100, 346, 1),
(24, 'Crepes (1 average slice)', 1, 112, 1),
(26, 'Brown Bread (1 average slice)', 1, 123, 1),
(27, 'Brioche ', 100, 346, 1),
(30, 'Brown Bread (1 average slice)', 1, 123, 1),
(31, 'Croissant (1 Average size)', 1, 203, 1),
(36, 'Crumpet (1 average size)', 1, 89, 1),
(38, 'Cupcake (1 average size)', 1, 150, 2),
(39, 'Doughnut (1 average size)', 1, 200, 2),
(40, 'Dosa (1 average size)', 1, 100, 3),
(41, 'Coffee Cake (1 average slice)', 1, 200, 2),
(42, 'Empanada (1 average size)', 1, 168, 1),
(43, 'Empanada (1 average size)', 1, 168, 4),
(46, 'English Muffin (1 average size)', 1, 56, 2),
(47, 'Cornflakes', 100, 370, 1),
(48, 'Crackerbread ( 1 average slice)', 1, 17, 1),
(49, 'Cornflakes', 100, 370, 1),
(50, 'Cream Crackers (1 average cracker)', 1, 35, 2),
(51, 'Crumpets (1 average crumper)', 1, 93, 4),
(52, 'Flapjacks basic fruit mix (1 average size)', 1, 230, 2),
(53, 'Macaroni (boiled) ', 100, 95, 3),
(54, 'Muesli ', 100, 390, 1),
(55, 'Naan bread (1 average size) ', 1, 300, 2),
(56, 'Naan bread (1 average size) ', 1, 300, 5),
(57, 'Noodles (boiled) ', 100, 70, 5),
(58, 'Pasta (boiled) ', 100, 110, 3),
(59, 'Potatoes (boiled) ', 100, 70, 3),
(60, 'Potatoes (roast) ', 100, 140, 5),
(61, 'Rice (white boiled) ', 100, 140, 3),
(62, 'Rice (white boiled) ', 100, 140, 5),
(63, 'Rice (egg-fried) ', 100, 200, 3),
(64, 'Rice (egg-fried) ', 100, 200, 5),
(65, 'Rice (Brown) ', 100, 135, 3),
(66, 'Rice (Brown) ', 100, 135, 5),
(67, 'Rice cakes (1 average slice)', 1, 28, 2),
(68, 'Rice cakes (1 average slice)', 1, 28, 4),
(69, 'Ryvita Multi grain (1 average slice)', 1, 37, 3),
(70, 'Ryvita Multi grain (1 average slice)', 1, 37, 5),
(71, 'Ryvita + seed & Oats (1 average slice)', 1, 180, 3),
(72, 'Spaghetti (boiled) ', 100, 101, 3),
(73, 'Spaghetti (boiled) ', 100, 101, 5),
(74, 'Anchovies tinned ', 100, 300, 3),
(75, 'Anchovies tinned ', 100, 300, 5),
(76, 'Bacon average fried ', 100, 500, 3),
(77, 'Bacon average fried ', 100, 500, 5),
(78, 'Bacon average grilled ', 100, 380, 3),
(79, 'Bacon average grilled ', 100, 380, 5),
(80, 'Beef (roast) ', 100, 280, 3),
(81, 'Beef (roast) ', 100, 280, 5),
(82, 'Beef burgers frozen ', 100, 280, 3),
(83, 'Beef burgers frozen ', 100, 280, 5),
(84, 'Chicken ', 100, 200, 3),
(85, 'Chicken ', 100, 200, 5),
(86, 'Cockles ', 100, 50, 3),
(87, 'Cockles ', 100, 50, 5),
(88, 'Cod fresh ', 100, 100, 3),
(89, 'Cod chip shop food ', 100, 200, 3),
(90, 'Cod chip shop food ', 100, 200, 5),
(91, 'Crab fresh ', 100, 110, 3),
(92, 'Crab fresh ', 100, 110, 5),
(93, 'Duck roast ', 100, 430, 3),
(94, 'Duck roast ', 100, 430, 5),
(95, 'Fish cake (1 average size)', 1, 90, 2),
(96, 'Fish cake (1 average size)', 1, 90, 4),
(97, 'Fish fingers (per piece)', 1, 50, 2),
(98, 'Fish fingers (per piece)', 1, 50, 4),
(99, 'Gammon ', 100, 280, 3),
(100, 'Gammon ', 100, 280, 5),
(101, 'Haddock fresh ', 100, 110, 3),
(102, 'Haddock fresh ', 100, 110, 5),
(103, 'Halibut fresh ', 100, 125, 3),
(104, 'Ham ', 100, 240, 3),
(105, 'Ham ', 100, 240, 5),
(106, 'Herring fresh grilled ', 100, 200, 5),
(107, 'Lamb Kidney ', 100, 160, 3),
(108, 'Kipper', 100, 120, 5),
(109, 'Lamb Liver ', 100, 150, 3),
(110, 'Pork Liver ', 100, 150, 5),
(111, 'Liver pate ', 100, 300, 3),
(112, 'Lamb (roast) ', 100, 300, 3),
(113, 'Lamb (roast) ', 100, 300, 5),
(114, 'Lobster (boiled) ', 100, 100, 3),
(115, 'Lobster (boiled) ', 100, 100, 5),
(116, 'Luncheon meat ', 100, 400, 3),
(117, 'Luncheon meat ', 100, 400, 5),
(118, 'Mackerel ', 100, 300, 3),
(119, 'Mackerel ', 100, 300, 5),
(120, 'Mussels', 100, 90, 3),
(121, 'Mussels', 100, 90, 5),
(122, 'Pheasant roast ', 100, 200, 3),
(123, 'Pheasant roast ', 100, 200, 5),
(124, 'Pilchards (tinned) ', 100, 140, 3),
(125, 'Pilchards (tinned) ', 100, 140, 5),
(126, 'Prawns ', 100, 100, 3),
(127, 'Prawns ', 100, 100, 5),
(128, 'Pork', 100, 250, 3),
(129, 'Pork', 100, 250, 5),
(130, 'Pork pie (1 average size)', 1, 225, 3),
(131, 'Pork pie (1 average size)', 1, 225, 5),
(132, 'Rabbit ', 100, 180, 3),
(133, 'Rabbit ', 100, 180, 5),
(134, 'Salmon fresh ', 100, 180, 3),
(135, 'Salmon fresh ', 100, 180, 5),
(136, 'Sardines tinned in oil ', 100, 220, 3),
(137, 'Sardines tinned in oil ', 100, 220, 5),
(138, 'Sardines in tomato sauce ', 100, 180, 3),
(139, 'Sardines in tomato sauce ', 100, 180, 5),
(140, 'Sausage pork fried (1 average size)', 1, 106, 3),
(141, 'Sausage pork fried (1 average size)', 1, 106, 5),
(142, 'Sausage pork grilled (1 average size)', 1, 93, 3),
(143, 'Sausage pork grilled (1 average size)', 1, 93, 5),
(144, 'Scampi fried in oil ', 100, 340, 3),
(145, 'Scampi fried in oil ', 100, 340, 5),
(146, 'Steak & kidney pie (1 average size)', 1, 116, 3),
(147, 'Steak & kidney pie (1 average size)', 1, 116, 5),
(148, 'Taramasalata ', 100, 490, 3),
(149, 'Trout fresh ', 100, 120, 3),
(150, 'Trout fresh ', 100, 120, 5),
(151, 'Tuna tinned water ', 100, 100, 3),
(152, 'Tuna tinned water ', 100, 100, 5),
(153, 'Tuna tinned oil ', 100, 180, 3),
(154, 'Tuna tinned oil ', 100, 180, 3),
(155, 'Tuna tinned oil ', 100, 280, 5),
(156, 'Turkey', 100, 160, 3),
(157, 'Turkey', 100, 160, 5),
(158, 'Veal ', 100, 240, 3),
(159, 'Veal ', 100, 240, 5),
(160, 'Apple (1 average size)', 1, 44, 2),
(161, 'Apple ', 1, 44, 4),
(162, 'Banana ', 1, 65, 2),
(163, 'Banana ', 1, 65, 4),
(164, 'Beans baked ', 100, 80, 1),
(165, 'Beans dried (boiled) ', 100, 130, 1),
(166, 'Blackberries', 100, 25, 2),
(167, 'Blackberries', 100, 25, 4),
(168, 'Blackcurrant ', 100, 30, 2),
(169, 'Blackcurrant ', 100, 30, 4),
(170, 'Broccoli', 100, 32, 3),
(171, 'Broccoli', 100, 32, 5),
(172, 'Cabbage (boiled) ', 100, 20, 3),
(173, 'Cabbage (boiled) ', 100, 20, 5),
(174, 'Cabbage (boiled) ', 100, 20, 2),
(175, 'Cabbage (boiled) ', 100, 20, 4),
(176, 'Carrot (boiled) ', 100, 25, 3),
(177, 'Carrot (boiled) ', 100, 25, 5),
(178, 'Cauliflower (boiled) ', 100, 30, 3),
(179, 'Cauliflower (boiled) ', 100, 30, 5),
(180, 'Celery (boiled) ', 100, 10, 1),
(181, 'Celery (boiled) ', 100, 10, 2),
(182, 'Celery (boiled) ', 100, 10, 3),
(183, 'Celery (boiled) ', 100, 10, 4),
(184, 'Celery (boiled) ', 100, 10, 5),
(185, 'Cherry ', 100, 50, 2),
(186, 'Cherry ', 100, 50, 4),
(187, 'Cherry ', 100, 50, 1),
(188, 'Courgette', 100, 20, 3),
(189, 'Courgette', 100, 20, 5),
(190, 'Cucumber ', 100, 10, 3),
(191, 'Cucumber ', 100, 10, 5),
(192, 'Cucumber ', 100, 10, 2),
(193, 'Cucumber ', 100, 10, 4),
(194, 'Dates (1 average size)', 1, 23, 2),
(195, 'Dates (1 average size)', 1, 23, 4),
(196, 'Grapes ', 100, 62, 1),
(197, 'Grapes ', 100, 62, 2),
(198, 'Grapes ', 100, 62, 4),
(199, 'Grapefruit ', 100, 35, 1),
(200, 'Grapefruit ', 100, 35, 2),
(201, 'Grapefruit ', 100, 35, 3),
(202, 'Grapefruit ', 100, 35, 4),
(203, 'Kiwi', 100, 50, 1),
(204, 'Kiwi', 100, 50, 2),
(205, 'Kiwi', 100, 50, 4),
(206, 'Leek (boiled) ', 100, 20, 3),
(207, 'Leek (boiled) ', 100, 20, 5),
(208, 'Lentils (boiled) ', 100, 100, 3),
(209, 'Lentils (boiled) ', 100, 100, 5),
(210, 'Lettuce', 100, 15, 3),
(211, 'Lettuce', 100, 15, 5),
(212, 'Lettuce', 100, 15, 2),
(213, 'Lettuce', 100, 15, 4),
(214, 'Melon', 100, 28, 2),
(215, 'Melon', 100, 28, 4),
(216, 'Mushrooms raw (one average size) ', 1, 3, 1),
(217, 'Mushrooms raw (one average size) ', 1, 3, 3),
(218, 'Mushrooms raw (one average size) ', 1, 3, 5),
(219, 'Olives ', 100, 80, 1),
(220, 'Olives ', 100, 80, 2),
(221, 'Olives ', 100, 80, 3),
(222, 'Olives ', 100, 80, 4),
(223, 'Olives ', 100, 80, 5),
(224, 'Onion (boiled) ', 100, 18, 3),
(225, 'Onion (boiled) ', 100, 18, 5),
(226, 'One red Onion ', 100, 33, 3),
(227, 'One red Onion ', 100, 33, 5),
(228, 'Onion spring ', 100, 25, 3),
(229, 'Onion spring ', 100, 25, 5),
(230, 'Onion (fried) ', 100, 155, 3),
(231, 'Onion (fried) ', 100, 155, 5),
(232, 'Orange', 1, 50, 1),
(233, 'Orange', 1, 50, 2),
(234, 'Orange', 1, 50, 4),
(235, 'Peas ', 100, 148, 3),
(236, 'Peas ', 100, 148, 5),
(237, 'Peach', 1, 30, 2),
(238, 'Peach', 1, 30, 4),
(239, 'Pear ', 1, 38, 2),
(240, 'Pear ', 1, 38, 4),
(241, 'Pepper yellow (1 average size)', 1, 50, 1),
(242, 'Pepper yellow (1 average size)', 1, 50, 2),
(243, 'Pepper yellow (1 average size)', 1, 50, 4),
(244, 'Pineapple ', 100, 40, 2),
(245, 'Pineapple ', 100, 40, 4),
(246, 'Pineapple ', 100, 40, 1),
(247, 'Plum (1 average size)', 1, 39, 1),
(248, 'Plum (1 average size)', 1, 39, 2),
(249, 'Plum (1 average size)', 1, 39, 4),
(250, 'Spinach ', 100, 8, 1),
(251, 'Spinach ', 100, 8, 3),
(252, 'Spinach ', 100, 8, 5),
(253, 'Strawberries (1 average) ', 1, 30, 1),
(254, 'Strawberries (1 average) ', 1, 30, 2),
(255, 'Strawberries (1 average) ', 1, 30, 4),
(256, 'Sweetcorn', 100, 90, 2),
(257, 'Sweetcorn', 100, 90, 4),
(258, 'Sweetcorn', 100, 90, 3),
(259, 'Sweetcorn', 100, 90, 5),
(260, 'Sweetcorn on the cob ', 1, 70, 2),
(261, 'Sweetcorn on the cob ', 1, 70, 4),
(262, 'Tomato (1 average sized)', 1, 20, 3),
(263, 'Tomato (1 average sized)', 1, 20, 5),
(264, 'Tomato cherry ', 100, 17, 2),
(265, 'Tomato cherry ', 100, 17, 4),
(266, 'Tomato puree ', 100, 70, 1),
(267, 'Tomato puree ', 100, 70, 3),
(268, 'Tomato puree ', 100, 70, 5),
(269, 'Watercress ', 100, 20, 3),
(270, 'Watercress ', 100, 20, 5),
(271, 'Watercress ', 100, 20, 1),
(272, 'Cheddar reduced fat ', 100, 260, 3),
(273, 'Cheddar reduced fat ', 100, 260, 5),
(274, 'Cheese spreads average ', 100, 270, 1),
(275, 'Cottage cheese low fat ', 100, 80, 1),
(276, 'Cottage cheese low fat ', 100, 80, 2),
(277, 'Cottage cheese low fat ', 100, 80, 3),
(278, 'Cottage cheese low fat ', 100, 80, 4),
(279, 'Cottage cheese low fat ', 100, 80, 5),
(280, 'Cream cheese ', 100, 428, 1),
(281, 'Cream cheese ', 100, 428, 3),
(282, 'Cream cheese ', 100, 428, 5),
(283, 'Cream fresh single ', 100, 200, 3),
(284, 'Cream fresh single ', 100, 200, 5),
(285, 'Cream fresh single ', 100, 200, 1),
(286, 'Egg ', 1, 75, 1),
(287, 'Egg', 1, 75, 2),
(288, 'Egg', 1, 75, 3),
(289, 'Egg', 1, 75, 4),
(290, 'Egg', 1, 75, 5),
(291, 'Egg fried ', 1, 180, 1),
(292, 'Fromage frais ', 100, 125, 1),
(293, 'Ice cream (plain)', 100, 180, 4),
(294, 'Ice cream (plian)', 100, 180, 2),
(295, 'Milk whole (ml)', 100, 68, 1),
(296, 'Milk whole ', 100, 68, 2),
(297, 'Milk whole ', 100, 68, 4),
(298, 'Milk semi-skimmed ', 100, 50, 1),
(299, 'Milk semi-skimmed ', 100, 50, 2),
(300, 'Milk semi-skimmed ', 100, 50, 4),
(301, 'Milk Soya ', 100, 36, 1),
(302, 'Milk Soya ', 100, 36, 2),
(303, 'Milk Soya ', 100, 36, 4),
(304, 'Mousse flavoured ', 100, 140, 1),
(305, 'Mousse flavoured ', 100, 140, 2),
(306, 'Mousse flavoured ', 100, 140, 4),
(307, 'Omelette with cheese ', 100, 266, 1),
(308, 'Trifle with cream ', 100, 190, 2),
(309, 'Trifle with cream ', 100, 190, 4),
(310, 'Yogurt natural ', 100, 60, 1),
(311, 'Yogurt natural ', 100, 60, 2),
(312, 'Yogurt natural ', 100, 60, 3),
(313, 'Yogurt natural ', 100, 60, 4),
(314, 'Yogurt natural ', 100, 60, 5),
(315, 'Yogurt reduced fat ', 100, 45, 1),
(316, 'Yogurt reduced fat ', 100, 45, 2),
(317, 'Yogurt reduced fat ', 100, 45, 3),
(318, 'Yogurt reduced fat ', 100, 45, 4),
(319, 'Yogurt reduced fat ', 100, 45, 5),
(320, 'Focaccia', 100, 249, 1),
(321, 'Garlic Bread (1 medium slice)', 1, 100, 1),
(322, 'Garlic Bread (1 medium slice)', 1, 100, 2),
(323, 'Garlic Bread (1 medium slice)', 1, 100, 3),
(324, 'Garlic Bread (1 medium slice)', 1, 100, 4),
(325, 'Garlic Bread (1 medium slice)', 1, 100, 5),
(326, 'Hot Dog Buns', 1, 170, 3),
(327, 'Hot Dog Buns', 1, 170, 5),
(328, 'Muffin (1 medium size)', 1, 296, 2),
(329, 'Muffin (1 medium size)', 1, 296, 4),
(330, 'Multi-Grain Bread', 100, 265, 1),
(331, 'Naan', 1, 275, 3),
(332, 'Naan', 1, 275, 5),
(333, 'Oatmeal Cookies', 100, 450, 2),
(334, 'Oatmeal Cookies', 100, 450, 4),
(335, 'Egg Roll (1 medium size)', 1, 250, 2),
(336, 'Egg Roll (1 medium size)', 1, 250, 4),
(337, 'Falafel (1 medium size)', 1, 56, 2),
(338, 'Falafel (1 medium size)', 1, 56, 4),
(339, 'Filet-o-Fish', 100, 282, 3),
(340, 'Filet-o-Fish', 100, 282, 5),
(341, 'Fish and Chips', 100, 195, 3),
(342, 'Fish and Chips', 100, 195, 5),
(343, 'Fish Sandwich', 1, 136, 2),
(344, 'Fish Sandwich', 1, 136, 4),
(345, 'Grilled Chicken Salad', 100, 88, 3),
(346, 'Grilled Chicken Salad', 100, 88, 5),
(347, 'Hot Dog (1 medium size)', 1, 269, 3),
(348, 'Hot Dog (1 medium size)', 1, 269, 5),
(349, 'Lasagna', 100, 132, 3),
(350, 'Lasagna', 100, 132, 5),
(351, 'Chicken Fajita', 1, 433, 3),
(352, 'Chicken Fajita', 1, 234, 5),
(353, 'Wasabi', 100, 109, 3),
(354, 'Wasabi', 100, 109, 5),
(355, 'BBQ Rib', 100, 212, 3),
(356, 'BBQ Rib', 100, 212, 5),
(357, 'Avocado (1 medium size)', 1, 160, 1),
(358, 'Avocado (1 medium size)', 1, 160, 2),
(359, 'Avocado (1 medium size)', 1, 160, 3),
(360, 'Avocado (1 medium size)', 1, 160, 4),
(361, 'Avocado (1 medium size)', 1, 160, 5);

-- --------------------------------------------------------

--
-- Table structure for table `challangesmaster`
--

CREATE TABLE `challangesmaster` (
  `id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `healthoption` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `IsPregency` tinyint(1) NOT NULL DEFAULT 0,
  `medicalconditionId` int(11) NOT NULL,
  `agestart` int(11) NOT NULL,
  `ageend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challangesmaster`
--

INSERT INTO `challangesmaster` (`id`, `url`, `healthoption`, `gender`, `IsPregency`, `medicalconditionId`, `agestart`, `ageend`) VALUES
(3, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/buildmuscle/legs.gif', 3, 'F', 0, 5, 20, 29),
(8, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/homeworkout/reverseLenges.gif', 4, 'F', 0, 5, 20, 29),
(9, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/homeworkout/squats.gif', 4, 'F', 0, 5, 50, 59),
(10, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightgain/frontsquat.gif', 2, 'M', 0, 5, 20, 29),
(11, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightgain/jumpingsquat.gif', 2, 'F', 0, 5, 40, 49),
(12, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/homeworkout/lunges.gif', 4, 'F', 0, 5, 20, 29),
(13, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/buildmuscle/abs.gif', 3, 'F', 0, 5, 10, 19),
(14, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/buildmuscle/legpull.gif', 3, 'F', 0, 5, 30, 39),
(15, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/homeworkout/fullbody.gif', 4, 'F', 0, 5, 30, 39),
(16, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/homeworkout/jumpingjacks.gif', 4, 'M', 0, 5, 20, 29),
(17, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/homeworkout/jumpingjacks.gif', 4, 'M', 0, 5, 20, 29),
(18, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/homeworkout/legs.gif', 4, 'F', 0, 5, 30, 39),
(19, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightgain/lunges.gif', 4, 'M', 0, 5, 20, 29),
(20, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightgain/frontsquat.gif', 2, 'M', 0, 5, 30, 39),
(21, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightgain/jumpingsquat.gif', 2, 'F', 0, 5, 20, 29),
(22, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightgain/lunges.gif', 2, 'M', 0, 5, 40, 49),
(23, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightloss/climbing.gif', 1, 'F', 0, 5, 20, 29),
(24, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightloss/fullbody.gif', 1, 'F', 0, 5, 30, 39),
(25, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightloss/legpress.gif', 1, 'F', 0, 5, 40, 49),
(26, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightloss/legs.gif', 1, 'F', 0, 5, 20, 29),
(27, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightloss/running.gif', 1, 'F', 0, 5, 20, 29),
(28, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightloss/sidebridge.gif', 1, 'F', 0, 5, 50, 59),
(29, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/angerIssues/weightloss/sidebridge.gif', 1, 'F', 0, 5, 60, 69),
(30, 'http://20293693.sost.blackburn.ac.uk/fitnessapi/vendor/challenges/cholesterol/weightloss/jumpinglunges.gif', 1, 'F', 0, 2, 20, 29);

-- --------------------------------------------------------

--
-- Table structure for table `foodintake`
--

CREATE TABLE `foodintake` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodintake`
--

INSERT INTO `foodintake` (`id`, `name`) VALUES
(1, 'Breakfast'),
(2, 'Morning Snacks'),
(3, 'Lunch'),
(4, 'Evening Snacks '),
(5, 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `healthmaster`
--

CREATE TABLE `healthmaster` (
  `id` int(11) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `heading` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `healthmaster`
--

INSERT INTO `healthmaster` (`id`, `icon`, `heading`) VALUES
(1, 'a.png', 'COACH GUIDANCE'),
(2, 'b.png', 'DIET PLAN'),
(3, 'c.png', 'WEIGHT LOSS'),
(4, 'c.png', 'WEIGHT GAIN'),
(5, 'd.png', 'MUSCLE GAIN'),
(6, 'e.png', 'HOME WORKOUT');

-- --------------------------------------------------------

--
-- Table structure for table `homeapi`
--

CREATE TABLE `homeapi` (
  `Id` int(11) NOT NULL,
  `heading1` varchar(200) NOT NULL,
  `heading2` varchar(200) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `videolink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `homemaster`
--

CREATE TABLE `homemaster` (
  `Id` int(8) NOT NULL,
  `IsAllergiesLink` varchar(1000) NOT NULL,
  `IsPregnentLink` varchar(1000) NOT NULL,
  `IsDefaultLink` varchar(1000) NOT NULL,
  `bottomHeader` varchar(9000) NOT NULL,
  `bottomNotes` varchar(9000) NOT NULL,
  `IsAllergiesBottomHeader` varchar(9000) NOT NULL,
  `IsAllergiesBottomNotes` varchar(9000) NOT NULL,
  `IsPregnentBottomHeader` varchar(9000) NOT NULL,
  `IsPregnentBottomNotes` varchar(9000) NOT NULL,
  `healthoption1Link` varchar(2000) NOT NULL,
  `healthoption2Link` varchar(2000) NOT NULL,
  `healthoption3Link` varchar(2000) NOT NULL,
  `healthoption4Link` varchar(2000) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homemaster`
--

INSERT INTO `homemaster` (`Id`, `IsAllergiesLink`, `IsPregnentLink`, `IsDefaultLink`, `bottomHeader`, `bottomNotes`, `IsAllergiesBottomHeader`, `IsAllergiesBottomNotes`, `IsPregnentBottomHeader`, `IsPregnentBottomNotes`, `healthoption1Link`, `healthoption2Link`, `healthoption3Link`, `healthoption4Link`, `DateTime`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2022-04-08 15:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`id`, `name`) VALUES
(1, 'egg'),
(2, 'salt'),
(3, 'sugar'),
(4, 'chocolate'),
(5, 'vanilla extract'),
(6, 'flour');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `category_id`, `created`, `modified`) VALUES
(1, 'LG P880 4X HD', 'My first awesome phone!', 336, 3, '2014-06-01 01:12:26', '2014-05-31 12:12:26'),
(2, 'Google Nexus 4', 'The most awesome phone of 2013!', 299, 2, '2014-06-01 01:12:26', '2014-05-31 12:12:26'),
(3, 'Samsung Galaxy S4', 'How about no?', 600, 3, '2014-06-01 01:12:26', '2014-05-31 12:12:26'),
(6, 'Bench Shirt', 'The best shirt!', 29, 1, '2014-06-01 01:12:26', '2014-05-30 21:12:21'),
(7, 'Lenovo Laptop', 'My business partner.', 399, 2, '2014-06-01 01:13:45', '2014-05-30 21:13:39'),
(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', 259, 2, '2014-06-01 01:14:13', '2014-05-30 21:14:08'),
(9, 'Spalding Watch', 'My sports watch.', 199, 1, '2014-06-01 01:18:36', '2014-05-30 21:18:31'),
(10, 'Sony Smart Watch', 'The coolest smart watch!', 300, 2, '2014-06-06 17:10:01', '2014-06-05 13:09:51'),
(11, 'Huawei Y300', 'For testing purposes.', 100, 2, '2014-06-06 17:11:04', '2014-06-05 13:10:54'),
(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', 60, 1, '2014-06-06 17:12:21', '2014-06-05 13:12:11'),
(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', 70, 1, '2014-06-06 17:12:59', '2014-06-05 13:12:49'),
(26, 'Another product', 'Awesome product!', 555, 2, '2014-11-22 19:07:34', '2014-11-21 16:07:34'),
(28, 'Wallet', 'You can absolutely use this one!', 799, 6, '2014-12-04 21:12:03', '2014-12-03 18:12:03'),
(31, 'Amanda Waller Shirt', 'New awesome shirt!', 333, 1, '2014-12-13 00:52:54', '2014-12-11 21:52:54'),
(42, 'Nike Shoes for Men', 'Nike Shoes', 12999, 3, '2015-12-12 06:47:08', '2015-12-12 01:47:08'),
(48, 'Bristol Shoes', 'Awesome shoes.', 999, 5, '2016-01-08 06:36:37', '2016-01-08 01:36:37'),
(60, 'Rolex Watch', 'Luxury watch.', 25000, 1, '2016-01-11 15:46:02', '2016-01-11 10:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `level_master`
--

CREATE TABLE `level_master` (
  `Lid` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `desctiption` varchar(1000) NOT NULL,
  `minCalcBurn` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `measure`
--

CREATE TABLE `measure` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `measure`
--

INSERT INTO `measure` (`id`, `name`) VALUES
(1, 'CUP'),
(2, 'TEASPOON'),
(3, 'TABLESPOON');

-- --------------------------------------------------------

--
-- Table structure for table `medical_condition_master`
--

CREATE TABLE `medical_condition_master` (
  `id` int(11) NOT NULL,
  `MC` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_condition_master`
--

INSERT INTO `medical_condition_master` (`id`, `MC`) VALUES
(1, 'Diabetes'),
(2, 'Cholesterol'),
(3, 'Hypertension'),
(4, 'PCOS'),
(5, 'Depression'),
(6, 'Anger issues'),
(7, 'Sleep issues'),
(8, 'Loneliness'),
(9, 'Relationship stress'),
(10, 'Thyroid');

-- --------------------------------------------------------

--
-- Table structure for table `pedo_master`
--

CREATE TABLE `pedo_master` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `startLat` double NOT NULL,
  `startLong` double NOT NULL,
  `stopLat` double NOT NULL,
  `stopLong` double NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `timetaken` float NOT NULL,
  `calsBurn` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `instructions` varchar(5000) NOT NULL,
  `Ingredients1` varchar(5000) NOT NULL,
  `Ingredients2` varchar(5000) NOT NULL,
  `Ingredients3` varchar(5000) NOT NULL,
  `image` varchar(3000) NOT NULL DEFAULT 'noimage.png',
  `cat` varchar(2) NOT NULL,
  `createdby` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `description`, `instructions`, `Ingredients1`, `Ingredients2`, `Ingredients3`, `image`, `cat`, `createdby`) VALUES
(1, 'Bajan cou cou with spicy fish recipe', 'A low fat adaptation of the delicious national dish of Barbados cornmeal and okra, served with marinated fish in a tasty spicy sauce.', 'Add the parsley, celery, spring onion, onion, ginger, 4 sprigs of fresh thyme, red chilli and lime juice to a food processor and pulse several times to give a coarse green marinade. Put the fish fillets in a bowl, then pour in the mixture. Turn and brush the fish well to make sure it\'s completely covered by the marinade. ', '60g fresh coriander\r\n35g fresh parsley\r\n2 stalks celery, roughly chopped\r\n3 spring onions, chopped\r\n5 garlic cloves', 'half a small onion\r\n2.5cm (1 inch) chunk of fresh ginger, peeled\r\n4 sprigs thyme\r\n4 red mild chilies', '2 teaspoons lime juice\r\n650g white fish fillets (such as coley, cod or pollock), cleaned and washed', 'http://20293693.sost.blackburn.ac.uk/fitnessapi/recipeupload/food2.png', 'NV', 10),
(36, 'Black eyed bean mole with salsaBlack eyed bean mole with salsa', 'Try this healthy dish as a quick and easy low calories lunch.', '1 Red onion\n2 large tomatoes\n2 tbsp fresh coriander', '2 tsp oil\n1 Red onion\n1 tbsp clove', '1 tbsp chilli\n400g black eyed', 'Tip all the salsa ingredients into bowl\nStir together\nHeat the oil', 'http://20293693.sost.blackburn.ac.uk/fitnessapi/recipeupload/bean.jpg', 'NV', 10),
(39, 'Spinach and Mashroom Gnocchi Frittata', 'A Big breakfast doesn\'t have to mean a big pile of dishes.', 'in a large liddes ovenroof frying pan, heat the butter over a medium heat.\nAdd the Mashroom and fry for 5 minutes. \nMix the gnocchi with the paprika.\nPut the pan under the grill for 4 to 5 minutes.', '1 large onion \n200g chestnut muahroom', '200g baby spinach\n2 tsp sweet smoked paprika', '6 large eggs', 'http://20293693.sost.blackburn.ac.uk/fitnessapi/recipeupload/profileImage_jpM5.jpg', 'NV', 10),
(41, 'Bajan with spicy fish', 'A low fat adaptation of the delicious national dish of Barbados cornmeal and okra, served with marinated fish in a tasty spicy sauce.', 'Add the parsley, celery, spring onion, onion, ginger, 4 sprigs of fresh thyme, red chilli and lime juice to a food processor and pulse several times to give a coarse green marinade. Put the fish fillets in a bowl, then pour in the mixture. Turn and brush the fish well to make sure it\'s completely covered by the marinade. ', '60g fresh coriander\r\n35g fresh parsley\r\n2 stalks celery, roughly chopped\r\n3 spring onions, chopped\r\n5 garlic cloves', 'half a small onion\r\n2.5cm (1 inch) chunk of fresh ginger, peeled\r\n4 sprigs thyme\r\n4 red mild chilies', '2 teaspoons lime juice\r\n650g white fish fillets (such as coley, cod or pollock), cleaned and washed', 'https://th.bing.com/th/id/OIP.tYiXmr0gx5QhmLO5YZ9JXQHaD2?pid=ImgDet&rs=1', 'NV', 0),
(43, 'Gnocchi Frittata', 'A Big breakfast doesn\'t have to mean a big pile of dishes.', 'in a large liddes ovenroof frying pan, heat the butter over a medium heat.\r\nAdd the Mashroom and fry for 5 minutes. \r\nMix the gnocchi with the paprika.\r\nPut the pan under the grill for 4 to 5 minutes.', '1 large onion \r\n200g chestnut muahroom', '200g baby spinach\r\n2 tsp sweet smoked paprika', '6 large eggs', 'https://moroccanfoodtour.com/wp-content/uploads/2020/05/MFT-Tetouan-Food-Tour-5.jpg', 'NV', 0),
(44, 'White Bean Casserole', 'Make this easy chipolata, bean and roasted veg', 'Roast the pepper, carrots and onion in a deep baking dish for 15 mins. \r\nStir in the mustard and peas and return to the oven for 5 mins\r\nRest for 10 mins, then serve with potatoes, pasta or rice.\r\n', '1 red or yellow pepper\r\n2 carrots', '400g can white beans\r\nchicken stock', '2 tsp Dijon mustard\r\n100g frozen peas', 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/sausage-casserole-03194e6.jpg?quality=90&webp=true&resize=375,341', 'NV', 0);

-- --------------------------------------------------------

--
-- Table structure for table `target_master`
--

CREATE TABLE `target_master` (
  `id` int(11) NOT NULL,
  `TargetName` varchar(300) NOT NULL,
  `TargetDesc` varchar(400) NOT NULL,
  `BMI` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userhealthmaster`
--

CREATE TABLE `userhealthmaster` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `bmi` varchar(100) NOT NULL,
  `TotalKmWalk` varchar(100) NOT NULL,
  `usercurrentLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '""',
  `lastname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '""',
  `profileimage` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '""',
  `IsActive` bit(1) NOT NULL DEFAULT b'1',
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '""',
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'M',
  `weight` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `goalweight` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `height` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `activityid` int(11) NOT NULL DEFAULT 1,
  `medicalcondition` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `Age` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `healthOption` int(11) NOT NULL DEFAULT 0,
  `bmi` int(11) DEFAULT 0,
  `GoalStep` int(11) NOT NULL DEFAULT 0,
  `GoalWater` int(11) NOT NULL DEFAULT 0,
  `CalGoal` int(11) NOT NULL DEFAULT 0,
  `Level` int(11) NOT NULL DEFAULT 0,
  `IsPregnent` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `IsAllergies` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `Rating` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `password`, `firstname`, `lastname`, `profileimage`, `IsActive`, `mobile`, `gender`, `weight`, `goalweight`, `height`, `datetime`, `activityid`, `medicalcondition`, `Age`, `healthOption`, `bmi`, `GoalStep`, `GoalWater`, `CalGoal`, `Level`, `IsPregnent`, `IsAllergies`, `Rating`) VALUES
(1, '1', 'admin', 'admin@gmail.com', 'c97db34e3707f4b7cf134121353cb51f', 'test', 'test', 'profileImage_7DzY.jpg', b'1', '+44-224435555', 'M', '60', '50', '165', '2022-02-05 18:12:18', 1, 'Cholesterol,Diabetes,Depression', '44', 1, 22, 2000, 10, 2000, 5, '0', '0', '0'),
(10, '2', 'test', '20293693@live.blackburn.ac.uk', '$2y$10$npus9pPVTc9zEmwbCmmnYu5Q7z5CpZ.WmgSWZRF0OuKycszfhRbva', 'test', 'test', 'profileImage_7DzY.jpg', b'1', '+44-224435555', 'M', '60', '50', '165', '2022-02-05 18:12:18', 1, 'Cholesterol,Diabetes,Depression', '44', 1, 22, 2000, 10, 2000, 5, '0', '0', '0'),
(11, '2', 'sam', '2029369@live.blackburn.ac.uk', '$2y$10$uGEJuWJrwOJFg5qwbNbheOYw/UfYbKujJDM21WOpnL4v2sAOpoVx.', 'Saima', 'Azhar', '\"\"', b'1', '42423423', '', '44', '', '555', '2022-02-05 18:13:48', 1, 'RelationshipStress,Loneliness', '23', 0, 0, 0, 0, 0, 0, '0', '0', '0'),
(13, '2', 'Sam', 'sam@sam.com', '$2y$10$MThwO2VapjxBNhtFNde1uO1l.y.KHdyNk2W26khaiNqrWd97diIuy', 'Sam', 'Azhar', '\"\"', b'1', '+44-1234567890', 'F', '55', '', '5.4', '2022-02-22 22:45:40', 1, 'RelationshipStress,Loneliness', '25', 3, 0, 0, 0, 0, 0, '0', '0', '0'),
(14, '2', 'Mick', 'seem01@blackburn.ac.uk', '$2y$10$YrDHkXzQH45OPuU497/PqO618f80GqKi7SOlx.DFdNsBQCyagkgqS', 'Mick', 'Seedall', '\"\"', b'1', '+44-1234568799', 'M', '55', '', '200', '2022-02-23 14:26:07', 1, 'RelationshipStress,Loneliness', '25', 3, 0, 0, 0, 0, 0, '0', '0', '0'),
(15, '2', 'test', 'test@hotmail.com', '$2y$10$ZI2gA5xCzLjoyJ1724rQCOmTLUealbXJGRn8DvPQ7RlwxuBNsCY4y', 'test', 'test', '\"\"', b'1', '+44-1234567897', 'F', '80', '0', '165', '2022-03-08 18:19:32', 1, 'RelationshipStress,Loneliness', '20', 3, 0, 0, 0, 0, 0, '0', '0', '0'),
(16, '2', 'Demo', 'demo@hotmail.com', '$2y$10$AYq5tEFKezTq5s8mcBoHCewuF9NvDN92VqpeX0L6WuSASfqqPj34S', 'Demo', 'Test', '\"\"', b'1', '+44-123456789_', 'F', '60', '0', '155', '2022-03-09 14:29:23', 1, 'RelationshipStress,AngerIssues,Depression', '14', 3, 0, 0, 0, 0, 0, '0', '0', '0'),
(17, '2', 'Demo', 'demo2@hotmail.com', '$2y$10$OAOAA3SCrwX6SDGiRmaIMeSxggMGd21C6mz3zUNusSDcx2FQ71tnu', 'Demo', 'Test', '\"\"', b'1', '+44-123456789_', 'F', '60', '0', '155', '2022-03-09 14:32:48', 1, 'NoMedicalCondition', '14', 3, 0, 0, 0, 0, 0, '0', '0', '0'),
(18, '2', 'Demo', 'demo3@hotmail.com', '$2y$10$EZiwHf.JMoe4MBzgWy8gSulk/S8Zx3A2D/CgOCgIVhWxtuEi3aoGi', 'Demo', 'Test', '\"\"', b'1', '+44-123456789_', 'F', '60', '0', '155', '2022-03-09 14:34:39', 1, 'NoMedicalCondition', '14', 2, 0, 0, 0, 0, 0, '0', '0', '0'),
(19, '2', 'Home', 'home@hotmail.com', '$2y$10$ga0jwoH7L7wC/1YAfOP.Nuz1gjcvI2CT2vcjk4tiiECN2VRbiHruq', 'Home', 'Home', 'profileImage_lymw.jpg', b'1', '+44-1234567890', 'M', '66', '0', '165', '2022-03-09 14:39:14', 1, 'Thyroid', '20', 4, 0, 0, 0, 0, 0, '0', '0', '0'),
(20, '2', 'BuildM', 'buildM@hotmail.com', '$2y$10$fQU2Lhp1p3//QoIxo6uZFOy3LYRG9IVKLqIePHsDdxEHjq1CIe8S.', 'BuildM', 'M', '\"\"', b'1', '+44-1234567890', 'M', '56', '0', '156', '2022-03-09 14:56:07', 1, 'AngerIssues', '45', 3, 0, 0, 0, 0, 0, '0', '0', '0'),
(21, '2', 'Test', 'test1@hitmail.com', '$2y$10$KQSH/P8hdzZjxbuOoI0iQuojLCFH4EY5GBrxxtx1SqaLWFuMXjXNW', 'Test', 'Test', 'profileImage_Cuve.jpg', b'1', '+44-1234567890', 'F', '55', '0', '165', '2022-03-10 15:40:26', 1, 'NoMedicalCondition', '25', 1, 20, 0, 0, 0, 0, '0', '0', '0'),
(22, '2', 'Tab', 'tab@hotmail.com', '$2y$10$w07PyzIjPFpPvTxYFxIf.Op8Rgp3GthV9IBkpv25uwrn9bldIzCX.', 'Tab', 'Tab', '\"\"', b'1', '+44-1234567890', 'F', '50', '60', '155', '2022-03-10 20:27:46', 1, 'RelationshipStress,Loneliness,Depression', '23', 3, 21, 0, 0, 0, 0, '0', '0', '0'),
(24, '2', 'sam', 'testing@test.com', '$2y$10$UfsIXpy/DCg2kgBnPTbJeOHc5wo5STXhEJex4vBfaeUZUOifZqOVS', 'sam', 'sam', '\"\"', b'1', '+44-1234567890', 'M', '', '0', '', '2022-03-24 02:35:25', 1, 'NoMedicalCondition', '23', 2, 0, 0, 0, 0, 0, '1', '0', '0'),
(26, '2', 'sam', 'test3@test.com', '$2y$10$ckDRJ4VPWkY85Xa8fGbHTuYfMvhVfOtiuPTmIPzlZ1cw9bntIC5vK', 'sam', 'sam', '\"\"', b'1', '+44-1234567890', 'F', '', '0', '', '2022-03-24 02:39:18', 1, 'Thyroid,SleepIssues', '23', 4, 0, 0, 0, 0, 0, '1', '1', '0'),
(28, '2', 'dummy', 'dummy@dummy.com', '$2y$10$J45JgcOFFuFE8MJNoNMasOI1fBiUdhh1OUeo.0UlIy2i.bnwmFvIK', 'dummy', 'dummy', '\"\"', b'1', '+44-1234567890', 'F', '', '0', '', '2022-03-24 11:53:54', 1, 'Cholesterol,Hypertension', '56', 1, 0, 0, 0, 0, 0, '0', '0', '0'),
(29, '2', 'new', 'new@new.com', '$2y$10$qwJNcrXaXVO6B.qmseLQL.JVvLM1FeYGA1Yo1hyaqAlcrUTFh.3WC', 'new', 'new', '\"\"', b'1', '+44-1234567899', 'F', '', '0', '', '2022-03-31 01:57:18', 1, 'Loneliness,Hypertension', '23', 2, 0, 0, 0, 0, 0, '1', '0', '0'),
(30, '2', 'testing', 'testing@hotmail.com', '$2y$10$9dD7vDqPS4ZQJhAfQx.TRO.h9aHC63mF6uFWBtl1fKQerYQl8dcZa', 'testing', 'testing', '\"\"', b'1', '+44-1234567890', 'F', '', '0', '', '2022-03-31 02:01:48', 1, 'Hypertension', '69', 4, 0, 0, 0, 0, 0, '1', '1', '0'),
(31, '2', 'Mtest', 'mtest@hotnail.com', '$2y$10$.PAkSD2Ka0pAD5x.6M9gKuiFj3fvfXCtoNpysHzzO1jSyNokEcyP6', 'Mtest', 'Mtest', '\"\"', b'1', '+44-1234567890', 'F', '', '0', '', '2022-03-31 02:07:12', 1, 'NoMedicalCondition', '55', 3, 0, 0, 0, 0, 0, '0', '1', '0'),
(32, '2', 'Mtesting', 'mtesting@hotmail.com', '$2y$10$0Xy7dzVkScJmK5/AQH4hJ.STDGfsmNJbKGMKXZFzer/ubZwD9y1q6', 'Mtesting', 'Mtesting', 'profileImage_oGk3.jpg', b'1', '+44-1234567890', 'F', '', '0', '', '2022-03-31 02:13:03', 1, 'AngerIssues', '80', 3, 0, 2000, 20, 1200, 0, '0', '1', '0'),
(33, '2', 'March', '2march@hotmail.com', '$2y$10$X6qsf0GmFdAQcgbeEUrRbO8IWkEpXEXzgRi4/ssjyKg37CJjFglj2', 'March', 'March', '\"\"', b'1', '+44-1234567890', 'M', '', '0', '', '2022-04-02 14:51:44', 1, 'Hypertension,Cholesterol', '89', 2, 0, 0, 0, 0, 0, '1', '0', '0'),
(34, '2', 'Wight', 'weightgain@hotmail.com', '$2y$10$7n6xXDJNDBuev37PZWX8C.n.FYInQZIB1g8Y6/q9MNH6YGzJS7Os.', 'Wight', 'Gain', 'profileImage_BwTj.jpg', b'1', '+44-1234567890', 'M', '65', '0', '168', '2022-04-02 23:23:47', 1, 'AngerIssues,Depression,Cholesterol', '25', 3, 0, 3000, 30, 1200, 0, '0', '1', '0'),
(35, '2', 'Home', 'homeworkout@hotmail.com', '$2y$10$y5ZjrCLNxC0bSLo/Joh3ROGI/MvR/kBjAWE3Y.2hqk7MOJDKbiFfO', 'Home', 'Workout', 'profileImage_2MPt.jpg', b'1', '+44-1234568970', 'F', '80', '50', '120', '2022-04-03 06:13:08', 1, 'Loneliness,Thyroid,Depression', '23', 4, 56, 2500, 23, 1000, 0, '1', '0', '0'),
(36, '2', '3rd', '3rdapril@hotmail.com', '$2y$10$Ukg.K1oMHsOt.xM83zdMsOvdbbMzfFDS4L2aJqiiLN4.rB6grySP2', '3rd', 'April', 'profileImage_Jag0.jpg', b'1', '+44-1234567890', 'M', '90', '50', '178', '2022-04-03 21:03:43', 1, 'NoMedicalCondition', '55', 2, 28, 10000, 10, 1300, 0, '0', '1', '0'),
(37, '2', '4april', '4april@hotmail.com', '$2y$10$x95xRlJAUxTsL014ZjJ7/.Cm/phBcQ1pePgrovKmXrZAoz5M9A6dO', '4april', 'Test', 'profileImage_artK.jpg', b'1', '+44-1234523679', 'M', '120', '50', '165', '2022-04-04 13:41:04', 1, 'Loneliness,Diabetes,Depression', '20', 3, 44, 0, 0, 0, 0, '1', '0', '0'),
(38, '2', '4AprilTest', '4apriltest@hotmail.com', '$2y$10$K6he4aRiuCGLIZEUXCKgM.ylh9jkcvQDgSMtNaWhuMEwdaLY530oq', '4AprilTest', 'Test', 'profileImage_glId.jpg', b'1', '+44-1234567890', 'M', '', '0', '', '2022-04-04 16:06:00', 1, 'AngerIssues,Depression', '14', 3, 0, 0, 0, 0, 0, '0', '0', '0'),
(39, '2', 'Home', '4aprilhome@hotmail.com', '$2y$10$IBc2QA1aF92vlfDOyL5Lm.2M0nI13B2eQEChQZZQPVWUlTeu2QvsS', 'Home', 'Test', 'profileImage_5CVn.jpg', b'1', '+44-1234567890', 'M', '56', '0', '185', '2022-04-04 17:16:33', 1, 'Loneliness,Diabetes,Depression', '25', 4, 16, 15000, 10, 1000, 0, '0', '0', '0'),
(40, '2', '7April', 'saimanasir_62@hotmail.com', '$2y$10$BfBSac2SNGB3tnjqji1EZeLsayY3OXdvrICU01RCusrq7Ugy969P.', '7April', 'Test', 'profileImage_Hgm5.jpg', b'1', '+44-1234567890', 'F', '89', '50', '185', '2022-04-07 15:00:32', 1, 'RelationshipStress,SleepIssues,Depression', '20', 2, 26, 10000, 10, 1000, 0, '0', '0', '0'),
(41, '2', '7April', '7apriltab@hotmail.com', '$2y$10$bgPXRMh.zLLUKJcr3nv6tOZRvNx/Av49aq4drWz9USPVMH3IuXT62', '7April', 'Tab', 'profileImage_b07A.jpg', b'1', '+44-1234567890', 'F', '70', '45', '156', '2022-04-07 15:54:08', 1, 'Loneliness,SleepIssues,Diabetes', '40', 3, 29, 0, 0, 0, 0, '1', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_calories`
--

CREATE TABLE `user_calories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `calburn` int(11) NOT NULL,
  `caltaken` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `energy` int(11) NOT NULL,
  `currentbmi` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `step` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_calories`
--

INSERT INTO `user_calories` (`id`, `user_id`, `date`, `time`, `calburn`, `caltaken`, `product`, `energy`, `currentbmi`, `datetime`, `step`) VALUES
(1, 1, '24/02/2022', '16:19', 300, 0, 12, 44, 25, '2022-02-24 16:34:38', 0),
(2, 10, '2/24/2022', '18:22:56.9005070', 0, 548, 4, 2293, 22, '2022-02-24 18:23:31', 0),
(3, 10, '2/24/2022', '18:31:20.1922480', 0, 280, 61, 1172, 22, '2022-02-24 18:30:52', 0),
(4, 1, '24/02/2022', '16:19', 300, 0, 12, 44, 25, '2022-02-24 20:15:34', 0),
(5, 10, '2/25/2022', '02:19:47.0944690', 0, 108000, 71, 451872, 22, '2022-02-25 02:19:18', 0),
(6, 10, '2/25/2022', '02:30:23.4969300', 0, 200, 167, 837, 22, '2022-02-25 02:29:55', 0),
(7, 10, '2/25/2022', '02:30:52.5556610', 0, 560, 61, 2343, 22, '2022-02-25 02:30:24', 0),
(8, 10, '2/26/2022', '15:04:46.3121020', 0, 14135, 3, 59141, 22, '2022-02-26 09:34:23', 0),
(9, 10, '2/27/2022', '20:42:41.8911900', 0, 822, 4, 3439, 22, '2022-02-27 20:42:17', 0),
(10, 10, '3/4/2022', '23:14:55.1722110', 0, 150, 169, 628, 22, '2022-03-04 17:44:31', 0),
(12, 10, '3/8/2022', '21:58:43.2549180', 0, 0, 0, 0, 36, '2022-03-08 16:28:19', 0),
(13, 10, '3/8/2022', '22:15:41.0445750', 0, 0, 0, 0, 36, '2022-03-08 16:45:17', 0),
(14, 10, '3/8/2022', '23:05:50.5045940', 0, 0, 0, 0, 36, '2022-03-08 17:35:26', 0),
(15, 10, '3/8/2022', '23:18:44.4718630', 2, 0, 0, 0, 36, '2022-03-08 17:48:21', 0),
(16, 10, '3/9/2022', '00:52:33.4303900', 0, 0, 0, 0, 36, '2022-03-08 19:22:18', 3765),
(17, 10, '3/9/2022', '01:46:44.9673540', 0, 0, 0, 0, 36, '2022-03-08 20:16:24', 217),
(18, 10, '3/9/2022', '01:48:48.0929430', 0, 135, 65, 565, 36, '2022-03-08 20:18:28', 0),
(19, 10, '3/9/2022', '15:14:35.4717480', 0, 505, 72, 2113, 36, '2022-03-09 09:44:10', 0),
(20, 10, '3/9/2022', '13:52:13.3731010', 0, 20, 181, 84, 36, '2022-03-09 13:51:44', 0),
(21, 10, '3/9/2022', '14:14:20.2089440', 1, 0, 0, 0, 36, '2022-03-09 14:13:51', 145),
(22, 10, '3/9/2022', '14:16:34.7167530', 0, 360, 291, 1506, 36, '2022-03-09 14:16:05', 0),
(23, 10, '3/10/2022', '02:04:07.2139330', 0, 632, 9, 2644, 487, '2022-03-09 20:33:42', 0),
(24, 10, '3/10/2022', '02:04:44.0533560', 0, 632, 9, 2644, 487, '2022-03-09 20:34:19', 0),
(25, 10, '3/9/2022', '23:31:07.7315500', 0, 88, 161, 368, 487, '2022-03-09 23:30:37', 0),
(26, 21, '3/10/2022', '15:46:07.9568550', 0, 12, 5, 50, 20, '2022-03-10 15:45:36', 0),
(27, 21, '3/10/2022', '15:47:34.3113560', 0, 1140, 78, 4770, 20, '2022-03-10 15:47:02', 0),
(28, 21, '3/10/2022', '15:50:50.5784640', 1, 0, 0, 0, 20, '2022-03-10 15:50:18', 10963965),
(29, 21, '3/10/2022', '15:52:49.5829730', 1, 0, 0, 0, 20, '2022-03-10 15:52:17', 76),
(30, 21, '3/10/2022', '15:56:14.6157000', 4, 0, 0, 0, 20, '2022-03-10 15:55:42', 61),
(31, 21, '3/10/2022', '15:57:32.5906300', 1, 0, 0, 0, 20, '2022-03-10 15:57:00', 205),
(32, 21, '3/10/2022', '15:59:29.6021090', 1, 0, 0, 0, 20, '2022-03-10 15:58:57', 598),
(33, 10, '10/03/2022', '20:22:35.3535790', 0, 0, 0, 0, 487, '2022-03-10 20:22:09', 0),
(34, 10, '10/03/2022', '20:24:03.4639710', 0, 1, 59, 4, 487, '2022-03-10 20:23:37', 0),
(35, 22, '10/03/2022', '20:30:06.3521510', 2, 0, 0, 0, 21, '2022-03-10 20:29:40', 0),
(36, 10, '11/03/2022', '02:12:35.4097650', 0, 0, 0, 0, 487, '2022-03-11 02:12:08', 33),
(37, 10, '11/03/2022', '18:33:45.9909370', 45, 0, 0, 0, 50, '2022-03-11 18:32:59', 0),
(38, 10, '11/03/2022', '18:55:45.3242560', 10, 0, 0, 0, 50, '2022-03-11 18:54:59', 8),
(39, 10, '11/03/2022', '18:57:07.3496460', 4, 0, 0, 0, 50, '2022-03-11 18:56:21', 1),
(40, 10, '11/03/2022', '19:11:39.6158810', 0, 405, 65, 1695, 50, '2022-03-11 19:10:53', 0),
(41, 10, '12/03/2022', '00:39:00.3679120', 1, 0, 0, 0, 50, '2022-03-12 00:38:33', 0),
(42, 10, '15/03/2022', '13:21:54.9351370', 0, 0, 0, 0, 50, '2022-03-15 13:21:28', 0),
(43, 10, '15/03/2022', '13:50:34.5953850', 0, 420, 61, 1757, 50, '2022-03-15 13:49:43', 0),
(44, 10, '15/03/2022', '13:55:10.3515450', 31, 0, 0, 0, 50, '2022-03-15 13:54:19', 0),
(45, 10, '31/03/2022', '01:21:19.6717240', 0, 0, 0, 0, 6, '2022-03-31 01:20:50', 9),
(46, 10, '02/04/2022', '23:17:41.2787450', 1, 0, 0, 0, 22, '2022-04-02 23:17:12', 36),
(47, 10, '03/04/2022', '06:32:50.2039160', 1, 0, 0, 0, 22, '2022-04-03 06:32:21', 12),
(48, 35, '03/04/2022', '06:38:54.4758200', 1, 0, 0, 0, 56, '2022-04-03 06:38:25', 163),
(49, 35, '03/04/2022', '06:40:07.4956470', 0, 762, 6, 3188, 56, '2022-04-03 06:39:38', 0),
(50, 35, '03/04/2022', '06:45:47.2338960', 2, 0, 0, 0, 56, '2022-04-03 06:45:18', 0),
(51, 36, '03/04/2022', '21:08:00.9460480', 1, 0, 0, 0, 28, '2022-04-03 21:07:31', 110),
(52, 36, '03/04/2022', '21:38:46.7059620', 0, 330, 58, 1381, 28, '2022-04-03 21:38:17', 0),
(53, 36, '04/04/2022', '12:59:43.0951610', 0, 202, 65, 845, 28, '2022-04-04 12:59:15', 0),
(54, 36, '04/04/2022', '13:05:03.6152000', 6, 0, 0, 0, 28, '2022-04-04 13:04:16', 0),
(55, 37, '04/04/2022', '13:44:08.8892430', 2, 0, 0, 0, 44, '2022-04-04 13:43:41', 106),
(56, 37, '04/04/2022', '13:45:46.1285560', 0, 339, 11, 1418, 44, '2022-04-04 13:45:17', 0),
(57, 37, '04/04/2022', '13:51:05.7027460', 7, 45, 1, 1200, 44, '2022-04-04 13:50:37', 0),
(58, 37, '04/04/2022', '14:07:41.9819990', 10, 0, 0, 0, 44, '2022-04-04 14:07:14', 0),
(59, 10, '04/04/2022', '17:04:17.0001130', 0, 800, 85, 3347, 22, '2022-04-04 17:03:48', 0),
(60, 10, '05/04/2022', '16:46:39.8460350', 0, 130, 163, 544, 22, '2022-04-05 16:46:11', 0),
(61, 39, '05/04/2022', '17:46:40.1978050', 0, 600, 39, 2510, 16, '2022-04-05 17:46:11', 0),
(62, 40, '07/04/2022', '15:12:42.3856860', 1, 0, 0, 0, 26, '2022-04-07 15:12:13', 44),
(63, 40, '07/04/2022', '15:16:39.7079460', 0, 132, 161, 552, 26, '2022-04-07 15:16:10', 0),
(64, 10, '07/04/2022', '15:48:02.4981440', 0, 0, 0, 3, 22, '2022-04-07 15:47:33', 0),
(65, 41, '07/04/2022', '16:25:11.7507850', 0, 405, 66, 1695, 29, '2022-04-07 16:24:25', 0),
(66, 10, '04/07/2022', '23:06:23.0410860', 0, 548, 4, 2293, 22, '2022-04-07 18:35:54', 0),
(67, 10, '4/7/2022', '23:09:03.2154720', 0, 0, 0, 0, 22, '2022-04-07 18:38:35', 0),
(68, 10, '07/04/2022', '22:10:09.6051870', 0, 414, 7, 1732, 22, '2022-04-07 22:09:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `watertracker`
--

CREATE TABLE `watertracker` (
  `id` int(11) NOT NULL,
  `watercount` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watertracker`
--

INSERT INTO `watertracker` (`id`, `watercount`, `date`, `userid`) VALUES
(1, 1, '2022-03-12 15:18:16', 10),
(2, 1, '2022-03-12 16:10:06', 10),
(3, 1, '2022-03-12 16:10:57', 10),
(4, 1, '2022-03-12 17:26:40', 10),
(5, 1, '2022-03-12 17:34:16', 10),
(6, 1, '2022-03-12 17:39:12', 10),
(7, 1, '2022-03-12 19:41:57', 10),
(8, 1, '2022-03-12 23:37:39', 10),
(9, 1, '2022-03-12 23:37:40', 10),
(10, 1, '2022-03-12 23:37:40', 10),
(11, 1, '2022-03-12 23:37:40', 10),
(12, 1, '2022-03-12 23:37:41', 10),
(13, 1, '2022-03-12 23:37:41', 10),
(14, 1, '2022-03-12 23:37:45', 10),
(15, 1, '2022-03-12 23:37:48', 10),
(16, 1, '2022-03-14 16:51:34', 10),
(17, 1, '2022-03-14 16:51:48', 10),
(18, 1, '2022-03-14 16:55:52', 10),
(19, 1, '2022-03-14 16:55:55', 10),
(20, 1, '2022-04-03 17:31:12', 10),
(21, 1, '2022-04-03 17:32:02', 10),
(22, 1, '2022-04-03 17:37:02', 10),
(23, 1, '2022-04-03 17:37:10', 10),
(24, 1, '2022-04-03 17:37:10', 10),
(25, 1, '2022-04-03 17:46:24', 10),
(26, 1, '2022-04-03 18:37:32', 10),
(27, 1, '2022-04-03 20:57:08', 10),
(28, 1, '2022-04-03 20:57:17', 10),
(29, 1, '2022-04-03 20:57:20', 10),
(30, 1, '2022-04-03 20:57:27', 10),
(31, 1, '2022-04-03 20:57:30', 10),
(32, 1, '2022-04-03 20:57:33', 10),
(33, 1, '2022-04-03 20:57:36', 10),
(34, 1, '2022-04-03 20:57:39', 10),
(35, 1, '2022-04-03 20:57:42', 10),
(36, 1, '2022-04-03 20:57:44', 10),
(37, 1, '2022-04-03 20:57:49', 10),
(38, 1, '2022-04-03 20:57:52', 10),
(39, 1, '2022-04-03 20:57:55', 10),
(40, 1, '2022-04-03 20:58:00', 10),
(41, 1, '2022-04-03 20:58:15', 10),
(42, 1, '2022-04-04 12:38:53', 36),
(43, 1, '2022-04-07 16:14:52', 41),
(44, 1, '2022-04-07 16:14:59', 41),
(45, 1, '2022-04-07 16:15:53', 41),
(46, 1, '2022-04-07 18:39:53', 10),
(47, 1, '2022-04-07 18:39:56', 10),
(48, 1, '2022-04-07 18:52:17', 10),
(49, 1, '2022-04-07 22:18:30', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_master`
--
ALTER TABLE `activity_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caloriesmaster`
--
ALTER TABLE `caloriesmaster`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `challangesmaster`
--
ALTER TABLE `challangesmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodintake`
--
ALTER TABLE `foodintake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthmaster`
--
ALTER TABLE `healthmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeapi`
--
ALTER TABLE `homeapi`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `homemaster`
--
ALTER TABLE `homemaster`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_master`
--
ALTER TABLE `level_master`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `measure`
--
ALTER TABLE `measure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_condition_master`
--
ALTER TABLE `medical_condition_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedo_master`
--
ALTER TABLE `pedo_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target_master`
--
ALTER TABLE `target_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userhealthmaster`
--
ALTER TABLE `userhealthmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_calories`
--
ALTER TABLE `user_calories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watertracker`
--
ALTER TABLE `watertracker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_master`
--
ALTER TABLE `activity_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `caloriesmaster`
--
ALTER TABLE `caloriesmaster`
  MODIFY `item_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `challangesmaster`
--
ALTER TABLE `challangesmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `foodintake`
--
ALTER TABLE `foodintake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `healthmaster`
--
ALTER TABLE `healthmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `homeapi`
--
ALTER TABLE `homeapi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homemaster`
--
ALTER TABLE `homemaster`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `level_master`
--
ALTER TABLE `level_master`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `measure`
--
ALTER TABLE `measure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medical_condition_master`
--
ALTER TABLE `medical_condition_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pedo_master`
--
ALTER TABLE `pedo_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `target_master`
--
ALTER TABLE `target_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userhealthmaster`
--
ALTER TABLE `userhealthmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_calories`
--
ALTER TABLE `user_calories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `watertracker`
--
ALTER TABLE `watertracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
