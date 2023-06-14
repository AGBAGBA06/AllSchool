-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 14 juin 2023 à 13:43
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `ecoles`
--

CREATE TABLE `ecoles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nom` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_couverture` varchar(255) NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `tel` text NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `resultatcep` varchar(255) NOT NULL,
  `resultatbepc` varchar(255) NOT NULL,
  `resultatbac` varchar(255) NOT NULL,
  `directeur` text NOT NULL,
  `niveau_scolaire` text NOT NULL,
  `ville` text NOT NULL,
  `domaine` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ecoles`
--

INSERT INTO `ecoles` (`id`, `user_id`, `nom`, `address`, `description`, `image_couverture`, `fichier`, `tel`, `type`, `resultatcep`, `resultatbepc`, `resultatbac`, `directeur`, `niveau_scolaire`, `ville`, `domaine`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'UCAO', 'lome', 'Emma et Agathe Delorme sont soeurs. Elles ont grandi l\'une contre l\'autre, mais sont pourtant très différentes. Agathe, la plus jeune, bordélique et ardente, a toujours pris toute la place dans le bain, dans la chambre et dans le coeur d\'Emma. Après cinq ans d\'un silence inexpliqué, Emma donne rendez-vous à Agathe dans la maison de vacances : Mima, leur grand-mère adorée, n\'est plus, il faut vider les lieux et faire le tri dans les souvenirs.', 'téléchargement (1)_1686741053.jpg', 'NOTE_1686741053.pdf', '4567843', 'privee', '0', '0', '0', 'AGBAGBA', 'universitaire', 'lome', 'informatique', 1, '2023-06-14 09:10:53', '2023-06-14 09:10:53'),
(2, 1, 'IAEC', 'lome', '{athe Delorme sont soeurs. Elles ont grandi l\'une contre l\'autre, mais sont pourtant très différentes. Agathe, la plus jeune, bordélique et ardente, a toujours pris toute la place dans le bain, dans la chambre et dans le coeur d\'Emma. Après cinq ans d\'un silence inexpliqué, Emma donne rendez-vous à Agathe dans la maison de vacances : Mima, leur grand-mère adorée, n\'est plus, il faut vider les lieux et faire le tri dans les souvenirs.\r\nLes soeurs Delorme on', 'téléchargement3_1686742211.png', '2. Gestion des scripts - Python_1686742211.pdf', '4567843', 'privee', '0', '0', '0', 'AGBAGBt', 'universitaire', 'lome', 'informatique', 1, '2023-06-14 09:30:11', '2023-06-14 09:30:11'),
(3, 1, 'ESGIS', 'lome', 'athe Delorme sont soeurs. Elles ont grandi l\'une contre l\'autre, mais sont pourtant très différentes. Agathe, la plus jeune, bordélique et ardente, a toujours pris toute la place dans le bain, dans la chambre et dans le coeur d\'Emma. Après cinq ans d\'un silence inexpliqué, Emma donne rendez-vous à Agathe dans la maison de vacances : Mima, leur grand-mère adorée, n\'est plus, il faut vider les lieux et faire le tri dans les souvenirs.\r\nLes soeurs Delorme on', 'téléchargement_1686742271.jpg', 'NOTE_1686742271.pdf', '4567843', 'privee', '0', '0', '0', 'AGBAGBAtyuiuy', 'universitaire', 'lome', 'informatique', 1, '2023-06-14 09:31:11', '2023-06-14 09:31:11'),
(4, 1, 'CEG Avenou', 'lome', 'athe Delorme sont soeurs. Elles ont grandi l\'une contre l\'autre, mais sont pourtant très différentes. Agathe, la plus jeune, bordélique et ardente, a toujours pris toute la place dans le bain, dans la chambre et dans le coeur d\'Emma. Après cinq ans d\'un silence inexpliqué, Emma donne rendez-vous à Agathe dans la maison de vacances : Mima, leur grand-mère adorée, n\'est plus, il faut vider les lieux et faire le tri dans les souvenirs.\r\nLes soeurs Delorme on', 'events-2_1686742378.jpg', '2. Gestion des scripts - Python_1686742378.pdf', '4567843', 'publique', '0', '0', '0', 'AGBAGBAtyuiuy', 'secondaire', 'lome', 'scolaire', 1, '2023-06-14 09:32:58', '2023-06-14 09:32:58'),
(5, 1, 'SIGMA', 'lome', 'athe Delorme sont soeurs. Elles ont grandi l\'une contre l\'autre, mais sont pourtant très différentes. Agathe, la plus jeune, bordélique et ardente, a toujours pris toute la place dans le bain, dans la chambre et dans le coeur d\'Emma. Après cinq ans d\'un silence inexpliqué, Emma donne rendez-vous à Agathe dans la maison de vacances : Mima, leur grand-mère adorée, n\'est plus, il faut vider les lieux et faire le tri dans les souvenirs.\r\nLes soeurs Delorme on', 'course-3_1686742431.jpg', '2. Gestion des scripts - Python_1686742431.pdf', '4567843', 'privee', '0', '0', '0', 'AGBAGBAtyuiuy', 'primaire', 'lome', 'scolaire', 1, '2023-06-14 09:33:52', '2023-06-14 09:33:52'),
(6, 1, 'ISAGES', 'lome', 'athe Delorme sont soeurs. Elles ont grandi l\'une contre l\'autre, mais sont pourtant très différentes. Agathe, la plus jeune, bordélique et ardente, a toujours pris toute la place dans le bain, dans la chambre et dans le coeur d\'Emma. Après cinq ans d\'un silence inexpliqué, Emma donne rendez-vous à Agathe dans la maison de vacances : Mima, leur grand-mère adorée, n\'est plus, il faut vider les lieux et faire le tri dans les souvenirs.\r\nLes soeurs Delorme on', 'téléchargement (2)_1686742526.jpg', '2. Gestion des scripts - Python_1686742530.pdf', '4567843', 'privee', '0', '0', '0', 'AGBAGBAtyuiuy', 'universitaire', 'lome', 'scolaire', 1, '2023-06-14 09:35:36', '2023-06-14 09:35:36'),
(7, 1, 'ESGIS-Tg', 'lome', 'athe Delorme sont soeurs. Elles ont grandi l\'une contre l\'autre, mais sont pourtant très différentes. Agathe, la plus jeune, bordélique et ardente, a toujours pris toute la place dans le bain, dans la chambre et dans le coeur d\'Emma. Après cinq ans d\'un silence inexpliqué, Emma donne rendez-vous à Agathe dans la maison de vacances : Mima, leur grand-mère adorée, n\'est plus, il faut vider les lieux et faire le tri dans les souvenirs.\r\nLes soeurs Delorme on', 'téléchargement4_1686742594.png', 'NOTE_1686742594.pdf', '4567843', 'privee', '0', '0', '0', 'AGBAGBAtyuiuy', 'universitaire', 'lome', 'informatique', 1, '2023-06-14 09:36:34', '2023-06-14 09:36:34');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_03_31_001152_create_users_table', 1),
(10, '2023_05_08_095201_create_ecoles_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `raison_sociale` text NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `adresse` text DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `raison_sociale`, `prenom`, `name`, `description`, `adresse`, `profile_image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pas de raison', 'Ameyo', 'AGBAGBA', NULL, NULL, NULL, 'agbagbaameyo@gmail.com', NULL, '$2y$10$fRmxWBZMS3xf/I9uGSznzeRK3vuk/JySslz1pQdXRww7KfcKrdb1q', NULL, '2023-06-14 09:00:34', '2023-06-14 09:00:34');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ecoles`
--
ALTER TABLE `ecoles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ecoles_user_id_foreign` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
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
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ecoles`
--
ALTER TABLE `ecoles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ecoles`
--
ALTER TABLE `ecoles`
  ADD CONSTRAINT `ecoles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
