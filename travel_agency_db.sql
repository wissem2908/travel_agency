-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 16 fév. 2026 à 08:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `travel_agency_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `adventures`
--

CREATE TABLE `adventures` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration_days` int(3) NOT NULL,
  `difficulty` enum('Easy','Moderate','Difficult') NOT NULL,
  `max_participants` int(3) NOT NULL,
  `status` enum('Active','Inactive','Coming Soon') NOT NULL DEFAULT 'Active',
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adventures`
--

INSERT INTO `adventures` (`id`, `title`, `price`, `duration_days`, `difficulty`, `max_participants`, `status`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mountain Peak Expedition', 1200.00, 4, 'Easy', 4, 'Coming Soon', 'Climb the highest peaks and enjoy breathtaking views.', '01.png', '2026-02-12 08:59:29', '2026-02-12 09:51:57'),
(2, 'Forest Sanctuary Retreat', 650.00, 3, 'Easy', 15, 'Active', 'Relax and explore the serenity of dense forests.', '02.png', '2026-02-12 08:59:29', '2026-02-12 08:59:51'),
(3, 'Glacier Expedition', 1850.00, 7, 'Difficult', 10, 'Coming Soon', 'Experience glaciers up close with expert guides.', '03.png', '2026-02-12 08:59:29', '2026-02-12 08:59:57'),
(4, 'Riverside Escape', 450.00, 2, 'Moderate', 20, 'Active', 'A short adventure along scenic riverside trails.', '05.jpg', '2026-02-12 08:59:29', '2026-02-12 09:09:03'),
(5, 'Summit Challenge', 2100.00, 6, 'Difficult', 8, 'Inactive', 'Test your endurance and reach the summit of rugged mountains.', '06.jpg', '2026-02-12 08:59:29', '2026-02-12 09:09:12');

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `adventure_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `num_people` int(11) NOT NULL,
  `status` enum('Pending','Confirmed','Cancelled') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bookings`
--

INSERT INTO `bookings` (`id`, `adventure_id`, `full_name`, `phone`, `dob`, `num_people`, `status`, `created_at`) VALUES
(1, 1, 'John Doe', '+1 234 567 890', '1990-05-15', 2, 'Pending', '2026-02-12 10:22:13'),
(2, 2, 'Sarah Mitchell', '+44 7123 456789', '1985-11-02', 1, 'Confirmed', '2026-02-12 10:22:13'),
(3, 3, 'Michael Torres', '+33 612 345 678', '1992-08-23', 4, 'Cancelled', '2026-02-12 10:22:13'),
(4, 1, 'Emily Chen', '+49 151 23456789', '1995-12-30', 3, 'Pending', '2026-02-12 10:22:13'),
(5, 2, 'James Anderson', '+1 987 654 321', '1988-07-17', 2, 'Confirmed', '2026-02-12 10:22:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adventures`
--
ALTER TABLE `adventures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adventures`
--
ALTER TABLE `adventures`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
