/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : barang

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 13/03/2022 22:19:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'shikadai nara', 'shikadai', 'shikadai', 'shikadai@gmail.com');
INSERT INTO `user` VALUES (2, 'sasuke uchiha', 'sasuke', 'sasuke', 'sasuke@gmail.con');
INSERT INTO `user` VALUES (3, 'sarada uchiha', 'sarada', 'sarada', 'sarada@gmail.com');
INSERT INTO `user` VALUES (4, 'mitsuki', 'misuki', 'mitsuki', 'mitsuki@gmail.com');

SET FOREIGN_KEY_CHECKS = 1;
