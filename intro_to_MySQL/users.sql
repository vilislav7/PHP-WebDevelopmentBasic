CREATE TABLE `users` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(60) NOT NULL,
	`password` VARCHAR(60) NOT NULL,
	`profile_picture` MEDIUMBLOB NOT NULL,
	`last_login_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	`is_deleted` ENUM('true','false') NOT NULL,
	PRIMARY KEY (`id`)
)
ENGINE=InnoDB;

INSERT INTO `users` (`username`, `password`, `profile_picture`, `last_login_time`, `is_deleted`)
 VALUES ('gosho', '123', '0xFFD8FFE', '2018-12-28 15:23:02', 'false');

INSERT INTO `users` (`username`, `password`, `profile_picture`, `last_login_time`, `is_deleted`)
 VALUES ('pesho', '123', '0xFFD8FFE', '2017-12-28 15:23:02', 'false');

INSERT INTO `users` (`username`, `password`, `profile_picture`, `last_login_time`, `is_deleted`)
 VALUES ('sasho', '123', '0xFFD8FFE', '2016-12-28 15:23:02', 'true');

INSERT INTO `users` (`username`, `password`, `profile_picture`, `last_login_time`, `is_deleted`)
 VALUES ('pasho', '123', '0xFFD8FFE', '2010-12-28 15:23:02', 'true');

INSERT INTO `users` (`username`, `password`, `profile_picture`, `last_login_time`, `is_deleted`)
 VALUES ('zasho', '123', '0xFFD8FFE', '2015-12-28 15:23:02', 'false');