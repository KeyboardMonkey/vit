-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2014 at 04:24 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cdcol`
--
CREATE DATABASE IF NOT EXISTS `cdcol` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `cdcol`;

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);
--
-- Database: `data`
--
CREATE DATABASE IF NOT EXISTS `data` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `data`;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"phpmyadmin","table":"pma_column_info"},{"db":"phpmyadmin","table":"pma_designer_coords"},{"db":"phpmyadmin","table":"pma_history"},{"db":"phpmyadmin","table":"pma_pdf_pages"},{"db":"phpmyadmin","table":"pma_recent"},{"db":"phpmyadmin","table":"pma_relation"},{"db":"cdcol","table":"cds"},{"db":"mysql","table":"user"},{"db":"mysql","table":"help_relation"},{"db":"mysql","table":"db"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;
--
-- Database: `testdb`
--
CREATE DATABASE IF NOT EXISTS `testdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `testdb`;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `description` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `qty` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Database: `vitdb`
--
CREATE DATABASE IF NOT EXISTS `vitdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vitdb`;

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE IF NOT EXISTS `course_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `color_tag` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `category`, `color_tag`) VALUES
(1, 'HTML', 'html'),
(2, 'PHP', 'php'),
(3, 'ASP.NET', 'asp'),
(4, 'Java', 'java'),
(5, 'Android', 'android'),
(6, 'JavaScript', 'javascript'),
(7, 'jQuery', 'jquery'),
(8, 'CSS', 'css'),
(9, 'C++', 'cpp'),
(10, 'WordPress', 'wordpress'),
(11, 'Development Tools', 'd-tools'),
(12, 'Business', 'business'),
(13, 'Design', 'design'),
(14, 'Other', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `course_enrollment`
--

CREATE TABLE IF NOT EXISTS `course_enrollment` (
  `enrol_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `enrol_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('in-progress','cancelled','completed') NOT NULL,
  `progress` int(11) NOT NULL,
  PRIMARY KEY (`enrol_id`),
  KEY `enrol_time` (`enrol_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `course_enrollment`
--

INSERT INTO `course_enrollment` (`enrol_id`, `course_id`, `user_id`, `enrol_time`, `status`, `progress`) VALUES
(4, 5, 3, '2014-10-26 13:51:14', 'in-progress', 0),
(5, 7, 3, '2014-10-26 13:52:14', 'in-progress', 0),
(6, 11, 3, '2014-10-26 13:52:22', 'in-progress', 0),
(7, 8, 3, '2014-10-26 13:52:48', 'in-progress', 0),
(8, 8, 0, '2014-10-26 16:05:51', 'in-progress', 0),
(9, 12, 44, '2014-10-28 10:20:00', 'in-progress', 0),
(10, 4, 6, '2014-10-30 08:16:20', 'in-progress', 0),
(11, 4, 1, '2014-10-31 05:48:55', 'in-progress', 0),
(12, 1, 6, '2014-11-05 12:23:05', 'in-progress', 0),
(13, 1, 6, '2014-11-05 12:23:08', 'in-progress', 0),
(14, 1, 6, '2014-11-08 10:34:24', 'in-progress', 0),
(15, 1, 6, '2014-11-08 17:50:14', 'in-progress', 0),
(16, 1, 6, '2014-11-08 17:50:15', 'in-progress', 0),
(17, 1, 6, '2014-11-08 17:50:15', 'in-progress', 0),
(18, 1, 6, '2014-11-08 17:50:18', 'in-progress', 0),
(19, 13, 6, '2014-11-09 09:16:15', 'in-progress', 0),
(20, 13, 6, '2014-11-09 09:16:17', 'in-progress', 0),
(21, 1, 6, '2014-11-09 10:12:54', 'in-progress', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_rating`
--

CREATE TABLE IF NOT EXISTS `course_rating` (
  `rating_id` int(10) NOT NULL AUTO_INCREMENT,
  `course_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `course_rating`
--

INSERT INTO `course_rating` (`rating_id`, `course_id`, `user_id`, `rating`) VALUES
(2, 5, 3, 5),
(3, 5, 3, 0),
(4, 5, 3, 5),
(5, 12, 44, 5),
(6, 4, 6, 5),
(7, 4, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(40) NOT NULL,
  `tiny_intro` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `difficulty_level` enum('beginner','intermediate','advanced') NOT NULL,
  `status` enum('yes','no') NOT NULL,
  `description` text NOT NULL,
  `points` int(10) NOT NULL DEFAULT '0',
  `developed_by` varchar(20) NOT NULL,
  `learning_outcome` text NOT NULL,
  `target_audience` text NOT NULL,
  `is_new` enum('yes','no') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `full_name`, `tiny_intro`, `category`, `difficulty_level`, `status`, `description`, `points`, `developed_by`, `learning_outcome`, `target_audience`, `is_new`, `created_date`, `updated_date`) VALUES
(1, 'Build an Interactive Website', 'Build an Interactive Website', '6', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 10, 'Lynda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(2, 'Introduction to Programming', 'Introduction to Programming', '6', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 20, 'Tree House', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(3, 'How to Write a Business Plan', 'How to Write a Business Plan', '12', 'beginner', 'yes', 'hitestLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 30, 'New Boston', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(4, 'PHP & Stripe API', 'PHP & Stripe API', '2', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 200, 'Lynda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(5, 'Using PHP with MySQL', 'Using PHP with MySQL', '2', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 1000, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(6, 'WordPress Admin Settings', 'WordPress Admin Settings', '10', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 5000, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(7, 'Git Basics', 'Git Basics', '11', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 500, 'Alison', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(8, 'SEO Basics', 'SEO Basics', '14', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 55, 'Coursera', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(9, 'CSS Foundations', 'CSS Foundations', '8', 'intermediate', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(10, 'How to make a Favicon', 'How to make a Favicon', '13', 'intermediate', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Learnable', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(11, 'Soft Skills', 'Soft Skills', '12', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(12, 'Angular Js', 'Starting With Angula', '6', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Lynda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-26 16:50:40', '2014-10-26 16:50:40'),
(13, 'Object-Oriented PHP Basics', 'Object-Oriented PHP Basics', '2', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'TTH', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-28 10:10:32', '2014-10-28 10:10:32'),
(14, 'Course XYZ', 'XYZ', '7', 'beginner', 'no', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'TTH', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', 'yes', '2014-10-28 10:11:40', '2014-10-28 10:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(15) NOT NULL DEFAULT 'User',
  `active` enum('Yes','No') NOT NULL DEFAULT 'No',
  `last_login` timestamp NULL DEFAULT NULL,
  `hash` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(255) NOT NULL,
  `logged_in` int(1) NOT NULL DEFAULT '0' COMMENT '0 - No, 1 - Yes',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `type`, `active`, `last_login`, `hash`, `register_date`, `username`, `logged_in`) VALUES
(1, 'admin@vitorials.net', 'admin', 'Admin', 'Yes', '2014-09-16 15:12:37', '', '0000-00-00 00:00:00', 'admin', 0),
(3, 'teacher@vitorials.net', 'teacher', 'Teacher', 'No', NULL, '53a7aa0fc86f7a9b176180ce8aed59f2ce736b5696c106ae2b460539bbb4dec0', '0000-00-00 00:00:00', 'teacher', 0),
(4, 'student@vitorials.net', 'student', 'User', 'Yes', '2014-09-17 19:54:16', '5e4427cdc2aad36871a458858172692d8b903743c511c0c71fbb2bd31ade5267', '0000-00-00 00:00:00', 'student', 1),
(6, 'ishaqzafar@gmail.com', 'ishaq.zafar', 'User', 'Yes', '2014-09-18 09:43:30', '8ad8c472ba7bdced3d871d3f4b09d97824c6e4f6c9233952c6f9d3ad873a224e', '0000-00-00 00:00:00', 'ishaq.zafar', 1),
(7, 'shahid.afridi@vitorials.net', 'shahid.afridi', 'User', 'Yes', '2014-09-21 08:20:40', '6e1bfbe1a96758036789bbac39bf9a5aa0d431d07b878aef735844c83d834929', '0000-00-00 00:00:00', 'shahid.afridi', 1),
(11, 'ar.malik@vitorials.net', 'arm321', 'User', 'No', NULL, '685ad82db88a9561b3d373a792a6aa6a2a7c0bc4094ff032f509244c5dd523ec2e2fbe596ce178594ac0363c42a8a4cd88b6c9ac337107a9e07b3e316b8e91e0', '2014-09-22 16:18:45', 'ar.malik', 0),
(12, 'shahzeb.imtiaz@vitorials.net', 'shazi321', 'User', 'No', NULL, '5d6c48cd6d651753324ff8441b4718344ffd7f7559e2a92d330b99b88926dff2f03f9d4c04fd3565db4139309ee885e7a0c9b1ace912a320024e701f54a23108', '2014-09-22 16:40:32', 'shahzeb.imtiaz', 0),
(13, 'waleed.satti@vitorials.net', 'mr.pak-army', 'User', 'No', NULL, '2d108fc9b8592da3f9581377f25ddc04e1934345aedc5dfc039ea33d57b455ff567207d1bf1d733f2354039cbbfb048b1ac2b3cfc68389e59a6b67cda72d5b22', '2014-09-22 16:41:38', 'waleed.satti', 0),
(16, 'imran.khan@vitorials.net', 'imran.khan', 'User', 'No', NULL, '', '2014-10-26 05:43:29', 'Imran Khan', 0),
(17, 'zeeshan.bin.iqbal@vitorials.net', 'zeeshan', 'User', 'No', NULL, '', '2014-10-26 05:45:00', 'Zeeshan Iqbal', 0),
(18, 'zia@vitorials.net', 'zia123', 'User', 'No', NULL, '', '2014-10-26 05:45:32', 'Zia Ur Rehman', 0),
(19, 'moez335@vitorials.net', 'moez123', 'User', 'No', NULL, '', '2014-10-26 05:46:27', 'Moez Isar', 0),
(20, 'nasrullah.inayat.chudhary.butt@vitorials.net', 'biker_boy91', 'User', 'No', NULL, '', '2014-10-26 05:47:14', 'Nasrullah Inayat', 0),
(21, 'umer@hotmail.com', 'umer123', 'User', 'No', NULL, '', '2014-10-26 05:47:50', 'Muhammad Umer', 0),
(22, 'abdullah@yahoo.com', 'Pakistan@99', 'User', 'No', NULL, '', '2014-10-26 05:48:28', 'Abdullah Abbasi', 0),
(23, 'ahsan.kayani@live.com', 'Ahsan', 'User', 'No', NULL, '', '2014-10-26 05:48:45', 'Ahsan Naseem', 0),
(24, 'sabahat@yahoo.com', 'sabahat', 'User', 'No', NULL, '', '2014-10-26 05:50:36', 'Sabahat Afzal', 0),
(25, 'bilu@microsoft.com', 'bilu-bhai', 'User', 'No', NULL, '', '2014-10-26 05:51:13', 'Bilal Sipra', 0),
(26, 'behzad@gmail.com', 'behzad', 'User', 'No', NULL, '', '2014-10-26 05:51:50', 'Behzad Rajgan', 0),
(27, 'thegreatkhali@wwe.com', 'wwe123', 'User', 'No', NULL, '', '2014-10-26 05:52:15', 'Waqas Khalli', 0),
(28, 'xaibi@facebook.com', 'zohaib', 'User', 'No', NULL, '', '2014-10-26 05:52:37', 'Zohaib Abbas', 0),
(29, 'ali.ahmad@riphah.edu.pk', 'ali.riphah', 'User', 'No', NULL, '', '2014-10-26 05:53:05', 'Ali Ahmad', 0),
(30, 'saqi@yahoo.com', 'Saqi1', 'User', 'No', NULL, '', '2014-10-26 05:53:23', 'Saqlain Mushtaq', 0),
(31, 'altaf.bhai@mqm.com', 'altaf', 'User', 'No', NULL, '', '2014-10-26 05:54:22', 'Kashir Altaf', 0),
(32, 'khan-is-great@gmail.com', 'khanjee', 'User', 'No', NULL, '', '2014-10-26 05:54:45', 'Bilal Khan', 0),
(33, 'wasi.wasi@yaho.com', 'wasii', 'User', 'No', NULL, '', '2014-10-26 05:55:04', 'Wasif Wasif', 0),
(34, 'max555@gmail.com', 'max555', 'User', 'No', NULL, '', '2014-10-26 05:55:27', 'Shaun Max', 0),
(35, 'paul.alen@as.us', 'american', 'User', 'No', NULL, '', '2014-10-26 05:55:55', 'Paul Alen', 0),
(36, 'chris@hollywood.com', 'Batman', 'User', 'No', NULL, '', '2014-10-26 05:56:14', 'Christian Bale', 0),
(37, 'eddy@x.com', 'american.history', 'User', 'No', NULL, '', '2014-10-26 05:56:44', 'Edward Norton', 0),
(38, 'turing@computing.com', 'father', 'User', 'No', NULL, '', '2014-10-26 05:57:38', 'Alan Turing', 0),
(39, 'maryam_ilyas@yahoo.com', 'yahoo.', 'User', 'No', NULL, '', '2014-10-26 05:58:10', 'Maryam Ilyas', 0),
(40, 'freeman@morganfoundation.org', 'oldblackguy', 'User', 'No', NULL, '', '2014-10-26 05:59:33', 'Morgan Freeman', 0),
(41, 'ali.akbar@gmail.com', 'ali333', 'User', 'No', NULL, '', '2014-10-26 06:00:37', 'Ali Akbar', 0),
(42, 'freedomfighter@yahoo.com', 'freekashmir', 'User', 'No', NULL, '', '2014-10-26 06:01:13', 'Ali Shughal', 0),
(43, 'robert@hollywood.com', 'roberto', 'User', 'No', NULL, '', '2014-10-26 06:01:59', 'Robert Downey Jr.', 0),
(44, 'saud.khan@riu.edu.pk', 'saud.khan', 'User', 'No', NULL, '', '2014-10-28 10:15:09', 'Saud Khan', 0),
(55, 'admins@vitorials.net', 'admins@vitorials.net', 'User', 'No', NULL, '', '2014-11-05 17:18:53', 'AToZ Bukhari', 0),
(59, 'jimmy@yahoo.com', '''success'' => $success', 'User', 'No', NULL, '', '2014-11-07 14:41:38', 'jimmy anderson', 0),
(60, 'mush@army.com', '$this->load->view(''templa tes/header'');         $this->load->view(''wizards/pref-set'');         $this->load->view(''templates/footer'');', 'User', 'No', NULL, '', '2014-11-07 14:43:33', 'Gen Mushi', 0),
(61, 'mir.shakil@geo.tv', 'mir.shakil@geo.tv', 'User', 'No', NULL, '', '2014-11-07 14:45:40', 'Mir Shakil', 0),
(62, 'abdul@yahoo.com', 'abdul@sdfj', 'User', 'No', NULL, '', '2014-11-08 10:44:46', 'abdul qadir', 0),
(63, 'abdul.qadir@yahoo.com', 'abdul@sdfj', 'User', 'No', NULL, '', '2014-11-08 10:44:58', 'abdul qadir', 0);
--
-- Database: `vitorial_vitorials`
--
CREATE DATABASE IF NOT EXISTS `vitorial_vitorials` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vitorial_vitorials`;

-- --------------------------------------------------------

--
-- Table structure for table `course_enrollment`
--

CREATE TABLE IF NOT EXISTS `course_enrollment` (
  `enrol_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `enrol_date` date NOT NULL,
  `enrol_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('in-progress','cancelled','completed') NOT NULL,
  `progress` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`enrol_id`),
  KEY `enrol_time` (`enrol_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(40) NOT NULL,
  `short_name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `status` enum('yes','no') NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `full_name`, `short_name`, `category`, `status`, `description`) VALUES
(1, '', '', '0', '', ''),
(2, '', '', '0', '', ''),
(3, 'testLong', 'test', '0', '', 'hitest'),
(4, 'New course', 'short desc', '2', 'no', 'adfaafs'),
(5, 'asdfasdf', 'asdfsdafdsaf', '3', 'yes', 'asdfasfdsafd'),
(6, 'asdfasdf', 'asdfsdafdsaf', '3', 'yes', 'asdfasfdsafd'),
(7, 'asdf', 'adsf', '2', 'yes', 'asdf'),
(8, 'test', 'testtest', '4', 'yes', 'testtesttest\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('Admin','User') NOT NULL DEFAULT 'User',
  `active` enum('Yes','No') NOT NULL DEFAULT 'No',
  `last_login` timestamp NULL DEFAULT NULL,
  `hash` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(255) NOT NULL,
  `logged_in` int(1) NOT NULL DEFAULT '0' COMMENT '0 - No, 1 - Yes',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `type`, `active`, `last_login`, `hash`, `register_date`, `username`, `logged_in`) VALUES
(1, 'admin@vitorials.net', 'd27a7094541607a1cafecb8d880f1626c3766255caaa21e22a130ddcc1cbfef9a305c92f219fcc3a3168fb7dc80fbd2d2b51e2349f21fe1124765c007db7d1c5', 'Admin', 'Yes', '2014-09-16 15:12:37', '', '0000-00-00 00:00:00', 'AdminKhan', 0),
(3, 'asdf', '185726ce1c32e96c6c53ce943c5f5c8ed886edc0ea8dc59b3f7abbe6f3b0898d62367214a35e0c19e59184ebb54b507094978374e81941993f03494916969e55', 'User', 'No', NULL, '53a7aa0fc86f7a9b176180ce8aed59f2ce736b5696c106ae2b460539bbb4dec0', '0000-00-00 00:00:00', 'AsdfKhan', 0),
(4, 'johndoe@mailinator.com', 'a8f71a9ef036c7348fb53e30f941f407029797ff0c2ad5d9c0f1c36df26d2da424f88cba5e845a4024c4b3b67c524cfe81ce65c503719a1b19edad5e51cb77c8', 'User', 'Yes', '2014-09-17 19:54:16', '5e4427cdc2aad36871a458858172692d8b903743c511c0c71fbb2bd31ade5267', '0000-00-00 00:00:00', 'JohnDoe20140917155315', 1),
(5, 'ishaq_zafar@yahoo.com', '6716f50263e6c501e34ec3a8988c37337905fad1e776523b09da6ca9341becccc94079bb1e504d102f4436c840a0fefdc4243f4d6f9b8e02bdb56017270704b5', 'User', 'Yes', '2014-09-18 05:05:02', '3cf74010559b1e833b952ba22faa934aa313a66eb3b1df01048a75f85ab0fcab', '0000-00-00 00:00:00', 'IshaqZafar20140918010356', 1),
(6, 'ishaqzafar@gmail.com', '6716f50263e6c501e34ec3a8988c37337905fad1e776523b09da6ca9341becccc94079bb1e504d102f4436c840a0fefdc4243f4d6f9b8e02bdb56017270704b5', 'User', 'Yes', '2014-09-18 09:43:30', '8ad8c472ba7bdced3d871d3f4b09d97824c6e4f6c9233952c6f9d3ad873a224e', '0000-00-00 00:00:00', 'IshaqZafar B20140918054241', 1),
(7, 'dummy@mailinator.com', '61943a6271b506c22c0a14df168a88ab3bf2178773259c74785d80ca0f75d15dfc6c0edf42ff84774b7c009b9c7abfcc42add545ba685bfaa142f1b1ab273078', 'User', 'Yes', '2014-09-21 08:20:40', '6e1bfbe1a96758036789bbac39bf9a5aa0d431d07b878aef735844c83d834929', '0000-00-00 00:00:00', 'ABVDEF20140921041930', 1),
(11, 'asfdaf@def.comvv', '685ad82db88a9561b3d373a792a6aa6a2a7c0bc4094ff032f509244c5dd523ec2e2fbe596ce178594ac0363c42a8a4cd88b6c9ac337107a9e07b3e316b8e91e0', 'User', 'No', NULL, '685ad82db88a9561b3d373a792a6aa6a2a7c0bc4094ff032f509244c5dd523ec2e2fbe596ce178594ac0363c42a8a4cd88b6c9ac337107a9e07b3e316b8e91e0', '2014-09-22 16:18:45', 'addfdf', 0),
(12, 'dummy2@mailinator.com', '5d6c48cd6d651753324ff8441b4718344ffd7f7559e2a92d330b99b88926dff2f03f9d4c04fd3565db4139309ee885e7a0c9b1ace912a320024e701f54a23108', 'User', 'No', NULL, '5d6c48cd6d651753324ff8441b4718344ffd7f7559e2a92d330b99b88926dff2f03f9d4c04fd3565db4139309ee885e7a0c9b1ace912a320024e701f54a23108', '2014-09-22 16:40:32', 'ikramshah', 0),
(13, 'dummy23@mailinator.com', '2d108fc9b8592da3f9581377f25ddc04e1934345aedc5dfc039ea33d57b455ff567207d1bf1d733f2354039cbbfb048b1ac2b3cfc68389e59a6b67cda72d5b22', 'User', 'No', NULL, '2d108fc9b8592da3f9581377f25ddc04e1934345aedc5dfc039ea33d57b455ff567207d1bf1d733f2354039cbbfb048b1ac2b3cfc68389e59a6b67cda72d5b22', '2014-09-22 16:41:38', 'ikramshah2', 0),
(14, 'shah@yahoo.com', '1ea7769b703ffa353bfdee23af8bf41799f304a5eb89ef128021f19fe84206c3797f459e9ac53e8683b89899c39f17cc8fdc62b1844c9152320b18c337349855', 'User', 'No', NULL, '1ea7769b703ffa353bfdee23af8bf41799f304a5eb89ef128021f19fe84206c3797f459e9ac53e8683b89899c39f17cc8fdc62b1844c9152320b18c337349855', '2014-10-02 17:31:09', 'shah123', 0);
--
-- Database: `webauth`
--
CREATE DATABASE IF NOT EXISTS `webauth` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `webauth`;

-- --------------------------------------------------------

--
-- Table structure for table `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
