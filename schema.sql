DROP DATABASE IF EXISTS mail;
CREATE DATABASE mail;
USE mail;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` char(35) NOT NULL default '',
  `lastname` char(35) NOT NULL default '',
  `username` char(20) NOT NULL default '',
  `password` char(70) DEFAULT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1080 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL auto_increment,
  `recipient_id` int(35) NOT NULL,
  `user_id` int(35) NOT NULL,
  `subject` char(3) NOT NULL default '',
  `body` char(20) NOT NULL default '',
  `date_sent` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`,`recipient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1080 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `message_read`;
CREATE TABLE `cities` (
  `id` int(11) NOT NULL auto_increment,
  `message_id` char(35) NOT NULL default '',
  `reader_id` char(3) NOT NULL default '',
  `dateMail` char(20) NOT NULL default '',
  PRIMARY KEY  (`id`,`reader_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1080 DEFAULT CHARSET=utf8;
