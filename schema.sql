DROP DATABASE IF EXISTS mail;
CREATE DATABASE mail;
USE mail;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` char(35) NOT NULL default '',
  `lastname` char(35) NOT NULL default '',
  `username` char(20) NOT NULL default '' UNIQUE,
  `password` char(70) DEFAULT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1080 DEFAULT CHARSET=utf8;

insert into user (firstname,lastname,username,password) values ('Akinyele', 'Thompson', 'AdminNevik', 'c13367945d5d4c91047b3b50234aa7ab');
insert into user (firstname,lastname,username,password) values ('Jhenai', 'Dixon', 'AdminJhen', '9a1996efc97181f0aee18321aa3b3b12');
insert into user (firstname,lastname,username,password) values ('Alfanso', 'Barr', 'Unique', '22184170b96374a07c7745d8c32b9fce');


DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL auto_increment,
  `recipient_id` char(35) NOT NULL,
  `user_id` char(35) NOT NULL,
  `subject` text NOT NULL default '',
  `body` text NOT NULL default '',
  `date_sent` datetime,
  PRIMARY KEY  (`id`,`recipient_id`),
  foreign key(`recipient_id`)  references user(`id`) on update cascade on delete cascade,
	foreign key(`user_id`) references user(`id`) on update cascade on delete cascade
) ENGINE=MyISAM AUTO_INCREMENT=1080 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `message_read`;
CREATE TABLE `message_read` (
  `id` int(11) NOT NULL auto_increment UNIQUE,
  `message_id` char(35) NOT NULL default '',
  `reader_id` char(20) NOT NULL default '',
  `read_date` datetime,
  PRIMARY KEY  (`message_id`,`reader_id`),
  foreign key(`message_id`) references message(`id`) on update cascade on delete cascade,
	foreign key(`reader_id`) references user(`id`) on update cascade on delete cascade
) ENGINE=MyISAM AUTO_INCREMENT=1080 DEFAULT CHARSET=utf8;


