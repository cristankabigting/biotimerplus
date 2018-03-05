-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `log_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `logdate` varchar(10) NOT NULL,
  `logtime` varchar(20) NOT NULL,
  `logtimeUnix` varchar(20) NOT NULL,
  `scancode` varchar(15) NOT NULL,
  `logtype` varchar(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `messagestatus` text NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2018-02-22 19:17:27