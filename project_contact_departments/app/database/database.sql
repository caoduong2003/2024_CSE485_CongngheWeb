-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.35 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `project`;

-- Dumping structure for table project.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `DepartmentID` int NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Logo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Website` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ParentDepartmentId` int NOT NULL,
  PRIMARY KEY (`DepartmentID`),
  KEY `ParentDepartmentId` (`ParentDepartmentId`),
  CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`ParentDepartmentId`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project.departments: ~0 rows (approximately)
DELETE FROM `departments`;

-- Dumping structure for table project.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `EmployeeId` int NOT NULL AUTO_INCREMENT,
  `FullName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MobilePhone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Position` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Avatar` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepartmentId` int NOT NULL,
  PRIMARY KEY (`EmployeeId`),
  KEY `DepartmentId` (`DepartmentId`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`DepartmentId`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project.employees: ~0 rows (approximately)
DELETE FROM `employees`;

-- Dumping structure for table project.users
CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmployeeId` int DEFAULT NULL,
  KEY `EmployeeId` (`EmployeeId`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`EmployeeId`) REFERENCES `employees` (`EmployeeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project.users: ~0 rows (approximately)
DELETE FROM `users`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
