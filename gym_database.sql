-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 08:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title_en`, `title_ar`, `year`, `text_en`, `text_ar`, `created_by`, `created_at`, `updated_at`) VALUES
(14, 'Having <span class=\"text-color\">10 years</span> of experience in fitness', 'لدينا <span class=\"text-color\">10 سنوات</span> من الخبرة في اللياقة البدنية', '1990', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam lorem ante, dapibus in.<br>', '<div>لوريم إبسوم جلس بحزن في أميت ، كرس نخبة متميزةانيان كومودو ليغورا اجيت دوروانيان ماساكتاب مونتيس بدون الأمومة مع&nbsp; موضوع إجتماعي طبيعي واليكوا لوريم أنتي ، دوبس</div>', 3, '2020-10-16 20:32:13', '2020-10-17 12:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `class_categories`
--

CREATE TABLE `class_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_categories`
--

INSERT INTO `class_categories` (`id`, `name_en`, `name_ar`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'hello', 'هلوووووووووووووووووووووووووووووووووو', 3, '2020-11-21 19:51:23', '2020-11-30 11:04:30', '2020-11-30 11:04:30'),
(2, 'test2', 'تيست 2', 3, '2020-11-21 20:24:54', '2020-11-30 11:04:37', '2020-11-30 11:04:37'),
(3, 'hanan mohamed test style', 'تسيت يسنتبى نبتى نبترى يبنت ى', 3, '2020-11-23 07:29:21', '2020-11-30 11:04:42', '2020-11-30 11:04:42'),
(4, 'Yoga', 'يوجا', 3, '2020-11-30 11:05:56', '2020-11-30 11:05:56', NULL),
(5, 'Dance', 'الرقص', 3, '2020-11-30 11:06:38', '2020-11-30 11:06:38', NULL),
(6, 'Fitness', 'اللياقه البدنيه', 3, '2020-11-30 11:08:01', '2020-11-30 11:08:01', NULL),
(7, 'Athletic', 'الرياضه', 3, '2020-11-30 11:08:39', '2020-11-30 11:08:39', NULL),
(8, 'Boxing', 'ملاكمة', 3, '2020-11-30 11:23:06', '2020-11-30 11:23:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_features`
--

CREATE TABLE `class_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` tinyint(4) NOT NULL,
  `course` tinyint(4) NOT NULL,
  `students` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_features`
--

INSERT INTO `class_features` (`id`, `category`, `course`, `students`, `duration`, `shift`, `price`, `created_by`, `created_at`, `updated_at`) VALUES
(3, 4, 10, 20, 15, 'evening', 20, 3, '2020-11-30 15:02:42', '2020-11-30 15:02:42'),
(4, 5, 11, 30, 10, 'evening', 30, 3, '2020-11-30 15:03:07', '2020-11-30 15:03:07'),
(5, 6, 6, 50, 12, 'morning', 15, 3, '2020-11-30 15:03:33', '2020-11-30 15:03:33'),
(6, 6, 9, 40, 20, 'morning', 35, 3, '2020-11-30 15:03:58', '2020-11-30 15:03:58'),
(7, 6, 9, 30, 10, 'evening', 40, 3, '2020-11-30 15:04:22', '2020-11-30 15:04:22'),
(8, 6, 13, 45, 15, 'evening', 20, 3, '2020-11-30 15:04:54', '2020-11-30 15:04:54'),
(9, 7, 8, 10, 20, 'evening', 100, 3, '2020-11-30 15:05:14', '2020-11-30 15:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentor_en` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentor_ar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` int(11) NOT NULL,
  `calories` int(11) NOT NULL,
  `workout_intensity` tinyint(4) NOT NULL,
  `day` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_start` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_end` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name_en`, `name_ar`, `text_en`, `text_ar`, `mentor_en`, `mentor_ar`, `hours`, `calories`, `workout_intensity`, `day`, `time_start`, `time_end`, `category`, `created_by`, `created_at`, `updated_at`) VALUES
(6, 'Fat Burning', 'حرق الدهون', '<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif; text-align: start;\">This exercise involves running in place, so you can do it anywhere with minimal space.</p><div style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif; font-size: 18px; text-align: start;\"><figure class=\"css-1bavtbz\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-top: 0px; margin-bottom: 0px; text-align: center; max-width: 400px;\"><span class=\"css-rwmw5v\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; display: block; font-size: 0px; line-height: 0; outline: none; position: relative; user-select: none; z-index: 0;\"><span class=\"css-1s8jdqi\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; display: block; position: relative; padding-bottom: 400px;\"><img src=\"https://i0.wp.com/thumbs.gfycat.com/WideEvenGull-size_restricted.gif?h=840\" alt=\"high knees for cardio exercise\" class=\"css-1lwg88w\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; user-select: none; left: 0px; bottom: 0px; position: absolute;\"></span><div><br></div></span></figure></div><ol style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif; font-size: 18px; text-align: start;\"></ol>', '<div><br></div><div><span style=\"color: rgb(32, 33, 36); font-family: &quot;Noto Naskh Arabic UI&quot;, arial, sans-serif; font-size: 24px; white-space: pre-wrap; background-color: rgb(248, 249, 250);\">يتضمن هذا التمرين الجري في المكان ، لذا يمكنك القيام به في أي مكان بأقل مساحة.\r\nركب عالية لتمارين القلب</span><br></div>', 'Jimmy Karter', 'جيمي كارتر', 1, 400, 40, '[\"saturday\",\"monday\",\"wednesday\"]', '1:00:00', '1:30:00', '6', 3, '2020-11-30 11:57:12', '2020-11-30 11:57:12'),
(8, 'Weight Lifting', 'رفع الأثقال', 'Weightlifting is among the most popular sports among young people. Although it primarily focuses on muscles, its benefits are not limited to strengthening muscles only. It also helps burn fat, lose weight, improve athletic performance and work performance.', 'رياضة رفع الأثقال هي من بين أكثر الرياضات شعبية وانتشاراً بين الشباب. ورغم أنها تركز في المقام الأول على العضلات إلا أن فوائدها لا تقتصر على تقوية العضلات فقط. بل تساعد أيضاً على حرق الدهون وخسارة الوزن وتحسين الأداء الرياضي والأداء في العمل،', 'أحمد طارق', 'Ahmed Tarek', 2, 8000, 80, '[\"sunday\",\"thursday\"]', '2:00:00', '4:00:00', '7', 3, '2020-11-30 12:10:43', '2020-11-30 12:10:43'),
(9, 'Build Body', 'بناء الجسم', 'It\'s for both men and women. It\'s primarily for beginners, but there\'s plenty of science-backed advice for intermediates too', 'إنه لكل من الرجال والنساء. إنها في المقام الأول للمبتدئين ، ولكن هناك الكثير من النصائح المدعومة علميًا للوسطاء أيضًا', 'ايناس علي', 'Enas Ali', 1, 4000, 60, '[\"sunday\",\"tuesday\"]', '6:00:00', '7:00:00', '6', 3, '2020-11-30 12:16:26', '2020-11-30 12:16:26'),
(10, 'Vinyasa Yoga', 'يوجا فينياسا', 'As with many things in yoga, the definition is dependent on the context and on who you ask.  Below are the more common definitions.', 'كما هو الحال مع العديد من الأشياء في اليوغا ، يعتمد التعريف على السياق وعلى من تسأل. فيما يلي التعريفات الأكثر شيوعًا.', 'آنا لوس', 'Anna Loes', 3, 3000, 40, '[\"monday\",\"wednesday\"]', '0:00:00', '2:30:00', '4', 3, '2020-11-30 12:21:51', '2020-11-30 12:21:51'),
(11, 'Belly dance', 'الرقص الشرقي', 'It has evolved to take many different forms depending on the country and region, both in costume and dance style; with Egyptian style and its famous traditional rhymes being the most common worldwide having many schools around the globe practicing it.', 'لقد تطورت لتأخذ العديد من الأشكال المختلفة حسب البلد والمنطقة ، سواء في أسلوب الأزياء أو الرقص ؛ بأسلوب مصري وقوافيها التقليدية الشهيرة هي الأكثر شيوعًا في جميع أنحاء العالم حيث يوجد العديد من المدارس حول العالم تمارسها.', 'آنا لوس', 'Anna Loes', 1, 400, 50, '[\"tuesday\"]', '3:00:00', '3:30:00', '5', 3, '2020-11-30 14:47:36', '2020-11-30 14:47:36'),
(13, 'Dumbbells', 'دامبلز', 'No matter what camp you fall in, making home workouts effective can pose some challenges — one of which can be lack of equipment.', 'بغض النظر عن المعسكر الذي ستقع فيه ، فإن جعل التدريبات المنزلية فعالة يمكن أن يشكل بعض التحديات - أحدها قد يكون نقص المعدات.', 'أحمد طارق', 'Ahmed Tarek', 2, 3000, 50, '[\"saturday\"]', '10:00:00', '12:00:00', '6', 3, '2020-11-30 14:59:10', '2020-11-30 14:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `name`, `created_by`, `created_at`, `updated_at`) VALUES
(7, 'photo1', 3, '2020-10-18 11:02:39', '2020-10-18 11:02:39'),
(9, 'photo2', 3, '2020-10-18 11:03:19', '2020-10-18 11:03:19'),
(10, 'photo3', 3, '2020-10-18 11:03:41', '2020-10-18 11:03:41'),
(11, 'photo4', 3, '2020-10-18 11:04:06', '2020-10-18 11:04:06'),
(12, 'photo5', 3, '2020-10-18 11:04:31', '2020-10-18 11:04:31'),
(14, 'photo8', 3, '2020-10-18 11:05:11', '2020-10-18 11:05:11'),
(15, 'photo7', 3, '2020-10-18 11:05:40', '2020-10-18 11:05:40'),
(18, 'photo11', 3, '2020-10-18 11:51:32', '2020-10-18 11:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `icon_fonts`
--

CREATE TABLE `icon_fonts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icon_fonts`
--

INSERT INTO `icon_fonts` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'icofont-dumbbells', '<i class=\"icofont-dumbbells text-lg text-color\"></i>', NULL, NULL),
(2, 'icofont-muscle', '<i class=\"icofont-muscle text-lg text-color\"></i>', NULL, NULL),
(3, 'icofont-fruits', '<i class=\"icofont-fruits text-lg text-color\"></i>', NULL, NULL),
(4, 'icofont-thumbs-up', '<i class=\"icofont-thumbs-up text-lg text-color\"></i>', NULL, NULL),
(5, 'icofont-ui-fire-wall', '<i class=\"icofont-ui-fire-wall text-lg text-color\"></i>', NULL, NULL),
(6, 'icofont-bill-alt', '<i class=\"icofont-bill-alt text-lg text-color\"></i>', NULL, NULL),
(7, 'icofont-gym-alt-2', '<i class=\"icofont-gym-alt-2 text-lg text-color\"></i>', NULL, NULL),
(8, 'icofont-cycling-alt', '<i class=\"icofont-cycling-alt text-lg text-color\"></i>', NULL, NULL),
(9, 'icofont-gym-alt-3', '<i class=\"icofont-gym-alt-3 text-lg text-color\"></i>', NULL, NULL),
(10, 'icofont-muscle', '<i class=\"icofont-muscle text-lg text-color\"></i>', NULL, NULL),
(11, 'icofont-dumbbell', '<i class=\"icofont-dumbbell text-lg text-color\"></i>', NULL, NULL),
(12, 'icofont-gym', '<i class=\"icofont-gym text-lg text-color\"></i>', NULL, NULL),
(13, 'icofont-gym-alt-2', '<i class=\"icofont-gym-alt-2 text-lg text-color\"></i>', NULL, NULL),
(14, 'icofont-cycling-alt', '<i class=\"icofont-cycling-alt text-lg text-color\"></i>', NULL, NULL),
(15, 'icofont-gym-alt-3', '<i class=\"icofont-gym-alt-3 text-lg text-color\"></i>', NULL, NULL),
(16, 'icofont-muscle', '<i class=\"icofont-muscle text-lg text-color\"></i>', NULL, NULL),
(17, 'icofont-dumbbell', '<i class=\"icofont-dumbbell text-lg text-color\"></i>', NULL, NULL),
(18, 'icofont-gym', '<i class=\"icofont-gym text-lg text-color\"></i>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(1, 'image1603041176.jpg', 3, 'App\\Models\\Admin\\Slider', '2020-05-11 02:15:20', '2020-10-18 15:13:02'),
(8, 'image1602905291.jpg', 14, 'App\\Models\\Admin\\About', '2020-10-16 20:32:19', '2020-10-17 01:28:17'),
(9, 'image1602905294.jpg', 14, 'App\\Models\\Admin\\About', '2020-10-16 20:32:19', '2020-10-17 01:28:17'),
(16, 'image1603026159.jpg', 7, 'App\\Models\\Admin\\Gallary', '2020-10-18 11:02:41', '2020-10-18 11:02:41'),
(18, 'image1603026199.jpg', 9, 'App\\Models\\Admin\\Gallary', '2020-10-18 11:03:21', '2020-10-18 11:03:21'),
(19, 'image1603026221.jpg', 10, 'App\\Models\\Admin\\Gallary', '2020-10-18 11:03:43', '2020-10-18 11:03:43'),
(20, 'image1603026246.jpg', 11, 'App\\Models\\Admin\\Gallary', '2020-10-18 11:04:08', '2020-10-18 11:04:08'),
(21, 'image1603026271.jpg', 12, 'App\\Models\\Admin\\Gallary', '2020-10-18 11:04:33', '2020-10-18 11:04:33'),
(23, 'image1603026311.jpg', 14, 'App\\Models\\Admin\\Gallary', '2020-10-18 11:05:14', '2020-10-18 11:05:14'),
(24, 'image1603026340.jpg', 15, 'App\\Models\\Admin\\Gallary', '2020-10-18 11:05:42', '2020-10-18 11:05:42'),
(27, 'image1603029092.jpg', 18, 'App\\Models\\Admin\\Gallary', '2020-10-18 11:51:34', '2020-10-18 11:51:34'),
(28, 'image1603040860.jpg', 1, 'App\\Models\\Admin\\Skills', '2020-10-18 14:21:10', '2020-10-18 15:07:45'),
(30, 'image1603221840.jpg', 1, 'App\\Models\\Admin\\Offer', NULL, '2020-10-20 17:24:03'),
(33, 'image1603546971.jpg', 5, 'App\\Models\\Admin\\Service', '2020-10-24 11:42:55', '2020-10-24 11:42:55'),
(34, 'image1603567844.jpg', 1, 'App\\Models\\Admin\\Service', '2020-10-24 17:30:46', '2020-10-24 17:30:46'),
(35, 'image1603568124.jpg', 2, 'App\\Models\\Admin\\Service', '2020-10-24 17:35:27', '2020-10-24 17:35:27'),
(36, 'image1603568745.jpg', 3, 'App\\Models\\Admin\\Service', '2020-10-24 17:45:47', '2020-10-24 17:45:47'),
(37, 'image1603569013.jpg', 4, 'App\\Models\\Admin\\Service', '2020-10-24 17:50:15', '2020-10-24 17:50:15'),
(38, 'image1603569265.jpg', 5, 'App\\Models\\Admin\\Service', '2020-10-24 17:54:27', '2020-10-24 17:54:27'),
(39, 'image1603569469.jpg', 6, 'App\\Models\\Admin\\Service', '2020-10-24 17:57:51', '2020-10-24 17:57:51'),
(40, 'image1603569715.jpg', 7, 'App\\Models\\Admin\\Service', '2020-10-24 18:01:57', '2020-10-24 18:01:57'),
(41, 'image1603569922.jpg', 8, 'App\\Models\\Admin\\Service', '2020-10-24 18:04:20', '2020-10-24 18:05:24'),
(42, 'image1603570110.jpg', 9, 'App\\Models\\Admin\\Service', '2020-10-24 18:08:31', '2020-10-24 18:08:31'),
(43, 'image1603570385.jpg', 10, 'App\\Models\\Admin\\Service', '2020-10-24 18:13:08', '2020-10-24 18:13:08'),
(44, 'image1603570576.jpg', 11, 'App\\Models\\Admin\\Service', '2020-10-24 18:16:18', '2020-10-24 18:16:18'),
(45, 'image1603570741.jpg', 12, 'App\\Models\\Admin\\Service', '2020-10-24 18:19:02', '2020-10-24 18:19:02'),
(47, 'image1606225463.jpg', 2, 'App\\Models\\Admin\\Courses', '2020-11-24 08:20:31', '2020-11-24 11:44:27'),
(48, 'image1606225883.jpg', 3, 'App\\Models\\Admin\\Courses', '2020-11-24 11:51:27', '2020-11-24 11:51:27'),
(49, 'image1606226095.jpg', 4, 'App\\Models\\Admin\\Courses', '2020-11-24 11:55:00', '2020-11-24 11:55:00'),
(50, 'image1606232199.jpg', 5, 'App\\Models\\Admin\\Courses', '2020-11-24 13:36:41', '2020-11-24 13:36:41'),
(51, 'image1606744632.jpg', 6, 'App\\Models\\Admin\\Courses', '2020-11-30 11:57:14', '2020-11-30 11:57:14'),
(52, 'image1606745443.jpg', 8, 'App\\Models\\Admin\\Courses', '2020-11-30 12:10:45', '2020-11-30 12:10:45'),
(53, 'image1606745786.jpg', 9, 'App\\Models\\Admin\\Courses', '2020-11-30 12:16:28', '2020-11-30 12:16:28'),
(54, 'image1606746111.jpg', 10, 'App\\Models\\Admin\\Courses', '2020-11-30 12:21:54', '2020-11-30 12:21:54'),
(55, 'image1606754856.jpg', 11, 'App\\Models\\Admin\\Courses', '2020-11-30 14:47:50', '2020-11-30 14:47:50'),
(56, 'image1606755550.jpg', 13, 'App\\Models\\Admin\\Courses', '2020-11-30 14:59:15', '2020-11-30 14:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(9, '2020_10_02_203132_create_sessions_table', 1),
(13, '2020_10_10_114357_create_sliders_table', 3),
(15, '2020_10_10_110842_create_images_table', 5),
(16, '2020_10_15_143039_create_abouts_table', 6),
(19, '2020_10_17_154126_create_icon_fonts_table', 7),
(20, '2020_10_17_154307_create_why_choose_us_table', 7),
(23, '2020_10_18_114035_create_gallaries_table', 8),
(25, '2020_10_18_145048_create_skills_table', 9),
(28, '2020_09_29_124204_create_offers_table', 10),
(29, '2020_10_20_221908_create_services_categories_table', 11),
(32, '2020_10_24_073702_create_services_table', 12),
(33, '2020_10_24_205635_create_opinions_table', 13),
(37, '2020_11_21_183548_create_class_categories_table', 14),
(39, '2020_11_21_221928_add_soft_deletes_to_classes_category_table', 15),
(43, '2020_11_21_182600_create_courses_table', 16),
(47, '2020_11_24_154010_create_class_features_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title_en`, `title_ar`, `text_en`, `text_ar`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Discover your potential', 'اكتشف قدراتك', '<h2 class=\"text-lg mt-4 mb-5 text-white\">\r\n						Book your early seat to get <span class=\"text-color\">summer 25% </span>dicsount\r\n					</h2>', '<h2 class=\"text-lg mt-4 mb-5 text-white\">\r\n    احجز مكانك معنا للحصول علي <span class=\"text-color\">عرض صيفي 25% </span>خصم\r\n</h2>', '3', NULL, '2020-10-24 11:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `opinions`
--

CREATE TABLE `opinions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opinions`
--

INSERT INTO `opinions` (`id`, `name_en`, `name_ar`, `role_en`, `role_ar`, `title_en`, `title_ar`, `text_en`, `text_ar`, `counter`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'James William', 'جيمس وليام', 'Manager', 'مدير عام', 'Shape your body and healthy!', 'شكل جسمك و صحتك', 'If you want to become healthier and be in good shape, you should regularly exercise and remain physically active.', 'إذا كنت تريد أن تكون أكثر صحة ، والحفاظ على شكل جيد ، يجب عليك ممارسة الرياضة بانتظام ، والحفاظ على النشاط البدني', 60, 3, '2020-10-25 11:03:11', '2020-10-25 11:03:11'),
(3, 'John Donas', 'جون دوناس', 'Manager', 'مدير', 'A great Start to a healthy life', 'بداية جيدة في حياة صحية', 'By the way, very strict diets are harmful to health and are not suitable for everyone. It is better to burn excess calories at a gym than to wear yourself out with strict diets. Do you agree?', 'بالمناسبة ، الأنظمة الغذائية الصارمة ضارة بالصحة وليست مناسبة للجميع. من الأفضل حرق السعرات الحرارية الزائدة في صالة الألعاب الرياضية بدلاً من إرهاق نفسك باتباع نظام غذائي صارم. هل توافق؟', 70, 3, '2020-10-25 11:06:47', '2020-10-25 11:06:47'),
(4, 'Donas Jack', 'دوناس جاك', 'Trainer', 'مدرب', 'The workout worth attending!', 'يستحق التدريب', 'Many people go to a gym in order to stay in good physical shape', 'يذهب الكثير من الناس إلى صالة الألعاب الرياضية من أجل البقاء في حالة بدنية جيدة', 80, 3, '2020-10-25 11:10:06', '2020-10-25 11:10:06'),
(5, 'Mikel Hussy', 'ميكل هوسي', 'Coache', 'مدرب', 'Very Professional Club and coaches', 'نادي ومدربين محترفين للغاية', 'Everyone is familiar with aerobics – vigorous exercises designed to strengthen the heart and lungs – a type of exercise that is often done to music. There is aerobics for both sports and for wellness.', 'كل فرد على دراية بالتمارين الرياضية - وهي تمارين قوية مصممة لتقوية القلب والرئتين - وهي نوع من التمارين التي تُمارس غالبًا على الموسيقى. هناك تمارين رياضية لكل من الرياضة والعافية.', 50, 3, '2020-10-25 11:12:40', '2020-10-25 11:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_en`, `title_ar`, `text_en`, `text_ar`, `category`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'KEEP FITNESS', 'البقاء في صحة جيدة', 'Let’s be honest. A lot of us wander into the gym and randomly select exercises and weights. Basically, whatever catches our eye, or whatever we already know how to use and how to do.', 'لنكن صادقين. يتجول الكثير منا في صالة الألعاب الرياضية ويختارون التمارين والأوزان بشكل عشوائي. في الأساس ، كل ما يلفت انتباهنا ، أو أي شيء نعرفه بالفعل كيف نستخدمه وكيف نفعله.', '17', 3, '2020-10-24 17:30:44', '2020-10-24 17:39:30'),
(2, 'How To Keep Fitness', 'كيفية البقاء في صحة جيدة', 'When it comes to our goals, most of us want to lose weight, tone up or gain muscle, but we have no real plan. No directions of how to get from A to B.', 'When it comes to our goals, most of us want to lose weight, tone up or gain muscle, but we have no real plan. No directions of how to get from A to B.', '17', 3, '2020-10-24 17:35:24', '2020-10-24 17:38:19'),
(3, 'Health and career', 'الصحة والوظيفية', 'Our gym is staffed by friendly, experienced and successful health, fitness and lifestyle mentors.', 'يعمل في الصالة الرياضية لدينا مرشدين ودودين وذوي خبرة وناجحة في مجال الصحة واللياقة البدنية ونمط الحياة.', '17', 3, '2020-10-24 17:45:45', '2020-10-24 17:46:18'),
(4, 'Fat Burning Zone', 'منطقة حرق الدهون', 'Subjects consisted of 36 relatively fit runners (20 male, 16 female) who completed a maximal exercise test to exhaustion on a motor-driven treadmill.', 'تألفت الموضوعات من 36 عداءًا لائقًا نسبيًا (20 ذكرًا و 16 أنثى) الذين أكملوا اختبار التمرين الأقصى للإرهاق على جهاز الجري الذي يحركه محرك.', '17', 3, '2020-10-24 17:50:13', '2020-10-24 17:50:13'),
(5, 'select exercises', 'اختر التمارين', 'Let’s be honest. A lot of us wander into the gym and randomly select exercises and weights.', 'لنكن صادقين. يتجول الكثير منا في صالة الألعاب الرياضية ويختارون التمارين والأوزان بشكل عشوائي.', '18', 3, '2020-10-24 17:54:25', '2020-10-24 17:54:25'),
(6, 'Lose Weight', 'إنقاص الوزن', 'Pick up any diet book and it will claim to hold all the answers to successfully losing all the weight you want', 'اختر أي كتاب حمية وسوف يدعي أنه يحتوي على جميع الإجابات لفقدان الوزن الذي تريده بنجاح', '18', 3, '2020-10-24 17:57:49', '2020-10-24 17:57:49'),
(7, 'weight training', 'رفع الأثقال التدريب', 'A significant amount of evidence exists to support the overall health benefits of strength training.', 'يوجد قدر كبير من الأدلة لدعم الفوائد الصحية العامة لتدريب القوة.', '13', 3, '2020-10-24 18:01:55', '2020-10-24 18:01:55'),
(8, 'maintaining muscle', 'الحفاظ على العضلات', 'Building and maintaining muscle is necessary for all of us, especially as we age.', 'بناء العضلات والحفاظ عليها أمر ضروري لنا جميعًا ، خاصة مع تقدمنا ​​في العمر.', '13', 3, '2020-10-24 18:04:18', '2020-10-24 18:04:18'),
(9, 'plan ahead', 'التخطيط المسبق', 'It takes the guesswork out of it and maximizes the results of everything you do', 'فإنه يزيل التخمين الخاص بك وتعظيم نتائج كل شيء تفعله', '13', 3, '2020-10-24 18:08:30', '2020-10-24 18:08:30'),
(10, 'Bicycle Fitness', 'اللياقة البدنية  عن طريق ركوب الدرجات', 'Biking Journal and Notebook to Log and Record Your Bike Routes, Distance, Speed, Intensity Among Other Important Bicycle', 'دفتر يوميات ومفكرة لركوب الدراجات لتسجيل وتسجيل مسارات دراجتك والمسافة والسرعة والشدة بين الدراجات الأخرى المهمة', '14', 3, '2020-10-24 18:13:05', '2020-10-24 18:13:05'),
(11, 'Meditation methodology', 'منهجية التأمل', 'Although you don\'t need to formally meditate in order to practice hatha yoga—nor is the practice of hatha yoga mandatory in order to meditate', 'على الرغم من أنك لست بحاجة إلى التأمل رسميًا من أجل ممارسة هاثا يوغا - كما أن ممارسة هاثا يوجا ليست إلزامية من أجل التأمل', '15', 3, '2020-10-24 18:16:16', '2020-10-24 18:16:16'),
(12, 'Yoga Sutra', 'يوغا سوترا', 'According to the Yoga Sutra, our pain and suffering is created by the misperception that we are separate from nature.', 'وفقا لليوغا سوترا ، الألم والمعاناة الناجمة عن المفاهيم الخاطئة', '15', 3, '2020-10-24 18:19:01', '2020-10-24 18:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `services_categories`
--

CREATE TABLE `services_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` tinyint(4) NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_categories`
--

INSERT INTO `services_categories` (`id`, `title_en`, `title_ar`, `text_en`, `text_ar`, `icon`, `created_by`, `created_at`, `updated_at`) VALUES
(13, 'WEIGHT LIFTING', 'رفع الأثقال', 'most adults lose nearly a half pound of muscle per year starting around age 30, mostly because they aren’t as active as they were when they were younger. Losing muscle at the same time that metabolism starts to slow down is a recipe for weight gain and the health issues that can accompany it.', 'يفقد معظم البالغين ما يقرب من نصف رطل من العضلات سنويًا بدءًا من سن الثلاثين تقريبًا ، ويرجع ذلك في الغالب إلى أنهم لم يكونوا نشيطين كما كانوا عندما كانوا أصغر سناً. يعد فقدان العضلات في نفس الوقت الذي يبدأ فيه الأيض في التباطؤ وصفة لزيادة الوزن والمشكلات الصحية التي يمكن أن تصاحب ذلك.', 7, 3, '2020-10-20 23:50:03', '2020-10-24 17:15:30'),
(14, 'Cycling', 'ركوب الدراجات', 'Indoor cycling is one of the most practiced activities in fitness centers for most people regardless of their physical conditioning level. Several studies have analyzed the effect of indoor cycling on several parameters related to health.', 'يعد ركوب الدراجات في الأماكن المغلقة أحد أكثر الأنشطة التي تمارس في مراكز اللياقة البدنية لمعظم الناس بغض النظر عن مستوى تكييفهم البدني. قامت العديد من الدراسات بتحليل تأثير ركوب الدراجات في الأماكن المغلقة على العديد من المعايير المتعلقة بالصحة.', 8, 3, '2020-10-20 23:51:56', '2020-10-24 17:21:51'),
(15, 'YOGA MEDITATION', 'يوجا التأمل', 'An exquisite methodology exists within the yoga tradition that is designed to reveal the interconnectedness of every living thing. This fundamental unity is referred to as advaita. Meditation is the actual experience of this union.', 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه .', 9, 3, '2020-10-20 23:54:12', '2020-10-24 17:12:51'),
(16, 'Building body', 'بناء الجسم', 'The traditional method for building muscle mass, for both men and women alike, is to lift heavier weights and increase the amount of weight over time. On the intense end of the spectrum, powerlifters and many competitive bodybuilders pair very low reps (1 to 5) with extremely heavy weights (90-95% of their one-rep max).', 'الطريقة التقليدية لبناء كتلة العضلات ، لكل من الرجال والنساء على حد سواء ، هي رفع الأوزان الثقيلة وزيادة كمية الوزن بمرور الوقت. في النهاية الشديدة من الطيف ، يزاوج رافعو الأثقال والعديد من لاعبي كمال الأجسام التنافسيين ممثلين منخفضين جدًا (1 إلى 5) بأوزان ثقيلة للغاية (90-95 ٪ من الحد الأقصى لممثل واحد)', 10, 3, '2020-10-20 23:55:56', '2020-10-24 17:11:18'),
(17, 'Fitness Track', 'مسار اللياقة البدنية', 'There’s no reason to wait until the New Year to set health and fitness goals for yourself. While we’re not suggesting you should ditch your Fitbit, jotting down your workouts each day—doing it in a notebook the old-fashioned way—is an easy way to help keep yourself accountable and stay on track.', 'لا يوجد سبب للانتظار حتى العام الجديد لتحديد أهداف الصحة واللياقة البدنية لنفسك. على الرغم من أننا لا نقترح عليك التخلي عن تطبيق Fitbit الخاص بك ، فإن تدوين التدريبات الخاصة بك كل يوم - القيام بذلك في جهاز كمبيوتر محمول بالطريقة القديمة - هو وسيلة سهلة للمساعدة في الحفاظ على نفسك مسؤولاً والبقاء على المسار الصحيح.', 11, 3, '2020-10-20 23:57:56', '2020-10-24 17:19:38'),
(18, 'Fitness', 'اللياقه البدنيه', 'If you’re all about organizing your life, take it one step further by recording your daily workouts with these cute (and useful) journals.', 'إذا كنت تهتم بتنظيم حياتك ، فخذ خطوة إلى الأمام من خلال تسجيل تدريباتك اليومية باستخدام هذه المجلات الرائعة (والمفيدة).', 12, 3, '2020-10-20 23:59:45', '2020-10-24 17:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6Vvdom9jbTyeRWors4keyf35WkDeRrypewNC9QDI', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYkZsU3czS2pleW5yaG9ISHhjTjVrc2dlUGpCRHYwZFFCcjJXNUlvZCI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIzOiJodHRwOi8vbG9jYWxob3N0L0dZTS9hciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1609407296),
('aZyL0R0cEbq4oe7tpDqdxvs4yBvq2m2Q9PbFr6KU', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTlNMdTVubVlzNE9GNWNHZUFzaXZOSWhDdXhDOGpWUE8wbWRuUzg4QiI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIzOiJodHRwOi8vbG9jYWxob3N0L0dZTS9hciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1609445220),
('cQ7t9ZeWjsDDAWn5iU2TvIyiM1xkWaKCE19NFwKu', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiZmlBb3U1bUdGMTZJTmlScEl2bEg0Y2tIUkRIZnBXaTZsb1RiOFNBMiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vbG9jYWxob3N0L0dZTS9lbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkWjJpT2ZJVlFGUlIuWkhJL2RkSTh3LjhHTXJweFNNTlBSRGI2SWtPcjVBcEJ6eFo4dElZS3UiO3M6NjoibG9jYWxlIjtzOjI6ImVuIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRaMmlPZklWUUZSUi5aSEkvZGRJOHcuOEdNcnB4U01OUFJEYjZJa09yNUFwQnp4Wjh0SVlLdSI7fQ==', 1606906041),
('ReBvUvGnRBL2DMnnNTU0EFjh1eryuA3sawKjhZa7', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNmxFMG0wbzROTXpqaDA2TjVRZVY0OTJCd1JXdkJ4amNzb1EwaWkzaCI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIzOiJodHRwOi8vbG9jYWxob3N0L0dZTS9hciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1609264912),
('rm42sjaAP5y9GYwWgsPHffGA1MNiFPZNQddYvAPF', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoia1lUQUk0NWNpMVkwdXROMm9iUWJySW8xRjBjMXhxY0NXS1NydzRDaCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ5OiJodHRwOi8vbG9jYWxob3N0L0dZTS9lbi9kYXNoYm9hcmQvc2VydmljZXMvMS9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRaMmlPZklWUUZSUi5aSEkvZGRJOHcuOEdNcnB4U01OUFJEYjZJa09yNUFwQnp4Wjh0SVlLdSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkWjJpT2ZJVlFGUlIuWkhJL2RkSTh3LjhHTXJweFNNTlBSRGI2SWtPcjVBcEJ6eFo4dElZS3UiO30=', 1606930994),
('rzWELqIKyc0bFapx4UUOqigH4DlGtCx3b6rXRv8U', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibUtvdnR2a2R1RkhKdk1LWnZwNjV1MGF0bWpLdEZVWFlMcDQzN1NLOSI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIzOiJodHRwOi8vbG9jYWxob3N0L0dZTS9hciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1609357315),
('sIF4j6cQeNyGC5EcOeAthMW3kY2zcJ2AQoOyinEA', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoic2VpZkZFODFMVVJrUDlxbXlDQVlGTUs2OVVwUTY1NnFBSHdiTWhsRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3QvR1lNL2VuL2Rhc2hib2FyZCI7fXM6NjoibG9jYWxlIjtzOjI6ImVuIjtzOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFoyaU9mSVZRRlJSLlpISS9kZEk4dy44R01ycHhTTU5QUkRiNklrT3I1QXBCenhaOHRJWUt1IjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRaMmlPZklWUUZSUi5aSEkvZGRJOHcuOEdNcnB4U01OUFJEYjZJa09yNUFwQnp4Wjh0SVlLdSI7fQ==', 1606906234),
('Sjc1OqKdHssFaXumRcaev1dSi4AqzxSNwmhtIOsQ', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiZVc0eGpHdUtLRXpRQ3BQdjkzSDN0QjMxZ0RDdlRiamp3R0IxUk5SMiI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ1OiJodHRwOi8vbG9jYWxob3N0L0dZTS9hci9kYXNoYm9hcmQvYWJvdXRzL2VkaXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJE9QRkhzcG5zeDZSOEZRRnlkWWszRU9tRm1sV3FybmZjSjNXVDJiQ09DRE5QMk11aUd3MldpIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRPUEZIc3Buc3g2UjhGUUZ5ZFlrM0VPbUZtbFdxcm5mY0ozV1QyYkNPQ0ROUDJNdWlHdzJXaSI7fQ==', 1609877831),
('w6cFftDrcRcJE4QLNYOJOwEQ4gDjuhQ5x0umkhLQ', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieGVYV1BIQXhnZEw2NER0cGpWRHAwSkw5Q0k0aERHaFVXZmRBSUdXbiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFoyaU9mSVZRRlJSLlpISS9kZEk4dy44R01ycHhTTU5QUkRiNklrT3I1QXBCenhaOHRJWUt1IjtzOjY6ImxvY2FsZSI7czoyOiJhciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3QvR1lNL2FyL2Rhc2hib2FyZC9mZWF0dXJlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1606756665),
('XjcTSmSbZky19r7xtL2tn1HscAQsvOanwQZ52dB6', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS3lDeWtqQTcyOU84bjFMa0RQUzBNeUtGWW54VGxZVjBBVUZIaEszRCI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIzOiJodHRwOi8vbG9jYWxob3N0L0dZTS9hciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1609325585),
('yIxJiaaSlR5BXVeUrzPqsY63rjgkpzkAUO30GxRu', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiSm5Lejg3YUgzQ3lGU3VBYk9xZ0xPZW1sdzJyWVdtS0FZQ1JYNjQ4ayI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vbG9jYWxob3N0L0dZTS9hci9kYXNoYm9hcmQvZ2FsbGFyaWVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRaMmlPZklWUUZSUi5aSEkvZGRJOHcuOEdNcnB4U01OUFJEYjZJa09yNUFwQnp4Wjh0SVlLdSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkWjJpT2ZJVlFGUlIuWkhJL2RkSTh3LjhHTXJweFNNTlBSRGI2SWtPcjVBcEJ6eFo4dElZS3UiO30=', 1609926916),
('zEdB39KBYCAbmsYF4cY4mv7JME6NIx7DRC698dba', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiMWhXVTFSeGtLcHpmOUNqMURTSTJwT3VwaU9IZnhOVk5RZmpiVktZUSI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vbG9jYWxob3N0L0dZTS9hci9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFoyaU9mSVZRRlJSLlpISS9kZEk4dy44R01ycHhTTU5QUkRiNklrT3I1QXBCenhaOHRJWUt1IjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRaMmlPZklWUUZSUi5aSEkvZGRJOHcuOEdNcnB4U01OUFJEYjZJa09yNUFwQnp4Wjh0SVlLdSI7fQ==', 1607176276);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title_en`, `title_ar`, `text_en`, `text_ar`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '<h2 class=\"mt-1 mb-3\">We’ve skill in <br>wide <span class=\"text-color\">range of fitness</span> and Other body health facility. </h2>', '<h2 class=\"mt-1 mb-3\">لدينا مهاره <br>واسعه <span class=\"text-color\">في اللياقه البدنيه </span> وصحه الجسم الاخري</h2>', '<p class=\"mb-4\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam lorem ante, dapibus in.</p>', '<p class=\"mb-4\">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور\r\n\r\nأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد\r\n\r\nأكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .</p>', 3, '2020-10-18 14:21:07', '2020-10-20 18:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` tinyint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_en`, `title_ar`, `created_at`, `updated_at`, `created_by`) VALUES
(3, '<h1 class=\"text-uppercase text-white mb-5\">             STEP UP YOUR <span class=\"text-color\">FITNESS CHALLANGE</span><br>WITH US\r\n            </h1>', '<h1 class=\"text-uppercase text-white mb-5\">﻿<span style=\"white-space: nowrap;overflow: hidden;\">تعزيز اللياقة البدنية</span><br><span class=\"text-color\" style=\"white-space: nowrap;overflow: hidden;\">الخاص بك بالتحدي </span><br><span style=\"float: right\">تعال معنا</span><br></h1>', '2020-10-13 08:40:39', '2020-10-18 15:12:08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'hanan\'s Team', 1, '2020-10-02 19:16:35', '2020-10-02 19:16:35'),
(2, 2, 'asmaa\'s Team', 1, '2020-10-02 22:18:39', '2020-10-02 22:18:39'),
(3, 3, 'Hanan\'s Team', 1, '2020-10-02 22:33:10', '2020-10-02 22:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'hanan', 'hananmohammed2468@gmail.com', NULL, '$2y$10$rTaxYYf5DES8lFRQve6P2uksYegtMiQW0yOYeCefXyhmP6FwYUejC', NULL, NULL, 'R5mk1vWD4p2FP7746QdjsSuYnCHs6trCv41WFsvaBmUGhBFYkGtERD3ogH2l', 1, 'profile-photos/C2V8n4vxPzBBRk13AP6mPpR2UpsDZhaX96au4bjF.jpeg', '2020-10-02 19:16:35', '2020-10-02 23:55:13'),
(2, 'asmaa', 'asmaa@gmail.com', NULL, '$2y$10$OPFHspnsx6R8FQFydYk3EOmFmlWqrnfcJ3WT2bCOCDNP2MuiGw2Wi', NULL, NULL, NULL, NULL, NULL, '2020-10-02 22:18:39', '2020-10-02 22:18:39'),
(3, 'Hanan Mohamed', 'admin@gmail.com', NULL, '$2y$10$Z2iOfIVQFRR.ZHI/ddI8w.8GMrpxSMNPRDb6IkOr5ApBzxZ8tIYKu', NULL, NULL, 'cHyscN9KVMp6n1w5qIjNZ4cTFy8oN4R8l0y3Ko9YWbLW7onBTh4pn5bDc9Bg', 3, NULL, '2020-10-02 22:33:10', '2020-10-02 23:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` tinyint(20) NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `title_en`, `title_ar`, `text_en`, `text_ar`, `icon`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '<h3 class=\"mt-3 text-white\">HEALTHY DIET Plan</h3>', '<h3 class=\"mt-3 text-white\">برنامج الأكل الصحي</h3>', '<p class=\"mt-3 mb-4 text-white\">Eating plan that helps manage your weight includes a variety of healthy foods .</p>', '<p class=\"mt-3 mb-4 text-white\">اتباع نظام غذائي يساعد على السيطرة على الوزن يشمل مجموعة متنوعة من الأطعمة الصحية.</p>', 3, 3, '2020-10-17 22:35:42', '2020-10-17 22:35:42'),
(2, '<h3 class=\"mt-3\">PROFFESIONAL TRAINER</h3>', '<h3 class=\"mt-3\">مدرب محترف</h3>', '<p class=\"mt-3 mb-4\">There\'s no doubt that a well designed website can be huge asset to your fitness business.</p>', '<p class=\"mt-3 mb-4\">ليس هناك شك في أن موقع على شبكة الإنترنت مصممة بشكل جيد هو ثروة كبيرة في اللياقة البدنية.</p>', 2, 3, '2020-10-17 22:58:42', '2020-10-17 22:58:42'),
(5, '<h3 class=\"mt-3 text-white\">Modern Equipment</h3>', '<h3 class=\"mt-3 text-white\">المعدات الحديثة</h3>', '<p class=\"mt-3 mb-4 text-white\">Home gyms are hot right now and we can’t promise each item on our list will be in stock by the time you check it out.</p>', '<p class=\"mt-3 mb-4 text-white\"> سوف يكون صالة الألعاب الرياضية المنزلية هي الآن ساخنة جدا ، ونحن لا يمكن أن تضمن أن كل بند من بنود القائمة </p>', 1, 3, '2020-10-17 22:43:10', '2020-10-17 22:43:10'),
(7, '<h3 class=\"mt-3\">24/7 Helping People</h3>', '<h3 class=\"mt-3\">24/7 لمساعده الناس </h3>', '<p class=\"mt-3 mb-4\">Your own business and fitness members can benefit from texting’s lightning fast speed.</p>', '<p class=\"mt-3 mb-4\">يمكن لأعضاء المؤسسة الخاصة بك واللياقة البدنية الاستفادة من سرعة البرق الرسائل القصيرة .</p>', 4, 3, '2020-10-17 23:06:04', '2020-10-17 23:06:04'),
(8, '<h3 class=\"mt-3 text-white\">Unique to Your Needs</h3>', '<h3 class=\"mt-3 text-white\">تلبية الاحتياجات الخاصة بك</h3>', '<p class=\"mt-3 mb-4 text-white\"> GYM FIT provides tailor-made services to its esteemed members suffering from injuries or muscular pain.</p>', '<p class=\"mt-3 mb-4 text-white\">مركز اللياقة البدنية يوفر خدمة مخصصة للأعضاء الكرام الذين أصيبوا أو ألم في العضلات</p>', 5, 3, '2020-10-17 23:09:28', '2020-10-17 23:09:28'),
(9, '<h3 class=\"mt-3\">Online payment</h3>', '<h3 class=\"mt-3\">الدفع الالكتروني</h3>', '<p class=\"mt-3 mb-4\">Online payment gateways To service payment information for websites.</p>', '<p class=\"mt-3 mb-4\">بوابة الدفع الإلكتروني لتسهيل عمليه الدفع عن طريق الموقع .</p>', 6, 3, '2020-10-17 23:13:59', '2020-10-18 12:36:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_categories`
--
ALTER TABLE `class_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_features`
--
ALTER TABLE `class_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icon_fonts`
--
ALTER TABLE `icon_fonts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_categories`
--
ALTER TABLE `services_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_created_by_foreign` (`created_by`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `class_categories`
--
ALTER TABLE `class_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `class_features`
--
ALTER TABLE `class_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `icon_fonts`
--
ALTER TABLE `icon_fonts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `opinions`
--
ALTER TABLE `opinions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services_categories`
--
ALTER TABLE `services_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
