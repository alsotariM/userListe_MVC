-- Adminer 4.7.9 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `login` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `firstName`, `lastName`, `age`, `login`, `Password`) VALUES
(1,	'Mohamad',	'Alsotari',	39,	'alsotari',	'1234'),
(2,	'Ahmad',	'Omar',	25,	'ahmad',	'1234'),
(18,	'test1',	'test1',	45,	'test1',	'test1'),
(20,	'asdgf',	'asdf',	23,	'asdf',	'asdf'),
(24,	'test2',	'test2',	34,	'asdfetrz',	'test12'),
(25,	'Yasin',	'Suitry',	34,	'yasin',	'adfkjlkj34'),
(26,	'Yasin',	'Suitry',	34,	'yasin',	'adfkjlkj34'),
(27,	'Yasin',	'Suitry',	34,	'yasin',	'adfkjlkj34');

-- 2023-10-06 07:10:34
