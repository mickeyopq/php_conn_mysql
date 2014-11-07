-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2014 年 05 月 01 日 22:04
-- 伺服器版本: 5.5.36
-- PHP 版本： 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `dbname`
--

-- --------------------------------------------------------

--
-- 資料表結構 `gbook`
--

CREATE TABLE IF NOT EXISTS `gbook` (
  `id` int(80) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=45 ;

--
-- 資料表的匯出資料 `gbook`
--

INSERT INTO `gbook` (`id`, `name`, `content`, `ctime`) VALUES
(1, '65488', '9999', '2014-04-25 23:04:16'),
(2, '777yyyyt', 'tuytuytuytguy', '2014-04-25 23:04:23'),
(3, 'man', 'fq...', '2014-04-25 23:07:15'),
(4, 'girl', 'lkjwoppppppppppppppppppppppppppppppppppp', '2014-04-25 23:07:26'),
(5, '張阿牛', '我在小都等我', '2014-04-25 23:45:27'),
(6, '999', '7777', '2014-04-28 00:36:34'),
(7, 'ha 幹筌學長', '頭巾還給我，不然翻臉', '2014-04-28 21:40:15'),
(8, 'Glider', 'ok\r\n', '2014-04-28 21:41:25'),
(9, 'Glider', 'ok\r\n', '2014-04-28 21:42:36'),
(10, 'Glider', 'ok\r\n', '2014-04-28 21:43:01'),
(11, '', 'Fghh', '2014-04-28 21:43:07'),
(12, '999', '000', '2014-04-28 22:06:18'),
(13, '989009809', '0809890', '2014-04-28 22:07:18'),
(14, '944130xx', 'Ha淦筌，把我頭巾還給我，淦', '2014-04-28 22:09:06'),
(15, '砒霜', '....老梗...', '2014-04-28 22:12:01'),
(17, '99', '77878', '2014-04-28 22:17:16'),
(18, '十斤砒霜', '特價優惠', '2014-04-28 22:25:33'),
(19, 'opq', '123', '2014-04-29 20:15:13'),
(25, '6654544', '878787', '2014-04-30 22:20:58'),
(26, 'opq', '44545648798', '2014-04-30 22:21:14'),
(27, '79879879', '745465465', '2014-04-30 22:22:03'),
(28, 'test', 'test', '2014-04-30 22:29:22'),
(29, 'Glider', '還可以，不錯了\r\n', '2014-04-30 22:31:16'),
(30, 'opq', '98798798749', '2014-05-01 21:45:45'),
(31, '987987', '4949', '2014-05-01 21:46:15'),
(32, 'opq', '87979', '2014-05-01 22:08:46'),
(33, 'opq', '78551', '2014-05-01 22:29:18'),
(34, '45646', '56464', '2014-05-02 00:20:12'),
(35, 'opq', '87979465', '2014-05-02 00:20:28'),
(36, 'opq', '56465', '2014-05-02 00:21:26'),
(37, '98797', '4654', '2014-05-02 00:21:32'),
(38, 'opq', '87974689797', '2014-05-02 00:21:45'),
(39, 'Glider', '改的越來越好嘍...', '2014-05-02 00:22:47'),
(40, 'opq', '', '2014-05-02 00:23:41'),
(43, 'jkjkl', '', '2014-05-02 00:46:17');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `xname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(44) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `xname`, `password`, `nickname`) VALUES
(1, 'opq', '123', '四斤砒霜');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
