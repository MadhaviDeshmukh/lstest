-- ================================================================
-- Database structure
-- ================================================================

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('job','resume') NOT NULL,
  `user_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `price` float(7,2) DEFAULT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `business` text NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `gplus` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` smallint(6) DEFAULT NULL,
  `abbr` varchar(6) DEFAULT NULL,
  `name` varchar(210) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `home` tinyint(1) DEFAULT NULL,
  `vat` decimal(7,0) DEFAULT NULL,
  `sorting` smallint(6) DEFAULT NULL,
  KEY `idx` (`abbr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `abbr`, `name`, `active`, `home`, `vat`, `sorting`) VALUES
(1, 'AF', 'Afghanistan', 1, NULL, '0', 0),
(2, 'AL', 'Albania', 1, NULL, '0', 0),
(3, 'DZ', 'Algeria', 1, NULL, '0', 0),
(4, 'AS', 'American Samoa', 1, NULL, '0', 0),
(5, 'AD', 'Andorra', 1, NULL, '0', 0),
(6, 'AO', 'Angola', 1, NULL, '0', 0),
(7, 'AI', 'Anguilla', 1, NULL, '0', 0),
(8, 'AQ', 'Antarctica', 1, NULL, '0', 0),
(9, 'AG', 'Antigua and Barbuda', 1, NULL, '0', 0),
(10, 'AR', 'Argentina', 1, NULL, '0', 0),
(11, 'AM', 'Armenia', 1, NULL, '0', 0),
(12, 'AW', 'Aruba', 1, NULL, '0', 0),
(13, 'AU', 'Australia', 1, NULL, '0', 0),
(14, 'AT', 'Austria', 1, NULL, '0', 0),
(15, 'AZ', 'Azerbaijan', 1, NULL, '0', 0),
(16, 'BS', 'Bahamas', 1, NULL, '0', 0),
(17, 'BH', 'Bahrain', 1, NULL, '0', 0),
(18, 'BD', 'Bangladesh', 1, NULL, '0', 0),
(19, 'BB', 'Barbados', 1, NULL, '0', 0),
(20, 'BY', 'Belarus', 1, NULL, '0', 0),
(21, 'BE', 'Belgium', 1, NULL, '0', 0),
(22, 'BZ', 'Belize', 1, NULL, '0', 0),
(23, 'BJ', 'Benin', 1, NULL, '0', 0),
(24, 'BM', 'Bermuda', 1, NULL, '0', 0),
(25, 'BT', 'Bhutan', 1, NULL, '0', 0),
(26, 'BO', 'Bolivia', 1, NULL, '0', 0),
(27, 'BA', 'Bosnia and Herzegowina', 1, NULL, '0', 0),
(28, 'BW', 'Botswana', 1, NULL, '0', 0),
(29, 'BV', 'Bouvet Island', 1, NULL, '0', 0),
(30, 'BR', 'Brazil', 1, NULL, '0', 0),
(31, 'IO', 'British Indian Ocean Territory', 1, NULL, '0', 0),
(32, 'VG', 'British Virgin Islands', 1, NULL, '0', 0),
(33, 'BN', 'Brunei Darussalam', 1, NULL, '0', 0),
(34, 'BG', 'Bulgaria', 1, NULL, '0', 0),
(35, 'BF', 'Burkina Faso', 1, NULL, '0', 0),
(36, 'BI', 'Burundi', 1, NULL, '0', 0),
(37, 'KH', 'Cambodia', 1, NULL, '0', 0),
(38, 'CM', 'Cameroon', 1, NULL, '0', 0),
(39, 'CA', 'Canada', 1, NULL, '13', 1000),
(40, 'CV', 'Cape Verde', 1, NULL, '0', 0),
(41, 'KY', 'Cayman Islands', 1, NULL, '0', 0),
(42, 'CF', 'Central African Republic', 1, NULL, '0', 0),
(43, 'TD', 'Chad', 1, NULL, '0', 0),
(44, 'CL', 'Chile', 1, NULL, '0', 0),
(45, 'CN', 'China', 1, NULL, '0', 0),
(46, 'CX', 'Christmas Island', 1, NULL, '0', 0),
(47, 'CC', 'Cocos (Keeling) Islands', 1, NULL, '0', 0),
(48, 'CO', 'Colombia', 1, NULL, '0', 0),
(49, 'KM', 'Comoros', 1, NULL, '0', 0),
(50, 'CG', 'Congo', 1, NULL, '0', 0),
(51, 'CK', 'Cook Islands', 1, NULL, '0', 0),
(52, 'CR', 'Costa Rica', 1, NULL, '0', 0),
(53, 'CI', 'Cote D&#39;ivoire', 1, NULL, '0', 0),
(54, 'HR', 'Croatia', 1, NULL, '0', 0),
(55, 'CU', 'Cuba', 1, NULL, '0', 0),
(56, 'CY', 'Cyprus', 1, NULL, '0', 0),
(57, 'CZ', 'Czech Republic', 1, NULL, '0', 0),
(58, 'DK', 'Denmark', 1, NULL, '0', 0),
(59, 'DJ', 'Djibouti', 1, NULL, '0', 0),
(60, 'DM', 'Dominica', 1, NULL, '0', 0),
(61, 'DO', 'Dominican Republic', 1, NULL, '0', 0),
(62, 'TP', 'East Timor', 1, NULL, '0', 0),
(63, 'EC', 'Ecuador', 1, NULL, '0', 0),
(64, 'EG', 'Egypt', 1, NULL, '0', 0),
(65, 'SV', 'El Salvador', 1, NULL, '0', 0),
(66, 'GQ', 'Equatorial Guinea', 1, NULL, '0', 0),
(67, 'ER', 'Eritrea', 1, NULL, '0', 0),
(68, 'EE', 'Estonia', 1, NULL, '0', 0),
(69, 'ET', 'Ethiopia', 1, NULL, '0', 0),
(70, 'FK', 'Falkland Islands (Malvinas)', 1, NULL, '0', 0),
(71, 'FO', 'Faroe Islands', 1, NULL, '0', 0),
(72, 'FJ', 'Fiji', 1, NULL, '0', 0),
(73, 'FI', 'Finland', 1, NULL, '0', 0),
(74, 'FR', 'France', 1, NULL, '0', 0),
(75, 'GF', 'French Guiana', 1, NULL, '0', 0),
(76, 'PF', 'French Polynesia', 1, NULL, '0', 0),
(77, 'TF', 'French Southern Territories', 1, NULL, '0', 0),
(78, 'GA', 'Gabon', 1, NULL, '0', 0),
(79, 'GM', 'Gambia', 1, NULL, '0', 0),
(80, 'GE', 'Georgia', 1, NULL, '0', 0),
(81, 'DE', 'Germany', 1, NULL, '0', 0),
(82, 'GH', 'Ghana', 1, NULL, '0', 0),
(83, 'GI', 'Gibraltar', 1, NULL, '0', 0),
(84, 'GR', 'Greece', 1, NULL, '0', 0),
(85, 'GL', 'Greenland', 1, NULL, '0', 0),
(86, 'GD', 'Grenada', 1, NULL, '0', 0),
(87, 'GP', 'Guadeloupe', 1, NULL, '0', 0),
(88, 'GU', 'Guam', 1, NULL, '0', 0),
(89, 'GT', 'Guatemala', 1, NULL, '0', 0),
(90, 'GN', 'Guinea', 1, NULL, '0', 0),
(91, 'GW', 'Guinea-Bissau', 1, NULL, '0', 0),
(92, 'GY', 'Guyana', 1, NULL, '0', 0),
(93, 'HT', 'Haiti', 1, NULL, '0', 0),
(94, 'HM', 'Heard and McDonald Islands', 1, NULL, '0', 0),
(95, 'HN', 'Honduras', 1, NULL, '0', 0),
(96, 'HK', 'Hong Kong', 1, NULL, '0', 0),
(97, 'HU', 'Hungary', 1, NULL, '0', 0),
(98, 'IS', 'Iceland', 1, NULL, '0', 0),
(99, 'IN', 'India', 1, NULL, '0', 0),
(100, 'ID', 'Indonesia', 1, NULL, '0', 0),
(101, 'IQ', 'Iraq', 1, NULL, '0', 0),
(102, 'IE', 'Ireland', 1, NULL, '0', 0),
(103, 'IR', 'Islamic Republic of Iran', 1, NULL, '0', 0),
(104, 'IL', 'Israel', 1, NULL, '0', 0),
(105, 'IT', 'Italy', 1, NULL, '0', 0),
(106, 'JM', 'Jamaica', 1, NULL, '0', 0),
(107, 'JP', 'Japan', 1, NULL, '0', 0),
(108, 'JO', 'Jordan', 1, NULL, '0', 0),
(109, 'KZ', 'Kazakhstan', 1, NULL, '0', 0),
(110, 'KE', 'Kenya', 1, NULL, '0', 0),
(111, 'KI', 'Kiribati', 1, NULL, '0', 0),
(112, 'KP', 'Korea, Dem. Peoples Rep of', 1, NULL, '0', 0),
(113, 'KR', 'Korea, Republic of', 1, NULL, '0', 0),
(114, 'KW', 'Kuwait', 1, NULL, '0', 0),
(115, 'KG', 'Kyrgyzstan', 1, NULL, '0', 0),
(116, 'LA', 'Laos', 1, NULL, '0', 0),
(117, 'LV', 'Latvia', 1, NULL, '0', 0),
(118, 'LB', 'Lebanon', 1, NULL, '0', 0),
(119, 'LS', 'Lesotho', 1, NULL, '0', 0),
(120, 'LR', 'Liberia', 1, NULL, '0', 0),
(121, 'LY', 'Libyan Arab Jamahiriya', 1, NULL, '0', 0),
(122, 'LI', 'Liechtenstein', 1, NULL, '0', 0),
(123, 'LT', 'Lithuania', 1, NULL, '0', 0),
(124, 'LU', 'Luxembourg', 1, NULL, '0', 0),
(125, 'MO', 'Macau', 1, NULL, '0', 0),
(126, 'MK', 'Macedonia', 1, NULL, '0', 0),
(127, 'MG', 'Madagascar', 1, NULL, '0', 0),
(128, 'MW', 'Malawi', 1, NULL, '0', 0),
(129, 'MY', 'Malaysia', 1, NULL, '0', 0),
(130, 'MV', 'Maldives', 1, NULL, '0', 0),
(131, 'ML', 'Mali', 1, NULL, '0', 0),
(132, 'MT', 'Malta', 1, NULL, '0', 0),
(133, 'MH', 'Marshall Islands', 1, NULL, '0', 0),
(134, 'MQ', 'Martinique', 1, NULL, '0', 0),
(135, 'MR', 'Mauritania', 1, NULL, '0', 0),
(136, 'MU', 'Mauritius', 1, NULL, '0', 0),
(137, 'YT', 'Mayotte', 1, NULL, '0', 0),
(138, 'MX', 'Mexico', 1, NULL, '0', 0),
(139, 'FM', 'Micronesia', 1, NULL, '0', 0),
(140, 'MD', 'Moldova, Republic of', 1, NULL, '0', 0),
(141, 'MC', 'Monaco', 1, NULL, '0', 0),
(142, 'MN', 'Mongolia', 1, NULL, '0', 0),
(143, 'MS', 'Montserrat', 1, NULL, '0', 0),
(144, 'MA', 'Morocco', 1, NULL, '0', 0),
(145, 'MZ', 'Mozambique', 1, NULL, '0', 0),
(146, 'MM', 'Myanmar', 1, NULL, '0', 0),
(147, 'NA', 'Namibia', 1, NULL, '0', 0),
(148, 'NR', 'Nauru', 1, NULL, '0', 0),
(149, 'NP', 'Nepal', 1, NULL, '0', 0),
(150, 'NL', 'Netherlands', 1, NULL, '0', 0),
(151, 'AN', 'Netherlands Antilles', 1, NULL, '0', 0),
(152, 'NC', 'New Caledonia', 1, NULL, '0', 0),
(153, 'NZ', 'New Zealand', 1, NULL, '0', 0),
(154, 'NI', 'Nicaragua', 1, NULL, '0', 0),
(155, 'NE', 'Niger', 1, NULL, '0', 0),
(156, 'NG', 'Nigeria', 1, NULL, '0', 0),
(157, 'NU', 'Niue', 1, NULL, '0', 0),
(158, 'NF', 'Norfolk Island', 1, NULL, '0', 0),
(159, 'MP', 'Northern Mariana Islands', 1, NULL, '0', 0),
(160, 'NO', 'Norway', 1, NULL, '0', 0),
(161, 'OM', 'Oman', 1, NULL, '0', 0),
(162, 'PK', 'Pakistan', 1, NULL, '0', 0),
(163, 'PW', 'Palau', 1, NULL, '0', 0),
(164, 'PA', 'Panama', 1, NULL, '0', 0),
(165, 'PG', 'Papua New Guinea', 1, NULL, '0', 0),
(166, 'PY', 'Paraguay', 1, NULL, '0', 0),
(167, 'PE', 'Peru', 1, NULL, '0', 0),
(168, 'PH', 'Philippines', 1, NULL, '0', 0),
(169, 'PN', 'Pitcairn', 1, NULL, '0', 0),
(170, 'PL', 'Poland', 1, NULL, '0', 0),
(171, 'PT', 'Portugal', 1, NULL, '0', 0),
(172, 'PR', 'Puerto Rico', 1, NULL, '0', 0),
(173, 'QA', 'Qatar', 1, NULL, '0', 0),
(174, 'RE', 'Reunion', 1, NULL, '0', 0),
(175, 'RO', 'Romania', 1, NULL, '0', 0),
(176, 'RU', 'Russian Federation', 1, NULL, '0', 0),
(177, 'RW', 'Rwanda', 1, NULL, '0', 0),
(178, 'LC', 'Saint Lucia', 1, NULL, '0', 0),
(179, 'WS', 'Samoa', 1, NULL, '0', 0),
(180, 'SM', 'San Marino', 1, NULL, '0', 0),
(181, 'ST', 'Sao Tome and Principe', 1, NULL, '0', 0),
(182, 'SA', 'Saudi Arabia', 1, NULL, '0', 0),
(183, 'SN', 'Senegal', 1, NULL, '0', 0),
(184, 'RS', 'Serbia', 1, NULL, '0', 0),
(185, 'SC', 'Seychelles', 1, NULL, '0', 0),
(186, 'SL', 'Sierra Leone', 1, NULL, '0', 0),
(187, 'SG', 'Singapore', 1, NULL, '0', 0),
(188, 'SK', 'Slovakia', 1, NULL, '0', 0),
(189, 'SI', 'Slovenia', 1, NULL, '0', 0),
(190, 'SB', 'Solomon Islands', 1, NULL, '0', 0),
(191, 'SO', 'Somalia', 1, NULL, '0', 0),
(192, 'ZA', 'South Africa', 1, NULL, '0', 0),
(193, 'ES', 'Spain', 1, NULL, '0', 0),
(194, 'LK', 'Sri Lanka', 1, NULL, '0', 0),
(195, 'SH', 'St. Helena', 1, NULL, '0', 0),
(196, 'KN', 'St. Kitts and Nevis', 1, NULL, '0', 0),
(197, 'PM', 'St. Pierre and Miquelon', 1, NULL, '0', 0),
(198, 'VC', 'St. Vincent and the Grenadines', 1, NULL, '0', 0),
(199, 'SD', 'Sudan', 1, NULL, '0', 0),
(200, 'SR', 'Suriname', 1, NULL, '0', 0),
(201, 'SJ', 'Svalbard and Jan Mayen Islands', 1, NULL, '0', 0),
(202, 'SZ', 'Swaziland', 1, NULL, '0', 0),
(203, 'SE', 'Sweden', 1, NULL, '0', 0),
(204, 'CH', 'Switzerland', 1, NULL, '0', 0),
(205, 'SY', 'Syrian Arab Republic', 1, NULL, '0', 0),
(206, 'TW', 'Taiwan', 1, NULL, '0', 0),
(207, 'TJ', 'Tajikistan', 1, NULL, '0', 0),
(208, 'TZ', 'Tanzania, United Republic of', 1, NULL, '0', 0),
(209, 'TH', 'Thailand', 1, NULL, '0', 0),
(210, 'TG', 'Togo', 1, NULL, '0', 0),
(211, 'TK', 'Tokelau', 1, NULL, '0', 0),
(212, 'TO', 'Tonga', 1, NULL, '0', 0),
(213, 'TT', 'Trinidad and Tobago', 1, NULL, '0', 0),
(214, 'TN', 'Tunisia', 1, NULL, '0', 0),
(215, 'TR', 'Turkey', 1, NULL, '0', 0),
(216, 'TM', 'Turkmenistan', 1, NULL, '0', 0),
(217, 'TC', 'Turks and Caicos Islands', 1, NULL, '0', 0),
(218, 'TV', 'Tuvalu', 1, NULL, '0', 0),
(219, 'UG', 'Uganda', 1, NULL, '0', 0),
(220, 'UA', 'Ukraine', 1, NULL, '0', 0),
(221, 'AE', 'United Arab Emirates', 1, NULL, '0', 0),
(222, 'GB', 'United Kingdom (GB)', 1, NULL, '23', 999),
(224, 'US', 'United States', 1, 1, '8', 998),
(225, 'VI', 'United States Virgin Islands', 1, NULL, '0', 0),
(226, 'UY', 'Uruguay', 1, NULL, '0', 0),
(227, 'UZ', 'Uzbekistan', 1, NULL, '0', 0),
(228, 'VU', 'Vanuatu', 1, NULL, '0', 0),
(229, 'VA', 'Vatican City State', 1, NULL, '0', 0),
(230, 'VE', 'Venezuela', 1, NULL, '0', 0),
(231, 'VN', 'Vietnam', 1, NULL, '0', 0),
(232, 'WF', 'Wallis And Futuna Islands', 1, NULL, '0', 0),
(233, 'EH', 'Western Sahara', 1, NULL, '0', 0),
(234, 'YE', 'Yemen', 1, NULL, '0', 0),
(235, 'ZR', 'Zaire', 1, NULL, '0', 0),
(236, 'ZM', 'Zambia', 1, NULL, '0', 0),
(237, 'ZW', 'Zimbabwe', 1, NULL, '0', 0);

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `help` text,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES
(1, 'Registration Email', 'Please verify your email', 'This template is used to send Registration Verification Email, when Configuration-&gt;Registration Verification is set to YES', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nWelcome [NAME]\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nHello, &lt;br&gt;\n&lt;br&gt;\nYou&#039;re now a member of [SITE_NAME]. \n&lt;br&gt;\nHere are your login details. Please keep them in a safe place:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;&quot; border=&quot;0&quot; width=&quot;100%&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot; width=&quot;130&quot;&gt;\n&lt;b&gt;Username:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[USERNAME]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Password:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[PASSWORD]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nThe administrator of this site has requested all new accounts\nto be activated by the users who created them thus your account\nis currently inactive. \n&lt;br&gt;\nTo activate your account,\nplease visit the link below and enter the following:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table border=&quot;0&quot; cellpadding=&quot;4&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot; width=&quot;130&quot;&gt;\n&lt;b&gt;Token:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[TOKEN]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Email:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[EMAIL]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;a href=&quot;[LINK]&quot;&gt;&lt;b&gt;Click here to activate your account&lt;/b&gt;&lt;/a&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;Thanks,&lt;br&gt;\n[SITE_NAME] Team\n&lt;br&gt;\n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(2, 'Forgot Password Email', 'Password Reset', 'This template is used for retrieving lost user password', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color:#ccc; font-size:16px;padding:5px;border-bottom:2px solid #fff;&quot;&gt;\nNew password reset from [SITE_NAME]!\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nHello, &lt;b&gt;[USERNAME]&lt;/b&gt;&lt;br&gt;\n&lt;br&gt;\nIt seems that you or someone requested a new password for you.\n&lt;br&gt;\nWe have generated a new password, as requested:\n&lt;br&gt;\n&lt;br&gt;\nYour new password: \n&lt;b&gt;[PASSWORD]&lt;/b&gt;&lt;br&gt;\n&lt;br&gt;\nTo use the new password you need to activate it. To do this click the link provided below and login with your new password.\n&lt;br&gt;\n&lt;a href=&quot;[LINK]&quot;&gt;[LINK]&lt;/a&gt;&lt;br&gt;\n&lt;br&gt;\nYou can change your password after you sign in.\n&lt;hr&gt;\nPassword requested from IP: [IP]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;Thanks,&lt;br&gt;\n[SITE_NAME] Team\n&lt;br&gt;\n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(3, 'Welcome Mail From Admin', 'You have been registered', 'This template is used to send welcome email, when user is added by administrator', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nWelcome [NAME]\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nHello, &lt;br&gt;\n&lt;br&gt;\nYou&#039;re now a member of [SITE_NAME]. \n&lt;br&gt;\nHere are your login details. Please keep them in a safe place:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;&quot; border=&quot;0&quot; width=&quot;100%&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot; width=&quot;130&quot;&gt;\n&lt;b&gt;Username:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[USERNAME]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Password:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[PASSWORD]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;Thanks,&lt;br&gt;\n[SITE_NAME] Team\n&lt;br&gt;\n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(4, 'Default Newsletter', 'Newsletter', 'This is a default newsletter template', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nHello [NAME]!\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nYou are receiving this email as a part of your newsletter subscription.\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n Here goes your newsletter content...\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;background-color:#f1f1f1;border-top-width:2px; border-top-color:#fff; border-top-style:solid&quot;&gt;\n&lt;i&gt;Thanks,&lt;br&gt;\n[SITE_NAME] Team\n&lt;br&gt;\n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;To stop receiving future newsletters please login into your account         and uncheck newsletter subscription box.&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(5, 'Transaction Completed', 'Payment Completed', 'This template is used to notify administrator on successful payment transaction', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nHello, Admin\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left&quot;&gt;\nYou have received new payment transaction:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;&quot; border=&quot;0&quot; width=&quot;100%&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot; width=&quot;130&quot;&gt;\n&lt;b&gt;Username:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[USERNAME]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Status:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[STATUS]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Amount:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[TOTAL]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Processor:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[PP]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;IP:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[IP]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;&lt;b&gt;You can view this transaction from your admin panel.&lt;/b&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(6, 'Transaction Suspicious', 'Suspicious Transaction', 'This template is used to notify administrator on failed/suspicious payment transaction', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nHello, Admin\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left&quot;&gt;\nThe following transaction has been disabled due to suspicious activity:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;&quot; border=&quot;0&quot; width=&quot;100%&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot; width=&quot;130&quot;&gt;\n&lt;b&gt;Username:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[USERNAME]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Status:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[STATUS]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Amount:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[TOTAL]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Processor:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[PP]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;IP:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[IP]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;Please verify this transaction is correct.  It appears that someone tried to fraudulently obtain products from your site.&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(7, 'Welcome Email', 'Welcome', 'This template is used to welcome newly registered user when Configuration-&gt;Registration Verification and Configuration-&gt;Auto Registration are both set to YES', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nWelcome [NAME]\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nHello, &lt;br&gt;\n&lt;br&gt;\nYou&#039;re now a member of [SITE_NAME]. \n&lt;br&gt;\nHere are your login details. Please keep them in a safe place:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;&quot; border=&quot;0&quot; width=&quot;100%&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot; width=&quot;130&quot;&gt;\n&lt;b&gt;Username:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[USERNAME]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Password:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[PASSWORD]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;Thanks,&lt;br&gt;\n[SITE_NAME] Team\n&lt;br&gt;\n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(8, 'Transaction Completed User', 'Transaction Completed', 'This template is used to notify user on successful purchase.', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nHello [USERNAME]\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nYou have purchased the following:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n[ITEMS]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nYou can now download your item(s) from your control panel.\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;Thanks,&lt;br&gt;\n[SITE_NAME] Team\n&lt;br&gt;\n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(9, 'Notify User Transaction', 'Your product is ready for download', 'This template is used to notify user when manual transaction has been processed.', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nHello [USERNAME]\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nYour product is ready for download:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;&quot; border=&quot;0&quot; width=&quot;100%&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot; width=&quot;130&quot;&gt;\n&lt;b&gt;Product:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[ITEMNAME]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Price:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[PRICE]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Quantity:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[QTY]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nYou can now download your item(s) from your control panel.\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;Thanks,&lt;br&gt;\n[SITENAME] Team\n&lt;br&gt;\n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(10, 'Contact Request', 'Contact Inquiry', 'This template is used to send default Contact Request Form.', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color:#ccc; font-size:16px;padding:5px;border-bottom:2px solid #fff;&quot;&gt;\n Hello, Admin\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left&quot;&gt;\n You have received new contact request:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;&quot; border=&quot;0&quot; width=&quot;100%&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid;&quot; width=&quot;150&quot;&gt;\n&lt;b&gt;From:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid;&quot;&gt;\n [SENDER] - [NAME]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid;&quot; width=&quot;150&quot;&gt;\n&lt;b&gt;Subject:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid;&quot;&gt;\n [MAILSUBJECT]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid;&quot; width=&quot;150&quot;&gt;\n&lt;b&gt;IP:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid;&quot;&gt;\n [IP]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid;&quot; width=&quot;150&quot;&gt;\n&lt;b&gt;Message:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid;&quot;&gt;\n[MESSAGE]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(12, 'Single Email', 'Single User Email', 'This template is used to email single user', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nHello [NAME]\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nYour message goes here...\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;Thanks,&lt;br&gt;\n[SITE_NAME] Team\n&lt;br&gt;\n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(13, 'Notify Admin', 'New User Registration', 'This template is used to notify admin of new registration when Configuration-&gt;Registration Notification is set to YES', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nHello Admin\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nYou have a new user registration:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;&quot; border=&quot;0&quot; width=&quot;100%&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot; width=&quot;130&quot;&gt;\n&lt;b&gt;Username:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[SENDER] - [NAME]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Name:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[WWW]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;IP:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[IP]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\nYou can login into your admin panel to view details.\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(14, 'Registration Pending', 'Registration Verification Pending', 'This template is used to send Registration Verification Email, when Configuration-&gt;Auto Registration is set to NO', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n  &lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nWelcome [NAME]\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nHello, &lt;br&gt;\n&lt;br&gt;\nYou&#039;re now a member of [SITE_NAME]. \n&lt;br&gt;\nHere are your login details. Please keep them in a safe place:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;&quot; border=&quot;0&quot; width=&quot;100%&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot; width=&quot;130&quot;&gt;\n&lt;b&gt;Username:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[USERNAME]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Password:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[PASSWORD]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nThe administrator of this site has requested all new accounts\nto be activated by the users who created them thus your account\nis currently pending verification process.\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\n&lt;i&gt;Thanks,&lt;br&gt;\n[SITE_NAME] Team\n&lt;br&gt;\n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(11, 'New Comment', 'New Comment Added', 'This template is used to notify admin when new comment has been added.', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color: rgb(204, 204, 204); font-size:16px;padding:5px;border-bottom-width:2px; border-bottom-color:#fff; border-bottom-style:solid&quot;&gt;\nHello Admin\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nYou have a new comment post:\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;&quot; border=&quot;0&quot; width=&quot;100%&quot; cellpadding=&quot;5&quot; cellspacing=&quot;2&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot; width=&quot;130&quot;&gt;\n&lt;b&gt;From:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[SENDER] - [NAME]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;www:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[WWW]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;Product Url:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n&lt;a href=&quot;[PAGEURL]&quot;&gt;[PAGEURL]&lt;/a&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;right&quot;&gt;\n&lt;b&gt;IP:&lt;/b&gt;\n&lt;/td&gt;\n&lt;td style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot;&gt;\n[IP]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td colspan=&quot;2&quot; style=&quot;border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed&quot; align=&quot;left&quot;&gt;\n[MESSAGE]\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left; background-color:#fff;border-top-width:2px; border-top-color:#ccc; border-top-style:solid&quot; valign=&quot;top&quot;&gt;\nYou can login into your admin panel to view details\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;'),
(15, 'Account Activation', 'Your account have been activated', 'This template is used to notify user when manual account activation is completed', '&lt;div style=&quot;color:#000;margin-top:20px;margin-left:auto;margin-right:auto;max-width:800px;background-color:#F4F4F4&quot;&gt;\n&lt;table style=&quot;font-family: Helvetica Neue,Helvetica,Arial, sans-serif; font-size:13px;background: #F4F4F4; width: 100%; border: 4px solid #bbbbbb;&quot; cellpadding=&quot;10&quot; cellspacing=&quot;5&quot;&gt;\n&lt;tbody&gt;\n&lt;tr&gt;\n&lt;th style=&quot;background-color:#ccc; font-size:16px;padding:5px;border-bottom:2px solid #fff;&quot;&gt;\nHello, [NAME]! &lt;br&gt;\n&lt;/th&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot; valign=&quot;top&quot;&gt;\nHello,&lt;br&gt;\n&lt;br&gt;\n  You&#039;re now a member of [SITE_NAME].\n&lt;br&gt;\n&lt;br&gt;\n  Your account is now fully activated\n  , and you may login at \n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;\n&lt;hr&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;tr&gt;\n&lt;td style=&quot;text-align: left;&quot;&gt;\n&lt;i&gt;Thanks,&lt;br&gt;\n  [SITE_NAME] Team\n&lt;br&gt;\n&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/i&gt;\n&lt;/td&gt;\n&lt;/tr&gt;\n&lt;/tbody&gt;\n&lt;/table&gt;\n&lt;/div&gt;');

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `user_id` varchar(50) NOT NULL DEFAULT '0',
  `tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `totaltax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `coupon` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `originalprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `totalprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `created` datetime NOT NULL DEFAULT '1970-01-01 00:00:01'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `question` varchar(150) DEFAULT NULL,
  `answer` text,
  `position` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `displayname` varchar(200) NOT NULL,
  `dir` varchar(200) NOT NULL,
  `demo` tinyint(1) NOT NULL DEFAULT '1',
  `extra_txt` varchar(200) NOT NULL,
  `extra_txt2` varchar(200) NOT NULL,
  `extra_txt3` varchar(200) DEFAULT NULL,
  `extra` varchar(200) NOT NULL,
  `extra2` varchar(200) NOT NULL,
  `extra3` varchar(200) DEFAULT NULL,
  `info` text,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `name`, `displayname`, `dir`, `demo`, `extra_txt`, `extra_txt2`, `extra_txt3`, `extra`, `extra2`, `extra3`, `info`, `active`) VALUES
(1, 'paypal', 'PayPal', 'paypal', 0, 'Paypal Email Address', 'Currency Code', 'Not in Use', 'facilitator@gmail.com', 'CAD', '', '&lt;p&gt;&lt;a href=&quot;http://www.paypal.com/&quot; title=&quot;PayPal&quot; rel=&quot;nofollow&quot; target=&quot;_blank&quot;&gt;Click here to setup an account with Paypal&lt;/a&gt; &lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Gateway Name&lt;/strong&gt; - Enter the name of the payment provider here.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Active&lt;/strong&gt; - Select Yes to make this payment provider active. &lt;br/&gt;\r\nIf this box is not checked, the payment provider will not show up in the payment provider list during checkout.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Set Live Mode&lt;/strong&gt; - If you would like to test the payment provider settings, please select No. &lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Paypal email address&lt;/strong&gt; - Enter your PayPal Business email address here. &lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Currency Code&lt;/strong&gt; - Enter your currency code here. Valid choices are: &lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt; USD (U.S. Dollar)&lt;/li&gt;\r\n&lt;li&gt; EUR (Euro) &lt;/li&gt;\r\n&lt;li&gt; GBP (Pound Sterling) &lt;/li&gt;\r\n&lt;li&gt; CAD (Canadian Dollar) &lt;/li&gt;\r\n&lt;li&gt; JPY (Yen). &lt;/li&gt;\r\n&lt;li&gt; If omitted, all monetary fields will use default system setting Currency Code. &lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;&lt;strong&gt;Not in Use&lt;/strong&gt; - This field it&#039;s not in use. Leave it empty. &lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;IPN Url&lt;/strong&gt; - If using recurring payment method, you need to set up and activate the IPN Url in your account: &lt;/p&gt;', 1),
(2, 'skrill', 'Skrill', 'skrill', 0, 'Skrill Email Address', 'Currency Code', 'Secret Passphrase', 'gewa@rogers.com', 'EUR', 'mypassphrase', '&lt;p&gt;&lt;a href=&quot;http://www.moneybookers.com/&quot; title=&quot;http://www.moneybookers.net/&quot; rel=&quot;nofollow&quot;&gt;Click here to setup an account with MoneyBookers&lt;/a&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Gateway Name&lt;/strong&gt; - Enter the name of the payment provider here.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Active&lt;/strong&gt; - Select Yes to make this payment provider active. &lt;br/&gt;\r\nIf this box is not checked, the payment provider will not show up in the payment provider list during checkout.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Set Live Mode&lt;/strong&gt; - MoneyBookers does not have demo mode. You need to open testing acounts. One seller and one buyer. &lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;MoneyBookers email address&lt;/strong&gt; - Enter your MoneyBookers email address here. &lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Secret Passphrase&lt;/strong&gt; - This field must be set at Moneybookers.com.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;IPN Url&lt;/strong&gt; - If using recurring payment method, you need to set up and activate the IPN Url in your account: &lt;/p&gt;', 1),
(3, 'payza', 'Payza', 'payza', 0, 'Payza Email Address', 'Currency Code', 'IPN Security Code', 'seller_1_alex.kuzmanovic@gmail.com', 'USD', 'd9vL9oYVOGpmVM2i', '&lt;p&gt;&lt;a href=&quot;http://www.payza.com/&quot; title=&quot;http://www.payza.com/&quot; rel=&quot;nofollow&quot;&gt;Click here to setup an account with Payza&lt;/a&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Gateway Name&lt;/strong&gt; - Enter the name of the payment provider here.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Active&lt;/strong&gt; - Select Yes to make this payment provider active. &lt;br/&gt;\r\n  If this box is not checked, the payment provider will not show up in the payment provider list during checkout.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Set Live Mode&lt;/strong&gt; - If you would like to test the payment provider settings, please select No. &lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;AlertPay email address&lt;/strong&gt; - Enter your Payza email address here. &lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;IPN Security Code&lt;/strong&gt; - This code needs to be generated in your Payza control panel.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;IPN Url&lt;/strong&gt; - This has to be set in the Payza control panel. You will also need to check the &quot;IPN Status&quot; to enabled.&lt;/p&gt;', 1),
(4, 'stripe', 'Stripe', 'stripe', 1, 'Secret Key', 'Currency Code', 'Publishable Key', 'sk_test_6sDE6weBXgEuHbrjZKyG5MlQ', 'CAD', 'pk_test_vRosykAcmL59P2r7H9hziwrg', '&lt;p&gt;&lt;a href=&quot;https://stripe.com/ca&quot; title=&quot;https://stripe.com/ca&quot; rel=&quot;nofollow&quot;&gt;Click here to setup an account with Stripe&lt;/a&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Gateway Name&lt;/strong&gt; - Enter the name of the payment provider here.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Active&lt;/strong&gt; - Select Yes to make this payment provider active. &lt;br&gt;\r\n  If this box is not checked, the payment provider will not show up in the payment provider list during checkout.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Set Live Mode&lt;/strong&gt; - To test Stripe, use your test keys instead of live ones.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;API Keys&lt;/strong&gt; - To obtain your API Keys:&lt;/p&gt;\r\n&lt;ul&gt;\r\n  &lt;li&gt; 1. Log into the Dashboard at &lt;a href=&quot;https://stripe.com/ca&quot; target=&quot;_blank&quot;&gt;https://stripe.com/ca&lt;/a&gt;&lt;/li&gt;\r\n  &lt;li&gt; 2. Select Account Settings under Your Account in the main menu on the left &lt;/li&gt;\r\n  &lt;li&gt; 3. Click API Keys&lt;/li&gt;\r\n  &lt;li&gt; 4. Your keys will be displayed &lt;/li&gt;\r\n\r\n&lt;p&gt;You should use test keys first to verify, that everything is working smoothly, before going live.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;IPN Url&lt;/strong&gt; - This option it&#039;s not being used.&lt;/p&gt;\r\n&lt;/ul&gt;', 1),
(5, 'anet', 'Authorize Net', 'anet', 1, 'API Login Id', 'MD5 Hash Key', 'Transaction Key', '9KDgMm2mw46V', '', '5wek3X3DX5e39YAQ', '&lt;p&gt;&lt;a href=&quot;http://www.authorize.net/&quot; title=&quot;http://www.authorize.net//&quot; rel=&quot;nofollow&quot;&gt;Click here to setup an account with Authorize.Net&lt;/a&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Gateway Name&lt;/strong&gt; - Enter the name of the payment provider here.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Active&lt;/strong&gt; - Select Yes to make this payment provider active. &lt;br/&gt;\r\n  If this box is not checked, the payment provider will not show up in the payment provider list during checkout.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Set Live Mode&lt;/strong&gt; - If you would like to test the payment provider settings, please select No. &lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Login ID&lt;/strong&gt; - To obtain your API Login ID:&lt;/p&gt;\r\n&lt;ol type=&quot;1&quot;&gt;\r\n  &lt;li&gt; Log into the Merchant Interface at &lt;a href=&quot;https://secure.authorize.net&quot; target=&quot;_blank&quot;&gt;https://secure.authorize.net&lt;/a&gt;&lt;/li&gt;\r\n  &lt;li&gt; Select Settings under Account in the main menu on the left &lt;/li&gt;\r\n  &lt;li&gt; Click API Login ID and Transaction Key in the Security Settings section &lt;/li&gt;\r\n  &lt;li&gt; If you have not already obtained an API Login ID and Transaction Key for your account,&lt;br/&gt;\r\nyou will need to enter the secret answer to the secret question you configured at account activation. &lt;/li&gt;\r\n  &lt;li&gt; Click Submit. &lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;p&gt;&lt;strong&gt;MD5 Hash&lt;/strong&gt; - To obtain your MD5 Hash:&lt;/p&gt;\r\n&lt;ol type=&quot;1&quot;&gt;\r\n  &lt;li&gt; Log into the Merchant Interface at &lt;a href=&quot;https://secure.authorize.net&quot; target=&quot;_blank&quot;&gt;https://secure.authorize.net&lt;/a&gt;&lt;/li&gt;\r\n  &lt;li&gt; Select Settings under Account in the main menu on the left &lt;/li&gt;\r\n  &lt;li&gt; Click MD5 Hash in the Security Settings section &lt;/li&gt;\r\n  &lt;li&gt;Enter a secret word, phrase, or value and remember this.&lt;/li&gt;\r\n  &lt;li&gt; Click Submit. &lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;strong&gt;Transaction Key&lt;/strong&gt; - To obtain a Transaction Key:\r\n&lt;ol type=&quot;1&quot;&gt;\r\n  &lt;li&gt; Log on to the Merchant Interface at &lt;a href=&quot;https://secure.authorize.net&quot; target=&quot;_blank&quot;&gt;https://secure.authorize.net&lt;/a&gt;&lt;/li&gt;\r\n  &lt;li&gt; Select Settings under Account in the main menu on the left &lt;/li&gt;\r\n  &lt;li&gt; Click API Login ID and Transaction Key in the Security Settings section &lt;/li&gt;\r\n  &lt;li&gt; Enter the secret answer to the secret question you configured when you activated your user account &lt;/li&gt;\r\n  &lt;li&gt; Click Submit &lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;p&gt;The Transaction Key for your account is displayed on a confirmation page.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;IPN Url&lt;/strong&gt; - This option it\\&#039;s not being used.&lt;/p&gt;', 1);

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invid` int(11) NOT NULL DEFAULT '0',
  `items` varchar(250) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `totaltax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `coupon` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `originalprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `totalprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `currency` varchar(6) DEFAULT NULL,
  `created` datetime DEFAULT '1970-01-01 00:00:01',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` int(2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `responsibility` text NOT NULL,
  `experience` text NOT NULL,
  `education` text NOT NULL,
  `benefits` text NOT NULL,
  `additional_info` text NOT NULL,
  `apply_url` varchar(255) NOT NULL,
  `filled` int(2) NOT NULL DEFAULT '0',
  `publish_date` datetime NOT NULL,
  `expire_date` datetime NOT NULL,
  `featured` enum('notfeatured','featured') NOT NULL DEFAULT 'notfeatured',
  `status` enum('pending','approved','declined') NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `message` text NOT NULL,
  `note` text NOT NULL,
  `resume` varchar(255) NOT NULL,
  `expected` varchar(20) NOT NULL,
  `rating` enum('no','one','two','three','four','five') NOT NULL,
  `status` enum('new','interviewed','offer extended','hired','archived') NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `parent_id` int(6) NOT NULL DEFAULT '0',
  `slug` varchar(200) NOT NULL,
  `position` tinyint(2) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `job_locations`
--

CREATE TABLE `job_locations` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `parent_id` int(6) NOT NULL DEFAULT '0',
  `slug` varchar(200) NOT NULL,
  `position` tinyint(2) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `job_skills`
--

CREATE TABLE `job_skills` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `position` tinyint(2) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `color` varchar(11) NOT NULL,
  `position` tinyint(2) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `page_id` tinyint(2) NOT NULL DEFAULT '0',
  `parent_id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content_type` varchar(20) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `target` enum('_self','_blank') NOT NULL DEFAULT '_blank',
  `position` tinyint(2) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `content_id` (`active`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `menus_footer`
--

CREATE TABLE `menus_footer` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `page_id` tinyint(2) NOT NULL DEFAULT '0',
  `parent_id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content_type` varchar(20) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `target` enum('_self','_blank') NOT NULL DEFAULT '_blank',
  `position` tinyint(2) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `content_id` (`active`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) NOT NULL DEFAULT '0',
  `uid2` int(11) NOT NULL DEFAULT '0',
  `user1` int(11) NOT NULL DEFAULT '0',
  `user2` int(11) NOT NULL DEFAULT '0',
  `msgsubject` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `attachment` varchar(60) DEFAULT NULL,
  `user1read` varchar(3) DEFAULT NULL,
  `user2read` varchar(3) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `author` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created` date NOT NULL DEFAULT '1970-01-01',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  `features` text NOT NULL,
  `price` float NOT NULL,
  `limit` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `billing` enum('onetime','weekly','monthly','yearly') NOT NULL,
  `featured` int(1) NOT NULL,
  `position` tinyint(3) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `template` varchar(255) NOT NULL,
  `body` longtext,
  `breadcrumb` int(1) DEFAULT '1',
  `created` datetime NOT NULL,
  `home_page` tinyint(1) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `page_templates`
--

CREATE TABLE `page_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `template` varchar(50) NOT NULL,
  `directory` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_templates`
--

INSERT INTO `page_templates` (`id`, `name`, `slug`, `filename`, `template`, `directory`, `created`) VALUES
(1, 'FAQ Page', 'faq', 'faq.php', 'faq.tpl.php', 'template', '2017-02-13 00:00:00'),
(2, 'Contact Page', 'contact', 'contact.php', 'contact.tpl.php', 'template', '2017-02-13 00:00:00'),
(3, 'Package List Page', 'package', 'packages.php', 'packages.tpl.php', 'template', '2017-02-13 00:00:00'),
(4, 'Browse Categories', 'browse-categories', 'browse-categories.php', 'browse-categories.tpl.php', 'template', '2017-02-14 17:15:04'),
(5, 'Browse Jobs', 'browse-jobs', 'browse-jobs-template.php', 'browse-jobs-template.tpl.php', 'template', '1970-01-01 00:00:01'),
(7, 'Browse Resumes', 'browse-resumes', 'browse-resumes-template.php', 'browse-resumes-template.tpl.php', 'template', '1970-01-01 00:00:01');

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `uid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `objective` text NOT NULL,
  `hourly_rate` varchar(10) NOT NULL,
  `education` text NOT NULL,
  `skills` varchar(255) NOT NULL,
  `experience` text NOT NULL,
  `portfolio` text NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `website` varchar(255) NOT NULL,
  `references` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `gplus` varchar(255) NOT NULL,
  `featured` enum('notfeatured','featured') NOT NULL DEFAULT 'notfeatured',
  `banned` int(1) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `site_name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `site_url` varchar(150) NOT NULL,
  `site_dir` varchar(60) DEFAULT NULL,
  `site_email` varchar(50) NOT NULL,
  `seo` tinyint(1) NOT NULL DEFAULT '0',
  `perpage` tinyint(4) NOT NULL DEFAULT '10',
  `backup` varchar(25) NOT NULL,
  `thumb_w` varchar(3) NOT NULL,
  `thumb_h` varchar(3) NOT NULL,
  `img_w` varchar(5) NOT NULL,
  `img_h` varchar(5) NOT NULL,
  `show_home` tinyint(1) NOT NULL DEFAULT '1',
  `show_slider` tinyint(1) NOT NULL DEFAULT '1',
  `file_dir` varchar(200) DEFAULT NULL,
  `short_date` varchar(50) NOT NULL,
  `long_date` varchar(50) NOT NULL,
  `time_format` varchar(20) DEFAULT NULL,
  `dtz` varchar(120) DEFAULT NULL,
  `locale` varchar(120) DEFAULT NULL,
  `latest_jobs` tinyint(1) NOT NULL DEFAULT '6',
  `featured_jobs` tinyint(1) NOT NULL DEFAULT '5',
  `featured_resumes` tinyint(1) NOT NULL DEFAULT '5',
  `featured` tinyint(2) NOT NULL DEFAULT '10',
  `popular` tinyint(2) NOT NULL DEFAULT '6',
  `hlayout` tinyint(4) NOT NULL DEFAULT '0',
  `homelist` tinyint(1) NOT NULL DEFAULT '4',
  `free_allowed` tinyint(1) NOT NULL DEFAULT '0',
  `logo` varchar(100) DEFAULT NULL,
  `theme` varchar(30) DEFAULT NULL,
  `tax` tinyint(1) NOT NULL DEFAULT '0',
  `psize` varchar(10) DEFAULT NULL,
  `inv_note` text,
  `inv_info` text,
  `lang` varchar(10) DEFAULT NULL,
  `currency` varchar(8) DEFAULT NULL,
  `cur_symbol` varchar(6) DEFAULT NULL,
  `reg_verify` tinyint(1) NOT NULL DEFAULT '1',
  `auto_verify` tinyint(1) NOT NULL DEFAULT '1',
  `reg_allowed` tinyint(1) NOT NULL DEFAULT '1',
  `user_limit` int(6) NOT NULL DEFAULT '0',
  `notify_admin` tinyint(1) NOT NULL DEFAULT '0',
  `offline` tinyint(1) NOT NULL DEFAULT '0',
  `offline_msg` text,
  `offline_d` date DEFAULT NULL,
  `offline_t` time DEFAULT NULL,
  `facebook_url` varchar(100) NOT NULL,
  `twitter_url` varchar(100) NOT NULL,
  `google_plus_url` varchar(100) NOT NULL,
  `linkedin_url` varchar(100) NOT NULL,
  `copyright` varchar(200) NOT NULL,
  `metakeys` text,
  `metadesc` text,
  `analytics` text,
  `mailer` enum('PHP','SMTP','SMAIL') DEFAULT NULL,
  `smtp_host` varchar(150) DEFAULT NULL,
  `smtp_user` varchar(50) DEFAULT NULL,
  `smtp_pass` varchar(50) DEFAULT NULL,
  `smtp_port` smallint(3) DEFAULT NULL,
  `is_ssl` tinyint(1) NOT NULL DEFAULT '0',
  `sendmail` varchar(100) DEFAULT NULL,
  `version` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`site_name`, `company`, `site_url`, `site_dir`, `site_email`, `seo`, `perpage`, `backup`, `thumb_w`, `thumb_h`, `img_w`, `img_h`, `show_home`, `show_slider`, `file_dir`, `short_date`, `long_date`, `time_format`, `dtz`, `locale`, `latest_jobs`, `featured_jobs`, `featured_resumes`, `featured`, `popular`, `hlayout`, `homelist`, `free_allowed`, `logo`, `theme`, `tax`, `psize`, `inv_note`, `inv_info`, `lang`, `currency`, `cur_symbol`, `reg_verify`, `auto_verify`, `reg_allowed`, `user_limit`, `notify_admin`, `offline`, `offline_msg`, `offline_d`, `offline_t`, `facebook_url`, `twitter_url`, `google_plus_url`, `linkedin_url`, `copyright`, `metakeys`, `metadesc`, `analytics`, `mailer`, `smtp_host`, `smtp_user`, `smtp_pass`, `smtp_port`, `is_ssl`, `sendmail`, `version`) VALUES
('Last Step', 'Last Step', 'http://laststep.co', '', 'email@laststep.co', 0, 10, '09-Apr-2018_12-37-10.sql', '300', '350', '0', '0', 1, 1, 'jb', '%m-%d-%Y', '%B %d, %Y %I:%M %p', '%I:%M %p', 'Asia/Dhaka', 'en_us_utf8,English (US)', 7, 5, 5, 0, 0, 1, 0, 0, 'job-board-logo3.png', 'default', 1, 'LETTER', '&lt;p&gt;&lt;/p&gt;&lt;p&gt;TERMS &amp;amp; CONDITIONS&lt;br&gt;1. Interest may be levied on overdue accounts. &lt;br&gt;2. Goods sold are not returnable or refundable\r\n&lt;/p&gt;', '&lt;p&gt;&lt;b&gt;ABC Company Pty Ltd&lt;/b&gt;&lt;br&gt;123 Burke Street, Toronto ON, CANADA&lt;br&gt;Tel : (416) 1234-5678, Fax : (416) 1234-5679, Email : sales@abc-company.com&lt;br&gt;Web Site : www.abc-company.com&lt;/p&gt;', 'en', 'CAD', '$', 1, 1, 1, 0, 1, 0, '&lt;p&gt;&lt;/p&gt;', '1970-01-01', '00:00:01', 'https://www.facebook.com', '#', '#', '#', 'Copyright &amp;copy; 2018 Job Board', 'metakeys, separated,by coma', 'Your website description goes here', '', 'PHP', 'mail.hostname.com', 'yourusername', 'yourpass', 127, 0, '', '1.00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(60) DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `body` text,
  `alignment` varchar(10) NOT NULL,
  `button_text` varchar(20) NOT NULL,
  `url` varchar(150) DEFAULT NULL,
  `page_id` smallint(6) NOT NULL DEFAULT '0',
  `urltype` enum('int','ext','nourl') DEFAULT 'nourl',
  `created` datetime NOT NULL DEFAULT '1970-01-01 00:00:01',
  `sorting` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `slider_config`
--

CREATE TABLE `slider_config` (
  `showArrows` tinyint(1) NOT NULL DEFAULT '1',
  `showCaptions` tinyint(1) NOT NULL DEFAULT '1',
  `showDots` tinyint(1) NOT NULL DEFAULT '1',
  `showFilmstrip` tinyint(1) NOT NULL DEFAULT '0',
  `showPause` tinyint(1) NOT NULL DEFAULT '1',
  `showTimer` tinyint(1) NOT NULL DEFAULT '1',
  `simultaneousCaptions` tinyint(1) NOT NULL DEFAULT '0',
  `slideImageScaleMode` varchar(20) NOT NULL DEFAULT 'fill',
  `slideReverse` tinyint(1) NOT NULL DEFAULT '0',
  `slideShuffle` tinyint(1) NOT NULL DEFAULT '0',
  `slideTransition` varchar(20) NOT NULL DEFAULT 'slide',
  `slideTransitionDelay` smallint(6) NOT NULL DEFAULT '5000',
  `slideTransitionDirection` varchar(10) NOT NULL DEFAULT 'left',
  `slideTransitionEasing` varchar(20) NOT NULL DEFAULT 'swing',
  `slideTransitionSpeed` smallint(6) NOT NULL DEFAULT '1000',
  `sliderAutoPlay` tinyint(1) NOT NULL DEFAULT '1',
  `sliderHeight` smallint(6) NOT NULL DEFAULT '500',
  `sliderHeightAdaptable` tinyint(1) NOT NULL DEFAULT '1',
  `waitForLoad` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_config`
--

INSERT INTO `slider_config` (`showArrows`, `showCaptions`, `showDots`, `showFilmstrip`, `showPause`, `showTimer`, `simultaneousCaptions`, `slideImageScaleMode`, `slideReverse`, `slideShuffle`, `slideTransition`, `slideTransitionDelay`, `slideTransitionDirection`, `slideTransitionEasing`, `slideTransitionSpeed`, `sliderAutoPlay`, `sliderHeight`, `sliderHeightAdaptable`, `waitForLoad`) VALUES
(1, 1, 1, 0, 1, 1, 0, 'fill', 0, 0, 'slide', 8000, 'left', 'swing', 1000, 1, 500, 1, 1);

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `limit` int(11) NOT NULL,
  `usage` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `company` varchar(150) NOT NULL,
  `content` text,
  `position` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(50) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `uid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `downloads` int(11) UNSIGNED DEFAULT '0',
  `file_date` int(11) UNSIGNED DEFAULT NULL,
  `ip` text,
  `created` datetime NOT NULL DEFAULT '1970-01-01 00:00:01',
  `payer_email` varchar(75) DEFAULT NULL,
  `payer_status` varchar(50) DEFAULT NULL,
  `item_qty` int(11) NOT NULL DEFAULT '1',
  `price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `mc_fee` decimal(9,2) NOT NULL DEFAULT '0.00',
  `coupon` decimal(9,2) NOT NULL DEFAULT '0.00',
  `tax` decimal(9,2) NOT NULL DEFAULT '0.00',
  `currency` char(3) DEFAULT NULL,
  `pp` varchar(40) DEFAULT NULL,
  `memo` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `cookie_id` varchar(50) NOT NULL DEFAULT '0',
  `token` varchar(50) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT '1970-01-01 00:00:01',
  `avatar` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `country` varchar(4) DEFAULT NULL,
  `notes` text,
  `info` text,
  `lastlogin` datetime NOT NULL DEFAULT '1970-01-01 00:00:01',
  `lastip` varchar(16) DEFAULT NULL,
  `userlevel` tinyint(1) NOT NULL DEFAULT '1',
  `active` enum('y','n','t','b') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
