/*
SQLyog Community v12.5.1 (64 bit)
MySQL - 5.7.21-log : Database - assignment3
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`assignment3` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `assignment3`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(15) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `instructor_id` int(11) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  FOREIGN KEY (`instructor_id`) REFERENCES instructor(`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `feedback` */

/*Table structure for table `instructor` */

DROP TABLE IF EXISTS `instructor`;

CREATE TABLE `instructor` (
  `instructor_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `instructor` */

/*Table structure for table `marks` */

DROP TABLE IF EXISTS `marks`;

CREATE TABLE `grades` (
  `student_id` int(11) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `mark` float NOT NULL,
  `remark_request` tinyint(1) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `ta_id` int(11) NOT NULL,
  FOREIGN KEY (`student_id`) REFERENCES student(`student_id`),
  FOREIGN KEY (`instructor_id`) REFERENCES instructor(`instructor_id`),
  FOREIGN KEY (`ta_id`) REFERENCES ta(`ta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `marks` */

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `ta_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`),
  FOREIGN KEY (`instructor_id`) REFERENCES instructor(`instructor_id`),
  FOREIGN KEY (`ta_id`) REFERENCES ta(`ta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `student` */

/*Table structure for table `ta` */

DROP TABLE IF EXISTS `ta`;

CREATE TABLE `ta` (
  `ta_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  PRIMARY KEY (`ta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ta` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
