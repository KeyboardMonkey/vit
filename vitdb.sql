-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2014 at 09:49 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vitdb`
--
CREATE DATABASE IF NOT EXISTS `vitdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vitdb`;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `tiny_intro` varchar(255) NOT NULL,
  `course_thumbnail` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `difficulty_level` enum('Beginner','Intermediate','Advanced') NOT NULL,
  `status` enum('yes','no') NOT NULL,
  `description` text NOT NULL,
  `points` int(20) NOT NULL DEFAULT '0',
  `developed_by` varchar(255) DEFAULT NULL,
  `learning_outcome` text,
  `target_audience` text,
  `section_title` varchar(255) DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `video_file` varchar(255) DEFAULT NULL,
  `srt` varchar(255) DEFAULT NULL,
  `full_course_files_zip` varchar(255) DEFAULT NULL,
  `additional_file_title` varchar(255) DEFAULT NULL,
  `additional_file` varchar(255) DEFAULT NULL,
  `is_new` enum('yes','no') DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `full_name`, `tiny_intro`, `course_thumbnail`, `category`, `difficulty_level`, `status`, `description`, `points`, `developed_by`, `learning_outcome`, `target_audience`, `section_title`, `video_title`, `video_file`, `srt`, `full_course_files_zip`, `additional_file_title`, `additional_file`, `is_new`, `created_date`, `updated_date`) VALUES
(1, 'Build an Interactive Website', 'Build an Interactive Website', NULL, '6', 'Beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 10, 'Lynda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(2, 'Introduction to Programming', 'Introduction to Programming', NULL, '6', 'Beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 20, 'Tree House', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(3, 'How to Write a Business Plan', 'How to Write a Business Plan', NULL, '12', 'Beginner', 'yes', 'hitestLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 30, 'New Boston', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(4, 'PHP & Stripe API', 'PHP & Stripe API', NULL, '2', 'Beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 200, 'Lynda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(5, 'Using PHP with MySQL', 'Using PHP with MySQL', NULL, '2', 'Beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 1000, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(6, 'WordPress Admin Settings', 'WordPress Admin Settings', NULL, '10', 'Beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 5000, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(7, 'Git Basics', 'Git Basics', NULL, '11', 'Beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 500, 'Alison', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(8, 'SEO Basics', 'SEO Basics', NULL, '14', 'Beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 55, 'Coursera', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(9, 'CSS Foundations', 'CSS Foundations', NULL, '8', 'Intermediate', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(10, 'How to make a Favicon', 'How to make a Favicon', NULL, '13', 'Intermediate', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Learnable', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(11, 'Soft Skills', 'Soft Skills', NULL, '12', 'Beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(12, 'Angular Js', 'Starting With Angula', NULL, '6', 'Beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Lynda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:50:40', '2014-10-26 16:50:40'),
(13, 'Object-Oriented PHP Basics', 'Object-Oriented PHP Basics', NULL, '2', 'Beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'TTH', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-28 10:10:32', '2014-10-28 10:10:32'),
(14, 'Course XYZ', 'XYZ', NULL, '7', 'Beginner', 'no', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'TTH', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-28 10:11:40', '2014-10-28 10:11:40'),
(15, 'asfsadfasdfasdf', 'asdfasdfdsafsadf', NULL, '1', '', 'yes', 'afsadfsdafasdfsd', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-11-09 16:36:11', '2014-11-09 16:36:11'),
(16, 'asfsadfasdfasdf', 'asdfasdfdsafsadf', NULL, '1', '', 'yes', 'afsadfsdafasdfsd', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-11-09 16:39:00', '2014-11-09 16:39:00'),
(17, 'asfsadfasdfasdf', 'asdfasdfdsafsadf', NULL, '1', '', 'yes', 'afsadfsdafasdfsd', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-11-09 16:39:20', '2014-11-09 16:39:20'),
(18, 'Hola', 'hello hello hello hello', NULL, '3', 'Advanced', 'yes', 'madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka madafaka ', 100, NULL, NULL, NULL, '', '', '0', '0', '0', '', '0', NULL, '2014-11-11 13:53:56', '2014-11-11 13:53:56'),
(19, 'Booo', 'asfsd', NULL, '5', 'Advanced', 'yes', 'asdfsdafsadfasd', 100, NULL, NULL, NULL, 'asdfasdf', 'asdfasdfsadfas', '0', '0', '0', 'asdfasdf', '0', NULL, '2014-11-11 19:17:03', '2014-11-11 19:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE IF NOT EXISTS `course_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `color_tag` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course_enrollment`
--

INSERT INTO `course_enrollment` (`enrol_id`, `course_id`, `user_id`, `enrol_time`, `status`, `progress`) VALUES
(1, 1, 6, '2014-11-14 17:05:10', 'in-progress', 0),
(2, 1, 13, '2014-11-14 18:22:25', 'in-progress', 0),
(3, 2, 6, '2014-11-14 19:11:50', 'in-progress', 0),
(4, 4, 6, '2014-11-14 20:45:13', 'in-progress', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `course_rating`
--

INSERT INTO `course_rating` (`rating_id`, `course_id`, `user_id`, `rating`) VALUES
(2, 5, 3, 5),
(3, 5, 3, 0),
(4, 5, 3, 5),
(5, 12, 44, 5),
(6, 4, 6, 5),
(7, 4, 1, 5),
(8, 1, 6, 5),
(9, 6, 6, 5),
(10, 2, 6, 5),
(11, 5, 67, 5),
(12, 1, 13, 5);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `file_orig_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `file_path` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `course_id`, `file_name`, `file_orig_name`, `file_path`, `upload_date`) VALUES
(4, 0, '9e592f548e42bd99ce860ad18f24e117.srt', 'jQuery_Basics_Overview.srt', 'A:/xampp/htdocs/vit/upload/9e592f548e42bd99ce860ad18f24e117.srt', '2014-11-11 15:05:48'),
(5, 0, '771ffc870e5d80a90ac22f8f0bca0921.mp4', 'jQuery_Documentation_-_What_does_it_mean-.mp4', 'A:/xampp/htdocs/vit/upload/771ffc870e5d80a90ac22f8f0bca0921.mp4', '2014-11-11 15:05:48'),
(6, 0, '7a01485a5fa1126e35febcb49aff14a7.srt', 'jQuery_Documentation_-_What_does_it_mean-.srt', 'A:/xampp/htdocs/vit/upload/7a01485a5fa1126e35febcb49aff14a7.srt', '2014-11-11 15:05:48'),
(7, 0, '36ac1400183eeeaac9bb88d1e634676b.mp4', 'TH-jQuery-Basics-S1-V1-720.mp4', 'A:/xampp/htdocs/vit/upload/36ac1400183eeeaac9bb88d1e634676b.mp4', '2014-11-11 15:05:48'),
(8, 0, '89b66f4a6f3aa8086c240f0a8fbcc34b.mp4', 'Ways_to_Include_jQuery_in_a_Project.mp4', 'A:/xampp/htdocs/vit/upload/89b66f4a6f3aa8086c240f0a8fbcc34b.mp4', '2014-11-11 15:05:48'),
(9, 0, 'db1351196f6bc92c8e9454ef03289708.mp4', 'What_is_jQuery-.mp4', 'A:/xampp/htdocs/vit/upload/db1351196f6bc92c8e9454ef03289708.mp4', '2014-11-11 15:05:48'),
(10, 0, '7a17ebeb1fa6f5e3341965232beeeb75.mp4', 'What_is_the_DOM-.mp4', 'A:/xampp/htdocs/vit/upload/7a17ebeb1fa6f5e3341965232beeeb75.mp4', '2014-11-11 15:05:48'),
(11, 0, 'e7ee378194f133530c5fdfdd91466a1f.srt', 'jQuery_Basics_Overview.srt', 'A:/xampp/htdocs/vit/upload/e7ee378194f133530c5fdfdd91466a1f.srt', '2014-11-11 15:06:44'),
(12, 0, '36d7ac6e49f8e6b60e6afead71b87ee2.mp4', 'jQuery_Documentation_-_What_does_it_mean-.mp4', 'A:/xampp/htdocs/vit/upload/36d7ac6e49f8e6b60e6afead71b87ee2.mp4', '2014-11-11 15:06:44'),
(13, 1, '32343f6dc780aed24bece469f31a5cfd.mp4', 'What_is_jQuery-.mp4', 'A:/xampp/htdocs/vit/upload/32343f6dc780aed24bece469f31a5cfd.mp4', '2014-11-11 15:06:44'),
(14, 1, 'ecbeb817c1b611efaf4d34d17926ab88.mp4', 'Adding_a_Contact_Form__Checking_the.mp4', 'A:/xampp/htdocs/vit/upload/ecbeb817c1b611efaf4d34d17926ab88.mp4', '2014-11-13 10:45:15'),
(15, 1, '88546d0ac809a27502ec6744d3a3f5f0.mp4', 'Adding_a_Contact_Form__Creating_Inpu.mp4', 'A:/xampp/htdocs/vit/upload/88546d0ac809a27502ec6744d3a3f5f0.mp4', '2014-11-13 10:45:15'),
(16, 1, 'a65ec4aa07f7de7dbbce5d4c760acc87.mp4', 'Adding_a_Contact_Form__Redirecting_A.mp4', 'A:/xampp/htdocs/vit/upload/a65ec4aa07f7de7dbbce5d4c760acc87.mp4', '2014-11-13 10:45:15'),
(17, 1, 'cf911163f92fad2b37b85f49f5e17d97.mp4', 'Adding_a_Contact_Form__Working_with_1.mp4', 'A:/xampp/htdocs/vit/upload/cf911163f92fad2b37b85f49f5e17d97.mp4', '2014-11-13 10:45:15'),
(18, 1, '48d88e2b6c8c3558712982f8e159d177.mp4', 'Adding_a_Contact_Form__Working_with_2.mp4', 'A:/xampp/htdocs/vit/upload/48d88e2b6c8c3558712982f8e159d177.mp4', '2014-11-13 10:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE IF NOT EXISTS `lectures` (
  `lect_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `vid_title` varchar(255) DEFAULT NULL,
  `vid_path` varchar(255) DEFAULT NULL,
  `srt_path` varchar(255) DEFAULT NULL,
  `progress` int(20) DEFAULT NULL,
  `lect_progress_points` int(20) DEFAULT NULL,
  `additional_file_title` varchar(255) DEFAULT NULL,
  `additional_file_path` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_completed` enum('yes','no') DEFAULT NULL,
  PRIMARY KEY (`lect_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`lect_id`, `course_id`, `vid_title`, `vid_path`, `srt_path`, `progress`, `lect_progress_points`, `additional_file_title`, `additional_file_path`, `created_date`, `updated_date`, `is_completed`) VALUES
(2, 1, 'Adding a Contact Form', 'upload/ecbeb817c1b611efaf4d34d17926ab88.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:25:56', '2014-11-13 10:25:56', NULL),
(3, 1, 'Creating Input', 'upload/88546d0ac809a27502ec6744d3a3f5f0.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:26:46', '2014-11-13 10:26:46', NULL),
(4, 1, 'Checking and Redirecting', 'upload/a65ec4aa07f7de7dbbce5d4c760acc87.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:33:35', '2014-11-13 10:33:35', NULL),
(5, 1, 'Validations', 'upload/cf911163f92fad2b37b85f49f5e17d97.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:34:11', '2014-11-13 10:34:11', NULL),
(6, 1, 'Working with GitHub', 'upload/48d88e2b6c8c3558712982f8e159d177.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:34:47', '2014-11-13 10:34:47', NULL),
(7, 2, 'Creating Input', 'upload/88546d0ac809a27502ec6744d3a3f5f0.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:26:46', '2014-11-13 10:26:46', NULL),
(8, 2, 'Checking and Redirecting', 'upload/a65ec4aa07f7de7dbbce5d4c760acc87.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:33:35', '2014-11-13 10:33:35', NULL),
(9, 2, 'Validations', 'upload/cf911163f92fad2b37b85f49f5e17d97.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:34:11', '2014-11-13 10:34:11', NULL),
(10, 2, 'Working with GitHub', 'upload/48d88e2b6c8c3558712982f8e159d177.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:34:47', '2014-11-13 10:34:47', NULL),
(11, 3, 'Creating Input', 'upload/88546d0ac809a27502ec6744d3a3f5f0.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:26:46', '2014-11-13 10:26:46', NULL),
(12, 3, 'Checking and Redirecting', 'upload/a65ec4aa07f7de7dbbce5d4c760acc87.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:33:35', '2014-11-13 10:33:35', NULL),
(13, 3, 'Validations', 'upload/cf911163f92fad2b37b85f49f5e17d97.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:34:11', '2014-11-13 10:34:11', NULL),
(14, 3, 'Working with GitHub', 'upload/48d88e2b6c8c3558712982f8e159d177.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:34:47', '2014-11-13 10:34:47', NULL),
(15, 4, 'Creating Input', 'upload/88546d0ac809a27502ec6744d3a3f5f0.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:26:46', '2014-11-13 10:26:46', NULL),
(16, 4, 'Checking and Redirecting', 'upload/a65ec4aa07f7de7dbbce5d4c760acc87.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:33:35', '2014-11-13 10:33:35', NULL),
(17, 4, 'Validations', 'upload/cf911163f92fad2b37b85f49f5e17d97.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:34:11', '2014-11-13 10:34:11', NULL),
(18, 4, 'Working with GitHub', 'upload/48d88e2b6c8c3558712982f8e159d177.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:34:47', '2014-11-13 10:34:47', NULL),
(19, 5, 'Creating Input', 'upload/88546d0ac809a27502ec6744d3a3f5f0.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:26:46', '2014-11-13 10:26:46', NULL),
(20, 5, 'Checking and Redirecting', 'upload/a65ec4aa07f7de7dbbce5d4c760acc87.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:33:35', '2014-11-13 10:33:35', NULL),
(21, 5, 'Validations', 'upload/cf911163f92fad2b37b85f49f5e17d97.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:34:11', '2014-11-13 10:34:11', NULL),
(22, 5, 'Working with GitHub', 'upload/48d88e2b6c8c3558712982f8e159d177.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:34:47', '2014-11-13 10:34:47', NULL),
(23, 2, 'Adding a Contact Form', 'upload/ecbeb817c1b611efaf4d34d17926ab88.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:25:56', '2014-11-13 10:25:56', NULL),
(24, 3, 'Adding a Contact Form', 'upload/ecbeb817c1b611efaf4d34d17926ab88.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:25:56', '2014-11-13 10:25:56', NULL),
(25, 4, 'Adding a Contact Form', 'upload/ecbeb817c1b611efaf4d34d17926ab88.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:25:56', '2014-11-13 10:25:56', NULL),
(26, 1, 'Adding a Contact Form', 'upload/ecbeb817c1b611efaf4d34d17926ab88.mp4', NULL, NULL, NULL, NULL, NULL, '2014-11-13 10:25:56', '2014-11-13 10:25:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `quiz_title` varchar(255) NOT NULL,
  `quiz_progress_points` int(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `course_id`, `quiz_title`, `quiz_progress_points`, `created_date`, `updated_date`) VALUES
(1, 0, 'hgjhghjhj', NULL, '2014-11-11 15:54:50', '2014-11-11 15:54:50'),
(2, 0, 'bcvxbxcvb', NULL, '2014-11-11 15:56:54', '2014-11-11 15:56:54'),
(3, 0, 'Common Sense API', 20, '2014-11-11 17:00:58', '2014-11-11 17:00:58'),
(4, 0, '&lt;?php echo Common Sense API; ?&gt;', 20, '2014-11-11 17:02:03', '2014-11-11 17:02:03'),
(5, 0, 'Special Sense API', 20, '2014-11-11 17:08:14', '2014-11-11 17:08:14'),
(6, 0, 'Special Sense API', 20, '2014-11-11 17:09:15', '2014-11-11 17:09:15'),
(7, 0, 'xvxcxvvvvvxvx', 20, '2014-11-11 17:22:34', '2014-11-11 17:22:34'),
(8, 0, '8', 20, '2014-11-11 17:25:29', '2014-11-11 17:25:29'),
(9, 0, '9', 20, '2014-11-11 17:29:03', '2014-11-11 17:29:03'),
(10, 0, 'Consipiracy Quiz', 20, '2014-11-11 17:33:09', '2014-11-11 17:33:09'),
(11, 0, 'Pakistan Quiz', 20, '2014-11-11 17:43:43', '2014-11-11 17:43:43'),
(12, 0, 'Pakistan Quiz', 20, '2014-11-11 17:47:17', '2014-11-11 17:47:17'),
(13, 0, 'LOL Quiz', 20, '2014-11-11 17:48:03', '2014-11-11 17:48:03'),
(14, 0, 'LOL Quiz', 20, '2014-11-11 17:50:02', '2014-11-11 17:50:02'),
(15, 0, 'Fake Quiz', 20, '2014-11-11 17:51:35', '2014-11-11 17:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE IF NOT EXISTS `quiz_questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_id` int(11) NOT NULL,
  `question_text` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`question_id`, `quiz_id`, `question_text`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `created_date`, `updated_date`) VALUES
(1, 0, 'The Question field is required.', '0', '0', '0', '0', '0', '2014-11-11 15:40:37', '2014-11-11 15:40:37'),
(2, 0, 'asdfasdf', '0', '0', '0', '0', '0', '2014-11-11 15:43:01', '2014-11-11 15:43:01'),
(3, 0, 'jfgjfghj', '0', '0', '0', '0', '0', '2014-11-11 15:54:50', '2014-11-11 15:54:50'),
(4, 0, 'xbvbxvcb', 'xcvbxvc', 'bxcvbxcvb', 'xvcbxc', 'bxvcbxcvb', '0', '2014-11-11 15:56:54', '2014-11-11 15:56:54'),
(5, 0, 'What comes after zero?', 'one', 'two ', 'three', 'four', 'option1', '2014-11-11 17:00:59', '2014-11-11 17:00:59'),
(6, 0, 'What comes after Earth?', 'venus', 'earth', 'mars', 'jupiter', 'option3', '2014-11-11 17:02:03', '2014-11-11 17:02:03'),
(7, 0, 'What came first?', 'Egg', 'Chicken', 'Kukkar', 'Aanda', 'option2', '2014-11-11 17:08:14', '2014-11-11 17:08:14'),
(8, 0, 'What are you?', 'A dog', 'A man', 'A crow', 'A cat', 'option4', '2014-11-11 17:09:15', '2014-11-11 17:09:15'),
(9, 0, 'dfdgfdgfgdf', 'gdfgdf', 'gdfgdfg', 'dfgfdgfd', 'gff', 'option2', '2014-11-11 17:22:34', '2014-11-11 17:22:34'),
(10, 0, 'fadsasdfsdaf', 'asdfasdfasdfa', 'fgsdfasdf', 'asdfasdfasd', 'fasdfdsaf', 'option2', '2014-11-11 17:25:29', '2014-11-11 17:25:29'),
(11, 0, 'asdfasdfa', 'sdfasdf', 'asdfasdfasd', 'asdfasdfasdf', 'asdfsdaf', 'option2', '2014-11-11 17:25:48', '2014-11-11 17:25:48'),
(12, 0, 'HTML stands for?', 'Hathi', 'Hyper text terminal protocol', 'Hoohaaa', 'Hola', 'option2', '2014-11-11 17:29:04', '2014-11-11 17:29:04'),
(13, 0, 'Who made the HTML?', 'Steve Jobs', 'Tim B. Lee', 'Bill Gates', 'You', 'option2', '2014-11-11 17:29:41', '2014-11-11 17:29:41'),
(14, 0, 'Is Osama real?', 'yes', 'no', 'pata nahi', 'no comments', 'option1', '2014-11-11 17:33:09', '2014-11-11 17:33:09'),
(15, 0, 'Where is George W Bush?', 'At home', 'Library', 'Underground Bunker', 'Afghanistan', 'option3', '2014-11-11 17:33:54', '2014-11-11 17:33:54'),
(16, 0, 'Who is Zaid Hamid?', 'ISI Agent', 'Douchbag', 'RAW Agent', 'Musad Agent', 'option2', '2014-11-11 17:35:00', '2014-11-11 17:35:00'),
(17, 0, 'Who killed BB?', 'Me', 'You', 'Zardari', 'Mush', 'option3', '2014-11-11 17:36:29', '2014-11-11 17:36:29'),
(18, 0, 'Is ISIS real?', 'LOL', 'CIA created em', 'Yes', 'No way', 'option2', '2014-11-11 17:38:59', '2014-11-11 17:38:59'),
(19, 15, 'Is Batman real?', 'aho', 'nai pata', 'lol', 'haan na bhai', 'option4', '2014-11-11 17:51:35', '2014-11-11 17:51:35'),
(20, 15, 'Does Altaf bhai loves peace?', 'sure', 'lol', 'why not', 'most', 'option2', '2014-11-11 17:52:15', '2014-11-11 17:52:15'),
(21, 15, 'Is IK pagal?', 'yeah ', 'sure is ', 'no ', 'to or kya', 'option4', '2014-11-11 17:52:43', '2014-11-11 17:52:43'),
(22, 15, 'Who made Apple?', 'newton', 'steve jobs', 'einstine', 'billy', 'option1', '2014-11-11 17:53:13', '2014-11-11 17:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE IF NOT EXISTS `tracks` (
  `track_id` int(11) NOT NULL AUTO_INCREMENT,
  `track_title` varchar(255) NOT NULL,
  `tiny_intro` varchar(255) NOT NULL,
  `track_description` text NOT NULL,
  `status` enum('yes','no') NOT NULL,
  `track_points` int(10) NOT NULL,
  `track_progress` int(20) NOT NULL,
  `difficulty_level` enum('beginner','intermediate','advanced') NOT NULL,
  `is_new` enum('yes','no') DEFAULT NULL,
  `additional_file_title` varchar(255) DEFAULT NULL,
  `additional_file` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`track_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `track_rating`
--

CREATE TABLE IF NOT EXISTS `track_rating` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

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
(13, 'waleed.satti@vitorials.net', 'waleed.satti', 'User', 'No', NULL, '2d108fc9b8592da3f9581377f25ddc04e1934345aedc5dfc039ea33d57b455ff567207d1bf1d733f2354039cbbfb048b1ac2b3cfc68389e59a6b67cda72d5b22', '2014-09-22 16:41:38', 'waleed.satti', 0),
(16, 'imran.khan@vitorials.net', 'imran.khan', 'User', 'No', NULL, '', '2014-10-26 05:43:29', 'Imran Khan', 0),
(17, 'zeeshan.bin.iqbal@vitorials.net', 'zeeshan', 'User', 'No', NULL, '', '2014-10-26 05:45:00', 'Zeeshan Iqbal', 0),
(18, 'zia@vitorials.net', 'zia123', 'User', 'No', NULL, '', '2014-10-26 05:45:32', 'Zia Ur Rehman', 0),
(19, 'moez335@vitorials.net', 'moez123', 'User', 'No', NULL, '', '2014-10-26 05:46:27', 'Moez Isar', 0),
(20, 'nasrullah.inayat.chudhary.butt@vitorials.net', 'biker_boy91', 'User', 'No', NULL, '', '2014-10-26 05:47:14', 'Nasrullah Inayat', 0),
(21, 'umer@hotmail.com', 'umer123', 'User', 'No', NULL, '', '2014-10-26 05:47:50', 'Muhammad Umer', 0),
(22, 'abdullah@yahoo.com', 'abdullah@yahoo.com', 'User', 'No', NULL, '', '2014-10-26 05:48:28', 'Abdullah Abbasi', 0),
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
(63, 'abdul.qadir@yahoo.com', 'abdul@sdfj', 'User', 'No', NULL, '', '2014-11-08 10:44:58', 'abdul qadir', 0),
(64, 'afridi@sixer.com', 'afridi@sixer.com', 'User', 'No', NULL, '', '2014-11-10 09:14:26', 'Shahid Afridi', 0),
(65, 'inzi@captain.com', 'inzi@captain.com', 'User', 'No', NULL, '', '2014-11-10 09:16:55', 'Inzi Bhai', 0),
(66, 'satti@yahoo.com', 'satti@yahoo.com', 'User', 'No', NULL, '', '2014-11-13 06:24:22', 'Waleed Ahmad', 0),
(67, 'ahmad@yahoo.com', 'ahmad@yahoo.com', 'User', 'No', NULL, '', '2014-11-14 07:23:44', 'Ahmad Mukhtar', 0),
(68, 'shaun@yahoo.com', 'shaun@yahoo.com', 'User', 'No', NULL, '', '2014-11-14 10:37:48', 'Shaun Tait', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_interest_categories`
--

CREATE TABLE IF NOT EXISTS `user_interest_categories` (
  `id` int(19) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `interest_level` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=206 ;

--
-- Dumping data for table `user_interest_categories`
--

INSERT INTO `user_interest_categories` (`id`, `user_id`, `cat_id`, `interest_level`) VALUES
(80, 1, 1, 2),
(81, 1, 2, 0),
(82, 1, 3, 2),
(83, 1, 4, 2),
(84, 1, 5, 2),
(85, 1, 6, 2),
(86, 1, 7, 2),
(87, 1, 8, 2),
(88, 1, 9, 2),
(89, 1, 10, 2),
(90, 1, 11, 2),
(91, 1, 12, 2),
(92, 1, 13, 2),
(93, 1, 14, 2),
(94, 64, 1, 0),
(95, 64, 2, 2),
(96, 64, 3, 0),
(97, 64, 4, 0),
(98, 64, 5, 0),
(99, 64, 6, 2),
(100, 64, 7, 0),
(101, 64, 8, 0),
(102, 64, 9, 0),
(103, 64, 10, 0),
(104, 64, 11, 2),
(105, 64, 12, 0),
(106, 64, 13, 0),
(107, 64, 14, 0),
(108, 65, 1, 0),
(109, 65, 2, 2),
(110, 65, 3, 1),
(111, 65, 4, 0),
(112, 65, 5, 0),
(113, 65, 6, 2),
(114, 65, 7, 0),
(115, 65, 8, 0),
(116, 65, 9, 0),
(117, 65, 10, 0),
(118, 65, 11, 2),
(119, 65, 12, 0),
(120, 65, 13, 0),
(121, 65, 14, 0),
(122, 66, 1, 2),
(123, 66, 2, 2),
(124, 66, 3, 0),
(125, 66, 4, 0),
(126, 66, 5, 0),
(127, 66, 6, 0),
(128, 66, 7, 0),
(129, 66, 8, 0),
(130, 66, 9, 0),
(131, 66, 10, 0),
(132, 66, 11, 0),
(133, 66, 12, 0),
(134, 66, 13, 0),
(135, 66, 14, 0),
(136, 16, 1, 0),
(137, 16, 2, 0),
(138, 16, 3, 0),
(139, 16, 4, 0),
(140, 16, 5, 0),
(141, 16, 6, 0),
(142, 16, 7, 0),
(143, 16, 8, 0),
(144, 16, 9, 0),
(145, 16, 10, 2),
(146, 16, 11, 0),
(147, 16, 12, 0),
(148, 16, 13, 0),
(149, 16, 14, 0),
(150, 22, 1, 2),
(151, 22, 2, 2),
(152, 22, 3, 0),
(153, 22, 4, 0),
(154, 22, 5, 0),
(155, 22, 6, 0),
(156, 22, 7, 0),
(157, 22, 8, 0),
(158, 22, 9, 0),
(159, 22, 10, 0),
(160, 22, 11, 0),
(161, 22, 12, 0),
(162, 22, 13, 0),
(163, 22, 14, 0),
(164, 67, 1, 0),
(165, 67, 2, 0),
(166, 67, 3, 0),
(167, 67, 4, 0),
(168, 67, 5, 0),
(169, 67, 6, 2),
(170, 67, 7, 0),
(171, 67, 8, 0),
(172, 67, 9, 0),
(173, 67, 10, 0),
(174, 67, 11, 0),
(175, 67, 12, 2),
(176, 67, 13, 2),
(177, 67, 14, 0),
(178, 68, 1, 0),
(179, 68, 2, 0),
(180, 68, 3, 0),
(181, 68, 4, 0),
(182, 68, 5, 0),
(183, 68, 6, 2),
(184, 68, 7, 0),
(185, 68, 8, 0),
(186, 68, 9, 0),
(187, 68, 10, 0),
(188, 68, 11, 2),
(189, 68, 12, 2),
(190, 68, 13, 2),
(191, 68, 14, 0),
(192, 6, 1, 0),
(193, 6, 2, 2),
(194, 6, 3, 0),
(195, 6, 4, 0),
(196, 6, 5, 0),
(197, 6, 6, 0),
(198, 6, 7, 0),
(199, 6, 8, 0),
(200, 6, 9, 0),
(201, 6, 10, 2),
(202, 6, 11, 2),
(203, 6, 12, 2),
(204, 6, 13, 0),
(205, 6, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_lecture_progress`
--

CREATE TABLE IF NOT EXISTS `user_lecture_progress` (
  `progress_id` int(10) NOT NULL AUTO_INCREMENT,
  `lecture_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `progress` int(3) NOT NULL,
  PRIMARY KEY (`progress_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_lecture_progress`
--

INSERT INTO `user_lecture_progress` (`progress_id`, `lecture_id`, `user_id`, `progress`) VALUES
(25, 4, 6, 100),
(27, 6, 6, 35),
(28, 2, 6, 100),
(29, 3, 6, 15),
(30, 3, 0, 0),
(31, 11, 67, 100),
(32, 12, 67, 100),
(33, 13, 67, 2),
(34, 14, 67, 73),
(35, 24, 67, 100),
(36, 7, 67, 0),
(37, 3, 68, 12),
(38, 4, 68, 0),
(39, 5, 68, 14),
(40, 6, 68, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
