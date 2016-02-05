-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 02 月 05 日 22:46
-- 服务器版本: 5.6.17
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ouch`
--

-- --------------------------------------------------------

--
-- 表的结构 `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `no:` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name:` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'anonym',
  `message:` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`no:`),
  KEY `no:` (`no:`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `table`
--

INSERT INTO `table` (`no:`, `name:`, `message:`, `time`) VALUES
(1, 'anonym1', '12345', '2016-02-16 07:33:48'),
(2, 'anonym2', '上山打老虎', '2016-01-20 10:33:12'),
(3, 'anonym3', '老虎不吃人', '2016-01-21 16:15:06'),
(4, 'anonym4', '专吃大坏蛋', '2016-02-01 07:25:06'),
(5, 'anonym5', '嘿嘿嘿', '2016-02-05 03:17:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
