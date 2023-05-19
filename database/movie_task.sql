-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 03:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ayesha Jhulka', 'active', '2023-05-19 02:45:07', '2023-05-19 02:45:07'),
(3, ' Navdeep', 'active', '2023-05-19 02:45:07', '2023-05-19 02:45:07'),
(4, ' Santoshini', 'active', '2023-05-19 02:45:07', '2023-05-19 02:45:07'),
(5, 'Rainn Wilson', 'active', '2023-05-19 02:51:09', '2023-05-19 02:51:09'),
(6, ' Elliot Page', 'active', '2023-05-19 02:51:09', '2023-05-19 02:51:09'),
(7, ' Liv Tyler', 'active', '2023-05-19 02:51:09', '2023-05-19 02:51:09'),
(8, 'Alexandra Staden', 'active', '2023-05-19 02:51:17', '2023-05-19 02:51:17'),
(9, ' Victor McGuire', 'active', '2023-05-19 02:51:17', '2023-05-19 02:51:17'),
(10, ' Sean McConaghy', 'active', '2023-05-19 02:51:17', '2023-05-19 02:51:17'),
(11, 'Jake Gyllenhaal', 'active', '2023-05-19 02:51:21', '2023-05-19 02:51:21'),
(12, ' Michelle Monaghan', 'active', '2023-05-19 02:51:21', '2023-05-19 02:51:21'),
(13, ' Vera Farmiga', 'active', '2023-05-19 02:51:21', '2023-05-19 02:51:21'),
(14, 'Esma Hrusto', 'active', '2023-05-19 02:51:30', '2023-05-19 02:51:30'),
(15, ' Aya Crnic', 'active', '2023-05-19 02:51:30', '2023-05-19 02:51:30'),
(16, ' Alena Dzebo', 'active', '2023-05-19 02:51:30', '2023-05-19 02:51:30'),
(17, 'Cody Depuy', 'active', '2023-05-19 02:51:35', '2023-05-19 02:51:35'),
(18, ' Robbie Doyon', 'active', '2023-05-19 02:51:35', '2023-05-19 02:51:35'),
(19, ' Kenyon Fraser', 'active', '2023-05-19 02:51:35', '2023-05-19 02:51:35'),
(20, 'Flavia Tumusiime', 'active', '2023-05-19 02:52:21', '2023-05-19 02:52:21'),
(21, ' Cleopatra Koheirwe', 'active', '2023-05-19 02:52:21', '2023-05-19 02:52:21'),
(22, ' Hellen Lukoma', 'active', '2023-05-19 02:52:21', '2023-05-19 02:52:21'),
(23, 'Chris Pratt', 'active', '2023-05-19 02:57:11', '2023-05-19 02:57:11'),
(24, ' Will Ferrell', 'active', '2023-05-19 02:57:11', '2023-05-19 02:57:11'),
(25, ' Elizabeth Banks', 'active', '2023-05-19 02:57:11', '2023-05-19 02:57:11'),
(26, 'N/A', 'active', '2023-05-19 02:57:21', '2023-05-19 02:57:21'),
(27, 'Jitendra Kumar', 'active', '2023-05-19 02:57:25', '2023-05-19 02:57:25'),
(28, 'Josef Hader', 'active', '2023-05-19 02:57:35', '2023-05-19 02:57:35'),
(29, ' Alfred Dorfer', 'active', '2023-05-19 02:57:35', '2023-05-19 02:57:35'),
(30, ' Maria Hofstätter', 'active', '2023-05-19 02:57:35', '2023-05-19 02:57:35'),
(31, 'Sarath Kumar', 'active', '2023-05-19 02:57:41', '2023-05-19 02:57:41'),
(32, ' Manivannan', 'active', '2023-05-19 02:57:41', '2023-05-19 02:57:41'),
(33, ' Vadivelu', 'active', '2023-05-19 02:57:41', '2023-05-19 02:57:41'),
(34, ' Thalaivasal Vijay', 'active', '2023-05-19 02:57:41', '2023-05-19 02:57:41'),
(35, 'Ankit Love', 'active', '2023-05-19 02:57:51', '2023-05-19 02:57:51'),
(36, ' Rain Elwood', 'active', '2023-05-19 02:57:51', '2023-05-19 02:57:51'),
(37, ' Em-j Smith', 'active', '2023-05-19 02:57:51', '2023-05-19 02:57:51'),
(38, ' Matt Walters', 'active', '2023-05-19 02:57:51', '2023-05-19 02:57:51'),
(39, 'Drew Carey', 'active', '2023-05-19 02:57:58', '2023-05-19 02:57:58'),
(40, ' Billy Connolly', 'active', '2023-05-19 02:57:58', '2023-05-19 02:57:58'),
(41, ' Bill Maher', 'active', '2023-05-19 02:57:58', '2023-05-19 02:57:58'),
(42, 'Mark Hamill', 'active', '2023-05-19 02:58:16', '2023-05-19 02:58:16'),
(43, ' Harrison Ford', 'active', '2023-05-19 02:58:16', '2023-05-19 02:58:16'),
(44, ' Carrie Fisher', 'active', '2023-05-19 02:58:16', '2023-05-19 02:58:16'),
(45, 'Bern Cohen', 'active', '2023-05-19 06:15:40', '2023-05-19 06:15:40'),
(46, ' Steve Coombes', 'active', '2023-05-19 06:15:40', '2023-05-19 06:15:40'),
(47, ' Kelley McAuliffe', 'active', '2023-05-19 06:15:40', '2023-05-19 06:15:40'),
(48, 'Rutrana Tatong', 'active', '2023-05-19 06:15:49', '2023-05-19 06:15:49'),
(49, ' Chainarong Sungkao', 'active', '2023-05-19 06:15:49', '2023-05-19 06:15:49'),
(50, ' Chaiwat Sungkao', 'active', '2023-05-19 06:15:49', '2023-05-19 06:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_16_162025_create_permission_tables', 1),
(6, '2023_05_16_162345_create_movies_table', 2),
(7, '2023_05_16_162859_create_movie_metas_table', 2),
(8, '2023_05_18_173550_create_actors_table', 3),
(9, '2023_05_18_180330_change_in_movies', 4),
(10, '2023_05_18_182446_change_in_movies', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `rated` text DEFAULT NULL,
  `released` text DEFAULT NULL,
  `runtime` text DEFAULT NULL,
  `genre` text DEFAULT NULL,
  `director` text DEFAULT NULL,
  `writer` text DEFAULT NULL,
  `actors` text DEFAULT NULL,
  `plot` text DEFAULT NULL,
  `metascore` text DEFAULT NULL,
  `imdbRating` text DEFAULT NULL,
  `imdbVotes` text DEFAULT NULL,
  `imdbID` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `DVD` text DEFAULT NULL,
  `boxOffice` text DEFAULT NULL,
  `production` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `is_premium_content` enum('yes','no') DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rent_price` double DEFAULT 0,
  `rent_period` double DEFAULT 0,
  `tags` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `year`, `rated`, `released`, `runtime`, `genre`, `director`, `writer`, `actors`, `plot`, `metascore`, `imdbRating`, `imdbVotes`, `imdbID`, `type`, `DVD`, `boxOffice`, `production`, `website`, `is_premium_content`, `created_at`, `updated_at`, `rent_price`, `rent_period`, `tags`) VALUES
(2, 'Jai', 2004, '0', '25 Mar 2004', '0', 'Romance', 'Teja', 'Teja', 'Ayesha Jhulka,Navdeep,Santoshini', 'The story is about the son of a millionaire who playing boxing for India against Pakistan.', '0', '5.2', '46', 'tt2358060', 'movie', '02 Oct 2020', 'N/A', 'N/A', 'N/A', 'yes', '2023-05-19 02:50:52', '2023-05-19 06:11:07', 0, 0, 'Romance'),
(3, 'Super', 2010, '0', '10 Jun 2011', '0', 'Action, Comedy, Crime', 'James Gunn', 'James Gunn', 'Rainn Wilson,Elliot Page,Liv Tyler', 'After his wife falls under the influence of a drug dealer, an everyday guy transforms himself into Crimson Bolt, a superhero with the best intentions, but lacking in heroic skills.', '50', '6.7', '0', 'tt1512235', 'movie', '09 Aug 2011', '$327,716', 'N/A', 'N/A', 'yes', '2023-05-19 02:51:09', '2023-05-19 06:11:25', 0, 0, 'Action, Comedy, Crime'),
(4, 'The Task', 2011, 'R', '14 Jul 2011', '94 min', 'Horror', 'Alex Orwell', 'Kenny Yakkel', 'Alexandra Staden,Victor McGuire,Sean McConaghy', 'A group of reality show contestants must survive the night in a haunted jail.', 'N/A', '4.2', '3,593', 'tt1621446', 'movie', '26 Jul 2011', 'N/A', 'N/A', 'N/A', 'yes', '2023-05-19 02:51:17', '2023-05-19 06:15:15', 0, 0, 'Horror'),
(5, 'Source Code', 2011, 'PG-13', '01 Apr 2011', '93 min', 'Action, Drama, Mystery', 'Duncan Jones', 'Ben Ripley', 'Jake Gyllenhaal, Michelle Monaghan, Vera Farmiga', 'A soldier wakes up in someone else\'s body and discovers he\'s part of an experimental government program to find the bomber of a commuter train within 8 minutes.', '74', '7.5', '529,875', 'tt0945513', 'movie', '26 Jul 2011', '$54,712,227', 'N/A', 'N/A', 'no', '2023-05-19 02:51:21', '2023-05-19 02:51:21', 0, 0, 'Action, Drama, Mystery'),
(6, 'Import', 2016, 'N/A', '21 Jan 2016', '17 min', 'Short, Biography, Comedy', 'Ena Sendijarevic', 'Ena Sendijarevic', 'Esma Hrusto, Aya Crnic, Alena Dzebo', 'A young Bosnian refugee family ends up in a small village in the Netherlands after getting a residence permit in 1994. Absurd situations arise as they are trying to make this new world their home.', 'N/A', '7.2', '112', 'tt5645940', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 02:51:30', '2023-05-19 02:51:30', 0, 0, 'Short, Biography, Comedy'),
(7, 'The Admin Effect', 2012, 'Not Rated', 'N/A', '82 min', 'Action, Adventure, Sci-Fi', 'Chris Jones', 'Kenyon Fraser, Chris Jones', 'Cody Depuy, Robbie Doyon, Kenyon Fraser', 'After competing in a school competition to see who could create the best \'fake movie trailer\' the school loved it so much that a group of seniors decided to take their idea and turn it into an actual movie! After raising the funds to', 'N/A', '4.4', '5', 'tt2553298', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 02:51:35', '2023-05-19 02:51:35', 0, 0, 'Action, Adventure, Sci-Fi'),
(8, 'Reserved', 2013, 'N/A', '13 Aug 2013', '15 min', 'Talk-Show', 'N/A', 'N/A', 'Flavia Tumusiime, Cleopatra Koheirwe, Hellen Lukoma', 'RESERVED is an online lifestyle show presented by Flavia Tumusiime. . The show looks at celebrity profiles, exclusives, travel and getaway destinations, fashion and entertainment.', 'N/A', '9.3', '19', 'tt5906770', 'series', 'Array\n(\n)\n', '', '', '', 'no', '2023-05-19 02:56:42', '2023-05-19 02:56:42', 0, 0, 'Talk-Show'),
(9, 'The Lego Movie', 2014, 'PG', '07 Feb 2014', '100 min', 'Animation, Action, Adventure', 'Phil Lord, Christopher Miller', 'Phil Lord, Christopher Miller, Dan Hageman', 'Chris Pratt, Will Ferrell, Elizabeth Banks', 'An ordinary LEGO construction worker, thought to be the prophesied as \"special\", is recruited to join a quest to stop an evil tyrant from gluing the LEGO universe into eternal stasis.', '83', '7.7', '367,189', 'tt1490017', 'movie', '17 Jun 2014', '$257,966,122', 'N/A', 'N/A', 'no', '2023-05-19 02:57:11', '2023-05-19 02:57:11', 0, 0, 'Animation, Action, Adventure'),
(10, 'Rajesh Deewana', 2017, 'N/A', '11 Jul 2017', '5 min', 'Documentary, Short', 'Abhimanyu Kanodia', 'Sajal Kumar', 'N/A', 'Intersecting Lives: A Writer Meets Auto Driver Rajesh Deewana A story takes birth when the life of an auto rickshaw driver, also a singer, intersects with the life of a writer.', 'N/A', 'N/A', 'N/A', 'tt7189278', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 02:57:21', '2023-05-19 02:57:21', 0, 0, 'Documentary, Short'),
(11, 'Ramesh', 2020, 'N/A', 'N/A', '6 min', 'Short, Drama', 'Sudhansu Shripat', 'N/A', 'Jitendra Kumar', 'Who doesn\'t want to be famous? Well, everyone.', 'N/A', '9.4', '27', 'tt21084376', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 02:57:25', '2023-05-19 02:57:25', 0, 0, 'Short, Drama'),
(12, 'Jaipur', 1958, 'N/A', 'N/A', 'N/A', 'Documentary, Short', 'Shanti S. Varma', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'tt1964815', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 02:57:30', '2023-05-19 02:57:30', 0, 0, 'Documentary, Short'),
(13, 'India', 1993, 'N/A', 'N/A', '90 min', 'Comedy, Drama', 'Paul Harather', 'Josef Hader, Alfred Dorfer, Paul Harather', 'Josef Hader, Alfred Dorfer, Maria Hofstätter', 'Heinzi Boesel and Kurt Fellner are two Austrian health inspectors forced to work together, traveling through Austria. Over time a beautiful friendship evolves between the odd couple who couldn\'t stand each other initially; a frien...', 'N/A', '7.9', '3,013', 'tt0107214', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 02:57:35', '2023-05-19 02:57:35', 0, 0, 'Comedy, Drama'),
(14, 'Rajasthan', 1999, 'N/A', 'N/A', 'N/A', 'Action, Crime, Drama', 'R.K. Selvamani', 'N/A', 'Sarath Kumar, Manivannan, Vadivelu, Thalaivasal Vijay', 'A special task force faces unexpected challenges during their clash against terrorists.', 'N/A', '3.1', '38', 'tt0274750', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 02:57:41', '2023-05-19 02:57:41', 0, 0, 'Action, Crime, Drama'),
(15, 'Ankit Love: Beethoven Burst', 2011, 'N/A', '31 Oct 2011', '7 min', 'Short, Music, Musical', 'Ankit Love', 'Ankit Love', 'Ankit Love, Rain Elwood, Em-j Smith, Matt Walters', 'A civilization in the distant past 9 billion light years away from Earth has reached their wits end in their understanding of the physical universe. Perplexed by the fact that all their ...', 'N/A', 'N/A', 'N/A', 'tt2167707', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 02:57:51', '2023-05-19 02:57:51', 0, 0, 'Short, Music, Musical'),
(17, 'Star Wars: Episode IV - A New Hope', 1977, 'PG', '25 May 1977', '121 min', 'Action, Adventure, Fantasy', 'George Lucas', 'George Lucas', 'Mark Hamill, Harrison Ford, Carrie Fisher', 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth ...', '90', '8.6', '1,388,289', 'tt0076759', 'movie', '06 Dec 2005', '$460,998,507', 'N/A', 'N/A', 'no', '2023-05-19 02:58:16', '2023-05-19 02:58:16', 0, 0, 'Action, Adventure, Fantasy'),
(18, 'Document', 2006, 'N/A', '02 Aug 2006', '26 min', 'Short, Drama', 'Tze Chun, Sheila Dvorak', 'Tze Chun, Phillip Ray', 'Bern Cohen, Steve Coombes, Kelley McAuliffe', 'Summer, New York. Phil\'s girlfriend has recently gone into a coma. To cope, he\'s been writing. Now he can\'t stop, even though he\'s on the verge of a nervous breakdown.', 'N/A', '7.3', '16', 'tt0861346', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 06:15:40', '2023-05-19 06:15:40', 0, 0, 'Short, Drama'),
(19, 'Arun', 2015, 'N/A', 'N/A', '67 min', 'Drama', 'Sarah Hanks', 'Sarah Hanks', 'Rutrana Tatong, Chainarong Sungkao, Chaiwat Sungkao', 'N/A', 'N/A', 'N/A', 'N/A', 'tt5797804', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 06:15:49', '2023-05-19 06:15:49', 0, 0, 'Drama'),
(20, 'Import', 2016, 'N/A', '21 Jan 2016', '17 min', 'Short, Biography, Comedy', 'Ena Sendijarevic', 'Ena Sendijarevic', 'Esma Hrusto, Aya Crnic, Alena Dzebo', 'A young Bosnian refugee family ends up in a small village in the Netherlands after getting a residence permit in 1994. Absurd situations arise as they are trying to make this new world their home.', 'N/A', '7.2', '112', 'tt5645940', 'movie', 'N/A', 'N/A', 'N/A', 'N/A', 'no', '2023-05-19 06:15:55', '2023-05-19 06:15:55', 0, 0, 'Short, Biography, Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `movie_metas`
--

CREATE TABLE `movie_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) NOT NULL,
  `meta_key` text DEFAULT NULL,
  `meta_value` text DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_metas`
--

INSERT INTO `movie_metas` (`id`, `movie_id`, `meta_key`, `meta_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'poster', NULL, 'active', '2023-05-19 02:48:40', '2023-05-19 02:48:40'),
(2, 1, 'Language', NULL, 'active', '2023-05-19 02:48:40', '2023-05-19 02:48:40'),
(3, 1, 'Country', NULL, 'active', '2023-05-19 02:48:40', '2023-05-19 02:48:40'),
(4, 1, 'Awards', NULL, 'active', '2023-05-19 02:48:40', '2023-05-19 02:48:40'),
(5, 2, 'poster', 'https://m.media-amazon.com/images/M/MV5BZGJmM2QzMzItYjk1OS00MzgxLTk0NTYtODk2MmZkZDQzZTk3XkEyXkFqcGdeQXVyOTk3NTc2MzE@._V1_SX300.jpg', 'active', '2023-05-19 02:50:53', '2023-05-19 02:50:53'),
(6, 2, 'Language', 'Telugu', 'active', '2023-05-19 02:50:53', '2023-05-19 02:50:53'),
(7, 2, 'Country', 'India', 'active', '2023-05-19 02:50:53', '2023-05-19 02:50:53'),
(8, 2, 'Awards', 'N/A', 'active', '2023-05-19 02:50:53', '2023-05-19 02:50:53'),
(9, 3, 'poster', 'https://m.media-amazon.com/images/M/MV5BMzIzMGFlMWYtYTM5Mi00OTg2LWE3YjAtYTVjODAzNTc4N2IxL2ltYWdlXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SX300.jpg', 'active', '2023-05-19 02:51:09', '2023-05-19 02:51:09'),
(10, 3, 'Language', 'English', 'active', '2023-05-19 02:51:09', '2023-05-19 02:51:09'),
(11, 3, 'Country', 'United States', 'active', '2023-05-19 02:51:09', '2023-05-19 02:51:09'),
(12, 3, 'Awards', '1 win', 'active', '2023-05-19 02:51:09', '2023-05-19 02:51:09'),
(13, 4, 'poster', 'https://m.media-amazon.com/images/M/MV5BNzUzMDExMDUzNV5BMl5BanBnXkFtZTcwNDMzNjM1NA@@._V1_SX300.jpg', 'active', '2023-05-19 02:51:17', '2023-05-19 02:51:17'),
(14, 4, 'Language', 'English', 'active', '2023-05-19 02:51:17', '2023-05-19 02:51:17'),
(15, 4, 'Country', 'United States', 'active', '2023-05-19 02:51:17', '2023-05-19 02:51:17'),
(16, 4, 'Awards', 'N/A', 'active', '2023-05-19 02:51:17', '2023-05-19 02:51:17'),
(17, 5, 'poster', 'https://m.media-amazon.com/images/M/MV5BMTY0MTc3MzMzNV5BMl5BanBnXkFtZTcwNDE4MjE0NA@@._V1_SX300.jpg', 'active', '2023-05-19 02:51:21', '2023-05-19 02:51:21'),
(18, 5, 'Language', 'English', 'active', '2023-05-19 02:51:21', '2023-05-19 02:51:21'),
(19, 5, 'Country', 'United States, Canada, France, Germany', 'active', '2023-05-19 02:51:21', '2023-05-19 02:51:21'),
(20, 5, 'Awards', '1 win & 8 nominations', 'active', '2023-05-19 02:51:21', '2023-05-19 02:51:21'),
(21, 6, 'poster', 'https://m.media-amazon.com/images/M/MV5BMGExYzhhNDgtMjY3ZS00ZWQyLWE1OTktYmJjNzA4NGI0MWEzXkEyXkFqcGdeQXVyNzA0MDkzOA@@._V1_SX300.jpg', 'active', '2023-05-19 02:51:30', '2023-05-19 02:51:30'),
(22, 6, 'Language', 'Dutch', 'active', '2023-05-19 02:51:30', '2023-05-19 02:51:30'),
(23, 6, 'Country', 'Netherlands', 'active', '2023-05-19 02:51:30', '2023-05-19 02:51:30'),
(24, 6, 'Awards', '3 wins & 7 nominations', 'active', '2023-05-19 02:51:30', '2023-05-19 02:51:30'),
(25, 7, 'poster', 'https://m.media-amazon.com/images/M/MV5BMTg4NDE4OTExMF5BMl5BanBnXkFtZTgwMzM2NzA2MDE@._V1_SX300.jpg', 'active', '2023-05-19 02:51:35', '2023-05-19 02:51:35'),
(26, 7, 'Language', 'English', 'active', '2023-05-19 02:51:35', '2023-05-19 02:51:35'),
(27, 7, 'Country', 'United States', 'active', '2023-05-19 02:51:35', '2023-05-19 02:51:35'),
(28, 7, 'Awards', 'N/A', 'active', '2023-05-19 02:51:35', '2023-05-19 02:51:35'),
(29, 8, 'poster', 'https://m.media-amazon.com/images/M/MV5BZmYwNTBlZmMtMzE2NC00NGZjLWIwODctMzMxMjNmNTI5N2QxXkEyXkFqcGdeQXVyNTk4NDE1MDg@._V1_SX300.jpg', 'active', '2023-05-19 02:56:42', '2023-05-19 02:56:42'),
(30, 8, 'Language', 'English', 'active', '2023-05-19 02:56:42', '2023-05-19 02:56:42'),
(31, 8, 'Country', 'Uganda', 'active', '2023-05-19 02:56:42', '2023-05-19 02:56:42'),
(32, 8, 'Awards', 'N/A', 'active', '2023-05-19 02:56:42', '2023-05-19 02:56:42'),
(33, 9, 'poster', 'https://m.media-amazon.com/images/M/MV5BMTg4MDk1ODExN15BMl5BanBnXkFtZTgwNzIyNjg3MDE@._V1_SX300.jpg', 'active', '2023-05-19 02:57:11', '2023-05-19 02:57:11'),
(34, 9, 'Language', 'English, Turkish', 'active', '2023-05-19 02:57:11', '2023-05-19 02:57:11'),
(35, 9, 'Country', 'United States, Denmark, Australia', 'active', '2023-05-19 02:57:11', '2023-05-19 02:57:11'),
(36, 9, 'Awards', 'Nominated for 1 Oscar. 72 wins & 67 nominations total', 'active', '2023-05-19 02:57:11', '2023-05-19 02:57:11'),
(37, 10, 'poster', 'https://m.media-amazon.com/images/M/MV5BZDlmMTRkN2QtOTFiMy00YjA2LWE0NWQtYjg3YmI3MGRjMTQ2XkEyXkFqcGdeQXVyNDU5NjExNTQ@._V1_SX300.jpg', 'active', '2023-05-19 02:57:21', '2023-05-19 02:57:21'),
(38, 10, 'Language', 'Hindi', 'active', '2023-05-19 02:57:21', '2023-05-19 02:57:21'),
(39, 10, 'Country', 'India', 'active', '2023-05-19 02:57:21', '2023-05-19 02:57:21'),
(40, 10, 'Awards', 'N/A', 'active', '2023-05-19 02:57:21', '2023-05-19 02:57:21'),
(41, 11, 'poster', 'https://m.media-amazon.com/images/M/MV5BN2RhNTRiZDAtMjViNC00YzgwLWI2MTItZWRjOGEyNmM1MDI4XkEyXkFqcGdeQXVyMTUzNzMyMDE3._V1_SX300.jpg', 'active', '2023-05-19 02:57:25', '2023-05-19 02:57:25'),
(42, 11, 'Language', 'Hindi', 'active', '2023-05-19 02:57:25', '2023-05-19 02:57:25'),
(43, 11, 'Country', 'India', 'active', '2023-05-19 02:57:25', '2023-05-19 02:57:25'),
(44, 11, 'Awards', 'N/A', 'active', '2023-05-19 02:57:25', '2023-05-19 02:57:25'),
(45, 12, 'poster', 'N/A', 'active', '2023-05-19 02:57:30', '2023-05-19 02:57:30'),
(46, 12, 'Language', 'English', 'active', '2023-05-19 02:57:30', '2023-05-19 02:57:30'),
(47, 12, 'Country', 'India', 'active', '2023-05-19 02:57:30', '2023-05-19 02:57:30'),
(48, 12, 'Awards', 'N/A', 'active', '2023-05-19 02:57:30', '2023-05-19 02:57:30'),
(49, 13, 'poster', 'https://m.media-amazon.com/images/M/MV5BMjEwNTU1NDc0Nl5BMl5BanBnXkFtZTcwMDQwMDkxMQ@@._V1_SX300.jpg', 'active', '2023-05-19 02:57:35', '2023-05-19 02:57:35'),
(50, 13, 'Language', 'German', 'active', '2023-05-19 02:57:35', '2023-05-19 02:57:35'),
(51, 13, 'Country', 'Austria', 'active', '2023-05-19 02:57:35', '2023-05-19 02:57:35'),
(52, 13, 'Awards', '2 wins', 'active', '2023-05-19 02:57:35', '2023-05-19 02:57:35'),
(53, 14, 'poster', 'https://m.media-amazon.com/images/M/MV5BOWYxNWM2ZjItYjkxOS00YzFhLTg0OGEtNTBiZGM0Y2M0NjZlXkEyXkFqcGdeQXVyMjA4OTI5NDQ@._V1_SX300.jpg', 'active', '2023-05-19 02:57:41', '2023-05-19 02:57:41'),
(54, 14, 'Language', 'Tamil, Telugu', 'active', '2023-05-19 02:57:41', '2023-05-19 02:57:41'),
(55, 14, 'Country', 'India', 'active', '2023-05-19 02:57:41', '2023-05-19 02:57:41'),
(56, 14, 'Awards', 'N/A', 'active', '2023-05-19 02:57:41', '2023-05-19 02:57:41'),
(57, 15, 'poster', 'N/A', 'active', '2023-05-19 02:57:51', '2023-05-19 02:57:51'),
(58, 15, 'Language', 'English', 'active', '2023-05-19 02:57:51', '2023-05-19 02:57:51'),
(59, 15, 'Country', 'UK', 'active', '2023-05-19 02:57:51', '2023-05-19 02:57:51'),
(60, 15, 'Awards', 'N/A', 'active', '2023-05-19 02:57:51', '2023-05-19 02:57:51'),
(61, 16, 'poster', 'https://m.media-amazon.com/images/M/MV5BMTI1MDA0MjU4M15BMl5BanBnXkFtZTcwNDA2MjA0MQ@@._V1_SX300.jpg', 'active', '2023-05-19 02:57:58', '2023-05-19 02:57:58'),
(62, 16, 'Language', 'English', 'active', '2023-05-19 02:57:58', '2023-05-19 02:57:58'),
(63, 16, 'Country', 'United States', 'active', '2023-05-19 02:57:58', '2023-05-19 02:57:58'),
(64, 16, 'Awards', 'N/A', 'active', '2023-05-19 02:57:58', '2023-05-19 02:57:58'),
(65, 17, 'poster', 'https://m.media-amazon.com/images/M/MV5BOTA5NjhiOTAtZWM0ZC00MWNhLThiMzEtZDFkOTk2OTU1ZDJkXkEyXkFqcGdeQXVyMTA4NDI1NTQx._V1_SX300.jpg', 'active', '2023-05-19 02:58:16', '2023-05-19 02:58:16'),
(66, 17, 'Language', 'English', 'active', '2023-05-19 02:58:16', '2023-05-19 02:58:16'),
(67, 17, 'Country', 'United States', 'active', '2023-05-19 02:58:16', '2023-05-19 02:58:16'),
(68, 17, 'Awards', 'Won 6 Oscars. 65 wins & 31 nominations total', 'active', '2023-05-19 02:58:16', '2023-05-19 02:58:16'),
(69, 18, 'poster', 'https://m.media-amazon.com/images/M/MV5BMTY3NDA4OTY0MV5BMl5BanBnXkFtZTcwOTc3MTgzMQ@@._V1_SX300.jpg', 'active', '2023-05-19 06:15:40', '2023-05-19 06:15:40'),
(70, 18, 'Language', 'English', 'active', '2023-05-19 06:15:40', '2023-05-19 06:15:40'),
(71, 18, 'Country', 'United States', 'active', '2023-05-19 06:15:40', '2023-05-19 06:15:40'),
(72, 18, 'Awards', 'N/A', 'active', '2023-05-19 06:15:40', '2023-05-19 06:15:40'),
(73, 19, 'poster', 'N/A', 'active', '2023-05-19 06:15:49', '2023-05-19 06:15:49'),
(74, 19, 'Language', 'Thai', 'active', '2023-05-19 06:15:49', '2023-05-19 06:15:49'),
(75, 19, 'Country', 'Thailand, USA', 'active', '2023-05-19 06:15:49', '2023-05-19 06:15:49'),
(76, 19, 'Awards', 'N/A', 'active', '2023-05-19 06:15:49', '2023-05-19 06:15:49'),
(77, 20, 'poster', 'https://m.media-amazon.com/images/M/MV5BMGExYzhhNDgtMjY3ZS00ZWQyLWE1OTktYmJjNzA4NGI0MWEzXkEyXkFqcGdeQXVyNzA0MDkzOA@@._V1_SX300.jpg', 'active', '2023-05-19 06:15:55', '2023-05-19 06:15:55'),
(78, 20, 'Language', 'Dutch', 'active', '2023-05-19 06:15:55', '2023-05-19 06:15:55'),
(79, 20, 'Country', 'Netherlands', 'active', '2023-05-19 06:15:55', '2023-05-19 06:15:55'),
(80, 20, 'Awards', '3 wins & 7 nominations', 'active', '2023-05-19 06:15:55', '2023-05-19 06:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-05-16 11:09:43', '2023-05-16 11:09:43'),
(2, 'basicplan', 'web', '2023-05-16 11:09:43', '2023-05-16 11:09:43'),
(3, 'premiumplan', 'web', '2023-05-16 11:09:43', '2023-05-16 11:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super admin', 'info@movie.com', NULL, '$2y$10$Hlmch1FEmreK/p0WbWWaIe4HOxg4x5tyizxIzVlrAFR7aX/5xQXDK', NULL, '2023-05-16 11:13:00', '2023-05-16 11:13:00'),
(2, 'Premium plan', 'premiumplan@movie.com', NULL, '$2y$10$i46c3f6ZCTWuQw6GTRinEeG0aWuhkeYnbmjhJkWsFAG8EfB/XXu2W', NULL, '2023-05-16 11:13:01', '2023-05-16 11:13:01'),
(3, 'Basic plan', 'basicplan@movie.com', NULL, '$2y$10$e391D24b2Fb3npPY1MSVi.fuhEJBEed32rduQrsFn4QAwWA5.lR9C', NULL, '2023-05-16 11:13:01', '2023-05-16 11:13:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_metas`
--
ALTER TABLE `movie_metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `movie_metas`
--
ALTER TABLE `movie_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
