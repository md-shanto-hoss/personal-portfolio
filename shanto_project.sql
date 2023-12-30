-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 07:09 AM
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
-- Database: `shanto_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `starting_year` int(11) DEFAULT NULL,
  `ending_year` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `name`, `university_name`, `starting_year`, `ending_year`, `description`, `created_at`, `updated_at`) VALUES
(1, 'HSC', 'shahid begum sheikh fazilatunnesa government college', 2018, 2022, 'In summary, passing the HSC examination in the Science group is a remarkable accomplishment that highlights your proficiency in scientific knowledge, analytical skills, and problem-solving abilities. It opens doors to diverse educational and career pathways and demonstrates your commitment to academic excellence. Your HSC qualification in the Science group sets the stage for a rewarding future in scientific exploration, innovation, and contribution to society.', '2023-06-22 11:32:34', '2023-06-22 11:32:34'),
(2, 'Computer Science and Engineering', 'Brac University', 2021, 2025, 'Studying Computer Science and Engineering offers a comprehensive education in computer science principles and engineering practices. It equips you with the skills to design, develop, and implement innovative solutions to complex problems. The field presents diverse career opportunities and requires a commitment to lifelong learning, making it an exciting and rewarding choice for aspiring technologists.', '2023-06-22 11:34:14', '2023-06-22 11:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `starting_year` int(11) DEFAULT NULL,
  `ending_year` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `name`, `position_name`, `company_name`, `starting_year`, `ending_year`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Web Developer', 'Junior Developer', 'Freelanching', 2021, 2023, 'as a Laravel and Vue.js developer, i\'m possess the skills to create dynamic and interactive web applications. I expertise in Laravel enables you to handle back-end logic and API integrations, while Vue.js empowers to build responsive and data-driven user interfaces. I\'m ability to integrate these frameworks and follow best practices positions you as a competent developer capable of delivering high-quality, modern web solutions.', '2023-06-22 11:47:10', '2023-06-22 11:47:10'),
(2, 'Web Developer', 'Junior Developer', 'Upwork', 2021, 2023, 'as a Laravel and Vue.js developer, you possess the skills to create dynamic and interactive web applications. Your expertise in Laravel enables you to handle back-end logic and API integrations, while Vue.js empowers you to build responsive and data-driven user interfaces. Your ability to integrate these frameworks and follow best practices positions you as a competent developer capable of delivering high-quality, modern web solutions.', '2023-06-22 11:48:34', '2023-06-22 11:48:34');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_22_061553_create_sessions_table', 1),
(7, '2023_06_22_083346_create_personals_table', 1),
(8, '2023_06_22_094214_create_services_table', 1),
(9, '2023_06_22_100207_create_education_table', 1),
(10, '2023_06_22_103342_create_experiences_table', 1),
(11, '2023_06_22_110731_create_works_table', 1),
(12, '2023_06_22_112019_create_other_images_table', 1),
(17, '2023_06_24_073242_create_works_table', 2),
(18, '2023_12_15_184949_create_messages_table', 3),
(20, '2023_12_15_192851_create_reviews_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personals`
--

CREATE TABLE `personals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `age` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`id`, `name`, `email`, `mobile`, `age`, `location`, `dob`, `profession`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Md Shanto Hossain', 'shantohossain259@gmail.com', 1799630818, '21', 'Dhaka, Bangladesh', '13-01-2002', 'Web Developer', 'As a Laravel and Vue.js developer, i possess a unique skill set that combines back-end development with front-end interactivity, enabling to create dynamic and responsive web applications. I expertise in both Laravel, a popular PHP framework, and Vue.js, a progressive JavaScript framework, allows you to build robust and modern web solutions.\r\n\r\nIn my role as a Laravel and Vue.js developer, are well-versed in leveraging Laravel\'s powerful back-end capabilities to handle server-side logic, database interactions, and API integrations. I have experience designing and developing RESTful APIs using Laravel\'s routing system, controllers, and middleware. This enables you to establish smooth communication between the front-end and back-end, facilitating data exchange and ensuring seamless user experiences.', 'personal-images/1687454958.jpg', '2023-06-22 11:29:18', '2023-06-22 11:29:18');

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'PHP (Hypertext Preprocessor) is a popular server-side scripting language primarily used for web development. It was originally designed for creating dynamic web pages and has since evolved into a versatile language capable of handling a wide range of tasks. PHP code is embedded within HTML, allowing developers to seamlessly mix PHP and HTML to create dynamic web content.', 'service-images/1687456536.png', '2023-06-22 11:55:36', '2023-06-22 11:55:36'),
(2, 'Bootstrap', 'Bootstrap provides a collection of CSS (Cascading Style Sheets) and JavaScript components, as well as pre-designed templates and stylesheets, that streamline the process of designing and developing modern, visually appealing websites. It aims to simplify the front-end development process by offering a set of ready-to-use components and utilities that can be easily customized and integrated into web projects.', 'service-images/1687456671.png', '2023-06-22 11:57:51', '2023-06-22 11:57:51'),
(3, 'JavaSript', 'JavaScript is a versatile programming language primarily used for creating interactive and dynamic web content. It is a client-side scripting language, meaning it runs directly within a web browser, enabling developers to enhance the functionality and interactivity of web pages. JavaScript is supported by all major web browsers, including Chrome, Firefox, Safari, and Edge.', 'service-images/1687456790.png', '2023-06-22 11:59:50', '2023-06-22 11:59:50'),
(4, 'jQuery', 'jQuery simplifies common tasks in JavaScript by abstracting complex functionalities into simple and easy-to-use methods. It provides a unified API that works consistently across different web browsers, smoothing out the differences and quirks in JavaScript implementations. This makes it easier for developers to write cross-browser compatible code and reduces the amount of code needed to achieve desired functionality.', 'service-images/1687456852.jpg', '2023-06-22 12:00:52', '2023-06-22 12:00:52'),
(5, 'MySQL', 'MySQL follows the client-server model, where the database server handles data storage, retrieval, and management, while client applications interact with the server to perform operations on the database. It uses Structured Query Language (SQL) as its primary language for interacting with the database.', 'service-images/1687456991.png', '2023-06-22 12:03:11', '2023-06-22 12:03:11'),
(6, 'Vuejs', 'One of the key features of Vue.js is its simplicity and ease of use. The framework has a gentle learning curve, making it accessible to both beginners and experienced developers. Vue.js utilizes a template syntax that combines HTML markup and Vue-specific directives, allowing developers to bind data to the DOM, handle events, conditionally render elements, and iterate over data collections.', 'service-images/1687457128.png', '2023-06-22 12:05:28', '2023-06-22 12:05:28'),
(7, 'Laravel', 'I know MVC, ORM, Query builder, mastering, MySQL, Crud, about blade. Laravel also comes with a powerful ORM (Object-Relational Mapping) called Eloquent, It follows the Model-View-Controller (MVC) architectural pattern, which promotes separation of concerns and helps maintain a clean and organized codebase.', 'service-images/1687457391.png', '2023-06-22 12:09:51', '2023-06-22 12:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('EcYHz3ByohnwrIA6KYQfgDSFCRRp6XZDNjejsHTb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUWxVdHZRWmgwZXIzd3RVeEZjQTdVYkNmb0poMDBCZnNZNG5HR1p0diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MjI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8iO319', 1702673749),
('KypUwPX5hWMuGGFKbJln7MxLzXZYiWx1ICQWQ8EW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUlTbFFTS3NQSlpKd2V3YUNPendEa3NuMlNZRzZsYW5hMndQaFExRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1702706850),
('nyPrtX5L9T4Snpz5srJEYSepat1gSfeXcWTC9KDV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMG14OHhmQU1vbzhuU3I1MkFLcWRjMlM4aW1SVkxlcndHR2FvbmM2dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1702706636);

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Md Shanto Hossain', 'shantohossain259@gmail.com', NULL, '$2y$10$sUTBP/jDQjuDmMZbJXJHOO2h7Utk6fn9SbTxy/8BkPAu.NTvf2SCm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 11:16:26', '2023-06-22 11:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_url` varchar(255) DEFAULT NULL,
  `complete_date` text DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `industry_name` varchar(255) DEFAULT NULL,
  `technologist` varchar(255) DEFAULT NULL,
  `project_description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personals_email_unique` (`email`),
  ADD UNIQUE KEY `personals_mobile_unique` (`mobile`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personals`
--
ALTER TABLE `personals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
