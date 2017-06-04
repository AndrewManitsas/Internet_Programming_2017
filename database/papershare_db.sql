-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 04 Ιουν 2017 στις 18:23:35
-- Έκδοση διακομιστή: 10.1.21-MariaDB
-- Έκδοση PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `papershare_db`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `accounts`
--

CREATE TABLE `accounts` (
  `user_id` int(5) NOT NULL,
  `username` varchar(1000) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_unicode_520_ci NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_520_ci NOT NULL,
  `surname` varchar(1000) COLLATE utf8_unicode_520_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8_unicode_520_ci NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(1000) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Άδειασμα δεδομένων του πίνακα `accounts`
--

INSERT INTO `accounts` (`user_id`, `username`, `password`, `name`, `surname`, `email`, `age`, `sex`) VALUES
(2, 'andrewmanitsas', '123', 'Andrew', 'Manitsas', 'st0709@icte.uowm.gr', 22, 'male'),
(3, 'mariakasi86', '123', 'Maria', 'Kasiara', 'mariakasiara@gmail.com', 31, 'female'),
(4, 'parlapipas', '123', 'John', 'Xatz', '123@gmail.com', 99, 'other');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `books`
--

CREATE TABLE `books` (
  `book_id` int(5) NOT NULL,
  `isbn` int(10) NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_520_ci NOT NULL,
  `author` varchar(1000) COLLATE utf8_unicode_520_ci NOT NULL,
  `type` varchar(1000) COLLATE utf8_unicode_520_ci NOT NULL,
  `price` int(100) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Άδειασμα δεδομένων του πίνακα `books`
--

INSERT INTO `books` (`book_id`, `isbn`, `title`, `author`, `type`, `price`, `user_id`) VALUES
(1, 852456, 'AAABBBCCC', 'abc', 'book', 20, 2),
(2, 123456, 'TTTTTTTTT', 'aabb', 'RRRRR', 10, 4),
(3, 789852, 'EEEEEEEE', 'aart', 'PPP', 30, 3),
(4, 0, 'Perfect Zero', 'Giannis Hatzoglou', 'Garbage', -10000, 2);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Ευρετήρια για πίνακα `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `accounts`
--
ALTER TABLE `accounts`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT για πίνακα `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
