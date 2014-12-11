# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38)
# Database: phpfall
# Generation Time: 2014-12-11 03:32:29 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(600) DEFAULT '',
  `to_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `user_id`, `comment`, `to_user_id`)
VALUES
	(1,2,'hello dan, hope you are doing well',1),
	(2,3,'i love you dan',1);

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(16) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'http://placekitten.com/150/150',
  `username` varchar(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `image`, `username`, `password`)
VALUES
	(1,'Dan','http://placehold.it/150x150','dan','e99a18c428cb38d5f260853678922e03'),
	(2,'Dude','http://placekitten.com/150/150','dude','e99a18c428cb38d5f260853678922e03'),
	(3,'Sally','http://placekitten.com/g/150/150','sally','a41d4e699dad691cd8a4ec269b131de0'),
	(4,'person','http://placekitten.com/150/150','people','0421008445828ceb46f496700a5fa65e'),
	(5,'king','image','kingme','e99a18c428cb38d5f260853678922e03'),
	(6,'dan','image','dan1','e99a18c428cb38d5f260853678922e03'),
	(21,'me','http://placesheen.com/200/300','me','202cb962ac59075b964b07152d234b70'),
	(22,'me2','placesheen.com/200/300','me3','202cb962ac59075b964b07152d234b70'),
	(23,'me4','placesheen.com/200/300','me4','202cb962ac59075b964b07152d234b70');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
