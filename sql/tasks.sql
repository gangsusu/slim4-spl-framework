/*
Navicat MySQL Data Transfer

Source Server         : 192.168.10.10
Source Server Version : 50727
Source Host           : 192.168.10.10:3306
Source Database       : laravel5

Target Server Type    : MYSQL
Target Server Version : 50727
File Encoding         : 65001

Date: 2019-09-26 18:25:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `completed` int(10) DEFAULT NULL COMMENT '0未完成，1已完成',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES ('1', '吃饭', '1', '0');
INSERT INTO `tasks` VALUES ('2', '睡觉', '1', '0');
INSERT INTO `tasks` VALUES ('3', '打豆豆', '2', '0');
INSERT INTO `tasks` VALUES ('4', '下班后', '1', '0');
