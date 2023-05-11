-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2023 at 05:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ooplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`) VALUES
(64, 55, 2);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `commande_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `commande_date` date DEFAULT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`commande_id`, `users_id`, `commande_date`, `price`) VALUES
(55, 55, '2023-05-11', 8),
(56, 55, '2023-05-11', 8.35),
(57, 55, '2023-05-11', 8.35),
(58, 55, '2023-05-11', 11.1),
(59, 55, '2023-05-11', 11.1),
(60, 55, '2023-05-11', 11.1),
(61, 55, '2023-05-11', 11.1),
(62, 55, '2023-05-11', 11.1),
(63, 55, '2023-05-11', 73.1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Username` varchar(30) NOT NULL,
  `Pass` varchar(8) NOT NULL,
  `Phonenumber` int(8) NOT NULL,
  `Age` int(8) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `position` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Username`, `Pass`, `Phonenumber`, `Age`, `email`, `gender`, `position`) VALUES
('Ibrahim', '9999', 23223456, 21, 'riadhibrahim007@gmail.com', 'male', 'Waiter');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(35) DEFAULT NULL,
  `product_image` longtext DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `product_description` longtext DEFAULT NULL,
  `product_type` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_price`, `product_description`, `product_type`) VALUES
(1, 'Iced Coffee', './images/Iced-coffee.jpg', 7.5, 'Iced coffee is a coffee beverage served cold. It is prepared by brewing coffee normally and then serving it over ice or in cold milk.', 'Drink'),
(2, 'Frappucino', './images/Frappu.jpg', 8, 'Frappuccino is a line of blended iced coffee drinks sold by Koofi. It may consists of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices.It may also include blended Koofi refreshers.', 'Drink'),
(3, 'Coffea Arabica', './images/Arabica.jpg', 5, 'Coffea arabica, also known as the Arabic coffee, is a species of flowering plant in the coffee and madder family Rubiaceae. It is believed to be the first species of coffee to have been cultivated and is currently the dominant cultivar, representing about 60% of global production.', 'Drink'),
(4, 'Caramel Coffee', './images/Caramel-co.jpg', 7.5, 'What is caramel coffee made of? Caramel coffee is a drink made from brewed coffee, caramel sauce, milk, and whipped cream. The coffee is typically brewed with a French press or pour over brewer like the Chemex.', 'Drink'),
(5, 'Strawberry juice', './images/Strawberry-juice.jpg', 12, 'Strawberry Juice is a refreshing fresh fruit juice that is full of vitamin C and antioxidants and lot of invigorating flavor.', 'Drink'),
(6, 'Americano', './images/Americano.jpg', 9, 'Caffè Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added.', 'Drink'),
(7, 'Espresso', './images/Espresso.jpg', 9, 'Espresso is a coffee-brewing method of Italian origin, in which a small amount of nearly boiling water is forced under 9–10 bars of pressure through finely-ground coffee beans.', 'Drink'),
(8, 'Mango Juice', './images/Mango.jpg', 12, 'Mango juice is a beverage made from the extracted juice of mango fruit, typically with added sweeteners or other fruit juices, and it has a sweet, tangy, and refreshing taste.', 'Drink'),
(9, 'Hot-Tea', './images/T.jpg', 4.5, 'Hot teas are warm beverages made by steeping tea leaves or herbs in hot water, offering a variety of flavors and potential health benefits. They are cherished for their comforting warmth and rich aroma.', 'Drink'),
(10, 'German Cake', './images/img5.jpg', 19.99, 'German chocolate cake, originally German\'s chocolate cake, is a layered chocolate cake filled and topped with a coconut-pecan frosting.', 'Cakes and Cookies'),
(11, 'Chocolate Donuts', './images/img6.jpg', 4.99, 'Moist and fluffy baked chocolate donuts full of chocolate flavor. Covered in a thick, chocolate glaze, these are perfect for any chocoholic.', 'Cakes and Cookies'),
(12, 'Chocolate cake', './images/Choc.jpg', 3.99, 'Chocolate cake or chocolate gâteau is a cake flavored with melted chocolate, cocoa powder, or both.', 'Cakes and Cookies'),
(13, 'Our Cookies', './images/img8.jpg', 9.5, 'A cookie, or a biscuit, is a baked or cooked snack or dessert that is typically small, flat and sweet. It usually contains flour, sugar, egg, and some type of oil, fat, or butter. It may include other ingredients such as raisins, oats, chocolate chips, nuts, etc..', 'Cakes and Cookies'),
(14, 'Red Velvet Cake', './images/red-velvet.jpg', 5.5, 'Red velvet cake is traditionally a red, crimson, or scarlet-colored layer cake, layered with ermine icing. Traditional recipes do not use food coloring, with the red color due to non-Dutched, anthocyanin-rich cocoa.', 'Cakes and Cookies'),
(15, 'Cupcake', './images/CUpcakes.jpg', 7, 'A cupcake is a small cake designed to serve one person, which may be baked in a small thin paper or aluminum cup. As with larger cakes, frosting and other cake decorations such as fruit and candy may be applied.', 'Cakes and Cookies'),
(16, 'Black Forest Cake', './images/Black-forest', 19.99, 'Black Forest gâteau or Black Forest cake is a chocolate sponge cake with a rich cherry filling based on the German dessert Schwarzwälder Kirschtorte, literally \"Black Forest Cherry-torte\". Typically, Black Forest gateau consists of several layers of chocolate sponge cake sandwiched with whipped cream and cherries.', 'Cakes and Cookies'),
(17, 'Genoise Sponge Cake', './images/Genoise-sponge.jpg', 18, 'Genoise sponge (also called Genoese or Genovese cake) is a classic European sponge cake that\'s incredibly fluffy and light-as-air! Slice into layers and add any filling of your choice to create a delicious layer cake!', 'Cakes and Cookies'),
(18, 'Pancakes', './images/Pancakes.jpg', 6, 'A pancake is a flat cake, often thin and round, prepared from a starch-based batter that may contain eggs, milk and butter and cooked on a hot surface such as a griddle or frying pan, often frying with oil or butter.', 'Cakes and Cookies');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `review_date` date DEFAULT NULL,
  `review_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `users_id`, `review_date`, `review_content`) VALUES
(1, 55, '2023-05-11', 'agfchgvjhbjbkmjb'),
(2, 55, '2023-05-11', 'agfchgvjhbjbkmjb'),
(3, 55, '2023-05-11', 'agfchgvjhbjbkmjb'),
(4, 55, '2023-05-11', 'agfchgvjhbjbkmjb dfd df d '),
(5, 55, '2023-05-11', 'agfchgvjhbjbkmjb dfd df d ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL,
  `users_tel` int(11) NOT NULL,
  `users_points` int(11) DEFAULT 0,
  `users_address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`, `users_tel`, `users_points`, `users_address`) VALUES
(55, 'Ibrahim', '$2y$10$NyGGBvsn/s5qgxsdEQL7M.NDB/oAV5JezdiJqfzqGodOzjYdCccLe', 'riadhibrahim007@gmail.com', 98765432, 37, 'jguyg'),
(56, 'Ibrahimovic', '$2y$10$gWBlppDke9WXA7s16r2WNeixT3apws3ReCokw5lJWylLLw9ysTIpO', 'bbhhbjh@gmail.com', 12323234, 0, 'vsvfv'),
(57, 'Sahni', '$2y$10$BYksra2wKRHKsIS/4G1lS.z9fDOEKKWJhwAKZZFa5l3pgRllguaDq', 'sahnisahni@gmail.com', 34345656, 0, 'Ben Arous');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_prod` (`product_id`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`commande_id`),
  ADD KEY `fk_user1` (`users_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `fk_user2` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `commande_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_prod` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_user1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_user2` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
