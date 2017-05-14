-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 14 Μάη 2017 στις 16:47:00
-- Έκδοση διακομιστή: 10.1.21-MariaDB
-- Έκδοση PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `book_database`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `accounts`
--

CREATE TABLE `accounts` (
  `UID` int(5) NOT NULL,
  `Username` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `Surname` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `Age` int(3) NOT NULL,
  `Sex` varchar(6) COLLATE utf8_unicode_520_ci NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Άδειασμα δεδομένων του πίνακα `accounts`
--

INSERT INTO `accounts` (`UID`, `Username`, `Password`, `Name`, `Surname`, `Email`, `Age`, `Sex`, `Phone`) VALUES
(1, 'biohazard7720', '123', 'Andrew', 'Manitsas', 'st0709@icte.uowm.gr', 22, 'Male', 1234567898);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `books`
--

CREATE TABLE `books` (
  `ID` int(5) NOT NULL,
  `Title` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `Author` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `Type` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `ISBN` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Άδειασμα δεδομένων του πίνακα `books`
--

INSERT INTO `books` (`ID`, `Title`, `Author`, `Type`, `ISBN`, `Price`) VALUES
(1, 'Shock Doctrine', 'Naomi Klein', 'Political - Economic', '978-960-14-2265-7', 20),
(2, 'The Art of Beign Alway Right', 'Artur Schopenhauer', 'Philosophy', '978-960-235-840-5', 5),
(3, 'Il Pyincipe', 'Niccolo Machiavelli', 'Philosophy', '960-87900-5-0', 4),
(4, '1984', 'George Orwell', 'Philosphy', '978-960-33-2265-7', 6),
(5, 'Digital Signal Analysis', 'J. G. Proakis', 'ICTE', '978-960-411-715-4', 85),
(6, 'Circuit Design with VHDL', 'Volnei A. Pedroni', 'ICTE', '978-960-461-118-8', 50);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`UID`);

--
-- Ευρετήρια για πίνακα `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `accounts`
--
ALTER TABLE `accounts`
  MODIFY `UID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT για πίνακα `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
