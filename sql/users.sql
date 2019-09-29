/*
Navicat MySQL Data Transfer

Source Server         : 192.168.10.10
Source Server Version : 50727
Source Host           : 192.168.10.10:3306
Source Database       : laravel5

Target Server Type    : MYSQL
Target Server Version : 50727
File Encoding         : 65001

Date: 2019-09-26 18:25:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(12) NOT NULL COMMENT '用户名称',
  `password` varchar(80) NOT NULL COMMENT '密码',
  `last_token` text COMMENT '登陆时的token',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '用户状态 -1代表已删除 0代表正常 1代表冻结',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'splanzg13', '$2y$10$pgj8xKAC.aKljRhYQYkKCuXOrzTqbHdGO86HLBNtg0B37ggrpbmOC', null, '0', '2019-09-04 06:21:19', '2019-09-04 06:21:19');
INSERT INTO `users` VALUES ('2', 'splanzg12', '$2y$10$Ct/XrFAlgsugQHJVoCeTV.a0lEmpH4HGFJy86bfNyzzwVetdGAUnm', null, '0', '2019-09-04 06:39:36', '2019-09-04 06:39:36');
INSERT INTO `users` VALUES ('3', 'splanzg11', '$2y$10$IJ1N3LgTExV2U6owol0VzejnpZs0SEu6koo4Q4xppE5QonZUJhK/G', null, '0', '2019-09-04 06:39:41', '2019-09-04 06:39:41');
INSERT INTO `users` VALUES ('4', 'splanzg10', '$2y$10$A0UBmQUM0jus274Py2YbPudg1ReR/7wF1m12fgsOrCgVv.T4isKsu', null, '0', '2019-09-04 06:39:45', '2019-09-04 06:39:45');
INSERT INTO `users` VALUES ('5', 'splanzg14', '$2y$10$rltKyaDXkjkQuluAmwKyt.2vIY1So6Prq1cYYV7w8Vg/ZBGM3nZXW', null, '0', '2019-09-04 06:39:49', '2019-09-04 06:39:49');
INSERT INTO `users` VALUES ('6', 'splanzg15', '$2y$10$Kq6V1Y5XR5XOn2vKpP4Xjepx1nkCaXjN4genQKMHmBs5h5DWWoycu', null, '0', '2019-09-04 06:39:53', '2019-09-04 06:39:53');
INSERT INTO `users` VALUES ('7', 'splanzg16', '$2y$10$v4eG3hNnn7yQjWzO.o6vae7lSBNVYK.EIl4rI.8EOSfl2wrdGZ/12', null, '0', '2019-09-04 06:39:56', '2019-09-04 06:39:56');
INSERT INTO `users` VALUES ('8', 'splanzg17', '$2y$10$bX3Gr.drq2Gx3bBmQ5TeDOGBeBxdLqYYw/TcaAKRmVDuGkifkTXBG', null, '0', '2019-09-04 06:40:00', '2019-09-04 06:40:00');
INSERT INTO `users` VALUES ('9', 'splanzg18', '$2y$10$eUU7bCmf6g1U6CB.csI4qeoGJK71Z9ktI/SQ4wE7TfL1iyvyWUOEq', null, '0', '2019-09-04 06:40:03', '2019-09-04 06:40:03');
INSERT INTO `users` VALUES ('10', 'splanzg19', '$2y$10$xMZTZ4UigyDBJ1O9vSnGFuJHQc63WGXx0E7P7Apogf8cLgFmquP2y', null, '0', '2019-09-04 06:40:06', '2019-09-04 06:40:06');
