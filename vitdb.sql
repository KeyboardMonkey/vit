﻿-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2014 at 09:26 AM
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
  `full_name` varchar(40) NOT NULL,
  `tiny_intro` varchar(50) NOT NULL,
  `course_thumbnail` varchar(30) DEFAULT NULL,
  `category` varchar(20) NOT NULL,
  `difficulty_level` enum('beginner','intermediate','advanced') NOT NULL,
  `status` enum('yes','no') NOT NULL,
  `description` text NOT NULL,
  `points` int(10) NOT NULL DEFAULT '0',
  `developed_by` varchar(20) DEFAULT NULL,
  `learning_outcome` text,
  `target_audience` text,
  `section_title` varchar(30) DEFAULT NULL,
  `video_title` varchar(30) DEFAULT NULL,
  `video_file` varchar(70) DEFAULT NULL,
  `srt` varchar(70) DEFAULT NULL,
  `full_course_files_zip` varchar(70) DEFAULT NULL,
  `additional_file_title` varchar(30) DEFAULT NULL,
  `additional_file` varchar(70) DEFAULT NULL,
  `is_new` enum('yes','no') DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `full_name`, `tiny_intro`, `course_thumbnail`, `category`, `difficulty_level`, `status`, `description`, `points`, `developed_by`, `learning_outcome`, `target_audience`, `section_title`, `video_title`, `video_file`, `srt`, `full_course_files_zip`, `additional_file_title`, `additional_file`, `is_new`, `created_date`, `updated_date`) VALUES
(1, 'Build an Interactive Website', 'Build an Interactive Website', NULL, '6', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 10, 'Lynda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(2, 'Introduction to Programming', 'Introduction to Programming', NULL, '6', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 20, 'Tree House', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(3, 'How to Write a Business Plan', 'How to Write a Business Plan', NULL, '12', 'beginner', 'yes', 'hitestLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 30, 'New Boston', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(4, 'PHP & Stripe API', 'PHP & Stripe API', NULL, '2', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 200, 'Lynda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(5, 'Using PHP with MySQL', 'Using PHP with MySQL', NULL, '2', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 1000, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(6, 'WordPress Admin Settings', 'WordPress Admin Settings', NULL, '10', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 5000, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(7, 'Git Basics', 'Git Basics', NULL, '11', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 500, 'Alison', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(8, 'SEO Basics', 'SEO Basics', NULL, '14', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 55, 'Coursera', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(9, 'CSS Foundations', 'CSS Foundations', NULL, '8', 'intermediate', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(10, 'How to make a Favicon', 'How to make a Favicon', NULL, '13', 'intermediate', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Learnable', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(11, 'Soft Skills', 'Soft Skills', NULL, '12', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Udemy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:04:50', '2014-10-26 16:04:50'),
(12, 'Angular Js', 'Starting With Angula', NULL, '6', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'Lynda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-26 16:50:40', '2014-10-26 16:50:40'),
(13, 'Object-Oriented PHP Basics', 'Object-Oriented PHP Basics', NULL, '2', 'beginner', 'yes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'TTH', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-28 10:10:32', '2014-10-28 10:10:32'),
(14, 'Course XYZ', 'XYZ', NULL, '7', 'beginner', 'no', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas at leo eget nisl porta viverra. Ut laoreet, dui at tempus vestibulum, eros leo egestas neque, id adipiscing odio eros et lectus. Vivamus pretium lorem sit amet nulla. Praesent nec dolor at augue ultrices blandit. Quisque aliquet ultrices mi.Donec ac nibh. Phasellus sed sem sed mauris mattis laoreet. Ut fermentum augue ac pede. Duis vitae augue sed nulla lacinia tempor. Pellentesque non ante in magna tincidunt malesuada. Nunc eu m', 100, 'TTH', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n\n\n2. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s.\n\n\n3. when an unknown printer took a galley of type and scrambled it to make a type specimen book. \n\n\n4. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', '2014-10-28 10:11:40', '2014-10-28 10:11:40'),
(15, 'asfsadfasdfasdf', 'asdfasdfdsafsadf', NULL, '1', '', 'yes', 'afsadfsdafasdfsd', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-11-09 16:36:11', '2014-11-09 16:36:11'),
(16, 'asfsadfasdfasdf', 'asdfasdfdsafsadf', NULL, '1', '', 'yes', 'afsadfsdafasdfsd', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-11-09 16:39:00', '2014-11-09 16:39:00'),
(17, 'asfsadfasdfasdf', 'asdfasdfdsafsadf', NULL, '1', '', 'yes', 'afsadfsdafasdfsd', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-11-09 16:39:20', '2014-11-09 16:39:20');

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
-- Table structure for table `tracks`
--

CREATE TABLE IF NOT EXISTS `tracks` (
  `track_title` int(11) NOT NULL AUTO_INCREMENT,
  `tiny_intro` varchar(40) NOT NULL,
  `track_description` text NOT NULL,
  `status` enum('yes','no') NOT NULL,
  `track_points` int(10) NOT NULL,
  `difficulty_level` enum('beginner','intermediate','advanced') NOT NULL,
  `is_new` enum('yes','no') DEFAULT NULL,
  `additional_file_title` varchar(30) DEFAULT NULL,
  `additional_file` varchar(70) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`track_title`)
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
