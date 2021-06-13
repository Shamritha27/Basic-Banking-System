
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Nethra', 'nethra@gmail.com', 700000),
(2, 'Kiruthika', 'kiruthika@gmail.com', 500000),
(3, 'Shamritha', 'shamritha@gmail.com', 700000),
(4, 'Rajalakshmi', 'rajalakshmi@gmail.com', 800000),
(5, 'Nivetha', 'nivetha@gmail.com', 10000),
(6, 'Gajal', 'gajal@gmail.com', 900000),
(7, 'Preethi', 'preethi@gmail.com', 400000),
(8, 'Rakshith', 'rakshith@gmail.com', 60000),
(9, 'Sanjithvel', 'sanjithvel@gmail.com', 900000),
(10, 'Sudhiksha', 'sudhiksha@gmail.com', 905000);

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;


ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;
