-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 25 juil. 2023 à 23:38
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `carte`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mot_passe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `nom`, `prenom`, `mail`, `mot_passe`, `role`, `created_at`, `updated_at`) VALUES
(2, 'VEBAMA', 'Wanematou', 'aidavebama@gmail.com', '$2y$10$45ooakn4uPbvsmvHtaspLOYFNZQ9DDG2fkU1MWqa09P3i7KsHVN/.', 'Directeur', '2023-07-24 21:41:54', '2023-07-24 21:41:54'),
(3, 'VEBAMA', 'Wanematou', 'vebama@gmail.com', '$2y$10$DsYV/QHV0EuZrCS.5i4r..ubUG15p7PrgxLHZZtTIgT.98nYMaUO6', 'Directeur', '2023-07-24 22:19:39', '2023-07-24 22:19:39'),
(4, 'SAWADOGO', 'Theresina', 'sina@gmail.com', '$2y$10$Ojqx8Mje6/y/5BRzUKr98.mWZmvOs96GoN78G/xd.1MsxYkg7drcy', 'Sécretaire', '2023-07-24 23:07:15', '2023-07-24 23:07:15'),
(5, 'MAIGA', 'Aboubacar', 'abou@gmail.com', '$2y$10$5eC2bs0AHAQaGsCHoFjVj.2N6HZ/PzsbDzMwvQLahaOf.q4aEwMVG', 'Sécretaire', '2023-07-25 08:25:55', '2023-07-25 08:25:55'),
(6, 'VEBAMA', 'Eudes', 'eude@gmail.com', '$2y$10$CUbproYDchG9.HpGYnTKKeSC778ULN87NRtfwsa5nx8A.COaog6zG', 'Sécretaire', '2023-07-25 11:39:02', '2023-07-25 11:39:02'),
(7, 'YELYAORE', 'Theresina', 'hbvhjjhb@gmail.com', '$2y$10$H3EvSASl/JzhYBcq5qTff.lIldA8D/Ckg6VqgbE.6ZbzSr7p.am7K', 'Directeur', '2023-07-25 11:39:32', '2023-07-25 11:39:32'),
(8, 'TIENDREBEOGO', 'Boureima', 'tere@gmail.com', '$2y$10$MgP67g51ZDe5cL.TxjtZQewb0Qpn0C.AmnicP6lUu1b3LO020DjqW', 'Directeur', '2023-07-25 11:42:02', '2023-07-25 11:42:02'),
(9, 'MAIGA', 'Theresina', 'bjjjjb@gmail.com', '$2y$10$YAZk6enksmIMBxGwxGeiGOWKtsgUc9X/cG5wHrB8DxNUweQ.DoSui', 'Directeur', '2023-07-25 11:43:35', '2023-07-25 11:43:35'),
(10, 'VEBAMA', 'Wanematou', 'vhgcgf@gmail.com', '$2y$10$TVXS1Yp7DaRbi7uF.RDxPupc9QKnEocygiavSPEiiq6bu2q5h9Wy2', 'Sécretaire', '2023-07-25 11:45:19', '2023-07-25 11:45:19'),
(13, 'VEBAMA', 'Inaya', 'ina@gmail.com', '$2y$10$NOtoLf.fJSMSFiOFfQZNQ.ERh0SAlhY9jhoRRn6xpi/UZY/gU9eGq', 'Sécretaire', '2023-07-25 11:46:36', '2023-07-25 11:46:36'),
(15, 'VEBAMA', 'Christine', 'christ@gmail.com', '$2y$10$VZADbQfDTBw4bH1N7uHZueZt8t581n7fRBDg2DQk9mqWQ9IPdyi4C', 'Sécretaire', '2023-07-25 11:49:25', '2023-07-25 11:49:25'),
(16, 'VEBAMA', 'Medi', 'ryan@gmail.com', '$2y$10$snnf6Pd0V/ZW0.uXomvtq.kbPYFKjkiSvYcnHHrqPuFzt5lh8wL.q', 'Directeur', '2023-07-25 11:50:30', '2023-07-25 11:50:30'),
(17, 'YELYAORE', 'Eudes', 'gfgb@gmail.com', '$2y$10$OpbXldAw0K1kZEslMLiuSe6w5Ka3SR4iOky3Wn6/OmjAnduMjMhrq', 'Sécretaire', '2023-07-25 11:56:19', '2023-07-25 11:56:19'),
(18, 'VEBAMA', 'Charif', 'char@gmail.com', '$2y$10$mcIpmf/d0sr170cC7xD.8eUooEF0WsWeis.o/aku5hlN/o/cgXHKC', 'Sécretaire', '2023-07-25 17:08:09', '2023-07-25 17:08:09'),
(20, 'SAWADOGO', 'Wanematou', 'bhvhg@gmail.com', '$2y$10$1WDC1ZEse.tIjBjmt4HCT.Py0VtoHiy5WplbtYjDBQfFDL6lz3Wai', 'Directeur', '2023-07-25 17:45:37', '2023-07-25 17:45:37'),
(22, 'SAWADOGO', 'Wanematou', 'gvcgfgh@gmail.com', '$2y$10$ZU.OTuZZ9XWEgOgZMzhQC.p3tNdVE2THUGSIGhGIj5ZKKdBeo/2XG', 'Directeur', '2023-07-25 17:46:22', '2023-07-25 17:46:22'),
(23, 'VEBAMA', 'Eudes', 'bfreee@gmail.com', '$2y$10$IJ.MJvpaw29vAQt9Ewo9q.YAQFcyGhEOTSFLjPfQxxZwxSQulewGy', 'Sécretaire', '2023-07-25 17:47:45', '2023-07-25 17:47:45'),
(24, 'SAWADOGO', 'Aboubacar', 'hbdvbhjvbhj@gmail.com', '$2y$10$OPstvSOHz.YXbsp2/HglUO.cqvI30uypZrkQT7WISEsZOuuytejP6', 'Sécretaire', '2023-07-25 17:49:44', '2023-07-25 17:49:44'),
(25, 'VEBAMA', 'Wanematou', 'gcfdredgf@gmail.com', '$2y$10$bg4hLMSln3M.Ku3WjZB73OOy4uX9/eaGMf3IR1eexJFtkeBAc.m56', 'Directeur', '2023-07-25 18:05:51', '2023-07-25 18:05:51'),
(26, 'VEBAMA', 'Wanematou', 'vghhg@gmail.com', '$2y$10$DnLa5Brd/YQp/tENI60OxuNxv6syhbhjtwrMf5B2MAOjcF2gjTSgG', 'Sécretaire', '2023-07-25 18:06:30', '2023-07-25 18:06:30');

-- --------------------------------------------------------

--
-- Structure de la table `annee_academiques`
--

CREATE TABLE `annee_academiques` (
  `id` bigint UNSIGNED NOT NULL,
  `annee_academique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annee_academiques`
--

INSERT INTO `annee_academiques` (`id`, `annee_academique`, `created_at`, `updated_at`) VALUES
(1, '2018-2019', '2023-07-24 00:01:58', '2023-07-24 00:01:58');

-- --------------------------------------------------------

--
-- Structure de la table `cycles`
--

CREATE TABLE `cycles` (
  `id` bigint UNSIGNED NOT NULL,
  `cycle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cycles`
--

INSERT INTO `cycles` (`id`, `cycle`, `created_at`, `updated_at`) VALUES
(1, 'Licence', '2023-07-24 00:01:53', '2023-07-24 00:01:53');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationnalite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cycle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filliere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau_etude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee_academique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `matricule`, `nationnalite`, `cycle`, `filliere`, `niveau_etude`, `annee_academique`, `created_at`, `updated_at`, `photo_path`) VALUES
(13, 'SO', 'Sonia', 'b120515', 'Burkinabè', 'Licence', 'Agroalimentaire', 'L1', '2018-2019', '2023-07-25 23:12:31', '2023-07-25 23:12:31', 'public/image/3Ds2b6ZPiFtDnkdDZu6P2y6vzJ14ZQnKlbx6Z5Jm.jpg'),
(14, 'VEBAMA', 'Ida', 'b120514', 'Gabonnais', 'Licence', 'Agroalimentaire', 'L1', '2018-2019', '2023-07-25 23:13:41', '2023-07-25 23:13:41', 'public/image/89RQPoeNPUGQR7Wh5WQpayDsfMbBuLrXgAJRMCYZ.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fillieres`
--

CREATE TABLE `fillieres` (
  `id` bigint UNSIGNED NOT NULL,
  `filliere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fillieres`
--

INSERT INTO `fillieres` (`id`, `filliere`, `created_at`, `updated_at`) VALUES
(1, 'Agroalimentaire', '2023-07-24 00:02:02', '2023-07-24 00:02:02');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_17_231655_create_admins_table', 1),
(6, '2023_07_17_232307_create_etudiants_table', 1),
(7, '2023_07_17_232957_create_cycles_table', 1),
(8, '2023_07_17_233629_create_annee_academiques_table', 1),
(9, '2023_07_17_233831_create_niveau_etudes_table', 1),
(10, '2023_07_17_234013_create_nationnalités_table', 1),
(11, '2023_07_18_004043_create_fillieres_table', 1),
(12, '2023_07_23_175421_create_sessions_table', 1),
(13, '2023_07_25_225831_add_photo_path_to_etudiants_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `nationnalités`
--

CREATE TABLE `nationnalités` (
  `id` bigint UNSIGNED NOT NULL,
  `nationnalité` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `nationnalités`
--

INSERT INTO `nationnalités` (`id`, `nationnalité`, `created_at`, `updated_at`) VALUES
(1, 'Gabonnais', '2023-07-24 00:02:12', '2023-07-24 00:02:12');

-- --------------------------------------------------------

--
-- Structure de la table `niveau_etudes`
--

CREATE TABLE `niveau_etudes` (
  `id` bigint UNSIGNED NOT NULL,
  `niveau_etude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `niveau_etudes`
--

INSERT INTO `niveau_etudes` (`id`, `niveau_etude`, `created_at`, `updated_at`) VALUES
(1, 'L1', '2023-07-24 00:02:07', '2023-07-24 00:02:07');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_mail_unique` (`mail`);

--
-- Index pour la table `annee_academiques`
--
ALTER TABLE `annee_academiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cycles`
--
ALTER TABLE `cycles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fillieres`
--
ALTER TABLE `fillieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nationnalités`
--
ALTER TABLE `nationnalités`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveau_etudes`
--
ALTER TABLE `niveau_etudes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `annee_academiques`
--
ALTER TABLE `annee_academiques`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cycles`
--
ALTER TABLE `cycles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fillieres`
--
ALTER TABLE `fillieres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `nationnalités`
--
ALTER TABLE `nationnalités`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `niveau_etudes`
--
ALTER TABLE `niveau_etudes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
