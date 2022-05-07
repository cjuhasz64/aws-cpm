DROP TABLE IF EXISTS `myTable`;

CREATE TABLE `myTable` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `phone` varchar(100) default NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `myTable` (`name`,`email`,`phone`)
VALUES
  ("Nomlanga Larson","pede.ac@outlook.edu","(01) 5497 1835"),
  ("Emmanuel Bernard","dictum.sapien@protonmail.couk","(08) 1005 5154"),
  ("Kathleen Rowland","convallis.ligula@protonmail.net","(05) 6463 5926"),
  ("Fredericka Dillon","etiam.vestibulum@icloud.net","(07) 2831 5586"),
  ("Rina Buckley","morbi.tristique@icloud.couk","(06) 2448 1673");
