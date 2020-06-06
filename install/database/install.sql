-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 09:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acemart`
--

-- --------------------------------------------------------

--
-- Table structure for table `crypto_payments`
--

CREATE TABLE `crypto_payments` (
  `paymentID` int(11) UNSIGNED NOT NULL,
  `boxID` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `boxType` enum('paymentbox','captchabox') NOT NULL,
  `orderID` varchar(50) NOT NULL DEFAULT '',
  `userID` varchar(50) NOT NULL DEFAULT '',
  `countryID` varchar(3) NOT NULL DEFAULT '',
  `coinLabel` varchar(6) NOT NULL DEFAULT '',
  `amount` double(20,8) NOT NULL DEFAULT 0.00000000,
  `amountUSD` double(20,8) NOT NULL DEFAULT 0.00000000,
  `unrecognised` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `addr` varchar(34) NOT NULL DEFAULT '',
  `txID` char(64) NOT NULL DEFAULT '',
  `txDate` datetime DEFAULT NULL,
  `txConfirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `txCheckDate` datetime DEFAULT NULL,
  `processed` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `processedDate` datetime DEFAULT NULL,
  `recordCreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `zd_admin`
--

CREATE TABLE `zd_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_firstname` varchar(50) NOT NULL,
  `admin_lastname` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_profile_pic` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_admin`
--

INSERT INTO `zd_admin` (`admin_id`, `admin_firstname`, `admin_lastname`, `admin_username`, `admin_email`, `admin_profile_pic`, `admin_password`, `admin_created_at`) VALUES
(1, 'Zubayr', 'Ganiyu', 'seunex', 'seunexseun@gmail.com', 'caccc400c1c1b2ffa408430e85d51450.jpeg', '$2y$10$78v1RvL3vQtIO/E6f1WK9eMlIj4ktnmXcYHGINUFO/6mygPe0Q4i2', '2019-10-04 22:44:56'),
(2, 'Demo', 'User', 'demo', 'demo@demo.com', NULL, '$2y$10$UUs2U7zH1UrW1FRLB65PN.eAotNiaiZGc9E9WPs/HTehKGWuCmSeO', '2019-10-17 18:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `zd_authors`
--

CREATE TABLE `zd_authors` (
  `author_id` int(10) UNSIGNED NOT NULL,
  `author_user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_authors`
--

INSERT INTO `zd_authors` (`author_id`, `author_user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zd_bitcoin_gateway`
--

CREATE TABLE `zd_bitcoin_gateway` (
  `btc_id` int(10) UNSIGNED NOT NULL,
  `btc_status` int(11) NOT NULL,
  `btc_public_key` varchar(255) DEFAULT NULL,
  `btc_private_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_bitcoin_gateway`
--

INSERT INTO `zd_bitcoin_gateway` (`btc_id`, `btc_status`, `btc_public_key`, `btc_private_key`) VALUES
(1, 1, '44904AAtMw0ZBitcoin77BTCPUBKLRVS0Po41evQTbfrrQHqil', '44904AAtMw0ZBitcoin77BTCPRVnOv0wxPSURJLqar9cOp2KEL');

-- --------------------------------------------------------

--
-- Table structure for table `zd_bitcoin_orders`
--

CREATE TABLE `zd_bitcoin_orders` (
  `zd_btc_order_id` int(10) UNSIGNED NOT NULL,
  `zd_btc_user_id` int(10) UNSIGNED NOT NULL,
  `zd_btc_item_id` int(10) UNSIGNED NOT NULL,
  `zd_btc_order_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_bitcoin_orders`
--

INSERT INTO `zd_bitcoin_orders` (`zd_btc_order_id`, `zd_btc_user_id`, `zd_btc_item_id`, `zd_btc_order_no`) VALUES
(1, 1, 5, 'btcOrder115751754345de3450a063e5'),
(2, 1, 5, 'btcOrder115781763455e110f5959471'),
(3, 1, 5, 'btcOrder115782059025e1182ce66dfc');

-- --------------------------------------------------------

--
-- Table structure for table `zd_blogs`
--

CREATE TABLE `zd_blogs` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_author_id` int(10) UNSIGNED NOT NULL,
  `blog_cat_id` int(10) UNSIGNED NOT NULL,
  `blog_view` int(11) NOT NULL DEFAULT 0,
  `blog_status_id` tinyint(1) NOT NULL DEFAULT 0,
  `blog_title` varchar(100) NOT NULL,
  `blog_preview` varchar(255) DEFAULT NULL,
  `blog_contents` text NOT NULL,
  `blog_slug` varchar(255) NOT NULL,
  `blog_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_blogs`
--

INSERT INTO `zd_blogs` (`blog_id`, `blog_author_id`, `blog_cat_id`, `blog_view`, `blog_status_id`, `blog_title`, `blog_preview`, `blog_contents`, `blog_slug`, `blog_created_at`) VALUES
(3, 1, 1, 0, 1, 'Lorem Lorem a blog tester', 'lorem_lorem_a_blog_tester1575587560.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Netus et malesuada fames ac turpis. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Non blandit massa enim nec dui. Consectetur purus ut faucibus pulvinar elementum integer enim. Sed libero enim sed faucibus turpis in eu. Tincidunt dui ut ornare lectus. At imperdiet dui accumsan sit amet. Arcu dictum varius duis at consectetur lorem. Massa placerat duis ultricies lacus sed turpis tincidunt id aliquet. Morbi tempus iaculis urna id volutpat lacus laoreet non curabitur.</p>\r\n\r\n<p>Egestas purus viverra accumsan in nisl nisi scelerisque eu. Purus ut faucibus pulvinar elementum integer enim neque volutpat. Consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Lectus vestibulum mattis ullamcorper velit sed. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Interdum posuere lorem ipsum dolor. Nunc sed blandit libero volutpat sed cras ornare. Id eu nisl nunc mi ipsum faucibus.</p>\r\n\r\n<p>Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Integer quis auctor elit sed vulputate mi sit amet. Ac auctor augue mauris augue neque gravida in. Vel quam elementum pulvinar etiam non. Pellentesque elit eget gravida cum sociis natoque penatibus. Adipiscing diam donec adipiscing tristique risus nec feugiat in. Vitae nunc sed velit dignissim sodales ut eu sem integer. Massa ultricies mi quis hendrerit dolor magna. Praesent semper feugiat nibh sed pulvinar proin. Eu nisl nunc mi ipsum faucibus vitae aliquet. Tempus quam pellentesque nec nam aliquam sem et tortor consequat. Odio ut enim blandit volutpat maecenas volutpat. Ut porttitor leo a diam sollicitudin tempor id. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Sed risus pretium quam vulputate dignissim suspendisse. Et netus et malesuada fames ac turpis egestas maecenas. Ipsum a arcu cursus vitae congue mauris.</p>\r\n\r\n<p>Pretium quam vulputate dignissim suspendisse in est ante. Tempus quam pellentesque nec nam aliquam sem et tortor. Sed adipiscing diam donec adipiscing tristique risus nec. Neque viverra justo nec ultrices dui sapien eget mi proin. Habitant morbi tristique senectus et netus et. Dolor purus non enim praesent elementum. Sed adipiscing diam donec adipiscing. Purus in massa tempor nec feugiat nisl. Ac turpis egestas maecenas pharetra convallis posuere. Ipsum a arcu cursus vitae congue mauris rhoncus aenean. Dignissim suspendisse in est ante in nibh mauris. Nunc lobortis mattis aliquam faucibus purus. Scelerisque in dictum non consectetur a erat nam.</p>\r\n\r\n<p>Vitae elementum curabitur vitae nunc sed velit dignissim sodales. Diam in arcu cursus euismod quis viverra nibh. Eget aliquet nibh praesent tristique magna sit amet. Bibendum enim facilisis gravida neque. Volutpat odio facilisis mauris sit amet massa vitae tortor. Eu turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Sed arcu non odio euismod lacinia at quis. Auctor augue mauris augue neque. Neque volutpat ac tincidunt vitae semper quis lectus nulla at. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Eget velit aliquet sagittis id consectetur purus ut faucibus. At volutpat diam ut venenatis tellus in metus vulputate eu. Pulvinar sapien et ligula ullamcorper malesuada proin libero nunc. Est pellentesque elit ullamcorper dignissim cras tincidunt. Magna etiam tempor orci eu. Tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Vel turpis nunc eget lorem dolor sed viverra ipsum. Laoreet sit amet cursus sit amet. Volutpat consequat mauris nunc congue nisi. Et tortor at risus viverra adipiscing at.</p>', 'lorem-lorem-a-blog-tester', '2019-12-05 23:12:41'),
(4, 1, 3, 0, 1, 'What is acemart marketplace', NULL, '<p>Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.</p>', 'what-is-acemart-marketplace', '2019-12-05 23:53:31'),
(5, 1, 1, 1, 1, 'Another sample demo', NULL, '<p>Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.</p>', 'another-sample-demo', '2019-12-05 23:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `zd_blog_category`
--

CREATE TABLE `zd_blog_category` (
  `bc_id` int(10) UNSIGNED NOT NULL,
  `bc_name` varchar(100) NOT NULL,
  `bc_slug` varchar(255) NOT NULL,
  `bc_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_blog_category`
--

INSERT INTO `zd_blog_category` (`bc_id`, `bc_name`, `bc_slug`, `bc_created_at`) VALUES
(1, 'Programming', 'programming', '2019-12-04 21:08:14'),
(3, 'Designing', 'Designing', '2019-12-04 21:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `zd_blog_comment`
--

CREATE TABLE `zd_blog_comment` (
  `blog_cmt_id` int(10) UNSIGNED NOT NULL,
  `blog_cmt_code` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_blog_comment`
--

INSERT INTO `zd_blog_comment` (`blog_cmt_id`, `blog_cmt_code`) VALUES
(1, '<script>\r\n                                (function() { // DON\'T EDIT BELOW THIS LINE\r\n                                var d = document, s = d.createElement(\'script\');\r\n                                s.src = \'https://acemart.disqus.com/embed.js\';\r\n                                s.setAttribute(\'data-timestamp\', +new Date());\r\n                                (d.head || d.body).appendChild(s);\r\n                                })();\r\n                                </script>\r\n                                <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>');

-- --------------------------------------------------------

--
-- Table structure for table `zd_child_category`
--

CREATE TABLE `zd_child_category` (
  `child_cat_id` int(10) UNSIGNED NOT NULL,
  `child_sub_cat_id` int(10) UNSIGNED NOT NULL,
  `child_cat_name` varchar(50) NOT NULL,
  `child_cat_slug` varchar(255) NOT NULL,
  `child_cat_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_child_category`
--

INSERT INTO `zd_child_category` (`child_cat_id`, `child_sub_cat_id`, `child_cat_name`, `child_cat_slug`, `child_cat_created_at`) VALUES
(3, 4, 'Shopping Cart', 'shopping-cart', '2019-10-07 03:31:54'),
(4, 4, 'Social Networks', 'social-networks', '2019-10-07 03:32:10'),
(5, 5, 'Login', 'login', '2019-10-07 23:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `zd_email_templates`
--

CREATE TABLE `zd_email_templates` (
  `em_temp_id` int(10) UNSIGNED NOT NULL,
  `mail_title` varchar(255) DEFAULT NULL,
  `mail_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zd_email_templates`
--

INSERT INTO `zd_email_templates` (`em_temp_id`, `mail_title`, `mail_body`) VALUES
(1, 'welcome_email', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html dir=\"ltr\" xmlns=\"http://www.w3.org/1999/xhtml\">\r\n\r\n<head>\r\n    <meta name=\"viewport\" content=\"width=device-width\" />\r\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n    <title>MatPress - Material Design Demo</title>\r\n</head>\r\n\r\n<body style=\"margin:0px; background: #f8f8f8; \">\r\n    <div width=\"100%\" style=\"background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;\">\r\n        <div style=\"max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px\">\r\n            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%; margin-bottom: 20px\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td style=\"vertical-align: top; padding-bottom:30px;\" align=\"center\">\r\n                            <img src=\"{sitelogo}\"/>\r\n                        </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td style=\"background:#00a958; padding:20px; color:#fff; text-align:center;\"> <h3>Welcome to {sitename}.</h3> </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            <div style=\"padding: 40px; background: #fff;\">\r\n                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\">\r\n                    <tbody>\r\n                        <tr>\r\n                            <td>\r\n                                <p>Contratulations <b>{firstname} {lastname} </b></p>\r\n                                <p>Your Account is now fully created with us and you can now shop freely on our website</p>\r\n                                \r\n                                <b>- Thanks ({sitename} team)</b> </td>\r\n                        </tr>\r\n                    </tbody>\r\n                </table>\r\n            </div>\r\n            <div style=\"text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px\">\r\n                <p> Powered by {sitename}\r\n            </div>\r\n        </div>\r\n    </div>\r\n</body>\r\n\r\n</html>'),
(2, 'acticate_email', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html dir=\"ltr\" xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n    <meta name=\"viewport\" content=\"width=device-width\" />\r\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n</head>\r\n\r\n<body style=\"margin:0px; background: #f8f8f8; \">\r\n    <div width=\"100%\" style=\"background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;\">\r\n        <div style=\"max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px\">\r\n            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%; margin-bottom: 20px\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td style=\"vertical-align: top; padding-bottom:30px;\" align=\"center\"><a href=\"{main_url}\" target=\"_blank\">\r\n                        <img src=\"{sitelogo}\" alt=\"logo\"></a> </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            <div style=\"padding: 40px; background: #fff;\">\r\n                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\">\r\n                    <tbody>\r\n                        <tr>\r\n                            <td style=\"border-bottom:1px solid #f6f6f6;\">\r\n                                <h1 style=\"font-size:14px; font-family:arial; margin:0px; font-weight:bold;\">Welcome {firstname} {lastname}</h1>\r\n                                <p style=\"margin-top:0px; color:#bbbbbb;\">Please verify your account</p>\r\n                            </td>\r\n                        </tr>\r\n                        <tr>\r\n                            <td style=\"padding:10px 0 30px 0;\">\r\n                                <p>You need to activate your account please click <a href=\"{activate_link}\"><b>Verify Account</b></a></p>\r\n                                <br>\r\n                                <center><small>or</small></center></p>\r\n																<p>If the link does not click copy and paset in the web address <br>{activate_link}</p>\r\n                                <b>- Thanks ({sitename} team)</b> </td>\r\n                        </tr>\r\n                        \r\n                    </tbody>\r\n                </table>\r\n            </div>\r\n            <div style=\"text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px\">\r\n                <p> Powered by {sitename}\r\n            </div>\r\n        </div>\r\n    </div>\r\n</html>'),
(3, 'user_transactional', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">\r\n<head>\r\n<meta name=\"viewport\" content=\"width=device-width\" />\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n\r\n\r\n<style type=\"text/css\">\r\nimg {\r\nmax-width: 100%;\r\n}\r\nbody {\r\n-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;\r\n}\r\nbody {\r\nbackground-color: #f6f6f6;\r\n}\r\n@media only screen and (max-width: 640px) {\r\n  body {\r\n    padding: 0 !important;\r\n  }\r\n  h1 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h2 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h3 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h4 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h1 {\r\n    font-size: 22px !important;\r\n  }\r\n  h2 {\r\n    font-size: 18px !important;\r\n  }\r\n  h3 {\r\n    font-size: 16px !important;\r\n  }\r\n  .container {\r\n    padding: 0 !important; width: 100% !important;\r\n  }\r\n  .content {\r\n    padding: 0 !important;\r\n  }\r\n  .content-wrap {\r\n    padding: 10px !important;\r\n  }\r\n  .invoice {\r\n    width: 100% !important;\r\n  }\r\n}\r\n</style>\r\n</head>\r\n\r\n<body itemscope itemtype=\"http://schema.org/EmailMessage\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\">\r\n\r\n<table class=\"body-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n		<td class=\"container\" width=\"600\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;\" valign=\"top\">\r\n			<div class=\"content\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;\">\r\n				<table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;\" bgcolor=\"#fff\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"alert alert-warning\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 16px; vertical-align: top; color: #fff; font-weight: 500; text-align: center; border-radius: 3px 3px 0 0; background-color: #36404e; margin: 0; padding: 20px;\" align=\"center\" bgcolor=\"#2f353f\" valign=\"top\">\r\n							New Transaction.\r\n						</td>\r\n					</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;\" valign=\"top\">\r\n							<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										Thank You For Your <strong style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">Purchase</strong>.\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										You have successfully purchase the item: <b>{item_name}</b> by the author <b>{author_user}</b>. The item should now be available for you to download.\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										<a href=\"{main_url}my-download\" class=\"btn-primary\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #f5707a; margin: 0; border-color: #f5707a; border-style: solid; border-width: 10px 20px;\">Download Your Item Here</a>\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										Thanks for buying.\r\n									</td>\r\n								</tr></table></td>\r\n					</tr></table><div class=\"footer\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;\">\r\n					<table width=\"100%\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"aligncenter content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;\" align=\"center\" valign=\"top\"><a href=\"#\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;\">{sitename}</a></td>\r\n						</tr></table></div></div>\r\n		</td>\r\n		<td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n	</tr></table></body>\r\n\r\n</html>\r\n'),
(4, 'item_rating', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">\r\n<head>\r\n<meta name=\"viewport\" content=\"width=device-width\" />\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n<title>Your Title Goes Here</title>\r\n\r\n\r\n<style type=\"text/css\">\r\nimg {\r\nmax-width: 100%;\r\n}\r\nbody {\r\n-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;\r\n}\r\nbody {\r\nbackground-color: #f6f6f6;\r\n}\r\n@media only screen and (max-width: 640px) {\r\n  body {\r\n    padding: 0 !important;\r\n  }\r\n  h1 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h2 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h3 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h4 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h1 {\r\n    font-size: 22px !important;\r\n  }\r\n  h2 {\r\n    font-size: 18px !important;\r\n  }\r\n  h3 {\r\n    font-size: 16px !important;\r\n  }\r\n  .container {\r\n    padding: 0 !important; width: 100% !important;\r\n  }\r\n  .content {\r\n    padding: 0 !important;\r\n  }\r\n  .content-wrap {\r\n    padding: 10px !important;\r\n  }\r\n  .invoice {\r\n    width: 100% !important;\r\n  }\r\n}\r\n</style>\r\n</head>\r\n\r\n<body style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\">\r\n\r\n<table class=\"body-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n		<td class=\"container\" width=\"600\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;\" valign=\"top\">\r\n			<div class=\"content\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;\">\r\n				<table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" itemprop=\"action\" itemscope itemtype=\"http://schema.org/ConfirmAction\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;\" bgcolor=\"#fff\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;\" valign=\"top\">\r\n							<meta itemprop=\"name\" content=\"Confirm Email\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\" /><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n                {firstname} {lastname} ({username}) submit a review on your item.\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										YOur item <b>{item_name}</b> receive <b>{rate} Star</b> rating\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" itemprop=\"handler\" itemscope itemtype=\"http://schema.org/HttpActionHandler\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										<a href=\"{item_url}\" class=\"btn-primary\" itemprop=\"url\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #f5707a; margin: 0; border-color: #f5707a; border-style: solid; border-width: 10px 20px;\">View Item</a>\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										— {sitename}\r\n									</td>\r\n								</tr></table></td>\r\n					</tr></table><div class=\"footer\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;\">\r\n					<table width=\"100%\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"aligncenter content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;\" align=\"center\" valign=\"top\"> <a href=\"#\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;\"></a></td>\r\n						</tr></table></div></div>\r\n		</td>\r\n		<td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n	</tr></table></body>\r\n</html>\r\n'),
(5, 'item_comment', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">\r\n<head>\r\n<meta name=\"viewport\" content=\"width=device-width\" />\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n<title>Your Title Goes Here</title>\r\n\r\n\r\n<style type=\"text/css\">\r\nimg {\r\nmax-width: 100%;\r\n}\r\nbody {\r\n-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;\r\n}\r\nbody {\r\nbackground-color: #f6f6f6;\r\n}\r\n@media only screen and (max-width: 640px) {\r\n  body {\r\n    padding: 0 !important;\r\n  }\r\n  h1 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h2 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h3 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h4 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h1 {\r\n    font-size: 22px !important;\r\n  }\r\n  h2 {\r\n    font-size: 18px !important;\r\n  }\r\n  h3 {\r\n    font-size: 16px !important;\r\n  }\r\n  .container {\r\n    padding: 0 !important; width: 100% !important;\r\n  }\r\n  .content {\r\n    padding: 0 !important;\r\n  }\r\n  .content-wrap {\r\n    padding: 10px !important;\r\n  }\r\n  .invoice {\r\n    width: 100% !important;\r\n  }\r\n}\r\n</style>\r\n</head>\r\n\r\n<body style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\">\r\n\r\n<table class=\"body-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n		<td class=\"container\" width=\"600\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;\" valign=\"top\">\r\n			<div class=\"content\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;\">\r\n				<table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" itemprop=\"action\" itemscope itemtype=\"http://schema.org/ConfirmAction\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;\" bgcolor=\"#fff\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;\" valign=\"top\">\r\n							<meta itemprop=\"name\" content=\"Confirm Email\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\" /><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n                {firstname} {lastname} ({username}) comment on your item.\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										A new comment on your <b>{item_name}</b>\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" itemprop=\"handler\" itemscope itemtype=\"http://schema.org/HttpActionHandler\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										<a href=\"{item_url}\" class=\"btn-primary\" itemprop=\"url\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #f5707a; margin: 0; border-color: #f5707a; border-style: solid; border-width: 10px 20px;\">View Item</a>\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										— {sitename}\r\n									</td>\r\n								</tr></table></td>\r\n					</tr></table><div class=\"footer\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;\">\r\n					<table width=\"100%\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"aligncenter content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;\" align=\"center\" valign=\"top\"> <a href=\"#\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;\"></a></td>\r\n						</tr></table></div></div>\r\n		</td>\r\n		<td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n	</tr></table></body>\r\n</html>\r\n'),
(6, 'item_approve', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">\r\n<head>\r\n<meta name=\"viewport\" content=\"width=device-width\" />\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n<title>Your Title Goes Here</title>\r\n\r\n\r\n<style type=\"text/css\">\r\nimg {\r\nmax-width: 100%;\r\n}\r\nbody {\r\n-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;\r\n}\r\nbody {\r\nbackground-color: #f6f6f6;\r\n}\r\n@media only screen and (max-width: 640px) {\r\n  body {\r\n    padding: 0 !important;\r\n  }\r\n  h1 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h2 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h3 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h4 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h1 {\r\n    font-size: 22px !important;\r\n  }\r\n  h2 {\r\n    font-size: 18px !important;\r\n  }\r\n  h3 {\r\n    font-size: 16px !important;\r\n  }\r\n  .container {\r\n    padding: 0 !important; width: 100% !important;\r\n  }\r\n  .content {\r\n    padding: 0 !important;\r\n  }\r\n  .content-wrap {\r\n    padding: 10px !important;\r\n  }\r\n  .invoice {\r\n    width: 100% !important;\r\n  }\r\n}\r\n</style>\r\n</head>\r\n\r\n<body style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\">\r\n\r\n<table class=\"body-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n		<td class=\"container\" width=\"600\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;\" valign=\"top\">\r\n			<div class=\"content\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;\">\r\n				<table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" itemprop=\"action\" itemscope itemtype=\"http://schema.org/ConfirmAction\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;\" bgcolor=\"#fff\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;\" valign=\"top\">\r\n							<meta itemprop=\"name\" content=\"Confirm Email\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\" /><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n                YOur item has been approve\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										Congratulation you item: <b>{item_name}</b> is now listed on {sitename} for sell\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" itemprop=\"handler\" itemscope itemtype=\"http://schema.org/HttpActionHandler\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										<a href=\"{item_url}\" class=\"btn-primary\" itemprop=\"url\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #f5707a; margin: 0; border-color: #f5707a; border-style: solid; border-width: 10px 20px;\">View Item</a>\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										— {sitename}\r\n									</td>\r\n								</tr></table></td>\r\n					</tr></table><div class=\"footer\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;\">\r\n					<table width=\"100%\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"aligncenter content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;\" align=\"center\" valign=\"top\"> <a href=\"#\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;\"></a></td>\r\n						</tr></table></div></div>\r\n		</td>\r\n		<td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n	</tr></table></body>\r\n</html>\r\n'),
(7, 'item-reject', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">\r\n<head>\r\n<meta name=\"viewport\" content=\"width=device-width\" />\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n<title>Your Title Goes Here</title>\r\n\r\n\r\n<style type=\"text/css\">\r\nimg {\r\nmax-width: 100%;\r\n}\r\nbody {\r\n-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;\r\n}\r\nbody {\r\nbackground-color: #f6f6f6;\r\n}\r\n@media only screen and (max-width: 640px) {\r\n  body {\r\n    padding: 0 !important;\r\n  }\r\n  h1 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h2 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h3 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h4 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h1 {\r\n    font-size: 22px !important;\r\n  }\r\n  h2 {\r\n    font-size: 18px !important;\r\n  }\r\n  h3 {\r\n    font-size: 16px !important;\r\n  }\r\n  .container {\r\n    padding: 0 !important; width: 100% !important;\r\n  }\r\n  .content {\r\n    padding: 0 !important;\r\n  }\r\n  .content-wrap {\r\n    padding: 10px !important;\r\n  }\r\n  .invoice {\r\n    width: 100% !important;\r\n  }\r\n}\r\n</style>\r\n</head>\r\n\r\n<body style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\">\r\n\r\n<table class=\"body-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n		<td class=\"container\" width=\"600\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;\" valign=\"top\">\r\n			<div class=\"content\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;\">\r\n				<table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" itemprop=\"action\" itemscope itemtype=\"http://schema.org/ConfirmAction\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;\" bgcolor=\"#fff\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;\" valign=\"top\">\r\n							<meta itemprop=\"name\" content=\"Confirm Email\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\" /><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n                YOur item has been rejected\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										Your item: <b>{item_name}</b> hasbeen rejected\r\n										<br>\r\n                      <center><b>Reason</b></center>\r\n                        {reject_reason}\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" itemprop=\"handler\" itemscope itemtype=\"http://schema.org/HttpActionHandler\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										— {sitename}\r\n									</td>\r\n								</tr></table></td>\r\n					</tr></table><div class=\"footer\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;\">\r\n					<table width=\"100%\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"aligncenter content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;\" align=\"center\" valign=\"top\"> <a href=\"#\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;\"></a></td>\r\n						</tr></table></div></div>\r\n		</td>\r\n		<td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n	</tr></table></body>\r\n</html>\r\n'),
(8, 'withdraw_approve', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">\r\n<head>\r\n<meta name=\"viewport\" content=\"width=device-width\" />\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n<title>Your Title Goes Here</title>\r\n\r\n\r\n<style type=\"text/css\">\r\nimg {\r\nmax-width: 100%;\r\n}\r\nbody {\r\n-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;\r\n}\r\nbody {\r\nbackground-color: #f6f6f6;\r\n}\r\n@media only screen and (max-width: 640px) {\r\n  body {\r\n    padding: 0 !important;\r\n  }\r\n  h1 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h2 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h3 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h4 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h1 {\r\n    font-size: 22px !important;\r\n  }\r\n  h2 {\r\n    font-size: 18px !important;\r\n  }\r\n  h3 {\r\n    font-size: 16px !important;\r\n  }\r\n  .container {\r\n    padding: 0 !important; width: 100% !important;\r\n  }\r\n  .content {\r\n    padding: 0 !important;\r\n  }\r\n  .content-wrap {\r\n    padding: 10px !important;\r\n  }\r\n  .invoice {\r\n    width: 100% !important;\r\n  }\r\n}\r\n</style>\r\n</head>\r\n\r\n<body style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\">\r\n\r\n<table class=\"body-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n		<td class=\"container\" width=\"600\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;\" valign=\"top\">\r\n			<div class=\"content\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;\">\r\n				<table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" itemprop=\"action\" itemscope itemtype=\"http://schema.org/ConfirmAction\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;\" bgcolor=\"#fff\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;\" valign=\"top\">\r\n							<meta itemprop=\"name\" content=\"Confirm Email\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\" /><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n                Your earning has been paid out\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										The total amount of {earn} has been paid out to the prefer payment method.\r\n										\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" itemprop=\"handler\" itemscope itemtype=\"http://schema.org/HttpActionHandler\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										— {sitename}\r\n									</td>\r\n								</tr></table></td>\r\n					</tr></table><div class=\"footer\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;\">\r\n					<table width=\"100%\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"aligncenter content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;\" align=\"center\" valign=\"top\"> <a href=\"#\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;\"></a></td>\r\n						</tr></table></div></div>\r\n		</td>\r\n		<td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n	</tr></table></body>\r\n</html>\r\n');
INSERT INTO `zd_email_templates` (`em_temp_id`, `mail_title`, `mail_body`) VALUES
(9, 'item_like', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">\r\n<head>\r\n<meta name=\"viewport\" content=\"width=device-width\" />\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n<title>Your Title Goes Here</title>\r\n\r\n\r\n<style type=\"text/css\">\r\nimg {\r\nmax-width: 100%;\r\n}\r\nbody {\r\n-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;\r\n}\r\nbody {\r\nbackground-color: #f6f6f6;\r\n}\r\n@media only screen and (max-width: 640px) {\r\n  body {\r\n    padding: 0 !important;\r\n  }\r\n  h1 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h2 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h3 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h4 {\r\n    font-weight: 800 !important; margin: 20px 0 5px !important;\r\n  }\r\n  h1 {\r\n    font-size: 22px !important;\r\n  }\r\n  h2 {\r\n    font-size: 18px !important;\r\n  }\r\n  h3 {\r\n    font-size: 16px !important;\r\n  }\r\n  .container {\r\n    padding: 0 !important; width: 100% !important;\r\n  }\r\n  .content {\r\n    padding: 0 !important;\r\n  }\r\n  .content-wrap {\r\n    padding: 10px !important;\r\n  }\r\n  .invoice {\r\n    width: 100% !important;\r\n  }\r\n}\r\n</style>\r\n</head>\r\n\r\n<body style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\">\r\n\r\n<table class=\"body-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n		<td class=\"container\" width=\"600\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;\" valign=\"top\">\r\n			<div class=\"content\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;\">\r\n				<table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" itemprop=\"action\" itemscope itemtype=\"http://schema.org/ConfirmAction\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;\" bgcolor=\"#fff\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-wrap\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;\" valign=\"top\">\r\n							<meta itemprop=\"name\" content=\"Confirm Email\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\" /><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n                YOur item <b>{item_name}</b> receive a new <b>Thumbs Up!</b>\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n                <center><img src=\"{user_avater}\" width=\"35px\"></center><br>      \r\n								{firstname} {lastname} ({username}) Like your item <b>{item_name}</b>.\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" itemprop=\"handler\" itemscope itemtype=\"http://schema.org/HttpActionHandler\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										<a href=\"{item_url}\" class=\"btn-primary\" itemprop=\"url\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #f5707a; margin: 0; border-color: #f5707a; border-style: solid; border-width: 10px 20px;\">View Item</a>\r\n									</td>\r\n								</tr><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">\r\n										— {sitename}\r\n									</td>\r\n								</tr></table></td>\r\n					</tr></table><div class=\"footer\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;\">\r\n					<table width=\"100%\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><tr style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"aligncenter content-block\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;\" align=\"center\" valign=\"top\"> <a href=\"#\" style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;\"></a></td>\r\n						</tr></table></div></div>\r\n		</td>\r\n		<td style=\"font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>\r\n	</tr></table></body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `zd_fb_login`
--

CREATE TABLE `zd_fb_login` (
  `fb_id` int(10) UNSIGNED NOT NULL,
  `fb_status` int(11) NOT NULL DEFAULT 0,
  `fb_app_key` varchar(255) DEFAULT NULL,
  `fb_app_secret` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_fb_login`
--

INSERT INTO `zd_fb_login` (`fb_id`, `fb_status`, `fb_app_key`, `fb_app_secret`) VALUES
(1, 0, '1214978198891879', 'db91ade2f792ccc9055acb9180ed6884');

-- --------------------------------------------------------

--
-- Table structure for table `zd_files`
--

CREATE TABLE `zd_files` (
  `file_id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `private_name` varchar(255) NOT NULL,
  `sess_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_files`
--

INSERT INTO `zd_files` (`file_id`, `file_name`, `private_name`, `sess_id`) VALUES
(1, 'image-2.png', '20f65d344543740d1cff5510d76e0842.png', '15d9d043e84870'),
(2, 'icon-2.png', '99684ad270f93a90378478348d89d780.png', '15d9d043e84870'),
(3, 'image-1.png', 'caf513983ec087c7dc39c86dd2f18e24.png', '15d9d511d64e59'),
(4, 'icon-1.png', '2713a407d4a6338e4837040cf0fd4952.png', '15d9d511d64e59'),
(5, 'codeigniter-smarty_3.zip', 'cf4aaa9dbf19665f0567d98ebf59cff9.zip', '15d9d511d64e59'),
(6, '2012_max_payne_3-1920x1080.jpg', '7baf21cf9bb6b1b624605e7510fa7393.jpg', '5da61437ecd5f'),
(7, 'just install.jpg', 'ede7388ad65884b2eb3f8fe3651f7e4e.jpg', '5da61ce03824f'),
(8, '1554706377525.png', 'e5c3bdee2d4c2d3f77d6c6fff9305d99.png', '5da61ce03824f'),
(9, 'social-share-kit-1.0.14.zip', '2f7b6aadd0023c3c7eb63331796e2797.zip', '5da61ce03824f'),
(10, 'icon-3.png', '5dc76c60da7240b90625ef6df3b3589c.png', '5da6c2932dc6e'),
(11, 'image-3.png', 'f1e40257de82632da7f5396c3ff54286.png', '5da6c2932dc6e'),
(12, 'codeigniter-smarty_3.zip', '61e84786255204c04c68b0904a151440.zip', '5da6c2932dc6e'),
(13, 'watermark.zip', '836081575fe44d360409bbe249487321.zip', '5da781df7fe13'),
(14, 'image-1.png', '1f8928680998ac142c6df89c55eec5ea.png', '15da89febba083'),
(15, 'icon-1.png', 'a6f160f1db45d3dd22e7e78609f8cae1.png', '15da89febba083'),
(16, 'watermark.zip', 'a28fa9893bb5fe5b7b4983f3cac49e33.zip', '15da89febba083'),
(17, '1521939486003.png', 'dd387008a50347f470df1d70a920e137.png', '5dd31faa28827'),
(18, 'rsz_preview-xl.jpg', '2cbc46c2cc07322b5c9e7079e50c1740.jpg', '5e260eea9e391'),
(19, 'icon.png', 'f1e428a9c5b6ff3a9257c35ae328af4d.png', '5e260eea9e391'),
(20, 'paypal-codeigniter-master.zip', '6235578d66a0aee88bda0b74b5d741cd.zip', '5e260eea9e391'),
(21, 'upload_me.zip', '28cc896230776ec2d512cc88c6c40fa6.zip', '15e57e8dfd4a77'),
(22, 'upload_me.zip', '7773c8712f03794ca7f859646e9485ef.zip', '15e57e8dfd4a77'),
(23, 'icon-2.png', '6edd5cee0b23bc701651db2337baa1aa.png', '15e57e8dfd4a77'),
(24, 'image-2.png', 'b0229d6cab17095da5fb768d2eb0f21b.png', '15e57e8dfd4a77');

-- --------------------------------------------------------

--
-- Table structure for table `zd_flash_sale`
--

CREATE TABLE `zd_flash_sale` (
  `fs_id` int(10) UNSIGNED NOT NULL,
  `fs_item_id` int(10) UNSIGNED NOT NULL,
  `fs_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_flash_sale`
--

INSERT INTO `zd_flash_sale` (`fs_id`, `fs_item_id`, `fs_price`) VALUES
(11, 2, '35'),
(12, 5, '16');

-- --------------------------------------------------------

--
-- Table structure for table `zd_flash_sale_badge`
--

CREATE TABLE `zd_flash_sale_badge` (
  `fsb_id` int(10) UNSIGNED NOT NULL,
  `fsb_user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zd_flash_sale_badge`
--

INSERT INTO `zd_flash_sale_badge` (`fsb_id`, `fsb_user_id`) VALUES
(3, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `zd_followers`
--

CREATE TABLE `zd_followers` (
  `folo_id` int(10) UNSIGNED NOT NULL,
  `folo_is_user` int(10) UNSIGNED NOT NULL,
  `folo_is_following` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_followers`
--

INSERT INTO `zd_followers` (`folo_id`, `folo_is_user`, `folo_is_following`) VALUES
(3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `zd_footer_contents`
--

CREATE TABLE `zd_footer_contents` (
  `fc_id` int(10) UNSIGNED NOT NULL,
  `fc_bottom_page` text DEFAULT NULL,
  `fc_bottom_close` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_footer_contents`
--

INSERT INTO `zd_footer_contents` (`fc_id`, `fc_bottom_page`, `fc_bottom_close`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zd_free_badge`
--

CREATE TABLE `zd_free_badge` (
  `fbg_id` int(10) UNSIGNED NOT NULL,
  `fbg_user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zd_free_badge`
--

INSERT INTO `zd_free_badge` (`fbg_id`, `fbg_user_id`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zd_free_items`
--

CREATE TABLE `zd_free_items` (
  `free_id` int(10) UNSIGNED NOT NULL,
  `free_item_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_free_items`
--

INSERT INTO `zd_free_items` (`free_id`, `free_item_id`) VALUES
(17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zd_google_login`
--

CREATE TABLE `zd_google_login` (
  `gg_id` int(10) UNSIGNED NOT NULL,
  `gg_status` int(11) NOT NULL DEFAULT 0,
  `gg_app_key` varchar(255) DEFAULT NULL,
  `gg_app_secret_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_google_login`
--

INSERT INTO `zd_google_login` (`gg_id`, `gg_status`, `gg_app_key`, `gg_app_secret_key`) VALUES
(1, 0, '933851447297-maprmv1n717n981amsq8nqqjrjg9empr.apps.googleusercontent.com', 'kvmRKW0ffYzxrnMl3LI41XIx');

-- --------------------------------------------------------

--
-- Table structure for table `zd_google_recaptcha`
--

CREATE TABLE `zd_google_recaptcha` (
  `gr_id` int(10) UNSIGNED NOT NULL,
  `gr_enable` int(10) UNSIGNED NOT NULL,
  `gr_p_key` varchar(255) DEFAULT NULL,
  `gr_s_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_google_recaptcha`
--

INSERT INTO `zd_google_recaptcha` (`gr_id`, `gr_enable`, `gr_p_key`, `gr_s_key`) VALUES
(1, 0, '6LfKSckUAAAAALPbjDWa548EUPkap713mgWxflBJ', '6LfKSckUAAAAAGR1z2WB0bWnqnrgWz_1GP-5B_BE');

-- --------------------------------------------------------

--
-- Table structure for table `zd_header_contents`
--

CREATE TABLE `zd_header_contents` (
  `hc_id` int(11) NOT NULL,
  `hc_inner_head` text DEFAULT NULL,
  `hc_after_nav_head` text DEFAULT NULL,
  `hc_after_header_head` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_header_contents`
--

INSERT INTO `zd_header_contents` (`hc_id`, `hc_inner_head`, `hc_after_nav_head`, `hc_after_header_head`) VALUES
(1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zd_items`
--

CREATE TABLE `zd_items` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_cat_id` int(10) UNSIGNED NOT NULL,
  `item_user_id` int(10) UNSIGNED NOT NULL,
  `item_status` int(11) NOT NULL,
  `item_to_free` int(11) NOT NULL,
  `item_to_flash` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_description` text NOT NULL,
  `item_version` varchar(11) DEFAULT NULL,
  `item_live_demo` varchar(255) DEFAULT NULL,
  `item_regu_price` int(11) NOT NULL,
  `item_exte_price` int(11) NOT NULL,
  `item_tags` text NOT NULL,
  `item_slug` varchar(255) NOT NULL,
  `is_review` varchar(3) NOT NULL DEFAULT 'no',
  `item_temp_delete` int(11) NOT NULL,
  `item_parma_delete` int(11) NOT NULL,
  `item_storage` int(11) DEFAULT 0,
  `item_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `item_updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_items`
--

INSERT INTO `zd_items` (`item_id`, `item_cat_id`, `item_user_id`, `item_status`, `item_to_free`, `item_to_flash`, `item_name`, `item_description`, `item_version`, `item_live_demo`, `item_regu_price`, `item_exte_price`, `item_tags`, `item_slug`, `is_review`, `item_temp_delete`, `item_parma_delete`, `item_storage`, `item_created_at`, `item_updated_at`) VALUES
(1, 3, 1, 1, 1, 1, 'New php project going on', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum suspendisse ultrices gravida dictum. Facilisi cras fermentum odio eu feugiat pretium nibh. Nam aliquam sem et tortor consequat. At augue eget arcu dictum varius. Donec ac odio tempor orci dapibus ultrices in. Sit amet aliquam id diam maecenas. Gravida arcu ac tortor dignissim convallis aenean et tortor. Mollis nunc sed id semper risus in. Eu tincidunt tortor aliquam nulla facilisi cras. Libero enim sed faucibus turpis in. Ac ut consequat semper viverra nam libero. Rutrum quisque non tellus orci ac auctor augue. Eros in cursus turpis massa. Aliquam faucibus purus in massa.</p>\r\n\r\n<p>Ut morbi tincidunt augue interdum velit euismod in pellentesque. Est sit amet facilisis magna etiam tempor. Velit ut tortor pretium viverra suspendisse potenti nullam ac tortor. Eu mi bibendum neque egestas. Facilisis magna etiam tempor orci eu lobortis elementum. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae. Purus non enim praesent elementum facilisis leo vel fringilla. Semper quis lectus nulla at volutpat diam. Condimentum vitae sapien pellentesque habitant morbi tristique. Egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices. Dui ut ornare lectus sit. Luctus venenatis lectus magna fringilla urna porttitor rhoncus. At varius vel pharetra vel turpis nunc eget lorem dolor. Volutpat maecenas volutpat blandit aliquam etiam. Gravida arcu ac tortor dignissim convallis aenean et tortor. Fusce id velit ut tortor pretium viverra suspendisse.</p>', '1.0', 'http://login.zubdev.net', 20, 30, 'sample, tags, goes, here', 'new-php-project-going-on', 'yes', 0, 0, 0, '2019-10-08 05:53:43', NULL),
(2, 4, 1, 1, 1, 1, 'Funszone Social Networking PHP Script', '<p>Lorem Lorem this is a testing version</p>', '1', 'http://sample.com', 70, 150, 'same, testing, verison', 'funszone-social-networking-php-script', 'yes', 0, 0, 0, '2019-10-09 03:19:03', '2019-10-16 13:49:01'),
(5, 4, 2, 1, 0, 1, 'PHP Forum Script', '<p>This is a sample discriptions</p>', '1', 'http://sample.com', 32, 54, 'sample, demo', 'php-forum-script', 'yes', 0, 0, 0, '2019-10-17 17:09:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zd_item_comments`
--

CREATE TABLE `zd_item_comments` (
  `cmt_id` int(11) UNSIGNED NOT NULL,
  `cmt_user_id` int(10) UNSIGNED NOT NULL,
  `cmt_item_id` int(10) UNSIGNED NOT NULL,
  `cmt_body` text NOT NULL,
  `cmt_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_item_comments`
--

INSERT INTO `zd_item_comments` (`cmt_id`, `cmt_user_id`, `cmt_item_id`, `cmt_body`, `cmt_created_at`) VALUES
(1, 1, 1, 'A very good project you guys should tried out', '2019-10-14 11:51:23'),
(2, 2, 1, 'The item is doing good', '2019-10-14 12:36:53'),
(3, 1, 5, 'A nice product', '2019-10-17 17:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `zd_item_comment_replies`
--

CREATE TABLE `zd_item_comment_replies` (
  `rp_id` int(11) UNSIGNED NOT NULL,
  `rp_cmt_id` int(10) UNSIGNED NOT NULL,
  `rp_user_id` int(10) UNSIGNED NOT NULL,
  `rp_body` text NOT NULL,
  `rp_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_item_comment_replies`
--

INSERT INTO `zd_item_comment_replies` (`rp_id`, `rp_cmt_id`, `rp_user_id`, `rp_body`, `rp_created_at`) VALUES
(1, 1, 1, 'A nice time to test reply', '2019-10-14 15:07:31'),
(2, 1, 2, 'well done ot the job', '2019-10-14 15:34:12'),
(3, 2, 1, 'Yea we rock', '2019-11-17 04:25:37'),
(4, 1, 1, 'Perfect work', '2019-11-17 04:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `zd_item_downloads`
--

CREATE TABLE `zd_item_downloads` (
  `td_id` int(10) UNSIGNED NOT NULL,
  `td_item_id` int(10) UNSIGNED NOT NULL,
  `td_user_id` int(10) UNSIGNED NOT NULL,
  `td_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_item_downloads`
--

INSERT INTO `zd_item_downloads` (`td_id`, `td_item_id`, `td_user_id`, `td_created_at`) VALUES
(1, 1, 2, '2019-12-03 11:15:15'),
(2, 2, 2, '2020-02-24 21:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `zd_item_likes`
--

CREATE TABLE `zd_item_likes` (
  `like_id` int(10) UNSIGNED NOT NULL,
  `like_item_id` int(10) UNSIGNED NOT NULL,
  `like_user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zd_item_previews`
--

CREATE TABLE `zd_item_previews` (
  `pre_id` int(10) UNSIGNED NOT NULL,
  `pre_item_id` int(10) UNSIGNED NOT NULL,
  `pre_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_item_previews`
--

INSERT INTO `zd_item_previews` (`pre_id`, `pre_item_id`, `pre_name`) VALUES
(1, 1, '20f65d344543740d1cff5510d76e0842.png'),
(2, 2, 'caf513983ec087c7dc39c86dd2f18e24.png'),
(5, 5, '1f8928680998ac142c6df89c55eec5ea.png');

-- --------------------------------------------------------

--
-- Table structure for table `zd_item_rating`
--

CREATE TABLE `zd_item_rating` (
  `rating_id` int(10) UNSIGNED NOT NULL,
  `rating_user_id` int(10) UNSIGNED NOT NULL,
  `rating_item_id` int(10) UNSIGNED NOT NULL,
  `rating_value` int(11) NOT NULL,
  `rating_comment` text DEFAULT NULL,
  `rating_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_item_rating`
--

INSERT INTO `zd_item_rating` (`rating_id`, `rating_user_id`, `rating_item_id`, `rating_value`, `rating_comment`, `rating_created_at`) VALUES
(2, 1, 5, 3, 'Okay for testing', '2019-10-17 17:14:47'),
(3, 2, 1, 3, 'Working as describe thanks', '2019-11-17 06:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `zd_item_thumnails`
--

CREATE TABLE `zd_item_thumnails` (
  `thumb_id` int(10) UNSIGNED NOT NULL,
  `thumb_item_id` int(10) UNSIGNED NOT NULL,
  `thumb_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_item_thumnails`
--

INSERT INTO `zd_item_thumnails` (`thumb_id`, `thumb_item_id`, `thumb_name`) VALUES
(1, 1, '99684ad270f93a90378478348d89d780.png'),
(2, 2, '2713a407d4a6338e4837040cf0fd4952.png'),
(5, 5, 'a6f160f1db45d3dd22e7e78609f8cae1.png');

-- --------------------------------------------------------

--
-- Table structure for table `zd_last_flash_sale`
--

CREATE TABLE `zd_last_flash_sale` (
  `lfs_id` int(10) UNSIGNED NOT NULL,
  `lfs_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_last_flash_sale`
--

INSERT INTO `zd_last_flash_sale` (`lfs_id`, `lfs_timestamp`) VALUES
(1, '2020-02-24 18:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `zd_last_free_files`
--

CREATE TABLE `zd_last_free_files` (
  `lff_id` int(11) NOT NULL,
  `lff_timestamp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_last_free_files`
--

INSERT INTO `zd_last_free_files` (`lff_id`, `lff_timestamp`) VALUES
(1, '2020-02-24 19:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `zd_main_category`
--

CREATE TABLE `zd_main_category` (
  `main_cat_id` int(11) UNSIGNED NOT NULL,
  `main_cat_name` varchar(50) NOT NULL,
  `main_cat_slug` varchar(255) NOT NULL,
  `main_cat_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_main_category`
--

INSERT INTO `zd_main_category` (`main_cat_id`, `main_cat_name`, `main_cat_slug`, `main_cat_created_at`) VALUES
(2, 'Wordpress', 'wordpress', '2019-10-06 16:49:01'),
(3, 'Script & codes', 'script-codes', '2019-10-07 03:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `zd_main_files`
--

CREATE TABLE `zd_main_files` (
  `mf_id` int(10) UNSIGNED NOT NULL,
  `mf_item_id` int(10) UNSIGNED NOT NULL,
  `mf_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_main_files`
--

INSERT INTO `zd_main_files` (`mf_id`, `mf_item_id`, `mf_file`) VALUES
(1, 1, '18e66141c3f2599e1f99a842bde51b0b.zip'),
(2, 2, '836081575fe44d360409bbe249487321.zip'),
(5, 5, 'a28fa9893bb5fe5b7b4983f3cac49e33.zip');

-- --------------------------------------------------------

--
-- Table structure for table `zd_messages`
--

CREATE TABLE `zd_messages` (
  `msg_id` int(10) UNSIGNED NOT NULL,
  `msg_from_id` int(10) UNSIGNED NOT NULL,
  `msg_to_id` int(10) UNSIGNED NOT NULL,
  `msg_read` int(11) NOT NULL,
  `msg_body` text NOT NULL,
  `msg_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_messages`
--

INSERT INTO `zd_messages` (`msg_id`, `msg_from_id`, `msg_to_id`, `msg_read`, `msg_body`, `msg_created_at`) VALUES
(1, 1, 2, 0, 'How are we', '2019-11-19 02:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `zd_pages`
--

CREATE TABLE `zd_pages` (
  `page_id` int(10) UNSIGNED NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `page_contents` text NOT NULL,
  `page_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_pages`
--

INSERT INTO `zd_pages` (`page_id`, `page_name`, `page_contents`, `page_slug`) VALUES
(1, 'About Us', '<div class=\"about-page-area section-space-bottom\">\r\n                <div class=\"container\">\r\n                    <h2 class=\"title-section\">To Know Who We Are</h2>\r\n                    <div class=\"inner-page-details inner-page-padding\">\r\n                        <h3>What We Do</h3>\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut a vfrrdyrtfglso survived  \r\n                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not  raseth\r\n                        leap into electronic typesetting, remaining essentially unchanged. when an unknown printer took a galley of type and scrambled it to make a type specimen \r\n                        book. It has survived not only five centurbut a vfrrdyrtfglso survived  but also the leap into electronic typesetting, remaining essentially unchanged. It was po\r\n                        pularised in the 1960s with the releas survived not  rasethleap into electronic typesetting, remaining essentially unchanged.</p>\r\n                        <h3>Our Mission</h3>\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut a vfrrdyrtfglso survived  \r\n                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not  raseth\r\n                        leap into electronic typesetting, remaining essentially unchanged. when an unknown printer took a galley of type and scrambled it to make a type specimen \r\n                        book. It has survived not only five centurbut a vfrrdyrtfglso survived  but also the leap into electronic typesetting, remaining essentially unchanged. It was po\r\n                        pularised in the 1960s with the releas survived not  rasethleap into electronic typesetting, remaining essentially unchanged.</p>\r\n                    </div>  \r\n                </div>  \r\n            </div>', 'about-us'),
(2, 'Help', '<div class=\"help-page-area section-space-bottom\">\r\n                <div class=\"container\">\r\n                    <h2 class=\"title-section\">How can we help?</h2>\r\n                    <div class=\"inner-page-details inner-page-padding\"> \r\n                        <div class=\"panel-group help-page-wrapper\" id=\"accordion\">\r\n                            <div class=\"panel panel-default\">\r\n                                <div class=\"panel-heading\">\r\n                                    <div class=\"panel-title\">\r\n                                        <a aria-expanded=\"false\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">\r\n                                           #  Buying And Item Support\r\n                                        </a>\r\n                                    </div>\r\n                                </div>\r\n                                <div aria-expanded=\"false\" id=\"collapseOne\" role=\"tabpanel\" class=\"panel-collapse collapse\">\r\n                                    <div class=\"panel-body\">\r\n                                        <h3>How To Buy A Product?</h3>\r\n                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not  raseth leap into electronic typesetting, remaining essentially unchanged. </p>\r\n                                        <h3>How To Get Product Support?</h3>\r\n                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not  raseth leap into electronic typesetting, remaining essentially unchanged. </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"panel panel-default\">\r\n                                <div class=\"panel-heading\">\r\n                                    <div class=\"panel-title\">\r\n                                        <a aria-expanded=\"false\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">\r\n                                          #  Selling And Beign An Author\r\n                                        </a>\r\n                                    </div>\r\n                                </div>\r\n                                <div aria-expanded=\"false\" id=\"collapseTwo\" role=\"tabpanel\" class=\"panel-collapse collapse in\">\r\n                                    <div class=\"panel-body\">\r\n                                         <h3>How To Buy A Product?</h3>\r\n                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not  raseth leap into electronic typesetting, remaining essentially unchanged. </p>\r\n                                        <h3>How To Get Product Support?</h3>\r\n                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not  raseth leap into electronic typesetting, remaining essentially unchanged. </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"panel panel-default\">\r\n                                <div class=\"panel-heading\">\r\n                                    <div class=\"panel-title\">\r\n                                        <a aria-expanded=\"false\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">\r\n                                           #  Your Account\r\n                                        </a>\r\n                                    </div>\r\n                                </div>\r\n                                <div aria-expanded=\"false\" id=\"collapseThree\" role=\"tabpanel\" class=\"panel-collapse collapse\">\r\n                                    <div class=\"panel-body\">\r\n                                         <h3>How To Buy A Product?</h3>\r\n                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not  raseth leap into electronic typesetting, remaining essentially unchanged. </p>\r\n                                        <h3>How To Get Product Support?</h3>\r\n                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not  raseth leap into electronic typesetting, remaining essentially unchanged. </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"panel panel-default\">\r\n                                <div class=\"panel-heading\">\r\n                                    <div class=\"panel-title\">\r\n                                        <a aria-expanded=\"false\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\">\r\n                                           #  Copyright And Trademark\r\n                                        </a>\r\n                                    </div>\r\n                                </div>\r\n                                <div aria-expanded=\"false\" id=\"collapseFour\" role=\"tabpanel\" class=\"panel-collapse collapse\">\r\n                                    <div class=\"panel-body\">\r\n                                         <h3>How To Buy A Product?</h3>\r\n                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not  raseth leap into electronic typesetting, remaining essentially unchanged. </p>\r\n                                        <h3>How To Get Product Support?</h3>\r\n                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not  raseth leap into electronic typesetting, remaining essentially unchanged. </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>                            \r\n                        </div>\r\n                    </div>  \r\n                </div>  \r\n            </div>', 'help');

-- --------------------------------------------------------

--
-- Table structure for table `zd_paypal_gateway`
--

CREATE TABLE `zd_paypal_gateway` (
  `pg_id` int(11) NOT NULL,
  `pg_mode` int(11) NOT NULL,
  `pg_api_public_key` varchar(255) DEFAULT NULL,
  `pg_api_secret_key` varchar(255) DEFAULT NULL,
  `pg_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_paypal_gateway`
--

INSERT INTO `zd_paypal_gateway` (`pg_id`, `pg_mode`, `pg_api_public_key`, `pg_api_secret_key`, `pg_status`) VALUES
(1, 0, 'AdFt4U2AsUjccmsEM_aYNGTQcIqWB1oMg2qiIVL43crxBk1HKR9NuJbp_vnlIscY7lquN-0kwAZRsUHB', 'EJgI-gTo1kWuZu-1L1vAcyYPaJ0TSKzu37hm7pxSdk7DDuMhk_7V9PMSknxlYw_D1LASsC20IJxGDBt9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zd_paypal_transactions`
--

CREATE TABLE `zd_paypal_transactions` (
  `pp_id` int(10) UNSIGNED NOT NULL,
  `pp_user_id` int(10) UNSIGNED NOT NULL,
  `pp_product_id` int(10) UNSIGNED NOT NULL,
  `pp_txn_id` varchar(255) NOT NULL,
  `pp_payment_gross` varchar(255) NOT NULL,
  `pp_currency_code` varchar(100) NOT NULL,
  `pp_payer_id` varchar(255) NOT NULL,
  `pp_payer_name` varchar(255) NOT NULL,
  `pp_payer_email` varchar(255) NOT NULL,
  `pp_payer_country` varchar(255) NOT NULL,
  `pp_payment_status` varchar(255) NOT NULL,
  `pp_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_paypal_transactions`
--

INSERT INTO `zd_paypal_transactions` (`pp_id`, `pp_user_id`, `pp_product_id`, `pp_txn_id`, `pp_payment_gross`, `pp_currency_code`, `pp_payer_id`, `pp_payer_name`, `pp_payer_email`, `pp_payer_country`, `pp_payment_status`, `pp_created_at`) VALUES
(2, 1, 2, 'PAYID-LWQNOCA0MA22033JP078151H', '70.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-12 03:21:46'),
(3, 1, 2, 'PAYID-LWQOZWY9BV46885414336330', '70.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-12 04:55:34'),
(4, 2, 2, 'PAYID-LWRTYFQ54Y31142W6956440F', '70.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-13 22:57:43'),
(5, 2, 2, 'PAYID-LWRUSCA66T61618XJ1619947', '70.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-13 23:53:04'),
(6, 2, 2, 'PAYID-LWRUXDI8J339748JW691373F', '70.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-14 00:03:38'),
(7, 2, 1, 'PAYID-LWRYGNI1LN90435T0593940T', '20.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-14 04:02:59'),
(8, 2, 2, 'PAYID-LWTRI2A0J8327656W833194S', '70.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-16 13:03:46'),
(9, 2, 2, 'PAYID-LWTRLPI82738703JP467551R', '70.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-16 13:06:34'),
(10, 1, 5, 'PAYID-LWUKCEQ5SH54200YJ0746243', '32.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-17 17:13:38'),
(11, 3, 2, 'PAYID-LW2DVWA4C3464751P5473606', '70.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-26 12:25:09'),
(12, 3, 1, 'PAYID-LW2HFZY5L9057107F717293C', '20.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-26 16:24:10'),
(13, 3, 1, 'PAYID-LW2HKNQ7U7066678B925753Y', '20.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-26 16:33:35'),
(14, 3, 4, 'PAYID-LW3NFHQ7FP10898RF5547114', '12.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-10-28 11:36:31'),
(15, 2, 1, 'PAYID-LXTEIKQ2EW15268WD864100E', '20.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2019-12-03 19:15:15'),
(16, 2, 2, 'PAYID-LZKDOYY28N363909D150631N', '35.00', 'USD', '6XSQAK6DXJCWS', 'test buyer', 'seunex-buyer@yandex.com', 'US', 'approved', '2020-02-24 20:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `zd_s3_storage`
--

CREATE TABLE `zd_s3_storage` (
  `s3_id` int(10) UNSIGNED NOT NULL,
  `s3_access_key` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL,
  `s3_secret_key` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL,
  `s3_bucket_name` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL,
  `s3_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Dumping data for table `zd_s3_storage`
--

INSERT INTO `zd_s3_storage` (`s3_id`, `s3_access_key`, `s3_secret_key`, `s3_bucket_name`, `s3_status`) VALUES
(1, 'YOur Access Key Here', 'Your Secret Key Here', 'seunex', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zd_sale_statement`
--

CREATE TABLE `zd_sale_statement` (
  `ss_id` int(10) UNSIGNED NOT NULL,
  `ss_user_id` int(10) UNSIGNED NOT NULL,
  `ss_author_id` int(10) UNSIGNED NOT NULL,
  `ss_item_id` int(10) UNSIGNED NOT NULL,
  `ss_code` varchar(255) NOT NULL,
  `ss_earn` varchar(11) NOT NULL,
  `ss_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_sale_statement`
--

INSERT INTO `zd_sale_statement` (`ss_id`, `ss_user_id`, `ss_author_id`, `ss_item_id`, `ss_code`, `ss_earn`, `ss_date`) VALUES
(2, 2, 1, 1, '21221y21w21j21421G21R21O21J21Y21f21Q21p21B21F21S21E21v21H21j', '14.00', '2019-12-03 08:00:00'),
(3, 1, 2, 5, '15z15m15h15l15N15Y15w15P15U15b15B15N15i15o15w15m15Y15R15t159', '11.20', '2020-01-04 22:04:09'),
(4, 1, 2, 5, '15T15y15p15W15015N15z15715B15B15u15b15x15v15X15l15115w15k15m', '11.20', '2020-01-04 22:08:08'),
(5, 1, 2, 5, '15515l15Y15Z15W15V15E15A15S15415415A15O15q15j15215A15s15U15i', '11.20', '2020-01-05 06:35:06'),
(6, 2, 1, 2, '22u22722B22r22U22a22Z22322222t22o22s22F22O22W22F22m22L22v22n', '24.50', '2020-02-24 20:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `zd_sell_badge`
--

CREATE TABLE `zd_sell_badge` (
  `sb_id` int(10) UNSIGNED NOT NULL,
  `sb_user_id` int(10) UNSIGNED NOT NULL,
  `sb_item_id` int(10) UNSIGNED NOT NULL,
  `sb_amount` int(11) NOT NULL,
  `sb_dl_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zd_sell_badge`
--

INSERT INTO `zd_sell_badge` (`sb_id`, `sb_user_id`, `sb_item_id`, `sb_amount`, `sb_dl_id`) VALUES
(8, 1, 2, 35, 2),
(9, 2, 6, 20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `zd_smtp_settings`
--

CREATE TABLE `zd_smtp_settings` (
  `smtp_id` int(10) UNSIGNED NOT NULL,
  `smtp_default_email` varchar(255) NOT NULL,
  `smtp_display_name` varchar(255) NOT NULL,
  `smtp_type` varchar(4) NOT NULL,
  `smtp_username` varchar(255) NOT NULL,
  `smtp_password` varchar(255) NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `smtp_host` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zd_smtp_settings`
--

INSERT INTO `zd_smtp_settings` (`smtp_id`, `smtp_default_email`, `smtp_display_name`, `smtp_type`, `smtp_username`, `smtp_password`, `smtp_port`, `smtp_host`) VALUES
(1, 'seunex@zudev.net', 'AceMart Digital MarketPlace', 'tls', '4f82ae0e5904fd', '48c6c898e81743', 25, 'smtp.mailtrap.io');

-- --------------------------------------------------------

--
-- Table structure for table `zd_social_links`
--

CREATE TABLE `zd_social_links` (
  `sl_id` int(10) UNSIGNED NOT NULL,
  `sl_icon` varchar(255) NOT NULL,
  `sl_name` varchar(255) NOT NULL,
  `sl_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_social_links`
--

INSERT INTO `zd_social_links` (`sl_id`, `sl_icon`, `sl_name`, `sl_link`) VALUES
(2, 'facebook', 'Facebook', 'http://fb.me/zubdev'),
(3, 'twitter', 'Twitter', 'http://twitter.com/zubdev');

-- --------------------------------------------------------

--
-- Table structure for table `zd_stripe_gateway`
--

CREATE TABLE `zd_stripe_gateway` (
  `sg_id` int(11) NOT NULL,
  `sg_public_key` varchar(255) DEFAULT NULL,
  `sg_secret_key` varchar(255) DEFAULT NULL,
  `sg_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_stripe_gateway`
--

INSERT INTO `zd_stripe_gateway` (`sg_id`, `sg_public_key`, `sg_secret_key`, `sg_status`) VALUES
(1, 'pk_test_mwsys03nNL6ujKk535VDAA1H', 'sk_test_wjy11R2FZQZXnZuO73Ta0yHS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zd_stripe_transactions`
--

CREATE TABLE `zd_stripe_transactions` (
  `sp_id` int(10) UNSIGNED NOT NULL,
  `sp_item_id` int(10) UNSIGNED NOT NULL,
  `sp_user_id` int(10) UNSIGNED NOT NULL,
  `sp_amount` varchar(11) NOT NULL,
  `sp_currency` varchar(255) DEFAULT NULL,
  `sp_txn_id` varchar(255) NOT NULL,
  `sp_status` varchar(255) NOT NULL,
  `sp_order_id` varchar(255) NOT NULL,
  `sp_payer_name` varchar(255) NOT NULL,
  `sp_payer_email` varchar(255) NOT NULL,
  `sp_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_stripe_transactions`
--

INSERT INTO `zd_stripe_transactions` (`sp_id`, `sp_item_id`, `sp_user_id`, `sp_amount`, `sp_currency`, `sp_txn_id`, `sp_status`, `sp_order_id`, `sp_payer_name`, `sp_payer_email`, `sp_created_at`) VALUES
(1, 1, 1, '2000', 'usd', 'txn_1FSglbKMw5GD4AH6KSZntUxp', 'succeeded', 'ch_1FSglbKMw5GD4AH6vNXFbuzi', 'zubayrganiyu@yahoo.com', 'zubayrganiyu@yahoo.com', '2019-10-12 17:16:14'),
(2, 1, 1, '2000', 'usd', 'txn_1FSgsLKMw5GD4AH6RGetV81L', 'succeeded', 'ch_1FSgsLKMw5GD4AH6iRg0salV', 'zubayrganiyu@yahoo.com', 'zubayrganiyu@yahoo.com', '2019-10-12 17:23:12'),
(3, 1, 2, '2000', 'usd', 'txn_1FT8p0KMw5GD4AH6dbZtvs7b', 'succeeded', 'ch_1FT8p0KMw5GD4AH6ej1smpKL', 'zubayrganiyu@yahoo.com', 'zubayrganiyu@yahoo.com', '2019-10-13 23:13:35'),
(4, 1, 2, '2000', 'usd', 'txn_1FT9pEKMw5GD4AH6q1YBmt6d', 'succeeded', 'ch_1FT9pEKMw5GD4AH6GWnlfQTC', 'zubdevtester@zubdev.net', 'zubdevtester@zubdev.net', '2019-10-14 00:17:53'),
(5, 5, 1, '1600', 'usd', 'txn_1FxKjPKMw5GD4AH6JcmoErSt', 'succeeded', 'ch_1FxKjPKMw5GD4AH687KQexyh', 'seunexseun@gmail.com', 'seunexseun@gmail.com', '2020-01-04 22:04:09'),
(6, 5, 1, '1600', 'usd', 'txn_1FxKnFKMw5GD4AH6AJIg6LUj', 'succeeded', 'ch_1FxKnEKMw5GD4AH6lZry3guk', 'seunexseun@gmail.com', 'seunexseun@gmail.com', '2020-01-04 22:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `zd_sub_category`
--

CREATE TABLE `zd_sub_category` (
  `sub_cat_id` int(11) UNSIGNED NOT NULL,
  `sub_main_cat_id` int(10) UNSIGNED NOT NULL,
  `sub_cat_name` varchar(50) NOT NULL,
  `sub_cat_slug` varchar(255) NOT NULL,
  `sub_cat_crated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_sub_category`
--

INSERT INTO `zd_sub_category` (`sub_cat_id`, `sub_main_cat_id`, `sub_cat_name`, `sub_cat_slug`, `sub_cat_crated_at`) VALUES
(3, 2, 'Wordpress Themes', 'wordpress-themes', '2019-10-06 19:18:31'),
(4, 3, 'PHP Script', 'php-script', '2019-10-07 03:31:23'),
(5, 3, 'Javascript', 'javascript', '2019-10-07 03:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `zd_themes`
--

CREATE TABLE `zd_themes` (
  `theme_id` int(10) UNSIGNED NOT NULL,
  `theme_name` varchar(25) DEFAULT NULL,
  `theme_author` varchar(255) NOT NULL,
  `theme_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_themes`
--

INSERT INTO `zd_themes` (`theme_id`, `theme_name`, `theme_author`, `theme_status`) VALUES
(1, 'default', 'Zubdev', 1),
(2, 'digcool', 'zubdev', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zd_users`
--

CREATE TABLE `zd_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_avater` varchar(255) NOT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `user_region` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_about` text DEFAULT NULL,
  `user_banner` varchar(255) DEFAULT NULL,
  `user_fb` varchar(255) DEFAULT NULL,
  `user_tw` varchar(255) DEFAULT NULL,
  `user_ln` varchar(255) DEFAULT NULL,
  `user_google` varchar(255) DEFAULT NULL,
  `user_ref` varchar(255) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_last_seen` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_users`
--

INSERT INTO `zd_users` (`user_id`, `user_status`, `user_firstname`, `user_lastname`, `user_username`, `user_email`, `user_avater`, `user_country`, `user_region`, `user_password`, `user_about`, `user_banner`, `user_fb`, `user_tw`, `user_ln`, `user_google`, `user_ref`, `user_created_at`, `user_last_seen`) VALUES
(1, 1, 'Zubayr', 'Ganiyu', 'seunex', 'seunexseun@gmail.com', 'afb947b990c162c60964752c1b9bbcd7.jpg', 'Nigeria', 'Kogi', '$2y$10$5OOtT/aKiDKfLgh9wJeLQedXiDXHFParTcPG4hC6uTNH8Oon/lDCW', 'I am  a web developer amd desogner', '6dddba131079f4fac96887d459544fe1.jpg', 'zubdev', 'seunex', '', '', NULL, '2019-10-09 19:12:51', '2020-02-27 19:18:43'),
(2, 1, 'Zubdev', 'Tester', 'zubgan', 'Zubayrganiyu@yahoo.com', 'default/avatar-3.png', 'Nigeria', 'Kogi', '$2y$10$FG59UPzH3vlOZwhNgZ15sOyZOx6U1ClQWjBzrTkRYOne2KYu6c10i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-13 21:12:32', '2020-02-24 20:50:51'),
(3, 1, 'Seun', 'Slim', 'zubdev', 'zubdev@me.com', 'default/avatar-5.png', 'Anguilla', 'Anguilla', '$2y$10$voaGrrbQP5257cAAt6gCXeGmGqwjrHanHxO40QjiIZ4Drwvy3gueO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-26 12:20:06', '2019-11-14 20:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `zd_user_balance`
--

CREATE TABLE `zd_user_balance` (
  `bal_id` int(10) UNSIGNED NOT NULL,
  `bal_user_id` int(10) UNSIGNED NOT NULL,
  `bal_value` varchar(255) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_user_balance`
--

INSERT INTO `zd_user_balance` (`bal_id`, `bal_user_id`, `bal_value`) VALUES
(1, 1, '243.50'),
(2, 2, '190.90'),
(3, 3, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `zd_user_email_key`
--

CREATE TABLE `zd_user_email_key` (
  `uk_id` int(10) UNSIGNED NOT NULL,
  `uk_user_id` int(10) UNSIGNED NOT NULL,
  `uk_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zd_website_settings`
--

CREATE TABLE `zd_website_settings` (
  `set_id` int(11) NOT NULL,
  `set_site_name` varchar(255) NOT NULL,
  `set_site_title` varchar(255) NOT NULL,
  `set_site_short_description` varchar(255) NOT NULL,
  `set_site_description` text DEFAULT NULL,
  `set_meta_description` text DEFAULT NULL,
  `set_meta_keywords` text DEFAULT NULL,
  `set_theme_color` varchar(50) DEFAULT NULL,
  `set_site_logo` varchar(255) NOT NULL,
  `set_site_favicon` varchar(255) NOT NULL,
  `set_site_currency_code` varchar(4) NOT NULL,
  `set_site_currency` varchar(1) NOT NULL,
  `set_site_status` int(11) NOT NULL,
  `set_item_charge` int(11) NOT NULL,
  `set_min_withdraw` int(11) NOT NULL,
  `set_pay_day` int(11) NOT NULL,
  `set_email` varchar(255) NOT NULL,
  `set_live_chat` text DEFAULT NULL,
  `set_affi_status` int(11) NOT NULL,
  `set_affi_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_website_settings`
--

INSERT INTO `zd_website_settings` (`set_id`, `set_site_name`, `set_site_title`, `set_site_short_description`, `set_site_description`, `set_meta_description`, `set_meta_keywords`, `set_theme_color`, `set_site_logo`, `set_site_favicon`, `set_site_currency_code`, `set_site_currency`, `set_site_status`, `set_item_charge`, `set_min_withdraw`, `set_pay_day`, `set_email`, `set_live_chat`, `set_affi_status`, `set_affi_rate`) VALUES
(1, 'AceMart', 'Welcome To AceMart Digital Market Place', 'Premium WordPress Themes, Web Templates and Many More ...', 'sample', 'sample', 'zubdev, project', '#80ff80', 'logo.png', 'favicon.png', 'USD', '$', 0, 30, 50, 5, 'seunexseun@gmail.com', '<!--Start of Tawk.to Script-->\r\n<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/5daab32c78ab74187a5a6963/default\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>\r\n<!--End of Tawk.to Script-->', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `zd_withdrawal`
--

CREATE TABLE `zd_withdrawal` (
  `wd_id` int(10) UNSIGNED NOT NULL,
  `wd_user_id` int(10) UNSIGNED NOT NULL,
  `wd_status` int(11) NOT NULL,
  `wd_amount` int(11) NOT NULL,
  `wd_method` varchar(100) NOT NULL,
  `wd_account` varchar(255) NOT NULL,
  `wd_place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zd_withdrawal`
--

INSERT INTO `zd_withdrawal` (`wd_id`, `wd_user_id`, `wd_status`, `wd_amount`, `wd_method`, `wd_account`, `wd_place`) VALUES
(1, 1, 0, 900, 'paypal', 'seunexseun@gmail.com', 'Dec 6, 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  ADD PRIMARY KEY (`paymentID`),
  ADD UNIQUE KEY `key3` (`boxID`,`orderID`,`userID`,`txID`,`amount`,`addr`),
  ADD KEY `boxID` (`boxID`),
  ADD KEY `boxType` (`boxType`),
  ADD KEY `userID` (`userID`),
  ADD KEY `countryID` (`countryID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `amount` (`amount`),
  ADD KEY `amountUSD` (`amountUSD`),
  ADD KEY `coinLabel` (`coinLabel`),
  ADD KEY `unrecognised` (`unrecognised`),
  ADD KEY `addr` (`addr`),
  ADD KEY `txID` (`txID`),
  ADD KEY `txDate` (`txDate`),
  ADD KEY `txConfirmed` (`txConfirmed`),
  ADD KEY `txCheckDate` (`txCheckDate`),
  ADD KEY `processed` (`processed`),
  ADD KEY `processedDate` (`processedDate`),
  ADD KEY `recordCreated` (`recordCreated`),
  ADD KEY `key1` (`boxID`,`orderID`),
  ADD KEY `key2` (`boxID`,`orderID`,`userID`);

--
-- Indexes for table `zd_admin`
--
ALTER TABLE `zd_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `zd_authors`
--
ALTER TABLE `zd_authors`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `author_user_id_with_user` (`author_user_id`);

--
-- Indexes for table `zd_bitcoin_gateway`
--
ALTER TABLE `zd_bitcoin_gateway`
  ADD PRIMARY KEY (`btc_id`);

--
-- Indexes for table `zd_bitcoin_orders`
--
ALTER TABLE `zd_bitcoin_orders`
  ADD PRIMARY KEY (`zd_btc_order_id`),
  ADD KEY `btc_order_with_user` (`zd_btc_user_id`),
  ADD KEY `btc_order_with_item` (`zd_btc_item_id`);

--
-- Indexes for table `zd_blogs`
--
ALTER TABLE `zd_blogs`
  ADD PRIMARY KEY (`blog_id`),
  ADD UNIQUE KEY `blog_slug` (`blog_slug`),
  ADD KEY `blog_cat_with_cat_id` (`blog_cat_id`),
  ADD KEY `blog_author_with_user` (`blog_author_id`);

--
-- Indexes for table `zd_blog_category`
--
ALTER TABLE `zd_blog_category`
  ADD PRIMARY KEY (`bc_id`),
  ADD UNIQUE KEY `bc_slug` (`bc_slug`);

--
-- Indexes for table `zd_blog_comment`
--
ALTER TABLE `zd_blog_comment`
  ADD PRIMARY KEY (`blog_cmt_id`);

--
-- Indexes for table `zd_child_category`
--
ALTER TABLE `zd_child_category`
  ADD PRIMARY KEY (`child_cat_id`),
  ADD UNIQUE KEY `child_cat_name` (`child_cat_name`),
  ADD UNIQUE KEY `child_cat_slug` (`child_cat_slug`),
  ADD KEY `relate_child_with_sub` (`child_sub_cat_id`);

--
-- Indexes for table `zd_email_templates`
--
ALTER TABLE `zd_email_templates`
  ADD PRIMARY KEY (`em_temp_id`);

--
-- Indexes for table `zd_fb_login`
--
ALTER TABLE `zd_fb_login`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `zd_files`
--
ALTER TABLE `zd_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `zd_flash_sale`
--
ALTER TABLE `zd_flash_sale`
  ADD PRIMARY KEY (`fs_id`),
  ADD KEY `flash_item_with_item_id` (`fs_item_id`);

--
-- Indexes for table `zd_flash_sale_badge`
--
ALTER TABLE `zd_flash_sale_badge`
  ADD PRIMARY KEY (`fsb_id`),
  ADD KEY `marge_with_flash_user_id` (`fsb_user_id`);

--
-- Indexes for table `zd_followers`
--
ALTER TABLE `zd_followers`
  ADD PRIMARY KEY (`folo_id`),
  ADD KEY `f_is_user_to_uid` (`folo_is_user`),
  ADD KEY `f_is_following` (`folo_is_following`);

--
-- Indexes for table `zd_footer_contents`
--
ALTER TABLE `zd_footer_contents`
  ADD PRIMARY KEY (`fc_id`);

--
-- Indexes for table `zd_free_badge`
--
ALTER TABLE `zd_free_badge`
  ADD PRIMARY KEY (`fbg_id`),
  ADD KEY `marge_fee_badge_with_user_id` (`fbg_user_id`);

--
-- Indexes for table `zd_free_items`
--
ALTER TABLE `zd_free_items`
  ADD PRIMARY KEY (`free_id`),
  ADD KEY `free_items_to_items` (`free_item_id`);

--
-- Indexes for table `zd_google_login`
--
ALTER TABLE `zd_google_login`
  ADD PRIMARY KEY (`gg_id`);

--
-- Indexes for table `zd_google_recaptcha`
--
ALTER TABLE `zd_google_recaptcha`
  ADD PRIMARY KEY (`gr_id`);

--
-- Indexes for table `zd_header_contents`
--
ALTER TABLE `zd_header_contents`
  ADD PRIMARY KEY (`hc_id`);

--
-- Indexes for table `zd_items`
--
ALTER TABLE `zd_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `link_to_user_account` (`item_user_id`),
  ADD KEY `link_child_cat` (`item_cat_id`);

--
-- Indexes for table `zd_item_comments`
--
ALTER TABLE `zd_item_comments`
  ADD PRIMARY KEY (`cmt_id`),
  ADD KEY `item_id` (`cmt_item_id`),
  ADD KEY `user_id` (`cmt_user_id`);

--
-- Indexes for table `zd_item_comment_replies`
--
ALTER TABLE `zd_item_comment_replies`
  ADD PRIMARY KEY (`rp_id`),
  ADD KEY `cmt_id` (`rp_cmt_id`),
  ADD KEY `r_to_user_id` (`rp_user_id`);

--
-- Indexes for table `zd_item_downloads`
--
ALTER TABLE `zd_item_downloads`
  ADD PRIMARY KEY (`td_id`),
  ADD KEY `link_item_id` (`td_item_id`),
  ADD KEY `link_user_id` (`td_user_id`);

--
-- Indexes for table `zd_item_likes`
--
ALTER TABLE `zd_item_likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `join_like_item_with_item` (`like_item_id`),
  ADD KEY `join_like_user_with_users` (`like_user_id`);

--
-- Indexes for table `zd_item_previews`
--
ALTER TABLE `zd_item_previews`
  ADD PRIMARY KEY (`pre_id`),
  ADD KEY `preview_to_item` (`pre_item_id`);

--
-- Indexes for table `zd_item_rating`
--
ALTER TABLE `zd_item_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `zd_item_thumnails`
--
ALTER TABLE `zd_item_thumnails`
  ADD PRIMARY KEY (`thumb_id`),
  ADD KEY `thumb_to_files` (`thumb_item_id`);

--
-- Indexes for table `zd_last_flash_sale`
--
ALTER TABLE `zd_last_flash_sale`
  ADD PRIMARY KEY (`lfs_id`);

--
-- Indexes for table `zd_last_free_files`
--
ALTER TABLE `zd_last_free_files`
  ADD PRIMARY KEY (`lff_id`);

--
-- Indexes for table `zd_main_category`
--
ALTER TABLE `zd_main_category`
  ADD PRIMARY KEY (`main_cat_id`),
  ADD UNIQUE KEY `main_cat_name` (`main_cat_name`),
  ADD UNIQUE KEY `main_cat_slug` (`main_cat_slug`);

--
-- Indexes for table `zd_main_files`
--
ALTER TABLE `zd_main_files`
  ADD PRIMARY KEY (`mf_id`),
  ADD KEY `to_item` (`mf_item_id`);

--
-- Indexes for table `zd_messages`
--
ALTER TABLE `zd_messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `msg_from_user_id` (`msg_from_id`),
  ADD KEY `msg_to_user_id` (`msg_to_id`);

--
-- Indexes for table `zd_pages`
--
ALTER TABLE `zd_pages`
  ADD PRIMARY KEY (`page_id`),
  ADD UNIQUE KEY `page_slug` (`page_slug`);

--
-- Indexes for table `zd_paypal_gateway`
--
ALTER TABLE `zd_paypal_gateway`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `zd_paypal_transactions`
--
ALTER TABLE `zd_paypal_transactions`
  ADD PRIMARY KEY (`pp_id`);

--
-- Indexes for table `zd_s3_storage`
--
ALTER TABLE `zd_s3_storage`
  ADD PRIMARY KEY (`s3_id`);

--
-- Indexes for table `zd_sale_statement`
--
ALTER TABLE `zd_sale_statement`
  ADD PRIMARY KEY (`ss_id`),
  ADD KEY `ss_author_to_u_id` (`ss_author_id`),
  ADD KEY `ss_item_id_to_items` (`ss_item_id`);

--
-- Indexes for table `zd_sell_badge`
--
ALTER TABLE `zd_sell_badge`
  ADD PRIMARY KEY (`sb_id`),
  ADD KEY `sb_with_user_id` (`sb_user_id`),
  ADD KEY `join_with_download_id` (`sb_dl_id`);

--
-- Indexes for table `zd_smtp_settings`
--
ALTER TABLE `zd_smtp_settings`
  ADD PRIMARY KEY (`smtp_id`);

--
-- Indexes for table `zd_social_links`
--
ALTER TABLE `zd_social_links`
  ADD PRIMARY KEY (`sl_id`),
  ADD UNIQUE KEY `sl_name` (`sl_name`);

--
-- Indexes for table `zd_stripe_gateway`
--
ALTER TABLE `zd_stripe_gateway`
  ADD PRIMARY KEY (`sg_id`);

--
-- Indexes for table `zd_stripe_transactions`
--
ALTER TABLE `zd_stripe_transactions`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `link_sp_item` (`sp_item_id`),
  ADD KEY `link_sp_user` (`sp_user_id`);

--
-- Indexes for table `zd_sub_category`
--
ALTER TABLE `zd_sub_category`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD UNIQUE KEY `sub_cat_name` (`sub_cat_name`),
  ADD UNIQUE KEY `sub_cat_slug` (`sub_cat_slug`),
  ADD KEY `sub_to_main_cat` (`sub_main_cat_id`);

--
-- Indexes for table `zd_themes`
--
ALTER TABLE `zd_themes`
  ADD PRIMARY KEY (`theme_id`),
  ADD UNIQUE KEY `theme_name` (`theme_name`);

--
-- Indexes for table `zd_users`
--
ALTER TABLE `zd_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `zd_user_balance`
--
ALTER TABLE `zd_user_balance`
  ADD PRIMARY KEY (`bal_id`),
  ADD KEY `bal_user_id` (`bal_user_id`);

--
-- Indexes for table `zd_user_email_key`
--
ALTER TABLE `zd_user_email_key`
  ADD PRIMARY KEY (`uk_id`),
  ADD KEY `uk_user_id` (`uk_user_id`);

--
-- Indexes for table `zd_website_settings`
--
ALTER TABLE `zd_website_settings`
  ADD PRIMARY KEY (`set_id`);

--
-- Indexes for table `zd_withdrawal`
--
ALTER TABLE `zd_withdrawal`
  ADD PRIMARY KEY (`wd_id`),
  ADD KEY `wd_user` (`wd_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  MODIFY `paymentID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zd_admin`
--
ALTER TABLE `zd_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zd_authors`
--
ALTER TABLE `zd_authors`
  MODIFY `author_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_bitcoin_gateway`
--
ALTER TABLE `zd_bitcoin_gateway`
  MODIFY `btc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_bitcoin_orders`
--
ALTER TABLE `zd_bitcoin_orders`
  MODIFY `zd_btc_order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zd_blogs`
--
ALTER TABLE `zd_blogs`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zd_blog_category`
--
ALTER TABLE `zd_blog_category`
  MODIFY `bc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zd_blog_comment`
--
ALTER TABLE `zd_blog_comment`
  MODIFY `blog_cmt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_child_category`
--
ALTER TABLE `zd_child_category`
  MODIFY `child_cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zd_email_templates`
--
ALTER TABLE `zd_email_templates`
  MODIFY `em_temp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zd_fb_login`
--
ALTER TABLE `zd_fb_login`
  MODIFY `fb_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_files`
--
ALTER TABLE `zd_files`
  MODIFY `file_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `zd_flash_sale`
--
ALTER TABLE `zd_flash_sale`
  MODIFY `fs_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `zd_flash_sale_badge`
--
ALTER TABLE `zd_flash_sale_badge`
  MODIFY `fsb_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zd_followers`
--
ALTER TABLE `zd_followers`
  MODIFY `folo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zd_footer_contents`
--
ALTER TABLE `zd_footer_contents`
  MODIFY `fc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_free_badge`
--
ALTER TABLE `zd_free_badge`
  MODIFY `fbg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zd_free_items`
--
ALTER TABLE `zd_free_items`
  MODIFY `free_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `zd_google_login`
--
ALTER TABLE `zd_google_login`
  MODIFY `gg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_google_recaptcha`
--
ALTER TABLE `zd_google_recaptcha`
  MODIFY `gr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_header_contents`
--
ALTER TABLE `zd_header_contents`
  MODIFY `hc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_items`
--
ALTER TABLE `zd_items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zd_item_comments`
--
ALTER TABLE `zd_item_comments`
  MODIFY `cmt_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zd_item_comment_replies`
--
ALTER TABLE `zd_item_comment_replies`
  MODIFY `rp_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zd_item_downloads`
--
ALTER TABLE `zd_item_downloads`
  MODIFY `td_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zd_item_likes`
--
ALTER TABLE `zd_item_likes`
  MODIFY `like_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zd_item_previews`
--
ALTER TABLE `zd_item_previews`
  MODIFY `pre_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zd_item_rating`
--
ALTER TABLE `zd_item_rating`
  MODIFY `rating_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zd_item_thumnails`
--
ALTER TABLE `zd_item_thumnails`
  MODIFY `thumb_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zd_last_flash_sale`
--
ALTER TABLE `zd_last_flash_sale`
  MODIFY `lfs_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_last_free_files`
--
ALTER TABLE `zd_last_free_files`
  MODIFY `lff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_main_category`
--
ALTER TABLE `zd_main_category`
  MODIFY `main_cat_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zd_main_files`
--
ALTER TABLE `zd_main_files`
  MODIFY `mf_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zd_messages`
--
ALTER TABLE `zd_messages`
  MODIFY `msg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_pages`
--
ALTER TABLE `zd_pages`
  MODIFY `page_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zd_paypal_gateway`
--
ALTER TABLE `zd_paypal_gateway`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_paypal_transactions`
--
ALTER TABLE `zd_paypal_transactions`
  MODIFY `pp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `zd_s3_storage`
--
ALTER TABLE `zd_s3_storage`
  MODIFY `s3_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_sale_statement`
--
ALTER TABLE `zd_sale_statement`
  MODIFY `ss_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `zd_sell_badge`
--
ALTER TABLE `zd_sell_badge`
  MODIFY `sb_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zd_smtp_settings`
--
ALTER TABLE `zd_smtp_settings`
  MODIFY `smtp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_social_links`
--
ALTER TABLE `zd_social_links`
  MODIFY `sl_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zd_stripe_gateway`
--
ALTER TABLE `zd_stripe_gateway`
  MODIFY `sg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_stripe_transactions`
--
ALTER TABLE `zd_stripe_transactions`
  MODIFY `sp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zd_sub_category`
--
ALTER TABLE `zd_sub_category`
  MODIFY `sub_cat_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zd_themes`
--
ALTER TABLE `zd_themes`
  MODIFY `theme_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zd_users`
--
ALTER TABLE `zd_users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zd_user_balance`
--
ALTER TABLE `zd_user_balance`
  MODIFY `bal_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zd_user_email_key`
--
ALTER TABLE `zd_user_email_key`
  MODIFY `uk_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zd_website_settings`
--
ALTER TABLE `zd_website_settings`
  MODIFY `set_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zd_withdrawal`
--
ALTER TABLE `zd_withdrawal`
  MODIFY `wd_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `zd_authors`
--
ALTER TABLE `zd_authors`
  ADD CONSTRAINT `author_user_id_with_user` FOREIGN KEY (`author_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_bitcoin_orders`
--
ALTER TABLE `zd_bitcoin_orders`
  ADD CONSTRAINT `btc_order_with_item` FOREIGN KEY (`zd_btc_item_id`) REFERENCES `zd_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `btc_order_with_user` FOREIGN KEY (`zd_btc_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_blogs`
--
ALTER TABLE `zd_blogs`
  ADD CONSTRAINT `blog_author_with_user` FOREIGN KEY (`blog_author_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_cat_with_cat_id` FOREIGN KEY (`blog_cat_id`) REFERENCES `zd_blog_category` (`bc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_child_category`
--
ALTER TABLE `zd_child_category`
  ADD CONSTRAINT `relate_child_with_sub` FOREIGN KEY (`child_sub_cat_id`) REFERENCES `zd_sub_category` (`sub_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_flash_sale`
--
ALTER TABLE `zd_flash_sale`
  ADD CONSTRAINT `flash_item_with_item_id` FOREIGN KEY (`fs_item_id`) REFERENCES `zd_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_followers`
--
ALTER TABLE `zd_followers`
  ADD CONSTRAINT `f_is_following` FOREIGN KEY (`folo_is_following`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_is_user_to_uid` FOREIGN KEY (`folo_is_user`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_free_items`
--
ALTER TABLE `zd_free_items`
  ADD CONSTRAINT `free_items_to_items` FOREIGN KEY (`free_item_id`) REFERENCES `zd_items` (`item_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_items`
--
ALTER TABLE `zd_items`
  ADD CONSTRAINT `link_child_cat` FOREIGN KEY (`item_cat_id`) REFERENCES `zd_child_category` (`child_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `link_to_user_account` FOREIGN KEY (`item_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_item_comments`
--
ALTER TABLE `zd_item_comments`
  ADD CONSTRAINT `item_id` FOREIGN KEY (`cmt_item_id`) REFERENCES `zd_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`cmt_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_item_comment_replies`
--
ALTER TABLE `zd_item_comment_replies`
  ADD CONSTRAINT `cmt_id` FOREIGN KEY (`rp_cmt_id`) REFERENCES `zd_item_comments` (`cmt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_to_user_id` FOREIGN KEY (`rp_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_item_downloads`
--
ALTER TABLE `zd_item_downloads`
  ADD CONSTRAINT `link_item_id` FOREIGN KEY (`td_item_id`) REFERENCES `zd_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `link_user_id` FOREIGN KEY (`td_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_item_likes`
--
ALTER TABLE `zd_item_likes`
  ADD CONSTRAINT `join_like_item_with_item` FOREIGN KEY (`like_item_id`) REFERENCES `zd_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_like_user_with_users` FOREIGN KEY (`like_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_item_previews`
--
ALTER TABLE `zd_item_previews`
  ADD CONSTRAINT `preview_to_item` FOREIGN KEY (`pre_item_id`) REFERENCES `zd_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_item_thumnails`
--
ALTER TABLE `zd_item_thumnails`
  ADD CONSTRAINT `thumb_to_files` FOREIGN KEY (`thumb_item_id`) REFERENCES `zd_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_main_files`
--
ALTER TABLE `zd_main_files`
  ADD CONSTRAINT `to_item` FOREIGN KEY (`mf_item_id`) REFERENCES `zd_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_messages`
--
ALTER TABLE `zd_messages`
  ADD CONSTRAINT `msg_from_user_id` FOREIGN KEY (`msg_from_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `msg_to_user_id` FOREIGN KEY (`msg_to_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_sale_statement`
--
ALTER TABLE `zd_sale_statement`
  ADD CONSTRAINT `ss_author_to_u_id` FOREIGN KEY (`ss_author_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ss_item_id_to_items` FOREIGN KEY (`ss_item_id`) REFERENCES `zd_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_stripe_transactions`
--
ALTER TABLE `zd_stripe_transactions`
  ADD CONSTRAINT `link_sp_item` FOREIGN KEY (`sp_item_id`) REFERENCES `zd_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `link_sp_user` FOREIGN KEY (`sp_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_sub_category`
--
ALTER TABLE `zd_sub_category`
  ADD CONSTRAINT `sub_to_main_cat` FOREIGN KEY (`sub_main_cat_id`) REFERENCES `zd_main_category` (`main_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_user_balance`
--
ALTER TABLE `zd_user_balance`
  ADD CONSTRAINT `bal_user_id` FOREIGN KEY (`bal_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_user_email_key`
--
ALTER TABLE `zd_user_email_key`
  ADD CONSTRAINT `uk_user_id` FOREIGN KEY (`uk_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zd_withdrawal`
--
ALTER TABLE `zd_withdrawal`
  ADD CONSTRAINT `wd_user` FOREIGN KEY (`wd_user_id`) REFERENCES `zd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
