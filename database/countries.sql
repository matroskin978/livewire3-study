-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MariaDB-11.2
-- Время создания: Фев 23 2025 г., 15:40
-- Версия сервера: 11.2.2-MariaDB
-- Версия PHP: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `livewire3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Aruba', NULL, NULL),
(2, 'Afghanistan', NULL, NULL),
(3, 'Angola', NULL, NULL),
(4, 'Anguilla', NULL, NULL),
(5, 'Albania', NULL, NULL),
(6, 'Andorra', NULL, NULL),
(7, 'Netherlands Antilles', NULL, NULL),
(8, 'United Arab Emirates', NULL, NULL),
(9, 'Argentina', NULL, NULL),
(10, 'Armenia', NULL, NULL),
(11, 'American Samoa', NULL, NULL),
(12, 'Antarctica', NULL, NULL),
(13, 'French Southern territories', NULL, NULL),
(14, 'Antigua and Barbuda', NULL, NULL),
(15, 'Australia', NULL, NULL),
(16, 'Austria', NULL, NULL),
(17, 'Azerbaijan', NULL, NULL),
(18, 'Burundi', NULL, NULL),
(19, 'Belgium', NULL, NULL),
(20, 'Benin', NULL, NULL),
(21, 'Burkina Faso', NULL, NULL),
(22, 'Bangladesh', NULL, NULL),
(23, 'Bulgaria', NULL, NULL),
(24, 'Bahrain', NULL, NULL),
(25, 'Bahamas', NULL, NULL),
(26, 'Bosnia and Herzegovina', NULL, NULL),
(27, 'Belarus', NULL, NULL),
(28, 'Belize', NULL, NULL),
(29, 'Bermuda', NULL, NULL),
(30, 'Bolivia', NULL, NULL),
(31, 'Brazil', NULL, NULL),
(32, 'Barbados', NULL, NULL),
(33, 'Brunei', NULL, NULL),
(34, 'Bhutan', NULL, NULL),
(35, 'Bouvet Island', NULL, NULL),
(36, 'Botswana', NULL, NULL),
(37, 'Central African Republic', NULL, NULL),
(38, 'Canada', NULL, NULL),
(39, 'Cocos (Keeling) Islands', NULL, NULL),
(40, 'Switzerland', NULL, NULL),
(41, 'Chile', NULL, NULL),
(42, 'China', NULL, NULL),
(43, 'Côte d’Ivoire', NULL, NULL),
(44, 'Cameroon', NULL, NULL),
(45, 'Congo, The Democratic Republic of the', NULL, NULL),
(46, 'Congo', NULL, NULL),
(47, 'Cook Islands', NULL, NULL),
(48, 'Colombia', NULL, NULL),
(49, 'Comoros', NULL, NULL),
(50, 'Cape Verde', NULL, NULL),
(51, 'Costa Rica', NULL, NULL),
(52, 'Cuba', NULL, NULL),
(53, 'Christmas Island', NULL, NULL),
(54, 'Cayman Islands', NULL, NULL),
(55, 'Cyprus', NULL, NULL),
(56, 'Czech Republic', NULL, NULL),
(57, 'Germany', NULL, NULL),
(58, 'Djibouti', NULL, NULL),
(59, 'Dominica', NULL, NULL),
(60, 'Denmark', NULL, NULL),
(61, 'Dominican Republic', NULL, NULL),
(62, 'Algeria', NULL, NULL),
(63, 'Ecuador', NULL, NULL),
(64, 'Egypt', NULL, NULL),
(65, 'Eritrea', NULL, NULL),
(66, 'Western Sahara', NULL, NULL),
(67, 'Spain', NULL, NULL),
(68, 'Estonia', NULL, NULL),
(69, 'Ethiopia', NULL, NULL),
(70, 'Finland', NULL, NULL),
(71, 'Fiji Islands', NULL, NULL),
(72, 'Falkland Islands', NULL, NULL),
(73, 'France', NULL, NULL),
(74, 'Faroe Islands', NULL, NULL),
(75, 'Micronesia, Federated States of', NULL, NULL),
(76, 'Gabon', NULL, NULL),
(77, 'United Kingdom', NULL, NULL),
(78, 'Georgia', NULL, NULL),
(79, 'Ghana', NULL, NULL),
(80, 'Gibraltar', NULL, NULL),
(81, 'Guinea', NULL, NULL),
(82, 'Guadeloupe', NULL, NULL),
(83, 'Gambia', NULL, NULL),
(84, 'Guinea-Bissau', NULL, NULL),
(85, 'Equatorial Guinea', NULL, NULL),
(86, 'Greece', NULL, NULL),
(87, 'Grenada', NULL, NULL),
(88, 'Greenland', NULL, NULL),
(89, 'Guatemala', NULL, NULL),
(90, 'French Guiana', NULL, NULL),
(91, 'Guam', NULL, NULL),
(92, 'Guyana', NULL, NULL),
(93, 'Hong Kong', NULL, NULL),
(94, 'Heard Island and McDonald Islands', NULL, NULL),
(95, 'Honduras', NULL, NULL),
(96, 'Croatia', NULL, NULL),
(97, 'Haiti', NULL, NULL),
(98, 'Hungary', NULL, NULL),
(99, 'Indonesia', NULL, NULL),
(100, 'India', NULL, NULL),
(101, 'British Indian Ocean Territory', NULL, NULL),
(102, 'Ireland', NULL, NULL),
(103, 'Iran', NULL, NULL),
(104, 'Iraq', NULL, NULL),
(105, 'Iceland', NULL, NULL),
(106, 'Israel', NULL, NULL),
(107, 'Italy', NULL, NULL),
(108, 'Jamaica', NULL, NULL),
(109, 'Jordan', NULL, NULL),
(110, 'Japan', NULL, NULL),
(111, 'Kazakstan', NULL, NULL),
(112, 'Kenya', NULL, NULL),
(113, 'Kyrgyzstan', NULL, NULL),
(114, 'Cambodia', NULL, NULL),
(115, 'Kiribati', NULL, NULL),
(116, 'Saint Kitts and Nevis', NULL, NULL),
(117, 'South Korea', NULL, NULL),
(118, 'Kuwait', NULL, NULL),
(119, 'Laos', NULL, NULL),
(120, 'Lebanon', NULL, NULL),
(121, 'Liberia', NULL, NULL),
(122, 'Libyan Arab Jamahiriya', NULL, NULL),
(123, 'Saint Lucia', NULL, NULL),
(124, 'Liechtenstein', NULL, NULL),
(125, 'Sri Lanka', NULL, NULL),
(126, 'Lesotho', NULL, NULL),
(127, 'Lithuania', NULL, NULL),
(128, 'Luxembourg', NULL, NULL),
(129, 'Latvia', NULL, NULL),
(130, 'Macao', NULL, NULL),
(131, 'Morocco', NULL, NULL),
(132, 'Monaco', NULL, NULL),
(133, 'Moldova', NULL, NULL),
(134, 'Madagascar', NULL, NULL),
(135, 'Maldives', NULL, NULL),
(136, 'Mexico', NULL, NULL),
(137, 'Marshall Islands', NULL, NULL),
(138, 'Macedonia', NULL, NULL),
(139, 'Mali', NULL, NULL),
(140, 'Malta', NULL, NULL),
(141, 'Myanmar', NULL, NULL),
(142, 'Mongolia', NULL, NULL),
(143, 'Northern Mariana Islands', NULL, NULL),
(144, 'Mozambique', NULL, NULL),
(145, 'Mauritania', NULL, NULL),
(146, 'Montserrat', NULL, NULL),
(147, 'Martinique', NULL, NULL),
(148, 'Mauritius', NULL, NULL),
(149, 'Malawi', NULL, NULL),
(150, 'Malaysia', NULL, NULL),
(151, 'Mayotte', NULL, NULL),
(152, 'Namibia', NULL, NULL),
(153, 'New Caledonia', NULL, NULL),
(154, 'Niger', NULL, NULL),
(155, 'Norfolk Island', NULL, NULL),
(156, 'Nigeria', NULL, NULL),
(157, 'Nicaragua', NULL, NULL),
(158, 'Niue', NULL, NULL),
(159, 'Netherlands', NULL, NULL),
(160, 'Norway', NULL, NULL),
(161, 'Nepal', NULL, NULL),
(162, 'Nauru', NULL, NULL),
(163, 'New Zealand', NULL, NULL),
(164, 'Oman', NULL, NULL),
(165, 'Pakistan', NULL, NULL),
(166, 'Panama', NULL, NULL),
(167, 'Pitcairn', NULL, NULL),
(168, 'Peru', NULL, NULL),
(169, 'Philippines', NULL, NULL),
(170, 'Palau', NULL, NULL),
(171, 'Papua New Guinea', NULL, NULL),
(172, 'Poland', NULL, NULL),
(173, 'Puerto Rico', NULL, NULL),
(174, 'North Korea', NULL, NULL),
(175, 'Portugal', NULL, NULL),
(176, 'Paraguay', NULL, NULL),
(177, 'Palestine', NULL, NULL),
(178, 'French Polynesia', NULL, NULL),
(179, 'Qatar', NULL, NULL),
(180, 'Réunion', NULL, NULL),
(181, 'Romania', NULL, NULL),
(182, 'Russian Federation', NULL, NULL),
(183, 'Rwanda', NULL, NULL),
(184, 'Saudi Arabia', NULL, NULL),
(185, 'Sudan', NULL, NULL),
(186, 'Senegal', NULL, NULL),
(187, 'Singapore', NULL, NULL),
(188, 'South Georgia and the South Sandwich Islands', NULL, NULL),
(189, 'Saint Helena', NULL, NULL),
(190, 'Svalbard and Jan Mayen', NULL, NULL),
(191, 'Solomon Islands', NULL, NULL),
(192, 'Sierra Leone', NULL, NULL),
(193, 'El Salvador', NULL, NULL),
(194, 'San Marino', NULL, NULL),
(195, 'Somalia', NULL, NULL),
(196, 'Saint Pierre and Miquelon', NULL, NULL),
(197, 'Sao Tome and Principe', NULL, NULL),
(198, 'Suriname', NULL, NULL),
(199, 'Slovakia', NULL, NULL),
(200, 'Slovenia', NULL, NULL),
(201, 'Sweden', NULL, NULL),
(202, 'Swaziland', NULL, NULL),
(203, 'Seychelles', NULL, NULL),
(204, 'Syria', NULL, NULL),
(205, 'Turks and Caicos Islands', NULL, NULL),
(206, 'Chad', NULL, NULL),
(207, 'Togo', NULL, NULL),
(208, 'Thailand', NULL, NULL),
(209, 'Tajikistan', NULL, NULL),
(210, 'Tokelau', NULL, NULL),
(211, 'Turkmenistan', NULL, NULL),
(212, 'East Timor', NULL, NULL),
(213, 'Tonga', NULL, NULL),
(214, 'Trinidad and Tobago', NULL, NULL),
(215, 'Tunisia', NULL, NULL),
(216, 'Turkey', NULL, NULL),
(217, 'Tuvalu', NULL, NULL),
(218, 'Taiwan', NULL, NULL),
(219, 'Tanzania', NULL, NULL),
(220, 'Uganda', NULL, NULL),
(221, 'Ukraine', NULL, NULL),
(222, 'United States Minor Outlying Islands', NULL, NULL),
(223, 'Uruguay', NULL, NULL),
(224, 'United States', NULL, NULL),
(225, 'Uzbekistan', NULL, NULL),
(226, 'Holy See (Vatican City State)', NULL, NULL),
(227, 'Saint Vincent and the Grenadines', NULL, NULL),
(228, 'Venezuela', NULL, NULL),
(229, 'Virgin Islands, British', NULL, NULL),
(230, 'Virgin Islands, U.S.', NULL, NULL),
(231, 'Vietnam', NULL, NULL),
(232, 'Vanuatu', NULL, NULL),
(233, 'Wallis and Futuna', NULL, NULL),
(234, 'Samoa', NULL, NULL),
(235, 'Yemen', NULL, NULL),
(236, 'Yugoslavia', NULL, NULL),
(237, 'South Africa', NULL, NULL),
(238, 'Zambia', NULL, NULL),
(239, 'Zimbabwe', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
