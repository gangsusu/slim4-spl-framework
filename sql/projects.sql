/*
Navicat MySQL Data Transfer

Source Server         : 192.168.10.10
Source Server Version : 50727
Source Host           : 192.168.10.10:3306
Source Database       : laravel5

Target Server Type    : MYSQL
Target Server Version : 50727
File Encoding         : 65001

Date: 2019-09-26 18:25:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES ('1', '项目1', '1');
INSERT INTO `projects` VALUES ('2', '项目2', '1');
INSERT INTO `projects` VALUES ('3', '项目3', '2');
INSERT INTO `projects` VALUES ('4', '项目4', '2');
