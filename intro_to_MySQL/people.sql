CREATE TABLE `people` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL,
	`picture` MEDIUMBLOB NULL,
	`height` FLOAT NULL DEFAULT NULL,
	`weight` FLOAT NULL DEFAULT NULL,
	`gender` ENUM('m','f') NOT NULL,
	`birthdate` DATETIME NOT NULL,
	`biography` TEXT NULL,
	PRIMARY KEY (`id`)
)
ENGINE=InnoDB;


INSERT INTO `people` (`name`, `picture`, `gender`, `birthdate`)
 VALUES ('pesho', NULL, 'm', '2018-07-02 13:10:20');

INSERT INTO `people` (`name`, `picture`, `gender`, `birthdate`)
 VALUES ('gosho', NULL, 'm', '1999-01-22 13:10:20');

INSERT INTO `people` (`name`, `picture`, `gender`, `birthdate`)
 VALUES ('mimi', NULL, 'f', '1978-03-15 13:10:20');

INSERT INTO `people` (`name`, `picture`, `gender`, `birthdate`)
 VALUES ('lili', NULL, 'f', '1997-11-11 13:10:20');

INSERT INTO `people` (`name`, `picture`, `gender`, `birthdate`)
 VALUES ('stavri', NULL, 'm', '1945-12-18 13:10:20');