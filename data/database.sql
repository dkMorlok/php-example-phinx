CREATE TABLE `_phinx_log` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL,
  `end_time` timestamp NOT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(256) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `lang` char(2) NOT NULL DEFAULT 'en',
  `role` enum('member') NOT NULL DEFAULT 'member',
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`(255)),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` VALUES
 (1, 'morlok@domain.com', 'dusan', 'en', 'member', 'password');
